<?php
include_once('connect.php');

if (isset($_POST['submit'])) {
    $valid = true;
    $courseName = $_POST['name'];
    $description = $_POST['description'];
    $totalLesson = $_POST['lessons'];
    $startDate = $_POST['strt-date'];
    $duration = $_POST['duration'];
    if (empty($courseName)) {
        $valid = false;
        echo "Name is required";
    }
    if (empty($description)) {
        $valid = false;
        echo "Description is required";
    }
    if (empty($totalLesson)) {
        $valid = false;
        echo "Lesson is required";
    }
    if (empty($startDate)) {
        $valid = false;
        echo "Start date is required";
    }

    if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $startDate)) {
        $valid = false;
        echo "Invalid Date Format";
    }
    
    if (empty($duration)) {
        $valid = false;
        echo "Duration is required";
    }

    if($valid){
        $sql = "INSERT INTO courses VALUES (null,'$courseName','$description','$totalLesson','$startDate','$duration',NOW(),NOW())";
        if ($con->query($sql) === TRUE) {
            echo "Data Inserted Successfully";
        } else {
            echo "Error creating table: " . $con->error;
        }
    }
}

$con->close();