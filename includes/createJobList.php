<?php 
    require_once "dbconnect.php";
    $getListOfTasksQuery = "SELECT *
                        FROM tasks
                        LIMIT 2";
    $result = $conn->query($getListOfTasksQuery);
    while ($taskInfo = $result->fetch_assoc()){
         require "createJobBox.php";
    }
   $conn->close();


?>