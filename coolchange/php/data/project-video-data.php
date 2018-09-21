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

            header('Content-Type: application/json');
            echo json_encode($myArray);

            //$jsonData = json_encode($myArray);
        }

        $result->close();
        $mysqli->close();

?>
