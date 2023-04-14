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

       .fm{
           background-color: lightgoldenrodyellow;
           width: 40%;
           padding: 9px;
           border-radius: 10px;
           margin-top: 10%;
          box-shadow: 0 4px 9px 0 rgba(0, 0, 0, 1), 2px 6px 20px 0 rgba(0, 0, 0, 0.49);

       } 

    </style>
</head>
<body>
<center>
     <form method="POST" class="fm">
         <h2>employee registration</h2>
     	fullname:<br><input type="text" name="fn"><br><br>
     	 payment amount:<br><input type="text" name="pa"><br><br>
             work type:<br><input type="text" name="wt"><br><br>
               
        <button type="submit" name="SAVE">save</button><br>
     </form><br><br>



 <?php
 $con=mysqli_connect('localhost','root','','XYZ');
  if (isset($_POST['SAVE'])) {
 	$fn=$_POST['fn'];
 	$pa=$_POST['pa'];
    $wt=$_POST['wt'];

$sql="INSERT INTO employee_payroll(employee_id,fullname,payment_amount,work_type) VALUES('','$fn','$pa','$wt')";
 $query=mysqli_query($con,$sql);
 echo " the employee has been recorded!!!";
 }
 ?>    
 <button><a href="welcome.php">BACK</a></button>
</center>     
</body>
</html>