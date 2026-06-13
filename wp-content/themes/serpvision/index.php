<?php get_header(); ?>

<main id="main-content">

	<section class="bg-gradient-to-b from-indigo-50 via-white to-slate-50 py-14 sm:py-20 border-b border-slate-200/80">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900">
				<?php
				if ( is_search() ) {
					printf( 'Search results for &ldquo;%s&rdquo;', esc_html( get_search_query() ) );
				} elseif ( is_category() ) {
					single_cat_title( 'Category: ' );
				} elseif ( is_tag() ) {
					single_tag_title( 'Tag: ' );
				} elseif ( is_author() ) {
					printf( 'Posts by %s', esc_html( get_the_author() ) );
				} elseif ( is_archive() ) {
					the_archive_title();
				} else {
					bloginfo( 'name' );
				}
				?>
			</h1>
		</div>
	</section>

	<section class="py-16 sm:py-20">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<?php if ( have_posts() ) : ?>
				<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
					<?php while ( have_posts() ) : the_post(); ?>
						<article class="group bg-white border border-slate-200/80 rounded-2xl shadow-sm overflow-hidden flex flex-col transition-all hover:shadow-soft hover:-translate-y-0.5">
							<?php if ( has_post_thumbnail() ) : ?>
								<a href="<?php the_permalink(); ?>" class="block aspect-[16/9] overflow-hidden bg-slate-100">
									<?php the_post_thumbnail( 'large', array( 'class' => 'w-full h-full object-cover transition-transform duration-300 group-hover:scale-105' ) ); ?>
								</a>
							<?php endif; ?>
							<div class="p-6 flex flex-col flex-1">
								<div class="flex items-center gap-2 text-xs text-slate-400 mb-3">
									<time datetime="<?php echo esc_attr( get_the_date('c') ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
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
					<?php the_posts_pagination( array(
						'mid_size'  => 1,
						'prev_text' => '&larr;',
						'next_text' => '&rarr;',
					) ); ?>
				</div>
			<?php else : ?>
				<div class="max-w-xl mx-auto text-center bg-white border border-slate-200/80 rounded-3xl shadow-sm p-12">
					<h2 class="text-2xl font-extrabold text-slate-900 mb-3">Nothing found</h2>
					<p class="text-slate-500">There are no posts to show here yet. Try another search or check back soon.</p>
				</div>
			<?php endif; ?>
		</div>
	</section>

</main>

<?php get_footer(); ?>