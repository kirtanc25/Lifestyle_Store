<?php
require_once("common.php");
include('header.php');
?>
<head>
    <title>Contact Us | Lifestyle Store</title>
</head>
<body>
    <div class="row">
        <div class="container">
            <div class="col-sm-9">
                <h2>LIVE SUPPORT</h2>
                <h4> 24 hours | 7 days a week | 365 days a year Live Technical Support </h4>
                <p style="text-align:justify;">
                    It is a long established fact that a reader will be distracted bt the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. There are many variations of passage of Lorem Ipsum available, but the majority have suffered alteraion in some form, by injected humour, or randomised words which don't look even slightly believable.
                </p>
            </div>
            <div class="col-sm-3"><img src="img/contact.png"></div>
        </div>
    </div>

    <div class="row">
        <div class="container">
            <div class="col-sm-7">
                <h2>Contact Us</h2>
                <form class="form-horizontal" action="con_sub.php" method="post">
                    <label class="control-label" for="name">
                        <h4>Name:</h4>
                    </label> <br>
                    <div>
                        <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                    </div>

                    <label class="control-label" for="email">
                        <h4>Email:</h4>
                    </label><br>
                    <div>
                        <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                    </div>

                    <label class="control-label" for="message">
                        <h4>Message:</h4>
                    </label> <br>
                    <div>
                        <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                    </div>
                    <br>
                    <div class="text-left">
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>

                </form>
            </div>
            <div class="col-sm-5">
                <h2>Company Information</h2><br>
                <h4>Lifestyle International (P). Ltd</h4>
                <p>77° Town Centre, Building No 3,<br>
                    West Wing, Off HAL Airport Road,<br>
                    Yamlur P.O., Bangalore – 560 037.<br>
                    India. </p>
                <p><strong>Tel: +91 (80) 4179 6565</strong></p>
            </div>
        </div>
    </div>

    <br><br>
    <br><br>
    <br><br>
    <br><br>
</body>
<?php
include('footer.php');

?>
