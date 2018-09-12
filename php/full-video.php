<?php

// Include config file
require_once "dbconfig/dbconfig.php";

        $sql = "SELECT title, video_url FROM project_videos order by position asc";

        $result = $myslqi->query($sql);

        if ($result->num_rows == 0) {
            echo "Oops! Something went wrong. Please try again later.";
        } else {
          $result->bind_result($title, $videoUrl);
        }

        $mysqli->close();

        // if($stmt = $mysqli->prepare($sql)){
        //
        //     // Attempt to execute the prepared statement
        //     if($stmt->execute()){
        //         // Store result
        //         $stmt->store_result();
        //
        //         // Check if username exists, if yes then verify password
        //         if($stmt->num_rows > 0){
        //             // Bind result variables
        //             $stmt->bind_result($title, $videoUrl, $position);
        //             if($stmt->fetch()){
        //                 if(password_verify($password, $hashed_password)){
        //                     // Password is correct, so start a new session
        //                     session_start();
        //
        //                     // Store data in session variables
        //                     $_SESSION["loggedin"] = true;
        //                     $_SESSION["id"] = $id;
        //                     $_SESSION["username"] = $username;
        //
        //                     // Redirect user to welcome page
        //                     header("location: login/welcome.php");
        //                 } else{
        //                     // Display an error message if password is not valid
        //                     $password_err = "The password you entered was not valid.";
        //                 }
        //             }
        //         } else{
        //             // Display an error message if username doesn't exist
        //             $username_err = "No account found with that username.";
        //         }
        //     } else{
        //         echo "Oops! Something went wrong. Please try again later.";
        //     }
        //     }
        //
        //     // Close statement
        //     $stmt->close();
        // }
        //
        // // Close connection
        // $mysqli->close();
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

            <!-- <?php
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
            ?> -->
            <?php
                foreach($result->fetch()) {
                    echo '<iframe width="600" height="240" src="'. $videoUrl . '" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
                }
            ?>
        </div>
    </div>
</body>
</html>
