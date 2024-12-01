<?php
// Define the Github repository, file path, and branch
$repo = 'CFG-NINJA/audits';
$file = '/pass.json';
$branch = 'main';

// Build the Github API URL
$url = "https://api.github.com/repos/$repo/contents/$file?ref=$branch";

// Authenticate with Github using a personal access token
$token = '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';
$headers = array('Authorization: token ' . $token);

// Make a GET request to the Github API
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Parse the JSON data
$data = json_decode($response);

// Format the data into an API response
$response = array(
    'status' => 'success',
    'data' => $data,
);

// Output the API response
header('Content-Type: application/json');
http_response_code(200);
echo json_encode($response);
?>