<?php
session_start();
include('../../dbCon.php'); 

$allowed_ext = array('png', 'jpg', 'jpeg', 'gif');

$userid=$_POST['id'];
$username=$_POST['username'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];

// echo $userid.$username.$address.$phone.$email;

//the upload is no keyword but the name of the input element for image in the form in the update_profile.php
if(!empty($_FILES['upload']['name'])) {
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $target_dir = "uploads/${file_name}";
        // Get file extension
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));
        // echo $file_ext;
    
        // Validate file type/extension
        if(in_array($file_ext, $allowed_ext)) {
          // Validate file size
          if($file_size <= 1000000) { // 1000000 bytes = 1MB
            // Upload file
            move_uploaded_file($file_tmp, $target_dir);
    
            // Success message
            echo '<p style="color: green;">File uploaded!</p>';
            $sql = "UPDATE user SET 
        user_name='$username', address='$address', phone='$phone', email='$email', profile_picture='$target_dir' where user_id='$userid'";
        
        if($conn->query ($sql) === TRUE) {
          $_SESSION['status'] ="Data updated successfully";
        header("Location: update_profile.php");
        
        } 
        else {
        echo "Error:" .$sql . "<br>" . $conn->error;
        }
          } else {
            echo '<p style="color: red;">File too large!</p>';
          }
        } else {
          $message = '<p style="color: red;">Invalid file type!</p>';
        }
       } else {
        //  $message = '<p style="color: red;">Please choose a file</p>';
        $sql = "UPDATE user SET 
        user_name='$username', address='$address', phone='$phone', email='$email' where user_id='$userid'";
        
        if($conn->query ($sql) === TRUE) {
          $_SESSION['status'] ="Data updated successfully";
        header("Location: update_profile.php");

        } 
        else {
        echo "Error:" .$sql . "<br>" . $conn->error;
        }
       }




?>

