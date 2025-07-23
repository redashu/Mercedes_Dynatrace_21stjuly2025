# Mercedes_Dynatrace_21stjuly2025

## Setup Apache HTTPD + PHP + MySQL for Monolith Webapp

```bash
dnf install php php-mysqli php-json php-fpm -y
```

## Backend Language with Any App/Web Server

```bash
dnf install php php-mysqli php-json php-fpm -y
systemctl reload httpd
systemctl restart httpd
```

## Creating Sample Page to Test Loading

```bash
vim /var/www/html/info.php
cat /var/www/html/info.php
```

```php
<?php
phpinfo();
?>
```

## To Verify

Visit: `http://<ipaddress>/info.php`

---

## Dynatrace to K8s: Basic Things to Know

![Dynatrace Screenshot](dn1.png)

### Dynatrace to K8s

#### Worker Nodes (2)

```bash
kubectl get nodes
```

Example output:
```
NAME                                STATUS   ROLES    AGE   VERSION
aks-agentpool-17689719-vmss000000   Ready    <none>   26m   v1.32.5
aks-agentpool-17689719-vmss000001   Ready    <none>   26m   v1.32.5
```

#### Metrics Pods

```bash
kubectl get po -A | grep -i metr
```

#### Health Check

```bash
kubectl get --raw /healthz
```

---

## Dynatrace UI

[Dynatrace UI](https://hzq91798.apps.dynatrace.com/)

---

## Deploy WebUI App in K8s (Any K8s)

```bash
kubectl create ns mercedes
kubectl create deployment webui --image nginx --port 80 --replicas 2 -n mercedes
kubectl get deploy -n mercedes
kubectl expose deploy webui --type LoadBalancer --port 80 -n mercedes
kubectl get svc -n mercedes
kubectl get ep -n mercedes
kubectl get po -n mercedes
kubectl -n mercedes exec -it <pod-name> -- /bin/bash
```

Example steps inside the container:

```bash
cd /usr/share/nginx/html/
ls
echo "Hello Guys" > index.html
exit
```
