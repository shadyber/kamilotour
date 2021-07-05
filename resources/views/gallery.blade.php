@extends('layouts.app')
@section('title','Our Photo Gallery')
@section('content')
    <!-- Start Gallery Area -->
    <section class="gallery__area ptb-100 bg-white">
        <div class="container">
            <!-- Start Our Section Title area -->
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="section__title text-center">
                        <h2 class="title__line">our <span class="text-theme">gallery</span></h2>
                        <p>Checkout our Photo Gallery  </p>
                    </div>
                </div>
            </div>
            <div class="row mb-30">
                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
                    <ul id="htc__filters" class="htc__port__filter__nav">
                        <li data-filter="*" class="is-checked">All</li>
                        @foreach($albums as $album)
                        <li data-filter=".album-{{$album->id}}">{{$album->title}}</li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <!-- End Our Section Title area -->
            <div class="row">
                <div class="htc__portfolio__container clearfix mt-20">
                    @foreach($photos as $photo)

                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 pro__item webdesign album-1" style="position: absolute; left: 0px; top: 0px;">
                            <div class="portfolio">
                                <div class="portfolio__inner">
                                    <div class="htc__hover__fornt">
                                        <img src="/images/portfolio/width-variation/1.jpg" alt="portfolio images">
                                    </div>
                                    <div class="htc__hover__information">
                                        <div class="htc__hover__action">
                                            <a href="/images/portfolio/width-variation/1.jpg" data-lightbox="tfportimg" data-title="My caption"><i class="zmdi zmdi-zoom-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                   @endforeach

                </div>
            </div>
        </div>
    </section>
@endsection
