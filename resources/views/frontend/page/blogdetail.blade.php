@extends('frontend.layouts.basesupersave')

@section('title', 'About Us')

@section('content')
    <section class="top-space-margin border-radius-6px lg-border-radius-0px py-0" data-parallax-background-ratio="0.5"
        style="background-image: url('{{ asset('/storage/' . $blog->image) }}')">
        <div class="opacity-light bg-dark-gray"></div>
        <div class="container-fluid z-index-1 position-relative">
            <div class="row">
                <div class="col-xxl-9 col-xl-10 col-lg-11 d-flex flex-column justify-content-center full-screen sm-h-600px">
                    <div class="ps-15 pe-15 md-ps-10 md-pe-10 sm-px-0"
                        data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <span class="alt-font fs-20 text-white mb-3 d-inline-block fw-300">Posted by <a
                                href="demo-corporate-blog.html"
                                class="text-white text-white-hover fw-700 text-decoration-line-bottom">{{ $blog->author }}</a></span>
                        <h1 class="alt-font text-white fw-600 mb-5 ls-minus-2px">{{ $blog->title }}
                            about it a thousand times.</h1>
                        <a href="{{ route('landing-page') }}"
                            class="btn btn-large btn-white btn-hover-animation-switch btn-box-shadow btn-rounded fw-600">Supersave</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 last-paragraph-no-margin"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <h5 class="alt-font fw-600 text-dark-gray mb-15px">{{ $blog->title }}</h5>
                    {!! $blog->content !!}
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="half-section pt-0">
        <div class="container">
            <div class="row justify-content-center"
                data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col-lg-8">
                    <div class="row mb-30px">
                        <div class="tag-cloud col-md-9 text-center text-md-start sm-mb-15px">
                            {{-- <a href="{{ route('landing-page') }}">Architecture</a>
                            <a href="{{ route('landing-page') }}">Interior</a>
                            <a href="{{ route('landing-page') }}">Landscape</a>
                            <a href="{{ route('landing-page') }}">Residential</a> --}}
                            @php
                                $tags = $blog->tags; // String containing tags separated by commas
                                $tagArray = explode(',', $tags); // Split the string into an array

                                foreach ($tagArray as $tag) {
                                    echo '<a href="' . route('landing-page') . '">' . $tag . '</a>';
                                }

                            @endphp
                        </div>
                        {{-- <div class="tag-cloud col-md-3 text-uppercase text-center text-md-end">
                            <a class="likes-count fw-500 mx-0" href="#"><i
                                    class="fa-regular fa-heart text-red me-10px"></i><span
                                    class="text-dark-gray text-dark-gray-hover">05 Likes</span></a>
                        </div> --}}
                    </div>
                    {{-- <div class="row">
                        <div class="col-12 mb-6 sm-mb-10">
                            <div
                                class="bg-nero-grey d-block d-md-flex w-100 box-shadow-extra-large align-items-center border-radius-4px p-7 sm-p-35px">
                                <div class="w-140px text-center me-50px sm-mx-auto">
                                    <img src="https://via.placeholder.com/125x125" class="rounded-circle w-120px"
                                        alt="">
                                    <a href="{{ route('landing-page') }}"
                                        class="text-dark-gray fw-500 mt-20px d-inline-block lh-20">Colene Landin</a>
                                    <span class="fs-15 lh-20 d-block sm-mb-15px">Co-founder</span>
                                </div>
                                <div class="w-75 sm-w-100 text-center text-md-start last-paragraph-no-margin">
                                    <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        ipsum has been the industry's standard dummy text ever since the 1500s when an
                                        unknown printer took a galley of type.</p>
                                    <a href="{{ route('landing-page') }}"
                                        class="btn btn-link btn-large text-dark-gray mt-15px">All author posts</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="row justify-content-center">
                        <div class="col-12 text-center elements-social social-icon-style-04">
                            <ul class="medium-icon dark">
                                <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i
                                            class="fa-brands fa-facebook-f"></i><span></span></a></li>
                                <li><a class="twitter" href="http://www.twitter.com" target="_blank"><i
                                            class="fa-brands fa-twitter"></i><span></span></a></li>
                                <li><a class="instagram" href="http://www.instagram.com" target="_blank"><i
                                            class="fa-brands fa-instagram"></i><span></span></a></li>
                                <li><a class="linkedin" href="http://www.linkedin.com" target="_blank"><i
                                            class="fa-brands fa-linkedin-in"></i><span></span></a></li>
                                <li><a class="behance" href="http://www.behance.com/" target="_blank"><i
                                            class="fa-brands fa-behance"></i><span></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="border-radius-6px lg-border-radius-0px bg-light-red">
        <div class="container">
            <div class="row justify-content-center mb-1">
                <div class="col-lg-7 text-center"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span
                        class="ps-25px pe-25px mb-15px text-uppercase text-base-color fs-14 lh-42px fw-700 border-radius-100px bg-gradient-quartz-light-transparent d-inline-block">You
                        may also like</span>
                    <h4 class="text-dark-gray fw-700">Related posts</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12 px-0">
                    <ul
                        class="blog-grid blog-wrapper grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-double-extra-large">
                        <li class="grid-sizer"></li>
                        @forelse ($randomBlogs as $item)
                            <li class="grid-item">
                                <div
                                    class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                                    <div class="blog-image">
                                        <a href="{{ route('blogdetail', $item->slug) }}" class="d-block"><img
                                                src="{{ asset('/storage/' . $item->image) }}" alt="" /></a>
                                        <div class="blog-categories">
                                            <a href="demo-corporate-blog.html"
                                                class="categories-btn bg-white text-dark-gray text-dark-gray-hover text-uppercase fw-700">Supersave</a>
                                        </div>
                                    </div>
                                    <div class="card-body p-12 lg-p-10">
                                        <a href="{{ route('blogdetail', $item->slug) }}"
                                            class="card-title mb-15px fw-700 fs-19 text-dark-gray d-inline-block w-90 md-w-100">{{ $item->title }}</a>
                                        <p>
                                            {!! substr($item->description, 0, 15) !!}...
                                        </p>
                                        <div
                                            class="author d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase">
                                            <div class="me-auto">
                                                <span class="blog-date d-inline-block fw-700 text-dark-gray">
                                                    {{ $item->created_at->format('d M Y') }}</span>
                                                </span>
                                                <div class="d-inline-block author-name fw-700 text-dark-gray">By <a
                                                        href="demo-corporate-blog.html"
                                                        class="text-dark-gray text-decoration-line-bottom">{{ $item->author }}</a>
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
                            Belum ada Blog Lain
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
