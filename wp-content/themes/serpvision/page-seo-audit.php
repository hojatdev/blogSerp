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
						Technical and on-page SEO audit
					</div>
					<h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-tight tracking-tight mb-6">
						Find every issue<br class="hidden sm:block"> before rankings do.
					</h1>
					<p class="text-lg text-slate-500 max-w-xl mx-auto lg:mx-0 mb-8 leading-relaxed">
						Serpvision crawls your site, surfaces technical and on-page issues by severity, and connects them to ranking and Search Console data so you fix the right things first.
					</p>
					<div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-3 mb-5">
						<a href="<?php echo esc_url(serpvision_url('register')); ?>" class="w-full sm:w-auto bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl px-7 py-3.5 text-base font-semibold transition-all duration-200 active:scale-95 shadow-lg shadow-indigo-200">Run a site audit</a>
						<a href="<?php echo esc_url(home_url('/pricing/')); ?>" class="w-full sm:w-auto border border-slate-200 bg-white hover:bg-slate-50 text-slate-700 rounded-xl px-7 py-3.5 text-base font-semibold transition-all duration-200 active:scale-95">See pricing</a>
					</div>
					<p class="text-xs text-slate-400">No credit card required. Usage-based pricing. Audit on your schedule.</p>
				</div>

				<!-- Audit dashboard mockup -->
				<div class="bg-white rounded-2xl shadow-xl border border-slate-200/80 p-4 lg:p-5">
					<div class="flex items-center gap-1.5 mb-5">
						<span class="w-3 h-3 rounded-full bg-red-400"></span>
						<span class="w-3 h-3 rounded-full bg-amber-400"></span>
						<span class="w-3 h-3 rounded-full bg-emerald-400"></span>
						<div class="ml-3 flex-1 bg-slate-100 rounded h-5 flex items-center px-3">
							<span class="text-xs text-slate-400 font-mono truncate">app.serpvision.com/projects/store/audit</span>
						</div>
					</div>
					<div class="grid grid-cols-3 gap-3 mb-4">
						<div class="bg-slate-50 rounded-xl p-3 border border-slate-100">
							<p class="text-xs text-slate-500 mb-1">Pages crawled</p>
							<p class="text-xl font-bold text-slate-900">312</p>
							<p class="text-xs text-slate-400 mt-0.5">Last scan: today</p>
						</div>
						<div class="bg-red-50 rounded-xl p-3 border border-red-100">
							<p class="text-xs text-slate-500 mb-1">Critical</p>
							<p class="text-xl font-bold text-red-600">7</p>
							<p class="text-xs text-red-500 font-medium mt-0.5">fix first</p>
						</div>
						<div class="bg-amber-50 rounded-xl p-3 border border-amber-100">
							<p class="text-xs text-slate-500 mb-1">Warnings</p>
							<p class="text-xl font-bold text-amber-600">34</p>
							<p class="text-xs text-amber-500 font-medium mt-0.5">review needed</p>
						</div>
					</div>
					<div class="rounded-xl border border-slate-100 overflow-hidden mb-4">
						<table class="w-full text-xs">
							<thead class="bg-slate-50">
								<tr>
									<th class="text-left px-3 py-2 text-slate-500 font-medium">Issue</th>
									<th class="text-center px-3 py-2 text-slate-500 font-medium">Pages</th>
									<th class="text-center px-3 py-2 text-slate-500 font-medium hidden sm:table-cell">Severity</th>
								</tr>
							</thead>
							<tbody class="divide-y divide-slate-100">
								<tr class="hover:bg-slate-50/70">
									<td class="px-3 py-2.5 font-medium text-slate-700">Missing meta descriptions</td>
									<td class="px-3 py-2.5 text-center font-semibold text-slate-800">28</td>
									<td class="px-3 py-2.5 text-center hidden sm:table-cell"><span class="bg-amber-100 text-amber-700 rounded-lg px-2 py-0.5 font-semibold">Medium</span></td>
								</tr>
								<tr class="hover:bg-slate-50/70">
									<td class="px-3 py-2.5 font-medium text-slate-700">Broken internal links</td>
									<td class="px-3 py-2.5 text-center font-semibold text-slate-800">5</td>
									<td class="px-3 py-2.5 text-center hidden sm:table-cell"><span class="bg-red-100 text-red-700 rounded-lg px-2 py-0.5 font-semibold">Critical</span></td>
								</tr>
								<tr class="hover:bg-slate-50/70">
									<td class="px-3 py-2.5 font-medium text-slate-700">Duplicate title tags</td>
									<td class="px-3 py-2.5 text-center font-semibold text-slate-800">11</td>
									<td class="px-3 py-2.5 text-center hidden sm:table-cell"><span class="bg-red-100 text-red-700 rounded-lg px-2 py-0.5 font-semibold">Critical</span></td>
								</tr>
								<tr class="hover:bg-slate-50/70">
									<td class="px-3 py-2.5 font-medium text-slate-700">Missing H1 tags</td>
									<td class="px-3 py-2.5 text-center font-semibold text-slate-800">9</td>
									<td class="px-3 py-2.5 text-center hidden sm:table-cell"><span class="bg-amber-100 text-amber-700 rounded-lg px-2 py-0.5 font-semibold">Medium</span></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="rounded-xl bg-indigo-50 border border-indigo-100 p-4">
						<p class="text-xs font-semibold text-indigo-700 mb-1">Suggested next step</p>
						<p class="text-sm text-indigo-900 leading-relaxed">Fix 5 broken internal links and deduplicate 11 title tags — these affect crawl budget and SERP appearance.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Stats bar -->
	<section class="py-8 bg-white border-y border-slate-200/70">
		<div class="max-w-6xl mx-auto px-4 grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
			<div class="flex flex-col items-center">
				<div class="w-10 h-10 rounded-xl bg-slate-50 border border-slate-100 flex items-center justify-center mb-3">
					<svg class="w-5 h-5 text-slate-900" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 1-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" /></svg>
				</div>
				<p class="text-sm font-semibold text-slate-900">Full site crawl</p>
				<p class="text-xs text-slate-500 mt-1">Every page, every issue</p>
			</div>
			<div class="flex flex-col items-center">
				<div class="w-10 h-10 rounded-xl bg-slate-50 border border-slate-100 flex items-center justify-center mb-3">
					<svg class="w-5 h-5 text-slate-900" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 4.5h14.25M3 9h9.75M3 13.5h9.75m4.5-4.5v12m0 0-3.75-3.75M17.25 21 21 17.25" /></svg>
				</div>
				<p class="text-sm font-semibold text-slate-900">Severity ranking</p>
				<p class="text-xs text-slate-500 mt-1">Fix the right things first</p>
			</div>
			<div class="flex flex-col items-center">
				<div class="w-10 h-10 rounded-xl bg-slate-50 border border-slate-100 flex items-center justify-center mb-3">
					<svg class="w-5 h-5 text-slate-900" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" /></svg>
				</div>
				<p class="text-sm font-semibold text-slate-900">Link analysis</p>
				<p class="text-xs text-slate-500 mt-1">Internal and external</p>
			</div>
			<div class="flex flex-col items-center">
				<div class="w-10 h-10 rounded-xl bg-slate-50 border border-slate-100 flex items-center justify-center mb-3">
					<svg class="w-5 h-5 text-slate-900" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" /></svg>
				</div>
				<p class="text-sm font-semibold text-slate-900">Repeat on schedule</p>
				<p class="text-xs text-slate-500 mt-1">Track audit progress</p>
			</div>
		</div>
	</section>

	<!-- Why audit matters -->
	<section class="py-20 px-4 bg-slate-50">
		<div class="max-w-6xl mx-auto">
			<div class="text-center mb-14">
				<p class="text-sm font-semibold text-indigo-600 mb-3">Why site audits matter</p>
				<h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Technical issues cost rankings silently</h2>
				<p class="text-lg text-slate-500 max-w-2xl mx-auto">Most SEO problems are not obvious until rankings drop. Auditing regularly catches them early and helps you prioritize fixes by impact.</p>
			</div>
			<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
				<article class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-sm">
					<div class="w-11 h-11 rounded-xl bg-red-100 flex items-center justify-center mb-4">
						<svg class="w-5 h-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" /></svg>
					</div>
					<h3 class="font-semibold text-slate-900 mb-2">Catch issues before they spread</h3>
					<p class="text-sm text-slate-500 leading-relaxed">A missing redirect, a broken link, or a duplicate title can quietly affect dozens of pages. Auditing regularly surfaces these before they compound.</p>
				</article>
				<article class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-sm">
					<div class="w-11 h-11 rounded-xl bg-indigo-100 flex items-center justify-center mb-4">
						<svg class="w-5 h-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" /></svg>
					</div>
					<h3 class="font-semibold text-slate-900 mb-2">Prioritize by severity, not volume</h3>
					<p class="text-sm text-slate-500 leading-relaxed">Not all issues matter equally. Serpvision groups problems by severity so your team spends time on the fixes that actually move rankings.</p>
				</article>
				<article class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-sm">
					<div class="w-11 h-11 rounded-xl bg-emerald-100 flex items-center justify-center mb-4">
						<svg class="w-5 h-5 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg>
					</div>
					<h3 class="font-semibold text-slate-900 mb-2">Track progress after fixes</h3>
					<p class="text-sm text-slate-500 leading-relaxed">Re-running an audit after a sprint shows you what improved, what remains, and whether new issues appeared during development work.</p>
				</article>
			</div>
		</div>
	</section>

	<!-- What it checks -->
	<section class="py-20 px-4 bg-white">
		<div class="max-w-6xl mx-auto">
			<div class="text-center mb-14">
				<p class="text-sm font-semibold text-indigo-600 mb-3">Audit coverage</p>
				<h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Everything a healthy SEO site needs checked</h2>
				<p class="text-lg text-slate-500 max-w-2xl mx-auto">Serpvision checks technical foundations, on-page signals, and crawlability — the three areas that affect how search engines read and rank your site.</p>
			</div>
			<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
				<div class="bg-slate-50 border border-slate-200/80 rounded-2xl p-6 hover:shadow-md transition-all duration-200">
					<div class="w-11 h-11 rounded-xl bg-indigo-100 flex items-center justify-center mb-4">
						<svg class="w-5 h-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 1-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" /></svg>
					</div>
					<h3 class="text-base font-semibold text-slate-900 mb-2">Crawl and status codes</h3>
					<p class="text-sm text-slate-500 leading-relaxed">Find 4xx errors, redirect chains, blocked pages, and crawl traps that stop search engines from fully indexing your site.</p>
				</div>
				<div class="bg-slate-50 border border-slate-200/80 rounded-2xl p-6 hover:shadow-md transition-all duration-200">
					<div class="w-11 h-11 rounded-xl bg-emerald-100 flex items-center justify-center mb-4">
						<svg class="w-5 h-5 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" /></svg>
					</div>
					<h3 class="text-base font-semibold text-slate-900 mb-2">Titles and meta descriptions</h3>
					<p class="text-sm text-slate-500 leading-relaxed">Identify missing, duplicate, too-short, or too-long title tags and meta descriptions across every crawled page.</p>
				</div>
				<div class="bg-slate-50 border border-slate-200/80 rounded-2xl p-6 hover:shadow-md transition-all duration-200">
					<div class="w-11 h-11 rounded-xl bg-purple-100 flex items-center justify-center mb-4">
						<svg class="w-5 h-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" /></svg>
					</div>
					<h3 class="text-base font-semibold text-slate-900 mb-2">Heading structure</h3>
					<p class="text-sm text-slate-500 leading-relaxed">Check H1 usage, skipped heading levels, and multiple H1s that can dilute relevance signals for a page.</p>
				</div>
				<div class="bg-slate-50 border border-slate-200/80 rounded-2xl p-6 hover:shadow-md transition-all duration-200">
					<div class="w-11 h-11 rounded-xl bg-amber-100 flex items-center justify-center mb-4">
						<svg class="w-5 h-5 text-amber-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" /></svg>
					</div>
					<h3 class="text-base font-semibold text-slate-900 mb-2">Internal links</h3>
					<p class="text-sm text-slate-500 leading-relaxed">Find broken internal links, orphaned pages, and poor link distribution that leaves pages without enough internal authority.</p>
				</div>
				<div class="bg-slate-50 border border-slate-200/80 rounded-2xl p-6 hover:shadow-md transition-all duration-200">
					<div class="w-11 h-11 rounded-xl bg-rose-100 flex items-center justify-center mb-4">
						<svg class="w-5 h-5 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" /></svg>
					</div>
					<h3 class="text-base font-semibold text-slate-900 mb-2">Image optimization</h3>
					<p class="text-sm text-slate-500 leading-relaxed">Spot missing alt attributes, oversized images, and non-descriptive filenames that reduce accessibility and on-page signals.</p>
				</div>
				<div class="bg-slate-50 border border-slate-200/80 rounded-2xl p-6 hover:shadow-md transition-all duration-200">
					<div class="w-11 h-11 rounded-xl bg-cyan-100 flex items-center justify-center mb-4">
						<svg class="w-5 h-5 text-cyan-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 0 1-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 0 1 1.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 0 0-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 0 1-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H9.75" /></svg>
					</div>
					<h3 class="text-base font-semibold text-slate-900 mb-2">Canonical and indexability</h3>
					<p class="text-sm text-slate-500 leading-relaxed">Check canonical tags, noindex directives, and robots signals to make sure the right pages get indexed and the wrong ones are excluded.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Workflow -->
	<section class="py-20 px-4 bg-slate-50">
		<div class="max-w-5xl mx-auto">
			<div class="text-center mb-14">
				<p class="text-xs font-semibold uppercase tracking-widest text-indigo-600 mb-3">Workflow</p>
				<h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">From crawl to fix list</h2>
				<p class="text-lg text-slate-500 max-w-xl mx-auto">The audit is built around decisions, not just numbers.</p>
			</div>
			<div class="grid grid-cols-1 md:grid-cols-4 gap-6">
				<div class="text-center"><div class="w-12 h-12 rounded-2xl bg-indigo-600 text-white flex items-center justify-center text-lg font-bold mx-auto mb-4">1</div><h3 class="font-semibold text-slate-900 mb-2 text-sm">Add your project</h3><p class="text-xs text-slate-500 leading-relaxed">Set the domain and configure the crawl scope in your project settings.</p></div>
				<div class="text-center"><div class="w-12 h-12 rounded-2xl bg-indigo-600 text-white flex items-center justify-center text-lg font-bold mx-auto mb-4">2</div><h3 class="font-semibold text-slate-900 mb-2 text-sm">Run the crawl</h3><p class="text-xs text-slate-500 leading-relaxed">Serpvision crawls your pages and collects technical and on-page signals.</p></div>
				<div class="text-center"><div class="w-12 h-12 rounded-2xl bg-indigo-600 text-white flex items-center justify-center text-lg font-bold mx-auto mb-4">3</div><h3 class="font-semibold text-slate-900 mb-2 text-sm">Review issues</h3><p class="text-xs text-slate-500 leading-relaxed">Filter by severity, category, or affected page count to decide what to fix first.</p></div>
				<div class="text-center"><div class="w-12 h-12 rounded-2xl bg-indigo-600 text-white flex items-center justify-center text-lg font-bold mx-auto mb-4">4</div><h3 class="font-semibold text-slate-900 mb-2 text-sm">Re-audit and track</h3><p class="text-xs text-slate-500 leading-relaxed">Run follow-up audits to confirm fixes held and catch anything new after deploys.</p></div>
			</div>
		</div>
	</section>

	<!-- Use cases -->
	<section class="py-20 px-4 bg-white">
		<div class="max-w-6xl mx-auto">
			<div class="text-center mb-14">
				<p class="text-xs font-semibold uppercase tracking-widest text-indigo-600 mb-3">Use cases</p>
				<h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Who uses site audits the most</h2>
			</div>
			<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
				<div class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-sm"><h3 class="font-semibold text-slate-900 mb-2">SEO specialists</h3><p class="text-sm text-slate-500 leading-relaxed">Audit client sites before an engagement starts, track issue resolution over the project, and demonstrate progress in reviews.</p></div>
				<div class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-sm"><h3 class="font-semibold text-slate-900 mb-2">Development teams</h3><p class="text-sm text-slate-500 leading-relaxed">Run audits after deploys to catch introduced issues such as accidental noindex, broken redirects, or missing meta tags.</p></div>
				<div class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-sm"><h3 class="font-semibold text-slate-900 mb-2">Content teams</h3><p class="text-sm text-slate-500 leading-relaxed">Use audit data to find pages with weak titles, missing descriptions, or poor heading structure that hold back content performance.</p></div>
				<div class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-sm"><h3 class="font-semibold text-slate-900 mb-2">Business owners</h3><p class="text-sm text-slate-500 leading-relaxed">Get a clear picture of your site's technical health without needing to interpret raw crawler data or multiple SEO tools.</p></div>
			</div>
		</div>
	</section>

	<!-- FAQ -->
	<section class="py-20 px-4 bg-slate-50">
		<div class="max-w-3xl mx-auto">
			<div class="text-center mb-14">
				<p class="text-xs font-semibold uppercase tracking-widest text-indigo-600 mb-3">FAQ</p>
				<h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Site audit questions</h2>
			</div>
			<div class="flex flex-col gap-3" data-role="faq-list">
				<div class="faq-item bg-white border border-slate-200/80 rounded-2xl overflow-hidden" data-role="faq-item"><button class="w-full flex items-center justify-between px-5 py-4 text-left" data-action="toggle-faq" aria-expanded="false"><span class="font-semibold text-slate-900 text-sm pr-4">How often should I run an SEO audit?</span><svg class="faq-icon w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg></button><div class="faq-body" data-role="faq-body"><p class="px-5 pb-4 text-sm text-slate-500 leading-relaxed">For actively managed sites, a monthly audit is a good baseline. After major deploys, content migrations, or CMS updates, run an immediate follow-up to catch issues introduced by the change.</p></div></div>
				<div class="faq-item bg-white border border-slate-200/80 rounded-2xl overflow-hidden" data-role="faq-item"><button class="w-full flex items-center justify-between px-5 py-4 text-left" data-action="toggle-faq" aria-expanded="false"><span class="font-semibold text-slate-900 text-sm pr-4">Does Serpvision fix SEO issues automatically?</span><svg class="faq-icon w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg></button><div class="faq-body" data-role="faq-body"><p class="px-5 pb-4 text-sm text-slate-500 leading-relaxed">No. Serpvision finds and prioritizes issues. Fixes are applied in your CMS, codebase, hosting setup, or redirect configuration. Re-running the audit afterward confirms the fix is in place.</p></div></div>
				<div class="faq-item bg-white border border-slate-200/80 rounded-2xl overflow-hidden" data-role="faq-item"><button class="w-full flex items-center justify-between px-5 py-4 text-left" data-action="toggle-faq" aria-expanded="false"><span class="font-semibold text-slate-900 text-sm pr-4">Can I audit a specific section of the site?</span><svg class="faq-icon w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg></button><div class="faq-body" data-role="faq-body"><p class="px-5 pb-4 text-sm text-slate-500 leading-relaxed">The crawl scope can be configured in project settings to focus on a subdirectory or URL pattern, which is useful for large sites or when you are testing a specific section after changes.</p></div></div>
				<div class="faq-item bg-white border border-slate-200/80 rounded-2xl overflow-hidden" data-role="faq-item"><button class="w-full flex items-center justify-between px-5 py-4 text-left" data-action="toggle-faq" aria-expanded="false"><span class="font-semibold text-slate-900 text-sm pr-4">Is audit data connected to rank tracking?</span><svg class="faq-icon w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg></button><div class="faq-body" data-role="faq-body"><p class="px-5 pb-4 text-sm text-slate-500 leading-relaxed">Yes. Serpvision connects audit findings with ranking movement so you can investigate whether a position drop matches a technical issue found on the same page.</p></div></div>
				<div class="faq-item bg-white border border-slate-200/80 rounded-2xl overflow-hidden" data-role="faq-item"><button class="w-full flex items-center justify-between px-5 py-4 text-left" data-action="toggle-faq" aria-expanded="false"><span class="font-semibold text-slate-900 text-sm pr-4">What is the difference between critical and warning issues?</span><svg class="faq-icon w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg></button><div class="faq-body" data-role="faq-body"><p class="px-5 pb-4 text-sm text-slate-500 leading-relaxed">Critical issues directly harm crawlability or indexing, such as broken links, 404 errors, and duplicate titles on key pages. Warnings are on-page issues that reduce quality signals but do not block indexing outright.</p></div></div>
			</div>
		</div>
	</section>

	<!-- CTA -->
	<section class="py-20 px-4 bg-white">
		<div class="max-w-4xl mx-auto">
			<div class="bg-indigo-600 rounded-2xl p-10 sm:p-14 text-center">
				<h2 class="text-3xl sm:text-4xl font-extrabold text-white mb-3">Audit your site and know where to start.</h2>
				<p class="text-indigo-200 text-lg mb-8">Create a project, run a crawl, and get a prioritized list of issues to fix — with ranking and Search Console context alongside.</p>
				<div class="flex flex-col sm:flex-row items-center justify-center gap-3">
					<a href="<?php echo esc_url(serpvision_url('register')); ?>" class="inline-flex items-center gap-2 bg-white hover:bg-slate-50 text-indigo-600 rounded-xl px-8 py-3.5 text-base font-bold transition-all duration-200 active:scale-95 shadow-lg">Run a free audit <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></a>
					<a href="<?php echo esc_url(home_url('/pricing/')); ?>" class="inline-flex items-center gap-2 border border-indigo-400 hover:border-indigo-300 text-indigo-100 hover:text-white rounded-xl px-8 py-3.5 text-base font-semibold transition-all duration-200">See pricing</a>
				</div>
				<p class="text-indigo-300 text-xs mt-5">No credit card required. Usage-based pricing.</p>
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
	['q' => 'How often should I run an SEO audit?',
	 'a' => 'For actively managed sites, a monthly audit is a good baseline. After major deploys, content migrations, or CMS updates, run an immediate follow-up to catch issues introduced by the change.'],
	['q' => 'Does Serpvision fix SEO issues automatically?',
	 'a' => 'No. Serpvision finds and prioritizes issues. Fixes are applied in your CMS, codebase, hosting setup, or redirect configuration. Re-running the audit afterward confirms the fix is in place.'],
	['q' => 'Can I audit a specific section of the site?',
	 'a' => 'The crawl scope can be configured in project settings to focus on a subdirectory or URL pattern, which is useful for large sites or when you are testing a specific section after changes.'],
	['q' => 'Is audit data connected to rank tracking?',
	 'a' => 'Yes. Serpvision connects audit findings with ranking movement so you can investigate whether a position drop matches a technical issue found on the same page.'],
	['q' => 'What is the difference between critical and warning issues?',
	 'a' => 'Critical issues directly harm crawlability or indexing, such as broken links, 404 errors, and duplicate titles on key pages. Warnings are on-page issues that reduce quality signals but do not block indexing outright.'],
]); ?>