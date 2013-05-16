<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 $con=mysqli_connect("localhost","root","","erp");
 
 $username=$_GET['username'];
 $password=$_GET['password'];
 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 $result=mysqli_query($con,"SELECT * FROM auth WHERE username='$username' AND password='$password'");
 $row= mysqli_num_rows($result);
 if($row===1)
 {
     
     $col=  mysqli_fetch_array($result);
     
     
     echo $col['designaion'];
if ($col['designation']=="hr")
{
    header("Location: hr.php");
}
     else if($col['designation']=="ceo")
     {
        header("Location: ceo.php");
     }
          else if($col['designation']=="emp")
     {
        header("Location: emp.php");
     }
  else {
     echo "NO AUTHORITY";    
     }
 
     
 }
 else
 {echo "login failure";}
 
mysqli_close($con);
 ?>
