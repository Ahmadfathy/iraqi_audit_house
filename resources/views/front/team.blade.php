@extends('front.layout.master')

@section('title')
    {{ __('main.team') }}
@endsection

@push('css')
    <style>
        .team-item {
            padding: 0px 10px;
        }

        .team-item:hover .image-wrapper img {
            transform: scale(1.1);
        }

        .team-item .image-wrapper {
            display: block;
            overflow: hidden;
        }

        .team-item .image-wrapper img {
            transition: ease transform 300ms;
        }

        .team-item .team-infos {
            position: relative;
            background: var(--light);
            padding: 25px;
        }

        .team-item .team-infos .share {
            position: absolute;
            bottom: calc(100% - 22px);
            right: 15px;
            width: 42px;
            overflow: hidden;
            z-index: 1;
            transition: ease height 300ms;
        }

        .team-item .team-infos .share:hover .share-icons {
            transform: translateY(0);
        }

        .team-item .team-infos .share:hover i.fa-share-alt {
            background: #4dbb6d;
        }

        .team-item .team-infos .share:after {
            content: '';
            display: block;
            position: absolute;
            bottom: 0;
            left: 0;
            background: var(--light);
            width: 100%;
            height: 22px;
        }

        .team-item .team-infos .share .share-icons {
            text-align: center;
            padding-bottom: 42px;
            border-radius: 50px;
            transform: translateY(100%);
            transition: ease transform 300ms;
        }

        .team-item .team-infos .share i {
            display: block;
            color: var(--light);
            padding: 15px;
            opacity: 0.5;
            transition: ease opacity 300ms;
        }

        .team-item .team-infos .share i.fa-share-alt {
            position: absolute;
            background: #58605a;
            bottom: 0;
            left: 0;
            border-radius: 50px;
            opacity: 1;
            z-index: 1;
        }

        .team-item .team-infos .share i.fa-facebook-f {
            color: #4d70a8;
        }

        .team-item .team-infos .share i.fa-instagram {
            color: #964b00;
        }

        .team-item .team-infos .share i.fa-linkedin-in {
            color: #0077b5;
        }

        .team-item .team-infos .share i:hover {
            opacity: 1;
        }

        .team-item .team-infos .team-member-desc {
            display: block;
            color: var(--default);
        }
    </style>
@endpush

@push('js')
@endpush

@section('content')
    <section
        class="page-header page-header-modern page-header-background overlay overlay-show overlay-color-primary overlay-op-8 border-0 m-0"
        data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '125%', 'fadeIn': true}"
        data-image-src="img/bg_page_title.jpg">
        <div class="container position-relative z-index-2">
            <div class="row text-center text-md-start">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 class="font-weight-bold text-color-light text-10 mb-0">{{ __('main.team') }}</h1>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb breadcrumb-light d-block text-md-end text-4 mb-0">
                        <li><a href="{{ '/' }}" class="text-decoration-none">{{ __('main.home') }}</a></li>
                        <li class="text-upeercase active">{{ __('main.team') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid py-5-5 my-5-5">
        <div class="row justify-content-center">
            <div id="teamMember1" class="row align-items-center appear-animation animated fadeInUpShorterPlus appear-animation-visible mb-5" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                <div class="col-lg-3 col-xl-3 pe-lg-0 mb-4-5 mb-lg-0">
                    <img src="img/team/1.png" class="img-fluid" alt="{{ __('main.team_1_name') }}">
                </div>
                <div class="col-lg-9 col-xl-9 ps-lg-4">
                    <h4 class="text-color-dark font-weight-bold line-height-1 mb-2">{{ __('main.team_1_name') }}</h4>
                    {{-- <h3 class="d-block text-color-default font-weight-semibold line-height-1 positive-ls-2 text-2 mb-3">{{ __('main.team_1_position') }}</h3> --}}
                    <p class="text-4-4 mb-3-5">
                        {{ __('main.team_1_info') }}
                    </p>
                    <ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-medium mb-0">
                        <li class="social-icons-email">
                            <a href="DrAlaaAlSaedi@IraqiAuditHouse.com" target="_blank" title="E-Mail">
                                <i class="fa-solid fa-envelope-open-text"></i>
                            </a>
                        </li>
                        <li class="">
                            <span class="text-4 text-color-dark--300 text-lowercase">
                                DrAlaaAlSaedi@IraqiAuditHouse.com
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="teamMember2" class="row align-items-center appear-animation animated fadeInUpShorterPlus appear-animation-visible mb-5" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                <div class="col-lg-3 col-xl-3 pe-lg-0 mb-4-5 mb-lg-0">
                    <img src="img/team/4.png" class="img-fluid" alt="{{ __('main.team_1_name') }}">
                </div>
                <div class="col-lg-9 col-xl-9 ps-lg-4">
                    <h4 class="text-color-dark font-weight-bold line-height-1 mb-2">{{ __('main.team_2_name') }}</h4>
                    {{-- <h3 class="d-block text-color-default font-weight-semibold line-height-1 positive-ls-2 text-2 mb-3">{{ __('main.team_2_position') }}</h3> --}}
                    <p class="text-4-4 mb-3-5">
                        {{ __('main.team_2_info') }}
                    </p>
                    <ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-medium mb-0">
                        <li class="social-icons-email">
                            <a href="DrHadi@IraqiAudithouse.com" target="_blank" title="E-Mail">
                                <i class="fa-solid fa-envelope-open-text"></i>
                            </a>
                        </li>
                        <li class="">
                            <span class="text-4 text-color-dark--300 text-lowercase">
                                DrHadi@IraqiAudithouse.com
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="teamMember3" class="row align-items-center appear-animation animated fadeInUpShorterPlus appear-animation-visible mb-5" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                <div class="col-lg-3 col-xl-3 pe-lg-0 mb-4-5 mb-lg-0">
                    <img src="img/team/5.jpg" class="img-fluid" alt="Image of the team member">
                </div>
                <div class="col-lg-9 col-xl-9 ps-lg-4">
                    <h4 class="text-color-dark font-weight-bold line-height-1 mb-2">{{ __('main.team_3_name') }}</h4>
                    {{-- <h3 class="d-block text-color-default font-weight-semibold line-height-1 positive-ls-2 text-2 mb-3">{{ __('main.team_3_position') }}</h3> --}}
                    <p class="text-4-4 mb-3-5">
                        {{ __('main.team_3_info') }}
                    </p>
                    <ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-medium mb-0">
                        <li class="social-icons-email">
                            <a href="DrAbdulkhalq@IraqiAuditHouse.com" target="_blank" title="E-Mail">
                                <i class="fa-solid fa-envelope-open-text"></i>
                            </a>
                        </li>
                        <li class="">
                            <span class="text-4 text-color-dark--300 text-lowercase">
                                DrAbdulkhalq@IraqiAuditHouse.com
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="teamMember4" class="row align-items-center appear-animation animated fadeInUpShorterPlus appear-animation-visible mb-5" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                <div class="col-lg-3 col-xl-3 pe-lg-0 mb-4-5 mb-lg-0">
                    <img src="img/team/user.jpg" class="img-fluid" alt="Image of the team member">
                </div>
                <div class="col-lg-9 col-xl-9 ps-lg-4">
                    <h4 class="text-color-dark font-weight-bold line-height-1 mb-2">{{ __('main.team_4_name') }}</h4>
                    {{-- <h3 class="d-block text-color-default font-weight-semibold line-height-1 positive-ls-2 text-2 mb-3">{{ __('main.team_4_position') }}</h3> --}}
                    <p class="text-4-4 mb-3-5">
                        {{ __('main.team_4_info') }}
                    </p>
                    <ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-medium mb-0">
                        <li class="social-icons-email">
                            <a href="DrMunther@IraqiAuditHouse.com" target="_blank" title="E-Mail">
                                <i class="fa-solid fa-envelope-open-text"></i>
                            </a>
                        </li>
                        <li class="">
                            <span class="text-4 text-color-dark--300 text-lowercase">
                                DrMunther@IraqiAuditHouse.com
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="teamMember5" class="row align-items-center appear-animation animated fadeInUpShorterPlus appear-animation-visible mb-5" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                <div class="col-lg-3 col-xl-3 pe-lg-0 mb-4-5 mb-lg-0">
                    <img src="img/team/3.png" class="img-fluid" alt="Image of the team member">
                </div>
                <div class="col-lg-9 col-xl-9 ps-lg-4">
                    <h4 class="text-color-dark font-weight-bold line-height-1 mb-2">{{ __('main.team_5_name') }}</h4>
                    {{-- <h3 class="d-block text-color-default font-weight-semibold line-height-1 positive-ls-2 text-2 mb-3">{{ __('main.team_5_position') }}</h3> --}}
                    <p class="text-4-4 mb-3-5">
                        {{ __('main.team_5_info') }}
                    </p>
                    <ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-medium mb-0">
                        <li class="social-icons-email">
                            <a href="DrWaleed@iraqiAuditHouse.com" target="_blank" title="E-Mail">
                                <i class="fa-solid fa-envelope-open-text"></i>
                            </a>
                        </li>
                        <li class="">
                            <span class="text-4 text-color-dark--300 text-lowercase">
                                DrWaleed@iraqiAuditHouse.com
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="teamMember6" class="row align-items-center appear-animation animated fadeInUpShorterPlus appear-animation-visible mb-5" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                <div class="col-lg-3 col-xl-3 pe-lg-0 mb-4-5 mb-lg-0">
                    <img src="img/team/2.jpg" class="img-fluid" alt="Image of the team member">
                </div>
                <div class="col-lg-9 col-xl-9 ps-lg-4">
                    <h4 class="text-color-dark font-weight-bold line-height-1 mb-2">{{ __('main.team_6_name') }}</h4>
                    {{-- <h3 class="d-block text-color-default font-weight-semibold line-height-1 positive-ls-2 text-2 mb-3">{{ __('main.team_6_position') }}</h3> --}}
                    <p class="text-4-4 mb-3-5">
                        {{ __('main.team_6_info') }}
                    </p>
                    <ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-medium mb-0">
                        <li class="social-icons-email">
                            <a href="Aliramadan@iraqiAuditHouse.com" target="_blank" title="E-Mail">
                                <i class="fa-solid fa-envelope-open-text"></i>
                            </a>
                        </li>
                        <li class="">
                            <span class="text-4 text-color-dark--300 text-lowercase">
                                Aliramadan@iraqiAuditHouse.com
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
