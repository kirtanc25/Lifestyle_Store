<?php
require("common.php");
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup | Life Style Store</title>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="container-fluid decor_bg" id="content">
        <div class="row">
            <div class="container">
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                    <h2>SIGN UP</h2>
                    <form action="signup_script.php" method="POST">
                        <div class="form-group">
                            <input class="form-control" placeholder="Name" name="name" required="true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="e-mail" required="true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required="true">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Contact" maxlength="10" size="10" name="contact" required="true">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="City" name="city" required="true">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Address" name="address" required="true">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

                        <?php
                        if (isset($_GET['error'])){
                            echo "<br><br><h4 class='red'><center>". $_GET['error'] . "</center></h4>";
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
    <?php include "footer.php"; ?>