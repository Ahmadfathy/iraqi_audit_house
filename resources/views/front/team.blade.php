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

    <section class="section-secondary custom-section-padding">
        <div class="container py-5-5 my-5-5">
            <div class="row team-list sort-destination" data-sort-id="team">
                <div class="col-md-4 isotope-item leadership">
                    <div class="team-item mb-4 p-0 pb-2">
                        <div class="text-decoration-none">
                            <span class="image-wrapper">
                                <img src="img/demos/business-consulting/team/team-1.jpg" alt="" class="img-fluid" />
                            </span>
                        </div>
                        <div class="team-infos">
                            <div class="text-decoration-none">
                                <span class="team-member-name text-color-dark font-weight-semibold text-4">
                                    {{ __('main.team_1') }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 isotope-item other">
                    <div class="team-item mb-4 p-0 pb-2">
                        <div class="text-decoration-none">
                            <span class="image-wrapper">
                                <img src="img/demos/business-consulting/team/team-2.jpg" alt="" class="img-fluid" />
                            </span>
                        </div>
                        <div class="team-infos">
                            <div class="text-decoration-none">
                                <span class="team-member-name text-color-dark font-weight-semibold text-4">
                                    {{ __('main.team_2') }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 isotope-item other">
                    <div class="team-item mb-4 p-0 pb-2">
                        <div class="text-decoration-none">
                            <span class="image-wrapper">
                                <img src="img/demos/business-consulting/team/team-3.jpg" alt="" class="img-fluid" />
                            </span>
                        </div>
                        <div class="team-infos">
                            <div class="text-decoration-none">
                                <span class="team-member-name text-color-dark font-weight-semibold text-4">
                                    {{ __('main.team_3') }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 isotope-item other">
                    <div class="team-item mb-4 p-0 pb-2">
                        <div class="text-decoration-none">
                            <span class="image-wrapper">
                                <img src="img/demos/business-consulting/team/team-4.jpg" alt="" class="img-fluid" />
                            </span>
                        </div>
                        <div class="team-infos">
                            <div class="text-decoration-none">
                                <span class="team-member-name text-color-dark font-weight-semibold text-4">
                                    {{ __('main.team_4') }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 isotope-item other">
                    <div class="team-item mb-4 p-0 pb-2">
                        <div class="text-decoration-none">
                            <span class="image-wrapper">
                                <img src="img/demos/business-consulting/team/team-5.jpg" alt="" class="img-fluid" />
                            </span>
                        </div>
                        <div class="team-infos">
                            <div class="text-decoration-none">
                                <span class="team-member-name text-color-dark font-weight-semibold text-4">
                                    {{ __('main.team_5') }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 isotope-item other">
                    <div class="team-item mb-4 p-0 pb-2">
                        <div class="text-decoration-none">
                            <span class="image-wrapper">
                                <img src="img/demos/business-consulting/team/team-5.jpg" alt="" class="img-fluid" />
                            </span>
                        </div>
                        <div class="team-infos">
                            <div class="text-decoration-none">
                                <span class="team-member-name text-color-dark font-weight-semibold text-4">
                                    {{ __('main.team_6') }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
