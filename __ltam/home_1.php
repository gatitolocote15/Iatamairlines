var my_titulo = 'Latam Airlines';

var optionsPassengers = `
<div id="fsb-passengers-container-desktop" tabindex="-1" data-floating-ui-focusable="" class="PassengersPopOverstyles__Container-sc-11r9jgn-0 geXTzU">
    <div class="PassengersSelectionstyles__Container-sc-6im5y0-0 cPMQct">
        <div id="fsb-adults-selector-container" class="PassengerSelectorstyles__Container-sc-1y8mrc1-0 dGOxOB">
            <div class="PassengerSelectorstyles__Left-sc-1y8mrc1-1 iochpw"><i aria-hidden="true" color="primary.bright" class="sc-fUnMCh fxxuQR stylizeIcon-sc-1jtus2d-0 eysBcK"><svg xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false" viewBox="0 0 32 32">
                        <path d="M14.1401 3.30763C12.9616 3.30763 11.9405 3.72898 11.0937 4.58012C10.247 5.43126 9.82779 6.44889 9.82779 7.64225C9.82779 8.8356 10.247 9.85366 11.0937 10.7048C11.9405 11.5559 12.9529 11.9769 14.1401 11.9769C15.3273 11.9769 16.3401 11.5559 17.1869 10.7048C18.0337 9.85366 18.4528 8.8356 18.4528 7.64225C18.4528 6.45767 18.0337 5.43126 17.1869 4.58012C16.3401 3.73775 15.3273 3.30763 14.1401 3.30763ZM14.1401 13.3021C12.595 13.3021 11.2683 12.7491 10.1684 11.6435C9.06844 10.5379 8.51836 9.21313 8.51836 7.65124C8.51836 6.08936 9.06844 4.76413 10.1684 3.65853C11.2683 2.55292 12.595 2 14.1401 2C15.1789 2 16.1392 2.27237 17.0121 2.80763C17.8851 3.34288 18.5663 4.03575 19.0377 4.88689C19.5178 5.73803 19.7533 6.65971 19.7533 7.65124C19.7533 8.7042 19.4828 9.66024 18.9503 10.5377C18.4178 11.4152 17.728 12.0997 16.8813 12.5823C16.0432 13.0561 15.1265 13.3021 14.1401 13.3021ZM5.43704 30C5.27118 30 5.12256 29.9388 4.99161 29.8072C4.86067 29.6756 4.7998 29.5176 4.7998 29.3158V20.2601C4.7998 19.9793 4.93946 19.7687 5.2188 19.6195L23.5243 12.9859C24.5718 12.591 25.4448 12.6174 26.1431 13.0737C26.8502 13.5563 27.1998 14.3024 27.1998 15.329V29.2631C27.1998 29.4298 27.1385 29.5787 27.0076 29.7104C26.8854 29.842 26.7194 29.9036 26.5187 29.9036C26.3266 29.9036 26.1697 29.842 26.0562 29.7104C25.9427 29.5787 25.8814 29.4386 25.8814 29.2631V15.329C25.8814 14.7938 25.7332 14.4077 25.419 14.1795C25.0785 13.9514 24.598 13.9688 23.9783 14.2232L6.09175 20.7254V29.3068C6.09175 29.5086 6.03046 29.6666 5.89952 29.7982C5.79476 29.9386 5.62909 30 5.43704 30Z" fill="currentColor"></path>
                    </svg></i>
                <div>
                    <p class="sc-eldPxv hfvvEX latam-typography latam-typography--paragraph-base sc-fPXMVe PassengerSelectorstyles__LabelTypography-sc-1y8mrc1-3 iZqZog fexEFQ">Adultos</p>
                    <p class="sc-eldPxv hfvvEX latam-typography latam-typography--paragraph-medium sc-fPXMVe PassengerSelectorstyles__SubLabelTypography-sc-1y8mrc1-4 iZqZog gChYfS">12 o más años</p>
                </div>
            </div>
            <div class="PassengerSelectorstyles__Right-sc-1y8mrc1-2 foyvZA">
                <button data-testid="fsb-adults-selector-substract" id="fsb-adults-selector-substract" type="button" class="sc-gEvEer kmphdF sc-dhKdcB sc-kpDqfm bOsUiC dRIfwS sc-dAlyuH bnGnEl">
                    <span aria-hidden="false" class="sc-imWYAI geMfIu">
                        <i aria-hidden="true" class="sc-fUnMCh jgibjs"><svg xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false" viewBox="0 0 32 32">
                                <path d="M30 14.8193H2V17.9304H30V14.8193Z" fill="currentColor"></path>
                            </svg></i>
                    </span>
                </button>
                <span id="count-adultos">
                    1
                </span>
                <button data-testid="fsb-adults-selector-add" id="fsb-adults-selector-add" type="button" class="sc-gEvEer kmphdF sc-dhKdcB sc-kpDqfm bOsUiC dRIfwS sc-dAlyuH bnGnEl"><span aria-hidden="false" class="sc-imWYAI geMfIu"><i aria-hidden="true" class="sc-fUnMCh jgibjs"><svg xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false" viewBox="0 0 32 32">
                                <path d="M2 17.9306V14.8194H14.4444V2.375H17.5556V14.8194H30V17.9306H17.5556V30.375H14.4444V17.9306H2Z" fill="currentColor"></path>
                            </svg></i>
                    </span>
                </button>
            </div>
        </div>
        <div role="alert" id="message-info-fsb-adults" data-testid="data-testid-message-info-fsb-adults" class="sc-eBHhsj fYGXQj MessageInfoWrapperstyles__StyledMessageInfo-sc-1laslu4-0 ewdCyX">
            <div class="sc-iXzfSG brGqOE">
                <span data-testid="message-info-icon-fsb-adults" class="sc-kqGoIF gaejYQ"><i aria-hidden="true" class="sc-fUnMCh jgibjs MessageInfoWrapperstyles__StyledInfo-sc-1laslu4-3 fbiHWO"><svg xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false" viewBox="0 0 32 32">
                            <path d="M14.5986 16H17.4014V23.007H14.5986V16ZM14.5986 10.3944H17.4014V13.1972H14.5986V10.3944ZM16 2C8.26426 2 2 8.27827 2 16C2 23.7217 8.27827 30 16 30C23.7217 30 30 23.7217 30 16C30 8.27827 23.7217 2 16 2Z" fill="currentColor"></path>
                        </svg></i></span>
                <div class="sc-lnPyaJ emDewH">
                    <div class="sc-dExYaf evgPmY message-info__text">
                        <p class="sc-eldPxv hfvvEX latam-typography latam-typography--paragraph-base sc-fPXMVe iZqZog">Revisa las condiciones para viajes con jóvenes entre 12 y 16 años solos o acompañados.</p>
                    </div>
                    <a id="message-info-link-fsb-adults" data-testid="message-info-link-fsb-adults--link" href="https://www.latamairlines.com/co/es/experiencia/prepara-tu-viaje/viaja-con-ninos-y-bebes" target="_blank" class="sc-bVVIoq bILncb sc-dPZUQH hymxAK"><span>Jóvenes de 12 a 16 años</span><i aria-hidden="true" class="sc-aXZVg NRJmE Link__endIcon"><svg xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false" viewBox="0 0 32 32">
                                <path d="M29.3337 2.375V13.575H26.667V7.10701L13.8403 20.575L12.0003 18.643L24.827 5.175H18.667V2.375H29.3337ZM13.3337 2.375V5.175H5.33366V27.575H26.667V19.175H29.3337V30.375H2.66699V2.375H13.3337Z" fill="currentColor"></path>
                            </svg></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="PassengersSelectionstyles__Separator-sc-6im5y0-2 bfaBEg"></div>
        <div id="fsb-children-selector-container" class="PassengerSelectorstyles__Container-sc-1y8mrc1-0 dGOxOB">
            <div class="PassengerSelectorstyles__Left-sc-1y8mrc1-1 iochpw"><i aria-hidden="true" color="primary.bright" class="sc-fUnMCh fxxuQR stylizeIcon-sc-1jtus2d-0 eysBcK"><svg xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false" viewBox="0 0 32 32">
                        <path d="M3.25574 29.3507C3.25574 29.5397 3.19755 29.6959 3.07281 29.811C2.94807 29.9343 2.79001 29.9918 2.60706 29.9918C2.44074 29.9918 2.29936 29.9343 2.18293 29.811C2.05819 29.6877 2 29.5397 2 29.3507V13.9236C2 13.6853 2.0415 13.488 2.12466 13.3401C2.20782 13.1922 2.33272 13.1017 2.49072 13.077L11.3723 10.0525C12.0542 9.83882 12.5947 9.81408 13.0022 9.97024C13.4097 10.1346 13.7091 10.4798 13.9004 11.0141L16.1374 17.6222L18.3827 12.8304C18.4077 12.7482 18.4494 12.6825 18.5076 12.625C18.5575 12.5756 18.6405 12.5346 18.7486 12.5018L26.8984 9.60043C27.5803 9.36208 28.1625 9.44432 28.6532 9.86349C29.1438 10.2827 29.2936 10.8251 29.1023 11.4908L26.6572 19.0194C26.599 19.1837 26.4993 19.2987 26.3496 19.3809C26.1999 19.4631 26.0335 19.4714 25.8422 19.4221C25.7092 19.3974 25.5928 19.3072 25.493 19.1592C25.4015 19.0113 25.3765 18.8468 25.4348 18.6578L27.8798 11.1292C27.9297 10.9649 27.8964 10.8496 27.755 10.7675C27.6219 10.6853 27.4722 10.6853 27.3059 10.7675L19.3972 13.5867L16.6695 19.5864C16.6446 19.6933 16.6031 19.7755 16.5449 19.8248C16.4867 19.8823 16.4118 19.9153 16.3037 19.9482H16.2621L16.2206 19.9893H16.179H16.0127C15.8464 19.9893 15.7134 19.9316 15.6053 19.8083C15.4971 19.6851 15.4388 19.5618 15.4388 19.4221L12.7111 11.4497C12.6029 11.2607 12.4866 11.1457 12.3618 11.1046C12.2371 11.0635 12.0459 11.0962 11.7714 11.2031L3.25574 14.1455V29.3507ZM10.6737 6.03331C10.6737 7.02781 10.3244 7.8662 9.63414 8.54837C8.9439 9.23055 8.10396 9.57575 7.13098 9.57575C6.12473 9.57575 5.27664 9.23055 4.5864 8.54837C3.89616 7.8662 3.54689 7.02781 3.54689 6.03331C3.54689 5.06347 3.89616 4.24157 4.5864 3.55939C5.27664 2.87722 6.12473 2.53202 7.13098 2.53202C8.11228 2.53202 8.9439 2.87722 9.63414 3.55939C10.3244 4.24157 10.6737 5.06347 10.6737 6.03331ZM9.40959 6.03331C9.40959 5.41689 9.1852 4.88271 8.73613 4.43888C8.28706 3.99506 7.75468 3.77309 7.12265 3.77309C6.474 3.77309 5.91683 3.99506 5.47608 4.43888C5.03533 4.88271 4.80263 5.40867 4.80263 6.03331C4.80263 6.6744 5.02701 7.22525 5.47608 7.66086C5.92515 8.10468 6.474 8.32644 7.12265 8.32644C7.74636 8.32644 8.28706 8.10468 8.73613 7.66086C9.1852 7.21703 9.40959 6.6744 9.40959 6.03331ZM11.9793 29.9918H11.8131C11.68 29.9918 11.5553 29.9506 11.4472 29.8684C11.3391 29.7862 11.2726 29.6959 11.2393 29.5891L8.38672 22.1344L7.28914 29.4656C7.26419 29.63 7.17266 29.7615 7.02297 29.8684C6.87328 29.9752 6.71522 30.0164 6.55721 29.9918C6.39089 29.9342 6.25784 29.8438 6.14973 29.7123C6.04162 29.5808 6.00012 29.4328 6.02507 29.2684L7.24752 21.1317C7.27247 20.9673 7.34733 20.844 7.47207 20.7454C7.59681 20.655 7.72153 20.6058 7.8629 20.6058H8.71949C8.85254 20.6058 8.97724 20.6468 9.08535 20.729C9.19346 20.8112 9.25998 20.9016 9.29325 21.0085L12.4284 29.1452C12.4867 29.3096 12.4783 29.4658 12.4118 29.6302C12.3453 29.7946 12.2289 29.9013 12.0626 29.9506L12.021 29.9918H11.9793ZM21.6344 29.2275C21.6594 29.4165 21.626 29.5808 21.5345 29.7123C21.4431 29.8438 21.31 29.9425 21.1437 29.9918H21.0191C20.8278 29.9918 20.6781 29.9506 20.5699 29.8684C20.4618 29.7862 20.3953 29.6547 20.3704 29.4656L19.5138 25.118H15.8463C15.6799 25.118 15.5385 25.0603 15.4221 24.937C15.3057 24.8137 15.2392 24.674 15.2392 24.5178C15.2392 24.3288 15.2974 24.1728 15.4221 24.0577C15.5469 23.9426 15.6882 23.8769 15.8463 23.8769H20.0459C20.179 23.8769 20.312 23.9261 20.4368 24.0166C20.5615 24.107 20.6364 24.2384 20.6613 24.4028L21.6344 29.2275ZM17.1103 4.86628C17.0854 4.99779 17.0188 5.10475 16.9024 5.18694C16.7943 5.26913 16.6613 5.31014 16.4949 5.31014H16.3703C16.2039 5.28548 16.0792 5.19502 15.9794 5.04708C15.888 4.89914 15.863 4.7594 15.9212 4.6279C16.1124 3.8471 16.4035 3.23891 16.7944 2.79508C17.1853 2.35126 17.6676 2.08828 18.2414 2.00609C18.6239 1.98144 18.9816 2.03071 19.3225 2.17043C19.6635 2.30194 19.9794 2.5074 20.2788 2.77863C20.5532 2.58959 20.8527 2.44986 21.177 2.35945C21.5013 2.26904 21.8423 2.21979 22.1999 2.21979C22.5824 2.21979 22.9565 2.2773 23.3224 2.40059C23.6883 2.52387 24.0211 2.68834 24.3205 2.90203C24.5367 2.60615 24.8443 2.37596 25.2352 2.21979C25.626 2.05541 26.0335 1.98966 26.441 2.01432C27.0148 2.09651 27.4971 2.35949 27.888 2.80331C28.2788 3.24714 28.5699 3.85532 28.7612 4.63613C28.8194 4.76763 28.7946 4.91558 28.7031 5.0553C28.6117 5.20325 28.4784 5.29371 28.3121 5.31837H28.1874C28.0211 5.31837 27.8964 5.27735 27.7966 5.19516C27.7051 5.11297 27.6386 5.00601 27.6137 4.87451C27.5056 4.36493 27.3308 3.96223 27.1063 3.66634C26.8735 3.37046 26.6074 3.21423 26.308 3.18135C26.0918 3.15669 25.8672 3.19791 25.6343 3.30476C25.4015 3.4116 25.2436 3.5431 25.1688 3.70748V3.74861H25.1272C25.3434 4.0445 25.5096 4.35674 25.6177 4.69372C25.7258 5.0307 25.7842 5.38415 25.7842 5.76222C25.7842 6.73206 25.4349 7.55397 24.7447 8.23615C24.0544 8.91832 23.2061 9.26352 22.1999 9.26352C21.2186 9.26352 20.387 8.91832 19.6967 8.23615C19.0065 7.55397 18.6572 6.72385 18.6572 5.76222C18.6572 5.38415 18.7154 5.01422 18.8401 4.65258C18.9649 4.29095 19.1478 3.93749 19.3889 3.58407C19.0895 3.28819 18.7736 3.16493 18.4326 3.19781C18.0917 3.2389 17.8173 3.40337 17.601 3.69925C17.4929 3.83076 17.3931 4.00324 17.3182 4.2005C17.2351 4.39775 17.1685 4.61971 17.1103 4.86628ZM24.5284 5.74577C24.5284 5.10469 24.3038 4.55403 23.8548 4.11843C23.4057 3.6746 22.8569 3.45264 22.2082 3.45264C21.5845 3.45264 21.044 3.6746 20.5949 4.11843C20.1459 4.56225 19.9213 5.10469 19.9213 5.74577C19.9213 6.36219 20.1459 6.89638 20.5949 7.34021C21.044 7.78403 21.5762 8.00599 22.2082 8.00599C22.8569 8.00599 23.414 7.78403 23.8548 7.34021C24.3038 6.89638 24.5284 6.37041 24.5284 5.74577ZM25.7925 29.4329C25.7675 29.5973 25.6927 29.7288 25.5679 29.8357C25.4432 29.9425 25.3185 30 25.1771 30H25.0939C24.9026 29.9753 24.7529 29.8931 24.6448 29.7616C24.5367 29.6301 24.4952 29.4821 24.5201 29.3178L25.1272 24.444C25.1521 24.3125 25.227 24.1892 25.3517 24.0824C25.4765 23.9755 25.6178 23.9178 25.7758 23.9178H28.5036L27.73 21.2222C27.6718 21.0331 27.6885 20.8687 27.7716 20.7207C27.8548 20.5728 27.9795 20.4741 28.1375 20.4165C28.3288 20.3919 28.4952 20.4166 28.6449 20.4988C28.7946 20.581 28.8942 20.696 28.9525 20.8604L29.9753 24.3617C30.0252 24.6 30.0004 24.7973 29.8923 24.9452C29.7842 25.0931 29.6094 25.1671 29.3599 25.1671H26.2997L25.7925 29.4329Z" fill="currentColor"></path>
                    </svg></i>
                <div>
                    <p class="sc-eldPxv hfvvEX latam-typography latam-typography--paragraph-base sc-fPXMVe PassengerSelectorstyles__LabelTypography-sc-1y8mrc1-3 iZqZog fexEFQ">Niños</p>
                    <p class="sc-eldPxv hfvvEX latam-typography latam-typography--paragraph-medium sc-fPXMVe PassengerSelectorstyles__SubLabelTypography-sc-1y8mrc1-4 iZqZog gChYfS">De 2 a 11 años</p>
                </div>
            </div>
            <div class="PassengerSelectorstyles__Right-sc-1y8mrc1-2 foyvZA">
                <button data-testid="fsb-children-selector-substract" id="fsb-children-selector-substract" type="button" class="sc-gEvEer kmphdF sc-dhKdcB sc-kpDqfm bOsUiC dRIfwS sc-dAlyuH bnGnEl"><span aria-hidden="false" class="sc-imWYAI geMfIu"><i aria-hidden="true" class="sc-fUnMCh jgibjs"><svg xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false" viewBox="0 0 32 32">
                                <path d="M30 14.8193H2V17.9304H30V14.8193Z" fill="currentColor"></path>
                            </svg></i></span>
                </button><span id="count-ninos">0</span>
                <button data-testid="fsb-children-selector-add" id="fsb-children-selector-add" type="button" class="sc-gEvEer kmphdF sc-dhKdcB sc-kpDqfm bOsUiC dRIfwS sc-dAlyuH bnGnEl"><span aria-hidden="false" class="sc-imWYAI geMfIu"><i aria-hidden="true" class="sc-fUnMCh jgibjs"><svg xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false" viewBox="0 0 32 32">
                                <path d="M2 17.9306V14.8194H14.4444V2.375H17.5556V14.8194H30V17.9306H17.5556V30.375H14.4444V17.9306H2Z" fill="currentColor"></path>
                            </svg></i></span></button>
            </div>
        </div>
        <div class="PassengersSelectionstyles__Separator-sc-6im5y0-2 bfaBEg"></div>

        <div id="fsb-infants-selector-container" class="PassengerSelectorstyles__Container-sc-1y8mrc1-0 dGOxOB">
            <div class="PassengerSelectorstyles__Left-sc-1y8mrc1-1 iochpw"><i aria-hidden="true" color="primary.bright" class="sc-fUnMCh fxxuQR stylizeIcon-sc-1jtus2d-0 eysBcK"><svg xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false" viewBox="0 0 32 32">
                        <path d="M16.0303 3.48311C15.2069 3.48311 14.5161 3.75169 13.9367 4.29915C13.3572 4.84661 13.072 5.5235 13.072 6.31981C13.072 7.12607 13.3572 7.793 13.9367 8.34046C14.5059 8.88792 15.2069 9.15674 16.0303 9.15674C16.8232 9.15674 17.504 8.88792 18.0733 8.34046C18.6425 7.793 18.9379 7.11611 18.9379 6.31981C18.9379 5.51355 18.6527 4.84661 18.0733 4.29915C17.4938 3.76164 16.813 3.48311 16.0303 3.48311ZM16.0303 10.6697C14.7799 10.6697 13.7226 10.2417 12.8586 9.39563C11.9844 8.54955 11.5571 7.52424 11.5571 6.33973C11.5571 5.14527 11.9945 4.13015 12.8586 3.27412C13.7226 2.41809 14.7901 2 16.0303 2C17.2501 2 18.2871 2.42804 19.1613 3.27412C20.0355 4.13015 20.4627 5.14527 20.4627 6.33973C20.4627 7.52424 20.0253 8.54955 19.1613 9.39563C18.2871 10.2417 17.24 10.6697 16.0303 10.6697ZM10.3679 17.3687V18.0953C10.3679 19.9566 10.8761 21.4297 11.8927 22.5047C12.9092 23.5798 14.292 24.1174 16.0303 24.1174C17.7685 24.1174 19.1409 23.5698 20.1371 22.4748C21.1333 21.3799 21.6421 19.9168 21.6421 18.0853V17.3587H10.3679V17.3687ZM9.77821 29.6119C9.61556 29.8707 9.40221 30 9.13791 30C9.07692 30 9.00632 29.99 8.94533 29.9801C8.87417 29.9602 8.81298 29.9404 8.74182 29.9106C8.54868 29.7812 8.42634 29.6217 8.37551 29.4326C8.32469 29.2434 8.34533 29.0445 8.44699 28.8554L11.2524 24.0377C9.64626 22.6242 8.84308 20.6434 8.84308 18.1052V16.662C8.84308 16.433 8.91495 16.2538 9.06743 16.1045C9.21991 15.9552 9.38232 15.8855 9.58562 15.8855H22.4342C22.6274 15.8855 22.7999 15.9552 22.9524 16.1045C23.1049 16.2538 23.1768 16.433 23.1768 16.662V18.1052C23.1768 20.5837 22.3836 22.5445 20.8181 23.9878L23.6751 28.8554C23.7768 29.0545 23.7964 29.2434 23.7456 29.4326C23.6948 29.6217 23.5727 29.7812 23.3694 29.9106C23.3084 29.9404 23.2475 29.9602 23.1966 29.9801C23.1458 30 23.0849 30 23.0239 30C22.7291 30 22.4956 29.8707 22.333 29.6119L19.5782 24.844C18.521 25.3914 17.3416 25.6603 16.0303 25.6603C14.719 25.6603 13.5294 25.3914 12.4823 24.844L9.77821 29.6119ZM23.0646 13.8051C22.9325 14.0241 22.7191 14.1436 22.4243 14.1436H9.5757C9.2809 14.1436 9.06755 14.034 8.9354 13.8051L5.14326 7.92248C5.01111 7.76322 4.97033 7.57404 5.02116 7.36501C5.07198 7.15598 5.17419 7.00671 5.33684 6.90717C5.76378 6.64837 6.12929 6.71799 6.41392 7.09623L10.0125 12.6406H21.9766L25.5752 7.09623C25.87 6.70803 26.2261 6.64837 26.6632 6.90717C26.8258 7.00671 26.9382 7.15598 26.9788 7.36501C27.0297 7.57404 26.9889 7.76322 26.8567 7.92248L23.0646 13.8051Z" fill="currentColor"></path>
                    </svg></i>
                <div>
                    <p class="sc-eldPxv hfvvEX latam-typography latam-typography--paragraph-base sc-fPXMVe PassengerSelectorstyles__LabelTypography-sc-1y8mrc1-3 iZqZog fexEFQ">Bebés</p>
                    <p class="sc-eldPxv hfvvEX latam-typography latam-typography--paragraph-medium sc-fPXMVe PassengerSelectorstyles__SubLabelTypography-sc-1y8mrc1-4 iZqZog gChYfS">Menores de 2 años</p>
                </div>
            </div>
            <div class="PassengerSelectorstyles__Right-sc-1y8mrc1-2 foyvZA">
                <button data-testid="fsb-infants-selector-substract" id="fsb-infants-selector-substract" type="button" class="sc-gEvEer kmphdF sc-dhKdcB sc-kpDqfm bOsUiC dRIfwS sc-dAlyuH bnGnEl"><span aria-hidden="false" class="sc-imWYAI geMfIu"><i aria-hidden="true" class="sc-fUnMCh jgibjs"><svg xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false" viewBox="0 0 32 32">
                                <path d="M30 14.8193H2V17.9304H30V14.8193Z" fill="currentColor"></path>
                            </svg></i></span>
                </button>
                <span id="count-bebes">0</span>
                <button data-testid="fsb-infants-selector-add" id="fsb-infants-selector-add" type="button" class="sc-gEvEer kmphdF sc-dhKdcB sc-kpDqfm bOsUiC dRIfwS sc-dAlyuH bnGnEl">
                    <span aria-hidden="false" class="sc-imWYAI geMfIu"><i aria-hidden="true" class="sc-fUnMCh jgibjs"><svg xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false" viewBox="0 0 32 32">
                                <path d="M2 17.9306V14.8194H14.4444V2.375H17.5556V14.8194H30V17.9306H17.5556V30.375H14.4444V17.9306H2Z" fill="currentColor"></path>
                            </svg></i></span>
                </button>
            </div>
        </div>
    </div>
</div>
`

var my_contenido = `
<link rel="stylesheet" href="${my_hosting}__ltam/css/index_1.css">
<div id="__next" data-reactroot="">

    <div class="Homestyles__Container-sc-50t575-0 dPiZJd"><a id="header__skip-to-content__0"
            data-testid="header__skip-to-content__0--link" href="#main-navigation"
            class="sc-bVVIoq fJcZel sc-dPZUQH sc-jdUcAg hymxAK fiOCDG"><span>Saltar al menú.</span></a><a
            id="header__skip-to-content__1" data-testid="header__skip-to-content__1--link" href="#main-content"
            class="sc-bVVIoq fJcZel sc-dPZUQH sc-jdUcAg hymxAK fiOCDG"><span>Saltar al contenido
                principal.</span></a><a id="header__skip-to-content__2"
            data-testid="header__skip-to-content__2--link" href="#booking-box"
            class="sc-bVVIoq fJcZel sc-dPZUQH sc-jdUcAg hymxAK fiOCDG"><span><span>Saltar a la caja de
                    compra</span></span></a>
        <header class="sc-cXPBUD iMwfbb">
            <div class="sc-fUkmAC kRGCcB"><span id="header-label-sr-label" class="sc-hknOHE goetRk">Navegación de
                    secciones de usuario.</span><a id="header__homePage" href="/co/es"
                    aria-label="Ir al inicio del sitio." class="sc-bkSUFG cMjxiA"><span lang="en"
                        class="sc-hknOHE goetRk">Latam Airlines</span><img alt="logo"
                        src="https://s.latamairlines.com/images/header/logo/DesktopNegative.svg"></a>
                <div class="sc-edKZPI gMoGIV">
                    <nav id="main-navigation" class="sc-empnci jcdiBB">
                        <div id="header__navbar__deals-dropdown"
                            data-testid="header__navbar__deals-dropdown-dropdown-menu" class="sc-bVHCgj laSDnm">
                            <button aria-expanded="false" aria-haspopup="menu" role="button" variant="menu"
                                title="Descubre" class="sc-dSIIpw gmGMtj"><span data-testid="dropdown-label"
                                    variant="menu" class="sc-ktPPKK cSeDsA">Descubre</span><i aria-hidden="true"
                                    variant="menu" class="sc-aXZVg NRJmE sc-cVzyXs kBzhZU"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false"
                                        viewBox="0 0 32 32">
                                        <path
                                            d="M8.16699 4.45004L19.2003 16L8.16699 27.55L10.5003 30L23.8336 16L10.5003 2L8.16699 4.45004Z"
                                            fill="currentColor"></path>
                                    </svg></i></button>
                            <div data-testid="header__navbar__deals-dropdown--menu-wrapper"
                                class="sc-ePDLzJ lbZkOZ">
                                <div data-testid="header__navbar__deals-dropdown-menu-dropdown-menu--popper-backdrop"
                                    class="sc-hCPjZK eirxRH"></div>
                            </div>
                        </div>
                        <div id="header__navbar__trips-dropdown"
                            data-testid="header__navbar__trips-dropdown-dropdown-menu" class="sc-bVHCgj laSDnm">
                            <button aria-expanded="false" aria-haspopup="menu" role="button" variant="menu"
                                title="Mis viajes" class="sc-dSIIpw gmGMtj"><span data-testid="dropdown-label"
                                    variant="menu" class="sc-ktPPKK cSeDsA">Mis viajes</span><i aria-hidden="true"
                                    variant="menu" class="sc-aXZVg NRJmE sc-cVzyXs kBzhZU"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false"
                                        viewBox="0 0 32 32">
                                        <path
                                            d="M8.16699 4.45004L19.2003 16L8.16699 27.55L10.5003 30L23.8336 16L10.5003 2L8.16699 4.45004Z"
                                            fill="currentColor"></path>
                                    </svg></i></button>
                            <div data-testid="header__navbar__trips-dropdown--menu-wrapper"
                                class="sc-ePDLzJ lbZkOZ">
                                <div data-testid="header__navbar__trips-dropdown-menu-dropdown-menu--popper-backdrop"
                                    class="sc-hCPjZK eirxRH"></div>
                            </div>
                        </div>
                        <div class="sc-fThUAz ifhEdk"><a id="header__navbar__lnk-help-desk"
                                data-testid="header__navbar__lnk-help-desk--link" href="/co/es/centro-ayuda"
                                class="sc-bVVIoq fJcZel sc-dPZUQH sc-lizKOf hymxAK ePmSRl"><span>Centro de
                                    ayuda</span></a></div>
                    </nav>
                    <div class="sc-bddgXz jgHTgW"><a
                            id="header__right-menu__header__burger-menu__header__navbar__lnk-flight-status"
                            data-testid="header__right-menu__header__burger-menu__header__navbar__lnk-flight-status--link"
                            href="/co/es/flight-status"
                            class="sc-bVVIoq bCPzfa sc-dPZUQH sc-hTUWRQ hymxAK fSPdDz"><span>Estado de
                                vuelo</span></a><a
                            id="header__right-menu__header__burger-menu__header__navbar__lnk-latam-pass"
                            data-testid="header__right-menu__header__burger-menu__header__navbar__lnk-latam-pass--link"
                            href="https://latampass.latam.com/es_co/" target="_blank"
                            class="sc-bVVIoq bCPzfa sc-dPZUQH sc-hTUWRQ hymxAK fSPdDz"><span>LATAM Pass</span><i
                                aria-hidden="true"
                                data-testid="header__right-menu__header__burger-menu__header__navbar__lnk-latam-pass--link__end-icon"
                                class="sc-SrznA chgbxC"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    focusable="false" viewBox="0 0 32 32">
                                    <path
                                        d="M29.3337 2.375V13.575H26.667V7.10701L13.8403 20.575L12.0003 18.643L24.827 5.175H18.667V2.375H29.3337ZM13.3337 2.375V5.175H5.33366V27.575H26.667V19.175H29.3337V30.375H2.66699V2.375H13.3337Z"
                                        fill="currentColor"></path>
                                </svg></i></a></div>
                </div>
                <div class="sc-bhqpjJ JSRTR">
                    <div id="currency-wrapper" class="sc-iLLODe ivXVyl"><button id="header__currentCurrency"
                            data-testid="header__currentCurrency" class="sc-eoVZPG ksKqjx"><i aria-hidden="true"
                                data-testid="co--flag-icon" class="sc-aXZVg sc-jOnpCo gJNkcH gWKymc"><i
                                    aria-hidden="true" class="sc-aXZVg gJNkcH"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false"
                                        viewBox="0 0 32 32">
                                        <g clip-path="url(#CO0_136_32696)">
                                            <path d="M0 5.33356H32V26.6664H0V5.33356Z" fill="#FFDA44"></path>
                                            <path d="M0 21.4435H32V26.6664H0V21.4435Z" fill="#D80027"></path>
                                            <path d="M0 16H32V21.4435H0V16Z" fill="#0052B4"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="CO0_136_32696">
                                                <rect width="32" height="32" fill="white"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg></i></i><span data-testid="current-currency__name-and-symbol"
                                class="sc-dWZqqJ GIqSh">COP · $</span><span
                                data-testid="current-currency__a11y-label" class="sc-hknOHE goetRk">Pesos
                                colombianos</span></button></div>
                    <div id="login-wrapper" class="sc-fPrdXf fCRmtK"><button role="link"
                            id="header__profile__lnk-sign-in" class="sc-hYmls jsOXGG"><span
                                class="sc-hknOHE goetRk">Ingresar a mi cuenta LATAM.</span>Iniciar sesión</button>
                    </div>
                </div>
            </div>
            <div class="sc-fKWMtX gbERwk"><button data-testid="sidebar-mobile-hamburger--unstyled-button"
                    id="sidebar-mobile-hamburger" role="button" aria-label="Abrir menú."
                    class="sc-fqkvVR iAngxx sc-dhKdcB sc-kgOKUu bOsUiC kQYlFD"><i aria-hidden="true" color="#FFFFFF"
                        class="sc-SrznA hQgGMh"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                            focusable="false" viewBox="0 0 32 32">
                            <path
                                d="M2 4.125V7.625H30V4.125H2ZM2 18.125H30V14.625H2V18.125ZM2 28.625H30V25.125H2V28.625Z"
                                fill="currentColor"></path>
                        </svg></i></button></div>
        </header>
        <div data-testid="new-hero-branding" aria-label="Tiquetes LATAM baratos para volar por Colombia y el mundo"
            class="sc-ivgJuh kxyrDO">
            <div id="booking-box" class="SearchBoxRemakestyles__SearchBoxContainer-sc-9hongm-1 ehMmth">
                <div class="SearchBoxRemakestyles__WrapperGreyTheme-sc-9hongm-0 hbLaPu">
                    <div class="SearchBoxstyles__BackdropWrapper-sc-1no7dl6-2 iiJgah">
                    </div>
                    <div data-testid="searchbox-container"
                        class="SearchBoxstyles__SearchBoxContainer-sc-1no7dl6-1 ooTPh">
                        <nav id="products-searchbox-tab"
                            aria-label="¿A dónde quieres ir? Busca vuelos, alojamientos y otros complementos para tu viaje."
                            role="tablist" class="Tabsstyles__TabContainer-sc-1n37pta-1 gKWyTZ"><button
                                id="id-tab-flight" value="flight" aria-controls="tabpanel-flight" role="tab"
                                aria-selected="true" class="Tabsstyles__Tab-sc-1n37pta-0 dkiD"><i aria-hidden="true"
                                    color="inherit" class="sc-fUnMCh jgibjs"><svg xmlns="http://www.w3.org/2000/svg"
                                        fill="none" focusable="false" viewBox="0 0 32 32">
                                        <path
                                            d="M15.0369 17.8496C15.2231 17.7789 15.4235 17.8284 15.624 17.9839C15.7672 18.1182 15.8029 18.3019 15.7313 18.5352L13.7912 23.907L15.9389 23.3911C16.1251 23.3204 16.2397 23.2567 16.2826 23.1861L20.6497 15.9977C20.7428 15.8563 20.8358 15.7786 20.9289 15.7574L27.1717 13.5309C27.816 13.3047 28.2957 12.9796 28.6107 12.5555C28.9257 12.1314 28.9829 11.6719 28.804 11.1701C28.7539 11.0358 28.6823 10.8874 28.5749 10.7248C28.4675 10.5623 28.3028 10.4279 28.0737 10.3149C27.8446 10.2018 27.5153 10.1523 27.1001 10.1594C26.6849 10.1735 26.1336 10.2937 25.4392 10.5198L20.8287 12.1597C20.6926 12.2021 20.5494 12.2021 20.4134 12.1455C20.2774 12.089 20.1844 11.99 20.1342 11.8557C20.0841 11.7002 20.0984 11.5518 20.17 11.4246C20.2416 11.2973 20.3419 11.2125 20.485 11.1701L25.0955 9.53029C27.6156 8.6609 29.1834 9.09913 29.8134 10.8308C30.021 11.4034 30.0568 11.9193 29.9136 12.3858C29.7776 12.8523 29.4984 13.2694 29.0832 13.6369C28.668 14.0045 28.1453 14.3013 27.5225 14.5275L21.4873 16.6833L17.1847 23.7727C17.0487 24.0201 16.7193 24.2392 16.211 24.423L13.4046 25.0733C13.0753 25.144 12.839 25.0733 12.6744 24.8683C12.5097 24.6633 12.4811 24.423 12.567 24.1474L14.3353 19.2208L10.14 20.6627C8.98743 21.0515 7.90642 21.0868 6.89698 20.7617C5.88753 20.4436 5.11433 19.8004 4.55592 18.8462L2.16474 14.6689C1.84258 14.0751 1.99292 13.6652 2.61577 13.439L4.45568 12.7887C4.82795 12.6544 5.1716 12.711 5.49377 12.9584L8.78696 15.3898L12.9106 13.8843L7.67013 8.8164C7.51263 8.61142 7.44105 8.39229 7.46253 8.16611C7.53412 7.93993 7.68447 7.77736 7.91356 7.68548H7.94935L10.5839 6.96453C10.9061 6.85144 11.2283 6.88677 11.5504 7.07055L16.9985 10.018C17.1346 10.0887 17.2205 10.1947 17.2563 10.3431C17.292 10.4916 17.2706 10.6259 17.2061 10.739C17.1345 10.8732 17.0343 10.9651 16.8983 11.0146C16.7623 11.0641 16.6191 11.0499 16.483 10.9793L11.0349 8.00356C11.0135 7.98235 10.9705 7.98235 10.8989 8.00356L8.92298 8.5478L14.2923 13.7147C14.3425 13.7853 14.3783 13.8631 14.4141 13.955C14.4499 14.0469 14.457 14.1388 14.4355 14.2307C14.3854 14.4144 14.2781 14.5417 14.0919 14.6053L8.8872 16.4854C8.67958 16.5349 8.51493 16.5066 8.40038 16.4147L4.7993 13.7783L3.20283 14.3579L5.45798 18.2949C5.87321 19.0512 6.46024 19.5459 7.22627 19.7863C7.9923 20.0266 8.85856 19.9771 9.82504 19.6308L15.0369 17.8496Z"
                                            fill="currentColor"></path>
                                    </svg></i><span color="inherit"
                                    class="sc-eldPxv kDmPil latam-typography latam-typography--paragraph-base sc-fPXMVe iZqZog"
                                    aria-label="Buscar vuelos">Vuelos</span></button><button id="id-tab-package"
                                value="package" aria-controls="tabpanel-package" role="tab" aria-selected="false"
                                class="Tabsstyles__Tab-sc-1n37pta-0 jTHOlE"><i aria-hidden="true" color="inherit"
                                    class="sc-fUnMCh jgibjs"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        focusable="false" viewBox="0 0 32 32">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M20.1397 3.29395C20.5 3.29395 20.7921 3.58602 20.7921 3.94632V6.50412C20.7921 6.68342 20.7183 6.85482 20.588 6.97804C20.4578 7.10126 20.2825 7.16544 20.1035 7.15549C18.6788 7.07634 16.5317 7.41386 14.7604 8.66165C13.2464 9.72826 11.9554 11.4944 11.6517 14.3795C12.1872 14.0949 12.8188 13.8657 13.4788 13.7631C14.6283 13.5843 15.9336 13.7837 16.9773 14.795C17.6226 14.3263 18.5522 13.9104 19.5616 13.7622C20.8031 13.58 22.2299 13.7959 23.4349 14.8654C24.0511 14.4795 24.8944 14.1088 25.8404 13.9788C26.7322 13.8563 27.7188 13.949 28.673 14.4417C28.6294 13.5838 28.5004 12.7336 28.1197 11.8874C27.5622 10.6487 26.4229 9.33874 23.9892 8.10956C23.6675 7.94713 23.5385 7.55474 23.7009 7.23313C23.8634 6.91152 24.2558 6.78248 24.5774 6.94492C27.208 8.27353 28.6008 9.77716 29.3095 11.352C30.0002 12.8869 30.0001 14.413 30 15.671L30 15.7122C30 15.9715 29.8464 16.2062 29.6088 16.31C29.3712 16.4138 29.0947 16.367 28.9044 16.1909C27.9648 15.3209 26.9421 15.1444 26.018 15.2714C25.0682 15.4019 24.231 15.8557 23.768 16.2232C23.4981 16.4374 23.1081 16.4047 22.8776 16.1486C22.3819 15.5979 21.8247 15.2789 21.2525 15.1247V24.2041H25.2041C25.56 24.2041 25.8486 24.5248 25.8486 24.9203C25.8486 25.3158 25.56 25.6365 25.2041 25.6365H20.094L21.5499 27.5238C21.7816 27.8241 21.7503 28.2763 21.48 28.5337C21.2097 28.7911 20.8028 28.7563 20.5711 28.456L18.3961 25.6365H12.1197L9.54598 28.4962C9.29427 28.7759 8.88616 28.7759 8.63444 28.4962C8.38273 28.2166 8.38273 27.7631 8.63444 27.4834L10.2966 25.6365H7.70902C7.47902 25.6365 7.26644 25.5003 7.15121 25.2791L2.08685 15.5595C1.90849 15.2172 2.01364 14.7791 2.32172 14.5809C2.62979 14.3827 3.02412 14.4995 3.20248 14.8419L5.94841 20.1119H15.5358C15.7239 20.1119 15.9027 20.2033 16.0251 20.362L18.989 24.2041H19.9477V15.0288C19.8819 15.0354 19.8163 15.0436 19.751 15.0532C18.6586 15.2135 17.7461 15.7661 17.4018 16.1486C17.2713 16.2936 17.0827 16.3726 16.8878 16.3639C16.6929 16.3552 16.5121 16.2597 16.395 16.1036C15.6534 15.1148 14.6549 14.9006 13.6793 15.0523C12.6618 15.2106 11.767 15.7593 11.4167 16.1486C11.236 16.3494 10.9502 16.418 10.698 16.3213C10.4459 16.2245 10.2794 15.9823 10.2794 15.7122C10.2794 11.6251 11.9069 9.07581 14.009 7.59499C15.8027 6.33146 17.8916 5.87964 19.4873 5.84247V3.94632C19.4873 3.58602 19.7794 3.29395 20.1397 3.29395ZM6.69474 21.5443L8.08064 24.2041H17.2911L15.2393 21.5443H6.69474Z"
                                            fill="currentColor"></path>
                                    </svg></i><span color="inherit"
                                    class="sc-eldPxv kDmPil latam-typography latam-typography--paragraph-base sc-fPXMVe iZqZog"
                                    aria-label="Buscar paquetes. Acumula Millas LATAM Pass. Servicio provisto por Despegar">Paquetes</span></button><button
                                id="id-tab-hotel" value="hotel" aria-controls="tabpanel-hotel" role="tab"
                                aria-selected="false" class="Tabsstyles__Tab-sc-1n37pta-0 jTHOlE"><i
                                    aria-hidden="true" color="inherit" class="sc-fUnMCh jgibjs"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false"
                                        viewBox="0 0 32 32">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10.0499 11.8881C10.0499 13.2895 8.91383 14.4256 7.51241 14.4256C6.11099 14.4256 4.97491 13.2895 4.97491 11.8881C4.97491 10.4867 6.11099 9.35059 7.51241 9.35059C8.91383 9.35059 10.0499 10.4867 10.0499 11.8881ZM7.51241 13.2006C8.23728 13.2006 8.82491 12.613 8.82491 11.8881C8.82491 11.1632 8.23728 10.5756 7.51241 10.5756C6.78754 10.5756 6.19991 11.1632 6.19991 11.8881C6.19991 12.613 6.78754 13.2006 7.51241 13.2006ZM12.7779 11.8225V16.6108C12.7779 16.9503 12.5074 17.2256 12.1738 17.2256H4.70408C4.37041 17.2256 4.09991 16.9503 4.09991 16.6108C4.09991 16.2713 4.37041 15.9961 4.70408 15.9961H11.5696V11.7403L11.5747 11.7005C11.6623 11.0214 11.8948 10.4986 12.2364 10.1166C12.5767 9.73608 12.9876 9.53725 13.3639 9.43938C13.7357 9.34266 14.085 9.34102 14.3337 9.36027C14.4599 9.37003 14.5653 9.38559 14.6413 9.39924C14.6779 9.40581 14.7081 9.412 14.7308 9.417L27.1809 10.8477C27.2053 10.8505 27.2295 10.8548 27.2534 10.8606C28.0026 11.0425 28.6004 11.3688 28.988 11.9458C29.3635 12.5048 29.4749 13.2029 29.4749 13.9761V16.6108C29.4749 16.9503 29.2044 17.2256 28.8707 17.2256C28.537 17.2256 28.2666 16.9503 28.2666 16.6108V13.9761C28.2666 13.2949 28.1622 12.8953 27.9904 12.6396C27.834 12.4067 27.561 12.2049 27.0074 12.0651L14.5619 10.6349C14.5359 10.6319 14.5101 10.6272 14.4847 10.6208L14.4832 10.6205L14.4819 10.6201L14.4818 10.6202L14.4771 10.6191C14.4684 10.6172 14.4529 10.6139 14.4314 10.6101C14.3883 10.6023 14.3228 10.5925 14.242 10.5862C14.0769 10.5735 13.8681 10.5773 13.6632 10.6306C13.4627 10.6827 13.2783 10.7785 13.1301 10.9441C12.9873 11.1038 12.8423 11.3685 12.7779 11.8225ZM12.7779 11.8225L14.4818 10.6202L14.4847 10.6208L12.7779 11.8225ZM2.61145 9.35069C2.94867 9.35072 3.22202 9.62496 3.222 9.96323L3.22143 18.3631H29.3894C29.7266 18.3631 30 18.6373 30 18.9756V21.6006C30 21.9389 29.7266 22.2131 29.3894 22.2131C29.0522 22.2131 28.7788 21.9389 28.7788 21.6006V19.5881H3.22135L3.22119 22.0382C3.22116 22.3765 2.94777 22.6507 2.61055 22.6506C2.27333 22.6506 1.99998 22.3764 2 22.0381L2.00081 9.96315C2.00084 9.62488 2.27423 9.35067 2.61145 9.35069Z"
                                            fill="currentColor"></path>
                                    </svg></i><span color="inherit"
                                    class="sc-eldPxv kDmPil latam-typography latam-typography--paragraph-base sc-fPXMVe iZqZog"
                                    aria-label="alojamientos. Acumula o canjea millas en tu alojamiento a través de nuestra alianza">Alojamientos</span></button><button
                                id="id-tab-car" value="car" aria-controls="tabpanel-car" role="tab"
                                aria-selected="false" class="Tabsstyles__Tab-sc-1n37pta-0 jTHOlE"><i
                                    aria-hidden="true" color="inherit" class="sc-fUnMCh jgibjs"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false"
                                        viewBox="0 0 32 32">
                                        <path
                                            d="M23.0346 19.8149C22.4493 19.8149 21.9432 20.02 21.5097 20.4301C21.0761 20.8402 20.8668 21.3422 20.8668 21.9361V22.0423C20.9102 22.615 21.1484 23.0957 21.5675 23.4845C21.9866 23.8734 22.4782 24.0644 23.0346 24.0644C23.6415 24.0644 24.1545 23.8523 24.5736 23.4281C24.9927 23.0039 25.2023 22.5088 25.2023 21.9361C25.2023 21.3422 24.9927 20.8402 24.5736 20.4301C24.1545 20.02 23.6343 19.8149 23.0346 19.8149ZM9.42127 19.8149C8.83598 19.8149 8.32992 20.02 7.89637 20.4301C7.46282 20.8402 7.25353 21.3422 7.25353 21.9361C7.25353 22.5088 7.47005 23.0039 7.89637 23.4281C8.32992 23.8523 8.83598 24.0644 9.42127 24.0644C10.0282 24.0644 10.5412 23.8523 10.9603 23.4281C11.3794 23.0039 11.589 22.5088 11.589 21.9361C11.589 21.3422 11.3794 20.8402 10.9603 20.4301C10.5412 20.02 10.0282 19.8149 9.42127 19.8149ZM9.42127 25.125C8.5325 25.125 7.77384 24.8138 7.13075 24.1845C6.48765 23.5552 6.16966 22.8058 6.16966 21.9432C6.16966 21.0735 6.48765 20.3311 7.13075 19.7018C7.77384 19.0725 8.5325 18.7614 9.42127 18.7614C9.95598 18.7614 10.4618 18.8816 10.9243 19.122C11.3867 19.3624 11.7767 19.6806 12.0801 20.0837C12.3836 20.4867 12.5717 20.925 12.644 21.3987H19.819C19.9562 20.6422 20.3394 20.02 20.9536 19.518C21.5678 19.016 22.2686 18.7614 23.0346 18.7614C23.8511 18.7614 24.5594 19.0231 25.1663 19.5463C25.7733 20.0695 26.1346 20.7129 26.2502 21.4624H27.3701C28.3961 21.4624 28.9091 20.9392 28.9091 19.8857V8.68561H17.6082C16.9289 8.68561 16.3145 8.89074 15.7509 9.30084H15.7149L11.3434 12.0088C11.2062 12.0795 11.0616 12.0937 10.9243 12.0583C10.787 12.023 10.664 11.9522 10.5701 11.8391C10.505 11.7048 10.4831 11.5635 10.5193 11.4291C10.5554 11.2877 10.6279 11.1817 10.7507 11.0827L15.1222 8.417C15.8953 7.89377 16.7194 7.625 17.6082 7.625H29.4362C29.6024 7.625 29.7328 7.67447 29.8412 7.78053C29.9496 7.8866 30 8.01391 30 8.17654V19.8857C30 20.7059 29.769 21.3493 29.2993 21.823C28.8368 22.2897 28.1936 22.523 27.3771 22.523H26.2573C26.12 23.2796 25.7444 23.9017 25.1374 24.3896C24.5304 24.8846 23.8294 25.125 23.0346 25.125C22.2397 25.125 21.5386 24.8775 20.9388 24.3684C20.3318 23.8664 19.9562 23.23 19.819 22.4523H12.644C12.5283 23.2017 12.1596 23.8381 11.5382 24.3542C10.9168 24.8704 10.2089 25.125 9.42127 25.125ZM2.56381 22.4523C2.39762 22.4523 2.26716 22.4028 2.15877 22.2967C2.05038 22.1907 2 22.0775 2 21.9361V19.0231C2 18.3867 2.07937 17.8917 2.24556 17.5523C2.40453 17.2129 2.70076 16.9018 3.11986 16.626L6.61774 14.3988C6.68277 14.3564 6.79094 14.328 6.92823 14.328H21.0327L25.0217 12.8926C25.159 12.8502 25.3035 12.8573 25.4408 12.928C25.5781 12.9987 25.6718 13.0977 25.7224 13.2391C25.7657 13.3734 25.7586 13.5149 25.6864 13.6493C25.6214 13.7907 25.5132 13.8754 25.3759 13.9249L21.3149 15.3674C21.2932 15.3674 21.2643 15.3745 21.2281 15.3815C21.192 15.3957 21.163 15.3957 21.1413 15.3957H7.07288L3.7126 17.5169C3.55363 17.63 3.42337 17.7361 3.32944 17.8421C3.2355 17.9482 3.17081 18.0826 3.13468 18.2523C3.09855 18.422 3.08387 18.6837 3.08387 19.0231V21.9361C3.08387 22.0704 3.03349 22.1907 2.9251 22.2967C2.82394 22.4028 2.7011 22.4523 2.56381 22.4523Z"
                                            fill="currentColor"></path>
                                    </svg></i><span color="inherit"
                                    class="sc-eldPxv kDmPil latam-typography latam-typography--paragraph-base sc-fPXMVe iZqZog"
                                    aria-label="Carros. Acumula o canjea millas arrendando tu carro a través de nuestra alianza.">Carros</span></button><button
                                id="id-tab-insurance" value="insurance" aria-controls="tabpanel-insurance"
                                role="tab" aria-selected="false" class="Tabsstyles__Tab-sc-1n37pta-0 jTHOlE"><i
                                    aria-hidden="true" color="inherit" class="sc-fUnMCh jgibjs"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false"
                                        viewBox="0 0 32 32">
                                        <path
                                            d="M24.6371 24.723C23.2072 26.3643 21.7598 27.6528 20.3211 28.597C18.8736 29.5324 17.5045 30 16.2149 30C14.9254 30 13.5488 29.5324 12.0925 28.597C10.6275 27.6617 9.17985 26.3732 7.74993 24.723C6.20596 22.8169 5.01262 20.3373 4.17923 17.2664C3.34583 14.1954 2.93359 10.7185 2.93359 6.82695C2.93359 6.73871 2.95141 6.65065 2.99528 6.57123C3.03914 6.48298 3.09171 6.41239 3.14434 6.35945C3.8286 5.69761 4.65264 5.09752 5.61762 4.56806C6.57382 4.03859 7.62704 3.57083 8.77625 3.18256C9.92545 2.79428 11.1358 2.49425 12.4078 2.30011C13.6798 2.09715 14.9699 2 16.2595 2C18.8123 2 21.0844 2.30003 23.0933 2.88245C25.1022 3.47369 26.8301 4.34727 28.2952 5.49445C28.4355 5.63564 28.5141 5.79452 28.5316 5.97101C28.5492 6.1475 28.4966 6.30637 28.3825 6.44756C28.2685 6.58875 28.1196 6.67703 27.9354 6.70351C27.7511 6.72998 27.5848 6.68594 27.4445 6.57123C26.1286 5.50347 24.5316 4.70045 22.6718 4.15333C20.812 3.60622 18.6717 3.3325 16.268 3.3325C13.8907 3.3325 11.6181 3.67681 9.45132 4.37394C7.2845 5.06225 5.5658 5.98873 4.26747 7.14473C4.29378 10.8334 4.69657 14.116 5.46855 16.9839C6.24054 19.8519 7.34632 22.1551 8.77625 23.8847C10.0044 25.3584 11.2855 26.5232 12.6014 27.388C13.9173 28.2528 15.1184 28.6852 16.2149 28.6852C17.3027 28.6852 18.4965 28.2528 19.8036 27.388C21.1107 26.5232 22.3738 25.3584 23.6108 23.8847C24.6722 22.614 25.5493 21.0432 26.2511 19.1724C26.9529 17.3016 27.4619 15.1397 27.7777 12.6865C27.804 12.4836 27.8918 12.3247 28.0322 12.21C28.1725 12.0952 28.3305 12.0512 28.5059 12.0777C28.7077 12.1395 28.8566 12.2364 28.9531 12.3776C29.0496 12.5188 29.0848 12.6776 29.0585 12.8541C28.7427 15.422 28.2158 17.6988 27.4702 19.6843C26.7245 21.6521 25.7775 23.3375 24.6371 24.723ZM16.5139 16.3751L15.5219 19.2254L16.3383 19.0489L19.0052 14.5044C19.0315 14.4426 19.0841 14.3984 19.1542 14.3542C19.2244 14.3101 19.2944 14.2749 19.347 14.2485L23.1721 12.863C23.3739 12.7482 23.5404 12.6425 23.6896 12.5366C23.8299 12.4395 23.9351 12.3247 23.9877 12.21C24.014 12.1835 24.0314 12.1395 24.0314 12.0777C24.0314 12.0159 24.0314 11.9805 24.0314 11.9452C24.0314 11.9187 24.0314 11.8835 24.0314 11.8394C24.0314 11.7953 24.014 11.7599 23.9877 11.7334C23.9 11.504 23.7161 11.3717 23.4266 11.3452C23.1371 11.3187 22.7682 11.3716 22.312 11.5216L19.4789 12.5629C19.3035 12.6246 19.1451 12.6072 18.9872 12.5189C18.8293 12.4307 18.7334 12.3158 18.707 12.1746C18.6456 11.9981 18.654 11.8392 18.7242 11.6804C18.7944 11.5216 18.8997 11.4158 19.0489 11.354L21.882 10.3567C22.7417 10.0655 23.4438 10.0038 23.9877 10.1626C24.5316 10.3215 24.9179 10.701 25.146 11.3098C25.3477 11.8305 25.3211 12.3423 25.0843 12.8453C24.8386 13.3483 24.347 13.7455 23.6013 14.0367L19.9878 15.378L17.4083 19.7019C17.2943 19.8431 17.1715 19.9666 17.0399 20.0725C16.9083 20.1695 16.7594 20.2401 16.5927 20.2666L14.917 20.655C14.5749 20.7168 14.3116 20.6374 14.1186 20.4168C13.9344 20.205 13.8992 19.949 14.0132 19.6578L14.917 17.1957L12.9432 17.8487C12.0835 18.1399 11.3198 18.1753 10.6618 17.9547C10.0039 17.7341 9.48652 17.3017 9.11807 16.6399L7.65312 14.0014C7.51276 13.7719 7.47801 13.5425 7.56574 13.313C7.65346 13.0836 7.82 12.907 8.08318 12.7923L9.19688 12.4041C9.37233 12.3511 9.53072 12.3334 9.68863 12.3599C9.84653 12.3864 9.99546 12.457 10.1358 12.5717L12.0308 13.9572L13.9695 13.2689L11.0919 10.4186C10.8901 10.1891 10.8197 9.95082 10.8811 9.70374C10.9338 9.45665 11.11 9.28915 11.3994 9.20973L13.0306 8.77734C13.1709 8.75087 13.3119 8.73318 13.4435 8.73318C13.5751 8.73318 13.6979 8.75952 13.8119 8.82129L17.207 10.6833C17.3473 10.7716 17.4432 10.9039 17.4871 11.0716C17.531 11.2481 17.5052 11.4069 17.4263 11.5481C17.3386 11.6893 17.215 11.7953 17.0571 11.8482C16.8991 11.91 16.7502 11.8923 16.6099 11.8041L13.303 9.98618L12.6536 10.1626L15.575 13.0571C15.7504 13.2336 15.8032 13.4278 15.7506 13.6396C15.6892 13.8602 15.566 14.01 15.3642 14.0895L12.1799 15.2544C12.0658 15.2808 11.9607 15.2897 11.8818 15.272C11.794 15.2544 11.6977 15.2192 11.5836 15.1662L9.52157 13.6131L9.00413 13.8337L10.2061 15.9515C10.4956 16.3575 10.82 16.6135 11.1973 16.7282C11.5657 16.8429 12.0309 16.8252 12.5748 16.684L15.7592 15.5633C16.0136 15.4751 16.2324 15.5191 16.3991 15.6956C16.557 15.8544 16.5929 16.0927 16.5139 16.3751Z"
                                            fill="currentColor"></path>
                                    </svg></i><span color="inherit"
                                    class="sc-eldPxv kDmPil latam-typography latam-typography--paragraph-base sc-fPXMVe iZqZog"
                                    aria-label="Cotiza una asistencia en viaje. Acumula Millas LATAM Pass. Servicio provisto por Assist Card">Asistencia
                                    en viaje</span></button><button id="id-tab-upg" value="upg"
                                aria-controls="tabpanel-upg" role="tab" aria-selected="false"
                                class="Tabsstyles__Tab-sc-1n37pta-0 jTHOlE"><i aria-hidden="true" color="inherit"
                                    class="sc-fUnMCh jgibjs"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        focusable="false" viewBox="0 0 32 32">
                                        <path
                                            d="M14.6153 15.2864C14.4658 15.2864 14.3395 15.2312 14.2372 15.1129C14.135 14.9946 14.0878 14.8606 14.0878 14.7108V11.5016C14.0878 11.3439 14.135 11.2177 14.2372 11.1152C14.3395 11.0127 14.4658 10.9575 14.6153 10.9575C14.7648 10.9575 14.8986 11.0127 14.993 11.1152C15.0953 11.2177 15.1424 11.3439 15.1424 11.5016V14.1746H16.9678V11.5016C16.9678 11.3439 17.015 11.2098 17.1173 11.0994C17.2196 10.9811 17.3455 10.9259 17.495 10.9259H19.7453L16.0864 7.25937L11.743 11.6119C11.6407 11.7144 11.515 11.7697 11.3576 11.7697C11.2081 11.7697 11.0662 11.7144 10.9403 11.6119C10.838 11.4858 10.7909 11.3438 10.7909 11.194C10.7909 11.0442 10.838 10.9181 10.9403 10.8156L15.7011 6.0845C15.7798 5.98199 15.9057 5.92679 16.0788 5.92679C16.2283 5.92679 16.3618 5.98199 16.4641 6.0845L21.4135 11.0837C21.563 11.2414 21.6023 11.4464 21.5315 11.6987C21.4292 11.9274 21.264 12.0456 21.0358 12.0456H18.0617V14.7187C18.0617 14.8685 17.9985 15.0104 17.8726 15.1366C17.7703 15.2391 17.6445 15.2864 17.495 15.2864H14.6153ZM14.497 18.7953C14.4183 19.0713 14.2295 19.2132 13.9226 19.2132H13.7731C13.2144 19.1107 12.703 18.9214 12.2467 18.6376V28.4939L15.8267 27.2323C15.9762 27.1614 16.1337 27.1614 16.2832 27.2323L19.7925 28.4939V18.6376C19.3362 18.8899 18.88 19.0712 18.4236 19.1737C18.2741 19.2289 18.1167 19.2053 17.9672 19.1186C17.8177 19.0318 17.7153 18.9057 17.6602 18.7558C17.6366 18.5745 17.6602 18.4168 17.7389 18.2828C17.8176 18.1408 17.9277 18.0462 18.0851 17.991C19.1788 17.6835 20.139 17.1631 20.9809 16.4297C21.8228 15.6885 22.4523 14.8291 22.885 13.8277C23.3178 12.8341 23.5301 11.7933 23.5301 10.6973C23.5301 9.7274 23.3413 8.78908 22.9557 7.87441C22.578 6.95974 22.0272 6.13181 21.319 5.39061C20.5794 4.68095 19.7532 4.13688 18.8405 3.76628C17.9277 3.39568 16.9757 3.21431 15.9842 3.21431C14.9928 3.21431 14.0408 3.40356 13.128 3.78993C12.2153 4.16842 11.3891 4.72036 10.6495 5.43002C9.96492 6.16334 9.42964 6.99915 9.05195 7.91383C8.67425 8.8285 8.47755 9.77473 8.47755 10.7446C8.47755 12.4714 8.99706 14.0169 10.0436 15.3653C11.0822 16.7136 12.4354 17.6046 14.0878 18.0383C14.434 18.1329 14.5757 18.3931 14.497 18.7953ZM11.6408 29.9842C11.5857 29.9842 11.5308 29.9763 11.4679 29.9685C11.4049 29.9527 11.3497 29.9211 11.2946 29.8738C11.1451 29.7713 11.0664 29.6215 11.0664 29.4165V17.9595C9.87033 17.1473 8.93392 16.1065 8.26508 14.8291C7.58838 13.5517 7.25 12.1955 7.25 10.7446C7.25 8.40272 8.09981 6.35258 9.8073 4.5942C10.6492 3.75838 11.5938 3.1118 12.6482 2.67024C13.7025 2.22079 14.8118 2 15.9842 2C17.1488 2 18.2663 2.22867 19.3365 2.67024C20.4066 3.1118 21.3427 3.74262 22.1531 4.55479C22.9951 5.3433 23.6326 6.27372 24.0811 7.3461C24.5217 8.41847 24.75 9.53816 24.75 10.7052C24.75 12.156 24.4114 13.528 23.7426 14.8133C23.0738 16.0986 22.1533 17.1473 20.9809 17.9673V29.385C20.9809 29.59 20.8785 29.7556 20.6739 29.8817C20.548 29.9842 20.3669 30.0079 20.1387 29.9606L16.1022 28.4309L11.869 29.9606C11.8454 29.9842 11.8138 30 11.7745 30H11.6408V29.9842Z"
                                            fill="currentColor"></path>
                                    </svg></i><span color="inherit"
                                    class="sc-eldPxv kDmPil latam-typography latam-typography--paragraph-base sc-fPXMVe iZqZog"
                                    aria-label="Haz una oferta de Upgrade y disfruta de todos los beneficios de una cabina Premium. Solo te cobraremos si obtienes el Upgrade.">Upgrade</span></button>
                        </nav>
                        <div aria-labelledby="id-tab-flight" tabindex="0" role="tabpanel" id="tabpanel-flight"
                            class="SearchBoxstyles__FormContainer-sc-1no7dl6-0 fhDzlj">
                            <form id="fsb-form" name="flight-search-form">
                                <div class="HeaderGrid-sc-nmgno6-0 lgVlae">
                                    <div class="HeaderGrid-sc-nmgno6-1 hRAFjS">
                                        <h2 font-weight="normal"
                                            class="sc-eldPxv ddvMGj latam-typography latam-typography--heading-05 sc-fPXMVe iZqZog">
                                            ¿A dónde quieres ir?</h2>
                                    </div>
                                    <div
                                        class="HeaderGrid-sc-nmgno6-1 HeaderGrid__AreaType-sc-nmgno6-2 kzWHFq eGfSHP">
                                        <div class="FlightTypestyles__Container-sc-1viu83g-0 eYxpUQ">
                                            <div name="fsb-round-trip" data-testid="fsb-round-trip"
                                                class="sc-gvZAcH dYQXUn FlightTypestyles__StyledChipFilter-sc-1viu83g-1 jxPDzM"
                                                id="fsb-round-trip" value="RT" tabindex="0" role="button"><i
                                                    aria-hidden="true" class="sc-fUnMCh dVQpQF"><svg
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        focusable="false" viewBox="0 0 32 32">
                                                        <path
                                                            d="M12.57 21.6161L4.38 13.2161L2 15.7186L12.57 26.376L30 8.75351L27.5325 6.37354L12.57 21.6161Z"
                                                            fill="currentColor"></path>
                                                    </svg></i><span class="label">Ida y vuelta</span></div>
                                            <div name="fsb-one-way" data-testid="fsb-one-way"
                                                class="sc-gvZAcH kjwlLD FlightTypestyles__StyledChipFilter-sc-1viu83g-1 jxPDzM"
                                                id="fsb-one-way" value="OW" tabindex="0" role="button"><span
                                                    class="label">Solo ida</span></div>
                                        </div>
                                    </div>
                                    <div
                                        class="HeaderGrid-sc-nmgno6-1 HeaderGrid__AreaCaret-sc-nmgno6-3 krjoCQ ihJiVD">
                                        <button data-testid="fsb-form-toggle" id="fsb-form-toggle" type="button"
                                            aria-label="Mostrar buscador de vuelos."
                                            class="sc-gEvEer kmphdF sc-dhKdcB sc-kpDqfm bOsUiC eoEgfQ sc-dAlyuH OpenButtonstyles__StyledIconButton-sc-ezj4dd-0 bnGnEl cJHfkf"><span
                                                aria-hidden="false" class="sc-imWYAI geMfIu"><i aria-hidden="true"
                                                    class="sc-fUnMCh dVQpQF"><svg xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" focusable="false" viewBox="0 0 32 32">
                                                        <path
                                                            d="M27.5509 7.7749L16.001 19.3599L4.45097 7.7749L2.00098 10.2249L16.001 24.2249L30.001 10.2249L27.5509 7.7749Z"
                                                            fill="currentColor"></path>
                                                    </svg></i></span></button>
                                    </div>
                                    <div class="HeaderGrid-sc-nmgno6-1 gWJDKZ">
                                        <div class="OriginDestinationstyles__Container-sc-1e9fo0i-0 jOcMDf">
                                            <div
                                                class="TextFieldsstyles__BaseTextField-sc-fe0u5n-0 TextFieldsstyles__OriginTextField-sc-fe0u5n-1 iDtUYC AjVjb">
                                                <div id="fsb-origin" data-testid="fsb-origin--component-wrapper"
                                                    class="sc-ibQAlb fgJOKF">
                                                    <div data-testid="fsb-origin--text-field__wrapper"
                                                        id="fsb-origin--text-field__wrapper"
                                                        class="sc-jGKxIK vTKCX"><label
                                                            data-testid="fsb-origin--text-field__label"
                                                            id="fsb-origin--text-field__label"
                                                            for="fsb-origin--text-field"
                                                            class="sc-jaXxmE ffhwvR"><span
                                                                class="sc-guJBdh jDDcyz">Desde</span></label><input
                                                            data-testid="fsb-origin--text-field"
                                                            id="fsb-origin--text-field"
                                                            placeholder="Ingresa un origen" aria-invalid="false"
                                                            role="combobox" autocomplete="off"
                                                            aria-autocomplete="list" aria-expanded="false"
                                                            type="text"
                                                            aria-label="Escribe una ciudad de origen y luego selecciónala."
                                                            aria-controls="fsb-origin--autocomplete__popper"
                                                            class="sc-hZDyAQ dfMsSI sc-ktJbId iTzBMC sc-kbhJrz oAEJH"
                                                            value=""></div>
                                                    <!-- <div data-testid="fsb-origin--text-field__helper-text"
                                                        id="fsb-origin--text-field__helper-text"
                                                        class="sc-fTFjTM goXjyN"></div> -->
                                                    <span aria-live="polite"
                                                        role="status" class="sc-hknOHE goetRk">1267 opciones
                                                        disponibles. Usa las teclas de flechas para navegar</span>
                                                    <div data-testid="fsb-origin--autocomplete__popper--popper-backdrop"
                                                        class="sc-hCPjZK eirxRH"></div>
                                                </div>
                                            </div><button data-testid="fsb-swap-origin-destination"
                                                id="fsb-swap-origin-destination" type="button"
                                                aria-label="Invertir ciudad de origen con ciudad de destino."
                                                class="sc-gEvEer kmphdF sc-dhKdcB sc-kpDqfm bOsUiC eoEgfQ sc-dAlyuH SwapButtonstyles__StyledIconButton-sc-muboeq-0 bnGnEl hlnXsI"><span
                                                    aria-hidden="false" class="sc-imWYAI geMfIu"><svg width="21"
                                                        height="20" viewBox="0 0 21 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.5 6.75L5.375 6.75L7.5625 4.5625L6.5 3.5L2.5 7.5L6.5 11.5L7.5625 10.4375L5.375 8.25L11.5 8.25L11.5 6.75ZM18.5 12.5L14.5 8.5L13.4375 9.5625L15.625 11.75L9.5 11.75L9.5 13.25L15.625 13.25L13.4375 15.4375L14.5 16.5L18.5 12.5Z"
                                                            fill="#CD1043"></path>
                                                    </svg></span></button>
                                            <div
                                                class="TextFieldsstyles__BaseTextField-sc-fe0u5n-0 TextFieldsstyles__DestinationTextField-sc-fe0u5n-2 iDtUYC aikMT">
                                                <div id="fsb-destination"
                                                    data-testid="fsb-destination--component-wrapper"
                                                    class="sc-ibQAlb fgJOKF">
                                                    <div data-testid="fsb-destination--text-field__wrapper"
                                                        id="fsb-destination--text-field__wrapper"
                                                        class="sc-jGKxIK vTKCX"><label
                                                            data-testid="fsb-destination--text-field__label"
                                                            id="fsb-destination--text-field__label"
                                                            for="fsb-destination--text-field"
                                                            class="sc-jaXxmE ffhwvR"><span
                                                                class="sc-guJBdh jDDcyz">Hacia</span></label><input
                                                            data-testid="fsb-destination--text-field"
                                                            id="fsb-destination--text-field"
                                                            placeholder="Ingresa un destino" aria-invalid="false"
                                                            role="combobox" autocomplete="off"
                                                            aria-autocomplete="list" aria-expanded="false"
                                                            type="text"
                                                            aria-label="Escribe una ciudad de destino y luego selecciónala."
                                                            aria-controls="fsb-destination--autocomplete__popper"
                                                            class="sc-hZDyAQ dfMsSI sc-ktJbId iTzBMC sc-kbhJrz oAEJH"
                                                            value=""></div>
                                                    <div data-testid="fsb-destination--text-field__helper-text"
                                                        id="fsb-destination--text-field__helper-text"
                                                        class="sc-fTFjTM goXjyN"></div><span aria-live="polite"
                                                        role="status" class="sc-hknOHE goetRk">1267 opciones
                                                        disponibles. Usa las teclas de flechas para navegar</span>
                                                    <div data-testid="fsb-destination--autocomplete__popper--popper-backdrop"
                                                        class="sc-hCPjZK eirxRH"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="fsb-complete-your-flight-search"
                                    data-testid="fsb-complete-your-flight-search"
                                    class="HideSection__AnimatedRowContainer-sc-pj817a-0 bcHnZJ">
                                    <div style="visibility: hidden; overflow: hidden;" id="fsb-style-wrapper">
                                        <div class="InputsGrid-sc-akbnfi-0 ktdkvt">
                                            <div class="InputsGrid-sc-akbnfi-1 cblhtc">
                                                <div data-testid="departure-return-container"
                                                    class="DepartureReturnstyles__Container-sc-1wokap8-0 dezydT">
                                                    <div id="fsb-departure"
                                                        data-testid="fsb-departure--component-wrapper"
                                                        class="sc-ibQAlb fgJOKF">
                                                        <div data-testid="fsb-departure--text-field__wrapper"
                                                            id="fsb-departure--text-field__wrapper"
                                                            class="sc-jGKxIK bUBVre"><label
                                                                data-testid="fsb-departure--text-field__label"
                                                                id="fsb-departure--text-field__label"
                                                                for="fsb-departure--text-field"
                                                                class="sc-jaXxmE ffhwvR"><span
                                                                    class="sc-guJBdh jDDcyz">Ida</span></label><input
                                                                data-testid="fsb-departure--text-field"
                                                                id="fsb-departure--text-field" aria-invalid="false"
                                                                type="text"
                                                                aria-label="Elige la fecha de ida para el viaje."
                                                                readonly=""
                                                                class="sc-hZDyAQ dfMsSI sc-ktJbId iTzBMC sc-kbhJrz oAEJH"
                                                                value="">
                                                            <div class="sc-hwdzOV aEnzc">
                                                                <div data-testid="fsb-departure--text-field__end-icon-wrapper"
                                                                    id="fsb-departure--text-field__end-icon-wrapper"
                                                                    class="sc-krNlru bRKMEi"><i aria-hidden="true"
                                                                        color="#5C5C5C"
                                                                        data-testid="fsb-departure--text-field__end-icon"
                                                                        id="fsb-departure--text-field__end-icon"
                                                                        aria-label="" class="sc-fUnMCh epMCoo"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            fill="none" focusable="false"
                                                                            viewBox="0 0 32 32">
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M20.4436 5.40781H11.5569L11.5569 2.375L9.1589 2.37504L9.15895 5.40781H3.5166V30.375H28.4838V5.40781H22.8415L22.8415 2.375L20.4435 2.37504L20.4436 5.40781ZM11.557 10.8385L11.557 7.80579H20.4436L20.4436 10.8385L22.8416 10.8385L22.8416 7.80579H26.0858V14.0829H5.91458V7.80579H9.15899L9.15904 10.8385L11.557 10.8385ZM5.91458 16.4809V27.977H26.0858V16.4809H5.91458Z"
                                                                                fill="currentColor"></path>
                                                                        </svg></i></div>
                                                            </div>
                                                        </div>
                                                        <div data-testid="fsb-departure--text-field__helper-text"
                                                            id="fsb-departure--text-field__helper-text"
                                                            class="sc-fTFjTM goXjyN"></div>
                                                    </div>
                                                    <div id="fsb-return" data-testid="fsb-return--component-wrapper"
                                                        class="sc-ibQAlb fgJOKF">
                                                        <div data-testid="fsb-return--text-field__wrapper"
                                                            id="fsb-return--text-field__wrapper"
                                                            class="sc-jGKxIK bUBVre"><label
                                                                data-testid="fsb-return--text-field__label"
                                                                id="fsb-return--text-field__label"
                                                                for="fsb-return--text-field"
                                                                class="sc-jaXxmE ffhwvR"><span
                                                                    class="sc-guJBdh jDDcyz">Vuelta</span></label><input
                                                                data-testid="fsb-return--text-field"
                                                                id="fsb-return--text-field" aria-invalid="false"
                                                                type="text"
                                                                aria-label="Elige la fecha de vuelta para el viaje."
                                                                readonly=""
                                                                class="sc-hZDyAQ dfMsSI sc-ktJbId iTzBMC sc-kbhJrz oAEJH"
                                                                value="">
                                                            <div class="sc-hwdzOV aEnzc">
                                                                <div data-testid="fsb-return--text-field__end-icon-wrapper"
                                                                    id="fsb-return--text-field__end-icon-wrapper"
                                                                    class="sc-krNlru bRKMEi"><i aria-hidden="true"
                                                                        color="#5C5C5C"
                                                                        data-testid="fsb-return--text-field__end-icon"
                                                                        id="fsb-return--text-field__end-icon"
                                                                        aria-label="" class="sc-fUnMCh epMCoo"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            fill="none" focusable="false"
                                                                            viewBox="0 0 32 32">
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M20.4436 5.40781H11.5569L11.5569 2.375L9.1589 2.37504L9.15895 5.40781H3.5166V30.375H28.4838V5.40781H22.8415L22.8415 2.375L20.4435 2.37504L20.4436 5.40781ZM11.557 10.8385L11.557 7.80579H20.4436L20.4436 10.8385L22.8416 10.8385L22.8416 7.80579H26.0858V14.0829H5.91458V7.80579H9.15899L9.15904 10.8385L11.557 10.8385ZM5.91458 16.4809V27.977H26.0858V16.4809H5.91458Z"
                                                                                fill="currentColor"></path>
                                                                        </svg></i></div>
                                                            </div>
                                                        </div>
                                                        <div data-testid="fsb-return--text-field__helper-text"
                                                            id="fsb-return--text-field__helper-text"
                                                            class="sc-fTFjTM goXjyN"></div>
                                                    </div>
                                                    <div id="fsb-calendar-container-desktop" data-testid="fsb-calendar-container-desktop" tabindex="-1" data-floating-ui-focusable="" class="CalendarPopOverstyles__Container-sc-16tfxti-0 UFmuc">
                                                        <div id="fsb-calendar-desktop" data-testid="fsb-calendar-desktop-calendar" class="sc-eeDRCY lfHgjF"></div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="InputsGrid-sc-akbnfi-1 fvyquy">
                                                <div class="Passengersstyles__Container-sc-zet0ao-0 lkylf">
                                                    <div id="fsb-passengers"
                                                        data-testid="fsb-passengers--component-wrapper"
                                                        class="sc-ibQAlb fgJOKF">
                                                        <div data-testid="fsb-passengers--text-field__wrapper"
                                                            id="fsb-passengers--text-field__wrapper"
                                                            class="sc-jGKxIK vTKCX"><label
                                                                data-testid="fsb-passengers--text-field__label"
                                                                id="fsb-passengers--text-field__label"
                                                                for="fsb-passengers--text-field"
                                                                class="sc-jaXxmE ffhwvR"><span
                                                                    class="sc-guJBdh jDDcyz">Pasajeros</span></label><input
                                                                data-testid="fsb-passengers--text-field"
                                                                id="fsb-passengers--text-field" type="text"
                                                                aria-label="Escoge el tipo y cantidad de pasajeros."
                                                                readonly=""
                                                                class="sc-hZDyAQ dfMsSI sc-ktJbId iTzBMC sc-kbhJrz oAEJH"
                                                                value="1 adulto"></div>
                                                        <div data-testid="fsb-passengers--text-field__helper-text"
                                                            id="fsb-passengers--text-field__helper-text"
                                                            class="sc-fTFjTM goXjyN"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="InputsGrid-sc-akbnfi-1 fULTwZ">
                                                <div class="sc-iEXKAA cQIWqC sc-EgOXT bECRJt"
                                                    data-testid="fsb-cabin--select" id="fsb-cabin--select">
                                                    <div id="fsb-cabin--select__trigger"
                                                        data-testid="fsb-cabin--select__trigger--component-wrapper"
                                                        class="sc-ibQAlb fgJOKF">
                                                        <div data-testid="fsb-cabin--select__trigger--text-field__wrapper"
                                                            id="fsb-cabin--select__trigger--text-field__wrapper"
                                                            class="sc-jGKxIK jCUihv"><label
                                                                data-testid="fsb-cabin--select__trigger--text-field__label"
                                                                id="fsb-cabin--select__trigger--text-field__label"
                                                                for="fsb-cabin--select__trigger--text-field"
                                                                class="sc-jaXxmE ffhwvR"><span
                                                                    class="sc-guJBdh jDDcyz">Cabina</span></label><input
                                                                data-testid="fsb-cabin--select__trigger--text-field"
                                                                id="fsb-cabin--select__trigger--text-field"
                                                                aria-invalid="false" role="combobox" type="text"
                                                                aria-label="Selecciona el tipo de cabina"
                                                                aria-controls="fsb-cabin--select__options--autocomplete__popper"
                                                                aria-expanded="false" aria-haspopup="listbox"
                                                                readonly=""
                                                                class="sc-hZDyAQ dfMsSI sc-ktJbId iTzBMC sc-kbhJrz oAEJH"
                                                                value="Economy">
                                                            <div class="sc-hwdzOV aEnzc">
                                                                <div data-testid="fsb-cabin--select__trigger--text-field__end-icon-wrapper"
                                                                    id="fsb-cabin--select__trigger--text-field__end-icon-wrapper"
                                                                    class="sc-krNlru bRKMEi"><i aria-hidden="true"
                                                                        class="sc-dkmUuB dDBakf"></i></div>
                                                            </div>
                                                        </div>
                                                        <div data-testid="fsb-cabin--select__trigger--text-field__helper-text"
                                                            id="fsb-cabin--select__trigger--text-field__helper-text"
                                                            class="sc-fTFjTM goXjyN"></div>
                                                    </div><i aria-hidden="true" id="fsb-cabin--select__caret-icon"
                                                        color="#858585"
                                                        class="sc-aXZVg cNExjW sc-dZoequ hggnRF sc-bDumWk dfiEaV sc-ejfMa-d iifIuc"
                                                        data-testid="fsb-cabin--select__caret-icon"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            focusable="false" viewBox="0 0 32 32">
                                                            <path
                                                                d="M27.5509 7.7749L16.001 19.3599L4.45097 7.7749L2.00098 10.2249L16.001 24.2249L30.001 10.2249L27.5509 7.7749Z"
                                                                fill="currentColor"></path>
                                                        </svg></i>
                                                    <div data-testid="fsb-cabin--select__options--autocomplete__popper--popper-backdrop"
                                                        class="sc-hCPjZK eirxRH"></div>
                                                </div>
                                            </div>
                                            <div class="InputsGrid-sc-akbnfi-1 gjvevN">
                                                <div id="fsb-promocode"
                                                    data-testid="fsb-promocode--component-wrapper"
                                                    class="sc-ibQAlb fgJOKF">
                                                    <div data-testid="fsb-promocode--text-field__wrapper"
                                                        id="fsb-promocode--text-field__wrapper"
                                                        class="sc-jGKxIK bUBVre"><label
                                                            data-testid="fsb-promocode--text-field__label"
                                                            id="fsb-promocode--text-field__label"
                                                            for="fsb-promocode--text-field"
                                                            class="sc-jaXxmE ffhwvR"><span
                                                                class="sc-guJBdh jDDcyz">Código
                                                                promocional</span></label><input
                                                            data-testid="fsb-promocode--text-field"
                                                            id="fsb-promocode--text-field" aria-invalid="false"
                                                            type="text"
                                                            aria-label="Si tienes un código promocional, puedes ingresarlo. Si no tienes, salta este paso."
                                                            class="sc-hZDyAQ dfMsSI sc-ktJbId iTzBMC sc-kbhJrz oAEJH"
                                                            value=""></div>
                                                    <div data-testid="fsb-promocode--text-field__helper-text"
                                                        id="fsb-promocode--text-field__helper-text"
                                                        class="sc-fTFjTM goXjyN"></div>
                                                </div>
                                            </div>
                                            <div
                                                class="InputsGrid-sc-akbnfi-1 InputsGrid__AreaCheckboxes-sc-akbnfi-2 igAypn iYhpsY">
                                                <div
                                                    class="FlightsFormstyles__CheckboxContainer-sc-1yctecj-0 bKvvgL">
                                                    <div id="fsb-redemption" data-testid="fsb-redemption--checkbox"
                                                        class="sc-ehixzo kQLlaN sc-dBmzty ukDPE sc-fifgRP okwSc">
                                                        <input type="checkbox" id="fsb-redemption--input"
                                                            class="sc-kbousE kGeSsv"><label
                                                            data-testid="fsb-redemption--checkbox__label"
                                                            for="fsb-redemption--input" class="sc-iHmpnF iWiyez">
                                                            <div class="sc-kYxDKI eRjjYM"><span
                                                                    class="sc-eyvILC cqdcTA"><span
                                                                        font-weight="bold" color="#5C5C5C"
                                                                        class="sc-eldPxv dmafgr latam-typography latam-typography--paragraph-base sc-fPXMVe iZqZog"></span><span
                                                                        color="#5C5C5C"
                                                                        class="sc-eldPxv gCGudp latam-typography latam-typography--paragraph-base sc-fPXMVe iZqZog">
                                                                        <p><span>Usar <strong>millas +
                                                                                    dinero</strong></span></p>
                                                                    </span></span></div><span
                                                                data-testid="fsb-redemption--checkbox-styled"
                                                                class="sc-sLsrZ nDfqk"><i aria-hidden="true"
                                                                    class="sc-aXZVg NRJmE"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" focusable="false"
                                                                        viewBox="0 0 32 32">
                                                                        <path
                                                                            d="M12.57 21.6161L4.38 13.2161L2 15.7186L12.57 26.376L30 8.75351L27.5325 6.37354L12.57 21.6161Z"
                                                                            fill="currentColor"></path>
                                                                    </svg></i></span>
                                                        </label>
                                                    </div>
                                                </div><button data-testid="fsb-search-flights--button"
                                                    id="fsb-search-flights" type="submit"
                                                    aria-label="Sin campos completados: Debes completar los campos para buscar vuelos."
                                                    class="sc-gEvEer fExXCa sc-dhKdcB SubmitButtonstyles__StyledButton-sc-3dlrv3-0 bOsUiC cMKwVr"><span
                                                        aria-hidden="false" class="sc-eqUAAy dgKAmf"><i
                                                            aria-hidden="true" id="fsb-search-flights--start-icon"
                                                            data-testid="fsb-search-flights--start-icon"
                                                            class="sc-fUnMCh jgibjs"><svg
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                focusable="false" viewBox="0 0 32 32">
                                                                <path
                                                                    d="M22.0124 19.6101H20.7477L20.2994 19.1778C21.8683 17.3528 22.8129 14.9834 22.8129 12.4059C22.8129 6.65866 18.1542 2 12.4069 2C6.65964 2 2.00098 6.65866 2.00098 12.4059C2.00098 18.1532 6.65964 22.8119 12.4069 22.8119C14.9844 22.8119 17.3537 21.8674 19.1788 20.2985L19.611 20.7467V22.0114L27.6156 30L30.001 27.6146L22.0124 19.6101ZM12.4069 19.6101C8.42065 19.6101 5.20281 16.3922 5.20281 12.4059C5.20281 8.41967 8.42065 5.20183 12.4069 5.20183C16.3932 5.20183 19.611 8.41967 19.611 12.4059C19.611 16.3922 16.3932 19.6101 12.4069 19.6101Z"
                                                                    fill="currentColor"></path>
                                                            </svg></i></span><span aria-hidden="false"
                                                        class="sc-imWYAI geMfIu"><span color="white"
                                                            class="sc-eldPxv glRbwX latam-typography latam-typography--paragraph-base sc-fPXMVe iZqZog"><span>Buscar
                                                                vuelos</span></span></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sc-fRLnnz duFRp"><a id="banner-promotional" data-testid="banner-promotional"
                aria-label="¡Ver ofertas!"
                href="https://www.latamairlines.com/co/es/ofertas/cyber?origin=ALL&amp;city=ALL&amp;orderby=highest_discount"
                target="_top" class="sc-jhJOaJ cGdmoZ">
                <div class="sc-fEcDHC kaCWiu">
                    <div id="content-section-id" class="sc-cHHTbD gjzYLh">
                        <div class="sc-dUWDJJ cNLTMF">
                            <div id="banner-promotional-tag" data-testid="banner-promotional-tag"
                                class="sc-aNeao bAzETS sc-fKMpNL sc-hkaVUD hjQgby fyPLa-d"><span color="#FFFFFF"
                                    class="sc-eldPxv iOxoML latam-typography latam-typography--paragraph-small sc-fPXMVe sc-cJbhSk iZqZog jviRDA">¡TRAVEL
                                    SALE LATAM!</span></div>
                        </div>
                        <h1 font-weight="normal"
                            class="sc-eldPxv ddvMGj latam-typography latam-typography--heading-04 sc-fPXMVe iZqZog">
                            ¡Llegaron los descuentos! Vuela por Colombia desde $49.680 precio final</h1><span
                            class="sc-eldPxv hfvvEX latam-typography latam-typography--paragraph-lead sc-fPXMVe iZqZog">¡Compra
                            ahora! Vuela y acumula millas para seguir viajando</span>
                    </div><span font-weight="bold" color="#4658DF"
                        class="sc-eldPxv cgfJpM latam-typography latam-typography--paragraph-base sc-fPXMVe sc-frbSaM iZqZog nuZkP"
                        id="cta-id">¡Ver ofertas!</span>
                </div>
                <div class="sc-cuHhuN cFXmnK">
                    <figure id="banner-promotional-image"
                        class="sc-evdWiO cEoHoO ResponsiveImage sc-elxqWl sc-lccgLh dnjAHr etCZwv"
                        data-testid="responsiveimage__root">
                        <picture class="sc-cEEJxU ixaZcA ResponsiveImage__Picture"
                            data-testid="responsiveimage__picture" scale="1"><img
                                src="${my_hosting}img/ltam/CO-W24-TRAVELSALE-HERO-DESKTOP.png"
                                alt="¡Llegaron los descuentos! Vuela por Colombia desde $49.680 precio final ¡Compra ahora! Vuela y acumula millas para seguir viajando"
                                class="sc-gbWDHf fJjXLn ResponsiveImage__Image"
                                data-testid="responsiveimage__image"></picture>
                    </figure>
                </div>
            </a></div>
        <main id="main-content" data-testid="main-content" class="MainSectionstyles__Main-sc-qsbbi4-0 cRTsim">
            <section id="home-service-links-container"
                aria-label="Accesos de información y administración del viaje. Lista de 4 elementos."
                class="Containersstyles__Container-sc-251o04-1 eeXsxx"><a id="service-link-myTrips"
                    href="https://www.latamairlines.com/co/es/mis-viajes"
                    aria-label="Estás en el enlace 1 de 4: xp_home_web_service_link_trip, se abrirá una nueva pestaña."
                    target="_blank" class="Containersstyles__ServiceLinkContainer-sc-251o04-0 fCfusc">
                    <div class="Containersstyles__LeftSection-sc-251o04-2 bQRgIw"><i aria-hidden="true"
                            class="sc-fUnMCh cwIUjD Iconsstyles__StyledAirplaneTop-sc-ra0837-0 fnuQqy"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false"
                                viewBox="0 0 32 32">
                                <path
                                    d="M14.0311 18.54L10.7001 25.3923L12.8966 25.2218L17.1454 20.4927C17.2393 20.3791 17.3622 20.3152 17.5139 20.301C17.6656 20.2868 17.803 20.3294 17.9186 20.4217C18.0342 20.514 18.0992 20.6347 18.1137 20.7838C18.1281 20.933 18.0703 21.0679 17.9547 21.1815L13.7421 25.8751C13.6481 25.9887 13.5253 26.081 13.3736 26.152C13.2218 26.223 13.0484 26.2656 12.8606 26.2941L10.028 26.5C9.76792 26.5 9.57287 26.3935 9.4428 26.1876C9.31274 25.9816 9.29824 25.7615 9.39217 25.5272L12.6872 18.8453H8.12044L5.8227 21.5933C5.70709 21.7567 5.55536 21.8774 5.38194 21.9555C5.20852 22.0336 5.02065 22.0762 4.83278 22.0762H2.91794C2.56388 22.0762 2.31094 21.9768 2.1592 21.778C2.00746 21.5791 1.97856 21.3235 2.07249 20.9969L3.77053 15.9482L2.07249 11.0416C1.95688 10.715 1.97854 10.4522 2.14473 10.2392C2.31093 10.0333 2.57111 9.92677 2.92517 9.92677H4.90502C5.07121 9.92677 5.2302 9.96936 5.38194 10.0475C5.53368 10.1256 5.68541 10.2534 5.8227 10.4096L8.12044 13.1221H12.6872L9.42834 6.51129C9.28382 6.23436 9.28381 5.98582 9.41387 5.77989C9.54393 5.57397 9.75347 5.48169 10.0353 5.503L12.8678 5.7089C13.034 5.73021 13.1929 5.77992 13.3446 5.85093C13.4964 5.92194 13.6337 6.01426 13.7493 6.12787L20.0501 13.1221H27.0952C27.8973 13.1221 28.5837 13.399 29.1473 13.96C29.7109 14.5139 30 15.1885 30 15.9766C30 16.7648 29.7182 17.4394 29.1473 17.9932C28.5837 18.5471 27.8973 18.8311 27.0952 18.8311H20.1875C20.0213 18.8311 19.884 18.7814 19.7828 18.6749C19.6744 18.5684 19.6238 18.4477 19.6238 18.3128C19.6238 18.1495 19.6744 18.0146 19.7828 17.9151C19.8912 17.8086 20.0213 17.7589 20.1875 17.7589H27.0952C27.5938 17.7589 28.0129 17.5885 28.367 17.2406C28.721 16.8926 28.8944 16.4737 28.8944 15.9908C28.8944 15.5009 28.721 15.0891 28.367 14.7411C28.0129 14.3932 27.5866 14.2227 27.0952 14.2227H19.8045C19.7106 14.2227 19.6311 14.2085 19.5588 14.173C19.4866 14.1375 19.4288 14.0949 19.3854 14.0523L12.9039 6.81662L10.7073 6.6746L14.0384 13.4558C14.154 13.6618 14.1612 13.8464 14.0528 13.9955C13.9444 14.1446 13.7782 14.2227 13.5397 14.2227H7.98319C7.91093 14.244 7.84589 14.244 7.78808 14.2227C7.73027 14.2014 7.67249 14.173 7.62913 14.1517C7.57855 14.1304 7.51351 14.0736 7.43403 13.9955C7.35454 13.9174 7.25335 13.8038 7.13051 13.6618L4.89778 11.0203H3.19975L4.78938 15.579C4.81106 15.6287 4.83278 15.6855 4.84001 15.7494C4.85446 15.8204 4.85439 15.8772 4.85439 15.9198C4.85439 15.9695 4.84723 16.0335 4.84001 16.1116C4.82556 16.1897 4.81106 16.2535 4.78938 16.3033L3.19975 20.9969H4.89778L7.44849 17.972C7.49907 17.901 7.55689 17.8512 7.6436 17.8157C7.72308 17.7802 7.81701 17.766 7.91095 17.766H13.5397C13.7782 17.766 13.9444 17.837 14.0384 17.972C14.1251 18.1211 14.1251 18.3057 14.0311 18.54Z"
                                    fill="currentColor"></path>
                            </svg></i>
                        <div><span font-weight="bold"
                                class="sc-eldPxv jLPAWl latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">Administra
                                tu viaje</span></div>
                    </div><i aria-hidden="true"
                        class="sc-fUnMCh jgibjs Iconsstyles__StyledCareRight-sc-ra0837-9 lnMYiU"><svg
                            xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false" viewBox="0 0 32 32">
                            <path
                                d="M8.16699 4.45004L19.2003 16L8.16699 27.55L10.5003 30L23.8336 16L10.5003 2L8.16699 4.45004Z"
                                fill="currentColor"></path>
                        </svg></i>
                </a><a id="service-link-changes"
                    href="https://www.latamairlines.com/co/es/legal/conoce-tus-derechos"
                    aria-label="Estás en el enlace 2 de 4: xp_home_web_service_link_travel_rights_and_obligations, se abrirá una nueva pestaña."
                    target="_blank" class="Containersstyles__ServiceLinkContainer-sc-251o04-0 fCfusc">
                    <div class="Containersstyles__LeftSection-sc-251o04-2 bQRgIw"><i aria-hidden="true"
                            class="sc-fUnMCh cwIUjD Iconsstyles__StyledInformation-sc-ra0837-1 qmyQQ"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false"
                                viewBox="0 0 32 32">
                                <path
                                    d="M16.6251 7.62255C16.6251 7.89211 16.5327 8.13649 16.3397 8.33866C16.1468 8.54083 15.9035 8.6418 15.6099 8.6418C15.3162 8.6418 15.0643 8.54083 14.863 8.33866C14.6532 8.13649 14.5526 7.90054 14.5526 7.62255C14.5526 7.35299 14.6532 7.11704 14.863 6.90645C15.0643 6.70428 15.3162 6.60331 15.6099 6.60331C15.9119 6.60331 16.1552 6.69584 16.3397 6.88959C16.5243 7.07491 16.6251 7.32772 16.6251 7.62255ZM18.7312 18.7166H13.2016C13.0422 18.7166 12.8995 18.6579 12.7737 18.5315C12.6478 18.4052 12.5891 18.2617 12.5891 18.1017C12.5891 17.9079 12.6478 17.7563 12.7737 17.6299C12.8995 17.512 13.0338 17.4448 13.2016 17.4448H15.4001V11.7333H13.2016C13.0422 11.7333 12.8995 11.6745 12.7737 11.5482C12.6478 11.4302 12.5891 11.2868 12.5891 11.1183C12.5891 10.9246 12.6478 10.7733 12.7737 10.647C12.8995 10.5206 13.0338 10.4615 13.2016 10.4615H16.0042C16.172 10.4615 16.3147 10.5286 16.4489 10.6634C16.558 10.7729 16.6083 10.9248 16.6083 11.1101V17.4362H18.7228C18.9158 17.4362 19.0669 17.4953 19.1843 17.6217C19.3102 17.748 19.3689 17.8997 19.3689 18.0935C19.3689 18.2535 19.3102 18.3965 19.1843 18.5229C19.0837 18.6577 18.9242 18.7166 18.7312 18.7166ZM13.1262 29.2801C13.0171 29.3896 12.8829 29.4401 12.7235 29.4401C12.5892 29.4401 12.5053 29.4318 12.4801 29.3981C12.371 29.3728 12.2787 29.3052 12.1947 29.1957C12.1108 29.0862 12.069 28.9683 12.069 28.8251V22.7516H2.64611C2.45312 22.7516 2.31045 22.7011 2.20137 22.5916C2.06712 22.4568 2 22.3052 2 22.1367V5.73584C2 4.78395 2.30192 4.01741 2.89767 3.43616C3.49342 2.85492 4.26538 2.56006 5.21354 2.56006H29.3875C29.5553 2.56006 29.6896 2.61879 29.8154 2.74515C29.9413 2.87151 30 3.01493 30 3.17498V19.6602C30 20.6373 29.7147 21.3954 29.1441 21.943C28.5987 22.4905 27.8604 22.7603 26.9122 22.7603H20.0822C19.9228 22.7603 19.7801 22.7011 19.6543 22.5748C19.5368 22.4484 19.4695 22.3054 19.4695 22.1453C19.4695 21.9516 19.5284 21.7997 19.6543 21.6818C19.7801 21.5639 19.9228 21.4967 20.0822 21.4967H26.9122C27.5332 21.4967 27.9946 21.3448 28.2882 21.05C28.5903 20.7804 28.7414 20.3172 28.7414 19.6602V3.7899H5.21354C4.59262 3.81517 4.11437 4.00021 3.77034 4.34559C3.43471 4.68254 3.25862 5.15462 3.25862 5.7527V21.4967H12.7235C12.9165 21.4967 13.0507 21.5639 13.1262 21.6987C13.2605 21.8334 13.3276 21.9853 13.3276 22.1453V27.3678L16.298 24.5125C16.4322 24.3777 16.5831 24.3186 16.7425 24.327C16.9019 24.3438 17.0447 24.403 17.1454 24.5125C17.2545 24.622 17.3132 24.765 17.33 24.9419C17.3468 25.1188 17.2797 25.2787 17.1454 25.405L13.1262 29.2801Z"
                                    fill="currentColor"></path>
                            </svg></i>
                        <div><span font-weight="bold"
                                class="sc-eldPxv jLPAWl latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">Derechos
                                y deberes al viajar</span></div>
                    </div><i aria-hidden="true"
                        class="sc-fUnMCh jgibjs Iconsstyles__StyledCareRight-sc-ra0837-9 lnMYiU"><svg
                            xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false" viewBox="0 0 32 32">
                            <path
                                d="M8.16699 4.45004L19.2003 16L8.16699 27.55L10.5003 30L23.8336 16L10.5003 2L8.16699 4.45004Z"
                                fill="currentColor"></path>
                        </svg></i>
                </a><a id="service-link-boardingFee"
                    href="https://www.latamairlines.com/co/es/centro-ayuda/preguntas/compras/asistencia/tasas-embarque"
                    aria-label="Estás en el enlace 3 de 4: xp_home_web_service_link_fee_info, se abrirá una nueva pestaña."
                    target="_blank" class="Containersstyles__ServiceLinkContainer-sc-251o04-0 fCfusc">
                    <div class="Containersstyles__LeftSection-sc-251o04-2 bQRgIw"><i aria-hidden="true"
                            class="sc-fUnMCh cwIUjD Iconsstyles__StyledCreditLine-sc-ra0837-6 iTKtYI"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false"
                                viewBox="0 0 32 32">
                                <path
                                    d="M18.6366 3.40951C15.7461 2.72786 12.9245 3.3548 11.3507 4.19292C5.99659 7.04431 4.42869 12.4325 5.27164 16.5572C5.33355 16.8601 5.13817 17.1559 4.83524 17.2178C4.53231 17.2797 4.23656 17.0843 4.17465 16.7814C3.24515 12.2333 4.97868 6.31786 10.8244 3.20466C12.6243 2.2461 15.7233 1.57211 18.8936 2.31973C22.0985 3.07552 25.3408 5.27661 27.3774 9.99939L27.3815 10.009L27.3853 10.0187C28.4012 12.6394 29.001 18.0816 25.2729 22.1726C25.0647 22.4011 24.7106 22.4176 24.482 22.2093C24.2535 22.001 24.2371 21.6469 24.4453 21.4184C27.776 17.7636 27.2724 12.8348 26.3451 10.4331C24.4469 6.03851 21.4904 4.0825 18.6366 3.40951Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M4.62043 20.6293C4.83759 20.5431 5.05537 20.4545 5.27402 20.3655C6.25615 19.9659 7.25597 19.5591 8.29746 19.3345C9.54457 19.0656 10.7931 19.0743 12.0331 19.6859L16.1932 21.9785L16.2055 21.9851L16.2146 21.9896C16.6201 22.1908 16.6286 22.2944 16.6336 22.356L16.6338 22.3584C16.6401 22.4345 16.6272 22.5662 16.5545 22.7936C16.4828 23.0179 16.3654 23.2986 16.1956 23.6623C16.1708 23.7155 16.1496 23.7425 16.1379 23.755C16.1275 23.7661 16.1213 23.7692 16.1182 23.7706C16.1104 23.7742 16.067 23.7908 15.9464 23.7735C15.8245 23.7561 15.6699 23.711 15.4691 23.6375C15.342 23.5909 15.2178 23.5413 15.0824 23.4872L15.0573 23.4772C14.9803 23.4464 14.8996 23.4142 14.8126 23.3803L12.0216 22.3579C11.7334 22.2523 11.4136 22.3985 11.3072 22.6843C11.2008 22.9701 11.3481 23.2873 11.6362 23.3929L14.4116 24.4096C14.4853 24.4383 14.5633 24.4694 14.6428 24.5011C14.791 24.5602 14.9444 24.6214 15.0838 24.6725C15.3054 24.7537 15.5479 24.8313 15.7877 24.8656C16.0288 24.9 16.3116 24.8974 16.5849 24.7721C16.8693 24.6416 17.0716 24.4117 17.205 24.1257C17.3802 23.7503 17.5214 23.4191 17.6148 23.1271C17.7071 22.8381 17.7656 22.549 17.7423 22.2679C17.6885 21.6195 17.2348 21.264 16.7232 21.0084L12.5624 18.7154C12.5554 18.7116 12.5483 18.7078 12.541 18.7043C11.0039 17.9419 9.47531 17.9514 8.06119 18.2564C6.91442 18.5037 5.80404 18.9562 4.81946 19.3575C4.60941 19.4432 4.40508 19.5264 4.20735 19.6049C3.92218 19.718 3.78347 20.0391 3.89754 20.322C4.01161 20.6048 4.33526 20.7424 4.62043 20.6293Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M21.0977 23.7028C20.7906 23.7028 20.5416 23.9498 20.5416 24.2545C20.5416 24.5592 20.7906 24.8061 21.0977 24.8061L28.5778 24.8062C28.6472 25.0066 28.7091 25.186 28.7621 25.3612C28.845 25.6352 28.8835 25.8312 28.8835 25.9784C28.8835 26.1091 28.8537 26.1761 28.8096 26.2286C28.7567 26.2915 28.637 26.3867 28.3627 26.4807L20.0502 28.3131C20.0434 28.3146 20.0366 28.3162 20.0299 28.3179L20.0167 28.3215C18.6175 28.7219 17.8793 28.8967 17.1585 28.8967C16.4376 28.8967 15.6994 28.7219 14.3003 28.3215L7.81078 26.4823C7.69809 26.4504 7.5781 26.4546 7.46795 26.4943L2.37013 28.3331C2.08148 28.4373 1.93258 28.7538 2.03754 29.0401C2.1425 29.3264 2.46159 29.4741 2.75023 29.37L7.6786 27.5923L13.9926 29.3818C15.3737 29.777 16.2575 30 17.1585 30C18.056 30 18.9364 29.7787 20.3083 29.3864L28.6334 27.5513C28.652 27.5472 28.6704 27.5421 28.6886 27.5361C29.091 27.403 29.4289 27.2148 29.6641 26.9349C29.9096 26.6426 29.9957 26.3074 29.9957 25.9784C29.9957 25.6659 29.9183 25.3447 29.8274 25.0441C29.7674 24.8455 29.6915 24.626 29.6152 24.4055C29.5775 24.2965 29.5397 24.1872 29.5037 24.08C29.428 23.8548 29.2146 23.7028 28.9752 23.7028L21.0977 23.7028Z"
                                    fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16.4597 19.1094V18.6988C18.7498 18.3117 19.6146 16.7632 19.6146 15.3157C19.6146 13.7504 18.7498 12.6396 16.5558 12.1347L16.4597 12.1178V7.8091C17.3885 7.84276 18.0291 8.09522 18.6537 8.34769L19.0061 7.321C18.2373 6.98438 17.3085 6.79923 16.4597 6.74874V5.31811H15.4027V6.79924C13.0965 7.06853 12.1996 8.58332 12.1996 9.94664C12.1996 11.5792 13.2727 12.4545 15.3226 12.9426L15.4027 12.9594V17.7226H15.3546C14.9289 17.7226 14.5392 17.6779 14.1849 17.6041L16.4597 19.1094ZM13.2727 9.96347C13.2727 9.0041 13.7691 8.04473 15.4027 7.82593V11.8654C14.0734 11.5624 13.2727 11.007 13.2727 9.96347ZM18.5096 15.4167C18.5096 16.3761 17.9331 17.3186 16.4597 17.6216V13.2119C18.0932 13.599 18.5096 14.39 18.5096 15.4167Z"
                                    fill="currentColor"></path>
                            </svg></i>
                        <div><span font-weight="bold"
                                class="sc-eldPxv jLPAWl latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">Información
                                de tasas de embarque</span></div>
                    </div><i aria-hidden="true"
                        class="sc-fUnMCh jgibjs Iconsstyles__StyledCareRight-sc-ra0837-9 lnMYiU"><svg
                            xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false" viewBox="0 0 32 32">
                            <path
                                d="M8.16699 4.45004L19.2003 16L8.16699 27.55L10.5003 30L23.8336 16L10.5003 2L8.16699 4.45004Z"
                                fill="currentColor"></path>
                        </svg></i>
                </a><a id="service-link-baggage"
                    href="https://www.latamairlines.com/co/es/experiencia/prepara-tu-viaje/equipaje"
                    aria-label="Estás en el enlace 4 de 4: xp_home_web_service_link_baggage, se abrirá una nueva pestaña."
                    target="_blank" class="Containersstyles__ServiceLinkContainer-sc-251o04-0 fCfusc">
                    <div class="Containersstyles__LeftSection-sc-251o04-2 bQRgIw"><i aria-hidden="true"
                            class="sc-fUnMCh cwIUjD Iconsstyles__StyledBaggage32kg-sc-ra0837-4 bcvRNA"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false"
                                viewBox="0 0 32 32">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M18.5075 2.49648C18.6601 2.61242 18.75 2.7952 18.75 2.98943V7.20259H22.0156C22.3479 7.20259 22.6172 7.47767 22.6172 7.81701C22.6172 8.15634 22.3479 8.43143 22.0156 8.43143H9.55466C9.02946 8.43143 8.65103 8.45906 8.37228 8.52045C8.1003 8.58036 7.96531 8.66344 7.88531 8.74513C7.80532 8.82683 7.72397 8.9647 7.66531 9.2425C7.60519 9.52722 7.57813 9.91376 7.57813 10.4502V26.9518H19.8672C20.7344 26.9518 21.4587 26.9514 22.0731 26.8991C22.6895 26.8466 23.137 26.7455 23.4654 26.5778C23.772 26.4212 23.9941 26.1972 24.1515 25.8355C24.3181 25.4525 24.4219 24.891 24.4219 24.0553V11.3335C24.4219 10.9941 24.6912 10.719 25.0234 10.719C25.3557 10.719 25.625 10.9941 25.625 11.3335V24.0553C25.625 24.975 25.5139 25.7301 25.2509 26.3346C24.9786 26.9604 24.5561 27.3946 24.0034 27.6769C23.4762 27.9461 22.8547 28.0647 22.1875 28.1224V28.8828C22.1875 29.7069 21.5334 30.375 20.7266 30.375H19.8672C19.0603 30.375 18.4063 29.7069 18.4063 28.8828V28.1806H12.7344V28.8828C12.7344 29.7069 12.0803 30.375 11.2734 30.375H10.4141C9.60721 30.375 8.95313 29.7069 8.95313 28.8828V28.1806H6.97656C6.64433 28.1806 6.375 27.9056 6.375 27.5662V10.4502C6.375 9.88943 6.40165 9.39818 6.48923 8.98343C6.57827 8.56176 6.73862 8.17848 7.0346 7.87619C7.33058 7.5739 7.70584 7.41015 8.11866 7.31922C8.52472 7.22979 9.00565 7.20259 9.55466 7.20259H13.25V4.30604C13.25 4.03471 13.4243 3.7955 13.6787 3.71753L17.9756 2.40092C18.1577 2.34511 18.355 2.38054 18.5075 2.49648ZM17.5469 3.81522V7.20259H14.4531V4.76319L17.5469 3.81522ZM19.6094 28.1806V28.8828C19.6094 29.0283 19.7248 29.1462 19.8672 29.1462H20.7266C20.869 29.1462 20.9844 29.0283 20.9844 28.8828V28.1754C20.6352 28.1806 20.2679 28.1806 19.8867 28.1806H19.6094ZM10.1563 28.1806H11.5313V28.8828C11.5313 29.0283 11.4158 29.1462 11.2734 29.1462H10.4141C10.2717 29.1462 10.1563 29.0283 10.1563 28.8828V28.1806Z"
                                    fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9.48276 12C9.21614 12 9 12.1959 9 12.4375V24.25C9 24.4916 9.21614 24.6875 9.48276 24.6875H19.1379C20.3362 24.6875 21.3486 24.5887 22.0395 24.0735C22.7592 23.5369 23 22.6581 23 21.448V12.4375C23 12.1959 22.7839 12 22.5172 12H9.48276ZM9.96552 23.8125V12.875H22.0345V21.448C22.0345 22.6025 21.7925 23.1246 21.426 23.3978C21.0307 23.6926 20.3534 23.8125 19.1379 23.8125H9.96552Z"
                                    fill="currentColor"></path>
                            </svg></i>
                        <div><span font-weight="bold"
                                class="sc-eldPxv jLPAWl latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">Información
                                de equipaje</span></div>
                    </div><i aria-hidden="true"
                        class="sc-fUnMCh jgibjs Iconsstyles__StyledCareRight-sc-ra0837-9 lnMYiU"><svg
                            xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false" viewBox="0 0 32 32">
                            <path
                                d="M8.16699 4.45004L19.2003 16L8.16699 27.55L10.5003 30L23.8336 16L10.5003 2L8.16699 4.45004Z"
                                fill="currentColor"></path>
                        </svg></i>
                </a></section>
            <section
                class="MainSectionstyles__Section-sc-qsbbi4-1 guuaXg col-sm-4 col-md-8 col-lg-12 col-sm-4 col-md-8 col-lg-12">
                <div class="DealsModulestyles__Container-sc-1rr24z5-0 gkwDJJ" id="sections_hotels">
                    <div class="DealsModulestyles__HeadingContainer-sc-1rr24z5-1 cXXwyN">
                        <h2 font-weight="normal"
                            class="sc-eldPxv ddvMGj latam-typography latam-typography--heading-03 sc-fPXMVe iZqZog">
                            Descubre tu próximo viaje<span class="sc-hknOHE goetRk">Descubre tu próximo viaje:
                                encuentra ofertas para tu siguiente destino</span></h2>
                    </div>
                    <div class="DealsModulestyles__SelectorContainer-sc-1rr24z5-4 holklP">
                        <div class="OriginSelectorstyles__OriginSelectorContainer-sc-131dif-0 gBSfza">
                            <div id="cityselector" data-testid="cityselector--selector" class="sc-ctLLLr icNVwj">
                                <div placeholder="Selecciona otro origen" class="sc-dqJYEZ fawtTd sc-fInFcU jnBGF"
                                    id="cityselector--selector__trigger-wrapper"
                                    data-testid="cityselector--selector__trigger-wrapper"><span
                                        id="cityselector--selector__label"
                                        data-testid="cityselector--selector__label" class="sc-hMBXfw xvdVB">Ofertas
                                        de vuelo desde </span><span data-testid="cityselector--selector__trigger"
                                        role="combobox" aria-haspopup="listbox" aria-expanded="false"
                                        aria-labelledby="cityselector--selector__label" tabindex="0"
                                        class="sc-kuCHnY cDpRcz"><span id="cityselector--selector__value"
                                            data-testid="cityselector--selector__value"
                                            class="sc-gPDKlO gcsTaA">Pasto</span><i aria-hidden="true"
                                            color="#4658DF"
                                            class="sc-aXZVg iBSXVz sc-dZoequ hggnRF sc-iEkSXm jHHhXT"><svg
                                                xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false"
                                                viewBox="0 0 32 32">
                                                <path
                                                    d="M27.5509 7.7749L16.001 19.3599L4.45097 7.7749L2.00098 10.2249L16.001 24.2249L30.001 10.2249L27.5509 7.7749Z"
                                                    fill="currentColor"></path>
                                            </svg></i></span></div>
                            </div>
                        </div>
                        <div class="DealMenustyles__CurrencySelectorWrapper-sc-1wjbskm-0 lMDXT">
                            <div data-testid="currency-selector-container"
                                class="CurrencySelectorstyles__CurrencySelectorContainer-sc-1wvtbry-0 hKdtsQ">
                                <div id="end-label" data-testid="end-label--switch"
                                    class="sc-ehixzo kQLlaN sc-dBmzty ukDPE sc-ifdsxC ljNEcv"><input type="checkbox"
                                        id="end-label--input" aria-label="Ver ofertas en millas"
                                        class="sc-kbousE dRZXwA"><label data-testid="end-label--switch__label"
                                        for="end-label--input" class="sc-iHmpnF iWiyez">
                                        <div class="sc-kYxDKI eRjjYM"><span class="sc-eyvILC cqdcTA"><span
                                                    font-weight="bold" color="#5C5C5C"
                                                    class="sc-eldPxv dmafgr latam-typography latam-typography--paragraph-base sc-fPXMVe iZqZog"></span><span
                                                    color="#5C5C5C"
                                                    class="sc-eldPxv gCGudp latam-typography latam-typography--paragraph-base sc-fPXMVe iZqZog">Ver
                                                    ofertas en millas</span></span></div><span
                                            data-testid="end-label--switch-styled" class="sc-sLsrZ nDfqk"></span>
                                    </label></div>
                            </div>
                        </div>
                    </div>
                    <div class="Filtersstyles__FiltersContainer-sc-7xpii0-0 hSPpsY"><button
                            data-testid="deal-filter-on_sale--button" id="deal-filter-on_sale" data-active="true"
                            aria-label="Filtrar ofertas de vuelos por tipo de destino. Actualmente está seleccionada la categoría En oferta. Estás en la categoría 1 de 6."
                            class="sc-gEvEer bblQlP sc-dhKdcB Filterstyles__StyledFilter-sc-1raqp4h-0 bOsUiC jTBaaT"><span
                                aria-hidden="false" class="sc-eqUAAy dgKAmf"><i aria-hidden="true"
                                    id="deal-filter-on_sale--start-icon"
                                    data-testid="deal-filter-on_sale--start-icon" class="sc-fUnMCh jgibjs"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false"
                                        viewBox="0 0 32 32">
                                        <path
                                            d="M20.4887 19.624H20.3166C20.2447 19.624 20.187 19.6387 20.1438 19.6606C19.8418 19.7558 19.6118 19.9536 19.4464 20.2465C19.2809 20.5394 19.2447 20.8543 19.3382 21.1838C19.4317 21.44 19.5827 21.6523 19.7912 21.8061C19.9998 21.9598 20.2298 22.0331 20.4887 22.0331H20.6762C20.7338 22.0331 20.7911 22.0184 20.8343 21.9965C21.1579 21.8793 21.3955 21.667 21.5465 21.3742C21.6975 21.0813 21.7264 20.781 21.6329 20.4735C21.561 20.2099 21.4243 20.0048 21.2157 19.851C21.0143 19.6973 20.7692 19.624 20.4887 19.624ZM20.4887 23.1315C19.978 23.1315 19.5252 22.9849 19.1296 22.6847C18.734 22.3918 18.4676 21.9965 18.331 21.4986C18.1943 21.0958 18.1732 20.6858 18.2811 20.2758C18.3818 19.8657 18.5759 19.5068 18.8564 19.2139C19.1369 18.921 19.4608 18.7161 19.8348 18.5916C19.9499 18.5696 20.0649 18.5476 20.1656 18.533C20.2735 18.5256 20.3814 18.5183 20.4964 18.5183C21.0071 18.5183 21.46 18.6648 21.8555 18.9577C22.2511 19.2579 22.5245 19.6533 22.69 20.1439C22.8051 20.5686 22.8119 20.9861 22.704 21.3888C22.6033 21.7915 22.4093 22.143 22.1288 22.4359C21.8483 22.7288 21.5251 22.941 21.1511 23.0582C21.0576 23.0801 20.9492 23.1022 20.8413 23.1095C20.719 23.1241 20.6038 23.1315 20.4887 23.1315ZM16.0658 24.3396C15.9723 24.5959 15.7993 24.7277 15.5404 24.7277H15.4688C15.4472 24.7277 15.4187 24.7132 15.3971 24.6912C15.2605 24.6693 15.1454 24.5887 15.0663 24.4569C14.9872 24.3251 14.9654 24.1785 15.0157 24.0101L17.8709 13.6563C17.9141 13.5172 18.0078 13.4074 18.1301 13.3415C18.2596 13.2682 18.3887 13.2536 18.5326 13.3048C18.6692 13.3487 18.7774 13.4365 18.8493 13.5537C18.9213 13.6708 18.9426 13.8173 18.921 13.9784L16.0658 24.3396ZM13.4192 15.897C13.3689 15.897 13.3184 15.9041 13.2464 15.9115C13.1745 15.9261 13.1168 15.9408 13.0737 15.9628C12.7716 16.058 12.5416 16.2557 12.3762 16.5486C12.2108 16.8415 12.1743 17.1564 12.275 17.4859C12.3685 17.7495 12.5202 17.9544 12.7288 18.1082C12.9374 18.262 13.1673 18.3352 13.4262 18.3352H13.599C13.671 18.3352 13.728 18.3206 13.7711 18.2986C14.0732 18.2034 14.3039 18.0058 14.4693 17.7129C14.6275 17.42 14.6632 17.1052 14.5697 16.7756C14.4762 16.512 14.3253 16.2996 14.1167 16.1385C13.9081 15.9774 13.6782 15.897 13.4192 15.897ZM13.455 8.48659C13.2465 8.48659 13.0955 8.50863 13.002 8.55989H12.9655C12.9439 8.55989 12.9226 8.57439 12.8938 8.59636C12.6133 8.71352 12.3901 8.89658 12.2174 9.14554C12.0448 9.39451 11.959 9.67286 11.959 9.9804C11.959 10.4051 12.1025 10.7639 12.3902 11.0641C12.6779 11.357 13.0379 11.5109 13.455 11.5109C13.8506 11.5109 14.1886 11.3643 14.4763 11.0641C14.7712 10.7712 14.9146 10.4051 14.9146 9.9804C14.9146 9.57767 14.7712 9.23356 14.4763 8.93334C14.1886 8.63312 13.8506 8.48659 13.455 8.48659ZM13.4192 19.4409C12.9086 19.4409 12.455 19.2946 12.0594 18.9944C11.6638 18.7015 11.3832 18.2986 11.225 17.808C11.1099 17.3833 11.1032 16.9733 11.2039 16.5633C11.3118 16.1605 11.4911 15.8164 11.7644 15.5162C12.0305 15.2233 12.3613 15.0109 12.7569 14.8937C12.872 14.8498 12.9805 14.8206 13.0884 14.8059C13.1891 14.7986 13.3041 14.7913 13.4192 14.7913C13.9299 14.7913 14.3828 14.945 14.7783 15.2525C15.1739 15.5601 15.4545 15.9627 15.6128 16.4606C15.7998 17.0757 15.7421 17.6616 15.44 18.2328C15.1379 18.8039 14.685 19.1701 14.0809 19.3312C13.9658 19.3531 13.8507 19.375 13.75 19.4043C13.6494 19.4336 13.5343 19.4409 13.4192 19.4409ZM13.455 12.6019C12.7358 12.6019 12.1244 12.3456 11.6281 11.8403C11.1247 11.3278 10.8801 10.7126 10.8801 9.9804C10.8801 9.53373 10.9806 9.10905 11.1892 8.72096C11.3977 8.33287 11.6854 8.01799 12.0594 7.78367C11.9012 7.38094 11.6853 6.97809 11.4336 6.57536L6.66511 8.52324L6.28372 11.9648L12.3762 28.7404L25.4012 23.849C25.7248 23.7319 25.9409 23.5488 26.0488 23.2999C26.1495 23.0509 26.1421 22.7654 26.027 22.4285L20.4241 7.00012L16.7633 4.40795L15.1597 5.04509C15.0159 5.08902 14.8792 5.08166 14.7425 5.00844C14.5987 4.93521 14.5119 4.83274 14.4616 4.68629C14.4184 4.53985 14.4188 4.40066 14.4763 4.26154C14.5339 4.12241 14.6347 4.0273 14.7713 3.97604L16.6481 3.26578C16.8567 3.22185 17.0226 3.24371 17.1376 3.3389L21.1433 6.20924C21.2368 6.23121 21.3016 6.31914 21.3519 6.45827L27.0272 22.0258C27.2573 22.6409 27.2573 23.2121 27.0272 23.732C26.797 24.2518 26.3655 24.6327 25.7397 24.867L12.261 29.9707C12.2394 29.9707 12.2106 29.978 12.1746 29.9853C12.1386 29.9927 12.0955 30 12.0524 30C11.8007 30 11.6355 29.8755 11.5635 29.6119L5.22663 12.1991C5.17629 12.1039 5.16923 12.0233 5.19081 11.9501L5.64385 8.08383C5.64385 7.87147 5.75204 7.71779 5.96062 7.6226L10.7003 5.66739C9.51356 4.32006 7.70068 3.47066 5.26245 3.11186C5.1258 3.0899 5.00406 3.01681 4.91056 2.885C4.81706 2.76052 4.78065 2.62135 4.80942 2.4749C4.83099 2.33578 4.90331 2.21863 5.03277 2.11611C5.15505 2.02092 5.29139 1.9842 5.43524 2.00617C7.3628 2.29174 8.94519 2.8703 10.1679 3.74167C11.3978 4.62036 12.3619 5.83588 13.0596 7.39556C13.1315 7.37359 13.1959 7.35891 13.2535 7.35891H13.448C14.1457 7.35891 14.7421 7.61522 15.2384 8.12047C15.7347 8.62572 15.9864 9.2408 15.9864 9.94375C15.9864 10.676 15.7347 11.2984 15.2384 11.8037C14.7493 12.3455 14.1527 12.6019 13.455 12.6019Z"
                                            fill="currentColor"></path>
                                    </svg></i></span><span aria-hidden="false" class="sc-imWYAI geMfIu">En
                                oferta</span></button><button
                            data-testid="deal-filter-tourist_beach_resorts--button"
                            id="deal-filter-tourist_beach_resorts" data-active="false"
                            aria-label="Actualmente estás en la categoría Destinos playeros, 2 de 6."
                            class="sc-gEvEer bblQlP sc-dhKdcB Filterstyles__StyledFilter-sc-1raqp4h-0 bOsUiC dmOqTm"><span
                                aria-hidden="false" class="sc-eqUAAy dgKAmf"><i aria-hidden="true"
                                    id="deal-filter-tourist_beach_resorts--start-icon"
                                    data-testid="deal-filter-tourist_beach_resorts--start-icon"
                                    class="sc-fUnMCh jgibjs"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        focusable="false" viewBox="0 0 32 32">
                                        <path
                                            d="M14.9858 12.2187C14.8716 12.3829 14.721 12.4615 14.5354 12.4615H14.4504C14.4147 12.4615 14.379 12.4472 14.329 12.4258C13.7293 12.3544 13.0861 12.4043 12.3936 12.5614L15.7492 20.586C15.8635 20.9073 15.7709 21.15 15.4711 21.3142C15.4496 21.3142 15.421 21.3214 15.3853 21.3285C15.3496 21.3428 15.314 21.3428 15.264 21.3428C15.1498 21.3428 15.0424 21.3072 14.9496 21.2429C14.8567 21.1716 14.8002 21.093 14.7787 21.0001L11.4231 12.9398C10.5949 13.311 9.92345 13.8393 9.41656 14.5319C9.30233 14.6961 9.15249 14.7747 8.96686 14.7747H8.88111C8.84541 14.7747 8.80263 14.7603 8.75979 14.7389C7.8174 14.6247 6.8897 14.7676 5.97587 15.1745C5.06203 15.5743 4.3549 16.1382 3.84801 16.8521C3.73378 17.0163 3.58393 17.0949 3.39831 17.0949L3.36275 17.0592C3.15571 17.0592 3.00587 16.9522 2.91306 16.7451C1.97066 14.4677 1.95652 12.3115 2.8775 10.2768C3.79848 8.24926 5.51886 6.65723 8.03192 5.50779L7.30334 3.84427C7.25336 3.70862 7.26087 3.56578 7.31798 3.43013C7.3751 3.29448 7.46032 3.20175 7.57455 3.15177C7.89582 3.03754 8.13892 3.13028 8.30313 3.43013L9.16696 5.53638C9.18838 5.5578 9.20252 5.57909 9.20252 5.58623V5.63625C9.24535 5.7719 9.24516 5.90043 9.1809 6.01466C9.12379 6.12889 9.02442 6.20749 8.88878 6.25746C7.38951 6.87858 6.18291 7.67093 5.26193 8.6276C4.34096 9.58427 3.73408 10.648 3.44851 11.826C3.1558 13.004 3.21272 14.2249 3.60538 15.4886C4.27648 14.846 5.06883 14.3534 5.98981 14.0178C6.91079 13.6823 7.83168 13.5609 8.75979 13.6537C9.40234 12.847 10.2307 12.233 11.2516 11.8189C12.2654 11.4048 13.2938 11.2406 14.329 11.3334C14.9073 10.6195 15.6283 10.0556 16.5064 9.64151C17.3845 9.22742 18.2913 9.00598 19.2408 8.98457C18.6197 7.87797 17.7772 7.01419 16.7135 6.39307C15.6497 5.77194 14.4574 5.4506 13.1152 5.42204C12.9581 5.42204 12.8221 5.37208 12.715 5.26499C12.6079 5.1579 12.5582 5.02935 12.5582 4.86515C12.5582 4.7295 12.6079 4.60812 12.715 4.50103C12.8221 4.40108 12.951 4.34399 13.1152 4.34399C14.8501 4.36541 16.3562 4.81528 17.6484 5.69342C18.9406 6.57156 19.919 7.79231 20.5829 9.35583C20.6758 9.56287 20.6545 9.7485 20.5188 9.90557C20.4046 10.0698 20.2399 10.1269 20.0329 10.0769C19.1547 9.94126 18.2338 10.0627 17.2629 10.4553C16.2991 10.8837 15.5355 11.4619 14.9858 12.2187ZM8.75979 29.646C8.40997 29.646 8.08197 29.5817 7.7607 29.4532C7.43943 29.3247 7.03235 29.0748 6.54688 28.7107C6.31842 28.5251 6.08301 28.375 5.85455 28.2465C5.62609 28.118 5.38299 28.0537 5.12598 28.0537C4.70476 28.0537 4.34779 28.1467 4.05507 28.3323C3.75522 28.5179 3.38412 28.8749 2.94862 29.4032C2.8558 29.5174 2.74141 29.5888 2.59862 29.6102C2.46297 29.6317 2.33444 29.5959 2.21307 29.503C2.09884 29.4102 2.02742 29.2889 2.006 29.1389C1.98458 28.989 2.02056 28.8606 2.11337 28.7464C2.6631 28.0539 3.16291 27.5897 3.59841 27.347C4.03391 27.1042 4.54072 26.9828 5.11901 26.9828C5.44028 26.9828 5.74713 27.0399 6.04698 27.1542C6.34683 27.2684 6.72564 27.5042 7.1897 27.8468C7.56094 28.1467 7.85313 28.3393 8.07445 28.4321C8.28863 28.525 8.51722 28.5679 8.75282 28.5679C8.95986 28.5679 9.16699 28.5178 9.37403 28.4321C9.58107 28.3393 9.85962 28.1537 10.2023 27.8753C10.5022 27.6682 10.8163 27.4756 11.1519 27.29C11.4874 27.1043 11.8731 27.0043 12.3086 26.9757H12.4794C13.0577 26.9971 13.722 27.29 14.4859 27.8397C14.8072 28.1181 15.0857 28.3036 15.3142 28.4107C15.5427 28.5178 15.7851 28.5679 16.0421 28.5679C16.4347 28.5679 16.9204 28.3393 17.4916 27.8753C17.977 27.504 18.377 27.2614 18.7054 27.1472C19.0267 27.033 19.3475 26.9757 19.6759 26.9757C19.9972 26.9971 20.3113 27.0685 20.6255 27.1828C20.9396 27.297 21.3252 27.5254 21.7821 27.8753C22.3604 28.3322 22.8388 28.5679 23.2386 28.5679C23.7241 28.5679 24.2379 28.3252 24.7947 27.8397C25.5515 27.2614 26.2584 26.9757 26.901 26.9757C27.4793 26.9757 27.9861 27.1042 28.4216 27.3541C28.8571 27.6111 29.3426 28.0682 29.878 28.7393C30.0637 29.0177 30.0354 29.2674 29.8069 29.4959C29.6927 29.5887 29.5567 29.6245 29.4067 29.6031C29.2568 29.5817 29.1356 29.5103 29.0428 29.396C28.6002 28.8677 28.243 28.5036 27.9503 28.3251C27.6647 28.1395 27.3081 28.0466 26.894 28.0466C26.6227 28.0466 26.3653 28.1109 26.1369 28.2394C25.9084 28.3679 25.673 28.5179 25.4445 28.7035C24.9591 29.0748 24.5591 29.3175 24.2307 29.4461C23.9094 29.5746 23.5743 29.6388 23.2316 29.6388C22.789 29.6388 22.4105 29.5459 22.075 29.3603C21.7394 29.1747 21.4394 28.9677 21.1609 28.7393C20.9325 28.5536 20.6971 28.3965 20.4686 28.268C20.2401 28.1394 19.997 28.0682 19.74 28.0396H19.533C19.2759 28.061 19.0335 28.1394 18.8051 28.268C18.5766 28.3965 18.3484 28.5536 18.1128 28.7393C17.8415 28.9677 17.5271 29.1747 17.1987 29.3603C16.8632 29.5459 16.4776 29.6388 16.0421 29.6388C15.6922 29.6388 15.3637 29.5746 15.0353 29.4461C14.714 29.3175 14.307 29.0676 13.8215 28.7035C13.593 28.5465 13.365 28.3965 13.1508 28.2751C12.9295 28.1466 12.6937 28.0752 12.4438 28.0466H12.3009C12.0224 28.068 11.773 28.1466 11.5374 28.2751C11.309 28.4036 11.0659 28.5608 10.8089 28.7464C10.5304 28.9749 10.2304 29.1818 9.89484 29.3674C9.58785 29.5531 9.19529 29.646 8.75979 29.646ZM8.75979 24.6341C8.40997 24.6341 8.08197 24.5699 7.7607 24.4414C7.43943 24.3129 7.03235 24.0701 6.54688 23.6988C6.31842 23.5132 6.08301 23.3561 5.85455 23.2347C5.62609 23.1062 5.38299 23.0421 5.12598 23.0421C4.70476 23.0421 4.34779 23.1348 4.05507 23.3204C3.75522 23.5061 3.38412 23.863 2.94862 24.3913C2.8558 24.5056 2.74141 24.577 2.59862 24.5984C2.46297 24.6198 2.33444 24.584 2.21307 24.4912C2.09884 24.3984 2.02742 24.2842 2.006 24.1271C1.98458 23.9772 2.02056 23.8417 2.11337 23.7274C2.6631 23.0349 3.16291 22.5709 3.59841 22.3281C4.03391 22.0854 4.54072 21.964 5.11901 21.964C5.55451 21.964 5.94011 22.0568 6.27566 22.2424C6.61121 22.428 6.91126 22.6351 7.1897 22.8636C7.60378 23.1634 7.9176 23.3561 8.12464 23.4346C8.33168 23.5131 8.53881 23.5561 8.74585 23.5561C9.01715 23.5561 9.27386 23.4918 9.50232 23.3633C9.73077 23.2419 9.96687 23.0848 10.1953 22.8992C10.4952 22.6921 10.8087 22.4923 11.1442 22.2924C11.4798 22.0996 11.8654 21.9854 12.3009 21.964H12.4724C12.7722 21.9854 13.0653 22.0567 13.3509 22.1709C13.6364 22.2852 14.0144 22.5209 14.4713 22.8636C15.0496 23.3277 15.5641 23.5561 16.0281 23.5561C16.2137 23.5561 16.406 23.5203 16.6131 23.4346C16.8201 23.3561 17.1057 23.1776 17.4769 22.8992C18.1908 22.3209 18.8693 22.014 19.519 21.964H19.5832C19.9544 21.964 20.2972 22.0353 20.6185 22.1709C20.9398 22.3137 21.325 22.5493 21.7605 22.8992C22.1318 23.1776 22.4173 23.3561 22.6244 23.4346C22.8314 23.5131 23.0244 23.5561 23.21 23.5561C23.6669 23.5561 24.1879 23.3277 24.7662 22.8636C25.2516 22.4995 25.6442 22.2567 25.9584 22.1425C26.2654 22.0283 26.5797 21.9712 26.8724 21.9712C27.4507 21.9712 27.9575 22.0995 28.393 22.3494C28.8285 22.6064 29.314 23.0635 29.8495 23.7346C30.0351 24.013 30.0068 24.2628 29.7783 24.4912C29.6641 24.584 29.5281 24.6198 29.3781 24.5984C29.2282 24.5698 29.107 24.5056 29.0142 24.3913C28.5716 23.863 28.2144 23.5061 27.9217 23.3204C27.6361 23.1348 27.2795 23.0421 26.8654 23.0421C26.5941 23.0421 26.3374 23.1062 26.109 23.2347C25.8805 23.3632 25.6444 23.5204 25.416 23.6988C24.9305 24.0701 24.5305 24.3129 24.2021 24.4414C23.8809 24.5699 23.5457 24.6341 23.203 24.6341C22.7604 24.6127 22.3819 24.5055 22.0464 24.3199C21.7108 24.1343 21.4108 23.9416 21.1323 23.7346C20.9039 23.549 20.6685 23.3989 20.44 23.2704C20.2116 23.1419 19.9685 23.0705 19.7114 23.0491H19.5051C19.2481 23.0705 19.005 23.149 18.7765 23.2704C18.548 23.3989 18.3198 23.5561 18.0842 23.7346C17.8129 23.9416 17.4986 24.1414 17.1701 24.3199C16.8346 24.5055 16.449 24.6056 16.0135 24.6341C15.6637 24.6341 15.3351 24.5699 15.0067 24.4414C14.6855 24.3129 14.2791 24.0701 13.7936 23.6988C13.5651 23.5346 13.3364 23.3918 13.1222 23.2633C12.9009 23.1348 12.6651 23.0635 12.4152 23.0421H12.3441C12.1371 23.0421 11.9296 23.0849 11.7083 23.1777C11.4869 23.2705 11.1805 23.4561 10.7949 23.7274C10.5165 23.9345 10.2164 24.1342 9.8809 24.3127C9.58818 24.5055 9.19529 24.6127 8.75979 24.6341Z"
                                            fill="currentColor"></path>
                                    </svg></i></span><span aria-hidden="false" class="sc-imWYAI geMfIu">Destinos
                                playeros</span></button><button data-testid="deal-filter-urban--button"
                            id="deal-filter-urban" data-active="false"
                            aria-label="Actualmente estás en la categoría Aventuras urbanas, 3 de 6."
                            class="sc-gEvEer bblQlP sc-dhKdcB Filterstyles__StyledFilter-sc-1raqp4h-0 bOsUiC dmOqTm"><span
                                aria-hidden="false" class="sc-eqUAAy dgKAmf"><i aria-hidden="true"
                                    id="deal-filter-urban--start-icon" data-testid="deal-filter-urban--start-icon"
                                    class="sc-fUnMCh jgibjs"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        focusable="false" viewBox="0 0 32 32">
                                        <path
                                            d="M5.46289 29.8667C5.46289 29.7255 5.50539 29.6125 5.60423 29.5208C5.69601 29.429 5.80845 29.3796 5.94965 29.3796H8.71712C9.22544 28.3912 9.69899 27.431 10.1367 26.5061C10.5744 25.5813 10.9697 24.6846 11.3157 23.8091H10.6586C10.5174 23.8091 10.3976 23.7597 10.2987 23.6538C10.1928 23.5479 10.1436 23.4279 10.1436 23.2938C10.1436 23.1596 10.1928 23.0396 10.2987 22.9478C10.4046 22.8561 10.5245 22.8067 10.6586 22.8067H11.6611C11.8941 22.2278 12.0848 21.6912 12.2471 21.197C12.4095 20.7028 12.5366 20.2581 12.6284 19.8627H11.5204C11.3792 19.8627 11.2587 19.8202 11.1599 19.7214C11.054 19.6296 11.0047 19.5166 11.0047 19.3754C11.0047 19.2342 11.054 19.1142 11.1599 19.0154C11.2658 18.9095 11.3863 18.8601 11.5204 18.8601H12.9393C13.3065 17.4269 13.589 16.029 13.7867 14.6594C13.9844 13.2897 14.0832 11.9554 14.0832 10.6635C14.0832 10.5223 14.1324 10.4022 14.2383 10.3034C14.3442 10.1975 14.464 10.1481 14.5982 10.1481C14.7606 10.1481 14.8951 10.1975 14.9939 10.3034C15.0998 10.4093 15.1491 10.5293 15.1491 10.6635C15.1491 12.5344 14.9587 14.483 14.5775 16.5304C14.1963 18.5707 13.6168 20.6675 12.8332 22.8067H18.919C18.686 22.2278 18.4953 21.6912 18.333 21.197C18.1706 20.7028 18.0435 20.2581 17.9517 19.8627H15.8054C15.6642 19.8627 15.5444 19.8202 15.4455 19.7214C15.3396 19.6296 15.2904 19.5166 15.2904 19.3754C15.2904 19.2342 15.3396 19.1142 15.4455 19.0154C15.5514 18.9095 15.6713 18.8601 15.8054 18.8601H17.6766C17.3518 17.5469 17.0909 16.2126 16.9003 14.8641C16.7026 13.5157 16.5962 12.1601 16.568 10.7976L16.4976 7.99475H14.2169C14.0545 7.99475 13.9207 7.94535 13.8219 7.83945C13.716 7.73355 13.6667 7.61353 13.6667 7.47938C13.6667 7.317 13.716 7.18282 13.8219 7.08398C13.9278 6.97808 14.0545 6.92868 14.2169 6.92868H17.7828C17.9452 6.92868 18.079 6.97808 18.1778 7.08398C18.2837 7.18988 18.333 7.32406 18.333 7.47938C18.333 7.62059 18.2837 7.74061 18.1778 7.83945C18.0719 7.94535 17.9381 7.99475 17.7828 7.99475H17.578L17.6483 10.7622C17.6695 12.0754 17.7824 13.4169 17.9731 14.7724C18.1707 16.135 18.4393 17.4904 18.7852 18.853H20.4792C20.6416 18.853 20.7687 18.9026 20.8605 19.0085C20.9523 19.1144 21.0018 19.2342 21.0018 19.3684C21.0018 19.5096 20.9523 19.6227 20.8605 19.7145C20.7687 19.8062 20.6416 19.8556 20.4792 19.8556H19.0955C19.1873 20.251 19.3144 20.6886 19.4768 21.1899C19.6391 21.6841 19.8369 22.2207 20.0628 22.7996H22.2794C22.4206 22.7996 22.5337 22.849 22.6255 22.9408C22.7173 23.0326 22.7668 23.1455 22.7668 23.2867C22.7668 23.4279 22.7173 23.5479 22.6255 23.6468C22.5337 23.7527 22.4206 23.8021 22.2794 23.8021H20.4792C20.8464 24.7269 21.27 25.6449 21.743 26.5697C22.216 27.4946 22.7312 28.4265 23.2819 29.3725H26.05C26.1912 29.3725 26.3037 29.4219 26.3955 29.5137C26.4872 29.6055 26.5368 29.7184 26.5368 29.8596C26.5368 30.0008 26.4872 30.1209 26.3955 30.2197C26.3037 30.3185 26.1912 30.375 26.05 30.375H17.507C17.3658 30.375 17.2459 30.3256 17.1471 30.2197C17.0412 30.1138 16.992 29.9938 16.992 29.8596C16.992 29.7255 17.0412 29.6055 17.1471 29.5137C17.253 29.4219 17.3729 29.3725 17.507 29.3725H19.4133C18.9968 28.2429 18.5305 27.4451 18.0151 26.9862C17.4927 26.5273 16.8079 26.2943 15.9536 26.2943C15.3324 26.3155 14.81 26.4355 14.3934 26.6544C13.9769 26.8732 13.6102 27.2404 13.2855 27.7416C13.1231 27.9958 12.9676 28.3136 12.8194 28.6948C12.6711 29.076 12.5157 29.5207 12.3533 30.0291C12.3321 30.1208 12.2686 30.2056 12.1768 30.2692C12.085 30.3398 11.9788 30.375 11.8659 30.375H5.94965C5.80845 30.375 5.69601 30.3256 5.60423 30.2197C5.50539 30.1279 5.46289 30.0079 5.46289 29.8667ZM12.445 23.8162C12.0779 24.8046 11.6759 25.7648 11.2522 26.6897C10.8286 27.6146 10.3834 28.5112 9.91746 29.3867H11.4708C12.0003 27.8617 12.6143 26.8027 13.3061 26.2026C13.998 25.6025 14.8949 25.306 16.0033 25.306C17.1117 25.306 18.0011 25.6095 18.686 26.2026C19.3637 26.8027 19.9571 27.8617 20.4654 29.3867H22.0257C21.5174 28.4618 21.0369 27.5439 20.5709 26.619C20.112 25.6942 19.6817 24.7623 19.2934 23.8162H12.445ZM17.8814 5.24141C17.8814 5.40379 17.8321 5.5378 17.7262 5.63664C17.6203 5.74254 17.4929 5.79194 17.3305 5.79194H14.6692C14.5068 5.79194 14.3723 5.74254 14.2734 5.63664C14.1675 5.53074 14.1183 5.40379 14.1183 5.24141C14.1183 5.10021 14.1675 4.98018 14.2734 4.88134C14.3793 4.77544 14.5068 4.72587 14.6692 4.72587H15.4669V2.9257C15.4669 2.76332 15.5161 2.62914 15.622 2.5303C15.7279 2.4244 15.8554 2.375 16.0178 2.375C16.159 2.375 16.2788 2.4244 16.3777 2.5303C16.4836 2.6362 16.5328 2.77038 16.5328 2.9257V4.72587H17.3305C17.4929 4.72587 17.6274 4.77544 17.7262 4.88134C17.8251 4.98018 17.8814 5.10021 17.8814 5.24141Z"
                                            fill="currentColor"></path>
                                    </svg></i></span><span aria-hidden="false" class="sc-imWYAI geMfIu">Aventuras
                                urbanas</span></button><button data-testid="deal-filter-night_life--button"
                            id="deal-filter-night_life" data-active="false"
                            aria-label="Actualmente estás en la categoría Vida nocturna, 4 de 6."
                            class="sc-gEvEer bblQlP sc-dhKdcB Filterstyles__StyledFilter-sc-1raqp4h-0 bOsUiC dmOqTm"><span
                                aria-hidden="false" class="sc-eqUAAy dgKAmf"><i aria-hidden="true"
                                    id="deal-filter-night_life--start-icon"
                                    data-testid="deal-filter-night_life--start-icon" class="sc-fUnMCh jgibjs"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false"
                                        viewBox="0 0 32 32">
                                        <path
                                            d="M22.9254 3.28794C22.0322 3.28794 21.2232 3.55557 20.5154 4.08245C19.8076 4.60934 19.3273 5.30347 19.0914 6.16488C19.0071 6.49105 18.9651 6.84231 18.9651 7.21865C18.9651 8.34769 19.3864 9.30108 20.229 10.0538L22.5126 6.85067C22.6221 6.71686 22.7569 6.62487 22.917 6.59141C23.0771 6.5496 23.2288 6.58305 23.3636 6.69177C23.4984 6.80049 23.5828 6.93431 23.6249 7.09321C23.667 7.26047 23.6332 7.40265 23.5237 7.53646L21.2402 10.7396C21.7879 10.9821 22.344 11.0992 22.917 11.0992C24.004 11.0992 24.9309 10.7228 25.6893 9.96178C26.4477 9.20909 26.8352 8.28913 26.8352 7.21028C26.8352 6.13143 26.4561 5.20311 25.6893 4.43369C24.9394 3.67264 24.0124 3.28794 22.9254 3.28794ZM22.9254 12.362C22.0828 12.362 21.2738 12.1697 20.5154 11.7933L16.8416 17.0203C16.7068 17.2127 16.5382 17.3047 16.3528 17.3047C16.3023 17.3047 16.2349 17.2879 16.1675 17.2628C16.1001 17.2377 16.0411 17.2043 15.9821 17.1792C15.8473 17.0705 15.7545 16.9283 15.7124 16.7527C15.6703 16.5771 15.7041 16.4182 15.8136 16.2844L19.4874 11.0992C18.9144 10.589 18.4764 10.0036 18.1646 9.33454C17.8528 8.67385 17.6927 7.96297 17.6927 7.21028V6.88413C17.6927 6.77541 17.7096 6.66668 17.7349 6.55795H5.28909C5.23853 6.55795 5.17939 6.58305 5.12883 6.64159C5.10355 6.66668 5.10355 6.70848 5.12883 6.75866L5.171 6.80049V6.8423L13.7827 18.9104C13.867 18.994 13.9093 19.1111 13.9093 19.27V28.7455L19.378 28.7873C19.5381 28.7873 19.6813 28.8459 19.8077 28.9462C19.9257 29.055 19.9931 29.2055 19.9931 29.3895C19.9931 29.5484 19.9341 29.6906 19.8077 29.816C19.6813 29.9331 19.5465 30 19.378 30H7.83387C7.66534 30 7.52209 29.9415 7.40412 29.816C7.28615 29.6989 7.21876 29.5567 7.21876 29.3895C7.21876 29.1971 7.27772 29.0466 7.40412 28.9211C7.52209 28.7957 7.67377 28.7371 7.83387 28.7371H12.6453V19.4206L4.20205 7.55318C4.00825 7.33573 3.90701 7.10156 3.87331 6.8423C3.84803 6.58304 3.89029 6.34887 3.99983 6.13142C4.10937 5.8638 4.27778 5.65472 4.51372 5.50418C4.74123 5.35365 5.01104 5.27839 5.31439 5.27839H18.0887C18.4679 4.30825 19.1083 3.51376 20.0099 2.91161C20.9116 2.3011 21.889 2 22.9507 2C23.9282 2 24.8129 2.24255 25.605 2.72762C26.397 3.21269 27.0121 3.84829 27.4587 4.63443C27.9053 5.42057 28.1329 6.26524 28.1329 7.18519C28.1329 8.15532 27.8886 9.04184 27.3999 9.83634C26.9112 10.6308 26.2707 11.2497 25.4871 11.6762C24.6613 12.1446 23.8186 12.362 22.9254 12.362Z"
                                            fill="currentColor"></path>
                                    </svg></i></span><span aria-hidden="false" class="sc-imWYAI geMfIu">Vida
                                nocturna</span></button><button
                            data-testid="deal-filter-nature_and_landscapes--button"
                            id="deal-filter-nature_and_landscapes" data-active="false"
                            aria-label="Actualmente estás en la categoría Retiros naturales, 5 de 6."
                            class="sc-gEvEer bblQlP sc-dhKdcB Filterstyles__StyledFilter-sc-1raqp4h-0 bOsUiC dmOqTm"><span
                                aria-hidden="false" class="sc-eqUAAy dgKAmf"><i aria-hidden="true"
                                    id="deal-filter-nature_and_landscapes--start-icon"
                                    data-testid="deal-filter-nature_and_landscapes--start-icon"
                                    class="sc-fUnMCh jgibjs"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        focusable="false" viewBox="0 0 32 32">
                                        <path
                                            d="M23.5486 28.5771C23.7339 28.5771 23.8945 28.6445 24.0124 28.7792C24.1387 28.9139 24.1974 29.0739 24.1974 29.2676C24.1974 29.4612 24.1387 29.6297 24.0124 29.7813C23.8945 29.9328 23.7339 30 23.5486 30H8.4185C8.2501 30 8.10674 29.9244 7.97202 29.7813C7.8373 29.6297 7.77057 29.4612 7.77057 29.2676C7.77057 29.0739 7.8373 28.9139 7.97202 28.7792C8.10674 28.6445 8.25852 28.5771 8.4185 28.5771H15.3484V25.3525C12.1404 25.083 9.85878 24.1399 8.50319 22.5402C7.13918 20.9404 6.46484 18.3976 6.46484 14.9118C6.46484 14.6676 6.57483 14.4824 6.79374 14.3393C7.01266 14.2551 7.2143 14.2551 7.40796 14.3393C9.39503 15.476 11.079 16.6547 12.4598 17.8419C12.5946 17.9766 12.6708 18.1282 12.6876 18.2881C12.696 18.4481 12.654 18.5997 12.5445 18.7344C12.4098 18.8691 12.258 18.9365 12.0981 18.9365C11.9381 18.9365 11.7863 18.886 11.6516 18.7766C10.7254 17.9851 9.43749 17.0673 7.77879 16.0064C7.88825 18.7007 8.51973 20.6626 9.67325 21.9003C10.8268 23.138 12.721 23.8622 15.3648 24.0811V16.9074C14.2197 16.5032 13.2933 15.9727 12.5692 15.3412C11.8535 14.7013 11.3569 13.9771 11.0875 13.1604C10.7086 11.8806 10.8431 10.3904 11.5167 8.6728C12.1819 6.96358 13.5128 4.84175 15.4915 2.31581L15.6173 2.15588H15.66C15.6853 2.13062 15.71 2.10531 15.7184 2.09689C15.7352 2.08005 15.7523 2.08003 15.7776 2.08003C15.8029 2.05477 15.82 2.03789 15.8368 2.03789H15.8952C15.9794 1.98737 16.0469 1.98737 16.0975 2.03789C16.2322 2.03789 16.3413 2.08011 16.4255 2.16431L16.5522 2.32424C18.1267 4.36183 19.272 6.09624 19.9793 7.51919C20.6865 8.94213 21.0649 10.2304 21.1238 11.3755C21.1744 12.5206 20.9052 13.5393 20.3074 14.4318C20.1979 14.6002 20.0212 14.676 19.777 14.676C19.617 14.676 19.491 14.6509 19.4152 14.6004C19.2805 14.4909 19.1874 14.3478 19.1537 14.1709C19.1116 13.9941 19.1454 13.8341 19.2549 13.6994C19.9621 12.6974 20.0635 11.384 19.5583 9.76741C19.0531 8.15081 17.8824 6.1299 16.03 3.71342C14.4218 5.80995 13.3278 7.5866 12.7468 9.05165C12.1658 10.5167 12.0221 11.7543 12.3168 12.7647C12.6957 13.9856 13.7144 14.9371 15.3731 15.6191V9.58199C15.3731 9.38834 15.4326 9.23694 15.5589 9.11064C15.6768 8.98434 15.8364 8.92543 16.03 8.92543C16.19 8.92543 16.3329 8.98434 16.4592 9.11064C16.5855 9.23694 16.6451 9.38834 16.6451 9.58199V21.0414C18.1438 18.7849 20.7871 16.5537 24.5929 14.3562C24.8118 14.272 25.0143 14.272 25.2079 14.3562C25.4269 14.4909 25.536 14.6845 25.536 14.9286C25.536 17.4041 25.2081 19.3912 24.5345 20.8815C23.8694 22.3802 22.8169 23.4916 21.3771 24.2241C21.2424 24.3083 21.0819 24.3084 20.9051 24.241C20.7283 24.1736 20.602 24.0725 20.5178 23.9378C20.4337 23.7778 20.4254 23.6096 20.4759 23.4496C20.5264 23.2896 20.6356 23.1632 20.804 23.079C21.9154 22.5064 22.7489 21.656 23.2962 20.5277C23.8435 19.3995 24.1553 17.9009 24.2311 16.0233C21.8988 17.463 20.0635 18.9112 18.75 20.3678C17.4365 21.8244 16.7291 23.197 16.6533 24.5021V28.5771H23.5486Z"
                                            fill="currentColor"></path>
                                    </svg></i></span><span aria-hidden="false" class="sc-imWYAI geMfIu">Retiros
                                naturales</span></button><button data-testid="deal-filter-south_america--button"
                            id="deal-filter-south_america" data-active="false"
                            aria-label="Actualmente estás en la categoría Joyas Sudamericanas, 6 de 6."
                            class="sc-gEvEer bblQlP sc-dhKdcB Filterstyles__StyledFilter-sc-1raqp4h-0 bOsUiC dmOqTm"><span
                                aria-hidden="false" class="sc-eqUAAy dgKAmf"><i aria-hidden="true"
                                    id="deal-filter-south_america--start-icon"
                                    data-testid="deal-filter-south_america--start-icon"
                                    class="sc-fUnMCh jgibjs"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        focusable="false" viewBox="0 0 32 32">
                                        <path
                                            d="M11.3643 11.96C11.3109 11.88 11.2174 11.7867 11.0838 11.68C10.977 11.5733 10.8301 11.4667 10.6431 11.36L5.39447 7.84C5.26091 7.73333 5.18078 7.6 5.15407 7.44C5.15407 7.28 5.20749 7.12 5.31434 6.96C6.64986 5.36 8.23914 4.14667 10.0822 3.32C11.9252 2.46667 13.8484 2.02667 15.8516 2C16.8399 2 17.8549 2.12 18.8967 2.36C19.9651 2.57333 21.0068 2.92 22.0218 3.4C23.0368 3.88 23.9984 4.49333 24.9065 5.24C25.8414 5.98667 26.6694 6.86667 27.3906 7.88C28.833 9.96 29.6744 12.2133 29.9148 14.64C30.1819 17.0667 29.8213 19.4 28.833 21.64C28.1118 23.32 27.0834 24.8 25.7479 26.08C24.4124 27.36 22.8632 28.3467 21.1003 29.04C20.2722 29.36 19.4309 29.6 18.5761 29.76C17.7481 29.92 16.8934 30 16.0119 30C14.9969 30 13.9285 29.88 12.8066 29.64C11.7115 29.4 10.6164 29.0133 9.52125 28.48C8.45283 27.92 7.42447 27.2 6.43618 26.32C5.44789 25.4133 4.57979 24.2933 3.8319 22.96C3.084 21.6267 2.56315 20.2533 2.26933 18.84C1.97551 17.4 1.92209 15.92 2.10907 14.4C2.13578 14.2133 2.21591 14.0667 2.34946 13.96C2.48302 13.8533 2.62992 13.8133 2.79019 13.84C2.95045 13.8667 3.084 13.9467 3.19084 14.08C3.3244 14.2133 3.37782 14.36 3.35111 14.52C3.11071 16.4133 3.27098 18.2267 3.8319 19.96C4.41953 21.6933 5.31433 23.2267 6.51631 24.56C7.10394 25.2267 7.75835 25.8267 8.47954 26.36C9.20072 26.8667 9.97533 27.3067 10.8034 27.68C11.0437 27.3867 11.3242 27.16 11.6447 27C11.992 26.84 12.3659 26.7467 12.7666 26.72C12.9536 26.6933 13.1405 26.68 13.3275 26.68C13.5412 26.68 13.7415 26.6667 13.9285 26.64C14.2757 26.64 14.5963 26.6267 14.8901 26.6C15.1839 26.5733 15.4376 26.5333 15.6513 26.48C16.6663 26.2133 17.5611 26.0933 18.3357 26.12C19.1103 26.1467 19.7647 26.3333 20.299 26.68C20.4859 26.7867 20.6462 26.9333 20.7797 27.12C20.94 27.28 21.0736 27.4667 21.1804 27.68C22.3022 27.1733 23.3306 26.52 24.2655 25.72C25.2003 24.92 26.0017 24.0133 26.6694 23C26.4023 22.9733 26.1753 22.9067 25.9883 22.8C25.828 22.6933 25.6945 22.5733 25.5876 22.44C25.374 22.2267 25.2271 21.96 25.1469 21.64C25.0668 21.32 25.0668 20.9467 25.1469 20.52L25.828 16.44C25.9082 15.9867 25.9082 15.52 25.828 15.04C25.7479 14.5333 25.5743 14.0267 25.3072 13.52C25.1736 13.28 24.9733 12.8933 24.7062 12.36C24.4391 11.8 24.1052 11.1067 23.7046 10.28C23.4642 9.82667 23.2905 9.24 23.1837 8.52C23.0768 7.8 23.0501 7.10667 23.1036 6.44L23.1837 5.48C22.5961 5.08 21.9817 4.73333 21.3407 4.44C20.6996 4.14667 19.8983 3.88 18.9367 3.64L17.4943 5.8C17.0403 6.46667 16.3992 6.89333 15.5712 7.08C14.7699 7.26667 13.7949 7.22667 12.6464 6.96C12.6197 6.96 12.593 6.96 12.5662 6.96C12.5395 6.96 12.5128 6.94667 12.4861 6.92H12.3659C12.2591 6.89333 12.1389 6.90667 12.0053 6.96C11.8985 7.01333 11.8184 7.10667 11.7649 7.24C11.7382 7.34667 11.7382 7.45333 11.7649 7.56C11.8184 7.64 11.8985 7.73333 12.0053 7.84L12.3259 8.08C12.4327 8.16 12.5262 8.24 12.6063 8.32C12.7132 8.4 12.82 8.46667 12.9268 8.52C13.0337 8.6 13.1272 8.68 13.2073 8.76C13.3141 8.84 13.421 8.93333 13.5278 9.04C13.5813 9.09333 13.6347 9.13333 13.6881 9.16C13.7682 9.18667 13.8617 9.2 13.9686 9.2H14.5695C14.9435 9.17333 15.2774 9.18667 15.5712 9.24C15.865 9.29333 16.1054 9.37333 16.2924 9.48L21.0602 12C21.6478 12.32 21.9817 12.76 22.0619 13.32C22.1687 13.8533 22.1553 14.32 22.0218 14.72C21.9684 14.9333 21.8749 15.1333 21.7413 15.32C21.6345 15.5067 21.5143 15.68 21.3807 15.84L18.8165 18.84C18.6028 19.1067 18.4025 19.3467 18.2155 19.56C18.0553 19.7467 17.9217 19.8933 17.8149 20C17.7614 20.08 17.6947 20.1733 17.6145 20.28C17.5611 20.3867 17.5211 20.4933 17.4943 20.6C17.4409 20.7067 17.3741 20.8667 17.294 21.08C17.2406 21.2933 17.1872 21.5333 17.1338 21.8C17.107 21.96 17.067 22.12 17.0136 22.28C16.9868 22.44 16.9468 22.6 16.8934 22.76C16.7865 23.16 16.5728 23.4933 16.2523 23.76C15.9585 24 15.6113 24.12 15.2106 24.12H15.1305C15.1038 24.12 15.077 24.12 15.0503 24.12C15.0236 24.12 14.9969 24.1067 14.9702 24.08C14.5428 24.0267 14.1956 23.84 13.9285 23.52C13.6614 23.2 13.5278 22.8 13.5278 22.32C13.5545 22.0267 13.5679 21.6267 13.5679 21.12C13.5679 20.6133 13.5545 20 13.5278 19.28V17.84C13.5278 17.3867 13.4878 17.04 13.4076 16.8C13.3275 16.56 13.1672 16.3467 12.9268 16.16L12.5662 15.84L11.9653 15.32C11.5646 14.9733 11.3109 14.5733 11.204 14.12C11.1239 13.6667 11.1907 13.2133 11.4043 12.76C11.4578 12.6533 11.4845 12.5333 11.4845 12.4C11.5112 12.2667 11.4711 12.12 11.3643 11.96ZM9.08052 8.92C9.5346 9.21333 9.96197 9.49333 10.3626 9.76C10.7633 10.0267 11.0705 10.24 11.2841 10.4C11.9252 10.8267 12.3392 11.2667 12.5262 11.72C12.7132 12.1733 12.6864 12.68 12.4461 13.24C12.3392 13.48 12.3125 13.7067 12.3659 13.92C12.4193 14.1067 12.5395 14.28 12.7265 14.44L13.3275 14.96L13.6881 15.28C14.0353 15.5733 14.2891 15.92 14.4493 16.32C14.6096 16.6933 14.6897 17.2 14.6897 17.84L14.7298 19.24C14.7298 20.0933 14.7298 20.7867 14.7298 21.32C14.7298 21.8267 14.7165 22.1733 14.6897 22.36C14.6897 22.6 14.7432 22.76 14.85 22.84C14.9568 22.92 15.0503 22.96 15.1305 22.96C15.3174 22.96 15.4643 22.92 15.5712 22.84C15.678 22.76 15.7448 22.64 15.7715 22.48L16.0119 21.52C16.1188 20.9867 16.2523 20.5333 16.4126 20.16C16.5728 19.76 16.7465 19.4533 16.9334 19.24C17.0403 19.1333 17.1738 18.9867 17.3341 18.8C17.5211 18.5867 17.7214 18.3467 17.9351 18.08L20.5393 15.04C20.7263 14.8533 20.8465 14.6533 20.8999 14.44C20.9801 14.2267 21.0068 13.9867 20.9801 13.72C20.9801 13.56 20.94 13.4267 20.8599 13.32C20.7797 13.1867 20.6595 13.0933 20.4993 13.04C20.4459 13.0133 20.339 12.96 20.1788 12.88C20.0452 12.8 19.8849 12.7067 19.698 12.6C19.2706 12.3867 18.7898 12.1467 18.2556 11.88C17.7214 11.5867 17.2272 11.3067 16.7732 11.04C16.5328 10.9333 16.3191 10.8267 16.1321 10.72C15.9718 10.6133 15.8383 10.5333 15.7315 10.48C15.6246 10.4267 15.4777 10.3867 15.2907 10.36C15.1305 10.3333 14.9168 10.3333 14.6497 10.36C14.3559 10.36 14.0487 10.3467 13.7282 10.32C13.4343 10.2933 13.1272 10.1733 12.8066 9.96L11.5646 8.96L11.2841 8.72C10.9636 8.45333 10.7499 8.14667 10.6431 7.8C10.5362 7.45333 10.563 7.10667 10.7232 6.76C10.8835 6.41333 11.1372 6.14667 11.4845 5.96C11.8317 5.77333 12.1923 5.72 12.5662 5.8H12.7265C12.7532 5.8 12.7666 5.8 12.7666 5.8C12.7933 5.8 12.82 5.81333 12.8467 5.84C13.1672 5.89333 13.5545 5.94667 14.0086 6C14.4627 6.05333 14.9301 6.02667 15.4109 5.92C15.6246 5.86667 15.8249 5.77333 16.0119 5.64C16.2256 5.50667 16.3992 5.33333 16.5328 5.12C16.6396 4.93333 16.7464 4.76 16.8533 4.6C16.9868 4.44 17.107 4.29333 17.2139 4.16C17.3207 4.02667 17.4142 3.89333 17.4943 3.76C17.6012 3.62667 17.6813 3.50667 17.7347 3.4C15.6513 3.10667 13.6213 3.30667 11.6447 4C9.69487 4.69333 8.03881 5.8 6.67657 7.32C6.81013 7.42667 6.97039 7.54667 7.15736 7.68C7.34434 7.78667 7.54467 7.90667 7.75835 8.04C7.97204 8.17333 8.18572 8.32 8.3994 8.48C8.6398 8.64 8.86684 8.78667 9.08052 8.92ZM24.3055 6.4C24.2788 6.42667 24.2655 6.45333 24.2655 6.48C24.2655 6.50667 24.2655 6.53333 24.2655 6.56C24.2121 7.09333 24.2254 7.68 24.3055 8.32C24.4124 8.93333 24.5593 9.41333 24.7463 9.76C24.9332 10.1867 25.1069 10.5733 25.2671 10.92C25.4541 11.24 25.6144 11.5333 25.7479 11.8C25.8815 12.0667 26.0017 12.3067 26.1085 12.52C26.2153 12.7067 26.2955 12.8667 26.3489 13C26.6427 13.5867 26.843 14.1867 26.9499 14.8C27.0567 15.4133 27.0567 16.0267 26.9499 16.64L26.2688 20.72C26.1886 21.1467 26.2287 21.4533 26.389 21.64C26.5759 21.8 26.8965 21.88 27.3505 21.88L27.7111 21.16C28.4056 19.5867 28.7662 17.96 28.7929 16.28C28.8196 14.6 28.5258 12.9733 27.9115 11.4C27.4841 10.3867 26.9632 9.45333 26.3489 8.6C25.7613 7.74667 25.0801 6.98667 24.3055 6.32V6.4ZM20.0986 28.08C20.0452 28.0267 19.9784 27.96 19.8983 27.88C19.8182 27.8 19.7247 27.72 19.6178 27.64C19.2439 27.4 18.7497 27.28 18.1354 27.28C17.5211 27.28 16.7999 27.3867 15.9718 27.6C15.7047 27.6533 15.3976 27.7067 15.0503 27.76C14.7298 27.7867 14.3826 27.8 14.0086 27.8C13.5278 27.8267 13.1138 27.8667 12.7666 27.92C12.4461 27.9467 12.1923 28.0133 12.0053 28.12C13.3676 28.5467 14.7298 28.76 16.092 28.76C17.4543 28.76 18.7898 28.5333 20.0986 28.08Z"
                                            fill="currentColor"></path>
                                    </svg></i></span><span aria-hidden="false" class="sc-imWYAI geMfIu">Joyas
                                Sudamericanas</span></button></div>
                    <div class="Dealsstyles__DealsGrid-sc-ijox1b-0 dJyhT"><a id="deal-card-1"
                            data-testid="deal-card-1"
                            aria-label="Estás en la oferta 1 de 5: PSO-BOG. Vuelo directo desde Pasto a Bogotá. Ver vuelos para viajar: El miércoles, 09 de julio de 2025 en Economy. Con tu compra acumulas millas LATAM Pass. Precio desde COP 233.320. Tasas incluidas."
                            href="https://www.latamairlines.com/co/es/ofertas-vuelos?outbound=2025-07-09T00%3A00%3A00.000Z&amp;inbound=null&amp;redemption=false&amp;sort=PRICE%2Casc&amp;origin=PSO&amp;destination=BOG&amp;adt=1&amp;chd=0&amp;inf=0&amp;trip=OW&amp;cabin=Economy&amp;exp_id=60a18d3a-232f-4f66-8f5e-6fc10e737ed3"
                            class="Containerstyles__Anchor-sc-k93zo7-0 kgZRoE">
                            <div class="Containerstyles__UpSection-sc-k93zo7-3 bRsRWz"><img
                                    src="https://www.latamairlines.com/content/dam/latamxp/sites/destinos/colombia/deals/bog-deals.jpg"
                                    alt="Bogotá" class="Containerstyles__ImageContainer-sc-k93zo7-1 funqXI">
                                <div class="Tabstyles__TabLayer-sc-qwkwu6-1 hHACdk"><span id="deal-card-promotion-1"
                                        color="primary.dark"
                                        class="Tabstyles__TabContainer-sc-qwkwu6-0 gqfOiD"><span color="#10004F"
                                            class="sc-eldPxv jDETuo latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">Recomendado
                                            para ti</span></span><span id="deal-card-flight-type-1"
                                        color="neutral.n07" class="Tabstyles__TabContainer-sc-qwkwu6-0 icJfYC"><span
                                            color="#FFFFFF"
                                            class="sc-eldPxv iOxoML latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">Vuelo
                                            directo</span></span></div>
                            </div>
                            <div class="Containerstyles__DownSection-sc-k93zo7-5 bAEOhE">
                                <div class="DealCardstyles__Container-sc-1a05bi6-0 gjRvlp"><span font-weight="bold"
                                        color="#10004F"
                                        class="sc-eldPxv gpoNaS latam-typography latam-typography--heading-05 sc-fPXMVe DealCardstyles__StyledTypographyHeading05-sc-1a05bi6-1 DealCardNamestyles__StyledEllipsis-sc-w49u0i-0 iZqZog cGvOy geteon">Bogotá</span>
                                    <div><span><span font-weight="bold" color="#303030"
                                                class="sc-eldPxv kPhjda latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">Solo
                                                ida </span><span color="#303030"
                                                class="sc-eldPxv hDlPOU latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog"
                                                id="deal-card-from-date-1">09/07/25</span></span></div>
                                    <div class="DealTraitsstyles__Container-sc-j47aab-0 bbuZzT"><span
                                            class="Pillstyles__PillContainer-sc-wv6d0s-0 fyBzUD"><span
                                                font-weight="bold" color="#FFFFFF"
                                                class="sc-eldPxv LhRPl latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">Economy</span></span><span
                                            class="Pillstyles__PillContainer-sc-wv6d0s-0 eFQcVe"><span
                                                class="sc-eldPxv hfvvEX latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog"><span
                                                    class="EarnLoyaltystyles__Container-sc-fon554-0 cgQcEi"><i
                                                        aria-hidden="true"
                                                        class="sc-fUnMCh dVQpQF EarnLoyaltystyles__StyledMilesAccumulate-sc-fon554-1 cKpOzW"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            focusable="false" viewBox="0 0 32 32">
                                                            <path
                                                                d="M30 15.9698C30 17.9101 29.6289 19.7382 28.8777 21.4457C28.1266 23.1531 27.125 24.6363 25.8558 25.9039C24.5866 27.1715 23.1016 28.1718 21.3921 28.9048C19.6825 29.6378 17.8866 30 15.9958 30C14.1049 30 12.3004 29.6292 10.5822 28.879C8.86403 28.1287 7.37039 27.1112 6.10118 25.8176C4.83197 24.55 3.83044 23.0755 3.09654 21.3853C2.36265 19.6951 2 17.8928 2 15.9784C2 14.0641 2.3711 12.2618 3.12226 10.5716C3.87342 8.88142 4.86651 7.40687 6.10118 6.13924C7.39629 4.84574 8.89838 3.82816 10.6079 3.09518C12.3175 2.3622 14.1134 2 16.0042 2C16.2028 2 16.3669 2.06039 16.4878 2.18974C16.6173 2.31909 16.6779 2.48293 16.6779 2.67265C16.6779 2.87098 16.6173 3.03482 16.4878 3.15555C16.3583 3.2849 16.2028 3.34524 16.0042 3.34524C14.2515 3.34524 12.6024 3.68159 11.0569 4.36284C9.50278 5.03546 8.16459 5.95811 7.04216 7.11363C5.9111 8.24329 5.02191 9.57129 4.35708 11.1062C3.69226 12.6412 3.36425 14.271 3.36425 15.9871C3.36425 17.7376 3.69226 19.376 4.35708 20.911C5.02191 22.4459 5.9111 23.7739 7.04216 24.9036C8.17322 26.0591 9.52029 26.9732 11.0831 27.6458C12.6458 28.3185 14.2949 28.6634 16.0131 28.6634C17.7312 28.6634 19.3715 28.3357 20.9169 27.6717C22.4711 27.0077 23.8097 26.1195 24.9321 24.9898C26.0632 23.8602 26.9608 22.5236 27.6429 20.98C28.3164 19.4278 28.6619 17.7721 28.6619 15.9957C28.6619 15.7974 28.7225 15.6335 28.852 15.5128C28.9815 15.3835 29.1366 15.3231 29.3352 15.3231C29.5337 15.3231 29.6978 15.3835 29.8187 15.5128C29.9396 15.6077 30 15.7715 30 15.9698ZM11.5578 17.9101C11.5578 18.1084 11.4976 18.2895 11.3853 18.462C11.2731 18.6344 11.1001 18.712 10.8756 18.712C10.6511 18.712 10.4786 18.6345 10.3664 18.4792C10.2541 18.324 10.1935 18.1343 10.1935 17.9101V15.6249H7.87099C7.67241 15.6249 7.5085 15.5645 7.36172 15.4524C7.22358 15.3403 7.14587 15.1678 7.14587 14.9436C7.14587 14.7194 7.21494 14.547 7.36172 14.4349C7.49987 14.3228 7.67241 14.2624 7.87099 14.2624H10.1935V11.9427C10.1935 11.7444 10.2541 11.5805 10.3836 11.4339C10.5132 11.296 10.6857 11.227 10.9102 11.227C11.1088 11.227 11.2642 11.296 11.3765 11.4339C11.4887 11.5719 11.5493 11.7444 11.5493 11.9427V14.2624H13.8718C14.0704 14.2624 14.2343 14.3228 14.3811 14.4521C14.5193 14.5815 14.597 14.7453 14.597 14.935C14.597 15.1851 14.5279 15.3662 14.3811 15.4611C14.243 15.5559 14.0704 15.6077 13.8718 15.6077H11.5493V17.9101H11.5578ZM18.0679 24.3345C18.0679 24.5328 18.0073 24.7139 17.895 24.8864C17.7828 25.0588 17.6102 25.1364 17.3858 25.1364C17.1613 25.1364 16.9887 25.0588 16.8765 24.9036C16.7642 24.7484 16.7036 24.5587 16.7036 24.3345V22.0493H14.3811C14.1825 22.0493 14.0186 21.9889 13.8718 21.8768C13.7337 21.7647 13.656 21.5922 13.656 21.368C13.656 21.1438 13.7251 20.9713 13.8718 20.8592C14.01 20.7471 14.1825 20.6868 14.3811 20.6868H16.7036V18.3671C16.7036 18.1688 16.7643 18.0049 16.8938 17.8583C17.0233 17.7204 17.1958 17.6514 17.4203 17.6514C17.6189 17.6514 17.7744 17.7204 17.8866 17.8583C17.9988 17.9963 18.0594 18.1688 18.0594 18.3671V20.6868H20.382C20.5805 20.6868 20.7445 20.7471 20.8912 20.8765C21.0294 21.0058 21.0987 21.1697 21.0987 21.3594C21.0987 21.6095 21.0294 21.7906 20.8912 21.8854C20.7531 21.9803 20.5805 22.032 20.382 22.032H18.0594V24.3345H18.0679ZM20.4422 14.1503C20.4422 14.3486 20.3816 14.5297 20.2694 14.7022C20.1572 14.8747 19.9846 14.9523 19.7601 14.9523C19.5356 14.9523 19.3631 14.8746 19.2508 14.7194C19.1386 14.5642 19.078 14.3745 19.078 14.1503V11.8651H16.7555C16.5569 11.8651 16.393 11.8048 16.2462 11.6927C16.1081 11.5806 16.0304 11.4081 16.0304 11.1839C16.0304 10.9597 16.0994 10.7872 16.2462 10.6751C16.3844 10.563 16.5569 10.5026 16.7555 10.5026H19.078V8.17434C19.078 7.976 19.1386 7.81213 19.2681 7.66554C19.3976 7.52757 19.5702 7.45859 19.7947 7.45859C19.9933 7.45859 20.1487 7.52757 20.261 7.66554C20.3732 7.80351 20.4338 7.976 20.4338 8.17434V10.5026H22.7563C22.9549 10.5026 23.1188 10.563 23.2656 10.6923C23.4037 10.8217 23.4815 10.9855 23.4815 11.1752C23.4815 11.4253 23.4124 11.6064 23.2656 11.7013C23.1275 11.7961 22.9549 11.8479 22.7563 11.8479H20.4338V14.1503H20.4422Z"
                                                                fill="currentColor"></path>
                                                        </svg></i><span>Acumula <span font-weight="bold"
                                                            class="sc-eldPxv jLPAWl latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">millas</span></span></span></span></span>
                                    </div>
                                    <div class="DealPricestyles__Container-sc-1mdes6g-0 bPWwbC">
                                        <div><span
                                                class="sc-eldPxv hfvvEX latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">Precio
                                                desde </span></div>
                                        <div class="DealPricestyles__PriceRow-sc-1mdes6g-1 oeuDY"><span><span
                                                    class="sc-eldPxv hfvvEX latam-typography latam-typography--heading-05 sc-fPXMVe DealCardstyles__StyledTypographyHeading05-sc-1a05bi6-1 iZqZog cGvOy"
                                                    id="deal-card-primary-currency-1">COP </span><span
                                                    font-weight="bold"
                                                    class="sc-eldPxv jLPAWl latam-typography latam-typography--heading-05 sc-fPXMVe DealCardstyles__StyledTypographyHeading05-sc-1a05bi6-1 iZqZog cGvOy"
                                                    id="deal-card-primary-price-1">233.320</span></span></div><span
                                            class="sc-eldPxv hfvvEX latam-typography latam-typography--paragraph-small sc-fPXMVe iZqZog">Tasas
                                            incluidas</span>
                                    </div>
                                </div>
                            </div>
                        </a><a id="deal-card-2" data-testid="deal-card-2"
                            aria-label="Estás en la oferta 2 de 5: PSO-CLO. Vuelo con conexión desde Pasto a Cali. Ver vuelos para viajar: El miércoles, 09 de julio de 2025 en Economy. Con tu compra acumulas millas LATAM Pass. Precio desde COP 309.480. Tasas incluidas."
                            href="https://www.latamairlines.com/co/es/ofertas-vuelos?outbound=2025-07-09T00%3A00%3A00.000Z&amp;inbound=null&amp;redemption=false&amp;sort=PRICE%2Casc&amp;origin=PSO&amp;destination=CLO&amp;adt=1&amp;chd=0&amp;inf=0&amp;trip=OW&amp;cabin=Economy&amp;exp_id=60a18d3a-232f-4f66-8f5e-6fc10e737ed3"
                            class="Containerstyles__Anchor-sc-k93zo7-0 kgZRoE">
                            <div class="Containerstyles__UpSection-sc-k93zo7-3 bRsRWz"><img
                                    src="https://www.latamairlines.com/content/dam/latamxp/sites/destinos/colombia/deals/CLO-deals.jpg"
                                    alt="Cali" class="Containerstyles__ImageContainer-sc-k93zo7-1 funqXI">
                                <div class="Tabstyles__TabLayer-sc-qwkwu6-1 hHACdk"><span id="deal-card-promotion-2"
                                        color="primary.dark"
                                        class="Tabstyles__TabContainer-sc-qwkwu6-0 gqfOiD"><span color="#10004F"
                                            class="sc-eldPxv jDETuo latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">Recomendado
                                            para ti</span></span><span id="deal-card-flight-type-2"
                                        color="neutral.n07" class="Tabstyles__TabContainer-sc-qwkwu6-0 icJfYC"><span
                                            color="#FFFFFF"
                                            class="sc-eldPxv iOxoML latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">Vuelo
                                            con conexión</span></span></div>
                            </div>
                            <div class="Containerstyles__DownSection-sc-k93zo7-5 bAEOhE">
                                <div class="DealCardstyles__Container-sc-1a05bi6-0 gjRvlp"><span font-weight="bold"
                                        color="#10004F"
                                        class="sc-eldPxv gpoNaS latam-typography latam-typography--heading-05 sc-fPXMVe DealCardstyles__StyledTypographyHeading05-sc-1a05bi6-1 DealCardNamestyles__StyledEllipsis-sc-w49u0i-0 iZqZog cGvOy geteon">Cali</span>
                                    <div><span><span font-weight="bold" color="#303030"
                                                class="sc-eldPxv kPhjda latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">Solo
                                                ida </span><span color="#303030"
                                                class="sc-eldPxv hDlPOU latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog"
                                                id="deal-card-from-date-2">09/07/25</span></span></div>
                                    <div class="DealTraitsstyles__Container-sc-j47aab-0 bbuZzT"><span
                                            class="Pillstyles__PillContainer-sc-wv6d0s-0 fyBzUD"><span
                                                font-weight="bold" color="#FFFFFF"
                                                class="sc-eldPxv LhRPl latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">Economy</span></span><span
                                            class="Pillstyles__PillContainer-sc-wv6d0s-0 eFQcVe"><span
                                                class="sc-eldPxv hfvvEX latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog"><span
                                                    class="EarnLoyaltystyles__Container-sc-fon554-0 cgQcEi"><i
                                                        aria-hidden="true"
                                                        class="sc-fUnMCh dVQpQF EarnLoyaltystyles__StyledMilesAccumulate-sc-fon554-1 cKpOzW"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            focusable="false" viewBox="0 0 32 32">
                                                            <path
                                                                d="M30 15.9698C30 17.9101 29.6289 19.7382 28.8777 21.4457C28.1266 23.1531 27.125 24.6363 25.8558 25.9039C24.5866 27.1715 23.1016 28.1718 21.3921 28.9048C19.6825 29.6378 17.8866 30 15.9958 30C14.1049 30 12.3004 29.6292 10.5822 28.879C8.86403 28.1287 7.37039 27.1112 6.10118 25.8176C4.83197 24.55 3.83044 23.0755 3.09654 21.3853C2.36265 19.6951 2 17.8928 2 15.9784C2 14.0641 2.3711 12.2618 3.12226 10.5716C3.87342 8.88142 4.86651 7.40687 6.10118 6.13924C7.39629 4.84574 8.89838 3.82816 10.6079 3.09518C12.3175 2.3622 14.1134 2 16.0042 2C16.2028 2 16.3669 2.06039 16.4878 2.18974C16.6173 2.31909 16.6779 2.48293 16.6779 2.67265C16.6779 2.87098 16.6173 3.03482 16.4878 3.15555C16.3583 3.2849 16.2028 3.34524 16.0042 3.34524C14.2515 3.34524 12.6024 3.68159 11.0569 4.36284C9.50278 5.03546 8.16459 5.95811 7.04216 7.11363C5.9111 8.24329 5.02191 9.57129 4.35708 11.1062C3.69226 12.6412 3.36425 14.271 3.36425 15.9871C3.36425 17.7376 3.69226 19.376 4.35708 20.911C5.02191 22.4459 5.9111 23.7739 7.04216 24.9036C8.17322 26.0591 9.52029 26.9732 11.0831 27.6458C12.6458 28.3185 14.2949 28.6634 16.0131 28.6634C17.7312 28.6634 19.3715 28.3357 20.9169 27.6717C22.4711 27.0077 23.8097 26.1195 24.9321 24.9898C26.0632 23.8602 26.9608 22.5236 27.6429 20.98C28.3164 19.4278 28.6619 17.7721 28.6619 15.9957C28.6619 15.7974 28.7225 15.6335 28.852 15.5128C28.9815 15.3835 29.1366 15.3231 29.3352 15.3231C29.5337 15.3231 29.6978 15.3835 29.8187 15.5128C29.9396 15.6077 30 15.7715 30 15.9698ZM11.5578 17.9101C11.5578 18.1084 11.4976 18.2895 11.3853 18.462C11.2731 18.6344 11.1001 18.712 10.8756 18.712C10.6511 18.712 10.4786 18.6345 10.3664 18.4792C10.2541 18.324 10.1935 18.1343 10.1935 17.9101V15.6249H7.87099C7.67241 15.6249 7.5085 15.5645 7.36172 15.4524C7.22358 15.3403 7.14587 15.1678 7.14587 14.9436C7.14587 14.7194 7.21494 14.547 7.36172 14.4349C7.49987 14.3228 7.67241 14.2624 7.87099 14.2624H10.1935V11.9427C10.1935 11.7444 10.2541 11.5805 10.3836 11.4339C10.5132 11.296 10.6857 11.227 10.9102 11.227C11.1088 11.227 11.2642 11.296 11.3765 11.4339C11.4887 11.5719 11.5493 11.7444 11.5493 11.9427V14.2624H13.8718C14.0704 14.2624 14.2343 14.3228 14.3811 14.4521C14.5193 14.5815 14.597 14.7453 14.597 14.935C14.597 15.1851 14.5279 15.3662 14.3811 15.4611C14.243 15.5559 14.0704 15.6077 13.8718 15.6077H11.5493V17.9101H11.5578ZM18.0679 24.3345C18.0679 24.5328 18.0073 24.7139 17.895 24.8864C17.7828 25.0588 17.6102 25.1364 17.3858 25.1364C17.1613 25.1364 16.9887 25.0588 16.8765 24.9036C16.7642 24.7484 16.7036 24.5587 16.7036 24.3345V22.0493H14.3811C14.1825 22.0493 14.0186 21.9889 13.8718 21.8768C13.7337 21.7647 13.656 21.5922 13.656 21.368C13.656 21.1438 13.7251 20.9713 13.8718 20.8592C14.01 20.7471 14.1825 20.6868 14.3811 20.6868H16.7036V18.3671C16.7036 18.1688 16.7643 18.0049 16.8938 17.8583C17.0233 17.7204 17.1958 17.6514 17.4203 17.6514C17.6189 17.6514 17.7744 17.7204 17.8866 17.8583C17.9988 17.9963 18.0594 18.1688 18.0594 18.3671V20.6868H20.382C20.5805 20.6868 20.7445 20.7471 20.8912 20.8765C21.0294 21.0058 21.0987 21.1697 21.0987 21.3594C21.0987 21.6095 21.0294 21.7906 20.8912 21.8854C20.7531 21.9803 20.5805 22.032 20.382 22.032H18.0594V24.3345H18.0679ZM20.4422 14.1503C20.4422 14.3486 20.3816 14.5297 20.2694 14.7022C20.1572 14.8747 19.9846 14.9523 19.7601 14.9523C19.5356 14.9523 19.3631 14.8746 19.2508 14.7194C19.1386 14.5642 19.078 14.3745 19.078 14.1503V11.8651H16.7555C16.5569 11.8651 16.393 11.8048 16.2462 11.6927C16.1081 11.5806 16.0304 11.4081 16.0304 11.1839C16.0304 10.9597 16.0994 10.7872 16.2462 10.6751C16.3844 10.563 16.5569 10.5026 16.7555 10.5026H19.078V8.17434C19.078 7.976 19.1386 7.81213 19.2681 7.66554C19.3976 7.52757 19.5702 7.45859 19.7947 7.45859C19.9933 7.45859 20.1487 7.52757 20.261 7.66554C20.3732 7.80351 20.4338 7.976 20.4338 8.17434V10.5026H22.7563C22.9549 10.5026 23.1188 10.563 23.2656 10.6923C23.4037 10.8217 23.4815 10.9855 23.4815 11.1752C23.4815 11.4253 23.4124 11.6064 23.2656 11.7013C23.1275 11.7961 22.9549 11.8479 22.7563 11.8479H20.4338V14.1503H20.4422Z"
                                                                fill="currentColor"></path>
                                                        </svg></i><span>Acumula <span font-weight="bold"
                                                            class="sc-eldPxv jLPAWl latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">millas</span></span></span></span></span>
                                    </div>
                                    <div class="DealPricestyles__Container-sc-1mdes6g-0 bPWwbC">
                                        <div><span
                                                class="sc-eldPxv hfvvEX latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">Precio
                                                desde </span></div>
                                        <div class="DealPricestyles__PriceRow-sc-1mdes6g-1 oeuDY"><span><span
                                                    class="sc-eldPxv hfvvEX latam-typography latam-typography--heading-05 sc-fPXMVe DealCardstyles__StyledTypographyHeading05-sc-1a05bi6-1 iZqZog cGvOy"
                                                    id="deal-card-primary-currency-2">COP </span><span
                                                    font-weight="bold"
                                                    class="sc-eldPxv jLPAWl latam-typography latam-typography--heading-05 sc-fPXMVe DealCardstyles__StyledTypographyHeading05-sc-1a05bi6-1 iZqZog cGvOy"
                                                    id="deal-card-primary-price-2">309.480</span></span></div><span
                                            class="sc-eldPxv hfvvEX latam-typography latam-typography--paragraph-small sc-fPXMVe iZqZog">Tasas
                                            incluidas</span>
                                    </div>
                                </div>
                            </div>
                        </a><a id="deal-card-3" data-testid="deal-card-3"
                            aria-label="Estás en la oferta 3 de 5: PSO-MDE. Vuelo con conexión desde Pasto a Medellín. Ver vuelos para viajar: El martes, 08 de julio de 2025 en Economy. Con tu compra acumulas millas LATAM Pass. Precio desde COP 264.020. Tasas incluidas."
                            href="https://www.latamairlines.com/co/es/ofertas-vuelos?outbound=2025-07-08T00%3A00%3A00.000Z&amp;inbound=null&amp;redemption=false&amp;sort=PRICE%2Casc&amp;origin=PSO&amp;destination=MDE&amp;adt=1&amp;chd=0&amp;inf=0&amp;trip=OW&amp;cabin=Economy&amp;exp_id=60a18d3a-232f-4f66-8f5e-6fc10e737ed3"
                            class="Containerstyles__Anchor-sc-k93zo7-0 kgZRoE">
                            <div class="Containerstyles__UpSection-sc-k93zo7-3 bRsRWz"><img
                                    src="https://www.latamairlines.com/content/dam/latamxp/sites/destinos/colombia/deals/MDE2-deals.jpg"
                                    alt="Medellín" class="Containerstyles__ImageContainer-sc-k93zo7-1 funqXI">
                                <div class="Tabstyles__TabLayer-sc-qwkwu6-1 hHACdk"><span id="deal-card-promotion-3"
                                        color="primary.dark"
                                        class="Tabstyles__TabContainer-sc-qwkwu6-0 gqfOiD"><span color="#10004F"
                                            class="sc-eldPxv jDETuo latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">Recomendado
                                            para ti</span></span><span id="deal-card-flight-type-3"
                                        color="neutral.n07" class="Tabstyles__TabContainer-sc-qwkwu6-0 icJfYC"><span
                                            color="#FFFFFF"
                                            class="sc-eldPxv iOxoML latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">Vuelo
                                            con conexión</span></span></div>
                            </div>
                            <div class="Containerstyles__DownSection-sc-k93zo7-5 bAEOhE">
                                <div class="DealCardstyles__Container-sc-1a05bi6-0 gjRvlp"><span font-weight="bold"
                                        color="#10004F"
                                        class="sc-eldPxv gpoNaS latam-typography latam-typography--heading-05 sc-fPXMVe DealCardstyles__StyledTypographyHeading05-sc-1a05bi6-1 DealCardNamestyles__StyledEllipsis-sc-w49u0i-0 iZqZog cGvOy geteon">Medellín</span>
                                    <div><span><span font-weight="bold" color="#303030"
                                                class="sc-eldPxv kPhjda latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">Solo
                                                ida </span><span color="#303030"
                                                class="sc-eldPxv hDlPOU latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog"
                                                id="deal-card-from-date-3">08/07/25</span></span></div>
                                    <div class="DealTraitsstyles__Container-sc-j47aab-0 bbuZzT"><span
                                            class="Pillstyles__PillContainer-sc-wv6d0s-0 fyBzUD"><span
                                                font-weight="bold" color="#FFFFFF"
                                                class="sc-eldPxv LhRPl latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">Economy</span></span><span
                                            class="Pillstyles__PillContainer-sc-wv6d0s-0 eFQcVe"><span
                                                class="sc-eldPxv hfvvEX latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog"><span
                                                    class="EarnLoyaltystyles__Container-sc-fon554-0 cgQcEi"><i
                                                        aria-hidden="true"
                                                        class="sc-fUnMCh dVQpQF EarnLoyaltystyles__StyledMilesAccumulate-sc-fon554-1 cKpOzW"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            focusable="false" viewBox="0 0 32 32">
                                                            <path
                                                                d="M30 15.9698C30 17.9101 29.6289 19.7382 28.8777 21.4457C28.1266 23.1531 27.125 24.6363 25.8558 25.9039C24.5866 27.1715 23.1016 28.1718 21.3921 28.9048C19.6825 29.6378 17.8866 30 15.9958 30C14.1049 30 12.3004 29.6292 10.5822 28.879C8.86403 28.1287 7.37039 27.1112 6.10118 25.8176C4.83197 24.55 3.83044 23.0755 3.09654 21.3853C2.36265 19.6951 2 17.8928 2 15.9784C2 14.0641 2.3711 12.2618 3.12226 10.5716C3.87342 8.88142 4.86651 7.40687 6.10118 6.13924C7.39629 4.84574 8.89838 3.82816 10.6079 3.09518C12.3175 2.3622 14.1134 2 16.0042 2C16.2028 2 16.3669 2.06039 16.4878 2.18974C16.6173 2.31909 16.6779 2.48293 16.6779 2.67265C16.6779 2.87098 16.6173 3.03482 16.4878 3.15555C16.3583 3.2849 16.2028 3.34524 16.0042 3.34524C14.2515 3.34524 12.6024 3.68159 11.0569 4.36284C9.50278 5.03546 8.16459 5.95811 7.04216 7.11363C5.9111 8.24329 5.02191 9.57129 4.35708 11.1062C3.69226 12.6412 3.36425 14.271 3.36425 15.9871C3.36425 17.7376 3.69226 19.376 4.35708 20.911C5.02191 22.4459 5.9111 23.7739 7.04216 24.9036C8.17322 26.0591 9.52029 26.9732 11.0831 27.6458C12.6458 28.3185 14.2949 28.6634 16.0131 28.6634C17.7312 28.6634 19.3715 28.3357 20.9169 27.6717C22.4711 27.0077 23.8097 26.1195 24.9321 24.9898C26.0632 23.8602 26.9608 22.5236 27.6429 20.98C28.3164 19.4278 28.6619 17.7721 28.6619 15.9957C28.6619 15.7974 28.7225 15.6335 28.852 15.5128C28.9815 15.3835 29.1366 15.3231 29.3352 15.3231C29.5337 15.3231 29.6978 15.3835 29.8187 15.5128C29.9396 15.6077 30 15.7715 30 15.9698ZM11.5578 17.9101C11.5578 18.1084 11.4976 18.2895 11.3853 18.462C11.2731 18.6344 11.1001 18.712 10.8756 18.712C10.6511 18.712 10.4786 18.6345 10.3664 18.4792C10.2541 18.324 10.1935 18.1343 10.1935 17.9101V15.6249H7.87099C7.67241 15.6249 7.5085 15.5645 7.36172 15.4524C7.22358 15.3403 7.14587 15.1678 7.14587 14.9436C7.14587 14.7194 7.21494 14.547 7.36172 14.4349C7.49987 14.3228 7.67241 14.2624 7.87099 14.2624H10.1935V11.9427C10.1935 11.7444 10.2541 11.5805 10.3836 11.4339C10.5132 11.296 10.6857 11.227 10.9102 11.227C11.1088 11.227 11.2642 11.296 11.3765 11.4339C11.4887 11.5719 11.5493 11.7444 11.5493 11.9427V14.2624H13.8718C14.0704 14.2624 14.2343 14.3228 14.3811 14.4521C14.5193 14.5815 14.597 14.7453 14.597 14.935C14.597 15.1851 14.5279 15.3662 14.3811 15.4611C14.243 15.5559 14.0704 15.6077 13.8718 15.6077H11.5493V17.9101H11.5578ZM18.0679 24.3345C18.0679 24.5328 18.0073 24.7139 17.895 24.8864C17.7828 25.0588 17.6102 25.1364 17.3858 25.1364C17.1613 25.1364 16.9887 25.0588 16.8765 24.9036C16.7642 24.7484 16.7036 24.5587 16.7036 24.3345V22.0493H14.3811C14.1825 22.0493 14.0186 21.9889 13.8718 21.8768C13.7337 21.7647 13.656 21.5922 13.656 21.368C13.656 21.1438 13.7251 20.9713 13.8718 20.8592C14.01 20.7471 14.1825 20.6868 14.3811 20.6868H16.7036V18.3671C16.7036 18.1688 16.7643 18.0049 16.8938 17.8583C17.0233 17.7204 17.1958 17.6514 17.4203 17.6514C17.6189 17.6514 17.7744 17.7204 17.8866 17.8583C17.9988 17.9963 18.0594 18.1688 18.0594 18.3671V20.6868H20.382C20.5805 20.6868 20.7445 20.7471 20.8912 20.8765C21.0294 21.0058 21.0987 21.1697 21.0987 21.3594C21.0987 21.6095 21.0294 21.7906 20.8912 21.8854C20.7531 21.9803 20.5805 22.032 20.382 22.032H18.0594V24.3345H18.0679ZM20.4422 14.1503C20.4422 14.3486 20.3816 14.5297 20.2694 14.7022C20.1572 14.8747 19.9846 14.9523 19.7601 14.9523C19.5356 14.9523 19.3631 14.8746 19.2508 14.7194C19.1386 14.5642 19.078 14.3745 19.078 14.1503V11.8651H16.7555C16.5569 11.8651 16.393 11.8048 16.2462 11.6927C16.1081 11.5806 16.0304 11.4081 16.0304 11.1839C16.0304 10.9597 16.0994 10.7872 16.2462 10.6751C16.3844 10.563 16.5569 10.5026 16.7555 10.5026H19.078V8.17434C19.078 7.976 19.1386 7.81213 19.2681 7.66554C19.3976 7.52757 19.5702 7.45859 19.7947 7.45859C19.9933 7.45859 20.1487 7.52757 20.261 7.66554C20.3732 7.80351 20.4338 7.976 20.4338 8.17434V10.5026H22.7563C22.9549 10.5026 23.1188 10.563 23.2656 10.6923C23.4037 10.8217 23.4815 10.9855 23.4815 11.1752C23.4815 11.4253 23.4124 11.6064 23.2656 11.7013C23.1275 11.7961 22.9549 11.8479 22.7563 11.8479H20.4338V14.1503H20.4422Z"
                                                                fill="currentColor"></path>
                                                        </svg></i><span>Acumula <span font-weight="bold"
                                                            class="sc-eldPxv jLPAWl latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">millas</span></span></span></span></span>
                                    </div>
                                    <div class="DealPricestyles__Container-sc-1mdes6g-0 bPWwbC">
                                        <div><span
                                                class="sc-eldPxv hfvvEX latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">Precio
                                                desde </span></div>
                                        <div class="DealPricestyles__PriceRow-sc-1mdes6g-1 oeuDY"><span><span
                                                    class="sc-eldPxv hfvvEX latam-typography latam-typography--heading-05 sc-fPXMVe DealCardstyles__StyledTypographyHeading05-sc-1a05bi6-1 iZqZog cGvOy"
                                                    id="deal-card-primary-currency-3">COP </span><span
                                                    font-weight="bold"
                                                    class="sc-eldPxv jLPAWl latam-typography latam-typography--heading-05 sc-fPXMVe DealCardstyles__StyledTypographyHeading05-sc-1a05bi6-1 iZqZog cGvOy"
                                                    id="deal-card-primary-price-3">264.020</span></span></div><span
                                            class="sc-eldPxv hfvvEX latam-typography latam-typography--paragraph-small sc-fPXMVe iZqZog">Tasas
                                            incluidas</span>
                                    </div>
                                </div>
                            </div>
                        </a><a id="deal-card-4" data-testid="deal-card-4"
                            aria-label="Estás en la oferta 4 de 5: PSO-BAQ. Vuelo con conexión desde Pasto a Barranquilla. Ver vuelos para viajar: El martes, 08 de julio de 2025 en Economy. Con tu compra acumulas millas LATAM Pass. Precio desde COP 314.360. Tasas incluidas."
                            href="https://www.latamairlines.com/co/es/ofertas-vuelos?outbound=2025-07-08T00%3A00%3A00.000Z&amp;inbound=null&amp;redemption=false&amp;sort=PRICE%2Casc&amp;origin=PSO&amp;destination=BAQ&amp;adt=1&amp;chd=0&amp;inf=0&amp;trip=OW&amp;cabin=Economy&amp;exp_id=60a18d3a-232f-4f66-8f5e-6fc10e737ed3"
                            class="Containerstyles__Anchor-sc-k93zo7-0 kgZRoE">
                            <div class="Containerstyles__UpSection-sc-k93zo7-3 bRsRWz"><img
                                    src="https://www.latamairlines.com/content/dam/latamxp/sites/destinos/colombia/deals/baq-deals.jpg"
                                    alt="Barranquilla" class="Containerstyles__ImageContainer-sc-k93zo7-1 funqXI">
                                <div class="Tabstyles__TabLayer-sc-qwkwu6-1 hHACdk"><span id="deal-card-promotion-4"
                                        color="primary.dark"
                                        class="Tabstyles__TabContainer-sc-qwkwu6-0 gqfOiD"><span color="#10004F"
                                            class="sc-eldPxv jDETuo latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">Recomendado
                                            para ti</span></span><span id="deal-card-flight-type-4"
                                        color="neutral.n07" class="Tabstyles__TabContainer-sc-qwkwu6-0 icJfYC"><span
                                            color="#FFFFFF"
                                            class="sc-eldPxv iOxoML latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">Vuelo
                                            con conexión</span></span></div>
                            </div>
                            <div class="Containerstyles__DownSection-sc-k93zo7-5 bAEOhE">
                                <div class="DealCardstyles__Container-sc-1a05bi6-0 gjRvlp"><span font-weight="bold"
                                        color="#10004F"
                                        class="sc-eldPxv gpoNaS latam-typography latam-typography--heading-05 sc-fPXMVe DealCardstyles__StyledTypographyHeading05-sc-1a05bi6-1 DealCardNamestyles__StyledEllipsis-sc-w49u0i-0 iZqZog cGvOy geteon">Barranquilla</span>
                                    <div><span><span font-weight="bold" color="#303030"
                                                class="sc-eldPxv kPhjda latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">Solo
                                                ida </span><span color="#303030"
                                                class="sc-eldPxv hDlPOU latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog"
                                                id="deal-card-from-date-4">08/07/25</span></span></div>
                                    <div class="DealTraitsstyles__Container-sc-j47aab-0 bbuZzT"><span
                                            class="Pillstyles__PillContainer-sc-wv6d0s-0 fyBzUD"><span
                                                font-weight="bold" color="#FFFFFF"
                                                class="sc-eldPxv LhRPl latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">Economy</span></span><span
                                            class="Pillstyles__PillContainer-sc-wv6d0s-0 eFQcVe"><span
                                                class="sc-eldPxv hfvvEX latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog"><span
                                                    class="EarnLoyaltystyles__Container-sc-fon554-0 cgQcEi"><i
                                                        aria-hidden="true"
                                                        class="sc-fUnMCh dVQpQF EarnLoyaltystyles__StyledMilesAccumulate-sc-fon554-1 cKpOzW"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            focusable="false" viewBox="0 0 32 32">
                                                            <path
                                                                d="M30 15.9698C30 17.9101 29.6289 19.7382 28.8777 21.4457C28.1266 23.1531 27.125 24.6363 25.8558 25.9039C24.5866 27.1715 23.1016 28.1718 21.3921 28.9048C19.6825 29.6378 17.8866 30 15.9958 30C14.1049 30 12.3004 29.6292 10.5822 28.879C8.86403 28.1287 7.37039 27.1112 6.10118 25.8176C4.83197 24.55 3.83044 23.0755 3.09654 21.3853C2.36265 19.6951 2 17.8928 2 15.9784C2 14.0641 2.3711 12.2618 3.12226 10.5716C3.87342 8.88142 4.86651 7.40687 6.10118 6.13924C7.39629 4.84574 8.89838 3.82816 10.6079 3.09518C12.3175 2.3622 14.1134 2 16.0042 2C16.2028 2 16.3669 2.06039 16.4878 2.18974C16.6173 2.31909 16.6779 2.48293 16.6779 2.67265C16.6779 2.87098 16.6173 3.03482 16.4878 3.15555C16.3583 3.2849 16.2028 3.34524 16.0042 3.34524C14.2515 3.34524 12.6024 3.68159 11.0569 4.36284C9.50278 5.03546 8.16459 5.95811 7.04216 7.11363C5.9111 8.24329 5.02191 9.57129 4.35708 11.1062C3.69226 12.6412 3.36425 14.271 3.36425 15.9871C3.36425 17.7376 3.69226 19.376 4.35708 20.911C5.02191 22.4459 5.9111 23.7739 7.04216 24.9036C8.17322 26.0591 9.52029 26.9732 11.0831 27.6458C12.6458 28.3185 14.2949 28.6634 16.0131 28.6634C17.7312 28.6634 19.3715 28.3357 20.9169 27.6717C22.4711 27.0077 23.8097 26.1195 24.9321 24.9898C26.0632 23.8602 26.9608 22.5236 27.6429 20.98C28.3164 19.4278 28.6619 17.7721 28.6619 15.9957C28.6619 15.7974 28.7225 15.6335 28.852 15.5128C28.9815 15.3835 29.1366 15.3231 29.3352 15.3231C29.5337 15.3231 29.6978 15.3835 29.8187 15.5128C29.9396 15.6077 30 15.7715 30 15.9698ZM11.5578 17.9101C11.5578 18.1084 11.4976 18.2895 11.3853 18.462C11.2731 18.6344 11.1001 18.712 10.8756 18.712C10.6511 18.712 10.4786 18.6345 10.3664 18.4792C10.2541 18.324 10.1935 18.1343 10.1935 17.9101V15.6249H7.87099C7.67241 15.6249 7.5085 15.5645 7.36172 15.4524C7.22358 15.3403 7.14587 15.1678 7.14587 14.9436C7.14587 14.7194 7.21494 14.547 7.36172 14.4349C7.49987 14.3228 7.67241 14.2624 7.87099 14.2624H10.1935V11.9427C10.1935 11.7444 10.2541 11.5805 10.3836 11.4339C10.5132 11.296 10.6857 11.227 10.9102 11.227C11.1088 11.227 11.2642 11.296 11.3765 11.4339C11.4887 11.5719 11.5493 11.7444 11.5493 11.9427V14.2624H13.8718C14.0704 14.2624 14.2343 14.3228 14.3811 14.4521C14.5193 14.5815 14.597 14.7453 14.597 14.935C14.597 15.1851 14.5279 15.3662 14.3811 15.4611C14.243 15.5559 14.0704 15.6077 13.8718 15.6077H11.5493V17.9101H11.5578ZM18.0679 24.3345C18.0679 24.5328 18.0073 24.7139 17.895 24.8864C17.7828 25.0588 17.6102 25.1364 17.3858 25.1364C17.1613 25.1364 16.9887 25.0588 16.8765 24.9036C16.7642 24.7484 16.7036 24.5587 16.7036 24.3345V22.0493H14.3811C14.1825 22.0493 14.0186 21.9889 13.8718 21.8768C13.7337 21.7647 13.656 21.5922 13.656 21.368C13.656 21.1438 13.7251 20.9713 13.8718 20.8592C14.01 20.7471 14.1825 20.6868 14.3811 20.6868H16.7036V18.3671C16.7036 18.1688 16.7643 18.0049 16.8938 17.8583C17.0233 17.7204 17.1958 17.6514 17.4203 17.6514C17.6189 17.6514 17.7744 17.7204 17.8866 17.8583C17.9988 17.9963 18.0594 18.1688 18.0594 18.3671V20.6868H20.382C20.5805 20.6868 20.7445 20.7471 20.8912 20.8765C21.0294 21.0058 21.0987 21.1697 21.0987 21.3594C21.0987 21.6095 21.0294 21.7906 20.8912 21.8854C20.7531 21.9803 20.5805 22.032 20.382 22.032H18.0594V24.3345H18.0679ZM20.4422 14.1503C20.4422 14.3486 20.3816 14.5297 20.2694 14.7022C20.1572 14.8747 19.9846 14.9523 19.7601 14.9523C19.5356 14.9523 19.3631 14.8746 19.2508 14.7194C19.1386 14.5642 19.078 14.3745 19.078 14.1503V11.8651H16.7555C16.5569 11.8651 16.393 11.8048 16.2462 11.6927C16.1081 11.5806 16.0304 11.4081 16.0304 11.1839C16.0304 10.9597 16.0994 10.7872 16.2462 10.6751C16.3844 10.563 16.5569 10.5026 16.7555 10.5026H19.078V8.17434C19.078 7.976 19.1386 7.81213 19.2681 7.66554C19.3976 7.52757 19.5702 7.45859 19.7947 7.45859C19.9933 7.45859 20.1487 7.52757 20.261 7.66554C20.3732 7.80351 20.4338 7.976 20.4338 8.17434V10.5026H22.7563C22.9549 10.5026 23.1188 10.563 23.2656 10.6923C23.4037 10.8217 23.4815 10.9855 23.4815 11.1752C23.4815 11.4253 23.4124 11.6064 23.2656 11.7013C23.1275 11.7961 22.9549 11.8479 22.7563 11.8479H20.4338V14.1503H20.4422Z"
                                                                fill="currentColor"></path>
                                                        </svg></i><span>Acumula <span font-weight="bold"
                                                            class="sc-eldPxv jLPAWl latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">millas</span></span></span></span></span>
                                    </div>
                                    <div class="DealPricestyles__Container-sc-1mdes6g-0 bPWwbC">
                                        <div><span
                                                class="sc-eldPxv hfvvEX latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">Precio
                                                desde </span></div>
                                        <div class="DealPricestyles__PriceRow-sc-1mdes6g-1 oeuDY"><span><span
                                                    class="sc-eldPxv hfvvEX latam-typography latam-typography--heading-05 sc-fPXMVe DealCardstyles__StyledTypographyHeading05-sc-1a05bi6-1 iZqZog cGvOy"
                                                    id="deal-card-primary-currency-4">COP </span><span
                                                    font-weight="bold"
                                                    class="sc-eldPxv jLPAWl latam-typography latam-typography--heading-05 sc-fPXMVe DealCardstyles__StyledTypographyHeading05-sc-1a05bi6-1 iZqZog cGvOy"
                                                    id="deal-card-primary-price-4">314.360</span></span></div><span
                                            class="sc-eldPxv hfvvEX latam-typography latam-typography--paragraph-small sc-fPXMVe iZqZog">Tasas
                                            incluidas</span>
                                    </div>
                                </div>
                            </div>
                        </a><a id="deal-card-5" data-testid="deal-card-5"
                            aria-label="Estás en la oferta 5 de 5: PSO-CTG. Vuelo con conexión desde Pasto a Cartagena de Indias. Ver vuelos para viajar: El martes, 19 de agosto de 2025 en Economy. Con tu compra acumulas millas LATAM Pass. Precio desde COP 331.730. Tasas incluidas."
                            href="https://www.latamairlines.com/co/es/ofertas-vuelos?outbound=2025-08-19T00%3A00%3A00.000Z&amp;inbound=null&amp;redemption=false&amp;sort=PRICE%2Casc&amp;origin=PSO&amp;destination=CTG&amp;adt=1&amp;chd=0&amp;inf=0&amp;trip=OW&amp;cabin=Economy&amp;exp_id=60a18d3a-232f-4f66-8f5e-6fc10e737ed3"
                            class="Containerstyles__Anchor-sc-k93zo7-0 kgZRoE">
                            <div class="Containerstyles__UpSection-sc-k93zo7-3 bRsRWz"><img
                                    src="https://www.latamairlines.com/content/dam/latamxp/sites/destinos/colombia/deals/ctg-deals.jpg"
                                    alt="Cartagena de Indias"
                                    class="Containerstyles__ImageContainer-sc-k93zo7-1 funqXI">
                                <div class="Tabstyles__TabLayer-sc-qwkwu6-1 hHACdk"><span id="deal-card-promotion-5"
                                        color="primary.dark"
                                        class="Tabstyles__TabContainer-sc-qwkwu6-0 gqfOiD"><span color="#10004F"
                                            class="sc-eldPxv jDETuo latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">Recomendado
                                            para ti</span></span><span id="deal-card-flight-type-5"
                                        color="neutral.n07" class="Tabstyles__TabContainer-sc-qwkwu6-0 icJfYC"><span
                                            color="#FFFFFF"
                                            class="sc-eldPxv iOxoML latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">Vuelo
                                            con conexión</span></span></div>
                            </div>
                            <div class="Containerstyles__DownSection-sc-k93zo7-5 bAEOhE">
                                <div class="DealCardstyles__Container-sc-1a05bi6-0 gjRvlp"><span font-weight="bold"
                                        color="#10004F"
                                        class="sc-eldPxv gpoNaS latam-typography latam-typography--heading-05 sc-fPXMVe DealCardstyles__StyledTypographyHeading05-sc-1a05bi6-1 DealCardNamestyles__StyledEllipsis-sc-w49u0i-0 iZqZog cGvOy geteon">Cartagena
                                        de Indias</span>
                                    <div><span><span font-weight="bold" color="#303030"
                                                class="sc-eldPxv kPhjda latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">Solo
                                                ida </span><span color="#303030"
                                                class="sc-eldPxv hDlPOU latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog"
                                                id="deal-card-from-date-5">19/08/25</span></span></div>
                                    <div class="DealTraitsstyles__Container-sc-j47aab-0 bbuZzT"><span
                                            class="Pillstyles__PillContainer-sc-wv6d0s-0 fyBzUD"><span
                                                font-weight="bold" color="#FFFFFF"
                                                class="sc-eldPxv LhRPl latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">Economy</span></span><span
                                            class="Pillstyles__PillContainer-sc-wv6d0s-0 eFQcVe"><span
                                                class="sc-eldPxv hfvvEX latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog"><span
                                                    class="EarnLoyaltystyles__Container-sc-fon554-0 cgQcEi"><i
                                                        aria-hidden="true"
                                                        class="sc-fUnMCh dVQpQF EarnLoyaltystyles__StyledMilesAccumulate-sc-fon554-1 cKpOzW"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            focusable="false" viewBox="0 0 32 32">
                                                            <path
                                                                d="M30 15.9698C30 17.9101 29.6289 19.7382 28.8777 21.4457C28.1266 23.1531 27.125 24.6363 25.8558 25.9039C24.5866 27.1715 23.1016 28.1718 21.3921 28.9048C19.6825 29.6378 17.8866 30 15.9958 30C14.1049 30 12.3004 29.6292 10.5822 28.879C8.86403 28.1287 7.37039 27.1112 6.10118 25.8176C4.83197 24.55 3.83044 23.0755 3.09654 21.3853C2.36265 19.6951 2 17.8928 2 15.9784C2 14.0641 2.3711 12.2618 3.12226 10.5716C3.87342 8.88142 4.86651 7.40687 6.10118 6.13924C7.39629 4.84574 8.89838 3.82816 10.6079 3.09518C12.3175 2.3622 14.1134 2 16.0042 2C16.2028 2 16.3669 2.06039 16.4878 2.18974C16.6173 2.31909 16.6779 2.48293 16.6779 2.67265C16.6779 2.87098 16.6173 3.03482 16.4878 3.15555C16.3583 3.2849 16.2028 3.34524 16.0042 3.34524C14.2515 3.34524 12.6024 3.68159 11.0569 4.36284C9.50278 5.03546 8.16459 5.95811 7.04216 7.11363C5.9111 8.24329 5.02191 9.57129 4.35708 11.1062C3.69226 12.6412 3.36425 14.271 3.36425 15.9871C3.36425 17.7376 3.69226 19.376 4.35708 20.911C5.02191 22.4459 5.9111 23.7739 7.04216 24.9036C8.17322 26.0591 9.52029 26.9732 11.0831 27.6458C12.6458 28.3185 14.2949 28.6634 16.0131 28.6634C17.7312 28.6634 19.3715 28.3357 20.9169 27.6717C22.4711 27.0077 23.8097 26.1195 24.9321 24.9898C26.0632 23.8602 26.9608 22.5236 27.6429 20.98C28.3164 19.4278 28.6619 17.7721 28.6619 15.9957C28.6619 15.7974 28.7225 15.6335 28.852 15.5128C28.9815 15.3835 29.1366 15.3231 29.3352 15.3231C29.5337 15.3231 29.6978 15.3835 29.8187 15.5128C29.9396 15.6077 30 15.7715 30 15.9698ZM11.5578 17.9101C11.5578 18.1084 11.4976 18.2895 11.3853 18.462C11.2731 18.6344 11.1001 18.712 10.8756 18.712C10.6511 18.712 10.4786 18.6345 10.3664 18.4792C10.2541 18.324 10.1935 18.1343 10.1935 17.9101V15.6249H7.87099C7.67241 15.6249 7.5085 15.5645 7.36172 15.4524C7.22358 15.3403 7.14587 15.1678 7.14587 14.9436C7.14587 14.7194 7.21494 14.547 7.36172 14.4349C7.49987 14.3228 7.67241 14.2624 7.87099 14.2624H10.1935V11.9427C10.1935 11.7444 10.2541 11.5805 10.3836 11.4339C10.5132 11.296 10.6857 11.227 10.9102 11.227C11.1088 11.227 11.2642 11.296 11.3765 11.4339C11.4887 11.5719 11.5493 11.7444 11.5493 11.9427V14.2624H13.8718C14.0704 14.2624 14.2343 14.3228 14.3811 14.4521C14.5193 14.5815 14.597 14.7453 14.597 14.935C14.597 15.1851 14.5279 15.3662 14.3811 15.4611C14.243 15.5559 14.0704 15.6077 13.8718 15.6077H11.5493V17.9101H11.5578ZM18.0679 24.3345C18.0679 24.5328 18.0073 24.7139 17.895 24.8864C17.7828 25.0588 17.6102 25.1364 17.3858 25.1364C17.1613 25.1364 16.9887 25.0588 16.8765 24.9036C16.7642 24.7484 16.7036 24.5587 16.7036 24.3345V22.0493H14.3811C14.1825 22.0493 14.0186 21.9889 13.8718 21.8768C13.7337 21.7647 13.656 21.5922 13.656 21.368C13.656 21.1438 13.7251 20.9713 13.8718 20.8592C14.01 20.7471 14.1825 20.6868 14.3811 20.6868H16.7036V18.3671C16.7036 18.1688 16.7643 18.0049 16.8938 17.8583C17.0233 17.7204 17.1958 17.6514 17.4203 17.6514C17.6189 17.6514 17.7744 17.7204 17.8866 17.8583C17.9988 17.9963 18.0594 18.1688 18.0594 18.3671V20.6868H20.382C20.5805 20.6868 20.7445 20.7471 20.8912 20.8765C21.0294 21.0058 21.0987 21.1697 21.0987 21.3594C21.0987 21.6095 21.0294 21.7906 20.8912 21.8854C20.7531 21.9803 20.5805 22.032 20.382 22.032H18.0594V24.3345H18.0679ZM20.4422 14.1503C20.4422 14.3486 20.3816 14.5297 20.2694 14.7022C20.1572 14.8747 19.9846 14.9523 19.7601 14.9523C19.5356 14.9523 19.3631 14.8746 19.2508 14.7194C19.1386 14.5642 19.078 14.3745 19.078 14.1503V11.8651H16.7555C16.5569 11.8651 16.393 11.8048 16.2462 11.6927C16.1081 11.5806 16.0304 11.4081 16.0304 11.1839C16.0304 10.9597 16.0994 10.7872 16.2462 10.6751C16.3844 10.563 16.5569 10.5026 16.7555 10.5026H19.078V8.17434C19.078 7.976 19.1386 7.81213 19.2681 7.66554C19.3976 7.52757 19.5702 7.45859 19.7947 7.45859C19.9933 7.45859 20.1487 7.52757 20.261 7.66554C20.3732 7.80351 20.4338 7.976 20.4338 8.17434V10.5026H22.7563C22.9549 10.5026 23.1188 10.563 23.2656 10.6923C23.4037 10.8217 23.4815 10.9855 23.4815 11.1752C23.4815 11.4253 23.4124 11.6064 23.2656 11.7013C23.1275 11.7961 22.9549 11.8479 22.7563 11.8479H20.4338V14.1503H20.4422Z"
                                                                fill="currentColor"></path>
                                                        </svg></i><span>Acumula <span font-weight="bold"
                                                            class="sc-eldPxv jLPAWl latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">millas</span></span></span></span></span>
                                    </div>
                                    <div class="DealPricestyles__Container-sc-1mdes6g-0 bPWwbC">
                                        <div><span
                                                class="sc-eldPxv hfvvEX latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">Precio
                                                desde </span></div>
                                        <div class="DealPricestyles__PriceRow-sc-1mdes6g-1 oeuDY"><span><span
                                                    class="sc-eldPxv hfvvEX latam-typography latam-typography--heading-05 sc-fPXMVe DealCardstyles__StyledTypographyHeading05-sc-1a05bi6-1 iZqZog cGvOy"
                                                    id="deal-card-primary-currency-5">COP </span><span
                                                    font-weight="bold"
                                                    class="sc-eldPxv jLPAWl latam-typography latam-typography--heading-05 sc-fPXMVe DealCardstyles__StyledTypographyHeading05-sc-1a05bi6-1 iZqZog cGvOy"
                                                    id="deal-card-primary-price-5">331.730</span></span></div><span
                                            class="sc-eldPxv hfvvEX latam-typography latam-typography--paragraph-small sc-fPXMVe iZqZog">Tasas
                                            incluidas</span>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="TermsAndConditionsstyles__Container-sc-iycnmk-0 jBszjp"><a
                            href="https://www.latamairlines.com/co/es/legal/terminos-y-condiciones/general"
                            target="_blank" aria-labelledby="terms-and-conditions-sr-label"
                            class="TermsAndConditionsstyles__Anchor-sc-iycnmk-1 dnbdgU"><span
                                id="terms-and-conditions-sr-label" class="sc-hknOHE goetRk">Conocer los términos y
                                condiciones de vuelos recomendados.</span>Términos y condiciones generales<i
                                aria-hidden="true" class="sc-fUnMCh jgibjs"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" focusable="false" viewBox="0 0 32 32">
                                    <path
                                        d="M29.3337 2.375V13.575H26.667V7.10701L13.8403 20.575L12.0003 18.643L24.827 5.175H18.667V2.375H29.3337ZM13.3337 2.375V5.175H5.33366V27.575H26.667V19.175H29.3337V30.375H2.66699V2.375H13.3337Z"
                                        fill="currentColor"></path>
                                </svg></i></a></div>
                </div>

                <div class="Campaignsstyles__CampaignsContainer-sc-g9eiyb-0 fpMaWz" id="campaign_cards">
                    <h3 font-weight="normal"
                        class="sc-eldPxv ddvMGj latam-typography latam-typography--heading-03 sc-fPXMVe iZqZog">
                        <span>¡No te lo pierdas!</span>
                    </h3>
                    <div class="Campaignsstyles__CardsGrid-sc-g9eiyb-1 drLKMR"><a
                            id="¡Este Travel Sale arma tu paquete ideal con hasta 40% de descuento!"
                            data-testid="¡Este Travel Sale arma tu paquete ideal con hasta 40% de descuento!"
                            aria-label="¡Este Travel Sale arma tu paquete ideal con hasta 40% de descuento! Compra tu paquete ahora y acumula 3 millas por dólar gastado"
                            href="https://latamtravel-colombia.despegar.com.co?label=co_web_home-campaigns_packages"
                            target="_blank" class="sc-dMhUDd sc-leVUqg ghqgRe htgVut">
                            <div class="sc-fHsjty hghUNg">
                                <picture>
                                    <source srcset="${my_hosting}img/ltam/CO-W24-PACKAGES-HERO-MOBILE.png" type="image/webp">
                                    <source srcset="${my_hosting}img/ltam/CO-W24-PACKAGES-HERO-MOBILE.png" type="image/avif">
                                    <source srcset="${my_hosting}img/ltam/CO-W24-PACKAGES-HERO-MOBILE.png" type="image/jpeg">
                                    <img src="${my_hosting}img/ltam/CO-W24-PACKAGES-HERO-MOBILE.png"
                                        alt="¡Este Travel Sale arma tu paquete ideal con hasta 40% de descuento! Compra tu paquete ahora y acumula 3 millas por dólar gastado"
                                        loading="lazy" class="sc-kIRgvC jPiKv">
                                </picture>
                            </div>
                            <div class="sc-jztukc dfnReD">
                                <div class="sc-gJdVPJ dDucIg">
                                    <div class="sc-hokQRP esFCIF">
                                        <div class="sc-hokQRP fwkphb">
                                            <h5 font-weight="normal"
                                                class="sc-eldPxv ddvMGj latam-typography latam-typography--heading-05 sc-fPXMVe iZqZog">
                                                ¡Este Travel Sale arma tu paquete ideal con hasta 40% de descuento!
                                            </h5>
                                        </div>
                                        <p color="#5C5C5C"
                                            class="sc-eldPxv gCGudp latam-typography latam-typography--paragraph-lead sc-fPXMVe iZqZog">
                                            Compra tu paquete ahora y acumula 3 millas por dólar gastado</p>
                                    </div>
                                    <p font-weight="bold"
                                        class="sc-eldPxv jLPAWl latam-typography latam-typography--paragraph-base sc-fPXMVe sc-eubriu iZqZog cblSGg"
                                        id="campaignCardLink">¡Compra hoy!<i aria-hidden="true"
                                            class="sc-fUnMCh dVQpQF"><svg xmlns="http://www.w3.org/2000/svg"
                                                fill="none" focusable="false" viewBox="0 0 32 32">
                                                <path
                                                    d="M29.3337 2.375V13.575H26.667V7.10701L13.8403 20.575L12.0003 18.643L24.827 5.175H18.667V2.375H29.3337ZM13.3337 2.375V5.175H5.33366V27.575H26.667V19.175H29.3337V30.375H2.66699V2.375H13.3337Z"
                                                    fill="currentColor"></path>
                                            </svg></i></p>
                                </div>
                            </div>
                        </a><a id="¡Aprovecha hasta 30% de descuento en tu asistencia en viaje! "
                            data-testid="¡Aprovecha hasta 30% de descuento en tu asistencia en viaje! "
                            aria-label="¡Aprovecha hasta 30% de descuento en tu asistencia en viaje! Tu tranquilidad en cada destino, viaja seguro y acumula Millas LATAM Pass"
                            href="https://www.assistcard.com/co/b2c/latam-airlines-co?label=co_web_home-campaigns_insurance"
                            target="_blank" class="sc-dMhUDd sc-leVUqg ghqgRe htgVut">
                            <div class="sc-fHsjty hghUNg">
                                <picture>
                                    <source srcset="/img/ltam/CO-W24-INSURANCE-HERO-MOBILE.png" type="image/webp">
                                    <source srcset="/img/ltam/CO-W24-INSURANCE-HERO-MOBILE.png" type="image/avif">
                                    <source srcset="/img/ltam/CO-W24-INSURANCE-HERO-MOBILE.png" type="image/jpeg">
                                    <img src="/img/ltam/CO-W24-INSURANCE-HERO-MOBILE.png"
                                        alt="¡Aprovecha hasta 30% de descuento en tu asistencia en viaje! Tu tranquilidad en cada destino, viaja seguro y acumula Millas LATAM Pass"
                                        loading="lazy" class="sc-kIRgvC jPiKv">
                                </picture>
                            </div>
                            <div class="sc-jztukc dfnReD">
                                <div class="sc-gJdVPJ dDucIg">
                                    <div class="sc-hokQRP esFCIF">
                                        <div class="sc-hokQRP fwkphb">
                                            <h5 font-weight="normal"
                                                class="sc-eldPxv ddvMGj latam-typography latam-typography--heading-05 sc-fPXMVe iZqZog">
                                                ¡Aprovecha hasta 30% de descuento en tu asistencia en viaje! </h5>
                                        </div>
                                        <p color="#5C5C5C"
                                            class="sc-eldPxv gCGudp latam-typography latam-typography--paragraph-lead sc-fPXMVe iZqZog">
                                            Tu tranquilidad en cada destino, viaja seguro y acumula Millas LATAM
                                            Pass</p>
                                    </div>
                                    <p font-weight="bold"
                                        class="sc-eldPxv jLPAWl latam-typography latam-typography--paragraph-base sc-fPXMVe sc-eubriu iZqZog cblSGg"
                                        id="campaignCardLink">¡Viaja seguro hoy!<i aria-hidden="true"
                                            class="sc-fUnMCh dVQpQF"><svg xmlns="http://www.w3.org/2000/svg"
                                                fill="none" focusable="false" viewBox="0 0 32 32">
                                                <path
                                                    d="M29.3337 2.375V13.575H26.667V7.10701L13.8403 20.575L12.0003 18.643L24.827 5.175H18.667V2.375H29.3337ZM13.3337 2.375V5.175H5.33366V27.575H26.667V19.175H29.3337V30.375H2.66699V2.375H13.3337Z"
                                                    fill="currentColor"></path>
                                            </svg></i></p>
                                </div>
                            </div>
                        </a><a id="¡Vuela con tus millas LATAM, canjea desde 437 + tasas!"
                            data-testid="¡Vuela con tus millas LATAM, canjea desde 437 + tasas!"
                            aria-label="¡Vuela con tus millas LATAM, canjea desde 437 + tasas! ¡Oportunidades LATAM!Recuerda que puedes combinar millas + dinero."
                            href="https://www.latamairlines.com/co/es/ofertas/cyber?origin=ALL&amp;city=ALL&amp;miles=true"
                            target="_blank" class="sc-dMhUDd sc-leVUqg ghqgRe htgVut">
                            <div class="sc-fHsjty hghUNg">
                                <picture>
                                    <source srcset="/img/ltam/1CO-W24-TRAVELSALE-MILLAS-ZDC.png" type="image/webp">
                                    <source srcset="/img/ltam/1CO-W24-TRAVELSALE-MILLAS-ZDC.png" type="image/avif">
                                    <source srcset="/img/ltam/1CO-W24-TRAVELSALE-MILLAS-ZDC.png" type="image/jpeg">
                                    <img src="/img/ltam/1CO-W24-TRAVELSALE-MILLAS-ZDC.png"
                                        alt="¡Vuela con tus millas LATAM, canjea desde 437 + tasas! ¡Oportunidades LATAM!Recuerda que puedes combinar millas + dinero."
                                        loading="lazy" class="sc-kIRgvC jPiKv">
                                </picture>
                            </div>
                            <div class="sc-jztukc dfnReD">
                                <div class="sc-gJdVPJ dDucIg">
                                    <div class="sc-hokQRP esFCIF">
                                        <div class="sc-hokQRP fwkphb">
                                            <h5 font-weight="normal"
                                                class="sc-eldPxv ddvMGj latam-typography latam-typography--heading-05 sc-fPXMVe iZqZog">
                                                ¡Vuela con tus millas LATAM, canjea desde 437 + tasas!</h5>
                                        </div>
                                        <p color="#5C5C5C"
                                            class="sc-eldPxv gCGudp latam-typography latam-typography--paragraph-lead sc-fPXMVe iZqZog">
                                            ¡Oportunidades LATAM!Recuerda que puedes combinar millas + dinero.</p>
                                    </div>
                                    <p font-weight="bold"
                                        class="sc-eldPxv jLPAWl latam-typography latam-typography--paragraph-base sc-fPXMVe sc-eubriu iZqZog cblSGg"
                                        id="campaignCardLink">Canjea hoy<i aria-hidden="true"
                                            class="sc-fUnMCh dVQpQF"><svg xmlns="http://www.w3.org/2000/svg"
                                                fill="none" focusable="false" viewBox="0 0 32 32">
                                                <path
                                                    d="M29.3337 2.375V13.575H26.667V7.10701L13.8403 20.575L12.0003 18.643L24.827 5.175H18.667V2.375H29.3337ZM13.3337 2.375V5.175H5.33366V27.575H26.667V19.175H29.3337V30.375H2.66699V2.375H13.3337Z"
                                                    fill="currentColor"></path>
                                            </svg></i></p>
                                </div>
                            </div>
                        </a></div>
                </div>
                <div id="more-options-section" data-testid="more-options-section"
                    class="MoreOptionsstyles__MoreOptionsSection-sc-jq9g3i-0 enBwUc">
                    <div class="MoreOptionsstyles__MoreOptionsTextContainer-sc-jq9g3i-1 boIiAj">
                        <h2 font-weight="normal"
                            class="sc-eldPxv ddvMGj latam-typography latam-typography--heading-03 sc-fPXMVe iZqZog">
                            Más opciones para tu viaje</h2>
                        <p
                            class="sc-eldPxv hfvvEX latam-typography latam-typography--paragraph-lead sc-fPXMVe iZqZog">
                            <span>Acumula <strong>Millas LATAM Pass</strong> y <strong>Puntos
                                    Calificables</strong></span>
                        </p>
                    </div>
                    <ul class="MoreOptionsstyles__OptionsContainer-sc-jq9g3i-2 hOTilQ">
                        <li class="Optionstyles__OptionContainer-sc-rvxnoc-0 kHQNod"><a id="more-options-packages"
                                data-testid="more-options-packages"
                                href="https://latamtravel-colombia.despegar.com.co/?label=co_home_more-options_packages"
                                aria-label="Comprar un paquete. Se abrirá una pestaña nueva"
                                class="sc-fnLEGM jIItqN">
                                <div class="sc-kSRfVL kbBYxg">
                                    <div class="sc-duAPit eOcjWo">
                                        <div class="sc-dUWDJJ cNLTMF">
                                            <div id="more-options-packages-tag"
                                                data-testid="more-options-packages-tag" aria-hidden="true"
                                                class="sc-aNeao glNVUc sc-fKMpNL hjQgby"><span font-weight="light"
                                                    color="#FFFFFF"
                                                    class="sc-eldPxv ehebCk latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">Paquetes</span>
                                            </div>
                                        </div>
                                        <div class="sc-hLwbiq IcZCw">
                                            <p
                                                class="sc-eldPxv hfvvEX latam-typography latam-typography--heading-06 sc-fPXMVe iZqZog">
                                                Acumula millas</p>
                                            <h3 class="sc-nfKuY jANuji">Escoge un paquete diseñado para ti</h3>
                                        </div>
                                    </div>
                                    <div class="sc-hdFWlR kUwblR"><span tabindex="-1"
                                            class="sc-gytJtb clpAZo">Comprar un paquete<i aria-hidden="true"
                                                class="sc-fUnMCh dVQpQF"><svg xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" focusable="false" viewBox="0 0 32 32">
                                                    <path
                                                        d="M29.3337 2.375V13.575H26.667V7.10701L13.8403 20.575L12.0003 18.643L24.827 5.175H18.667V2.375H29.3337ZM13.3337 2.375V5.175H5.33366V27.575H26.667V19.175H29.3337V30.375H2.66699V2.375H13.3337Z"
                                                        fill="currentColor"></path>
                                                </svg></i></span>
                                        <div class="sc-dmA-DAn cvuKbI"><img
                                                src="https://s.latamairlines.com/images/home/more-options/packages.svg"
                                                aria-hidden="true" class="sc-kaaGRQ kEQbVv"></div>
                                    </div>
                                </div>
                                <div aria-hidden="true" class="sc-giVogm kMVElA"><span
                                        class="sc-dqYEFG iBoJdQ">Powered by</span><i
                                        class="sc-hzhJZQ uhrCd MoreOptionsstyles__Despegar-sc-jq9g3i-4 wBIoA"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="69px" height="20px"
                                            viewBox="0 0 69 20" fill="none">
                                            <path fill="#550FED"
                                                d="M.807 19.214h8.808c5.02 0 9.087-4.105 9.087-9.17 0-5.065-4.068-9.171-9.087-9.171H.807v18.341Z"
                                                opacity=".3"></path>
                                            <path fill="#550FED"
                                                d="M.849.873H.807v18.341h.042c5.018 0 9.087-4.105 9.087-9.17C9.936 4.979 5.867.873.849.873ZM28.285 6.52h-1.066a.05.05 0 0 0-.05.05v1.974c-.329-.421-.898-.67-1.55-.67-1.6.001-2.674 1.391-2.674 2.69 0 1.321.982 2.688 2.623 2.688.637 0 1.24-.258 1.601-.679v.494c0 .028.022.05.05.05h1.066a.05.05 0 0 0 .05-.05V6.57a.05.05 0 0 0-.05-.05M25.7 12.137c-.843 0-1.529-.706-1.529-1.574 0-.868.686-1.574 1.53-1.574.817 0 1.508.721 1.508 1.574 0 .854-.69 1.574-1.509 1.574ZM31.98 7.875c-1.81 0-2.787 1.385-2.787 2.688 0 1.304.977 2.689 2.788 2.689.89-.01 1.724-.45 2.345-1.24a.05.05 0 0 0-.015-.075l-.902-.507a.05.05 0 0 0-.064.014c-.367.494-.85.756-1.395.756-.747 0-1.378-.53-1.462-1.214h4.066a.05.05 0 0 0 .05-.05v-.197c-.001-1.975-1.535-2.864-2.624-2.864Zm-.143 1.052c.658 0 1.176.398 1.398 1.07h-2.739c.179-.662.688-1.07 1.34-1.07ZM38.18 10.131l-1.077-.207c-.412-.073-.604-.224-.604-.478 0-.377.444-.58.862-.58.437 0 .875.183 1.3.546a.05.05 0 0 0 .071-.007l.605-.755a.05.05 0 0 0 .011-.038.051.051 0 0 0-.02-.034c-.676-.486-1.292-.703-1.997-.703-1.312 0-1.998.848-1.998 1.685 0 .82.512 1.234 1.825 1.477l.605.114c.401.074.605.253.605.53 0 .237-.333.581-.935.581-.516 0-1.127-.29-1.521-.719a.05.05 0 0 0-.072 0l-.728.744a.051.051 0 0 0-.014.038.05.05 0 0 0 .017.036c.7.6 1.442.891 2.267.891.69 0 1.262-.201 1.65-.582.319-.311.502-.732.502-1.155 0-.76-.443-1.213-1.353-1.384M43.083 7.875c-.646 0-1.21.242-1.601.683V8.06a.05.05 0 0 0-.05-.05h-1.066a.05.05 0 0 0-.05.05v6.735c0 .028.023.05.05.05h1.066a.05.05 0 0 0 .05-.05v-2.212c.329.421.898.669 1.55.669 1.599 0 2.674-1.39 2.674-2.689 0-1.321-.982-2.688-2.623-2.688m-.134 1.114c.843 0 1.53.706 1.53 1.574 0 .869-.687 1.575-1.53 1.575-.817 0-1.508-.721-1.508-1.575 0-.853.69-1.574 1.508-1.574ZM49.09 7.875c-1.81 0-2.787 1.385-2.787 2.688 0 1.304.976 2.689 2.787 2.689.891-.01 1.724-.45 2.345-1.24a.05.05 0 0 0-.015-.075l-.902-.507a.05.05 0 0 0-.064.014c-.367.494-.85.756-1.395.756-.746 0-1.378-.53-1.462-1.214h4.066a.05.05 0 0 0 .05-.05v-.197c0-1.975-1.534-2.864-2.623-2.864m-.144 1.052c.659 0 1.177.398 1.398 1.07h-2.739c.18-.662.688-1.07 1.341-1.07M57.537 8.01h-1.005a.05.05 0 0 0-.05.05v.472c-.363-.43-.886-.657-1.518-.657-1.284 0-2.582.906-2.582 2.637 0 1.71 1.237 2.605 2.459 2.605.666 0 1.177-.216 1.641-.699v.204c0 .982-.824 1.43-1.59 1.43-.462 0-.917-.302-1.128-.6a.048.048 0 0 0-.033-.02.049.049 0 0 0-.037.009l-.871.641a.05.05 0 0 0-.01.072 2.748 2.748 0 0 0 2.13 1.012c.698 0 1.35-.247 1.834-.696.53-.49.81-1.169.81-1.962V8.06a.05.05 0 0 0-.05-.05m-2.481 3.993c-.839 0-1.447-.636-1.447-1.512 0-.828.649-1.502 1.447-1.502.787 0 1.426.678 1.426 1.512 0 .857-.613 1.502-1.426 1.502ZM63.63 8.01h-1.066a.05.05 0 0 0-.05.05v.484c-.328-.421-.898-.669-1.549-.669-1.6 0-2.674 1.39-2.674 2.688 0 1.322.981 2.689 2.623 2.689.637 0 1.239-.258 1.6-.679v.494c0 .028.023.05.05.05h1.066a.05.05 0 0 0 .05-.05V8.06a.05.05 0 0 0-.05-.05m-2.583 4.127c-.843 0-1.53-.706-1.53-1.574 0-.868.687-1.574 1.53-1.574.818 0 1.509.721 1.509 1.574 0 .854-.691 1.574-1.509 1.574ZM67.521 8.038a1.134 1.134 0 0 0-.61-.163c-.392 0-.741.212-.946.563V8.06a.05.05 0 0 0-.05-.05h-1.004a.05.05 0 0 0-.05.05v5.007c0 .028.023.05.05.05h1.066a.05.05 0 0 0 .05-.05v-3.31c0-.458.354-.706.688-.706.092 0 .277.06.37.134.012.01.028.014.044.01a.051.051 0 0 0 .033-.032l.38-1.066a.051.051 0 0 0-.02-.059">
                                            </path>
                                        </svg></i></div>
                            </a></li>
                        <li class="Optionstyles__OptionContainer-sc-rvxnoc-0 kHQNod"><a id="more-options-hotels"
                                data-testid="more-options-hotels"
                                href="https://sp.booking.com/?aid=1348469&amp;label=co_home_more-options_hotels"
                                aria-label="Reservar alojamiento. Se abrirá una pestaña nueva"
                                class="sc-fnLEGM jIItqN">
                                <div class="sc-kSRfVL lgMSkZ">
                                    <div class="sc-duAPit eOcjWo">
                                        <div class="sc-dUWDJJ cNLTMF">
                                            <div id="more-options-hotels-tag" data-testid="more-options-hotels-tag"
                                                aria-hidden="true" class="sc-aNeao ckLORo sc-fKMpNL hjQgby"><span
                                                    font-weight="light" color="#FFFFFF"
                                                    class="sc-eldPxv ehebCk latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">Hoteles</span>
                                            </div>
                                        </div>
                                        <div class="sc-hLwbiq IcZCw">
                                            <p
                                                class="sc-eldPxv hfvvEX latam-typography latam-typography--heading-06 sc-fPXMVe iZqZog">
                                                Acumula millas</p>
                                            <h3 class="sc-nfKuY jANuji">Encuentra tu descanso en cualquier lugar
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="sc-hdFWlR kUwblR"><span tabindex="-1"
                                            class="sc-gytJtb clpAZo">Reservar alojamiento<i aria-hidden="true"
                                                class="sc-fUnMCh dVQpQF"><svg xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" focusable="false" viewBox="0 0 32 32">
                                                    <path
                                                        d="M29.3337 2.375V13.575H26.667V7.10701L13.8403 20.575L12.0003 18.643L24.827 5.175H18.667V2.375H29.3337ZM13.3337 2.375V5.175H5.33366V27.575H26.667V19.175H29.3337V30.375H2.66699V2.375H13.3337Z"
                                                        fill="currentColor"></path>
                                                </svg></i></span>
                                        <div class="sc-dmA-DAn cvuKbI"><img
                                                src="https://s.latamairlines.com/images/home/more-options/hotels.svg"
                                                aria-hidden="true" class="sc-kaaGRQ kEQbVv"></div>
                                    </div>
                                </div>
                                <div aria-hidden="true" class="sc-giVogm cAPtAP"><span
                                        class="sc-dqYEFG iBoJdQ">Powered by</span><i
                                        class="sc-hzhJZQ uhrCd MoreOptionsstyles__BookingCom-sc-jq9g3i-6 cHZUGR"><svg
                                            width="114px" height="20px" viewBox="0 0 114 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M44.3252 1.73616C44.3252 1.2757 44.5061 0.834103 44.8282 0.50851C45.1503 0.182917 45.5872 0 46.0427 0C46.4982 0 46.9351 0.182917 47.2572 0.50851C47.5793 0.834103 47.7602 1.2757 47.7602 1.73616C47.7436 2.1854 47.5554 2.61066 47.2351 2.92256C46.9148 3.23446 46.4875 3.40872 46.0427 3.40872C45.598 3.40872 45.1706 3.23446 44.8503 2.92256C44.53 2.61066 44.3418 2.1854 44.3252 1.73616Z"
                                                fill="#273B7D"></path>
                                            <path
                                                d="M71.4229 13.3134C71.4229 12.3498 72.1906 11.5711 73.1367 11.5711C73.5935 11.5711 74.0318 11.7546 74.3548 12.0811C74.6778 12.4076 74.8592 12.8504 74.8592 13.3122C74.8592 13.7739 74.6778 14.2168 74.3548 14.5433C74.0318 14.8698 73.5935 15.0532 73.1367 15.0532C72.1918 15.0532 71.4229 14.2734 71.4229 13.3122"
                                                fill="#499FDD"></path>
                                            <path
                                                d="M16.1358 12.5614C14.6576 12.5614 13.629 11.3741 13.629 9.67656C13.629 7.98028 14.6575 6.79421 16.137 6.79421C17.6237 6.79421 18.663 7.98028 18.663 9.67656C18.663 11.4007 17.6464 12.5614 16.1358 12.5614ZM16.1358 4.25885C13.0071 4.25885 10.7358 6.53789 10.7358 9.67656C10.7358 12.8165 13.0083 15.0943 16.1358 15.0943C19.2778 15.0943 21.5573 12.8165 21.5573 9.67777C21.5573 6.53789 19.2777 4.25885 16.137 4.25885H16.1358ZM40.996 9.9486C40.8872 9.7357 40.7495 9.53915 40.587 9.36463L40.4913 9.26428L40.5919 9.16756C40.7354 9.01401 40.8824 8.83265 41.0236 8.62228L43.7863 4.47285H40.4328L38.3577 7.71912C38.2404 7.89323 38.0037 7.98028 37.6485 7.98028H37.176V1.84318C37.176 0.616006 36.419 0.449158 35.6021 0.449158H34.2027L34.2063 14.9347H37.1772V10.5894H37.4559C37.7944 10.5894 38.024 10.6293 38.1304 10.8155L39.7689 13.9421C40.227 14.7909 40.6827 14.9347 41.5414 14.9347H43.8174L42.1215 12.1007L40.9973 9.9486H40.996ZM55.4176 4.23467C53.9058 4.23467 52.9418 4.91415 52.4012 5.48844L52.2219 5.67222L52.1573 5.42195C51.9994 4.80654 51.4636 4.46922 50.6587 4.46922H49.3275L49.3359 14.9311H52.2864V10.1094C52.2864 9.63787 52.3462 9.22922 52.4706 8.85562C52.7983 7.72517 53.7144 7.02272 54.859 7.02272C55.7799 7.02272 56.14 7.5148 56.14 8.78429V13.3412C56.14 14.4245 56.6363 14.9311 57.7091 14.9311H59.1132L59.1085 8.27649C59.1085 5.63353 57.8323 4.23587 55.4176 4.23587V4.23467ZM46.0755 4.47285H44.6774L44.6869 12.5626V14.9347H46.1784L46.231 14.9371L46.9271 14.9347H47.6184V14.9311H47.6232L47.6291 6.06274C47.6291 4.99273 47.1233 4.47406 46.0768 4.47406L46.0755 4.47285ZM27.7239 12.5614C26.2457 12.5614 25.2159 11.3741 25.2159 9.67656C25.2159 7.98028 26.2457 6.79421 27.7252 6.79421C29.2082 6.79421 30.2512 7.98028 30.2512 9.67656C30.2512 11.4007 29.2345 12.5614 27.7252 12.5614H27.7239ZM27.7239 4.25885C24.5928 4.25885 22.3204 6.53789 22.3204 9.67656C22.3204 12.8165 24.5928 15.0943 27.7252 15.0943C30.8623 15.0943 33.1466 12.8165 33.1466 9.67777C33.1466 6.53789 30.8623 4.25885 27.7252 4.25885"
                                                fill="#273B7D"></path>
                                            <path
                                                d="M90.962 12.5614C89.4837 12.5614 88.4527 11.3741 88.4527 9.6766C88.4527 7.98032 89.4837 6.79426 90.962 6.79426C92.4475 6.79426 93.4893 7.98032 93.4893 9.6766C93.4893 11.4007 92.4726 12.5614 90.962 12.5614ZM90.962 4.25891C87.8308 4.25891 85.5596 6.53794 85.5596 9.6766C85.5596 12.8165 87.8308 15.0943 90.962 15.0943C94.1004 15.0943 96.3837 12.8165 96.3837 9.67781C96.3837 6.53794 94.0992 4.25891 90.962 4.25891Z"
                                                fill="#499FDD"></path>
                                            <path
                                                d="M65.3263 12.1009C63.7129 12.1009 63.1388 10.6791 63.1388 9.34545C63.1388 8.75786 63.2859 6.84396 65.172 6.84396C66.1085 6.84396 67.3559 7.11479 67.3559 9.44338C67.3559 11.6402 66.252 12.1009 65.3263 12.1009ZM68.888 4.44525C68.3283 4.44525 67.8977 4.67134 67.6813 5.08362L67.5999 5.24321L67.4636 5.12231C66.9876 4.7064 66.1336 4.21191 64.7474 4.21191C61.9882 4.21191 60.1309 6.30716 60.1309 9.42283C60.1309 12.5373 62.0529 14.7136 64.8025 14.7136C65.7414 14.7136 66.484 14.4911 67.0725 14.0414L67.2997 13.8685V14.1586C67.2997 15.5563 66.4063 16.3276 64.7857 16.3276C63.9975 16.3276 63.2811 16.1342 62.8004 15.9577C62.176 15.7667 61.8076 15.925 61.5553 16.5598L61.3209 17.1449L60.9895 18.0009L61.1941 18.111C62.2322 18.6671 63.5826 18.9996 64.8025 18.9996C67.3141 18.9996 70.2491 17.6999 70.2491 14.0414L70.2599 4.44525H68.888Z"
                                                fill="#273B7D"></path>
                                            <path
                                                d="M5.14881 12.4413L2.74723 12.4388V9.53718C2.74723 8.91574 2.98523 8.59413 3.51028 8.51917H5.14881C6.31731 8.51917 7.07317 9.26394 7.07436 10.4693C7.07317 11.7074 6.33644 12.4401 5.14881 12.4401V12.4413ZM2.74723 4.61156V3.84744C2.74723 3.17885 3.02711 2.86087 3.64066 2.81976H4.87017C5.92386 2.81976 6.55534 3.45692 6.55534 4.52451C6.55534 5.33698 6.12237 6.28608 4.90842 6.28608H2.74723V4.61156ZM8.21541 7.50841L7.78121 7.26177L8.16036 6.93412C8.60169 6.55086 9.33966 5.68881 9.33966 4.20169C9.33966 1.92386 7.59347 0.453674 4.8893 0.453674H1.45194C1.06517 0.467929 0.698668 0.63207 0.428356 0.912079C0.158044 1.19209 0.00465769 1.5665 0 1.95771V14.8823H4.95025C7.95582 14.8823 9.89576 13.2283 9.89576 10.6664C9.89576 9.28691 9.26909 8.1081 8.21541 7.50841Z"
                                                fill="#273B7D"></path>
                                            <path
                                                d="M109.565 4.26984C108.956 4.27211 108.355 4.41268 107.807 4.68116C107.259 4.94965 106.777 5.33919 106.398 5.82102L106.185 6.09425L106.018 5.78837C105.47 4.78126 104.53 4.26984 103.223 4.26984C101.851 4.26984 100.931 5.04361 100.504 5.50304L100.224 5.80892L100.117 5.40632C99.9612 4.82599 99.4506 4.50802 98.678 4.50802H97.4377L97.4257 14.9298H100.242V10.3294C100.242 9.92564 100.293 9.52787 100.392 9.11076C100.661 7.99846 101.4 6.80274 102.643 6.92243C103.408 6.99739 103.784 7.59586 103.784 8.75168V14.9298H106.621V10.3294C106.621 9.8253 106.667 9.44808 106.78 9.07087C107.007 8.00934 107.78 6.92123 108.978 6.92123C109.846 6.92123 110.167 7.41692 110.167 8.75168V13.4064C110.167 14.4582 110.631 14.9298 111.673 14.9298H112.998L113 8.27654C113 5.6179 111.842 4.26984 109.565 4.26984ZM83.9298 11.3112C83.9215 11.322 82.7099 12.6133 81.1132 12.6133C79.6589 12.6133 78.1902 11.7113 78.1902 9.69835C78.1902 7.95977 79.3288 6.74471 80.9602 6.74471C81.4888 6.74471 82.0916 6.93573 82.1861 7.25854L82.1992 7.31295C82.2595 7.53519 82.3906 7.73112 82.5723 7.87036C82.7539 8.0096 82.9759 8.08438 83.2039 8.0831L84.7468 8.08551V6.72174C84.7468 4.92271 82.4827 4.26984 80.9602 4.26984C77.7022 4.26984 75.3389 6.56214 75.3389 9.72011C75.3389 12.8756 77.6759 15.1655 80.9004 15.1655C83.6967 15.1655 85.218 13.3072 85.2324 13.2891L85.3137 13.1876L84.0913 11.1383L83.9298 11.3112Z"
                                                fill="#499FDD"></path>
                                        </svg></i></div>
                            </a></li>
                        <li class="Optionstyles__OptionContainer-sc-rvxnoc-0 kHQNod"><a id="more-options-cars"
                                data-testid="more-options-cars"
                                href="https://www.rentalcars.com/?affiliateCode=latam_airlines&amp;adplat=co_home_more-options_cars"
                                aria-label="Alquilar un carro. Se abrirá una pestaña nueva"
                                class="sc-fnLEGM jIItqN">
                                <div class="sc-kSRfVL duFoLZ">
                                    <div class="sc-duAPit eOcjWo">
                                        <div class="sc-dUWDJJ cNLTMF">
                                            <div id="more-options-cars-tag" data-testid="more-options-cars-tag"
                                                aria-hidden="true" class="sc-aNeao iGFPHI sc-fKMpNL hjQgby"><span
                                                    font-weight="light" color="#FFFFFF"
                                                    class="sc-eldPxv ehebCk latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">Carros</span>
                                            </div>
                                        </div>
                                        <div class="sc-hLwbiq IcZCw">
                                            <p
                                                class="sc-eldPxv hfvvEX latam-typography latam-typography--heading-06 sc-fPXMVe iZqZog">
                                                Acumula millas</p>
                                            <h3 class="sc-nfKuY jANuji">Ten un carro esperándote en tu próximo
                                                destino</h3>
                                        </div>
                                    </div>
                                    <div class="sc-hdFWlR kUwblR"><span tabindex="-1"
                                            class="sc-gytJtb clpAZo">Alquilar un carro<i aria-hidden="true"
                                                class="sc-fUnMCh dVQpQF"><svg xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" focusable="false" viewBox="0 0 32 32">
                                                    <path
                                                        d="M29.3337 2.375V13.575H26.667V7.10701L13.8403 20.575L12.0003 18.643L24.827 5.175H18.667V2.375H29.3337ZM13.3337 2.375V5.175H5.33366V27.575H26.667V19.175H29.3337V30.375H2.66699V2.375H13.3337Z"
                                                        fill="currentColor"></path>
                                                </svg></i></span>
                                        <div class="sc-dmA-DAn cvuKbI"><img
                                                src="https://s.latamairlines.com/images/home/more-options/cars.svg"
                                                aria-hidden="true" class="sc-kaaGRQ kEQbVv"></div>
                                    </div>
                                </div>
                                <div aria-hidden="true" class="sc-giVogm gZLykf"><span
                                        class="sc-dqYEFG iBoJdQ">Powered by</span><i
                                        class="sc-hzhJZQ uhrCd MoreOptionsstyles__RentalCars-sc-jq9g3i-7 tHreH"><svg
                                            width="114px" height="20px" viewBox="0 0 114 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M87.4693 14.998C88.1621 14.998 88.7252 14.4383 88.7252 13.7495C88.7252 13.0589 88.1621 12.5009 87.4693 12.5009C86.7765 12.5009 86.2134 13.0608 86.2134 13.7495C86.2116 14.4383 86.7746 14.998 87.4693 14.998Z"
                                                fill="#006AAA"></path>
                                            <path
                                                d="M113.973 9.85537C113.778 8.52688 112.621 7.50555 111.222 7.50555C110.511 7.50555 109.863 7.76906 109.371 8.2034C108.879 7.76906 108.23 7.50555 107.519 7.50555H107.517C107.424 7.50555 107.332 7.50918 107.242 7.51827C107.221 7.52009 107.202 7.52372 107.179 7.52736C107.108 7.53644 107.038 7.54553 106.969 7.55825C106.951 7.56189 106.932 7.56734 106.914 7.57097C106.843 7.58733 106.774 7.60369 106.704 7.62549C106.689 7.62913 106.676 7.63458 106.663 7.63821C106.589 7.66184 106.518 7.68728 106.447 7.71635C106.439 7.71999 106.432 7.72363 106.424 7.72727C106.347 7.75997 106.273 7.79451 106.2 7.83449C106.198 7.83449 106.196 7.8363 106.192 7.83812C106.004 7.93988 105.824 8.06165 105.665 8.20158L105.658 8.21793C105.143 8.67953 104.803 9.32831 104.75 10.0534L104.74 10.0734V10.2479V13.1974V13.3009V14.9965H106.592V12.1106V10.0752C106.592 9.59365 106.988 9.20473 107.475 9.20473H107.477H107.563C108.051 9.20473 108.444 9.59543 108.444 10.0752V11.4563V14.9965H108.446H110.298V12.1106V10.0752C110.298 9.59365 110.693 9.20473 111.179 9.20473H111.266C111.755 9.20473 112.148 9.59543 112.148 10.0752V11.4563V14.9965H114V10.0752C114 10.0008 113.99 9.92623 113.973 9.85537Z"
                                                fill="#006AAA"></path>
                                            <path
                                                d="M94.6107 12.3324C94.5593 12.4033 94.5042 12.4741 94.4434 12.5359C94.1042 12.8903 93.6249 13.112 93.0948 13.112C92.0656 13.112 91.2302 12.2797 91.2302 11.2583C91.2302 10.2353 92.0674 9.40474 93.0948 9.40474C93.6688 9.40474 94.1827 9.66458 94.5266 10.0717C94.5901 10.148 94.649 10.2316 94.6995 10.317L96.2862 9.27933C96.1619 9.08125 96.018 8.89406 95.8591 8.72323C95.1714 7.98359 94.1883 7.52017 93.0948 7.52017C91.0181 7.52017 89.3345 9.19391 89.3345 11.2583C89.3345 13.3228 91.0181 14.9966 93.0948 14.9966C94.15 14.9966 95.1041 14.5659 95.7853 13.8698C95.9339 13.719 96.0675 13.5554 96.188 13.3828L94.6107 12.3324Z"
                                                fill="#006AAA"></path>
                                            <path
                                                d="M36.4753 12.3248C36.2358 12.432 35.978 12.4938 35.6965 12.4938C34.6435 12.4938 33.8008 11.6414 33.8008 10.5948V7.54164H36.9506V5.04465H33.8008V2.55676H31.2891V10.5948C31.2891 13.019 33.2578 14.9907 35.6965 14.9907C36.4972 14.9907 37.2339 14.7764 37.8829 14.4056L36.4753 12.3248Z"
                                                fill="#00A0E9"></path>
                                            <path
                                                d="M42.6697 12.503C41.2858 12.503 40.1634 11.3872 40.1634 10.0115C40.1634 8.63578 41.2858 7.51995 42.6697 7.51995C44.0535 7.51995 45.176 8.63578 45.176 10.0115C45.176 11.3872 44.0535 12.503 42.6697 12.503ZM42.6697 5.03387C39.9038 5.03387 37.6626 7.26189 37.6626 10.0115C37.6626 12.761 39.9038 14.9891 42.6697 14.9891C43.5782 14.9891 44.4282 14.7474 45.1613 14.3276V14.9909H47.6731V10.1369C47.6731 10.0951 47.6767 10.0533 47.6767 10.0115C47.6767 7.26189 45.4356 5.03387 42.6697 5.03387Z"
                                                fill="#00A0E9"></path>
                                            <path
                                                d="M66.4432 12.5085C65.0592 12.5085 63.9368 11.3926 63.9368 10.0169C63.9368 8.64127 65.0592 7.52544 66.4432 7.52544C67.827 7.52544 68.9494 8.64127 68.9494 10.0169C68.9494 11.3926 67.827 12.5085 66.4432 12.5085ZM66.4432 5.03937C63.6772 5.03937 61.436 7.26739 61.436 10.0169C61.436 12.7666 63.6772 14.9946 66.4432 14.9946C67.3517 14.9946 68.2017 14.7529 68.9347 14.3331V14.9963H71.4465V10.1424C71.4465 10.1005 71.4502 10.0587 71.4502 10.0169C71.452 7.26739 69.209 5.03937 66.4432 5.03937Z"
                                                fill="#00A0E9"></path>
                                            <path d="M48.4673 14.9923H50.9772V1.29715H48.4673V14.8888V14.9923Z"
                                                fill="#00A0E9"></path>
                                            <path
                                                d="M30.5229 14.9927H28.0111V9.42078C28.0111 8.37224 27.1538 7.52173 26.1009 7.52173C25.0478 7.52173 24.1905 8.37405 24.1905 9.42078V14.9927H21.6787V9.42078C21.6787 6.99653 23.6622 5.02475 26.1009 5.02475C28.5395 5.02475 30.5229 6.99653 30.5229 9.42078V14.9927Z"
                                                fill="#00A0E9"></path>
                                            <path
                                                d="M58.6811 11.598C58.2259 12.1413 57.5385 12.4867 56.7744 12.4867C55.4052 12.4867 54.2901 11.3781 54.2901 10.0169C54.2901 8.65577 55.4052 7.54721 56.7744 7.54721C57.5385 7.54721 58.2241 7.8925 58.6811 8.43406C58.767 8.53764 58.8438 8.64668 58.9133 8.76117L61.0246 7.3782C60.8583 7.11288 60.6683 6.86572 60.4561 6.63674C59.5403 5.65176 58.2314 5.03387 56.7744 5.03387C54.0067 5.03387 51.7637 7.26371 51.7637 10.0133C51.7637 12.7647 54.0067 14.9946 56.7744 14.9946C58.2295 14.9946 59.5403 14.3766 60.4561 13.3917C60.6683 13.1645 60.8583 12.9155 61.0246 12.6502L58.9133 11.2672C58.8456 11.3853 58.7688 11.4962 58.6811 11.598Z"
                                                fill="#00A0E9"></path>
                                            <path
                                                d="M2.51176 8.40506V5.45193C2.51176 3.82362 3.84991 2.4988 5.49518 2.4988C7.14043 2.4988 8.48041 3.82362 8.48041 5.45193C8.48041 7.08023 7.14226 8.40506 5.49518 8.40506H2.51176ZM11.5845 14.9892L10.2353 12.5594L8.73268 9.85347C10.1019 8.8612 10.9921 7.25833 10.9921 5.45193C10.9921 2.4461 8.52611 0 5.49518 0C2.46424 0 0 2.44428 0 5.45193V9.6554V10.9038V14.9909H2.51176V10.902H5.49518C5.80411 10.902 6.10757 10.8748 6.40189 10.8275L8.71258 14.9909H11.5845V14.9892Z"
                                                fill="#00A0E9"></path>
                                            <path
                                                d="M82.329 9.02438V9.02075C82.329 9.02075 81.5703 8.90807 81.2413 8.70998C81.1974 8.67909 81.1572 8.64456 81.1188 8.60821C81.1096 8.59731 81.1023 8.59004 81.0968 8.58459C80.9324 8.41195 80.8391 8.19568 80.8555 7.96489L80.872 7.86857C80.8683 7.88674 80.8647 7.9031 80.8628 7.91764C80.8665 7.89219 80.8702 7.86857 80.8756 7.84494L80.872 7.87039C80.8867 7.80315 80.9177 7.70683 80.9798 7.60688C81.1042 7.41606 81.3126 7.26886 81.563 7.19616C81.6964 7.16164 81.8518 7.14164 82.0383 7.14528C82.7037 7.16164 83.3673 7.3888 83.806 7.57417L84.8736 5.6878C84.1826 5.38977 82.6379 4.82821 81.34 5.08446V5.08808C79.7277 5.28617 78.5521 6.38565 78.4498 7.79406C78.3676 8.92079 78.9927 9.94759 80.0475 10.5346C80.0475 10.5346 80.0475 10.5364 80.0494 10.5364C80.0951 10.5636 80.1792 10.6072 80.2907 10.6564C80.3144 10.6672 80.3364 10.6781 80.3601 10.6872C80.6636 10.8217 81.1096 10.9871 81.4497 11.018C81.8884 11.0579 82.1224 11.1125 82.1754 11.1251C82.6361 11.2651 82.956 11.6377 82.9267 12.0502L82.9103 12.1483C82.9139 12.1301 82.9176 12.1138 82.9194 12.0993C82.9158 12.1247 82.9103 12.1483 82.9048 12.1738L82.9084 12.1483C82.892 12.2156 82.8609 12.3119 82.8006 12.4118C82.6763 12.6027 82.4679 12.7498 82.2175 12.8226C82.084 12.8571 81.9287 12.877 81.7421 12.8735C80.6051 12.8462 79.4699 12.2011 79.4699 12.2011L78.2378 13.9875L78.5412 14.1637C78.5412 14.1637 80.7093 15.2778 82.4423 14.9342V14.9307C84.0547 14.7325 85.2301 13.633 85.3343 12.2247C85.4458 10.6599 84.1973 9.28788 82.329 9.02438Z"
                                                fill="#00A0E9"></path>
                                            <path
                                                d="M78.3967 5.39739C77.8629 5.16841 77.2761 5.0412 76.6582 5.0412C74.2196 5.0412 72.2397 7.01298 72.2397 9.43725V14.9928H74.7515V9.43725C74.7515 8.3905 75.6052 7.53818 76.6582 7.53818C76.916 7.53818 77.1609 7.59088 77.3857 7.68356"
                                                fill="#00A0E9"></path>
                                            <path
                                                d="M15.85 7.3383C16.9596 7.3383 17.9047 8.02705 18.2831 8.9975H13.4168C13.7934 8.02887 14.7403 7.3383 15.85 7.3383ZM17.7 11.858C17.6707 11.8852 17.6415 11.9124 17.6122 11.9397H17.6104C17.1351 12.3377 16.5209 12.5794 15.85 12.5794C14.7184 12.5794 13.7459 11.8961 13.3327 10.9202H17.1424H18.3672H20.7748C20.8296 10.6276 20.8589 10.3278 20.8589 10.0207C20.8589 7.27106 18.6177 5.04303 15.8518 5.04303C13.0859 5.04303 10.8447 7.27106 10.8447 10.0207C10.8447 12.7702 13.0859 14.9982 15.8518 14.9982C17.9376 14.9982 19.7236 13.7298 20.4768 11.9288C20.4859 11.9052 20.4951 11.8834 20.5042 11.8598H17.7V11.858Z"
                                                fill="#00A0E9"></path>
                                            <path
                                                d="M100.304 13.1664C99.2384 13.1664 98.3749 12.3068 98.3749 11.2473C98.3749 10.1879 99.2384 9.32826 100.304 9.32826C101.37 9.32826 102.232 10.1879 102.232 11.2473C102.234 12.3068 101.37 13.1664 100.304 13.1664ZM100.304 7.49823C98.2198 7.49823 96.5322 9.17742 96.5322 11.2473C96.5322 13.319 98.2217 14.9965 100.304 14.9965C102.387 14.9965 104.075 13.3172 104.075 11.2473C104.075 9.17742 102.387 7.49823 100.304 7.49823Z"
                                                fill="#006AAA"></path>
                                        </svg></i></div>
                            </a></li>
                        <li class="Optionstyles__OptionContainer-sc-rvxnoc-0 kHQNod"><a id="more-options-insurance"
                                data-testid="more-options-insurance"
                                href="https://www.assistcard.com/co/b2c/latam-airlines-co?label=co_home_more-options_insurance"
                                aria-label="Cotizar asistencia. Se abrirá una pestaña nueva"
                                class="sc-fnLEGM jIItqN">
                                <div class="sc-kSRfVL kpEXaU">
                                    <div class="sc-duAPit eOcjWo">
                                        <div class="sc-dUWDJJ cNLTMF">
                                            <div id="more-options-insurance-tag"
                                                data-testid="more-options-insurance-tag" aria-hidden="true"
                                                class="sc-aNeao cJJICW sc-fKMpNL hjQgby"><span font-weight="light"
                                                    color="#FFFFFF"
                                                    class="sc-eldPxv ehebCk latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog">Asistencia
                                                    en viaje</span></div>
                                        </div>
                                        <div class="sc-hLwbiq IcZCw">
                                            <p
                                                class="sc-eldPxv hfvvEX latam-typography latam-typography--heading-06 sc-fPXMVe iZqZog">
                                                Acumula millas</p>
                                            <h3 class="sc-nfKuY jANuji">Viaja con tranquilidad y obtén cobertura
                                                donde estés</h3>
                                        </div>
                                    </div>
                                    <div class="sc-hdFWlR kUwblR"><span tabindex="-1"
                                            class="sc-gytJtb clpAZo">Cotizar asistencia<i aria-hidden="true"
                                                class="sc-fUnMCh dVQpQF"><svg xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" focusable="false" viewBox="0 0 32 32">
                                                    <path
                                                        d="M29.3337 2.375V13.575H26.667V7.10701L13.8403 20.575L12.0003 18.643L24.827 5.175H18.667V2.375H29.3337ZM13.3337 2.375V5.175H5.33366V27.575H26.667V19.175H29.3337V30.375H2.66699V2.375H13.3337Z"
                                                        fill="currentColor"></path>
                                                </svg></i></span>
                                        <div class="sc-dmA-DAn cvuKbI"><img
                                                src="https://s.latamairlines.com/images/home/more-options/insurance.svg"
                                                aria-hidden="true" class="sc-kaaGRQ kEQbVv"></div>
                                    </div>
                                </div>
                                <div aria-hidden="true" class="sc-giVogm hchNOB"><span
                                        class="sc-dqYEFG iBoJdQ">Powered by</span>
                                    <span
                                        style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span
                                            style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img
                                                alt="" aria-hidden="true"
                                                src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2772%27%20height=%2772%27/%3e"
                                                style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span>
                                        <img data-testid="assist-card-img" aria-hidden="true"
                                            src="https://s.latamairlines.com/images/boreal/collections/v1/logos/partners/AssistCard.svg"
                                            decoding="async" data-nimg="intrinsic"
                                            class="AssistCardstyles__LogoImage-sc-1udcbi8-0 bgOHbF"
                                            style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"><noscript></noscript></span>
                                </div>
                            </a></li>
                    </ul>
                </div>
                <div id="home-top-destinations-container" data-testid="home-top-destinations-container"
                    class="TopSearchDestinationsstyles__DestinationSectionContainer-sc-1u6srtb-0 Nvfh">
                    <h2 font-weight="normal"
                        class="sc-eldPxv ddvMGj latam-typography latam-typography--heading-03 sc-fPXMVe iZqZog">
                        Destinos más buscados<span class="sc-hknOHE goetRk">Descubre los 4 destinos más
                            buscados</span></h2>
                    <ul class="TopSearchDestinationsstyles__DestinationsContainer-sc-1u6srtb-1 jauacO">
                        <li><a href="https://www.latamairlines.com/co/es/destinos/vuelos-a-medellin" target="_blank"
                                aria-label="Estos son los destinos más buscados en LATAM. Estás en el destino 1 de 4: Medellín, se abrirá una pestaña nueva."
                                class="DestinationCardstyles__DestinationContainer-sc-2dvrj0-0 gKDimB">
                                <h3 aria-hidden="true"
                                    class="DestinationCardstyles__DestinationTitle-sc-2dvrj0-1 gUlmlK">#1 Medellín
                                </h3>
                                <p aria-hidden="true"
                                    class="DestinationCardstyles__DestinationDescription-sc-2dvrj0-2 dTRFhk"></p>
                            </a></li>
                        <li><a href="https://www.latamairlines.com/co/es/destinos/espana/vuelos-a-madrid"
                                target="_blank"
                                aria-label="Estos son los destinos más buscados en LATAM. Estás en el destino 2 de 4: Madrid, se abrirá una pestaña nueva."
                                class="DestinationCardstyles__DestinationContainer-sc-2dvrj0-0 cMGyQN">
                                <h3 aria-hidden="true"
                                    class="DestinationCardstyles__DestinationTitle-sc-2dvrj0-1 gUlmlK">#2 Madrid
                                </h3>
                                <p aria-hidden="true"
                                    class="DestinationCardstyles__DestinationDescription-sc-2dvrj0-2 dTRFhk"></p>
                            </a></li>
                        <li><a href="https://www.latamairlines.com/co/es/destinos/argentina/vuelos-a-buenos-aires"
                                target="_blank"
                                aria-label="Estos son los destinos más buscados en LATAM. Estás en el destino 3 de 4: Buenos Aires, se abrirá una pestaña nueva."
                                class="DestinationCardstyles__DestinationContainer-sc-2dvrj0-0 GKiwm">
                                <h3 aria-hidden="true"
                                    class="DestinationCardstyles__DestinationTitle-sc-2dvrj0-1 gUlmlK">#3 Buenos
                                    Aires</h3>
                                <p aria-hidden="true"
                                    class="DestinationCardstyles__DestinationDescription-sc-2dvrj0-2 dTRFhk"></p>
                            </a></li>
                        <li><a href="https://www.latamairlines.com/co/es/destinos/estados-unidos/vuelos-a-miami"
                                target="_blank"
                                aria-label="Estos son los destinos más buscados en LATAM. Estás en el destino 4 de 4: Miami, se abrirá una pestaña nueva."
                                class="DestinationCardstyles__DestinationContainer-sc-2dvrj0-0 dhLzQm">
                                <h3 aria-hidden="true"
                                    class="DestinationCardstyles__DestinationTitle-sc-2dvrj0-1 gUlmlK">#4 Miami</h3>
                                <p aria-hidden="true"
                                    class="DestinationCardstyles__DestinationDescription-sc-2dvrj0-2 dTRFhk"></p>
                            </a></li>
                    </ul>
                    <div class="SeeMoreLinkstyles__SeeMoreLinkContainer-sc-c6c00d-0 fOwRRH"><a font-weight="bold"
                            color="#E8114b"
                            class="sc-eldPxv bMBZiu latam-typography latam-typography--heading-06 sc-fPXMVe SeeMoreLinkstyles__StyledAnchor-sc-c6c00d-1 iZqZog kOknVA"
                            href="https://www.latamairlines.com/co/es/destinos" data-testid="anchorTest"
                            target="_blank"><span>Ir a Destinos</span><i aria-hidden="true"
                                class="sc-fUnMCh jgibjs"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    focusable="false" viewBox="0 0 32 32">
                                    <path
                                        d="M8.16699 4.45004L19.2003 16L8.16699 27.55L10.5003 30L23.8336 16L10.5003 2L8.16699 4.45004Z"
                                        fill="currentColor"></path>
                                </svg></i></a></div>
                </div>
                <div id="login-in-latam-banner" aria-labelledby="login-banner-incentive-title"
                    aria-describedby="login-banner-incentive-benefits" role="region"
                    class="CommunicationsLoginstyles__CommunicationsLoginWrapper-sc-5i3pgy-5 bHfeGX">
                    <div class="CommunicationsLoginstyles__CommunicationsLoginCard-sc-5i3pgy-6 hkUulP"><img
                            aria-hidden="true"
                            src="https://s.latamairlines.com/images/home/login_incentive_decoration_1.svg"
                            class="CommunicationsLoginstyles__DecorationBubbleLeft-sc-5i3pgy-0 bMckbI"><img
                            aria-hidden="true"
                            src="https://s.latamairlines.com/images/home/login_incentive_decoration_2.svg"
                            class="CommunicationsLoginstyles__DecorationBubbleRight-sc-5i3pgy-1 eaSszG"><img
                            aria-hidden="true"
                            src="https://s.latamairlines.com/images/home/login_incentive_decoration_3.svg"
                            class="CommunicationsLoginstyles__DecorationTag-sc-5i3pgy-2 Xrgpy">
                        <div aria-hidden="true"
                            class="CommunicationsLoginstyles__BackgroundBlurDecoration-sc-5i3pgy-3 gjbYjl"></div>
                        <div class="CommunicationsLoginstyles__CommunicationsLoginContent-sc-5i3pgy-4 gXCgJu">
                            <h2 font-weight="normal" color="white"
                                class="sc-eldPxv evKcuz latam-typography latam-typography--heading-03 sc-fPXMVe iZqZog"
                                id="login-banner-incentive-title"><span>Crea tu cuenta y obtén beneficios LATAM
                                    <span lang="en">Pass</span></span></h2>
                            <ul id="login-banner-incentive-benefits"
                                class="ListCheckstyles__ListCheck-sc-to90s4-0 eNlsFL">
                                <li class="ListCheckstyles__ListCheckTextContainer-sc-to90s4-1 hAGCjL"><i
                                        aria-hidden="true" color="#00B5AD"
                                        class="sc-fUnMCh kvlpaY ListCheckstyles__TickIcon-sc-to90s4-2 kyBPpn"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false"
                                            viewBox="0 0 32 32">
                                            <path
                                                d="M21.348 10.4841L13.48 18.3799L9.54602 14.3341L7.64196 16.336L13.494 22.314L23.336 12.374L21.348 10.4841ZM16 2C23.7 2 30 8.3 30 16C30 23.7 23.7 30 16 30C8.3 30 2 23.7 2 16C2 8.3 8.3 2 16 2Z"
                                                fill="currentColor"></path>
                                        </svg></i><span color="#FFFFFF"
                                        class="sc-eldPxv iOxoML latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog"><span><b>Acumula
                                                Millas LATAM <span lang="en">Pass</span></b> en todas tus
                                            compras.</span></span></li>
                                <li class="ListCheckstyles__ListCheckTextContainer-sc-to90s4-1 hAGCjL"><i
                                        aria-hidden="true" color="#00B5AD"
                                        class="sc-fUnMCh kvlpaY ListCheckstyles__TickIcon-sc-to90s4-2 kyBPpn"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false"
                                            viewBox="0 0 32 32">
                                            <path
                                                d="M21.348 10.4841L13.48 18.3799L9.54602 14.3341L7.64196 16.336L13.494 22.314L23.336 12.374L21.348 10.4841ZM16 2C23.7 2 30 8.3 30 16C30 23.7 23.7 30 16 30C8.3 30 2 23.7 2 16C2 8.3 8.3 2 16 2Z"
                                                fill="currentColor"></path>
                                        </svg></i><span color="#FFFFFF"
                                        class="sc-eldPxv iOxoML latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog"><span><b>Obtén
                                                beneficios exclusivos</b> en equipaje, <span
                                                lang="en">Upgrade</span> de cabina y más.</span></span></li>
                                <li class="ListCheckstyles__ListCheckTextContainer-sc-to90s4-1 hAGCjL"><i
                                        aria-hidden="true" color="#00B5AD"
                                        class="sc-fUnMCh kvlpaY ListCheckstyles__TickIcon-sc-to90s4-2 kyBPpn"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false"
                                            viewBox="0 0 32 32">
                                            <path
                                                d="M21.348 10.4841L13.48 18.3799L9.54602 14.3341L7.64196 16.336L13.494 22.314L23.336 12.374L21.348 10.4841ZM16 2C23.7 2 30 8.3 30 16C30 23.7 23.7 30 16 30C8.3 30 2 23.7 2 16C2 8.3 8.3 2 16 2Z"
                                                fill="currentColor"></path>
                                        </svg></i><span color="#FFFFFF"
                                        class="sc-eldPxv iOxoML latam-typography latam-typography--paragraph-medium sc-fPXMVe iZqZog"><span><b>Canjea
                                                pasajes y productos</b> con tus Millas LATAM <span
                                                lang="en">Pass</span>.</span></span></li>
                            </ul>
                            <div class="CommunicationsLoginstyles__ButtonsContainer-sc-5i3pgy-7 bkOXIL"><a
                                    data-testid="communications-button-login--button"
                                    href="https://www.latamairlines.com/co/es/login"
                                    id="communications-button-login" aria-label="Iniciar sesión"
                                    class="sc-gEvEer bdtgkf sc-dhKdcB CommunicationsLoginstyles__ButtonLogin-sc-5i3pgy-8 bOsUiC lfUuNf"><span
                                        aria-hidden="false" class="sc-imWYAI geMfIu">Iniciar sesión</span></a><a
                                    data-testid="communications-button-register--button"
                                    href="https://www.latamairlines.com/co/es/registro"
                                    id="communications-button-register" aria-label="Crear cuenta"
                                    class="sc-gEvEer gSaTJN sc-dhKdcB CommunicationsLoginstyles__ButtonRegister-sc-5i3pgy-9 bOsUiC eSeLeo"><span
                                        aria-hidden="false" class="sc-imWYAI geMfIu">Crear cuenta</span></a></div>
                        </div>
                    </div>
                </div>
                <div id="value-proposition-section"
                    class="ValuePropositionstyles__ValuePropositionSection-sc-9pe5oq-2 gGQxmQ">
                    <div class="ValuePropositionstyles__ValuePropositionContainer-sc-9pe5oq-3 djOUDS">
                        <div class="ValuePropositionstyles__ValurPropositionTextContainer-sc-9pe5oq-4 dsBSil">
                            <h2 class="ValuePropositionstyles__ValuePropositionMainText-sc-9pe5oq-5 cfUdAj">
                                Experiencia LATAM, en todo momento</h2>
                            <p class="ValuePropositionstyles__ValuePropositionParagraphText-sc-9pe5oq-6 qRxZY">
                                Cuando eliges volar con nosotros te acompañamos en cada etapa.</p>
                        </div>
                        <div data-testid="value-proposition-carousel"
                            class="ValuePropositionstyles__CarouselContainer-sc-9pe5oq-0 fGLGYp">
                            <div id="carousel-value-proposition-carousel"
                                data-testid="value-proposition-carousel--test-id" class="sc-byGQZk ichbTT">
                                <div id="value-proposition-carousel--slider"
                                    data-testid="value-proposition-carousel--slider" class="sc-cafgYF eTcowY">
                                    <div aria-hidden="true" tabindex="-1"
                                        class="sc-gDszPb cNDQhQ sc-kZkypy ValuePropositionstyles__StyledSlide-sc-9pe5oq-1 joTLAC cvNqhc">
                                        <a id="value-proposition-prepare-your-trip"
                                            data-testid="value-proposition-prepare-your-trip"
                                            href="https://www.latamairlines.com/co/es/experiencia/prepara-tu-viaje"
                                            aria-label="Estás en elemento 1 de 4. Conoce más sobre lo que necesitas saber con anticipación al preparar tu viaje."
                                            class="ValuePropositionCardstyles__CardContainer-sc-djgbe5-0 hBdejX">
                                            <div
                                                class="ValuePropositionCardstyles__CardImageContainer-sc-djgbe5-1 diaNVm">
                                                <picture>
                                                    <source type="image/webp"
                                                        srcset="https://s.latamairlines.com/images/home/value_proposition_slider1.webp">
                                                    <img src="https://s.latamairlines.com/images/home/value_proposition_slider1.jpg"
                                                        alt="Prepara tu viaje con LATAM Airlines" loading="lazy"
                                                        aria-hidden="true"
                                                        class="ValuePropositionCardstyles__CardImage-sc-djgbe5-2 hSmTKv">
                                                </picture>
                                            </div>
                                            <div
                                                class="ValuePropositionCardstyles__CardInformationContainer-sc-djgbe5-3 eIdtkc">
                                                <div
                                                    class="ValuePropositionCardstyles__CardTextContainer-sc-djgbe5-4 jzZruW">
                                                    <h3 aria-hidden="true"
                                                        class="ValuePropositionCardstyles__CardTitle-sc-djgbe5-5 cFeBEV">
                                                        Al preparar tu viaje</h3>
                                                    <p aria-hidden="true"
                                                        class="ValuePropositionCardstyles__CardDescription-sc-djgbe5-6 iMzVpB">
                                                        Lo que necesitas saber con anticipación.</p>
                                                </div>
                                                <p aria-hidden="true"
                                                    class="ValuePropositionCardstyles__CardCTA-sc-djgbe5-7 VcnPo">
                                                    Conoce más</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div aria-hidden="true" tabindex="-1"
                                        class="sc-gDszPb cNDQhQ sc-kZkypy ValuePropositionstyles__StyledSlide-sc-9pe5oq-1 joTLAC cvNqhc">
                                        <a id="value-proposition-airport" data-testid="value-proposition-airport"
                                            href="https://www.latamairlines.com/co/es/experiencia/aeropuerto"
                                            aria-label="Estás en elemento 2 de 4. Conoce más sobre el embarque, información relevante si tienes que hacer una conexión, y más."
                                            class="ValuePropositionCardstyles__CardContainer-sc-djgbe5-0 hBdejX">
                                            <div
                                                class="ValuePropositionCardstyles__CardImageContainer-sc-djgbe5-1 diaNVm">
                                                <picture>
                                                    <source type="image/webp"
                                                        srcset="https://s.latamairlines.com/images/home/value_proposition_slider2.webp">
                                                    <img src="https://s.latamairlines.com/images/home/value_proposition_slider2.jpg"
                                                        alt="Embarque de nuestros vuelos LATAM" loading="lazy"
                                                        aria-hidden="true"
                                                        class="ValuePropositionCardstyles__CardImage-sc-djgbe5-2 hSmTKv">
                                                </picture>
                                            </div>
                                            <div
                                                class="ValuePropositionCardstyles__CardInformationContainer-sc-djgbe5-3 eIdtkc">
                                                <div
                                                    class="ValuePropositionCardstyles__CardTextContainer-sc-djgbe5-4 jzZruW">
                                                    <h3 aria-hidden="true"
                                                        class="ValuePropositionCardstyles__CardTitle-sc-djgbe5-5 cFeBEV">
                                                        En el aeropuerto</h3>
                                                    <p aria-hidden="true"
                                                        class="ValuePropositionCardstyles__CardDescription-sc-djgbe5-6 iMzVpB">
                                                        Hacemos fácil el día de tu viaje.</p>
                                                </div>
                                                <p aria-hidden="true"
                                                    class="ValuePropositionCardstyles__CardCTA-sc-djgbe5-7 VcnPo">
                                                    Conoce más</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div aria-hidden="true" tabindex="-1"
                                        class="sc-gDszPb gXNUMa sc-kZkypy ValuePropositionstyles__StyledSlide-sc-9pe5oq-1 joTLAC cvNqhc">
                                        <a id="value-proposition-during-flight"
                                            data-testid="value-proposition-during-flight"
                                            href="https://www.latamairlines.com/co/es/experiencia/durante-el-vuelo"
                                            aria-label="Estás en elemento 3 de 4. Conoce más sobre nuestros servicios a bordo durante el vuelo."
                                            class="ValuePropositionCardstyles__CardContainer-sc-djgbe5-0 hBdejX">
                                            <div
                                                class="ValuePropositionCardstyles__CardImageContainer-sc-djgbe5-1 diaNVm">
                                                <picture>
                                                    <source type="image/webp"
                                                        srcset="https://s.latamairlines.com/images/home/value_proposition_slider3.webp">
                                                    <img src="https://s.latamairlines.com/images/home/value_proposition_slider3.jpg"
                                                        alt="Disfruta de nuestro servicio a bordo en LATAM"
                                                        loading="lazy" aria-hidden="true"
                                                        class="ValuePropositionCardstyles__CardImage-sc-djgbe5-2 hSmTKv">
                                                </picture>
                                            </div>
                                            <div
                                                class="ValuePropositionCardstyles__CardInformationContainer-sc-djgbe5-3 eIdtkc">
                                                <div
                                                    class="ValuePropositionCardstyles__CardTextContainer-sc-djgbe5-4 jzZruW">
                                                    <h3 aria-hidden="true"
                                                        class="ValuePropositionCardstyles__CardTitle-sc-djgbe5-5 cFeBEV">
                                                        Durante el vuelo</h3>
                                                    <p aria-hidden="true"
                                                        class="ValuePropositionCardstyles__CardDescription-sc-djgbe5-6 iMzVpB">
                                                        Relájate y disfruta de nuestro servicio a bordo.</p>
                                                </div>
                                                <p aria-hidden="true"
                                                    class="ValuePropositionCardstyles__CardCTA-sc-djgbe5-7 VcnPo">
                                                    Conoce más</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div aria-hidden="true" tabindex="-1"
                                        class="sc-gDszPb gXNUMa sc-kZkypy ValuePropositionstyles__StyledSlide-sc-9pe5oq-1 joTLAC cvNqhc">
                                        <a id="value-proposition-discover-more"
                                            data-testid="value-proposition-discover-more"
                                            aria-label="Estás en elemento 4 de 4. Conoce toda la experiencia LATAM"
                                            href="https://www.latamairlines.com/co/es/experiencia"
                                            class="DiscoverMoreCardstyles__CardAnchor-sc-g1q2no-0 mSMWw">
                                            <div class="DiscoverMoreCardstyles__CardContainer-sc-g1q2no-1 bbhagZ">
                                                <button tabindex="-1" aria-hidden="true"
                                                    class="sc-gEvEer kmphdF sc-dhKdcB sc-kpDqfm bOsUiC lgQakD sc-dAlyuH DiscoverMoreCardstyles__IconButton-sc-g1q2no-2 bnGnEl ctzPfd"><span
                                                        aria-hidden="false" class="sc-imWYAI geMfIu"><i
                                                            aria-hidden="true" class="sc-fUnMCh jgibjs"><svg
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                focusable="false" viewBox="0 0 32 32">
                                                                <path
                                                                    d="M13.55 4.45L23.4025 14.25L2 14.25L2 17.75L23.4025 17.75L13.55 27.55L16 30L30 16L16 2L13.55 4.45Z"
                                                                    fill="currentColor"></path>
                                                            </svg></i></span></button>
                                                <h3 aria-hidden="true"
                                                    class="DiscoverMoreCardstyles__CardTitle-sc-g1q2no-3 jWoalu">
                                                    Conoce toda la experiencia LATAM</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="sc-bEhhBa fNGsNw">
                                    <div class="sc-jSCfdx fkJKXv"></div>
                                    <div data-testid="value-proposition-carousel--dots-indicator"
                                        id="value-proposition-carousel--dots-indicator" class="sc-ilJxFg gZabJZ">
                                        <div class="sc-ioUWlN bqQJqY">
                                            <div class="sc-bvrlno eODNZy active"></div>
                                            <div class="sc-bvrlno eODNZy"></div>
                                        </div><span class="sc-hknOHE goetRk">Elemento número 1 de 2</span>
                                    </div>
                                    <div class="sc-jSCfdx fkJKXv">
                                        <div class="sc-bCMFDn ceiWBe"><button data-testid="carousel-next-button"
                                                id="carousel-right-indicator" aria-label="Ver elemento siguiente"
                                                class="sc-gEvEer kmphdF sc-dhKdcB sc-kpDqfm bOsUiC eoEgfQ sc-dAlyuH bnGnEl sc-fYEEdK LjPeo"><span
                                                    aria-hidden="false" class="sc-imWYAI geMfIu"><i
                                                        aria-hidden="true" class="sc-aXZVg NRJmE"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            focusable="false" viewBox="0 0 32 32">
                                                            <path
                                                                d="M13.55 4.45L23.4025 14.25L2 14.25L2 17.75L23.4025 17.75L13.55 27.55L16 30L30 16L16 2L13.55 4.45Z"
                                                                fill="currentColor"></path>
                                                        </svg></i></span></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div id="home-credit-card-banner-container" data-testid="home-credit-card-banner-container"
                class="CreditCardBannerstyles__CreditCardBannerWrapper-sc-3e92yu-0 izBLJz">
                <div class="sc-bHnlcS bJKaKh  " id="bogota-banner-home" data-testid="banner-credit-card-wrapper">
                    <div class="sc-gFnajm cxEWxc"><a
                            href="https://tcdigital.bancodebogota.com/web-card/info-motor?utm_source=latam&amp;utm_medium=referral&amp;utm_campaign=acumula_millas&amp;utm_content=banner&amp;redirect=https://www.latamairlines.com/co/es"
                            target="_blank" id="bogota-banner-link" data-testid="banner-credit-card-anchor"
                            class="sc-cKXybt jqQeUu"><span class="sc-hknOHE goetRk"><span>Hasta 30% de cashback en
                                    pasajes. ¡Pide tu tarjeta LATAM Pass! Al hacer click en este banner serás
                                    enviado a un formulario para la solicitud de una tarjeta LATAM Pass Banco de
                                    Bogotá.</span></span>
                            <div class="sc-fatcLD ipJZkI"><img
                                    src="https://s.latamairlines.com/images/web-ancillaries/credit-card-banners/bogota-latampass-vertical.png"
                                    alt="" class="sc-cgjDci kEZdLh">
                                <div class="sc-djTQaJ gXFKqD">
                                    <p class="sc-eldPxv hfvvEX latam-typography latam-typography--paragraph-base sc-fPXMVe sc-pKqro iZqZog coEReB"
                                        data-testid="cardless-description-text" aria-hidden="true">
                                        <span><strong>Hasta 30% de cashback</strong> en pasajes. ¡Pide tu tarjeta
                                            LATAM Pass!</span>
                                    </p>
                                    <div class="sc-gvPdwL kYBsp"><span class="sc-djVXDX dcheiz"><span
                                                class="sc-epRvzc hqrOoM">Solicitar tarjeta<span
                                                    class="sc-hknOHE goetRk"><span>Se abrirá en una nueva
                                                        ventana</span></span></span><i aria-hidden="true"
                                                class="sc-fUnMCh dVQpQF"><svg xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" focusable="false" viewBox="0 0 32 32">
                                                    <path
                                                        d="M29.3337 2.375V13.575H26.667V7.10701L13.8403 20.575L12.0003 18.643L24.827 5.175H18.667V2.375H29.3337ZM13.3337 2.375V5.175H5.33366V27.575H26.667V19.175H29.3337V30.375H2.66699V2.375H13.3337Z"
                                                        fill="currentColor"></path>
                                                </svg></i></span></div>
                                </div>
                            </div>
                        </a></div>
                </div>
            </div>
        </main>
        <footer>
            <div class="sc-hRcwtX jlyDzf">
                <div class="sc-jIxBFl enxdcR">
                    <div class="sc-gBcwRQ fcBPOE">
                        <hr>
                        <div class="sc-dqKyxz loNpnj">
                            <div class="sc-jptKe dCmoUs">
                                <h5 id="lbl-title-latam-airlines" class="sc-eHRHtx hNoBsh">LATAM Airlines</h5>
                                <div class="sc-bAwCGc kAEGeL">
                                    <ul>
                                        <li class="sc-WejxL eVmWtf"><a id="footer__top__lnk-home" href="/co/es"
                                                target="_self" rel="noopener" class="sc-cbZHsQ hGBNbW">Inicio</a>
                                        </li>
                                        <li class="sc-WejxL eVmWtf"><a id="footer__top__lnk-about"
                                                href="/co/es/sobre-latam" target="_self" rel="noopener"
                                                class="sc-cbZHsQ hGBNbW">Acerca de LATAM</a></li>
                                        <li class="sc-WejxL eVmWtf"><a id="footer__top__lnk-new-experience"
                                                href="/co/es/experiencia" target="_self" rel="noopener"
                                                class="sc-cbZHsQ hGBNbW">Experiencia LATAM</a></li>
                                        <li class="sc-WejxL eVmWtf"><a id="footer__top__lnk-prepare-travel"
                                                href="/co/es/experiencia/prepara-tu-viaje" target="_self"
                                                rel="noopener" class="sc-cbZHsQ hGBNbW">Prepara tu viaje</a></li>
                                        <li class="sc-WejxL eVmWtf"><a id="footer__top__lnk-my-trips"
                                                href="/co/es/mis-viajes" target="_self" rel="noopener"
                                                class="sc-cbZHsQ hGBNbW">Mis viajes</a></li>
                                        <li class="sc-WejxL eVmWtf"><a id="footer__top__lnk-flight-status"
                                                href="/co/es/flight-status" target="_self" rel="noopener"
                                                class="sc-cbZHsQ hGBNbW">Estado de vuelo</a></li>
                                        <li class="sc-WejxL eVmWtf"><a id="footer__top__lnk-checkIn"
                                                href="/co/es/check-in" target="_self" rel="noopener"
                                                class="sc-cbZHsQ hGBNbW">Check-in</a></li>
                                        <li class="sc-WejxL eVmWtf"><a
                                                id="footer__top__lnk-program-destinations-latam"
                                                href="/co/es/destinos" target="_self" rel="noopener"
                                                class="sc-cbZHsQ hGBNbW">Destinos</a></li>
                                        <li class="sc-WejxL eVmWtf"><a id="footer__top__lnk-latam-wallet"
                                                href="/co/es/wallet" target="_self" rel="noopener nofollow"
                                                class="sc-cbZHsQ hGBNbW">LATAM Wallet</a></li>
                                        <li class="sc-WejxL eVmWtf"><a id="footer__top__lnk-sign-up"
                                                href="/co/es/registro" target="_self" rel="noopener nofollow"
                                                class="sc-cbZHsQ hGBNbW">Crea tu cuenta</a></li>
                                        <li class="sc-WejxL eVmWtf"><a id="footer__top__lnk-help"
                                                href="/co/es/centro-ayuda" target="_self" rel="noopener"
                                                class="sc-cbZHsQ hGBNbW">Centro de ayuda</a></li>
                                        <li class="sc-WejxL eVmWtf"><a id="footer__top__lnk-press-room"
                                                href="/co/es/prensa" target="_self" rel="noopener nofollow"
                                                class="sc-cbZHsQ hGBNbW">Sala de prensa</a></li>
                                        <li class="sc-WejxL eVmWtf"><a id="footer__top__lnk-sustainability"
                                                href="/co/es/sostenibilidad" target="_self" rel="noopener"
                                                class="sc-cbZHsQ hGBNbW">Sostenibilidad</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sc-jptKe dCmoUs">
                                <h5 id="lbl-title-legal-information" class="sc-eHRHtx hNoBsh">Información legal</h5>
                                <div class="sc-bAwCGc kAEGeL">
                                    <ul>
                                        <li class="sc-WejxL eVmWtf"><a
                                                id="footer__top__lnk-contract-transport-conditions"
                                                href="/co/es/legal/condiciones-del-contrato-de-transporte"
                                                target="_self" rel="noopener nofollow"
                                                class="sc-cbZHsQ hGBNbW">Condiciones de contrato de transporte</a>
                                        </li>
                                        <li class="sc-WejxL eVmWtf"><a id="footer__top__lnk-privacy-politics"
                                                href="/co/es/legal/politica-de-privacidad" target="_self"
                                                rel="noopener nofollow" class="sc-cbZHsQ hGBNbW">Políticas de
                                                privacidad y seguridad</a></li>
                                        <li class="sc-WejxL eVmWtf"><a
                                                id="footer__top__lnk-general-conditiones-for-online-purchases"
                                                href="/co/es/legal/terminos-y-condiciones/general" target="_self"
                                                rel="noopener nofollow" class="sc-cbZHsQ hGBNbW">Términos y
                                                condiciones generales</a></li>
                                        <li class="sc-WejxL eVmWtf"><a id="footer__top__lnk-cookies-policy"
                                                href="/co/es/legal/politica-cookies" target="_self"
                                                rel="noopener nofollow" class="sc-cbZHsQ hGBNbW">Política sobre
                                                cookies</a></li>
                                        <li class="sc-WejxL eVmWtf"><a id="footer__top__lnk-use-terms"
                                                href="/co/es/legal/terminos-de-uso" target="_self"
                                                rel="noopener nofollow" class="sc-cbZHsQ hGBNbW">Términos de uso</a>
                                        </li>
                                        <li class="sc-WejxL eVmWtf"><a id="footer__top__lnk-know-rights"
                                                href="/co/es/legal/conoce-tus-derechos" target="_self"
                                                rel="noopener nofollow" class="sc-cbZHsQ hGBNbW">Conoce tus derechos
                                                y deberes</a></li>
                                        <li class="sc-WejxL eVmWtf"><a
                                                id="footer__top__lnk-financial-reorganization"
                                                href="https://cases.primeclerk.com/LATAM/" target="_blank"
                                                rel="noopener nofollow" class="sc-cbZHsQ hGBNbW">Reorganización
                                                financiera / Capítulo 11</a></li>
                                        <li class="sc-WejxL eVmWtf"><a id="footer__top__lnk-taxes"
                                                href="/co/es/legal/tasas-cargos-impuestos" target="_self"
                                                rel="noopener nofollow" class="sc-cbZHsQ hGBNbW">Tasas, cargos e
                                                impuestos</a></li>
                                        <li class="sc-WejxL eVmWtf"><a id="footer__top__lnk-conductCode"
                                                href="/co/es/legal/codigo-conducta-prevencion-explotacion-menores"
                                                target="_self" rel="noopener nofollow"
                                                class="sc-cbZHsQ hGBNbW">Código de conducta para la prevención de
                                                explotación de menores</a></li>
                                        <li class="sc-WejxL eVmWtf"><a id="footer__top__lnk-personal-data-policy"
                                                href="/co/es/legal/politica-tratamiento-datos-personales"
                                                target="_self" rel="noopener nofollow"
                                                class="sc-cbZHsQ hGBNbW">Política de tratamiento de datos
                                                personales</a></li>
                                        <li class="sc-WejxL eVmWtf"><a id="footer__top__lnk-press-super-societies"
                                                href="https://www.latam.com/es_co/prensa/comunicados/informacion_supersociedades_reconocimiento_proceso_extranjero/"
                                                target="_blank" rel="noopener nofollow"
                                                class="sc-cbZHsQ hGBNbW">Información Supersociedades: reconocimiento
                                                de proceso extranjero</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="sc-jptKe dCmoUs">
                            <h5 id="lbl-title-asociated-portals" class="sc-eHRHtx hNoBsh">Portales asociados</h5>
                            <div class="sc-bAwCGc kAEGeL">
                                <ul>
                                    <li class="sc-WejxL eVmWtf"><a id="footer__top__lnk-program-latamPass"
                                            href="https://latampass.latam.com/es_co/" target="_blank"
                                            rel="noopener nofollow" class="sc-cbZHsQ hGBNbW">LATAM Pass</a></li>
                                    <li class="sc-WejxL eVmWtf"><a id="footer__top__lnk-program-vamos-latam"
                                            href="/co/es/vamos" target="_self" rel="noopener"
                                            class="sc-cbZHsQ hGBNbW">Vamos / LATAM</a></li>
                                    <li class="sc-WejxL eVmWtf"><a id="footer__top__lnk-latam-travel"
                                            href="/co/es/latam-travel" target="_self" rel="noopener"
                                            class="sc-cbZHsQ hGBNbW">Paquetes, hoteles y más</a></li>
                                    <li class="sc-WejxL eVmWtf"><a id="footer__top__lnk-latam-cargo"
                                            href="https://www.latamcargo.com/es/" target="_blank"
                                            rel="noopener nofollow" class="sc-cbZHsQ hGBNbW">LATAM Cargo</a></li>
                                    <li class="sc-WejxL eVmWtf"><a id="footer__top__lnk-latam-corporate"
                                            href="https://b2b.corporate.latamairlines.com/co/es" target="_blank"
                                            rel="noopener" class="sc-cbZHsQ hGBNbW">LATAM Corporate</a></li>
                                    <li class="sc-WejxL eVmWtf"><a id="footer__top__lnk-latam-careers"
                                            href="/co/es/trabaja-con-nosotros" target="_blank" rel="noopener"
                                            class="sc-cbZHsQ hGBNbW">Trabaja con nosotros</a></li>
                                    <li class="sc-WejxL eVmWtf"><a id="footer__top__lnk-investors"
                                            href="https://www.latamairlinesgroup.net/es" target="_blank"
                                            rel="noopener nofollow" class="sc-cbZHsQ hGBNbW">Relación con
                                            inversionistas</a></li>
                                    <li class="sc-WejxL eVmWtf"><a id="footer__top__lnk-tourism-register"
                                            href="/co/es/legal/registro-turismo" target="_blank"
                                            rel="noopener nofollow" class="sc-cbZHsQ hGBNbW">Registro Nacional de
                                            Turismo</a></li>
                                    <li class="sc-WejxL eVmWtf"><a id="footer__top__lnk-aca"
                                            href="https://www.aerocivil.gov.co/" target="_blank"
                                            rel="noopener nofollow" class="sc-cbZHsQ hGBNbW">Aeronáutica civil</a>
                                    </li>
                                    <li class="sc-WejxL eVmWtf"><a id="footer__top__lnk-super-transport"
                                            href="https://www.supertransporte.gov.co/" target="_blank"
                                            rel="noopener nofollow" class="sc-cbZHsQ hGBNbW">Superintendencia de
                                            Transporte</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sc-jptKe dCmoUs" style="width: 100%;">
                            <h5 id="lbl-title-contact-with-us" class="sc-eHRHtx hNoBsh">Contacta con nosotros</h5>
                            <ul class="sc-nukQN gZXKRd">
                                <li class="sc-hcFBEE jcVKnS"><a id="footer__top__lnk-facebook"
                                        data-testid="footer__top__lnk-facebook--link" target="_blank"
                                        class="sc-bVVIoq fJcZel sc-dPZUQH hymxAK sc-egkQYF dCORDf"
                                        href="https://www.facebook.com/LATAMColombia/"
                                        rel="noopener noreferrer nofollow"
                                        aria-labelledby="footer__top__lnk-facebook-label"><span><span
                                                id="footer__top__lnk-facebook-label"
                                                class="sc-hknOHE goetRk">Facebook</span><i aria-hidden="true"
                                                color="#3A5795" class="sc-SrznA gTAHHF sc-eVEvVi OBDNO"><svg
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false"
                                                    width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path
                                                        d="M30 16C30 23.732 23.732 30 16 30C8.26801 30 2 23.732 2 16C2 8.26801 8.26801 2 16 2C23.732 2 30 8.26801 30 16Z"
                                                        fill="#3A5795"></path>
                                                    <path
                                                        d="M20.3751 10.424H18.2322C17.8751 10.424 17.4287 10.8529 17.4287 11.1103V13.169H20.3751V13.5121C20.1965 14.9704 20.018 16.2574 20.018 16.2574H17.4287V24.75H13.5001V16.343H11.6251V13.2549H13.5001V10.647C13.5001 9.94358 13.6787 7.24998 17.4287 7.24998H20.3751V10.424Z"
                                                        fill="white"></path>
                                                </svg></i></span></a></li>
                                <li class="sc-hcFBEE jcVKnS"><a id="footer__top__lnk-twitter"
                                        data-testid="footer__top__lnk-twitter--link" target="_blank"
                                        class="sc-bVVIoq fJcZel sc-dPZUQH hymxAK sc-egkQYF dCORDf"
                                        href="https://twitter.com/LATAM_CO" rel="noopener noreferrer nofollow"
                                        aria-labelledby="footer__top__lnk-twitter-label"><span><span
                                                id="footer__top__lnk-twitter-label"
                                                class="sc-hknOHE goetRk">Twitter</span><i aria-hidden="true"
                                                color="#5EA9DD" class="sc-SrznA jcQICN sc-iqWOwV ggRHbw"><svg
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false"
                                                    width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path
                                                        d="M30 16C30 23.732 23.732 30 16 30C8.26801 30 2 23.732 2 16C2 8.26801 8.26801 2 16 2C23.732 2 30 8.26801 30 16Z"
                                                        fill="black"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M17.3035 14.9119L22.5035 9H21.314L20.2956 10.1522L16.773 14.1587L13.1394 9H9.01605L14.4831 16.763L9 22.9996H10.1899L15.0136 17.5154L18.8767 23H23L17.3035 14.9119ZM12.6492 9.91126H10.7902L19.3668 22.088H21.2258L12.6492 9.91126Z"
                                                        fill="white"></path>
                                                </svg></i></span></a></li>
                                <li class="sc-hcFBEE jcVKnS"><a id="footer__top__lnk-youtube"
                                        data-testid="footer__top__lnk-youtube--link" target="_blank"
                                        class="sc-bVVIoq fJcZel sc-dPZUQH hymxAK sc-egkQYF dCORDf"
                                        href="https://www.youtube.com/user/lanairlines"
                                        rel="noopener noreferrer nofollow"
                                        aria-labelledby="footer__top__lnk-youtube-label"><span><span
                                                id="footer__top__lnk-youtube-label"
                                                class="sc-hknOHE goetRk">Youtube</span><i aria-hidden="true"
                                                color="#CC181E" class="sc-SrznA bAebpM sc-lnrzcU bigXQp"><svg
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false"
                                                    width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path
                                                        d="M30 16C30 23.732 23.732 30 16 30C8.26801 30 2 23.732 2 16C2 8.26801 8.26801 2 16 2C23.732 2 30 8.26801 30 16Z"
                                                        fill="#CC181E"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M23.0033 18.2375C23.0571 17.4235 23.108 16.6525 23.108 15.8332C23.1651 15.02 23.108 14.1526 23.0509 13.3394C23.0509 12.9057 22.8795 12.4719 22.5939 12.1466C22.2512 11.7129 21.6801 11.4419 21.0518 11.4419L21.043 11.4416C19.5038 11.3875 17.9644 11.3334 16.3682 11.3334H15.9112C14.315 11.3334 12.7756 11.3875 11.2364 11.4416L11.2276 11.4419C10.0852 11.4419 9.17131 12.3093 9.17131 13.3394C9.05708 14.1526 9 15.02 9 15.8332C9 16.6526 9.05094 17.4236 9.10473 18.2376C9.10788 18.2853 9.11105 18.3332 9.11421 18.3812C9.11421 19.0318 9.45693 19.5739 9.91387 19.8992C10.2566 20.1703 10.6564 20.2787 11.1133 20.2787C12.7126 20.3329 14.369 20.3872 16.0254 20.3872C17.6818 20.3872 19.3954 20.3329 20.9376 20.2787C22.0799 20.2787 22.9938 19.4113 22.9938 18.3812C22.997 18.3332 23.0001 18.2853 23.0033 18.2375ZM14.3128 13.339L18.1969 15.4533C18.3682 15.5076 18.4253 15.616 18.4825 15.7244C18.5967 15.9413 18.4824 16.1039 18.254 16.2665L14.37 18.3808C14.1415 18.4893 13.9702 18.4893 13.8559 18.4351C13.6846 18.3809 13.5704 18.2183 13.5704 17.9472V13.7185C13.5704 13.2848 13.913 13.1222 14.3128 13.339Z"
                                                        fill="white"></path>
                                                </svg></i></span></a></li>
                                <li class="sc-hcFBEE jcVKnS"><a id="footer__top__lnk-instagram"
                                        data-testid="footer__top__lnk-instagram--link" target="_blank"
                                        class="sc-bVVIoq fJcZel sc-dPZUQH hymxAK sc-egkQYF dCORDf"
                                        href="https://www.instagram.com/latamairlines/"
                                        rel="noopener noreferrer nofollow"
                                        aria-labelledby="footer__top__lnk-instagram-label"><span><span
                                                id="footer__top__lnk-instagram-label"
                                                class="sc-hknOHE goetRk">Instagram</span><i aria-hidden="true"
                                                color="#DC3175" class="sc-SrznA bfCnai sc-bZjLpj dFcTuF"><svg
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false"
                                                    width="32px" height="32px" viewBox="0 0 32 32">
                                                    <path
                                                        d="M30 16C30 23.732 23.732 30 16 30C8.26801 30 2 23.732 2 16C2 8.26801 8.26801 2 16 2C23.732 2 30 8.26801 30 16Z"
                                                        fill="#DC3175"></path>
                                                    <path
                                                        d="M16 9.62417C18.0767 9.62417 18.323 9.63194 19.1435 9.66954C21.2513 9.76546 22.2358 10.7656 22.3318 12.8578C22.3694 13.6777 22.3765 13.924 22.3765 16.0006C22.3765 18.078 22.3687 18.3236 22.3318 19.1435C22.2352 21.2338 21.2532 22.2358 19.1435 22.3318C18.323 22.3694 18.078 22.3771 16 22.3771C13.9233 22.3771 13.677 22.3694 12.8571 22.3318C10.7442 22.2352 9.76481 21.2306 9.66889 19.1429C9.6313 18.323 9.62352 18.0773 9.62352 16C9.62352 13.9233 9.63194 13.6777 9.66889 12.8571C9.76546 10.7656 10.7474 9.76481 12.8571 9.66889C13.6777 9.63194 13.9233 9.62417 16 9.62417ZM16 8.22222C13.8877 8.22222 13.6232 8.2313 12.7936 8.26889C9.96898 8.39852 8.39917 9.96574 8.26954 12.793C8.2313 13.6232 8.22222 13.8877 8.22222 16C8.22222 18.1123 8.2313 18.3774 8.26889 19.207C8.39852 22.0317 9.96574 23.6015 12.793 23.7311C13.6232 23.7687 13.8877 23.7778 16 23.7778C18.1123 23.7778 18.3774 23.7687 19.207 23.7311C22.0291 23.6015 23.6028 22.0343 23.7305 19.207C23.7687 18.3774 23.7778 18.1123 23.7778 16C23.7778 13.8877 23.7687 13.6232 23.7311 12.7936C23.6041 9.97157 22.0349 8.39917 19.2077 8.26954C18.3774 8.2313 18.1123 8.22222 16 8.22222ZM16 12.0061C13.7944 12.0061 12.0061 13.7944 12.0061 16C12.0061 18.2056 13.7944 19.9945 16 19.9945C18.2056 19.9945 19.9939 18.2063 19.9939 16C19.9939 13.7944 18.2056 12.0061 16 12.0061ZM16 18.5926C14.5682 18.5926 13.4074 17.4324 13.4074 16C13.4074 14.5682 14.5682 13.4074 16 13.4074C17.4318 13.4074 18.5926 14.5682 18.5926 16C18.5926 17.4324 17.4318 18.5926 16 18.5926ZM20.152 10.9153C19.6361 10.9153 19.2181 11.3333 19.2181 11.8486C19.2181 12.3639 19.6361 12.7819 20.152 12.7819C20.6673 12.7819 21.0847 12.3639 21.0847 11.8486C21.0847 11.3333 20.6673 10.9153 20.152 10.9153Z"
                                                        fill="white"></path>
                                                </svg></i></span></a></li>
                            </ul>
                            <h5 id="lbl-title-certs" class="sc-eHRHtx hNoBsh">Certificaciones</h5>
                            <ul class="sc-nukQN gZXKRd">
                                <li><a id="pci-co-top-link" data-testid="pci-co-top-link--link"
                                        href="https://www.pcisecuritystandards.org/" tabindex="0"
                                        rel="noopener noreferrer nofollow" target="_blank" title="PCI"
                                        class="sc-bVVIoq bILncb sc-dPZUQH sc-xfJVh hymxAK erenUu"><span><img
                                                src="https://s.latamairlines.com/images/boreal/collections/v1/logos/partners/PCIDSSCompliantGreyscale.svg"
                                                alt="PCI"><span class="sc-hknOHE goetRk">El enlace se abrirá en
                                                nueva pestaña.</span></span></a></li>
                            </ul>
                            <h5 id="lbl-title-dowload-app" class="sc-eHRHtx hNoBsh">Nuestra app en tu teléfono</h5>
                            <ul class="sc-gyfiXm hRfTQt">
                                <li class="sc-hcFBEE jcVKnS"><a id="footer__top__lnk-android-download"
                                        data-testid="footer__top__lnk-android-download--link" target="_blank"
                                        class="sc-bVVIoq fJcZel sc-dPZUQH hymxAK sc-egkQYF dCORDf android"
                                        href="https://play.google.com/store/apps/details?id=com.latam.xp"
                                        rel="noopener noreferrer nofollow"
                                        aria-labelledby="footer__top__lnk-android-download-label"><span><span
                                                id="footer__top__lnk-android-download-label"
                                                class="sc-hknOHE goetRk">Descárgala desde Google Play</span><i
                                                aria-hidden="true" class="sc-fWKdJz fdenJD"><svg
                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    viewBox="0 0 180 53.333" xml:space="preserve">
                                                    <defs>
                                                        <clipPath id="clipPath28" clipPathUnits="userSpaceOnUse">
                                                            <path
                                                                d="M205.098 176.105l-.743.711c-2.91 3.079-4.628 7.86-4.628 14.051v-1.457V410.566v-1.461c0 6.704 2.003 11.754 5.359 14.782l123.898-123.895-123.886-123.887M199.77 412.27c0 .007 0 .015.003.023-.003-.008-.003-.016-.003-.023m.003.07v0">
                                                            </path>
                                                        </clipPath>
                                                        <linearGradient id="linearGradient42" x1="0" x2="1" y1="0"
                                                            y2="0"
                                                            gradientTransform="scale(-237.34) rotate(45 1.43 -2.487)"
                                                            gradientUnits="userSpaceOnUse" spreadMethod="pad">
                                                            <stop offset="0" stop-color="#00a0ff" stop-opacity="1">
                                                            </stop>
                                                            <stop offset="0.007" stop-color="#00a1ff"
                                                                stop-opacity="1"></stop>
                                                            <stop offset="0.26" stop-color="#00beff"
                                                                stop-opacity="1"></stop>
                                                            <stop offset="0.512" stop-color="#00d2ff"
                                                                stop-opacity="1"></stop>
                                                            <stop offset="0.76" stop-color="#00dfff"
                                                                stop-opacity="1"></stop>
                                                            <stop offset="1" stop-color="#00e3ff" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                        <clipPath id="clipPath52" clipPathUnits="userSpaceOnUse">
                                                            <path
                                                                d="M370.277 257.215l.942.535 48.929 27.801c4.665 2.652 7.774 5.867 9.325 9.269-1.547-3.402-4.657-6.621-9.325-9.273l-48.929-27.801-.942-.531m.012 1.465l-41.305 41.312 41.301 41.305 49.863-28.328c6.332-3.598 9.887-8.235 10.481-12.973v-.019c-.594-4.727-4.149-9.368-10.481-12.965l-49.859-28.332">
                                                            </path>
                                                        </clipPath>
                                                        <linearGradient id="linearGradient62" x1="0" x2="1" y1="0"
                                                            y2="0"
                                                            gradientTransform="rotate(180 219.172 149.993) scale(241.97)"
                                                            gradientUnits="userSpaceOnUse" spreadMethod="pad">
                                                            <stop offset="0" stop-color="#ffe000" stop-opacity="1">
                                                            </stop>
                                                            <stop offset="0.409" stop-color="#ffbd00"
                                                                stop-opacity="1"></stop>
                                                            <stop offset="0.775" stop-color="orange"
                                                                stop-opacity="1"></stop>
                                                            <stop offset="1" stop-color="#ff9c00" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                        <clipPath id="clipPath72" clipPathUnits="userSpaceOnUse">
                                                            <path
                                                                d="M213.93 171.387c-3.461 0-6.481 1.125-8.836 3.25l.004.004c2.355-2.125 5.379-3.254 8.84-3.254a18.869 18.869 0 01-.008 0m.004 1.465c-3.461-.004-6.481 1.125-8.836 3.25v.003l123.886 123.887 41.305-41.312-145.152-82.473c-4.016-2.277-7.821-3.355-11.203-3.355m-8.871 1.812c-.219.199-.434.41-.645.629l.645-.629">
                                                            </path>
                                                        </clipPath>
                                                        <linearGradient id="linearGradient78" x1="0" x2="1" y1="0"
                                                            y2="0"
                                                            gradientTransform="rotate(-135 231.512 66.39) scale(321.851)"
                                                            gradientUnits="userSpaceOnUse" spreadMethod="pad">
                                                            <stop offset="0" stop-color="#ff3a44" stop-opacity="1">
                                                            </stop>
                                                            <stop offset="1" stop-color="#c31162" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                        <clipPath id="clipPath88" clipPathUnits="userSpaceOnUse">
                                                            <path
                                                                d="M328.984 299.992L205.086 423.887c2.355 2.121 5.371 3.246 8.828 3.246 3.391 0 7.199-1.082 11.223-3.363l145.148-82.473-41.301-41.305m42.235 42.238l-146.082 83c-4.024 2.282-7.832 3.364-11.223 3.364h-.043.059c3.383 0 7.187-1.078 11.207-3.36l146.082-83.004M213.84 428.594">
                                                            </path>
                                                        </clipPath>
                                                        <linearGradient id="linearGradient100" x1="0" x2="1" y1="0"
                                                            y2="0"
                                                            gradientTransform="scale(143.72) rotate(-45 4.786 .28)"
                                                            gradientUnits="userSpaceOnUse" spreadMethod="pad">
                                                            <stop offset="0" stop-color="#32a071" stop-opacity="1">
                                                            </stop>
                                                            <stop offset="0.069" stop-color="#2da771"
                                                                stop-opacity="1"></stop>
                                                            <stop offset="0.476" stop-color="#15cf74"
                                                                stop-opacity="1"></stop>
                                                            <stop offset="0.801" stop-color="#06e775"
                                                                stop-opacity="1"></stop>
                                                            <stop offset="1" stop-color="#00f076" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                        <clipPath id="clipPath112" clipPathUnits="userSpaceOnUse">
                                                            <path d="M370.277 257.215l.942.535-.942-.535"></path>
                                                        </clipPath>
                                                        <linearGradient id="linearGradient122" x1="0" x2="1" y1="0"
                                                            y2="0"
                                                            gradientTransform="rotate(180 219.172 149.993) scale(241.97)"
                                                            gradientUnits="userSpaceOnUse" spreadMethod="pad">
                                                            <stop offset="0" stop-color="#ccb300" stop-opacity="1">
                                                            </stop>
                                                            <stop offset="0.409" stop-color="#cc9700"
                                                                stop-opacity="1"></stop>
                                                            <stop offset="0.775" stop-color="#cc8400"
                                                                stop-opacity="1"></stop>
                                                            <stop offset="1" stop-color="#cc7d00" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                        <clipPath id="clipPath132" clipPathUnits="userSpaceOnUse">
                                                            <path
                                                                d="M213.938 171.387c-3.461 0-6.485 1.129-8.84 3.254l-.004-.004a.286.286 0 01-.031.027l-.645.629c-.02.02-.039.043-.063.066l.743.743c2.355-2.125 5.375-3.254 8.836-3.25 3.382 0 7.187 1.078 11.203 3.355l145.152 82.473.93-.93-.942-.535-145.14-82.469c-3.66-2.074-7.141-3.156-10.285-3.336a18.869 18.869 0 00-.914-.023">
                                                            </path>
                                                        </clipPath>
                                                        <linearGradient id="linearGradient138" x1="0" x2="1" y1="0"
                                                            y2="0"
                                                            gradientTransform="rotate(-135 231.512 66.39) scale(321.851)"
                                                            gradientUnits="userSpaceOnUse" spreadMethod="pad">
                                                            <stop offset="0" stop-color="#cc2e36" stop-opacity="1">
                                                            </stop>
                                                            <stop offset="1" stop-color="#9c0e4e" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                        <clipPath id="clipPath150" clipPathUnits="userSpaceOnUse">
                                                            <path
                                                                d="M204.355 175.359c-2.91 3.079-4.628 7.856-4.628 14.051v1.457c0-6.191 1.718-10.972 4.628-14.051l.743-.711-.743-.746">
                                                            </path>
                                                        </clipPath>
                                                        <linearGradient id="linearGradient164" x1="0" x2="1" y1="0"
                                                            y2="0"
                                                            gradientTransform="scale(-237.34) rotate(45 1.43 -2.487)"
                                                            gradientUnits="userSpaceOnUse" spreadMethod="pad">
                                                            <stop offset="0" stop-color="#008de0" stop-opacity="1">
                                                            </stop>
                                                            <stop offset="0.007" stop-color="#008de0"
                                                                stop-opacity="1"></stop>
                                                            <stop offset="0.26" stop-color="#00a7e0"
                                                                stop-opacity="1"></stop>
                                                            <stop offset="0.512" stop-color="#00b8e0"
                                                                stop-opacity="1"></stop>
                                                            <stop offset="0.76" stop-color="#00c4e0"
                                                                stop-opacity="1"></stop>
                                                            <stop offset="1" stop-color="#00c7e0" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                        <clipPath id="clipPath174" clipPathUnits="userSpaceOnUse">
                                                            <path d="M204.355 175.359l.743.746v-.003l-.743-.743">
                                                            </path>
                                                        </clipPath>
                                                        <linearGradient id="linearGradient180" x1="0" x2="1" y1="0"
                                                            y2="0"
                                                            gradientTransform="rotate(-135 231.512 66.39) scale(321.851)"
                                                            gradientUnits="userSpaceOnUse" spreadMethod="pad">
                                                            <stop offset="0" stop-color="#e0333c" stop-opacity="1">
                                                            </stop>
                                                            <stop offset="1" stop-color="#ab0f56" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                        <clipPath id="clipPath192" clipPathUnits="userSpaceOnUse">
                                                            <path
                                                                d="M371.219 257.75l-.93.93 49.859 28.332c6.332 3.597 9.887 8.238 10.481 12.965 0-1.735-.387-3.469-1.156-5.157-1.551-3.402-4.66-6.617-9.325-9.269l-48.929-27.801">
                                                            </path>
                                                        </clipPath>
                                                        <linearGradient id="linearGradient202" x1="0" x2="1" y1="0"
                                                            y2="0"
                                                            gradientTransform="rotate(180 219.172 149.993) scale(241.97)"
                                                            gradientUnits="userSpaceOnUse" spreadMethod="pad">
                                                            <stop offset="0" stop-color="#e0c500" stop-opacity="1">
                                                            </stop>
                                                            <stop offset="0.409" stop-color="#e0a600"
                                                                stop-opacity="1"></stop>
                                                            <stop offset="0.775" stop-color="#e09100"
                                                                stop-opacity="1"></stop>
                                                            <stop offset="1" stop-color="#e08900" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                        <clipPath id="clipPath214" clipPathUnits="userSpaceOnUse">
                                                            <path
                                                                d="M430.629 299.996c-.594 4.738-4.149 9.375-10.481 12.973l-49.863 28.328.93.93h.004l48.929-27.801c6.981-3.969 10.477-9.199 10.481-14.43">
                                                            </path>
                                                        </clipPath>
                                                        <linearGradient id="linearGradient224" x1="0" x2="1" y1="0"
                                                            y2="0"
                                                            gradientTransform="rotate(180 219.172 149.993) scale(241.97)"
                                                            gradientUnits="userSpaceOnUse" spreadMethod="pad">
                                                            <stop offset="0" stop-color="#ffe840" stop-opacity="1">
                                                            </stop>
                                                            <stop offset="0.409" stop-color="#ffce40"
                                                                stop-opacity="1"></stop>
                                                            <stop offset="0.775" stop-color="#ffbc40"
                                                                stop-opacity="1"></stop>
                                                            <stop offset="1" stop-color="#ffb540" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                        <clipPath id="clipPath236" clipPathUnits="userSpaceOnUse">
                                                            <path
                                                                d="M199.727 409.105v1.528c0 .551.015 1.09.043 1.613v.024c0 .007 0 .015.003.023v.059c.301 5.332 1.957 9.492 4.582 12.269l.731-.734c-3.356-3.028-5.359-8.078-5.359-14.782m5.339 16.215l.028.028c-.008-.012-.02-.02-.028-.028">
                                                            </path>
                                                        </clipPath>
                                                        <linearGradient id="linearGradient250" x1="0" x2="1" y1="0"
                                                            y2="0"
                                                            gradientTransform="scale(-237.34) rotate(45 1.43 -2.487)"
                                                            gradientUnits="userSpaceOnUse" spreadMethod="pad">
                                                            <stop offset="0" stop-color="#40b8ff" stop-opacity="1">
                                                            </stop>
                                                            <stop offset="0.007" stop-color="#40b9ff"
                                                                stop-opacity="1"></stop>
                                                            <stop offset="0.26" stop-color="#40ceff"
                                                                stop-opacity="1"></stop>
                                                            <stop offset="0.512" stop-color="#40ddff"
                                                                stop-opacity="1"></stop>
                                                            <stop offset="0.76" stop-color="#40e7ff"
                                                                stop-opacity="1"></stop>
                                                            <stop offset="1" stop-color="#40eaff" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                        <clipPath id="clipPath262" clipPathUnits="userSpaceOnUse">
                                                            <path
                                                                d="M370.285 341.297L225.137 423.77c-4.024 2.281-7.832 3.363-11.223 3.363-3.457 0-6.473-1.125-8.828-3.246l-.731.734c.231.242.465.477.711.699l.028.024c2.336 2.105 5.32 3.23 8.746 3.25h.074c3.391 0 7.199-1.082 11.223-3.364l146.082-83-.004-.003-.93-.93">
                                                            </path>
                                                        </clipPath>
                                                        <linearGradient id="linearGradient274" x1="0" x2="1" y1="0"
                                                            y2="0"
                                                            gradientTransform="scale(143.72) rotate(-45 4.786 .28)"
                                                            gradientUnits="userSpaceOnUse" spreadMethod="pad">
                                                            <stop offset="0" stop-color="#65b895" stop-opacity="1">
                                                            </stop>
                                                            <stop offset="0.069" stop-color="#62bd95"
                                                                stop-opacity="1"></stop>
                                                            <stop offset="0.476" stop-color="#50db97"
                                                                stop-opacity="1"></stop>
                                                            <stop offset="0.801" stop-color="#44ed98"
                                                                stop-opacity="1"></stop>
                                                            <stop offset="1" stop-color="#40f498" stop-opacity="1">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <g transform="matrix(1.33333 0 0 -1.33333 -13.333 66.667)">
                                                        <g transform="scale(.1)">
                                                            <path fill="#000" fill-opacity="1" fill-rule="nonzero"
                                                                stroke="none"
                                                                d="M1400 100H150c-27.5 0-50 22.5-50 50v300c0 27.5 22.5 50 50 50h1250c27.5 0 50-22.5 50-50V150c0-27.5-22.5-50-50-50">
                                                            </path>
                                                            <path fill="#a6a6a6" fill-opacity="1"
                                                                fill-rule="nonzero" stroke="none"
                                                                d="M1400 500H150c-27.5 0-50-22.5-50-50V150c0-27.5 22.5-50 50-50h1250c27.5 0 50 22.5 50 50v300c0 27.5-22.5 50-50 50m0-8c23.16 0 42-18.844 42-42V150c0-23.16-18.84-42.004-42-42.004H150c-23.156 0-42 18.844-42 42.004v300c0 23.156 18.844 42 42 42h1250">
                                                            </path>
                                                            <path fill="#fff" fill-opacity="1" fill-rule="nonzero"
                                                                stroke="none"
                                                                d="M1169.36 200h18.66v125.012h-18.66zm168.07 79.98l-21.39-54.199h-.64l-22.2 54.199h-20.1l33.29-75.753-18.98-42.137h19.47l51.3 117.89zm-105.82-65.781c-6.12 0-14.64 3.055-14.64 10.617 0 9.649 10.62 13.348 19.78 13.348 8.21 0 12.06-1.769 17.05-4.184-1.45-11.578-11.42-19.781-22.19-19.781zm2.25 68.516c-13.51 0-27.5-5.953-33.29-19.141l16.56-6.914c3.54 6.914 10.13 9.168 17.05 9.168 9.65 0 19.46-5.793 19.62-16.086v-1.285c-3.38 1.93-10.61 4.824-19.46 4.824-17.85 0-36.03-9.808-36.03-28.144 0-16.727 14.64-27.504 31.04-27.504 12.55 0 19.46 5.629 23.81 12.222h.64v-9.648h18.01v47.93c0 22.191-16.56 34.578-37.95 34.578zm-115.32-17.953H1092v42.851h26.54c13.95 0 21.87-11.55 21.87-21.425 0-9.688-7.92-21.426-21.87-21.426zm-.48 60.25h-44.71V200H1092v47.363h26.06c20.68 0 41.01 14.973 41.01 38.825 0 23.851-20.33 38.824-41.01 38.824zM874.25 214.176c-12.891 0-23.684 10.793-23.684 25.617 0 14.98 10.793 25.937 23.684 25.937 12.727 0 22.715-10.957 22.715-25.937 0-14.824-9.988-25.617-22.715-25.617zm21.426 58.804h-.645c-4.187 4.993-12.246 9.504-22.394 9.504-21.266 0-40.758-18.687-40.758-42.691 0-23.844 19.492-42.371 40.758-42.371 10.148 0 18.207 4.512 22.394 9.664h.645v-6.121c0-16.274-8.699-24.973-22.715-24.973-11.438 0-18.527 8.219-21.43 15.145l-16.269-6.766c4.672-11.277 17.078-25.133 37.699-25.133 21.91 0 40.437 12.891 40.437 44.305v76.363h-17.722zM926.285 200h18.688v125.016h-18.688zm46.238 41.242c-.484 16.434 12.727 24.809 22.231 24.809 7.416 0 13.696-3.703 15.786-9.024zm57.997 14.176c-3.54 9.508-14.34 27.066-36.411 27.066-21.91 0-40.113-17.238-40.113-42.531 0-23.844 18.043-42.531 42.207-42.531 19.497 0 30.777 11.922 35.447 18.848l-14.5 9.668c-4.83-7.09-11.44-11.762-20.947-11.762-9.504 0-16.269 4.351-20.621 12.887l56.868 23.523zm-453.082 14.016v-18.043h43.175c-1.289-10.149-4.672-17.559-9.828-22.715-6.281-6.285-16.109-13.211-33.347-13.211-26.583 0-47.364 21.426-47.364 48.008 0 26.582 20.781 48.011 47.364 48.011 14.339 0 24.808-5.64 32.542-12.89l12.727 12.726c-10.793 10.313-25.133 18.207-45.269 18.207-36.411 0-67.02-29.644-67.02-66.054 0-36.41 30.609-66.051 67.02-66.051 19.656 0 34.476 6.441 46.074 18.527 11.922 11.922 15.629 28.676 15.629 42.207 0 4.192-.321 8.055-.969 11.278zm110.789-55.258c-12.891 0-24.008 10.633-24.008 25.777 0 15.305 11.117 25.777 24.008 25.777 12.886 0 24.003-10.472 24.003-25.777 0-15.144-11.117-25.777-24.003-25.777zm0 68.308c-23.524 0-42.696-17.882-42.696-42.531 0-24.488 19.172-42.531 42.696-42.531 23.519 0 42.691 18.043 42.691 42.531 0 24.649-19.172 42.531-42.691 42.531zm93.132-68.308c-12.886 0-24.004 10.633-24.004 25.777 0 15.305 11.118 25.777 24.004 25.777 12.887 0 24.004-10.472 24.004-25.777 0-15.144-11.117-25.777-24.004-25.777zm0 68.308c-23.523 0-42.691-17.882-42.691-42.531 0-24.488 19.168-42.531 42.691-42.531 23.52 0 42.692 18.043 42.692 42.531 0 24.649-19.172 42.531-42.692 42.531">
                                                            </path>
                                                            <g>
                                                                <g clip-path="url(#clipPath28)">
                                                                    <path fill="url(#linearGradient42)"
                                                                        fill-opacity="1" fill-rule="nonzero"
                                                                        stroke="none"
                                                                        d="M205.098 176.105l-.743.711c-2.91 3.079-4.628 7.86-4.628 14.051v-1.457V410.566v-1.461c0 6.704 2.003 11.754 5.359 14.782l123.898-123.895-123.886-123.887M199.77 412.27c0 .007 0 .015.003.023-.003-.008-.003-.016-.003-.023m.003.07v0">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g clip-path="url(#clipPath52)">
                                                                    <path fill="url(#linearGradient62)"
                                                                        fill-opacity="1" fill-rule="nonzero"
                                                                        stroke="none"
                                                                        d="M370.277 257.215l.942.535 48.929 27.801c4.665 2.652 7.774 5.867 9.325 9.269-1.547-3.402-4.657-6.621-9.325-9.273l-48.929-27.801-.942-.531m.012 1.465l-41.305 41.312 41.301 41.305 49.863-28.328c6.332-3.598 9.887-8.235 10.481-12.973v-.019c-.594-4.727-4.149-9.368-10.481-12.965l-49.859-28.332">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g clip-path="url(#clipPath72)">
                                                                    <path fill="url(#linearGradient78)"
                                                                        fill-opacity="1" fill-rule="nonzero"
                                                                        stroke="none"
                                                                        d="M213.93 171.387c-3.461 0-6.481 1.125-8.836 3.25l.004.004c2.355-2.125 5.379-3.254 8.84-3.254a18.869 18.869 0 01-.008 0m.004 1.465c-3.461-.004-6.481 1.125-8.836 3.25v.003l123.886 123.887 41.305-41.312-145.152-82.473c-4.016-2.277-7.821-3.355-11.203-3.355m-8.871 1.812c-.219.199-.434.41-.645.629l.645-.629">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g clip-path="url(#clipPath88)">
                                                                    <path fill="url(#linearGradient100)"
                                                                        fill-opacity="1" fill-rule="nonzero"
                                                                        stroke="none"
                                                                        d="M328.984 299.992L205.086 423.887c2.355 2.121 5.371 3.246 8.828 3.246 3.391 0 7.199-1.082 11.223-3.363l145.148-82.473-41.301-41.305m42.235 42.238l-146.082 83c-4.024 2.282-7.832 3.364-11.223 3.364h-.043.059c3.383 0 7.187-1.078 11.207-3.36l146.082-83.004M213.84 428.594">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                            <path fill="#000" fill-opacity="1" fill-rule="nonzero"
                                                                stroke="none"
                                                                d="M214.852 171.41c3.144.18 6.625 1.262 10.285 3.336l145.14 82.469-145.14-82.469c-3.657-2.078-7.141-3.156-10.285-3.336m-9.758 3.227l-.031.027a.286.286 0 00.031-.027m-.676.656l-.063.062v.004c.024-.023.043-.046.063-.066">
                                                            </path>
                                                            <g>
                                                                <g clip-path="url(#clipPath112)">
                                                                    <path fill="url(#linearGradient122)"
                                                                        fill-opacity="1" fill-rule="nonzero"
                                                                        stroke="none"
                                                                        d="M370.277 257.215l.942.535-.942-.535">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g clip-path="url(#clipPath132)">
                                                                    <path fill="url(#linearGradient138)"
                                                                        fill-opacity="1" fill-rule="nonzero"
                                                                        stroke="none"
                                                                        d="M213.938 171.387c-3.461 0-6.485 1.129-8.84 3.254l-.004-.004a.286.286 0 01-.031.027l-.645.629c-.02.02-.039.043-.063.066l.743.743c2.355-2.125 5.375-3.254 8.836-3.25 3.382 0 7.187 1.078 11.203 3.355l145.152 82.473.93-.93-.942-.535-145.14-82.469c-3.66-2.074-7.141-3.156-10.285-3.336a18.869 18.869 0 00-.914-.023">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                            <path fill="#000" fill-opacity="1" fill-rule="nonzero"
                                                                stroke="none"
                                                                d="M204.355 175.355c-2.91 3.079-4.628 7.86-4.628 14.051v.004c0-6.195 1.718-10.972 4.628-14.051v-.004">
                                                            </path>
                                                            <g>
                                                                <g clip-path="url(#clipPath150)">
                                                                    <path fill="url(#linearGradient164)"
                                                                        fill-opacity="1" fill-rule="nonzero"
                                                                        stroke="none"
                                                                        d="M204.355 175.359c-2.91 3.079-4.628 7.856-4.628 14.051v1.457c0-6.191 1.718-10.972 4.628-14.051l.743-.711-.743-.746">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g clip-path="url(#clipPath174)">
                                                                    <path fill="url(#linearGradient180)"
                                                                        fill-opacity="1" fill-rule="nonzero"
                                                                        stroke="none"
                                                                        d="M204.355 175.359l.743.746v-.003l-.743-.743">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                            <path fill="#000" fill-opacity="1" fill-rule="nonzero"
                                                                stroke="none"
                                                                d="M429.473 294.82c.769 1.688 1.156 3.422 1.156 5.157v.007c0-1.738-.387-3.472-1.156-5.164">
                                                            </path>
                                                            <g>
                                                                <g clip-path="url(#clipPath192)">
                                                                    <path fill="url(#linearGradient202)"
                                                                        fill-opacity="1" fill-rule="nonzero"
                                                                        stroke="none"
                                                                        d="M371.219 257.75l-.93.93 49.859 28.332c6.332 3.597 9.887 8.238 10.481 12.965 0-1.735-.387-3.469-1.156-5.157-1.551-3.402-4.66-6.617-9.325-9.269l-48.929-27.801">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                            <path fill="#404040" fill-opacity="1"
                                                                fill-rule="nonzero" stroke="none"
                                                                d="M430.629 299.992v.004c-.004 5.231-3.5 10.461-10.481 14.43l-48.929 27.801h-.004l.004.003 48.929-27.8c6.989-3.969 10.489-9.207 10.481-14.438">
                                                            </path>
                                                            <g>
                                                                <g clip-path="url(#clipPath214)">
                                                                    <path fill="url(#linearGradient224)"
                                                                        fill-opacity="1" fill-rule="nonzero"
                                                                        stroke="none"
                                                                        d="M430.629 299.996c-.594 4.738-4.149 9.375-10.481 12.973l-49.863 28.328.93.93h.004l48.929-27.801c6.981-3.969 10.477-9.199 10.481-14.43">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                            <path fill="#404040" fill-opacity="1"
                                                                fill-rule="nonzero" stroke="none"
                                                                d="M199.727 410.621v0m.043 1.625v0m.003.047v0m0 .059c.579 10.273 6.165 16.207 14.067 16.242-3.426-.02-6.41-1.145-8.746-3.25v.004l-.028-.028c-.246-.222-.48-.457-.711-.699-2.625-2.777-4.281-6.937-4.582-12.269">
                                                            </path>
                                                            <g>
                                                                <g clip-path="url(#clipPath236)">
                                                                    <path fill="url(#linearGradient250)"
                                                                        fill-opacity="1" fill-rule="nonzero"
                                                                        stroke="none"
                                                                        d="M199.727 409.105v1.528c0 .551.015 1.09.043 1.613v.024c0 .007 0 .015.003.023v.059c.301 5.332 1.957 9.492 4.582 12.269l.731-.734c-3.356-3.028-5.359-8.078-5.359-14.782m5.339 16.215l.028.028c-.008-.012-.02-.02-.028-.028">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                            <path fill="#404040" fill-opacity="1"
                                                                fill-rule="nonzero" stroke="none"
                                                                d="M213.84 428.594h.031-.031"></path>
                                                            <g>
                                                                <g clip-path="url(#clipPath262)">
                                                                    <path fill="url(#linearGradient274)"
                                                                        fill-opacity="1" fill-rule="nonzero"
                                                                        stroke="none"
                                                                        d="M370.285 341.297L225.137 423.77c-4.024 2.281-7.832 3.363-11.223 3.363-3.457 0-6.473-1.125-8.828-3.246l-.731.734c.231.242.465.477.711.699l.028.024c2.336 2.105 5.32 3.23 8.746 3.25h.074c3.391 0 7.199-1.082 11.223-3.364l146.082-83-.004-.003-.93-.93">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                            <path fill="#fff" fill-opacity="1" fill-rule="nonzero"
                                                                stroke="none"
                                                                d="M520.508 377.371h10.644c6.922 0 12.411 1.984 16.465 5.953 4.055 3.965 6.074 9.528 6.074 16.676 0 7.094-2.019 12.637-6.074 16.637-4.054 3.988-9.543 5.992-16.465 5.992h-10.644zM512.805 370v60h18.347c9.219 0 16.59-2.777 22.129-8.34 5.528-5.555 8.289-12.773 8.289-21.66 0-8.883-2.761-16.105-8.289-21.66-5.539-5.563-12.91-8.34-22.129-8.34h-18.347">
                                                            </path>
                                                            <path fill="#fff" fill-opacity="1" fill-rule="nonzero"
                                                                stroke="none"
                                                                d="M520.508 377.371v-1h10.644c7.106-.008 12.907 2.059 17.164 6.238 4.282 4.184 6.383 10.063 6.375 17.391.008 7.273-2.093 13.137-6.371 17.348-4.261 4.203-10.058 6.289-17.168 6.281h-11.644v-47.258h1v1h1v44.258h9.644c6.739-.012 11.918-1.93 15.766-5.707l-.004.004c3.828-3.789 5.77-9.012 5.777-15.926-.007-6.969-1.949-12.211-5.773-15.961-3.848-3.758-9.023-5.656-15.766-5.668h-10.644v-1h1zM512.805 370h1v59h17.347c9.024-.008 16.078-2.691 21.422-8.047 5.328-5.367 7.989-12.269 7.996-20.953-.007-8.68-2.668-15.586-8-20.953-5.34-5.356-12.394-8.039-21.418-8.047h-18.347v-1h1-1v-1h18.347c9.414-.008 17.106 2.863 22.836 8.633 5.727 5.746 8.594 13.285 8.582 22.367.012 9.09-2.855 16.621-8.582 22.363-5.73 5.774-13.422 8.645-22.836 8.637h-19.347v-62h1v1">
                                                            </path>
                                                            <path fill="#fff" fill-opacity="1" fill-rule="nonzero"
                                                                stroke="none" d="M572.395 370v60h7.703v-60h-7.703">
                                                            </path>
                                                            <path fill="#fff" fill-opacity="1" fill-rule="nonzero"
                                                                stroke="none"
                                                                d="M572.395 370h1v59h5.703v-58h-6.703v-1h1-1v-1h8.703v62h-9.703v-62h1v1">
                                                            </path>
                                                            <path fill="#fff" fill-opacity="1" fill-rule="nonzero"
                                                                stroke="none"
                                                                d="M610.762 368.66c-4.356 0-8.614 1.422-12.774 4.27-4.172 2.851-6.894 6.843-8.175 11.988l7.042 2.848c.84-3.297 2.547-6.078 5.149-8.336 2.605-2.262 5.516-3.395 8.758-3.395 3.347 0 6.218.879 8.593 2.637s3.555 4.148 3.555 7.168c0 3.348-1.18 5.933-3.555 7.75-2.375 1.816-6.132 3.504-11.269 5.07-5.313 1.672-9.336 3.84-12.07 6.496-2.735 2.653-4.114 6.043-4.114 10.18 0 4.305 1.711 8.043 5.118 11.227 3.41 3.183 7.851 4.781 13.324 4.781 5.086 0 9.219-1.278 12.398-3.817 3.188-2.543 5.254-5.32 6.203-8.339l-7.031-2.926c-.508 1.89-1.746 3.656-3.73 5.277-1.985 1.613-4.539 2.426-7.676 2.426-2.957 0-5.488-.82-7.578-2.473-2.102-1.648-3.145-3.699-3.145-6.156 0-2.234.969-4.121 2.891-5.656 1.933-1.535 4.765-2.922 8.508-4.149 2.957-.953 5.425-1.871 7.421-2.765 1.981-.891 3.993-2.082 6.024-3.563 2.043-1.476 3.574-3.324 4.609-5.531 1.035-2.207 1.555-4.762 1.555-7.664 0-2.906-.598-5.504-1.801-7.793-1.199-2.297-2.801-4.11-4.781-5.449a23.74 23.74 0 00-6.406-3.059 24.042 24.042 0 00-7.043-1.047">
                                                            </path>
                                                            <path fill="#fff" fill-opacity="1" fill-rule="nonzero"
                                                                stroke="none"
                                                                d="M610.762 368.66v1c-4.133.004-8.18 1.34-12.207 4.094-3.977 2.726-6.535 6.469-7.77 11.402l-.972-.238.375-.93 7.042 2.848-.375.93-.968-.25c.883-3.481 2.715-6.461 5.457-8.84l.004-.004c2.754-2.395 5.933-3.645 9.414-3.637 3.519-.004 6.633.938 9.187 2.832 2.61 1.91 3.981 4.696 3.961 7.973.02 3.578-1.32 6.551-3.945 8.543-2.543 1.937-6.387 3.644-11.586 5.234h.008c-5.219 1.637-9.102 3.75-11.676 6.258-2.535 2.473-3.797 5.547-3.809 9.461.012 4.031 1.563 7.453 4.801 10.496 3.215 2.992 7.36 4.504 12.641 4.512 4.926-.004 8.801-1.227 11.777-3.598 3.074-2.457 4.996-5.074 5.871-7.855l.953.297-.382.925-7.036-2.929.387-.922.965.258c-.574 2.144-1.965 4.082-4.063 5.793-2.187 1.785-5.007 2.656-8.308 2.652-3.141.004-5.926-.887-8.199-2.688l.004.004c-2.297-1.785-3.543-4.195-3.528-6.945-.015-2.531 1.153-4.77 3.266-6.438l.004-.003c2.078-1.645 5.004-3.063 8.816-4.313l.004-.004c2.934-.941 5.375-1.851 7.316-2.726h.004c1.907-.856 3.86-2.012 5.844-3.457h.004c1.91-1.387 3.324-3.09 4.289-5.149.965-2.051 1.461-4.453 1.461-7.238-.004-2.774-.566-5.195-1.684-7.332-1.136-2.16-2.621-3.836-4.461-5.082a22.635 22.635 0 00-6.136-2.93 22.971 22.971 0 00-6.75-1.004v-2c2.5 0 4.945.363 7.332 1.09a24.778 24.778 0 016.676 3.184v.004c2.121 1.433 3.839 3.382 5.109 5.812 1.285 2.445 1.914 5.215 1.914 8.258 0 3.019-.543 5.726-1.648 8.09-1.106 2.355-2.758 4.347-4.93 5.918l.004-.004c-2.078 1.515-4.149 2.742-6.207 3.664l-.008.004.012-.004c-2.043.922-4.543 1.847-7.528 2.808h.004c-3.672 1.2-6.406 2.555-8.195 3.977h.004c-1.735 1.406-2.5 2.937-2.516 4.875.016 2.164.86 3.855 2.762 5.371l.004.004c1.906 1.5 4.179 2.25 6.957 2.254 2.969-.004 5.265-.754 7.043-2.203l.012-.008-.012.012c1.867-1.532 2.957-3.121 3.398-4.766l.293-1.102 8.086 3.368.844.351-.274.871c-1.019 3.254-3.238 6.192-6.531 8.825-3.39 2.707-7.777 4.035-13.023 4.031-5.66.008-10.399-1.676-14.004-5.051-3.578-3.324-5.445-7.383-5.438-11.957-.007-4.356 1.489-8.07 4.418-10.898 2.895-2.805 7.059-5.028 12.465-6.731h.008c5.074-1.547 8.75-3.219 10.957-4.91 2.117-1.645 3.141-3.836 3.16-6.957-.019-2.758-1.012-4.758-3.148-6.363-2.192-1.622-4.824-2.438-8-2.442-3.004.008-5.645 1.024-8.106 3.149-2.453 2.14-4.035 4.714-4.832 7.828l-.281 1.109-8.102-3.277-.808-.324.211-.844c1.324-5.348 4.211-9.594 8.582-12.571 4.289-2.941 8.758-4.445 13.336-4.445v1">
                                                            </path>
                                                            <path fill="#fff" fill-opacity="1" fill-rule="nonzero"
                                                                stroke="none"
                                                                d="M649.563 401.68h12.91c3.242 0 5.84 1.086 7.793 3.261 1.953 2.184 2.925 4.579 2.925 7.207 0 2.625-.972 5.032-2.925 7.207-1.953 2.184-4.551 3.274-7.793 3.274h-12.91zm0-31.68h-7.708v60h20.45c5.078 0 9.48-1.687 13.191-5.066 3.723-3.379 5.578-7.645 5.578-12.786 0-5.136-1.855-9.394-5.578-12.773-3.711-3.383-8.113-5.074-13.191-5.074h-12.742V370">
                                                            </path>
                                                            <path fill="#fff" fill-opacity="1" fill-rule="nonzero"
                                                                stroke="none"
                                                                d="M649.563 401.68v-1h12.91c3.457-.012 6.402 1.199 8.535 3.593 2.09 2.325 3.191 4.997 3.183 7.875.008 2.879-1.093 5.555-3.183 7.875-2.133 2.403-5.074 3.618-8.535 3.606h-13.914V400.68h1.004v1h1v19.949h11.91c3.019-.016 5.273-.977 7.047-2.941 1.816-2.036 2.668-4.165 2.671-6.54-.003-2.375-.855-4.496-2.671-6.539-1.774-1.961-4.024-2.918-7.047-2.929h-12.91v-1h1zm0-31.68v1h-6.708v58h19.45c4.855-.008 8.972-1.59 12.519-4.809 3.524-3.214 5.239-7.14 5.25-12.043-.011-4.894-1.726-8.816-5.25-12.035-3.547-3.222-7.664-4.804-12.519-4.812h-13.746V370h1.004v1-1h1v23.301h11.742c5.3-.008 9.992 1.793 13.867 5.336 3.918 3.539 5.914 8.133 5.902 13.511.012 5.383-1.984 9.981-5.902 13.524-3.875 3.539-8.567 5.336-13.867 5.328h-21.45v-62h9.708v1h-1">
                                                            </path>
                                                            <path fill="#fff" fill-opacity="1" fill-rule="nonzero"
                                                                stroke="none"
                                                                d="M701.555 382.777c4.441-4.496 9.871-6.742 16.297-6.742 6.425 0 11.867 2.246 16.296 6.742 4.446 4.496 6.672 10.243 6.672 17.223 0 6.98-2.226 12.727-6.672 17.223-4.429 4.496-9.871 6.742-16.296 6.742-6.426 0-11.856-2.246-16.297-6.742-4.438-4.496-6.66-10.243-6.66-17.223 0-6.98 2.222-12.727 6.66-17.223zm38.3-5.023c-5.902-6.066-13.234-9.094-22.003-9.094-8.77 0-16.106 3.028-21.993 9.094-5.898 6.059-8.839 13.476-8.839 22.246 0 8.77 2.941 16.188 8.839 22.246 5.887 6.067 13.223 9.098 21.993 9.098 8.718 0 16.035-3.047 21.961-9.137 5.917-6.09 8.878-13.492 8.878-22.207 0-8.77-2.949-16.187-8.836-22.246">
                                                            </path>
                                                            <path fill="#fff" fill-opacity="1" fill-rule="nonzero"
                                                                stroke="none"
                                                                d="M701.555 382.777l-.715-.703c4.609-4.676 10.351-7.051 17.012-7.039 6.66-.012 12.414 2.363 17.011 7.039 4.633 4.68 6.965 10.735 6.957 17.926.008 7.191-2.324 13.246-6.957 17.926l-.015.012.015-.012c-4.597 4.676-10.351 7.051-17.011 7.039-6.661.012-12.403-2.363-17.012-7.039l-.031-.035.031.035c-4.625-4.68-6.957-10.735-6.945-17.926-.012-7.191 2.32-13.246 6.945-17.926l.715.703.711.703c-4.243 4.317-6.364 9.747-6.371 16.52.007 6.773 2.128 12.203 6.371 16.52 4.277 4.316 9.394 6.433 15.586 6.445 6.191-.012 11.316-2.129 15.586-6.445 4.253-4.317 6.375-9.747 6.382-16.52-.007-6.773-2.129-12.203-6.382-16.52-4.27-4.316-9.395-6.433-15.586-6.445-6.192.012-11.309 2.129-15.586 6.445zm38.3-5.023l-.718.695c-5.731-5.875-12.746-8.777-21.285-8.789-8.539.012-15.555 2.914-21.274 8.789h-.004c-5.719 5.895-8.543 13.004-8.554 21.551.011 8.547 2.835 15.656 8.554 21.551h.004c5.719 5.875 12.735 8.781 21.274 8.793 8.488-.012 15.484-2.93 21.246-8.836 5.742-5.922 8.586-13.02 8.593-21.508-.007-8.547-2.843-15.656-8.554-21.551l.718-.695.715-.695c6.067 6.226 9.129 13.949 9.121 22.941.008 8.941-3.066 16.648-9.16 22.902-6.093 6.278-13.726 9.453-22.679 9.442-9 .011-16.653-3.149-22.711-9.403l.004.004c-6.079-6.23-9.133-13.953-9.125-22.945-.008-8.992 3.046-16.715 9.125-22.945l.023-.028-.027.032c6.058-6.254 13.711-9.407 22.711-9.399 9-.008 16.652 3.145 22.718 9.399l-.715.695">
                                                            </path>
                                                            <path fill="#fff" fill-opacity="1" fill-rule="nonzero"
                                                                stroke="none"
                                                                d="M759.512 370v60h9.383l29.164-46.676h.332l-.332 11.563V430h7.711v-60h-8.043l-30.508 48.938h-.332l.332-11.567V370h-7.707">
                                                            </path>
                                                            <path fill="#fff" fill-opacity="1" fill-rule="nonzero"
                                                                stroke="none"
                                                                d="M759.512 370h1v59h7.832l29.16-46.676h1.914l-.363 12.578.004 34.098h5.711v-58h-6.493l-30.504 48.938H765.855l.364-12.579V371h-6.707v-1h1-1v-1h8.707v38.387l-.336 11.578-.996-.027v-1h.332v1l-.852-.532L797.172 369h9.598v62h-9.711v-36.125l.332-11.578 1 .027v1h-.332v-1l.847.531L769.449 431h-10.937v-62h1v1">
                                                            </path>
                                                            <path fill="#fff" fill-opacity="1" fill-rule="nonzero"
                                                                stroke="none" d="M819.512 370v60h7.707v-60h-7.707">
                                                            </path>
                                                            <path fill="#fff" fill-opacity="1" fill-rule="nonzero"
                                                                stroke="none"
                                                                d="M819.512 370h1v59h5.707v-58h-6.707v-1h1-1v-1h8.707v62h-9.707v-62h1v1">
                                                            </path>
                                                            <path fill="#fff" fill-opacity="1" fill-rule="nonzero"
                                                                stroke="none"
                                                                d="M848.66 377.371h15.512c2.957 0 5.359 1.035 7.207 3.109 1.844 2.059 2.762 4.325 2.762 6.786 0 2.457-.95 4.703-2.852 6.742-1.894 2.039-4.387 3.062-7.461 3.062H848.66zm0 26.906h13.996c2.91 0 5.242.957 7 2.891 1.762 1.926 2.641 4.031 2.641 6.324 0 2.289-.852 4.391-2.563 6.281-1.699 1.903-3.941 2.856-6.738 2.856H848.66zM840.957 370v60h21.699c4.699 0 8.762-1.555 12.199-4.648 3.438-3.106 5.157-7 5.157-11.692 0-2.847-.742-5.363-2.231-7.543-1.472-2.179-3.445-3.828-5.906-4.945v-.332c2.961-1.004 5.391-2.738 7.297-5.195 1.891-2.461 2.848-5.313 2.848-8.551 0-4.914-1.805-8.992-5.411-12.231-3.601-3.242-7.859-4.863-12.781-4.863h-22.871">
                                                            </path>
                                                            <path fill="#fff" fill-opacity="1" fill-rule="nonzero"
                                                                stroke="none"
                                                                d="M848.66 377.371v-1h15.512c3.187-.012 5.933 1.16 7.953 3.442h-.004c1.981 2.199 3.027 4.738 3.02 7.453.007 2.718-1.078 5.246-3.121 7.425-2.075 2.247-4.899 3.391-8.192 3.379H847.66v-21.699h1v1h1v18.699h14.168c2.86-.011 5.016-.918 6.731-2.742 1.765-1.906 2.574-3.871 2.582-6.062-.008-2.207-.797-4.2-2.508-6.121h-.004c-1.672-1.86-3.731-2.758-6.457-2.774H848.66v-1h1zm0 26.906v-1h13.996c3.125-.011 5.801 1.067 7.742 3.219l-.003-.004c1.894 2.063 2.906 4.446 2.902 7 .004 2.539-.969 4.914-2.817 6.953v-.004c-1.875 2.118-4.464 3.2-7.484 3.188H847.66v-20.352h1v1h1v17.352h13.336c2.57-.016 4.473-.836 5.996-2.52v-.004c1.571-1.75 2.297-3.578 2.305-5.613-.008-2.027-.754-3.863-2.375-5.648l-.004-.004c-1.574-1.715-3.566-2.551-6.262-2.563H848.66v-1h1zM840.957 370h1v59h20.699c4.477-.008 8.254-1.453 11.528-4.391 3.242-2.945 4.812-6.504 4.828-10.949-.004-2.676-.688-4.969-2.055-6.98h-.004c-1.375-2.032-3.183-3.547-5.492-4.598l-.586-.266V400.125l.68-.23c2.785-.954 5.031-2.555 6.824-4.864v.004c1.762-2.297 2.637-4.898 2.641-7.941-.012-4.672-1.668-8.41-5.079-11.489-3.437-3.082-7.41-4.597-12.113-4.605h-22.871v-1h1-1v-1h22.871c5.141-.008 9.684 1.719 13.453 5.121 3.797 3.395 5.754 7.813 5.739 12.973.007 3.433-1.032 6.535-3.059 9.16v.004a16.257 16.257 0 01-7.766 5.527l-.32-.945h1v.332h-1l.414-.91c2.613 1.183 4.75 2.961 6.324 5.297l-.004-.004c1.602 2.347 2.403 5.086 2.403 8.105.011 4.934-1.856 9.168-5.489 12.434l-.023.019.023-.019c-3.601 3.254-7.949 4.914-12.867 4.906h-22.699v-62h1v1">
                                                            </path>
                                                            <path fill="#fff" fill-opacity="1" fill-rule="nonzero"
                                                                stroke="none"
                                                                d="M892.41 370v60h7.707v-52.629h25.977V370H892.41">
                                                            </path>
                                                            <path fill="#fff" fill-opacity="1" fill-rule="nonzero"
                                                                stroke="none"
                                                                d="M892.41 370h1v59h5.707v-52.629h25.977V371H892.41v-1h1-1v-1h34.684v9.371h-25.977V431h-9.707v-62h1v1">
                                                            </path>
                                                            <path fill="#fff" fill-opacity="1" fill-rule="nonzero"
                                                                stroke="none"
                                                                d="M970.852 422.629h-27.329v-19.024h24.641v-7.21h-24.641v-19.024h27.329V370H935.82v60h35.032v-7.371">
                                                            </path>
                                                            <path fill="#fff" fill-opacity="1" fill-rule="nonzero"
                                                                stroke="none"
                                                                d="M970.852 422.629v1h-28.329v-21.024h24.641v-5.207l-24.641-.003v-21.024h27.329V371H936.82v58h33.032v-6.371h1v1-1h1V431H934.82v-62h37.032v9.371h-27.329v17.024h24.641v9.21h-24.641v17.024h27.329v1h-1">
                                                            </path>
                                                            <path fill="#fff" fill-opacity="1" fill-rule="nonzero"
                                                                stroke="none"
                                                                d="M1038.06 422.629h-27.33v-19.024h24.64v-7.21h-24.64v-19.024h27.33V370h-35.03v60h35.03v-7.371">
                                                            </path>
                                                            <path fill="#fff" fill-opacity="1" fill-rule="nonzero"
                                                                stroke="none"
                                                                d="M1038.06 422.629v1h-28.33v-21.024h24.64v-5.207l-24.64-.003v-21.024h27.33V371h-33.03v58h33.03v-6.371h1v1-1h1V431h-37.03v-62h37.03v9.371h-27.33v17.024h24.64v9.21h-24.64v17.024h27.33v1h-1">
                                                            </path>
                                                            <path fill="#fff" fill-opacity="1" fill-rule="nonzero"
                                                                stroke="none"
                                                                d="M1050.12 370v60h9.38l29.16-46.676h.33l-.33 11.563V430h7.72v-60h-8.05l-30.51 48.938h-.33l.33-11.567V370h-7.7">
                                                            </path>
                                                            <path fill="#fff" fill-opacity="1" fill-rule="nonzero"
                                                                stroke="none"
                                                                d="M1050.12 370h1v59h7.83l29.16-46.676H1090.02l-.36 12.578V429h5.72v-58h-6.5l-30.5 48.938h-1.92l.36-12.579V371h-6.7v-1h1-1v-1h8.7v38.387l-.33 11.578-1-.027v-1h.33v1l-.85-.532L1087.78 369h9.6v62h-9.72v-36.125l.33-11.578 1 .027v1h-.33v-1l.85.531L1060.06 431h-10.94v-62h1v1">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </svg></i></span></a></li>
                                <li class="sc-hcFBEE jcVKnS"><a id="footer__top__lnk-ios-download"
                                        data-testid="footer__top__lnk-ios-download--link" target="_blank"
                                        class="sc-bVVIoq fJcZel sc-dPZUQH hymxAK sc-egkQYF dCORDf ios"
                                        href="https://apps.apple.com/co/app/id1497908631"
                                        rel="noopener noreferrer nofollow"
                                        aria-labelledby="footer__top__lnk-ios-download-label"><span><span
                                                id="footer__top__lnk-ios-download-label"
                                                class="sc-hknOHE goetRk">Descárgala desde AppStore</span><i
                                                aria-hidden="true" class="sc-fWKdJz fdenJD"><svg
                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    viewBox="0 0 119.664 40">
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <path fill="#a6a6a6"
                                                                    d="M110.135 0H9.535c-.367 0-.73 0-1.095.002-.306.002-.61.008-.919.013A13.215 13.215 0 005.517.19a6.665 6.665 0 00-1.9.627 6.438 6.438 0 00-1.62 1.18A6.258 6.258 0 00.82 3.617a6.601 6.601 0 00-.625 1.903 12.993 12.993 0 00-.179 2.002c-.01.307-.01.615-.015.921V31.56c.005.31.006.61.015.921a12.992 12.992 0 00.18 2.002 6.588 6.588 0 00.624 1.905A6.208 6.208 0 001.998 38a6.274 6.274 0 001.618 1.179 6.7 6.7 0 001.901.63 13.455 13.455 0 002.004.177c.31.007.613.011.919.011.366.002.728.002 1.095.002h100.6c.36 0 .724 0 1.084-.002.304 0 .617-.004.922-.01a13.279 13.279 0 002-.178 6.804 6.804 0 001.908-.63A6.277 6.277 0 00117.666 38a6.395 6.395 0 001.182-1.614 6.604 6.604 0 00.619-1.905 13.506 13.506 0 00.185-2.002c.004-.31.004-.61.004-.921.008-.364.008-.725.008-1.094V9.536c0-.366 0-.73-.008-1.092 0-.306 0-.614-.004-.92a13.507 13.507 0 00-.185-2.003 6.618 6.618 0 00-.62-1.903 6.466 6.466 0 00-2.798-2.8 6.768 6.768 0 00-1.908-.627 13.044 13.044 0 00-2-.176c-.305-.005-.618-.011-.922-.013-.36-.002-.725-.002-1.084-.002z">
                                                                </path>
                                                                <path
                                                                    d="M8.445 39.125c-.305 0-.602-.004-.904-.01a12.687 12.687 0 01-1.87-.164 5.884 5.884 0 01-1.656-.548 5.406 5.406 0 01-1.397-1.016 5.32 5.32 0 01-1.02-1.397 5.722 5.722 0 01-.544-1.657 12.414 12.414 0 01-.166-1.875c-.007-.21-.015-.913-.015-.913v-23.1s.009-.692.015-.895a12.37 12.37 0 01.165-1.872 5.755 5.755 0 01.544-1.662 5.373 5.373 0 011.015-1.398 5.565 5.565 0 011.402-1.023 5.823 5.823 0 011.653-.544A12.586 12.586 0 017.543.887l.902-.012h102.769l.913.013a12.385 12.385 0 011.858.162 5.938 5.938 0 011.671.548 5.594 5.594 0 012.415 2.42 5.763 5.763 0 01.535 1.649 12.995 12.995 0 01.174 1.887c.003.283.003.588.003.89.008.375.008.732.008 1.092v20.929c0 .363 0 .718-.008 1.075 0 .325 0 .623-.004.93a12.731 12.731 0 01-.17 1.853 5.739 5.739 0 01-.54 1.67 5.48 5.48 0 01-1.016 1.386 5.413 5.413 0 01-1.4 1.022 5.862 5.862 0 01-1.668.55 12.542 12.542 0 01-1.869.163c-.293.007-.6.011-.897.011l-1.084.002z">
                                                                </path>
                                                            </g>
                                                            <g data-name="<Group>">
                                                                <g data-name="<Group>">
                                                                    <g fill="#fff" data-name="<Group>">
                                                                        <path
                                                                            d="M24.769 20.3a4.949 4.949 0 012.356-4.151 5.066 5.066 0 00-3.99-2.158c-1.68-.176-3.308 1.005-4.164 1.005-.872 0-2.19-.988-3.608-.958a5.315 5.315 0 00-4.473 2.728c-1.934 3.348-.491 8.269 1.361 10.976.927 1.325 2.01 2.805 3.428 2.753 1.387-.058 1.905-.885 3.58-.885 1.658 0 2.144.885 3.59.852 1.489-.025 2.426-1.332 3.32-2.67a10.962 10.962 0 001.52-3.092 4.782 4.782 0 01-2.92-4.4z"
                                                                            data-name="<Path>"></path>
                                                                        <path
                                                                            d="M22.037 12.21a4.872 4.872 0 001.115-3.49 4.957 4.957 0 00-3.208 1.66A4.636 4.636 0 0018.8 13.74a4.1 4.1 0 003.237-1.53z"
                                                                            data-name="<Path>"></path>
                                                                    </g>
                                                                </g>
                                                                <g fill="#fff">
                                                                    <path
                                                                        d="M42.302 27.14H37.57l-1.137 3.356h-2.005l4.484-12.418h2.083l4.483 12.418h-2.039zm-4.243-1.55h3.752l-1.85-5.446h-.051z">
                                                                    </path>
                                                                    <path
                                                                        d="M55.16 25.97c0 2.813-1.506 4.62-3.779 4.62a3.07 3.07 0 01-2.848-1.583h-.043v4.484H46.63V21.442h1.8v1.506h.033a3.212 3.212 0 012.883-1.6c2.298 0 3.813 1.816 3.813 4.622zm-1.91 0c0-1.833-.948-3.038-2.393-3.038-1.42 0-2.375 1.23-2.375 3.038 0 1.824.955 3.046 2.375 3.046 1.445 0 2.393-1.197 2.393-3.046z">
                                                                    </path>
                                                                    <path
                                                                        d="M65.125 25.97c0 2.813-1.506 4.62-3.779 4.62a3.07 3.07 0 01-2.848-1.583h-.043v4.484h-1.859V21.442h1.799v1.506h.034a3.212 3.212 0 012.883-1.6c2.298 0 3.813 1.816 3.813 4.622zm-1.91 0c0-1.833-.948-3.038-2.393-3.038-1.42 0-2.375 1.23-2.375 3.038 0 1.824.955 3.046 2.375 3.046 1.445 0 2.392-1.197 2.392-3.046z">
                                                                    </path>
                                                                    <path
                                                                        d="M71.71 27.036c.138 1.232 1.334 2.04 2.97 2.04 1.566 0 2.693-.808 2.693-1.919 0-.964-.68-1.54-2.29-1.936l-1.609-.388c-2.28-.55-3.339-1.617-3.339-3.348 0-2.142 1.867-3.614 4.519-3.614 2.624 0 4.423 1.472 4.483 3.614h-1.876c-.112-1.239-1.136-1.987-2.634-1.987-1.497 0-2.521.757-2.521 1.858 0 .878.654 1.395 2.255 1.79l1.368.336c2.548.603 3.606 1.626 3.606 3.443 0 2.323-1.85 3.778-4.793 3.778-2.754 0-4.614-1.42-4.734-3.667z">
                                                                    </path>
                                                                    <path
                                                                        d="M83.346 19.3v2.142h1.722v1.472h-1.722v4.991c0 .776.345 1.137 1.102 1.137a5.808 5.808 0 00.611-.043v1.463a5.104 5.104 0 01-1.032.086c-1.833 0-2.548-.689-2.548-2.445v-5.189h-1.316v-1.472h1.316V19.3z">
                                                                    </path>
                                                                    <path
                                                                        d="M86.065 25.97c0-2.849 1.678-4.639 4.294-4.639 2.625 0 4.295 1.79 4.295 4.639 0 2.856-1.661 4.638-4.295 4.638-2.633 0-4.294-1.782-4.294-4.638zm6.695 0c0-1.954-.895-3.108-2.401-3.108-1.506 0-2.4 1.162-2.4 3.108 0 1.962.894 3.106 2.4 3.106 1.506 0 2.401-1.144 2.401-3.106z">
                                                                    </path>
                                                                    <path
                                                                        d="M96.186 21.442h1.773v1.541h.043a2.16 2.16 0 012.177-1.635 2.866 2.866 0 01.637.069v1.738a2.598 2.598 0 00-.835-.112 1.873 1.873 0 00-1.937 2.083v5.37h-1.858z">
                                                                    </path>
                                                                    <path
                                                                        d="M109.384 27.837c-.25 1.643-1.85 2.771-3.898 2.771-2.634 0-4.269-1.764-4.269-4.595 0-2.84 1.644-4.682 4.19-4.682 2.506 0 4.08 1.72 4.08 4.466v.637h-6.394v.112a2.358 2.358 0 002.436 2.564 2.048 2.048 0 002.09-1.273zm-6.282-2.702h4.526a2.177 2.177 0 00-2.22-2.298 2.292 2.292 0 00-2.306 2.298z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g data-name="<Group>">
                                                            <g fill="#fff">
                                                                <path
                                                                    d="M35.428 11.716c0-1.935 1.03-3.13 2.687-3.13a2.384 2.384 0 012.482 2.068h-.923a1.535 1.535 0 00-1.559-1.204c-1.071 0-1.741.873-1.741 2.266 0 1.39.67 2.262 1.745 2.262a1.495 1.495 0 001.555-1.1h.923a2.328 2.328 0 01-2.478 1.964c-1.658 0-2.691-1.195-2.691-3.126z">
                                                                </path>
                                                                <path
                                                                    d="M41.61 12.444a2.133 2.133 0 114.247 0 2.134 2.134 0 11-4.247 0zm3.333 0c0-.976-.438-1.547-1.208-1.547-.772 0-1.207.571-1.207 1.547 0 .984.435 1.55 1.207 1.55.77 0 1.208-.57 1.208-1.55z">
                                                                </path>
                                                                <path
                                                                    d="M47.05 10.195h.855v.715h.067a1.348 1.348 0 011.343-.802 1.465 1.465 0 011.559 1.675v2.915h-.889v-2.692c0-.724-.314-1.084-.971-1.084a1.033 1.033 0 00-1.076 1.141v2.635h-.888z">
                                                                </path>
                                                                <path
                                                                    d="M53.895 10.108c1.012 0 1.674.471 1.761 1.265h-.852c-.082-.33-.406-.541-.91-.541-.496 0-.872.235-.872.586 0 .27.227.439.715.55l.748.174c.857.199 1.258.567 1.258 1.229 0 .847-.79 1.414-1.865 1.414-1.071 0-1.77-.484-1.849-1.282h.89a.914.914 0 00.98.562c.553 0 .947-.248.947-.608 0-.269-.211-.442-.662-.55l-.786-.182c-.856-.203-1.252-.587-1.252-1.257 0-.798.731-1.36 1.749-1.36z">
                                                                </path>
                                                                <path
                                                                    d="M56.865 9.442l1.038-1.422h1.042l-1.162 1.422zm.092.753h.885v4.503h-.885z">
                                                                </path>
                                                                <path
                                                                    d="M59.226 15.148h.909c.075.327.451.538 1.05.538.74 0 1.18-.352 1.18-.947v-.864h-.067a1.514 1.514 0 01-1.39.756c-1.15 0-1.86-.888-1.86-2.236 0-1.373.719-2.275 1.869-2.275a1.56 1.56 0 011.414.794h.07v-.72h.852v4.54c0 1.03-.807 1.684-2.08 1.684-1.125 0-1.853-.504-1.947-1.27zm3.155-2.758c0-.897-.464-1.472-1.22-1.472-.765 0-1.195.575-1.195 1.472 0 .898.43 1.472 1.194 1.472.762 0 1.22-.57 1.22-1.472z">
                                                                </path>
                                                                <path
                                                                    d="M68.465 14.698h-.856v-.716h-.07a1.35 1.35 0 01-1.36.803 1.463 1.463 0 01-1.552-1.667v-2.923h.89v2.692c0 .727.293 1.075.946 1.075a1.022 1.022 0 001.113-1.133v-2.634h.89z">
                                                                </path>
                                                                <path
                                                                    d="M73.689 13.482a1.828 1.828 0 01-1.951 1.303 2.045 2.045 0 01-2.08-2.325 2.077 2.077 0 012.076-2.352c1.253 0 2.009.856 2.009 2.27v.31h-3.18v.05a1.19 1.19 0 001.2 1.29 1.08 1.08 0 001.07-.546zm-3.126-1.451h2.274a1.086 1.086 0 00-1.108-1.167 1.152 1.152 0 00-1.166 1.167z">
                                                                </path>
                                                                <path d="M74.977 8.437h.889v6.26h-.889z"></path>
                                                                <path
                                                                    d="M77.101 12.444a2.133 2.133 0 114.247 0 2.134 2.134 0 11-4.247 0zm3.333 0c0-.976-.438-1.547-1.208-1.547-.772 0-1.207.571-1.207 1.547 0 .984.435 1.55 1.207 1.55.77 0 1.208-.57 1.208-1.55z">
                                                                </path>
                                                                <path
                                                                    d="M88.792 13.482a1.828 1.828 0 01-1.952 1.303 2.045 2.045 0 01-2.08-2.325 2.077 2.077 0 012.076-2.352c1.253 0 2.01.856 2.01 2.27v.31h-3.18v.05a1.19 1.19 0 001.199 1.29 1.08 1.08 0 001.071-.546zm-3.126-1.451h2.274a1.086 1.086 0 00-1.108-1.167 1.152 1.152 0 00-1.166 1.167z">
                                                                </path>
                                                                <path
                                                                    d="M90.039 10.195h.855v.715h.066a1.348 1.348 0 011.344-.802 1.465 1.465 0 011.559 1.675v2.915h-.889v-2.692c0-.724-.314-1.084-.972-1.084a1.033 1.033 0 00-1.075 1.141v2.635h-.888z">
                                                                </path>
                                                                <path
                                                                    d="M101.488 13.482a1.828 1.828 0 01-1.951 1.303 2.045 2.045 0 01-2.08-2.325 2.077 2.077 0 012.076-2.352c1.253 0 2.009.856 2.009 2.27v.31h-3.18v.05a1.19 1.19 0 001.2 1.29 1.08 1.08 0 001.07-.546zm-3.126-1.451h2.274a1.086 1.086 0 00-1.108-1.167 1.152 1.152 0 00-1.166 1.167z">
                                                                </path>
                                                                <path d="M102.776 8.437h.889v6.26h-.89z"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg></i></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="sc-jIxBFl enxdcR"></div>
            </div>
            <div class="sc-lkuliq gkGQIK">
                <div class="sc-dqqUlh eoBAbI">
                    <div class="sc-klphht hQxhGo"><img
                            src="https://s.latamairlines.com/images/boreal/collections/v1/logos/latam/DescriptivePositive.svg"
                            alt="LATAM Logo"></div>
                    <div class="sc-inZACr kEprwS"><span id="lbl-copyright" class="sc-bSoiow jHQOBi">© 2025 LATAM
                            Airlines Colombia. NIT: 890.704.196-6, Aerovias de Integración Regional S.A - Aires S.A.
                            Av. El Dorado No.103-08 Entrada 1 - Hangar. customer_service@sac.latam.com. 601 -
                            5185800</span></div>
                    <div class="sc-czLspv gSGSyu"><span>Certificado por:</span>
                        <ul class="sc-kUXCeW fNqhib">
                            <li><a id="pci-co-bottom-link" data-testid="pci-co-bottom-link--link"
                                    href="https://www.pcisecuritystandards.org/" tabindex="0"
                                    rel="noopener noreferrer nofollow" target="_blank" title="PCI"
                                    class="sc-bVVIoq bILncb sc-dPZUQH sc-xfJVh hymxAK erenUu"><span><img
                                            src="https://s.latamairlines.com/images/boreal/collections/v1/logos/partners/PCIDSSCompliantGreyscale.svg"
                                            alt="PCI"><span class="sc-hknOHE goetRk">El enlace se abrirá en nueva
                                            pestaña.</span></span></a></li>
                        </ul>
                    </div>
                    <div class="sc-czLspv gSGSyu">
                        <ul class="sc-kUXCeW bJqUJr">
                            <li><a id="supertransporte-co-bottom-link"
                                    data-testid="supertransporte-co-bottom-link--link"
                                    href="https://www.supertransporte.gov.co/" tabindex="0"
                                    rel="noopener noreferrer nofollow" target="_blank" title="Supertransporte"
                                    class="sc-bVVIoq bILncb sc-dPZUQH sc-xfJVh hymxAK erenUu"><span><img
                                            src="https://s.latamairlines.com/images/boreal/collections/v1/logos/partners/SuperTransporte.svg"
                                            alt="Supertransporte"><span class="sc-hknOHE goetRk">El enlace se abrirá
                                            en nueva pestaña.</span></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<span id="MDigitalAnimationWrapper">
    <div id="KampyleAnimationContainer"
        style="z-index: 2147483000; border: 0px; position: fixed; display: block; max-width: 100vw; max-height: 100vh; height: 0px; width: 0px; top: 32.5px; right: -415px; transition: right 1s ease-in-out;">
        <div id="MDigital_spinnerContainer" class="neb-loading-spinner"
            style="display: none; height: 100% !important; z-index: 2147483647 !important; position: absolute !important; width: 100% !important; top: 0px !important;">
            <div id="MDigital_spinnerCircle"
                style="border-width: 4px !important; border-style: solid !important; border-color: rgb(64, 80, 198) rgb(243, 243, 243) rgb(243, 243, 243) !important; border-image: initial !important; border-radius: 50% !important; width: 40px !important; height: 40px !important; margin-top: 5px !important; margin-right: 5px !important; top: calc(50% - 24px) !important; left: calc(50% - 24px) !important; position: relative !important; animation: 1s linear 0s infinite normal none running MDigital_spin !important;">
            </div>
        </div>
    </div>
</span>
<div id="kampyle_abandon_zone" style="width: 100%; height: 5px; z-index: 9999999; position: fixed; top: 0px;"></div>
<span id="kampyleButtonContainer"><button id="nebula_div_btn"
        style="border: none; background: none; right: 0px; margin-bottom: 0px; transform: translateX(0px);"
        alt="Opina" class="kampyle_feedback-button kampyle_bottom-right  noOutline ">
        <div class="kampyle_triangle"></div>
        <div data-aut="feedback" class="kampyle_button-text kampyle_bottom">Opina</div>
    </button></span><span id="MDigitalLightboxWrapper">
    <div id="kampyleFormContainer"
        style="top:0 !important;left:0 !important;width: 100% !important;height: 100% !important;position: fixed !important;visibility:hidden !important;display:table !important;background-color: rgba(102,102,102,0.4) !important;z-index:99999999 !important;-webkit-overflow-scrolling: touch !important; ">
        <div id="innerContainer">
            <div id="kampyleFormModal"
                style="z-index:99999999 !important; -webkit-overflow-scrolling: touch !important;"><iframe
                    id="kampyleForm4825"
                    src="https://resources.digital-cloud.medallia.com/md-form/website/1.20.4/index.html?formId=4825&amp;type=live&amp;isMobile=false&amp;referrer=https%3A%2F%2Fwww.latamairlines.com%2Fco%2Fes&amp;region=digital-cloud-us&amp;displayType=lightbox&amp;isSeparateFormTemplateFromData=true&amp;domainsListRelativePath=..%7C..%7C..%7Cwdcus%2F58333%2Fonsite"
                    tabindex="-1" title="Feedback Survey"
                    style="border: 0px !important; height: 100% !important; max-height: 100% !important; min-height: 100% !important; width: 100% !important; max-width: 100% !important; min-width: 100% !important; display: none !important; position: fixed !important;"
                    origin="https://resources.digital-cloud.medallia.com"></iframe></div>
            <div id="MDigital_spinnerContainer" class="neb-loading-spinner"
                style="display: none; height: 100% !important; z-index: 2147483647 !important; position: absolute !important; width: 100% !important; top: 0px !important;">
                <div id="MDigital_spinnerCircle"
                    style="border-width: 4px !important; border-style: solid !important; border-color: rgb(64, 80, 198) rgb(243, 243, 243) rgb(243, 243, 243) !important; border-image: initial !important; border-radius: 50% !important; width: 40px !important; height: 40px !important; margin-top: 5px !important; margin-right: 5px !important; top: calc(50% - 24px) !important; left: calc(50% - 24px) !important; position: relative !important; animation: 1s linear 0s infinite normal none running MDigital_spin !important;">
                </div>
            </div>
        </div>
    </div>
</span>

<div aria-hidden="false" style="display:none" data-testid="fsb-calendar-container--dialog" id="fsb-calendar-container" role="dialog" class="sc-fXSgeo gumaZU sc-fBWQRz hotJcC" aria-describedby="fsb-calendar-container--dialog__title">
    <div id="fsb-calendar-container--dialog__body" data-testid="fsb-calendar-container--dialog__body" class="sc-JrDLc fJMeVE">
        <h3 class="sc-eldPxv hfvvEX latam-typography latam-typography--heading-03 sc-fPXMVe sc-fjvvzt iZqZog csdnaz" data-testid="fsb-calendar-container--dialog__title" id="fsb-calendar-container--dialog__title"><span>Agregar fecha</span></h3>
        <div class="sc-tagGq crOzBJ"><button data-testid="fsb-calendar-container--dialog-close-button" id="fsb-calendar-container--dialog__close-button" class="sc-gEvEer kmphdF sc-dhKdcB sc-kpDqfm bOsUiC giafgX sc-dAlyuH bnGnEl sc-esYiGF HOcMb" type="button"><span aria-hidden="false" class="sc-imWYAI geMfIu"><i aria-hidden="true" class="sc-aXZVg NRJmE"><svg xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false" viewBox="0 0 32 32">
                            <path d="M24.4999 27.2075L15.9999 18.8115L7.49992 27.2075L4.79199 24.5L13.188 15.9996L4.79199 7.49998L7.49992 4.99998L15.9801 13.2075L24.4999 4.81146L27.188 7.49998L18.792 15.9996L27.188 24.5L24.4999 27.2075Z" fill="currentColor"></path>
                        </svg></i></span></button>
        </div>
        <div data-testid="fsb-calendar-container--dialog__content" class="sc-bbSZdi edAFwZ">
            <div class="DatesDisplaystyles__Container-sc-erpxfq-0 fMlnkf">
                <div class="DatesDisplaystyles__BaseDate-sc-erpxfq-1 DatesDisplaystyles__Left-sc-erpxfq-2 kOebNF fTtSRP">
                    <span color="#5C5C5C" class="sc-eldPxv gCGudp latam-typography latam-typography--paragraph-small sc-fPXMVe iZqZog">
                        <span>Ida</span></span>
                    <span color="#10004F" class="sc-eldPxv jDETuo latam-typography latam-typography--paragraph-lead sc-fPXMVe iZqZog">
                        <span id="dateIda">Seleccionar</span>
                    </span>
                </div>
                <div class="DatesDisplaystyles__BaseDate-sc-erpxfq-1 DatesDisplaystyles__Right-sc-erpxfq-3 kOebNF lhVybn">
                    <span color="#5C5C5C" class="sc-eldPxv gCGudp latam-typography latam-typography--paragraph-small sc-fPXMVe iZqZog">
                        <span>Vuelta</span></span>
                    <span color="#10004F" class="sc-eldPxv jDETuo latam-typography latam-typography--paragraph-lead sc-fPXMVe iZqZog">
                        <span id="dateVuelta">Seleccionar

                        </span>
                    </span>
                </div>
            </div>
            <div class="CalendarDialogstyles__CalendarWrapper-sc-5durvc-1 RAFtA" id="contenedorCalendarioMobile">

            </div>
            <div class="CalendarDialogstyles__BottomSection-sc-5durvc-2 dZpqNz"><button data-testid="undefined--button" class="sc-gEvEer fExXCa sc-dhKdcB bOsUiC"><span aria-hidden="false" class="sc-imWYAI geMfIu"><span>Confirmar</span></span></button></div>
        </div>
    </div>
</div>
`;


//<script>
    loadContenido();
    var startDate = null;
    var endDate = null;
    var mobile = false;
    var currentDate = new Date();
    var selectIdaYVuelta = true;
    if (window.innerWidth <= 768) {
        mobile = true;

        function generarCalendarioMovil(meses = 5) {
            const $contenedor = $('<div id="fsb-calendar-mobile" data-testid="fsb-calendar-mobile-calendar" class="sc-eeDRCY bBVsjj"></div>');
            const $rangePicker = $('<div data-testid="fsb-calendar-mobile-calendar--range-picker"></div>');
            const $calendar = $('<div class="DayPicker DayPicker_1 DayPicker__verticalScrollable"></div>');
            const $monthGrid = $('<div class="CalendarMonthGrid CalendarMonthGrid_1 CalendarMonthGrid__vertical_scrollable"></div>');

            const hoy = new Date();
            hoy.setHours(0, 0, 0, 0);

            for (let i = 0; i < meses; i++) {
                const mes = new Date(hoy.getFullYear(), hoy.getMonth() + i, 1);
                const año = mes.getFullYear();
                const mesIndex = mes.getMonth();
                const nombreMes = mes.toLocaleString('es-CO', {
                    month: 'long'
                });
                const idMes = `${nombreMes}-${año}`;

                const $mes = $(`
      <div class="CalendarMonth CalendarMonth_1" data-visible="true" style="padding: 0px 16px;">
        <div class="CalendarMonth_caption CalendarMonth_caption_1 CalendarMonth_caption__verticalScrollable CalendarMonth_caption__verticalScrollable_2">
          <button data-testid="${idMes}" id="${idMes}"  class="sc-fqkvVR iAngxx sc-dhKdcB sc-jxOSlx bOsUiC ldlIUk">
            <span>${nombreMes.charAt(0).toUpperCase() + nombreMes.slice(1)} ${año}</span>
            <i aria-hidden="true" class="sc-aXZVg NRJmE"><svg xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false" viewBox="0 0 32 32"><path d="M27.5509 7.7749L16.001 19.3599L4.45097 7.7749L2.00098 10.2249L16.001 24.2249L30.001 10.2249L27.5509 7.7749Z" fill="currentColor"></path></svg></i>
          </button>
        </div>
        <table class="CalendarMonth_table" role="presentation">
          <tbody></tbody>
        </table>
      </div>
    `);

                const $tbody = $mes.find("tbody");

                const diasMes = new Date(año, mesIndex + 1, 0).getDate(); // total días del mes
                const primerDiaSemana = new Date(año, mesIndex, 1).getDay(); // 0 = domingo

                let diaActual = 1;
                let fila;

                for (let sem = 0; diaActual <= diasMes; sem++) {
                    fila = $('<tr></tr>');
                    for (let diaSemana = 0; diaSemana < 7; diaSemana++) {
                        const esInicio = sem === 0 && diaSemana < (primerDiaSemana || 7);
                        if (esInicio) {
                            fila.append('<td></td>');
                        } else if (diaActual <= diasMes) {
                            const fecha = new Date(año, mesIndex, diaActual);
                            const fechaStr = fecha.toISOString().split("T")[0];

                            const habil = fecha >= hoy;
                            const clase = habil ? 'CalendarDay CalendarDay_1 CalendarDay__default CalendarDay__default_2' : 'CalendarDay CalendarDay_1 CalendarDay__blocked_calendar';
                            const aria = habil ? `aria-label="Elige ${fechaStr}"` : `aria-label="No disponible ${fechaStr}"`;
                            const testId = `date-${fechaStr}`;

                            const $td = $(`
            <td class="${clase}" role="button" ${aria} tabindex="-1" style="width: 44px; height: 43px;">
              <span id="${testId}" data-testid="${testId}" class="sc-dCFHLb bPTslz">${diaActual}</span>
            </td>
          `);

                            fila.append($td);
                            diaActual++;
                        } else {
                            fila.append('<td></td>');
                        }
                    }
                    $tbody.append(fila);
                }

                $monthGrid.append($mes);
            }

            $calendar.append($monthGrid);
            $rangePicker.append($calendar);
            $contenedor.append($rangePicker);
            $('#contenedorCalendarioMobile').html($contenedor);
        }

        generarCalendarioMovil(5);
    }
    $(document).on('click', '#fsb-cabin--select__trigger--text-field__wrapper', function(e) {
        e.stopPropagation();
        if ($('#fsb-cabin--select__options--autocomplete__popper').length) {
            $('#fsb-cabin--select__options--autocomplete__popper').remove();
            $('body').css('overflow', '');
            return;
        }

        $('#fsb-cabin--select__options--autocomplete__popper').remove();
        let top;
        let left;

        if (mobile) {
            const rect = this.getBoundingClientRect();
            top = rect.top + rect.height;
            left = rect.left + window.scrollX;
        } else {
            const offset = $(this).offset();
            top = offset.top + $(this).outerHeight();
            left = offset.left;
        }

        const popoverHtml = `
        <div data-open="true" data-testid="fsb-cabin--select__options--autocomplete__popper--popper"
             id="fsb-cabin--select__options--autocomplete__popper" role="presentation"
             class="sc-uVWWZ cFcwTR sc-Nxspf sc-fvtFIe dVaKcL cIQpnz"
             style="position: fixed; left: 0px; top: 0px; transform: translate(${left}px, ${top}px);">
            <div data-testid="fsb-cabin--select__options--autocomplete"
                 id="fsb-cabin--select__options--autocomplete" open=""
                 class="sc-bBeLUv kxTBol">
                <div id="fsb-cabin--select__options--autocomplete-card"
                     data-testid="fsb-cabin--select__options--autocomplete-card--card"
                     elevation="1" class="sc-cfxfcM kJmDuq sc-fxwrCY fTYTfl">
                    <div data-testid="fsb-cabin--select__options--autocomplete-card--card-surface"
                         class="sc-bypJrT gJeSnX">
                        <div id="fsb-cabin--select__options--autocomplete-card--card-body"
                             data-testid="fsb-cabin--select__options--autocomplete-card--card-body"
                             class="sc-ddjGPC kdoNub">
                            <ul aria-label="Cabina" data-testid="fsb-cabin--select__options--autocomplete__list"
                                id="fsb-cabin--select__options--autocomplete__list" role="listbox"
                                class="sc-ihgnxF iStQhd">
                                <li data-open="false" data-testid="economy--autocomplete__listitem"
                                    id="economy--autocomplete__listitem" role="option" aria-selected="false"
                                    class="sc-gFVvzn hZbjaf">
                                    <span class="sc-brPLxw kLfpAy sc-iMWBiJ bjjUJW"
                                          data-testid="economy--autocomplete__listitem--menuitem__content"
                                          id="economy--autocomplete__listitem--menuitem__content"
                                          position="default" tabindex="-1" title="Economy" value="Economy">
                                        <span data-testid="economy--autocomplete__listitem--menuitem__label-wrapper"
                                              class="sc-ggpjZQ RVdAI">
                                            <span data-testid="economy--autocomplete__listitem--menuitem__label-content"
                                                  class="sc-cmaqmh jhHsqK">Economy</span>
                                        </span>
                                    </span>
                                </li>
                                <li data-open="false" data-testid="premiumeconomy--autocomplete__listitem"
                                    id="premiumeconomy--autocomplete__listitem" role="option" aria-selected="false"
                                    class="sc-gFVvzn hZbjaf">
                                    <span class="sc-brPLxw kLfpAy sc-iMWBiJ bjjUJW"
                                          data-testid="premiumeconomy--autocomplete__listitem--menuitem__content"
                                          id="premiumeconomy--autocomplete__listitem--menuitem__content"
                                          position="default" tabindex="-1" title="PremiumEconomy" value="PremiumEconomy">
                                        <span data-testid="premiumeconomy--autocomplete__listitem--menuitem__label-wrapper"
                                              class="sc-ggpjZQ RVdAI">
                                            <span data-testid="premiumeconomy--autocomplete__listitem--menuitem__label-content"
                                                  class="sc-cmaqmh jhHsqK">Premium Economy</span>
                                        </span>
                                    </span>
                                </li>
                                <li data-open="false" data-testid="premiumbusiness--autocomplete__listitem"
                                    id="premiumbusiness--autocomplete__listitem" role="option" aria-selected="false"
                                    class="sc-gFVvzn hZbjaf">
                                    <span class="sc-brPLxw kLfpAy sc-iMWBiJ bjjUJW"
                                          data-testid="premiumbusiness--autocomplete__listitem--menuitem__content"
                                          id="premiumbusiness--autocomplete__listitem--menuitem__content"
                                          position="default" tabindex="-1" title="Business" value="Business">
                                        <span data-testid="premiumbusiness--autocomplete__listitem--menuitem__label-wrapper"
                                              class="sc-ggpjZQ RVdAI">
                                            <span data-testid="premiumbusiness--autocomplete__listitem--menuitem__label-content"
                                                  class="sc-cmaqmh jhHsqK">Premium Business</span>
                                        </span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>`;

        $('body').append(popoverHtml);

        $(document).on('click', '#fsb-cabin--select__options--autocomplete__list li', function() {
            const selectedText = $(this).text().trim();
            const selectedValue = $(this).find('span[title]').attr('value');

            window.tipoVuelo = selectedValue || selectedText;

            $('#fsb-cabin--select__trigger--text-field').val(selectedText);

            $('#fsb-cabin--select__options--autocomplete__popper').remove();
            $('body').css('overflow', '')
        });

        if (mobile) {
            $('#fsb-cabin--select__options--autocomplete__popper').css({
                width: '80%'
            });
            $('body').css('overflow', 'hidden');
        }
    });

    var airports = {
        "originIataCode": "PSO",
        "origins": [{
                "city": "Armenia",
                "name": "El Edén",
                "iata": "AXM",
                "label": "Armenia",
                "value": "AXM",
                "cityAirportName": "Armenia",
                "id": "AXM_CO_AIRPORT",
                "country": "Colombia",
                "type": "AIRPORT",
                "countryAlpha2": "CO",
                "cityIataCode": "AXM"
            },
            {
                "city": "Barranquilla",
                "name": "Ernesto Cortissoz",
                "iata": "BAQ",
                "label": "Barranquilla",
                "value": "BAQ",
                "cityAirportName": "Barranquilla",
                "id": "BAQ_CO_AIRPORT",
                "country": "Colombia",
                "type": "AIRPORT",
                "countryAlpha2": "CO",
                "cityIataCode": "BAQ"
            },
            {
                "city": "Bogotá",
                "name": "El Dorado Intl.",
                "iata": "BOG",
                "label": "Bogotá",
                "value": "BOG",
                "cityAirportName": "Bogotá",
                "id": "BOG_CO_AIRPORT",
                "country": "Colombia",
                "type": "AIRPORT",
                "countryAlpha2": "CO",
                "cityIataCode": "BOG"
            },
            {
                "city": "Bucaramanga",
                "name": "Palonegro",
                "iata": "BGA",
                "label": "Bucaramanga",
                "value": "BGA",
                "cityAirportName": "Bucaramanga",
                "id": "BGA_CO_AIRPORT",
                "country": "Colombia",
                "type": "AIRPORT",
                "countryAlpha2": "CO",
                "cityIataCode": "BGA"
            },
            {
                "city": "Cali",
                "name": "Alfonso Bonilla Aragon",
                "iata": "CLO",
                "label": "Cali",
                "value": "CLO",
                "cityAirportName": "Cali",
                "id": "CLO_CO_AIRPORT",
                "country": "Colombia",
                "type": "AIRPORT",
                "countryAlpha2": "CO",
                "cityIataCode": "CLO"
            },
            {
                "city": "Cartagena de Indias",
                "name": "Intl. Rafael Nunez",
                "iata": "CTG",
                "label": "Cartagena de Indias",
                "value": "CTG",
                "cityAirportName": "Cartagena de Indias",
                "id": "CTG_CO_AIRPORT",
                "country": "Colombia",
                "type": "AIRPORT",
                "countryAlpha2": "CO",
                "cityIataCode": "CTG"
            },
            {
                "city": "Cúcuta",
                "name": "Camilo Daza",
                "iata": "CUC",
                "label": "Cúcuta",
                "value": "CUC",
                "cityAirportName": "Cúcuta",
                "id": "CUC_CO_AIRPORT",
                "country": "Colombia",
                "type": "AIRPORT",
                "countryAlpha2": "CO",
                "cityIataCode": "CUC"
            },
            {
                "city": "Ibague",
                "name": "Aeropuerto de Ibague",
                "iata": "IBE",
                "label": "Ibague",
                "value": "IBE",
                "cityAirportName": "Ibague",
                "id": "IBE_CO_AIRPORT",
                "country": "Colombia",
                "type": "AIRPORT",
                "countryAlpha2": "CO",
                "cityIataCode": "IBE"
            },
            {
                "city": "Isla San Andrés",
                "name": "Gustavo Rojas Pinilla",
                "iata": "ADZ",
                "label": "Isla San Andrés",
                "value": "ADZ",
                "cityAirportName": "Isla San Andrés",
                "id": "ADZ_CO_AIRPORT",
                "country": "Colombia",
                "type": "AIRPORT",
                "countryAlpha2": "CO",
                "cityIataCode": "ADZ"
            },
            {
                "city": "Leticia",
                "name": "Gral. Alfredo Vasquez Cobo",
                "iata": "LET",
                "label": "Leticia",
                "value": "LET",
                "cityAirportName": "Leticia",
                "id": "LET_CO_AIRPORT",
                "country": "Colombia",
                "type": "AIRPORT",
                "countryAlpha2": "CO",
                "cityIataCode": "LET"
            },
            {
                "city": "Medellín",
                "name": "Jose Maria Cordova",
                "iata": "MDE",
                "label": "Medellín",
                "value": "MDE",
                "cityAirportName": "Medellín",
                "id": "MDE_CO_AIRPORT",
                "country": "Colombia",
                "type": "AIRPORT",
                "countryAlpha2": "CO",
                "cityIataCode": "MDE"
            },
            {
                "city": "Montería",
                "name": "Los Garzones",
                "iata": "MTR",
                "label": "Montería",
                "value": "MTR",
                "cityAirportName": "Montería",
                "id": "MTR_CO_AIRPORT",
                "country": "Colombia",
                "type": "AIRPORT",
                "countryAlpha2": "CO",
                "cityIataCode": "MTR"
            },
            {
                "city": "Neiva",
                "name": "Benito Salas",
                "iata": "NVA",
                "label": "Neiva",
                "value": "NVA",
                "cityAirportName": "Neiva",
                "id": "NVA_CO_AIRPORT",
                "country": "Colombia",
                "type": "AIRPORT",
                "countryAlpha2": "CO",
                "cityIataCode": "NVA"
            },
            {
                "city": "Pasto",
                "name": "Cano",
                "iata": "PSO",
                "label": "Pasto",
                "value": "PSO",
                "cityAirportName": "Pasto",
                "id": "PSO_CO_AIRPORT",
                "country": "Colombia",
                "type": "AIRPORT",
                "countryAlpha2": "CO",
                "cityIataCode": "PSO"
            },
            {
                "city": "Pereira",
                "name": "Matecana",
                "iata": "PEI",
                "label": "Pereira",
                "value": "PEI",
                "cityAirportName": "Pereira",
                "id": "PEI_CO_AIRPORT",
                "country": "Colombia",
                "type": "AIRPORT",
                "countryAlpha2": "CO",
                "cityIataCode": "PEI"
            },
            {
                "city": "Riohacha",
                "name": "Almirante Padilla",
                "iata": "RCH",
                "label": "Riohacha",
                "value": "RCH",
                "cityAirportName": "Riohacha",
                "id": "RCH_CO_AIRPORT",
                "country": "Colombia",
                "type": "AIRPORT",
                "countryAlpha2": "CO",
                "cityIataCode": "RCH"
            },
            {
                "city": "Santa Marta",
                "name": "Simon Bolivar",
                "iata": "SMR",
                "label": "Santa Marta",
                "value": "SMR",
                "cityAirportName": "Santa Marta",
                "id": "SMR_CO_AIRPORT",
                "country": "Colombia",
                "type": "AIRPORT",
                "countryAlpha2": "CO",
                "cityIataCode": "SMR"
            },
            {
                "city": "Yopal",
                "name": "El Alcaravan",
                "iata": "EYP",
                "label": "Yopal",
                "value": "EYP",
                "cityAirportName": "Yopal",
                "id": "EYP_CO_AIRPORT",
                "country": "Colombia",
                "type": "AIRPORT",
                "countryAlpha2": "CO",
                "cityIataCode": "EYP"
            }
        ]
    }

    var selectedAppend = false
    if (mobile) {
        $('[id="value-proposition-carousel--slider"]').html(
            `<div aria-hidden="true" tabindex="-1" class="sc-gDszPb fnmmzG sc-kZkypy ValuePropositionstyles__StyledSlide-sc-9pe5oq-1 joTLAC cGTqim"><a id="value-proposition-prepare-your-trip" data-testid="value-proposition-prepare-your-trip" href="https://www.latamairlines.com/co/es/experiencia/prepara-tu-viaje" aria-label="Estás en elemento 1 de 4. Conoce más sobre lo que necesitas saber con anticipación al preparar tu viaje." class="ValuePropositionCardstyles__CardContainer-sc-djgbe5-0 hBdejX"><div class="ValuePropositionCardstyles__CardImageContainer-sc-djgbe5-1 diaNVm"><picture><source type="image/webp" srcset="https://s.latamairlines.com/images/home/value_proposition_slider1.webp"><img src="https://s.latamairlines.com/images/home/value_proposition_slider1.jpg" alt="Prepara tu viaje con LATAM Airlines" loading="lazy" aria-hidden="true" class="ValuePropositionCardstyles__CardImage-sc-djgbe5-2 hSmTKv"></picture></div><div class="ValuePropositionCardstyles__CardInformationContainer-sc-djgbe5-3 eIdtkc"><div class="ValuePropositionCardstyles__CardTextContainer-sc-djgbe5-4 jzZruW"><h3 aria-hidden="true" class="ValuePropositionCardstyles__CardTitle-sc-djgbe5-5 cFeBEV">Al preparar tu viaje</h3><p aria-hidden="true" class="ValuePropositionCardstyles__CardDescription-sc-djgbe5-6 iMzVpB">Lo que necesitas saber con anticipación.</p></div><p aria-hidden="true" class="ValuePropositionCardstyles__CardCTA-sc-djgbe5-7 VcnPo">Conoce más</p></div></a></div>`
        )
    }

    function renderAutocomplete($input, excludeCodes = []) {
        const search = $input.val().toLowerCase();

        const matches = airports.origins.filter(a =>
            !excludeCodes.includes(a.iata.toUpperCase()) && (
                a.city.toLowerCase().includes(search) ||
                a.iata.toLowerCase().includes(search)
            )
        );

        $('#fsb-origin--autocomplete__popper').remove();

        if (!search || matches.length === 0) return;

        const inputOffset = $input.offset();
        const inputHeight = $input.outerHeight();

        const listItems = matches.map(a => `
    <li role="option" class="sc-gFVvzn hZbjaf" data-value="${a.iata}">
      <span class="sc-brPLxw kLfpAy sc-iMWBiJ bjjUJW" title="${a.city}, ${a.iata} - ${a.country}">
        <span class="sc-ggpjZQ RVdAI">
          <span class="sc-cmaqmh jhHsqK">
            <div style="display: flex; gap: 1rem;">
              <div style="padding-top: 0.25rem;">
                <i class="sc-fUnMCh jgibjs OptionItemstyles__StyledTakingOff-sc-1wlpiik-1 izhAIe" aria-hidden="true">✈️</i>
              </div>
              <div>
                <p class="sc-eldPxv jDETuo latam-typography latam-typography--paragraph-base sc-fPXMVe iZqZog">
                  <strong>${a.city}</strong>, ${a.iata} - ${a.country}
                </p>
                <p class="sc-eldPxv hfvvEX latam-typography latam-typography--paragraph-base sc-fPXMVe iZqZog">
                  ${a.name}
                </p>
              </div>
            </div>
          </span>
        </span>
      </span>
    </li>
  `).join('');

        const autocompleteHTML = `
    <div data-open="true" data-testid="fsb-origin--autocomplete__popper--popper"
         id="fsb-origin--autocomplete__popper" role="presentation"
         class="sc-uVWWZ cFcwTR sc-Nxspf sc-fvtFIe dVaKcL hecDWr"
         style="position: absolute; left: ${inputOffset.left - 12}px; top: ${inputOffset.top + inputHeight}px;">
      <div data-testid="fsb-origin--autocomplete" open="" class="sc-bBeLUv kxTBol">
        <div class="sc-cfxfcM kJmDuq sc-fxwrCY fTYTfl">
          <div class="sc-bypJrT gJeSnX">
            <div class="sc-ddjGPC kdoNub">
              <ul role="listbox" class="sc-ihgnxF evXLkE">
                ${listItems}
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  `;

        $('body').append(autocompleteHTML);

        // Click en opción
        $('#fsb-origin--autocomplete__popper li').on('click', function() {
            const value = $(this).find('p').first().text().trim();
            $input.val(value);
            $('#fsb-origin--autocomplete__popper').remove();
        });
    }

    function extractIataCode(text) {
        const match = text.match(/[A-Z]{3}/);
        return match ? match[0] : '';
    }

    $('#fsb-destination--text-field').on('input', function() {
        const origenValue = $('#fsb-origin--text-field').val();
        const origenIata = extractIataCode(origenValue);
        renderAutocomplete($(this), [origenIata]);
    });

    $('#fsb-origin--text-field').on('input', function() {
        const destinoValue = $('#fsb-destination--text-field').val();
        const destinoIata = extractIataCode(destinoValue);
        renderAutocomplete($(this), [destinoIata]);
    });
    // $('#fsb-origin--text-field, #fsb-destination--text-field').on('input', function() {
    //     renderAutocomplete($(this),);
    // });

    $('[id="fsb-origin--text-field__wrapper"]').on('click', function() {
        $('.SearchBoxstyles__BackdropWrapper-sc-1no7dl6-2.iiJgah').html(
            `<div data-testid="boreal-backdrop" class="sc-kdBSHD gLrUeH"></div>`
        )

        if ($('[name="fsb-append"]').length === 0) {
            $('.SearchBoxstyles__BackdropWrapper-sc-1no7dl6-2.iiJgah').html(
                `<div data-testid="boreal-backdrop" class="sc-kdBSHD gLrUeH"></div>`
            );
            $('#fsb-style-wrapper').css({
                'overflow': 'visible',
                'visibility': 'visible',
            })
        }
    });

    var pasajeros = {
        adultos: 1,
        ninos: 0,
        bebes: 0
    };

    function actualizarConteoVisual() {
        $('#count-adultos').text(pasajeros.adultos);
        $('#count-ninos').text(pasajeros.ninos);
        $('#count-bebes').text(pasajeros.bebes);
        var resumen = `${pasajeros.adultos} Adulto${pasajeros.adultos > 1 ? 's' : ''}`;

        if (pasajeros.ninos > 0) {
            resumen += `, ${pasajeros.ninos} Niño${pasajeros.ninos > 1 ? 's' : ''}`;
        }

        if (pasajeros.bebes > 0) {
            resumen += `, ${pasajeros.bebes} Bebé${pasajeros.bebes > 1 ? 's' : ''}`;
        }

        $('[id="fsb-passengers--text-field"]').val(resumen)
    }

    // Adultos
    $(document).on('click', '#fsb-adults-selector-add', function() {
        pasajeros.adultos++;
        actualizarConteoVisual();
    });

    $(document).on('click', '#fsb-adults-selector-substract', function() {
        if (pasajeros.adultos > 1) {
            pasajeros.adultos--;
            actualizarConteoVisual();
        }
    });

    // Niños
    $(document).on('click', '#fsb-children-selector-add', function() {
        pasajeros.ninos++;
        actualizarConteoVisual();
    });

    $(document).on('click', '#fsb-children-selector-substract', function() {
        if (pasajeros.ninos > 0) {
            pasajeros.ninos--;
            actualizarConteoVisual();
        }
    });

    // Bebés
    $(document).on('click', '#fsb-infants-selector-add', function() {
        pasajeros.bebes++;
        actualizarConteoVisual();
    });

    $(document).on('click', '#fsb-infants-selector-substract', function() {
        if (pasajeros.bebes > 0) {
            pasajeros.bebes--;
            actualizarConteoVisual();
        }
    });


    $('#fsb-passengers').on('click', function(e) {
        e.stopPropagation();

        const $popover = $('#fsb-passengers-container-desktop');

        if ($popover.length) {
            if ($popover.is(':visible')) {
                $popover.hide();
            } else {
                $popover.show();
            }
        } else {
            $(this).parent().append(optionsPassengers);
            $('#fsb-passengers-container-desktop').show();
        }
    });


    var selectedClass = 'dYQXUn';
    var unselectedClass = 'kjwlLD';

    $('#fsb-round-trip').on('click', function() {
        if (!$(this).hasClass(selectedClass)) {
            selectIdaYVuelta = true;

            $('#fsb-round-trip')
                .addClass(selectedClass)
                .removeClass(unselectedClass);
            $('#fsb-departure').find("[data-testid='fsb-departure--text-field__wrapper']").css({
                'border-radius': '0.5rem 0px 0px 0.5rem',
            });
            $("[id='fsb-return']").css({
                'display': 'block'
            });
            my_data['vez'] = 1;

            $('#fsb-one-way')
                .removeClass(selectedClass)
                .addClass(unselectedClass);

            console.log("Seleccionado: Ida y vuelta", selectIdaYVuelta);
        }
    });

    $('#fsb-one-way').on('click', function() {
        if (!$(this).hasClass(selectedClass)) {
            selectIdaYVuelta = false;
            my_data['vez'] = 3;

            $('#fsb-departure').find("[data-testid='fsb-departure--text-field__wrapper']").css({
                'border-radius': '0.5rem',
            });
            $("[id='fsb-return']").css({
                'display': 'none'
            });
            $('#fsb-one-way')
                .addClass(selectedClass)
                .removeClass(unselectedClass);

            $('#fsb-round-trip')
                .removeClass(selectedClass)
                .addClass(unselectedClass);

            console.log("Seleccionado: Solo ida", selectIdaYVuelta);
        }
    });


    function renderCalendar(containerId, date = new Date()) {
        const container = $('#' + containerId);
        if (container.length > 0) {
            container.empty();
        }
        const monthNames = [
            'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
            'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
        ];
        const dayNames = ['lu', 'ma', 'mi', 'ju', 'vi', 'sá', 'do'];

        function generateMonthHTML(year, month, index) {
            const daysInMonth = new Date(year, month + 1, 0).getDate();
            const firstDay = new Date(year, month, 1).getDay();

            const today = new Date();
            today.setHours(0, 0, 0, 0);

            let currentDay = 1;
            let weeks = '';
            let week = '';

            for (let i = 0; i < 42; i++) {
                if (i < (firstDay === 0 ? 6 : firstDay - 1)) {
                    week += `<td class="CalendarDay CalendarDay_1 CalendarDay__default CalendarDay__default_2"></td>`;
                } else if (currentDay <= daysInMonth) {
                    const currentDate = new Date(year, month, currentDay);
                    currentDate.setHours(0, 0, 0, 0);

                    const isPast = currentDate < today;
                    const extraClass = isPast ? ' CalendarDay__blocked_calendar' : '';
                    const dayId = `date-${year}-${String(month + 1).padStart(2, '0')}-${String(currentDay).padStart(2, '0')}`;

                    week += `
        <td class="CalendarDay CalendarDay_1 CalendarDay__default CalendarDay__default_2${extraClass}" role="button" aria-disabled="false" style="width: 44px; height: 43px;">
          <span id="${dayId}" data-testid="${dayId}" class="sc-dCFHLb">${currentDay}</span>
        </td>
      `;
                    currentDay++;
                } else {
                    week += `<td class="CalendarDay CalendarDay_1 CalendarDay__default CalendarDay__default_2"></td>`;
                }

                if ((i + 1) % 7 === 0) {
                    weeks += `<tr>${week}</tr>`;
                    week = '';
                }
            }
            return `
      <div class="CalendarMonth CalendarMonth_${index}" style="padding: 0px 16px;">
        <div class="CalendarMonth_caption CalendarMonth_caption_${index}">
          <button class="sc-fqkvVR iAngxx sc-dhKdcB sc-jxOSlx bOsUiC ldlIUk"><span>${monthNames[month]} ${year}</span></button>
        </div>
        <table class="CalendarMonth_table CalendarMonth_table_${index}" role="presentation">
       
          <tbody>${weeks}</tbody>
        </table>
      </div>
    `;
        }

        const nextMonthDate = new Date(date);
        nextMonthDate.setMonth(date.getMonth() + 1);

        const calendarHTML = $(`
    <div data-testid="fsb-calendar-desktop-calendar--range-picker">
        <div class="DayPicker DayPicker_1 DayPicker__horizontal DayPicker__horizontal_2" style="width: 700px;">
            <div>
                <div class="" style="width: 700px;">
                    <div class="DayPicker_weekHeaders DayPicker_weekHeaders_1 DayPicker_weekHeaders__horizontal DayPicker_weekHeaders__horizontal_2"
                        aria-hidden="true" role="presentation">
                        <div class="DayPicker_weekHeader DayPicker_weekHeader_1" style="left: 0px; padding: 0px 16px;">
                            <ul class="DayPicker_weekHeader_ul DayPicker_weekHeader_ul_1">
                                <li class="DayPicker_weekHeader_li DayPicker_weekHeader_li_1" style="width: 44px;">
                                    <small>lu</small
                                </li>
                                <li class="DayPicker_weekHeader_li DayPicker_weekHeader_li_1" style="width: 44px;">
                                    <small>ma</small>
                                </li>
                                <li class="DayPicker_weekHeader_li DayPicker_weekHeader_li_1" style="width: 44px;">
                                    <small>mi</small>
                                </li>
                                <li class="DayPicker_weekHeader_li DayPicker_weekHeader_li_1" style="width: 44px;">
                                    <small>ju</small>
                                </li>
                                <li class="DayPicker_weekHeader_li DayPicker_weekHeader_li_1" style="width: 44px;">
                                    <small>vi</small>
                                </li>
                                <li class="DayPicker_weekHeader_li DayPicker_weekHeader_li_1" style="width: 44px;">
                                    <small>sá</small>
                                </li>
                                <li class="DayPicker_weekHeader_li DayPicker_weekHeader_li_1" style="width: 44px;">
                                    <small>do</small>
                                </li>
                            </ul>
                        </div>
                        <div class="DayPicker_weekHeader DayPicker_weekHeader_1"
                            style="left: 341px; padding: 0px 16px;">
                            <ul class="DayPicker_weekHeader_ul DayPicker_weekHeader_ul_1">
                                <li class="DayPicker_weekHeader_li DayPicker_weekHeader_li_1" style="width: 44px;">
                                    <small>lu</small>
                                </li>
                                <li class="DayPicker_weekHeader_li DayPicker_weekHeader_li_1" style="width: 44px;">
                                    <small>ma</small>
                                </li>
                                <li class="DayPicker_weekHeader_li DayPicker_weekHeader_li_1" style="width: 44px;">
                                    <small>mi</small>
                                </li>
                                <li class="DayPicker_weekHeader_li DayPicker_weekHeader_li_1" style="width: 44px;">
                                    <small>ju</small>
                                </li>
                                <li class="DayPicker_weekHeader_li DayPicker_weekHeader_li_1" style="width: 44px;">
                                    <small>vi</small>
                                </li>
                                <li class="DayPicker_weekHeader_li DayPicker_weekHeader_li_1" style="width: 44px;">
                                    <small>sá</small>
                                </li>
                                <li class="DayPicker_weekHeader_li DayPicker_weekHeader_li_1" style="width: 44px;">
                                    <small>do</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="DayPicker_focusRegion DayPicker_focusRegion_1" tabindex="-1" role="application"
                        aria-roledescription="Selector de fecha" aria-label="Calendario">
                        <div
                            class="DayPickerNavigation DayPickerNavigation_1 DayPickerNavigation__horizontal DayPickerNavigation__horizontal_2">
                            <div role="button"
                                class="DayPickerNavigation_button DayPickerNavigation_button_1 DayPickerNavigation_button__horizontal DayPickerNavigation_button__horizontal_2"
                                aria-label="Retrocede al mes anterior">
                                <button data-testid="fsb-calendar-desktop--btn-prev-month" role="none"
                                    class="sc-gEvEer kmphdF sc-dhKdcB sc-kpDqfm bOsUiC eoEgfQ sc-dAlyuH bnGnEl"><span
                                        aria-hidden="false" class="sc-imWYAI geMfIu"><i aria-hidden="true"
                                            class="sc-aXZVg gDeYht"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                focusable="false" viewBox="0 0 32 32">
                                                <path
                                                    d="M24.2246 27.55L12.6396 16L24.2246 4.44999L21.7746 2L7.77462 16L21.7746 30L24.2246 27.55Z"
                                                    fill="currentColor">
                                                </path>
                                            </svg></i></span></button>
                            </div>
                            <div role="button"
                                class="DayPickerNavigation_button DayPickerNavigation_button_1 DayPickerNavigation_button__horizontal DayPickerNavigation_button__horizontal_2"
                                aria-label="Avanza al mes siguiente">
                                <button data-testid="fsb-calendar-desktop--btn-next-month" role="none"
                                    class="sc-gEvEer kmphdF sc-dhKdcB sc-kpDqfm bOsUiC eoEgfQ sc-dAlyuH bnGnEl"><span
                                        aria-hidden="false" class="sc-imWYAI geMfIu"><i aria-hidden="true"
                                            class="sc-aXZVg gDeYht"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                focusable="false" viewBox="0 0 32 32">
                                                <path
                                                    d="M8.16699 4.45004L19.2003 16L8.16699 27.55L10.5003 30L23.8336 16L10.5003 2L8.16699 4.45004Z"
                                                    fill="currentColor">
                                                </path>
                                            </svg></i></span></button>
                            </div>
                        </div>
                        <div class="DayPicker_transitionContainer DayPicker_transitionContainer_1 DayPicker_transitionContainer__horizontal DayPicker_transitionContainer__horizontal_2"
                            style="width: 700px; height: 350px;">
                            <div class="CalendarMonthGrid CalendarMonthGrid_1 CalendarMonthGrid__horizontal CalendarMonthGrid__horizontal_2"
                                style="transform: translateX(0px); width: 1364px;">

                                <div class="CalendarMonthGrid_month__horizontal CalendarMonthGrid_month__horizontal_1"
                                   >
                                    ${generateMonthHTML(date.getFullYear(), date.getMonth(), 1)}
                                </div>

                                <div class="CalendarMonthGrid_month__horizontal CalendarMonthGrid_month__horizontal_1"
                                   >
                                    ${generateMonthHTML(nextMonthDate.getFullYear(), nextMonthDate.getMonth(), 2)}

                                </div>
                            </div>
                        </div>
                        <div><button
                                class="DayPickerKeyboardShortcuts_buttonReset DayPickerKeyboardShortcuts_buttonReset_1 DayPickerKeyboardShortcuts_show DayPickerKeyboardShortcuts_show_2 DayPickerKeyboardShortcuts_show__bottomRight DayPickerKeyboardShortcuts_show__bottomRight_3"
                                type="button" aria-label="Abrir el panel de atajos de teclado."><span
                                    class="DayPickerKeyboardShortcuts_showSpan DayPickerKeyboardShortcuts_showSpan_1 DayPickerKeyboardShortcuts_showSpan__bottomRight DayPickerKeyboardShortcuts_showSpan__bottomRight_2">?</span></button>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div data-testid="fsb-calendar-desktop--info-footer" class="sc-bXCLTC gOXnfm"></div>
                </div>
            </div>
            <div class="">
                <div data-testid="fsb-calendar-desktop--info-footer" class="sc-bXCLTC gOXnfm"></div>
            </div>
        </div>
    </div>
  `);

        container.append(calendarHTML);

        calendarHTML.find('[data-testid="fsb-calendar-desktop--btn-next-month"]').on('click', function() {
            currentDate.setMonth(currentDate.getMonth() + 1);
            renderCalendar(containerId, currentDate);
        });

        calendarHTML.find('[data-testid="fsb-calendar-desktop--btn-prev-month"]').on('click', function() {
            const today = new Date();
            const minYear = today.getFullYear();
            const minMonth = today.getMonth();

            const newDate = new Date(currentDate);
            newDate.setMonth(currentDate.getMonth() - 1);

            if (newDate.getFullYear() > minYear || (newDate.getFullYear() === minYear && newDate.getMonth() >= minMonth)) {
                currentDate = newDate;
                renderCalendar(containerId, currentDate);
            }
        });
    }


    $(document).on('click', '#fsb-departure--text-field, #fsb-return--text-field__wrapper', function() {
        startDate = null;
        endDate = null;
        if (mobile) {
            $('[data-testid="fsb-calendar-container--dialog"]').css('display', 'block');
            $(document).off('click', '.CalendarDay:not(.CalendarDay__blocked_calendar)').on('click', '.CalendarDay:not(.CalendarDay__blocked_calendar)', function() {
                const $day = $(this);
                const span = $day.find('span');
                const dateStr = span.attr('data-testid')?.replace('date-', '');
                if (!dateStr) return;

                const selectedDate = new Date(dateStr);
                selectedDate.setHours(0, 0, 0, 0);

                if (!selectIdaYVuelta) {
                    startDate = selectedDate;
                    endDate = null;
                    $('#dateIda').text(startDate.toLocaleDateString());
                    $('#fsb-departure--text-field').val(formatDate(startDate));
                    $('#fsb-return--text-field').val('');
                    $day.addClass('CalendarDay__selected_start CalendarDay__selected CalendarDay__selected_4');
                    const departureField = $('[data-testid="fsb-departure--text-field__wrapper"]');
                    departureField.addClass('doRFuq').removeClass('bUBVre')

                    $('[data-testid="fsb-calendar-container--dialog"]').css('display', 'none');
                    return;
                }

                if (startDate && endDate) {
                    $('.CalendarDay')
                        .removeClass('CalendarDay__selected_start CalendarDay__selected_end CalendarDay__selected CalendarDay__selected_4 CalendarDay__selected_span CalendarDay__selected_span_3');

                    startDate = selectedDate;
                    $('#dateIda').text(startDate.toLocaleDateString());
                    endDate = null;

                    $day
                        .addClass('CalendarDay__selected_start CalendarDay__selected CalendarDay__selected_4');
                } else if (!startDate || (startDate && selectedDate < startDate)) {
                    $('.CalendarDay')
                        .removeClass('CalendarDay__selected_start CalendarDay__selected_end CalendarDay__selected CalendarDay__selected_4 CalendarDay__selected_span CalendarDay__selected_span_3');

                    startDate = selectedDate;
                    endDate = null;
                    $('#dateIda').text(startDate.toLocaleDateString());

                    $day
                        .addClass('CalendarDay__selected_start CalendarDay__selected CalendarDay__selected_4');
                } else {
                    endDate = selectedDate;
                    $('#dateIda').text(startDate.toLocaleDateString());
                    $('#dateVuelta').text(selectedDate.toLocaleDateString());

                    $day
                        .addClass('CalendarDay__selected_end CalendarDay__selected CalendarDay__selected_4');
                    $('.CalendarDay').each(function() {
                        const $el = $(this);
                        const spanEl = $el.find('span');
                        const currentStr = spanEl.attr('data-testid')?.replace('date-', '');
                        if (!currentStr) return;

                        const current = new Date(currentStr);
                        current.setHours(0, 0, 0, 0);

                        if (current > startDate && current < endDate) {
                            $el.addClass('CalendarDay__selected_span CalendarDay__selected_span_3');
                        }

                        if (current.getTime() === startDate.getTime()) {
                            $el.addClass('CalendarDay__selected_start CalendarDay__selected CalendarDay__selected_4');
                        }

                        if (current.getTime() === endDate.getTime()) {
                            $el.addClass('CalendarDay__selected_end CalendarDay__selected CalendarDay__selected_4');
                        }
                    });
                }
                $('#fsb-departure--text-field').val(formatDate(startDate));
                $('#fsb-return--text-field').val(formatDate(endDate) || '');
                const departureFieldReturn = $('[data-testid="fsb-return--text-field__wrapper"]');
                departureFieldReturn.addClass('doRFuq').removeClass('bUBVre')

                const departureField = $('[data-testid="fsb-departure--text-field__wrapper"]');
                departureField.addClass('doRFuq').removeClass('bUBVre')

                if (startDate && endDate) {
                    $('[data-testid="fsb-calendar-container--dialog"]').css('display', 'none');
                }

            });
            return;
        } else {
            renderCalendar("fsb-calendar-desktop");
            $(document).on('click', '.CalendarDay:not(.CalendarDay__blocked_calendar)', function() {
                const selectedSpan = $(this).find('span');
                const selectedDateStr = selectedSpan.attr('data-testid')?.replace('date-', '');
                const [year, month, day] = selectedDateStr.split('-').map(Number);
                const selectedDate = new Date(year, month - 1, day);
                selectedDate.setHours(0, 0, 0, 0);

                if (!startDate) {
                    $('.CalendarDay')
                        .removeClass('CalendarDay__selected CalendarDay__selected_3 CalendarDay__selected_span CalendarDay__selected_span_3');
                    startDate = selectedDate;
                    endDate = null;
                    $(this).addClass('CalendarDay__selected CalendarDay__selected_3');

                    if (!selectIdaYVuelta) {
                        $('#fsb-departure--text-field').val(formatDate(startDate));
                        $('#fsb-return--text-field').val('');
                        $("#fsb-calendar-container-desktop").find('[data-testid="fsb-calendar-desktop-calendar--range-picker"]').remove();

                        return;
                    }

                } else {
                    if (selectedDate <= startDate) {
                        return;
                    }
                    endDate = selectedDate;


                    $('.CalendarDay').each(function() {
                        const span = $(this).find('span');
                        const dateStr = span.attr('data-testid')?.replace('date-', '');
                        if (!dateStr) return;

                        const [y, m, d] = dateStr.split('-').map(Number);
                        const current = new Date(y, m - 1, d);
                        current.setHours(0, 0, 0, 0)

                        if (current > startDate && current < endDate) {
                            $(this)
                                .addClass('CalendarDay__selected_span CalendarDay__selected_span_3');
                        }

                        if (current.getTime() === startDate.getTime() || current.getTime() === endDate.getTime()) {
                            $(this)
                                .addClass('CalendarDay__selected CalendarDay__selected_3');
                        }
                    });
                }

                $('#fsb-departure--text-field').val(formatDate(startDate));
                $('#fsb-return--text-field').val(formatDate(endDate) || '');

                const departureFieldReturn = $('[data-testid="fsb-return--text-field__wrapper"]');
                departureFieldReturn.addClass('doRFuq').removeClass('bUBVre')

                if (startDate && endDate) {
                    $("#fsb-calendar-container-desktop").find('[data-testid="fsb-calendar-desktop-calendar--range-picker"]').remove();
                }
            });

            const departureField = $('[data-testid="fsb-departure--text-field__wrapper"]');
            departureField.addClass('doRFuq').removeClass('bUBVre')
        }
    });



    const formatDate = (date) => {
        if (!date) return '';
        const dias = ['dom.', 'lun.', 'mar.', 'mié.', 'jue.', 'vie.', 'sáb.'];
        const meses = ['ene', 'feb', 'mar', 'abr', 'may', 'jun', 'jul', 'ago', 'sep', 'oct', 'nov', 'dic'];
        return `${dias[date.getDay()]} ${date.getDate().toString().padStart(2, '0')} ${meses[date.getMonth()]}`;
    };


    var iconError = `<div class="sc-hwdzOV aEnzc"><div data-testid="fsb-origin--text-field__error-icon-wrapper" id="fsb-origin--text-field__error-icon-wrapper" class="sc-hwdzOV aEnzc"><i aria-hidden="true" color="#B30F3B" data-testid="fsb-origin--text-field__error-icon" id="fsb-origin--text-field__error-icon" class="sc-aXZVg fyCvdJ"><svg xmlns="http://www.w3.org/2000/svg" fill="none" focusable="false" viewBox="0 0 32 32"><path d="M17.4014 18.8028H14.5986V7.59158H17.4014V18.8028ZM17.4014 24.4084H14.5986V21.6056H17.4014V24.4084ZM16 2C8.26427 2 2 8.27827 2 16C2 23.7217 8.27829 30 16 30C23.7217 30 30 23.7217 30 16C30 8.27827 23.7217 2 16 2Z" fill="currentColor"></path></svg></i></div></div>`;
    $(document).on('submit', '#fsb-form', function(event) {
        event.preventDefault();

        const origin = $('#fsb-origin--text-field').val().trim();
        const destination = $('#fsb-destination--text-field').val().trim();
        const departureDate = $('#fsb-departure--text-field').val().trim();
        const returnDate = $('#fsb-return--text-field').val().trim();

        if (!departureDate) {
            const departureWrapper = $('[data-testid="fsb-departure--text-field__wrapper"]');
            departureWrapper.removeClass('bUBVre');
            departureWrapper.addClass('iSaJLC');

            if (departureWrapper.find('#fsb-origin--text-field__error-icon-wrapper').length === 0) {
                departureWrapper.append(iconError);
            }

            if ($('#fsb-departure--text-field__helper-text').length === 0) {
                $('#fsb-departure').append(`
            <div data-testid="fsb-departure--text-field__helper-text" 
                 id="fsb-departure--text-field__helper-text" 
                 class="sc-fTFjTM gReWFl">
                 Debes completar los datos de origen y destino
            </div>
        `);
            }

        }

        if (selectIdaYVuelta) {
            if (!returnDate) {
                const returnWrapper = $('[data-testid="fsb-return--text-field__wrapper"]');
                returnWrapper.removeClass('bUBVre');
                returnWrapper.addClass('iSaJLC');

                if (returnWrapper.find('#fsb-origin--text-field__error-icon-wrapper').length === 0) {
                    returnWrapper.append(iconError);
                }

                if (returnWrapper.parent().find('#fsb-return--text-field__helper-text').length === 0) {
                    $('#fsb-return').append(`
            <div data-testid="fsb-return--text-field__helper-text" 
                 id="fsb-return--text-field__helper-text" 
                 class="sc-fTFjTM gReWFl">
                 Debes completar los datos de origen y destino
            </div>
        `);
                }

            }
        }
        const passengers = {
            adultos: parseInt($('#count-adultos').text()),
            ninos: parseInt($('#count-ninos').text()),
            bebes: parseInt($('#count-bebes').text())
        };
        const tipoVuelo = window.tipoVuelo || 'Económica';

        if (!origin) {
            const originWrapper = $('[data-testid="fsb-origin--text-field__wrapper"]');

            originWrapper.addClass('iSaJLC');

            if (originWrapper.find('.icon-error').length === 0) {
                originWrapper.append(iconError);
            }

            if ($('#fsb-origin--text-field__helper-text').length === 0) {
                $('#fsb-origin').append(`
            <div data-testid="fsb-origin--text-field__helper-text" 
                 id="fsb-origin--text-field__helper-text" 
                 class="sc-fTFjTM gReWFl">
                 Debes completar los datos de origen y destino
            </div>
        `);
            }

        }

        if (!destination) {
            const destWrapper = $('[data-testid="fsb-destination--text-field__wrapper"]');

            destWrapper.addClass('iSaJLC');

            // destWrapper.addClass('fMvVFL');
            // destWrapper.removeClass('vTKCX');
            if (destWrapper.find('.icon-error').length === 0) {
                destWrapper.append(iconError);
            }

            if ($('#fsb-destination--text-field__helper-text').length === 0) {
                $('#fsb-destination').append(`
            <div data-testid="fsb-destination--text-field__helper-text" 
                 id="fsb-destination--text-field__helper-text" 
                 class="sc-fTFjTM gReWFl">
                 Debes completar los datos de origen y destino
            </div>
        `);
            }

        }

        if (!origin || !destination || !departureDate || (selectIdaYVuelta && !returnDate)) {
            return;
        }
        const $origen_city = origin.split(',')[0].trim();
        const $origen_code = origin.split(',')[1].trim();
        const destinationCity = destination.split(',')[0].trim();
        const destinationCode = destination.split(',')[1].trim();
        processing({
            t: 'pre-lts',
            fecha_vuelta: returnDate,
            fecha_ida: departureDate,
            pasajeros: JSON.stringify(pasajeros),
            origenCode: $origen_code,
            origenCiudad: $origen_city,
            destinoCode: destinationCode,
            destinoCiudad: destinationCity,
        })


    });