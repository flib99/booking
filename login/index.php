<!DOCTYPE html>
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
                <h1>Login</h1>
        </div>
            
        <form class="form-horizontal" role="form" action="login.php" method="POST">
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password:</label>
                <div class="col-sm-10"> 
                    <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password">
                </div>
            </div>
            <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
          
        </form>
            
            <?php
            
            if(isset($_GET['error']))
            {
                ?>
            
            <div class="col-sm-offset-2">Username or password incorrect.</div>
            <?php
            }
            ?>
        </div>
    </body>
</html>
