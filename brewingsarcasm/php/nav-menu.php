<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HTML5 / CSS3 Drop-Down Navigation Menu</title>
	<meta name="description" content="">
	
	<link rel="stylesheet" href="css/nav-menu.css" type="text/css">
	
	<!-- IE6-8 support of HTML5 elements --> <!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <script type="text/javascript"
            src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="js/content.js"></script>
</head>

<body>
    <nav class="full-menu-nav">
        <ul id="navigation">
            <li><a href="javascript:void(0);" onclick="getContent('news-list','php/news-feed.php','center-content')" class="first">Home Brew</a></li>
            <!--<li><a href="javascript:void(0);" onclick="getContent('video-container','/php/video/video-main.php','main-content-wrapper')">PHOTOGRAPHY &raquo;</a>-->
            <li><a href="#">Lomography</a>
                <ul>
                    <li><a href="http://www.flickr.com/photos/50724167@N03/sets/72157650331357665/" target="_blank">Boston In Black</a></li>
                    <li><a href="http://www.flickr.com/photos/50724167@N03/sets/72157650331816925/" target="_blank">People Are Ppl</a></li>
                    <li><a href="http://www.flickr.com/photos/50724167@N03/sets/72157647993272614/" target="_blank">Kids At Work</a></li>
                    <li><a href="http://www.flickr.com/photos/50724167@N03/sets/72157649916909548/" target="_blank">When Nature Calls</a></li>
                </ul>
            </li>
            <li><a href="#">Bloggery</a>
                <ul>
                    <li><a href="http://brewingsarcasm.wordpress.com/2017/03/21/me-honey/" target="_blank">Me, Honey</a></li>
                    <li><a href="http://brewingsarcasm.wordpress.com/2011/03/07/an-ode-to-nothing/" target="_blank">An Ode To Nothing</a></li>
                    <li><a href="http://brewingsarcasm.wordpress.com/2011/06/13/withering/" target="_blank">Withering</a></li>
                    <li><a href="http://brewingsarcasm.wordpress.com/2011/03/07/the-promised-land/" target="_blank">The Promised Land</a></li>
                    <li><a href="http://brewingsarcasm.wordpress.com/2011/03/21/you-were-six-i-was-seventeen/" target="_blank">You Were Six, I Was Seventeen</a></li>
                    <li><a href="http://brewingsarcasm.wordpress.com/2011/07/03/my-love/" target="_blank">My Love</a></li>
                    <li><a href="http://brewingsarcasm.wordpress.com/2011/05/24/sober/" target="_blank">Sober</a></li>
                    <li><a href="http://brewingsarcasm.wordpress.com/2011/04/17/flight/" target="_blank">Flight</a></li>
                    <li><a href="http://brewingsarcasm.wordpress.com/2011/04/08/alapaap-sa-bangin/" target="_blank">Alapaap Sa Bangin</a></li>
                    <li><a href="http://brewingsarcasm.wordpress.com/2011/03/08/porridge/" target="_blank">Porridge</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" onclick="getContent('contact-details','php/contact-details.php','center-content')" class="last">About</a>
                <ul>
                    <li><a href="javascript:void(0);" onclick="getContent('contact-details','php/contact-details.php','center-content')" class="last">Contact</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</body>
</html>