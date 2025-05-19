<?php
header('Content-Type: application/json');
$data = file_get_contents('https://script.google.com/macros/s/AKfycbxD95QTcB68gPvDAzN9BP_1210-mmhdDYm-v9Dlr_0m/dev');
echo $data;
