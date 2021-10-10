<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Action</title>
</head>
<body>

	<h1>Registration Action</h1>

	<?php
		if($_SERVER['REQUEST_METHOD'] === 'POST'){

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

			if(empty($firstname) or empty($lastname) or empty($gender) or empty($dob) or empty($preaddress) or empty($permaddress) or empty($email) or empty($phone) or empty($phone) or empty($website) or empty($username) or empty($password)){
				echo "Please fill up all fields properly";
			}
			else{
				$firstname = validate($firstname);
				$lastname = validate($lastname);
				$gender = validate($gender);
				$dob = validate($dob);
				$preaddress = validate($preaddress);
				$permaddress = validate($permaddress);
				$email = validate($email);
				$phone = validate($phone);
				$website = validate($website);
				$username = validate($username);
				$password = validate($password);

				$handle = fopen("data.json", "a");
				$arr1 = array('firstname' => $firstname,'lastname' => $lastname,'gender' => $gender, 'date' => $dob, 'presentaddress' => $preaddress, 'permanentaddress' => $permaddress, 'email' => $email, 'phone' => $phone, 'website' => $website, 'username' => $username, 'password' => $password);
				$arr1 = json_encode($arr1);

				fwrite($handle, $arr1 . "\n");

				echo "Registration Successfull";
			}
		}

		function validate($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;

		}
	?>

</body>
</html>