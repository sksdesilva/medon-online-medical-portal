<!DOCTYPE html>
<html>
<head>
<title> WEBSITE WITH the MENUBAR </title>
<link rel="stylesheet" href="../css/style.css">

<link rel ="stylesheet" href="../css/ptregistration.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/script.js"></script>
</head>
<body>
    
    <center><img src="../images/logo.png" width="250px;" height="80px;"></center>
<div class="menu-bar">
 

<ul> 
<li class="active"><a href="#"><i class="fa fa-home"></i> Home</a></li>
<li><a href="#" target="_blank"><i class="fa fa-address-book"></i> About Us </a></li>
<li><a href="#"><i class="fa fa-circle"></i> Services</a>
<div class="sub-menu-1">
<ul>
<li><a href="#">Doc-chenneling</a></li>
<li><a href="#">Lab report</a></li>
<li><a href="#">Ambulance service</a></li>
</ul>
</div>
</li>

<li><a href="Support Services.html"><i class="fa fa-commenting-o"></i> Help desk </a> </li>

<li><a href="#"><i class="fa fa-phone"></i> Contact</a>  </li>
</ul>
</div>
</br>
</br></br>

<div class="userdt" style="margin-left:600px;">

<?php

session_start();
require_once 'config.php';

$email = $_SESSION['User'];

$sqll = "select F_NAME,D_O_B,GENDER,P_ADDRESS,PROVINCE,CON_NUMBER,M_STATE,PASI_ILLENESS,BLOOD_TYPE,Allergy,CON_EXPLAIN,CURRET_MED,DES_OF_MED,KIDNEY_Failure,Liver_failure from patient_info where EMAIL = '$email'";
$result = $con->query($sqll);

echo '<div class="userdetails:" style="font-weight:bold; font-size:25px;">User details</div>';

if($result->num_rows>0){

    

    while($row = $result->fetch_assoc()){
            echo 'FULL NAME: '.$row['F_NAME'].'</br>';
            echo 'DATE OF BIRTH: '.$row['D_O_B'].'</br>';
            echo 'GENDER: '.$row['GENDER'].'</br>';
            echo 'PERMENENAT ADDRESS: '.$row['P_ADDRESS'].'</br>';
            echo 'PROVINCE: '.$row['PROVINCE'].'</br>';
            echo 'CON_NUMBER: '.$row['CON_NUMBER'].'</br>';
            echo 'M_STATE: '.$row['M_STATE'].'</br>';
            echo 'PAST_ILLENESS: '.$row['PASI_ILLENESS'].'</br>';
            echo 'BLOOD_TYPE: '.$row['BLOOD_TYPE'].'</br>';
            echo 'Allergy: '.$row['Allergy'].'</br>';
            echo 'CON_EXPLAIN: '.$row['CON_EXPLAIN'].'</br>';
            echo 'CURRET_MED: '.$row['CURRET_MED'].'</br>';
            echo 'DES_OF_MED: '.$row['DES_OF_MED'].'</br>';
            echo 'KIDNEY FAILURE: '.$row['KIDNEY_Failure'].'</br>';
            echo 'LIVER FAILURE: '.$row['Liver_failure'].'</br>';

}



}else {
    echo "No results <BR />"; 
    }
    
    
?>

</div>
<div class="butt">
&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<a href="../php/forgetpp.php" id="btn1">Reset Password </a> &emsp; &emsp;
<a href="../php/userdelete.php" id="btn2">Delete account</a>
</div>
<br>









<div class="footer-container">
    <div class="footer">
        <div class="footer-heading footer-1">
            <h2>About Us</h2>
            <a href ="#">Blog</a>
            <a href ="#">Privacy policy</a>
            <a href ="#">Doc-chenneling</a>
            <a href ="#">Lab Service</a>
            <a href ="#">Ambulance service</a>
        </div>
        <div class="footer-heading footer-2">
            <h2>Contact Us</h2>
            <h4>Phone numbers:</h4>
            <h4>+94(0)11 2277810</h4>
            <h4>+94(0)11 2277810</h4>
            <h4>E-mail:</h4>
            <a href="mailto:Contact@medon.lk" style="color:blue;">Contact@medon.lk</a>
        </div>
        <div class="footer-heading footer-3">
            <h2>Social media</h2>
            <a href ="#">Instragram</a>
            <a href ="#">Linkedin</a>
            <a href ="#">Youtube</a>
            <a href ="#">Twitter</a>
            <a href ="#">Facebook</a>
        </div>
        <div class="footer-email-form">
            <h2>Join our newsletter</h2>
            <input type="email" placeholder="enter your email" id="footer-email">
            <a href="#">
            <input type="button" value="sign up" id="footer-email-btn">
        </a>
        </div>
        <center><h4>&copy MEDON PVT LTD. ALL RIGHTS RESERVED.</br>DEVELOPED BY MEDON </h4></center>
    </div>
    
</div>

