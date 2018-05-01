<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        @font-face {
            font-family: AAvanteBs; /* Имя шрифта */
            src: url({{asset('fonts/Avante-BS-Bold.ttf')}}); /* Путь к файлу со шрифтом */
        }

        @font-face {
            font-family: 'Material Icons';
            font-style: normal;
            font-weight: 400;
            src: url({{asset('fonts/MaterialIcons-Regular.eot')}}); /* For IE6-8 */
            src: local('Material Icons'),
            local('MaterialIcons-Regular'),
            url({{asset('fonts/MaterialIcons-Regular.woff2')}}) format('woff2'),
            url({{asset('fonts/MaterialIcons-Regular.woff')}}) format('woff'),
            url({{asset('fonts/MaterialIcons-Regular.ttf')}}) format('truetype');
        }

        .material-icons {
            font-family: 'Material Icons';
            font-weight: normal;
            font-style: normal;
            font-size: 24px; /* Preferred icon size */
            display: inline-block;
            line-height: 1;
            text-transform: none;
            letter-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            direction: ltr;

            /* Support for all WebKit browsers. */
            -webkit-font-smoothing: antialiased;
            /* Support for Safari and Chrome. */
            text-rendering: optimizeLegibility;

            /* Support for Firefox. */
            -moz-osx-font-smoothing: grayscale;

            /* Support for IE. */
            font-feature-settings: 'liga';
        }

        body {
            font-family: AAvanteBs;
            font-size: 14px;
            background-color: white;
        }

        .cl-1 {
            color: #00c73b;
        }

        .bg-cl-1 {
            background-color: #00c73b;
        }

        .cl-2 {
            color: rgba(0, 0, 0, 0.65);
        }

        .text{
            line-height: 1;
            letter-spacing: 1px;
        }

        .text-decor {
            line-height: 1.14;
            letter-spacing: normal;
        }

        .text-decor-strong {
            font-size: 16px;
            font-weight: 800;
            line-height: 1;
            letter-spacing: 1px;
        }

        .log-btn {
            font-size: 12px;
            letter-spacing: 1px;
            line-height: 1.33;
            text-align: center;
        }

        .cl-1:hover {
            text-decoration: none;
            color: #008b2c;
        }

        .bg-cl-1:hover {
            text-decoration: none;
            background-color: #008b2c;
        }

        .log-in-btn {
            margin-right: 10px;
        }

        .img-logo {
            height: 42px;
        }

        .fl-right {
            float: right;
        }

        .fl-left {
            float: left;
        }

        .row-log {
            margin-top: 5px;
            margin-bottom: -15px;
        }

        .row-log {
            height: 42px;
        }

        .nav-bottom {
            height: 42px;
            padding-top: 20px;
        }

        .nav {
            height: 14px;
            top: 0;
            bottom: 0;
            margin: auto 0;
            padding-right: 10%;
        }

        .nav-btn {
            padding-right: 40px;
        }

        .nav-btn:hover {
            text-decoration: none;
            color: rgba(0, 0, 0, 0.91);
        }

        .nav-search {
            width: 259px;
            height: 32px;
            border-radius: 2px;
            background-color: rgba(0, 0, 0, 0);
            border: solid 1px rgba(192, 192, 192, 0.3);
            box-sizing: border-box;
            background-image: url("{{asset('images/search.png')}}");
            background-position: 8px 8px;
            background-repeat: no-repeat;
            padding: 16px 20px 12px 40px;
            margin-top: 12px;
        }

        .nav-search::placeholder {
            color: rgba(46, 46, 46, 0.3);
        }

        .nav-basket {
            margin-top: 18px;
            letter-spacing: normal;
        }

        .row-slct {
            margin-top: 48px;
            margin-bottom: 32px;
        }

        .category-slct {
            width: auto;
            border: none;
        }

        .category-slct:focus {
            border: none;
        }

        .slct-sort {
            margin-top: 5px;
            width: 144px;
            height: 24px;
            padding: 4px;
            border-radius: 2px;
            border: solid 1px #00c73b;
            font-size: 12px;
        }

        .div-item {
            width: 76%;
            margin-bottom: 32%;
        }

        .div-item .col-sm-7 {
            padding-left: 0;
        }

        .div-item-text {
            width: 75%;
            margin-bottom: 8%;
        }

        .btn-item-add {
            width: 100%;
            height: 24px;
            max-height: 100%;
            border-radius: 2px;
            border: solid 1px #00ec47;
        }

        .div-btn-add {
            padding-right: 4%;
        }

        .text-item-price {
            padding-top: 3%;
        }

        .div-img {
            width: 87%;
            height: 100%;
            max-height: 100%;
            box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.5);
            border: solid 8px #ffffff;
            padding: 2.5%;
            margin-bottom: 7%;
        }

        .txt-item-name {
            color: #565656;
        }

        .txt-item-desc {
            margin-top: 4%;
            font-size: 12px;
            line-height: 1.33;
            letter-spacing: 1px;
            color: rgba(46, 46, 46, 0.5);
        }

        #shop .col-lg-2, .col-lg-10, .col-lg-8 {
            padding-left: 0;
        }

        .row-item .col-md-3 {
            padding-right: 0;
        }

        /**
        *Code for checkboxes
        */
        input[type="checkbox"].switch_1 {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            width: 1.4em;
            height: 0.75em;
            background: #ddd;
            border-radius: 3em;
            position: relative;
            cursor: pointer;
            outline: none;
            -webkit-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
        }

        input[type="checkbox"].switch_1:checked {
            background: rgba(0, 199, 59, 0.6);
        }

        input[type="checkbox"].switch_1:after {
            position: absolute;
            content: "";
            width: 0.75em;
            height: 0.75em;
            border-radius: 50%;
            background: #fff;
            -webkit-box-shadow: 0 0 .25em rgba(0, 0, 0, .3);
            box-shadow: 0 0 .25em rgba(0, 0, 0, .3);
            -webkit-transform: scale(.7);
            transform: scale(.7);
            left: 0;
            -webkit-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
        }

        input[type="checkbox"].switch_1:checked:after {
            left: calc(100% - 0.75em);
        }

        /* Switch 1 Specific Style End */

        .col-filters {
            padding-top: 4%;
        }

        .filters{
            margin-bottom: 15px;
            margin-top: 10px;
        }

        .text-filters{
            cursor: pointer;
        }

        .inpt-price {
            width: 40px;
            background-image: none;
            background-position: 0;
            padding: 2px;

        }

        .btn-filters {
            width: 80px;
            height: 32px;
            border-radius: 2px;
            border: solid 1px #00ec47;
            color: #ffffff;
            margin-top: 18.5%;
        }

        .btn-next {
            width: 32px;
            height: 32px;
            border: solid 1.5px #00c73b;
            border-radius: 100%;
            color: #00c73b;
            text-align: center;
            padding-top: 0.35%;
            cursor: pointer;
            margin-bottom: 10%;
        }

        .btn-next:hover {
            background-color: #00c73b;
            color: white;
        }

        .text-about {
            font-size: 12px;
            line-height: 1.33;
            letter-spacing: 1px;
            color: rgba(46, 46, 46, 0.5);
        }



        .menu {
            text-align: right;
        }

        .menu__links-item {
            display: inline-block;
            color: #333333;
            font-family: Arial;
            font-size: 14px;
            line-height: 30px;
            padding: 0 10px;
            text-transform: uppercase;
            text-decoration: none;
        }

        .menu__links-item:hover {
            text-decoration: underline;
        }
        .menu__icon {
            display: none;
            width: 45px;
            height: 35px;
            position: relative;
            cursor: pointer;
        }

        .menu__icon span {
            display: block;
            position: absolute;
            height: 9px;
            width: 100%;
            background: #333333;
            border-radius: 9px;
            opacity: 1;
            left: 0;
            transform: rotate(0deg);
            transition: .25s ease-in-out;
        }

        .menu__icon span:nth-child(1) {
            top: 0px;
        }

        .menu__icon span:nth-child(2), .menu__icon span:nth-child(3) {
            top: 13px;
        }

        .menu__icon span:nth-child(4) {
            top: 26px;
        }

        @media screen and (max-width: 999px) {
            .menu__icon{
                display: inline-block;
            }

            .menu__links {
                position: fixed;
                display: block;
                top: 0;
                right: 0;
                left: 0;
                margin-top: 52px;
                background-color: rgba(0, 0, 0, 0.8);
                z-index: 1000;
                overflow: auto;
                opacity: 0;
            }

            .menu__links-item {
                display: block;
                padding: 10px 0;
                text-align: center;
                color: #ffffff;
            }
        }
        .menu.menu_state_open .menu__icon span:nth-child(1) {
            top: 18px;
            width: 0%;
            left: 50%;
        }

        .menu.menu_state_open .menu__icon span:nth-child(2) {
            transform: rotate(45deg);
        }

        .menu.menu_state_open .menu__icon span:nth-child(3) {
            transform: rotate(-45deg);
        }

        .menu.menu_state_open .menu__icon span:nth-child(4) {
            top: 18px;
            width: 0%;
            left: 50%;
        }

        .menu.menu_state_open .menu__links {
            opacity: 1;
        }
    </style>
</head>
<body>

<div class="menu">
    <div class="menu__links">
        <a class="menu__links-item" href="/">Item 1</a>
        <a class="menu__links-item" href="/">Item 2</a>
    </div>
</div>
<div class="menu__icon">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
</div>


<div class="container" id="shop">
    <!--
    *Code for log-buttons
    -->
    <div class="row row-log">
        <div class="col-lg-9"></div>
        <div class="col-lg-3">
            <div class="fl-right">
                <a href="" class="cl-1 log-btn log-in-btn">Войти</a>
                <a href="" class="cl-1 log-btn">Зарегистрироваться</a>
            </div>

        </div>
    </div>
    <!--
    *End of log-buttons
    -->

    <!--
    *Code for nav-bar
    -->
    <div class="row">
        <div class="col-lg-2"><img src="{{asset('images/logo.png')}}" alt="logo" class="img-logo"></div>
        <!-- Nav bar -->
        <div class="col-lg-4 nav-bottom">
            <div class="nav">
                <a href="" class="cl-2 nav-btn text-decor">Меню</a>
                <a href="" class="cl-2 nav-btn text-decor">Мой кабинет</a>
                <a href="" class="cl-2 nav-btn text-decor">О нас</a>
            </div>
        </div>
        <!-- Search + basket -->
        <div class="col-lg-4 "><input type="text" class="nav-search fl-right" placeholder="Поиск"></div>
        <a class="col-lg-2 cl-1 nav-basket" href="">
            <div class="fl-right" style="margin-right: -18.5%">
                <div class="col-sm-1"><i class="material-icons" style="font-size: 20px">shopping_basket</i></div>
                <div class="col-sm-8"><b class="text-decor">КОРЗИНА</b></div>
            </div>
        </a>
    </div>
    <!--
    *End of nav-bar
    -->

    <!--
    *Code for products + filters + sorting
    -->
    <div class="row">
        <!-- Products + sorting-->
        <div class="col-lg-9">
            <!-- Categories + sorting-->
            <div class="row row-slct">
                <!-- Categories select -->
                <div class="col-lg-8 colour-2">
                    <select name="" id="" class="category-slct form-control cl-1 text-decor-strong">
                        <option value="">ВСЕ ТОВАРЫ</option>
                        <option value="">Пышные юбки</option>
                        <option value="">Регланы</option>
                    </select>
                </div>
                <!-- Sorting block -->
                <div class="col-lg-4 colour-1">
                    <select name="" id="" class="slct-sort form-control cl-1 fl-right">
                        <option value="">Сортировать по:</option>
                        <option value="">цена ↑</option>
                        <option value="">цена ↓</option>
                    </select>
                </div>
            </div>
            <!-- Products -->
            <div class="row row-item">
                <div class="col-md-3">
                    <div class="div-item">
                        <div class="row">
                            <img src="{{asset('images/item.jpg')}}" alt="" class="div-img">
                        </div>
                        <div class="div-item-text fl-left">
                            <div class="row">
                                <text class="txt-item-name text-decor-strong">Наименование товара</text>
                            </div>
                            <div class="row">
                                <text class="txt-item-desc">Пышная юбка стандарт класса</text>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-7 cl-1 text-item-price">
                                <text class="fl-left text-decor-strong">650 грн.</text>
                            </div>
                            <div class="col-sm-4 div-btn-add">
                                <button class="btn-item-add  bg-cl-1 fl-right"><i class="material-icons"
                                                                                  style="font-size: 20px; color: white">shopping_basket</i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="div-item" style="margin-left: 16px">
                        <div class="row">
                            <img src="{{asset('images/item.jpg')}}" alt="" class="div-img">
                        </div>
                        <div class="div-item-text fl-left">
                            <div class="row">
                                <text class="txt-item-name text-decor-strong">Наименование товара</text>
                            </div>
                            <div class="row">
                                <text class="txt-item-desc">Пышная юбка стандарт класса</text>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-7 cl-1 text-item-price">
                                <text class="fl-left text-decor-strong" style="color: ">650 грн.</text>
                            </div>
                            <div class="col-sm-4 div-btn-add">
                                <button class="btn-item-add  bg-cl-1 fl-right"><i class="material-icons"
                                                                                  style="font-size: 20px; color: white">shopping_basket</i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="div-item fl-right" style="margin-right: 20px">
                        <div class="row">
                            <img src="{{asset('images/item.jpg')}}" alt="" class="div-img">
                        </div>
                        <div class="div-item-text fl-left">
                            <div class="row">
                                <text class="txt-item-name text-decor-strong">Наименование товара</text>
                            </div>
                            <div class="row">
                                <text class="txt-item-desc">Пышная юбка стандарт класса</text>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-7 cl-1 text-item-price">
                                <text class="fl-left text-decor-strong" style="color: ">650 грн.</text>
                            </div>
                            <div class="col-sm-4 div-btn-add">
                                <button class="btn-item-add  bg-cl-1 fl-right"><i class="material-icons"
                                                                                  style="font-size: 20px; color: white">shopping_basket</i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="div-item fl-right">
                        <div class="row">
                            <img src="{{asset('images/item.jpg')}}" alt="" class="div-img">
                        </div>
                        <div class="div-item-text fl-left">
                            <div class="row">
                                <text class="txt-item-name text-decor-strong">Наименование товара</text>
                            </div>
                            <div class="row">
                                <text class="txt-item-desc">Пышная юбка стандарт класса</text>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-7 cl-1 text-item-price">
                                <text class="fl-left text-decor-strong" style="color: ">650 грн.</text>
                            </div>
                            <div class="col-sm-4 div-btn-add">
                                <button class="btn-item-add  bg-cl-1 fl-right"><i class="material-icons"
                                                                                  style="font-size: 20px; color: white">shopping_basket</i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="div-item">
                        <div class="row">
                            <img src="{{asset('images/item.jpg')}}" alt="" class="div-img">
                        </div>
                        <div class="div-item-text fl-left">
                            <div class="row">
                                <text class="txt-item-name text-decor-strong">Наименование товара</text>
                            </div>
                            <div class="row">
                                <text class="txt-item-desc">Пышная юбка стандарт класса</text>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-7 cl-1 text-item-price">
                                <text class="fl-left text-decor-strong" style="color: ">650 грн.</text>
                            </div>
                            <div class="col-sm-4 div-btn-add">
                                <button class="btn-item-add  bg-cl-1 fl-right"><i class="material-icons"
                                                                                  style="font-size: 20px; color: white">shopping_basket</i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-1"></div>
        <!-- Filters-->
        <div class="col-lg-2 col-filters cl-2">

            <div class="col-filters">
                <text class="cl-1"><b>КЛАССЫ ПЫШНОСТИ</b></text>
                <div class="row filters">
                    <div class="col-sm-2"><input type="checkbox" class="switch_1"></div>
                    <div class="col-sm-10 text-filters">Стандарт</div>
                    <div class="col-sm-2 "><input type="checkbox" class="switch_1"></div>
                    <div class="col-sm-10 text-filters">Премиум</div>
                    <div class="col-sm-2"><input type="checkbox" class="switch_1"></div>
                    <div class="col-sm-10 text-filters">Супер-премиум</div>
                </div>
            </div>

            <div class="col-filters">
                <text class="cl-1"><b>РАЗМЕРЫ</b></text>
                <div class="row filters">
                    <div class="col-sm-2"><input type="checkbox" class="switch_1"></div>
                    <div class="col-sm-10 text-filters">S</div>
                    <div class="col-sm-2"><input type="checkbox" class="switch_1"></div>
                    <div class="col-sm-10 text-filters">P</div>
                    <div class="col-sm-2"><input type="checkbox" class="switch_1"></div>
                    <div class="col-sm-10 text-filters">L</div>
                    <div class="col-sm-2"><input type="checkbox" class="switch_1"></div>
                    <div class="col-sm-10 text-filters">XL</div>
                </div>
            </div>

            <div class="col-filters">
                <text class="cl-1"><b>БРЕНДЫ</b></text>
                <div class="row filters">
                    <div class="col-sm-2"><input type="checkbox" class="switch_1"></div>
                    <div class="col-sm-10 text-filters">Magic Petti</div>
                    <div class="col-sm-2"><input type="checkbox" class="switch_1"></div>
                    <div class="col-sm-10 text-filters">Feikebella</div>
                    <div class="col-sm-2"><input type="checkbox" class="switch_1"></div>
                    <div class="col-sm-10 text-filters">LolliPop</div>
                </div>
            </div>

            <div class="col-filters">
                <text class="cl-1"><b>ЦЕНА</b></text>
                <div class="row filters" style="padding-left: 8.5%">
                    от <input type="text" class="nav-search inpt-price">&nbsp;
                    до <input type="text" class="nav-search inpt-price">
                </div>
            </div>

            <div class="col-filters">
                <text class="cl-1"><b>ЦВЕТА</b></text>
                <div class="row filters"  id="checkboxes">
                    <div class="col-sm-2"><input type="checkbox" class="switch_1" id="chbox-red"
                                                 v-on:change="setColour('chbox-red')"
                                                 style="background-color: rgba(211, 22, 90, 0.26)"></div>
                    <div class="col-sm-10 text-filters">Розовый</div>
                    <div class="col-sm-2"><input type="checkbox" class="switch_1" id="chbox-blue"
                                                 v-on:change="setColour('chbox-blue')"
                                                 style="background-color: rgba(38,171,211,0.25)"></div>
                    <div class="col-sm-10 text-filters">Синий</div>
                    <div class="col-sm-2"><input type="checkbox" class="switch_1" id="chbox-white"
                                                 v-on:change="setColour('chbox-white')"
                                                 style="background-color: rgba(75,75,75,0.25)"></div>
                    <div class="col-sm-10 text-filters">Белый</div>
                </div>
            </div>
            <button class="btn-filters bg-cl-1 fl-right">Искать</button>
        </div>
    </div>
    <!--
    *End of products + filters + sorting
    -->

    <!--
    *Code for button "next items"
    -->
    <div class="row">
        <div class="btn-next">
            <i class="material-icons">&#xE5DB;</i>
        </div>
    </div>
    <!--
    *End of button "next items"
    -->

    <!--
    *Code for about block -> footer
    -->
    <div class="row">
        <div class="col-lg-11">
            <!-- Contacts-->
            <div class="col-md-3" style="padding-left: 0">
                <div class="col-sm-1" style="padding-left: 0"><i class="material-icons cl-1" style="font-size: 20px;">
                        &#xE0CD;</i></div>
                <div class="col-sm-8"><b class="cl-1 text-decor-strong ">КОНТАКТЫ</b></div>
                <div class="text-about">
                    <br>
                    <br>
                    <br>
                    <p>+38 063 365 88 94</p>
                    <p>+38 066 107 86 26</p>
                    <p>+38 096 466 82 21</p>
                    <p>website.moyadonya@gmail.com</p>
                </div>
            </div>
            <!-- Shipping-->
            <div class="col-md-4">
                <div class="col-sm-1" style="padding-left: 0"><i class="material-icons cl-1" style="font-size: 20px">
                        &#xE558;</i></div>
                <div class="col-sm-8"><b class="cl-1 text-decor-strong ">ДОСТАВКА</b></div>
                <div class="text-about">
                    <br>
                    <br>
                    <br>
                    <p>Мы доставляем пышные юбки по всей Украине «Новой Почтой» в течении 1-2 дней.</p>
                    <p>Если Вы находитесь в Одессе, возможен самовывоз товара.</p>
                </div>
            </div>
            <!-- Schedule-->
            <div class="col-md-5">
                <div class="col-sm-1" style="padding-left: 0"><i class="material-icons cl-1" style="font-size: 20px">
                        &#xE192;</i></div>
                <div class="col-sm-8"><b class="cl-1 text-decor-strong ">ГРАФИК РАБОТЫ</b></div>
                <div class="text-about">
                    <br>
                    <br>
                    <br>
                    <p>Мы отправляем товары каждый день с понедельника по субботу «Новой Почтой» в 14:00</p>
                    <p>Если вы заказали товар до 14:00 и хотите оплатить его при получении, мы отправим вам посылку в
                        этот же день.</p>
                    <p>Если вы заказали товар до 14:00 и оплатили его, мы отправим вам посылку в этот же день.</p>
                    <p>Если вы заказали и оплатили товар после 14:00, мы отправим вам посылку на следующий день.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
    <!--
    *End of about block
    -->

    <div class="row text-about" style="margin-bottom: 2%;">
        © 2017 «Моя Доня» Все права защищены
    </div>
</div>
</body>
<script src="{{ asset('js/vue.js') }}"></script>

<script>
    new Vue({
        el: '#checkboxes',
        data: {
            colors: {
                'chbox-red': {1: 'rgba(211, 22, 90, 0.50)', 0: 'rgba(211, 22, 90, 0.25)'},
                'chbox-blue': {1: 'rgba(38,171,211,0.50)', 0: 'rgba(38,171,211,0.25)'},
                'chbox-white': {1: 'rgba(255,255,255,0.5)', 0: 'rgba(75,75,75,0.25)'}
            }
        },
        methods: {

            setColour: function (chId) {
                if (document.getElementById(chId).checked) {
                    document.getElementById(chId).style.background = this.colors[chId][1];
                }
                else {
                    document.getElementById(chId).style.background = this.colors[chId][0];
                }

            }

        }
    })
</script>
<script>
    
document.getElementsByClassName('text-filters')
</script>
<script>



</script>

</html>
