<?php
include ("../includes/template.php");
include_once "../includes/host.php";

include_once '../includes/checkLogin.php';

$db = new mysqli(DBADDRESS, USER, PASS, DATABASE);

$user = checkLogin();
date_default_timezone_set ('Europe/London');

$day = strtolower(date("D"));

$query = "SELECT currentWeek FROM settings WHERE userID = $user[0]";

if(!$result = $db->query($query))
{
    die('1Error, try again.<br>Error:  [' . $db->error . ']');
}

$row = $result->fetch_assoc();
$result->free();

$week = $row['currentWeek'];


$query = "SELECT lessons.day, lessons.period, lessons.week, subjects.subject, teachers.name AS teacher, rooms.name AS room FROM lessons, subjects, teachers, rooms WHERE subjects.id=lessons.subjectID AND teachers.id=subjects.teacherID AND rooms.id=lessons.roomID AND lessons.userID = $user[0] AND lessons.day = '$day' AND lessons.week = '$week'";

if(!$result = $db->query($query))
{
    die('1Error, try again.<br>Error:  [' . $db->error . ']');
}

$query = "SELECT homework.name AS homework, homework.notes, homework.due, homework.complete, subjects.subject, teachers.name AS teacher FROM subjects, teachers, homework WHERE homework.subjectID=subjects.id AND teachers.id=subjects.teacherID AND homework.complete = false AND subjects.userID = $user[0]";

if(!$result2 = $db->query($query))
{
    die('1Error, try again.<br>Error:  [' . $db->error . ']');
}




?>

        
<div class="container">
    <div class="jumbotron">
            <h1>Welcome, <?php echo $user[1]; ?></h1>
            <p>Today you have <b><?php echo $result->num_rows; ?></b> lessons and <b><?php echo $result2->num_rows; ?></b> things to do for homework.</p>
    </div>

    <div class="col-sm-4">
        <h1>Today</h1>
        <h4><?php echo date("G:i") . " on " . date("l") . " the " . date("jS") . " of " . date("F, Y, ") . "week ". $week . "."?></h4>
        <table style='width:100%'>
            <tr><td><label>Period</label></td><td><label>Subject</label></td><td><label>Room</label></td><td><label>Teacher</label></td></tr>
            <?php
            while($timetable = $result->fetch_assoc())
            {
                echo "<tr><td><label>" . $timetable['period'] . "</label></td><td>" . $timetable['subject'] . "</td><td>" . $timetable['room'] . "</td><td>" . $timetable['teacher'] . "</td></tr>";
                
            }
            ?>
        </table>
        
    </div>

    <div class="col-sm-4">
        <h1>Homework</h1>
        <h4>You have <b><?php echo $result2->num_rows; ?></b> things to do for homework</h4><br>
        <table width="100%">
            <tr><td><label>Name</label></td><td><label>Subject</label></td><td><label>Teacher</label></td><td><label>Due</label></td><td width="20%"><label>Notes</label></td></tr>
        <?php
        while($homework = $result2->fetch_assoc())
        {
            echo "<tr><td>" . $homework['homework'] . "</td><td>" . $homework['subject'] . "</td><td>" . $homework['teacher'] . "</td><td>" . date("d/m/y", $homework['due']). "</td><td>" . $homework['notes'] . "</td></tr>";
        }
        ?>
        </table>
    </div>

    <div class="col-sm-4">
        <h1>New</h1>
    </div>
</div>
