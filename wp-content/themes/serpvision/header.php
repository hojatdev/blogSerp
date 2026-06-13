<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" type="image/svg+xml" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/serpvision-favicon.svg">
		<?php wp_head(); ?>

		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
	</head>
	<body class="bg-slate-50 text-slate-900 antialiased">
		<a href="#main-content" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[100] focus:rounded-lg focus:bg-white focus:px-4 focus:py-2 focus:text-sm focus:font-semibold focus:text-indigo-700 focus:shadow-lg">Skip to content</a>
		<header class="bg-white/90 backdrop-blur-md border-b border-slate-200/80 sticky top-0 z-50" role="banner">
			<nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between" aria-label="Primary navigation">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-2 flex-shrink-0" aria-label="<?php bloginfo('name'); ?> home">
					<span class="w-40 flex items-center justify-center" aria-hidden="true">
						<?php if ( has_custom_logo() ) :
							the_custom_logo();
						else : ?>
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/serpvision-logo.svg" alt="<?php bloginfo('name'); ?> Logo">
						<?php endif; ?>
					</span>
				</a>
				<ul class="hidden md:flex items-center gap-1" role="list">
					<li>
						<a href="<?php echo esc_url(home_url('/')); ?>"
						   class="<?php echo esc_attr(serpvision_nav_link_class('/')); ?>"
						   <?php echo serpvision_aria_current('/'); ?>>
							Home
						</a>
					</li>
					<li>
						<a href="<?php echo esc_url(home_url('/rank-tracking/')); ?>"
						   class="<?php echo esc_attr(serpvision_nav_link_class('/rank-tracking/')); ?>"
						   <?php echo serpvision_aria_current('/rank-tracking/'); ?>>
							Rank Tracking
						</a>
					</li>
					<li>
						<a href="<?php echo esc_url(home_url('/seo-audit/')); ?>"
						   class="<?php echo esc_attr(serpvision_nav_link_class('/seo-audit/')); ?>"
						   <?php echo serpvision_aria_current('/seo-audit/'); ?>>
							SEO Audit
						</a>
					</li>
					<li>
						<a href="<?php echo esc_url(home_url('/competitor-analysis/')); ?>"
						   class="<?php echo esc_attr(serpvision_nav_link_class('/competitor-analysis/')); ?>"
						   <?php echo serpvision_aria_current('/competitor-analysis/'); ?>>
							Competitors
						</a>
					</li>
					<li>
						<a href="<?php echo esc_url(home_url('/blog/')); ?>"
						   class="<?php echo esc_attr(serpvision_nav_link_class('/blog/')); ?>"
						   <?php echo serpvision_aria_current('/blog/'); ?>>
							Blog
						</a>
					</li>
					<li>
						<a href="<?php echo esc_url(home_url('/pricing/')); ?>"
						   class="<?php echo esc_attr(serpvision_nav_link_class('/pricing/')); ?>"
						   <?php echo serpvision_aria_current('/pricing/'); ?>>
							Pricing
						</a>
					</li>
				</ul>
				<div class="hidden md:flex items-center gap-3">
					<a href="<?php echo esc_url( serpvision_url('login') ); ?>" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors"><?php echo esc_html( serpvision_get_cta_secondary_text() ); ?></a>
					<a href="<?php echo esc_url( serpvision_get_cta_primary_url() ); ?>" class="bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl px-4 py-2 text-sm font-semibold transition-all active:scale-95 shadow-sm"><?php echo esc_html( serpvision_get_cta_primary_text() ); ?></a>
				</div>

				<button data-role="nav-toggle" class="focus-ring md:hidden p-2 rounded-lg hover:bg-slate-100 transition-all duration-200" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-navigation">
					<svg data-role="icon-open" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
						<path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
					</svg>
					<svg data-role="icon-close" class="w-5 h-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
						<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
					</svg>
				</button>
			</nav>
			<div data-role="nav-drawer" class="nav-drawer bg-white border-t border-slate-200/80 md:hidden">
				<div class="max-w-7xl mx-auto px-4 py-4 flex flex-col gap-1">
					<a href="<?php echo esc_url(home_url('/')); ?>"
					   class="<?php echo esc_attr(serpvision_nav_link_class('/')); ?>"
					   <?php echo serpvision_aria_current('/'); ?>>
						Home
					</a>
					<a href="<?php echo esc_url(home_url('/rank-tracking/')); ?>"
					   class="<?php echo esc_attr(serpvision_nav_link_class('/rank-tracking/')); ?>"
					   <?php echo serpvision_aria_current('/rank-tracking/'); ?>>
						Rank Tracking
					</a>
					<a href="<?php echo esc_url(home_url('/seo-audit/')); ?>"
					   class="<?php echo esc_attr(serpvision_nav_link_class('/seo-audit/')); ?>"
					   <?php echo serpvision_aria_current('/seo-audit/'); ?>>
						SEO Audit
					</a>
					<a href="<?php echo esc_url(home_url('/competitor-analysis/')); ?>"
					   class="<?php echo esc_attr(serpvision_nav_link_class('/competitor-analysis/')); ?>"
					   <?php echo serpvision_aria_current('/competitor-analysis/'); ?>>
						Competitors
					</a>
					<a href="<?php echo esc_url(home_url('/blog/')); ?>"
					   class="<?php echo esc_attr(serpvision_nav_link_class('/blog/')); ?>"
					   <?php echo serpvision_aria_current('/blog/'); ?>>
						Blog
					</a>
					<a href="<?php echo esc_url(home_url('/pricing/')); ?>"
					   class="<?php echo esc_attr(serpvision_nav_link_class('/pricing/')); ?>"
					   <?php echo serpvision_aria_current('/pricing/'); ?>>
						Pricing
					</a>
					<div class="border-t border-slate-100 mt-2 pt-3 flex flex-col gap-2">
						<a href="<?php echo esc_url( serpvision_url('login') ); ?>"
						   class="px-3 py-3 text-sm font-medium text-slate-700 hover:text-slate-900 hover:bg-slate-50 rounded-lg transition-colors">
							<?php echo esc_html( serpvision_get_cta_secondary_text() ); ?>
						</a>
						<a href="<?php echo esc_url( serpvision_get_cta_primary_url() ); ?>"
						   class="bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl px-4 py-3 text-sm font-semibold text-center transition-all active:scale-95">
							<?php echo esc_html( serpvision_get_cta_primary_text() ); ?>
						</a>
					</div>
				</div>
			</div>
		</header>
