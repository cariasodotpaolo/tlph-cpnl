<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/news-feed.css" type="text/css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../js/video-player.js"></script>
    <title></title>
</head>
<script type="text/javascript">
    $(document).ready(function(){
        $("#myCarousel").carousel({
            interval : 2500
        });
    });
</script>
<body>
    <div id="center-content-wrapper">
        <?php include 'home-intro.php'; ?>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php
                $string = file_get_contents("../data/video-newsfeed.json");
                $json_a = json_decode($string, true);

                $i = 0;
                foreach ($json_a as $videos => $video_a) {

                    if ($i == 0) {
                        echo '<li data-target="#myCarousel" data-slide-to="'. $i . '" class="active"></li>';
                    } else {
                        echo '<li data-target="#myCarousel" data-slide-to="' . $i . '"></li>';
                    }
                    $i++;
                }
                ?>
            </ol>

            <!-- Wrapper for slides -->
            <div id="inner-carousel" class="carousel-inner" role="listbox">
                <?php
                $string = file_get_contents("../data/video-newsfeed.json");
                $json_a = json_decode($string, true);
                $i = 0;
                foreach ($json_a as $videos => $video_a) {
                    $videoUrl = $video_a['videoUrl'];
                    $imageFile = $video_a['imageFile'];
                    $title = $video_a['title'];

                    if($i == 0) {
                        echo '<div class="item active">';
                    } else {
                        echo '<div class="item">';
                    }

                    echo '<a id="video-link" href="#" onclick="popUpVideo(\'' .$title .'\',\''. $videoUrl . '\')">';
                    echo '<img id="video-image" width="600" height="240" src="../assets/splash/' . $imageFile . '"/></a>';
                    echo '</div>';

                    $i++;
                }
                ?>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
</body>
</html>