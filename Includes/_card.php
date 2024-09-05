<?php

$storedCards = [];

$recto = glob("Assets/Pictures/*.jpg");
    foreach ($recto as $file){  
        if ($file == "Assets/Pictures/la_plateforme.jpg") continue;
    // echo <img src='Assets/Pictures/$file' width="100" height="100"> &nbsp; ;
    $storedCards[] = $file;
    
$duplicateImg = 2;
    for($recto=1; $recto <$duplicateImg; $recto++){
        if ($file == "Assets/Pictures/la_plateforme.jpg") continue;
    $storedCards[] = $file;
    }
 }
     


