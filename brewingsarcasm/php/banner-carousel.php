<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/banner-carousel.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title></title>
</head>
<script type="text/javascript">
    $(document).ready(function(){
        $("#banner-carousel").carousel({
            interval : 3000
        });
    });
</script>
<body>
    <div id="banner-carousel-wrapper">
        <div id="banner-carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
            <!--<ol class="carousel-indicators">
                <li data-target="#banner-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#banner-carousel" data-slide-to="1"></li>
                <li data-target="#banner-carousel" data-slide-to="2"></li>
                <li data-target="#banner-carousel" data-slide-to="3"></li>
            </ol>-->

            <div id="inner-carousel" class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="assets/banner/banner01.jpg">
                </div>
                <div class="item">
                    <img src="assets/banner/banner02.jpg">
                </div>
                <div class="item">
                    <img src="assets/banner/banner03.jpg">
                </div>
                <div class="item">
                    <img src="assets/banner/banner04.jpg">
                </div>
                <div class="item">
                    <img src="assets/banner/banner05.jpg">
                </div>
                <div class="item">
                    <img src="assets/banner/banner06.jpg">
                </div>
                <div class="item">
                    <img src="assets/banner/banner07.jpg">
                </div>
                <div class="item">
                    <img src="assets/banner/banner08.jpg">
                </div>
                <div class="item">
                    <img src="assets/banner/banner09.jpg">
                </div>
                <div class="item">
                    <img src="assets/banner/banner10.jpg">
                </div>
                <div class="item">
                    <img src="assets/banner/banner11.jpg">
                </div>
                <div class="item">
                    <img src="assets/banner/banner12.jpg">
                </div>
                <div class="item">
                    <img src="assets/banner/banner13.jpg">
                </div>
                <div class="item">
                    <img src="assets/banner/banner14.jpg">
                </div>
                <div class="item">
                    <img src="assets/banner/banner15.jpg">
                </div>
                <div class="item">
                    <img src="assets/banner/banner16.jpg">
                </div>
            </div>

            <a class="left carousel-control" href="#banner-carousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#banner-carousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
</body>
</html>
