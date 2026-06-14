<?php get_header(); ?>

<main id="main-content">

	<?php while ( have_posts() ) : the_post(); ?>

		<article>
			<header class="bg-gradient-to-b from-indigo-50 via-white to-slate-50 py-14 sm:py-20 border-b border-slate-200/80">
				<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
					<div class="flex items-center gap-2 text-xs text-slate-400 mb-5">
						<a href="<?php echo esc_url( home_url('/blog/') ); ?>" class="font-semibold text-indigo-600 hover:text-indigo-700">Blog</a>
						<span aria-hidden="true">&middot;</span>
						<time datetime="<?php echo esc_attr( get_the_date('c') ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
					</div>
					<h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-slate-900 mb-5 leading-tight"><?php the_title(); ?></h1>
					<div class="flex items-center gap-3 text-sm text-slate-500">
						<?php echo get_avatar( get_the_author_meta('ID'), 36, '', '', array( 'class' => 'rounded-full' ) ); ?>
						<span>By <span class="font-semibold text-slate-700"><?php the_author(); ?></span></span>
						<span aria-hidden="true">&middot;</span>
						<span><?php echo esc_html( serpvision_reading_time() ); ?> min read</span>
					</div>
				</div>
			</header>

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 -mt-8">
					<div class="rounded-3xl overflow-hidden border border-slate-200/80 shadow-soft bg-slate-100 aspect-[16/9]">
						<?php the_post_thumbnail( 'large', array( 'class' => 'w-full h-full object-cover' ) ); ?>
					</div>
				</div>
			<?php endif; ?>

			<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16">
				<div class="post-content text-slate-700">
					<?php the_content(); ?>
				</div>

				<?php $tags = get_the_tags();
				if ( $tags ) : ?>
					<div class="mt-10 flex flex-wrap gap-2">
						<?php foreach ( $tags as $tag ) : ?>
							<a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" class="inline-flex items-center rounded-full bg-slate-100 hover:bg-slate-200 px-3 py-1 text-xs font-medium text-slate-600 transition-colors">#<?php echo esc_html( $tag->name ); ?></a>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>

				<div class="mt-12 pt-8 border-t border-slate-200 flex flex-col sm:flex-row justify-between gap-4">
					<?php $prev = get_previous_post(); $next = get_next_post(); ?>
					<div>
						<?php if ( $prev ) : ?>
							<span class="block text-xs text-slate-400 mb-1">Previous</span>
							<a href="<?php echo esc_url( get_permalink( $prev ) ); ?>" class="text-sm font-semibold text-slate-700 hover:text-indigo-600">&larr; <?php echo esc_html( get_the_title( $prev ) ); ?></a>
						<?php endif; ?>
					</div>
					<div class="sm:text-right">
						<?php if ( $next ) : ?>
							<span class="block text-xs text-slate-400 mb-1">Next</span>
							<a href="<?php echo esc_url( get_permalink( $next ) ); ?>" class="text-sm font-semibold text-slate-700 hover:text-indigo-600"><?php echo esc_html( get_the_title( $next ) ); ?> &rarr;</a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</article>

		<section class="pb-16">
			<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
				<div class="bg-indigo-600 rounded-3xl p-8 sm:p-10 text-center">
					<h2 class="text-2xl font-extrabold text-white mb-3">Track your rankings with SerpVision</h2>
					<p class="text-indigo-100 mb-6">Start a project and see what changed, why it matters, and what to check next.</p>
					<a href="<?php echo esc_url( serpvision_url('register') ); ?>" class="inline-flex bg-white text-indigo-700 hover:bg-slate-50 rounded-xl px-6 py-3 text-sm font-bold transition-all active:scale-95">Start a Project</a>
				</div>
			</div>
		</section>

		<?php
		if ( comments_open() || get_comments_number() ) :
			?>
			<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
				<?php comments_template(); ?>
			</div>
		<?php endif; ?>

	<?php endwhile; ?>

</main>

<?php get_footer(); ?>