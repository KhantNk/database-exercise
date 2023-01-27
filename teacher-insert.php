<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "school";

$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name =  $_REQUEST['name'];
$gender =  $_REQUEST['gender'];
$address = $_REQUEST['address'];
$ph_01 = $_REQUEST['ph-number-01'];
$ph_02 = $_REQUEST['ph-number-02'];
$email = $_REQUEST['email'];
$join = $_REQUEST['join-date'];
$status = $_REQUEST['status'];
$nrc = $_REQUEST['nrc-number'];

$sql = "INSERT INTO teachers VALUES (null,'$name','$email','$nrc','$ph_01','$ph_02','$address','$gender','$join','$status',NOW(),NOW())";

if ($conn->query($sql) === TRUE) {
    echo "Data Inserted Successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();