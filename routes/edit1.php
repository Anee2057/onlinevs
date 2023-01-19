  <?php
 
 //include("connection.php");
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "online-voting-system";
 $connect = mysqli_connect($servername, $username, $password, $database);

 
    
    

?>
        <html>
            <head></head>
        
        <body>
         <?php
                $connect = mysqli_connect("localhost", "root", "", "online-voting-system");
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                $sql = "select *  from party where id='$id' ";
                $result = mysqli_query($connect, $sql);

                //$connect = mysqli_connect("localhost", "root", "", "online-voting-system");
                /*if (isset($_GET['edit'])) {
                    $id = $_GET['edit'];
                    $update = true;
                    $sql = "select *  from user  where id='$id'";
                    $result = mysqli_query($connect, $sql);//$connect->query($sql);*/ ?>
                <?php
                if (mysqli_num_rows($result  )>0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>     
                    <h2>User update form</h2>
            <form action="./update.php" method="post" class="login-box">
                <br>
                     
                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                    <input type="text" name="name" placeholder="Name" value="<?php echo $row['name']; ?>">&nbsp;
                   
                    <input type="number" name="mob" placeholder="Mobile"  style="width:186px;"   value="<?php echo $row['mobile'];?>"><br><br>
                 
                    <input type="password" name="pass" placeholder="change password" required value="<?php echo $row['password'];?>">&nbsp;
                   
                    <input type="password" name="cpass" placeholder="Confirm Password" required id="eye" value="<?php echo $row['password'];?>">
                    <i class="far fa-eye" id="togglePass" style="margin-left: -30px; cursor: pointer;"></i><br><br>
                    <input style="width: 50%" type="text" name="est" placeholder="Established-Date" required  value="<?php echo $row['est'];?>">&nbsp;
                    &nbsp;
                    
                  
                    <br>
                                  
                   <br>
                    <button id="loginbtn" type="submit" name="update">Update</button><br><br>
                <?php
                    }
                }
                }
                ?>
            </form>

      
          

    </body>
    </html>     
          