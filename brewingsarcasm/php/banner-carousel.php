<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/brewingsarcasm/css/banner-carousel.css" type="text/css">
    <title></title>
    <script src="/brewingsarcasm/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="/brewingsarcasm/js/jssor.slider-22.2.16.mini.js" type="text/javascript"></script>
</head>
<script type="text/javascript">
    jQuery(document).ready(function ($) {

        var jssor_1_SlideshowTransitions = [
            {$Duration:1200,$Opacity:2}
        ];

        var jssor_1_options = {
            $AutoPlay: true,
            $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
            },
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            },
            $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
            }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*responsive code begin*/
        /*remove responsive code if you don't want the slider scales while window resizing*/
        function ScaleSlider() {
            var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
            if (refSize) {
                refSize = Math.min(refSize, 600);
                jssor_1_slider.$ScaleWidth(refSize);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }
        ScaleSlider();
        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        /*responsive code end*/
    });
</script>
<body>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:900px;height:300px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:900px;height:300px;overflow:hidden;">

            <div>
                <img data-u="image" src="/brewingsarcasm/assets/banner/banner01.jpg" width="900" height="300"/>
            </div>
            <div>
                <img data-u="image" src="/brewingsarcasm/assets/banner/banner01.jpg" width="900" height="300" />
            </div>
            <div>
                <img data-u="image" src="/brewingsarcasm/assets/banner/banner02.jpg" width="900" height="300" />
            </div>
            <div>
                <img data-u="image" src="/brewingsarcasm/assets/banner/banner03.jpg" width="900" height="300" />
            </div>
            <div>
                <img data-u="image" src="/brewingsarcasm/assets/banner/banner04.jpg" width="900" height="300" />
            </div>
            <div>
                <img data-u="image" src="/brewingsarcasm/assets/banner/banner05.jpg" width="900" height="300" />
            </div>
            <div>
                <img data-u="image" src="/brewingsarcasm/assets/banner/banner06.jpg" width="900" height="300" />
            </div>
            <div>
                <img data-u="image" src="/brewingsarcasm/assets/banner/banner07.jpg" width="900" height="300" />
            </div>
            <div>
                <img data-u="image" src="/brewingsarcasm/assets/banner/banner08.jpg" width="900" height="300" />
            </div>
            <div>
                <img data-u="image" src="/brewingsarcasm/assets/banner/banner09.jpg" width="900" height="300" />
            </div>
            <div>
                <img data-u="image" src="/brewingsarcasm/assets/banner/banner10.jpg" width="900" height="300" />
            </div>
            <div>
                <img data-u="image" src="/brewingsarcasm/assets/banner/banner11.jpg" width="900" height="300" />
            </div>
            <div>
                <img data-u="image" src="/brewingsarcasm/assets/banner/banner08.jpg" width="900" height="300" />
            </div>
            <div>
                <img data-u="image" src="/brewingsarcasm/assets/banner/banner09.jpg" width="900" height="300" />
            </div>
            <div>
                <img data-u="image" src="/brewingsarcasm/assets/banner/banner10.jpg" width="900" height="300" />
            </div>
            <div>
                <img data-u="image" src="/brewingsarcasm/assets/banner/banner11.jpg" width="900" height="300" />
            </div>
            <div>
                <img data-u="image" src="/brewingsarcasm/assets/banner/banner12.jpg" width="900" height="300" />
            </div>
            <div>
                <img data-u="image" src="/brewingsarcasm/assets/banner/banner13.jpg" width="900" height="300" />
            </div>
            <div>
                <img data-u="image" src="/brewingsarcasm/assets/banner/banner14.jpg" width="900" height="300" />
            </div>
            <div>
                <img data-u="image" src="/brewingsarcasm/assets/banner/banner15.jpg" width="900" height="300" />
            </div>
            <div>
                <img data-u="image" src="/brewingsarcasm/assets/banner/banner16.jpg" width="900" height="300" />
            </div>
            <a data-u="any" href="http://www.jssor.com" style="display:none">Simple Fade Slideshow</a>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <!--<span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>-->
    </div>
</body>