@extends('layouts.landing.master')
@section('title', 'Kementerian Agama Kab. Pesisir Selatan')

@section('_styles')
<style>
    #hero {
        width: 100% !important;
        height: 100vh !important;
        background: url('https://res.cloudinary.com/dezj1x6xp/image/upload/v1688521190/fkemenag_ytkm5s.jpg') !important;
        background-size: cover !important;
        position: relative !important;
    }

    #styletitle {
        text-transform: uppercase;
        font-weight: bolder;
        letter-spacing: 2px;
        color: #000 !important;
        text-shadow: -1px -1px 0 #fff, -1px 1px 0 #f8f9fa, 1px -1px 0 #fff, 1px 1px 0 #fff;
    }

    @media (max-width: 768px) {
        #hero {
            height: auto !important;
        }
    }

</style>
@endsection

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-12 col-lg-12">
                <img src="{{ asset('sailor/img/logokmg.png') }}" width="150" class="img-fluid">
                <h2 id="styletitle">Kantor Kementerian Agama <br />Kabupaten Pesisir Selatanaa<span></span></h2>
                {{-- <h2>~ Ikhlas Beramal ~</h2> --}}
            </div>
        </div>

        <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
            <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                    <i class="ri-store-line"></i>
                    <h3><a target="_blank" href="https://datuak.kemenagpessel.com">Datuak Pessel</a></h3>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                    <i class="ri-bar-chart-box-line"></i>
                    <h3><a target="_blank" href="https://ptsp.kemenagpessel.com">PTSP Online Mandiri</a></h3>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                    <i class="ri-calendar-todo-line"></i>
                    <h3><a target="_blank" href="https://sikm.kemenagpessel.com">Survey Kepuasan</a></h3>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                    <i class="ri-paint-brush-line"></i>
                    <h3><a target="_blank" href="https://agenda.kemenagpessel.com">Agenda Pimpinan</a></h3>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                    <i class="ri-database-2-line"></i>
                    <h3><a target="_blank" href="https://pesisirselatan.kemenag.go.id/v1">Informasi & Berita</a></h3>
                </div>
            </div>
        </div>

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
                    <img class="lazy" data-src="{{$service->square_cover_image}}" class="img img-fluid mx-auto" alt="Odoo • Text and Image" data-original-title="" title="" aria-describedby="tooltip617481" style="">
                </div>
                <div class="col-lg-6 pb-0 pt-0">
                    <h4>{{$service->{$titleLocale} }}</h4>
                    <p style="text-align:justify;">{!! nl2br($service->description) !!}</p>
                    <a style="font-size:smaller;" href="{!! '/' .isset($service->next_url) ? $service->next_url : '' !!}" class="btn btn-success" data-original-title="" title="" aria-describedby="tooltip362623">Selengkapnya</a>
                </div>
                @else
                <div class="col-lg-6 pb-0 pt-0">
                    <h4>{{$service->{$titleLocale} }}</h4>
                    <p style="text-align:justify;">{!! nl2br($service->description) !!}</p>
                    <a style="font-size:smaller;" href="{!! '/' .isset($service->next_url) ? $service->next_url : '' !!}" class="btn btn-success" data-original-title="" title="" aria-describedby="tooltip362623">Selengkapnya</a>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <img class="lazy" data-src="{{$service->square_cover_image}}" class="img img-fluid mx-auto" alt="Odoo • Text and Image" data-original-title="" title="" aria-describedby="tooltip617481" style="">
                </div>
                @endif
            </div>
        </div>
    </section><!-- End About Section -->
    @endforeach

    <section id="about" class="about  @if($key+1 == 1) pb-4 pt-5 @else pb-4 pt-0 @endif">
        <div class="container">
            <div class="row content align-item-center align-middle" style="align-items: center">
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <iframe width="530" height="315" src="https://www.youtube.com/embed/-h9dNRIuiiA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    {{-- <iframe class="img img-fluid mx-auto" style="width: 100%; height:380px;" src="//www.youtube.com/embed/gzJEYkoWHro?autoplay=0&amp;rel=0&amp;controls=0" frameborder="0" allowfullscreen="allowfullscreen"></iframe> --}}
                </div>
                <div class="col-lg-6 pb-0 pt-0">
                    <h4>
                        <i>Pelayanan terhadap Kelompok Ramah Rentan</i>
                    </h4>

                    <p>
                        Kementerian Agama Kabupaten Pesisir Selatan telah memberikan perhatian khusus dalam memberikan pelayanan kepada kelompok ramah rentan. Kelompok ramah rentan mencakup orang-orang dengan kebutuhan khusus, lansia, anak-anak, perempuan, dan masyarakat yang berada dalam kondisi ekonomi rendah.


                        {{-- Berikut adalah elaborasi mengenai pelayanan yang mungkin telah diberikan:
                        <ol>
                            <li>Pelayanan Keagamaan Inklusif</li>
                            <li>Program Bimbingan dan Konseling</li>
                            <li>Pelatihan dan Pemberdayaan</li>
                            <li>Pemberdayaan Perempuan</li>
                        </ol> --}}


                    </p>
                </div>

            </div>
        </div>
    </section><!-- End About Section -->

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6641141866403336" crossorigin="anonymous"></script>
    <!-- Ad Satu -->
    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6641141866403336" data-ad-slot="9954830031" data-ad-format="auto" data-full-width-responsive="true"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});

    </script>

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


@section('_scripts')

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var lazyloadImages = document.querySelectorAll("img.lazy");
        var lazyloadThrottleTimeout;

        function lazyload() {
            if (lazyloadThrottleTimeout) {
                clearTimeout(lazyloadThrottleTimeout);
            }

            lazyloadThrottleTimeout = setTimeout(function() {
                var scrollTop = window.pageYOffset;
                lazyloadImages.forEach(function(img) {
                    if (img.offsetTop < (window.innerHeight + scrollTop)) {
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                    }
                });
                if (lazyloadImages.length == 0) {
                    document.removeEventListener("scroll", lazyload);
                    window.removeEventListener("resize", lazyload);
                    window.removeEventListener("orientationChange", lazyload);
                }
            }, 20);
        }

        document.addEventListener("scroll", lazyload);
        window.addEventListener("resize", lazyload);
        window.addEventListener("orientationChange", lazyload);
    });


    document.addEventListener("DOMContentLoaded", function() {
        var lazyloadImages;

        if ("IntersectionObserver" in window) {
            lazyloadImages = document.querySelectorAll(".lazy");
            var imageObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        var image = entry.target;
                        image.classList.remove("lazy");
                        imageObserver.unobserve(image);
                    }
                });
            });

            lazyloadImages.forEach(function(image) {
                imageObserver.observe(image);
            });
        } else {
            var lazyloadThrottleTimeout;
            lazyloadImages = document.querySelectorAll(".lazy");

            function lazyload() {
                if (lazyloadThrottleTimeout) {
                    clearTimeout(lazyloadThrottleTimeout);
                }

                lazyloadThrottleTimeout = setTimeout(function() {
                    var scrollTop = window.pageYOffset;
                    lazyloadImages.forEach(function(img) {
                        if (img.offsetTop < (window.innerHeight + scrollTop)) {
                            img.src = img.dataset.src;
                            img.classList.remove('lazy');
                        }
                    });
                    if (lazyloadImages.length == 0) {
                        document.removeEventListener("scroll", lazyload);
                        window.removeEventListener("resize", lazyload);
                        window.removeEventListener("orientationChange", lazyload);
                    }
                }, 20);
            }

            document.addEventListener("scroll", lazyload);
            window.addEventListener("resize", lazyload);
            window.addEventListener("orientationChange", lazyload);
        }
    })

</script>

@endsection
