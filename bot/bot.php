<?php

function send_message($chat_id, $text) {
    $token = "8145671626:AAE3dSsTcS0uB2wsQBRyt0MZQ4PldjgiOHg"; 
    $url = "https://api.telegram.org/bot{$token}/sendMessage";

    $data = [
        'chat_id' => $chat_id,
        'text' => $text,
    ];

    $options = [
        'http' => [
            'method'  => 'POST',
            'header'  => 'Content-type: application/json',
            'content' => json_encode($data),
        ],
    ];

    $context = stream_context_create($options);
    $response = file_get_contents($url, false, $context);

    if ($response === false) {
        echo "Ошибка при отправке сообщения: " . error_get_last()['message'];
    } else {
        $response_data = json_decode($response, true);
        if ($response_data['ok'] === true) {
            echo "Сообщение отправлено успешно";
            header("Location: ../index.html");
            exit; 
        } else {
            echo "Ошибка при отправке сообщения: " . $response_data['description'];
        }
    }
}

$chat_id = "5636271256"; 
$message = "Привет из PHP!";
send_message($chat_id, $message);

?>