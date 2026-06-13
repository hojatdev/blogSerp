<?php get_header(); ?>
	<main>
		<section class="relative overflow-hidden bg-gradient-to-b from-indigo-50 via-indigo-50/40 to-white px-4 py-20 sm:py-24">
			<div class="absolute inset-0 dashboard-grid-bg opacity-70" aria-hidden="true"></div>
			<div class="relative mx-auto max-w-6xl">
				<div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
					<div class="text-center lg:text-left">
						<div class="inline-flex items-center gap-2 py-1.5 text-xs font-semibold text-slate-600 mb-4">
							<span class="w-1.5 h-1.5 bg-emerald-500 rounded-full animate-pulse"></span>
							Keyword rank tracking for real SEO decisions
						</div>
						<h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-tight tracking-tight mb-6">
							Track keyword rankings<br class="hidden sm:block"> without losing the context.
						</h1>
						<p class="text-lg text-slate-500 max-w-xl mx-auto lg:mx-0 mb-8 leading-relaxed">
							Serpvision monitors your keyword positions by country, device, search engine, and competitor — then connects the movement to pages, audits, and Search Console data so you know what changed and what to do next.
						</p>
						<div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-3 mb-5">
							<a href="<?php echo esc_url(serpvision_url('register')); ?>" class="w-full sm:w-auto bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl px-7 py-3.5 text-base font-semibold transition-all duration-200 active:scale-95 shadow-lg shadow-indigo-200">Start tracking keywords</a>
							<a href="/pricing" class="w-full sm:w-auto border border-slate-200 bg-white hover:bg-slate-50 text-slate-700 rounded-xl px-7 py-3.5 text-base font-semibold transition-all duration-200 active:scale-95">Estimate monthly cost</a>
						</div>
						<p class="text-xs text-slate-400">No credit card required. Usage-based pricing. Start with the keywords that matter most.</p>
					</div>

					<!-- Product card -->
					<div class="bg-white rounded-2xl shadow-xl border border-slate-200/80 p-4 lg:p-5">
						<div class="flex items-center gap-1.5 mb-5">
							<span class="w-3 h-3 rounded-full bg-red-400"></span>
							<span class="w-3 h-3 rounded-full bg-amber-400"></span>
							<span class="w-3 h-3 rounded-full bg-emerald-400"></span>
							<div class="ml-3 flex-1 bg-slate-100 rounded h-5 flex items-center px-3 overflow-hidden">
								<span class="text-xs text-slate-400 font-mono truncate">app.serpvision.com/projects/store/rank-tracking</span>
							</div>
						</div>
						<div class="grid grid-cols-3 gap-3 mb-4">
							<div class="bg-slate-50 rounded-xl p-3 border border-slate-100">
								<p class="text-xs text-slate-500 mb-1">Tracked keywords</p>
								<p class="text-xl font-bold text-slate-900">248</p>
								<p class="text-xs text-slate-400 mt-0.5">Google · US</p>
							</div>
							<div class="bg-slate-50 rounded-xl p-3 border border-slate-100">
								<p class="text-xs text-slate-500 mb-1">Top 10</p>
								<p class="text-xl font-bold text-slate-900">42</p>
								<p class="text-xs text-emerald-600 font-medium mt-0.5">↑ 6 this week</p>
							</div>
							<div class="bg-slate-50 rounded-xl p-3 border border-slate-100">
								<p class="text-xs text-slate-500 mb-1">Needs review</p>
								<p class="text-xl font-bold text-slate-900">9</p>
								<p class="text-xs text-amber-600 font-medium mt-0.5">drops found</p>
							</div>
						</div>
						<div class="rounded-xl border border-slate-100 overflow-hidden mb-4">
							<table class="w-full text-xs">
								<thead class="bg-slate-50">
									<tr>
										<th class="text-left px-3 py-2 text-slate-500 font-medium">Keyword</th>
										<th class="text-center px-3 py-2 text-slate-500 font-medium">You</th>
										<th class="text-center px-3 py-2 text-slate-500 font-medium hidden sm:table-cell">Change</th>
										<th class="text-center px-3 py-2 text-slate-500 font-medium hidden sm:table-cell">Best competitor</th>
									</tr>
								</thead>
								<tbody class="divide-y divide-slate-100">
									<tr class="hover:bg-slate-50/70 transition-colors">
										<td class="px-3 py-2.5 font-medium text-slate-700">rank tracking tool</td>
										<td class="px-3 py-2.5 text-center"><span class="inline-block bg-emerald-100 text-emerald-700 rounded-lg px-2 py-0.5 font-semibold">#4</span></td>
										<td class="px-3 py-2.5 text-center hidden sm:table-cell"><span class="text-emerald-600 font-medium">↑ 3</span></td>
										<td class="px-3 py-2.5 text-center hidden sm:table-cell text-slate-500">#2</td>
									</tr>
									<tr class="hover:bg-slate-50/70 transition-colors">
										<td class="px-3 py-2.5 font-medium text-slate-700">keyword position checker</td>
										<td class="px-3 py-2.5 text-center"><span class="inline-block bg-amber-100 text-amber-700 rounded-lg px-2 py-0.5 font-semibold">#11</span></td>
										<td class="px-3 py-2.5 text-center hidden sm:table-cell"><span class="text-red-500 font-medium">↓ 2</span></td>
										<td class="px-3 py-2.5 text-center hidden sm:table-cell text-slate-500">#7</td>
									</tr>
									<tr class="hover:bg-slate-50/70 transition-colors">
										<td class="px-3 py-2.5 font-medium text-slate-700">local seo tracker</td>
										<td class="px-3 py-2.5 text-center"><span class="inline-block bg-emerald-100 text-emerald-700 rounded-lg px-2 py-0.5 font-semibold">#6</span></td>
										<td class="px-3 py-2.5 text-center hidden sm:table-cell"><span class="text-emerald-600 font-medium">↑ 1</span></td>
										<td class="px-3 py-2.5 text-center hidden sm:table-cell text-slate-500">#8</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="rounded-xl bg-indigo-50 border border-indigo-100 p-4">
							<p class="text-xs font-semibold text-indigo-700 mb-1">Suggested next step</p>
							<p class="text-sm text-indigo-900 leading-relaxed">Review the page ranking for “keyword position checker”. It dropped on desktop while mobile stayed stable.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="py-8 bg-white border-y border-slate-200/70">
			<div class="max-w-6xl mx-auto px-4 grid grid-cols-2 md:grid-cols-4 gap-4 text-center">

				<div class="flex flex-col items-center">
					<div class="w-10 h-10 rounded-xl bg-slate-50 border border-slate-100 flex items-center justify-center mb-3">
						<svg class="w-5 h-5 text-slate-900" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" d="m6.115 5.19.319 1.913A6 6 0 0 0 8.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 0 0 2.288-4.042 1.087 1.087 0 0 0-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 0 1-.98-.314l-.295-.295a1.125 1.125 0 0 1 0-1.591l.13-.132a1.125 1.125 0 0 1 1.3-.21l.603.302a.809.809 0 0 0 1.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 0 0 1.528-1.732l.146-.292M6.115 5.19A9 9 0 1 0 17.18 4.64M6.115 5.19A8.965 8.965 0 0 1 12 3c1.929 0 3.716.607 5.18 1.64" />
						</svg>
					</div>
					<p class="text-sm font-semibold text-slate-900">Country-level tracking</p>
					<p class="text-xs text-slate-500 mt-1">Separate markets cleanly</p>
				</div>

				<div class="flex flex-col items-center">
					<div class="w-10 h-10 rounded-xl bg-slate-50 border border-slate-100 flex items-center justify-center mb-3">
						<svg class="w-5 h-5 text-slate-900" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
						</svg>
					</div>
					<p class="text-sm font-semibold text-slate-900">Mobile &amp; desktop</p>
					<p class="text-xs text-slate-500 mt-1">Compare device behavior</p>
				</div>
				<div class="flex flex-col items-center">
					<div class="w-10 h-10 rounded-xl bg-slate-50 border border-slate-100 flex items-center justify-center mb-3">
						<svg class="w-5 h-5 text-slate-900" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
						</svg>
					</div>
					<p class="text-sm font-semibold text-slate-900">Competitor positions</p>
					<p class="text-xs text-slate-500 mt-1">See who moved first</p>
				</div>

				<div class="flex flex-col items-center">
					<div class="w-10 h-10 rounded-xl bg-slate-50 border border-slate-100 flex items-center justify-center mb-3">
						<svg class="w-5 h-5 text-slate-900" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
						</svg>
					</div>
					<p class="text-sm font-semibold text-slate-900">Usage-based cost</p>
					<p class="text-xs text-slate-500 mt-1">Track only what matters</p>
				</div>
			</div>
		</section>
		
		<section class="py-20 px-4 bg-slate-50">
			<div class="max-w-6xl mx-auto">
				<div class="text-center mb-14">
					<p class="text-sm font-semibold text-indigo-600 mb-3">Why rank tracking matters?</p>
					<h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Rankings are only useful when they lead to action</h2>
					<p class="text-lg text-slate-500 max-w-2xl mx-auto">A position number alone does not tell you why traffic changed. Serpvision turns rank movement into a workflow you can actually use.</p>
				</div>
				<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
					<article class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-sm">
						<div class="w-11 h-11 rounded-xl bg-red-100 flex items-center justify-center mb-4">
							<svg class="w-5 h-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l4.286-4.286a11.948 11.948 0 0 1 4.306 6.43l.776 2.898m0 0 3.182-5.511m-3.182 5.51-5.511-3.181" />
							</svg>
						</div>
						<h3 class="font-semibold text-slate-900 mb-2">Catch drops before they become reports</h3>
						<p class="text-sm text-slate-500 leading-relaxed">Spot keywords that slipped, filter by priority, and decide whether to update content, fix technical issues, or monitor the change.</p>
					</article>
					<article class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-sm">
						<div class="w-11 h-11 rounded-xl bg-indigo-100 flex items-center justify-center mb-4">
							<svg class="w-5 h-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
  								<path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
							</svg>
						</div>
						<h3 class="font-semibold text-slate-900 mb-2">Know when competitors overtake you</h3>
						<p class="text-sm text-slate-500 leading-relaxed">Track competitor positions on the same keywords, not in a separate spreadsheet. See gaps and threats inside the same ranking table.</p>
					</article>
					<article class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-sm">
						<div class="w-11 h-11 rounded-xl bg-amber-100 flex items-center justify-center mb-4">
							<svg class="w-5 h-5 text-amber-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
							</svg>
						</div>
						<h3 class="font-semibold text-slate-900 mb-2">Connect rankings to real performance</h3>
						<p class="text-sm text-slate-500 leading-relaxed">Pair rankings with Search Console metrics so position changes are connected to impressions, clicks, CTR, and the pages behind them.</p>
					</article>
				</div>
			</div>
		</section>

		<section class="py-20 px-4 bg-white">
			<div class="max-w-6xl mx-auto">
				<div class="text-center mb-14">
					<p class="text-sm font-semibold text-indigo-600 mb-3">Core features</p>
					<h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Everything you need to monitor keyword visibility</h2>
					<p class="text-lg text-slate-500 max-w-2xl mx-auto">Built for SEO specialists, agencies, founders, and content teams who need clean tracking without a bloated enterprise suite.</p>
				</div>
				<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
					<div class="bg-slate-50 border border-slate-200/80 rounded-2xl p-6 hover:shadow-md transition-all duration-200">
						<div class="w-11 h-11 rounded-xl bg-indigo-100 flex items-center justify-center mb-4">
							<svg class="w-5 h-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
							</svg>
						</div>
						<h3 class="text-base font-semibold text-slate-900 mb-2">Keyword groups and tags</h3>
						<p class="text-sm text-slate-500 leading-relaxed">Group keywords by campaign, topic, funnel stage, page type, or client. Keep reporting focused and easy to filter.</p>
					</div>
					<div class="bg-slate-50 border border-slate-200/80 rounded-2xl p-6 hover:shadow-md transition-all duration-200">
						<div class="w-11 h-11 rounded-xl bg-emerald-100 flex items-center justify-center mb-4">
							<svg class="w-5 h-5 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
								<path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
							</svg>
						</div>
						<h3 class="text-base font-semibold text-slate-900 mb-2">Local and global checks</h3>
						<p class="text-sm text-slate-500 leading-relaxed">Track rankings for a specific country or market so international and local campaigns do not get blended together.</p>
					</div>
					<div class="bg-slate-50 border border-slate-200/80 rounded-2xl p-6 hover:shadow-md transition-all duration-200">
						<div class="w-11 h-11 rounded-xl bg-purple-100 flex items-center justify-center mb-4">
							<svg class="w-5 h-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
								<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
							</svg>
						</div>
						<h3 class="text-base font-semibold text-slate-900 mb-2">Ranking history and trends</h3>
						<p class="text-sm text-slate-500 leading-relaxed">See how each keyword moved over time. Use trend lines to distinguish normal fluctuation from meaningful change.</p>
					</div>
					<div class="bg-slate-50 border border-slate-200/80 rounded-2xl p-6 hover:shadow-md transition-all duration-200">
						<div class="w-11 h-11 rounded-xl bg-amber-100 flex items-center justify-center mb-4">
							<svg class="w-5 h-5 text-amber-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
								<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
							</svg>
						</div>
						<h3 class="text-base font-semibold text-slate-900 mb-2">Mobile and desktop views</h3>
						<p class="text-sm text-slate-500 leading-relaxed">Separate mobile and desktop rankings to understand device-specific movement and avoid misleading averages.</p>
					</div>
					<div class="bg-slate-50 border border-slate-200/80 rounded-2xl p-6 hover:shadow-md transition-all duration-200">
						<div class="w-11 h-11 rounded-xl bg-rose-100 flex items-center justify-center mb-4">
							<svg class="w-5 h-5 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
							</svg>
						</div>
						<h3 class="text-base font-semibold text-slate-900 mb-2">Search Console context</h3>
						<p class="text-sm text-slate-500 leading-relaxed">Connect rank position with clicks, impressions, and CTR so your team can prioritize keywords that actually affect traffic.</p>
					</div>
					<div class="bg-slate-50 border border-slate-200/80 rounded-2xl p-6 hover:shadow-md transition-all duration-200">
						<div class="w-11 h-11 rounded-xl bg-cyan-100 flex items-center justify-center mb-4">
							<svg class="w-5 h-5 text-cyan-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
								<path stroke-linecap="round" stroke-linejoin="round" d="M3 8.25V18a2.25 2.25 0 0 0 2.25 2.25h13.5A2.25 2.25 0 0 0 21 18V8.25m-18 0V6a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 6v2.25m-18 0h18M5.25 6h.008v.008H5.25V6ZM7.5 6h.008v.008H7.5V6Zm2.25 0h.008v.008H9.75V6Z" />
							</svg>
						</div>
						<h3 class="text-base font-semibold text-slate-900 mb-2">Drop and gain detection</h3>
						<p class="text-sm text-slate-500 leading-relaxed">Filter important gains, drops, lost top-10 positions, and keywords approaching page-one visibility.</p>
					</div>
				</div>
			</div>
		</section>
		
		<section class="py-20 px-4 bg-slate-50">
			<div class="max-w-6xl mx-auto">
				<div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
					<div>
						<p class="text-sm font-semibold text-indigo-600 mb-3">Tracking modes</p>
						<h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-5">Choose the tracking setup that matches the decision</h2>
						<p class="text-lg text-slate-500 mb-8 leading-relaxed">Not every keyword needs the same frequency or depth. Track priority terms closely, monitor long-tail groups lightly, and keep costs aligned with value.</p>
						<div class="flex flex-wrap gap-2" role="tablist" aria-label="Rank tracking modes">
							<button class="rounded-full px-4 py-2 text-sm font-semibold border transition-all duration-200 active:scale-95 bg-white text-slate-600 border-slate-200 hover:bg-slate-50 hover:text-slate-900" data-action="switch-tab" data-tab="priority" aria-selected="false">
								Priority keywords
							</button>

							<button class="rounded-full px-4 py-2 text-sm font-semibold border transition-all duration-200 active:scale-95 bg-white text-slate-600 border-slate-200 hover:bg-slate-50 hover:text-slate-900" data-action="switch-tab" data-tab="local" aria-selected="false">
								Local campaigns
							</button>

							<button class="rounded-full px-4 py-2 text-sm font-semibold border transition-all duration-200 active:scale-95 bg-indigo-600 text-white border-indigo-600 shadow-sm hover:bg-indigo-700 hover:border-indigo-700" data-action="switch-tab" data-tab="competitor" aria-selected="true">
								Competitor watch
							</button>
						</div>
					</div>
					<div class="bg-white border border-slate-200/80 rounded-2xl shadow-sm p-6">
						<div class="tab-panel" data-role="tab-panel" data-tab-panel="priority">
							<span class="inline-flex items-center rounded-full bg-indigo-100 px-3 py-1 text-xs font-semibold text-indigo-700 mb-4">Daily checks</span>
							<h3 class="text-xl font-bold text-slate-900 mb-3">Use daily tracking for business-critical terms</h3>
							<p class="text-sm text-slate-500 leading-relaxed mb-5">Monitor the keywords tied to revenue, leads, or important landing pages. Daily movement helps you catch drops, validate content updates, and report progress without waiting for monthly data.</p>
							<ul class="space-y-3 text-sm text-slate-600">
								<li class="flex gap-2"><span class="text-emerald-500 font-bold">✓</span> Track top money keywords and high-intent queries</li>
								<li class="flex gap-2"><span class="text-emerald-500 font-bold">✓</span> Review drops against audit issues and page changes</li>
								<li class="flex gap-2"><span class="text-emerald-500 font-bold">✓</span> Compare before and after optimization work</li>
							</ul>
						</div>
						<div class="tab-panel" data-role="tab-panel" data-tab-panel="local">
							<span class="inline-flex items-center rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-700 mb-4">Country and device</span>
							<h3 class="text-xl font-bold text-slate-900 mb-3">Keep local and device rankings separate</h3>
							<p class="text-sm text-slate-500 leading-relaxed mb-5">A keyword can behave differently by country, city, mobile, and desktop. Separate tracking prevents your team from treating mixed signals as one average number.</p>
							<ul class="space-y-3 text-sm text-slate-600">
								<li class="flex gap-2"><span class="text-emerald-500 font-bold">✓</span> Track search markets independently</li>
								<li class="flex gap-2"><span class="text-emerald-500 font-bold">✓</span> Compare desktop and mobile ranking movement</li>
								<li class="flex gap-2"><span class="text-emerald-500 font-bold">✓</span> Prioritize pages for local or regional optimization</li>
							</ul>
						</div>
						<div class="tab-panel is-active" data-role="tab-panel" data-tab-panel="competitor">
							<span class="inline-flex items-center rounded-full bg-amber-100 px-3 py-1 text-xs font-semibold text-amber-700 mb-4">Gap detection</span>
							<h3 class="text-xl font-bold text-slate-900 mb-3">Watch competitors on the same keywords</h3>
							<p class="text-sm text-slate-500 leading-relaxed mb-5">Competitor tracking helps you see whether a ranking drop is isolated to your page or part of a wider SERP movement. It also reveals pages worth studying when competitors climb.</p>
							<ul class="space-y-3 text-sm text-slate-600">
								<li class="flex gap-2"><span class="text-emerald-500 font-bold">✓</span> Compare your domain with selected competitors</li>
								<li class="flex gap-2"><span class="text-emerald-500 font-bold">✓</span> Identify keywords where competitors moved first</li>
								<li class="flex gap-2"><span class="text-emerald-500 font-bold">✓</span> Build content updates around real visibility gaps</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="py-20 px-4 bg-white">
			<div class="max-w-5xl mx-auto">
				<div class="text-center mb-14">
					<p class="text-xs font-semibold uppercase tracking-widest text-indigo-600 mb-3">Workflow</p>
					<h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">From keyword list to next action</h2>
					<p class="text-lg text-slate-500 max-w-xl mx-auto">Serpvision keeps the setup simple, then gives you enough context to make better SEO decisions.</p>
				</div>
				<div class="grid grid-cols-1 md:grid-cols-4 gap-6">
					<div class="text-center">
						<div class="w-12 h-12 rounded-2xl bg-indigo-600 text-white flex items-center justify-center text-lg font-bold mx-auto mb-4">1</div>
						<h3 class="font-semibold text-slate-900 mb-2 text-sm">Add your project</h3>
						<p class="text-xs text-slate-500 leading-relaxed">Set the domain, target market, preferred search engine, and project settings.</p>
					</div>
					<div class="text-center">
						<div class="w-12 h-12 rounded-2xl bg-indigo-600 text-white flex items-center justify-center text-lg font-bold mx-auto mb-4">2</div>
						<h3 class="font-semibold text-slate-900 mb-2 text-sm">Import keywords</h3>
						<p class="text-xs text-slate-500 leading-relaxed">Add keywords manually or organize them by topic, page, client, or campaign.</p>
					</div>
					<div class="text-center">
						<div class="w-12 h-12 rounded-2xl bg-indigo-600 text-white flex items-center justify-center text-lg font-bold mx-auto mb-4">3</div>
						<h3 class="font-semibold text-slate-900 mb-2 text-sm">Choose frequency</h3>
						<p class="text-xs text-slate-500 leading-relaxed">Track daily, weekly, or at a lighter cadence depending on keyword importance.</p>
					</div>
					<div class="text-center">
						<div class="w-12 h-12 rounded-2xl bg-indigo-600 text-white flex items-center justify-center text-lg font-bold mx-auto mb-4">4</div>
						<h3 class="font-semibold text-slate-900 mb-2 text-sm">Prioritize fixes</h3>
						<p class="text-xs text-slate-500 leading-relaxed">Use movement, page data, competitors, and audits to decide what to optimize next.</p>
					</div>
				</div>
			</div>
		</section>
		
		<section class="py-20 px-4 bg-slate-50">
			<div class="max-w-6xl mx-auto">
				<div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
					<div class="bg-white border border-slate-200/80 rounded-2xl shadow-sm p-6 order-2 lg:order-1">
						<div class="flex items-center justify-between mb-4">
							<div>
								<p class="text-sm font-semibold text-slate-800">Position history</p>
								<p class="text-xs text-slate-400">keyword rank tracker · Google UK · Mobile</p>
							</div>
							<span class="bg-emerald-100 text-emerald-700 text-xs font-semibold px-2.5 py-1 rounded-full">↑ Trending up</span>
						</div>
						<svg viewBox="0 0 400 140" class="w-full h-32 mb-4" preserveAspectRatio="none" aria-hidden="true">
							<defs><linearGradient id="rankChartGrad" x1="0" y1="0" x2="0" y2="1"><stop offset="0%" stop-color="#6366f1" stop-opacity="0.2"></stop><stop offset="100%" stop-color="#6366f1" stop-opacity="0"></stop></linearGradient></defs>
							<line x1="0" y1="35" x2="400" y2="35" stroke="#f1f5f9" stroke-width="1"></line><line x1="0" y1="70" x2="400" y2="70" stroke="#f1f5f9" stroke-width="1"></line><line x1="0" y1="105" x2="400" y2="105" stroke="#f1f5f9" stroke-width="1"></line>
							<path d="M0,118 L50,110 L100,95 L150,80 L200,72 L250,60 L300,42 L350,36 L400,24 L400,140 L0,140 Z" fill="url(#rankChartGrad)"></path>
							<path d="M0,118 L50,110 L100,95 L150,80 L200,72 L250,60 L300,42 L350,36 L400,24" fill="none" stroke="#6366f1" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
							<circle cx="400" cy="24" r="4" fill="#6366f1"></circle>
						</svg>
						<div class="flex items-center justify-between text-xs text-slate-400 mb-6"><span>30 days ago</span><span class="font-medium text-emerald-600">#18 → #5</span><span>Today</span></div>
						<div class="grid grid-cols-2 gap-3">
							<div class="rounded-xl bg-slate-50 border border-slate-100 p-4"><p class="text-xs text-slate-500">Ranking page</p><p class="text-sm font-semibold text-slate-900 mt-1 truncate">/features/rank-tracking</p></div>
							<div class="rounded-xl bg-slate-50 border border-slate-100 p-4"><p class="text-xs text-slate-500">SERP note</p><p class="text-sm font-semibold text-slate-900 mt-1">Competitor lost #3</p></div>
						</div>
					</div>
					<div class="order-1 lg:order-2">
						<p class="text-xs font-semibold uppercase tracking-widest text-indigo-600 mb-3">Ranking history</p>
						<h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-5">See the story behind every position change</h2>
						<p class="text-lg text-slate-500 mb-8 leading-relaxed">A rank tracker should do more than show today’s number. Serpvision helps you understand whether a change came from your page, a competitor, a technical issue, or normal SERP movement.</p>
						<div class="space-y-4">
							<div class="flex items-start gap-3"><div class="w-5 h-5 rounded-full bg-indigo-600 flex items-center justify-center shrink-0 mt-0.5"><svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg></div><div><p class="font-semibold text-slate-800 text-sm">Map keywords to ranking pages</p><p class="text-slate-500 text-sm mt-0.5">See which URL is ranking and spot unexpected page swaps or cannibalization signals.</p></div></div>
							<div class="flex items-start gap-3"><div class="w-5 h-5 rounded-full bg-indigo-600 flex items-center justify-center shrink-0 mt-0.5"><svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg></div><div><p class="font-semibold text-slate-800 text-sm">Compare against competitor movement</p><p class="text-slate-500 text-sm mt-0.5">Understand if your ranking changed because you improved, competitors dropped, or the SERP reshuffled.</p></div></div>
							<div class="flex items-start gap-3"><div class="w-5 h-5 rounded-full bg-indigo-600 flex items-center justify-center shrink-0 mt-0.5"><svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg></div><div><p class="font-semibold text-slate-800 text-sm">Prioritize based on impact</p><p class="text-slate-500 text-sm mt-0.5">Focus on keywords where movement changes traffic potential, not noise from low-value queries.</p></div></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="py-20 px-4 bg-white">
			<div class="max-w-5xl mx-auto">
				<div class="rounded-2xl border border-indigo-200/80 bg-white p-8 shadow-xl shadow-indigo-900/[0.04] lg:p-10 relative overflow-hidden">
					<div class="pointer-events-none absolute inset-0 bg-gradient-to-br from-indigo-50/70 via-white to-cyan-50/40" aria-hidden="true"></div>
					<div class="relative grid grid-cols-1 lg:grid-cols-[1fr_0.9fr] gap-10 items-center">
						<div>
							<p class="text-xs font-semibold uppercase tracking-widest text-indigo-600 mb-3">Usage-based pricing</p>
							<h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Track more carefully, not more expensively</h2>
							<p class="text-lg text-slate-500 leading-relaxed mb-6">Serpvision is built around usage. You can track priority keywords daily, monitor lower-priority groups less often, and keep your monthly cost aligned with your real workflow.</p>
							<a href="/pricing" class="inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl px-6 py-3 text-sm font-semibold transition-all duration-200 active:scale-95">Estimate your cost <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></a>
						</div>
						<div class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-sm">
							<p class="text-sm font-medium uppercase tracking-wide text-slate-400 text-center">Example monthly setup</p>
							<p class="mt-2 text-5xl font-extrabold tabular-nums tracking-tight text-indigo-600 text-center">$16.50</p>
							<div class="mt-6 space-y-3 text-sm">
								<div class="flex justify-between gap-4 border-b border-slate-100 pb-3"><span class="text-slate-500">100 keywords · 2 devices · every 2 days</span><strong class="text-slate-900">$15.00</strong></div>
								<div class="flex justify-between gap-4 border-b border-slate-100 pb-3"><span class="text-slate-500">2 competitors</span><strong class="text-slate-900">$1.00</strong></div>
								<div class="flex justify-between gap-4"><span class="text-slate-500">1 Search Console site</span><strong class="text-slate-900">$0.50</strong></div>
							</div>
							<p class="text-xs text-slate-400 mt-5 text-center">Illustrative estimate. Final usage depends on your account settings.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="py-20 px-4 bg-slate-50">
			<div class="max-w-6xl mx-auto">
				<div class="text-center mb-14">
					<p class="text-xs font-semibold uppercase tracking-widest text-indigo-600 mb-3">Use cases</p>
					<h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Built for the teams that live in ranking data</h2>
					<p class="text-lg text-slate-500 max-w-2xl mx-auto">Different teams ask different questions. Serpvision keeps the tracking flexible enough for all of them.</p>
				</div>
				<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
					<div class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-sm"><h3 class="font-semibold text-slate-900 mb-2">SEO specialists</h3><p class="text-sm text-slate-500 leading-relaxed">Monitor priority keywords, validate optimization work, and quickly identify pages that need attention before the next reporting cycle.</p></div>
					<div class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-sm"><h3 class="font-semibold text-slate-900 mb-2">Agencies and consultants</h3><p class="text-sm text-slate-500 leading-relaxed">Separate projects by client, track each market independently, and use clear ranking movement to guide calls and monthly updates.</p></div>
					<div class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-sm"><h3 class="font-semibold text-slate-900 mb-2">Content teams</h3><p class="text-sm text-slate-500 leading-relaxed">See which articles are gaining, losing, or sitting just outside high-value positions. Use that signal to prioritize refreshes.</p></div>
					<div class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-sm"><h3 class="font-semibold text-slate-900 mb-2">Business owners</h3><p class="text-sm text-slate-500 leading-relaxed">Understand whether your site is becoming more visible without needing to interpret complex SEO reports or multiple tools.</p></div>
				</div>
			</div>
		</section>
			
		
		<section class="py-20 px-4 bg-white">
			<div class="max-w-3xl mx-auto">
				<div class="text-center mb-14">
					<p class="text-xs font-semibold uppercase tracking-widest text-indigo-600 mb-3">FAQ</p>
					<h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Keyword rank tracking questions</h2>
					<p class="text-lg text-slate-500">Answers to common questions before you start tracking.</p>
				</div>
				<div class="flex flex-col gap-3" data-role="faq-list">
					<div class="faq-item bg-slate-50 border border-slate-200/80 rounded-2xl overflow-hidden" data-role="faq-item"><button class="w-full flex items-center justify-between px-5 py-4 text-left" data-action="toggle-faq" aria-expanded="false"><span class="font-semibold text-slate-900 text-sm pr-4">What is keyword rank tracking?</span><svg class="faq-icon w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg></button><div class="faq-body" data-role="faq-body"><p class="px-5 pb-4 text-sm text-slate-500 leading-relaxed">Keyword rank tracking monitors where your pages appear in search results for selected keywords over time. It helps you understand gains, drops, competitors, and whether SEO work is moving visibility in the right direction.</p></div></div>
					<div class="faq-item bg-slate-50 border border-slate-200/80 rounded-2xl overflow-hidden" data-role="faq-item"><button class="w-full flex items-center justify-between px-5 py-4 text-left" data-action="toggle-faq" aria-expanded="false"><span class="font-semibold text-slate-900 text-sm pr-4">Can I track mobile and desktop separately?</span><svg class="faq-icon w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg></button><div class="faq-body" data-role="faq-body"><p class="px-5 pb-4 text-sm text-slate-500 leading-relaxed">Yes. Serpvision supports separate tracking views for device types so your team can understand where mobile and desktop performance differ.</p></div></div>
					<div class="faq-item bg-slate-50 border border-slate-200/80 rounded-2xl overflow-hidden" data-role="faq-item"><button class="w-full flex items-center justify-between px-5 py-4 text-left" data-action="toggle-faq" aria-expanded="false"><span class="font-semibold text-slate-900 text-sm pr-4">How often should rankings be checked?</span><svg class="faq-icon w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg></button><div class="faq-body" data-role="faq-body"><p class="px-5 pb-4 text-sm text-slate-500 leading-relaxed">Use daily checks for high-priority keywords, active campaigns, and competitive SERPs. For long-tail or lower-priority keyword groups, weekly or bi-weekly checks may be enough.</p></div></div>
					<div class="faq-item bg-slate-50 border border-slate-200/80 rounded-2xl overflow-hidden" data-role="faq-item"><button class="w-full flex items-center justify-between px-5 py-4 text-left" data-action="toggle-faq" aria-expanded="false"><span class="font-semibold text-slate-900 text-sm pr-4">Can I track competitors?</span><svg class="faq-icon w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg></button><div class="faq-body" data-role="faq-body"><p class="px-5 pb-4 text-sm text-slate-500 leading-relaxed">Yes. You can add competitor domains and compare their ranking positions against yours on the same keyword set.</p></div></div>
					<div class="faq-item bg-slate-50 border border-slate-200/80 rounded-2xl overflow-hidden" data-role="faq-item"><button class="w-full flex items-center justify-between px-5 py-4 text-left" data-action="toggle-faq" aria-expanded="false"><span class="font-semibold text-slate-900 text-sm pr-4">Is Search Console required?</span><svg class="faq-icon w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg></button><div class="faq-body" data-role="faq-body"><p class="px-5 pb-4 text-sm text-slate-500 leading-relaxed">No. Rank tracking works without Search Console. Connecting it adds context such as clicks, impressions, CTR, and average position so your decisions can be based on rankings and real performance data together.</p></div></div>
				</div>
			</div>
		</section>
	
		<section class="py-16 px-4">
			<div class="max-w-4xl mx-auto">
				<div class="bg-indigo-600 rounded-2xl p-10 sm:p-14 text-center">
					<h2 class="text-3xl sm:text-4xl font-extrabold text-white mb-3">Start tracking the keywords that matter.</h2>
					<p class="text-indigo-200 text-lg mb-8">Create a project, add your first keywords, and see ranking movement in a cleaner SEO workflow.</p>
					<div class="flex flex-col sm:flex-row items-center justify-center gap-3">
						<a href="/register" class="inline-flex items-center gap-2 bg-white hover:bg-slate-50 text-indigo-600 rounded-xl px-8 py-3.5 text-base font-bold transition-all duration-200 active:scale-95 shadow-lg">Start tracking <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></a>
						<a href="/pricing" class="inline-flex items-center gap-2 border border-indigo-400 hover:border-indigo-300 text-indigo-100 hover:text-white rounded-xl px-8 py-3.5 text-base font-semibold transition-all duration-200">Estimate cost</a>
					</div>
					<p class="text-indigo-300 text-xs mt-5">No credit card required. Usage-based pricing.</p>
				</div>
			</div>
		</section>
		
		
	</main>

	<?php get_footer(); ?>

	<script>
		document.querySelectorAll('[data-action="switch-tab"]').forEach((button) => {
			button.addEventListener('click', () => {
				const activeTab = button.dataset.tab;

				const baseClass = 'rounded-full px-4 py-2 text-sm font-semibold border transition-all duration-200 active:scale-95';
				const activeClass = 'bg-indigo-600 text-white border-indigo-600 shadow-sm hover:bg-indigo-700 hover:border-indigo-700';
				const inactiveClass = 'bg-white text-slate-600 border-slate-200 hover:bg-slate-50 hover:text-slate-900';

				document.querySelectorAll('[data-action="switch-tab"]').forEach((item) => {
					const selected = item.dataset.tab === activeTab;

					item.setAttribute('aria-selected', String(selected));
					item.className = selected
						? `${baseClass} ${activeClass}`
					: `${baseClass} ${inactiveClass}`;
				});

				document.querySelectorAll('[data-role="tab-panel"]').forEach((panel) => {
					panel.classList.toggle('is-active', panel.dataset.tabPanel === activeTab);
				});
			});
		});

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
				if (!isOpen) {
					item.classList.add('is-open');
					body.classList.add('is-open');
					button.setAttribute('aria-expanded', 'true');
				}
			});
		});

		document.addEventListener('keydown', (event) => {
			if (event.key === 'Escape') {
				setNav(false);
				document.querySelectorAll('[data-role="faq-item"]').forEach((el) => {
					el.classList.remove('is-open');
					el.querySelector('[data-role="faq-body"]').classList.remove('is-open');
					el.querySelector('[data-action="toggle-faq"]').setAttribute('aria-expanded', 'false');
				});
			}
		});
	</script>
<?php serpvision_faq_schema([
	['q' => 'What is keyword rank tracking?',
	 'a' => 'Keyword rank tracking monitors where your pages appear in search results for selected keywords over time. It helps you understand gains, drops, competitors, and whether SEO work is moving visibility in the right direction.'],
	['q' => 'Can I track mobile and desktop separately?',
	 'a' => 'Yes. Serpvision supports separate tracking views for device types so your team can understand where mobile and desktop performance differ.'],
	['q' => 'How often should rankings be checked?',
	 'a' => 'Use daily checks for high-priority keywords, active campaigns, and competitive SERPs. For long-tail or lower-priority keyword groups, weekly or bi-weekly checks may be enough.'],
	['q' => 'Can I track competitors?',
	 'a' => 'Yes. You can add competitor domains and compare their ranking positions against yours on the same keyword set.'],
	['q' => 'Is Search Console required?',
	 'a' => 'No. Rank tracking works without Search Console. Connecting it adds context such as clicks, impressions, CTR, and average position so your decisions can be based on rankings and real performance data together.'],
]); ?>