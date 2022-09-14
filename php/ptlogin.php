<?php

session_start();

require_once 'config.php';

if(isset($_POST["login"])) {
   
    if(empty($_POST['username']) || empty($_POST['pwd'])){

            header("location:patient_login.php?Empty= Please Enter Email or Password");
    }

    else
    {
            $query = "select * from patient_info where EMAIL = '".$_POST['username']."' and PASSWORD ='".$_POST['pwd']."'"; 
            $fresult = mysqli_query($con,$query);

            if(mysqli_fetch_assoc($fresult))
            {
                $_SESSION['User']=$_POST['username'];
                header("location:patientportal.php");
            }
            else
            {

                header("location:patient_login.php?Invalid=Your Email or password is incorrect");

            }
        }

}











?>