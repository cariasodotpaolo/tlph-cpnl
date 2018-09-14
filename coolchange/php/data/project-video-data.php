<?php

// Include config file
require_once "dbconfig/dbconfig.php";

        $sql = "SELECT id, title, video_url, postion FROM project_videos order by position asc";

        $sth = mysqli_query($sql);
        $rows = array();
        while($r = mysqli_fetch_assoc($sth)) {
            $rows[] = $r;
        }

        print json_encode($rows);

        $mysqli->close();

?>
