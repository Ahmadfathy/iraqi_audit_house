@extends('front.layout.master')

@section('title')
{{__('main.about')}}
@endsection

@push('css')
@endpush

@push('js')

@endpush

@section('content')

<section class="page-header page-header-modern page-header-background overlay overlay-show overlay-color-primary overlay-op-9 border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '125%', 'fadeIn': true}" data-image-src="img/demos/finance/backgrounds/background-2.jpg">
    <div class="container position-relative z-index-2">
        <div class="row text-center text-md-start">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="font-weight-bold text-color-light text-10 mb-0">@yield('title')</h1>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb breadcrumb-light d-block text-md-end text-4 mb-0">
                    <li><a href="{{'/'}}" class="text-decoration-none">{{__('main.home')}}</a></li>
                    <li class="text-upeercase active">@yield('title')</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container py-5-5 my-5-5">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <p class="text-4-5 line-height-6 mb-4-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">
                {{__('main.about_disc_1')}}
            </p>
            <p class="text-3-5 mb-4-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">
                {{__('main.about_disc_2')}}
            </p>
            <p class="text-3-5 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">
                {{__('main.about_disc_3')}}
            </p>
        </div>
        <div class="col-sm-9 col-md-7 col-lg-4 offset-lg-1">
            <img src="img/demos/finance/generic/generic-1.jpg" class="img-fluid appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800" alt="Building image showing the company" />
        </div>
    </div>
</div>

<section class="section bg-color-grey border-0 m-0">
    <div class="container pt-5 pb-3">
        <div class="row">
            <div class="col text-center">
                <h3 class="font-weight-bold text-color-default line-height-1 text-4 ls-0 mb-1">3 BASIC STEPS</h3>
                <h2 class="text-color-dark font-weight-bold text-8">Why Choose Us?</h2>
            </div>
        </div>
        <div class="row process custom-process justify-content-center mt-4 align-items-start">
            <div class="process-step col-md-9 col-lg-4 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                <div class="process-step-circle border-width-3 mb-3">
                    <strong class="process-step-circle-content">
                        <img width="58" height="58" src="img/demos/finance/icons/box.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-stroke-color-primary'}" />
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
                        <img width="58" height="58" src="img/demos/finance/icons/refresh-cw.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-stroke-color-primary'}" />
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
                        <img width="58" height="58" src="img/demos/finance/icons/people.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
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


