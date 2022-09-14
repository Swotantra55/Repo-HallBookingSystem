<?php

include "dbCon.php";
require('Admin/inc/essentials.php');

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM USER WHERE email='$email'";
$result = $conn->query($sql);
if($result-> num_rows > 0) {
    while($row = mysqli_fetch_assoc($result)){
        $pw=$row['password'];
        if(password_verify($password, $pw)){
            // echo "Login Successful";
                session_start();
                $_SESSION['userLogin']=true;
                $_SESSION['userId'] =$row['user_id'];
                // $a = $_SESSION['userLogin'];
                // $b = $_SESSION['userId'];
                // echo $a;
                // echo $b;
                redirect('temp/adminDash/test.php');
        }
        else{
            alert('error', 'Login failed - Invalid Credentials.');
           }
    } 
}
else {
    echo "Password or email did not match.";
    }
?>


