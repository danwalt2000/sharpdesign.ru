
@extends('parts.base')
 
@section('title', "Мои навыки, сертификаты и опыт работы")
@section('description', "Здесь собрана краткая информация о моем образовании, моих сертификатах и опыте работы")

@section('main')
<div class="headingIntro">
    <h1>
        <em>Мои навыки и уровень способностей</em>
        <strong id="mainHeroTitle">Опыт</strong>
    </h1>
</header>
</header>
@include("parts.skills")

<!-- Начало раздела опыта -->
<div class="MyFullWidth" style="background-color:#f1f1f2;margin-top:0;margin-bottom:0">
    <div class="page-content">
        <div class="workExpJobContainer">
            <div class="ProjectContentOuter">

                <div class="paddingMy" style="clear:none">
                    <div style="cursor:auto;outline:medium none">
                        <h2>sharpdesign.ru</h2>
                        <p class="para">(этот сайт)</p>
                    </div>

                </div>


            </div>

            <div class="MyCol2">
                <div class="paddingMy" style="clear:none">
                    <h3 class="h2">Фриланс проекты в сфере программирования и дизайна</h3><span><i>С июля 2019 года - по
                            настоящее время</i></span>
                    <p> <br>
                        Я занимаюсь разработкой сайтов и приложений в свободное от основной работы время.
                        Стараюсь писать чистый и понятный код, верстать высококачественные адаптивные сайты с легким
                        и приятным дизайном.
                    </p>
                </div>
                <div class="hrContainer" style="margin-bottom:20px;">
                    <hr class="hrHomePage" style="width:100%">
                </div>
            </div>
        </div>

        <div class="workExpJobContainer">
            <div class="ProjectContentOuter">

                <div class="paddingMy" style="clear:none">
                    <div style="cursor:auto;outline:medium none">
                        <h2>Рекламное агентство "Хамелеон"</h2>
                    </div>
                </div>
            </div>

            <div class="MyCol2">
                <div class="paddingMy" style="clear:none">
                    <h3 class="h2">Web-разработчик</h3><span><i>С июля 2020 года - по ноябрь 2020 года</i></span>
                    <p> <br>
                        Разрабатывал сайты и приложения для клиентов компании. В большинстве случаев требовалось создать приложение с функционалом интернет-магазина либо витрины, работающее на CMS. 
                    </p>
                </div>
                <div class="hrContainer" style="margin-bottom:20px;">
                    <hr class="hrHomePage" style="width:100%">
                </div>
            </div>
        </div>
        <div class="workExpJobContainer">
            <div class="ProjectContentOuter">

                <div class="paddingMy" style="clear:none">
                    <div style="cursor:auto;outline:medium none">
                        <h2>TrueConf</h2>
                    </div>
                </div>
            </div>

            <div class="MyCol2">
                <div class="paddingMy" style="clear:none">
                    <h3 class="h2">Web-разработчик</h3><span><i>С ноября 2020 года - по настоящее время</i></span>
                    <p> <br>
                        Занимаюсь поддержкой проектов разного масштаба и сложности, среди который есть, как крупные мультимагазины на PrestaShop, так и небольшие блоги на Wordpress. 
                    </p>
                </div>

                <div class="hrContainer" style="margin-bottom:20px;">
                    <hr class="hrHomePage" style="width:100%">
                </div>

            </div>
        </div>

    </div>
    <!-- конец раздела опыта -->

    <!-- Начало раздела образования -->

    <section id="text-4" class="widget widget_text">

        <div class="widget-wrap">

            <div class="textwidget">

                <div id="resources">

                    <div class="experienceWrap">
                        <h1 class="introBlockHeading" style="padding-left:0;text-align:left">Образование</h1>
                        <div class="hrContainer" style="margin-bottom:20px;"></div>
                        <div class="left">

                            <h3>
                                Полное высшее образование.
                            </h3>
                            <p>
                                Донецкий национальный университет 2006-2011 годы.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</div>
</section>
<!-- Конец раздела образования -->
@stop