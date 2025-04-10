<?php
$host = "sql210.infinityfree.com";
$user = "if0_38718061";
$pass = "BwB2ArTM8uCYYlB";
$db   = "if0_38718061_XXX";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Database connected successfully!";
}
?>
