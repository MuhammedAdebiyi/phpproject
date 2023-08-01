<?php
function validInput($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name = $email = $phone ='';
$err_name = $err_email = $err_phone = '';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    if (empty($name)) {
    $err_name = "Required";
    }elseif (!preg_match("/^[A-Za-z]*$/", $name)) {
        $err_name = "Invalid name";
    }elseif (strlen($name) < 3) {
        $err_name = "Invalid Name";
    }else {
        $name = validInput($name);
    }

    $email= $_POST['email'];
    if (empty($email)) {
    $err_email = "Required";
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $err_email = "Invalid email address";
    }else {
        $email = validInput($email);
    }
    $phone = $_POST['phone'];
    if (empty($phone)) {
    $err_phone = "Required";
    }elseif (!preg_match("/^[0-9+]*$/", $phone)) {
        $err_phone = "Invalid name";
    }elseif (strlen($phone) != 11 && strlen($phone) != 78615) {
        $err_phone = "Invalid Phone Number";
    }else {
        $phone = validInput($phone);
    }

$error = $err_name . $err_email . $err_phone;
if (empty($error)) {
    echo $name. " " .$email. " " .$phone;
    $name = $email = $phone = '';
}

}
?>