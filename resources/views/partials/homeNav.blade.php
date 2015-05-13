<nav class="main1">
    <div class="container">
        <a class="brand" style="padding:5px 10px;" href="{!! URL::to('') !!}"><img width="" src="{{url('/images/sites/eduline-logo.png')}}"></a>
        <ul class="main1-nav">
            <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{!! URL::to('about') !!}">Бидний тухай</a></li>
            <li class="{{ Request::is('#') ? 'active' : '' }}"><a href="#">Фото цомог</a></li>
            <li class="{{ Request::is('school') ? 'active' : '' }}"><a href="/school">Сургуулиуд</a></li>
            <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{!! URL::to('contact') !!}">Холбоо барих</a></li>
            <li class="{{ Request::is('#') ? 'active' : '' }}"><a href="#">Танд хэрэгтэй</a></li>
        </ul>
    </div>
</nav>
<nav id="main2" class="main2 navbar navbar-default">
    <div class="container">

        <div id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ Request::is('/') ? 'active' : '' }} text-uppercase"><a href="/">Эхлэл</a></li>
                <li class="{{ Request::is('articles') ? 'active' : '' }} text-uppercase"><a href="/articles">Таны сонорт</a></li>
                <li class="{{ Request::is('usa') ? 'active' : '' }} text-uppercase"><a href="/usa">Америк улс</a></li>
                <li class="{{ Request::is('korea') ? 'active' : '' }} text-uppercase"><a href="/usa">Солонгос улс</a></li>
                <li class="{{ Request::is('australia') ? 'active' : '' }} text-uppercase"><a href="/usa">Австрали улс</a></li>
                <li class="{{ Request::is('canada') ? 'active' : '' }} text-uppercase"><a href="/usa">Канад улс</a></li>
                <li class="{{ Request::is('japan') ? 'active' : '' }} text-uppercase"><a href="/usa">Япон улс</a></li>
            </ul>
        </div>

    </div>
</nav>
<nav id="fixedbar" class="main2-fixed">
    <div class="main2-fixed-bg"></div>
    <div class="container">
        <ul class="main2-nav-fixed">
            <li class="active"><a href="{!! URL::to('') !!}">Эхлэл</a></li>
            <li><a href="#">Таны сонорт</a></li>
            <li><a href="#">Америк улс</a></li>
            <li><a href="#">Солонгос улс</a></li>
            <li><a href="#">Австрали улс</a></li>
            <li><a href="#">Канад улс</a></li>
            <li><a href="#">Япон улс</a></li>
        </ul>
    </div>
</nav>

{{--<script type="text/javascript">--}}
    {{--$(document).ready(function(){--}}
        {{--$('#main2 a, #fixedbar a').on('click', function(e) {--}}
            {{--e.preventDefault();--}}
        {{--});--}}

        {{--$(window).on('scroll',function() {--}}
            {{--var scrolltop = $(this).scrollTop();--}}

            {{--if(scrolltop >= 90) {--}}
                {{--$('#fixedbar').fadeIn(200);--}}
            {{--}--}}

            {{--else if(scrolltop <= 90) {--}}
                {{--$('#fixedbar').fadeOut(200);--}}
            {{--}--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}