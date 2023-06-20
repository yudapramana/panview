@extends('layouts.landing.master')
@section('title', 'Pandan View Mandeh')


@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(sailor/img/slide/pv-1.jpg)">
                <div class="carousel-container">
                    <div class="container">

                        <h2 class="animate__animated animate__fadeInDown">Pandan View <span>Mandeh</span></h2>
                        <p class="animate__animated animate__fadeInUp">{{ __('messages.carousel.description') }}</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">{{ __('messages.carousel.more') }}</a>

                        <div class="carousel-caption text-end animate__animated animate__fadeInRight">
                            <div class="s_share text-end">

                                <a href="https://web.facebook.com/{{$accountfb}}" class="s_share_facebook" target="_blank" data-original-title="" title="" aria-describedby="tooltip278388">
                                    <i class="coba-fb fa fa-brands fa-facebook rounded shadow-sm" data-original-title="" title="" aria-describedby="tooltip702620"></i>
                                </a>&nbsp;
                                <a href="https://twitter.com/{{$account}}" class="s_share_twitter" target="_blank">
                                    <i class="fa fa-1x fa-brands fa-twitter rounded shadow-sm" data-original-title="" title="" aria-describedby="tooltip560917"></i>
                                </a>&nbsp;
                                <a href="https://www.instagram.com/{{$account}}" class="s_share_linkedin" target="_blank">
                                    <span class="fa fa-1x fa-brands fa-instagram rounded shadow-sm" style="color: rgb(255, 0, 0);" data-original-title="" title="" aria-describedby="tooltip780758"></span>
                                </a>&nbsp;
                                <a href="https://www.youtube.com/channel/{{$channel}}" class="s_share_google" target="_blank" data-original-title="" title="" aria-describedby="tooltip37995">
                                    <span class="fa fa-1x fa-brands fa-youtube rounded shadow-sm" style="" data-original-title="" title="" aria-describedby="tooltip294870"></span>
                                </a>&nbsp;
                                <a href="https://www.tiktok.com/@pandan_view_mandeh" style="color:black !important;" class="s_share_tiktok" target="_blank" data-original-title="" title="" aria-describedby="tooltip37995">
                                    <span class="fa fa-1x fa-brands fa-tiktok rounded shadow-sm" style="color:black !important;" data-original-title="" title="" aria-describedby="tooltip294870"></span>
                                </a>
                            </div>

                            <div class="pb16 pt16 s_btn text-right pt-2" data-name="Buttons">
                                <a href="https://wa.me/6281210003536" class="flat btn btn-secondary flat" data-original-title="" title="" aria-describedby="tooltip695437" style="font-size:small!important;">&nbsp;{{ __('messages.carousel.book') }}</a>
                                <a href="/contact" class="btn btn-success flat flat pandanview" data-original-title="" title="" aria-describedby="tooltip296367" style="font-size:small!important;">{{ __('messages.carousel.contact') }}</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url(sailor/img/slide/pv-3.jpg)">
                <div class="carousel-container">
                    <div class="container">

                        <h2>Pandan View <span>Mandeh</span></h2>
                        <p>{{ __('messages.carousel.description') }}</p>
                        <a href="#about" class="btn-get-started scrollto">{{ __('messages.carousel.more') }}</a>

                        <div class="carousel-caption text-end">
                            <div class="s_share text-end">

                                <a href="https://web.facebook.com/{{$accountfb}}" class="s_share_facebook" target="_blank" data-original-title="" title="" aria-describedby="tooltip278388">
                                    <i class="coba-fb fa fa-brands fa-facebook rounded shadow-sm" data-original-title="" title="" aria-describedby="tooltip702620"></i>
                                </a>&nbsp;
                                <a href="https://twitter.com/{{$account}}" class="s_share_twitter" target="_blank">
                                    <i class="fa fa-1x fa-brands fa-twitter rounded shadow-sm" data-original-title="" title="" aria-describedby="tooltip560917"></i>
                                </a>&nbsp;
                                <a href="https://www.instagram.com/{{$account}}" class="s_share_linkedin" target="_blank">
                                    <span class="fa fa-1x fa-brands fa-instagram rounded shadow-sm" style="color: rgb(255, 0, 0);" data-original-title="" title="" aria-describedby="tooltip780758"></span>
                                </a>&nbsp;
                                <a href="https://www.youtube.com/channel/{{$channel}}" class="s_share_google" target="_blank" data-original-title="" title="" aria-describedby="tooltip37995">
                                    <span class="fa fa-1x fa-brands fa-youtube rounded shadow-sm" style="" data-original-title="" title="" aria-describedby="tooltip294870"></span>
                                </a>&nbsp;
                                <a href="https://www.tiktok.com/@pandan_view_mandeh" style="color:black !important;" class="s_share_tiktok" target="_blank" data-original-title="" title="" aria-describedby="tooltip37995">
                                    <span class="fa fa-1x fa-brands fa-tiktok rounded shadow-sm" style="color:black !important;" data-original-title="" title="" aria-describedby="tooltip294870"></span>
                                </a>
                            </div>

                            <div class="pb16 pt16 s_btn text-right pt-2" data-name="Buttons">
                                <a href="https://wa.me/6281210003536" class="flat btn btn-secondary flat" data-original-title="" title="" aria-describedby="tooltip695437" style="font-size:small!important;">&nbsp;{{ __('messages.carousel.book') }}</a>
                                <a href="/contact" class="btn btn-success flat flat pandanview" data-original-title="" title="" aria-describedby="tooltip296367" style="font-size:small!important;">{{ __('messages.carousel.contact') }}</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url(sailor/img/slide/pv-4.jpg)">
                <div class="carousel-container">
                    <div class="container">

                        <h2>Pandan View <span>Mandeh</span></h2>
                        <p>{{ __('messages.carousel.description') }}</p>
                        <a href="#about" class="btn-get-started scrollto">{{ __('messages.carousel.more') }}</a>

                        <div class="carousel-caption text-end">
                            <div class="s_share text-end">

                                <a href="https://web.facebook.com/{{$accountfb}}" class="s_share_facebook" target="_blank" data-original-title="" title="" aria-describedby="tooltip278388">
                                    <i class="coba-fb fa fa-brands fa-facebook rounded shadow-sm" data-original-title="" title="" aria-describedby="tooltip702620"></i>
                                </a>&nbsp;
                                <a href="https://twitter.com/{{$account}}" class="s_share_twitter" target="_blank">
                                    <i class="fa fa-1x fa-brands fa-twitter rounded shadow-sm" data-original-title="" title="" aria-describedby="tooltip560917"></i>
                                </a>&nbsp;
                                <a href="https://www.instagram.com/{{$account}}" class="s_share_linkedin" target="_blank">
                                    <span class="fa fa-1x fa-brands fa-instagram rounded shadow-sm" style="color: rgb(255, 0, 0);" data-original-title="" title="" aria-describedby="tooltip780758"></span>
                                </a>&nbsp;
                                <a href="https://www.youtube.com/channel/{{$channel}}" class="s_share_google" target="_blank" data-original-title="" title="" aria-describedby="tooltip37995">
                                    <span class="fa fa-1x fa-brands fa-youtube rounded shadow-sm" style="" data-original-title="" title="" aria-describedby="tooltip294870"></span>
                                </a>&nbsp;
                                <a href="https://www.tiktok.com/@pandan_view_mandeh" style="color:black !important;" class="s_share_tiktok" target="_blank" data-original-title="" title="" aria-describedby="tooltip37995">
                                    <span class="fa fa-1x fa-brands fa-tiktok rounded shadow-sm" style="color:black !important;" data-original-title="" title="" aria-describedby="tooltip294870"></span>
                                </a>
                            </div>

                            <div class="pb16 pt16 s_btn text-right pt-2" data-name="Buttons">
                                <a href="https://wa.me/6281210003536" class="flat btn btn-secondary flat" data-original-title="" title="" aria-describedby="tooltip695437" style="font-size:small!important;">&nbsp;{{ __('messages.carousel.book') }}</a>
                                <a href="/contact" class="btn btn-success flat flat pandanview" data-original-title="" title="" aria-describedby="tooltip296367" style="font-size:small!important;">{{ __('messages.carousel.contact') }}</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 4 -->
            <div class="carousel-item" style="background-image: url(sailor/img/slide/pv-6.jpg)">
                <div class="carousel-container">
                    <div class="container">

                        <h2>Pandan View <span>Mandeh</span></h2>
                        <p>{{ __('messages.carousel.description') }}</p>
                        <a href="#about" class="btn-get-started scrollto">{{ __('messages.carousel.more') }}</a>

                        <div class="carousel-caption text-end">
                            <div class="s_share text-end">

                                <a href="https://web.facebook.com/{{$accountfb}}" class="s_share_facebook" target="_blank" data-original-title="" title="" aria-describedby="tooltip278388">
                                    <i class="coba-fb fa fa-brands fa-facebook rounded shadow-sm" data-original-title="" title="" aria-describedby="tooltip702620"></i>
                                </a>&nbsp;
                                <a href="https://twitter.com/{{$account}}" class="s_share_twitter" target="_blank">
                                    <i class="fa fa-1x fa-brands fa-twitter rounded shadow-sm" data-original-title="" title="" aria-describedby="tooltip560917"></i>
                                </a>&nbsp;
                                <a href="https://www.instagram.com/{{$account}}" class="s_share_linkedin" target="_blank">
                                    <span class="fa fa-1x fa-brands fa-instagram rounded shadow-sm" style="color: rgb(255, 0, 0);" data-original-title="" title="" aria-describedby="tooltip780758"></span>
                                </a>&nbsp;
                                <a href="https://www.youtube.com/channel/{{$channel}}" class="s_share_google" target="_blank" data-original-title="" title="" aria-describedby="tooltip37995">
                                    <span class="fa fa-1x fa-brands fa-youtube rounded shadow-sm" style="" data-original-title="" title="" aria-describedby="tooltip294870"></span>
                                </a>&nbsp;
                                <a href="https://www.tiktok.com/@pandan_view_mandeh" style="color:black !important;" class="s_share_tiktok" target="_blank" data-original-title="" title="" aria-describedby="tooltip37995">
                                    <span class="fa fa-1x fa-brands fa-tiktok rounded shadow-sm" style="color:black !important;" data-original-title="" title="" aria-describedby="tooltip294870"></span>
                                </a>
                            </div>

                            <div class="pb16 pt16 s_btn text-right pt-2" data-name="Buttons">
                                <a href="https://wa.me/6281210003536" class="flat btn btn-secondary flat" data-original-title="" title="" aria-describedby="tooltip695437" style="font-size:small!important;">&nbsp;{{ __('messages.carousel.book') }}</a>
                                <a href="/contact" class="btn btn-success flat flat pandanview" data-original-title="" title="" aria-describedby="tooltip296367" style="font-size:small!important;">{{ __('messages.carousel.contact') }}</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 5 -->
            <div class="carousel-item" style="background-image: url(sailor/img/slide/pv-7.jpg)">
                <div class="carousel-container">
                    <div class="container">

                        <h2>Pandan View <span>Mandeh</span></h2>
                        <p>{{ __('messages.carousel.description') }}</p>
                        <a href="#about" class="btn-get-started scrollto">{{ __('messages.carousel.more') }}</a>

                        <div class="carousel-caption text-end">
                            <div class="s_share text-end">

                                <a href="https://web.facebook.com/{{$accountfb}}" class="s_share_facebook" target="_blank" data-original-title="" title="" aria-describedby="tooltip278388">
                                    <i class="coba-fb fa fa-brands fa-facebook rounded shadow-sm" data-original-title="" title="" aria-describedby="tooltip702620"></i>
                                </a>&nbsp;
                                <a href="https://twitter.com/{{$account}}" class="s_share_twitter" target="_blank">
                                    <i class="fa fa-1x fa-brands fa-twitter rounded shadow-sm" data-original-title="" title="" aria-describedby="tooltip560917"></i>
                                </a>&nbsp;
                                <a href="https://www.instagram.com/{{$account}}" class="s_share_linkedin" target="_blank">
                                    <span class="fa fa-1x fa-brands fa-instagram rounded shadow-sm" style="color: rgb(255, 0, 0);" data-original-title="" title="" aria-describedby="tooltip780758"></span>
                                </a>&nbsp;
                                <a href="https://www.youtube.com/channel/{{$channel}}" class="s_share_google" target="_blank" data-original-title="" title="" aria-describedby="tooltip37995">
                                    <span class="fa fa-1x fa-brands fa-youtube rounded shadow-sm" style="" data-original-title="" title="" aria-describedby="tooltip294870"></span>
                                </a>&nbsp;
                                <a href="https://www.tiktok.com/@pandan_view_mandeh" style="color:black !important;" class="s_share_tiktok" target="_blank" data-original-title="" title="" aria-describedby="tooltip37995">
                                    <span class="fa fa-1x fa-brands fa-tiktok rounded shadow-sm" style="color:black !important;" data-original-title="" title="" aria-describedby="tooltip294870"></span>
                                </a>
                            </div>

                            <div class="pb16 pt16 s_btn text-right pt-2" data-name="Buttons">
                                <a href="https://wa.me/6281210003536" class="flat btn btn-secondary flat" data-original-title="" title="" aria-describedby="tooltip695437" style="font-size:small!important;">&nbsp;{{ __('messages.carousel.book') }}</a>
                                <a href="/contact" class="btn btn-success flat flat pandanview" data-original-title="" title="" aria-describedby="tooltip296367" style="font-size:small!important;">{{ __('messages.carousel.contact') }}</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->


    @foreach($services as $key => $service)
    <section id="about" class="about  @if($key+1 == 1) pb-4 pt-5 @else pb-4 pt-0 @endif">
        <div class="container">
            <div class="row content align-item-center align-middle" style="align-items: center">
                @if( ($key+1) % 2 == 0)
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <img src="{{$service->square_cover_image}}" class="img img-fluid mx-auto" alt="Odoo • Text and Image" data-original-title="" title="" aria-describedby="tooltip617481" style="">
                </div>
                <div class="col-lg-6 pb-0 pt-0">
                    <h4>{{$service->title}}</h4>
                    <p style="font-size: small; text-align:justify;">{!! nl2br($service->description) !!}</p>
                    <a href="/{{isset($service->next_url) ? $service->next_url : ''}}" class="btn btn-success" data-original-title="" title="" aria-describedby="tooltip362623">Selengkapnya</a>
                </div>
                @else
                <div class="col-lg-6 pb-0 pt-0">
                    <h4>{{$service->title}}</h4>
                    <p style="font-size: small; text-align:justify;">{!! nl2br($service->description) !!}</p>
                    <a href="/{{isset($service->next_url) ? $service->next_url : ''}}" class="btn btn-success" data-original-title="" title="" aria-describedby="tooltip362623">Selengkapnya</a>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <img src="{{$service->square_cover_image}}" class="img img-fluid mx-auto" alt="Odoo • Text and Image" data-original-title="" title="" aria-describedby="tooltip617481" style="">
                </div>
                @endif
            </div>
        </div>
    </section><!-- End About Section -->
    @endforeach

    {{-- <div class="row content">
                <div class="col-lg-6">
                    <h2>Eum ipsam laborum deleniti velitena</h2>
                    <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assum perenda sruen jonee trave</h3>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
                        <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
                    </ul>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                    </p>
                </div>
            </div> --}}



    <!-- ======= Clients Section ======= -->
    {{-- <section id="clients" class="clients section-bg">
        <div class="container">

            <div class="row">

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('sailor/img/clients/client-1.png')}}" class="img-fluid" alt="">
    </div>

    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="{{ asset('sailor/img/clients/client-2.png')}}" class="img-fluid" alt="">
    </div>

    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="{{ asset('sailor/img/clients/client-3.png')}}" class="img-fluid" alt="">
    </div>

    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="{{ asset('sailor/img/clients/client-4.png')}}" class="img-fluid" alt="">
    </div>

    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="{{ asset('sailor/img/clients/client-5.png')}}" class="img-fluid" alt="">
    </div>

    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="{{ asset('sailor/img/clients/client-6.png')}}" class="img-fluid" alt="">
    </div>

    </div>

    </div>
    </section> --}}
    <!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    {{-- <section id="services" class="services">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="icon-box">
                        <i class="bi bi-briefcase"></i>
                        <h4><a href="#">Lorem Ipsum</a></h4>
                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="bi bi-card-checklist"></i>
                        <h4><a href="#">Dolor Sitema</a></h4>
                        <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="bi bi-bar-chart"></i>
                        <h4><a href="#">Sed ut perspiciatis</a></h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="bi bi-binoculars"></i>
                        <h4><a href="#">Nemo Enim</a></h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="bi bi-brightness-high"></i>
                        <h4><a href="#">Magni Dolore</a></h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="bi bi-calendar4-week"></i>
                        <h4><a href="#">Eiusmod Tempor</a></h4>
                        <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                    </div>
                </div>
            </div>

        </div>
    </section> --}}
    <!-- End Services Section -->

</main><!-- End #main -->
@endsection
