<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/news-feed.css" type="text/css">
    <title></title>
</head>
<body>
    <div id="news-list">
        <div class="news-item">
            <p><span class="news-title"><u>Timelapse Photography</u></span></p>
            <br>
            <p><span class="section-text">
            A way of looking at the world from a new perspective. <br>
                    It is waking up in the morning and seeing things for the first time. <br>
                Landscape and cityscape may remain unchanged for years, <br>
                    but let the senses perceive them in an entirely different degree of consciousness.<br>
            It is capturing motion - people, clouds, shadows, waves, traffic, reflection, vegetation <br>
                 among many other facets of life in vivid flow of sequential slices of time and space.
            <br>
            It is beholding a time capsule of rare moments, lenticular clouds, crepascular light, psychedelic rainbows and northern lights.
            <br>
            It is witnessing the transition of light and hues from dawn to sunset.
            <br>
            It is the unravelling, before the very eyes, of the subtle journey of the sun, moon, stars and the galaxy <br>
                    as they straggle across the vast frontiers of the universe.
            <br><br>
            Watch the following featured videos to know more.
        </span></p>
        </div>
        <?php
			/*$string = file_get_contents("/home/mpcariaso/public_html/data/video-newsfeed.json");*/
            $string = file_get_contents("../data/menu-full-video.json");
			$json_a = json_decode($string, true);
			
			foreach ($json_a as $videos => $video_a) {
				$videoUrl = $video_a['videoUrl'];
				echo '<div class="news-item">';
				echo '<iframe width="600" height="240" src="' . $videoUrl . '" frameborder="0" allowfullscreen></iframe>';		    	
				echo  '</div>';
			}			
		?>

    </div>
</body>
</html>