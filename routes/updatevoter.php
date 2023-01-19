<?php
 
 //include("connection.php");
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "online-voting-system";
 $connect = mysqli_connect($servername, $username, $password, $database);
 
 if (isset($_GET['updatevoter'])) {
   $id = $_GET['id'];
   $name = $_GET['name'];
   $mobile = $_GET['mobile'];
   $add = $_GET['address'];
   $age = $_GET['age'];
   $gender = $_GET['gender'];
   
   $pass = $_GET['password'];
  // $hash = password_hash($pass,PASSWORD_DEFAULT); 
   $cpass = $_GET['cpass'];
   
 
   ///$image = $_FILES['image']['name'];
   //$tmp_name = $_FILES['image']['tmp_name'];
  
  
   mysqli_query($connect, " UPDATE user SET name='$name',mobile='$mobile',address = '$add',age = 'age',gender = $gender , password='$pass', where id=$id ");
  
   
 }
 header('location: ./admin.php');
 ?>
 