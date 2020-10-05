<?php
$allAvailLists = array();
foreach (glob("lists/*.txt") as $f) {
    array_push($allAvailLists, basename($f, ".txt"));
}
?>