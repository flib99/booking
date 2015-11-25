<?php
include_once 'host.php';

function checkLogin()
{
    $user = [];
    if(isset($_COOKIE['id']))
    {
        $id = $_COOKIE['id'];
        $name = $_COOKIE['name'];
    }
    else
    {
        header("Location: " . HOST . "login");
        die;
    }
    
    array_push($user, $id, $name);
    return $user;
}