<?php
define('DB_SERVER','sqlserver189.mysql.database.azure.com');
define('DB_USER','bhrath');
define('DB_PASS' ,'Password@1');
define('DB_NAME','newsportal');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
