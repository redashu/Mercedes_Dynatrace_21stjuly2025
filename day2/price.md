# Dynatrace Pricing Overview
## [click_here](https://www.dynatrace.com/pricing/)

Dynatrace uses a **consumption-based pricing model** called **Dynatrace Platform Subscription (DPS)**, where you pay for what you use. Below is a breakdown of how pricing works, including key metrics, cost factors, and comparisons with competitors.

---

## 1. Core Pricing Model: Dynatrace Platform Subscription (DPS)

- **Charges based on actual usage** (not fixed licenses).
- **Minimum annual spend commitment**; consumption tracked hourly.
- **Key Features:**
    - ✅ **Pay-as-you-go:** No upfront licensing; billed monthly based on usage.
    - ✅ **Unified platform:** Access all features (APM, infra, logs, security) under one subscription.
    - ✅ **Discount tiers:** Higher annual commitments reduce per-unit costs.

**Example:**  
Commit to $100K/year → Get a discount on hourly rates.  
Exceed the commitment? Pay standard rates for extra usage (no penalties).

---

## 2. Pricing Units & Metrics

Dynatrace measures usage in four primary units:

### A. Host Monitoring

| Unit      | Description                              | Price (USD)                |
|-----------|------------------------------------------|----------------------------|
| GiB-hour  | Monitor 1GB of host RAM for 1 hour       | $0.08/hour (8 GiB host)¹   |
| Host-hour | Monitor any host (any RAM) for 1 hour    | $0.04/hour¹                |

**Example:**  
A 16GB host running for 24 hours = 384 GiB-hours (16 × 24).  
Cost:  
- Infra Monitoring: 384 × $0.01 = **$3.84/day**  
- Full-Stack: 384 × $0.08 = **$30.72/day**

### B. Kubernetes Monitoring

| Unit     | Description           | Price (USD)      |
|----------|-----------------------|------------------|
| Pod-hour | Cost per pod (any size)| $0.002/hour¹     |

### C. Digital Experience Monitoring (DEM)

| Unit             | Description                | Price (USD)      |
|------------------|---------------------------|------------------|
| Session          | Real User Monitoring (RUM) | $0.00225/session¹|
| Synthetic request| API/website checks         | $0.001/request¹  |

### D. Logs & Metrics (Grail)

| Unit             | Description                | Price (USD)      |
|------------------|---------------------------|------------------|
| GiB ingested     | Log/event/trace volume     | $0.20/GiB¹       |
| GiB retained/day | Storage cost (10–35 days)  | $0.02/GiB/day¹   |

---

## 3. Feature-Specific Pricing

- **Full-Stack Monitoring:** $0.08/hour for an 8 GiB host¹  
    Includes: APM, distributed tracing, AI root cause (Davis), infra & Kubernetes monitoring.
- **Infrastructure Monitoring:** $0.04/hour per host (any size)¹  
    Best for cloud/on-prem hosts without deep app tracing.
- **Application Security:** $0.018/hour per 8 GiB host¹  
    Requires Full-Stack or Infra Monitoring.
- **Log Management:** $0.20/GiB (ingestion) + $0.02/GiB/day (retention)¹

---

## 4. Billing Rules

- **Rounding:** Usage rounded up to nearest 15 minutes (e.g., 1 min = 15 min billed)¹
- **Minimums:**
    - Hosts <4 GiB RAM billed as 4 GiB (Full-Stack)
    - Fractional RAM rounded to nearest 0.25 GiB³

---

## 5. Cost Optimization Tips

- **Right-Size Hosts:** Avoid over-provisioning RAM (higher GiB = higher costs)
- **Use Filters:** Exclude non-critical logs/metrics to reduce Grail costs
- **Leverage Discounts:** Commit to higher annual spend for lower rates
- **Monitor Usage:** Use the Dynatrace Account Portal to track consumption¹

---

## 6. Dynatrace vs. Competitors

| Tool        | Pricing Model                | Key Difference                   |
|-------------|-----------------------------|----------------------------------|
| Dynatrace   | Consumption-based (GiB/hour)| AI-driven, full-stack observability|
| Datadog     | Per-host + data volume      | Modular pricing (logs/metrics separate)|
| New Relic   | Per-user + data ingest      | Free tier available              |
| AppDynamics | Per-CPU/core                | Cisco-backed, on-prem options    |

---

¹ Pricing examples are for illustration only.  
³ Fractional RAM rounding details.