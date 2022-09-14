<?php

require_once 'config.php';

$doctime = $_POST['spfeild'];
$spec = $_POST['drdate'];

$sql = "SELECT * FROM doctor_info WHERE Ava_date='$spec' AND doc_spealize='$doctime' ";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo ("<table border='1'>");
    while($row = $result->fetch_assoc()) {
    
    echo '<div class="gender">'.( 'Gender: '.$row['Ava_date'].'</br>').'</div>';
    echo '<div class="bltype">'.('Blood type:'.$row['doc_spealize'] ).'</div>';
    
    }

}

    $con->close();




?>