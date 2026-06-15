<?php get_header(); ?>

<main id="main-content">
	 <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            ?>

            <section class="bg-gradient-to-b from-indigo-50 via-white to-slate-50 py-16 sm:py-24 border-b border-slate-200/80">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid lg:grid-cols-[0.9fr_1.1fr] gap-12 items-start">

                        <div>
                            <p class="inline-flex items-center rounded-full bg-white border border-slate-200 px-3 py-1 text-xs font-semibold text-indigo-700 mb-5 shadow-sm">
                                Contact Serpvision
                            </p>

                            <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight text-slate-900 mb-6">
                                <?php the_title(); ?>
                            </h1>

                            <?php if (has_excerpt()) : ?>
                                <p class="text-lg text-slate-500 leading-relaxed mb-8">
                                    <?php echo esc_html(get_the_excerpt()); ?>
                                </p>
                            <?php endif; ?>

                            <div class="space-y-4">
                                <div class="bg-white border border-slate-200/80 rounded-2xl p-5">
                                    <p class="text-sm font-semibold text-slate-900">Product and sales</p>
                                    <a class="text-sm text-indigo-600 font-semibold" href="mailto:hello@serpvision.com">hello@serpvision.com</a>
                                </div>

                                <div class="bg-white border border-slate-200/80 rounded-2xl p-5">
                                    <p class="text-sm font-semibold text-slate-900">Support</p>
                                    <a class="text-sm text-indigo-600 font-semibold" href="mailto:support@serpvision.com">support@serpvision.com</a>
                                </div>

                                <div class="bg-white border border-slate-200/80 rounded-2xl p-5">
                                    <p class="text-sm font-semibold text-slate-900">Legal and privacy</p>
                                    <a class="text-sm text-indigo-600 font-semibold" href="mailto:legal@serpvision.com">legal@serpvision.com</a>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border border-slate-200/80 rounded-3xl shadow-soft p-6 sm:p-8">

                            <?php if (isset($_GET['contact_status']) && $_GET['contact_status'] === 'success') : ?>
                                <div class="mb-5 rounded-2xl border border-emerald-200 bg-emerald-50 p-4">
                                    <p class="text-sm font-semibold text-emerald-800">
                                        Your message was sent successfully.
                                    </p>
                                </div>
                            <?php endif; ?>

                            <?php if (isset($_GET['contact_status']) && $_GET['contact_status'] === 'error') : ?>
                                <div class="mb-5 rounded-2xl border border-red-200 bg-red-50 p-4">
                                    <p class="text-sm font-semibold text-red-700">
                                        Please fill in the required fields correctly.
                                    </p>
                                </div>
                            <?php endif; ?>

							<?php echo do_shortcode('[contact-form-7 id="fbf9cbe" title="Contact Page Form"]'); ?>

							<p class="text-xs text-slate-400 leading-relaxed mt-4">
								We use this information only to respond to your request.
							</p>
                        </div>

                    </div>
                </div>
            </section>

            <section class="py-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid md:grid-cols-3 gap-6">
                        <article class="bg-white border border-slate-200/80 rounded-2xl p-6">
                            <h2 class="text-base font-bold text-slate-900 mb-2">For SEO specialists</h2>
                            <p class="text-sm text-slate-500 leading-relaxed">Ask about rank tracking, audit workflows, Search Console insights, and project setup.</p>
                        </article>

                        <article class="bg-white border border-slate-200/80 rounded-2xl p-6">
                            <h2 class="text-base font-bold text-slate-900 mb-2">For agencies</h2>
                            <p class="text-sm text-slate-500 leading-relaxed">Discuss multi-project workflows, client reporting, usage visibility, and team needs.</p>
                        </article>

                        <article class="bg-white border border-slate-200/80 rounded-2xl p-6">
                            <h2 class="text-base font-bold text-slate-900 mb-2">For website owners</h2>
                            <p class="text-sm text-slate-500 leading-relaxed">Get help understanding how Serpvision can make SEO status easier to read.</p>
                        </article>
                    </div>
                </div>
            </section>

            <?php
        endwhile;
    endif;
    ?>


</main>

<?php get_footer(); ?>
