@extends('layouts.front')

@section('title')

    <title>حور - دعاية وإعلان وطباعة 0541465165</title>
@endsection

@section('content')

    <!-- start Banner Area -->
    <section class="home-banner-area">
        <div class="container">
            <div class="row fullscreen d-flex align-items-center">
                <div class="mt-5 banner-content col-lg-9 col-md-12 justify-content-center ">
                    <div class="me mt-5">حــــــور</div>
                    <h1>{{ $companies->first()->name }}</h1>
                    <div class="designation mb-50">
                        متخصصة في
                        <span class="designer">الدعاية والإعلان</span>
                        و
                        <span class="developer">الطباعة</span> بالرياض
                    </div>
                    <a href="#footer" class="primary-btn transition" data-text="تواصل معنا">
                        <span>تواصل معنا</span>
                    </a>
                </div>


            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <section class="about-area section-gap" id="about">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 col-md-12 about-right mb-lg-0 mb-4">
                    <!-- Section Title -->
                    <div class="section-title mb-50">
                        <h2>عنــا</h2>
                    </div>
                    <div>
                        {!! $companies->first()->description !!}
                    </div>
                </div>

                <div class="col-lg-6 about-left">
                    <img class="img-fluid" src="{{ asset('assets/Images/'.$companies->first()->photo) }}"
                         alt="حور للدعاية والإعلان والطباعة بالرياض">
                </div>
            </div>
        </div>
    </section>






    <section class="blog-area section-gap">
        <div class="container">
            <div class="row">
                @if(isset($articles))
                    @foreach($articles as $article)
                        <div class="col-lg-8 mb-3">
                            <!-- Start Single Blog -->
                            <article class="single-blog">
                                <!-- blog image -->
                                @if(isset($article->image))
                                    <div class="blog-img">
                                        <img src="{{ asset('assets/Articles/img/'. $article->image) }}" class="img-fluid"
                                             alt="حور للدعاية والإعلان والطباعة بالرياض">
                                        <!-- blog info date & writter -->

                                    </div>
                            @endif

                            <!-- blog header -->
                                <div class="blog-content">
                                    <h2 class="my-3">
                                        {{ $article->title }}
                                    </h2>
                                    <div>{!! $article->description  !!}</div>
                                </div>

                            </article>
                            <!-- End Single Blog -->
                        </div>
                    @endforeach

                @endif
            </div>
        </div>
    </section>


{{--    <section class="question-area section-gap" id="question">--}}
{{--        <div class="container">--}}

{{--            <div class="row">--}}
{{--                <div class="col-lg-8">--}}
{{--                    @if(isset($questions))--}}
{{--                        @foreach($questions as $question)--}}
{{--                            <div class='content'>--}}
{{--                                <h2 class="mb-3">{{ $question->questions }}</h2>--}}

{{--                                <div>{!! $question->answer!!}</div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


@endsection
