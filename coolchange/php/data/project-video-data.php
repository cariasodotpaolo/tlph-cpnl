<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login/login.php");
    exit;
}
// Include config file
require_once "../dbconfig/dbconfig.php";

        $sql = "SELECT id, title, video_url, position FROM project_videos order by position asc";

        $myArray = array();
        if ($result = $mysqli->query($sql)) {

            while($row = $result->fetch_array(MYSQL_ASSOC)) {
                    $myArray[] = $row;
            }
            //echo json_encode($myArray);

            $jsonData = json_encode($myArray);
        }

        $result->close();
        $mysqli->close();

        // $stmt = $mysqli->prepare($sql);
        //
        // if($stmt->execute()) {
        //     $stmt->store_result();
        //
        //     if($stmt->num_rows > 0){
        //         $stmt->bind_result($id, $title, $videoUrl, $position);
        //     } else {
        //       echo "No project videos found.";
        //     }
        // } else {
        //       echo "Oops! Something went wrong. Please try again later.";
        // }
        //
        // $videoArray = array();
        //
        // while($row = $stmt->fetch()) {
        //     $videoArray[] = $row;
        // }

        //header('Content-Type: application/json');
        //echo json_encode($myArray);

        //$jsonData = json_encode($myArray);

        // $stmt->free_result();
        // $stmt->close();
        // $mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Welcome</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <style type="text/css">
            body{ font: 14px sans-serif; text-align: center; }
        </style>
    </head>
    <body>
          <div>
            <?php

            echo $jsonData;

            foreach ($jsonData as $videos => $video_a) {
                $id = $video_a['id'];
                $videoUrl = $video_a['videoUrl'];
                $title = $video_a['title'];
                $position = $video_a['position'];

                echo '<p>' . $id . ': ' . $title . '</p>';

            }

            ?>
          </div>
    </body>
</html>
