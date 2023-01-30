<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "school";

$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $valid = true;
    $course_name = $_POST['name'];
    $des = $_POST['description'];
    $lesson = $_POST['lessons'];
    $strt_date = $_POST['strt-date'];
    $dur = $_POST['duration'];
    if (empty($course_name)) {
        $valid = false;
        echo "Name is required";
    }
    if (empty($des)) {
        $valid = false;
        echo "Description is required";
    }
    if (empty($lesson)) {
        $valid = false;
        echo "Lesson is required";
    }
    if (empty($strt_date)) {
        $valid = false;
        echo "Start date is required";
    }
    if (empty($dur)) {
        $valid = false;
        echo "Duration is required";
    }

    if($valid){
        $sql = "INSERT INTO courses VALUES (null,'$course_name','$des','$lesson','$strt_date','$dur',NOW(),NOW())";
        if ($conn->query($sql) === TRUE) {
            echo "Data Inserted Successfully";
        } else {
            echo "Error creating table: " . $conn->error;
        }
    }
}

$conn->close();