@extends('front.layout.master')

@section('title')
{{__('main.contact')}}
@endsection

@push('css')
@endpush

@push('js')
@endpush

@section('content')

    
<section class="page-header page-header-modern page-header-background overlay overlay-show overlay-color-primary overlay-op-8 border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '125%', 'fadeIn': true}" data-image-src="img/bg_page_title.jpg">
    <div class="container position-relative z-index-2">
        <div class="row text-center text-md-start">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="font-weight-bold text-color-light text-10 mb-0">{{__('main.contact')}}</h1>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb breadcrumb-light d-block text-md-end text-4 mb-0">
                    <li><a href="{{'/'}}" class="text-decoration-none">{{__('main.home')}}</a></li>
                    <li class="text-upeercase active">{{__('main.contact')}}</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section bg-dark border-0 m-0">
    <div class="container py-5-5">
        <div class="row align-items-center">
            <div class="col-md-6 mb-5 mb-md-0">
                <h3 class="font-weight-bold text-color-light line-height-1 text-4 ls-0 mb-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">TALK TO A SPECIALIST</h3>
                <h2 class="text-color-light font-weight-bold text-8 ls-0 mb-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">Let's Talk Business</h2>
                <p class="text-color-grey line-height-9 text-3-5 pe-md-4 pe-lg-5 mb-5-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismodac, finibus vitae dui rem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                <a href="demo-finance-company.html" class="btn btn-light text-color-dark font-weight-bold positive-ls-3 btn-px-5 py-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800">ABOUT US</a>
            </div>
            <div class="col-md-6 divider-left-border custom-mobile-remove-divider-left-border border-color-light-4">
                <div class="ps-md-4 ps-lg-4 py-md-5 ms-md-4">
                    <div class="d-flex align-items-center appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="900">
                        <i class="icons icon-phone text-9 text-color-light position-relative bottom-1"></i>
                        <a href="tel: 111 (0)00964" class="text-4-5 font-weight-bold text-color-light opacity-hover-8 text-decoration-none ps-3-5"> 111 (0)00964</a>
                    </div>
                    <div class="d-flex align-items-center my-5-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1100">
                        <img width="38" height="38" src="img/demos/finance/icons/email.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                        <a href="mailto:example@domain.com" class="text-4-5 font-weight-bold text-color-light opacity-hover-8 text-decoration-none ps-3-5">porto@domain.com</a>
                    </div>
                    <div class="d-flex align-items-center pe-lg-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1300">
                        <img width="38" height="38" src="img/demos/finance/icons/map-pin.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                        <p class="text-color-light font-weight-bold text-4-5 mb-0 ps-3-5 pe-lg-5 me-lg-5">{{__('main.contact_address')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section bg-primary border-0 m-0">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-7 col-lg-5">
                <h3 class="font-weight-bold text-color-light line-height-1 text-4 ls-0 mb-1">REQUEST A CALL</h3>
                <h2 class="text-color-light font-weight-bold text-8 ls-0 mb-3">We call you back</h2>
                <p class="text-color-light opacity-7 font-weight-light text-3-5 line-height-9">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismodac, finibus vitae dui.</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form class="contact-form form-style-4 form-style-4-border-light-2 form-errors-light pe-lg-5" action="php/contact-form.php" method="POST">
                    <div class="contact-form-success alert alert-success d-none mt-4">
                        <strong>Success!</strong> Your message has been sent to us.
                    </div>
                    <div class="contact-form-error alert alert-danger d-none mt-4">
                        <strong>Error!</strong> There was an error sending your message.
                        <span class="mail-error-message text-1 mt-2 d-block"></span>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <input type="text" class="form-control font-weight-semibold text-color-light px-1 py-3" name="name" placeholder="* {{ __('main.fullname') }}" data-msg-required="This field is required." id="name" required="" />
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <input type="email" class="form-control font-weight-semibold text-color-light px-1 py-3" name="email" placeholder="* {{ __('main.email') }}" data-msg-required="This field is required." id="email" required="" />
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <input type="text" class="form-control font-weight-semibold text-color-light px-1 py-3" name="phone" placeholder="* {{ __('main.phone') }}" data-msg-required="This field is required." id="phone" required="" />
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <input type="text" class="form-control font-weight-semibold text-color-light px-1 py-3" name="city" placeholder="* {{ __('main.city') }}" data-msg-required="This field is required." id="city" required="" />
                        </div>
                    </div>
                    <div class="row mb-4 mx-0">
                        <textarea name="message" id="message" rows="4" class="form-control form-control font-weight-semibold text-color-light px-1" placeholder="* {{ __('main.message') }}"></textarea>
                    </div>
                    <input type="submit" class="btn btn-light text-color-dark font-weight-bold positive-ls-3 btn-px-5 py-3" value="{{ __('main.submit') }}" />
                </form>
            </div>
        </div>
    </div>
</section>


@endsection


