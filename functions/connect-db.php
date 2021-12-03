<?php

$dbhost = "149.28.128.174";
$dbuser = "root";
$dbpass = "DayLaMatKhau";
$dbname = "ie105";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
