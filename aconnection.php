<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "987456321";
$dbname = "project";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
