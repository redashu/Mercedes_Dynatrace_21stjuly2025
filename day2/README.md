# Mercedes_Dynatrace_21stjuly2025



### some directory structure for oneagent 

```
59  cd /opt/dynatrace/oneagent/
   60  ls
   61  cd agent/
   62  ls
   63  ls tools/
   64  ./tools/oneagentctl --help
   65  history 
[root@ip-172-31-2-143 agent]# 
[root@ip-172-31-2-143 agent]# ls 
SELinuxPolicy                authorizedkeys  conf         dt_fips_disabled.flag  installer.version  lib64      rdp  tools
THIRDPARTYLICENSEREADME.txt  bin             datasources  initscripts            lib                libmusl64  res  uninstall.sh
[root@ip-172-31-2-143 agent]# ls tools/
data  dynatrace_ingest  lib64  oneagentctl
[root@ip-172-31-2-143 agent]# 
[root@ip-172-31-2-143 agent]# 
[root@ip-172-31-2-143 agent]# pwd
/opt/dynatrace/oneagent/agent
[root@ip-172-31-2-143 agent]# 
```

## setup postgresql in Ubuntu 24.04 

```
sudo apt update
sudo apt install wget ca-certificates
sudo apt install postgresql postgresql-contrib

service postgresql status

```