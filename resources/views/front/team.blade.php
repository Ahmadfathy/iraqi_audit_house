@extends('front.layout.master')

@section('title')
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
                <h1 class="font-weight-bold text-color-light text-10 mb-0">Team</h1>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb breadcrumb-light d-block text-md-end text-4 mb-0">
                    <li><a href="demo-finance.html" class="text-decoration-none">Home</a></li>
                    <li class="text-upeercase active">Team</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container py-5-5 my-5-5">
    <div class="row justify-content-center">
        <div class="col-sm-9 col-md-6 col-lg-12 mb-5-5">
            <div id="teamMember1" class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">
                <div class="col-lg-5 col-xl-4 pe-lg-0 mb-4-5 mb-lg-0">
                    <img src="img/demos/finance/team/team-1.jpg" class="img-fluid" alt="Image of the team member" />
                </div>
                <div class="col-lg-7 col-xl-8 ps-lg-4">
                    <h4 class="text-color-dark font-weight-bold line-height-1 mb-1">John Doe</h4>
                    <h3 class="d-block text-color-default font-weight-semibold line-height-1 positive-ls-2 text-2 mb-3">CEO & FOUNDER</h3>
                    <p class="text-3-5 mb-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae ligula tempor, consectetur erat eget, auctor mi. Integer consequat, velit et finibus feugiat, sem ligula porttitor tellus, laoreet pharetra risus massa ut leo. Nulla volutpat dapibus libero. </p>
                    <ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-medium mb-0">
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
            </div>
        </div>
        <div class="col-sm-9 col-md-6 col-lg-12 mb-5-5">
            <div id="teamMember2" class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">
                <div class="col-lg-5 col-xl-4 pe-lg-0 mb-4-5 mb-lg-0">
                    <img src="img/demos/finance/team/team-2.jpg" class="img-fluid" alt="Image of the team member" />
                </div>
                <div class="col-lg-7 col-xl-8 ps-lg-4">
                    <h4 class="text-color-dark font-weight-bold line-height-1 mb-1">Janice Doe</h4>
                    <h3 class="d-block text-color-default font-weight-semibold line-height-1 positive-ls-2 text-2 mb-3">CEO & FOUNDER</h3>
                    <p class="text-3-5 mb-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae ligula tempor, consectetur erat eget, auctor mi. Integer consequat, velit et finibus feugiat, sem ligula porttitor tellus, laoreet pharetra risus massa ut leo. Nulla volutpat dapibus libero. </p>
                    <ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-medium mb-0">
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
            </div>
        </div>
        <div class="col-sm-9 col-md-6 col-lg-12 mb-5-5">
            <div id="teamMember3" class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">
                <div class="col-lg-5 col-xl-4 pe-lg-0 mb-4-5 mb-lg-0">
                    <img src="img/demos/finance/team/team-3.jpg" class="img-fluid" alt="Image of the team member" />
                </div>
                <div class="col-lg-7 col-xl-8 ps-lg-4">
                    <h4 class="text-color-dark font-weight-bold line-height-1 mb-1">Robert Doe</h4>
                    <h3 class="d-block text-color-default font-weight-semibold line-height-1 positive-ls-2 text-2 mb-3">CEO & FOUNDER</h3>
                    <p class="text-3-5 mb-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae ligula tempor, consectetur erat eget, auctor mi. Integer consequat, velit et finibus feugiat, sem ligula porttitor tellus, laoreet pharetra risus massa ut leo. Nulla volutpat dapibus libero. </p>
                    <ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-medium mb-0">
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
            </div>
        </div>
        <div class="col-sm-9 col-md-6 col-lg-12 mb-5-5">
            <div id="teamMember4" class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800">
                <div class="col-lg-5 col-xl-4 pe-lg-0 mb-4-5 mb-lg-0">
                    <img src="img/demos/finance/team/team-4.jpg" class="img-fluid" alt="Image of the team member" />
                </div>
                <div class="col-lg-7 col-xl-8 ps-lg-4">
                    <h4 class="text-color-dark font-weight-bold line-height-1 mb-1">Monica Doe</h4>
                    <h3 class="d-block text-color-default font-weight-semibold line-height-1 positive-ls-2 text-2 mb-3">CEO & FOUNDER</h3>
                    <p class="text-3-5 mb-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae ligula tempor, consectetur erat eget, auctor mi. Integer consequat, velit et finibus feugiat, sem ligula porttitor tellus, laoreet pharetra risus massa ut leo. Nulla volutpat dapibus libero. </p>
                    <ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-medium mb-0">
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
            </div>
        </div>
        <div class="col-sm-9 col-md-6 col-lg-12">
            <div id="teamMember5" class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1000">
                <div class="col-lg-5 col-xl-4 pe-lg-0 mb-4-5 mb-lg-0">
                    <img src="img/demos/finance/team/team-5.jpg" class="img-fluid" alt="Image of the team member" />
                </div>
                <div class="col-lg-7 col-xl-8 ps-lg-4">
                    <h4 class="text-color-dark font-weight-bold line-height-1 mb-1">Matt Doe</h4>
                    <h3 class="d-block text-color-default font-weight-semibold line-height-1 positive-ls-2 text-2 mb-3">CEO & FOUNDER</h3>
                    <p class="text-3-5 mb-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae ligula tempor, consectetur erat eget, auctor mi. Integer consequat, velit et finibus feugiat, sem ligula porttitor tellus, laoreet pharetra risus massa ut leo. Nulla volutpat dapibus libero. </p>
                    <ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-medium mb-0">
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
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 p-0">
            <section class="section border-0 bg-color-primary h-100 m-0">
                <div class="row justify-content-end py-5-5 m-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="350">
                    <div class="col-half-section col-half-section-right ps-4">
                        <h3 class="font-weight-bold text-color-light line-height-1 text-4 ls-0 mb-1">REQUEST A CALL</h3>
                        <h2 class="text-color-light font-weight-bold text-8 ls-0 mb-3">We call you back</h2>
                        <p class="text-color-light opacity-7 font-weight-light text-3-5 line-height-9">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismodac, finibus vitae dui.</p>
                        <form class="contact-form form-style-4 form-style-4-border-light-2 form-errors-light pe-lg-5" action="php/contact-form.php" method="POST">
                            <div class="contact-form-success alert alert-success d-none mt-4">
                                <strong>Success!</strong> Your message has been sent to us.
                            </div>
                            <div class="contact-form-error alert alert-danger d-none mt-4">
                                <strong>Error!</strong> There was an error sending your message.
                                <span class="mail-error-message text-1 mt-2 d-block"></span>
                            </div>
                            <div class="row mb-2 mx-0">
                                <input type="text" class="form-control font-weight-semibold text-color-light px-1 py-3" name="name" placeholder="* Full Name" data-msg-required="This field is required." id="name" required="" />
                            </div>
                            <div class="row mx-0 mb-3">
                                <input type="email" class="form-control font-weight-semibold text-color-light px-1 py-3" name="email" placeholder="* Email Address" data-msg-required="This field is required." id="email" required="" />
                            </div>
                            <div class="row mb-4 mx-0">
                                <textarea name="message" id="message" rows="4" class="form-control form-control font-weight-semibold text-color-light px-1 py-3" placeholder="* Message"></textarea>
                            </div>
                            <input type="submit" class="btn btn-light text-color-dark font-weight-bold positive-ls-3 btn-px-5 py-3" value="SUBMIT" />
                        </form>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-lg-6 p-0">
            <section class="section section-no-border bg-dark overflow-hidden h-100 m-0">
                <div class="row py-5-5 m-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                    <div class="col-half-section col-half-section-left ps-lg-5">
                        <h3 class="font-weight-bold text-color-light line-height-1 text-4 ls-0 mb-1">TALK TO A SPECIALIST</h3>
                        <h2 class="text-color-light font-weight-bold text-8 ls-0 mb-3">Let's Talk Business</h2>
                        <p class="text-color-grey line-height-9 text-3-5 mb-5-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismodac, finibus vitae dui rem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        <div class="d-flex align-items-center">
                            <i class="icons icon-phone text-9 text-color-light position-relative bottom-1"></i>
                            <a href="tel:0123456789" class="text-4-5 font-weight-bold text-color-light opacity-hover-8 text-decoration-none ps-3-5">(800) 123-4567</a>
                        </div>
                        <div class="d-flex align-items-center my-5-5">
                            <img width="38" height="38" src="img/demos/finance/icons/email.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                            <a href="mailto:example@domain.com" class="text-4-5 font-weight-bold text-color-light opacity-hover-8 text-decoration-none ps-3-5">porto@domain.com</a>
                        </div>
                        <div class="d-flex align-items-center pe-lg-5 mb-5">
                            <img width="38" height="38" src="img/demos/finance/icons/map-pin.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                            <p class="text-color-light font-weight-bold text-4-5 mb-0 ps-3-5 pe-lg-5 me-lg-5">123 Street Name, New York NY 10000, USA</p>
                        </div>
                        <a href="demo-finance-company.html" class="btn btn-light text-color-dark font-weight-bold positive-ls-3 btn-px-5 py-3">ABOUT US</a>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

@endsection


