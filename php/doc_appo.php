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
    
    
        $do = $_POST['do'];
        $ho = $_POST['ho'];
        $sp = $_POST['sp'];
        $da = $_POST['da'];
        $em = $_POST['em'];
        
       
        
       
        

        $sql = "INSERT INTO doc_app (doctor,speacilization,hospital,datee,email)
        VALUES('$do','$ho','$sp','$da','$em')";

if($conn->query($sql)){
    
    echo '<br>'."Appoinment was succesfull".'<br>'.'<a href="../html/Payment.html">Proceed to check out</a>';
}
else{
    echo "Error:".$conn->error;
}

$conn->close();




?>

        
    
  