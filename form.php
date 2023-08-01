<?php
require 'script.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Php Form Validation</title>
</head>
<body>
   <form  method="post">
    <input type="text" name = "name" placeholder="Enter Your Name" value="<?=$name?>"><span><?=$err_name;?></span><br>
    <input type="email" name = "email" placeholder="Enter Your Email"value="<?=$email?>"><span><?=$err_email;?><br>
    <input type="phone" name = "phone" placeholder= "Enter Your Phone Number"value="<?=$phone?>"><span><?=$err_phone;?><br>
    <button type="submit">Register</button>
   </form>
</body>
</html>