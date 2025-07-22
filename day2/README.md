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

## changing config file 

```
sudo vim /etc/postgresql/16/main/postgresql.conf listen_addresses = '*'

sudo vim /etc/postgresql/16/main/pg_hba.conf host all all 0.0.0.0/0 md5

sudo systemctl restart postgresql

ss -nlt | grep 5432

```

### copy csv file content to table 

```
root@ip-172-31-12-29:/tmp# sudo -u postgres psql
psql (16.9 (Ubuntu 16.9-0ubuntu0.24.04.1))
Type "help" for help.

postgres=# \l
                                                   List of databases
   Name    |  Owner   | Encoding | Locale Provider | Collate |  Ctype  | ICU Locale | ICU Rules |   Access privileges   
-----------+----------+----------+-----------------+---------+---------+------------+-----------+-----------------------
 dynatrace | postgres | UTF8     | libc            | C.UTF-8 | C.UTF-8 |            |           | 
 postgres  | postgres | UTF8     | libc            | C.UTF-8 | C.UTF-8 |            |           | 
 template0 | postgres | UTF8     | libc            | C.UTF-8 | C.UTF-8 |            |           | =c/postgres          +
           |          |          |                 |         |         |            |           | postgres=CTc/postgres
 template1 | postgres | UTF8     | libc            | C.UTF-8 | C.UTF-8 |            |           | =c/postgres          +
           |          |          |                 |         |         |            |           | postgres=CTc/postgres
(4 rows)

postgres=# \c dynatrace 
You are now connected to database "dynatrace" as user "postgres".
dynatrace=# \copy employees FROM '/tmp/absenteeism.csv' DELIMITER ',' CSV;
COPY 8336
dynatrace=# 


```

### creating user 

```
dynatrace=# CREATE USER dynatrace WITH PASSWORD 'Redhat@123' INHERIT;
CREATE ROLE
dynatrace=# GRANT pg_monitor TO dynatrace; \
GRANT ROLE
invalid command \
Try \? for help.
dynatrace=# GRANT pg_monitor TO dynatrace;
NOTICE:  role "dynatrace" has already been granted membership in role "pg_monitor" by role "postgres"
GRANT ROLE
dynatrace=# ALTER USER dynatrace WITH SUPERUSER;
ALTER ROLE
dynatrace=# \q

```

### connecting postgresql from remote location 

```
psql -h 52.65.175.245   -p 5432 -d dynatrace -U dynatrace
```
