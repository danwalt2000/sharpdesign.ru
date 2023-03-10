@extends('parts.base')
 
@section('title', "Сайт транспортной компании")
@section('description', "Я создал сайт транспортной компании, который вышел в топ по региону даже без продвижения")

@section('main')
<div class="headingIntro">
    <h1>
        <em>Многостраничный сайт</em>
        <strong id="mainHeroTitle">Drive-don</strong>
    </h1>
</header>
</header>
<main id="page">
    <div id="content">
        <div class="page-content projectOverViewWide" >
            @include('parts.projects-nav', ['prev' => $prev, 'next' => $next])

            <div class="MyMultiDeviceImages">
                <img src="/content/drive-don-wall.jpg" alt="Drive-don на разных устройствах"/>
            </div>

    <!-- Описание проекта -->
    <div class="project-details" style="box-sizing:border-box;">
        <div class="project-details-primary">
            <h2>Описание проекта</h2>
            <div class="project-details-intro">
                <p>Don-drive - это многостраничный сайт транспортной компании, разработанный без использования CMS. </p>
            </div>
            <p>Для улучшения пользовательского опыта дизайн сайта составлен в красно-сиреневых тонах, на ресурсе активно используются широкие подложки и эффект размытия, а на странице контактов добавлен скрипт Яндекс-карты.</p>

        </div>
        <div class="project-details-secondary">
            <div class="project-details-block project-details-sector">
                <h2>Тип проекта</h2>
                Многостраничный сайт
            </div>
            <div class="project-details-block">
                <h2>Что я написал</h2>
                <ul>
                    <li>Верстка сайта</li>
                    <li>Скрипты и сложные анимации</li>
                    <li>Адаптивный дизайн</li>
                </ul>

                <div class="textParagraph" style='text-align:left;padding-left:0; padding-right:0;padding-top:0'>
                    <div style="outline: medium none;cursor:auto">
                        <h2>Использованные технологии</h2>
                        <ul><li>HTML, CSS, JS, JQuery, Ajax, Photoshop</li></ul>
                    </div>
                </div>

                <a id="gallery" class="buttonBlockElement" href="#">Посмотреть скриншоты</a>
                <a href="https://danwalt2000.000webhostapp.com" rel="nofollow noopener noreferrer" class="buttonBlockElement">Перейти на сайт</a>
            </div>
        </div>
    </div>
</main>
<script src="/scripts/jquery2.14.js"></script>
<script src="/scripts/swiperbox.js"></script>
<script>
    $( '#gallery' ).click( function( e ) {
        e.preventDefault();
        $.swipebox( [
            { href:'/content/screenshots/drive-don-home.png', title:'Сайт перевозчика - главная страница' }, 
            { href:'/content/screenshots/drive-don-directions.png', title:'Сайт перевозчика - направления поездок' }, 
            { href:'/content/screenshots/drive-don-services.png', title:'Сайт перевозчика - услуги' }, 
            { href:'/content/screenshots/drive-don-contacts.png', title:'Сайт перевозчика - контакты' }, 
        ] );
    } );
</script>
@stop