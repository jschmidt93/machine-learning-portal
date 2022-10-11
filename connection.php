<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "MLPortal";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){

    die("Failed Connection");
}