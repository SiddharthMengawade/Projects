<?php error_reporting (E_ALL ^ E_NOTICE); ?> 
<?php
$name=$_POST['name']; 
$lname=$_POST['lname']; 
$PRN=$_POST['PRN']; 
$DOB=$_POST['date']; 
$password=$_POST['password']; 
$email=$_POST['email'];



$conn=new mysqli('localhost','root','Pass@123','abhi');

if($conn->connect_error){
    die('Connection Filed:'.$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into college(F_Name,L_name,Prn,DOB,Email,password) values(?,?,?,?,?,?)");
    $stmt->bind_param("ssssss",$name,$lname,$PRN,$DOB,$email,$password);
    $stmt->execute();
    echo '<script> alert("") </script>';

    $stmt->close();
    $conn->close();
}








