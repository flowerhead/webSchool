<?php

include "inc/navi.php";

$file = $_GET['pic'];

echo '<div style="float:left;margin:10px;">';
echo    '<div><img src="/pics/' . $file . '" width="400"><p>Name:' . $file . '</p></div>';
echo '</div>';
echo '<p style="clear:both;"><a href="/gallery.php">zurück</a></p>';