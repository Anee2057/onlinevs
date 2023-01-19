<?php
 session_start();
  $connect = mysqli_connect("localhost", "root", "", "online-voting-system");
    $admin_name = $_POST['admin'];
    $admin_password= $_POST['pass'];

 
    $query = "SELECT * FROM admin WHERE admin_name='$admin_name' AND admin_password='$admin_password'";
    $result = mysqli_query($connect, $query);

   /* if($admin_password!==$_POST['admin'])
    { echo '<script>
        alert("Invalid Password");
        window.location = "../api/adminlogin.php";
        </script>';}*/
    if(mysqli_num_rows($result  )>0)
    {
    echo '<script>
       alert("Welcome Admin");
       window.location = "../routes/adminboard.php";
       </script>';
    }
    else{
       echo '<script>
        alert("Invalid Credentials");
        window.location = "../routes/adminlogin.php";
        </script>';

    }
//$_SESSION['AdminLoginId'] = $_POST['AdminName'];
   

 ?>