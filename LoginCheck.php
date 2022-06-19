<?php

include "dbCon.php";

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM USER WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);
if ($result-> num_rows > 0) {
    echo "Login Successful";
}
else {
   // header("Location: index.php")
   echo "Password or email did not match.";
}

?>