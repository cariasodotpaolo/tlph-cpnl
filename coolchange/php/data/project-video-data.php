<?php

// Include config file
require_once "dbconfig/dbconfig.php";

        $sql = "SELECT id, title, video_url, position FROM project_videos order by position asc";

        $sth = mysqli_query($sql);
        $rows = array();
        while($r = mysqli_fetch_assoc($sth)) {
            $rows[] = $r;
        }
        echo "<p>video data</p>";
        echo "<div> " . json_encode($rows) . "</div";

        $mysqli->close();

?>
