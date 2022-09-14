<?php

session_start();
require_once 'config.php';



$user = $_POST['username'];
$password = $_POST['pwd'];


$sql = "SELECT user_name,passwordd FROM admin";


$result = $con->query($sql);


if($result->num_rows>0){
    
    while($row = $result ->fetch_assoc())
    

    if($row['user_name'] == $user && $row['passwordd'] = $password){
        
        $_SESSION['user'] = $_POST['username'];
        header("location:../php/adminportal.php");

    }
    else
        echo "invalid login";
}



$con->close();
?>

