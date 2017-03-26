
<!--
 * Created by PhpStorm.
 * User: paolo
 * Date: 11/4/2014
 * Time: 4:56 PM
 *-->

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/header.css" type="text/css">
    <title></title>
</head>
<body>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        <!--<div id="icon-image-wrapper">
            <img src="/brewingsarcasm/assets/icon-image.jpg" width="80" height="80">
        </div>-->
        <div id="header-text-wrapper">
            <p><span class="header-title-text">Brewing Sarcasm Since 1976.</span></p>
           This site is still a work in progress. The developer is always drunk.
        </div>
        <div id="fb-button-wrapper">
            <div class="fb-like" data-href="http://www.facebook.com/brewingsarcasm" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
        </div>
</body>
</html>