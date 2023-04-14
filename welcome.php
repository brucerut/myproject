<!DOCTYPE html>
<html>
<head>
	
	<title></title>
	<style type="text/css">
       
       body{
        background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)), url(cons.jpg);
            padding: 0;
            margin: 0;
            font-family: sans-serif;
           
        }
         li{
        	
        	font-size: 20px;
        	display: inline-flex;
        	margin-left: 50px;
        	margin-right: 10px;
        	margin-top: 30px;
        	border-radius: 6px;


       }
       a{
        color: white;
       }

    </style>          
</head>
<body>

    <div class="nav">
   <li class="l"><a href="?link=1">home</a></li>
   <li class="l"><a href="?link=2">employees registration</a></li>
   <li class="l"><a href="?link=3">employees list</a></li>
   <li class="l"><a href="?link=4">attendance list</a></li>
   <li class="l"><a href="?link=5">search</a></li>
   <li class="l"><a href="?link=6">logout</a></li>
    </div> 
<?php
 error_reporting(0);  
  $link=$_GET['link'];
  if ($link == 1){
	require 'home.php';
}
  $link=$_GET['link'];
  if ($link == 2){
	require 'product reg.php';
}
$link=$_GET['link'];
  if ($link == 3){
	require 'product lists.php';
}
  $link=$_GET['link'];
  if ($link == 4){
	require 'user lists.php';
}
  $link=$_GET['link'];
  if ($link == 5){
	require 'search.php';
}
  $link=$_GET['link'];
  if ($link == 6){
	require 'logout.php';
}
  $link=$_GET['link'];
  if ($link == 7){
	require 'delete.php';
}
$link=$_GET['link'];
  if ($link == 8){
	require 'update.php';
}



?>		
</body>
</html>
