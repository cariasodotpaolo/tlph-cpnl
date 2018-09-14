<?php

// Include config file
require_once "dbconfig/dbconfig.php";

        $sql = "SELECT id, title, video_url, position FROM project_videos order by position asc";

        $sth = mysqli_query($sql);
        $rows = array();
        while($r = mysqli_fetch_assoc($sth)) {
            $rows[] = $r;
        }
        //echo "<p>video data</p>";
        //echo "<div> " . json_encode($rows) . "</div";
        $jsonData = json_encode($rows);
        $mysqli->close();

?>

<!DOCTYPE html>
<html>

<head lang="en">
  <meta charset="utf-8" />
  <title>Timelpase Philippines</title>
  <!-- <script type="text/javascript" src="../../js/coolc.js"></script> -->
</head>

<body>
  <div class="container">
    <?php echo "<p>" . $jsonData . "</p>"; ?>
  </div>
</body>

</html>
