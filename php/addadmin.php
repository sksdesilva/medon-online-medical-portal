<?php

require_once 'config.php';

/*add dummmy values before implementation*/

$sql = "INSERT INTO admin(user_name,password)
        VALUES ('d','k')";

$con->query($sql);

$con->close();


?>
