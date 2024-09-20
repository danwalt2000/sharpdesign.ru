
@extends('parts.base')
 
@section('title',  __('strings.proj_oc'))
@section('description', __('strings.proj_novozar_meta'))

@section('main')
<div class="headingIntro">
    <h1>
        <em>{{ __('strings.proj_oc') }}</em>
        <strong id="mainHeroTitle">CleverMic</strong>
    </h1>
</header>
</header>
<main id="page">
    <div id="content">
        <div class="page-content projectOverViewWide" >
            @include('parts.projects-nav', ['prev' => $prev, 'next' => $next])

            <div class="MyMultiDeviceImages">
                <img class="mockup-new" src="/content/mockup-clevermic.jpg" alt="{{ __('strings.proj_oc') }}" loading="lazy" />
            </div>

            <div class="project-details" style="box-sizing:border-box;">
                <div class="project-details-primary">
                    <h2> {{ __('strings.proj_desc') }}</h2>
                    <div class="project-details-intro">
                        <p>{{ __('strings.proj_clever_1') }}</p>
                    </div>
                    <p>{{ __('strings.proj_clever_2') }}</p>
                </div>
                <div class="project-details-secondary">
                    <div class="project-details-block project-details-sector">
                        <h2>{{ __('strings.proj_type') }}</h2>
                        {{ __('strings.proj_multistore') }}
                    </div>
                    <div class="project-details-block">
                        <h2> {{ __('strings.proj_i_wrote') }}</h2>
                        <ul>
                            <li>{{ __('strings.proj_redesign') }}</li>
                            <li>{{ __('strings.proj_front_back') }}</li>
                            <li>{{ __('strings.proj_modules') }}</li>
                            {{-- <li>{{ __('strings.proj_support_back') }}</li> --}}
                        </ul>

                        <div class="textParagraph" style='text-align:left;padding-left:0; padding-right:0;padding-top:0'>
                            <div style="outline: medium none;cursor:auto">
                                <h2>{{ __('strings.proj_tech') }}</h2>
                                <ul><li>HTML5, CSS3, JS, PHP</li></ul>
                            </div>
                        </div>
                        {{-- <a id="gallery" class="buttonBlockElement" href="#">{{ __('strings.proj_screens') }}</a> --}}
                    </div>
                </div>
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
            { href:'/content/screenshots/novozarievka-main.png', title:'Магазин агрофирмы - главная страница' }, 
            { href:'/content/screenshots/novozarievka-catalog.png', title:'Магазин агрофирмы - каталог товаров' }, 
            { href:'/content/screenshots/novozarievka-product.png', title:'Магазин агрофирмы - карточка товара' }, 
        ] );
    } );
</script>
@stop