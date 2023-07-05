<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>

    {{-- Ambil Punya Orang --}}
    <meta property="fb:app_id" content="1880640628839943">
    <meta property="og:site_name" content="WISATA PULAU SUMATERA BARAT">

    <meta property="og:title" content="WISATA PULAU SUMATERA BARAT ~ PANDAN VIEW MANDEH RESORT">
    <meta name="twitter:title" content="WISATA PULAU SUMATERA BARAT ~ PANDAN VIEW MANDEH RESORT">
    <meta property="og:locale" content="id_ID">
    <meta property="og:description" content="Pandan View Mandeh Resort Pandan View Mandeh terletak dikawasan destinasi wisata bahari Teluk Mandeh yang menghadirkan sebuah kafe dan cottage untuk wisatawan lokal, domestik dan manca negara. Pandan View Mandeh terdapat beberapa spot spot berfoto yang indah dan pemandangan yang indah langsung k...">




    <meta name="description" content="Pandan View Mandeh" />
    <meta name="keywords" content="Pandan View Mandeh, Mandeh, Pesisir Selatan, Puncak Mandeh" />
    <meta name="author" content="Pramana Yuda Sayeti" />
    <meta name="robots" content="all" />
    <meta name="revisit-after" content="1 Days" />
    <meta property="og:locale" content="id-ID" />
    <meta property="og:site_name" content="Pandan View Mandeh" />
    <meta property="og:image" content="{{ asset('sailor/img/logo.png') }}" />
    <meta property="og:image:width" content="180" />
    <meta property="og:image:height" content="50" />
    <meta property="og:type" content=website />
    <meta property="og:description" content="Pandan View Mandeh, Tempat Wisata, Penginapan, Restoran dan Cafe" />
    <meta property="og:url" content="https://pandanviewmandeh.com" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="Pandan View Mandeh" />
    <meta name="twitter:title" content="Pandan View Mandeh" />
    <meta name="twitter:description" content="Pandan View Mandeh Resort Pandan View Mandeh terletak dikawasan destinasi wisata bahari Teluk Mandeh yang menghadirkan sebuah kafe dan cottage untuk wisatawan lokal, domestik dan manca negara. Pandan View Mandeh terdapat beberapa spot spot berfoto yang indah dan pemandangan yang indah langsung k...">
    <meta name="twitter:image" content="{{ asset('sailor/img/logo.png') }}" />
    <link rel="canonical" href="https://pandanviewmandeh.com" />
    <link rel="alternate" hreflang="en-US" href="https://panview.kemenagpessel.com" />
    <link rel="shortcut icon" type="image/png" href="https://pandanviewmandeh.com" />


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
    <meta name="ahrefs-site-verification" content="71353c246ce479e437d4894298c3e5ad448fd758d7aabc495d9583287489f7ed">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2HMVYVF6MW"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-2HMVYVF6MW');

    </script>

</head>

<body>

    <div class="sharethis-sticky-share-buttons"></div>

    <!-- ======= Header ======= -->
    @include('layouts.landing.header')

    <!-- ======= Main Content ======= -->
    @yield('content')


    <!-- ======= Footer ======= -->
    @include('layouts.landing.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- ======= Scripts ======= -->
    @include('layouts.landing.scripts')

    @yield('_scripts')



</body>

</html>
