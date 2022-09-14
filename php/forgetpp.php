<!DOCTYPE html>
<html>
<head>
<title> WEBSITE WITH the MENUBAR </title>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/ptregistration.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="script.js"></script>
</head>
<body>
    <h1>
    <center><img src="../images/logo.png" width="250px;" height="80px;"></center>
    </h1>
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


<?php

require_once 'config.php';

?>

<html>
    <head>
</head>
<body>

<h1 style="text-align:center;">PASSWORD RESET FORM</h1>

    <div class="form">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter Registred Email</lable>
        <input type="email" name="email" placeholder=abc@gmail.com style="width:350px;" required>

        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter NIC</lable>
        <input type="text" name="nic" placeholder=995685475V required>
        

        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter date of birth</lable>
        <input type="date" name="dob" required>
        <br>

        <label>&nbsp;&nbsp;&nbsp;&nbsp;Blood type</lable>
        <select name=bltype>blood type
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
</select>
<br>

        <label>&nbsp; New password</lable>
        <input type="password" name="pw1" required>
        <br>

        <label>Confirm password</lable>
        <input type="password" name="pw2" required>
        <br>
        <div class="nextbut">
        <input type = "submit" value="RESET PASSWORD" name="submitt" style="margin-left:100px;">
</div>
</form>

</div>
<br>
<br>

        <?php
       

        if(isset($_POST["submitt"]))
{

            $email = $_POST['email'];
            $nic = $_POST['nic'];
            $dob = $_POST['dob'];
            $bt = $_POST['bltype'];
            $pw1 = $_POST['pw1'];


            $sql="UPDATE patient_info SET PASSWORD='$pw1' WHERE EMAIL='$email' AND  NIC='$nic' AND D_O_B='$dob' AND BLOOD_Type='$bt'";
            if($con->query($sql)){
                
                echo "<script> alert('recors updated');</script>";

            }
        
        else
        {

            echo"Your details are incorrect";

        }
        header("location:../php/patient_login.php");

        $con->close();
        
    }
    

        ?>


    

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
            <input type="button" value="sign up" id="footer-email-btn">
        </div>
        <center><h4>&copy MEDON PVT LTD. ALL RIGHTS RESERVED.</br>DEVELOPED BY MEDON </h4></center>
    </div>
    
</div>

    











</body>
</html>



