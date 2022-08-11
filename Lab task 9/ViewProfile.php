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

  <title>View Profile</title>

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
              <h1 class="h2">Profile</h1>
            </div>

            <div class="card">
              <div class="card-body">
                <div class="m-sm-4">
                  <form name="regForm">
                    <div class="form-group">
                      <span class="text-success h2">
                      </span>
                    </div>
                    <div class="form-group">
                      <label>Name</label>
                      <input class="form-control form-control-lg" id="name" type="text" name="name" placeholder="Enter your name" disabled value='<?php echo $profile["name"] ?>'>
                      <span class="text-danger" id="name-error">
                      </span>
                    </div>

                    <div class="form-group">
                      <label>Email</label>
                      <input class="form-control form-control-lg" type="text" id="email" name="email" placeholder="Enter your email" disabled value='<?php echo $profile["email"] ?>'>
                      <span class="text-danger" id="email-error">
                      </span>
                    </div>


                    <div class="form-group">
                      <label>Username</label>
                      <input class="form-control form-control-lg" id="username" type="text" name="username" placeholder="Enter your username" disabled value='<?php echo $profile["username"] ?>'>
                      <label id="username-error" class="error validation-error small form-text invalid-feedback"></label>
                      <span class="text-danger">
                      </span>
                    </div>

                    <div class="form-group">
                      <label>Gender</label>
                      <input class="form-control form-control-lg" id="username" type="text" name="username" disabled value='<?php echo $profile["gender"] ?>'>
                      <label id="username-error" class="error validation-error small form-text invalid-feedback"></label>
                      <span class="text-danger">
                      </span>
                    </div>

                    <div class="form-group">
                      <label>Date of Birth</label>
                      <input class="form-control form-control-lg" id="username" type="text" name="username" disabled value='<?php echo $profile["dob"] ?>'>
                      <label id="username-error" class="error validation-error small form-text invalid-feedback"></label>
                      <span class="text-danger">
                      </span>
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


</html>
<?php
include('footer.php');
?>