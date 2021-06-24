<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
/*$hostname_conn = "localhost";
$database_conn = "northgate_auto";
$username_conn = "root";
$password_conn = "";
$conn = mysql_pconnect($hostname_conn, $username_conn, $password_conn) or trigger_error(mysql_error(),E_USER_ERROR); */
?>

<?php
  $host = 'localhost';
  $dbname = 'bdd_medical';
  $username = 'root';
  $password = '';  
  $dsn = "mysql:host=$host;dbname=$dbname"; 
  $pdo = new PDO($dsn, $username, $password);
?>


