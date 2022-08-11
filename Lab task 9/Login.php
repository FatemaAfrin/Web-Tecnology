  <?php
  session_start();
  if (isset($_SESSION['username']) or isset($_COOKIE['username'])) {
    header("Location:Dashboard.php");
  }

  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>LOGIN</title>

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
                <h1 class="h2">Login From</h1>
                <p class="lead">
                  Please fill in this form to complete your login!
                </p>
              </div>

              <div class="card">
                <div class="card-body">
                  <div class="m-sm-4">
                    <form name="regForm" id="regForm" action="Controller/CheckLogin.php" method="post" >
                      <div class="form-group">
                        <span class="text-danger" id="error"></span>
                      </div>

                      <div class="form-group">
                        <label>Username</label>
                        <input class="form-control form-control-lg" id="username" type="text" name="username" placeholder="Enter your username" onblur="usernameValidation()" onkeyup="usernameValidation()" value="<?php if (isset($_COOKIE['username'])) {
                                                                                                                                                                                                                      echo $_COOKIE['username'];
                                                                                                                                                                                                                    } ?>">
                        <label id="username-error" class="error validation-error small form-text invalid-feedback"></label>
                        <span class="text-danger">
                        </span>
                      </div>


                      <div class="form-group">
                        <label>Password</label>
                        <input class="form-control form-control-lg" type="password" id="password" name="password" placeholder="Enter password" onblur="passwordValidation()" onkeyup="passwordValidation()" value value="<?php if (isset($_COOKIE['password'])) {
                                                                                                                                                                                                                            echo $_COOKIE['password'];
                                                                                                                                                                                                                          } ?>">
                        <label id="password-error" class="error validation-error small form-text invalid-feedback"></label>
                        <span class="text-danger">
                        </span>
                      </div>

                      <div class="custom-control custom-checkbox align-items-center">
                          <input id="remember" type="checkbox" class="custom-control-input" value="remember" name="remember" <?php if (isset($_COOKIE["username"])) { echo "checked";} ?>>
                        <label class="custom-control-label text-small" for="customControlInline">Remember me next time</label>
                      </div>

                      <div class="col text-center">
                        <button type="submit" id="" class="btn btn-primary">Login</button>
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

  <script>
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
      } else {
        document.getElementById("password-error").innerHTML = "";
        document.getElementById("password").className = "form-control form-control-lg";
        return true;
      }
    }

  </script>



  </html>
  <?php
  include('footer.php');
  if (isset($_SESSION['errormsg'])) {
    echo "<script>document.getElementById('error').innerHTML = 'Wrong input';</script>";
  }
  ?>