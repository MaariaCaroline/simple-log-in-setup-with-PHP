<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
           display: flex;
           justify-content: center;
           align-items: center; 
        }
    </style>
</head>
<body>
<form action="process_login.site" method="p">
    First Name<input type="text" name="firstName" required>
    Last Name<input type="text" name="lastName" required>
    Email Adress<input type="email" name="email" required>
    Password<input type="password" name="password" required>
    <input type="submit" value="submit">
    </form>
<?php
if(isset($_POST["email"]) && isset($_POST["password"])){
// in a real application you retrive user data from email and password
$storedEmail = "useremail@email.com";
$storedPassword = "userpassword";

$enteredEmail = $_POST["email"];
$enteredPassword = $_POST["password"];

if($enteredEmail === $storedEmail && password_verify($enteredPassword, $storedPassword)){
    echo "Login successful"; } else {
           echo "Login failed";
        }
    }

?>
</body>
</html>