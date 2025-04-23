<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $plainText = file_get_contents("php://input");
    $plainArray = json_decode($plainText, true);
    $username = $plainArray["username"];
    setcookie("username", $username,["expires" => time() + 7200]);
    echo "successfull set Cookies";
}

if($_SERVER["REQUEST_METHOD"]== "GET"){
  echo  $_COOKIE["username"];
}

if($_SERVER["REQUEST_METHOD"] == "DELETE"){
    setcookie("username", "", ["expires" => time() -3600]);
    echo "successfully Delete Cookies";
}


?>