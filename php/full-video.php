<?php

// Include config file
require_once "dbconfig/dbconfig.php";

        $sql = "SELECT title, video_url FROM project_videos order by position asc";

        $stmt = $mysqli->prepare($sql);

        if($stmt->execute()){
            $stmt->store_result();

            if($stmt->num_rows > 0){
                $stmt->bind_result($title, $videoUrl);
            } else {
              echo "No project videos found.";
            }
        } else{
              echo "Oops! Something went wrong. Please try again later.";
        }

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/menu-full-video.css" type="text/css">
    <title></title>
</head>
<body>
    <div id="full-video-container">
        <div id="full-video-content">
            <p><span class="section-title">Projects</span></p><br>

            <?php
            // $string = file_get_contents("../data/menu-full-video.json");
            // $json_a = json_decode($string, true);
            // $i = 0;
            //     foreach ($json_a as $videos => $video_a) {
            //         $videoUrl = $video_a['videoUrl'];
            //         $imageFile = $video_a['imageFile'];
            //         $title = $video_a['title'];
            //
            //         // echo '<p><a id="video-link" href="#" onclick="popUpVideo(\'' .$title .'\',\''. $videoUrl . '\')">';
            //         // echo '<img id="video-image" width="600" height="240" src="../assets/splash/' . $imageFile . '"/></a></p>';
            //
            //         echo '<iframe width="600" height="240" src="'. $videoUrl . '" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
            //     }
                while ($stmt->fetch()) {
                    echo '<iframe width="600" height="240" src="'. $videoUrl . '" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
                }

                $stmt->free_result();
                $stmt->close();
                $mysqli->close();
            ?>
        </div>
    </div>
</body>
</html>
