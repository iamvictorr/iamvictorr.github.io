<?php
function addGameBox($gID, $gName, $gImg) {
    echo <<< EOL
    <a href="/game.php?id=$gID">
        <img src="$gImg" title="$gName" width="200px">
    </a>
EOL;
}
