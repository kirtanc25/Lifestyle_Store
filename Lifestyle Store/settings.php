<?php
require_once("common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
include 'header.php';
?>
   <head>
       <title>Setting | Lifestyle Store</title>
   </head>
    <body>
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <h4>Change Password</h4>
                    <form action="settings_script.php" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="old-password"  placeholder="Old Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="New Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required = "true">
                        </div>
                        <button type="submit" class="btn btn-primary" name="sub">Change</button>
                        <?php
                        if (isset($_GET['error'])){
                            echo "<br><br><h4 class='red'><center>". $_GET['error'] . "</center></h4>";
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </body>
 <?php include("footer.php"); ?>