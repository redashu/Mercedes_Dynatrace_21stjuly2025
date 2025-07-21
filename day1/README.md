# Mercedes_Dynatrace_21stjuly2025

### Dynatrace things to know for oneagent 

<img src="dn1.png">

## Deploy Oneagent in LInux platform 

### checking details 

### kernel details 

```
 [root@ip-172-31-2-143 ~]# uname
Linux
[root@ip-172-31-2-143 ~]# uname -r
6.1.141-165.249.amzn2023.x86_64
[root@ip-172-31-2-143 ~]# 

```

### file system 

```
df -hT   /
Filesystem     Type  Size  Used Avail Use% Mounted on
/dev/xvda1     xfs    30G  1.7G   29G   6% /
[root@ip-172-31-2-143 ~]# 

```

### after oneagent setup 

```
root@ip-172-31-2-143 ~]# cd /opt/
[root@ip-172-31-2-143 opt]# ls
aws  dynatrace
[root@ip-172-31-2-143 opt]# cd dynatrace/
[root@ip-172-31-2-143 dynatrace]# ls
oneagent
[root@ip-172-31-2-143 dynatrace]# cd oneagent/
[root@ip-172-31-2-143 oneagent]# ls
agent
[root@ip-172-31-2-143 oneagent]# cd agent/
[root@ip-172-31-2-143 agent]# ls
SELinuxPolicy                authorizedkeys  conf         dt_fips_disabled.flag  installer.version  lib64      rdp  tools
THIRDPARTYLICENSEREADME.txt  bin             datasources  initscripts            lib                libmusl64  res  uninstall.sh
[root@ip-172-31-2-143 agent]# pwd
/opt/dynatrace/oneagent/agent
[root@ip-172-31-2-143 agent]# 

```

### Oneagent location 

```
oot@ip-172-31-2-143 conf]# cd /var/log/dynatrace/
[root@ip-172-31-2-143 dynatrace]# ls
oneagent
[root@ip-172-31-2-143 dynatrace]# cd oneagent/
[root@ip-172-31-2-143 oneagent]# ls
dumpproc  extensions  installer  loganalytics  network  os  plugin  process  sdk  watchdog
[root@ip-172-31-2-143 oneagent]# 


```

