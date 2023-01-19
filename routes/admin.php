<?php

    session_start();
    //include("connection.php");
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "online-voting-system";
    $connect = mysqli_connect($servername, $username, $password, $database);



?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="generator" content="Hugo 0.72.0">
  <title>Admin panel</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/style.css">
<style>
  div.header{
    display : flex;
    justify-content: space-between;
    align-items : center;
    padding : 0px, 60px;
    background-color : #204969;
   }
   body{
    margin : 0px;
   }
   div.header button{
    background-color:#f0f0f0;
    font-weight: 550;
    padding: 8px 12px;
    border: 2px solid black;
    border-radius: 5px;

   }
   table, th,td {
  border: 1px solid black;
  border-collapse: collapse;
}
tr:nth-child(even) {
  background-color: #D6EEEE;
}
th,td {
  text-align: center;
}
</style>

</head>

<body>
<div class="header">    
    <h3>Welcome to admin panel </h3>
    <form method="POST">
    <a href="logout.php" class="btn btn-block" name="logout">LogOut</a>
    </form>
   
</div>
<div>
  <h4>Voter list : </h4>
</div>
<div>
  <table border="1px" style="width: 600px; line-height: 40px;">
    <tr> 
      <!--<th colspan="7" align="centre"> <centre><h3>Voter List</h3></centre></th>-->
  </tr>
  <t>  
      <th>Id</th>
      <th>Name</th>
      <th>Mobile </th>
      <th>Password</th>
      <th>Address</th>
      <th>Age</th>
      <th>Gender</th>
      <th>Status</th>
      <th>Operation</th>
      
    </t>
  



  
</div>

<?php
$connect = mysqli_connect("localhost", "root", "", "online-voting-system");
$sql = "select *  from user ";
$result = mysqli_query($connect, $sql);//$connect->query($sql); ?>
<?php
if (mysqli_num_rows($result  )>0) {//$result->num_rows > 0

  while ($row = mysqli_fetch_assoc($result)) {
?> 
   <!-- echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["mobile"] . "</td><td>" . $row["password"] . "</td><td>" . $row["address"] . "</td><td>" . $row["age"] . "</td><td>" . $row["gender"] . "</td><td>" . $row["status"] . "</td></tr>";-->
   <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['mobile']; ?></td>
    <td><?php echo $row['password']; ?></td>
    <td><?php echo $row['address']; ?></td>
    <td><?php echo $row['age']; ?></td>
    <td><?php echo $row['gender']; ?></td>
    <td><?php echo $row['status']; ?></td>
    <td>
    <a class="btn btn-outline-success" href="edit.php?id=<?php echo $row['id'];?>">Edit</a>
     <a class="btn btn-outline-secondary" href="delete.php?id=<?php echo $row['id'];?>">Delete</a>
    </td>

   </tr>

   <?php
  }
}
  
else{
  echo "Table is empty!";
}?>
<!--$connect->close();
?> --></table>


</table>
</body>
</html>