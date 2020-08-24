<?php
include_once 'db/db_connection.php';
$name = $_POST['name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$password = $_POST['password'];
$hashed_password = sha1($password);
$sql = "INSERT INTO `users`(`name`, `email`, `phone_number`, `password`) VALUES ('$name','$email','$phone_number','$hashed_password')";

$result = mysqli_query($conn,$sql);

$myJSON = json_encode(['success'=>true,'message'=>'Account created']);
header('Content-Type: application/json');
echo $myJSON;