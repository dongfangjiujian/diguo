@ECHO OFF
echo ====Install Services====
D:\EmpireServer\php\apache2.2\bin\httpd.exe -k install -n "apache2"
D:\EmpireServer\php\mysql5\bin\mysqld-nt.exe -install
net start apache2
net start mysql
D:\EmpireServer\µ¼º½.html