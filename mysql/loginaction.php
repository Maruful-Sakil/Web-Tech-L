<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$database = "registration";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
	die("Failed to Connect: " . $conn->connect_error);
}

if(isset($_POST['Login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(empty($username) or empty($password)){
		echo "Please fill up both fields";
	}
	else {
		$sql = "SELECT username, password FROM userinfo WHERE username = '$username' and password = '$password'";

		$result = $conn->query($sql);

	if ($result->num_rows > 0){

		while($row = $result->fetch_assoc()){
			echo "Login Successfull";
		}

	}
	$conn->close();

	}

}


?>