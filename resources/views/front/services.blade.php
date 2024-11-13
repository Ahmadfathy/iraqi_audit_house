@extends('front.layout.master')

@section('title')
{{__('main.services')}}
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
                <h1 class="font-weight-bold text-color-light text-10 mb-0">{{__('main.services')}}</h1>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb breadcrumb-light d-block text-md-end text-4 mb-0">
                    <li><a href="{{'/'}}" class="text-decoration-none">{{__('main.home')}}</a></li>
                    <li class="text-upeercase active">{{__('main.services')}}</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container py-5-5 my-5-5">
    <div class="row justify-content-center">
        <div class="col-sm-10 col-md-6 col-lg-4 mb-4">
            <div class="card border-0 svg-animation-effect-1-hover appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                <div class="card-header d-flex align-items-center justify-content-center bg-color-grey-500 py-5-5">
                    <img width="120" height="120" src="img/demos/finance/icons/accounting-auditor-1.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                </div>
                <div class="card-body text-center py-4">
                    <h2 class="text-color-dark text-5 line-height-1 mb-3-5">{{__('main.service_1')}}</h2>
                    
                </div>
            </div>
        </div>
        <div class="col-sm-10 col-md-6 col-lg-4 mb-4">
            <div class="card border-0 svg-animation-effect-1-hover appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                <div class="card-header d-flex align-items-center justify-content-center bg-color-grey-500 py-5-5">
                    <img width="120" height="120" src="img/demos/finance/icons/accounting-auditor-2.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                </div>
                <div class="card-body text-center py-4">
                    <h2 class="text-color-dark text-5 line-height-1 mb-3-5">{{__('main.service_2')}}</h2>
                    
                </div>
            </div>
        </div>
        <div class="col-sm-10 col-md-6 col-lg-4 mb-4">
            <div class="card border-0 svg-animation-effect-1-hover appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                <div class="card-header d-flex align-items-center justify-content-center bg-color-grey-500 py-5-5">
                    <img width="120" height="120" src="img/demos/finance/icons/accounting-auditor-3.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                </div>
                <div class="card-body text-center py-4">
                    <h2 class="text-color-dark text-5 line-height-1 mb-3-5">{{__('main.service_3')}}</h2>
                    
                </div>
            </div>
        </div>
        <div class="col-sm-10 col-md-6 col-lg-4 mb-4">
            <div class="card border-0 svg-animation-effect-1-hover appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                <div class="card-header d-flex align-items-center justify-content-center bg-color-grey-500 py-5-5">
                    <img width="120" height="120" src="img/demos/finance/icons/accounting-auditor-4.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                </div>
                <div class="card-body text-center py-4">
                    <h2 class="text-color-dark text-5 line-height-1 mb-3-5">{{__('main.service_4')}}</h2>
                    
                </div>
            </div>
        </div>
        <div class="col-sm-10 col-md-6 col-lg-4 mb-4">
            <div class="card border-0 svg-animation-effect-1-hover appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                <div class="card-header d-flex align-items-center justify-content-center bg-color-grey-500 py-5-5">
                    <img width="120" height="120" src="img/demos/finance/icons/accounting-auditor-5.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                </div>
                <div class="card-body text-center py-4">
                    <h2 class="text-color-dark text-5 line-height-1 mb-3-5">{{__('main.service_5')}}</h2>
                    
                </div>
            </div>
        </div>
        <div class="col-sm-10 col-md-6 col-lg-4 mb-4">
            <div class="card border-0 svg-animation-effect-1-hover appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                <div class="card-header d-flex align-items-center justify-content-center bg-color-grey-500 py-5-5">
                    <img width="120" height="120" src="img/demos/finance/icons/accounting-auditor-6.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                </div>
                <div class="card-body text-center py-4">
                    <h2 class="text-color-dark text-5 line-height-1 mb-3-5">{{__('main.service_6')}}</h2>
                    
                </div>
            </div>
        </div>
        <div class="col-sm-10 col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card border-0 svg-animation-effect-1-hover appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                <div class="card-header d-flex align-items-center justify-content-center bg-color-grey-500 py-5-5">
                    <img width="120" height="120" src="img/demos/finance/icons/accounting-auditor-7.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                </div>
                <div class="card-body text-center py-4">
                    <h2 class="text-color-dark text-5 line-height-1 mb-3-5">{{__('main.service_7')}}</h2>
                    
                </div>
            </div>
        </div>
        <div class="col-sm-10 col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card border-0 svg-animation-effect-1-hover appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                <div class="card-header d-flex align-items-center justify-content-center bg-color-grey-500 py-5-5">
                    <img width="120" height="120" src="img/demos/finance/icons/accounting-auditor-8.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                </div>
                <div class="card-body text-center py-4">
                    <h2 class="text-color-dark text-5 line-height-1 mb-3-5">{{__('main.service_8')}}</h2>
                    
                </div>
            </div>
        </div>
        <div class="col-sm-10 col-md-6 col-lg-4">
            <div class="card border-0 svg-animation-effect-1-hover appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                <div class="card-header d-flex align-items-center justify-content-center bg-color-grey-500 py-5-5">
                    <img width="120" height="120" src="img/demos/finance/icons/accounting-auditor-9.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                </div>
                <div class="card-body text-center py-4">
                    <h2 class="text-color-dark text-5 line-height-1 mb-3-5">{{__('main.service_9')}}</h2>
                    
                </div>
            </div>
        </div>
        <div class="col-sm-10 col-md-6 col-lg-4">
            <div class="card border-0 svg-animation-effect-1-hover appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                <div class="card-header d-flex align-items-center justify-content-center bg-color-grey-500 py-5-5">
                    <img width="120" height="120" src="img/demos/finance/icons/accounting-auditor-9.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                </div>
                <div class="card-body text-center py-4">
                    <h2 class="text-color-dark text-5 line-height-1 mb-3-5">{{__('main.service_10')}}</h2>
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


