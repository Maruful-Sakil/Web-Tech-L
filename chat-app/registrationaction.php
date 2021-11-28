<?php 

$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];

$handle = fopen('data.txt', 'w+');
$text = "name: " . $name . " password: " . $password . " email: " . $email . "\n";
fwrite($handle, $text);

echo "Successfully saved";



?>