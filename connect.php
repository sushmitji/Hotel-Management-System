<?php

$user_name = "root";
$password = "";
$database = "hotelogix";
$host_name = "localhost"; 

$mysqli = new mysqli ($host_name, $user_name, $password, $database);
if ($mysqli->connect_error) 
{
    die("Connection failed: " .$mysqli->connect_error);
} 

?>