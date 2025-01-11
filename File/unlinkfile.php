<?php
if(file_exists('temp.txt')){
    unlink('temp.txt');
    echo "file deleted";
}
?>