<?php
include_once '../includes/checkLogin.php';

$user = checkLogin();

if($_POST['free'] == 'yes')
{
    $free = true;
}
else
{
    $free = false;
}

$db = new mysqli(DBADDRESS, USER, PASS, DATABASE);

$query = "INSERT INTO settings (userID, periods, frees, weeks) VALUES ('" . $user[0] . "', '" . $_POST['periods'] . "', '" . $free . "', '" . $_POST['weeks'] . "')";

$db->query($query);

header("Location: ". HOST . "register/done.php");