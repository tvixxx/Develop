<!DOCTYPE html>
<html lang="ru">

<head>
    <title><?$APPLICATION->ShowTitle()?></title>
    <?$APPLICATION->ShowHead();?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/bootstrap/dist/css/reset.css" rel="stylesheet">
    <link href="/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link href="/bootstrap/dist/css/animate.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/forms/forms.js"></script> <!-- Конфликтовал с js.js (Надо ставить выше)-->
    <script src="/bootstrap/less/astral/ai/js/js.js"></script>
    <link rel="stylesheet" href="/bootstrap/fonts/icomoon/icomoon.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
        (function(){
            if (typeof carrotquest === 'undefined') {
                var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
                s.src = '//cdn.carrotquest.io/api.min.js';
                var x = document.getElementsByTagName('head')[0]; x.appendChild(s);

                carrotquest = {}; window.carrotquestasync = []; carrotquest.settings = {};
                m = ['connect', 'identify', 'track', 'auth'];
                function Build(name, args){return function(){window.carrotquestasync.push(name, arguments);} }
                for (var i = 0; i < m.length; i++) carrotquest[m[i]] = Build(m[i]);
            }
        })();
        carrotquest.connect('1758-2e30ce1ab118168801855c0305e');
    </script>

</head>
<body>
<div id="panel"><?$APPLICATION->ShowPanel();?>
    <?CModule::IncludeModule('iblock');?>
<div id="wrapper">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="logo col-lg-2 col-md-3 col-sm-3 col-xs-3 hidden-xs">
                    <a href="https://astralm.ru/"> <img src="/images/logo.png" alt="logo"></a>
                </div>




                <div id="h-search" class="col-lg-7 col-md-5 col-sm-5 col-xs-5 hidden-xs" >
                    <form action="/search/index.php" id="h-search-form" name="search">
                        <input type="text" id="q" name="q"  value="" placeholder="Поиск по сайту">
                        <input type="submit" id="s" name="s"  value="">
                    </form>
                </div>

                <div class="h-contakt col-lg-3 col-md-4 col-sm-4 col-xs-4 hidden-xs">
                    <div class="h-phone">
                        <p>Телефон в Москве</p>
                        <p>+7 (499) 649-30-42</p>
                    </div>
                    <div class="h-phone">
                        <p>Техподдержка</p>
                        <p>8 (800) 700 86 68</p>
                    </div>
                    <div class="h-phone">
                        <a href="#" class="top-btn" id="top-btn">Заказать звонок</a>
                    </div>
                </div>

            </div>
        </div>
    </header>
<div class="row">
    <div class="navbar navbar-inverse" id="menu">
        <div class="container">
            <div class="navbar-header">
                <a href="https://astralm.ru/" class="navbar-brand hidden-lg hidden-md hidden-sm visible-xs"><img src="/images/logo-long.png" height="30" width="100" style="margin-top:-7px;"></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                    <span class="sr-only">Открыть навигацию</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="responsive-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="/products/">Продукты </a>
                        <ul class="dropdown-menu hidden-xs">
                            <li><a href="/esignature/">Электронная подпись</a></li>
                            <li><a href="/products/report/">Астрал Отчет</a></li>
                            <li><a href="/products/1c-accounting/">1С-Отчетность</a></li>
                            <li><a href="/products/security/">Защита информации</a></li>
                            <li><a href="/products/alco/">Росалкоголь регулирование</a></li>
                            <li><a href="/products/otsenka-usloviy-truda_old/">СОУТ</a></li>
                            <li><a href="/products/skrin-astral/">СКРИН.Астрал</a></li>
                            <li><a href="/products/servis-1s-etp/">Сервис 1С-ЭТП</a></li>
                            <li><a href="/bg/">Банковская гарантия</a></li>
                            <li><a href="/sverka_nds/">Сверка НДС</a></li>
                            <li><a href="/1c-navigator/">1С:Бизнес-Навигатор</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/about/partnership/">Партнерам</a>
                    </li>
                    <li class="dropdown">
                        <a href="/news/">Новости</a>
                        <ul class="dropdown-menu hidden-xs">
                            <li><a href="/news/">Все новости</a></li>
                            <li><a href="/news/electronic-reports/">Электронная отчетность</a></li>
                            <li><a href="/news/certification_center/">Электронная подпись</a></li>
                            <li><a href="/news/astral-report/">1С-Отчетность</a></li>
                            <li><a href="/news/1c-report/">Астрал Отчет</a></li>
                            <li><a href="/news/buh-report/">Бухгалтерская отчетность</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="/blog/">Блоги</a>
                        <ul class="dropdown-menu hidden-xs">
                            <li><a href="/blog/accountant_report/">Бухгалтерская отчетность</a></li>
                            <li><a href="/blog/electronic_reports/">Электронная отчетность</a></li>
                            <li><a href="/blog/astral_report/">Астрал Отчет</a></li>
                            <li><a href="/blog/1c-reports/">1С-Отчетность</a></li>
                            <li><a href="/blog/certification_center/">Электронная подпись</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="/about/">О компании</a>
                        <ul class="dropdown-menu hidden-xs">
                            <li><a href="/about/">О компании</a></li>
                            <li><a href="/about/clients/">Бизнес-партнеры</a></li>
                            <li><a href="/about/reviews/">Отзывы клиентов</a></li>
                            <li><a href="/about/vacancy/">Вакансии</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/contacts/">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<!--    END MENU    -->







