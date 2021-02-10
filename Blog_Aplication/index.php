<?php
require 'server/server_login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <center>
    <h1>Login</h1>
</center>
    <form action="#" method="post" id="form">
    <table style="margin-left: 40%">
        <tr>
            <td>Email</td>
        </tr>
        <tr>
            <td><input type="text" name="email" id="email" data-error="#emailerror"><br>
            <span id="emailerror"><?php echo $eerror; ?></span></td>
        </tr>
        <tr>
            <td>Password</td>
        </tr>
        <tr>
            <td><input type="password" name="password" id="password" data-error="#passerror">
            <br><span id="passerror"><?php echo $passerr; ?></span></td>
        </tr>
        <tr>
            <td><input type="submit" value="Login" name="Login"><a href="register.php">Register</a></td>
        </tr>
        <span><?php echo $loginerr ?></span>
     </table>
     </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="js/validation.js"></script>
</body>
</html>