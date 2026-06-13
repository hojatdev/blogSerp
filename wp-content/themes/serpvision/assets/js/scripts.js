(() => {
    const navToggle = document.querySelector('[data-role="nav-toggle"]');
    const navDrawer = document.querySelector('[data-role="nav-drawer"]');
    const iconOpen = document.querySelector('[data-role="icon-open"]');
    const iconClose = document.querySelector('[data-role="icon-close"]');

    const setNavState = (isOpen) => {
      if (!navToggle || !navDrawer || !iconOpen || !iconClose) return;
      navDrawer.classList.toggle('open', isOpen);
      navToggle.setAttribute('aria-expanded', String(isOpen));
      navToggle.setAttribute('aria-label', isOpen ? 'Close menu' : 'Open menu');
      iconOpen.classList.toggle('hidden', isOpen);
      iconClose.classList.toggle('hidden', !isOpen);
    };

    navToggle?.addEventListener('click', () => {
      const isOpen = navToggle.getAttribute('aria-expanded') === 'true';
      setNavState(!isOpen);
    });

    document.addEventListener('keydown', (event) => {
      if (event.key === 'Escape') setNavState(false);
    });
})();

const faqTriggers = document.querySelectorAll('[data-action="toggle-faq"]');
faqTriggers.forEach((trigger) => {
	trigger.addEventListener('click', () => {
		const clickedIsOpen = trigger.getAttribute('aria-expanded') === 'true';

		const items = Array.from(faqTriggers).map((item) => {
			const panelId = item.getAttribute('aria-controls');
			const panel = document.getElementById(panelId);
			const icon = item.querySelector('[data-role="faq-icon"]');

			return {
				trigger: item,
				panel,
				icon,
				shouldOpen: item === trigger && !clickedIsOpen
			};
		}).filter((item) => item.panel);

		items.forEach((item) => {
			item.panel.style.height = item.panel.offsetHeight + 'px';
		});

		document.body.offsetHeight;

		items.forEach((item) => {
			item.trigger.setAttribute('aria-expanded', String(item.shouldOpen));
			item.panel.classList.toggle('is-open', item.shouldOpen);

			if (item.icon) {
				item.icon.classList.toggle('rotate-180', item.shouldOpen);
			}
		});

		requestAnimationFrame(() => {
			items.forEach((item) => {
				item.panel.style.height = item.shouldOpen
					? item.panel.scrollHeight + 'px'
				: '0px';
			});
		});
	});
});