# 🧠 Problem Types in Host Infra Monitoring

Dynatrace surfaces two categories:

- **Anomaly-detected problems** via dynamic (AI-based) baselining
- **Resource events** raised by static threshold breaches

---

## 1. Anomaly-Detected Problems

Davis AI continuously learns the normal CPU, memory, disk, and network patterns for each host.  
When behavior deviates significantly—e.g., sudden CPU spikes—the system flags an anomaly automatically.

You can tune sensitivity at the Environment, Host group, or Host level under  
**Settings → Anomaly detection → Infrastructure → Hosts**.

---

## 2. Resource Events (Static Thresholds)

These are fixed rules applied to 10-second metric samples over a time window. Defaults are:

- **CPU Saturation**  
    - Linux: CPU > 95% in 18 of 30 samples (~3 minutes)
- **Memory Saturation**  
    - Linux: Memory usage > 80% **AND** page-faults > 20/s in 18 of 30 samples
- **Low Disk Space**  
    - Free space < 3% in 18 of 30 samples
- **Slow Disk I/O**  
    - Read/write latency > 200 ms in 18 of 30 samples
- **Low Inodes**  
    - Available inodes < 5% in 18 of 30 samples
- **High Network Utilization**  
    - Network usage > 90% in 18 of 30 samples

---

## ⚙️ What You See in the 'Problems' Section

Problem notifications are listed along with their type (e.g., Memory Saturated, Low Disk Space).  
Clicking any problem offers full details: affected host, timestamps, severity, impacted metrics, and insights.  
It also links to the related timeline and topology for quick investigation.

---

## 🛠️ Customizing These Alerts

To fine-tune when these problems trigger:

1. Navigate to **Settings → Anomaly detection → Infrastructure → Hosts**
2. Choose **Automatic (Davis)** or **Based on custom settings**
3. Under **Set event thresholds**, edit alert/dealert thresholds and windows (e.g., number of violating 10s samples in a sliding 300s window)
4. Individual disk thresholds can be customized under **Custom disk-detection rules**

---

## 🧩 Example: Memory Saturation

- **Default:**  
    - ≥ 80% memory usage **and** ≥ 20 page faults/s  
    - Occurring in any 18 of the last 30 samples (~5 minutes) triggers a "Memory Saturated" problem

- **Tweaking:**  
    - Edit alerting thresholds directly under host or host group settings  
    - E.g., lower memory usage trigger to 70% or shorten the window

---

## ✅ Summary Table

| Problem Type         | Metric Threshold & Window                                 |
|----------------------|----------------------------------------------------------|
| CPU Saturation       | > 95% CPU in 18/30 × 10s samples (3 min)                 |
| Memory Saturated     | > 80% used + > 20 faults/s in 18/30 samples              |
| Low Disk Space       | < 3% free in 18/30 samples                               |
| Slow Disk I/O        | > 200 ms latency in 18/30 samples                        |
| Low Inodes           | < 5% inodes in 18/30 samples                             |
| High Network Usage   | > 90% utilization in 18/30 samples                       |

> Plus, there are default Davis-based anomaly detection events on other host metrics.