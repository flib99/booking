

<html>

<head>
<!--[if IE]>
<meta HTTP-EQUIV="REFRESH" content="0; url=http://www.google.com">
<![endif]-->

<!-- bootstrap stuff -->
<link href="include/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<title><?php echo $this->title ?></title>
<style>
body { padding-top: 70px; }
</style>
</head>

<body>

<!-- top bar-->
<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
  <div class="container">
  	<div class="navbar-header">
      <a class="navbar-brand" href="#">PLACEHOLDER_name</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
      </ul>
  </div>
</nav>
<!--end top bar -->

<!-- bottom bar -->
<nav class="navbar navbar-default navbar-fixed-bottom">
  <div class="container">
	<ul class="nav navbar-nav">
        <li><a href="#">About</a></li>
        <li><a href="#">Privacy</a></li> 
        <li><a href="#">API</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	 <li><a>&copy Copyright 2015 Josh Walls. All Rights Reserved.</a></li>
      </ul>
  </div>
</nav>
</body>

</html>