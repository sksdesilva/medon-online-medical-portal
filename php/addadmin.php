<?php

require_once 'config.php';

$sql = "INSERT INTO admin(user_name,password)
        VALUES ('dasuni','kavidasu')";

$con->query($sql);

$con->close();


?>