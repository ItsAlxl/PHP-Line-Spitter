<?php
require('_get_avail_lists.php');

header('Content-type: application/json');
echo json_encode($allAvailLists);
?>