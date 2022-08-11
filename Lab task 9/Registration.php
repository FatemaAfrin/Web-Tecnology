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
                                    <form name="regForm" id="regForm">
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
                                            <input class="form-control form-control-lg" type="text" id="email" name="email" placeholder="Enter your email" onblur="emailValidation()" onkeyup="emailValidation()">
                                            <span class="text-danger" id="email-error">
                                            </span>
                                        </div>


                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control form-control-lg" id="username" type="text" name="username" placeholder="Enter your username" onblur="usernameValidation()" onkeyup="usernameValidation()">
                                            <label id="username-error" class="error validation-error small form-text invalid-feedback"></label>
                                            <span class="text-danger">
                                            </span>
                                        </div>


                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control form-control-lg" type="password" id="password" name="password" placeholder="Enter password" onblur="passwordValidation()" onkeyup="passwordValidation()">
                                            <label id="password-error" class="error validation-error small form-text invalid-feedback"></label>
                                            <span class="text-danger">
                                            </span>
                                        </div>

                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input class="form-control form-control-lg" type="password" id="confirm_password" name="confirm_password" placeholder="Re-type password" onblur="confirmPasswordValidation()" onkeyup="confirmPasswordValidation()">
                                            <label id="confirm_password-error" class="error validation-error small form-text invalid-feedback"></label>
                                            <span class="text-danger">
                                            </span>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <select class="form-control" id="gender" name="gender" onclick="genderValidation()">
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
                                                    <input type="date" class="form-control form-control-lg" name="dob" id="dob" max="<?= date('Y-m-d'); ?>" placeholder="mm/dd/yyyy" onchange="dobValidation()" onclick="dobValidation()">
                                                    <label id="dob-error" class="error validation-error small form-text invalid-feedback"></label>
                                                    <span class="text-danger">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col text-center">
                                            <a id="submit" class="btn btn-primary">Submit</a>
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
</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    function nameValidation() {
        let name = document.getElementById("name").value;

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

        if (email == "") {
            console.log("Email required");
            document.getElementById("email-error").innerHTML = "Email required";
            document.getElementById("email").className = "form-control form-control-lg is-invalid";
            return false;
        } else if (/^[a-zA-Z0-9.!#$%&'*+/=?^`{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-9-]+)*$/.test(email) == false) {
            document.getElementById("email-error").innerHTML = "Wrong format";
            document.getElementById("email").className = "form-control form-control-lg is-invalid";
            return false;
        } else {
            document.getElementById("email-error").innerHTML = "";
            document.getElementById("email").className = "form-control form-control-lg";
            return true;
        }
    }

    function usernameValidation() {
        let username = document.getElementById("username").value;

        if (username == "") {
            document.getElementById("username-error").innerHTML = "username required";
            document.getElementById("username").className = "form-control form-control-lg is-invalid";
            return false;
        } else if (username.match(/(\w+)/g).length > 1) {
            document.getElementById("username-error").innerHTML = "Username can contain only one word";
            document.getElementById("username").className = "form-control form-control-lg is-invalid";
            return false;
        } else {
            document.getElementById("username-error").innerHTML = "";
            document.getElementById("username").className = "form-control form-control-lg";
            return true;
        }
    }

    function passwordValidation() {
        let password = document.getElementById("password").value;
        console.log(password);

        if (password == "") {
            document.getElementById("password-error").innerHTML = "Password required";
            document.getElementById("password").className = "form-control form-control-lg is-invalid";
            return false;
        } else if (password.length < 9) {
            document.getElementById("password-error").innerHTML = "Password must contain at least 8 character.";
            document.getElementById("password").className = "form-control form-control-lg is-invalid";
            return false;
        } else if (/[#$%@]/.test(password) == false) {
            document.getElementById("password-error").innerHTML = "Password have to contain at least one '#' or '$' or '%' or '@'.";
            document.getElementById("password").className = "form-control form-control-lg is-invalid";
            return false;
        } else {
            document.getElementById("password-error").innerHTML = "";
            document.getElementById("password").className = "form-control form-control-lg";
            return true;
        }
    }

    function confirmPasswordValidation() {
        let password = document.getElementById("password").value;
        let confirm_password = document.getElementById("confirm_password").value;

        if (confirm_password == "") {
            document.getElementById("confirm_password-error").innerHTML = "Confirm password required";
            document.getElementById("confirm_password").className = "form-control form-control-lg is-invalid";
            return false;
        } else if (password != confirm_password) {
            document.getElementById("confirm_password-error").innerHTML = "Password are not matched.";
            document.getElementById("confirm_password").className = "form-control form-control-lg is-invalid";
            return false;
        } else {
            document.getElementById("confirm_password-error").innerHTML = "";
            document.getElementById("confirm_password").className = "form-control form-control-lg";
            return true;
        }
    }

    function genderValidation() {
        let gender = document.getElementById("gender").value;

        if (gender == "") {
            document.getElementById("gender-error").innerHTML = "Gender required.";
            document.getElementById("gender").className = "form-control form-control-lg is-invalid";
            return false;
        } else if (gender != "male" && gender != "female" && gender != "other") {
            document.getElementById("gender-error").innerHTML = "Gender required.";
            document.getElementById("gender").className = "form-control form-control-lg is-invalid";
            return false;
        } else {
            document.getElementById("gender-error").innerHTML = "";
            document.getElementById("gender").className = "form-control form-control-lg";
            return true;
        }
    }

    function dobValidation() {
        let dob = document.getElementById("dob").value;

        if (dob == "") {
            document.getElementById("dob-error").innerHTML = "Date of Birth required.";
            document.getElementById("dob").className = "form-control form-control-lg is-invalid";
            return false;
        } else {
            document.getElementById("dob-error").innerHTML = "";
            document.getElementById("dob").className = "form-control form-control-lg";
            return true;
        }
    }


    $(document).ready(function() {
        $("#submit").click(function() {
            let correctName = nameValidation();
            let correctEmail = emailValidation();
            let correctUsername = usernameValidation();
            let correctPassword = passwordValidation();
            let correctConfirmPassword = confirmPasswordValidation();
            let correctGender = genderValidation();
            let correctDob = dobValidation();

            if (correctName && correctEmail && correctUsername && correctPassword && correctConfirmPassword && correctGender && correctDob) {
                let name = $("#name").val();
                let email = $("#email").val();
                let username = $("#username").val();
                let password = $("#password").val();
                let gender = $("#gender").val();
                let dob = $("#dob").val();
                let value = "name=" + name +"&email=" + email + "&username=" + username + "&password=" + password + "&gender=" + gender + "&dob=" + dob;
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        alert("Seller added!");
                        window.location = 'Login.php';
                    }
                };
                xhttp.open("POST", "Controller/CheckRegistration.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send(value);
            }
        });
    });
</script>




</html>
<?php
include('footer.php');
?>