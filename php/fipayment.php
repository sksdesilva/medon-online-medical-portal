<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "medon";


$conn = new mysqli ($servername,$username,$password,$db);
if($conn-> connect_error)
{
    die("connection faild" .$conn-> connect_error);
}
else
{
    
}
    
    
        $ns = $_POST['name'];
        $cc = $_POST['cn'];
        $ed = $_POST['datee'];
        $cvc = $_POST['cvc'];
        $an = $_POST['api'];
        $nb = $_POST['namebank'];
        $ac = $_POST['accountno'];
        $ad = $_POST['address'];
        
       
        

        $sql = "INSERT INTO payment (app_no,bank_name,s_name,card_no,ex_date,cvc,acc_no,addresss)
        VALUES('$an','$nb','$ns','$cc','$ed','$cvc','$ac','$ad')";

if($conn->query($sql)){
    
    echo '<br>'."Payment updated succesfully".'<br>'."YOU WILL RECEIVE CONFIRMATION EMAIL SOON".'<a href="../html/Payment Successfull.html">Click to continue</a>';
}
else{
    echo "Error:".$conn->error;
}

$conn->close();




?>