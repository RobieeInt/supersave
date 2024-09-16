<section class="bg-gradient-quartz-white border-radius-6px lg-border-radius-0px">
    @foreach ($testimonials as $testi)
        <div class="container background-no-repeat background-position-center-bottom"
            style="background-image: url('{{ asset('images/demo-corporate-bg-02.png') }}')">
            <div class="row justify-content-center align-items-center mb-2"
                data-anime='{ "el": "childs", "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                {{-- <div class="col-4 col-lg-2 col-sm-3 xs-mb-25px">
                    <div class="swiper rounded-circle"
                        data-slider-options='{ "slidesPerView": 1, "loop": true, "autoplay": { "delay": 1000, "disableOnInteraction": false },  "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "fade" }'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="border-radius-50 w-100" src="https://via.placeholder.com/200x200"
                                    alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img class="border-radius-50 w-100" src="https://via.placeholder.com/200x200"
                                    alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img class="border-radius-50 w-100" src="https://via.placeholder.com/200x200"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-4 col-md-6 col-sm-7 text-center text-sm-start">
                    <h5 class="alt-font text-dark-gray lh-40 fw-500 ls-minus-1px mb-0 ms-10px lg-ms-0"
                        data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 500, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        Trusted by <span class="fw-800 text-base-color text-decoration-line-bottom-medium">25,000+</span>
                        happy customers.</h5>
                </div>
                <div class="col-xl-2 offset-xl-2 col-lg-3 offset-lg-1 col-sm-4 md-mt-35px text-center text-lg-start">
                    <h2 class="alt-font text-dark-gray fw-800 ls-minus-3px mb-5px"
                        data-anime='{ "el": "lines", "translateY": [15, 0], "opacity": [0,1], "delay": 300, "staggervalue": 100, "easing": "easeOutQuad" }'>
                        200+</h2>
                    <span class="text-dark-gray fw-500 lh-24 d-inline-block w-90 lg-w-80 sm-w-100"
                        data-anime='{ "el": "lines", "translateY": [15, 0], "opacity": [0,1], "delay": 400, "staggervalue": 100, "easing": "easeOutQuad" }'>Creative
                        team to care for projects.</span>
                </div>
                <div class="col-lg-2 col-sm-4 ps-40px md-ps-15px md-mt-35px text-center text-lg-start">
                    <h2 class="alt-font text-dark-gray fw-800 ls-minus-3px mb-5px"
                        data-anime='{ "translateY": [15, 0], "opacity": [0,1], "delay": 100, "staggervalue": 100, "easing": "easeOutQuad" }'>
                        4.9</h2>
                    <div class="review-star-icon fs-17 lh-20 d-block"
                        data-anime='{ "translateY": [15, 0], "opacity": [0,1], "delay": 200, "staggervalue": 100, "easing": "easeOutQuad" }'>
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <span class="text-dark-gray fw-500"
                        data-anime='{ "el": "lines", "translateY": [15, 0], "opacity": [0,1], "delay": 300, "staggervalue": 100, "easing": "easeOutQuad" }'>2,488
                        Rating</span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12"
                    data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="swiper slider-one-slide magic-cursor dark"
                        data-slider-options='{ "slidesPerView": 1, "spaceBetween": 25, "loop": true, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1400": { "slidesPerView": 3 }, "1200": { "slidesPerView": 3 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper pt-30px pb-30px">
                            <!-- start review item -->
                            <div class="swiper-slide review-style-07">
                                <div
                                    class="d-flex justify-content-center h-100 flex-column border-radius-6px p-12 bg-white box-shadow-extra-large xl-p-10">
                                    <div class="mb-20px">
                                        <img src="
                                        {{-- {{ $testi->image }} --}}
                                        {{ asset('/storage/' . $testi->first()->image) }}
                                        "
                                            class="rounded-circle w-90px lg-w-65px me-15px" alt="">
                                        <div class="d-inline-block align-middle">
                                            <div class="text-dark-gray fs-18 fw-600">{{ $testi->name }}</div>
                                            <div class="lh-24 fs-16">{{ $testi->profession }}</div>
                                        </div>
                                    </div>
                                    <p class="mb-15px md-w-85 sm-w-100">{!! $testi->testimoni !!}</p>
                                    <div class="d-flex align-items-center">
                                        <div class="d-inline-block me-auto">
                                            <div class="text-dark-gray fw-700 float-start fs-15 me-10px">
                                                {{ $testi->star }}
                                            </div>
                                            <div class="review-star-icon float-start">
                                                {{-- Menampilkan bintang penuh berdasarkan jumlah star --}}
                                                @for ($i = 0; $i < $testi->star; $i++)
                                                    <i class="bi bi-star-fill"></i>
                                                @endfor

                                                {{-- Jika bintang memiliki pecahan (setengah bintang) --}}
                                                @if ($testi->star != floor($testi->star))
                                                    <i class="bi bi-star-half"></i>
                                                @endif

                                                {{-- Tambahkan bintang kosong jika jumlah total bintang kurang dari 5 --}}
                                                @for ($i = $testi->star; $i < 5; $i++)
                                                    <i class="bi bi-star"></i>
                                                @endfor
                                            </div>
                                        </div>
                                        <div
                                            class="d-inline-block fw-500 text-uppercase border-radius-30px ps-15px pe-15px fs-12 lh-28 bg-dark-gray text-white">
                                            {{ $testi->created_at->diffForHumans() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col text-center"
                    data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div
                        class="fs-24 fw-500 text-dark-gray d-inline-block align-middle ls-minus-1px me-20px lg-m-10px lg-mt-0">
                        More than <span class="fw-700 text-decoration-line-bottom-medium">10000+</span> happy customers
                        reviews on</div>
                    <a href="https://www.trustpilot.com/" target="_blank"><img src="https://via.placeholder.com/416x44"
                            class="d-inline-block align-middle" alt=""></a>
                </div>
            </div> --}}
        </div>
    @endforeach
</section>
