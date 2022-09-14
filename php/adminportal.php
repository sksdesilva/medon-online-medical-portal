<!DOCTYPE html>
<html>
    <head>
</head>
<body>

<?php
session_start();

if(isset($_SESSION['user'])){

require_once 'config.php';

$ss = $_SESSION['user'];
echo 'welcome '.$ss;

echo '<h1 class="topic" style="text-align:center;">'.'Registration Requests of the Medical Practioners'.'</h1>';

$sql = "SELECT d.doc_id,d.specilization,r.frequent_name 
FROM aprove_doc d , doc_reg r
WHERE d.doc_id = r.reg_no and d.ap_status = 'NO'";

$result = $con->query($sql);

if($result->num_rows > 0){

    echo ('<table border="1">');

    while($row=$result->fetch_assoc()){
        echo ('<tr>');
        echo ('<td>'.$row['doc_id'].'</td>');
        $dc = $row['doc_id'];
        echo ('<td>'.$row['frequent_name'].'</td>');
        echo ('<td>'.$row['specilization'].'</td>');
        echo ("<td> <a href='pending_doc.php?id=$row[doc_id]'> VIEW </td>");

        echo ('</tr>');
    }

    echo ('</table>');

}

}

else{
    header("location:adminlogin.php");
}


$con->close();

?>
</body>
<html>





