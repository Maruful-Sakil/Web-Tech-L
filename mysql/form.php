<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Form</title>
</head>
<body>
	<h1>Registration Form</h1>
	<form action="insert.php" method="POST">
		<fieldset>
			<legend>Basic Information</legend>
			First Name: *<input type="text" name="firstname">
			<br>

			Last Name: *<input type="text" name="lastname">
			<br>

			Gender: *<input type="radio" name="gender" value="male">Male
			<input type="radio" name="gender" value="female">Female
			<br>

			Date of birth: *<input type="date" name="date">
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

			Email: *<input type="text" name="email">
			<br>

			Phone: <input type="text" name="phone">
			<br>

			Personal Website Link: <input type="url" name="website">
			<br>
			
		</fieldset>
		<fieldset>
			<legend>Account Information</legend>
			Username: *<input type="text" name="username">
			<br>
			Password: *<input type="password" name="password">
			<br>

		</fieldset>
		<br><br>
		<input type="submit" name="submit" value="Submit">
	</form>

</body>
</html>