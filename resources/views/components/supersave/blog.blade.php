<section class="bg-gradient-quartz-white border-radius-6px lg-border-radius-0px pb-0">
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-lg-7 text-center"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h3 class="text-dark-gray fw-700 ls-minus-1px">
                    Interesting articles
                </h3>
            </div>
        </div>
        <div class="row mb-5 sm-mb-7">
            <div class="col-12">
                <ul class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <li class="grid-sizer"></li>
                    @forelse ($blogs as $item)
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
                                                {{-- {{ $item->created_at->format('d M Y') }} --}}
                                                {{ $item->created_at->diffForHumans() }}
                                            </span>
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
                        Belum ada Blog
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</section>
