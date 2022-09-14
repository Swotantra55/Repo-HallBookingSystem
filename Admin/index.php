<?php require('../dbCon.php');?>
<?php require('../dbConfig.php');?>
<?php require('inc/essentials.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <?php require('inc/links.php');?>
    <link rel="stylesheet" href='css/HBS.css'>
    <style>
        /* center the main login form div */
        div.login-form{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
}
    </style>
</head>
<body class="bg-light">
    <div class="login-form text-center overflow-hidden rounded bg-white shadow">
        <form  method="POST">
            <h4 class="bg-secondary text-white py-3">Admin Login</h4>
            <div class="p-4">
                <div class="mb-3">
                <input type="text" name="admin_name" class="form-control shadow-none text-center" placeholder="Admin name" required>
                </div>
                <div class="mb-4">
                <input type="password" name="admin_pass" class="form-control shadow-none text-center" placeholder="Password" required>
                </div>
                
                <button type="submit" name="login" class="btn text-white custom-bg shadow-none ">LOGIN</button>
            </div>
        </form>
    </div>
    
    <?php
    // filteration helps in data validation and sanitizing the inputs. Sometimes user with malicious intention input scripts 
    // in the input fields. Hence data filteration or sanitation is necessary
    if(isset($_POST['login'])){
        $form_data = filteration($_POST);
        $query = "SELECT *FROM `admin_cred` WHERE `admin_name` = ? AND `admin_pass`=?";
        $values =[$form_data['admin_name'], $form_data['admin_pass']];
        $datatpes = "ss";//string, string
        $res =select($query, $values, $datatpes);
       // print_r($res);
       if($res->num_rows==1){
        $row =mysqli_fetch_assoc($res);
        session_start();
        $_SESSION['adminLogin']=true;
        $_SESSION['adminId'] =$row['sr_no'];
        redirect('../temp/adminDash/AdminPanel.php');
       }
       else{
        alert('error', 'Login failed - Invalid Credentials.');
       }
    }
     ?>
    <?php require('inc/scripts.php');?>
</body>
</html>