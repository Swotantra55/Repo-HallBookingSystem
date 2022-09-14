<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <form class="login-email" action="connection.php" method="post">
            <p class="login-text">Registration</p>
            <div class="input-group">
                <input type="text" class="name" name="user_name" placeholder="Username" required>
            </div>
            <div class="input-group">
                <input type="text" class="address" name="address" placeholder="Address" required>
            </div>
            <div class="input-group">
                <input type="tel" class="tel" name="phone" placeholder="+977-9846012345" pattern="+977-[0-9]{10}" required>
            </div>
            <div class="input-group">
                <input type="email" class="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <input type="password" class="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
                <input type="password" class="password" placeholder="Confirm Password" name="cpassword" required>
            </div>
            <div class="input-group">
                <button type="submit" class="button">Register</button>
            </div>  
            <p class="login-register-text">Already have an account? <a href="login.html">Login Here</a></p>
            
        </form>
    </div>
        
    
</body>
</html>