<footer id="footer" class="footer-reveal bg-light border-0 m-0">
    <div class="container py-5 mt-5">
        <div class="row">
            <div class="col-lg-3 mb-4 mb-lg-0">
                <a href="{{ url('/') }}" title="{{__('main.iraqi audit house')}}">
                    <img src="img/logo.png" class="img-fluid mt-2" width="100" alt="{{__('main.iraqi audit house')}}" />
                </a>
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0">
                <h4 class="text-color-dark font-weight-bold mb-4-5">Navigation</h4>
                <ul class="list list-unstyled columns-lg-2 text-3-5">
                    <li><a href="{{ url('/') }}">{{__('main.home')}}</a></li>
                    <li><a href="{{ url('front/about') }}">{{__('main.about')}}</a></li>
                    <li><a href="{{ url('front/services') }}">{{__('main.services')}}</a></li>
                    <li><a href="{{ url('front/team') }}">{{__('main.team')}}</a></li>
                    <li><a href="{{ url('front/contact') }}">{{__('main.contact')}}</a></li>
                </ul>
            </div>
            <div class="col-lg-2 mb-4 mb-lg-0">
                <h4 class="text-color-dark font-weight-bold mb-4-5 d-none">Policies</h4>
                <ul class="list list-unstyled text-3-5 d-none">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">FAQ's</a></li>
                </ul>
            </div>
            <div class="col-lg-4">
                <h4 class="text-color-dark font-weight-bold mb-4-5">Newsletter</h4>
                <div class="alert alert-success d-none" id="newsletterSuccess">
                    <strong>Success!</strong> You've been added to our email list.
                </div>
                <div class="alert alert-danger d-none" id="newsletterError"></div>
                <form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST" class="mw-100">
                    <div class="input-group">
                        <input class="form-control bg-color-grey border-0 px-4 text-3" placeholder="Email Adress..." name="newsletterEmail" id="newsletterEmail" type="email">
                        <button class="btn btn-primary px-3" type="submit">
                            <img width="27" height="27" src="img/demos/business-consulting-3/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <hr>
            </div>
        </div>
    </div>
    <div class="footer-copyright bg-light m-0 pt-3-5 pb-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-sm-auto text-center text-sm-start order-2 order-sm-1">
                    <p class="text-3">{{__('main.iraqi audit house')}} © <span id="year"></span>. {{__('main.All Rights Reserved')}}.</p>
                    <script>document.getElementById("year").innerHTML = new Date().getFullYear();</script>
                </div>
                {{-- <div class="col-12 col-sm-auto order-1 order-sm-2 mb-2 mb-sm-0">
                    <div class="d-flex align-items-center justify-content-center">
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
                        <ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-medium border border-top-0 border-end-0 border-bottom-0 ps-3 ms-2 mb-0">
                            <li class="social-icons-facebook">
                                <a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="social-icons-x">
                                <a href="http://www.x.com/" target="_blank" title="X"><i class="fab fa-x-twitter"></i></a>
                            </li>
                            <li class="social-icons-linkedin">
                                <a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</footer>