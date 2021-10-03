<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Form</title>
</head>
<body>
	<h1>Registration Form</h1>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
		<fieldset>
			<legend>Basic Information</legend>
			First Name: *<input type="text" name="firstname" value="<?php echo $_POST['firstname']?? ""; ?>">
			<br>

			Last Name: *<input type="text" name="lastname" value="<?php echo $_POST['lastname']?? ""; ?>">
			<br>

			Gender: *<input type="radio" name="gender" value="male">Male
			<input type="radio" name="gender" value="female">Female
			<br>

			Date of birth: *<input type="date" name="date" value="<?php echo $_POST['date']??"";?>">
			<br>

			Religion: *<select>
			<option value="muslic">Muslim</option>
			<option value="christian">Christian</option>
			<option value="hindu">Hindu</option>
			</select>
			<br>

		</fieldset>
		<fieldset>
			<legend>Contact Information</legend>
			Present Address: <input type="text" name="presentaddress">
			<br>

			Permanent Address: <input type="text" name="permanentaddress">
			<br>

			Email: *<input type="text" name="email" value="<?php echo $_POST['email']??"";?>">
			<br>

			Phone: <input type="text" name="phone">
			<br>

			Personal Website Link: <input type="url" name="website">
			<br>
			
		</fieldset>
		<fieldset>
			<legend>Account Information</legend>
			Username: *<input type="text" name="username" value="<?php echo $_POST['username']??"";?>">
			<br>
			Password: *<input type="password" name="password" value="<?php echo $_POST['password']??"";?>">
			<br>

		</fieldset>
		<br><br>
		<input type="submit" name="submit" value="Submit">
	</form>
	<?php
		if ($_SERVER['REQUEST_METHOD'] === "POST") {

			$fname = $_POST['firstname'];
			$lname = $_POST['lastname'];
			$fdate = $_POST['date'];
			$femail = $_POST['email'];
			$fusername = $_POST['username'];
			$fpassword = $_POST['password'];


			if(empty($fname) or empty($lname) or empty($fdate) or empty($femail) or empty($fusername) or empty($fpassword)) {

				echo "Please fill up all required (*) fields";
			}
			else{
			echo "First name is :" . sanitize($fname);
			echo "<br>";
			echo "<br>";
			echo "Last name is : " . sanitize($lname);
			echo "<br>";
			echo "<br>";
			echo "Gender is :" . sanitize($_POST['gender']);
			echo "<br>";
			echo "<br>";
			echo "Date of Birth :" . sanitize($fdate);
			echo "<br>";
			echo "<br>";
			echo "Present Address :" . sanitize($_POST['presentaddress']);
			echo "<br>";
			echo "<br>";
			echo "Permanent Address :" . sanitize($_POST['permanentaddress']);
			echo "<br>";
			echo "<br>";
			echo "Email :" . sanitize($_POST['email']);
			echo "<br>";
			echo "<br>";
			echo "Phone :" . sanitize($_POST['phone']);
			echo "<br>";
			echo "<br>";
			echo "Personal Website :" . sanitize($_POST['website']);
			echo "<br>";
			echo "<br>";
			echo "Username :" . sanitize($_POST['username']);
			echo "<br>";
			echo "<br>";
			}
		}

		function sanitize($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>	

</body>
</html>