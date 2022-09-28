<?php

$fileId = $_GET['pic'];

echo '<div style="float:left;margin:10px;">';
echo    '<div><img src="/pics/' . $fileId . '.PNG" width="400"><p>Name:' . $fileId . '</p></div>';
echo '</div>';

echo '<div style="padding:10px;">';
echo    '<img src="/pics/techniques/techniques_' . $fileId . '.PNG" width="520px">';
echo '</div>';

echo '<p style="clear:both;"><a href="/gallery">zurück</a></p>';