<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Timelapse Philippines</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="../css/mobile-nav-menu.css" type="text/css">

    <!-- IE6-8 support of HTML5 elements --> <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script type="text/javascript"
            src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="../js/content.js"></script>
</head>

<body>

<header class="header-menu">

    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>

    <ul class="menu">
        <li><a href="javascript:void(0);" onclick="getContent('center-content-wrapper','/php/video-carousel.php','main-content-wrapper');closeMobileMenu();" class="first">HOME</a>
        </li>
        <li><a href="javascript:void(0);" onclick="getContent('video-container','/php/video/video-main.php','main-content-wrapper');closeMobileMenu();">STOCK FOOTAGE</a>
        </li>
        <li><a href="javascript:void(0);" onclick="getContent('technique-container','/php/technique.php','main-content-wrapper');closeMobileMenu();">TECHNIQUE</a>
        </li>
        <li><a href="javascript:void(0);" onclick="getContent('long-term-container','/php/long-term-timelapse.php','main-content-wrapper');closeMobileMenu();">LONG-TERM TIMELAPSE</a>
        </li>
        <li><a href="javascript:void(0);" onclick="getContent('aerial-container','/php/aerial.php','main-content-wrapper');closeMobileMenu();">AERIAL</a></li>
        <li><a href="javascript:void(0);" onclick="getContent('photography-container','/php/photography/photography-main.php','main-content-wrapper');closeMobileMenu();">PHOTOGRAPHY</a>
        </li>
        <li><a href="javascript:void(0);" onclick="getContent('full-video-container','/php/full-video.php','main-content-wrapper');closeMobileMenu();">PROJECTS</a></li>
        <li><a href="javascript:void(0);" onclick="getContent('contact-details','/php/contact-details.php','main-content-wrapper');closeMobileMenu();" class="last">CONTACT</a></li>
    </ul>
</header>
</body>
</html>