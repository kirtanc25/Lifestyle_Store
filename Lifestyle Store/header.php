<?php

$header0 = '
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
   <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="index.php">Lifestyle Store</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">';
	  
	$header10 ='<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#" data-toggle="modal" data-target="#logmod"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';

	$header11 ='<li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
        <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
        <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>';
	$header1='';
	
	if(isset($_SESSION['email'])){$header1=$header11;}
	else{	$header1=$header10;	}
	
	$header2 = '
		<li><a href="about.php"><span class="glyphicon glyphicon-globe"></span> About</a></li>
		<li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us </a></li>
      </ul>
     </div>
    </div>
  </div>';
echo $header0.$header1.$header2;
?>

<body>
    <div class="modal fade" id="logmod" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLongTitle">LOGIN</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-warning"><i>Login to make a purchase</i>
                    </p>
                            <form role="form" action="login_submit.php" method="POST">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" name="e-mail" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Login</button><br>
                            </form>
                      <a href="forgot.php">Forgot Password?</a>    
                </div>
                <div class="modal-footer">
                    <p>Don't have an account? <a href="signup.php">Register</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
