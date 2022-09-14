<?php

    session_start();

    if(isset($_GET['logout']))
    {
        session_destroy();
        header("location:patient_login.php");
    }

   

   