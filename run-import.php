<?php
// SerpVision Blog Import Runner
// Run: php wp-cli.phar eval-file run-import.php

$dir = __DIR__ . '/blog-import/';

$posts = [
    1 => [
        'title'    => 'How to Optimize for Google AI Overviews in 2026: The Complete GEO Guide',
        'slug'     => 'how-to-optimize-for-google-ai-overviews-2026',
        'cat'      => 3,
        'meta_title' => 'Optimize for Google AI Overviews in 2026',
        'meta_desc'  => 'Learn how to get cited in Google AI Overviews with proven GEO strategies. Step-by-step guide for SEO pros, agencies, and content marketers in 2026.',
        'focus_kw'   => 'optimize for Google AI Overviews',
    ],
    2 => [
        'title'    => 'LLM SEO: How to Get Your Brand Cited in ChatGPT, Perplexity, and AI Search Engines in 2026',
        'slug'     => 'llm-seo-brand-visibility-chatgpt-perplexity-ai-search',
        'cat'      => 3,
        'meta_title' => 'LLM SEO: Get Cited in ChatGPT & Perplexity (2026)',
        'meta_desc'  => 'Learn how to make your brand visible in ChatGPT, Perplexity, and AI search engines. The 2026 LLM SEO guide for marketers, founders, and SEO professionals.',
        'focus_kw'   => 'LLM SEO',
    ],
    3 => [
        'title'    => 'Generative Engine Optimization (GEO): The Complete 2026 Playbook for AI-Era SEO',
        'slug'     => 'generative-engine-optimization-geo-guide-2026',
        'cat'      => 3,
        'meta_title' => 'Generative Engine Optimization (GEO) Guide 2026',
        'meta_desc'  => 'The complete GEO playbook for 2026. Learn how Generative Engine Optimization differs from SEO, what signals matter, and how to build an AI-first content strategy.',
        'focus_kw'   => 'generative engine optimization',
    ],
    4 => [
        'title'    => 'SERP Volatility in 2026: How to Detect Google Algorithm Updates Before They Hit Your Rankings',
        'slug'     => 'serp-volatility-detect-google-algorithm-updates-2026',
        'cat'      => 4,
        'meta_title' => 'SERP Volatility 2026: Detect Google Updates Early',
        'meta_desc'  => 'Learn how to detect Google algorithm updates before they destroy your rankings. SERP volatility monitoring strategies, tools, and alert systems for 2026.',
        'focus_kw'   => 'SERP volatility 2026',
    ],
    5 => [
        'title'    => 'Search Visibility Score: The KPI That\'s Replacing Traditional Keyword Rankings in 2026',
        'slug'     => 'search-visibility-score-replacing-keyword-rankings-2026',
        'cat'      => 4,
        'meta_title' => 'Search Visibility Score: The New SEO KPI for 2026',
        'meta_desc'  => 'Keyword rank position is no longer enough. Learn why Search Visibility Score is the KPI replacing traditional rankings in 2026 and how to measure and improve it.',
        'focus_kw'   => 'search visibility score',
    ],
    6 => [
        'title'    => 'Competitor SERP Analysis in 2026: How to Reverse-Engineer the Pages That Outrank You',
        'slug'     => 'competitor-serp-analysis-reverse-engineer-top-ranking-pages-2026',
        'cat'      => 4,
        'meta_title' => 'Competitor SERP Analysis: Reverse-Engineer Rankings (2026)',
        'meta_desc'  => 'Learn how to systematically reverse-engineer competitor pages that outrank you in 2026. SERP competitive intelligence strategies for SEO teams and agencies.',
        'focus_kw'   => 'competitor SERP analysis',
    ],
];

foreach ($posts as $num => $p) {
    $file = $dir . 'post' . $num . '.html';
    if (!file_exists($file)) {
        echo "SKIP post{$num} — file not found\n";
        continue;
    }
    $content = file_get_contents($file);

    // Check if slug already exists
    $existing = get_page_by_path($p['slug'], OBJECT, 'post');
    if ($existing) {
        echo "SKIP post{$num} — slug already exists (ID {$existing->ID})\n";
        continue;
    }

    $id = wp_insert_post([
        'post_title'    => $p['title'],
        'post_name'     => $p['slug'],
        'post_content'  => $content,
        'post_status'   => 'publish',
        'post_type'     => 'post',
        'post_category' => [$p['cat']],
        'meta_input'    => [
            '_yoast_wpseo_title'    => $p['meta_title'],
            '_yoast_wpseo_metadesc' => $p['meta_desc'],
            'focus_keyword'         => $p['focus_kw'],
        ],
    ]);

    if (is_wp_error($id)) {
        echo "ERROR post{$num}: " . $id->get_error_message() . "\n";
    } else {
        echo "OK post{$num} — ID {$id} — {$p['title']}\n";
    }
}

echo "\nDone.\n";
