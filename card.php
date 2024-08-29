<?php

$cards= array();

$recto = glob("Assets/Pictures/*.jpg");
foreach ($glob as $file) {  
    echo <img src='".$file."'> &nbsp; ;
    // if (file_exists($file)) {
    //     require_once $file;
    }
?>