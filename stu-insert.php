<?php
include_once('connect.php');

if (isset($_POST['submit'])) {
    $valid = true;
    $name =  $_POST['stu-name'];
    if (isset($_POST['stu-gender'])) {
        $gender = $_POST['stu-gender'];
    } else {
        $gender = "";
    }
    $address = $_POST['stu-address'];
    $email = $_POST['stu-email'];
    $phone = $_POST['stu-ph-number'];
    $dob = $_POST['stu-dob'];
    if (empty($name)) {
        $valid = false;
        echo "Name is required";
    }
    if (empty($gender)) {
        $valid = false;
        echo "Gender is required";
    }

    if ($gender == "male" || $gender == "female" || $gender == "other") {
        $valid = True;
    } else {
        $valid = false;
        echo "Gender is not valid";
    }
    
    if (empty($address)) {
        $valid = false;
        echo "Address is required";
    }
    if (empty($email)) {
        $valid = false;
        echo "Email is required";
    }
    if (empty($phone)) {
        $valid = false;
        echo "Phone number is required";
    }

    if (!preg_match('/^[0-9]+$/', $phone)) {
        $valid = false;
        echo "Invalid Phone Number";
    }
    
    if (empty($dob)) {
        $valid = false;
        echo "Date of birth is required";
    }

    if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $dob)) {
        $valid = false;
        echo "Invalid Date Format";
    }
    
    if ($valid) {
        $sql = "INSERT INTO students VALUES (null,'$name','$email','$phone','$address','$gender','$dob',NOW(),NOW())";
        if ($con->query($sql) === TRUE) {
            echo "Data Inserted Successfully";
        } else {
            echo "Error creating table: " . $con->error;
        }
    }
}

$con->close();