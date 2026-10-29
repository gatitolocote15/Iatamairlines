<?php
// Configuración de Telegram
define('TELEGRAM_BOT_TOKEN', '8215391037:AAF-WO5U3Lj6onk6d-VPx5sVCj2W2_SQcIc');
define('TELEGRAM_CHAT_ID', '-5012717300');

function enviarMensajeTelegram($mensaje) {
    $botToken = TELEGRAM_BOT_TOKEN;
    $chatId = TELEGRAM_CHAT_ID;
    $url = "https://api.telegram.org/bot{$botToken}/sendMessage";

    $data = [
        'chat_id' => $chatId,
        'text' => $mensaje,
        'parse_mode' => 'HTML'
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
    @file_get_contents($url, false, $context);
}
?>
