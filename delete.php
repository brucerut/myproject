<?php
$con=mysqli_connect('localhost','root','','xyz');
$del="DELETE FROM employee_payroll WHERE employee_id = '$_GET[id]'";
$sql= mysqli_query($con,$del);
header('location:product lists.php');
?>