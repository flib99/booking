<?php
include_once '../includes/template.php';
include_once '../includes/checkLogin.php';

$user = checkLogin();
?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>

<div class="container">
    <div class="jumbotron">
        <h1>Brilliant, <?php echo $user[1]; ?>&nbsp;<small>You're all registered</small></h1>
        <p>You're not done though. We need to do some setting up before you can start using your new exciting timetable.<br><small>P.S. This can't be changed; choose carefully.</small></p> 
    </div>
    
    <div class="container">
        <form class="form-horizontal" role="form" action="process.php" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="text">Periods:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="periods" name="periods" placeholder="How many lessons do you have in a day?">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="text">Weeks:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="weeks" name="weeks" placeholder="How many weeks is your timetable?">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="radio">Do you have free periods?</label>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input type="radio" name="free" value="yes">Yes
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="free" value="no">No
                    </label>
                </div>
            </div>
            <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>