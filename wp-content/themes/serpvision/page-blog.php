<?php
/**
 * Template Name: Blog
 * Lists the latest published posts in the SerpVision card style.
 */
get_header(); ?>

<main id="main-content">

	<section class="bg-gradient-to-b from-indigo-50 via-white to-slate-50 py-16 sm:py-20 border-b border-slate-200/80">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="max-w-3xl">
				<p class="inline-flex items-center rounded-full bg-white border border-slate-200 px-3 py-1 text-xs font-semibold text-indigo-700 mb-5 shadow-sm">SerpVision Blog</p>
				<h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight text-slate-900 mb-5">
					<?php echo esc_html( get_the_title() ?: 'Practical SEO guides and product updates' ); ?>
				</h1>
				<p class="text-lg text-slate-500 leading-relaxed">
					Clear, actionable articles on rank tracking, audits, competitor analysis, and getting more out of Search Console.
				</p>
			</div>
		</div>
	</section>

	<section class="py-16 sm:py-20">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<?php
			$paged      = max( 1, (int) get_query_var( 'paged' ), (int) get_query_var( 'page' ) );
			$blog_query = new WP_Query( array(
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'posts_per_page' => 9,
				'paged'          => $paged,
			) );

			if ( $blog_query->have_posts() ) : ?>
				<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
					<?php while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
						<article class="group bg-white border border-slate-200/80 rounded-2xl shadow-sm overflow-hidden flex flex-col transition-all hover:shadow-soft hover:-translate-y-0.5">
							<?php if ( has_post_thumbnail() ) : ?>
								<a href="<?php the_permalink(); ?>" class="block aspect-[16/9] overflow-hidden bg-slate-100">
									<?php the_post_thumbnail( 'large', array( 'class' => 'w-full h-full object-cover transition-transform duration-300 group-hover:scale-105' ) ); ?>
								</a>
							<?php endif; ?>
							<div class="p-6 flex flex-col flex-1">
								<div class="flex items-center gap-2 text-xs text-slate-400 mb-3">
									<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
									<?php $cats = get_the_category(); if ( ! empty( $cats ) ) : ?>
										<span aria-hidden="true">&middot;</span>
										<span class="font-semibold text-indigo-600"><?php echo esc_html( $cats[0]->name ); ?></span>
									<?php endif; ?>
								</div>
								<h2 class="text-lg font-bold text-slate-900 mb-2 leading-snug">
									<a href="<?php the_permalink(); ?>" class="hover:text-indigo-600 transition-colors"><?php the_title(); ?></a>
								</h2>
								<p class="text-sm text-slate-500 leading-relaxed mb-5 flex-1"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 24 ) ); ?></p>
								<a href="<?php the_permalink(); ?>" class="text-sm font-semibold text-indigo-600 hover:text-indigo-700 mt-auto">Read article &rarr;</a>
							</div>
						</article>
					<?php endwhile; ?>
				</div>

				<div class="mt-12 flex justify-center serpvision-pagination">
					<?php
					echo paginate_links( array(
						'total'     => $blog_query->max_num_pages,
						'current'   => $paged,
						'mid_size'  => 1,
						'prev_text' => '&larr;',
						'next_text' => '&rarr;',
						'type'      => 'list',
					) );
					?>
				</div>

				<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<div class="max-w-xl mx-auto text-center bg-white border border-slate-200/80 rounded-3xl shadow-sm p-12">
					<h2 class="text-2xl font-extrabold text-slate-900 mb-3">No posts yet</h2>
					<p class="text-slate-500 mb-6">Articles will appear here as soon as they are published. Add your first post from the WordPress dashboard.</p>
					<a href="<?php echo esc_url( serpvision_url('register') ); ?>" class="inline-flex items-center justify-center bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl px-6 py-3 text-sm font-semibold transition-all active:scale-95 shadow-sm">Start a Project</a>
				</div>
			<?php endif; ?>
		</div>
	</section>

</main>

<?php get_footer(); ?>