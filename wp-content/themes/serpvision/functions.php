<?php

function serpvision_url($key) {
    $urls = [
        'register' => 'https://app.serpvision.com/register',
        'login'    => 'https://app.serpvision.com/login',
        'pricing'  => home_url('/pricing/'),
    ];

    return $urls[$key] ?? home_url('/');
}

function serpvision_enqueue_assets() {
    wp_enqueue_style(
        'serpvision-style',
        get_stylesheet_uri(),
        [],
        '1.0.0'
    );

    wp_enqueue_style(
        'serpvision-tailwind',
        get_template_directory_uri() . '/assets/css/tailwind.css',
        ['serpvision-style'],
        '1.0.0'
    );

    wp_enqueue_style(
        'serpvision-main',
        get_template_directory_uri() . '/assets/css/style.css',
        ['serpvision-tailwind'],
        '1.0.0'
    );

    wp_enqueue_script(
        'serpvision-script',
        get_template_directory_uri() . '/assets/js/scripts.js',
        [],
        '1.0.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'serpvision_enqueue_assets');

function serpvision_is_active_path($path) {
    $target_path = trim($path, '/');
    $current_path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

    // Home page
    if ($target_path === '') {
        return is_front_page();
    }

    // For now, match Blog only by URL path
    // Later, when you create a real Posts Page, we can improve this.
    return $current_path === $target_path;
}

function serpvision_nav_link_class($path, $variant = 'mobile') {
    if ($variant === 'desktop') {
        $base_class = 'px-3 py-2 text-sm font-medium rounded-lg transition-colors';
    } else {
        $base_class = 'px-3 py-3 text-sm font-medium rounded-lg transition-colors';
    }

    if (serpvision_is_active_path($path)) {
        return $base_class . ' text-indigo-600 bg-indigo-50';
    }

    return $base_class . ' text-slate-600 hover:text-slate-900 hover:bg-slate-50';
}

function serpvision_aria_current($path) {
    return serpvision_is_active_path($path) ? 'aria-current="page"' : '';
}

add_post_type_support('page', 'excerpt');

// ════════════════════════════════════════════════════════════
// Security Hardening
// ════════════════════════════════════════════════════════════

// 1. Remove WordPress version number from <head> and RSS feeds
remove_action('wp_head', 'wp_generator');
add_filter('the_generator', '__return_empty_string');

// 3. Generic login error — don't reveal whether username or password is wrong
add_filter('login_errors', function() {
    return 'Incorrect credentials. Please try again.';
});

// 4. Disable XML-RPC (primary brute-force & DDoS amplification vector)
add_filter('xmlrpc_enabled', '__return_false');
add_filter('xmlrpc_methods', function($methods) {
    unset($methods['pingback.ping'], $methods['pingback.extensions.getPingbacks']);
    return $methods;
});

// 5. Remove discovery links that expose WP infrastructure
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('template_redirect', 'rest_output_link_header', 11);

// 6. Block author enumeration (?author=1 scans reveal usernames)
add_action('template_redirect', function() {
    if ( ! is_admin() && isset($_GET['author']) ) {
        wp_die('Access denied.', 'Forbidden', ['response' => 403]);
    }
});

// 7. Remove /wp/v2/users endpoint from REST API for logged-out visitors
add_filter('rest_endpoints', function($endpoints) {
    if ( ! is_user_logged_in() ) {
        unset(
            $endpoints['/wp/v2/users'],
            $endpoints['/wp/v2/users/(?P<id>[\d]+)']
        );
    }
    return $endpoints;
});

// 8. Send HTTP security headers on every page load
add_action('send_headers', function() {
    header('X-Content-Type-Options: nosniff');
    header('X-Frame-Options: SAMEORIGIN');
    header('X-XSS-Protection: 1; mode=block');
    header('Referrer-Policy: strict-origin-when-cross-origin');
    header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
});

// 9. Disable automatic pingbacks on new posts
add_filter('pre_option_default_ping_status', '__return_zero');

// ════════════════════════════════════════════════════════════

function serpvision_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('custom-logo', [
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ]);
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);
}
add_action('after_setup_theme', 'serpvision_theme_setup');

// ════════════════════════════════════════════════════════════
// Theme Customizer: logo, CTA, social links
// ════════════════════════════════════════════════════════════

add_action('customize_register', 'serpvision_customize_register');
function serpvision_customize_register( WP_Customize_Manager $wp_customize ) {

    // ── CTA Section ──────────────────────────────────────────
    $wp_customize->add_section('serpvision_cta', [
        'title'    => 'CTA Buttons',
        'priority' => 30,
    ]);

    $wp_customize->add_setting('serpvision_cta_primary_text', [
        'default'           => 'Start a Project',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ]);
    $wp_customize->add_control('serpvision_cta_primary_text', [
        'label'   => 'Primary CTA Text',
        'section' => 'serpvision_cta',
        'type'    => 'text',
    ]);

    $wp_customize->add_setting('serpvision_cta_primary_url', [
        'default'           => 'https://app.serpvision.com/register',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ]);
    $wp_customize->add_control('serpvision_cta_primary_url', [
        'label'   => 'Primary CTA URL',
        'section' => 'serpvision_cta',
        'type'    => 'url',
    ]);

    $wp_customize->add_setting('serpvision_cta_secondary_text', [
        'default'           => 'Log in',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ]);
    $wp_customize->add_control('serpvision_cta_secondary_text', [
        'label'   => 'Secondary CTA (Login) Text',
        'section' => 'serpvision_cta',
        'type'    => 'text',
    ]);

    // ── Social Links Section ─────────────────────────────────
    $wp_customize->add_section('serpvision_social', [
        'title'    => 'Social Links',
        'priority' => 35,
    ]);

    $social_defaults = [
        'serpvision_social_twitter'  => ['label' => 'X / Twitter URL',  'default' => ''],
        'serpvision_social_linkedin' => ['label' => 'LinkedIn URL',      'default' => ''],
        'serpvision_social_youtube'  => ['label' => 'YouTube URL',       'default' => ''],
        'serpvision_social_github'   => ['label' => 'GitHub URL',        'default' => ''],
    ];

    foreach ( $social_defaults as $key => $opts ) {
        $wp_customize->add_setting($key, [
            'default'           => $opts['default'],
            'sanitize_callback' => 'esc_url_raw',
            'transport'         => 'refresh',
        ]);
        $wp_customize->add_control($key, [
            'label'   => $opts['label'],
            'section' => 'serpvision_social',
            'type'    => 'url',
        ]);
    }
}

function serpvision_get_cta_primary_text() {
    return get_theme_mod('serpvision_cta_primary_text', 'Start a Project');
}
function serpvision_get_cta_primary_url() {
    return get_theme_mod('serpvision_cta_primary_url', 'https://app.serpvision.com/register');
}
function serpvision_get_cta_secondary_text() {
    return get_theme_mod('serpvision_cta_secondary_text', 'Log in');
}

// ════════════════════════════════════════════════════════════
// SEO: Meta Description, Open Graph, Canonical, Structured Data
// ════════════════════════════════════════════════════════════

function serpvision_default_descriptions() {
    return [
        ''                       => 'Serpvision brings keyword rank tracking, competitor monitoring, SEO site audits and Google Search Console insights into one clean dashboard. See what changed and decide what to fix next.',
        'rank-tracking'          => 'Monitor keyword positions by country, device and search engine with Serpvision. Connect ranking movement to pages, competitors, audits and Search Console data to decide what to do next.',
        'keyword-rank-tracking'  => 'Track every keyword that matters. Serpvision monitors positions by country, device and search engine — then connects ranking movement to pages, audits and Search Console for clearer SEO decisions.',
        'seo-audit'              => 'Run a full site audit with Serpvision. Find broken links, duplicate titles and on-page issues — ranked by severity so your team fixes the right things first.',
        'competitor-analysis'    => 'Track competitor domains on your own keyword list. Compare rank positions, find visibility gaps and spot SERP threats in one place with Serpvision competitor analysis.',
        'search-console-insights'=> 'Connect Google Search Console to Serpvision. View clicks, impressions, CTR and average position alongside rank data and audit findings for complete SEO context.',
        'pricing'                => 'Serpvision uses usage-based pricing — no rigid plans. Estimate your monthly cost based on keywords, check frequency, competitor tracking and Search Console sites.',
        'about'                  => 'Serpvision is an SEO management platform built around clarity and honest context. Learn about the product and our approach to rank tracking, auditing and competitor monitoring.',
        'contact'                => 'Contact the Serpvision team with questions about pricing, features or getting started with SEO tracking.',
        'faq'                    => 'Answers to common questions about Serpvision — pricing, rank tracking, SEO audits, competitor analysis and how we compare to other SEO tools.',
        'blog'                   => 'The Serpvision blog. Practical guides and insights on rank tracking, site audits, competitor monitoring and SEO decision-making.',
        'privacy-policy'         => 'Read the Serpvision privacy policy to understand how we collect, use and protect your data when you use our SEO tracking platform.',
        'terms-and-conditions'   => 'Serpvision terms and conditions of service. Read before using the Serpvision SEO management platform.',
        'refund-policy'          => 'Read the Serpvision refund policy to understand the conditions and process for requesting a refund on your account.',
    ];
}

function serpvision_get_meta_description() {
    $defaults = serpvision_default_descriptions();

    if ( is_front_page() ) {
        return $defaults[''];
    }

    if ( is_singular() ) {
        $excerpt = get_the_excerpt();
        if ( ! empty( $excerpt ) ) {
            return wp_strip_all_tags( $excerpt );
        }
        $slug = get_post_field( 'post_name', get_the_ID() );
        if ( isset( $defaults[ $slug ] ) ) {
            return $defaults[ $slug ];
        }
    }

    return $defaults[''];
}

function serpvision_reading_time( $post_id = null ) {
    $content   = get_post_field( 'post_content', $post_id );
    $word_count = str_word_count( wp_strip_all_tags( $content ) );
    return max( 1, (int) round( $word_count / 200 ) );
}

function serpvision_seo_head() {
    $is_post     = is_singular( 'post' );
    $canonical   = is_front_page() ? home_url( '/' ) : (string) get_permalink();
    $description = serpvision_get_meta_description();
    $title       = wp_get_document_title();
    $og_type     = $is_post ? 'article' : 'website';
    $og_image    = get_template_directory_uri() . '/assets/images/serpvision-og.png';

    if ( is_singular() && has_post_thumbnail() ) {
        $og_image = get_the_post_thumbnail_url( null, 'large' );
    }
    ?>
<link rel="canonical" href="<?php echo esc_url( $canonical ); ?>">
<meta name="description" content="<?php echo esc_attr( $description ); ?>">
<meta property="og:type" content="<?php echo esc_attr( $og_type ); ?>">
<meta property="og:title" content="<?php echo esc_attr( $title ); ?>">
<meta property="og:description" content="<?php echo esc_attr( $description ); ?>">
<meta property="og:url" content="<?php echo esc_url( $canonical ); ?>">
<meta property="og:site_name" content="Serpvision">
<meta property="og:image" content="<?php echo esc_url( $og_image ); ?>">
<?php if ( $is_post ) : ?>
<meta property="og:article:published_time" content="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
<meta property="og:article:modified_time" content="<?php echo esc_attr( get_the_modified_date( 'c' ) ); ?>">
<meta property="og:article:author" content="<?php echo esc_attr( get_the_author() ); ?>">
<?php $cats = get_the_category(); if ( ! empty( $cats ) ) : ?>
<meta property="og:article:section" content="<?php echo esc_attr( $cats[0]->name ); ?>">
<?php endif; ?>
<?php endif; ?>
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo esc_attr( $title ); ?>">
<meta name="twitter:description" content="<?php echo esc_attr( $description ); ?>">
<meta name="twitter:image" content="<?php echo esc_url( $og_image ); ?>">
<?php
    serpvision_structured_data_head();
}
add_action( 'wp_head', 'serpvision_seo_head', 5 );

function serpvision_output_schema( array $schema ) {
    echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . "\n";
}

function serpvision_breadcrumb_schema( string $home_url, string $page_name, string $page_url ) {
    return [
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => [
            [ '@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $home_url ],
            [ '@type' => 'ListItem', 'position' => 2, 'name' => $page_name, 'item' => $page_url ],
        ],
    ];
}

function serpvision_structured_data_head() {
    $home_url = rtrim( home_url( '/' ), '/' ) . '/';
    $logo_url = get_template_directory_uri() . '/assets/images/serpvision-logo.svg';

    // ── Front page ───────────────────────────────────────────
    if ( is_front_page() ) {
        serpvision_output_schema([
            '@context' => 'https://schema.org',
            '@type'    => 'WebSite',
            'name'     => 'Serpvision',
            'url'      => $home_url,
        ]);
        serpvision_output_schema([
            '@context' => 'https://schema.org',
            '@type'    => 'Organization',
            'name'     => 'Serpvision',
            'url'      => $home_url,
            'logo'     => [ '@type' => 'ImageObject', 'url' => $logo_url ],
        ]);
        serpvision_output_schema([
            '@context'            => 'https://schema.org',
            '@type'               => 'SoftwareApplication',
            'name'                => 'Serpvision',
            'applicationCategory' => 'BusinessApplication',
            'operatingSystem'     => 'Web',
            'url'                 => $home_url,
            'description'         => 'SEO management platform for rank tracking, site audits, competitor monitoring and Search Console insights.',
            'offers'              => [
                '@type'         => 'Offer',
                'price'         => '0',
                'priceCurrency' => 'USD',
                'description'   => 'Free plan available. Usage-based pricing.',
            ],
        ]);
        return;
    }

    // ── Blog single post ─────────────────────────────────────
    if ( is_singular( 'post' ) ) {
        $post_url    = (string) get_permalink();
        $image_url   = has_post_thumbnail() ? get_the_post_thumbnail_url( null, 'large' ) : $logo_url;
        $author_name = get_the_author();
        $read_time   = serpvision_reading_time();
        $cats        = get_the_category();

        serpvision_output_schema([
            '@context'         => 'https://schema.org',
            '@type'            => 'BlogPosting',
            'headline'         => get_the_title(),
            'description'      => serpvision_get_meta_description(),
            'url'              => $post_url,
            'datePublished'    => get_the_date( 'c' ),
            'dateModified'     => get_the_modified_date( 'c' ),
            'author'           => [ '@type' => 'Person', 'name' => $author_name ],
            'publisher'        => [
                '@type' => 'Organization',
                'name'  => 'Serpvision',
                'logo'  => [ '@type' => 'ImageObject', 'url' => $logo_url ],
            ],
            'image'            => [ '@type' => 'ImageObject', 'url' => $image_url ],
            'mainEntityOfPage' => [ '@type' => 'WebPage', '@id' => $post_url ],
            'timeRequired'     => 'PT' . $read_time . 'M',
            'articleSection'   => ! empty( $cats ) ? $cats[0]->name : '',
        ]);

        serpvision_output_schema( serpvision_breadcrumb_schema(
            $home_url,
            get_the_title(),
            $post_url
        ) );
        return;
    }

    // ── Static pages (not front page) ────────────────────────
    if ( is_singular( 'page' ) ) {
        serpvision_output_schema( serpvision_breadcrumb_schema(
            $home_url,
            get_the_title(),
            (string) get_permalink()
        ) );
    }
}

function serpvision_faq_schema( array $faqs ) {
    $schema = [
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        'mainEntity' => array_map( function( $faq ) {
            return [
                '@type'          => 'Question',
                'name'           => $faq['q'],
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text'  => $faq['a'],
                ],
            ];
        }, $faqs ),
    ];
    echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . "\n";
}

// ════════════════════════════════════════════════════════════
// Robots.txt — allow all, disallow WP internals, add sitemap
// ════════════════════════════════════════════════════════════

add_filter( 'robots_txt', 'serpvision_robots_txt', 10, 2 );
function serpvision_robots_txt( $output, $public ) {
    if ( ! $public ) {
        return $output;
    }
    return "User-agent: *\nAllow: /\nDisallow: /wp-admin/\nDisallow: /wp-login.php\nDisallow: /wp-includes/\nDisallow: /?s=\n\nSitemap: " . home_url( '/wp-sitemap.xml' ) . "\n";
}
