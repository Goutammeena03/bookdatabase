<?php

//defining
define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','book');

$conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) OR die(mysql_error());

//database connection

$db_select =mysqli_select_db($conn,DB_NAME) OR die (mysqli_error());

//select
if(!$conn)
{
    die("<script>alert('connection failed')</script>");
}
