```bash
# Install MariaDB server
dnf install mariadb1011-server

# Enable and start MariaDB service
systemctl enable --now mariadb

# Secure MariaDB installation
mysql_secure_installation
```

Example output from `mysql_secure_installation`:

```
NOTE: RUNNING ALL PARTS OF THIS SCRIPT IS RECOMMENDED FOR ALL MariaDB
    SERVERS IN PRODUCTION USE!  PLEASE READ EACH STEP CAREFULLY!

In order to log into MariaDB to secure it, we'll need the current
password for the root user. If you've just installed MariaDB, and
haven't set the root password yet, you should just press enter here.

Enter current password for root (enter for none): 
OK, successfully used password, moving on...

Setting the root password or using the unix_socket ensures that nobody
can log into the MariaDB root user without the proper authorisation.

You already have your root account protected, so you can safely answer 'n'.

Switch to unix_socket authentication [Y/n] y
Enabled successfully!
Reloading privilege tables..
 ... Success!

Change the root password? [Y/n] y     
New password: 
Re-enter new password: 
Password updated successfully!
Reloading privilege tables..
 ... Success!

By default, a MariaDB installation has an anonymous user, allowing anyone
to log into MariaDB without having to have a user account created for
them. This is intended only for testing, and to make the installation
go a bit smoother. You should remove them before moving into a
production environment.

Remove anonymous users? [Y/n] y
 ... Success!
```

### Creating container 

```
docker run -itd --name ashuc1 -p 1235:80 nginx 
Unable to find image 'nginx:latest' locally
latest: Pulling from library/nginx
59e22667830b: Pull complete 
140da4f89dcb: Pull complete 
96e47e70491e: Pull complete 
2ef442a3816e: Pull complete 
4b1e45a9989f: Pull complete 
1d9f51194194: Pull complete 
f30ffbee4c54: Pull complete 
Digest: sha256:84ec966e61a8c7846f509da7eb081c55c1d56817448728924a87ab32f12a72fb
Status: Downloaded newer image for nginx:latest
5e3b9f00b01579c560b9f9a0f4b5f54e1da31e863e3668c1439cd05740779040
[root@ip-172-31-2-143 ~]# docker ps
CONTAINER ID   IMAGE     COMMAND                  CREATED          STATUS          PORTS                                   NAMES
5e3b9f00b015   nginx     "/docker-entrypoint.…"   32 seconds ago   Up 29 seconds   0.0.0.0:1235->80/tcp, :::1235->80/tcp   ashuc1
[root@ip-172-31-2-143 ~]# 



```