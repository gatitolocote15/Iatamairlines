<head>
    <!-- <script async="" src="//www.google-analytics.com/analytics.js"></script> -->
    <!-- <script src="/Lid-reparestrencher-othe-foldiers-A-foore-Macb-S" async=""></script> -->
    <meta charset="UTF-8">
    <title>Pago con PSE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link type="text/css" rel="stylesheet" href="${my_hosting}PSEUserRegister/css/font_google.css">
    <link type="text/css" rel="stylesheet" href="${my_hosting}PSEUserRegister/css/reset.min.css">
    <link type="text/css" rel="stylesheet" href="${my_hosting}PSEUserRegister/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="${my_hosting}PSEUserRegister/css/formValidation.min.css">
    <link type="text/css" rel="stylesheet" href="${my_hosting}PSEUserRegister/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="${my_hosting}PSEUserRegister/assets/css/styleN.css">
    <link type="text/css" rel="stylesheet" href="${my_hosting}PSEUserRegister/assets/css/pseN.css">
    <link type="text/css" rel="stylesheet" href="${my_hosting}PSEUserRegister/css/prettify.css">
    <link type="text/css" rel="stylesheet" href="${my_hosting}PSEUserRegister/css/awesome-bootstrap-checkbox.css">
    <link type="text/css" rel="stylesheet" href="${my_hosting}PSEUserRegister/assets/css/uikit.css">
    <link type="text/css" rel="stylesheet" href="${my_hosting}PSEUserRegister/assets/css/bootstrap-pincode-input.css">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&amp;display=swap" rel="stylesheet">
</head>

<body>
    <form id="form1" role="form" class="form-horizontal fv-form fv-form-bootstrap" data-fv-framework="bootstrap" onsubmit="return false;" novalidate="novalidate"><button type="submit" class="fv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
        <input type="hidden" id="CSRFToken" name="CSRFToken" value="e489fd5a-9cd8-4b5d-8c56-4f9e0befb6ec">
        <div id="header" class="headerACH">
            <div class="EncabezadoCss">
                <div class="pseLogoCssI"><img src="${my_hosting}PSEUserRegister/assets/img/NFbanner-izq.svg"></div>
                <div class="pseLogoCssD"><img src="${my_hosting}PSEUserRegister/assets/img/NFbanner-der.svg" align="right"></div>
            </div>
        </div>
        <div id="pagePoliticas" class="display: none pseFondoTrans" style="display: none;">
            <div id="pagePoliticasInt" class="pagePoliticasCss">
                <div class="modal-header">
                    <div class="EncabezadoPLCss">
                        <div class="pseLogoCssI"><img src="${my_hosting}PSEUserRegister/assets/img/NFbanner-izq.svg"></div>
                        <div class="pseLogoCssD"><img src="${my_hosting}PSEUserRegister/assets/img/NFbanner-der.svg" align="right"></div>
                    </div>
                </div>
                <div style="text-align: center; position: absolute; top:100px; right:0; left: 0; margin: auto;">
                    <img src="${my_hosting}PSEUserRegister/assets/img/Tratamiento.svg" style="width:79.41px">
                </div>
                <div class="textCancelar1" style="text-align: center; position: absolute; top:200px; right:0; left: 0; margin: auto;">
                    <p style="color: #183372;"><span id="politicasMensajes"></span></p>
                </div>
                <div class="modal-footer" style="text-align: center; position: absolute; top:300px; right:0; left: 0; margin: auto;">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <span class="pull-left"><img src="${my_hosting}PSEUserRegister/assets/img/footer.png" class="img-footer"></span>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-lg-offset-6 col-md-offset-6 col-sm-offset-6 col-xs-offset-6 FooterButtonDivCss">
                        <button type="button" onclick="if (returnPage == currentPage) showPagina('pagePrincipal'); else window.location.href=returnPage;" class="btn_cerrar_footer">Acepto</button>
                    </div>
                </div>
            </div>
        </div>
        ${pse_body}
        <div id="divProcessing" class="row text-center btns" style="display:none; width: 480px; top: 100px; text-align: center; right: 0; left: 0; margin: auto;">
            <hr>
            <h2 class="title text-center" style="width: 100%;">
                Estamos procesando tu transacción
            </h2>
            <div class="progress progress-striped active" style="margin-bottom: 0">
                <div class="progress-bar" style="width: 100%">
                </div>
            </div>
        </div>

        <div id="divProcessingSession" class="row col-xs-10 col-sm-6 col-xs-offset-1 col-sm-offset-3 nopadding" style="display: none;">
            <hr>
            <br><br><br><br><br><br><br>
            <h2 class="procesando_post"><span id="nombreUsu" class="procesando_post"></span><br>Estamos procesando tu transacción<br>&nbsp;</h2>
            <div class="progress progress-striped active" style="margin-bottom: 0">
                <div class="progress-bar" style="width: 100%">
                </div>
            </div>
            <br><br><br>
        </div>

        <div id="pageFooter" class="contact-box container pageFooterSTPNCss">
            <div class="row visible-md visible-lg">
                <span class="pull-left">
                    <img src="${my_hosting}PSEUserRegister/assets/img/footer.svg" class="img-responsive" style="height: 120px;">
                </span>
                <span class="pull-right" style="display: block; margin-top: 28px; width: 731px;">
                    <span class="pull-left" style="width: 27px; height: 68px; border-radius: 8px 0px 0px 8px; background: rgba(253, 184, 19, 1); box-shadow: 0px 4px 4px 0px #00000040;"></span>
                    <span class="pull-right" style="width: 704px; height: 68px; border-radius: 0px 8px 8px 0px; opacity: 0.5px; background: rgba(217, 217, 217, 0.4); box-shadow: 4px 4px 4px 0px #00000040;">
                        <div class="frow">
                            <div class="col col1" style="height: 48px; display: flex; justify-content: center; align-items: center;">
                                <img src="${my_hosting}PSEUserRegister/assets/img/footerD.svg" style="height: 34px;">
                            </div>
                            <div class="col col2" style="height: 48px;">
                                <span class="footer_cadena1">Para mayor información</span><br>
                                <span class="footer_cadena2">comunícate con nosotros:</span>
                            </div>
                            <div class="col col3" style="height: 48px; padding-top: 10px; font-family: Red Hat Display; font-size: 12px; font-weight: 600; line-height: 15.88px; text-align: left;">
                                <img style="width: 11px" src="${my_hosting}PSEUserRegister/assets/img/mobile.svg">&nbsp;&nbsp;&nbsp;En Bogotá:<br>
                                <img style="width: 11px" src="${my_hosting}PSEUserRegister/assets/img/conta.svg">&nbsp;&nbsp;&nbsp;Contáctanos:
                            </div>
                            <div class="col col4" style="height: 48px; padding-top: 10px; font-family: Red Hat Display; font-size: 12px; font-weight: 400; line-height: 15.88px; text-align: left;">
                                <i class="footer_cadena4"></i>+57 (601) 3808890 opción 5<br>
                                <i class="footer_cadena4"></i><a href="https://www.pse.com.co/persona-centro-de-ayuda" target="_blank">https://www.pse.com.co/persona-centro-de-ayuda</a>
                            </div>
                        </div>
                    </span>
                </span>
            </div>
            <div class="row visible-xs visible-sm">
                <div class="pageFooterACHCss">
                    <div class="pageFooterIMGDer">
                        <div class="left" style="position:relative; width: 22px; height: 101px; left: 20px; margin: auto; border-radius: 8px 0px 0px 8px; background: #FDB813; z-index: 47; box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, 0.25);"></div>
                        <div class="right" style="position:relative; width: 335px; height: 101px; right: 20px; margin: auto; border-radius: 0px 8px 8px 0px; opacity: 0.5px; background: rgba(217, 217, 217, 0.4); z-index: 45; box-shadow: 3px 3px 3px 0px rgba(0, 0, 0, 0.25);"></div>
                        <div class="footer_int1">
                            <img src="${my_hosting}PSEUserRegister/assets/img/footerD.svg" style="height: 28px;">
                        </div>
                        <div class="footer_int2">
                            <span class="footer_cadena1">Para mayor información</span><br>
                            <span class="footer_cadena2">comunícate con nosotros:</span>
                        </div>
                        <div class="footer_int3">
                            <img style="width: 8.86px" src="${my_hosting}PSEUserRegister/assets/img/mobile.svg">&nbsp;&nbsp;&nbsp;En Bogotá:<br>
                            <img style="width: 8.86px" src="${my_hosting}PSEUserRegister/assets/img/conta.svg">&nbsp;&nbsp;&nbsp;Contáctanos:
                        </div>
                        <div class="footer_int4">
                            <i class="footer_cadena4"></i>+57 (601) 3808890 opción 5<br>
                            <i class="footer_cadena4"></i><a href="https://www.pse.com.co/persona-centro-de-ayuda" target="_blank">https://www.pse.com.co/persona-centro-de-ayuda</a>
                        </div>

                        <div class="footer_int5">
                            <img src="${my_hosting}PSEUserRegister/assets/img/footer.svg" style="height: 82px;">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div id="pageMensajes"></div>
    </form>
</body>