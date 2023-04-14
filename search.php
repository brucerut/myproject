<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			padding: 0;
		    margin: 0;
		}
		form{
			padding-top: 10%;
		}
		input{
			width: 19%;
			border-radius: 3px;
			border-style: 1px solid;
			background-color: lightgoldenrodyellow;
		}
		button{
			width: 10%;

		}
	</style>
</head>
<body><center>
    <form method="post" action="">
     <input type="text" name="search" placeholder="search here"><br>
     <button type="submit" name="btn">search</button>
     	
    </form>

<?php
$con=mysqli_connect("localhost","root","","xyz");
if (isset($_POST['btn'])) {
	
$search=$_POST['search'];
if (empty($search)) {
	echo "no search word detected";
}
else{
	$result=mysqli_query($con,"SELECT * FROM employee_payroll WHERE fullname LIKE '%$search%' OR work_type LIKE '%$search%' OR date LIKE '%$search%'");
  if (mysqli_num_rows($result)==0) {
  	echo "no search result corresponds to".$search;
  }	
  else{
  	 echo "<table border='1'>
  	 <tr>
  	 <th>employee_id</th><th>fullname</th><th>work_type</th><th>date</th>
  	 </tr>";
  	$x=1;
   while ($row=mysqli_fetch_assoc($result)) {

   	 echo "<tr>";
   	     echo "<td>".$x."</td>";
   	     echo "<td>".$row['fullname']."</td>";
   	     echo "<td>".$row['work_type']."</td>";
   	     echo "<td>".$row['date']."</td>";
   	 echo "</tr>";
  $x++;
    
      }
    echo "</table>";
   }

  }
}
?>
</center>
</body>
</html>