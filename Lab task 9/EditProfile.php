<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location:Login.php");
}
require_once "Controller/viewProfileController.php";
$profile = profile($_SESSION['username']);
?>


<!DOCTYPE html>
<html lang="en">

<head>


  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <title>Edit Profile</title>

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="DASHBOARD.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ViewProfile.php ">View Profile</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="EditProfile.php ">Edit Profile</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="Product.php">Product List</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="Logout.php">Logout</a>
          </li>

        </ul>
      </div>
  </nav>

  <main class="main h-100 w-100">
    <div class="container h-100">
      <div class="row">
        <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
          <div class="d-table-cell align-middle">
            <div class="text-center mt-4 pt-4">
              <h1 class="h2">Edit Profile</h1>
              <span class="text-success" id="success"></span>
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
                      <input class="form-control form-control-lg" id="name" type="text" name="name" placeholder="Enter your name" onblur="nameValidation()" onkeyup="nameValidation()" value="<?php echo $profile["name"]; ?>">
                      <span class="text-danger" id="name-error">
                      </span>
                    </div>

                    <div class="form-group">
                      <label>Email</label>
                      <input class="form-control form-control-lg" type="text" id="email" name="email" placeholder="Enter your email" onblur="emailValidation()" onkeyup="emailValidation()" value='<?php echo $profile["email"] ?>'>
                      <span class="text-danger" id="email-error">
                      </span>
                    </div>


                    <div class="form-group">
                      <label>Username</label>
                      <input class="form-control form-control-lg" id="username" name="username" type="text" disabled value='<?php echo $profile["username"] ?>'>
                      <label id="username-error" class="error validation-error small form-text invalid-feedback"></label>
                      <span class="text-danger">
                      </span>
                    </div>


                    <div class="form-row">
                      <div class="form-group">
                        <label>Gender</label>
                        <select class="form-control" id="gender" name="gender" onclick="genderValidation()">
                          <option value="">Select gender...</option>
                          <option value="male" <?php if ($profile["gender"] == 'male') {
                                                  echo 'selected';
                                                } ?>>Male</option>
                          <option value="female" <?php if ($profile["gender"] == 'female') {
                                                    echo 'selected';
                                                  } ?>>Female</option>
                          <option value="other" <?php if ($profile["gender"] == 'other') {
                                                  echo 'selected';
                                                } ?>>Other</option>
                        </select>
                        <label id="gender-error" class="error validation-error small form-text invalid-feedback"></label>
                        <span class="text-danger">
                        </span>
                      </div>

                      <div class="form-group">
                        <label>Date of Birth</label>
                        <div class="input-group date" id="datetimepicker-date" data-target-input="nearest">
                          <input type="date" class="form-control form-control-lg" name="dob" id="dob" max="<?= date('Y-m-d'); ?>" placeholder="mm/dd/yyyy" onchange="dobValidation()" onclick="dobValidation()" value='<?php echo $profile["dob"] ?>'>
                          <label id="dob-error" class="error validation-error small form-text invalid-feedback"></label>
                          <span class="text-danger">
                          </span>
                        </div>
                      </div>
                    </div>

                    <div class="col text-center">
                      <a id="submit" class="btn btn-primary">Change</a>
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
      let correctGender = genderValidation();
      let correctDob = dobValidation();

      if (correctName && correctEmail && correctGender && correctDob) {
        let name = $("#name").val();
        let email = $("#email").val();
        let gender = $("#gender").val();
        let username =$("#username").val();
        let dob = $("#dob").val();
        let value = "name=" + name + "&email=" + email + "&username=" + username + "&gender=" + gender + "&dob=" + dob;

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            document.getElementById("success").innerHTML = "updated!";
          }
        };
        xhttp.open("POST", "Controller/EditProfileController.php", true);
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