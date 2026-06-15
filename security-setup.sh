#!/bin/bash
set -e

echo "=== Starting VPS Security Setup ==="

# 1. System Update
echo "[1/7] Updating system..."
apt-get update -qq && apt-get upgrade -y -qq

# 2. Automatic Security Updates
echo "[2/7] Enabling automatic security updates..."
apt-get install -y unattended-upgrades -qq
cat > /etc/apt/apt.conf.d/20auto-upgrades <<EOF
APT::Periodic::Update-Package-Lists "1";
APT::Periodic::Unattended-Upgrade "1";
APT::Periodic::AutocleanInterval "7";
EOF

# 3. SSH Hardening
echo "[3/7] Hardening SSH..."
SSH_PORT=2277
cp /etc/ssh/sshd_config /etc/ssh/sshd_config.bak

cat > /etc/ssh/sshd_config <<EOF
Port $SSH_PORT
Protocol 2
PermitRootLogin prohibit-password
PubkeyAuthentication yes
AuthorizedKeysFile .ssh/authorized_keys
PasswordAuthentication no
PermitEmptyPasswords no
ChallengeResponseAuthentication no
UsePAM yes
X11Forwarding no
PrintMotd no
AcceptEnv LANG LC_*
Subsystem sftp /usr/lib/openssh/sftp-server
MaxAuthTries 3
ClientAliveInterval 300
ClientAliveCountMax 2
LoginGraceTime 30
EOF

# 4. Firewall (UFW)
echo "[4/7] Configuring firewall..."
ufw --force reset
ufw default deny incoming
ufw default allow outgoing
ufw allow $SSH_PORT/tcp comment 'SSH'
ufw allow 80/tcp comment 'HTTP'
ufw allow 443/tcp comment 'HTTPS'
ufw allow 8083/tcp comment 'HestiaCP'
ufw allow 21/tcp comment 'FTP'
ufw allow 3306/tcp comment 'MySQL local'
ufw --force enable

# Open new SSH port before restarting
ufw allow $SSH_PORT/tcp

# 5. Fail2ban
echo "[5/7] Configuring Fail2ban..."
apt-get install -y fail2ban -qq

cat > /etc/fail2ban/jail.local <<EOF
[DEFAULT]
bantime  = 3600
findtime = 600
maxretry = 5
destemail = rahaideaco@gmail.com
action = %(action_mwl)s

[sshd]
enabled = true
port    = $SSH_PORT
logpath = %(sshd_log)s
maxretry = 3
bantime = 86400

[wordpress]
enabled = true
port    = http,https
filter  = wordpress
logpath = /home/serpvision/web/blog.serpvision.net/logs/error.log
maxretry = 5
bantime = 3600
EOF

cat > /etc/fail2ban/filter.d/wordpress.conf <<EOF
[Definition]
failregex = ^<HOST> .* "POST /wp-login.php
            ^<HOST> .* "POST /xmlrpc.php
ignoreregex =
EOF

systemctl enable fail2ban
systemctl restart fail2ban

# 6. Disable unused services
echo "[6/7] Disabling unused services..."
systemctl disable --now avahi-daemon 2>/dev/null || true
systemctl disable --now cups 2>/dev/null || true

# 7. Kernel security hardening
echo "[7/7] Applying kernel security settings..."
cat > /etc/sysctl.d/99-security.conf <<EOF
# Prevent IP spoofing
net.ipv4.conf.all.rp_filter = 1
net.ipv4.conf.default.rp_filter = 1
# Block SYN attacks
net.ipv4.tcp_syncookies = 1
# Disable IP source routing
net.ipv4.conf.all.accept_source_route = 0
net.ipv4.conf.default.accept_source_route = 0
# Disable ICMP redirect acceptance
net.ipv4.conf.all.accept_redirects = 0
net.ipv4.conf.default.accept_redirects = 0
# Ignore broadcast pings
net.ipv4.icmp_echo_ignore_broadcasts = 1
# Log suspicious packets
net.ipv4.conf.all.log_martians = 1
EOF
sysctl -p /etc/sysctl.d/99-security.conf -q

# Restart SSH
echo "Restarting SSH on port $SSH_PORT..."
systemctl restart sshd

echo ""
echo "=== Security Setup Complete ==="
echo ""
echo "IMPORTANT: SSH port is now 2277"
echo "Connect with: ssh -p 2277 -i ~/.ssh/id_ed25519 root@38.54.12.26"
echo ""
echo "Test connection BEFORE closing this session!"
