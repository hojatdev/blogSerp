# SerpVision — اطلاعات دسترسی

> ⚠️ این فایل حاوی اطلاعات حساس است. ریپوزیتوری باید Private باشد.

---

## VPS Server

| مورد | مقدار |
|---|---|
| Provider | Hetzner |
| IP | `38.54.12.26` |
| OS | Ubuntu 24.04 |
| Location | Frankfurt |
| SSH Port | `2277` |
| Username | `root` |
| Auth | SSH Key (پسورد غیرفعال است) |

**اتصال با PowerShell:**
```powershell
ssh -p 2277 -i "C:\Users\RED LINE\.ssh\id_ed25519" root@38.54.12.26
```

**اتصال با Bitvise SSH Client:**
- Host: `38.54.12.26`
- Port: `2277`
- Username: `root`
- Auth: Public Key
- Key file: `C:\Users\RED LINE\.ssh\id_ed25519`

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

## WordPress

| مورد | مقدار |
|---|---|
| سایت | `http://blog.serpvision.net` |
| پنل مدیریت | `http://blog.serpvision.net/wp-admin` |
| مسیر فایل‌ها روی سرور | `/home/serpvision/web/blog.serpvision.net/public_html/` |

---

## دیتابیس WordPress

| مورد | مقدار |
|---|---|
| DB Name | `serpvision_wpdb` |
| DB Username | `serpvision_wpuser` |
| DB Password | `Wp@Pass2024` |
| DB Host | `localhost` |
| phpMyAdmin | از HestiaCP → Databases → phpMyAdmin |

---

## GitHub

| مورد | مقدار |
|---|---|
| Repository | `hojatdev/blogSerp` |
| Branch | `main` |
| Actions | `https://github.com/hojatdev/blogSerp/actions` |
| Secrets | `https://github.com/hojatdev/blogSerp/settings/secrets/actions` |

**GitHub Secrets:**

| Secret | توضیح |
|---|---|
| `SSH_PRIVATE_KEY` | محتوای فایل `id_ed25519` |
| `SSH_HOST` | `38.54.12.26` |

---

## Cloudflare

| مورد | مقدار |
|---|---|
| Domain | `serpvision.net` |
| Email | `rahaideaco@gmail.com` |
| DNS Record | `blog A 38.54.12.26` (Proxied ☁️) |

---

## توسعه لوکال

| مورد | مقدار |
|---|---|
| مسیر | `C:\Users\RED LINE\Desktop\wordpress` |
| محیط | XAMPP |
| URL لوکال | `http://localhost/wordpress` |
