<?php

if (
    file_exists('./comments/' . $fileId . '.csv')
    && ($handle = fopen('./comments/' . $fileId . '.csv', "r")) !== FALSE
) {
    echo "<table>";
    echo "<tr>";
    echo "<th>Nr.</th><th>Author</th><th>Comment</th><th>Date</th>";
    echo "</tr>";
    $row = 1;
    while (($data = fgetcsv($handle, 0, ";")) !== FALSE) {
        echo "<tr>";
        echo "<td>$row.</td><td> $data[0]</td><td> $data[1]</td><td> $data[2]</td>";
        echo "</tr>";
        $row++;
    }
    fclose($handle);
    echo "</table>";
} else {
    echo "<p>No Comments yet</p>";
}