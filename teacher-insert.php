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
    $name =  $_POST['name'];
    if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
    } else {
        $gender = "";
    }
    $address = $_POST['address'];
    $ph_01 =$_POST['ph-number-01'];
    $ph_02 = $_POST['ph-number-02'];
    $email = $_POST['email'];
    $join = $_POST['join-date'];
    if (isset($_POST['status'])) {
        $status = $_POST['status'];
    } else {
        $status = "";
    }
    $nrc = $_POST['nrc-number'];
    if (empty($name)) {
        $valid = false;
        echo "Name is required";
    }
    if (empty($gender)) {
        $valid = false;
        echo "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
    if (empty($address)) {
        $valid = false;
        echo "Address is required";
    }
    if (empty($email)) {
        $valid = false;
        echo "Email is required";
    } else {
        $email = test_input($email);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           echo "Invalid email format";
        }
    }
    if (empty($ph_01)) {
        $valid = false;
        echo "Phone number is required";
    }

    if (preg_match('/^[0-9]+$/', $ph_01)) {
        echo "Valid Phone Number";
    } else {
        echo "Invalid Phone Number";
    }

    if (preg_match('/^[0-9]+$/', $ph_02)) {
        echo "Valid Phone Number";
    } else {
        echo "Invalid Phone Number";
    }
    
    if (empty($join)) {
        $valid = false;
        echo "Join Date is required";
    }
    if (empty($status)) {
        $valid = false;
        echo "Status is required";
    }
    
    if (empty($nrc)) {
        $valid = false;
        echo "nrc is required";
    }

    if ($valid) {
        $sql = "INSERT INTO teachers VALUES (null,'$name','$email','$nrc','$ph_01','$ph_02','$address','$gender','$join','$status',NOW(),NOW())";
        if ($conn->query($sql) === TRUE) {
            echo "Data Inserted Successfully";
        } else {
            echo "Error creating table: " . $conn->error;
        }
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$conn->close();