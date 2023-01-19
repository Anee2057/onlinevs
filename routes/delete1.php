<?php 
if(isset($_GET["id"]))
{
    $id = $_GET["id"];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "online-voting-system";
    $connect = mysqli_connect($servername, $username, $password, $database);

    $sql = "DELETE FROM party WHERE id = $id";
    $connect->query($sql);
    $sql = "DELETE FROM user WHERE id = $id";
    $connect->query($sql);
    
 
}
header("location: adminboard1.php");
exit;

?>