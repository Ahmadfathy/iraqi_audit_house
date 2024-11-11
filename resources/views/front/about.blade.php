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
                <h1 class="font-weight-bold text-color-light text-10 mb-0">Company</h1>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb breadcrumb-light d-block text-md-end text-4 mb-0">
                    <li><a href="demo-finance.html" class="text-decoration-none">Home</a></li>
                    <li class="text-upeercase active">Company</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container py-5-5 my-5-5">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <p class="text-4-5 line-height-6 mb-4-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. Vestibulum luctus laoreet lacinia. Maecenas luctus arcu ut orci lacinia ultrices. Praesent semper porta interdum. Etiam cursus, tortor at interdum rutrum, metus nibh tincidunt purus. </p>
            <p class="text-3-5 mb-4-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. Vestibulum luctus laoreet lacinia. Maecenas luctus arcu ut orci lacinia ultrices. Etiam cursus, tortor at interdum rutrum, metus nibh tincidunt purus, non tincidunt odio arcu quis erat. </p>
            <p class="text-3-5 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">Praesent semper porta interdum. Etiam cursus, tortor at interdum rutrum, metus nibh tincidunt purus, non tincidunt odio arcu quis erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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
        <div class="row process custom-process justify-content-center mt-4">
            <div class="process-step col-md-9 col-lg-4 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                <div class="process-step-circle border-width-3 mb-3">
                    <strong class="process-step-circle-content">
                        <img width="58" height="58" src="img/demos/finance/icons/box.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-stroke-color-primary'}" />
                    </strong>
                </div>
                <div class="process-step-content px-4">
                    <h4 class="font-weight-bold text-6 pb-1 mb-2">Product</h4>
                    <p class="text-3-5 text-color-dark mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis. </p>
                </div>
            </div>
            <div class="process-step col-md-9 col-lg-4 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                <div class="process-step-circle border-width-3 mb-3">
                    <strong class="process-step-circle-content">
                        <img width="58" height="58" src="img/demos/finance/icons/refresh-cw.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-stroke-color-primary'}" />
                    </strong>
                </div>
                <div class="process-step-content px-4">
                    <h4 class="font-weight-bold text-6 pb-1 mb-2">Process</h4>
                    <p class="text-3-5 text-color-dark mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis. </p>
                </div>
            </div>
            <div class="process-step col-md-9 col-lg-4 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                <div class="process-step-circle border-width-3 mb-3">
                    <strong class="process-step-circle-content">
                        <img width="58" height="58" src="img/demos/finance/icons/people.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                    </strong>
                </div>
                <div class="process-step-content px-4">
                    <h4 class="font-weight-bold text-6 pb-1 mb-2">People</h4>
                    <p class="text-3-5 text-color-dark mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis. </p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 p-0">
            <div class="h-100">
                <div class="row justify-content-end py-5 my-5-5 m-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="350">
                    <div class="col-half-section col-half-section-right ps-4">
                        <h4 class="font-weight-bold text-color-dark text-5-5 mb-2">Our Mission</h4>
                        <p class="text-3-5 mb-5-5">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula leo. </p>
                        <h4 class="font-weight-bold text-color-dark text-5-5 mb-2">Our Vision</h4>
                        <p class="text-3-5 mb-5-5">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula leo. </p>
                        <h4 class="font-weight-bold text-color-dark text-5-5 mb-2">Our Values</h4>
                        <p class="text-3-5 mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula leo. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 p-0">
            <section class="section section-no-border overlay overlay-show overlay-op-9 h-100 m-0" style="background: url(img/demos/finance/backgrounds/background-3.jpg)">
                <div class="row align-items-center h-100 position-relative z-index-2 py-5-5 m-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                    <div class="col-half-section col-half-section-left ps-xl-5 ms-lg-4-5">
                        <h4 class="font-weight-bold text-color-light text-5-5 mb-5-5">Our Skills</h4>
                        <div class="progress-bars custom-progress-bars-style-1">
                            <div class="progress-label d-flex justify-content-between mb-1">
                                <span class="text-color-light font-weight-medium text-2-5">STRATEGY ACCELERATION</span>
                                <span class="text-color-light font-weight-medium text-2-5">90%</span>
                            </div>
                            <div class="progress progress-xs progress-no-border-radius mb-4">
                                <div class="progress-bar progress-bar-light" data-appear-progress-animation="90%"></div>
                            </div>

                            <div class="progress-label d-flex justify-content-between pt-2 mb-1">
                                <span class="text-color-light font-weight-medium text-2-5">REVENUE GROWTH</span>
                                <span class="text-color-light font-weight-medium text-2-5">80%</span>
                            </div>
                            <div class="progress progress-xs progress-no-border-radius mb-4">
                                <div class="progress-bar progress-bar-light" data-appear-progress-animation="80%"></div>
                            </div>

                            <div class="progress-label d-flex justify-content-between pt-2 mb-1">
                                <span class="text-color-light font-weight-medium text-2-5">FIREWALK SALES</span>
                                <span class="text-color-light font-weight-medium text-2-5">50%</span>
                            </div>
                            <div class="progress progress-xs progress-no-border-radius mb-4">
                                <div class="progress-bar progress-bar-light" data-appear-progress-animation="50%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<section class="section overlay overlay-show overlay-color-primary custom-overlay-opacity-95 border-0 m-0" style="background: url(img/demos/finance/backgrounds/background-1.jpg); background-size: cover; background-position: center;">
    <div class="container position-relative z-index-2 pt-5">
        <div class="row">
            <div class="col text-center">
                <h3 class="font-weight-bold text-color-light text-4-5 ls-0 mb-2">MEET PORTO FINANCE</h3>
                <h2 class="font-weight-bold text-color-light text-11 line-height-3 line-height-md-1 mb-5">Accountant and Financial Planner in New York</h2>
                <p class="text-color-light text-3-5 line-height-9">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. In nibh ipsum, blandit id faucibus ac, finibus vitae dui. Orci sempre vestibulimun. </p>
            </div>
        </div>
        <div class="row counters counters-sm text-6 pb-5 pt-4 mt-5">
            <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                <div class="counter">
                    <strong class="text-color-light font-weight-extra-bold text-8 line-height-1" data-to="30" data-append="+">0</strong>
                    <span class="text-color-light font-weight-normal line-height-1 text-0 mt-0">Business Year</span>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                <div class="counter">
                    <strong class="text-color-light font-weight-extra-bold text-8 line-height-1" data-to="240" data-append="+">0</strong>
                    <span class="text-color-light font-weight-normal line-height-1 text-0 mt-0">Satiesfied Clients</span>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
                <div class="counter">
                    <strong class="text-color-light font-weight-extra-bold text-8 line-height-1" data-to="2000" data-append="+">0</strong>
                    <span class="text-color-light font-weight-normal line-height-1 text-0 mt-0">Successfull Cases</span>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="counter">
                    <strong class="text-color-light font-weight-extra-bold text-8 line-height-1" data-to="20" data-append="+">0</strong>
                    <span class="text-color-light font-weight-normal line-height-1 text-0 mt-0">Top Professionals</span>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container py-5 my-5">
    <div class="row">
        <div class="col text-center">
            <h3 class="font-weight-bold text-color-default line-height-1 text-4 ls-0 mb-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200" data-plugin-options="{'minWindowWidth': 0}">MEET OUR TEAM</h3>
            <h2 class="text-color-dark font-weight-bold text-8 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400" data-plugin-options="{'minWindowWidth': 0}">Real Professionals</h2>
        </div>
    </div>
    <div class="row justify-content-center appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600" data-plugin-options="{'minWindowWidth': 0}">
        <div class="col-sm-9 col-md-7 col-lg-4">
            <a href="demo-finance-team.html#teamMember1" class="text-decoration-none">
                <div class="card custom-card-style-2 border-0 border-radius-0">
                    <div class="card-img-top">
                        <img src="img/demos/finance/team/team-1.jpg" class="img-fluid" alt="John Doe Professional Image" />
                    </div>
                    <div class="card-body text-center">
                        <h4 class="text-color-dark font-weight-bold text-5-5 mb-1">John Doe</h4>
                        <h5 class="d-block text-color-default font-weight-semibold line-height-1 positive-ls-2 text-2 mb-3">CEO & FOUNDER</h5>
                        <p class="text-3-5">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis. </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-9 col-md-7 col-lg-4">
            <a href="demo-finance-team.html#teamMember2" class="text-decoration-none">
                <div class="card custom-card-style-2 border-0 border-radius-0">
                    <div class="card-img-top">
                        <img src="img/demos/finance/team/team-2.jpg" class="img-fluid" alt="Janice Doe Professional Image" />
                    </div>
                    <div class="card-body text-center">
                        <h4 class="text-color-dark font-weight-bold text-5-5 mb-1">Janice Doe</h4>
                        <h5 class="d-block text-color-default font-weight-semibold line-height-1 positive-ls-2 text-2 mb-3">CHIEF OFFICER</h5>
                        <p class="text-3-5">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis. </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-9 col-md-7 col-lg-4">
            <a href="demo-finance-team.html#teamMember3" class="text-decoration-none"> 
                <div class="card custom-card-style-2 border-0 border-radius-0">
                    <div class="card-img-top">
                        <img src="img/demos/finance/team/team-3.jpg" class="img-fluid" alt="Matt Doe Professional Image" />
                    </div>
                    <div class="card-body text-center">
                        <h4 class="text-color-dark font-weight-bold text-5-5 mb-1">Matt Doe</h4>
                        <h5 class="d-block text-color-default font-weight-semibold line-height-1 positive-ls-2 text-2 mb-3">RISK ANALYST</h5>
                        <p class="text-3-5">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis. </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 text-center mt-4">
            <a href="demo-finance-team.html" class="btn border rounded-0 px-5 btn-py-3 font-weight-bold positive-ls-2 text-color-dark bg-color-hover-primary text-color-hover-light">VIEW MORE</a>
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


