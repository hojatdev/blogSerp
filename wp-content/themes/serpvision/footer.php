<footer class="bg-slate-900 text-slate-400" role="contentinfo">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-8">
		<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-8">
			<div class="sm:col-span-2 lg:col-span-5">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-2 mb-4" aria-label="Serpvision home">
					<span class="w-40 flex items-center justify-center" aria-hidden="true">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/serpvision-logo-w.svg" alt="Serpvision Logo">
					</span>
				</a>
				<p class="text-sm leading-relaxed mb-6 max-w-md">
					A clean SEO decision platform for tracking rankings, auditing websites, monitoring competitors, and reading Search Console data with less noise.
				</p>
				<?php
				$social_icons = [
					'serpvision_social_twitter'  => [
						'label' => 'X / Twitter',
						'svg'   => '<svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18.244 2H21.5l-7.11 8.13L22.75 22h-6.55l-5.13-6.7L5.2 22H1.94l7.6-8.69L1.5 2h6.72l4.64 6.13L18.244 2Zm-1.14 17.9h1.8L7.24 3.99H5.31L17.104 19.9Z" /></svg>',
					],
					'serpvision_social_linkedin' => [
						'label' => 'LinkedIn',
						'svg'   => '<svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M4.98 3.5C4.98 4.88 3.86 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1s2.48 1.12 2.48 2.5ZM.28 8.25h4.44V23H.28V8.25ZM8.12 8.25h4.25v2.02h.06c.59-1.12 2.04-2.3 4.2-2.3 4.49 0 5.32 2.96 5.32 6.8V23h-4.43v-7.29c0-1.74-.03-3.98-2.43-3.98-2.43 0-2.8 1.9-2.8 3.86V23H8.12V8.25Z" /></svg>',
					],
					'serpvision_social_youtube'  => [
						'label' => 'YouTube',
						'svg'   => '<svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M23.5 6.2a3 3 0 0 0-2.1-2.12C19.55 3.58 12 3.58 12 3.58s-7.55 0-9.4.5A3 3 0 0 0 .5 6.2 31.4 31.4 0 0 0 0 12a31.4 31.4 0 0 0 .5 5.8 3 3 0 0 0 2.1 2.12c1.85.5 9.4.5 9.4.5s7.55 0 9.4-.5a3 3 0 0 0 2.1-2.12A31.4 31.4 0 0 0 24 12a31.4 31.4 0 0 0-.5-5.8ZM9.6 15.57V8.43L15.85 12 9.6 15.57Z" /></svg>',
					],
					'serpvision_social_github'   => [
						'label' => 'GitHub',
						'svg'   => '<svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 .5A12 12 0 0 0 8.2 23.9c.6.11.82-.26.82-.58v-2.03c-3.34.73-4.04-1.61-4.04-1.61-.55-1.39-1.34-1.76-1.34-1.76-1.1-.75.08-.74.08-.74 1.21.09 1.85 1.25 1.85 1.25 1.08 1.84 2.83 1.31 3.52 1 .11-.78.42-1.31.76-1.61-2.66-.3-5.47-1.33-5.47-5.93 0-1.31.47-2.38 1.24-3.22-.12-.3-.54-1.52.12-3.18 0 0 1.01-.32 3.3 1.23A11.5 11.5 0 0 1 12 5.61c1.02 0 2.05.14 3.01.41 2.29-1.55 3.3-1.23 3.3-1.23.66 1.66.24 2.88.12 3.18.77.84 1.24 1.91 1.24 3.22 0 4.61-2.81 5.62-5.49 5.92.43.37.81 1.1.81 2.22v3.29c0 .32.22.7.83.58A12 12 0 0 0 12 .5Z" /></svg>',
					],
				];
				$has_social = false;
				foreach ( $social_icons as $key => $icon ) {
					if ( get_theme_mod( $key ) ) { $has_social = true; break; }
				}
				if ( $has_social ) : ?>
				<div class="flex items-center gap-3">
					<?php foreach ( $social_icons as $key => $icon ) :
						$url = get_theme_mod( $key );
						if ( ! $url ) continue; ?>
						<a href="<?php echo esc_url( $url ); ?>" aria-label="<?php echo esc_attr( $icon['label'] ); ?>" rel="noopener noreferrer" target="_blank" class="w-10 h-10 rounded-xl border border-white/10 bg-white/5 backdrop-blur-sm flex items-center justify-center text-slate-300 hover:text-white hover:bg-white/10 hover:border-white/20 transition-all duration-200 active:scale-95">
							<?php echo wp_kses( $icon['svg'], [ 'svg' => [ 'class' => [], 'viewBox' => [], 'fill' => [], 'aria-hidden' => [] ], 'path' => [ 'd' => [], 'stroke-linecap' => [], 'stroke-linejoin' => [] ] ] ); ?>
						</a>
					<?php endforeach; ?>
				</div>
				<?php endif; ?>
			</div>
			<div class="lg:col-span-3">
				<h3 class="text-white font-semibold text-sm mb-4">Product</h3>
				<ul class="space-y-3 text-sm" role="list">
					<li>
						<a href="<?php echo esc_url( home_url( '/keyword-rank-tracking/' ) ); ?>" class="hover:text-white transition-colors">Keyword Rank Tracking</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/seo-audit/' ) ); ?>" class="hover:text-white transition-colors">SEO Site Audit</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/competitor-analysis/' ) ); ?>" class="hover:text-white transition-colors">Competitor Analysis</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/search-console-insights/' ) ); ?>" class="hover:text-white transition-colors">Search Console Insights</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/pricing/' ) ); ?>" class="hover:text-white transition-colors">Pricing</a>
					</li>
				</ul>
			</div>
			<div class="lg:col-span-2">
				<h3 class="text-white font-semibold text-sm mb-4">Resources</h3>
				<ul class="space-y-3 text-sm" role="list">
					<li>
						<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="hover:text-white transition-colors">Blog</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="hover:text-white transition-colors">Contact</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="hover:text-white transition-colors">About</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>" class="hover:text-white transition-colors">FAQs</a>
					</li>
				</ul>
			</div>
			<div class="lg:col-span-2">
				<h3 class="text-white font-semibold text-sm mb-4">Company</h3>
				<ul class="space-y-3 text-sm" role="list">
					<li>
						<a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>" class="hover:text-white transition-colors">Privacy Policy</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/terms-and-conditions/' ) ); ?>" class="hover:text-white transition-colors">Terms and Conditions</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/refund-policy/' ) ); ?>" class="hover:text-white transition-colors">Refund Policy</a>
					</li>
					<li>
						<a href="<?php echo esc_url( serpvision_url( 'login' ) ); ?>" class="hover:text-white transition-colors">Log in</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="border-t border-slate-800 mt-12 pt-8 text-sm text-center text-slate-500">© 2026 Serpvision. All rights reserved.</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>