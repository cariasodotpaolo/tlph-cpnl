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
            interval : 5000
        });

    });
</script>
<body>
    <div id="banner-carousel-wrapper">
        <div id="banner-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <!--<ol class="carousel-indicators">
                <li data-target="#banner-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#banner-carousel" data-slide-to="1"></li>
                <li data-target="#banner-carousel" data-slide-to="2"></li>
                <li data-target="#banner-carousel" data-slide-to="3"></li>
            </ol>-->

            <div id="inner-carousel" class="carousel-inner" role="listbox">
                <div class="item active">
                    <div id="banner01" class="banner-item"></div>
                </div>
                <div class="item">
                    <div id="banner02" class="banner-item"></div>
                </div>
                <div class="item">
                    <div id="banner03" class="banner-item"></div>
                </div>
                <div class="item">
                    <div id="banner04" class="banner-item"></div>
                </div>
                <div class="item">
                    <div id="banner05" class="banner-item"></div>
                </div>
                <div class="item">
                    <div id="banner06" class="banner-item"></div>
                </div>
                <div class="item">
                    <div id="banner07" class="banner-item"></div>
                </div>
                <div class="item">
                    <div id="banner08" class="banner-item"></div>
                </div>
                <div class="item">
                    <div id="banner09" class="banner-item"></div>
                </div>
                <div class="item">
                    <div id="banner10" class="banner-item"></div>
                </div>
                <div class="item">
                    <div id="banner11" class="banner-item"></div>
                </div>
                <div class="item">
                    <div id="banner12" class="banner-item"></div>
                </div>
                <div class="item">
                    <div id="banner13" class="banner-item"></div>
                </div>
                <div class="item">
                    <div id="banner14" class="banner-item"></div>
                </div>
                <div class="item">
                    <div id="banner15" class="banner-item"></div>
                </div>
                <div class="item">
                    <div id="banner16" class="banner-item"></div>
                </div>
                <div class="item">
                    <div id="banner17" class="banner-item"></div>
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
