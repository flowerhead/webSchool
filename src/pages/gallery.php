<?php

$dir = opendir('pics/thumbnails');

while ($file = readdir($dir)) {
    if (!is_file('pics/thumbnails/' . $file)) {
        continue;
    }

    $filename = explode('.', $file)[0];
    echo '<div style="float:left; margin:10px;"><a href="/details/' . strtoupper($filename) . '"><img src="pics/thumbnails/' . $file . '" height="250"></a></div>';
}

closedir($dir);
