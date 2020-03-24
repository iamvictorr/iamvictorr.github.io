<?php
function getTimes($gameID) {
    $db = openDB();
    // SQL to get the top 10 times sorted by time for the game ID
    $result = queryDB($db, ""); // SQL between quotes
    closeDB();

    /*$position = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        addTime($position, $row['pName'], $row['pTime']);
        $position++;
    }*/
}

function addTime($pos, $pName, $pTime) {
    echo <<< EOL
    <tr>
        <td>$pos</td>
        <td>$pName</td>
        <td>$pTime</td>
    </tr>
EOL;
}
