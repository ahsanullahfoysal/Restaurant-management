@extends('layout');
@section('content')

<div class="container">
    <div class="row g-5 align-items-center">
        <div class="col-lg-7 col-md-12">
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-4 animated bounceInDown">About us </small>
            <h1 class="display-1 mb-4 animated bounceInDown">About <span class="text-primary">Cater</span>Serv For Your Dream Event</h1>
            {{-- <a href="" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 me-4 animated bounceInLeft">Book Now</a>
            <a href="" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 animated bounceInLeft">Know More</a> --}}
        </div>
        <div class="col-lg-5 col-md-12">
            <img src="{{asset('assets/img/hero.png')}}" class="img-fluid rounded animated zoomIn" alt="">
        </div>
    </div>
</div> 
</div>
    {{--banner  --}}
<div class="container-fluid py-6">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                <img src="{{asset('assets/img/about.jpg')}}" class="img-fluid rounded" alt="">
            </div>
            <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s">
                <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">About Us</small>
                <h1 class="display-5 mb-4">Trusted By 200 + satisfied clients</h1>
                <p class="mb-4">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eit esdioilore magna aliqua. Ut enim ad minim veniam, 
                    quis nostrud exercitation ullaemco laboeeiris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                    dolor iesdein reprehendeerit in voluptate velit esse cillum dolore.</p>
                <div class="row g-4 text-dark mb-5">
                    <div class="col-sm-6">
                        <i class="fas fa-share text-primary me-2"></i>Fresh and Fast food Delivery
                    </div>
                    <div class="col-sm-6">
                        <i class="fas fa-share text-primary me-2"></i>24/7 Customer Support
                    </div>
                    <div class="col-sm-6">
                        <i class="fas fa-share text-primary me-2"></i>Easy Customization Options
                    </div>
                    <div class="col-sm-6">
                        <i class="fas fa-share text-primary me-2"></i>Delicious Deals for Delicious Meals
                    </div>
                </div>
                <a href="" class="btn btn-primary py-3 px-5 rounded-pill">About Us<i class="fas fa-arrow-right ps-2"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
<!-- Events Start -->
<div class="container-fluid event py-6">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Latest Events</small>
            <h1 class="display-5 mb-5">Our Social & Professional Events Gallery</h1>
        </div>
        <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp" data-wow-delay="0.1s">
                <li class="nav-item p-2">
                    <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                        <span class="text-dark" style="width: 150px;">All Events</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex py-2 mx-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                        <span class="text-dark" style="width: 150px;">Wedding</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                        <span class="text-dark" style="width: 150px;">Corporate</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                        <span class="text-dark" style="width: 150px;">Cocktail</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                        <span class="text-dark" style="width: 150px;">Buffet</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.1s">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="{{asset('assets/img/event-1.jpg')}}" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Wedding</h4>
                                            <a href="img/event-1.jpg" data-lightbox="event-1" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.3s">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="{{asset('assets/img/event-2.jpg')}}" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Corporate</h4>
                                            <a href="{{asset('assets/img/event-2.jpg')}}" data-lightbox="event-2" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.5s">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="{{asset('assets/img/event-3.jpg')}}" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Wedding</h4>
                                            <a href="img/event-3.jpg" data-lightbox="event-3" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.7s">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="{{asset('assets/img/event-4.jpg')}}" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Buffet</h4>
                                            <a href="{{asset('asets/img/event-4.jpg')}}" data-lightbox="event-4" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.1s">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="{{asset('assets/img/event-5.jpg')}}" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Cocktail</h4>
                                            <a href="img/event-5.jpg" data-lightbox="event-5" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.3s">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="{{asset('assets/img/event-6.jpg')}}" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Wedding</h4>
                                            <a href="img/event-6.jpg" data-lightbox="event-6" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.5s">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="{{asset('assets/img/event-7.jpg')}}" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Buffet</h4>
                                            <a href="{{asset('assets/img/event-7.jpg')}}" data-lightbox="event-7" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.7s">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="{{asset('assets/img/event-8.jpg')}}" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Corporate</h4>
                                            <a href="{{asset('assets/img/event-8.jpg')}}" data-lightbox="event-17" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-2" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="{{asset('assets/img/event-1.jpg')}}" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Wedding</h4>
                                            <a href="img/01.jpg" data-lightbox="event-8" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="{{asset('assets/img/event-2.jpg')}}" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Wedding</h4>
                                            <a href="img/01.jpg" data-lightbox="event-9" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-3" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="{{asset('assets/img/event-3.jpg')}}" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Corporate</h4>
                                            <a href="img/01.jpg" data-lightbox="event-10" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="{{asset('assets/img/event-4.jpg')}}" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Corporate</h4>
                                            <a href="img/01.jpg" data-lightbox="event-11" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-4" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="{{asset('assets/img/event-5.jpg')}}" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Cocktail</h4>
                                            <a href="img/01.jpg" data-lightbox="event-12" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="{{asset('assets/img/event-6.jpg')}}" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Cocktail</h4>
                                            <a href="img/01.jpg" data-lightbox="event-13" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-5" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="{{asset('assets/img/event-7.jpg')}}" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Buffet</h4>
                                            <a href="img/01.jpg" data-lightbox="event-14" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="{{asset('assets/img/event-8.jpg')}}" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Buffet</h4>
                                            <a href="img/01.jpg" data-lightbox="event-15" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Events End -->
@endsection