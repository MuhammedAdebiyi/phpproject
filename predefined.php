<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre Defined  Variabe</title>
</head>
<body>
<?php
$file = $_SERVER['SCRIPT_FILENAME'];
$user = $_SERVER['HTTP_USER_AGENT'];  
$server = $_SERVER['SERVER_SOFTWARE'];
echo "<p> You are running the file:<br><strong>$file</strong>.</p>\n";
echo "<p> You are viewing this page using:<br><strong>$user</strong></p>\n";
echo "<p>This server is running:<br><strong>$server</strong>.</p>\n"; 

$First_Name = 'Muhammed';
echo "Hello, $First_Name";
?>


</body>
</html>