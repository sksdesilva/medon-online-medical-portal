


<?php

require_once 'config.php';

$ss = $_GET['id'];

$sql = "SELECT d.doc_id,r.dname,r.name_with_inti,r.frequent_name,r.address,r.age,r.gender,
        d.email,d.contact_num,d.MBBS,d.M_D,d.MPhil,d.Other,d.uni_name,d.specilization,d.degree_certi,d.slmc_id,d.working_hospital
        FROM doc_verify_detail d , doc_reg r
        WHERE d.doc_id = r.reg_no AND d.doc_id=$ss";

$result = $con->query($sql);

if($result->num_rows > 0){
    echo '<table border = "1" class="tb">';
    while($row=$result->fetch_assoc()){
        echo '<tr><td>Full name</td><td>'.$row['dname'].'</td></tr>';
        echo '<tr><td>Full name</td><td>'. $row['doc_id'].'</td></tr>';
        echo '<tr><td>Full name</td><td>'.$row['name_with_inti'].'</td></tr>';
        echo '<tr><td>Full name</td><td>'.$row['frequent_name'].'</td></tr>';
        echo '<tr><td>Full name</td><td>'.$row['address'].'</td></tr>';
        echo '<tr><td>Full name</td><td>'.$row['age'].'</td></tr>';
        echo '<tr><td>Full name</td><td>'.$row['gender'].'</td></tr>';
        echo '<tr><td>Full name</td><td>'.$row['email'].'</td></tr>';
        echo '<tr><td>Full name</td><td>'.$row['contact_num'].'</td></tr>';
        echo '<tr><td>Full name</td><td>'.$row['MBBS'].'</td></tr>';
        echo '<tr><td>Full name</td><td>'.$row['M_D'].'</td></tr>';
        echo '<tr><td>Full name</td><td>'.$row['MPhil'].'</td></tr>';
        echo '<tr><td>Full name</td><td>'.$row['Other'].'</td></tr>';
        echo '<tr><td>Full name</td><td>'.$row['uni_name'].'</td></tr>';
        echo '<tr><td>Full name</td><td>'.$row['specilization'].'</td></tr>';
        echo '<tr><td>Full name</td><td>'.$row['degree_certi'].'</td></tr>';
        echo '<tr><td>Full name</td><td>'.$row['slmc_id'].'</td></tr>';
        echo '<tr><td>Full name</td><td>'.$row['working_hospital'].'</td></tr>';


        
        echo '</table>';

        echo "<a href='doc_confirm.php?id=$row[doc_id]'> CONFIRM REQUEST </a>";

        

    }
    
}



$con->close();

?>

