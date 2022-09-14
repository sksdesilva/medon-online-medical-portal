<?php

$servername="localhost";
$username="root";
$password="";
$databasename="medon";

$con = new mysqli($servername,$username,$password,$databasename);

if ($con->connect_error){
    die("connection failed : " . $con->connect_error);
}

?>