@extends('parts.base')
 

@section('title',  __('strings.proj_fift_title') )
@section('description', __('strings.proj_fift_desc'))
@section('addition')
    <link href="/style/15.css" rel="stylesheet" type="text/css">
@endsection

@section('main')
<div class="headingIntro">
    <h1>
        <em>{{ __('strings.proj_game') }}</em>
        <strong id="mainHeroTitle">{{ __('strings.proj_fift') }}</strong>
    </h1>
</header>
</header>
<main id="page">
    <div id="content">
        <div class="page-content projectOverViewWide" >
            @include('parts.projects-nav', ['prev' => $prev, 'next' => $next])
      
                <div class="MyMultiDeviceImages">
                 <div class="wrap15">
                    <div class="row">
                     <table class="table-bordered" onselectstart="return false" onmousedown="return false">
                        <tbody>
                        <tr>
                            <td class="p-3" id="0"></td>
                            <td class="p-3" id="1"></td>
                            <td class="p-3" id="2"></td>
                            <td class="p-3" id="3"></td>
                        </tr>
                        <tr>
                            <td class="p-3" id="4"></td>
                            <td class="p-3" id="5"></td>
                            <td class="p-3" id="6"></td>
                            <td class="p-3" id="7"></td>
                        </tr>
                        <tr>
                            <td class="p-3" id="8"></td>
                            <td class="p-3" id="9"></td>
                            <td class="p-3" id="10"></td>
                            <td class="p-3" id="11"></td>
                        </tr>
                        <tr>
                            <td class="p-3" id="12"></td>
                            <td class="p-3" id="13"></td>
                            <td class="p-3" id="14"></td>
                            <td class="p-3" id="15"></td>
                        </tr>

                        </tbody>

                     </table>
                        {{-- <div class="records">

                            <h2>Рекордсмены</h2> --}}

                                <?php
                                // $i = 0;
                                //   while ($result1 = mysqli_fetch_array($sql)) {
                                //     $i++;
                                //       if($i % 2){
                                //           $color = "lightgrey";
                                //       } else{
                                //           $color = "none";
                                //       }
                                //    echo "<div class='rec-table' style='background: {$color}'>{$i}. {$result1['name']}: {$result1['score']} {$resultScore}</div>";
                                //   }
                                  ?>

                        {{-- </div> --}}
                    </div>
                
                     <div class="refresh">
                        <div class="count"><p>{{ __('strings.proj_counter') }}:&nbsp; <div id="counter">0</div>
                            </p></div>
                         <a onclick="window.location.reload();" id="asBut" data-title="{{ __('strings.proj_reset') }}"></a>
                     </div>
                    
                     {{-- <form id="myModal" class="modal" method="post"> --}}

                         <!-- Modal content -->
                         <div id="myModal" class="modal-content">
                             <div class="modal-header">
                                 {{-- <span class="close">&times;</span> --}}
                                 <h2>{{ __('strings.proj_congrats') }}</h2>
                             </div>
                             {{-- <div class="modal-body">
                                 <button id="closeModalWin" type="reset">{{ __('strings.dev_cancel') }}</button>
                                 <input type="text" name='winName' id='winName' placeholder="Введите имя" minlength="3" maxlength="20" required>
                             </div>
                             <div class="but_wrap">
                                 <div class="red__but__wrap">
                                 </div>
                                 <div class="green__but__wrap">
                                     <button id="winSub" type="submit" name="score">{{ __('strings.dev_confirm') }}</button>
                                 </div>
                             </div> --}}
                         </div>

                     {{-- </form> --}}

                 </div>






                </div>

                <div class="project-details" style="box-sizing:border-box;">
                    <div class="project-details-primary">
                        <h2>{{ __('strings.proj_desc') }}</h2>
                        <div class="project-details-intro">
                            <p>{{ __('strings.proj_fift_1') }}</p>
                        </div>
                        <p>{{ __('strings.proj_fift_2') }}</p>

                    </div>
                    <div class="project-details-secondary">
                        <div class="project-details-block project-details-sector">
                            <h2>{{ __('strings.proj_type') }}</h2>
                            {{ __('strings.proj_game') }}
                        </div>
                        <div class="project-details-block">
                            <h2> {{ __('strings.proj_i_wrote') }}</h2>
                            <ul>
                                <li>{{ __('strings.proj_lookup') }}</li>
                                <li>{{ __('strings.proj_engine') }}</li>
                                <li>{{ __('strings.proj_steps_system') }}</li>
                                <li>{{ __('strings.proj_integrat') }}</li>
                            </ul>

                            <div class="textParagraph" style='text-align:left;padding-left:0; padding-right:0;padding-top:0'>
                                <div style="outline: medium none;cursor:auto">
                                    <h2>{{ __('strings.proj_tech') }}</h2>
                                    <ul><li>HTML5, CSS3, Javascript</li></ul>
                                </div>
                            </div>

                            @if(App::currentLocale() == 'ru')
                                <a class="buttonBlockElement" href="/blog/15-article">{{ __('strings.dev_more') }}</a>
                            @endif
                        </div>
                    </div>
                </div>



                <script>

                </script>

                <!-- конец описания проекта -->

                <script>
                    window.won = "{{ __('strings.proj_won') }}";
                    window.congrats = "{{ __('strings.proj_full_counts') }}";
                    const docStyle = document.documentElement.style;
                    const aElem = document.querySelector('#asBut');
                    const boundingClientRect = aElem.getBoundingClientRect();

                    aElem.onmousemove = function(e) {

                        const x = e.clientX - boundingClientRect.left;
                        const y = e.clientY - boundingClientRect.top;

                        const xc = boundingClientRect.width/2;
                        const yc = boundingClientRect.height/2;

                        const dx = x - xc;
                        const dy = y - yc;

                        docStyle.setProperty('--rx', `${ dy/-30 }deg`);
                        docStyle.setProperty('--ry', `${ dx/5 }deg`)

                    }

                    aElem.onmouseleave = function(e) {

                        docStyle.setProperty('--ty', '0');
                        docStyle.setProperty('--rx', '0');
                        docStyle.setProperty('--ry', '0');

                    }

                    aElem.onmousedown = function(e) {

                        docStyle.setProperty('--tz', '-25px');

                    }

                    document.body.onmouseup = function(e) {

                        docStyle.setProperty('--tz', '-12px');

                    }
                 </script>
                <script>
                    var modal = document.getElementById("myModal");
                    var btn = document.getElementById("myBtn");
                    var span = document.getElementsByClassName("close")[0];
                    // var closeModalWin = document.getElementById('closeModalWin');
                    var showModalWin = function() {
                        modal.style.display = "block";
                    }

                    span.onclick = function() {
                        modal.style.display = "none";
                    }
                    // closeModalWin.onclick = function() {
                    //     modal.style.display = "none";
                    // }

                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                </script>

                <script src="/scripts/game15.js" type="text/javascript"></script>
    </main>

@stop