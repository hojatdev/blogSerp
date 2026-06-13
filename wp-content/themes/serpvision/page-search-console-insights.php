<?php get_header(); ?>
<main>

	<!-- Hero -->
	<section class="relative overflow-hidden bg-gradient-to-b from-indigo-50 via-indigo-50/40 to-white px-4 py-20 sm:py-24">
		<div class="absolute inset-0 dashboard-grid-bg opacity-70" aria-hidden="true"></div>
		<div class="relative mx-auto max-w-6xl">
			<div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
				<div class="text-center lg:text-left">
					<div class="inline-flex items-center gap-2 py-1.5 text-xs font-semibold text-slate-600 mb-4">
						<span class="w-1.5 h-1.5 bg-emerald-500 rounded-full animate-pulse"></span>
						Google Search Console data, in context
					</div>
					<h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-tight tracking-tight mb-6">
						See what Google<br class="hidden sm:block"> already knows.
					</h1>
					<p class="text-lg text-slate-500 max-w-xl mx-auto lg:mx-0 mb-8 leading-relaxed">
						Connect your Search Console property and view clicks, impressions, CTR, and average position alongside rank tracking and audit data — so a traffic change is never missing its context.
					</p>
					<div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-3 mb-5">
						<a href="<?php echo esc_url(serpvision_url('register')); ?>" class="w-full sm:w-auto bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl px-7 py-3.5 text-base font-semibold transition-all duration-200 active:scale-95 shadow-lg shadow-indigo-200">Connect Search Console</a>
						<a href="<?php echo esc_url(home_url('/pricing/')); ?>" class="w-full sm:w-auto border border-slate-200 bg-white hover:bg-slate-50 text-slate-700 rounded-xl px-7 py-3.5 text-base font-semibold transition-all duration-200 active:scale-95">See pricing</a>
					</div>
					<p class="text-xs text-slate-400">Search Console is optional. Rank tracking, audits, and competitor analysis work without it.</p>
				</div>

				<!-- GSC dashboard mockup -->
				<div class="bg-white rounded-2xl shadow-xl border border-slate-200/80 p-4 lg:p-5">
					<div class="flex items-center gap-1.5 mb-5">
						<span class="w-3 h-3 rounded-full bg-red-400"></span>
						<span class="w-3 h-3 rounded-full bg-amber-400"></span>
						<span class="w-3 h-3 rounded-full bg-emerald-400"></span>
						<div class="ml-3 flex-1 bg-slate-100 rounded h-5 flex items-center px-3">
							<span class="text-xs text-slate-400 font-mono truncate">app.serpvision.com/projects/store/search-console</span>
						</div>
					</div>
					<div class="grid grid-cols-2 gap-3 mb-4">
						<div class="bg-indigo-50 rounded-xl p-3 border border-indigo-100">
							<p class="text-xs text-slate-500 mb-1">Total clicks (30d)</p>
							<p class="text-xl font-bold text-indigo-700">4,821</p>
							<p class="text-xs text-emerald-600 font-medium mt-0.5">↑ 12% vs last month</p>
						</div>
						<div class="bg-slate-50 rounded-xl p-3 border border-slate-100">
							<p class="text-xs text-slate-500 mb-1">Impressions (30d)</p>
							<p class="text-xl font-bold text-slate-900">83,400</p>
							<p class="text-xs text-slate-400 mt-0.5">across all queries</p>
						</div>
						<div class="bg-emerald-50 rounded-xl p-3 border border-emerald-100">
							<p class="text-xs text-slate-500 mb-1">Avg CTR</p>
							<p class="text-xl font-bold text-emerald-700">5.8%</p>
							<p class="text-xs text-emerald-600 font-medium mt-0.5">↑ 0.4pp</p>
						</div>
						<div class="bg-amber-50 rounded-xl p-3 border border-amber-100">
							<p class="text-xs text-slate-500 mb-1">Avg position</p>
							<p class="text-xl font-bold text-amber-700">8.3</p>
							<p class="text-xs text-emerald-600 font-medium mt-0.5">↑ improving</p>
						</div>
					</div>
					<div class="rounded-xl border border-slate-100 overflow-hidden mb-4">
						<table class="w-full text-xs">
							<thead class="bg-slate-50">
								<tr>
									<th class="text-left px-3 py-2 text-slate-500 font-medium">Query</th>
									<th class="text-center px-3 py-2 text-slate-500 font-medium">Clicks</th>
									<th class="text-center px-3 py-2 text-slate-500 font-medium hidden sm:table-cell">CTR</th>
									<th class="text-center px-3 py-2 text-slate-500 font-medium hidden sm:table-cell">Position</th>
								</tr>
							</thead>
							<tbody class="divide-y divide-slate-100">
								<tr class="hover:bg-slate-50/70"><td class="px-3 py-2.5 font-medium text-slate-700">rank tracking tool</td><td class="px-3 py-2.5 text-center font-semibold">342</td><td class="px-3 py-2.5 text-center hidden sm:table-cell">8.2%</td><td class="px-3 py-2.5 text-center hidden sm:table-cell"><span class="bg-emerald-100 text-emerald-700 rounded-lg px-2 py-0.5 font-semibold">4.1</span></td></tr>
								<tr class="hover:bg-slate-50/70"><td class="px-3 py-2.5 font-medium text-slate-700">seo audit free</td><td class="px-3 py-2.5 text-center font-semibold">218</td><td class="px-3 py-2.5 text-center hidden sm:table-cell">5.1%</td><td class="px-3 py-2.5 text-center hidden sm:table-cell"><span class="bg-amber-100 text-amber-700 rounded-lg px-2 py-0.5 font-semibold">9.7</span></td></tr>
								<tr class="hover:bg-slate-50/70"><td class="px-3 py-2.5 font-medium text-slate-700">keyword position checker</td><td class="px-3 py-2.5 text-center font-semibold">194</td><td class="px-3 py-2.5 text-center hidden sm:table-cell">3.9%</td><td class="px-3 py-2.5 text-center hidden sm:table-cell"><span class="bg-emerald-100 text-emerald-700 rounded-lg px-2 py-0.5 font-semibold">5.8</span></td></tr>
							</tbody>
						</table>
					</div>
					<div class="rounded-xl bg-indigo-50 border border-indigo-100 p-4">
						<p class="text-xs font-semibold text-indigo-700 mb-1">Insight</p>
						<p class="text-sm text-indigo-900 leading-relaxed">"seo audit free" — low CTR at position 9.7. Improving the title and meta description could lift clicks before a ranking change is needed.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Why GSC -->
	<section class="py-20 px-4 bg-slate-50">
		<div class="max-w-6xl mx-auto">
			<div class="text-center mb-14">
				<p class="text-sm font-semibold text-indigo-600 mb-3">Why connect Search Console</p>
				<h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Rankings and clicks tell different stories</h2>
				<p class="text-lg text-slate-500 max-w-2xl mx-auto">A page can rank #4 with poor CTR, or rank #9 and drive strong traffic because its title matches intent. Without Search Console, you are missing half the picture.</p>
			</div>
			<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
				<article class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-sm">
					<div class="w-11 h-11 rounded-xl bg-indigo-100 flex items-center justify-center mb-4"><svg class="w-5 h-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5m.75-9 3-3 2.148 2.148A12.061 12.061 0 0 1 16.5 7.605" /></svg></div>
					<h3 class="font-semibold text-slate-900 mb-2">Understand traffic changes</h3>
					<p class="text-sm text-slate-500 leading-relaxed">When traffic drops, compare it to rank movement, CTR, and impressions to decide whether it came from a ranking change, a SERP feature, or a CTR problem.</p>
				</article>
				<article class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-sm">
					<div class="w-11 h-11 rounded-xl bg-emerald-100 flex items-center justify-center mb-4"><svg class="w-5 h-5 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.286-4.286a11.948 11.948 0 0 1 4.306 6.43l.776 2.898m0 0 3.182-5.511m-3.182 5.51-5.511-3.181" /></svg></div>
					<h3 class="font-semibold text-slate-900 mb-2">Find CTR improvement opportunities</h3>
					<p class="text-sm text-slate-500 leading-relaxed">Queries with high impressions and low CTR often just need a better title or meta description. Search Console data surfaces these without a separate analysis step.</p>
				</article>
				<article class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-sm">
					<div class="w-11 h-11 rounded-xl bg-amber-100 flex items-center justify-center mb-4"><svg class="w-5 h-5 text-amber-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg></div>
					<h3 class="font-semibold text-slate-900 mb-2">Validate your SEO work</h3>
					<p class="text-sm text-slate-500 leading-relaxed">After updating content or fixing technical issues, use clicks and impressions trends to confirm the work is showing up in real search performance, not just rankings.</p>
				</article>
			</div>
		</div>
	</section>

	<!-- What you see -->
	<section class="py-20 px-4 bg-white">
		<div class="max-w-6xl mx-auto">
			<div class="text-center mb-14">
				<p class="text-sm font-semibold text-indigo-600 mb-3">What Serpvision shows</p>
				<h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Search Console data, without the noise</h2>
				<p class="text-lg text-slate-500 max-w-2xl mx-auto">The raw Search Console interface is useful but not always decision-ready. Serpvision organizes the data around questions your team actually asks.</p>
			</div>
			<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
				<div class="bg-slate-50 border border-slate-200/80 rounded-2xl p-6 hover:shadow-md transition-all duration-200">
					<div class="w-11 h-11 rounded-xl bg-indigo-100 flex items-center justify-center mb-4"><svg class="w-5 h-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5m.75-9 3-3 2.148 2.148A12.061 12.061 0 0 1 16.5 7.605" /></svg></div>
					<h3 class="text-base font-semibold text-slate-900 mb-2">Clicks and impressions</h3>
					<p class="text-sm text-slate-500 leading-relaxed">Track total clicks and impressions by query and page over the time range that matters, with trend comparison against the previous period.</p>
				</div>
				<div class="bg-slate-50 border border-slate-200/80 rounded-2xl p-6 hover:shadow-md transition-all duration-200">
					<div class="w-11 h-11 rounded-xl bg-emerald-100 flex items-center justify-center mb-4"><svg class="w-5 h-5 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.286-4.286a11.948 11.948 0 0 1 4.306 6.43l.776 2.898m0 0 3.182-5.511m-3.182 5.51-5.511-3.181" /></svg></div>
					<h3 class="text-base font-semibold text-slate-900 mb-2">CTR analysis</h3>
					<p class="text-sm text-slate-500 leading-relaxed">Find queries with high impressions and low CTR — these are the pages where a title or meta description change can improve traffic without needing a ranking improvement.</p>
				</div>
				<div class="bg-slate-50 border border-slate-200/80 rounded-2xl p-6 hover:shadow-md transition-all duration-200">
					<div class="w-11 h-11 rounded-xl bg-purple-100 flex items-center justify-center mb-4"><svg class="w-5 h-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" /></svg></div>
					<h3 class="text-base font-semibold text-slate-900 mb-2">Rank vs. GSC position</h3>
					<p class="text-sm text-slate-500 leading-relaxed">Compare Serpvision rank tracker data with Search Console average position to understand differences between tracked keyword positions and broader query performance.</p>
				</div>
				<div class="bg-slate-50 border border-slate-200/80 rounded-2xl p-6 hover:shadow-md transition-all duration-200">
					<div class="w-11 h-11 rounded-xl bg-amber-100 flex items-center justify-center mb-4"><svg class="w-5 h-5 text-amber-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" /></svg></div>
					<h3 class="text-base font-semibold text-slate-900 mb-2">Page-level performance</h3>
					<p class="text-sm text-slate-500 leading-relaxed">View total clicks, impressions, and CTR aggregated at the page level to identify which landing pages are driving traffic and which are falling below expectations.</p>
				</div>
				<div class="bg-slate-50 border border-slate-200/80 rounded-2xl p-6 hover:shadow-md transition-all duration-200">
					<div class="w-11 h-11 rounded-xl bg-rose-100 flex items-center justify-center mb-4"><svg class="w-5 h-5 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" /></svg></div>
					<h3 class="text-base font-semibold text-slate-900 mb-2">Date range comparison</h3>
					<p class="text-sm text-slate-500 leading-relaxed">Compare any two periods to understand how content updates, technical changes, or seasonal patterns have affected real search performance over time.</p>
				</div>
				<div class="bg-slate-50 border border-slate-200/80 rounded-2xl p-6 hover:shadow-md transition-all duration-200">
					<div class="w-11 h-11 rounded-xl bg-cyan-100 flex items-center justify-center mb-4"><svg class="w-5 h-5 text-cyan-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 1-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" /></svg></div>
					<h3 class="text-base font-semibold text-slate-900 mb-2">Multi-site support</h3>
					<p class="text-sm text-slate-500 leading-relaxed">Connect Search Console for multiple projects. Each property stays scoped to its project so agency and multi-site data does not mix.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- FAQ -->
	<section class="py-20 px-4 bg-slate-50">
		<div class="max-w-3xl mx-auto">
			<div class="text-center mb-14">
				<p class="text-xs font-semibold uppercase tracking-widest text-indigo-600 mb-3">FAQ</p>
				<h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Search Console questions</h2>
			</div>
			<div class="flex flex-col gap-3" data-role="faq-list">
				<div class="faq-item bg-white border border-slate-200/80 rounded-2xl overflow-hidden" data-role="faq-item"><button class="w-full flex items-center justify-between px-5 py-4 text-left" data-action="toggle-faq" aria-expanded="false"><span class="font-semibold text-slate-900 text-sm pr-4">Do I need Search Console to use Serpvision?</span><svg class="faq-icon w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg></button><div class="faq-body" data-role="faq-body"><p class="px-5 pb-4 text-sm text-slate-500 leading-relaxed">No. Rank tracking, competitor analysis, site audits, and project management all work without Search Console. Connecting it adds a layer of real performance data that makes ranking context clearer.</p></div></div>
				<div class="faq-item bg-white border border-slate-200/80 rounded-2xl overflow-hidden" data-role="faq-item"><button class="w-full flex items-center justify-between px-5 py-4 text-left" data-action="toggle-faq" aria-expanded="false"><span class="font-semibold text-slate-900 text-sm pr-4">How do I connect my Search Console property?</span><svg class="faq-icon w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg></button><div class="faq-body" data-role="faq-body"><p class="px-5 pb-4 text-sm text-slate-500 leading-relaxed">After creating a project, go to project settings and connect a Search Console property through the Google authorization flow. You must have access to the property in Search Console for the connection to work.</p></div></div>
				<div class="faq-item bg-white border border-slate-200/80 rounded-2xl overflow-hidden" data-role="faq-item"><button class="w-full flex items-center justify-between px-5 py-4 text-left" data-action="toggle-faq" aria-expanded="false"><span class="font-semibold text-slate-900 text-sm pr-4">Does it cost extra to connect Search Console?</span><svg class="faq-icon w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg></button><div class="faq-body" data-role="faq-body"><p class="px-5 pb-4 text-sm text-slate-500 leading-relaxed">Search Console connections have a small per-site usage cost. See the pricing page for the current estimate.</p></div></div>
				<div class="faq-item bg-white border border-slate-200/80 rounded-2xl overflow-hidden" data-role="faq-item"><button class="w-full flex items-center justify-between px-5 py-4 text-left" data-action="toggle-faq" aria-expanded="false"><span class="font-semibold text-slate-900 text-sm pr-4">How far back does Search Console data go?</span><svg class="faq-icon w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg></button><div class="faq-body" data-role="faq-body"><p class="px-5 pb-4 text-sm text-slate-500 leading-relaxed">Google Search Console provides up to 16 months of data. Serpvision surfaces the data available in the API based on the time range you select in the project.</p></div></div>
			</div>
		</div>
	</section>

	<!-- CTA -->
	<section class="py-20 px-4 bg-white">
		<div class="max-w-4xl mx-auto">
			<div class="bg-indigo-600 rounded-2xl p-10 sm:p-14 text-center">
				<h2 class="text-3xl sm:text-4xl font-extrabold text-white mb-3">Pair rankings with real performance data.</h2>
				<p class="text-indigo-200 text-lg mb-8">Create a project, connect your Search Console property, and make SEO decisions with clicks, impressions, and positions in the same view.</p>
				<div class="flex flex-col sm:flex-row items-center justify-center gap-3">
					<a href="<?php echo esc_url(serpvision_url('register')); ?>" class="inline-flex items-center gap-2 bg-white hover:bg-slate-50 text-indigo-600 rounded-xl px-8 py-3.5 text-base font-bold transition-all duration-200 active:scale-95 shadow-lg">Start a project <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></a>
					<a href="<?php echo esc_url(home_url('/pricing/')); ?>" class="inline-flex items-center gap-2 border border-indigo-400 hover:border-indigo-300 text-indigo-100 hover:text-white rounded-xl px-8 py-3.5 text-base font-semibold transition-all duration-200">See pricing</a>
				</div>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>

<script>
document.querySelectorAll('[data-action="toggle-faq"]').forEach((button) => {
	button.addEventListener('click', () => {
		const item = button.closest('[data-role="faq-item"]');
		const body = item.querySelector('[data-role="faq-body"]');
		const isOpen = item.classList.contains('is-open');
		document.querySelectorAll('[data-role="faq-item"]').forEach((el) => {
			el.classList.remove('is-open');
			el.querySelector('[data-role="faq-body"]').classList.remove('is-open');
			el.querySelector('[data-action="toggle-faq"]').setAttribute('aria-expanded', 'false');
		});
		if (!isOpen) { item.classList.add('is-open'); body.classList.add('is-open'); button.setAttribute('aria-expanded', 'true'); }
	});
});
</script>
<?php serpvision_faq_schema([
	['q' => 'Do I need Search Console to use Serpvision?',
	 'a' => 'No. Rank tracking, competitor analysis, site audits, and project management all work without Search Console. Connecting it adds a layer of real performance data that makes ranking context clearer.'],
	['q' => 'How do I connect my Search Console property?',
	 'a' => 'After creating a project, go to project settings and connect a Search Console property through the Google authorization flow. You must have access to the property in Search Console for the connection to work.'],
	['q' => 'Does it cost extra to connect Search Console?',
	 'a' => 'Search Console connections have a small per-site usage cost. See the pricing page for the current estimate.'],
	['q' => 'How far back does Search Console data go?',
	 'a' => 'Google Search Console provides up to 16 months of data. Serpvision surfaces the data available in the API based on the time range you select in the project.'],
]); ?>