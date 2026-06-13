<?php get_header(); ?>

<main id="main-content">

	<section class="bg-gradient-to-b from-indigo-50 via-white to-slate-50 py-16 sm:py-24 border-b border-slate-200/80">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="max-w-3xl mx-auto text-center">
				<p class="inline-flex items-center rounded-full bg-white border border-slate-200 px-3 py-1 text-xs font-semibold text-indigo-700 mb-5 shadow-sm">Usage-based pricing</p>
				<h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-900 mb-6">SEO monitoring that costs what it should.</h1>
				<p class="text-lg text-slate-500 leading-relaxed mb-8">No rigid plans. No oversized tiers. Estimate the cost of tracking keywords, monitoring competitors, scanning pages, and connecting Search Console — then pay for the usage your projects actually need.</p>
				<div class="flex flex-col sm:flex-row items-center justify-center gap-3">
					<a href="#calculator" class="w-full sm:w-auto inline-flex items-center justify-center bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl px-6 py-3 text-sm font-semibold transition-all active:scale-95 shadow-sm">Estimate monthly cost</a>
					<a href="<?php echo esc_url(serpvision_url('register')); ?>" class="w-full sm:w-auto inline-flex items-center justify-center border border-slate-200 bg-white hover:bg-slate-50 text-slate-700 rounded-xl px-6 py-3 text-sm font-semibold transition-all active:scale-95">Start a Project</a>
				</div>
				<p class="text-xs text-slate-400 mt-5">Calculator values are estimates and can be adjusted to match your final billing rules.</p>
			</div>
		</div>
	</section>


	<section id="calculator" class="py-16 sm:py-20 px-4">
		<div class="max-w-5xl mx-auto">
			<div class="text-center mb-12">
				<h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Estimate your monthly cost</h2>
				<p class="text-lg text-slate-500 max-w-2xl mx-auto">Adjust your SEO monitoring setup. Serpvision calculates the estimated monthly cost from the number of scans, competitors, page audits, and connected Search Console sites.</p>
			</div>

			<div class="grid lg:grid-cols-[1.05fr_.95fr] gap-8 items-start">
				<section class="bg-white border border-slate-200/80 rounded-3xl shadow-soft p-6 sm:p-8" aria-labelledby="cost-calculator-heading">
					<div class="flex items-start justify-between gap-4 mb-8">
						<div>
							<h3 id="cost-calculator-heading" class="text-xl font-bold text-slate-900">Pricing calculator</h3>
							<p class="text-sm text-slate-500 mt-1">Built around your actual monitoring volume.</p>
						</div>
						<span class="hidden sm:inline-flex items-center rounded-full bg-emerald-50 text-emerald-700 border border-emerald-100 px-3 py-1 text-xs font-semibold">Unlimited projects</span>
					</div>

					<div class="space-y-8" data-role="pricing-calculator">
						<div>
							<div class="flex items-center justify-between gap-4 mb-3">
								<label for="keywords" class="text-sm font-semibold text-slate-800">Keywords to track</label>
								<output id="keywords-output" class="text-lg font-bold tabular-nums text-indigo-600">100</output>
							</div>
							<input id="keywords" data-role="keywords" type="range" min="1" max="1000" step="1" value="100" class="w-full" />
							<div class="flex justify-between text-xs text-slate-400 mt-2"><span>1</span><span>1,000</span></div>
						</div>

						<div class="grid sm:grid-cols-3 gap-5">
							<div>
								<label for="frequency" class="block text-sm font-semibold text-slate-800 mb-2">Frequency</label>
								<select id="frequency" data-role="frequency" class="w-full h-10 rounded-xl border border-slate-200 bg-white px-3 text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-500/30 focus:border-indigo-500">
									<option value="30">Daily</option>
									<option value="15" selected>Every 2 days</option>
									<option value="10">Every 3 days</option>
									<option value="4.35">Weekly</option>
									<option value="2.15">Bi-weekly</option>
									<option value="1">Monthly</option>
								</select>
							</div>
							<fieldset>
								<legend class="block text-sm font-semibold text-slate-800 mb-2">Devices</legend>
								<div class="space-y-2">
									<label class="flex items-center gap-2 text-sm text-slate-600">
										<input data-role="device" type="checkbox" value="desktop" checked class="rounded border-slate-300 text-indigo-600 focus:ring-indigo-500" /> 
										Desktop</label>
									<label class="flex items-center gap-2 text-sm text-slate-600">
										<input data-role="device" type="checkbox" value="mobile" checked class="rounded border-slate-300 text-indigo-600 focus:ring-indigo-500" /> 
										Mobile</label>
								</div>
							</fieldset>
							<fieldset>
								<legend class="block text-sm font-semibold text-slate-800 mb-2">Search engines</legend>
								<div class="space-y-2">
									<label class="flex items-center gap-2 text-sm text-slate-600">
										<input data-role="engine" type="checkbox" value="google" checked class="rounded border-slate-300 text-indigo-600 focus:ring-indigo-500" /> 
										Google</label>
									<label class="flex items-center gap-2 text-sm text-slate-600">
										<input data-role="engine" type="checkbox" value="bing" class="rounded border-slate-300 text-indigo-600 focus:ring-indigo-500" /> 
										Bing</label>
								</div>
							</fieldset>
						</div>

						<div class="rounded-2xl bg-slate-50 border border-slate-100 px-4 py-3">
							<p id="keyword-formula" class="text-[13px] sm:text-sm tabular-nums text-slate-500">100 keywords × 2 devices × 1 engine × 15 scans/mo × $0.005 = 
								<span class="font-semibold text-indigo-600">$15.00/mo</span>
							</p>
						</div>

						<div class="border-t border-slate-100 pt-8">
							<p class="text-xs font-semibold uppercase tracking-widest text-indigo-600/70 mb-5">Extras</p>
							<div class="grid sm:grid-cols-3 gap-5">
								<div>
									<div class="flex items-center flex-col justify-between gap-2 mb-2">
										<label for="competitors" class="text-sm font-semibold text-slate-800">Competitors</label>
										<span id="competitor-cost" class="text-sm text-slate-700">$1.00/mo</span>
									</div>
									<input id="competitors" data-role="competitors" type="number" min="0" max="100" value="2" class="w-full h-10 rounded-xl border border-slate-200 bg-white px-3 text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-500/30 focus:border-indigo-500" />
									<p class="text-xs text-slate-400 mt-2">$0.50 per competitor / month</p>
								</div>
								<div>
									<div class="flex items-center flex-col justify-between gap-2 mb-2">
										<label for="pages" class="text-sm font-semibold text-slate-800">Page scans</label>
										<span id="page-cost" class="text-sm text-slate-700">$0.00/mo</span>
									</div>
									<input id="pages" data-role="pages" type="number" min="0" max="100000" value="0" class="w-full h-10 rounded-xl border border-slate-200 bg-white px-3 text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-500/30 focus:border-indigo-500" />
									<p class="text-xs text-slate-400 mt-2">$0.007 per scanned page</p>
								</div>
								<div>
									<div class="flex items-center flex-col justify-between gap-2 mb-2">
										<label for="gsc-sites" class="text-sm font-semibold text-slate-800">GSC sites</label>
										<span id="gsc-cost" class="text-sm text-slate-700">$0.50/mo</span>
									</div>
									<input id="gsc-sites" data-role="gscSites" type="number" min="0" max="100" value="1" class="w-full h-10 rounded-xl border border-slate-200 bg-white px-3 text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-500/30 focus:border-indigo-500" />
									<p class="text-xs text-slate-400 mt-2">$0.50 per site / month</p>
								</div>
							</div>
						</div>
					</div>
				</section>

				<aside class="lg:sticky lg:top-24 bg-white border border-indigo-200/80 rounded-3xl shadow-xl shadow-indigo-900/[0.04] overflow-hidden" aria-label="Estimated monthly cost summary">
					<div class="relative p-7 sm:p-8 bg-gradient-to-br from-indigo-50 via-white to-cyan-50/50">
						<p class="text-sm font-semibold uppercase tracking-wide text-slate-400 text-center">Estimated monthly cost</p>
						<p id="total-cost" class="mt-3 text-center text-5xl sm:text-6xl font-extrabold tabular-nums tracking-tight text-indigo-600">$16.50</p>
						<div class="mt-4 flex flex-wrap items-center justify-center gap-2 text-sm text-slate-400">
							<span>Usage-based</span>
							<span class="text-slate-200">·</span>
							<span class="font-medium text-emerald-600">No forced tiers</span>
						</div>
					</div>
					<div class="p-6 sm:p-8 space-y-4">
						<div class="flex items-center justify-between text-sm"><span class="text-slate-500">Keyword scans</span><strong id="summary-keywords" class="text-slate-900 tabular-nums">$15.00</strong></div>
						<div class="flex items-center justify-between text-sm"><span class="text-slate-500">Competitors</span><strong id="summary-competitors" class="text-slate-900 tabular-nums">$1.00</strong></div>
						<div class="flex items-center justify-between text-sm"><span class="text-slate-500">Page scans</span><strong id="summary-pages" class="text-slate-900 tabular-nums">$0.00</strong></div>
						<div class="flex items-center justify-between text-sm"><span class="text-slate-500">Search Console</span><strong id="summary-gsc" class="text-slate-900 tabular-nums">$0.50</strong></div>
						<div class="border-t border-slate-100 pt-5">
							<a href="/register/" class="w-full inline-flex items-center justify-center bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl px-6 py-3 text-sm font-semibold transition-all active:scale-95 shadow-sm">Start tracking</a>
							<p class="text-center text-xs text-slate-400 mt-3">Start small. Scale when your monitoring needs grow.</p>
						</div>
					</div>
				</aside>
			</div>
		</div>
	</section>

	<section class="py-16 sm:py-20 bg-white border-y border-slate-200/80">
		<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="text-center mb-12">
				<h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Transparent rates by feature</h2>
				<p class="text-lg text-slate-500 max-w-2xl mx-auto">Each line item maps to a real SEO monitoring activity. You can keep the workflow lightweight or add deeper monitoring when a project needs it.</p>
			</div>

			<div class="grid lg:grid-cols-2 gap-6">
				<article class="bg-white border border-slate-200/80 rounded-2xl p-6 sm:p-8 shadow-sm">
					<div class="flex items-center gap-3 mb-6">
						<div class="w-11 h-11 rounded-xl bg-indigo-100 text-indigo-600 flex items-center justify-center border border-indigo-200/70">
							<svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125Z"/></svg>
						</div>
						<h3 class="text-xl font-bold text-slate-900">Monitoring</h3>
					</div>
					<div class="divide-y divide-slate-100">
						<div class="flex items-center justify-between gap-6 py-4">
							<div><p class="font-semibold text-slate-900">Keyword tracking</p><p class="text-sm text-slate-500 mt-1">Rank checks by frequency, device, and search engine.</p></div>
							<p class="shrink-0 text-right text-lg font-extrabold text-indigo-600">$0.005<span class="block text-xs font-medium text-slate-400">/ scan</span></p>
						</div>
						<div class="flex items-center justify-between gap-6 py-4">
							<div><p class="font-semibold text-slate-900">Competitor monitoring</p><p class="text-sm text-slate-500 mt-1">Track competitor visibility on selected keywords.</p></div>
							<p class="shrink-0 text-right text-lg font-extrabold text-slate-900">$0.50<span class="block text-xs font-medium text-slate-400">/ competitor / mo</span></p>
						</div>
						<div class="flex items-center justify-between gap-6 py-4">
							<div><p class="font-semibold text-slate-900">Page scan</p><p class="text-sm text-slate-500 mt-1">Technical health checks for pages and crawlable URLs.</p></div>
							<p class="shrink-0 text-right text-lg font-extrabold text-slate-900">$0.007<span class="block text-xs font-medium text-slate-400">/ page</span></p>
						</div>
					</div>
				</article>

				<article class="bg-white border border-slate-200/80 rounded-2xl p-6 sm:p-8 shadow-sm">
					<div class="flex items-center gap-3 mb-6">
						<div class="w-11 h-11 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center border border-emerald-200/70">
							<svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.455 2.456L21.75 6l-1.036.259a3.375 3.375 0 00-2.455 2.456Z"/></svg>
						</div>
						<div>
							<h3 class="text-xl font-bold text-slate-900">Intelligence</h3>
							<p class="text-sm text-slate-500">Optional add-ons</p>
						</div>
					</div>
					<div class="divide-y divide-slate-100">
						<div class="flex items-center justify-between gap-6 py-4">
							<div><p class="font-semibold text-slate-900">Search Console insights</p><p class="text-sm text-slate-500 mt-1">Clicks, impressions, CTR, and query performance.</p></div>
							<p class="shrink-0 text-right text-lg font-extrabold text-slate-900">$0.50<span class="block text-xs font-medium text-slate-400">/ site / mo</span></p>
						</div>
						<div class="flex items-center justify-between gap-6 py-4">
							<div><p class="font-semibold text-slate-900">AI assistant</p><p class="text-sm text-slate-500 mt-1">Actionable recommendations from ranking and audit data.</p></div>
							<span class="shrink-0 inline-flex items-center rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600">Coming soon</span>
						</div>
						<div class="flex items-center justify-between gap-6 py-4">
							<div><p class="font-semibold text-slate-900">Project management</p><p class="text-sm text-slate-500 mt-1">Create separate SEO projects for clients, websites, or teams.</p></div>
							<span class="shrink-0 inline-flex items-center rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700">Included</span>
						</div>
					</div>
				</article>
			</div>
		</div>
	</section>


	<section class="py-16 sm:py-20">
		<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="grid lg:grid-cols-3 gap-6">
				<article class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-sm">
					<div class="w-10 h-10 rounded-xl bg-indigo-100 text-indigo-600 flex items-center justify-center mb-4"><svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/></svg></div>
					<h3 class="font-bold text-slate-900 mb-2">No paying for unused capacity</h3>
					<p class="text-sm text-slate-500 leading-relaxed">A small project should not pay like an enterprise account. Usage-based pricing lets each project grow at its own pace.</p>
				</article>
				<article class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-sm">
					<div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center mb-4"><svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
					<h3 class="font-bold text-slate-900 mb-2">Clear enough for clients</h3>
					<p class="text-sm text-slate-500 leading-relaxed">Agencies can explain exactly what is being monitored and why it costs what it costs, without plan-limit confusion.</p>
				</article>
				<article class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-sm">
					<div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-600 flex items-center justify-center mb-4"><svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div>
					<h3 class="font-bold text-slate-900 mb-2">Flexible by default</h3>
					<p class="text-sm text-slate-500 leading-relaxed">Track one important site or manage many client projects. You can add more keywords, engines, or audits when the work requires it.</p>
				</article>
			</div>
		</div>
	</section>

	<section class="py-16 sm:py-20 bg-white border-y border-slate-200/80">
		<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="text-center mb-10">
				<h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Pricing questions</h2>
				<p class="text-slate-500">Simple answers before you start tracking.</p>
			</div>
			<div class="space-y-3" data-role="faq-list">
				<div class="faq-item bg-slate-50 border border-slate-200/80 rounded-2xl overflow-hidden" data-role="faq-item">
					<button class="w-full flex items-center justify-between px-5 py-4 text-left" data-action="toggle-faq" aria-expanded="false"><span class="font-semibold text-slate-900 text-sm pr-4">How does Serpvision pricing work?</span><svg class="faq-icon w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg></button>
					<div class="faq-body" data-role="faq-body"><p class="px-5 pb-4 text-sm text-slate-500 leading-relaxed">Your cost is based on usage: keyword scans, selected devices and engines, competitor monitoring, page scans, and connected Search Console sites. The calculator shows the estimate before you start.</p></div>
				</div>
				<div class="faq-item bg-slate-50 border border-slate-200/80 rounded-2xl overflow-hidden" data-role="faq-item">
					<button class="w-full flex items-center justify-between px-5 py-4 text-left" data-action="toggle-faq" aria-expanded="false"><span class="font-semibold text-slate-900 text-sm pr-4">Do I have to choose a fixed plan?</span><svg class="faq-icon w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg></button>
					<div class="faq-body" data-role="faq-body"><p class="px-5 pb-4 text-sm text-slate-500 leading-relaxed">No. Serpvision avoids rigid tiers so you do not need to upgrade just to unlock a normal workflow. Add the monitoring volume you need and adjust later.</p></div>
				</div>
				<div class="faq-item bg-slate-50 border border-slate-200/80 rounded-2xl overflow-hidden" data-role="faq-item">
					<button class="w-full flex items-center justify-between px-5 py-4 text-left" data-action="toggle-faq" aria-expanded="false"><span class="font-semibold text-slate-900 text-sm pr-4">Is Search Console required?</span><svg class="faq-icon w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg></button>
					<div class="faq-body" data-role="faq-body"><p class="px-5 pb-4 text-sm text-slate-500 leading-relaxed">No. Rank tracking and audits can work without Search Console. Connecting it adds click, impression, CTR, and query context to your SEO decisions.</p></div>
				</div>
				<div class="faq-item bg-slate-50 border border-slate-200/80 rounded-2xl overflow-hidden" data-role="faq-item">
					<button class="w-full flex items-center justify-between px-5 py-4 text-left" data-action="toggle-faq" aria-expanded="false"><span class="font-semibold text-slate-900 text-sm pr-4">Can I use this for client projects?</span><svg class="faq-icon w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg></button>
					<div class="faq-body" data-role="faq-body"><p class="px-5 pb-4 text-sm text-slate-500 leading-relaxed">Yes. You can create separate projects for clients, sites, or campaigns. Each project can have its own keywords, competitors, audits, and Search Console connections.</p></div>
				</div>
			</div>
		</div>
	</section>

	<section class="py-16 px-4">
		<div class="max-w-4xl mx-auto">
			<div class="bg-indigo-600 rounded-3xl p-8 sm:p-12 text-center">
				<h2 class="text-3xl sm:text-4xl font-extrabold text-white mb-3">Start with the SEO monitoring you actually need.</h2>
				<p class="text-indigo-100 mb-7 max-w-2xl mx-auto">Create a project, add your first keywords, and scale your usage only when your SEO work calls for it.</p>
				<div class="flex flex-col sm:flex-row items-center justify-center gap-3">
					<a href="/register/" class="inline-flex items-center justify-center bg-white text-indigo-700 hover:bg-slate-50 rounded-xl px-6 py-3 text-sm font-bold transition-all active:scale-95">Start tracking</a>
					<a href="/contact/" class="inline-flex items-center justify-center border border-indigo-400 text-indigo-50 hover:text-white hover:border-indigo-200 rounded-xl px-6 py-3 text-sm font-semibold transition-all active:scale-95">Talk to us</a>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>

<script>
	(() => {
		const mobileButton = document.querySelector('[data-action="toggle-mobile-menu"]');
		const drawer = document.querySelector('[data-role="mobile-drawer"]');
		const openIcon = document.querySelector('[data-role="icon-open"]');
		const closeIcon = document.querySelector('[data-role="icon-close"]');
		let isOpen = false;

		const setMobileMenu = (open) => {
			isOpen = open;
			drawer.classList.toggle('is-open', open);
			mobileButton.setAttribute('aria-expanded', String(open));
			openIcon.classList.toggle('hidden', open);
			closeIcon.classList.toggle('hidden', !open);
		};

		mobileButton?.addEventListener('click', () => setMobileMenu(!isOpen));
		document.addEventListener('click', (event) => {
			if (!isOpen || mobileButton.contains(event.target) || drawer.contains(event.target)) return;
			setMobileMenu(false);
		});
		document.addEventListener('keydown', (event) => {
			if (event.key === 'Escape') setMobileMenu(false);
		});
	})();

	(() => {
		const money = (value) => `$${Number(value).toFixed(2)}`;
		const calculator = document.querySelector('[data-role="pricing-calculator"]');
		if (!calculator) return;

		const keywords = calculator.querySelector('[data-role="keywords"]');
		const frequency = calculator.querySelector('[data-role="frequency"]');
		const competitors = calculator.querySelector('[data-role="competitors"]');
		const pages = calculator.querySelector('[data-role="pages"]');
		const gscSites = calculator.querySelector('[data-role="gscSites"]');
		const devices = Array.from(calculator.querySelectorAll('[data-role="device"]'));
		const engines = Array.from(calculator.querySelectorAll('[data-role="engine"]'));

		const outputKeywords = document.getElementById('keywords-output');
		const keywordFormula = document.getElementById('keyword-formula');
		const competitorCost = document.getElementById('competitor-cost');
		const pageCost = document.getElementById('page-cost');
		const gscCost = document.getElementById('gsc-cost');
		const totalCost = document.getElementById('total-cost');
		const summaryKeywords = document.getElementById('summary-keywords');
		const summaryCompetitors = document.getElementById('summary-competitors');
		const summaryPages = document.getElementById('summary-pages');
		const summaryGsc = document.getElementById('summary-gsc');

		const clampNumber = (input, min, max) => {
			const value = Number(input.value || 0);
			return Math.min(Math.max(value, min), max);
		};

		const update = () => {
			const keywordCount = clampNumber(keywords, 1, 1000);
			const monthlyScans = Number(frequency.value || 0);
			const deviceCount = Math.max(devices.filter((item) => item.checked).length, 1);
			const engineCount = Math.max(engines.filter((item) => item.checked).length, 1);
			const competitorCount = clampNumber(competitors, 0, 100);
			const pageCount = clampNumber(pages, 0, 100000);
			const gscCount = clampNumber(gscSites, 0, 100);

			const keywordCost = keywordCount * deviceCount * engineCount * monthlyScans * 0.005;
			const competitorsCostValue = competitorCount * 0.50;
			const pageCostValue = pageCount * 0.007;
			const gscCostValue = gscCount * 0.50;
			const total = keywordCost + competitorsCostValue + pageCostValue + gscCostValue;

			outputKeywords.textContent = keywordCount.toLocaleString();
			keywordFormula.innerHTML = `${keywordCount.toLocaleString()} keywords × ${deviceCount} ${deviceCount === 1 ? 'device' : 'devices'} × ${engineCount} ${engineCount === 1 ? 'engine' : 'engines'} × ${monthlyScans.toFixed(monthlyScans % 1 ? 1 : 0)} scans/mo × $0.005 = <span class="font-semibold text-indigo-600">${money(keywordCost)}/mo</span>`;

			competitorCost.textContent = `${money(competitorsCostValue)}/mo`;
			pageCost.textContent = `${money(pageCostValue)}/mo`;
			gscCost.textContent = `${money(gscCostValue)}/mo`;
			totalCost.textContent = money(total);
			summaryKeywords.textContent = money(keywordCost);
			summaryCompetitors.textContent = money(competitorsCostValue);
			summaryPages.textContent = money(pageCostValue);
			summaryGsc.textContent = money(gscCostValue);
		};

		[keywords, frequency, competitors, pages, gscSites, ...devices, ...engines].forEach((element) => {
			element.addEventListener('input', update);
			element.addEventListener('change', update);
		});

		update();
	})();

	(() => {
		const items = document.querySelectorAll('[data-role="faq-item"]');
		items.forEach((item) => {
			const button = item.querySelector('[data-action="toggle-faq"]');
			const body = item.querySelector('[data-role="faq-body"]');
			button?.addEventListener('click', () => {
				const shouldOpen = !item.classList.contains('is-open');
				items.forEach((other) => {
					other.classList.remove('is-open');
					other.querySelector('[data-role="faq-body"]')?.classList.remove('is-open');
					other.querySelector('[data-action="toggle-faq"]')?.setAttribute('aria-expanded', 'false');
				});
				if (shouldOpen) {
					item.classList.add('is-open');
					body.classList.add('is-open');
					button.setAttribute('aria-expanded', 'true');
				}
			});
		});
	})();
</script>