@extends('app2')

@section('school')
    <div style="background:url('{{ $school->banner }}') no-repeat center top;"></div>
    <div class="container">
        <div class="page-header">
            <h3>{{ $school->name }}</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <article>
                    <p><a>{!! Html::image($flagPath, '', array('height' => 40,'class' => 'flag')) !!}</a></p>
                    <section>
                        <a>Сургуулийн зурэглэл: {{ $school->rank }}</a>
                        <p>{!! str_limit( $school->description, 650) !!}</p>
                    </section>
                </article>
            </div>
            <div class="col-md-6">
                <iframe width="440" height="248" src="//www.youtube.com/embed/{{ $school->media }}" frameborder="0" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
    <div class="container space">
        {!! $school->file !!}
    </div>
    <div class="space"></div>

@stop