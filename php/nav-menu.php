<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Timelapse Philippines</title>
	<meta name="description" content="">
	<link rel="stylesheet" href="../css/nav-menu.css" type="text/css">
	
	<!-- IE6-8 support of HTML5 elements --> <!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <script type="text/javascript"
            src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="../js/content.js"></script>
</head>

<body>
<nav class="full-menu-nav">
	<ul id="navigation">
		<li><a href="javascript:void(0);" onclick="getContent('center-content-wrapper','/php/video-carousel.php','main-content-wrapper')" class="first">HOME</a></li>

        <li><a href="javascript:void(0);" onclick="getContent('video-container','/php/video/video-main.php','main-content-wrapper')">STOCK FOOTAGE</a>
            <!--<ul>
                <li><a href="javascript:void(0);" onclick="getContent('video-container','/php/video/clouds.php','main-content-wrapper')">Clouds &raquo;</a></li>
                <li><a href="javascript:void(0);" onclick="getContent('video-container','/php/video/waves.php','main-content-wrapper')">Waves</a></li>
            </ul>-->
        </li>
        <li><a href="javascript:void(0);" onclick="getContent('technique-container','/php/technique.php','main-content-wrapper')">TECHNIQUE</a>

        </li>
        <li><a href="javascript:void(0);" onclick="getContent('long-term-container','/php/long-term-timelapse.php','main-content-wrapper')">LONG-TERM TIMELAPSE</a>
            <!--<ul>
                <li><a href="#">Construction</a></li>
                <li><a href="#">Event Setup</a></li>
            </ul>-->
        </li>
        <li><a href="javascript:void(0);" onclick="getContent('aerial-container','/php/aerial.php','main-content-wrapper')">AERIAL</a></li>
		<li><a href="javascript:void(0);" onclick="getContent('photography-container','/php/photography/photography-main.php','main-content-wrapper')">PHOTOGRAPHY</a>
			<!--<ul>
                <li><a href="javascript:void(0);" onclick="getContent('photography-container','/php/photography/astrophotography.php','main-content-wrapper')">Astrophotography</a></li>
                <li><a href="javascript:void(0);" onclick="getContent('photography-container','/php/photography/travel.php','main-content-wrapper')">Travel</a></li>
			</ul>-->
		</li>
        <li><a href="javascript:void(0);" onclick="getContent('full-video-container','/php/full-video.php','main-content-wrapper')">PROJECTS</a></li>
        <li><a href="javascript:void(0);" onclick="getContent('contact-details','/php/contact-details.php','main-content-wrapper')" class="last">CONTACT</a></li>
	</ul>
</nav>
</body>
</html>