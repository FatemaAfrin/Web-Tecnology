<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>REGISTRATION</title>

</head>

<body class="theme-blue" data-new-gr-c-s-check-loaded="14.1072.0" data-gr-ext-installed="">

    <main class="main h-100 w-100">
        <div class="container h-100">
            <div class="row">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">
                        <div class="m-sm-4 col text-center">
                            <a class="btn btn-primary" href="Login.php">Login</a>
                            <a class="btn btn-primary" href="Registration.php">Registration</a>
                        </div>

                        <div class="text-center mt-4 pt-4">
                            <h1 class="h2">Registration From</h1>
                            <p class="lead">
                                Please fill in this form to create an account!
                            </p>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <form name="regForm" onsubmit="return validate_reg_form()" method="post" action="/e_learning_web_app/Learner/registration.php">
                                        <div class="form-group">
                                            <span class="text-success h2">
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control form-control-lg" id="name" type="text" name="name" placeholder="Enter your name" onblur="nameValidation()" onkeyup="nameValidation()">
                                            <span class="text-danger" id="name-error">
                                            </span>
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control form-control-lg" type="text" id="email" name="email" placeholder="Enter your email" onblur="validateemail()" onkeyup="validateemail()">
                                            <label id="email-error" class="error validation-error small form-text invalid-feedback"></label>
                                            <span class="text-danger">
                                            </span>
                                        </div>

                                        
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control form-control-lg" id="username" type="text" name="username" placeholder="Enter your username" onblur="validate_name()" onkeyup="validate_name()">
                                            <label id="username-error" class="error validation-error small form-text invalid-feedback"></label>
                                            <span class="text-danger">
                                            </span>
                                        </div>


                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control form-control-lg" type="password" id="password" name="password" placeholder="Enter password" onblur="validatepassword()" onkeyup="validatepassword()">
                                            <label id="password-error" class="error validation-error small form-text invalid-feedback"></label>
                                            <span class="text-danger">
                                            </span>
                                        </div>

                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input class="form-control form-control-lg" type="password" id="confirm_password" name="confirm_password" placeholder="Re-type password" onblur="validateconfirm_password()" onkeyup="validateconfirm_password()">
                                            <label id="confirm_password-error" class="error validation-error small form-text invalid-feedback"></label>
                                            <span class="text-danger">
                                            </span>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <select class="form-control" id="gender" name="gender" onclick="validategender()">
                                                    <option value="" selected="">Select gender...</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                    <option value="other">Other</option>
                                                </select>
                                                <label id="gender-error" class="error validation-error small form-text invalid-feedback"></label>
                                                <span class="text-danger">
                                                </span>
                                            </div>

                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                <div class="input-group date" id="datetimepicker-date" data-target-input="nearest">
                                                    <input type="date" class="form-control form-control-lg" name="dob" id="dob" max="2022-08-03" placeholder="mm/dd/yyyy" onchange="validatedob()" onclick="validatedob()">
                                                    <label id="dob-error" class="error validation-error small form-text invalid-feedback"></label>
                                                    <span class="text-danger">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col text-center">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <button type="reset" class="btn btn-primary">Reset</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="../js/app.js"></script>



    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1002"></defs>
        <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
        <path id="SvgjsPath1004" d="M0 0 "></path>
    </svg>
</body>

<script>
    function nameValidation() {
        let name = document.getElementById("name").value;
        console.log(name);

        if (name == "") {
            document.getElementById("name-error").innerHTML = "Name required";
            document.getElementById("name").className = "form-control form-control-lg is-invalid";
            return false;
        } else if (name.match(/(\w+)/g).length < 2) {
            document.getElementById("name-error").innerHTML = "The name must have at least two word.";
            document.getElementById("name").className = "form-control form-control-lg is-invalid";
            return false;
        } else {
            document.getElementById("name-error").innerHTML = "";
            document.getElementById("name").className = "form-control form-control-lg";
            return true;
        }
    }

    function emailValidation() {
        let email = document.getElementById("email").value;
        console.log(email);

        if (email == "") {
            document.getElementById("emailError").innerHTML = "Email required";
            return false;
        } else if (/^[a-zA-Z0-9.!#$%&'*+/=?^`{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-9-]+)*$/.test(email) == false) {
            document.getElementById("emailError").innerHTML = "Wrong format";
            return false;
        } else {
            document.getElementById("emailError").innerHTML = "";
            return true;
        }
    }

    function validate() {
        let correctName = nameValidation();
        let correctEmail = emailValidation();

        if (correctName && correctEmail) {
            console.log("true");
            return true;
        } else {
            return false;
        }

    }
</script>




</html>
<?php
include('footer.php');
?>