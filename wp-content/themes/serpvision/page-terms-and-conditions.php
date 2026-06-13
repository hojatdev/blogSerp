<?php get_header(); ?>

<main id="main-content">
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            ?>

            <section class="bg-gradient-to-b from-indigo-50 via-white to-slate-50 py-16 sm:py-24 border-b border-slate-200/80">
                <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                    <nav class="flex mb-8" aria-label="Breadcrumb">
                        <ol class="flex items-center gap-2 text-sm text-slate-500">
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-slate-900">Home</a>
                            </li>
                            <li aria-hidden="true">/</li>
                            <li class="text-slate-900 font-medium">
                                <?php the_title(); ?>
                            </li>
                        </ol>
                    </nav>

                    <p class="inline-flex items-center rounded-full bg-indigo-50 px-3 py-1 text-xs font-semibold text-indigo-700 mb-5">
                        Legal
                    </p>

                    <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight text-slate-900 mb-5">
                        <?php the_title(); ?>
                    </h1>

                    <?php if (has_excerpt()) : ?>
                        <p class="text-lg text-slate-500 leading-relaxed max-w-3xl">
                            <?php echo esc_html(get_the_excerpt()); ?>
                        </p>
                    <?php endif; ?>

                    <p class="text-sm text-slate-400 mt-6">
                        Last updated: <?php echo esc_html(get_the_modified_date('M d, Y')); ?>
                    </p>
                </div>
            </section>

            <section class="py-12 sm:py-16">
                <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="bg-amber-50 border border-amber-200 rounded-2xl p-5 mb-8">
                        <p class="text-sm text-amber-800 leading-relaxed">
							<strong>Note:</strong> This template should be reviewed and adapted by a qualified legal advisor before publication.
						</p>
                    </div>

                    <article class="legal-content bg-white border border-slate-200/80 rounded-2xl shadow-sm p-6 sm:p-10">
                        <?php the_content(); ?>
                    </article>
                </div>
            </section>

            <?php
        endwhile;
    endif;
    ?>
</main>

<?php get_footer(); ?>