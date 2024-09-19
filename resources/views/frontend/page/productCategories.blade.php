@extends('frontend.layouts.basesupersave')

@section('title', 'About Us')

@section('content')
    <section class="top-space-margin page-title-big-typography border-radius-6px lg-border-radius-0px p-0"
        data-parallax-background-ratio="0.5" style="background-image: url('{{ asset('supersave/bg/solar-panel-bg.jpg') }}')">
        <div class="opacity-extra-medium bg-blue-whale"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center small-screen">
                <div class="col-lg-8 position-relative text-center page-title-extra-large"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="m-auto text-white text-shadow-double-large fw-600 ls-minus-2px">{{ strtoupper($queryString) }}
                    </h1>
                </div>
                <div class="down-section text-center"
                    data-anime='{ "translateY": [-50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <a href="#down-section" class="section-link">
                        <div class="text-white">
                            <i class="feather icon-feather-chevron-down icon-very-medium"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section id="down-section">
        <div class="container">
            <div class="row g-0">
                <!-- start features box item -->
                <div class="col-12">
                    <ul class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large"
                        data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <li class="grid-sizer"></li>
                        @forelse ($products as $item)
                            <li class="grid-item">
                                <div
                                    class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                                    <div class="blog-image">
                                        <a href="{{ route('blogdetail', $item->slug) }}" class="d-block"><img
                                                src="{{ asset('/storage/' . $item->galleries->first()->image) }}"
                                                alt="" /></a>
                                        <div class="blog-categories">
                                            <a href="demo-corporate-blog.html"
                                                class="categories-btn bg-white text-dark-gray text-dark-gray-hover text-uppercase fw-700">{{ $item->category->name }}</a>
                                        </div>
                                    </div>
                                    <div class="card-body p-12 lg-p-10">
                                        <a href="{{ route('blogdetail', $item->slug) }}"
                                            class="card-title mb-15px fw-700 fs-19 text-dark-gray d-inline-block w-90 md-w-100">{{ $item->title }}</a>
                                        <p>
                                            {{-- {!! substr($item->description, 0, 15) !!}... --}}
                                            {{ $item->name }}
                                        </p>
                                        <div
                                            class="author d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase">
                                            <div class="me-auto">
                                                <span
                                                    class="blog-date d-inline-block fw-700 text-dark-gray">{{ $item->short_description }}
                                                </span>
                                                </span>
                                                <div class="d-inline-block author-name fw-700 text-dark-gray"><a
                                                        href="demo-corporate-blog.html"
                                                        class="text-dark-gray text-decoration-line-bottom">
                                                        {{ $item->created_at->format('d M Y') }}</a>
                                                </div>
                                            </div>
                                            <div class="like-count">
                                                <a href="{{ route('blogdetail', $item->slug) }}"><i
                                                        class="fa-regular fa-heart text-red"></i><span
                                                        class="text-dark-gray align-middle fw-700"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @empty
                            Belum ada Blog
                        @endforelse
                    </ul>
                </div>
                <div class="col-12 mt-5 md-mt-7 d-flex justify-content-center"
                    data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <ul class="pagination pagination-style-01 fs-13 fw-500 mb-0">
                        <li class="page-item"><a class="page-link" href="#"><i
                                    class="feather icon-feather-arrow-left fs-18 d-xs-none"></i></a></li>
                        <li class="page-item"><a class="page-link" href="#">01</a></li>
                        <li class="page-item active"><a class="page-link" href="#">02</a></li>
                        <li class="page-item"><a class="page-link" href="#">03</a></li>
                        <li class="page-item"><a class="page-link" href="#">04</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i
                                    class="feather icon-feather-arrow-right fs-18 d-xs-none"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
