<!-- ======= Header ======= -->
<header id="header" class="fixed-top @if (request()->segment(1) != '') header-inner-pages @endif ">
    <div class="container d-flex align-items-center justify-content-lg-between">

        <h1 class="logo me-auto me-lg-0"><a href="index.html">kmg<span>.pessel</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        {{-- <a href="index.html" class="logo me-auto me-lg-0"><img src="{{ asset('sailor/img/logokmg.png') }}" alt="" class="img-fluid"></a> --}}
        {{-- <a href="/" class="logo me-auto"><img src="{{ asset('sailor/img/logo.png') }}" alt="" class="img-fluid"></a> --}}

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>


                <li><a href="/" @if (request()->segment(1) == '') class="active" @endif >{{ __('messages.menu.home') }}</a></li>

                <li class="dropdown"><a href="/all-services"><span>{{ __('messages.menu.services') }}</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>

                        @foreach ($selectedServices as $key => $service)
                        <li><a href="{!! $service->next_url !!}">{{ $service->{$titleLocale} }}</a>
                        </li>
                        @endforeach
                        {{-- <li><a href="/1">{!! $selectedServices !!}</a></li>
                <li><a href="/2">2</a></li>
                <li><a href="/3">3</a></li> --}}

                    </ul>
                </li>
                <li><a href="/aboutus" @if (request()->segment(1) == 'aboutus') class="active" @endif>{{ __('messages.menu.aboutus') }}</a></li>
                <li><a href="/gallery" @if (request()->segment(1) == 'gallery') class="active" @endif>{{ __('messages.menu.gallery') }}</a></li>
                <li><a href="/contact" @if (request()->segment(1) == 'contact') class="active" @endif>{{ __('messages.menu.contact') }}</a></li>
                {{-- <li><a href="/login" @if (request()->segment(1) == 'login') class="active" @endif>{{ __('messages.menu.login') }}</a></li> --}}


                <li class="dropdown"><a href="#"><span>{{ (session()->get('locale') == 'en') ? 'English' : 'Bahasa' }}</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/lang/change/?lang=en">English</a></li>
                        <li><a href="/lang/change/?lang=id">Bahasa</a></li>
                    </ul>
                </li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        {{-- <a href="#about" class="get-started-btn scrollto">Get Started</a> --}}

    </div>
</header><!-- End Header -->
