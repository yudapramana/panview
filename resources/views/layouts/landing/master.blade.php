<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
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
    <meta property="og:title" content="Selamat Datang di Pandan View Mandeh" />
    <meta property="og:description" content="Pandan View Mandeh, Tempat Wisata, Penginapan, Restoran dan Cafe" />
    <meta property="og:url" content="https://pandanviewmandeh.com" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="Pandan View Mandeh" />
    <meta name="twitter:title" content="Pandan View Mandeh" />
    <meta name="twitter:description" content="Pelayanan Publik Terpadu Satu Pintu Berbasis Web (ONLINE) Kementerian Agama Kabupaten Pesisir Selatan" />
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


    <!-- =======================================================
  * Template Name: Sailor
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>

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