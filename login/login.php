<?php
include_once "../includes/host.php";

$username = $_POST['username'];
$password = $_POST['password'];

$db = new mysqli(DBADDRESS, USER, PASS, DATABASE);

if($db->connect_errno > 0)
{
    die( $db->connect_error);
}

$query = "SELECT id, name, password FROM users WHERE email = '$email'";

if(!$result = $db->query($query))
{
    die('Error, try again.<br>Error:  [' . $db->error . ']');
}

$row = $result->fetch_assoc();

if(password_verify($password, $row['password']))
{
    setcookie("id", $row['id'], 0, '/');
    setcookie("name", $row['name'], 0, '/');
    header("Location: ". HOST . "member");
}
else
{
    header("Location: ". HOST . "login/index.php?error=1");
}