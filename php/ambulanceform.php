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
    echo "connection succesfully";
}
    
    
        $first_name = $_POST['first_name'];
        $second_name = $_POST['second_name'];
        $date = $_POST['date'];
        $Email = $_POST['E_mail'];
        $phone = $_POST['phone_number'];
        $addressss = $_POST['Saddress1'];
        $hospital = $_POST['dthospital'];
        $condi = $_POST['conditionnn'];
        
       
        

        $sql = "INSERT INTO amb_f_n (first_name,second_name,date_and_time,E_mail,phone_number,addresss,destination_hos,conditionn)
        VALUES('$first_name','$second_name','$date','$Email','$phone','$addressss','$hospital','$condi')";

if($conn->query($sql)){
    
    echo '<br>'."insert sucessfully".'<br>'."YOU WILL RECEIVE CONFIRMATION EMAIL SOON";
}
else{
    echo "Error:".$conn->error;
}

$conn->close();




?>

        
    
  