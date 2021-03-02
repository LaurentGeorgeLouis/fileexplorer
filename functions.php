<?php

$dir = "/opt/lampp/htdocs/";

if (is_dir($dir)){
// var_dump("dossier");
    if ($dh = opendir($dir)){
        // var_dump("ouverture");
        while (($file = readdir($dh)) !== false){
            echo "fichier : $file " . "<br/>";
        }
        closedir($dh);
    }
}