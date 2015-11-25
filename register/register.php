<?php
include_once "../includes/host.php";



$name = $_POST['name'];
$email = strtolower($_POST['email']);
$password = $_POST['password'];
$pass = $_POST['password'];
$repeat = $_POST['repeat'];

$error;
$errorMessage = [];

if ($password != $repeat)
{
    $passwordError = true;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    $emailError = true;
}

if ($emailError && !$passwordError)
{
    $error = "1";
}
elseif (!$emailError && $passwordError)
{
    $error = "2";
}
elseif ($emailError && $passwordError)
{
    $error = "3";
}
else
{
    $error = "0";
}

if ($error != "0")
{
    header("Location: ". HOST . "register/result.php?error=" . $error);
}

$password = password_hash($password, PASSWORD_DEFAULT);

$db = new mysqli(DBADDRESS, USER, PASS, DATABASE) or die (mysqli_error());

$query = "INSERT INTO users (`name`, `password`, `email`) VALUES ('$name', '$password', '$email')";

if(!$result = $db->query($query))
{
    die('1Error, try again.<br>Error:  [' . $db->error . ']');
}

$query = "SELECT id FROM users WHERE email = '$email'";


if(!$result = $db->query($query))
{
    die('2Error, try again.<br>Error:  [' . $db->error . ']');
}

$row = $result->fetch_assoc();

setcookie("id", $row['id'], 0, '/');
setcookie("name", $name, 0, '/');




header("Location: " . HOST . "register/setup.php");