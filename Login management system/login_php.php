<?php

use PhpMyAdmin\Server\SysInfo\WindowsNt;

 error_reporting (E_ALL ^ E_NOTICE); ?> 
<?php
$PRN=$_POST['PRN'].trim(0); 
$password=$_POST['password'].trim(0); 
 
$conn=new mysqli('localhost','root','Pass@123','abhi');

if($conn->connect_error){
    die('Connection Filed:'.$conn->connect_error);
}else{
    $stmt=$conn->prepare("select*from college where email=?");
    $stmt->bind_param("s",$PRN);
    $stmt->execute();
    $stmt_result=$stmt->get_result();
     $count=mysqli_num_rows($stmt_result);
   
    if($stmt_result-> $count > 0)
    {
      $data=$stmt_result->fetch_assoc();

      if ($data['password']===$password) {
        echo '<script> alert("Successfully login");
             </script> 
        ';
        exit();
      
             
        
      }
    else {
        echo '<script> alert("Invalid Email and password") </script>';
    }

    
} 
}
?>
