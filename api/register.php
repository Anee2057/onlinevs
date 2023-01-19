<?php
include("connection.php");

$name = $_POST['name'];
$mobile = $_POST['mob'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
$add = $_POST['add'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$image = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
//  $role = $_POST['role'];
$duplicate = mysqli_query($connect, "SELECT * FROM user WHERE mobile = $mobile");
if (mysqli_num_rows($duplicate) > 0) {
    echo "<script>
    alert('Mobile number has already taken');
    window.location = '../routes/register.php';
    </script>";
    return;
}
if ($age < 18 || $age > 110) {
    echo "<script>
    alert('You are not eligible for voting');
    window.location = '../';
    </script>";
}

if (strlen($mobile) != 10) {
    echo "<script>
    alert('The mobile number must be length of 10');
    window.location = '../';
    </script>";
} else {

    if ($cpass != $pass) {
        echo '<script>
                alert("Passwords do not match!");
                window.location = "../routes/register.php";
            </script>';
    } else {

        move_uploaded_file($tmp_name, "../uploads/$image");

        $insert = mysqli_query($connect, "INSERT INTO user (name, mobile, password, address,age,gender, photo, status, votes, role) VALUES('$name', '$mobile', '$pass', '$add', '$age','$gender','$image', 0, 0,0) ");
        if ($insert) {
            echo '<script>
                    alert("Registration successfull!");
                    window.location = "../";
                </script>';
        }
    }
}
