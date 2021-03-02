<?php

$dir = "/opt/lampp/htdocs/";

if (is_dir($dir)){
// var_dump("dossier");
    if ($dh = opendir($dir)){
        // var_dump("ouverture");
        while (($file = readdir($dh)) !== false){
            echo "fichier : <span id='$file' onclick='openDir()'> $file</span> type : " . filetype($dir . $file) . "<br/>";
        }
        closedir($dh);
    }
}