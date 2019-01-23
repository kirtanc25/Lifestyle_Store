<?php
$footer = '
	<div class="navbar-fixed-bottom">
	<footer> 
    <div class="row" style="width:100%; margin-left:130px;"> 
        <div class="col-sm-4">
        <h4>Information</h4>
        <a href="about.php" style="color:grey;">About Us</a><br>
        <a href="contact.php" style="color:grey;">Contact Us</a>
        </div>
        
        <div class="col-sm-4">
        <h4>My Account</h4>
        <a href="#" style="color:grey;" data-toggle="modal" data-target="#logmod">Login</a><br>
        <a href="signup.php" style="color:grey;">Signup</a>
        </div>
        
        <div class="col-sm-4">
        <h4>Contact Us </h4>
        <h6>Contact: +91 (80) 4179 6565</h6>
        </div>
    </div> 
    </footer>
    </div>
';

echo $footer;
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

