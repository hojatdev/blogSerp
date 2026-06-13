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
						SEO competitor tracking and gap analysis
					</div>
					<h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-tight tracking-tight mb-6">
						Know when competitors<br class="hidden sm:block"> move, not after.
					</h1>
					<p class="text-lg text-slate-500 max-w-xl mx-auto lg:mx-0 mb-8 leading-relaxed">
						Add competitor domains, compare positions on the same keywords, and find the gaps worth closing — all in one place without switching tools or building spreadsheets.
					</p>
					<div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-3 mb-5">
						<a href="<?php echo esc_url(serpvision_url('register')); ?>" class="w-full sm:w-auto bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl px-7 py-3.5 text-base font-semibold transition-all duration-200 active:scale-95 shadow-lg shadow-indigo-200">Track competitors</a>
						<a href="<?php echo esc_url(home_url('/pricing/')); ?>" class="w-full sm:w-auto border border-slate-200 bg-white hover:bg-slate-50 text-slate-700 rounded-xl px-7 py-3.5 text-base font-semibold transition-all duration-200 active:scale-95">See pricing</a>
					</div>
					<p class="text-xs text-slate-400">No credit card required. Track the competitors that matter most.</p>
				</div>

				<!-- Competitor comparison mockup -->
				<div class="bg-white rounded-2xl shadow-xl border border-slate-200/80 p-4 lg:p-5">
					<div class="flex items-center gap-1.5 mb-5">
						<span class="w-3 h-3 rounded-full bg-red-400"></span>
						<span class="w-3 h-3 rounded-full bg-amber-400"></span>
						<span class="w-3 h-3 rounded-full bg-emerald-400"></span>
						<div class="ml-3 flex-1 bg-slate-100 rounded h-5 flex items-center px-3">
							<span class="text-xs text-slate-400 font-mono truncate">app.serpvision.com/projects/store/competitors</span>
						</div>
					</div>
					<div class="grid grid-cols-3 gap-3 mb-4">
						<div class="bg-slate-50 rounded-xl p-3 border border-slate-100">
							<p class="text-xs text-slate-500 mb-1">Competitors</p>
							<p class="text-xl font-bold text-slate-900">4</p>
							<p class="text-xs text-slate-400 mt-0.5">domains tracked</p>
						</div>
						<div class="bg-indigo-50 rounded-xl p-3 border border-indigo-100">
							<p class="text-xs text-slate-500 mb-1">You lead</p>
							<p class="text-xl font-bold text-indigo-700">63</p>
							<p class="text-xs text-indigo-500 font-medium mt-0.5">shared keywords</p>
						</div>
						<div class="bg-amber-50 rounded-xl p-3 border border-amber-100">
							<p class="text-xs text-slate-500 mb-1">Gaps to close</p>
							<p class="text-xl font-bold text-amber-600">18</p>
							<p class="text-xs text-amber-500 font-medium mt-0.5">they rank higher</p>
						</div>
					</div>
					<div class="rounded-xl border border-slate-100 overflow-hidden mb-4">
						<table class="w-full text-xs">
							<thead class="bg-slate-50">
								<tr>
									<th class="text-left px-3 py-2 text-slate-500 font-medium">Keyword</th>
									<th class="text-center px-3 py-2 text-slate-500 font-medium">You</th>
									<th class="text-center px-3 py-2 text-slate-500 font-medium hidden sm:table-cell">Competitor A</th>
									<th class="text-center px-3 py-2 text-slate-500 font-medium hidden sm:table-cell">Gap</th>
								</tr>
							</thead>
							<tbody class="divide-y divide-slate-100">
								<tr class="hover:bg-slate-50/70">
									<td class="px-3 py-2.5 font-medium text-slate-700">seo rank tracker</td>
									<td class="px-3 py-2.5 text-center"><span class="bg-emerald-100 text-emerald-700 rounded-lg px-2 py-0.5 font-semibold">#3</span></td>
									<td class="px-3 py-2.5 text-center hidden sm:table-cell text-slate-500">#7</td>
									<td class="px-3 py-2.5 text-center hidden sm:table-cell text-emerald-600 font-medium">+4</td>
								</tr>
								<tr class="hover:bg-slate-50/70">
									<td class="px-3 py-2.5 font-medium text-slate-700">site audit tool</td>
									<td class="px-3 py-2.5 text-center"><span class="bg-amber-100 text-amber-700 rounded-lg px-2 py-0.5 font-semibold">#9</span></td>
									<td class="px-3 py-2.5 text-center hidden sm:table-cell text-slate-500">#4</td>
									<td class="px-3 py-2.5 text-center hidden sm:table-cell text-red-500 font-medium">−5</td>
								</tr>
								<tr class="hover:bg-slate-50/70">
									<td class="px-3 py-2.5 font-medium text-slate-700">keyword position checker</td>
									<td class="px-3 py-2.5 text-center"><span class="bg-emerald-100 text-emerald-700 rounded-lg px-2 py-0.5 font-semibold">#5</span></td>
									<td class="px-3 py-2.5 text-center hidden sm:table-cell text-slate-500">#8</td>
									<td class="px-3 py-2.5 text-center hidden sm:table-cell text-emerald-600 font-medium">+3</td>
								</tr>
								<tr class="hover:bg-slate-50/70">
									<td class="px-3 py-2.5 font-medium text-slate-700">google search console</td>
									<td class="px-3 py-2.5 text-center"><span class="bg-amber-100 text-amber-700 rounded-lg px-2 py-0.5 font-semibold">#12</span></td>
									<td class="px-3 py-2.5 text-center hidden sm:table-cell text-slate-500">#6</td>
									<td class="px-3 py-2.5 text-center hidden sm:table-cell text-red-500 font-medium">−6</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="rounded-xl bg-indigo-50 border border-indigo-100 p-4">
						<p class="text-xs font-semibold text-indigo-700 mb-1">Gap opportunity</p>
						<p class="text-sm text-indigo-900 leading-relaxed">"site audit tool" — you rank #9, Competitor A ranks #4. Review their page and update your content or internal linking.</p>
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
					<svg class="w-5 h-5 text-slate-900" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" /></svg>
				</div>
				<p class="text-sm font-semibold text-slate-900">Multiple domains</p>
				<p class="text-xs text-slate-500 mt-1">Per project, per keyword set</p>
			</div>
			<div class="flex flex-col items-center">
				<div class="w-10 h-10 rounded-xl bg-slate-50 border border-slate-100 flex items-center justify-center mb-3">
					<svg class="w-5 h-5 text-slate-900" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" /></svg>
				</div>
				<p class="text-sm font-semibold text-slate-900">Rank gap view</p>
				<p class="text-xs text-slate-500 mt-1">Side-by-side positions</p>
			</div>
			<div class="flex flex-col items-center">
				<div class="w-10 h-10 rounded-xl bg-slate-50 border border-slate-100 flex items-center justify-center mb-3">
					<svg class="w-5 h-5 text-slate-900" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.286-4.286a11.948 11.948 0 0 1 4.306 6.43l.776 2.898m0 0 3.182-5.511m-3.182 5.51-5.511-3.181" /></svg>
				</div>
				<p class="text-sm font-semibold text-slate-900">Movement history</p>
				<p class="text-xs text-slate-500 mt-1">Spot trends over time</p>
			</div>
			<div class="flex flex-col items-center">
				<div class="w-10 h-10 rounded-xl bg-slate-50 border border-slate-100 flex items-center justify-center mb-3">
					<svg class="w-5 h-5 text-slate-900" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" /></svg>
				</div>
				<p class="text-sm font-semibold text-slate-900">Opportunity finder</p>
				<p class="text-xs text-slate-500 mt-1">Close the right gaps</p>
			</div>
		</div>
	</section>

	<!-- Why it matters -->
	<section class="py-20 px-4 bg-slate-50">
		<div class="max-w-6xl mx-auto">
			<div class="text-center mb-14">
				<p class="text-sm font-semibold text-indigo-600 mb-3">Why competitor tracking matters</p>
				<h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Rankings do not happen in isolation</h2>
				<p class="text-lg text-slate-500 max-w-2xl mx-auto">A drop can come from your page losing quality or a competitor gaining it. Without comparison data, you are guessing which one caused the change.</p>
			</div>
			<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
				<article class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-sm">
					<div class="w-11 h-11 rounded-xl bg-red-100 flex items-center justify-center mb-4">
						<svg class="w-5 h-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l4.286-4.286a11.948 11.948 0 0 1 4.306 6.43l.776 2.898m0 0 3.182-5.511m-3.182 5.51-5.511-3.181" /></svg>
					</div>
					<h3 class="font-semibold text-slate-900 mb-2">Detect threats early</h3>
					<p class="text-sm text-slate-500 leading-relaxed">When a competitor climbs past you on a key term, you see it immediately — not three months later in a traffic report.</p>
				</article>
				<article class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-sm">
					<div class="w-11 h-11 rounded-xl bg-indigo-100 flex items-center justify-center mb-4">
						<svg class="w-5 h-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456Z" /></svg>
					</div>
					<h3 class="font-semibold text-slate-900 mb-2">Find pages worth studying</h3>
					<p class="text-sm text-slate-500 leading-relaxed">When a competitor ranks higher on a shared keyword, their page is usually doing something better. The gap view helps you decide what to investigate.</p>
				</article>
				<article class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-sm">
					<div class="w-11 h-11 rounded-xl bg-emerald-100 flex items-center justify-center mb-4">
						<svg class="w-5 h-5 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" /></svg>
					</div>
					<h3 class="font-semibold text-slate-900 mb-2">Confirm your wins are real</h3>
					<p class="text-sm text-slate-500 leading-relaxed">Gaining a position while a competitor drops is different from gaining while they held steady. Both look the same without comparison data.</p>
				</article>
			</div>
		</div>
	</section>

	<!-- Features grid -->
	<section class="py-20 px-4 bg-white">
		<div class="max-w-6xl mx-auto">
			<div class="text-center mb-14">
				<p class="text-sm font-semibold text-indigo-600 mb-3">What you can track</p>
				<h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Everything you need to understand the competitive SERP</h2>
			</div>
			<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
				<div class="bg-slate-50 border border-slate-200/80 rounded-2xl p-6 hover:shadow-md transition-all duration-200">
					<div class="w-11 h-11 rounded-xl bg-indigo-100 flex items-center justify-center mb-4"><svg class="w-5 h-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" /></svg></div>
					<h3 class="text-base font-semibold text-slate-900 mb-2">Side-by-side rank comparison</h3>
					<p class="text-sm text-slate-500 leading-relaxed">See your position and up to several competitor positions in the same keyword table, without jumping between tools.</p>
				</div>
				<div class="bg-slate-50 border border-slate-200/80 rounded-2xl p-6 hover:shadow-md transition-all duration-200">
					<div class="w-11 h-11 rounded-xl bg-emerald-100 flex items-center justify-center mb-4"><svg class="w-5 h-5 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.286-4.286a11.948 11.948 0 0 1 4.306 6.43l.776 2.898m0 0 3.182-5.511m-3.182 5.51-5.511-3.181" /></svg></div>
					<h3 class="text-base font-semibold text-slate-900 mb-2">Rank gap detection</h3>
					<p class="text-sm text-slate-500 leading-relaxed">Filter keywords where a specific competitor outranks you to create a focused improvement list for content or technical fixes.</p>
				</div>
				<div class="bg-slate-50 border border-slate-200/80 rounded-2xl p-6 hover:shadow-md transition-all duration-200">
					<div class="w-11 h-11 rounded-xl bg-purple-100 flex items-center justify-center mb-4"><svg class="w-5 h-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5m.75-9 3-3 2.148 2.148A12.061 12.061 0 0 1 16.5 7.605" /></svg></div>
					<h3 class="text-base font-semibold text-slate-900 mb-2">Movement history per domain</h3>
					<p class="text-sm text-slate-500 leading-relaxed">Chart how competitors have moved over time on each keyword to understand whether gains are sustained or SERP fluctuations.</p>
				</div>
				<div class="bg-slate-50 border border-slate-200/80 rounded-2xl p-6 hover:shadow-md transition-all duration-200">
					<div class="w-11 h-11 rounded-xl bg-amber-100 flex items-center justify-center mb-4"><svg class="w-5 h-5 text-amber-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" /></svg></div>
					<h3 class="text-base font-semibold text-slate-900 mb-2">Competitor per project</h3>
					<p class="text-sm text-slate-500 leading-relaxed">Each project tracks its own competitor set. Agencies can separate client competitors without mixing data across accounts.</p>
				</div>
				<div class="bg-slate-50 border border-slate-200/80 rounded-2xl p-6 hover:shadow-md transition-all duration-200">
					<div class="w-11 h-11 rounded-xl bg-rose-100 flex items-center justify-center mb-4"><svg class="w-5 h-5 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" /></svg></div>
					<h3 class="text-base font-semibold text-slate-900 mb-2">Alert on competitor jumps</h3>
					<p class="text-sm text-slate-500 leading-relaxed">When a competitor takes a significant position gain on a tracked keyword, you can see it in the movement feed without manually reviewing every row.</p>
				</div>
				<div class="bg-slate-50 border border-slate-200/80 rounded-2xl p-6 hover:shadow-md transition-all duration-200">
					<div class="w-11 h-11 rounded-xl bg-cyan-100 flex items-center justify-center mb-4"><svg class="w-5 h-5 text-cyan-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 7.5l3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0 0 21 18V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v12a2.25 2.25 0 0 0 2.25 2.25Z" /></svg></div>
					<h3 class="text-base font-semibold text-slate-900 mb-2">Country and device scope</h3>
					<p class="text-sm text-slate-500 leading-relaxed">Competitor comparisons respect the same country and device filters as your own tracking, keeping data consistent across the keyword table.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Use cases -->
	<section class="py-20 px-4 bg-slate-50">
		<div class="max-w-6xl mx-auto">
			<div class="text-center mb-14">
				<p class="text-xs font-semibold uppercase tracking-widest text-indigo-600 mb-3">Use cases</p>
				<h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Who uses competitor tracking most</h2>
			</div>
			<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
				<div class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-sm"><h3 class="font-semibold text-slate-900 mb-2">SEO specialists</h3><p class="text-sm text-slate-500 leading-relaxed">Monitor the competitive SERP landscape for priority terms, identify content gaps, and brief the team on which pages need updates before competitors pull further ahead.</p></div>
				<div class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-sm"><h3 class="font-semibold text-slate-900 mb-2">Agencies</h3><p class="text-sm text-slate-500 leading-relaxed">Show clients a clear picture of where they stand versus named competitors. Use gap data to build improvement roadmaps with clear justification behind each priority.</p></div>
				<div class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-sm"><h3 class="font-semibold text-slate-900 mb-2">Content teams</h3><p class="text-sm text-slate-500 leading-relaxed">Find the keywords where a competitor has a strong position and use that to prioritize content refreshes or new content briefs backed by real SERP evidence.</p></div>
				<div class="bg-white border border-slate-200/80 rounded-2xl p-6 shadow-sm"><h3 class="font-semibold text-slate-900 mb-2">Business owners</h3><p class="text-sm text-slate-500 leading-relaxed">Know which direct competitors are growing their search visibility and ask better questions of your SEO team or agency about what actions follow from that movement.</p></div>
			</div>
		</div>
	</section>

	<!-- FAQ -->
	<section class="py-20 px-4 bg-white">
		<div class="max-w-3xl mx-auto">
			<div class="text-center mb-14">
				<p class="text-xs font-semibold uppercase tracking-widest text-indigo-600 mb-3">FAQ</p>
				<h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Competitor tracking questions</h2>
			</div>
			<div class="flex flex-col gap-3" data-role="faq-list">
				<div class="faq-item bg-slate-50 border border-slate-200/80 rounded-2xl overflow-hidden" data-role="faq-item"><button class="w-full flex items-center justify-between px-5 py-4 text-left" data-action="toggle-faq" aria-expanded="false"><span class="font-semibold text-slate-900 text-sm pr-4">How many competitors can I track per project?</span><svg class="faq-icon w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg></button><div class="faq-body" data-role="faq-body"><p class="px-5 pb-4 text-sm text-slate-500 leading-relaxed">Each project supports multiple competitor domains. Pricing for competitor tracking is based on usage, so you can add the competitors that are most relevant and remove ones that are no longer important.</p></div></div>
				<div class="faq-item bg-slate-50 border border-slate-200/80 rounded-2xl overflow-hidden" data-role="faq-item"><button class="w-full flex items-center justify-between px-5 py-4 text-left" data-action="toggle-faq" aria-expanded="false"><span class="font-semibold text-slate-900 text-sm pr-4">Do competitors need to approve tracking?</span><svg class="faq-icon w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg></button><div class="faq-body" data-role="faq-body"><p class="px-5 pb-4 text-sm text-slate-500 leading-relaxed">No. Competitor tracking in Serpvision uses public search engine result data. You simply enter a competitor domain and Serpvision tracks their positions on your keyword list.</p></div></div>
				<div class="faq-item bg-slate-50 border border-slate-200/80 rounded-2xl overflow-hidden" data-role="faq-item"><button class="w-full flex items-center justify-between px-5 py-4 text-left" data-action="toggle-faq" aria-expanded="false"><span class="font-semibold text-slate-900 text-sm pr-4">Can I see how competitors ranked in the past?</span><svg class="faq-icon w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg></button><div class="faq-body" data-role="faq-body"><p class="px-5 pb-4 text-sm text-slate-500 leading-relaxed">Ranking history is recorded from when you add a competitor to a project. Data is not available for periods before tracking started.</p></div></div>
				<div class="faq-item bg-slate-50 border border-slate-200/80 rounded-2xl overflow-hidden" data-role="faq-item"><button class="w-full flex items-center justify-between px-5 py-4 text-left" data-action="toggle-faq" aria-expanded="false"><span class="font-semibold text-slate-900 text-sm pr-4">Does competitor tracking affect my keyword check cost?</span><svg class="faq-icon w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg></button><div class="faq-body" data-role="faq-body"><p class="px-5 pb-4 text-sm text-slate-500 leading-relaxed">Competitor tracking is priced separately from keyword checks. See the pricing page to estimate the monthly cost based on the number of competitors and check frequency you plan to use.</p></div></div>
			</div>
		</div>
	</section>

	<!-- CTA -->
	<section class="py-20 px-4 bg-slate-50">
		<div class="max-w-4xl mx-auto">
			<div class="bg-indigo-600 rounded-2xl p-10 sm:p-14 text-center">
				<h2 class="text-3xl sm:text-4xl font-extrabold text-white mb-3">Start tracking the competitors that matter.</h2>
				<p class="text-indigo-200 text-lg mb-8">Create a project, add competitor domains, and see rank gaps alongside your own keyword movement.</p>
				<div class="flex flex-col sm:flex-row items-center justify-center gap-3">
					<a href="<?php echo esc_url(serpvision_url('register')); ?>" class="inline-flex items-center gap-2 bg-white hover:bg-slate-50 text-indigo-600 rounded-xl px-8 py-3.5 text-base font-bold transition-all duration-200 active:scale-95 shadow-lg">Start tracking <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></a>
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
	['q' => 'How many competitors can I track per project?',
	 'a' => 'Each project supports multiple competitor domains. Pricing for competitor tracking is based on usage, so you can add the competitors that are most relevant and remove ones that are no longer important.'],
	['q' => 'Do competitors need to approve tracking?',
	 'a' => 'No. Competitor tracking in Serpvision uses public search engine result data. You simply enter a competitor domain and Serpvision tracks their positions on your keyword list.'],
	['q' => 'Can I see how competitors ranked in the past?',
	 'a' => 'Ranking history is recorded from when you add a competitor to a project. Data is not available for periods before tracking started.'],
	['q' => 'Does competitor tracking affect my keyword check cost?',
	 'a' => 'Competitor tracking is priced separately from keyword checks. See the pricing page to estimate the monthly cost based on the number of competitors and check frequency you plan to use.'],
]); ?>