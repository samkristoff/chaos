<?php

$db = new SQLite3('/home/xbian/.xbmc/userdata/Database/MyVideos75.db');

$results = $db->query('SELECT C00 FROM tvshow');

while ($row = $results->fetchArray()) {
    var_dump($row);
}

?>
