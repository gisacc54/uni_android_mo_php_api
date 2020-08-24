<?php
include_once 'db/db_connection.php';
$sql = "Select * from users";
$users = array();
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_array($result)){

        $user['name'] = $row['name'];
        $user['email'] = $row['email'];
        $user['phone_number'] = $row['phone_number'];
        array_push($users,$user);
    }
    echo json_encode(['success'=>true,'user'=>$users]);
}
else{
    echo json_encode(['success'=>false,'message'=>'no user data']);
}