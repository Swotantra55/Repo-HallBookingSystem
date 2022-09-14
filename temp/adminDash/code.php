<?php



include('../../dbCon.php'); 



$hallname=$_POST['hallname'];
$owner= $_POST['owner'];
$address= $_POST['address'];
$phone=$_POST['phone'];
$email= $_POST['email'];
$capacity=$_POST['capacity'];
$price=$_POST['price'];
$details=$_POST['details'];



$sql = "INSERT INTO halls (hallname, owner, address, phone, email, capacity, price, details) 
        VALUES ('$hallname', '$owner', '$address', '$phone', '$email', '$capacity', '$price', '$details')";
        
        if($conn->query ($sql) === TRUE) {
        echo "New record created successfully";
        } 
        else {
        echo "Error:" .$sql . "<br>" . $conn->error;
        }


        


?>
