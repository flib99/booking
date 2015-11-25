<?php

include_once '../includes/checkLogin.php';
include_once '../includes/template.php';
include_once '../includes/host.php';

$user = checkLogin();

$db = new mysqli(DBADDRESS, USER, PASS, DATABASE);

$query = "SELECT `key`, `name`, `username`, `email` FROM users WHERE id = " . $user[0];

if(!$result = $db->query($query))
{
    die('1Error, try again.<br>Error:  [' . $db->error . ']');
}

$row = $result->fetch_assoc();

?>

<div class="container">
    <div class="jumbotron">
        <h1>Hello, <?php echo $user[1]; ?></h1>
        <p>This is your user account</p>
    </div>
    
    <h1>User information</h1>
    
    <h2>User information</h2>
    <ul><label class="col-sm-2">Name:</label>
    <?php echo $row['name']; ?></ul>
    <ul><label class="col-sm-2">Username:</label>
    <?php echo $row['username']; ?></ul>
    <ul><label class="col-sm-2">Email:</label>
    <?php echo $row['email']; ?></ul>
    
    <h2>API settings&nbsp;<small>Coming soon</small></h2>
    <label class="col-sm-2">User ID:</label>
    <pre><?php echo $user[0]; ?></pre>
    <label class="col-sm-2">API key:</label>
    <pre><?php echo $row['key']; ?></pre>
    
    <p>To use the you must quote your user ID and API key in the API address. Treat your API key like your password. <b>Don't tell it to anyone!</b> With it they can do anything with your timetable.</p>
    <br><p>The syntax for the API is as follows:</p>
    <br><pre><?php echo HOST; ?>api/request.php?user=<?php echo $user[0] . "&id" . $row['key'] . "&request=REQUEST"; ?></pre><br>
    <p>For more information visit the <a href="../api/index.php">API documentation</a>&nbsp;<sup>Coming soon</sup>.</p>
</div>