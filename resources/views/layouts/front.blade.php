<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <!-- Author Meta -->
    <meta property="og:locale" content="ar_AR"/>
    <meta name="author"
          content="">
    <!-- Meta Description -->
    <meta name="description"
          content="">
    <meta property="og:title"
          content=""/>
    <meta property="og:description"
          content=""/>
    <meta property="og:url" content="{{ route('welcome') }}"/>
    <meta property="og:image"
          content="{{asset('assets/Images/'.$companies->first()->photo)}}">
    <meta property="og:site_name" content=""/>
    <meta property="og:image:secure_url" content="{{asset('assets/Images/'.$companies->first()->photo)}}"/>


    <meta property="og:image:alt" content=""/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:description"
          content=""/>
    <meta name="twitter:image" content="{{asset('assets/Images/'.$companies->first()->photo)}}"/>
    <!-- Meta Keyword -->

    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->


@yield('title')

<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <link rel="icon" href="{{ asset('public/front-end/assets/img/fav.png') }}">

    <!-- CSS Files -->
    <!-- linearicons Icon font -->
    <link rel="stylesheet" href="{{asset('public/front-end/assets/css/linearicons.css')}}">
    <!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="{{asset('public/front-end/assets/css/font-awesome.min.css')}}">
    <!-- Twitter Bootstrap css -->
    <link rel="stylesheet" href="{{asset('public/front-end/assets/css/bootstrap-rtl.css')}}">
    <!-- animate -->
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('public/front-end/assets/css/main.css')}}">
    <!-- media-queries (Responsive File) -->
    <link rel="stylesheet" href="{{asset('public/front-end/assets/css/responsive.css')}}">
</head>

<body id="body">


<!-- Start Header Area -->
<header id="header" class="py-3 header_area blog-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="logo_area">
                        <!-- Logo image -->
                        <a href="{{ route('welcome') }}"><img src="{{asset('public/front-end/assets/img/logo.png')}}"
                                                              alt="حور للدعاية والإعلان والطباعة بالرياض"></a>
                    </div>

                </nav>
            </div>
        </div>
    </div>

</header>
<!-- End Header Area -->


@yield('content')


@if(isset($article))
    <section class="faqs-area section-gap" id="faqs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul>
                        @if(isset($faqs))
                            @foreach($faqs as $faq)
                                <li>
                                    <h2 class="mb-2">{{ $faq->tag }}</h2>
                                </li>

                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endif


<!-- start footer Area -->
<footer class="footer-area" id="footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="footer-top flex-column">
                    <div class="footer-logo text-center">
                        <a href="{{ route('welcome') }}">
                            <img src="{{ asset('public/front-end/assets/img/footer-logo.png') }}"
                                 alt="حور للدعاية والإعلان والطباعة بالرياض">
                        </a>
                        <h4>تواصل معنا</h4>
                    </div>
                    <div class="footer-social text-center">
                        <a href="{{ $companies->first()->facebook }}" target="_blank"><i
                                class="fa fa-facebook transition"></i>فيس بوك</a>
                        <a href="{{ $companies->first()->twitter }}" target="_blank"><i
                                class="fa fa-twitter transition"></i>تويتر</a>
                        <a target="-_blank" class="phone-cell ml-3" href="tel:+966541465165" title="اتصل بنا"><i
                                class="fa fa-phone"></i>اتصل بنا</a>
                        {!! WhatsappBtn::make('+'.$companies->first()->phone); !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row footer-bottom text-center justify-content-center">
            <p class="col-lg-8 col-sm-12 footer-text">
                كل الحقوق محفوظه <i class="fa fa-heart-o" aria-hidden="true"></i> برمجة وتصميم <a
                    href="https://www.facebook.com/karim.ezzt.31"
                    target="_blank">كريم عزت</a>
            </p>
        </div>
    </div>
</footer>
<!-- End footer Area -->


<!-- Start Scroll to Top Area  -->
<div class="transition" id="back-top">
    <a title="Go to Top" href="#">
        <i class="lnr lnr-arrow-up"></i>
    </a>
</div>
<!-- End Scroll to Top Area -->


<div class="fixed-btn">

    <a href="tel:+966541465165" class="ms-call-button">
        <span class="ms-call-txt">إتصل الآن</span>
        <span class="ms-call-icon">
      <svg width="45" height="65" fill="#d98d59" role="img" focusable="false" aria-hidden="true"
           xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 512 512">
        <path
            d="M352 320c-32 32-32 64-64 64s-64-32-96-64-64-64-64-96 32-32 64-64-64-128-96-128-96 96-96 96c0 64 65.75 193.75 128 256s192 128 256 128c0 0 96-64 96-96s-96-128-128-96z"></path>
      </svg>
    </span>
    </a>

    <div class="ms-whats-button">
        <span class="ms-whats-txt">واتساب</span>
        <div class="ms-call-icon">
            {!! WhatsappBtn::make('+'.$companies->first()->phone); !!}
        </div>
    </div>
</div>


<!-- Essential jQuery Plugins -->

<!-- Main jQuery -->
<script src="{{asset('public/front-end/assets/js/jquery-2.2.4.min.js')}}"></script>
<!-- Twitter Bootstrap -->
<script src="{{asset('public/front-end/assets/js/bootstrap.min.js')}}"></script>
<!-- Custom Functions -->
<script src="{{asset('public/front-end/assets/js/main.js')}}"></script>
</body>

</html>
