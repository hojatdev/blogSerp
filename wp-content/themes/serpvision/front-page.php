	<?php get_header(); ?>
	<main>
		<section class="relative overflow-hidden bg-gradient-to-b from-indigo-50 via-indigo-50/40 to-white pt-16 sm:pt-20 pb-16 px-4">
			<div class="absolute inset-0 dashboard-grid-bg opacity-70" aria-hidden="true"></div>
			<div class="relative max-w-6xl mx-auto">
				<div class="max-w-4xl mx-auto text-center">
					<div class="inline-flex items-center gap-2 py-1.5 text-xs text-slate-600 mb-2">
						<span class="w-1.5 h-1.5 bg-emerald-500 rounded-full" aria-hidden="true"></span>
						Built for clear SEO decisions, not noisy reports
					</div>

					<h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold text-slate-900 leading-tight tracking-tight mb-6">
						See what changed in SEO<br class="hidden sm:block">
						<span class="text-indigo-600">Decide what to fix next</span>
					</h1>

					<p class="text-lg sm:text-xl text-slate-500 mx-auto mb-8 leading-relaxed">
						Serpvision brings rank tracking, competitor monitoring, site audits and Google Search Console insights into one calm dashboard for every SEO project you manage.
					</p>

					<div class="flex flex-col sm:flex-row items-center justify-center gap-3 mb-5">
						<a href="<?php echo esc_url(serpvision_url('register')); ?>" class="focus-ring w-full sm:w-auto bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl px-7 py-3.5 text-base font-semibold transition-all duration-200 active:scale-95 shadow-lg shadow-indigo-200">
							Create your first project
						</a>
						<a href="#features" class="focus-ring w-full sm:w-auto flex items-center justify-center gap-2 border border-slate-200 bg-white hover:bg-slate-50 text-slate-700 rounded-xl px-7 py-3.5 text-base font-semibold transition-all duration-200 active:scale-95">
							Explore the workflow
						</a>
					</div>

					<p class="text-xs text-slate-400 mb-12">No ranking guarantees. Just cleaner data, sharper context and fewer blind spots.</p>
				</div>

				<!-- Dashboard Mockup -->
				<div class="bg-white rounded-3xl shadow-xl border border-slate-200/80 p-3 sm:p-5 max-w-5xl mx-auto">
					<div class="flex items-center gap-1.5 mb-4">
						<span class="w-3 h-3 rounded-full bg-red-400" aria-hidden="true"></span>
						<span class="w-3 h-3 rounded-full bg-amber-400" aria-hidden="true"></span>
						<span class="w-3 h-3 rounded-full bg-emerald-400" aria-hidden="true"></span>
						<div class="ml-3 flex-1 bg-slate-100 rounded h-6 flex items-center px-3 overflow-hidden">
							<span class="text-xs text-slate-400 font-mono truncate">app.serpvision.com/projects/acme-seo/overview</span>
						</div>
					</div>

					<div class="grid grid-cols-1 lg:grid-cols-12 gap-4">
						<aside class="hidden lg:block lg:col-span-3 rounded-2xl bg-slate-950 p-4 text-white">
							<p class="text-xs font-semibold text-slate-400 uppercase tracking-widest mb-4">Projects</p>
							<div class="space-y-2">
								<div class="rounded-xl bg-white/10 p-3 border border-white/10">
									<p class="text-sm font-semibold">Acme Store</p>
									<p class="text-xs text-slate-400 mt-1">Ecommerce · Google US</p>
								</div>
								<div class="rounded-xl p-3 text-slate-300 hover:bg-white/5 transition-colors">
									<p class="text-sm font-medium">SaaS Blog</p>
									<p class="text-xs text-slate-500 mt-1">Content team</p>
								</div>
								<div class="rounded-xl p-3 text-slate-300 hover:bg-white/5 transition-colors">
									<p class="text-sm font-medium">Agency Client</p>
									<p class="text-xs text-slate-500 mt-1">Local SEO</p>
								</div>
							</div>
						</aside>

						<div class="lg:col-span-9">
							<div class="grid grid-cols-2 lg:grid-cols-4 gap-3 mb-4">
								<div class="bg-slate-50 rounded-2xl p-4 text-left border border-slate-100">
									<p class="text-xs text-slate-500 mb-1">Tracked keywords</p>
									<p class="text-2xl font-bold text-slate-900">428</p>
									<p class="text-xs text-emerald-600 font-medium mt-1">41 improved</p>
								</div>
								<div class="bg-slate-50 rounded-2xl p-4 text-left border border-slate-100">
									<p class="text-xs text-slate-500 mb-1">Rank drops</p>
									<p class="text-2xl font-bold text-slate-900">12</p>
									<p class="text-xs text-red-500 font-medium mt-1">Needs review</p>
								</div>
								<div class="bg-slate-50 rounded-2xl p-4 text-left border border-slate-100">
									<p class="text-xs text-slate-500 mb-1">Audit issues</p>
									<p class="text-2xl font-bold text-slate-900">36</p>
									<p class="text-xs text-amber-600 font-medium mt-1">8 high impact</p>
								</div>
								<div class="bg-slate-50 rounded-2xl p-4 text-left border border-slate-100">
									<p class="text-xs text-slate-500 mb-1">Points used</p>
									<p class="text-2xl font-bold text-slate-900">1,240</p>
									<p class="text-xs text-slate-500 font-medium mt-1">From service usage</p>
								</div>
							</div>

							<div class="grid grid-cols-1 lg:grid-cols-5 gap-4">
								<div class="lg:col-span-3 rounded-2xl border border-slate-100 overflow-hidden">
									<div class="bg-slate-50 px-4 py-3 flex items-center justify-between">
										<p class="text-sm font-semibold text-slate-800">Keyword movement</p>
										<span class="text-xs font-medium text-slate-500">Last 7 days</span>
									</div>
									<table class="w-full text-xs sm:text-sm">
										<thead class="bg-white">
											<tr>
												<th class="text-left px-4 py-3 text-slate-500 font-medium">Keyword</th>
												<th class="text-center px-4 py-3 text-slate-500 font-medium">Position</th>
												<th class="text-center px-4 py-3 text-slate-500 font-medium hidden sm:table-cell">Change</th>
											</tr>
										</thead>
										<tbody class="divide-y divide-slate-100">
											<tr class="hover:bg-slate-50/70 transition-colors">
												<td class="px-4 py-3 font-medium text-slate-700">technical seo audit</td>
												<td class="px-4 py-3 text-center"><span class="inline-block bg-emerald-100 text-emerald-700 rounded-lg px-2 py-0.5 font-semibold">#6</span></td>
												<td class="px-4 py-3 text-center hidden sm:table-cell"><span class="text-emerald-600 font-medium">↑ 3</span></td>
											</tr>
											<tr class="hover:bg-slate-50/70 transition-colors">
												<td class="px-4 py-3 font-medium text-slate-700">seo project management</td>
												<td class="px-4 py-3 text-center"><span class="inline-block bg-amber-100 text-amber-700 rounded-lg px-2 py-0.5 font-semibold">#14</span></td>
												<td class="px-4 py-3 text-center hidden sm:table-cell"><span class="text-red-500 font-medium">↓ 4</span></td>
											</tr>
											<tr class="hover:bg-slate-50/70 transition-colors">
												<td class="px-4 py-3 font-medium text-slate-700">search console insights</td>
												<td class="px-4 py-3 text-center"><span class="inline-block bg-indigo-100 text-indigo-700 rounded-lg px-2 py-0.5 font-semibold">#11</span></td>
												<td class="px-4 py-3 text-center hidden sm:table-cell"><span class="text-emerald-600 font-medium">↑ 1</span></td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="lg:col-span-2 rounded-2xl border border-slate-100 p-4 bg-white">
									<div class="flex items-center justify-between mb-4">
										<p class="text-sm font-semibold text-slate-800">Decision queue</p>
										<span class="bg-indigo-100 text-indigo-700 text-xs font-semibold px-2 py-1 rounded-full">Prioritized</span>
									</div>
									<div class="space-y-3">
										<div class="p-3 rounded-xl bg-red-50 border border-red-100">
											<p class="text-sm font-semibold text-slate-800">Review ranking drop</p>
											<p class="text-xs text-slate-500 mt-1">Compare SERP changes and competitor movement.</p>
										</div>
										<div class="p-3 rounded-xl bg-amber-50 border border-amber-100">
											<p class="text-sm font-semibold text-slate-800">Fix crawl blockers</p>
											<p class="text-xs text-slate-500 mt-1">Audit found pages with blocked index signals.</p>
										</div>
										<div class="p-3 rounded-xl bg-emerald-50 border border-emerald-100">
											<p class="text-sm font-semibold text-slate-800">Expand winning topic</p>
											<p class="text-xs text-slate-500 mt-1">Search Console shows rising impressions.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="py-12 bg-slate-50 border-y border-slate-200/60">
			<div class="max-w-5xl mx-auto px-4 text-center">
				<p class="text-xs font-semibold text-slate-400 uppercase tracking-widest mb-8">Used by SEO teams, agencies, and growing businesses</p>
				<div class="flex flex-wrap items-center justify-center gap-8 md:gap-12">
					<span class="text-slate-300 font-bold text-lg tracking-tight">Acme Corp</span>
					<span class="text-slate-300 font-bold text-lg tracking-tight">TechFlow</span>
					<span class="text-slate-300 font-bold text-lg tracking-tight">GrowthLab</span>
					<span class="text-slate-300 font-bold text-lg tracking-tight">Nexus</span>
					<span class="text-slate-300 font-bold text-lg tracking-tight">PeakMedia</span>
					<span class="text-slate-300 font-bold text-lg tracking-tight">BlueStack</span>
				</div>
			</div>
		</section>

		<section class="py-20 px-4 bg-white">
			<div class="max-w-6xl mx-auto">
				<div class="mb-14">
					<p class="text-sm font-semibold text-indigo-600 mb-3">Why Serpvision</p>
					<h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mb-4">SEO work slows down when the signal is scattered.</h2>
					<p class="text-lg text-slate-500 leading-relaxed">Rankings, audits, competitors and Search Console data often live in different places. Serpvision brings them into one workflow so teams can spot what changed and choose the next action.</p>
				</div>
				<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
					<div class="bg-slate-50 border border-slate-200/80 rounded-2xl p-6">
						<div class="w-10 h-10 rounded-xl bg-red-100 flex items-center justify-center mb-4">
							<svg class="w-5 h-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l4.286-4.286a11.948 11.948 0 0 1 4.306 6.43l.776 2.898m0 0 3.182-5.511m-3.182 5.51-5.511-3.181" />
							</svg>
						</div>
						<h3 class="font-semibold text-slate-900 mb-2">Rank drops are easy to miss</h3>
						<p class="text-sm text-slate-500 leading-relaxed">See which keywords lost visibility before the impact becomes harder to explain.</p>
					</div>
					<div class="bg-slate-50 border border-slate-200/80 rounded-2xl p-6">
						<div class="w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center mb-4">
							<svg class="w-5 h-5 text-amber-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
							</svg>
						</div>
						<h3 class="font-semibold text-slate-900 mb-2">Traffic changes need context</h3>
						<p class="text-sm text-slate-500 leading-relaxed">Connect ranking movement with impressions, clicks and page-level performance.</p>
					</div>
					<div class="bg-slate-50 border border-slate-200/80 rounded-2xl p-6">
						<div class="w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center mb-4">
							<svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
							</svg>
						</div>
						<h3 class="font-semibold text-slate-900 mb-2">Technical issues pile up quietly</h3>
						<p class="text-sm text-slate-500 leading-relaxed">Turn audit findings into a manageable list of issues worth addressing first.</p>
					</div>
					<div class="bg-slate-50 border border-slate-200/80 rounded-2xl p-6">
						<div class="w-10 h-10 rounded-xl bg-indigo-100 flex items-center justify-center mb-4">
							<svg class="w-5 h-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
  								<path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
							</svg>
						</div>
						<h3 class="font-semibold text-slate-900 mb-2">Competitors move quietly</h3>
						<p class="text-sm text-slate-500 leading-relaxed">Track ranking gaps and shared keywords so competitive shifts are easier to catch.</p>
					</div>
				</div>
			</div>
		</section>

		<section id="features" class="py-20 px-4 bg-slate-50">
			<div class="max-w-6xl mx-auto">
				<div class="text-center mb-14">
					<p class="text-sm font-semibold text-indigo-600 mb-3">Core features</p>
					<h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">One workspace for every SEO project.</h2>
					<p class="text-lg text-slate-500 max-w-2xl mx-auto">Built for specialists who need depth and business owners who need clarity — without the bloat.</p>
				</div>
				<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
					<article class="bg-white border border-slate-200/80 rounded-2xl shadow-sm p-6 hover:shadow-md transition-all duration-200">
						<div class="w-11 h-11 rounded-xl bg-indigo-100 flex items-center justify-center mb-4">
							<svg class="w-5 h-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
							</svg>
						</div>
						<h3 class="text-base font-semibold text-slate-900 mb-2">Keyword Rank Tracking</h3>
						<p class="text-sm text-slate-500 leading-relaxed">Track keyword positions by project, country, device and search engine. Review movement over time without digging through spreadsheets.</p>
						<a href="/features/keyword-rank-tracking" class="focus-ring inline-flex items-center gap-1 text-sm font-semibold text-indigo-600 hover:text-indigo-700 mt-4 transition-colors duration-200">
							Learn more 
							<svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
							</svg>
						</a>
					</article>
					<article class="bg-white border border-slate-200/80 rounded-2xl shadow-sm p-6 hover:shadow-md transition-all duration-200">
						<div class="w-11 h-11 rounded-xl bg-emerald-100 flex items-center justify-center mb-4">
							<svg class="w-5 h-5 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
							</svg>
						</div>
						<h3 class="text-base font-semibold text-slate-900 mb-2">SEO Site Audit</h3>
						<p class="text-sm text-slate-500 leading-relaxed">Check crawl status, status codes, metadata, headings, internal links and page-level issues in a format your team can act on.</p>
						<a href="/features/seo-audit" class="focus-ring inline-flex items-center gap-1 text-sm font-semibold text-indigo-600 hover:text-indigo-700 mt-4 transition-colors duration-200">
							Learn more 
							<svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
							</svg>
						</a>
					</article>
					<article class="bg-white border border-slate-200/80 rounded-2xl shadow-sm p-6 hover:shadow-md transition-all duration-200">
						<div class="w-11 h-11 rounded-xl bg-amber-100 flex items-center justify-center mb-4">
							<svg class="w-5 h-5 text-amber-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
  								<path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
							</svg>
						</div>
						<h3 class="text-base font-semibold text-slate-900 mb-2">Competitor Tracking</h3>
						<p class="text-sm text-slate-500 leading-relaxed">Add competitor domains, compare shared keywords and identify ranking gaps that can become content or optimization opportunities.</p>
						<a href="/features/competitor-analysis" class="focus-ring inline-flex items-center gap-1 text-sm font-semibold text-indigo-600 hover:text-indigo-700 mt-4 transition-colors duration-200">
							Learn more
							<svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
							</svg>
						</a>
					</article>
					<article class="bg-white border border-slate-200/80 rounded-2xl shadow-sm p-6 hover:shadow-md transition-all duration-200">
						<div class="w-11 h-11 rounded-xl bg-red-100 flex items-center justify-center mb-4">
							<svg class="w-5 h-5 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
							</svg>
						</div>
						<h3 class="text-base font-semibold text-slate-900 mb-2">Search Console Insights</h3>
						<p class="text-sm text-slate-500 leading-relaxed">Connect real performance data with rankings and pages to understand which queries and pages deserve the most attention.</p>
						<a href="/features/search-console-insights" class="focus-ring inline-flex items-center gap-1 text-sm font-semibold text-indigo-600 hover:text-indigo-700 mt-4 transition-colors duration-200">
							Learn more 
							<svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
							</svg>
						</a>
					</article>
					<article class="bg-white border border-slate-200/80 rounded-2xl shadow-sm p-6 hover:shadow-md transition-all duration-200">
						<div class="w-11 h-11 rounded-xl bg-purple-100 flex items-center justify-center mb-4">
							<svg class="w-5 h-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 0 0-1.883 2.542l.857 6a2.25 2.25 0 0 0 2.227 1.932H19.05a2.25 2.25 0 0 0 2.227-1.932l.857-6a2.25 2.25 0 0 0-1.883-2.542m-16.5 0V6A2.25 2.25 0 0 1 6 3.75h3.879a1.5 1.5 0 0 1 1.06.44l2.122 2.12a1.5 1.5 0 0 0 1.06.44H18A2.25 2.25 0 0 1 20.25 9v.776" />
							</svg>
						</div>
						<h3 class="text-base font-semibold text-slate-900 mb-2">Project Management</h3>
						<p class="text-sm text-slate-500 leading-relaxed">Create separate SEO projects with their own domains, colors, competitors, keywords and settings — for individuals, teams and agencies.</p>
					</article>
					<article class="bg-white border border-slate-200/80 rounded-2xl shadow-sm p-6 hover:shadow-md transition-all duration-200">
						<div class="w-11 h-11 rounded-xl bg-cyan-100 flex items-center justify-center mb-4">
							<svg class="w-5 h-5 text-cyan-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" d="M3 8.25V18a2.25 2.25 0 0 0 2.25 2.25h13.5A2.25 2.25 0 0 0 21 18V8.25m-18 0V6a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 6v2.25m-18 0h18M5.25 6h.008v.008H5.25V6ZM7.5 6h.008v.008H7.5V6Zm2.25 0h.008v.008H9.75V6Z" />
							</svg>
						</div>
						<h3 class="text-base font-semibold text-slate-900 mb-2">Unified Dashboard</h3>
						<p class="text-sm text-slate-500 leading-relaxed">Your most important SEO metrics in one place. Rankings, audit status, competitor movements, and usage — visible at a glance without digging through reports.</p>
					</article>
				</div>
			</div>
		</section>


		<section class="py-20 px-4 bg-white">
			<div class="max-w-6xl mx-auto">
				<div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
					<div>
						<p class="text-sm font-semibold text-indigo-600 mb-3">Workflow</p>
						<h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4 leading-tight">From setup to decisions in a simple SEO loop.</h2>
						<p class="text-lg text-slate-500 leading-relaxed mb-8">Serpvision is designed around the recurring work SEO teams actually do: create projects, track what matters, review changes and decide what to improve next.</p>
						<a href="<?php echo esc_url(serpvision_url('register')); ?>" class="focus-ring inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl px-6 py-3 text-sm font-semibold transition-all duration-200 active:scale-95">
							Start with a project
							<svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
							</svg>
						</a>
					</div>
					<div class="space-y-4">
						<div class="flex gap-4 rounded-2xl border border-slate-200/80 bg-slate-50 p-5">
							<span class="w-9 h-9 shrink-0 rounded-xl bg-indigo-600 text-white flex items-center justify-center font-bold text-sm">1</span>
							<div>
								<h3 class="font-semibold text-slate-900 mb-1">Create a project</h3>
								<p class="text-sm text-slate-500 leading-relaxed">Add a domain, project name, location and the settings that match how you work.</p>
							</div>
						</div>
						<div class="flex gap-4 rounded-2xl border border-slate-200/80 bg-slate-50 p-5">
							<span class="w-9 h-9 shrink-0 rounded-xl bg-indigo-600 text-white flex items-center justify-center font-bold text-sm">2</span>
							<div>
								<h3 class="font-semibold text-slate-900 mb-1">Add keywords and competitors</h3>
								<p class="text-sm text-slate-500 leading-relaxed">Group the terms you care about and define the domains you want to compare against.</p>
							</div>
						</div>
						<div class="flex gap-4 rounded-2xl border border-slate-200/80 bg-slate-50 p-5">
							<span class="w-9 h-9 shrink-0 rounded-xl bg-indigo-600 text-white flex items-center justify-center font-bold text-sm">3</span>
							<div>
								<h3 class="font-semibold text-slate-900 mb-1">Run checks and audits</h3>
								<p class="text-sm text-slate-500 leading-relaxed">Review ranking changes, crawl issues, page signals and usage from one place.</p>
							</div>
						</div>
						<div class="flex gap-4 rounded-2xl border border-slate-200/80 bg-slate-50 p-5">
							<span class="w-9 h-9 shrink-0 rounded-xl bg-indigo-600 text-white flex items-center justify-center font-bold text-sm">4</span>
							<div>
								<h3 class="font-semibold text-slate-900 mb-1">Make the next SEO decision</h3>
								<p class="text-sm text-slate-500 leading-relaxed">Prioritize fixes, content updates and competitor responses based on clearer signals.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="py-16 px-4 bg-slate-50 border-y border-slate-200/60">
			<div class="max-w-6xl mx-auto">
				<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-stretch">
					<div class="lg:col-span-1 rounded-3xl bg-white border border-slate-200/80 p-7 shadow-sm">
						<p class="text-sm font-semibold text-indigo-600 mb-3">Trust without fake proof</p>
						<h2 class="text-2xl font-extrabold text-slate-900 mb-3">Built around clarity, control and honest SEO context.</h2>
						<p class="text-sm text-slate-500 leading-relaxed">Serpvision avoids exaggerated promises and focuses on helping users understand the evidence behind each decision.</p>
					</div>
					<div class="lg:col-span-2 grid grid-cols-1 md:grid-cols-3 gap-5">
						<div class="rounded-3xl bg-white border border-slate-200/80 p-6 shadow-sm">
							<div class="w-10 h-10 rounded-xl bg-indigo-100 flex items-center justify-center mb-4">
								<svg class="w-5 h-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
								</svg>
							</div>
							<p class="text-sm font-semibold text-slate-900 mb-2">Transparent usage</p>
							<p class="text-sm text-slate-500 leading-relaxed">Points and service usage are visible, so teams understand what each action consumes.</p>
						</div>
						<div class="rounded-3xl bg-white border border-slate-200/80 p-6 shadow-sm">
							<div class="w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center mb-4">
								<svg class="w-5 h-5 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 0 0-1.883 2.542l.857 6a2.25 2.25 0 0 0 2.227 1.932H19.05a2.25 2.25 0 0 0 2.227-1.932l.857-6a2.25 2.25 0 0 0-1.883-2.542m-16.5 0V6A2.25 2.25 0 0 1 6 3.75h3.879a1.5 1.5 0 0 1 1.06.44l2.122 2.12a1.5 1.5 0 0 0 1.06.44H18A2.25 2.25 0 0 1 20.25 9v.776" />
								</svg>
							</div>
							<p class="text-sm font-semibold text-slate-900 mb-2">Project-level separation</p>
							<p class="text-sm text-slate-500 leading-relaxed">Each domain keeps its own keywords, competitors, settings and dashboard context.</p>
						</div>
						<div class="rounded-3xl bg-white border border-slate-200/80 p-6 shadow-sm">
							<div class="w-10 h-10 rounded-xl bg-purple-100 flex items-center justify-center mb-4">
								<svg class="w-5 h-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" d="M3 8.25V18a2.25 2.25 0 0 0 2.25 2.25h13.5A2.25 2.25 0 0 0 21 18V8.25m-18 0V6a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 6v2.25m-18 0h18M5.25 6h.008v.008H5.25V6ZM7.5 6h.008v.008H7.5V6Zm2.25 0h.008v.008H9.75V6Z" />
								</svg>
							</div>
							<p class="text-sm font-semibold text-slate-900 mb-2">Decision-first UI</p>
							<p class="text-sm text-slate-500 leading-relaxed">The interface surfaces meaningful movement, not raw tables full of numbers with no context.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="py-20 px-4 bg-slate-950 text-white overflow-hidden">
			<div class="max-w-6xl mx-auto">
				<div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
					<div>
						<p class="text-sm font-semibold text-indigo-300 mb-3">Dashboard preview</p>
						<h2 class="text-3xl sm:text-4xl font-extrabold mb-5 leading-tight">A dashboard that shows status, context and next steps.</h2>
						<p class="text-slate-300 text-lg leading-relaxed mb-8">The overview is designed to answer practical questions quickly: which projects need attention, which keywords moved, what competitors changed and where points are being used.</p>
						<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
							<div class="rounded-2xl bg-white/5 border border-white/10 p-4">
								<p class="text-sm font-semibold text-white mb-1">Less noise</p>
								<p class="text-sm text-slate-400">Important SEO signals stay visible without admin-panel clutter.</p>
							</div>
							<div class="rounded-2xl bg-white/5 border border-white/10 p-4">
								<p class="text-sm font-semibold text-white mb-1">Action-friendly</p>
								<p class="text-sm text-slate-400">Issues are grouped by impact so teams can choose what to handle first.</p>
							</div>
						</div>
					</div>
					<div class="bg-white rounded-3xl p-4 shadow-2xl shadow-indigo-950/40 text-slate-900">
						<div class="rounded-2xl border border-slate-100 overflow-hidden">
							<div class="bg-slate-50 p-4 flex items-center justify-between border-b border-slate-100">
								<div>
									<p class="text-sm font-semibold">Project health</p>
									<p class="text-xs text-slate-500">Acme Store · Weekly overview</p>
								</div>
								<span class="text-xs font-semibold rounded-full bg-amber-100 text-amber-700 px-3 py-1">Review suggested</span>
							</div>
							<div class="p-4 space-y-4">
								<div class="grid grid-cols-3 gap-3">
									<div class="rounded-xl bg-slate-50 p-3 border border-slate-100"><p class="text-xs text-slate-500">Visibility</p><p class="font-bold text-base">Stable</p></div>
									<div class="rounded-xl bg-slate-50 p-3 border border-slate-100"><p class="text-xs text-slate-500">Competitors</p><p class="font-bold text-base">4</p></div>
									<div class="rounded-xl bg-slate-50 p-3 border border-slate-100"><p class="text-xs text-slate-500">High issues</p><p class="font-bold text-base">8</p></div>
								</div>
								<div class="rounded-xl bg-slate-50 p-4 border border-slate-100">
									<div class="flex items-center justify-between mb-3"><p class="text-sm font-semibold">Audit categories</p><p class="text-xs text-slate-500">Impact view</p></div>
									<div class="space-y-3">
										<div>
											<div class="flex justify-between text-xs mb-1"><span>Indexability</span><span>72%</span></div>
											<div class="h-2 rounded-full bg-slate-200"><div class="h-2 rounded-full bg-indigo-600" style="width:72%"></div></div>
										</div>
										<div>
											<div class="flex justify-between text-xs mb-1"><span>Metadata</span><span>84%</span></div>
											<div class="h-2 rounded-full bg-slate-200"><div class="h-2 rounded-full bg-emerald-500" style="width:84%"></div></div>
										</div>
										<div>
											<div class="flex justify-between text-xs mb-1"><span>Crawl response</span><span>61%</span></div>
											<div class="h-2 rounded-full bg-slate-200"><div class="h-2 rounded-full bg-amber-500" style="width:61%"></div></div>
										</div>
									</div>
								</div>
								<div class="rounded-xl border border-slate-100 p-4">
									<p class="text-sm font-semibold mb-3">Recent activity</p>
									<div class="space-y-2.5 text-sm text-slate-600">
										<p><span class="text-emerald-600 font-semibold">Improved:</span> 9 keywords gained positions this week.</p>
										<p><span class="text-amber-600 font-semibold">Audit:</span> 3 title issues flagged for review.</p>
										<p><span class="text-indigo-600 font-semibold">GSC:</span> Query impressions rising on a product page.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="py-20 px-4 bg-white">
			<div class="max-w-6xl mx-auto">
				<div class="text-center mb-14">
					<p class="text-sm font-semibold text-indigo-600 mb-3">Use cases</p>
					<h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Useful for the people who make SEO decisions.</h2>
					<p class="text-lg text-slate-500 max-w-2xl mx-auto">Serpvision keeps complex SEO data understandable for specialists, teams and business owners alike.</p>
				</div>
				<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
					<div class="rounded-2xl border border-slate-200/80 bg-slate-50 p-6">
						<div class="w-10 h-10 rounded-xl bg-indigo-100 flex items-center justify-center mb-4">
							<svg class="w-5 h-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 0 0 6.16-12.12A14.98 14.98 0 0 0 9.631 8.41m5.96 5.96a14.926 14.926 0 0 1-5.841 2.58m-.119-8.54a6 6 0 0 0-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 0 0-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 0 1-2.448-2.448 14.9 14.9 0 0 1 .06-.312m-2.24 2.39a4.493 4.493 0 0 0-1.757 4.306 4.493 4.493 0 0 0 4.306-1.758M16.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
							</svg>

						</div>
						<h3 class="font-semibold text-slate-900 mb-2">SEO specialists</h3>
						<p class="text-sm text-slate-500 leading-relaxed">Monitor rank changes, technical issues and competitor gaps without switching between tools.</p>
					</div>
					<div class="rounded-2xl border border-slate-200/80 bg-slate-50 p-6">
						<div class="w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center mb-4">
							<svg class="w-5 h-5 text-amber-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 0 1 3 3h-15a3 3 0 0 1 3-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 0 1-.982-3.172M9.497 14.25a7.454 7.454 0 0 0 .981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 0 0 7.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 0 0 2.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 0 1 2.916.52 6.003 6.003 0 0 1-5.395 4.972m0 0a6.726 6.726 0 0 1-2.749 1.35m0 0a6.772 6.772 0 0 1-3.044 0" />
							</svg>
						</div>
						<h3 class="font-semibold text-slate-900 mb-2">Agencies</h3>
						<p class="text-sm text-slate-500 leading-relaxed">Separate client projects, keep context clean and review progress across multiple domains.</p>
					</div>
					<div class="rounded-2xl border border-slate-200/80 bg-slate-50 p-6">
						<div class="w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center mb-4">
							<svg class="w-5 h-5 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
							</svg>
						</div>
						<h3 class="font-semibold text-slate-900 mb-2">Business owners</h3>
						<p class="text-sm text-slate-500 leading-relaxed">Understand what is happening with search visibility in plain language and focused dashboards.</p>
					</div>
					<div class="rounded-2xl border border-slate-200/80 bg-slate-50 p-6">
						<div class="w-10 h-10 rounded-xl bg-purple-100 flex items-center justify-center mb-4">
							<svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
							</svg>
						</div>
						<h3 class="font-semibold text-slate-900 mb-2">Content teams</h3>
						<p class="text-sm text-slate-500 leading-relaxed">Find pages and queries that need updates based on ranking movement and Search Console signals.</p>
					</div>
				</div>
			</div>
		</section>
		<section class="pb-20 px-4 bg-white">
			<div class="max-w-4xl mx-auto">
				<div class="text-center mb-12">
					<p class="text-sm font-semibold text-indigo-600 mb-3">Pricing</p>
					<h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Use points where the work happens.</h2>
					<p class="text-lg text-slate-500 max-w-3xl mx-auto">Serpvision uses a points-based model. Rank checks, audits and service actions consume points from your balance — so you pay for what you actually use.</p>
				</div>
				<div class="bg-slate-50 border border-slate-200/80 rounded-3xl p-6 sm:p-8">
					<div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-8">
						<div class="bg-white rounded-2xl border border-slate-200/80 p-6">
							<p class="text-sm font-semibold text-slate-900 mb-2">Start focused</p>
							<p class="text-sm text-slate-500 leading-relaxed">Create a project, add keywords and run the checks your team needs first.</p>
						</div>
						<div class="bg-white rounded-2xl border border-slate-200/80 p-6">
							<p class="text-sm font-semibold text-slate-900 mb-2">Track consumption</p>
							<p class="text-sm text-slate-500 leading-relaxed">Service usage is connected to available points so you know how actions affect your balance.</p>
						</div>
						<div class="bg-white rounded-2xl border border-slate-200/80 p-6">
							<p class="text-sm font-semibold text-slate-900 mb-2">Scale as needed</p>
							<p class="text-sm text-slate-500 leading-relaxed">Works for individuals, content teams and agencies managing multiple projects.</p>
						</div>
					</div>
					<div class="flex flex-col sm:flex-row gap-3 justify-center">
						<a href="/pricing" class="focus-ring bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl px-6 py-3 text-sm font-semibold text-center transition-all duration-200 active:scale-95">View pricing options</a>
						<a href="/contact" class="focus-ring bg-white border border-slate-200 hover:bg-slate-50 text-slate-700 rounded-xl px-6 py-3 text-sm font-semibold text-center transition-all duration-200 active:scale-95">Talk to us</a>
					</div>
				</div>
			</div>
		</section>

		<section class="py-20 px-4 bg-slate-50">
			<div class="max-w-4xl mx-auto">
				<div class="text-center mb-12">
					<p class="text-sm font-semibold text-indigo-600 mb-3">FAQ</p>
					<h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Common questions</h2>
					<p class="text-lg text-slate-500">If you don't find your answer here, <a href="/contact" class="text-indigo-600 hover:underline font-medium">reach out</a> and we'll help.</p>
				</div>
				<div class="space-y-3" data-role="faq-list">
					<div class="faq-item bg-white border border-slate-200/80 rounded-2xl shadow-sm overflow-hidden">
						<div class="w-full flex items-center justify-between gap-4 p-5 cursor-pointer" data-action="toggle-faq" aria-expanded="false" aria-controls="faq-4">
							<span class="text-sm sm:text-base font-semibold text-slate-900">What exactly does Serpvision do?</span>
							<svg class="w-4 h-4 text-slate-400 shrink-0 transition-transform" data-role="faq-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
							</svg>
						</div>
						<div id="faq-4" class="faq-panel" data-role="faq-panel">
							<p class="px-5 pb-5 text-sm text-slate-600 leading-relaxed">Serpvision is an SEO management platform. It tracks keyword rankings, runs site audits, monitors competitors, and integrates with Google Search Console — so you can understand what's happening with your SEO and make informed decisions without jumping between tools.</p>
						</div>
					</div>
					<div class="faq-item bg-white border border-slate-200/80 rounded-2xl shadow-sm overflow-hidden">
						<div class="w-full flex items-center justify-between gap-4 p-5 cursor-pointer" data-action="toggle-faq" aria-expanded="false" aria-controls="faq-4">
							<span class="text-sm sm:text-base font-semibold text-slate-900">Can I manage multiple websites or client projects?</span>
							<svg class="w-4 h-4 text-slate-400 shrink-0 transition-transform" data-role="faq-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
							</svg>
						</div>
						<div id="faq-4" class="faq-panel" data-role="faq-panel">
							<p class="px-5 pb-5 text-sm text-slate-600 leading-relaxed">Yes. Serpvision supports multiple projects, each with its own domain, keywords, competitors, and settings. It works for individual site owners, freelancers managing several clients, and agencies running dozens of projects.</p>
						</div>
					</div>
					<div class="faq-item bg-white border border-slate-200/80 rounded-2xl shadow-sm overflow-hidden">
						<div class="w-full flex items-center justify-between gap-4 p-5 cursor-pointer" data-action="toggle-faq" aria-expanded="false" aria-controls="faq-4">
							<span class="text-sm sm:text-base font-semibold text-slate-900">Is Serpvision only for SEO experts?</span>
							<svg class="w-4 h-4 text-slate-400 shrink-0 transition-transform" data-role="faq-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
							</svg>
						</div>
						<div id="faq-4" class="faq-panel" data-role="faq-panel">
							<p class="px-5 pb-5 text-sm text-slate-600 leading-relaxed">No. The product is designed to be useful for SEO specialists while staying understandable for website owners, founders and marketing managers who need a clear picture of their project's status without needing to learn every SEO concept.</p>
						</div>
					</div>
					<div class="faq-item bg-white border border-slate-200/80 rounded-2xl shadow-sm overflow-hidden">
						<div class="w-full flex items-center justify-between gap-4 p-5 cursor-pointer" data-action="toggle-faq" aria-expanded="false" aria-controls="faq-4">
							<span class="text-sm sm:text-base font-semibold text-slate-900">Do I need to connect Google Search Console?</span>
							<svg class="w-4 h-4 text-slate-400 shrink-0 transition-transform" data-role="faq-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
							</svg>
						</div>
						<div id="faq-4" class="faq-panel" data-role="faq-panel">
							<p class="px-5 pb-5 text-sm text-slate-600 leading-relaxed">No, it's optional. Rank tracking and site audits work without it. But connecting Search Console gives you real click, impression, and CTR data alongside your rank data — which makes the overall picture significantly more complete.</p>
						</div>
					</div>
					<div class="faq-item bg-white border border-slate-200/80 rounded-2xl shadow-sm overflow-hidden">
						<div class="w-full flex items-center justify-between gap-4 p-5 cursor-pointer" data-action="toggle-faq" aria-expanded="false" aria-controls="faq-4">
							<span class="text-sm sm:text-base font-semibold text-slate-900">How is Serpvision different from tools like Ahrefs or Semrush?</span>
							<svg class="w-4 h-4 text-slate-400 shrink-0 transition-transform" data-role="faq-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
							</svg>
						</div>
						<div id="faq-4" class="faq-panel" data-role="faq-panel">
							<p class="px-5 pb-5 text-sm text-slate-600 leading-relaxed">Those are powerful tools built around large keyword databases. Serpvision focuses on project-level SEO management: tracking your specific keywords, auditing your actual pages, monitoring your chosen competitors, and surfacing actionable data in a clean interface — without the learning curve or the cost of an all-in-one platform.</p>
						</div>
					</div>
					<div class="faq-item bg-white border border-slate-200/80 rounded-2xl shadow-sm overflow-hidden">
						<div class="w-full flex items-center justify-between gap-4 p-5 cursor-pointer" data-action="toggle-faq" aria-expanded="false" aria-controls="faq-4">
							<span class="text-sm sm:text-base font-semibold text-slate-900">Is there a free plan?</span>
							<svg class="w-4 h-4 text-slate-400 shrink-0 transition-transform" data-role="faq-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
							</svg>
						</div>
						<div id="faq-4" class="faq-panel" data-role="faq-panel">
							<p class="px-5 pb-5 text-sm text-slate-600 leading-relaxed">Yes. You can start without a credit card. The free plan lets you create projects, add keywords, and explore the core features. When you need more capacity, you can upgrade at any point.</p>
						</div>
					</div>
				</div>
				<p class="text-center mt-8 text-sm text-slate-400">More questions?
					<a href="/faq" class="text-indigo-600 hover:underline font-medium inline-flex items-center gap-2">See all FAQs 
						<svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
						</svg>
					</a>
				</p>
			</div>
		</section>
		<section class="pb-16 px-4">
			<div class="max-w-4xl mx-auto">
				<div class="relative overflow-hidden rounded-3xl p-10 sm:p-14 text-center bg-gradient-to-b from-indigo-600 to-indigo-900 shadow-xl shadow-indigo-200/50">
					<h2 class="text-3xl sm:text-4xl font-extrabold text-white mb-3">Bring your SEO projects into one clear view.</h2>
					<p class="text-indigo-100 text-lg mb-8">Start with a project, add the keywords that matter and review the signals that help you decide what to do next.</p>
					<div class="flex flex-col sm:flex-row items-center justify-center gap-3">
						<a href="<?php echo esc_url(serpvision_url('register')); ?>" class="focus-ring inline-flex items-center gap-2 bg-white hover:bg-slate-50 text-indigo-600 rounded-xl px-8 py-3.5 text-base font-bold transition-all duration-200 active:scale-95 shadow-lg">
							Create free account
							<svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
							</svg>
						</a>
						<a href="/pricing" class="focus-ring inline-flex items-center justify-center border border-indigo-400 hover:border-indigo-300 text-indigo-100 hover:text-white rounded-xl px-8 py-3.5 text-base font-semibold transition-all duration-200">
							Review pricing
						</a>
					</div>
					<p class="text-indigo-300 text-xs mt-5">No credit card required. Free plan available.</p>
				</div>
			</div>
		</section>
	</main>
	<?php get_footer(); ?>
<?php serpvision_faq_schema([
	['q' => 'What exactly does Serpvision do?',
	 'a' => 'Serpvision is an SEO management platform. It tracks keyword rankings, runs site audits, monitors competitors, and integrates with Google Search Console — so you can understand what\'s happening with your SEO and make informed decisions without jumping between tools.'],
	['q' => 'Can I manage multiple websites or client projects?',
	 'a' => 'Yes. Serpvision supports multiple projects, each with its own domain, keywords, competitors, and settings. It works for individual site owners, freelancers managing several clients, and agencies running dozens of projects.'],
	['q' => 'Is Serpvision only for SEO experts?',
	 'a' => 'No. The product is designed to be useful for SEO specialists while staying understandable for website owners, founders and marketing managers who need a clear picture of their project\'s status without needing to learn every SEO concept.'],
	['q' => 'Do I need to connect Google Search Console?',
	 'a' => 'No, it\'s optional. Rank tracking and site audits work without it. But connecting Search Console gives you real click, impression, and CTR data alongside your rank data — which makes the overall picture significantly more complete.'],
	['q' => 'How is Serpvision different from tools like Ahrefs or Semrush?',
	 'a' => 'Those are powerful tools built around large keyword databases. Serpvision focuses on project-level SEO management: tracking your specific keywords, auditing your actual pages, monitoring your chosen competitors, and surfacing actionable data in a clean interface — without the learning curve or the cost of an all-in-one platform.'],
	['q' => 'Is there a free plan?',
	 'a' => 'Yes. You can start without a credit card. The free plan lets you create projects, add keywords, and explore the core features. When you need more capacity, you can upgrade at any point.'],
]); ?>