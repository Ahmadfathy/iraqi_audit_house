@extends('front.layout.master')

@section('title')
    {{__('main.home')}}
@endsection

@push('css')
@endpush

@push('js')
@endpush

@section('content')
    <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover show-dots-xs nav-style-1 nav-arrows-thin nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0"
        data-plugin-options="{'autoplay': true, 'autoplayTimeout': 7000}"
        data-dynamic-height="['calc(100vh - 318px)','calc(100vh - 318px)','calc(100vh - 161px)','calc(100vh - 161px)','calc(100vh - 161px)']"
        style="height: 100vh">
        <div class="owl-stage-outer">
            <div class="owl-stage">

                <!-- Carousel Slide 1 -->
                <div class="owl-item position-relative overflow-hidden">
                    <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0"
                        data-appear-animation="kenBurnsToLeft" data-appear-animation-duration="30s"
                        data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show
                        style="background-image: url(img/home_slider/1.jpg); background-size: cover; background-position: center;">
                    </div>
                    <div class="container position-relative z-index-3 h-100">
                        <div class="row align-items-center justify-content-end h-100">
                            <div class="col-lg-8 col-xl-7 text-center text-md-end">
                                {{-- <h2 class="font-weight-bold text-color-default line-height-4 text-4 text-md-6 mb-2 appear-animation"
                                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800"
                                    data-plugin-options="{'minWindowWidth': 0}">PERSONALIZED FINANCIAL PLANNING AND MORE
                                </h2> --}}
                                <h1 class="text-color-dark font-weight-bold text-9 text-md-11 line-height-2 mb-4 appear-animation"
                                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1100"
                                    data-plugin-options="{'minWindowWidth': 0}">
                                    {{__('main.slogan')}}
                                </h1>
                                {{-- <a href="#"
                                    class="btn btn-primary font-weight-bold positive-ls-3 btn-px-5 btn-py-3 appear-animation"
                                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1400"
                                    data-plugin-options="{'minWindowWidth': 0}">GET STARTED</a> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carousel Slide 2 -->
                <div class="owl-item position-relative overflow-hidden">
                    <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0"
                        data-appear-animation="kenBurnsToLeft" data-appear-animation-duration="30s"
                        data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show
                        style="background-image: url(img/home_slider/2.jpg); background-size: cover; background-position: center;">
                    </div>
                    <div class="container position-relative z-index-3 h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-lg-8 col-xl-7 text-center text-md-start">
                                {{-- <h2 class="font-weight-bold text-color-default line-height-4 text-4 text-md-6 mb-2 appear-animation"
                                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800"
                                    data-plugin-options="{'minWindowWidth': 0}">INDEPENDENT FINANCIAL ADVISOR SINCE 1985
                                </h2> --}}
                                <h1 class="text-color-dark font-weight-bold text-9 text-md-11 line-height-2 mb-4 appear-animation"
                                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1100"
                                    data-plugin-options="{'minWindowWidth': 0}">
                                    {{__('main.slogan')}}
                                </h1>
                                {{-- <a href="#"
                                    class="btn btn-primary font-weight-bold positive-ls-3 btn-px-5 btn-py-3 appear-animation"
                                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1400"
                                    data-plugin-options="{'minWindowWidth': 0}">GET STARTED</a> --}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="owl-nav">
            <button type="button" role="presentation" class="owl-prev" aria-label="Previous"></button>
            <button type="button" role="presentation" class="owl-next" aria-label="Next"></button>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 p-0">
                <section class="parallax section section-parallax h-100 m-0" data-plugin-parallax
                    data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}"
                    data-image-src="img/354.jpg" style="min-height: 315px;">
                </section>
            </div>
            <div class="col-lg-6 p-0">
                <div class="h-100 m-0">
                    <div class="row m-0">
                        <div class="col-half-section col-half-section-left py-5">
                            <div class="p-3">
                                <h2 class="font-weight-bold text-8 mb-4 appear-animation"
                                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400"
                                    data-plugin-options="{'minWindowWidth': 0}">{{__('main.about')}}</h2>
                                <p class="text-3-5 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorterPlus"
                                    data-appear-animation-delay="600" data-plugin-options="{'minWindowWidth': 0}">
                                    {{__('main.about_disc_1')}}
                                </p>
                                <a href="{{ url('front/about') }}"
                                    class="btn border rounded-0 px-5 btn-py-3 font-weight-bold positive-ls-2 text-color-dark bg-color-hover-primary text-color-hover-light appear-animation"
                                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800"
                                    data-plugin-options="{'minWindowWidth': 0}">{{__('main.view_more')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 p-0">
                <div class="h-100 m-0">
                    <div class="row m-0">
                        <div class="col-half-section col-half-section-right py-5 ms-auto">
                            <div class="p-3">
                                <h2 class="font-weight-bold text-8 mb-4 appear-animation"
                                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400"
                                    data-plugin-options="{'minWindowWidth': 0}">{{__('main.services')}}</h2>
                                {{-- <p class="text-3-5 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorterPlus"
                                    data-appear-animation-delay="600" data-plugin-options="{'minWindowWidth': 0}">Cras a
                                    elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur
                                    felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit. </p> --}}
                                <a href="{{ url('front/services') }}"
                                    class="btn border rounded-0 px-5 btn-py-3 font-weight-bold positive-ls-2 text-color-dark bg-color-hover-primary text-color-hover-light appear-animation"
                                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800"
                                    data-plugin-options="{'minWindowWidth': 0}">{{__('main.view_more')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 p-0">
                <section class="parallax section section-parallax custom-parallax-bg-pos-left custom-sec-left h-100 m-0"
                    data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}"
                    data-image-src="img/362.jpg" style="min-height: 315px;">
                </section>
            </div>
        </div>
    </div>

    <section class="section overlay overlay-show overlay-color-primary custom-overlay-opacity-85 border-0 m-0"
        style="background: url(img/7359.jpg); background-size: cover; background-position: center;">
        <div class="container position-relative z-index-2 pt-5">
            <div class="row">
                <div class="col text-center">
                    <h2 class="font-weight-bold text-color-light text-11 line-height-3 line-height-md-1 mb-5">
                        {{__('main.statistics')}}
                    </h2>
                </div>
            </div>
            <div class="row counters counters-sm text-6 pb-5 pt-4 mt-5">
                <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="counter">
                        <strong class="text-color-light font-weight-extra-bold text-8 line-height-1" data-to="30"
                            data-append="+">0</strong>
                        <span class="text-color-light font-weight-normal line-height-1 text-0 mt-0">{{__('main.statistic_1')}}</span>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="counter">
                        <strong class="text-color-light font-weight-extra-bold text-8 line-height-1" data-to="240"
                            data-append="+">0</strong>
                        <span class="text-color-light font-weight-normal line-height-1 text-0 mt-0">{{__('main.statistic_2')}}</span>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
                    <div class="counter">
                        <strong class="text-color-light font-weight-extra-bold text-8 line-height-1" data-to="2000"
                            data-append="+">0</strong>
                        <span class="text-color-light font-weight-normal line-height-1 text-0 mt-0">{{__('main.statistic_3')}}</span>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="counter">
                        <strong class="text-color-light font-weight-extra-bold text-8 line-height-1" data-to="20"
                            data-append="+">0</strong>
                        <span class="text-color-light font-weight-normal line-height-1 text-0 mt-0">{{__('main.statistic_4')}}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5 my-5">
        <div class="row">
            <div class="col text-center">
                {{-- <h3 class="font-weight-bold text-color-default line-height-1 text-4 ls-0 mb-5 appear-animation"
                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200"
                    data-plugin-options="{'minWindowWidth': 0}">{{__('main.team')}}</h3> --}}

                <h2 class="text-color-dark font-weight-bold text-8 appear-animation mb-5"
                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400"
                    data-plugin-options="{'minWindowWidth': 0}">{{__('main.team')}}</h2>
            </div>
        </div>
        <div class="row justify-content-center appear-animation" data-appear-animation="fadeInUpShorterPlus"
            data-appear-animation-delay="600" data-plugin-options="{'minWindowWidth': 0}">
            <div class="col-sm-9 col-md-7 col-lg-4">
                <div class="text-decoration-none">
                    <div class="card custom-card-style-2 border-0 border-radius-0">
                        <div class="card-img-top">
                            <img src="img/team.jpg" class="w-100pct img-fluid"
                                alt="John Doe Professional Image" />
                        </div>
                        <div class="card-body text-center">
                            <h4 class="text-color-dark font-weight-normal text-4 mb-3">{{ __('main.team_1') }}</h4>
                            {{-- <h5
                                class="d-block text-color-default font-weight-semibold line-height-1 positive-ls-2 text-2 mb-3">
                                CEO & FOUNDER</h5> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 col-md-7 col-lg-4">
                <div class="text-decoration-none">
                    <div class="card custom-card-style-2 border-0 border-radius-0">
                        <div class="card-img-top">
                            <img src="img/team.jpg" class="w-100pct img-fluid"
                                alt="Janice Doe Professional Image" />
                        </div>
                        <div class="card-body text-center">
                            <h4 class="text-color-dark font-weight-normal text-4 mb-3">{{ __('main.team_2') }}</h4>
                            {{-- <h5
                                class="d-block text-color-default font-weight-semibold line-height-1 positive-ls-2 text-2 mb-3">
                                CHIEF OFFICER</h5> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 col-md-7 col-lg-4">
                <div class="text-decoration-none">
                    <div class="card custom-card-style-2 border-0 border-radius-0">
                        <div class="card-img-top">
                            <img src="img/team.jpg" class="w-100pct img-fluid"
                                alt="Matt Doe Professional Image" />
                        </div>
                        <div class="card-body text-center">
                            <h4 class="text-color-dark font-weight-normal text-4 mb-3">{{ __('main.team_3') }}</h4>
                            {{-- <h5
                                class="d-block text-color-default font-weight-semibold line-height-1 positive-ls-2 text-2 mb-3">
                                RISK ANALYST</h5> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center mt-4">
                <a href="{{ url('front/team') }}"
                    class="btn border rounded-0 px-5 btn-py-3 font-weight-bold positive-ls-2 text-color-dark bg-color-hover-primary text-color-hover-light">
                    {{ __('main.view_more') }}
                </a>
            </div>
        </div>
    </div>

    <section class="section bg-color-grey border-0 m-0">
        <div class="container pt-5 pb-3">
            {{-- <div class="row">
                <div class="col text-center">
                    <h3 class="font-weight-bold text-color-default line-height-1 text-4 ls-0 mb-1">3 BASIC STEPS</h3>
                    <h2 class="text-color-dark font-weight-bold text-8">Why Choose Us?</h2>
                </div>
            </div> --}}
            <div class="row process custom-process justify-content-center mt-4 align-items-start">
                <div class="process-step col-md-9 col-lg-4 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <div class="process-step-circle border-width-3 mb-3">
                        <strong class="process-step-circle-content">
                            <img width="58" height="58" src="img/eye-svgrepo-com.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-stroke-color-primary'}" />
                        </strong>
                    </div>
                    <div class="process-step-content px-4">
                        <h4 class="font-weight-bold text-6 pb-1 mb-2">{{__('main.vision_title')}}</h4>
                        <p class="text-3-5 text-color-dark mb-0">
                            {{__('main.vision_disc')}}    
                        </p>
                    </div>
                </div>
                <div class="process-step col-md-9 col-lg-4 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                    <div class="process-step-circle border-width-3 mb-3">
                        <strong class="process-step-circle-content">
                            <img width="58" height="58" src="img/message-lines-svgrepo-com.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-stroke-color-primary'}" />
                        </strong>
                    </div>
                    <div class="process-step-content px-4">
                        <h4 class="font-weight-bold text-6 pb-1 mb-2">{{__('main.message_title')}}</h4>
                        <p class="text-3-5 text-color-dark mb-0">
                            {{__('main.message_disc')}}    
                        </p>
                    </div>
                </div>
                <div class="process-step col-md-9 col-lg-4 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                    <div class="process-step-circle border-width-3 mb-3">
                        <strong class="process-step-circle-content">
                            <img width="58" height="58" src="img/diamond-svgrepo-com.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                        </strong>
                    </div>
                    <div class="process-step-content px-4">
                        <h4 class="font-weight-bold text-6 pb-1 mb-2">{{__('main.values_title')}}</h4>
                        <p class="text-3-5 text-color-dark mb-0">
                            {{__('main.values_disc')}}    
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
