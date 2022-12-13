@extends('layouts.master')
@section('content')
<section class="portfolio spad">
    <div class="container">
        <div class="row portfolio__gallery">
            @foreach($videos as $video)  
            <div class="col-lg-4 col-md-6 col-sm-6 mix photography">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="{{ asset('assets/frontend/img/'.$video->thumbnail) }}">
                        <a href="{{ $video->youtube }}" class="play-btn video-popup"><i
                                class="fa fa-play"></i></a>
                    </div>
                    <div class="portfolio__item__text">
                        <h4>{{ $video->name }}</h4>
                        <ul>
                            @foreach ($categories as $category)  
                                @if($video->categories->contains($category))    
                                    <li>{{ $category->name }}</li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="pagination__option">
                    {{ $videos->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection