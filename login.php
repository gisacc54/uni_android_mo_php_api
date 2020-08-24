<?php
include_once 'db/db_connection.php';
$email = $_POST['email'];
$password = $_POST['password'];
$hashed_password = sha1($password);

$sql = "SELECT * FROM  users where email = '$email' and password = '$hashed_password'";

$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) == 1){
    echo "Login Successful";
}
else{
    echo "Login Fail";
}