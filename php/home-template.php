 <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head lang="en">
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/home-template.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Tangerine:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
    <title></title>
</head>
<body>
    <div id="page-wrapper">

        <div id="header-menu-wrapper">
            <?php include 'mobile-nav-menu.php';?>
        </div>
        <div id="top-page-wrapper">
            <div id="banner-wrapper">
                <?php include 'banner-media.php';?>
            </div>
            <div id="header-wrapper">
                <?php include 'header.php';?>
            </div>
            <div id="main-menu-wrapper">
                <?php include 'nav-menu.php';?>
            </div>
        </div>
        <div id="main-content-wrapper">
                <?php include 'video-carousel.php';?>
        </div>
        <div id="footer-wrapper">
            <?php include 'footer.php';?>
        </div>
    </div>

</body>
</html>