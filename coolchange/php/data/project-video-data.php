<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login/login.php");
    exit;
}
// Include config file
require_once "dbconfig/dbconfig.php";

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
?>

<!DOCTYPE html>
<html>
    <head lang="en">
      <meta charset="utf-8" />
      <title>Timelpase Philippines</title>
      <!-- <script type="text/javascript" src="../../js/coolc.js"></script> -->
    </head>

    <body>

        <div>
          <?php
              //echo '<p>project-video-data.php</p>';
              //echo "<p>" . $jsonData . "</p>";

              while ($stmt->fetch()) {
                  echo '<p>'. $videoUrl . '</p>';
              }

              $stmt->free_result();
              $stmt->close();
              $mysqli->close();
          ?>
        </div>

    </body>
</html>
