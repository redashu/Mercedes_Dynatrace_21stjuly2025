# Mercedes_Dynatrace_21stjuly2025

### setup apache httpd + php + mysql for monolith webapp

```
dnf install php php-mysqli php-json php-fpm  -y 

```


### backend language with any app/web server 

```
[root@ip-172-31-2-143 ~]# dnf install php php-mysqli php-json php-fpm  -y 
Last metadata expiration check: 1 day, 21:15:00 ago on Mon Jul 21 07:04:47 2025.
Package php8.4-8.4.8-1.amzn2023.0.1.x86_64 is already installed.
Package php8.4-mysqlnd-8.4.8-1.amzn2023.0.1.x86_64 is already installed.
Package php8.4-common-8.4.8-1.amzn2023.0.1.x86_64 is already installed.
Package php8.4-fpm-8.4.8-1.amzn2023.0.1.x86_64 is already installed.
Dependencies resolved.
Nothing to do.
Complete!
[root@ip-172-31-2-143 ~]# systemctl reload httpd 
[root@ip-172-31-2-143 ~]# systemctl restart  httpd 
[root@ip-172-31-2-143 ~]# 

```

### creating sample page to test loading 

```
 vim /var/www/html/info.php 
[root@ip-172-31-2-143 ~]# cat /var/www/html/in
index.html  info.php    
[root@ip-172-31-2-143 ~]# cat /var/www/html/info.php 
<?php

phpinfo();
?>
[root@ip-172-31-2-143 ~]# 

```

### to verify 

```
http://ipaddress/info.php

```