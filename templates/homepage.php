<?php
include_once 'includes/db_connect.php';
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
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
                    <div class="col-md-3">
                        <?php include "includes/pages.inc.php"; ?>
                    </div>
                    <div class="col-md-9">
                        <!-- add your protected content here! -->
                        <?php include "content/corsodb_content.php"; ?>
                    </div>
                </div>
                <?php include "includes/footer.inc.php"; ?>
            <?php else : ?>
                <?php include "loginFirst.php"; ?>
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