<?php
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
        <script type="text/JavaScript" src="js/sha512.js"></script>
        <script type="text/JavaScript" src="js/forms.js"></script>
        <link href="css/theme/cyborg/bootstrap.min.css" rel="stylesheet">
        <link href="css/signin.css" rel="stylesheet">
        <link href="css/sticky-footer-navbar.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2>Register for <?php include "includes/config/sitename.php"; ?></h2>
                <?php
                    if (!empty($error_msg)) {
                        echo $error_msg;
                    }
                ?>

                    <small>
                    Usernames can only have numbers, letters &amp; underscores.<br />
                    Passwords must be at least 6 characters long with an upper and lowercase letter and one number.
                </small>
            </div>
            <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" name="registration_form" class="form-signin">
                Username:
                <input type='text' name='username' id='username' class='form-control' />
                <br> Email:
                <input type="text" name="email" id="email" class='form-control' />
                <br> Password:
                <input type="password" name="password" id="password" class='form-control' />
                <br> Confirm password:
                <input type="password" name="confirmpwd" id="confirmpwd" class='form-control' />
                <br>
                <input type="button" value="Register" onclick="return regformhash(this.form, this.form.username, this.form.email, this.form.password, this.form.confirmpwd);" class="btn btn-primary" />
            </form>
            <p>Return to the <a href="login.php">login page</a>.</p>
            <div class="col-md-3"></div>
        </div>
        <?php include "includes/footer.inc.php"; ?>
    </body>

    </html>