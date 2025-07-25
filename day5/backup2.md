## 📋 Where to See SaaS Backups & Configuration

- Dynatrace SaaS automatically performs backups of your environment’s configuration (dashboards, alerts, event settings, etc.) daily, with rolling incremental backups every **2 hours**.
- Telemetry data retention in Grail:
  - **RUM sessions and logs**: retained for **35 days**
  - **Distributed tracing spans**: retention is configurable from **10 days to 10 years**
  - **Metrics**: 1‑minute resolution for **15 months**, with various roll‑ups beyond that

---

## 🔒 Backup Scope: What Gets Saved and Protected

### ✅ Included:
- Configuration (settings, alerts, dashboards)  
- 30+ days of telemetry (metrics, logs, RUM sessions, traces)

### ❌ Not included:
- Local config files on external components (e.g., OneAgent settings, ActiveGate configs under `/var/lib/dynatrace/gateway/config`)
- External data stores or file systems

---

## ⚙️ OneAgent & ActiveGate Configuration: Do You Back Them Up?

- No — Dynatrace SaaS **does not** automatically back up these local component configurations.
- **Yes**, you should implement your own backup strategy:
  - Export configuration files periodically from:
    - Linux: `/opt/dynatrace/oneagent`
    - Windows: `%PROGRAMDATA%\dynatrace\gateway\config`
  - Version‑control these files externally or automate via scripts
  - Maintain redeployment artifacts (installer links, scripts, extension configs)

---

## 🌐 Disaster Recovery Readiness

If your environment is compromised or misconfigured:

- To restore the *Dynatrace SaaS configuration*, contact Dynatrace support — they can recover from internal backups.
- For component recovery (ActiveGate / OneAgent):
  1. Redeploy using your backed-up configs and installers
  2. Reattach license keys if needed
  3. OneAgent auto-reports metrics upon restart
  4. ActiveGate reconnects to your tenant automatically

---

## ✅ Summary Table

| Component                                  | Backed Up by Dynatrace SaaS? | Should You Backup?            |
|-------------------------------------------|------------------------------|-------------------------------|
| Dynatrace config (alerts, dashboards, settings) | ✅ Yes                     | —                             |
| Telemetry data (RUM, logs, metrics, traces)     | ✅ Yes (35+ days retained) | —                             |
| ActiveGate config files                   | ❌ No                        | ✅ Yes – manual backup        |
| OneAgent config files                     | ❌ No                        | ✅ Yes – manual backup        |