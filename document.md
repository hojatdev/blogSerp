# SerpVision WordPress — Project Document

## Overview

**SerpVision** is a marketing website for an English-language SEO SaaS platform. It is built as a custom WordPress theme (Tailwind CSS via CDN, LTR, no page builder) and runs locally on XAMPP. The goal is to finalize the site locally and then deploy it to a VPS with a control panel (aaPanel or CyberPanel).

---

## Local Environment

| Item | Value |
|------|-------|
| **WordPress version** | 7.0 |
| **Language/locale** | English (`en_US`) |
| **PHP** | 8.2.4 (from XAMPP at `C:\xampp\php\php.exe`) |
| **Database** | MariaDB 10.4 (XAMPP MySQL) |
| **DB name** | `wp_corp` |
| **DB user** | `root` (no password) |
| **DB host** | `127.0.0.1` |
| **Site URL** | `http://localhost:8080` |
| **Admin URL** | `http://localhost:8080/wp-admin` |
| **Admin user** | `admin` |
| **Admin password** | `Admin@1404` ⚠️ change before going live |
| **Project root** | `C:\Users\RED LINE\Desktop\wordpress` |
| **WP-CLI** | `wp-cli.phar` in project root (v2.12.0) |

### How to start the local server

**Step 1 — Start MySQL** (run in background, skip if already running via XAMPP Control Panel):
```
"C:/xampp/mysql/bin/mysqld.exe" --defaults-file="C:/xampp/mysql/bin/my.ini" --standalone
```

**Step 2 — Start the dev server:**
```
cd "C:\Users\RED LINE\Desktop\wordpress"
php wp-cli.phar server --host=localhost --port=8080
```

> ⚠️ **MSYS path bug:** When running WP-CLI inside Git Bash, arguments that start with `/` get converted to Windows paths (e.g. `/%postname%/` becomes `/C:/Program Files/Git/%postname%/`). Always prefix such commands with `MSYS_NO_PATHCONV=1`.

---

## Theme: SerpVision

| Item | Value |
|------|-------|
| **Theme name** | SerpVision |
| **Theme slug** | `serpvision` |
| **Theme path** | `wp-content/themes/serpvision/` |
| **Version** | 1.0.0 |
| **CSS framework** | Tailwind CSS (CDN — no build step) |
| **Direction** | LTR, English |
| **Font** | Inter (Google Fonts) |

### Theme supports
- `title-tag` — WordPress manages `<title>` automatically
- `post-thumbnails` — featured images on posts
- `automatic-feed-links`
- `html5`

### Key helpers in `functions.php`

| Function | Purpose |
|----------|---------|
| `serpvision_url($key)` | Returns URLs for `register`, `login`, `pricing` |
| `serpvision_nav_link_class($path, $variant)` | Active/inactive nav link classes |
| `serpvision_is_active_path($path)` | Detects current page for nav highlighting |
| `serpvision_aria_current($path)` | Outputs `aria-current="page"` when active |

### Asset loading
Both stylesheets are enqueued via `wp_enqueue_scripts`:
- `serpvision-style` → `style.css` (theme root — contains WordPress theme header + utility CSS)
- `serpvision-main` → `assets/css/style.css` (main stylesheet — Tailwind utilities, FAQ accordion, tab panels, animations)
- `serpvision-script` → `assets/js/scripts.js` (mobile nav toggle + FAQ accordion JS)

### CSS classes to know

| Class | Purpose |
|-------|---------|
| `.dashboard-grid-bg` | Dotted indigo grid used in hero backgrounds |
| `.faq-body` / `.faq-body.is-open` | Inline FAQ accordion (used in rank-tracking, seo-audit, etc.) |
| `.faq-panel` / `.faq-panel.is-open` | FAQ accordion on the dedicated `/faq/` page |
| `.tab-panel` / `.tab-panel.is-active` | Tab switching (used in rank-tracking) |
| `.post-content` | Typography styles for blog single posts |
| `.legal-content` | Typography for legal pages |
| `.serpvision-pagination` | Pagination styling for blog listing |
| `.hero-animate` / `-2` / `-3` / `-4` | Fade-up entrance animations |
| `.nav-drawer` / `.nav-drawer.open` | Mobile nav drawer |

---

## Page Templates

All templates use the pattern `page-{slug}.php` — WordPress automatically picks the right template based on the page slug.

| Template file | URL | Type | Status |
|--------------|-----|------|--------|
| `front-page.php` | `/` | Hero landing page | ✅ Complete |
| `page-rank-tracking.php` | `/rank-tracking/` | Product page | ✅ Complete |
| `page-seo-audit.php` | `/seo-audit/` | Product page | ✅ Complete |
| `page-competitor-analysis.php` | `/competitor-analysis/` | Product page | ✅ Complete |
| `page-keyword-rank-tracking.php` | `/keyword-rank-tracking/` | SEO landing page | ✅ Complete |
| `page-search-console-insights.php` | `/search-console-insights/` | Product page | ✅ Complete |
| `page-pricing.php` | `/pricing/` | Pricing + calculator | ✅ Complete |
| `page-about.php` | `/about/` | About | ✅ Complete |
| `page-contact.php` | `/contact/` | Contact form | ✅ Complete |
| `page-faq.php` | `/faq/` | Help center FAQ | ✅ Complete |
| `page-blog.php` | `/blog/` | Blog listing | ✅ Complete |
| `page-privacy-policy.php` | `/privacy-policy/` | Legal | ✅ Complete |
| `page-terms-and-conditions.php` | `/terms-and-conditions/` | Legal | ✅ Complete |
| `page-refund-policy.php` | `/refund-policy/` | Legal | ✅ Complete |
| `single.php` | `/slug/` | Blog single post | ✅ Complete |
| `index.php` | archives, search, fallback | Archive/search | ✅ Complete |
| `page.php` | generic WP pages | Generic | ✅ Complete |

### WordPress pages (DB)

| ID | Title | Slug |
|----|-------|------|
| 5 | Home | `home` — static front page |
| 6 | Rank Tracking | `rank-tracking` |
| 7 | SEO Audit | `seo-audit` |
| 8 | Competitor Analysis | `competitor-analysis` |
| 9 | Blog | `blog` |
| 10 | Pricing | `pricing` |
| 11 | About | `about` |
| 12 | Contact | `contact` |
| 13 | FAQ | `faq` |
| 14 | Privacy Policy | `privacy-policy` |
| 15 | Terms and Conditions | `terms-and-conditions` |
| 17 | Keyword Rank Tracking | `keyword-rank-tracking` |
| 18 | Search Console Insights | `search-console-insights` |
| 19 | Refund Policy | `refund-policy` |

### Permalink structure
```
/%postname%/
```
Set with `MSYS_NO_PATHCONV=1 php wp-cli.phar rewrite structure '/%postname%/'`

---

## Product Page Design Pattern

All product pages (`rank-tracking`, `seo-audit`, `competitor-analysis`, `search-console-insights`) follow the same structure:

```
1. Hero section
   - dashboard-grid-bg
   - H1 + description + 2 CTAs
   - Dashboard UI mockup (table + stat cards)

2. Stats bar (4 icons + labels, white bg, border-y)

3. "Why it matters" (3 feature cards, bg-slate-50)

4. Feature grid (6 cards, bg-white)

5. Workflow steps (4 numbered steps, bg-slate-50)

6. Use cases (2×2 grid, bg-white or bg-slate-50)

7. Inline FAQ accordion (.faq-body pattern)
   - JS inline <script> at bottom of file

8. CTA banner (indigo-600 bg, 2 buttons)
```

### Legal page design pattern

```
1. Header: breadcrumb + badge + H1 + last-updated date
2. Amber notice box ("review with legal advisor")
3. article.legal-content wrapping the_content()
```

---

## Navigation

### Main nav (desktop + mobile drawer)
Home → `/` | Rank Tracking → `/rank-tracking/` | SEO Audit → `/seo-audit/` | Competitors → `/competitor-analysis/` | Blog → `/blog/` | Pricing → `/pricing/`

CTA buttons: **Log in** → `https://app.serpvision.com/login` | **Start a Project** → `https://app.serpvision.com/register`

### Footer links
**Product:** Keyword Rank Tracking, SEO Site Audit, Competitor Analysis, Search Console Insights, Pricing

**Resources:** Blog, Contact, About, FAQs

**Company:** Privacy Policy, Terms and Conditions, Refund Policy, Log in

> All footer links are now connected to real pages. Previously `/keyword-rank-tracking/`, `/search-console-insights/`, and `/refund-policy/` returned 404.

---

## What is still pending

| Item | Notes |
|------|-------|
| **Academy section** | Mentioned by user — not yet built. Needs URL structure decision (`/academy/`, CPT, or category) |
| **Contact form** | `/contact/` page has a static layout — no form backend yet. Recommend WPForms Lite or Contact Form 7 |
| **Admin password** | `Admin@1404` is temporary — change before going live |
| **Production SEO** | No SEO plugin yet. Recommend Yoast SEO or Rank Math for meta tags, sitemap, OG tags |
| **VPS deployment** | Not done — user does not have a VPS yet. Plan: aaPanel/CyberPanel + `mysqldump` export + file upload |
| **Footer links `/login/`** | Points to `/login/` (WP login page) — should probably point to `https://app.serpvision.com/login` |
| **Social links** | Footer X, LinkedIn, YouTube, GitHub icons have `href="#"` — need real URLs |

---

## Deployment plan (when VPS is ready)

1. **On the VPS:** install aaPanel or CyberPanel, create a site + MySQL database
2. **Export DB locally:**
   ```
   "C:/xampp/mysql/bin/mysqldump.exe" -u root wp_corp > wp_corp_backup.sql
   ```
3. **Update URLs before export** (change localhost to live domain):
   ```
   MSYS_NO_PATHCONV=1 php wp-cli.phar search-replace 'http://localhost:8080' 'https://yourdomain.com' --all-tables
   ```
4. **Upload files** via FTP/SFTP: entire `wordpress/` folder → server's public_html
5. **Import DB** on the server via phpMyAdmin or SSH:
   ```
   mysql -u dbuser -p dbname < wp_corp_backup.sql
   ```
6. **Update `wp-config.php`** on the server with new DB credentials
7. **Set file permissions:** `755` for directories, `644` for files
8. **Flush rewrite rules** via WP admin → Settings → Permalinks → Save
9. **Install SSL** via aaPanel/CyberPanel (free Let's Encrypt)

---

## File structure (theme)

```
wp-content/themes/serpvision/
├── style.css                        # WordPress theme header + utility CSS
├── functions.php                    # Theme setup, asset enqueue, helpers
├── header.php                       # Sticky nav with mobile drawer
├── footer.php                       # Footer columns + social links
├── index.php                        # Archive / search fallback
├── single.php                       # Blog single post
├── page.php                         # Generic WP page fallback
├── front-page.php                   # Homepage
├── page-rank-tracking.php           # /rank-tracking/
├── page-seo-audit.php               # /seo-audit/
├── page-competitor-analysis.php     # /competitor-analysis/
├── page-keyword-rank-tracking.php   # /keyword-rank-tracking/
├── page-search-console-insights.php # /search-console-insights/
├── page-pricing.php                 # /pricing/
├── page-about.php                   # /about/
├── page-contact.php                 # /contact/
├── page-faq.php                     # /faq/
├── page-blog.php                    # /blog/
├── page-privacy-policy.php          # /privacy-policy/
├── page-terms-and-conditions.php    # /terms-and-conditions/
├── page-refund-policy.php           # /refund-policy/
├── assets/
│   ├── css/style.css                # Main Tailwind + component styles
│   ├── js/scripts.js                # Mobile nav + FAQ accordion
│   └── images/                     # Logo SVGs, favicon
└── template-parts/
    └── headers/                     # (unused stubs)
```
