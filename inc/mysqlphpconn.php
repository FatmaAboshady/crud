<?php

$servername="localhost";
$username="root";
$password="";
$db="blog";
$conn= mysqli_connect($servername,$username,$password,$db);
 if(!$conn){
     
     die(" connection failed:.mysqli_connect_error <br>");
 } 
//  echo "connected succcfully <br>";
?>