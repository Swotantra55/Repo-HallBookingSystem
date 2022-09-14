<?php

include('../../dbCon.php'); 

$hall_id=$_POST['id'];
$hallname=$_POST['hallname'];
$owner= $_POST['owner'];
$address= $_POST['address'];
$phone=$_POST['phone'];
$email= $_POST['email'];
$capacity=$_POST['capacity'];
$price=$_POST['price'];
$details=$_POST['details'];



$sql = "UPDATE halls SET 
        hallname='$hallname', owner='$owner', address='$address', phone='$phone', email='$email',
         capacity='$capacity', price='$price', details='$details' where hall_id='$hall_id'";
        
        if($conn->query ($sql) === TRUE) {
        echo "Data Updated Successfully";
        } 
        else {
        echo "Error:" .$sql . "<br>" . $conn->error;
        }

?>

