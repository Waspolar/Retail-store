<?php
/*For My LocalPC*/
$host = 'localhost';
$username = 'root';
$password = '';
$dbName = 'justnormalworkingstudents';

$conn = mysqli_connect($host, $username, $password);
mysqli_select_db($conn, $dbName);

if(!$conn)
{
    echo "Connetion Error" . mysqli_connect_error();
}


