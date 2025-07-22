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

### login to psql 

```
sudo -u postgres psql

===>

postgres=# \password postgres
Enter new password for user "postgres": 
Enter it again: 
postgres=# 


==>
CREATE DATABASE dynatrace;

postgres=# \c dynatrace
You are now connected to database "dynatrace" as user "postgres".
dynatrace=# 

===>
create table employees (employee_number int8, lastname varchar, name varchar, gender varchar, city varchar, job_title varchar, department varchar, store_location varchar, division varchar, age float8, length_service float8, abset_hours float8, business_unit varchar);
CREATE TABLE
dynatrace=# 
dynatrace=# 
```
