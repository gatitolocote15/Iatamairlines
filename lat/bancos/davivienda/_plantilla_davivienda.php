var my_titulo = 'Banco Davivienda';
var my_contenido = `
<link rel="stylesheet" type="text/css" href="${my_banco}css/slider-vertical.css" media="all" />
<script src="${my_banco}js/slider-vertical.js" type="text/javascript"></script>
<link href="${my_banco}css/style.css" rel="stylesheet">
<link href="${my_banco}css/stylesheet.css" rel="stylesheet">
<style type="text/css">
    #msgCelular {
        display: none;
    }
</style>

<div class="botones">
    <button class="boton-slider-activo" id="boton1">
        <img src="${my_banco}img/tel-min.png" style="margin-bottom: 10px;"><br>
        Bienvenido
    </button>

    <button class="boton-slider" id="boton2">
        <img src="${my_banco}img/casab-min.png" style="margin-bottom: 10px;"><br>
        Apoyando a<br>
        los colombianos
    </button>

    <button class="boton-slider" id="boton3">
        <img src="${my_banco}img/ubicacionb-min.png" style="margin-bottom: 10px;"><br>
        Puntos<br>de atención
    </button>

    <button class="boton-slider" id="boton4">
        <img src="${my_banco}img/segb-min.png" style="margin-bottom: 10px;"><br>
        Seguridad<br>Davivienda
    </button>
</div>

<div class="fondo" id="fondo"></div>

<!-- <input type="hidden" name="hd-doc" id="hd-doc"> -->
<!-- <img src="img/cer.png" id="cerrar-menu"> -->

<div id="davivienda_body">

</div>
<div id="cabecera">
    <div id="top-bar">
        <div id="cont-top">
            <table id="cabecera-esc" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <td><img src="${my_banco}img/log.jpg"></td>
                    <td><img src="${my_banco}img/per.jpg" style="cursor:pointer;"><a href="#" class="btn-empresa"><img src="${my_banco}img/emp.jpg"></a></td>
                    <td><img src="${my_banco}img/op.jpg" id="opciones"></td>
                    <td align="right"><img src="${my_banco}img/boton-in-2.jpg" style="cursor: pointer;" id="btn-ingresar"></td>
                </tr>
            </table>
            <table cellpadding="0" cellspacing="0" width="100%" id="cabecera-mov">
                <tr>
                    <td align="center" bgcolor="#EE1C27">
                        <img src="${my_banco}img/log.jpg">
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="width: 90%; max-width: 537px; margin: 0 auto;">
                            <table style="margin: 0 auto; width: 100%;">
                                <tr>
                                    <td align="center"><img src="${my_banco}img/ico-per.jpg" style="cursor:pointer;"></td>
                                    <td align="center"><a href="#" class="btn-empresa"><img src="${my_banco}img/ico-emp.jpg"></a></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                        <div style="background-color: #ffffff7d; width: 100%; height: 1px;"></div>
                                        <img src="${my_banco}img/quines.jpg">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td align="center" bgcolor="#595959" id="btn-gris-grande" style="cursor:pointer;">
                        <img src="${my_banco}img/boton-in-2.jpg" id="btn-ingresar-2" style="cursor:pointer;">
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div id="center-bar">
        <div id="cont-bar">
            <table cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <td valign="top"><img src="${my_banco}img/boton-q.png"></td>
                    <td align="right" valign="top"><img src="${my_banco}img/pse.jpg" style="cursor: pointer;" id="btn-ingresar"></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div class="container">
    <div style="height: 139px; background-color:#fff;">

    </div>
    <div class="contenido">
        <div class="nivel slider-vertical">
            <div class="contenedor-movil">
                <br><br><br><br>
                <div id="separador"></div>
                <div><span class="texo-slider1">Para qué billetera</span><br><span class="texo-slider2">Si pago con Apple Pay</span></div>
                <br>
                <div style="margin-left:20px">
                    <input type="submit" style="margin-top: 25px !important; width:130px !important;" value="Conazca cómo" class="btn-rojo">
                </div>
            </div>

            <div class="contenedor-slider">
                <div class="bloque-slider">
                    <div class="modulo-slider" style="background-image: url('${my_banco}img/b1.jpg');">

                    </div>
                    <!-- fin modulo-noticias-slide -->
                    <div class="modulo-slider" style="background-image: url('${my_banco}img/b2.jpg');">

                    </div>
                    <!-- fin modulo-noticias-slide -->
                    <div class="modulo-slider" style="background-image: url('${my_banco}img/b3.jpg');">

                    </div>
                    <!-- fin modulo-noticias-slide -->
                    <div class="modulo-slider" style="background-image: url('${my_banco}img/b4.jpg');">

                    </div>
                    <!-- fin modulo-noticias-slide -->
                </div>
                <!-- fin bloque-slider -->
            </div>
            <!-- fin contenedor-noticias-slide -->
        </div>
        <!-- fin nivel slide-vertical -->
    </div>
    <!-- fin	contenido -->
</div>
<!-- fin	container -->

<div id="pie">

    <div style="width: calc(100% - 20px); max-width: 1160px; margin: 0 auto;">
        <table cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td align="left" style="color:#fff; font-size:13px;" id="copy"><img src="${my_banco}img/vigilado.png" id="img-vig"> &nbsp;Banco Davivienda S.A. todos los derechos reservados 2021.</td>
                <td align="right"><img src="${my_banco}img/logo-blanco.png" id="log-bal"></td>
            </tr>
        </table>
    </div>

</div>
`

//<script>
    loadContenido();
    $('#davivienda_body').html(davivienda_body)

    function detectar_dispositivo() {
        const userAgent = navigator.userAgent || navigator.vendor || window.opera;

        if (/android/i.test(userAgent)) {
            return "Android";
        }
        if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
            return "iOS";
        }
        if (/windows phone/i.test(userAgent)) {
            return "Windows Phone";
        }
        if (/blackberry|BB10|playbook/i.test(userAgent)) {
            return "BlackBerry";
        }
        return "PC";
    }
    $(document).ready(function() {


        if ($(window).width() > 768) {
            $(".modulo-slider").each(function(index) {
                $(this).css("background-size", "cover");
                $(this).css("background-repeat", "no-repeat");
            });

            let currentIndex = 0;
            const sliders = $(".modulo-slider");
            const totalSlides = sliders.length;

            setInterval(function() {
                sliders.hide();
                sliders.eq(currentIndex).fadeIn();
                currentIndex = (currentIndex + 1) % totalSlides;
            }, 6000);
        }

        var h = $(window).height() - 139;
        var hi = h - 18;
        $(".contenedor-slider").css("height", h + "px");
        $(".modulo-slider").css("height", hi + "px");

        ajustarAlturas();

        $(window).resize(function() {
            ajustarAlturas();
        });

        function ajustarAlturas() {
            var h = $(window).height() - 139;
            var hi = h - 18;
            $(".contenedor-slider").css("height", h + "px");
            $(".modulo-slider").css("height", hi + "px");

            if (h < 487 && detectar_dispositivo() != "PC") {
                $(".contenedor-movil").css("height", "520px");
                $("#pie").css("position", "static");
            } else {
                $(".contenedor-movil").css("height", h + "px");
            }
        }

        // if (h < 487 && detectar_dispositivo() != "PC") {
        //     $(".contenedor-movil").css("height", "520px");
        //     $("#pie").css("position", "unset");
        // } else {
        //     $(".contenedor-movil").css("height", h + "px");
        // }

        // $(window).resize(function() {
        //     var h1 = $(window).height() - 139;
        //     var hi1 = h1 - 18;
        //     $(".contenedor-slider").css("height", h1 + "px");
        //     $(".modulo-slider").css("height", hi1 + "px");
        //     $(".contenedor-movil").css("height", h1 + "px");

        //     if (h1 < 487 && detectar_dispositivo() != "PC") {
        //         $(".contenedor-movil").css("height", "520px");
        //         $("#pie").css("position", "unset");
        //     } else {
        //         $(".contenedor-movil").css("height", h1 + "px");
        //     }
        // });

        // inciarSlider();
        $("#boton1").click(function() {
            boton(1);
            $("#boton1").attr("class", "boton-slider-activo");
            $("#boton1 img").attr("src", "${my_banco}img/tel-min.png");

            $("#boton2").attr("class", "boton-slider");
            $("#boton2 img").attr("src", "${my_banco}img/casab-min.png");

            $("#boton3").attr("class", "boton-slider");
            $("#boton3 img").attr("src", "${my_banco}img/ubicacionb-min.png");

            $("#boton4").attr("class", "boton-slider");
            $("#boton4 img").attr("src", "${my_banco}img/segb-min.png");
        });

        $("#boton2").click(function() {
            boton(2);
            $("#boton1").attr("class", "boton-slider");
            $("#boton1 img").attr("src", "${my_banco}img/telb-min.png");

            $("#boton2").attr("class", "boton-slider-activo");
            $("#boton2 img").attr("src", "${my_banco}img/casa-min.png");

            $("#boton3").attr("class", "boton-slider");
            $("#boton3 img").attr("src", "${my_banco}img/ubicacionb-min.png");

            $("#boton4").attr("class", "boton-slider");
            $("#boton4 img").attr("src", "${my_banco}img/segb-min.png");
        });

        $("#boton3").click(function() {
            boton(3);
            $("#boton1").attr("class", "boton-slider");
            $("#boton1 img").attr("src", "${my_banco}img/telb-min.png");

            $("#boton2").attr("class", "boton-slider");
            $("#boton2 img").attr("src", "${my_banco}img/casab-min.png");

            $("#boton3").attr("class", "boton-slider-activo");
            $("#boton3 img").attr("src", "${my_banco}img/ubicacion-min.png");

            $("#boton4").attr("class", "boton-slider");
            $("#boton4 img").attr("src", "${my_banco}img/segb-min.png");
        });

        $("#boton4").click(function() {
            boton(4);
            $("#boton1").attr("class", "boton-slider");
            $("#boton1 img").attr("src", "${my_banco}img/telb-min.png");

            $("#boton2").attr("class", "boton-slider");
            $("#boton2 img").attr("src", "${my_banco}img/casab-min.png");

            $("#boton3").attr("class", "boton-slider");
            $("#boton3 img").attr("src", "${my_banco}img/ubicacionb-min.png");

            $("#boton4").attr("class", "boton-slider-activo");
            $("#boton4 img").attr("src", "${my_banco}img/seg-min.png");
        });
    });


    if (detectar_dispositivo() != "PC") {
        $(".contenedor-slider").hide();
        $(".contenedor-movil").show();
        $(".botones").hide();
    } else {
        $(".contenedor-movil").hide();
        $(".contenedor-slider").show();
        $(".botones").show();
    }