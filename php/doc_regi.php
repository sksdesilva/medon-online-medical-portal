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
    
    //getting values for doc_reg table
        $aaa = $_POST['aa'];
        $bbb = $_POST['bb'];
        $ccc = $_POST['name1']; 
        $ddd = $_POST['name3'];
        $eee = $_POST['ee'];
        $fff = $_POST['address'];
        $ggg = $_POST['gg'];
        
    //getting values for doc_verify table

        $NAMEINT = $_POST['name1'];
        $EMAIL = $_POST['email'];
        $CONTACT = $_POST['contact'];

    //checking checkboxes values and set no for uncheck onces.

        if(isset($_POST['MBBS'])){
        $MBBS = $_POST['MBBS'];
        }
        else{
        $MBBS = 'NO';
        }

        if(isset($_POST['MD'])){
            $MD = $_POST['MD'];
        }
        else{
        $MD = 'NO';
        }

        if(isset($_POST['MPHIL'])){
            $MPHIL = $_POST['MPHIL'];
        }
        else{
        $MPHIL = 'NO';
        }

        if(isset($_POST['OTHER'])){
            $OTHER = $_POST['OTHER'];
        }
        else{
        $OTHER = 'NO';
        }
        
        

    
        $UNI = $_POST['uni'];
        $SPECILIZATION = $_POST['ff'];
        $DEGREE_CERT = $_POST['hh'];
        $SLMC_ID = $_POST['nic'];
        $WORK_HOS = $_POST['dd'];

        //checking checkbox values for locations

        if(isset($_POST['Amc'])){
            $Amc = $_POST['Amc'];
            }
            else{
            $Amc = 'NO';
            }
    
            if(isset($_POST['Hmc'])){
                $Hmc = $_POST['Hmc'];
            }
            else{
            $Hmc = 'NO';
            }
    
            if(isset($_POST['Ovc'])){
                $Ovc = $_POST['Ovc'];
            }
            else{
            $Ovc = 'NO';
            }
    
            if(isset($_POST['Vcz'])){
                $Vcz = $_POST['Vcz'];
            }
            else{
            $Vcz = 'NO';
            }

            if(isset($_POST['Hm'])){
                $Hm = $_POST['Hm'];
            }
            else{
            $Hm = 'NO';
            }

            $fee = $_POST['fee'];


       
        

        $sql = "INSERT INTO doc_reg (dname,age,name_with_inti,frequent_name,reg_no,address,gender)
        VALUES('$aaa','$bbb','$ccc','$ddd','$eee','$fff','$ggg')";

        //$sql2 = "INSERT INTO doc_approve (doc_id,status)
        //VALUES('$eee','NO')";

        $sql2 = "INSERT INTO aprove_doc (doc_id,specilization,on_arachchi,on_hikkaduwa,voice_call,video_call,home_vist,fee,ap_status)
        VALUES('$eee','$SPECILIZATION','$Amc','$Hmc','$Ovc','$Vcz','$Hm','$fee','NO')";

        $sql4="INSERT INTO doc_verify_detail(doc_id,email,contact_num,MBBS,M_D,MPhil,Other,uni_name,specilization,degree_certi,slmc_id,working_hospital)
        VALUES('$eee','$EMAIL','$CONTACT','$MBBS','$MD','$MPHIL','$OTHER','$UNI','$SPECILIZATION','$DEGREE_CERT','$SLMC_ID','$WORK_HOS')";

if($conn->query($sql) && $conn->query($sql2) && $conn->query($sql4)){
    
    echo '<br>'."DOCTOR REGISTRATION WAS SUCESFULL".'<br>'."YOU WILL RECEIVE YOUR LOGIN CREDITIALS AFTER COMPLETE THE VERIFICATION PROCESS".'<a href="../html/index.html">Click to continue</a>';
    
}
else{
    echo "Error:".$conn->error;
}

$conn->close();




?>