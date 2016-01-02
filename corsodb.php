<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CorsoDB</title>
        <link href="css/theme/cyborg/bootstrap.min.css" rel="stylesheet">
        <link href="css/signin.css" rel="stylesheet">
        <link href="css/socialCSS_ns3.css" rel="stylesheet">
        <link href="css/sticky-footer-navbar.css" rel="stylesheet">

        <!-- the following CSS link is for the initial coverpage on the member's login. 
        You can delete this line and the corresponding file safely for your own content !-->
        <link href="css/initialCSS_ns5.css" rel="stylesheet">
        <!-- end of initialCSS_ns5.css link !-->
    </head>

    <body>
        <?php if (login_check($mysqli) == true) : ?>
            <?php include "includes/navbar.php"; ?>
                <div class="container fixed">
                    <!-- add your protected content here! -->
                    <?php include "content/corsodb_content.php"; ?>
                </div>
                <?php include "includes/footer.inc.php"; ?>
                    <?php else : ?>
                        <div class="container">
                                <div class="col-md-2">
                                    <img src="images/stop.png" class="errorImage" />
                                </div>
                                <div class="col-md-4">
                                    <h2>UNAUTHORIZED ACCESS ATTEMPT!</h2>
                                    <p>
                                        You are not authorized to access this page without <a href="register.php">registering for an account</a> first!
                                        <br />
                                    </p>
                                    <small>This access attempt has been logged by our servers. Further attempts to access our servers without <a href="index.php">logging in</a> will result in anti-access actions being taken.</small>
                                </div>
                            <div class="col-md-3"></div>
                        </div>
                        <?php include "includes/footer.inc.php"; ?>
                            <?php endif; ?>
    </body>
    <!-- NOTICE: PLUGIN ZONE - NOTHING AFTER THESE LINES! -->
    <!-- importing scripts using the PHP file like in index.php created an error where scripts weren't loading. !-->
    <!-- Add your scripts here !-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- end of scripts area !-->

    </html>