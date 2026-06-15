# راهنمای راه‌اندازی SerpVision از صفر

این راهنما تمام مراحل راه‌اندازی یک سرور WordPress با deployment خودکار از GitHub را توضیح می‌دهد.

---

## ۱. تهیه VPS

- یک VPS با Ubuntu 24.04 تهیه کن (Hetzner پیشنهاد می‌شود)
- حداقل مشخصات: 1 vCPU، 2GB RAM، 20GB Disk
- IP و پسورد root را یادداشت کن

---

## ۲. نصب HestiaCP

از طریق SSH با پسورد root وصل شو و بزن:

```bash
wget https://raw.githubusercontent.com/hestiacp/hestiacp/release/install/hst-install.sh
bash hst-install.sh --apache no --phpfpm yes --vsftpd no --proftpd yes \
  --named yes --mysql yes --exim no --dovecot no --clamav no \
  --spamassassin no --iptables yes --fail2ban yes --api yes \
  --interactive no --hostname vps.example.com \
  --email your@email.com --password YourPanelPassword
```

بعد از نصب (~۲۰ دقیقه)، پنل در `https://SERVER_IP:8083` در دسترس است.

**اگر پسورد ست نشد:**
```bash
v-list-users
v-change-user-password USERNAME NewPassword
```

---

## ۳. ساخت دامنه در HestiaCP

**پنل HestiaCP → Web → Add Web Domain:**
- دامنه مورد نظر را وارد کن (مثلاً `blog.example.com`)

**تنظیم template برای WordPress:**
```bash
v-change-web-domain-tpl USERNAME blog.example.com wordpress
systemctl reload nginx
```

---

## ۴. تنظیم Cloudflare DNS

در Cloudflare برای دامنه‌ات:
- **Add Record → A**
- Name: `blog`
- IPv4: `SERVER_IP`
- Proxy: فعال (☁️ نارنجی)

---

## ۵. نصب WordPress

**ساخت دیتابیس:**
```bash
v-add-database USERNAME dbname dbuser DbPassword
```

**دانلود WordPress:**
```bash
cd /home/USERNAME/web/blog.example.com/public_html/
wget https://wordpress.org/latest.tar.gz
tar -xzf latest.tar.gz --strip-components=1
rm latest.tar.gz
chown -R USERNAME:USERNAME .
```

**تکمیل نصب:**
- برو به `http://blog.example.com`
- Wizard را کامل کن با اطلاعات دیتابیس:
  - DB Name: `USERNAME_dbname`
  - DB User: `USERNAME_dbuser`
  - DB Password: `DbPassword`
  - DB Host: `localhost`

---

## ۶. امنیت VPS

**ساخت SSH Key روی ویندوز:**
```powershell
ssh-keygen -t ed25519 -C "server-name" -f "$env:USERPROFILE\.ssh\id_ed25519"
```

**اضافه کردن کلید به سرور:**
```bash
mkdir -p ~/.ssh && chmod 700 ~/.ssh
echo "PUBLIC_KEY_CONTENT" >> ~/.ssh/authorized_keys
chmod 600 ~/.ssh/authorized_keys
```

**تست اتصال با کلید:**
```powershell
ssh -i "C:\Users\USER\.ssh\id_ed25519" root@SERVER_IP
```

**اجرای اسکریپت امنیتی (بعد از تایید اتصال کلید):**
```bash
# اضافه کردن پورت SSH جدید به firewall HestiaCP
v-add-firewall-rule ACCEPT 0.0.0.0/0 2277 TCP SSH2277

# نصب و تنظیم UFW
apt-get install -y ufw
ufw allow 2277/tcp
ufw allow 80/tcp
ufw allow 443/tcp
ufw allow 8083/tcp
ufw --force enable

# تنظیم SSH (پورت 2277، فقط key، بدون پسورد)
cp /etc/ssh/sshd_config /etc/ssh/sshd_config.bak
sed -i 's/#Port 22/Port 2277/' /etc/ssh/sshd_config
sed -i 's/PasswordAuthentication yes/PasswordAuthentication no/' /etc/ssh/sshd_config
systemctl restart sshd

# Fail2ban
apt-get install -y fail2ban
systemctl enable fail2ban && systemctl restart fail2ban

# Kernel hardening
cat > /etc/sysctl.d/99-security.conf <<'EOF'
net.ipv4.conf.all.rp_filter = 1
net.ipv4.tcp_syncookies = 1
net.ipv4.conf.all.accept_source_route = 0
net.ipv4.conf.all.accept_redirects = 0
net.ipv4.icmp_echo_ignore_broadcasts = 1
net.ipv4.conf.all.log_martians = 1
EOF
sysctl -p /etc/sysctl.d/99-security.conf
```

> ⚠️ قبل از restart SSH، در یک پنجره جدید تست کن:
> `ssh -p 2277 -i "C:\Users\USER\.ssh\id_ed25519" root@SERVER_IP`

---

## ۷. راه‌اندازی Deployment خودکار با GitHub Actions

**اضافه کردن SSH Key به GitHub Secrets:**

`https://github.com/USERNAME/REPO/settings/secrets/actions`

| Secret | مقدار |
|---|---|
| `SSH_PRIVATE_KEY` | محتوای فایل `id_ed25519` (با `Get-Content`) |
| `SSH_HOST` | IP سرور |

**فایل `.github/workflows/deploy.yml`:**
```yaml
name: Deploy Theme via SSH

on:
  push:
    branches:
      - main

jobs:
  deploy:
    runs-on: ubuntu-latest
    steps:
      - name: Checkout code
        uses: actions/checkout@v4

      - name: Deploy theme via rsync
        env:
          SSH_PRIVATE_KEY: ${{ secrets.SSH_PRIVATE_KEY }}
          SSH_HOST: ${{ secrets.SSH_HOST }}
        run: |
          mkdir -p ~/.ssh
          echo "$SSH_PRIVATE_KEY" > ~/.ssh/id_ed25519
          chmod 600 ~/.ssh/id_ed25519
          ssh-keyscan -p 2277 -H $SSH_HOST >> ~/.ssh/known_hosts
          rsync -avz --delete \
            -e "ssh -p 2277 -i ~/.ssh/id_ed25519" \
            ./wp-content/themes/THEME_NAME/ \
            root@$SSH_HOST:/home/USERNAME/web/DOMAIN/public_html/wp-content/themes/THEME_NAME/
```

هر بار که به `main` push کنی، قالب به صورت خودکار روی سرور آپدیت می‌شود.

---

## ۸. SSL (اختیاری)

در HestiaCP → Web → کنار دامنه → SSL → Let's Encrypt را فعال کن.

---

## خلاصه مراحل

```
VPS → HestiaCP → دامنه → Cloudflare DNS → WordPress → امنیت → GitHub Actions
```
