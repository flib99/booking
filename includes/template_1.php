<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once 'host.php';
?>

<html>
    <head>
        <title><?php echo NAME; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigationbar">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
            <div class="navbar-header">
                <a class="navbar-brand" href="/member/">Timetable</a>
            </div>
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Today</a></li>
                <li><a href="../member/tomorrow.php">Tomorrow</a></li>
                <li><a href="../member/timetable.php">Timetable</a></li>
                <li><a href="../member/homework.php">Homework</a></li>
              </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/includes/bugReport.php">Bug?</a></li>
                    <li><a href="../user"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
                    <li><a href="../settings"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a></li>
                    <li><a href="../logout"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a></li>
                </ul>
            </div>
          </div>
        </nav>
        
        <!--<nav class="navbar navbar-inverse navbar-fixed-bottom">
            <div class="container">
                <p class="text-muted" align="left">Timetable | Created by <a href="http://joshwalls.co.uk">Josh Walls</a></p><p class="text-muted" align="right">© Copyright 2015. All rights reserved.</p>
            </div>
</nav>-->
    </body>
</html>
