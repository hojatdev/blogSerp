<?php get_header(); ?>

<main id="main-content">
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            ?>
            <section class="bg-gradient-to-b from-indigo-50 via-white to-slate-50 py-16 sm:py-24 border-b border-slate-200/80" aria-labelledby="faq-heading">
                <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <nav class="flex mb-8" aria-label="Breadcrumb">
                        <ol class="flex items-center gap-2 text-sm text-slate-500">
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-slate-900 transition-colors">
                                    Home
                                </a>
                            </li>
                            <li aria-hidden="true">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </li>

                            <li>
                                <span class="text-slate-900 font-medium" aria-current="page">
                                    <?php the_title(); ?>
                                </span>
                            </li>
                        </ol>
                    </nav>

                    <div class="grid grid-cols-1 lg:grid-cols-[1.05fr_.95fr] gap-10 lg:gap-16 items-center">
                        <div>
                            <span class="inline-flex items-center gap-2 rounded-full border border-indigo-200 bg-white px-3 py-1 text-xs font-semibold text-indigo-700 shadow-sm">
                                <span class="h-1.5 w-1.5 rounded-full bg-indigo-600" aria-hidden="true"></span>
                                Serpvision Help Center
                            </span>

                            <h1 id="faq-heading" class="mt-5 text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-950 leading-tight">
                                <?php the_title(); ?>
                            </h1>

                            <?php if (has_excerpt()) : ?>
                                <p class="mt-5 max-w-2xl text-base sm:text-lg text-slate-600 leading-relaxed">
                                    <?php echo esc_html(get_the_excerpt()); ?>
                                </p>
                            <?php endif; ?>

                            <div class="mt-8 flex flex-col sm:flex-row gap-3">
                                <a href="<?php echo esc_url(home_url('/register/')); ?>" class="inline-flex items-center justify-center rounded-xl bg-indigo-600 px-5 py-3 text-sm font-semibold text-white shadow-sm transition-all hover:bg-indigo-700 active:scale-95">
                                    Start a Project
                                </a>

                                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="inline-flex items-center justify-center rounded-xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 transition-all hover:bg-slate-50 active:scale-95">
                                    Contact Support
                                </a>
                            </div>
                        </div>

                        <div class="bg-white border border-slate-200/80 rounded-3xl p-6 sm:p-7 shadow-soft">
                            <p class="text-sm font-semibold text-slate-900 mb-5">Popular topics</p>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                <a href="#projects" class="rounded-2xl border border-slate-200 bg-slate-50 px-4 py-4 hover:bg-white hover:border-indigo-200 transition-colors">
                                    <span class="block text-sm font-semibold text-slate-900">Projects</span>
                                    <span class="mt-1 block text-xs text-slate-500">Domains, settings, teams</span>
                                </a>

                                <a href="#rank-tracking" class="rounded-2xl border border-slate-200 bg-slate-50 px-4 py-4 hover:bg-white hover:border-indigo-200 transition-colors">
                                    <span class="block text-sm font-semibold text-slate-900">Rank Tracking</span>
                                    <span class="mt-1 block text-xs text-slate-500">Keywords, devices, locations</span>
                                </a>

                                <a href="#audits" class="rounded-2xl border border-slate-200 bg-slate-50 px-4 py-4 hover:bg-white hover:border-indigo-200 transition-colors">
                                    <span class="block text-sm font-semibold text-slate-900">SEO Audits</span>
                                    <span class="mt-1 block text-xs text-slate-500">Crawl and technical checks</span>
                                </a>

                                <a href="#points-billing" class="rounded-2xl border border-slate-200 bg-slate-50 px-4 py-4 hover:bg-white hover:border-indigo-200 transition-colors">
                                    <span class="block text-sm font-semibold text-slate-900">Points &amp; Billing</span>
                                    <span class="mt-1 block text-xs text-slate-500">Usage, plans, limits</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-14 sm:py-20" aria-labelledby="faq-list-heading">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 lg:grid-cols-[280px_1fr] gap-8 lg:gap-12 items-start">

                        <aside class="lg:sticky lg:top-24" aria-label="FAQ categories">
                            <div class="bg-white border border-slate-200/80 rounded-2xl p-4 shadow-sm">
                                <p class="px-3 py-2 text-xs font-semibold uppercase tracking-widest text-slate-400">
                                    Categories
                                </p>

                                <nav class="flex flex-col gap-1 text-sm" aria-label="FAQ section navigation">
                                    <a href="#getting-started" class="rounded-xl px-3 py-2 font-medium text-slate-700 hover:bg-slate-50 hover:text-indigo-700 transition-colors">Getting started</a>
                                    <a href="#projects" class="rounded-xl px-3 py-2 font-medium text-slate-700 hover:bg-slate-50 hover:text-indigo-700 transition-colors">Projects</a>
                                    <a href="#rank-tracking" class="rounded-xl px-3 py-2 font-medium text-slate-700 hover:bg-slate-50 hover:text-indigo-700 transition-colors">Rank tracking</a>
                                    <a href="#competitors" class="rounded-xl px-3 py-2 font-medium text-slate-700 hover:bg-slate-50 hover:text-indigo-700 transition-colors">Competitors</a>
                                    <a href="#audits" class="rounded-xl px-3 py-2 font-medium text-slate-700 hover:bg-slate-50 hover:text-indigo-700 transition-colors">Site audits</a>
                                    <a href="#search-console" class="rounded-xl px-3 py-2 font-medium text-slate-700 hover:bg-slate-50 hover:text-indigo-700 transition-colors">Search Console</a>
                                    <a href="#points-billing" class="rounded-xl px-3 py-2 font-medium text-slate-700 hover:bg-slate-50 hover:text-indigo-700 transition-colors">Points &amp; billing</a>
                                </nav>
                            </div>

                            <div class="mt-4 rounded-2xl bg-slate-900 p-5 text-white shadow-sm">
                                <p class="text-sm font-semibold">Still need help?</p>
                                <p class="mt-2 text-sm text-slate-300 leading-relaxed">
                                    Send us your question and include your project name, domain, and the page where you noticed the issue.
                                </p>
                                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="mt-4 inline-flex w-full items-center justify-center rounded-xl bg-white px-4 py-2.5 text-sm font-semibold text-slate-900 hover:bg-slate-100 transition-colors">
                                    Contact us
                                </a>
                            </div>
                        </aside>

						<div>
							<div class="mb-8">
								<h2 id="faq-list-heading" class="text-2xl sm:text-3xl font-extrabold tracking-tight text-slate-950">Frequently asked questions</h2>
								<p class="mt-3 text-slate-600 leading-relaxed">These answers are written for product clarity. For plan-specific limits or account-specific issues, use your dashboard or contact support.</p>
							</div>

							<div class="space-y-8" data-role="faq-root">
								<div id="getting-started" class="scroll-mt-24">
									<h3 class="mb-2 text-sm text-slate-400">Getting started</h3>
									<div class="space-y-3">
										<article class="faq-item bg-white border border-slate-200/80 rounded-2xl shadow-sm overflow-hidden">
											<div class="w-full flex items-center justify-between gap-4 p-5 cursor-pointer" data-action="toggle-faq" aria-expanded="true" aria-controls="faq-1">
												<span class="text-sm sm:text-base font-semibold text-slate-900">What is Serpvision used for?</span>
												<svg class="w-4 h-4 text-slate-400 shrink-0 transition-transform" data-role="faq-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
													<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
												</svg>
											</div>
											<div id="faq-1" class="faq-panel is-open" data-role="faq-panel">
												<div class="px-5 pb-5 text-sm text-slate-600 leading-relaxed">Serpvision is used to manage SEO projects, track keyword positions, monitor competitors, run site audits, connect Google Search Console data, and turn scattered SEO signals into clearer decisions.</div>
											</div>
										</article>
										<article class="faq-item bg-white border border-slate-200/80 rounded-2xl shadow-sm overflow-hidden">
											<div class="w-full flex items-center justify-between gap-4 p-5 cursor-pointer" data-action="toggle-faq" aria-expanded="false" aria-controls="faq-2">
												<span class="text-sm sm:text-base font-semibold text-slate-900">Is Serpvision only for SEO specialists?</span>
												<svg class="w-4 h-4 text-slate-400 shrink-0 transition-transform" data-role="faq-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
													<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
												</svg>
											</div>
											<div id="faq-2" class="faq-panel" data-role="faq-panel">
												<div class="px-5 pb-5 text-sm text-slate-600 leading-relaxed">No. The product is useful for SEO specialists and agencies, but it is also designed for founders, marketing managers, content teams, and website owners who want to understand what is happening without reading a crowded SEO dashboard.</div>
											</div>
										</article>
									</div>
								</div>

								<div id="projects" class="scroll-mt-24">
									<h3 class="mb-2 text-sm text-slate-400">Projects</h3>
									<div class="space-y-3">
										<article class="faq-item bg-white border border-slate-200/80 rounded-2xl shadow-sm overflow-hidden">
											<div class="w-full flex items-center justify-between gap-4 p-5 cursor-pointer" data-action="toggle-faq" aria-expanded="false" aria-controls="faq-3">
												<span class="text-sm sm:text-base font-semibold text-slate-900">Can I manage multiple SEO projects?</span>
												<svg class="w-4 h-4 text-slate-400 shrink-0 transition-transform" data-role="faq-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
													<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
												</svg>
											</div>
											<div id="faq-3" class="faq-panel" data-role="faq-panel">
												<div class="px-5 pb-5 text-sm text-slate-600 leading-relaxed">Yes. You can create separate SEO projects and keep each domain, color, keyword list, competitors, audit history, and Search Console connection organized in its own workspace.</div>
											</div>
										</article>
										<article class="faq-item bg-white border border-slate-200/80 rounded-2xl shadow-sm overflow-hidden">
											<div class="w-full flex items-center justify-between gap-4 p-5 cursor-pointer" data-action="toggle-faq" aria-expanded="false" aria-controls="faq-4">
												<span class="text-sm sm:text-base font-semibold text-slate-900">Can agencies use Serpvision for client websites?</span>
												<svg class="w-4 h-4 text-slate-400 shrink-0 transition-transform" data-role="faq-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
													<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
												</svg>
											</div>
											<div id="faq-4" class="faq-panel" data-role="faq-panel">
												<div class="px-5 pb-5 text-sm text-slate-600 leading-relaxed">Yes. Agencies can organize client websites as separate projects, compare progress across projects, and use the dashboard to explain ranking movement, audit issues, and competitor changes more clearly.</div>
											</div>
										</article>
									</div>
								</div>

								<div id="rank-tracking" class="scroll-mt-24">
									<h3 class="mb-2 text-sm text-slate-400">Rank tracking</h3>
									<div class="space-y-3">
										<article class="faq-item bg-white border border-slate-200/80 rounded-2xl shadow-sm overflow-hidden">
											<div class="w-full flex items-center justify-between gap-4 p-5 cursor-pointer" data-action="toggle-faq" aria-expanded="false" aria-controls="faq-5">
												<span class="text-sm sm:text-base font-semibold text-slate-900">How does keyword rank tracking work?</span>
												<svg class="w-4 h-4 text-slate-400 shrink-0 transition-transform" data-role="faq-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
													<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
												</svg>
											</div>
											<div id="faq-5" class="faq-panel" data-role="faq-panel">
												<div class="px-5 pb-5 text-sm text-slate-600 leading-relaxed">You add keywords to a project and review positions by search engine, country, device, and time range. Serpvision helps you see movement over time, spot drops faster, and decide which pages or keyword groups need attention.</div>
											</div>
										</article>
										<article class="faq-item bg-white border border-slate-200/80 rounded-2xl shadow-sm overflow-hidden">
											<div class="w-full flex items-center justify-between gap-4 p-5 cursor-pointer" data-action="toggle-faq" aria-expanded="false" aria-controls="faq-6">
												<span class="text-sm sm:text-base font-semibold text-slate-900">Can Serpvision guarantee better rankings?</span>
												<svg class="w-4 h-4 text-slate-400 shrink-0 transition-transform" data-role="faq-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
													<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
												</svg>
											</div>
											<div id="faq-6" class="faq-panel" data-role="faq-panel">
												<div class="px-5 pb-5 text-sm text-slate-600 leading-relaxed">No. No SEO platform can guarantee rankings. Serpvision provides tracking, audit data, competitor context, and Search Console insights so you can make better decisions and measure the impact of your work.</div>
											</div>
										</article>
									</div>
								</div>

								<div id="competitors" class="scroll-mt-24">
									<h3 class="mb-2 text-sm text-slate-400">Competitors</h3>
									<div class="space-y-3">
										<article class="faq-item bg-white border border-slate-200/80 rounded-2xl shadow-sm overflow-hidden">
											<div class="w-full flex items-center justify-between gap-4 p-5 cursor-pointer" data-action="toggle-faq" aria-expanded="false" aria-controls="faq-7">
												<span class="text-sm sm:text-base font-semibold text-slate-900">What can I compare with competitor tracking?</span>
												<svg class="w-4 h-4 text-slate-400 shrink-0 transition-transform" data-role="faq-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
													<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
												</svg>
											</div>
											<div id="faq-7" class="faq-panel" data-role="faq-panel">
												<div class="px-5 pb-5 text-sm text-slate-600 leading-relaxed">You can add competitor domains, compare shared keywords, see rank gaps, and identify opportunities where your pages are close to competitors but need better content, internal links, or technical fixes.</div>
											</div>
										</article>
									</div>
								</div>

								<div id="audits" class="scroll-mt-24">
									<h3 class="mb-2 text-sm text-slate-400">Site audits</h3>
									<div class="space-y-3">
										<article class="faq-item bg-white border border-slate-200/80 rounded-2xl shadow-sm overflow-hidden">
											<div class="w-full flex items-center justify-between gap-4 p-5 cursor-pointer" data-action="toggle-faq" aria-expanded="false" aria-controls="faq-8">
												<span class="text-sm sm:text-base font-semibold text-slate-900">What does the SEO audit check?</span>
												<svg class="w-4 h-4 text-slate-400 shrink-0 transition-transform" data-role="faq-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
													<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
												</svg>
											</div>
											<div id="faq-8" class="faq-panel" data-role="faq-panel">
												<div class="px-5 pb-5 text-sm text-slate-600 leading-relaxed">The audit is designed to surface technical and on-page SEO issues such as crawl status, status codes, metadata, headings, pages, links, and other signals that may affect search performance.</div>
											</div>
										</article>
										<article class="faq-item bg-white border border-slate-200/80 rounded-2xl shadow-sm overflow-hidden">
											<div class="w-full flex items-center justify-between gap-4 p-5 cursor-pointer" data-action="toggle-faq" aria-expanded="false" aria-controls="faq-9">
												<span class="text-sm sm:text-base font-semibold text-slate-900">Does Serpvision automatically fix SEO issues?</span>
												<svg class="w-4 h-4 text-slate-400 shrink-0 transition-transform" data-role="faq-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
													<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
												</svg>
											</div>
											<div id="faq-9" class="faq-panel" data-role="faq-panel">
												<div class="px-5 pb-5 text-sm text-slate-600 leading-relaxed">Serpvision helps you find and prioritize issues. Fixes usually need to be applied in your CMS, codebase, hosting setup, or SEO workflow depending on the issue type.</div>
											</div>
										</article>
									</div>
								</div>

								<div id="search-console" class="scroll-mt-24">
									<h3 class="mb-2 text-sm text-slate-400">Google Search Console</h3>
									<div class="space-y-3">
										<article class="faq-item bg-white border border-slate-200/80 rounded-2xl shadow-sm overflow-hidden">
											<div class="w-full flex items-center justify-between gap-4 p-5 cursor-pointer" data-action="toggle-faq" aria-expanded="false" aria-controls="faq-10">
												<span class="text-sm sm:text-base font-semibold text-slate-900">Why connect Google Search Console?</span>
												<svg class="w-4 h-4 text-slate-400 shrink-0 transition-transform" data-role="faq-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
													<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
												</svg>
											</div>
											<div id="faq-10" class="faq-panel" data-role="faq-panel">
												<div class="px-5 pb-5 text-sm text-slate-600 leading-relaxed">Search Console gives you real search performance data. When it is viewed next to rankings and audit data, it becomes easier to understand whether a traffic change is connected to keyword movement, CTR, impressions, or technical issues.</div>
											</div>
										</article>
										<article class="faq-item bg-white border border-slate-200/80 rounded-2xl shadow-sm overflow-hidden">
											<div class="w-full flex items-center justify-between gap-4 p-5 cursor-pointer" data-action="toggle-faq" aria-expanded="false" aria-controls="faq-11">
												<span class="text-sm sm:text-base font-semibold text-slate-900">Do I need Search Console to use Serpvision?</span>
												<svg class="w-4 h-4 text-slate-400 shrink-0 transition-transform" data-role="faq-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
													<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
												</svg>
											</div>
											<div id="faq-11" class="faq-panel" data-role="faq-panel">
												<div class="px-5 pb-5 text-sm text-slate-600 leading-relaxed">No. You can still use project management, rank tracking, competitor tracking, and audits. Connecting Search Console adds another layer of performance context.</div>
											</div>
										</article>
									</div>
								</div>

								<div id="points-billing" class="scroll-mt-24">
									<h3 class="mb-2 text-sm text-slate-400">Points &amp; billing</h3>
									<div class="space-y-3">
										<article class="faq-item bg-white border border-slate-200/80 rounded-2xl shadow-sm overflow-hidden">
											<div class="w-full flex items-center justify-between gap-4 p-5 cursor-pointer" data-action="toggle-faq" aria-expanded="false" aria-controls="faq-12">
												<span class="text-sm sm:text-base font-semibold text-slate-900">How are points and usage handled?</span>
												<svg class="w-4 h-4 text-slate-400 shrink-0 transition-transform" data-role="faq-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
													<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
												</svg>
											</div>
											<div id="faq-12" class="faq-panel" data-role="faq-panel">
												<div class="px-5 pb-5 text-sm text-slate-600 leading-relaxed">Serpvision does not use a separate wallet. Available points are read from the user account, and service consumption is tracked through usage records so you can understand how project actions use resources.</div>
											</div>
										</article>
										<article class="faq-item bg-white border border-slate-200/80 rounded-2xl shadow-sm overflow-hidden">
											<div class="w-full flex items-center justify-between gap-4 p-5 cursor-pointer" data-action="toggle-faq" aria-expanded="false" aria-controls="faq-13">
												<span class="text-sm sm:text-base font-semibold text-slate-900">Where can I see plan details or pricing?</span>
												<svg class="w-4 h-4 text-slate-400 shrink-0 transition-transform" data-role="faq-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
													<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
												</svg>
											</div>
											<div id="faq-13" class="faq-panel" data-role="faq-panel">
												<div class="px-5 pb-5 text-sm text-slate-600 leading-relaxed">You can review available plans on the pricing page. If you manage client projects or need higher usage, contact us so we can help you choose the right setup.</div>
											</div>
										</article>
									</div>
								</div>
							</div>
							
						</div>

                    </div>
                </div>
            </section>

            <section class="py-16 px-4 sm:px-6 lg:px-8 bg-white border-t border-slate-200/80">
                <div class="max-w-5xl mx-auto rounded-3xl bg-indigo-600 p-8 sm:p-12 text-center shadow-soft">
                    <h2 class="text-2xl sm:text-4xl font-extrabold tracking-tight text-white">
                        Ready to see your SEO projects more clearly?
                    </h2>

                    <p class="mt-3 max-w-2xl mx-auto text-sm sm:text-base text-indigo-100 leading-relaxed">
                        Create a project, add keywords and competitors, connect the data you already have, and make SEO decisions with less noise.
                    </p>

                    <div class="mt-7 flex flex-col sm:flex-row justify-center gap-3">
                        <a href="<?php echo esc_url(serpvision_url('register')); ?>" class="inline-flex items-center justify-center rounded-xl bg-white px-5 py-3 text-sm font-bold text-indigo-700 transition-all hover:bg-slate-50 active:scale-95">
                            Start a Project
                        </a>
                        <a href="<?php echo esc_url(home_url('/pricing/')); ?>" class="inline-flex items-center justify-center rounded-xl border border-indigo-400/60 px-5 py-3 text-sm font-bold text-white transition-all hover:bg-indigo-500 active:scale-95">
                            View Pricing
                        </a>
                    </div>
                </div>
            </section>

            <?php
        endwhile;
    endif;
    ?>
</main>
	
<?php get_footer(); ?>
