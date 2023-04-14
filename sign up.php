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
           background-color: lightcyan;
           width: 50%;
           padding: 9px;
           border-radius: 10px;
           margin-top: 8%;
          box-shadow: 0 4px 9px 0 rgba(0, 0, 0, 1), 2px 6px 20px 0 rgba(0, 0, 0, 0.49);

       } 
    </style>
</head>
<body>
<center>
    <form method="post" class="fm">
        <h2>create account</h2>
    
    fullname:<br><input type="text" name="fullname" placeholder="your fullname"><br><br>
    password:<br><input type="password" name="pword1" placeholder="create password"><br><br>
    password:<br><input type="password" name="pword2" placeholder="re-enter password"><br><br>
    <button type="submit" name="SAVE">create</button><br>
    if you already have an account:<a href="login.php">login</a>
    </form>

<?php
$con=mysqli_connect('localhost','root','','xyz');
if (isset($_POST['SAVE'])) {

    $employee_id=$_POST['employee_id'];
    $fullname=$_POST['fullname'];
    $pm=$_POST['pm'];
    $wt=$_POST['wt'];
    $pw1=$_POST['pword1'];
    $pw2=$_POST['pword2'];
 
  if ($pw1!=$pw2) {
      echo "password doesn't match";
  }
  else{
    $sql="INSERT INTO attendance_list(employee_id,fullname,payment_amount,password) values('$employee_id','$fullname','$pm','wt',$pw1')";

    $query=mysqli_query($con,$sql);
   echo $fullname." your account has been created";
   header('location:login.php');
  }
}
?>

</center>
</body>
</html>