<!DOCTYPE html>
<html lang="en" translate="no">
<head>
    <meta charset="utf-8">
    <title>ITS TANZANIA - INTELLIGENT TRANSPORT SYSTEMS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta
        name="keywords"
        content="Government,website,DART , Tovuti,serikali,DART "
    />
    <meta name="msapplication-TileColor" content="#ffffff"/>
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png"/>
    <meta name="theme-color" content="#2e3289"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#2e3289"/>
    <meta name="google" content="notranslate"/>
    <meta
        name="description"
        content="Government Website | Tovuti ya Serikali"
    />

    <!-- Favicon -->
    <link
        rel="apple-touch-icon"
        sizes="57x57"
        href="https://www.dart.go.tz/site/images/icon/apple-icon-57x57.png"
    />
    <link
        rel="apple-touch-icon"
        sizes="60x60"
        href="https://www.dart.go.tz/site/images/icon/apple-icon-60x60.png"
    />
    <link
        rel="apple-touch-icon"
        sizes="72x72"
        href="https://www.dart.go.tz/site/images/icon/apple-icon-72x72.png"
    />
    <link
        rel="apple-touch-icon"
        sizes="76x76"
        href="https://www.dart.go.tz/site/images/icon/apple-icon-76x76.png"
    />
    <link
        rel="apple-touch-icon"
        sizes="114x114"
        href="https://www.dart.go.tz/site/images/icon/apple-icon-114x114.png"
    />
    <link
        rel="apple-touch-icon"
        sizes="120x120"
        href="https://www.dart.go.tz/site/images/icon/apple-icon-120x120.png"
    />
    <link
        rel="apple-touch-icon"
        sizes="144x144"
        href="https://www.dart.go.tz/site/images/icon/apple-icon-144x144.png"
    />
    <link
        rel="apple-touch-icon"
        sizes="152x152"
        href="https://www.dart.go.tz/site/images/icon/apple-icon-152x152.png"
    />
    <link
        rel="apple-touch-icon"
        sizes="180x180"
        href="https://www.dart.go.tz/site/images/icon/apple-icon-180x180.png"
    />
    <link
        rel="icon"
        type="image/png"
        sizes="192x192"
        href="https://www.dart.go.tz/site/images/icon/android-icon-192x192.png"
    />
    <link
        rel="icon"
        type="image/png"
        sizes="32x32"
        href="https://www.dart.go.tz/site/images/icon/favicon-32x32.png"
    />
    <link
        rel="icon"
        type="image/png"
        sizes="96x96"
        href="https://www.dart.go.tz/site/images/icon/favicon-96x96.png"
    />
    <link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="https://www.dart.go.tz/site/images/icon/favicon-16x16.png"
    />

    @include('layouts.css')
</head>

<body>
<div>
    @include('components.loaders')
    @include('components.header')
    @yield('content')
    @include('components.footer')
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
@include('layouts.js')
</body>
</html>
