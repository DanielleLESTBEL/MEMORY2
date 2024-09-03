<?php

$recto = glob("Assets/Pictures/*.jpg");
foreach ($recto as $file){  
    // echo <img src='Assets/Pictures/$file' width="100" height="100"> &nbsp; ;
    echo "<img src='".$file."'> &nbsp; ";
    // if (file_exists($file)) {
    //     require_once $file;
    }
?>