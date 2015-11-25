<?php

$error = $_GET['error'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h1>Failed</h1>
                <p>Something was wrong with the information you gave us</p>
            </div>
            <h1>What went wrong?</h1>
            <?php
            if ($error == "1")
            {
                echo ("<h2>Email</h2>You didn't give us a valid email address");
            }
            elseif ($error == "2")
            {
                echo "<h2>Password</h2>The passwords you gave us didn't match";
            }
            elseif ($error == "3")
            {
                echo "<h2>Email and Password</h2>The email you gve us isn't valid and your passwords didn't match.";
            }
            else
            {
                echo "<h2>Well, this is embarrassing.</h2>We don't know what went wrong. Try again.";
            }
            ?>
            <br><br>
            <button type="button" class="btn btn-primary" onclick="parent.location='register/register.html'">Try again</button>
        </div>
    </body>
</html>