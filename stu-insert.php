<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "school";

$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stu_name =  $_REQUEST['stu-name'];
$stu_gender =  $_REQUEST['stu-gender'];
$stu_address = $_REQUEST['stu-address'];
$stu_email = $_REQUEST['stu-email'];
$stu_ph_num = $_REQUEST['stu-ph-number'];
$stu_dob = $_REQUEST['stu-dob'];

$sql = "INSERT INTO students VALUES (null,'$stu_name','$stu_email','$stu_ph_num','$stu_address','$stu_gender','$stu_dob',NOW(),NOW())";

if ($conn->query($sql) === TRUE) {
    echo "Data Inserted Successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();