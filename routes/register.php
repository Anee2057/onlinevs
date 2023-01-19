<html>

<head>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
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
            <div>
            
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="number" name="mob" id="mob" placeholder="Mobile"  required>
            <span class="mob-error text-danger"></span>
        </div><br>
            <div>
            <input type="password" name="pass"  id=" pass" placeholder="Password" required>
            <span class="pass-error text-danger"></span>&nbsp;

            <input type="password" name="cpass" placeholder=" Confirm Password" required id="eye">
            <i class="far fa-eye" id="togglePass" style="margin-left: -30px; cursor: pointer;"></i></div><br>
            <div>
            <input type="text" id="add" name="add"  placeholder=" Address" required>
            <span class="add-error text-danger"></span>&nbsp;

            <input type="number" id="age" name="age" placeholder=" Enter age" required>
            <span class="age-error text-danger"></span></div><br>

            <div style="width:50% ;">
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
            <p class="captacha-error text-danger"></p>
            <button id="loginbtn" type="submit" name="registerbtn">Register</button><br><br>


        </form>
    </div>
    </center>

    <script>
        const togglePassword = document.querySelector('#togglePass');
        const password = document.querySelector('#eye');

        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });
    </script>
    <script>
        const togglePassword = document.querySelector('#toggle');
        const password = document.querySelector('#eyes');

        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });
    </script>


    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <!-- Login Js file -->
    <script src="../assets/js/register.js"></script>

</body>

</html>