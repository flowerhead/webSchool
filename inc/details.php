<?php

$fileId = $_GET['pic'];

echo '<div style="float:left;margin:10px;">';
echo    '<div><img src="/pics/' . $fileId . '.PNG" width="400">';
echo        '<p>Name:' . $fileId . '</p></div>';
echo        '<p><a href="/gallery">zurück</a></p>';
echo '</div>';

echo '<div style="padding:10px;">';
echo    '<img src="/pics/techniques/techniques_' . $fileId . '.PNG" width="520px">';
echo    '<h3>User Comments</h3>';
include './inc/add_comment.php';
include './inc/show_comments.php';
echo '</div>';