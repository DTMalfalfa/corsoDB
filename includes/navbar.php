<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="corsodb.php">
                <?php include "config/sitename.php"; ?>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="index.php#home" data-toggle="tab">Newsfeed</a></li>
                <li><a href="index.php#second" data-toggle="tab">Friends</a></li>
                <li><a href="index.php#third" data-toggle="tab">Groups</a></li>
                <li><a href="index.php#fourth" data-toggle="tab">Discover</a></li>
                <li><a href="index.php#fifth" data-toggle="tab">Connect</a></li>
                <li><a href="index.php#sixth" data-toggle="tab">Page 6</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">
                        <?php echo htmlentities($_SESSION['username']); ?>
                    </a>
                </li>
                <li><a href="includes/logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>