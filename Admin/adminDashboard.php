<?php
require('inc/essentials.php');
adminLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php');?>
    <title>Admin Dashboard</title>
</head>
<body class="bg-light">
    <div class="container-fluid bg-dark text-light d-flex align-items-center p-3 justify-content-between">
        <h3 class="mb-0">Admin Panel</h3>
        <a href="admin_logout.php" class="btn btn-light btn-sm">Logout</a>
    </div>
<?php require('inc/scripts.php');?>
</body>
</html>