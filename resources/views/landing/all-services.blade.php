@extends('layouts.landing.master')
@section('title', 'Kementerian Agama Kab. Pesisir Selatan - All Services')

@section('_styles')

<style>
    .all-services {
        background-image: url('https://res.cloudinary.com/dezj1x6xp/image/upload/c_fill,ar_2.5,q_50/v1687262524/PandanViewMandeh/_PV1_y2h6yl.jpg');
        background-size: cover;
        opacity: 0.8;
    }

</style>

@endsection


@section('content')

<div class="all-services text-secondary px-4 py-5 text-center">
    <div class="py-5">
        <h1 class="display-5 fw-bold text-white">Kementerian Agama Kab. Pesisir Selatan</h1>
        <div class="col-lg-6 mx-auto py-3">
            <p class="fs-5 mb-4">Semua Pelayanan</p>
        </div>
    </div>
</div>


<main id="main">


    <section id="services" class="services">
        <div class="container">

            <div class="row d-flex align-items-stretch">

                @foreach($services as $key => $service)
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="py-3">
                        <div class="card">
                            <img src="{{ $service->rectangle_content_image }}" class="card-img-top" alt="{{ $service->slug }}">
                            <div class="card-body" style="font-size: smaller">
                                <h5 class="card-title">{{ $service->{$titleLocale} }}</h5>
                                <p class="card-text">{{ \Illuminate\Support\Str::limit($service->description, 200, '...') }}</p>
                                <a href="{{ $service->next_url }}" class="btn btn-primary" style="font-size: smaller">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-md-6">
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
                </div> --}}
            </div>

        </div>
    </section>

</main><!-- End #main -->
@endsection
