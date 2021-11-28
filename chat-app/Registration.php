<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Form</title>
</head>
<style>
	
.block {

    display: block;
    width: 15%;
    border: none;
    background-color: #04AA6D;
    color: white;
    padding: 28px 56px;
    font-size: 15px;
    cursor: pointer;
    text-align: center;
}
.text{
	font-family:consolas;
	color:black;
	text-align: center;

</style>
<body>
	<h1>Registration Form</h1>
	<form align = "center" action="registrationaction.php" method="POST" onsubmit="return isValid(this);">
		<fieldset>
			<legend>Account Information</legend>
			name: *<input type="text" name="name">
			<br>
			password: *<input type="password" name="password">
			<br>
			email: *<input type="text" name="email">
			<br>
		</fieldset>
		<br><br>
		<input type="submit" name="submit" value="Submit" class="block">
	</form>

	<br><br>

	<p id = "response"> </p>

	<script>
		
		function isValid(formData) {
			let x = formData;
			let name = x.name.value;
			let password = x.password.value;
			let email = x.email.value;

			if(name === "" || password === ""){
				document.getElementById("response").innerHTML = "Please fill up properly";
				return false;
			}
			return true;
		}


	</script>
</body>
</html>