<!DOCTYPE html>
<html>
<head>
<title> WEBSITE WITH the MENUBAR </title>
<link rel="stylesheet" href="../css/style.css">
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

<li><a href="#"><i class="fa fa-commenting-o"></i> Reviews </a> </li>

<li><a href="#"><i class="fa fa-phone"></i> Contact</a>  </li>
</ul>
</div>
</br>
</br></br>


<form action="../php/ava_dr.php" id="find_dr" method="POST">
  
  <center>Find a Doctor</center>
    <lable>SELECT A DATE</lable>
    <input type ="date" name="drdate" id="drdate">
    <br>
    <br>

    <lable>SELECT SPECILIZATION FEILD OF THE DOCTOR</lable>
    <select name="spfeild">
    <option value= "Neurologist">Neurologist</option>
        <option value="Cardiologist">Cardiologists</option>
        <option value="Family_Physician">Family_Physician</option>
        <option value="Pediatrician">Pediatrician</option>
        <option value="Gastroenterologist">Gastroenterologist</option>
</select>

</br>

    <input type="submit" value="Find now">


</form>

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
            <input type="button" value="sign up" id="footer-email-btn">
        </div>
        <center><h4>&copy MEDON PVT LTD. ALL RIGHTS RESERVED.</br>DEVELOPED BY MEDON </h4></center>
    </div>
    
</div>

    











</body>
</html>