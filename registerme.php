<?php
$username=$_GET['username'];
$password=$_GET['password'];
$designation=$_GET['designation'];
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$conc= mysqli_connect("localhost","root","" ,"erp");
$result=  mysqli_query($conc, "INSERT INTO auth (username,password,designation) VALUES ('$username','$password','$designation')");

mysqli_close($conc);
?>
