<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>

    {{-- Ambil Punya Orang --}}
    <meta property="fb:app_id" content="1880640628839943">
    <meta property="og:site_name" content="WEB PORTAL KEMENTERIAN AGAMA KABUPATEN PESISIR SELATAN">

    <meta property="og:title" content="WEB PORTAL - Kementerian Agama Kab. Pesisir Selatan RESORT">
    <meta name="twitter:title" content="WEB PORTAL - Kementerian Agama Kab. Pesisir Selatan RESORT">
    <meta property="og:locale" content="id_ID">
    <meta property="og:description" content="Selamat datang di halaman resmi Kementerian Agama Kabupaten Pesisir Selatan. Kami bertekad untuk memberikan pelayanan yang terbaik dalam memenuhi kebutuhan keagamaan masyarakat. Dengan fokus pada keberagaman agama, kami berkomitmen untuk memajukan kerukunan antarumat beragama. Temukan informasi terkini seputar kegiatan, program, dan layanan kami di sini. Bersama-sama, mari kita tingkatkan pemahaman, toleransi, dan harmoni kehidupan beragama di Kabupaten Pesisir Selatan." />




    <meta name="description" content="Selamat datang di halaman resmi Kementerian Agama Kabupaten Pesisir Selatan. Kami bertekad untuk memberikan pelayanan terbaik dalam memenuhi kebutuhan keagamaan masyarakat. Dengan fokus pada keberagaman agama, kami berkomitmen untuk memajukan kerukunan antarumat beragama. Temukan informasi terkini seputar kegiatan, program, dan layanan kami di sini. Bersama-sama, mari kita tingkatkan pemahaman, toleransi, dan harmoni kehidupan beragama di Kabupaten Pesisir Selatan." />
    <meta name="keywords" content="Kementerian Agama, Kabupaten Pesisir Selatan, keagamaan, kerukunan beragama, informasi kegiatan, program agama, layanan keagamaan, pemahaman agama, toleransi beragama, harmoni kehidupan beragama" />
    <meta name="author" content="Pramana Yuda Sayeti" />
    <meta name="robots" content="all" />
    <meta name="revisit-after" content="1 Days" />
    <meta property="og:locale" content="id-ID" />
    <meta property="og:site_name" content="Kementerian Agama Kabupaten Pesisir Selatan" />
    <meta property="og:image" content="{{ asset('sailor/img/logokmg.png') }}" />
    <meta property="og:image:width" content="180" />
    <meta property="og:image:height" content="50" />
    <meta property="og:type" content=website />
    <meta property="og:description" content="Selamat datang di halaman resmi Kementerian Agama Kabupaten Pesisir Selatan. Kami bertekad untuk memberikan pelayanan yang terbaik dalam memenuhi kebutuhan keagamaan masyarakat. Dengan fokus pada keberagaman agama, kami berkomitmen untuk memajukan kerukunan antarumat beragama. Temukan informasi terkini seputar kegiatan, program, dan layanan kami di sini. Bersama-sama, mari kita tingkatkan pemahaman, toleransi, dan harmoni kehidupan beragama di Kabupaten Pesisir Selatan." />
    <meta property="og:url" content="https://kemenagpessel.com" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="Kementerian Agama Kab. Pesisir Selatan" />
    <meta name="twitter:title" content="Kementerian Agama Kab. Pesisir Selatan" />
    <meta name="twitter:description" content="Selamat datang di halaman resmi Kementerian Agama Kabupaten Pesisir Selatan. Kami bertekad untuk memberikan pelayanan terbaik dalam memenuhi kebutuhan keagamaan masyarakat. Dengan fokus pada keberagaman agama, kami berkomitmen untuk memajukan kerukunan antarumat beragama. Temukan informasi terkini seputar kegiatan, program, dan layanan kami di sini. Bersama-sama, mari kita tingkatkan pemahaman, toleransi, dan harmoni kehidupan beragama di Kabupaten Pesisir Selatan." />
    <meta name="twitter:image" content="{{ asset('sailor/img/logokmg.png') }}" />
    <link rel="canonical" href="https://kemenagpessel.com" />
    <link rel="alternate" hreflang="en-US" href="https://kemenagpessel.com" />
    <link rel="shortcut icon" type="image/png" href="https://kemenagpessel.com" />


    <!-- Favicons -->
    <link href="{{ asset('sailor/img/favicon_io/favicon-32x32.png') }}" rel="icon">
    <link href="{{ asset('sailor/img/apple-touch-icon.png') }}" rel="'apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- ======= Styles ======= -->
    @include('layouts.landing.styles')

    @yield('_styles')

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6641141866403336" crossorigin="anonymous"></script>
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=64a41dc3d2ddeb0019614a76&product=sticky-share-buttons' async='async'></script>
</head>

<body>
    <div class="sharethis-sticky-share-buttons"></div>


    <!-- ======= Header ======= -->
    @include('layouts.landing.header')

    <!-- ======= Main Content ======= -->
    @yield('content')

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6641141866403336" crossorigin="anonymous"></script>
    <!-- Ad Satu -->
    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6641141866403336" data-ad-slot="9954830031" data-ad-format="auto" data-full-width-responsive="true"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});

    </script>

    <!-- ======= Footer ======= -->
    @include('layouts.landing.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- ======= Scripts ======= -->
    @include('layouts.landing.scripts')

    @yield('_scripts')


    <script>
        (function(d) {
            var s = d.createElement("script");
            s.setAttribute("data-account", "neIAOM4AP7");
            s.setAttribute("src", "https://cdn.userway.org/widget.js");
            (d.body || d.head).appendChild(s);
        })(document)

    </script><noscript>Please ensure Javascript is enabled for purposes of <a href="https://userway.org">website accessibility</a></noscript>

</body>

</html>
