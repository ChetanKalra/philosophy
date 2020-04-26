<?php

$host = 'localhost';
$username = 'root';
$password = '';
$db = 'philosophy';

$con = new mysqli($host, $username, $password, $db);

if($con->connect_error) 
{
    die("Error in DB Connection");
}