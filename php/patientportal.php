

<!DOCTYPE html>
<html>
<head>
<title> WEBSITE WITH the MENUBAR </title>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/ptstyle.css">
<link rel="stylesheet" href="../css/ptportal.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="script.js"></script>
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
<li><a href="">Doc-chenneling</a></li>
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


<?php







session_start();

require_once 'config.php';


if(isset($_SESSION['User']))

{
echo'<div id=oneline>'.'<a href="logout.php?logout">Logout</a>'.'<div id="user">'.'Username: '.$_SESSION['User'].'</div>'.'</div>';

}

else{

    header("location:patient_login.php");
}

$email = $_SESSION['User'];

$sql = "SELECT GENDER,BLOOD_TYPE FROM patient_info where EMAIL = '$email'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo ("<table border='1'>");
    while($row = $result->fetch_assoc()) {
    
    echo '<div class="gender">'.( 'Gender: '.$row['GENDER'].'</br>').'</div>';
    echo '<div class="bltype">'.('Blood type:'.$row['BLOOD_TYPE'] ).'</div>';

    $cookie_name = "user";
    $cookie_value = $email;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 

    
    }
    
    }else {
    echo "No results <BR />"; 
    }

    echo '<div class="bltype">'.'<a href="../php/peditpro.php">View Profile</a>'.'</div>';
    

$con->close();

?>


<br>
<br>

<div class="first_category" style="margin-left:100px;">
<div id="pat_por">
    <img src="../images/pic4.jpg" class="image">
    <div class="login"><a href="../html/ph make appoinment.html">Chennel now</a></div>
    <div class="banner1"><p>Doc-chenneling</p></div>
    
</div>
<div id="amb_ap">
    <img src="../images/pic2.jpg" class="image">
    <div class="login"><a href="../html/ph lab reports.html">Request now</a></div>
    <div class="banner1"><p>Lab reports</p></div>
</div>
<div id="lab_ap">
    <img src="../images/pic3.jpg" class="image">
    <div class="login"><a href="../html/ptreport.html">View</a></div>
    <div class="banner1"><div class="fixWidth"><p>Past medical reports</p></div></div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>





</div>

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
