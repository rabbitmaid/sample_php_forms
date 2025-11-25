<?php

require_once __DIR__ . "/functions.php";
require_once __DIR__ . "/database.php";

session_start();

if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $_SESSION['error'] = "Invalid Request Method";
    redirect("./index.php");
}
else {

    $fullName = validateInput($_POST['fullName']);
    $emailAddress = validateInput($_POST['email']);
    $password = trim($_POST['password']);
    $gender = $_POST['gender'];
    $phoneNumber = trim($_POST['phoneNumber']);
    $address = validateInput($_POST['address']);
    $placeOfBirth = validateInput($_POST['placeOfBirth']);
    $dateOfBirth = trim($_POST['dateOfBirth']);


    // Make sure the required fields have input
    if(empty($fullName) || empty($emailAddress) || empty($password) || empty($gender) || empty($phoneNumber) ) {
         $_SESSION['error'] = "One or more fields are empty";
         redirect("./index.php");
    }


    // hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // save the data in the database

    // sql query
    $sql = "INSERT INTO users(name, email, gender, password, phone_number, address, date_of_birth, place_of_birth) VALUES('$fullName', '$emailAddress', '$gender', '$hashedPassword', '$phoneNumber', '$address', '$dateOfBirth', '$placeOfBirth')";

    $result = $connection->query($sql); // execute the query

    // check if execution was successful
    if($result) {
        $_SESSION['success'] = "Record created";
        redirect("./index.php");
    }
    else {
        $_SESSION['error'] = "Record not created";
        redirect("./index.php");
    }



}




