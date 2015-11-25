<?php

include_once '../includes/checkLogin.php';
include_once '../includes/template.php';
include_once '../includes/host.php';

$user = checkLogin();
?>

<div class="container">
    <div class="jumbotron">
        <h1>Good job, <?php echo $user[1]; ?>&nbsp;<small>I'm <?php echo NAME; ?></small></h1>
        
        <p><a href="../member/">Click here</a> to go to your fancy new timetable.</p>
    </div>
</div>