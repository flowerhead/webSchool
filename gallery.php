<?php

include "inc/navi.php";

$dir = opendir('pics');

while ($file = readdir($dir)) {
    if (!is_file('pics/' . $file)) {
        continue;
    }

    echo '<div style="float:left; margin:10px;"><a href="/details.php/?pic=' . $file . '"><img src="pics/' . $file . '" height="250"></a></div>';
}

closedir($dir);
