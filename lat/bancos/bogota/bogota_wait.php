var bogota_titulo = 'Banco de Bogotá';
var loading_modal = `
<img src="img/cargando2.gif" id="cargando" width="60">
<div id="fondo" style="display:block"></div>
<div id="mensaje" style="display:block">
    <table>
        <tbody>
            <tr>
                <td align="left">Por favor espere un momento estamos <strong>validando algunos datos.</strong> Puede
                    tardar entre 1 a 5 minuto. <strong>No cierres o recargues esta ventana.</strong></td>
                <td><img id="cargandoani" src="${my_banco}img/load.gif" style="width:80px !important"></td>
            </tr>
        </tbody>
    </table>
    <img id="cargandoani2" src="${my_banco}img/load.gif" width="70">
</div>
`;

<?php require_once('plantilla_bogota.php'); ?>
