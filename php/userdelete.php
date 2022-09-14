
<?php 


require_once 'config.php';

session_start();

$user = $_SESSION['User'];

session_destroy();

$sql = "DELETE FROM patient_info WHERE EMAIL='$user'";

if ($con->query($sql) === TRUE) {
    
    echo '<script>alert("Account has been deleted succesfully")</script>';
     

  } else {
    echo "Error deleting record: " . $conn->error;
  }

  header("location:../html/index.html");

$con->close();







?>