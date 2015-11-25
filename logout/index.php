<?php
include_once "../includes/host.php";

if (isset($_COOKIE['id']))
 {
    unset($_COOKIE['id']);
    unset($_COOKIE['user']);
    setcookie('id', null, -1, '/');
    setcookie('user', null, -1, '/');
 }
 
 header("Location: " . HOST . "member");