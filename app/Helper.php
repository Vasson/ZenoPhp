<?php 

function redirect($url){
    header("Location: $url");
    exit();
}

function view($file_path){
    
    $path = str_replace('\\',DIRECTORY_SEPARATOR,$file_path);
    $path = str_replace('.',DIRECTORY_SEPARATOR,$path);
    $file = APP_ROOT . DIRECTORY_SEPARATOR . $path . ".php";
    if(file_exists($file)){
        return require $file;
    }
    throw new Exception('Page not found', $file);
}