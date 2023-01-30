<?php
include_once ('connect.php');
if (isset($_POST['submit'])) {
    $valid = true;
    $name =  $_POST['name'];
    if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
    } else {
        $gender = "";
    }
    $address = $_POST['address'];
    $phone01 = $_POST['ph-number-01'];
    $phone02 = $_POST['ph-number-02'];
    $email = $_POST['email'];
    $joinDate = $_POST['join-date'];
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
    } 

    if($gender == "male" || $gender == "female" ||$gender == "other" ){
        $valid = True;
    }else{
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
    } else {
        $email = dataInput($email);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
        }
    }
    if (empty($phone01)) {
        $valid = false;
        echo "Phone number is required";
    }

    if (!preg_match('/^[0-9]+$/', $phone01)) {
        $valid = false;
        echo "Invalid Phone Number";
    }

    if (empty($phone02)) {
        $valid = false;
        echo "Phone number is required";
    }

    if (!preg_match('/^[0-9]+$/', $phone02)) {
        $valid = false;
        echo "Invalid Phone Number";
    }

    if (empty($joinDate)) {
        $valid = false;
        echo "Join Date is required";
    }
    
    if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$joinDate)) {
        $valid = false;
        echo "Invalid Date Format";
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
        $sql = "INSERT INTO teachers VALUES (null,'$name','$email','$nrc','$phone01','$phone02','$address','$gender','$joinDate','$status',NOW(),NOW())";
        if ($con->query($sql) === TRUE) {
            echo "Data Inserted Successfully";
        } else {
            echo "Error creating table: " . $con->error;
        }
    }
}

$con->close();