<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login/login.php");
    exit;
}

//require_once "dbconfig/dbconfig.php";

        $sql2 = "SELECT id, title, video_url, position FROM project_videos order by position asc";

        $stmt2 = $mysqli->prepare($sql2);

        if($stmt2->execute()) {
            $stmt2->store_result();

            if($stmt2->num_rows > 0){
                $stmt2->bind_result($id, $title, $videoUrl, $position);
            } else {
              echo "No project videos found.";
            }
        } else {
              echo "Oops! Something went wrong. Please try again later.";
        }
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
          <div class="page-header">
              <h3>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h3>
              <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
              <a href="logout.php" class="btn btn-danger">Sign Out Of Dashboard</a>
          </div>
          <div>
              <?php

                  //echo '<p>project-video-data.php</p>';
                  //echo "<p>" . $jsonData . "</p>";

                  while ($stmt2->fetch()) {
                      echo '<p>' . $title . '</p>';
                  }

                  $stmt2->free_result();
                  $stmt2->close();
                  // $mysqli->close();

                  //include '/php/data/project-video-data.php';
                  //include '../coolc-template.php';
              ?>
          </div>
    </body>
</html>
