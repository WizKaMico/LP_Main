<?php
// chat.php

header("Content-Type: application/json");


include('../connection/connection.php');

class webCont extends DBController
{

    function insertTalkToUs($name, $email, $message, $phone)
    {
        $query = "INSERT INTO lp_talkToUs (name, email, phone, message) VALUES (?,?,?,?)";
        
        $params = array(
            array("param_type" => "s", "param_value" => $name),
            array("param_type" => "s", "param_value" => $email),
            array("param_type" => "s", "param_value" => $phone),
            array("param_type" => "s", "param_value" => $message)
        );
    
        $this->insertDB($query, $params);
    }
}

$portCont = new webCont();


// Check for valid JSON input
$input = file_get_contents("php://input");
$data = json_decode($input, true);

if (!$data || !isset($data['name'], $data['email'], $data['message'], $data['phone'])) {
    http_response_code(400);
    echo json_encode(["error" => "Missing required fields"]);
    exit;
}


// Sanitize input
$name = htmlspecialchars(trim($data["name"]));
$email = htmlspecialchars(trim($data["email"]));
$message = htmlspecialchars(trim($data["message"]));
$phone = htmlspecialchars(trim($data["phone"]));


$portCont->insertTalkToUs($name, $email, $message, $phone);

// Use your actual OpenRouter API key here
$apiKey = "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"; // ← Replace this
$url = "https://openrouter.ai/api/v1/chat/completions";

// Prepare the request payload
$payload = [
    "model" => "deepseek/deepseek-r1-zero:free",
    "messages" => [
        [
            "role" => "user",
            "content" => "User Info:\nName: $name\nEmail: $email\Phone: $phone\nMessage: $message"
        ]
    ]
];

// Set up cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json",
    "Authorization: Bearer $apiKey"
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));

// Execute
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if (curl_errno($ch)) {
    echo json_encode(["error" => "cURL error: " . curl_error($ch)]);
    curl_close($ch);
    exit;
}

curl_close($ch);

// Handle errors from OpenRouter
if ($httpCode !== 200) {
    echo json_encode(["error" => "API returned HTTP $httpCode", "response" => $response]);
    exit;
}

// Return response
echo $response;