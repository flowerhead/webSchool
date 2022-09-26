<?php

require_once "navi.php";

if ($_SERVER['REQUEST_URI'] === '/') {
    $file = 'home';
} else {
    $path = explode( "/", trim($_SERVER['REQUEST_URI'], "/"));
    $file = $path[0];

    if (isset($path[1])) {
        $id = $path[1];
        $_GET['pic'] = $id;
    }
}

if (!file_exists($file . '.php')) {
    header("HTTP/1.0 404 Not Found");
    echo "not found 404";
    die;
}

include($file . '.php');


