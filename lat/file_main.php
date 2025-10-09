<?php
header('Access-Control-Allow-Origin: *');

$token = '';
if (isset($_GET['tok'])) {
    $token = $_GET['tok'];
} else if (isset($_POST['tok'])) {
    $token = $_POST['tok'];
} else {
    http_response_code(404);
    die();
}

require_once($_SERVER['DOCUMENT_ROOT'] . '/file_db.php');

$owner = '';
$con = Database::getConnection();
$result = mysqli_query($con, "SELECT * FROM users WHERE cod_unico =  '" . $token . "'");
if ($result && ($datos = mysqli_fetch_assoc($result))) {
    $owner = $datos['id'];
}
if (!$owner) {
    http_response_code(404);
    die();
}

$ip = $_SERVER['REMOTE_ADDR'];
$result = mysqli_query($con, "SELECT * FROM ban_ip WHERE ip = '" . $ip . "'");
if (mysqli_num_rows($result) > 0) {
    http_response_code(404);
    die();
}

setlocale(LC_TIME, 'spanish');
date_default_timezone_set('America/Bogota');
require_once($_SERVER['DOCUMENT_ROOT'] . '/file_functions.php');