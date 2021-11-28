<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
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
	<h1>Login Form</h1>
	<form action="loginaction.php" method="POST">
		<fieldset align = "center">
			<legend align = "center">Login</legend>
			name: *<input class="text" type="text" name="name">
			<br>
			Password: *<input type="password" name="password">
			<br>
		</fieldset>
		<br><br>
		<input type="submit" name="Login" value="Login" class="block">
	</form>
</body>
</html>