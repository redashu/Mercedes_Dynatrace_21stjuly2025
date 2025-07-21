# Dynatrace OneAgent Monitoring Modes: Complete Summary

This guide consolidates all monitoring modes available in Dynatrace OneAgent, including:

- **UI deployment options (simplified)**
- **Advanced configurations (CLI/Config file)**

---

## 1. Deployment Modes (Visible in Dynatrace UI)

These are the 3 primary modes selectable during UI-based installation:

| Mode           | Purpose                    | Data Collected                        | CLI Equivalent                                               |
|----------------|---------------------------|---------------------------------------|--------------------------------------------------------------|
| Full-stack     | End-to-end monitoring     | Infra + Apps + Logs + Traces          | `--set-infra-only=false --set-app-log-content-access=true`    |
| Infrastructure | Host-level metrics only   | CPU, memory, disk, network            | `--set-infra-only=true`                                      |
| Discovery      | Inventory scan only       | Process/service detection (no metrics)| `--set-infra-only=true --set-discovery-only=true`            |

---

## 2. Advanced Modes (Configured Post-Install)

These require manual configuration via `oneagent.conf` or CLI flags:

| Mode                | Purpose                                 | How to Enable                                                                 |
|---------------------|-----------------------------------------|-------------------------------------------------------------------------------|
| Network Monitoring  | Analyzes TCP/UDP traffic                | Add to `oneagent.conf`:<br>```ini<br>[network]<br>enabled = true<br>```       |
| Log Monitoring      | Captures application logs               | Install with `--set-app-log-content-access=true` or enable in UI later        |
| Passive Mode        | No code instrumentation (external calls only) | Add to `oneagent.conf`:<br>```ini<br>[feature]<br>instrumentations = off<br>``` |
| Container/Kubernetes| Auto-discovers pods, Istio, Envoy       | Deploy via Helm or DaemonSet                                                  |
| Synthetic Monitoring| Simulates user transactions             | Configure in Dynatrace UI (separate from OneAgent)                            |

---

## 3. Key Use Cases

| Mode         | Best For                          | Overhead   |
|--------------|-----------------------------------|------------|
| Full-stack   | Production apps (end-to-end visibility) | Medium     |
| Infrastructure| Databases, network devices        | Low        |
| Discovery    | Compliance audits, pre-deployment scans | Minimal    |
| Network      | Troubleshooting latency/connections| Low        |
| Passive      | Legacy apps (no code changes)      | Lowest     |
| Logs         | Debugging errors with context      | Low        |

---

## 4. How to Switch Modes After Deployment

**Edit the config file:**

```bash
sudo nano /opt/dynatrace/oneagent/agent/conf/oneagent.conf
```
Add relevant sections (e.g., `[network]` or `[feature]`).

**Restart OneAgent:**

```bash
sudo systemctl restart dynatraceoneagent
```

---

## 5. Pro Tips

- ✔ **Minimize Overhead:** Use infrastructure mode for non-critical hosts.
- ✔ **Debugging:** Enable log monitoring only when needed.
- ✔ **Kubernetes:** Always use Helm charts for fine-grained control.