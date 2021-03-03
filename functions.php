<?php
function getFiles($dir){
    if (is_dir($dir)){
        if ($dh = opendir($dir)){
            while (($file = readdir($dh)) !== false) {
                if (filetype($dir.$file)!== "dir"){
                    echo "fichier : $file type : " . filetype($dir . $file) . "<br/>";
                } else {
                    echo "fichier : <span id='$file' class='folder'>$file</span> type : " . filetype($dir . $file) . "<br/>";
                }
            }
        closedir($dh);
        }
    }
}

if(isset($_POST) && !empty($_POST['path'])){
    $path = $_POST['path'];
    getFiles($path);
    $exPath = explode(" ", $path);
    $backPath = array_splice($exPath, -1, 1);
    print_r($backPath);
}

