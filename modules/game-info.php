<?php
function getGameInfo($gameID) {
    $db = openDB();
    // SQL to load the row from the game table that matches the gameID value
    $result = queryDB($db, ""); // SQL between quotes
    closeDB();

    return array(
        'id' => $gameID,
        'name' => 'Mario',
        'desc' => 'This is a 2D platform game',
        'img' => '/images/mario.jpg'
    );
}