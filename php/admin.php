


<!DOCTYPE html>
<html>
<head>
<title> WEBSITE WITH the MENUBAR </title>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/ptstyle.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="script.js"></script>
</head>
<body>
    
    <center><img src="../images/logo.png" width="250px;" height="80px;"></center>
    
<div class="menu-bar">
 

<ul> 
<li class="active"><a href="../html/index.html"><i class="fa fa-home"></i> Home</a></li>
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

<!--begin-->

<div class="ptlogin">
    <div><img src="../images/logo.png" style="width:250px; margin-left:180px;" class="ptimage"></div>
    <h3>Admin login</h3>
    <div id="ptdetails">
        <form action="adminlogin.php" method="post">
            <input type="text box" id="userName" name="username"  placeholder="Email address">
            <br>
            <input type="password" id="password" name="pwd"  placeholder="password">
        
    </div> 

    

    <?php
         if(@$_GET['Empty']==true)
         {
     ?>
         <div class="emptyin" style="color:red; text-align:center;"><?php echo $_GET['Empty'] ?></div>                                
     <?php
         }
     ?>

<?php
         if(@$_GET['Invalid']==true)
         {
     ?>
         <div class="emptyin" style="color:red; text-align:center;"><?php echo $_GET['Invalid'] ?></div>                                
     <?php
         }
     ?>
    
    <br>
    <br>
    <br>
        <input type="submit" name="login" value="Log In" class="btn1">
    
   
</form>
<br>
</br>

<br>
  





</div>


<!--end-->

<!--footer start-->

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

