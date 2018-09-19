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

        $stmt = $mysqli->prepare($sql);

        if($stmt->execute()) {
            $stmt->store_result();

            if($stmt->num_rows > 0){
                $stmt->bind_result($id, $title, $videoUrl, $position);
            } else {
              echo "No project videos found.";
            }
        } else {
              echo "Oops! Something went wrong. Please try again later.";
        }

        $myArray = array();
        // while ($stmt->fetch()) {
        //     echo '<p>' . $title . '</p>';
        // }

        while($row = $stmt->fetch_array(MYSQL_ASSOC)) {
            $myArray[] = $row;
        }
        print json_encode($myArray);

        $stmt->free_result();
        $stmt->close();
        $mysqli->close();
?>
