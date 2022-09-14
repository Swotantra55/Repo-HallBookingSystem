<?php

session_start();
if(!(isset($_SESSION['userLogin']) 
&& $_SESSION['userLogin']==true)){
    header("Location: index.php");
}
require('Admin/inc/essentials.php');
include "dbCon.php";

$uId=$_SESSION['userId'];
$sql = "SELECT * FROM USER WHERE user_id='$uId'";
$result = $conn->query($sql);
if($result-> num_rows > 0) {
    while($row = mysqli_fetch_assoc($result)){
        $user_name=$row['user_name'];
        $address= $row['address'];
        $phone=$row['phone'];
        $email= $row['email'];
        echo $user_name;
        echo $address;
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('Admin/inc/links.php');?>
    <title>User Dashboard</title>
</head>
<body class="bg-light">
    <div class="container-fluid bg-dark text-light d-flex align-items-center p-3 justify-content-between">
        <h3 class="mb-0">User Panel</h3>
        <a href="Admin/logout.php" class="btn btn-light btn-sm">Logout</a>
    </div>
<?php require('Admin/inc/scripts.php');?>
</body>
</html>