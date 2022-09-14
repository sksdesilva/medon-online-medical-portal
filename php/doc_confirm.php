

<?php

$id = $_GET['id'];

require_once 'config.php';

$sql = "UPDATE aprove_doc SET ap_status='YES' WHERE doc_id=$id";

if($con->query($sql)){

   
    
    echo "<script>
      window.location.href = 'adminportal.php';
      alert('Doctor validation was succesfull');
</script>";
    
}

$con->close();

?>

<?php

?>



?>

