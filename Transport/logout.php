
<?php
include 'connection.php';
session_start();


unset($_SESSION['Email']);

header("location:index.html");
?>
