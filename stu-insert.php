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
    $stu_name =  $_POST['stu-name'];
    if (isset($_POST['stu-gender'])) {
        $stu_gender = $_POST['stu-gender'];
    } else {
        $stu_gender = "";
    }
    $stu_address = $_POST['stu-address'];
    $stu_email = $_POST['stu-email'];
    $stu_ph_num = $_POST['stu-ph-number'];
    $stu_dob = $_POST['stu-dob'];
    if (empty($stu_name)) {
        $valid = false;
        echo "Name is required";
    }
    if (empty($stu_gender)) {
        $valid = false;
        echo "Gender is required";
    }
    if (empty($stu_address)) {
        $valid = false;
        echo "Address is required";
    }
    if (empty($stu_email)) {
        $valid = false;
        echo "Email is required";
    }
    if (empty($stu_ph_num)) {
        $valid = false;
        echo "Phone number is required";
    }
    if (empty($stu_dob)) {
        $valid = false;
        echo "Date of birth is required";
    }
    
    if ($valid) {
        $sql = "INSERT INTO students VALUES (null,'$stu_name','$stu_email','$stu_ph_num','$stu_address','$stu_gender','$stu_dob',NOW(),NOW())";
        if ($conn->query($sql) === TRUE) {
            echo "Data Inserted Successfully";
        } else {
            echo "Error creating table: " . $conn->error;
        }
    }
}

$conn->close();