<?php
session_start();
session_destroy();
echo header("location:sign up.php");
?>

