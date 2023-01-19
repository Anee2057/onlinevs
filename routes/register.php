<html>

<head>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Online voting system - Registratrion</title>
    <marquee direction="right" style="background-color:  #3498db;">Please Vote The Right Candidate....Please Vote The Right Candidate....Please Vote The Right Candidate....Please Vote The Right Candidate....Please Vote The Right Candidate....</marquee>
    <link rel="stylesheet" href="../css/stylesheet.css">
    <link rel="stylesheet" href="../css/style.css">



</head>

<script src='https://www.google.com/recaptcha/api.js'></script>
<div style="display: flex; justify-content: space-between;flex-direction:row-reverse;">
    <div>Already user?<a href="../" class="style">Login here</a></div>
</div>

<body>
    <center>
        <div class="login-box1">
            <form action="../api/register.php" class="was-validated" id="form2" method="POST" enctype="multipart/form-data" style="margin-top:30px;">
                <h3>Registration</h3>
                <!-- <div>

                    <input type="text" name="name" placeholder="Full Name" required>
                    <span class="mob-error text-danger d-inline-block"></span>
                    <input type="number" name="mob" id="mob" placeholder="Mobile" required>
                    <span class="mob-error text-danger d-inline-block"></span>
                </div><br>
                <div>
                    <input type="password" name="pass" id="pass" placeholder="Password" required>
                    <span class="pass-error text-danger d-inline-block"></span>&nbsp;

                    <input type="password" name="cpass" placeholder="Confirm Password" required id="eye">
                    <i class="far fa-eye" id="togglePass d-block" style="margin-left: -30px; cursor: pointer;"></i>
                </div><br>
                <div>
                    <input type="text" id="add" name="add" placeholder=" Address" required>
                    <span class="add-error text-danger d-block"></span>&nbsp;

                    <input type="number" id="age" name="age" placeholder=" Enter age" required>
                    <span class="age-error text-danger d-block"></span>
                </div><br> -->

                <div class="form row w-50 justify-content-center">
                    <div class="col-md-6 py-1 px-0">
                        <input type="text" name="name" placeholder="Full Name" required>
                    </div>
                    <div class="col-md-6 py-1 px-0">
                        <input type="number" name="mob" id="mob" placeholder="Mobile" required>
                        <span class="mob-error text-danger d-inline-block"></span>
                    </div>
                    <div class="col-md-6 py-1 px-0">
                        <input type="password" name="pass" id="pass" placeholder="Password" required>
                        <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
                        <span class="pass-error text-danger d-inline-block"></span>

                    </div>
                    <div class="col-md-6 py-1 px-0">
                        <input type="password" name="cpass" id="cpass" placeholder="Confirm Password" required>
                        <i class="far fa-eye" id="ctogglePassword" style="margin-left: -30px; cursor: pointer;"></i>
                    </div>
                    <div class="col-md-6 py-1 px-0">
                        <input type="text" id="add" name="add" placeholder=" Address" required>
                        <span class="add-error text-danger d-inline-block"></span>
                    </div>
                    <div class="col-md-6 py-1 px-0">
                        <input type="number" id="age" name="age" placeholder="Enter age" required>
                        <span class="age-error text-danger d-inline-block"></span>
                    </div>
                </div>

                <div style="width:50% ;" class="pt-2">
                    Select your gender:
                    <select style="width:80;" name="gender" id="gender">
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                        <option value="O">LGBTQIA+</option>
                    </select>
                </div><br>
                <div style="width: 100%">
                    Upload image:<br> <input type="file" id="upload" name="image" required>
                </div><br>


                <div class="g-recaptcha" data-sitekey="6LflOtYjAAAAAA5h9Q4b0uxir84QAUkk45w1uQBA"></div>
                <p class="captacha-error text-dange d-block"></p>
                <button id="loginbtn" type="submit" name="registerbtn">Register</button><br><br>


            </form>
        </div>
    </center>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <!-- Login Js file -->
    <script src="../assets/js/register.js"></script>

</body>

</html>