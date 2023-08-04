<?php error_reporting (E_ALL ^ E_NOTICE); ?> 
<?php

$PRN=$_POST['PRN']; 
$password=$_POST['password']; 



$conn=mysqli_connect("localhost","root","Pass@123","abhi");

$result=mysqli_query($conn,"select*from college where PRN='$PRN' And Password='$password'");

$row=mysqli_num_rows($result);


if($row > 0)
{
  
    echo '<script> alert("Successfully login") </script>';
    
    exit();

  }
else {
    echo '<script> alert("Invalid Email and password") </script>';
}

?>