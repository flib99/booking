<?php
include_once "../includes/host.php";
include_once '../includes/checkLogin.php';

$user = checkLogin();

$db = new mysqli(DBADDRESS, USER, PASS, DATABASE);


$query = "SELECT lessons.week, lessons.day, lessons.period, subjects.subject, teachers.name AS teacher, rooms.name AS room FROM lessons, subjects, teachers, rooms WHERE subjects.id=lessons.subjectID AND teachers.id=subjects.teacherID AND rooms.id=lessons.roomID AND lessons.userID = $user[0]";

if(!$result = $db->query($query))
{
    die('Error, try again.<br>Error:  [' . $db->error . ']');
}

$week = 'A';
$day = "mon";
$period = '1';

$json = "{";

while ($row = $result->fetch_assoc())
{
    while ($row['week'] == $week)
    {
        
    }
}

echo $json;