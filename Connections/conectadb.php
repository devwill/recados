<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_conectadb = "localhost";
$database_conectadb = "mural";
$username_conectadb = "root";
$password_conectadb = "12345";
$conectadb = mysql_pconnect($hostname_conectadb, $username_conectadb, $password_conectadb) or trigger_error(mysql_error(),E_USER_ERROR); 
?>