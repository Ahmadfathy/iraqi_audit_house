<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 85}">
    <div class="header-body border-0">
        <div class="header-top header-top-sticky-remove-bottom-border">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <p class="font-weight-semibold text-color-dark text-2-5 mb-0">
                            <span style="color: #e07620" class="text-4">{{__('main.iraqi audit house')}}</span> {{__('main.slogan')}}
                        </p>
                    </div>
                    <div class="col-auto d-flex align-items-center">
                        {{-- <div class="header-nav-top">
                            @if (app()->getLocale() == 'ar')
                                <a class="text-color-dark text-color-hover-primary font-weight-semibold text-2-5 text-decoration-none px-3"
                                    href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">
                                    ENG
                                </a>
                            @else
                                <a class="text-color-dark text-color-hover-primary font-weight-semibold text-2-5 text-decoration-none px-3"
                                    href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">
                                    العربية
                                </a>
                            @endif
                        </div> --}}
                        {{-- <ul class="header-social-icons social-icons social-icons-clean social-icons-icon-dark border border-top-0 border-end-0 border-bottom-0 ps-3 ms-2 mb-0 d-none d-sm-block">
                            <li class="social-icons-facebook">
                                <a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="social-icons-x">
                                <a href="http://www.x.com/" target="_blank" title="X"><i class="fab fa-x-twitter"></i></a>
                            </li>
                            <li class="social-icons-linkedin">
                                <a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container" style="height: 115px;">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{'/'}}" class="d-flex">
                                <img alt="{{__('main.iraqi audit house')}}" width="80" src="img/logo.png" alt="{{__('main.iraqi audit house')}}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-center d-none d-sm-flex">
                    <div style="color: #e07620" class="text-7">{{__('main.iraqi audit house')}}</div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links">
                            <div class="header-nav-main header-nav-main-text-capitalize header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a class="nav-link active" href="{{'/'}}">
                                                {{__('main.home')}}
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ url('front/about') }}">
                                                {{__('main.about')}}
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ url('front/services') }}">
                                                {{__('main.services')}}
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ url('front/team') }}">
                                                {{__('main.team')}}
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ url('front/contact') }}">
                                                {{__('main.contact')}}
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <ul class="header-extra-info ms-5-5">
                            <li class="d-inline-flex ms-0">
                                <div class="header-extra-info-icon d-none d-sm-block">
                                    <i class="icons icon-phone text-3 text-color-dark position-relative top-3"></i>
                                </div>
                                <div class="header-extra-info-text line-height-2">
                                    <span class="text-1 font-weight-semibold text-color-default">
                                        {{__('main.call_us_now')}}
                                    </span>
                                    <strong class="text-4"><a href="tel:00964(78)11111565" class="text-color-hover-primary text-decoration-none" dir="ltr">00964(78)11111565</a></strong>
                                </div>
                            </li>
                        </ul>
                        <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>