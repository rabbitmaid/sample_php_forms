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
    $gender = $_POST['gender'];
    $phoneNumber = trim($_POST['phoneNumber']);
    $address = validateInput($_POST['address']);
    $placeOfBirth = validateInput($_POST['placeOfBirth']);
    $dateOfBirth = trim($_POST['dateOfBirth']);
    $userId = $_POST['userId'];


    // Make sure the required fields have input
    if(empty($fullName) || empty($emailAddress) || empty($gender) || empty($phoneNumber) ) {
         $_SESSION['error'] = "One or more fields are empty";
         redirect("./index.php");
    }

    // save the data in the database

    try{

        // sql query
        $sql = "UPDATE users SET name = ?, email = ?, gender = ?, phone_number = ?, address = ?, date_of_birth = ?, place_of_birth = ? WHERE id = ?";

        $statement = $connection->prepare($sql);

        $statement->bind_param("sssssssi", $fullName, $emailAddress, $gender, $phoneNumber, $address, $dateOfBirth, $placeOfBirth, $userId);

        $execution = $statement->execute();

        // check if execution was successful
        if($execution) {
            $_SESSION['success'] = "Record updated";
            redirect("./users.php");
        }
        else {
            $_SESSION['error'] = "Record not updated";
            redirect("./users.php");
        }

    }

    catch(\Exception $e) {
      
        if($e->getCode() === 1062) {
            $_SESSION['error'] = "The email address already exists";
            redirect("./users.php");
        }else {

            debug($e);

            $_SESSION['error'] = "Unexpected error please try again!";
            redirect("./users.php");
        }
    }


}




