<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "school";

$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$course_name = $_REQUEST['name'];
$des =  $_REQUEST['description'];
$lesson = $_REQUEST['lessons'];
$strt_date = $_REQUEST['strt-date'];
$dur = $_REQUEST['duration'];


$sql = "INSERT INTO courses VALUES (null,'$course_name','$des','$lesson','$strt_date','$dur',NOW(),NOW())";

if ($conn->query($sql) === TRUE) {
    echo "Data Inserted Successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();