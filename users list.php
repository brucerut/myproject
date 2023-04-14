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
        margin-top: 5%;
       }




    </style>
</head>
<body>
<center>    
    <h2>ADMIN</h2>
<table border="2" width="750" height="150">
    <tr>
    <th>employee_id</th>
    <th>fullname</th>
    <th>work_type </th>
    </tr>


<?php
$con=mysqli_connect('localhost','root','','xyz');
$sel="SELECT *FROM attendance_list";
$query=mysqli_query($con,$sel);
  while ($fetch=mysqli_fetch_assoc($query)){
    echo "<tr>";
    echo "<td>".$fetch['employee_id']."</td>";
    echo "<td>".$fetch['fullname']."</td>";
    echo "<td>".$fetch['work_type']."</td>";
    echo "</tr>";
    
}
?>
</table>
</center>
</body>
</html>