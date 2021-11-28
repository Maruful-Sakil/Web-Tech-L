<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$database = "user";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
	die("Failed to Connect: " . $conn->connect_error);
}

if(isset($_POST['Login'])){
	$name = $_POST['name'];
	$password = $_POST['password'];

	if(empty($name) or empty($password)){
		echo "Please fill up both fields";
	}
	else {
		$sql = "SELECT name, password FROM info WHERE name = '$name' and password = '$password'";

		$result = $conn->query($sql);

	if ($result->num_rows > 0){

		while($row = $result->fetch_assoc()){
			echo "Login Successfull";
			header("Location: chat-app.html");
		}

	}
	$conn->close();

	}

}


?>