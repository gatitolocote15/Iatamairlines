<?php
header('Content-Type: application/json');

$botToken = '8215391037:AAF-WO5U3Lj6onk6d-VPx5sVCj2W2_SQcIc';
$chatId = '-5012717300';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : '';

    if (!empty($mensaje)) {
        $url = "https://api.telegram.org/bot{$botToken}/sendMessage";

        $data = [
            'chat_id' => $chatId,
            'text' => $mensaje
        ];

        $options = [
            'http' => [
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data),
                'timeout' => 5
            ]
        ];

        $context = stream_context_create($options);
        $result = @file_get_contents($url, false, $context);

        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => 'No message']);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid request']);
}
?>
