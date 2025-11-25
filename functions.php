<?php

function debug($var) {
    echo "<pre>";
    print_r($var);
    echo "</pre>";
    exit;
}

function validateInput(string $input) {
  $validatedInput =  htmlspecialchars(stripslashes(trim($input)));
  return $validatedInput;
}


function redirect(string $path) {
    header("Location: $path");
    exit;
}