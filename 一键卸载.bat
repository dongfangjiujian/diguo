@ECHO OFF
echo ====Uninstall Services====
net stop mysql
net stop apache2
D:\EmpireServer\php\mysql5\bin\mysqld-nt.exe -remove
D:\EmpireServer\php\apache2.2\bin\httpd.exe -k uninstall -n "apache2"