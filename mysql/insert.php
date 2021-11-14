<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$database = "registration";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
	die("Failed to Connect: " . $conn->connect_error);
}
if(isset($_POST['submit'])){
	if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['presentaddress']) && !empty($_POST['permanentaddress']) && !empty($_POST['email']) && !empty($_POST['phone'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$gender = $_POST['gender'];
		$dob = $_POST['date'];
		$preaddress = $_POST['presentaddress'];
		$permaddress = $_POST['permanentaddress'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$website = $_POST['website'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "INSERT INTO userinfo (firstname, lastname, gender, dob, presentaddress, permanentaddress, phone, email, website, username, password) VALUES ('$firstname', '$lastname', '$gender', '$dob', '$preaddress', '$permaddress', '$email', '$phone', '$website', '$username', '$password')";
		$response = $conn->query($sql);

	if ($response) {

		echo "Record Inserted Succssfully";
	}
	else {
		echo "Failed to Insert";
	}
	}
	else {
		echo "all fiels required";
	}

}

?>