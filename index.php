<?php

// Get Files
require_once 'Bencode.php';
require_once 'Parse.php';

// Get Torrent File
$torInfo = new Parse();
$tor = $torInfo->torr("2.torrent");

echo "<br><pre>".print_r($tor, true)."</pre><br>";