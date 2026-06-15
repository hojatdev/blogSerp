<?php get_header(); ?>

<main id="main-content">

    <section class="bg-gradient-to-b from-indigo-50 via-white to-slate-50 py-16 sm:py-24 border-b border-slate-200/80">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="grid lg:grid-cols-2 gap-12 items-center">
				<div>
					<p class="inline-flex items-center rounded-full bg-white border border-slate-200 px-3 py-1 text-xs font-semibold text-indigo-700 mb-5 shadow-sm">About Serpvision</p>
					<h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-900 mb-6">SEO data should help teams decide, not slow them down.</h1>
					<p class="text-lg text-slate-500 leading-relaxed mb-8">Serpvision is built for SEO specialists, agencies, founders, content teams, and website owners who need a cleaner way to understand rankings, competitors, audits, and Search Console performance in one place.</p>
					<div class="flex flex-col sm:flex-row gap-3">
						<a href="<?php echo esc_url(serpvision_url('register')); ?>" class="inline-flex items-center justify-center bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl px-6 py-3 text-sm font-semibold transition-all active:scale-95 shadow-sm">Start a Project</a>
						<a href="/contact/" class="inline-flex items-center justify-center border border-slate-200 bg-white hover:bg-slate-50 text-slate-700 rounded-xl px-6 py-3 text-sm font-semibold transition-all active:scale-95">Contact us</a>
					</div>
				</div>
				<div class="bg-white border border-slate-200/80 rounded-3xl shadow-soft p-6">
					<div class="grid grid-cols-2 gap-4">
						<div class="rounded-2xl bg-slate-50 border border-slate-100 p-5">
							<p class="text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Focus</p>
							<p class="text-lg font-bold text-slate-900">Clear SEO decisions</p>
						</div>
						<div class="rounded-2xl bg-emerald-50 border border-emerald-100 p-5">
							<p class="text-xs font-semibold text-emerald-600 uppercase tracking-wider mb-2">Outcome</p>
							<p class="text-lg font-bold text-slate-900">Actionable insights</p>
						</div>
						<div class="rounded-2xl bg-indigo-50 border border-indigo-100 p-5">
							<p class="text-xs font-semibold text-indigo-600 uppercase tracking-wider mb-2">Users</p>
							<p class="text-lg font-bold text-slate-900">Teams and owners</p>
						</div>
						<div class="rounded-2xl bg-amber-50 border border-amber-100 p-5">
							<p class="text-xs font-semibold text-amber-600 uppercase tracking-wider mb-2">Design</p>
							<p class="text-lg font-bold text-slate-900">Calm by default</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <section class="py-16 sm:py-20">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="max-w-3xl mb-10">
				<h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Why we are building Serpvision</h2>
				<p class="text-slate-500 leading-relaxed">Most SEO tools show a lot of data. That is useful, but it can also make simple decisions harder. Serpvision focuses on the signals teams actually need: what changed, why it matters, and what to check next.</p>
			</div>
			<div class="grid md:grid-cols-3 gap-6">
				<article class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-sm">
					<h3 class="font-bold text-slate-900 mb-2">Less dashboard noise</h3>
					<p class="text-sm text-slate-500 leading-relaxed">Rank changes, audit issues, competitors, and Search Console metrics are organized so users can scan quickly.</p>
				</article>
				<article class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-sm">
					<h3 class="font-bold text-slate-900 mb-2">Built for mixed teams</h3>
					<p class="text-sm text-slate-500 leading-relaxed">Serpvision should be useful for SEO professionals and understandable for business owners who need the real picture.</p>
				</article>
				<article class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-sm">
					<h3 class="font-bold text-slate-900 mb-2">Action over reporting</h3>
					<p class="text-sm text-slate-500 leading-relaxed">Reports are only useful when they lead to the next decision. The product is designed around that idea.</p>
				</article>
			</div>
		</div>
	</section>
    <section class="bg-white border-y border-slate-200/80 py-16 sm:py-20">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="grid lg:grid-cols-2 gap-12">
				<div>
					<h2 class="text-3xl font-extrabold text-slate-900 mb-4">What Serpvision helps you see</h2>
					<p class="text-slate-500 leading-relaxed mb-6">A project can include keywords, competitors, audit results, Search Console data, activity history, and points usage. Serpvision brings those parts together without turning the dashboard into a maze.</p>
					<a href="/blog/" class="text-sm font-semibold text-indigo-600 hover:text-indigo-700">Read practical SEO guides →</a>
				</div>
				<div class="space-y-4">
					<div class="flex gap-3">
						<span class="w-6 h-6 rounded-full bg-indigo-100 text-indigo-700 flex items-center justify-center text-xs font-bold">1</span>
						<p class="text-sm text-slate-600">Create and manage SEO projects with their own domain, settings, keywords, competitors, and activity.</p>
					</div>
					<div class="flex gap-3">
						<span class="w-6 h-6 rounded-full bg-indigo-100 text-indigo-700 flex items-center justify-center text-xs font-bold">2</span>
						<p class="text-sm text-slate-600">Track rankings by search engine, location, device, and time range.</p>
					</div>
					<div class="flex gap-3">
						<span class="w-6 h-6 rounded-full bg-indigo-100 text-indigo-700 flex items-center justify-center text-xs font-bold">3</span>
						<p class="text-sm text-slate-600">Connect Search Console and compare real performance with rank and audit context.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
    <section class="py-16">
		<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="bg-indigo-600 rounded-3xl p-8 sm:p-12 text-center">
				<h2 class="text-3xl font-extrabold text-white mb-3">Want to see where Serpvision is going?</h2>
				<p class="text-indigo-100 mb-7">Talk to us about your SEO workflow, agency process, or reporting challenges.</p>
				<a href="/contact/" class="inline-flex bg-white text-indigo-700 hover:bg-slate-50 rounded-xl px-6 py-3 text-sm font-bold transition-all active:scale-95">Contact the team</a>
			</div>
		</div>
	</section>
  </main>

<?php get_footer(); ?>
