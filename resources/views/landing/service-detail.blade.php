@extends('layouts.landing.master')
@section('title', 'Kementerian Agama Kab. Pesisir Selatan - Service')

@section('_styles')

<style>
    .all-services::before {
        content: "";
        background-color: rgba(30, 35, 40, 0.6) !important;
    }

    .all-services::before {
        content: "";
        background-color: rgba(30, 35, 40, 0.6) !important;
    }

    .all-services {
        background-size: cover;
        background-image: url({{ $service->rectangle_content_image }});
        /* opacity: 0.5; */
        /* background-color: rgba(30, 35, 40, 0.6) !important; */
    }

</style>

@endsection


@section('content')

<div class="all-services text-secondary px-4 py-5 text-center">
    <div class="py-5">
        <div class="col-lg-6 mx-auto py-5">
            <p class="text-white" style="font-size: x-smaller!important;">&nbsp;</p>
        </div>
        <h1 class="display-5 fw-bold text-white py-5">{{ $service->{$titleLocale} }}</h1>
    </div>
</div>


<main id="main">

    @forelse($products as $key => $product)
    <section id="about" class="about  @if($key+1 == 1) pb-4 pt-5 @else pb-4 pt-0 @endif">
        <div class="container">
            <div class="row content align-item-center align-middle" style="align-items: center">
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <img src="{{$product->rectangle_cover_image}}" class="img img-fluid mx-auto" alt="Odoo • Text and Image" data-original-title="" title="" aria-describedby="tooltip617481" style="">
                </div>
                <div class="col-lg-6 pb-0 pt-0">
                    <h4>{{$product->{$titleLocale} }}</h4>
                    <p style="font-size: small; text-align:justify;">{!! nl2br($product->description) !!}</p>
                    {{-- <a style="font-size:smaller;" href="/{{isset($product->next_url) ? $product->next_url : ''}}" class="btn btn-success" data-original-title="" title="" aria-describedby="tooltip362623">Selengkapnya</a> --}}
                </div>
            </div>
        </div>
    </section><!-- End About Section -->
    @empty
    <section id="about" class="about pb-4 pt-5">
        <div class="container">
            <div class="row content align-item-center align-middle" style="align-items: center">
                <div class="col-lg-12 pt-4 pt-lg-0">
                    <h4 style="text-align: center">.: No Data Available :.</h4>

                </div>
            </div>
        </div>
    </section><!-- End About Section -->
    @endforelse

</main><!-- End #main -->
@endsection
