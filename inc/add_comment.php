<div style="margin: 10px">
    <h4>Leave a Comment</h4>
    <form method="post">
        <label>Autor:</label>
        <input type="text" name="autor">
        <label>Comment:</label>
        <input type="text" name="comment">
        <input type="hidden" name="fileId" value="<?= $fileId ?>">
        <input type="submit" value="Send New Comment">
    </form>
</div>

<?php

if (isset($_POST['fileId'])) {
    $fileId      = $_POST['fileId'];
    $commentFile = "./comments/$fileId.csv";

    if (!file_exists($commentFile)) {
        touch($commentFile);
    }

    $fh = fopen($commentFile, 'a');
    fputcsv($fh, [$_POST['autor'], $_POST['comment'], date("d.m.y")], ';');
    fclose($fh);
}