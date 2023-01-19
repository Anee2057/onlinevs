<?php

    session_start();
    //include("connection.php");
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "online-voting-system";
    $connect = mysqli_connect($servername, $username, $password, $database);
?>
<html>
    <head>
        <title>Party-list</title>
    </head>
    <body>
    <?php
$connect = mysqli_connect("localhost", "root", "", "online-voting-system");
$sql = "select *  from party ";
$result = $connect->query($sql); ?>
<?php
if ($result->num_rows > 0) {

  while ($row = mysqli_fetch_assoc($result)) {
?> 
   <!-- echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["mobile"] . "</td><td>" . $row["password"] . "</td><td>" . $row["address"] . "</td><td>" . $row["age"] . "</td><td>" . $row["gender"] . "</td><td>" . $row["status"] . "</td></tr>";-->
   <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['mobile']; ?></td>
    <td><?php echo $row['pass']; ?></td>
    <td><?php echo $row['est']; ?></td>
    <td><?php echo $row['votes']; ?></td>
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
</table>
</body>

</html>