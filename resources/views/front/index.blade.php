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
        style="height: calc(100vh - 318px);">
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
                                <h2 class="font-weight-bold text-color-default line-height-4 text-4 text-md-6 mb-2 appear-animation"
                                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800"
                                    data-plugin-options="{'minWindowWidth': 0}">PERSONALIZED FINANCIAL PLANNING AND MORE
                                </h2>
                                <h1 class="text-color-dark font-weight-bold text-9 text-md-11 line-height-2 mb-4 appear-animation"
                                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1100"
                                    data-plugin-options="{'minWindowWidth': 0}">Accountant and Financial Planner in New york
                                </h1>
                                <a href="#"
                                    class="btn btn-primary font-weight-bold positive-ls-3 btn-px-5 btn-py-3 appear-animation"
                                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1400"
                                    data-plugin-options="{'minWindowWidth': 0}">GET STARTED</a>
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
                                <h2 class="font-weight-bold text-color-default line-height-4 text-4 text-md-6 mb-2 appear-animation"
                                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800"
                                    data-plugin-options="{'minWindowWidth': 0}">INDEPENDENT FINANCIAL ADVISOR SINCE 1985
                                </h2>
                                <h1 class="text-color-dark font-weight-bold text-9 text-md-11 line-height-2 mb-4 appear-animation"
                                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1100"
                                    data-plugin-options="{'minWindowWidth': 0}">Wealth Management and Best Financial
                                    Planning</h1>
                                <a href="#"
                                    class="btn btn-primary font-weight-bold positive-ls-3 btn-px-5 btn-py-3 appear-animation"
                                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1400"
                                    data-plugin-options="{'minWindowWidth': 0}">GET STARTED</a>
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

    <div id="home-intro" class="home-intro bg-dark m-0">
        <div class="container py-2">
            <div class="row align-items-center text-center text-md-start">
                <div class="col-lg-9 mb-3 mb-lg-0">
                    <p class="text-color-light text-5-5 line-height-4 mb-0">
                        The fastest way to expand your financial life with the investment leader.
                    <p class="text-color-light opacity-8 font-weight-light text-3-5 px-4 px-md-0 mb-3 mb-lg-0">Learn more
                        about our strategy and how we can help you</span>
                    </p>
                </div>
                <div class="col-lg-3 text-center text-md-start text-lg-end">
                    <a href="{{ url('front/contact') }}"
                        class="btn text-color-hover-light bg-color-light bg-color-hover-primary font-weight-bold text-3 positive-ls-3 btn-px-5 btn-py-3 appear-animation"
                        data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="2200"
                        data-plugin-options="{'minWindowWidth': 0}">GET A QUOTE</a>
                </div>
            </div>
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
                                <h3 class="font-weight-semibold ls-0 text-color-default text-4 mb-0 appear-animation"
                                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200"
                                    data-plugin-options="{'minWindowWidth': 0}">MEET PORTO FINANCE</h3>
                                <h2 class="font-weight-bold text-8 mb-4 appear-animation"
                                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400"
                                    data-plugin-options="{'minWindowWidth': 0}">Investiments Management</h2>
                                <p class="text-3-5 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorterPlus"
                                    data-appear-animation-delay="600" data-plugin-options="{'minWindowWidth': 0}">Cras a
                                    elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur
                                    felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit
                                    vehicula leo, vel efficitur fel.</p>
                                <a href="{{ url('front/services') }}"
                                    class="btn border rounded-0 px-5 btn-py-3 font-weight-bold positive-ls-2 text-color-dark bg-color-hover-primary text-color-hover-light appear-animation"
                                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800"
                                    data-plugin-options="{'minWindowWidth': 0}">READ MORE</a>
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
                                <h3 class="font-weight-semibold ls-0 text-color-default text-4 mb-0 appear-animation"
                                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200"
                                    data-plugin-options="{'minWindowWidth': 0}">WHAT WE CAN DO FOR YOU</h3>
                                <h2 class="font-weight-bold text-8 mb-4 appear-animation"
                                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400"
                                    data-plugin-options="{'minWindowWidth': 0}">Financial Services</h2>
                                <p class="text-3-5 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorterPlus"
                                    data-appear-animation-delay="600" data-plugin-options="{'minWindowWidth': 0}">Cras a
                                    elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur
                                    felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit. </p>
                                <a href="{{ url('front/services') }}"
                                    class="btn border rounded-0 px-5 btn-py-3 font-weight-bold positive-ls-2 text-color-dark bg-color-hover-primary text-color-hover-light appear-animation"
                                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800"
                                    data-plugin-options="{'minWindowWidth': 0}">READ MORE</a>
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
        <div class="row">
            <div class="col-lg-6 p-0">
                <section class="parallax section section-parallax custom-parallax-bg-pos-left custom-sec-left h-100 m-0"
                    data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}"
                    data-image-src="img/2148194687.jpg" style="min-height: 315px;">
                </section>
            </div>
            <div class="col-lg-6 p-0">
                <div class="h-100 m-0">
                    <div class="row m-0">
                        <div class="col-half-section col-half-section-left py-5">
                            <div class="p-3">
                                <h3 class="font-weight-semibold ls-0 text-color-default text-4 mb-0 appear-animation"
                                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200"
                                    data-plugin-options="{'minWindowWidth': 0}">GET STARTED</h3>
                                <h2 class="font-weight-bold text-8 mb-4 appear-animation"
                                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400"
                                    data-plugin-options="{'minWindowWidth': 0}">Business Planning</h2>
                                <p class="text-3-5 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorterPlus"
                                    data-appear-animation-delay="600" data-plugin-options="{'minWindowWidth': 0}">Cras a
                                    elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur
                                    felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit
                                    vehicula leo, vel efficitur fel.</p>
                                <a href="{{ url('front/services') }}"
                                    class="btn border rounded-0 px-5 btn-py-3 font-weight-bold positive-ls-2 text-color-dark bg-color-hover-primary text-color-hover-light appear-animation"
                                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800"
                                    data-plugin-options="{'minWindowWidth': 0}">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section overlay overlay-show overlay-color-primary custom-overlay-opacity-85 border-0 m-0"
        style="background: url(img/7359.jpg); background-size: cover; background-position: center;">
        <div class="container position-relative z-index-2 pt-5">
            <div class="row">
                <div class="col text-center">
                    <h3 class="font-weight-bold text-color-light text-4-5 ls-0 mb-2">MEET PORTO FINANCE</h3>
                    <h2 class="font-weight-bold text-color-light text-11 line-height-3 line-height-md-1 mb-5">Accountant
                        and Financial Planner in New York</h2>
                    <p class="text-color-light text-3-5 line-height-9">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget
                        orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc.
                        In nibh ipsum, blandit id faucibus ac, finibus vitae dui. Orci sempre vestibulimun. </p>
                </div>
            </div>
            <div class="row counters counters-sm text-6 pb-5 pt-4 mt-5">
                <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="counter">
                        <strong class="text-color-light font-weight-extra-bold text-8 line-height-1" data-to="30"
                            data-append="+">0</strong>
                        <span class="text-color-light font-weight-normal line-height-1 text-0 mt-0">Business Year</span>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="counter">
                        <strong class="text-color-light font-weight-extra-bold text-8 line-height-1" data-to="240"
                            data-append="+">0</strong>
                        <span class="text-color-light font-weight-normal line-height-1 text-0 mt-0">Satiesfied
                            Clients</span>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
                    <div class="counter">
                        <strong class="text-color-light font-weight-extra-bold text-8 line-height-1" data-to="2000"
                            data-append="+">0</strong>
                        <span class="text-color-light font-weight-normal line-height-1 text-0 mt-0">Successfull
                            Cases</span>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="counter">
                        <strong class="text-color-light font-weight-extra-bold text-8 line-height-1" data-to="20"
                            data-append="+">0</strong>
                        <span class="text-color-light font-weight-normal line-height-1 text-0 mt-0">Top
                            Professionals</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5 my-5">
        <div class="row">
            <div class="col text-center">
                <h3 class="font-weight-bold text-color-default line-height-1 text-4 ls-0 mb-1 appear-animation"
                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200"
                    data-plugin-options="{'minWindowWidth': 0}">MEET OUR TEAM</h3>
                {{-- <h2 class="text-color-dark font-weight-bold text-8 appear-animation"
                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400"
                    data-plugin-options="{'minWindowWidth': 0}">Real Professionals</h2> --}}
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
                            <h5
                                class="d-block text-color-default font-weight-semibold line-height-1 positive-ls-2 text-2 mb-3">
                                CEO & FOUNDER</h5>
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
                            <h5
                                class="d-block text-color-default font-weight-semibold line-height-1 positive-ls-2 text-2 mb-3">
                                CHIEF OFFICER</h5>
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
                            <h5
                                class="d-block text-color-default font-weight-semibold line-height-1 positive-ls-2 text-2 mb-3">
                                RISK ANALYST</h5>
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

    <div class="container py-5 my-5">
        <div class="row mb-2">
            <div class="col text-center">
                <h3 class="font-weight-bold text-color-default line-height-1 text-4 ls-0 mb-1">CASES OF SUCCESS</h3>
                <h2 class="text-color-dark font-weight-bold text-8">Testimonials</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="owl-carousel owl-theme nav-dark nav-style-1 nav-arrows-thin nav-font-size-lg nav-outside mb-0"
                    data-plugin-options="{'responsive': {'0': {'items': 1, 'nav': false, 'dots': true}, '576': {'items': 1, 'nav': false, 'dots': true}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'loop': true, 'nav': true, 'dots': false, 'autoHeight': true, 'autoplay': false, 'autoplayTimeout': 7000, 'smartSpeed': 750, 'slideTransition': 'ease-out'}">
                    <div>
                        <div
                            class="custom-testimonial-style-1 testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote testimonial-with-quotes-mobile-remove testimonial-quotes-dark mb-3 mb-md-0">
                            <div class="testimonial-author">
                                <img src="img/demos/finance/authors/author-1.jpg" class="img-fluid rounded-circle"
                                    alt="Jon Doe Testimonial Photo">
                            </div>
                            <blockquote class="px-0 px-md-3">
                                <p class="alternative-font-4 text-color-dark text-4-5 line-height-9 px-0 px-md-4 mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque molestie vel
                                    turpis a sodales. In hac habitasse platea dictumst. Nulla sollicitudin dui vitae
                                    consectetur adipiscing elit leo aliquet.
                                </p>
                            </blockquote>
                            <div class="testimonial-author">
                                <cite class="text-color-dark fst-normal font-weight-extra-bold text-5-5">John Doe</cite>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div
                            class="custom-testimonial-style-1 testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote testimonial-with-quotes-mobile-remove testimonial-quotes-dark mb-3 mb-md-0">
                            <div class="testimonial-author">
                                <img src="img/demos/finance/authors/author-2.jpg" class="img-fluid rounded-circle"
                                    alt="Monica Doe Testimonial Photo">
                            </div>
                            <blockquote class="px-0 px-md-3">
                                <p class="alternative-font-4 text-color-dark text-4-5 line-height-9 px-0 px-md-4 mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque molestie vel
                                    turpis a sodales. In hac habitasse platea dictumst. Nulla sollicitudin dui vitae
                                    consectetur adipiscing elit leo aliquet.
                                </p>
                            </blockquote>
                            <div class="testimonial-author">
                                <cite class="text-color-dark fst-normal font-weight-extra-bold text-5-5">Monica Doe</cite>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div
                            class="custom-testimonial-style-1 testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote testimonial-with-quotes-mobile-remove testimonial-quotes-dark mb-3 mb-md-0">
                            <div class="testimonial-author">
                                <img src="img/demos/finance/authors/author-3.jpg" class="img-fluid rounded-circle"
                                    alt="Robert Doe Testimonial Photo">
                            </div>
                            <blockquote class="px-0 px-md-3">
                                <p class="alternative-font-4 text-color-dark text-4-5 line-height-9 px-0 px-md-4 mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque molestie vel
                                    turpis a sodales. In hac habitasse platea dictumst. Nulla sollicitudin dui vitae
                                    consectetur adipiscing elit leo aliquet.
                                </p>
                            </blockquote>
                            <div class="testimonial-author">
                                <cite class="text-color-dark fst-normal font-weight-extra-bold text-5-5">Robert Doe</cite>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 p-0">
                <section class="section border-0 bg-color-primary h-100 m-0">
                    <div class="row justify-content-end py-5-5 m-0 appear-animation"
                        data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="350">
                        <div class="col-half-section col-half-section-right ps-4">
                            <h3 class="font-weight-bold text-color-light line-height-1 text-4 ls-0 mb-1">REQUEST A CALL
                            </h3>
                            <h2 class="text-color-light font-weight-bold text-8 ls-0 mb-3">We call you back</h2>
                            <p class="text-color-light opacity-7 font-weight-light text-3-5 line-height-9">Lorem ipsum
                                dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismodac, finibus
                                vitae dui.</p>
                            <form class="contact-form form-style-4 form-style-4-border-light-2 form-errors-light pe-lg-5"
                                action="php/contact-form.php" method="POST">
                                <div class="contact-form-success alert alert-success d-none mt-4">
                                    <strong>Success!</strong> Your message has been sent to us.
                                </div>
                                <div class="contact-form-error alert alert-danger d-none mt-4">
                                    <strong>Error!</strong> There was an error sending your message.
                                    <span class="mail-error-message text-1 mt-2 d-block"></span>
                                </div>
                                <div class="row mb-2 mx-0">
                                    <input type="text"
                                        class="form-control font-weight-semibold text-color-light px-1 py-3"
                                        name="name" placeholder="* Full Name"
                                        data-msg-required="This field is required." id="name" required="" />
                                </div>
                                <div class="row mx-0 mb-3">
                                    <input type="email"
                                        class="form-control font-weight-semibold text-color-light px-1 py-3"
                                        name="email" placeholder="* Email Address"
                                        data-msg-required="This field is required." id="email" required="" />
                                </div>
                                <div class="row mb-4 mx-0">
                                    <textarea name="message" id="message" rows="4"
                                        class="form-control form-control font-weight-semibold text-color-light px-1 py-3" placeholder="* Message"></textarea>
                                </div>
                                <input type="submit"
                                    class="btn btn-light text-color-dark font-weight-bold positive-ls-3 btn-px-5 py-3"
                                    value="SUBMIT" />
                            </form>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-6 p-0">
                <section class="section section-no-border bg-dark overflow-hidden h-100 m-0">
                    <div class="row py-5-5 m-0 appear-animation" data-appear-animation="fadeInRightShorter"
                        data-appear-animation-delay="300">
                        <div class="col-half-section col-half-section-left ps-lg-5">
                            <h3 class="font-weight-bold text-color-light line-height-1 text-4 ls-0 mb-1">TALK TO A
                                SPECIALIST</h3>
                            <h2 class="text-color-light font-weight-bold text-8 ls-0 mb-3">Let's Talk Business</h2>
                            <p class="text-color-grey line-height-9 text-3-5 mb-5-5">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Sed imperdiet libero id nisi euismodac, finibus vitae dui rem
                                ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            <div class="d-flex align-items-center">
                                <i class="icons icon-phone text-9 text-color-light position-relative bottom-1"></i>
                                <a href="tel:0123456789"
                                    class="text-4-5 font-weight-bold text-color-light opacity-hover-8 text-decoration-none ps-3-5">(800)
                                    123-4567</a>
                            </div>
                            <div class="d-flex align-items-center my-5-5">
                                <img width="38" height="38" src="img/demos/finance/icons/email.svg"
                                    alt="" data-icon
                                    data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                                <a href="mailto:example@domain.com"
                                    class="text-4-5 font-weight-bold text-color-light opacity-hover-8 text-decoration-none ps-3-5">porto@domain.com</a>
                            </div>
                            <div class="d-flex align-items-center pe-lg-5 mb-5">
                                <img width="38" height="38" src="img/demos/finance/icons/map-pin.svg"
                                    alt="" data-icon
                                    data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                                <p class="text-color-light font-weight-bold text-4-5 mb-0 ps-3-5 pe-lg-5 me-lg-5">
                                    {{__('main.contact_address')}}
                                </p>
                            </div>
                            <a href="{{ url('front/about') }}"
                                class="btn btn-light text-color-dark font-weight-bold positive-ls-3 btn-px-5 py-3">
                                {{__('main.about')}}
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
