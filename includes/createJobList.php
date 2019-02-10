<?php 
require_once "dbconnect.php";
$getListOfJobsQuery = "SELECT *
                       FROM tasks
                       LIMIT 2";
require "createJobBox.php"


?>