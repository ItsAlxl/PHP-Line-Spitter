<?php
$grabLists = array();
if (isset($_GET['n'])) {
    if (is_array($_GET['n'])) {
        $grabLists = $_GET['n'];
    } else {
        array_push($grabLists, $_GET['n']);
    }
} else {
    require('_get_avail_lists.php');
    $grabLists = $allAvailLists;
}

$lines = array();
foreach ($grabLists as $f) {
    $f_lines = file('lists/' . $f . '.txt');

    // Strip off newlines that might hang around even though nobody wants them (\r\n or \n)
    foreach ($f_lines as $flk => $flv) {
        if (substr($flv, -2) == "\r\n") {
            $f_lines[$flk] = substr($flv, 0, strlen($flv) - 2);
        } else if (substr($flv, -1) == "\n") {
            $f_lines[$flk] = substr($flv, 0, strlen($flv) - 1);
        }
    }

    $lines = array_merge($lines, $f_lines);
}

header('Content-type: application/json');
echo json_encode($lines);
?>