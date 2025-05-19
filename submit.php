<?php
header('Content-Type: application/json');

// Enable error reporting for development
ini_set('display_errors', 0);
error_reporting(E_ALL);

// Google Apps Script URL
const SCRIPT_URL = 'https://script.google.com/macros/s/AKfycbx5nyaLzsMXjGi75zWaPCsPdxqg3CLPoV4XlV0Zxc2aKG8FvE3sh9crOwnMXrlyoswJ/exec';

function sendResponse($status, $message, $code = 200) {
    http_response_code($code);
    die(json_encode([
        'status' => $status,
        'message' => $message
    ]));
}

// Validate request method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    sendResponse('error', 'Method not allowed', 405);
}

try {
    // Validate required fields
    $required = ['name', 'attendance', 'guests'];
    $data = [];
    
    foreach ($required as $field) {
        if (empty($_POST[$field])) {
            sendResponse('error', "Field '$field' is required", 400);
        }
        $data[$field] = strip_tags(trim($_POST[$field]));
    }
    
    // Add optional message field
    $data['message'] = isset($_POST['message']) ? strip_tags(trim($_POST['message'])) : '';
    
    // Add timestamp
    $data['timestamp'] = date('Y-m-d H:i:s');
    
    // Setup cURL request
    $ch = curl_init(SCRIPT_URL);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query($data),
        CURLOPT_TIMEOUT => 10
    ]);
    
    $response = curl_exec($ch);
    
    if (curl_errno($ch)) {
        throw new Exception(curl_error($ch));
    }
    
    curl_close($ch);
    
    sendResponse('success', 'RSVP berhasil dikirim');
    
} catch (Exception $e) {
    error_log("RSVP Error: " . $e->getMessage());
    sendResponse('error', 'Terjadi kesalahan, silakan coba lagi', 500);
}
?>
