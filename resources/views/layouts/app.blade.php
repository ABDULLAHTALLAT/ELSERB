<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('ALSERB', 'ALSERB')</title>
    <link rel="icon" href="{{ asset('images/logo/LOGOELSERB-removebg.png') }}" type="image/x-icon">

    <!-- Include CSS libraries for Swiper and Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<!-- Google Fonts: Nippor -->
<link href="https://fonts.googleapis.com/css2?family=Nippor:wght@400;700&display=swap" rel="stylesheet">

    <!-- Include your custom styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Neighbor&display=swap" rel="stylesheet">




    <style>


        ::-webkit-scrollbar {
    display: none;
}

/* إخفاء شريط التمرير في فايرفوكس */
html {
    scrollbar-width: none;

}

/* التأكد من أن الصفحة لا تقطع المحتوى */
body {
    overflow: auto;

}
    </style>


<style>
    @font-face {
        font-family: 'MyCustomFont';
        src: url('{{ asset('Fonts/Neighbor.ttf') }}') format('truetype');
    }

    body {
        font-family: 'MyCustomFont', sans-serif !important;
    }
</style>

</head>

<body>
    <!-- Content from each page will be displayed here -->
    @yield('content')

    <!-- Include scripts at the bottom -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.7/swiper-bundle.min.js"></script>
    @yield('scripts')
</body>

</html>
