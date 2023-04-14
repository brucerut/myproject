<!DOCTYPE html>
<html>
<head>
	
	<title></title>
</head>
<body>
<center>	

<?php
$con=mysqli_connect('localhost','root','','xyz');
$sel="SELECT *FROM employee_payroll where employee_id = '$_GET[id]'";
$sql=mysqli_query($con,$sel);

     while ($fetch=mysqli_fetch_assoc($sql)){

?>
    <form method="post">
    <h3>update_employee</h3>
    <input type="text" name="employee_id" value="<?php echo $fetch['employee_id']?>" readonly>
    <input type="text" name="fullname" value="<?php echo $fetch['fullname']?>">
    <input type="text" name="payment_amount" value="<?php echo $fetch['payment_amount']?>">
    <input type="text" name="work_type" value="<?php echo $fetch['work_type']?>">
    <input type="date" name="date" value="<?php echo $fetch['date']?>">
    <button type="submit" name="up">update</button>
    </form>
    
<?php
}
if (isset($_POST['up'])) {

	$employee_id= $_POST['employee_id'];
	$fullname= $_POST['fullname'];
      $payment_amount= $_POST['payment_amount'];
      $work_type= $_POST['work_type'];
      $pd= $_POST['p_date'];

	$up="UPDATE employee_payroll SET fullname = '$fullname',payment_amount = '$payment_amount' WHERE employee_id = '$_GET[id]'";
	$sql=mysqli_query($con,$up);
	header("location:product lists.php");
}
?>
</center>
</body>
</html>