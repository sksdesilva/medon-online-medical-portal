<?php

require 'config.php';


$fname = $_POST['fname'];
$nic = $_POST['nic'];
$address = $_POST['address'];
$province = $_POST['province'];

$sql = "INSERT INTO test(a,b,c,d)
        VALUES('$fname','$nic','$address','$province')";

if ($con -> query($sql)){
    echo "insert succesfully";
}

else
    echo "error".$con->error;


$con->close();

?>