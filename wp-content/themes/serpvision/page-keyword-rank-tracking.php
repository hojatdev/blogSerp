<?php get_header(); ?>
<main>

	<!-- Hero -->
	<section class="relative overflow-hidden bg-gradient-to-b from-indigo-50 via-indigo-50/40 to-white px-4 py-20 sm:py-28">
		<div class="absolute inset-0 dashboard-grid-bg opacity-70" aria-hidden="true"></div>
		<div class="relative mx-auto max-w-4xl text-center">
			<div class="inline-flex items-center gap-2 py-1.5 text-xs font-semibold text-slate-600 mb-5">
				<span class="w-1.5 h-1.5 bg-emerald-500 rounded-full animate-pulse"></span>
				Keyword rank tracking for SEO decisions
			</div>
			<h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-tight tracking-tight mb-6">
				Track every keyword.<br class="hidden sm:block"> Act on the right ones.
			</h1>
			<p class="text-lg text-slate-500 max-w-2xl mx-auto mb-10 leading-relaxed">
				Serpvision monitors your keyword positions by country, device, and search engine — then connects position changes to pages, competitors, audits, and Search Console data so you always know what to do next.
			</p>
			<div class="flex flex-col sm:flex-row items-center justify-center gap-3 mb-6">
				<a href="<?php echo esc_url(serpvision_url('register')); ?>" class="w-full sm:w-auto bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl px-8 py-4 text-base font-semibold transition-all duration-200 active:scale-95 shadow-lg shadow-indigo-200">Start tracking keywords</a>
				<a href="<?php echo esc_url(home_url('/rank-tracking/')); ?>" class="w-full sm:w-auto border border-slate-200 bg-white hover:bg-slate-50 text-slate-700 rounded-xl px-8 py-4 text-base font-semibold transition-all duration-200 active:scale-95">See how it works</a>
			</div>
			<p class="text-xs text-slate-400">No credit card required. Usage-based pricing. Start with the keywords that matter most.</p>
		</div>
	</section>

	<!-- Stats bar -->
	<section class="py-8 bg-white border-y border-slate-200/70">
		<div class="max-w-6xl mx-auto px-4 grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
			<div class="flex flex-col items-center">
				<div class="w-10 h-10 rounded-xl bg-slate-50 border border-slate-100 flex items-center justify-center mb-3">
					<svg class="w-5 h-5 text-slate-900" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m6.115 5.19.319 1.913A6 6 0 0 0 8.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 0 0 2.288-4.042 1.087 1.087 0 0 0-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 0 1-.98-.314l-.295-.295a1.125 1.125 0 0 1 0-1.591l.13-.132a1.125 1.125 0 0 1 1.3-.21l.603.302a.809.809 0 0 0 1.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 0 0 1.528-1.732l.146-.292M6.115 5.19A9 9 0 1 0 17.18 4.64M6.115 5.19A8.965 8.965 0 0 1 12 3c1.929 0 3.716.607 5.18 1.64" /></svg>
				</div>
				<p class="text-sm font-semibold text-slate-900">Any country</p>
				<p class="text-xs text-slate-500 mt-1">Local or global markets</p>
			</div>
			<div class="flex flex-col items-center">
				<div class="w-10 h-10 rounded-xl bg-slate-50 border border-slate-100 flex items-center justify-center mb-3">
					<svg class="w-5 h-5 text-slate-900" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" /></svg>
				</div>
				<p class="text-sm font-semibold text-slate-900">Mobile &amp; desktop</p>
				<p class="text-xs text-slate-500 mt-1">Separate device views</p>
			</div>
			<div class="flex flex-col items-center">
				<div class="w-10 h-10 rounded-xl bg-slate-50 border border-slate-100 flex items-center justify-center mb-3">
					<svg class="w-5 h-5 text-slate-900" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.286-4.286a11.948 11.948 0 0 1 4.306 6.43l.776 2.898m0 0 3.182-5.511m-3.182 5.51-5.511-3.181" /></svg>
				</div>
				<p class="text-sm font-semibold text-slate-900">Ranking history</p>
				<p class="text-xs text-slate-500 mt-1">Trend, not just today's number</p>
			</div>
			<div class="flex flex-col items-center">
				<div class="w-10 h-10 rounded-xl bg-slate-50 border border-slate-100 flex items-center justify-center mb-3">
					<svg class="w-5 h-5 text-slate-900" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" /></svg>
				</div>
				<p class="text-sm font-semibold text-slate-900">Competitor positions</p>
				<p class="text-xs text-slate-500 mt-1">Side-by-side comparison</p>
			</div>
		</div>
	</section>

	<!-- Features -->
	<section class="py-20 px-4 bg-slate-50">
		<div class="max-w-6xl mx-auto">
			<div class="text-center mb-14">
				<h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">What keyword rank tracking gives you</h2>
				<p class="text-lg text-slate-500 max-w-2xl mx-auto">Rankings are only useful when they connect to action. Serpvision pairs position data with the context you need to decide what to fix or improve next.</p>
			</div>
			<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
				<div class="flex gap-4">
					<div class="w-11 h-11 shrink-0 rounded-xl bg-indigo-100 flex items-center justify-center">
						<svg class="w-5 h-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" /></svg>
					</div>
					<div><h3 class="font-semibold text-slate-900 mb-1">Keyword groups and tags</h3><p class="text-sm text-slate-500 leading-relaxed">Organize tracked terms by page, topic, campaign, or client so you can filter and report on exactly the subset that matters for each decision.</p></div>
				</div>
				<div class="flex gap-4">
					<div class="w-11 h-11 shrink-0 rounded-xl bg-emerald-100 flex items-center justify-center">
						<svg class="w-5 h-5 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l4.286-4.286a11.948 11.948 0 0 1 4.306 6.43l.776 2.898m0 0 3.182-5.511m-3.182 5.51-5.511-3.181" /></svg>
					</div>
					<div><h3 class="font-semibold text-slate-900 mb-1">Drop and gain detection</h3><p class="text-sm text-slate-500 leading-relaxed">Filter significant movements quickly — drops, gains, keywords near page one, and positions lost from the top 10 — without scanning every row manually.</p></div>
				</div>
				<div class="flex gap-4">
					<div class="w-11 h-11 shrink-0 rounded-xl bg-amber-100 flex items-center justify-center">
						<svg class="w-5 h-5 text-amber-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" /></svg>
					</div>
					<div><h3 class="font-semibold text-slate-900 mb-1">Ranking page mapping</h3><p class="text-sm text-slate-500 leading-relaxed">See which URL is ranking for each keyword. Spot unexpected page swaps, cannibalization signals, or cases where the wrong page is capturing a query.</p></div>
				</div>
				<div class="flex gap-4">
					<div class="w-11 h-11 shrink-0 rounded-xl bg-purple-100 flex items-center justify-center">
						<svg class="w-5 h-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" /></svg>
					</div>
					<div><h3 class="font-semibold text-slate-900 mb-1">Search Console context</h3><p class="text-sm text-slate-500 leading-relaxed">Connect tracked keyword positions with clicks, impressions, CTR, and average position from Search Console to understand the real traffic impact of any movement.</p></div>
				</div>
				<div class="flex gap-4">
					<div class="w-11 h-11 shrink-0 rounded-xl bg-rose-100 flex items-center justify-center">
						<svg class="w-5 h-5 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" /></svg>
					</div>
					<div><h3 class="font-semibold text-slate-900 mb-1">Competitor positions inline</h3><p class="text-sm text-slate-500 leading-relaxed">Add competitor domains and see their keyword positions alongside yours in the same table. Identify gaps, catch when they overtake you, and prioritize improvements.</p></div>
				</div>
				<div class="flex gap-4">
					<div class="w-11 h-11 shrink-0 rounded-xl bg-cyan-100 flex items-center justify-center">
						<svg class="w-5 h-5 text-cyan-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" /></svg>
					</div>
					<div><h3 class="font-semibold text-slate-900 mb-1">Usage-based pricing</h3><p class="text-sm text-slate-500 leading-relaxed">Track priority keywords daily, monitor lower-priority groups less often, and keep monthly cost aligned with actual workflow — no rigid tier forcing you to overpay.</p></div>
				</div>
			</div>
		</div>
	</section>

	<!-- CTA -->
	<section class="py-20 px-4 bg-white">
		<div class="max-w-5xl mx-auto">
			<div class="rounded-2xl border border-indigo-200/80 bg-white p-8 shadow-xl shadow-indigo-900/[0.04] lg:p-12 relative overflow-hidden">
				<div class="pointer-events-none absolute inset-0 bg-gradient-to-br from-indigo-50/70 via-white to-cyan-50/40" aria-hidden="true"></div>
				<div class="relative text-center max-w-2xl mx-auto">
					<p class="text-xs font-semibold uppercase tracking-widest text-indigo-600 mb-3">Ready to start?</p>
					<h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Start with the keywords that drive your business.</h2>
					<p class="text-lg text-slate-500 mb-8 leading-relaxed">Create a project, add your first keywords, and see rank movement alongside the context that helps you act on it.</p>
					<div class="flex flex-col sm:flex-row items-center justify-center gap-3">
						<a href="<?php echo esc_url(serpvision_url('register')); ?>" class="inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl px-8 py-3.5 text-base font-bold transition-all duration-200 active:scale-95 shadow-lg shadow-indigo-200">Start tracking keywords <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></a>
						<a href="<?php echo esc_url(home_url('/pricing/')); ?>" class="inline-flex items-center gap-2 border border-slate-200 bg-white hover:bg-slate-50 text-slate-700 rounded-xl px-8 py-3.5 text-base font-semibold transition-all duration-200">Estimate cost</a>
					</div>
					<p class="text-xs text-slate-400 mt-5">No credit card required. Usage-based pricing.</p>
				</div>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>