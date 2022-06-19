<?php
$servername ="localhost";
$username ="root";
$pass ="";
$database ="hbs";


//create connection
$conn = new mysqli($servername, $username, $pass, $database);
//Check connection
if ($conn-> connect_error) {
    die("Connection failed: " .$conn->connect_error);
}
?>