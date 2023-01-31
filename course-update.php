<?php
include_once('connect.php');

$courseName = dataInput($_POST['name']);
$description = dataInput($_POST['description']);
$totalLesson = dataInput($_POST['lessons']);
$startDate = dataInput($_POST['strt-date']);
$duration = dataInput($_POST['duration']);

$sql = "update courses set course_name='$courseName', description='$description', total_lessons='$totalLesson', start_date='$startDate', course_duration='$duration' where course_id='$course_id'";

if ($conn->query($sql) === TRUE) {
	echo "Records updated: ".$student_id."-".$name."-".$age."-".$gender;
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();