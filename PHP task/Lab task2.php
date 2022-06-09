<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Self</title>
</head>
<body>

	<?php 

		$nameErr = $emailErr =$dobErr=$genderErr= $degreeErr =$bloodgroup ="";
		$name = $email= $dob=$gender=$degree =$bloodgroup ="";
		$isValid = true;
		$isChecked = false;

		if ($_SERVER['REQUEST_METHOD'] === "POST") {
			function test($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

			$name = test($_POST['name']);
			$email = test($_POST['email']);

			$isChecked = true;
			if (empty($name)) {
				$isValid = false;
				$nameErr = " Name can not be empty";
			}
			if (empty($email)) {
				$isValid = false;
				$emailErr = "Email can not be empty";
			}
			if (empty($dob)) {
				$isValid = false;
				$dobErr = "Birthday can not be empty";
			}
			if (empty($gender)) {
				$isValid = false;
				$genderErr = "Select can not be empty";
			}
            if (empty($degree)) {
				$isValid = false;
				$degreeErr = "Select can not be empty";
			}
            if (empty($bloodgroup)) {
				$isValid = false;
				$bloodgroupErr = "Select can not be empty";
			}
		}
	?>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		<fieldset>
		
		<label for="name"> Name*:</label>
		<input type="text" name="name" id="name" size="80">
		<span><?php echo $nameErr; ?></span>

		<br><br>
		
		<label for="email">email:</label>
		<input type="text" name="email" id="email" size="80">
		<span><?php echo $emailErr; ?></span>

		<br><br>

		<label for="dob">Death of Birth*:</label>
		<input type="date" name="dob" id="dob" size="80" required>
		<br><br>
		 
		 Gender: <input type="radio" value="male" name="gender"> Male <input type="radio" value="female" name="gender" required> Female <br>

		<br>
        Degree:
        <input type="checkbox" id="degree1" name="degree1" value="">
  <label for="degree1"> SSC</label><br>
  <input type="checkbox" id="degree2" name="degree2" value="">
  <label for="degree2"> HSC</label><br>
  <input type="checkbox" id="degree3" name="degree3" value="">
  <label for="degree3"> BSc</label><br>
  <input type="checkbox" id="degree4" name="degree4" value="">
  <label for="degree4"> MSc</label><br><br>
  <label for="bloodgroup">Bloodgroup:</label>
  <select id="bloodgroup" name="bloodgroup">
    <option value="A+">A+</option>
    <option value="B+">B+</option>
    <option value="O+">O+</option>
    <option value="AB+">AB+</option>
  </select>
		</fieldset>
		<br>

		<input type="submit" name="submit" value="Submit">

	</form>

	<?php 
		if ($isChecked and $isValid) {
			echo " Name: " . $name;
			echo "<br><br>";
			echo "Email: " . $email;
			echo "<br><br>";
			echo "Date of Birth: " . $dob;
			echo "Gender: " . $gender;
		}
	?>

</body>
</html>