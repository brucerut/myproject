<!DOCTYPE html>
<html>
<head>
	
	<title></title>
	<style type="text/css">
       
       body{
            padding: 0;
            margin: 0;
            font-family: cursive;
            background-color: lightcyan;
        }

       h2{
        margin-top: 8%;
        color: white;
       }
       tr{
       	color: white;
       }




    </style>
</head>
<body>
<center>	
	<h2>employee payroll information</h2>
<table border="1" width="750" height="250">
	<tr class="th">
	<th>employee id</th>
	<th>fullname</th>
	<th>payment amount</th>
	<th>work type</th>
	<th>date</th>
	<th colspan="2">action</th>
    </tr>


<?php
$con=mysqli_connect('localhost','root','','xyz');
$sel="SELECT *FROM employee_payroll";
$query=mysqli_query($con,$sel);
  while ($fetch=mysqli_fetch_assoc($query)){
    echo "<tr>";
	echo "<td>".$fetch['employee_id']."</td>";
	echo "<td>".$fetch['fullname']."</td>";
	echo "<td>".$fetch['payment_amount']."</td>";
	echo "<td>".$fetch['work_type']."</td>";
	echo "<td>".$fetch['date']."</td>";
	echo "<td><button><a href='delete.php?id=$fetch[employee_id]'>delete</a></button></td>";
  echo "<td><button><a href='update.php?id=$fetch[employee_id]'>update</a></button></td>";;
	echo "</tr>";

}
?>
<button><a href="product reg.php">BACK</a></button>
</table>
</center>
</body>
</html>