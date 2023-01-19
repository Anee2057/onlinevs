<?php
 
 //include("connection.php");
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "online-voting-system";
 $connect = mysqli_connect($servername, $username, $password, $database);
 /*
 if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($connect, "SELECT * FROM user WHERE id=$id");

		if (count($record) == 1 ) {
			$row = mysqli_fetch_array($record);
			$name = $row['name'];
            $mobile = $row['mob'];
            $cnum= $row['cnum'];
            $pass = $row['pass'];
            $hash = password_hash($pass,PASSWORD_DEFAULT); 
            $cpass = $row['cpass'];
            $add = $row['add'];
            $age = $row['age'];
            $gender = $row['gender'];
            $image = $_FILES['image']['name'];
            $tmp_name = $_FILES['image']['tmp_name'];
            mysqli_query($connect, "UPDATE user SET name='$name',mobile='$mobile' ,citizenship_number='$cnum' ,password='$hash',address='$add' ,age='$age', gender='$gender', photo='$image'where id=$id ");
		
		}
	}
  header('location: ./user_details.php');*/
  if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $mobile = $_POST['mob'];
    
    $pass = $_POST['pass'];
   // $hash = password_hash($pass,PASSWORD_DEFAULT); 
    $cpass = $_POST['cpass'];
    $est=$_POST['est'];
  
    ///$image = $_FILES['image']['name'];
    //$tmp_name = $_FILES['image']['tmp_name'];
   
   
    mysqli_query($connect, " UPDATE party SET name='$name',mobile='$mobile'  , pass='$pass',est='$est' where id= $id ");
   
    
  }
  header('location: ./adminboard1.php');
  ?>
  