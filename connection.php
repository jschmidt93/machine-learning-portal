<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "portal_user_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){

    die("Failed Connection");
}