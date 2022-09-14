<?php

require_once 'config.php';

$fname = $_POST['fname'];
$dob = $_POST['dob'];
$rd1 = $_POST['rd1'];
$nic = $_POST['nic'];
$address = $_POST['address'];
$province = $_POST['province'];
$contact = $_POST['contact'];
$rd2 = $_POST['rd2'];
$pthistory = $_POST['pthistory'];
$bloodtype = $_POST['bloodtype'];
$emg_case1 = $_POST['emg_case1'];
$emg_case2 = $_POST['emg_case2'];
$emg_case3 = $_POST['emg_case3'];
$emg_cases = $_POST['emg_cases'];
$medicines = $_POST['medicines'];
$cumedicines = $_POST['cumedicines'];
$ptemail = $_POST['ptemail'];
$ptpassword = $_POST['ptpassword'];



$sql = "INSERT INTO patient_info (NIC,F_NAME,D_O_B,GENDER,P_ADDRESS,PROVINCE,CON_NUMBER,M_STATE,PASI_ILLENESS,BLOOD_TYPE,Allergy,Kidney_Failure,Liver_failure,CON_EXPLAIN,CURRET_MED,DES_OF_MED,EMAIL,PASSWORD)
VALUES('$nic','$fname','$dob','$rd1','$address','$province','$contact','$rd2','$pthistory','$bloodtype','$emg_case1','$emg_case2','$emg_case3','$emg_cases','$medicines','$cumedicines','$ptemail','$ptpassword')";



if($con->query($sql)){
    echo "record added succsesfully";
}
else{
    echo "Error:".$con->error;
}

$con->close();

?>