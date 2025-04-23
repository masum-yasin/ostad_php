<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
echo "This is Post Request";
}

if($_SERVER['REQUEST_METHOD'] == "GET"){
    echo "This is GET Request";
}

if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
    echo "This is DELETE Request";
}
if($_SERVER['REQUEST_METHOD'] == "PUT"){
    echo "This is PUT Request";
}

if($_SERVER['REQUEST_METHOD']== "PATCH")
echo "This is PATCH Request";
?>