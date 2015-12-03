

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="forms.js"></script> <!-- Конфликтовал с js.js (Надо ставить выше)-->
    <script src="js/js.js"></script>
    <link rel="stylesheet" href="fonts/icomoon/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
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
<div id="wrapper">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="logo col-lg-2 col-md-3 col-sm-3 col-xs-3 hidden-xs">
                    <a href="https://astralm.ru/"> <img src="images/logo.png" alt="logo"></a>
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
                    <a href="https://astralm.ru/" class="navbar-brand hidden-lg hidden-md hidden-sm visible-xs"><img src="images/logo-long.png" height="30" width="100" style="margin-top:-7px;"></a>
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
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <!--    END MENU    -->


  

    <div class="container">
        <aside class="col-lg-3 col-md-3 hidden-sm hidden-xs">
            <div id="left-menu-ecp">
                <div class="left-menu-link">
                    <a class="active" href="/esignature/"><span>1 test</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/primenenie/egais"><span>1 test</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/voprosy-i-otvety/"><span>1 test</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/primenenie/"><span>1 test</span></a><br>
                    <a href="/esignature/primenenie/dlya-otchetnosti/">2 test</a><br>
                    <a href="/esignature/primenenie/dlya-dokumentooborota/">3 test</a><br>
                    <a href="/esignature/primenenie/dlya-torgov-(auktsiony)/">4 test</a><br>
                    <a href="/esignature/primenenie/dlya-zakupok-(tendery)">4 test</a><br>
                    <a href="/esignature/primenenie/lichnaya-podpis/">5 test</a><br>
                </div>
                <div class="clear"></div>
            </div>
        </aside>











        <div class="open_menu hidden-lg hidden-md">
        </div>
        <aside id="aside-ecp" class="col-lg-3 col-md-3">
            <a class="ac_popap_close close_menu" href="#"></a>
            <div id="left-menu-ecp" class=" modal_menu">
                <div class="left-menu-link">
                    <a class="active" href="/esignature/"><span>ЭЦП</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/primenenie/egais"><span>ЭЦП для ЕГАИС</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/voprosy-i-otvety/"><span>ВОПРОСЫ И ОТВЕТЫ</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/primenenie/"><span>ПРИМЕНЕНИЕ</span></a><br>
                    <a href="/esignature/primenenie/dlya-otchetnosti/">Отчетность</a><br>
                    <a href="/esignature/primenenie/dlya-dokumentooborota/">Документооборот</a><br>
                    <a href="/esignature/primenenie/dlya-torgov-(auktsiony)/">Торги</a><br>
                    <a href="/esignature/primenenie/dlya-zakupok-(tendery)">Закупки</a><br>
                    <a href="/esignature/primenenie/lichnaya-podpis/">Личная подпись</a><br>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/ceny/"><span>ЦЕНЫ</span></a><br>
                    <a href="/esignature/ceny/tarify/">Тарифы</a><br>
                    <a href="/esignature/ceny/dopolnitelno/">Дополнительно</a><br>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/poryadok-polucheniya/"><span>ПОРЯДОК ПОЛУЧЕНИЯ</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/mesta-polucheniya/"><span>МЕСТА ПОЛУЧЕНИЯ</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/soprovozhdenie-torgov/"><span>СОПРОВОЖДЕНИЕ ТОРГОВ</span></a>
                    <a href=""></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/spisok-ploshchadok/"><span>СПИСОК ПЛОЩАДОК</span></a>
                </div>
                <div class="clear"></div>

            </div>
        </aside>









  <!-- #WORK AREA# -->
        <section id="right-content-ecp" class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <!-- Header Article -->
            <article class="top-content clearfix">
                <!-- Header Titles -->
                <header>
                    <h2 class="header-law-title">
                        Федеральный закон № 134
                    </h2>
                    <h4 class="header-about-law">
                        О законе ФЗ № 134
                    </h4>
                </header>
                <!-- //Header Titles -->

                <!-- Header Section -->
               <section class="header-section-description">
                    <p class="law-description">
                       Федеральный закон 134 ФЗ от 28.06.2013 «О внесении изменений в отдельные законодательные акты
                       Российской Федерации в части противодействия незаконным финансовым операциям», состоит из 
                       24 статей, одна из которых в настоящий момент утратила силу. Закон 134 ФЗ изменяет ряд статей ФЗ 
                       №115 от 7.08.2001, регулирующего вопросы противодействия легализации (отмыванию) доходов,
                       полученных преступным путем и финансирования терроризма, вносит поправки в законодательство,
                       регулирующее деятельность микрофинансовых организацй и т.д.   
                    </p> 
                   
                   <p class="law-description">Пп. А п. 2 ст. 12 закона № 134ФЗ вносит изменения в ст. 174 Налогового кодекса, устанавливая тем
                       самым обязанность передачи налоговой отчетности исключительно в электронной форме лицами,
                       являющимися налогоплательщиками. 
                   </p>
               </section>
                <!-- //Header Section -->
            </article>
            <!-- //Header Article -->

            <!-- Main Article -->
            <article class="main-content">
                <!-- Header Main -->
                <header>
                    <h3 class="main-law-title"> 
                        Федеральный закон № 134
                    </h3>
                    <h4 class="main-about-law"> 
                        Статья 12
                    </h4>
                </header>
                <!-- //Header Main -->

                <!-- Main Section -->
                <section class="main-section-description">
                    <p>Внести в часть вторую Налогового кодекса Российской Федерации (Собрание законодательства
                    Российской Федерации, 2000, N 32, ст. 3340; 2001, N 1, ст. 18; 2002, N 22, ст. 2026; 2003, N 28, ст.
                    2886; N 50, ст. 4849; 2005, N 30, ст. 3130; 2006, N 31, ст. 3436; 2008, N 42, ст. 4697; N 48, ст. 5519;
                    2009, N 51, ст. 6155; 2010, N 31, ст. 4198; N 48, ст. 6247; 2011, N 27, ст. 3881; N 30, ст. 4593; 2012,
                    N 27, ст. 3588; N 31, ст. 4334; N 53, ст. 7619; 2013, N 14, ст. 1647) следующие изменения:
                    </p>

                    <p>
                    2) в статье 174: <br>
                    а) пункт 5 изложить в следующей редакции: <br>
                    5. Налогоплательщики (в том числе являющиеся налоговыми агентами), а также лица, указанные в пункте 5
                    статьи 173 настоящего Кодекса, обязаны представить в налоговые органы по месту своего учета соответствующую
                     налоговую декларацию по установленному формату в электронной форме по телекоммуникационным каналам связи
                    через оператора электронного документооборота в срок не позднее 20-го числа месяца, следующего за истекшим
                    налоговым периодом, если иное не предусмотрено настоящей главой. 
                    </p>

                    <p>Налоговые агенты, не являющиеся налогоплательщиками или являющиеся налогоплательщиками, освобожденными
                    от исполнения обязанностей налогоплательщика, связанных с исчислением и уплатой налога, обязаны представить в
                    налоговые органы по месту своего учета соответствующую налоговую декларацию в срок не позднее 20-го числа
                    месяца, следующего за истекшим налоговым периодом</p>
                </section>
                <!-- //Main Section -->

                <!-- Footer Section -->
                    <section class="footer-section-description">
                        <p class="law-description-footer">
                            Сферой применения Федерального закона № 134ФЗ от 28.06.2013 является  регулирование
                            отношений, возникающих между юридическими лицами (или индивидуальными предпринимателями)
                            и государственными контролирующими органами в процессе осуществления последними функций
                            исполнительной власти, возложенной на них действующим законодательством.
                        </p>
                        <p class="law-description-footer"> 
                            Положения Федерального закона не могут быть применены в случае реализации исполнительными
                            органами контролирующих мероприятий, проводимых по инициативе юридических лиц или
                            индивидуальных предпринимателей. 
                        
                        </p>
                        <p class="law-description-footer">
                            В случае нарушения норм Налогового кодекса РФ, изменения в которые внесены ФЗ № 134,
                            юридическое лицо (или индивидуальный предприниматель), подавший отчетность в бумажной форме,
                            будет оштрафован за несоблюдение действующего законодательства. 
                        </p>
                        <a class="btn-order">Заказать ЭО</a>
                    </section>
                <!-- //Footer Section -->
            </article>
            <!-- //Main Article -->


        </section>
    
<!-- # END WORK AREA# -->
















    </div>
    <!--    FOOTER    -->
    <footer id="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 hidden-xs">
                        <h4 class="footer_title">Основные разделы</h4>
                        <nav class="footer_nav">
                            <ul>
                                <li><a href="/products/" class="nav_link"Продукты</a></li>
                                <li><a href="/about/partnership/" class="nav_link">Партнерам</a></li>
                                <li><a href="/news/" class="nav_link">Новости</a></li>
                                <li><a href="/blog/" class="nav_link">Блоги</a></li>
                                <li><a href="/about/" class="nav_link">О компании</a></li>
                                <li><a href="/contacts/" class="nav_link">Контакты</a></li>
                                <li><a href="/privacy_security/" class="nav_link">Конфидициальность</a></li>
                                <li><a href="/feedback/" class="nav_link">Обратная связь</a></li>
                                <li><a href="/about/vacancy/" class="nav_link">Вакансии</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 hidden-xs">
                        <h4 class="footer_title">Продукты</h4>
                        <nav class="footer_nav">
                            <ul>
                                <li><a href="/esignature/" class="nav_link">Электронная подпись</a></li>
                                <li><a href="/products/report/" class="nav_link">Астрал Отчет</a></li>
                                <li><a href="/products/1c-accounting/" class="nav_link">1С-Отчетность</a></li>
                                <li><a href="/products/security/" class="nav_link">Защита информации</a></li>
                                <li><a href="/products/alco/" class="nav_link">РАР</a></li>
                                <li><a href="/products/otsenka-usloviy-truda_old/" class="nav_link">СОУТ</a></li>
                                <li><a href="/products/skrin-astral/" class="nav_link">СКРИН.Астрал</a></li>
                                <li><a href="/products/servis-1s-etp/" class="nav_link">Сервис 1С-ЭТП</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 hidden-xs">
                        <h4 class="footer_title">Техническая поддержка</h4>
                        <nav class="footer_nav tp">
                            <ul>
                                <li>
                                    <div><span>«Астрал Отчет»</span><br/></div>
                                    <div><abbr title="Техническая поддержка Астрал Отчет">+7 (495) 663-73-58, доб. 10</abbr><br/></div>
                                    <div><abbr title="Техническая поддержка Астрал Отчет"><a href="mailto:#">support@astralnalog.ru</a></abbr></div>
                                </li>
                                <li>
                                    <div><span>«1С Отчетность»</span><br/></div>
                                    <div><abbr title="Техническая поддержка 1С Отчетность">+7 (495) 663-73-58, доб. 20</abbr><br/></div>
                                    <div><abbr title="Техническая поддержка 1С Отчетность"><a href="mailto:#">1c@astralnalog.ru</a></abbr></div>
                                </li>
                                <li>
                                    <div><span>«Электронные торги»</span><br/></div>
                                    <div><abbr title="Электронные торги">+7 (495) 663-73-58, доб. 11</abbr><br/></div>
                                </li>
                                <li>
                                    <div><span>Техподдержка</span><br/></div>
                                    <div><abbr title="Техподдержка">8 (800) 700-86-68</abbr><br/></div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 hidden-xs">
                        <h4 class="footer_title">Контакты</h4>
                        <nav class="footer_nav">
                            <ul>
                                <li>
                                    <address id="add-phone">
                                        <b>Остались вопросы?</b><br>
                                        <abbr title="Телефон в Москве"><b>+7 (499) 649-30-42</b></abbr>
                                    </address>
                                </li>
                                <li>
                                    <address>
                                        <strong style="font-weight:bold;">ООО «Астрал-М»</strong><br>
                                        111123, г. Москва, Шоссе Энтузиастов д. 56, стр. 32<br>
                                        офис 211 <br>
                                        <a href="mailto:#">moscow@astralnalog.ru</a>
                                    </address>

                                </li>
                                <li>
                                    <address>
                                        <strong style="font-weight:bold;">Рабочие дни:</strong><br>
                                        Понедельник-Пятница<br>
                                        с 9:00 до 18:00<br>
                                    </address>
                                </li>
                                <li><a href="/contacts/">Все контакты</a></li>
                                <li><a href="/search/map.php">Карта сайта</a></li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
        <!-- ARROW FIXED -->
        <div class="arrow_up_fix_none" id="arrow_up"></div>
        <!-- ARROW FIXED -->
        <div class="social">
            <div class="hidden-lg hidden-sm hidden-md visible-xs">
                <h5 class="footer_link">Рабочие дни:</h5>
                <div class="f-social centered">
                    <p class="footer_span">Понедельник-Пятница<br></p>
                    <p class="footer_span">с 9:00 до 18:00</p>
                </div>
            </div>

            <div class="hidden-lg hidden-sm hidden-md visible-xs">
                <h5 class="footer_link">Телефон</h5>
                <div class="f-social">
                    <abbr title="Phone"><b>+7 (499) 649-30-42</b></abbr>
                </div>
            </div>
            <br/>
            <h5 class="footer_link">Мы в социальных сетях</h5>
            <div class="f-social">
                <a href="http://vk.com/astralm" class="social_link social_link_vk" target="_blank">&nbsp;</a>
                <a href="http://facebook.com/astralmoscow" class="social_link social_link_fb" target="_blank">&nbsp;</a>
                <a href="http://twitter.com/MoscowAstral" class="social_link social_link_google" target="_blank">&nbsp;</a>
                <a href="http://www.youtube.com/channel/UCCzvlCiq1AlX_HiH31LXPvg/" class="social_link social_link_youtube" target="_blank">&nbsp;</a>
            </div>
        </div>
        <!-- <a href="#x" class="overlay" id="win1" style="opacity: 1;z-index: 1 !important;cursor: pointer;"></a> -->
    </footer>
























    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery-css-transform.min.js"></script>
    <script src="js/jquery-animate-css-rotate-scale.min.js"></script>
    <script src="js/jquery.quicksand.min.js"></script>

</body>
</html>