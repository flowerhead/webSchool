<?php

include "inc/navi.php";

if ($_SERVER['REQUEST_URI'] === '/') {
    $page = 'home';
} else {
    $path = explode( "/", trim($_SERVER['REQUEST_URI'], "/"));
    $page = $path[0];

    if (isset($path[1])) {
        $fileId      = $path[1];
        $_GET['pic'] = $fileId;
    }
}

if (!file_exists('inc/' . $page . '.php')) {
    header("HTTP/1.0 404 Not Found");
    $page = '404';
}

include('inc/' . $page . '.php');