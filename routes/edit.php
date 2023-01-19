<?php
include '../api/connection.php';
?>

 
 <html>
    <body>
        <?php
if (isset($_GET['id'])) {
    //
    $id = $_GET['id'];
    $sql = "SELECT * FROM user WHERE id=$id";

    $result = mysqli_query($connect, $sql);?> 
<?php 
    if (mysqli_num_rows($result) > 0) //$result -> num_rows) > 0
    {
        while ($row = $result->fetch_assoc()) {
            $name = $row['name'];
            $mobile = $row['mobile'];
            $pass = $row['password'];
            $add = $row['address'];
            $age = $row['age'];
            $gender = $row['gender'];
            $img = $row['photo'];


        }?>
        
        <h2>User update form</h2>
            <form action="./updatevoter.php" method="post">
                <fieldset><h3>Registration</h3>
                   <input type = "hidden",name = "id"  value="<?php echo $id;?>">
                    <input type="text" name="name" placeholder="Name" value="<?php echo $name;?>" required>&nbsp
                   <!-- <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>-->
                    <input type="number" name="mob" placeholder="Mobile"  style="width:186px;"  required value="<?php echo $mobile;?>"><br><br>
                 <!--   <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div> -->
                    <input type="password" name="pass" placeholder="change password" required value="<?php echo $pass;?>">&nbsp
                   
                    <input type="password" name="cpass" placeholder="Confirm Password" required id="eye" value="<?php echo $pass;?>">
                    <i class="far fa-eye" id="togglePass" style="margin-left: -30px; cursor: pointer;"></i><br><br>

                    <input style="width: 95%" type="text" name="add" placeholder="Address" required value="<?php echo  $add;?>"><br><br>
                    <input type="number" name="age" placeholder="Enter age" required value="<?php echo $age;?>"><br><br>
                    <div id="upload" style="width:95% " value="<?php echo $age;?>";>
                    Select your gender:
                        <select name="gender" >
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                            <option value="O">LGBTQIA+</option>
                        </select>
                    </div><BR>
                    <!--<div id="upload" style="width: 100%">
                        Upload image: <input type="file" id="profile" name="image" required  value="<?php echo $img;?>" >
                    </div><br>
                   <div id="upload" style="width: 95%">
                        Select your role:
                        <select name="role">
                            <option value="1">Voter</option>
                            <option value="2">Group</option>
                        </select><br>  -->                 
                    </div><br>
                    <button id="loginbtn" type="submit" name="updatevoter">Update</button><br><br>
               </fieldset>
            </form>
        
        </html>
        <?php
    } else {

        header("location:admin.php");
    }

}

?>