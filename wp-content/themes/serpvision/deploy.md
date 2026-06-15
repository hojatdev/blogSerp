# SerpVision Deployment Documentation

> ⚠️ این فایل حاوی اطلاعات حساس است. مطمئن شو که ریپوزیتوری Private است.

---

## VPS Server

| مورد | مقدار |
|---|---|
| IP | `38.54.12.26` |
| OS | Ubuntu 24.04 |
| Location | Frankfurt |
| SSH Port | `2277` |
| Username | `root` |
| Password (غیرفعال) | `Netseovisitor@12` |
| Auth روش | SSH Key فقط |

**اتصال SSH:**
```powershell
ssh -p 2277 -i "C:\Users\RED LINE\.ssh\id_ed25519" root@38.54.12.26
```

**محل SSH Key:**
```
Private: C:\Users\RED LINE\.ssh\id_ed25519
Public:  C:\Users\RED LINE\.ssh\id_ed25519.pub
```

---

## HestiaCP Control Panel

| مورد | مقدار |
|---|---|
| URL | `https://38.54.12.26:8083` |
| Username | `serpvision` |
| Password | `Serp@Hestia2024` |

---

## WordPress (VPS)

| مورد | مقدار |
|---|---|
| URL | `http://blog.serpvision.net` |
| مسیر فایل‌ها | `/home/serpvision/web/blog.serpvision.net/public_html/` |
| DB Name | `serpvision_wpdb` |
| DB Username | `serpvision_wpuser` |
| DB Password | `Wp@Pass2024` |
| DB Host | `localhost` |

---

## GitHub Repository

| مورد | مقدار |
|---|---|
| Repo | `hojatdev/blogSerp` |
| Branch | `main` |
| Secrets URL | `https://github.com/hojatdev/blogSerp/settings/secrets/actions` |
| Actions URL | `https://github.com/hojatdev/blogSerp/actions` |

**GitHub Secrets تنظیم‌شده:**

| Secret | مقدار |
|---|---|
| `SSH_PRIVATE_KEY` | محتوای فایل `id_ed25519` |
| `SSH_HOST` | `38.54.12.26` |

---

## Deployment Pipeline

هر بار که کد به شاخه `main` پوش شود، GitHub Actions به صورت خودکار فایل‌های تم را از طریق SSH/rsync روی VPS آپلود می‌کند.

**فایل Workflow:** `.github/workflows/deploy.yml`

**مسیر deploy روی سرور:**
```
/home/serpvision/web/blog.serpvision.net/public_html/wp-content/themes/serpvision/
```

**برای deploy دستی (بدون تغییر کد):**
```bash
git commit --allow-empty -m "Trigger deploy" && git push origin main
```

---

## امنیت VPS

| مورد | وضعیت |
|---|---|
| SSH Port | 2277 (تغییر از 22) |
| PasswordAuthentication | غیرفعال |
| UFW Firewall | فعال |
| Fail2ban | فعال — ban بعد از 3 تلاش اشتباه |
| Auto security updates | فعال |
| Kernel hardening | فعال |

**پورت‌های باز:**
- `2277` — SSH
- `80` — HTTP
- `443` — HTTPS
- `8083` — HestiaCP

---

## Cloudflare

| مورد | مقدار |
|---|---|
| Domain | `serpvision.net` |
| Subdomain | `blog.serpvision.net` |
| A Record | `blog → 38.54.12.26` (Proxied ☁️) |

---

## WordPress لوکال (توسعه)

| مورد | مقدار |
|---|---|
| مسیر | `C:\Users\RED LINE\Desktop\wordpress` |
| محیط | XAMPP |

**مراحل توسعه:**
1. تغییرات را در لوکال ایجاد کن
2. تست کن
3. `git add` و `git commit` و `git push` بزن
4. GitHub Actions به صورت خودکار deploy می‌کند
