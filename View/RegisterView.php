
<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
      <?php if(isset($smsg)){ ?><div class="alert alert-success alert-dismissible" > <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger alert-dismissible" ><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <?php echo $fmsg; ?> </div><?php } ?>
       <div class="row">
           <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <form class="form-signin" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                    <h2 class="form-signin-heading">Registration</h2>
        <div class="form-group">
		  <!--<span class="input-group-addon" id="basic-addon1">@</span>-->
            <label for="username">User Name</label>
		  <input type="text" name="username" class="form-control" pattern="[a-z]{3,15}" placeholder="Username" required>
		</div>
                    <input type="hidden" name="action"  value="Login">
                    <input type="hidden" name="method" value="doRegister">
        <div class="form-group">
        <label for="inputEmail">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        </div>
        <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" name="password" id="inputPassword"  class="form-control" placeholder="Password" required>
        </div>
        <div class="form-group">
        <label for="inputPassword">Confirm Password</label>
        <input type="password" name="repassword" id="inputrePassword"  class="form-control" placeholder="Confirm Password" required>
        </div>
        <button class="btn btn-md btn-primary" type="submit">Register</button>
        <a class="btn btn-primary pull-right" href="index.php?action=Login&method=login">Login</a>
              </form>

        </div>
        <div class="col-sm-4"></div>
</div>
</body>
</html>