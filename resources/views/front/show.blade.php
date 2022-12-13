@extends('layouts.master')
@section('content')
<section class="portfolio spad">
    <div class="container">
        <div class="row portfolio__gallery">
            @foreach($category->videos as $video)  
            <div class="col-lg-4 col-md-6 col-sm-6 mix photography">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="{{ asset('assets/frontend/img/'.$video->thumbnail) }}">
                        <a href="{{ $video->youtube }}" class="play-btn video-popup"><i
                                class="fa fa-play"></i></a>
                    </div>
                    <div class="portfolio__item__text">
                        <h4>{{ $video->name }}</h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection