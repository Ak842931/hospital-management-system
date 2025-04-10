<?php
define('DB_SERVER','bn8e5523ah4x7rwqatic-mysql.services.clever-cloud.com');
define('DB_USER','ujnkiwi7gdjhfwtd');
define('DB_PASS' ,'XjdZPyV0c6alWWEe4MA6');
define('DB_NAME', 'bn8e5523ah4x7rwqatic');

$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
