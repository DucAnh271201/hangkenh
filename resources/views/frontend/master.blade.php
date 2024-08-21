<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    {{-- Thẻ tiêu đề cho SEO --}}
    <title>@yield('title', config('app.name'))</title>
    {{-- Thẻ mô tả cho SEO --}}
    <meta name="description" content="@yield('description', config('app.name'))">
    {{-- Thẻ keywords cho SEO --}}
    <meta name="keywords" content="@yield('keywords',config('app.name'))">
    {{-- Open Graph tags cho các mạng xã hội --}}
    <meta property="og:title" content="@yield('title',config('app.name'))"/>
    <meta property="og:description" content="@yield('description',config('app.name'))"/>
    <meta property="og:image" content="@yield('image', '')"/>
    <meta property="og:url" content="{{ url()->current() }}"/>
    <meta property="og:type" content="@yield('type', 'website')"/>
    <meta property="og:site_name" content="{{ config('app.name') }}"/>

    {{-- Twitter Card tags --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title',config('app.name'))">
    <meta name="twitter:description" content="@yield('description',config('app.name'))">
    <meta name="twitter:image" content="@yield('image')">
    <link rel="icon" type="image/x-icon" href="{{ get_option('favorite_icon') }}">
    <link rel="canonical" href="@yield('canonical', url()->current())">
    <link rel="stylesheet" href="{{ asset('main/assets/libs/swiperjs/swiper-bundle.min.css') }}">
    <link href="https://vjs.zencdn.net/8.10.0/video-js.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('assets/libs/wowjs/animate.css') }}">
    <script src="{{ asset('main/assets/libs/swiperjs/swiper-bundle.min.js') }}" defer></script>
    <script src="https://vjs.zencdn.net/8.10.0/video.min.js" defer></script>
    <script src="{{ asset('assets/libs/wowjs/wow.min.js') }}" ></script>
    <link href="{{ asset('main/assets/css/slick.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('main/assets/css/slick-theme.css') }}" rel="stylesheet" type="text/css" >
    @stack('css')
    @vite('resources/js/app.js')
    <script>
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
        function showSidebar(id) {
            const element = document.querySelector('#' + id);
            // const header = document.querySelector("header");
            // const footer = document.querySelector("footer");
            // const content = document.querySelector(".content");

            if (element.classList.contains('active')) {
                // document.body.classList.remove("bg-body-cover");
                // header.classList.remove('bg-body-cover');
                // footer.classList.remove('bg-body-cover');
                // content.classList.remove('bg-body-cover');
                element.classList.remove('active');
            } else {
                // document.body.classList.add("bg-body-cover");
                // document.body.style.opacity = "0.6";
                // header.classList.add('bg-body-cover');
                // footer.classList.add('bg-body-cover');
                // content.classList.add('bg-body-cover');
                element.classList.add('active');
            }
        }
    </script>
    <script defer>
        window.wow = new WOW({
            live: false
        })
        window.wow.init();
    </script>
    @stack('json')
</head>
<body>
    <div id="overlay"></div>
    @include('frontend.components.header')

    @yield('banner')

    <a onclick="topFunction()" id="btn-to-top">
        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="23" viewBox="0 0 21 23" fill="none">
            <path
                d="M10.2891 22.9102L10.2891 1.08941M10.2891 1.08941C10.2891 1.08941 9.13522 5.29576 6.44291 7.81957C3.7506 10.3434 0.289062 10.3434 0.289062 10.3434M10.2891 1.08941C10.2891 1.08941 11.4429 5.25608 14.1352 7.75608C16.8275 10.2561 20.2891 10.2561 20.2891 10.2561"
                stroke="#242424" stroke-width="2.2" stroke-linejoin="bevel"/>
        </svg>
    </a>

    <div class="content">
        @yield('content')
    </div>

    @include('frontend.components.footer')
<script
    src="https://code.jquery.com/jquery-3.7.1.js"
    integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous">
</script>
<script src="{{ asset('main/assets/js/slick.min.js') }}" crossorigin="anonymous"></script>
<script>
    $('.slider').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 2,
        autoplay: false,
        autoplaySpeed: 2000,
        loop: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow:1,
                }
            },
        ]
    });

    $('.trending-slide-phone').slick({
        speed: 300,
        slidesToShow: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        loop: true,
        dots: true,
    });

    $('.slider-product').slick({
        speed: 300,
        slidesToShow: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        loop: true,
        dots: true,
    });

    $(document).on('click', '#nav_menu',function(){
        $('#nav_menu_content').collapse('toggle');
        $('#overlay').toggleClass('menu-mobile-show')
        $('body').toggleClass('overflow-hidden')

    });
</script>
@stack('js')
</body>
</html>
