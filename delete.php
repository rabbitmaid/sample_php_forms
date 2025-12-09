<?php

require_once __DIR__ . "/functions.php";
require_once __DIR__ . "/database.php";

session_start();

if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $_SESSION['error'] = "Invalid Request Method";
    redirect("./index.php");
}
else {

    $userId = $_POST['userId'];

    try{

        // sql query
        $sql = "DELETE FROM users WHERE id = ?";

        $statement = $connection->prepare($sql);
        $statement->bind_param("i", $userId);
        $execution = $statement->execute();

        // check if execution was successful
        if($execution) {
            $_SESSION['success'] = "Record deleted";
            redirect("./users.php");
        }
        else {
            $_SESSION['error'] = "Record not deleted";
            redirect("./users.php");
        }

    }

    catch(\Exception $e) {
    
        $_SESSION['error'] = "Unexpected error please try again!";
        redirect("./users.php");
        
    }


}




