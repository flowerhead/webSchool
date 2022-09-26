<?php

$dir = opendir('pics');

while ($file = readdir($dir)) {
    if (!is_file('pics/' . $file)) {
        continue;
    }
    echo '<div style="float:left; margin:10px;"><img src="pics/' . $file . '" height="250"></div>';
}

closedir($dir);
