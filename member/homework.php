<?php

include_once '../includes/template.php';
include_once '../includes/checkLogin.php';

$query = "SELECT homework.name AS homework, homework.notes, homework.due, homework.complete, subjects.subject, teachers.name AS teacher FROM subjects, teachers, homework WHERE homework.subjectID=subjects.id AND teachers.id=subjects.teacherID AND homework.complete = false AND subjects.userID = $user[0]";

if(!$result = $db->query($query))
{
    die('1Error, try again.<br>Error:  [' . $db->error . ']');
}


