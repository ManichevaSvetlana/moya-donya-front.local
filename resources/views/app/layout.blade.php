<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        @font-face {
            font-family: AAvanteBs; /* Имя шрифта */
            src: url({{asset('fonts/Avante-BS-Bold.ttf')}}); /* Путь к файлу со шрифтом */
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
            width: 155px;
            margin-bottom: 8px;
        }
        .btn-item-add {
            width: 48px;
            height: 24px;
            border-radius: 2px;
            border: solid 1px #00ec47;
        }

        .div-btn-add {
            padding-right: 9px;
        }

        .text-item-price {
            padding-top: 7px;
        }

        .div-img {
            width: 176px;
            height: 128px;
            box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.5);
            border: solid 8px #ffffff;
            padding: 5px;
            margin-bottom: 14px;
        }

        .txt-item-name {
            color: #565656;
        }

        .txt-item-desc {
            margin-top: 8px;
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
        .switch_box{
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            max-width: 200px;
            min-width: 200px;
            height: 200px;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
        }

        /* Switch 1 Specific Styles Start */

        .box_1{
            background: #eee;
        }

        input[type="checkbox"].switch_1{
            font-size: 30px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            width: 3.5em;
            height: 1.5em;
            background: #ddd;
            border-radius: 3em;
            position: relative;
            cursor: pointer;
            outline: none;
            -webkit-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
        }

        input[type="checkbox"].switch_1:checked{
            background: #0ebeff;
        }

        input[type="checkbox"].switch_1:after{
            position: absolute;
            content: "";
            width: 1.5em;
            height: 1.5em;
            border-radius: 50%;
            background: #fff;
            -webkit-box-shadow: 0 0 .25em rgba(0,0,0,.3);
            box-shadow: 0 0 .25em rgba(0,0,0,.3);
            -webkit-transform: scale(.7);
            transform: scale(.7);
            left: 0;
            -webkit-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
        }

        input[type="checkbox"].switch_1:checked:after{
            left: calc(100% - 1.5em);
        }

        /* Switch 1 Specific Style End */


    </style>
</head>
<body>
<div class="container" id="shop">
    <div class="row row-log">
        <div class="col-lg-9"></div>
        <div class="col-lg-3">
            <div class="fl-right">
                <a href="" class="cl-1 log-btn log-in-btn">Войти</a>
                <a href="" class="cl-1 log-btn">Зарегистрироваться</a>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-2"><img src="{{asset('images/logo.png')}}" alt="logo" class="img-logo"></div>
        <div class="col-lg-4 nav-bottom">
            <div class="nav">
                <a href="" class="cl-2 nav-btn text-decor">Меню</a>
                <a href="" class="cl-2 nav-btn text-decor">Мой кабинет</a>
                <a href="" class="cl-2 nav-btn text-decor">О нас</a>
            </div>
        </div>

        <div class="col-lg-4 "><input type="text" class="nav-search fl-right" placeholder="Поиск"></div>
        <a class="col-lg-2 cl-1 nav-basket" href="">
            <div class="fl-right">
                <div class="col-sm-1"><i class="material-icons" style="font-size: 20px">shopping_basket</i></div>
                <div class="col-sm-8"><b class="text-decor">КОРЗИНА</b></div>
            </div>
        </a>
    </div>
    <div class="row">
        <div class="col-lg-10 colour-3">
            <div class="row row-slct">
                <div class="col-lg-8 colour-2">
                    <select name="" id="" class="category-slct form-control cl-1 text-decor-strong">
                        <option value="">ВСЕ ТОВАРЫ</option>
                        <option value="">Пышные юбки</option>
                        <option value="">Регланы</option>
                    </select>
                </div>
                <div class="col-lg-4 colour-1">
                    <select name="" id="" class="slct-sort form-control cl-1 fl-right">
                        <option value="">Сортировать по:</option>
                        <option value="">цена ↑</option>
                        <option value="">цена ↓</option>
                    </select>
                </div>
            </div>
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
        <div class="col-lg-2 colour-2">
            <text>КЛАССЫ ПЫШНОСТИ</text>
            <div class="switch_box box_1">
                <input type="checkbox" class="switch_1">
            </div>
        </div>
    </div>
</div>
</body>
</html>
