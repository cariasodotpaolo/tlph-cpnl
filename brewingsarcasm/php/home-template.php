 <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/home-template.css" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <title></title>
</head>
<body>
    <div id="page-wrapper">

        <div id="header-wrapper">
            <?php include 'header.php';?>

        </div>
        <div id="main-menu-wrapper">
            <?php include 'nav-menu.php';?>
        </div>

        <div id="banner-wrapper">
            <?php include 'banner-carousel.php';?>

        </div>

        <div id="main-content-wrapper">
            <div id="left-content-wrapper">
                <div id="left-menu-title">
                    <span>Scribblings...</span>
                </div>
                <div id="left-menu-content">
                    <a href="http://brewingsarcasm.wordpress.com/2011/04/17/flight/" target="_blank">
                        <img border="0" alt="Flight" src="assets/flight.jpg" width="180" height="270" title="Flight">
                    </a>
                    <br><br>
                    <p><a class="link-text" href="http://brewingsarcasm.wordpress.com/2017/03/21/me-honey/" target="_blank">Me, Honey</a></p>
                    <p><a class="link-text" href="http://brewingsarcasm.wordpress.com/2011/03/07/an-ode-to-nothing/" target="_blank">An Ode To Nothing</a></p>
                    <p><a class="link-text" href="http://brewingsarcasm.wordpress.com/2011/06/13/withering/" target="_blank">Withering</a></p>
                    <p><a class="link-text" href="http://brewingsarcasm.wordpress.com/2011/03/07/the-promised-land/" target="_blank">The Promised Land</a></p>
                    <p><a class="link-text" href="http://brewingsarcasm.wordpress.com/2011/03/21/you-were-six-i-was-seventeen/" target="_blank">You Were Six, I Was Seventeen</a></p>
                    <p><a class="link-text" href="http://brewingsarcasm.wordpress.com/2011/07/03/my-love/" target="_blank">My Love</a></p>
                    <p><a class="link-text" href="http://brewingsarcasm.wordpress.com/2011/05/24/sober/" target="_blank">Sober</a></p>
                    <p><a class="link-text" href="http://brewingsarcasm.wordpress.com/2011/04/17/flight/" target="_blank">Flight</a></p>
                    <p><a class="link-text" href="http://brewingsarcasm.wordpress.com/2011/04/08/alapaap-sa-bangin/" target="_blank">Alapaap Sa Bangin</a></p>
                    <p><a class="link-text" href="http://brewingsarcasm.wordpress.com/2011/03/08/porridge/" target="_blank">Porridge</a></p>
                </div>
            </div>

            <div id="center-content-wrapper">
                    <div id="center-content-title">
                        <span>Something Must Be Shown Here...</span>
                    </div>
                    <div id="center-content">
                        <?php include 'news-feed.php';?>
                    </div>
            </div>

            <div id="right-content-wrapper">
                <div id="right-menu-title">
                    <span>Lomografia...</span>
                </div>
                <div id="right-menu-content">

                    <a href="https://www.flickr.com/photos/50724167@N03/sets/72157650331357665/" target="_blank" >
                        <img border="0" alt="Boston In Black" src="assets/boston_in_black.jpg" width="180" height="270" title="Boston In Black">
                    </a>
                    <br><br>
					<p><a class="link-text" href="https://www.flickr.com/photos/50724167@N03/sets/72157652177929785/" target="_blank">Mt. Pulag: The Dark Mist</a></p>
                    <p><a class="link-text" href="http://www.flickr.com/photos/50724167@N03/sets/72157650331357665/" target="_blank">Boston In Black</a></p>
                    <p><a class="link-text" href="http://www.flickr.com/photos/50724167@N03/sets/72157650331816925/" target="_blank">Frozen Humanity</a></p>
                    <p><a class="link-text" href="http://www.flickr.com/photos/50724167@N03/sets/72157647993272614/" target="_blank">Kids At Work</a></p>
                    <p><a class="link-text" href="http://www.flickr.com/photos/50724167@N03/sets/72157649916909548/" target="_blank">When Nature Calls</a></p>
                    <br><br>
                    <p class="link-text">brewingsarcasm@gmail.com</p>

                </div>
            </div>

        </div>

        <div id="footer-wrapper">
            <?php include 'footer.php';?>
        </div>
    </div>

</body>
</html>