<?php

$dir = opendir('pics');

while ($file = readdir($dir)) {
    if (!is_file('pics/' . $file)) {
        continue;
    }

    $filename = explode('.', $file)[0];
    echo '<div style="float:left; margin:10px;"><a href="/details/' . $filename . '"><img src="pics/' . $file . '" height="250"></a></div>';
}

closedir($dir);
