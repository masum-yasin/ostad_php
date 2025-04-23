<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $plainText = file_get_contents("php://input");
    $plainArray = json_decode($plainText, true);
    $username = $plainArray['username'];
    session_start();
    $_SESSION['username'] =$username;
    echo "success";
}

if($_SERVER["REQUEST_METHOD"]  == "GET"){
    session_start();
   $readSession= $_SESSION['username'];
   echo $readSession;
}

if ($_SERVER["REQUEST_METHOD"] === "DELETE") {
    session_start(); // Start the session
    session_destroy(); // Destroy the session
    echo "Session Deleted"; 
}

?>