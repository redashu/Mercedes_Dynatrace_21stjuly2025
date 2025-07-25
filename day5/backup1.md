# 🗃️ Dynatrace Managed Backup & Restore (Self-Hosted / On-Prem)

Dynatrace Managed provides cluster-level backup and restore functionality via the UI (Settings → Backup). This supports full restore scenarios, including IP reconfiguration and node syncing, especially critical when restoring to new VMs or IP addresses.

## 🔁 Backup & Restore Highlights

### Backup Access:
- UI or CLI-based scheduling

### Restore Scenarios:
- **Node/VM Loss**: Rebuild VM and restore cluster
- **IP Changes** (e.g., post-snapshot): Restore process adapts to new IPs

⚠️ **Important Note**: Restoring solely from VM snapshots is not recommended due to clustering and IP consistency issues

## 🛠️ DR Preparedness Strategy

1. **Understand Backup Mechanisms**
   - **SaaS**: Automated full daily + 2-hour incremental backups
   - **Managed**: Backup scheduling via UI/CLI, external storage required

2. **Leverage Backup Tools**
   - Dynatrace CLI and UI for Managed
   - Optional: Integrate tools like Composer for configuration versioning

3. **Simulate and Test DR Events**
   - Regularly test node failure and full cluster restore
   - For SaaS: export and re-import configuration-as-code

4. **Version Control for Configurations**
   - Use Config API or Composer to manage dashboards, alerts, and templates

5. **Document & Define Recovery Roles**
   - Clarify responsibilities: internal team vs Dynatrace Support
   - Maintain escalation protocols and runbooks

## 📊 SaaS vs Managed – DR Capability Comparison

| Feature                | Dynatrace SaaS                          | Dynatrace Managed                          |
|------------------------|----------------------------------------|-------------------------------------------|
| Config Backup          | Automated daily + incremental          | UI/CLI-based scheduling, stored externally |
| Data Backup            | Retention up to 30 days                | Full snapshots + config backups           |
| Tools                  | Config API, Composer                   | CLI, REST API, Terraform, snapshot tools  |
| DR Complexity          | Low (managed by Dynatrace)             | Medium–High (requires internal backup/restore process) |
| RPO / RTO              | ~24 hrs / ~24 hrs                     | Variable – based on snapshot and recovery process |