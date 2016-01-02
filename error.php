<?php
$error = filter_input(INPUT_GET, 'err', $filter = FILTER_SANITIZE_STRING);
 
if (! $error) {
    $error = 'Oops! An unknown error happened.';
}
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
        <?php include "includes/navbar.php"; ?>
            <div class="container fixed">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <!-- add your protected content here! -->
                    <br />
                    <br />
                    <h1><?php include "includes/config/sitename.php"; ?></h1>
                    <?php echo $error; ?>
                        <p>
                            <small>If you aren't sure what this means, <a href="#">Contact Us</a> and we'll help you as best we can :)</small>
                        </p>
                </div>
                <div class="col-md-3"></div>
            </div>
            <?php include "includes/footer.inc.php"; ?>
    </body>

    </html>