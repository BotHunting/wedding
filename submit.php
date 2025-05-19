<?php
header('Content-Type: application/json');
$url = 'https://script.google.com/macros/s/AKfycbxD95QTcB68gPvDAzN9BP_1210-mmhdDYm-v9Dlr_0m/dev';

$input = file_get_contents('php://input');
if (!$input) {
    echo json_encode(['error' => 'No input']);
    exit;
}

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $input);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
$result = curl_exec($ch);
$err = curl_error($ch);
curl_close($ch);

if ($err) {
    echo json_encode(['error' => $err]);
} else {
    echo $result;
}