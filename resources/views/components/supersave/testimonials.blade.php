<section class="sseb-testimonial-section">
    <div class="container position-relative">

        {{-- HEADER --}}
        <div class="row justify-content-center text-center mb-5"
            data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 700, "delay": 0, "staggervalue": 180, "easing": "easeOutQuad" }'>

            <div class="col-lg-8">
                <span class="sseb-testimonial-badge">
                    Testimoni Pelanggan
                </span>

                <h3 class="sseb-testimonial-title">
                    Kepercayaan pelanggan menjadi prioritas kami.
                </h3>

                <p class="sseb-testimonial-description">
                    Kami berkomitmen memberikan produk berkualitas dan layanan profesional
                    untuk mendukung kebutuhan energi serta kelistrikan pelanggan.
                </p>
            </div>
        </div>

        {{-- STATS --}}
        <div class="row justify-content-center align-items-center mb-5 sseb-testimonial-stats"
            data-anime='{ "el": "childs", "translateY": [25, 0], "opacity": [0,1], "duration": 700, "delay": 100, "staggervalue": 160, "easing": "easeOutQuad" }'>

            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="sseb-stat-card">
                    <h4>
                        Dipercaya oleh
                        <span>pelanggan</span>
                    </h4>
                    <p>
                        Solusi produk dan layanan yang terus dikembangkan untuk kebutuhan rumah,
                        bisnis, hingga industri.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <div class="sseb-stat-card sseb-stat-center">
                    <h2>{{ $testimonials->count() }}+</h2>
                    <p>Ulasan Pelanggan</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="sseb-stat-card sseb-stat-center">
                    <h2>4.9</h2>

                    <div class="sseb-stat-stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>

                    <p>Rata-rata Rating</p>
                </div>
            </div>
        </div>

        {{-- SLIDER --}}
        <div class="row">
            <div class="col-12"
                data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 900, "delay": 100, "staggervalue": 200, "easing": "easeOutQuad" }'>

                <div class="swiper sseb-testimonial-slider magic-cursor dark"
                    data-slider-options='{ "slidesPerView": 1, "spaceBetween": 25, "loop": true, "autoplay": { "delay": 3500, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1400": { "slidesPerView": 3 }, "1200": { "slidesPerView": 3 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>

                    <div class="swiper-wrapper pt-20px pb-40px">

                        @forelse ($testimonials as $testi)
                            @php
                                $image = $testi->image
                                    ? asset('/storage/' . $testi->image)
                                    : asset('supersave/bg/logo_sseb_1.png');

                                $name = $testi->name ?: 'Pelanggan Super Save';
                                $profession = $testi->profession ?: 'Customer';
                                $star = (float) $testi->star;
                                $fullStars = floor($star);
                                $hasHalfStar = $star != $fullStars;
                                $emptyStars = 5 - ceil($star);
                            @endphp

                            <div class="swiper-slide">
                                <div class="sseb-testimonial-card">

                                    <div class="sseb-testimonial-quote">
                                        <i class="fa-solid fa-quote-left"></i>
                                    </div>

                                    <p class="sseb-testimonial-text">
                                        {!! $testi->testimoni !!}
                                    </p>

                                    <div class="sseb-testimonial-rating">
                                        <span>{{ number_format($star, 1) }}</span>

                                        <div class="sseb-testimonial-stars">
                                            @for ($i = 0; $i < $fullStars; $i++)
                                                <i class="bi bi-star-fill"></i>
                                            @endfor

                                            @if ($hasHalfStar)
                                                <i class="bi bi-star-half"></i>
                                            @endif

                                            @for ($i = 0; $i < $emptyStars; $i++)
                                                <i class="bi bi-star"></i>
                                            @endfor
                                        </div>
                                    </div>

                                    <div class="sseb-testimonial-user">
                                        <img src="{{ $image }}"
                                            alt="{{ $name }}"
                                            class="sseb-testimonial-avatar">

                                        <div>
                                            <h5>{{ $name }}</h5>
                                            <span>{{ $profession }}</span>
                                        </div>
                                    </div>

                                    <div class="sseb-testimonial-date">
                                        {{ $testi->created_at->diffForHumans() }}
                                    </div>

                                </div>
                            </div>
                        @empty
                            <div class="swiper-slide">
                                <div class="sseb-testimonial-empty">
                                    <i class="fa-regular fa-comment-dots"></i>
                                    <h4>Belum ada testimoni</h4>
                                    <p>Testimoni pelanggan akan segera ditampilkan di bagian ini.</p>
                                </div>
                            </div>
                        @endforelse

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<style>
    .sseb-testimonial-section {
        position: relative;
        padding: 100px 0 80px;
        overflow: hidden;
        border-radius: 28px;
        background:
            radial-gradient(circle at top right, rgba(15, 76, 129, 0.10), transparent 32%),
            linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);
    }

    .sseb-testimonial-badge {
        display: inline-flex;
        align-items: center;
        padding: 10px 18px;
        margin-bottom: 18px;
        border-radius: 999px;
        background: rgba(15, 76, 129, 0.08);
        color: #0f4c81;
        font-size: 12px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .sseb-testimonial-title {
        max-width: 760px;
        margin: 0 auto 18px;
        color: #102033;
        font-size: 46px;
        line-height: 1.12;
        font-weight: 800;
        letter-spacing: -1.7px;
    }

    .sseb-testimonial-description {
        max-width: 660px;
        margin: 0 auto;
        color: #64748b;
        font-size: 17px;
        line-height: 1.8;
    }

    .sseb-stat-card {
        height: 100%;
        padding: 28px 28px;
        border-radius: 24px;
        background: rgba(255, 255, 255, 0.85);
        border: 1px solid rgba(15, 23, 42, 0.07);
        box-shadow: 0 18px 50px rgba(15, 23, 42, 0.06);
    }

    .sseb-stat-card h4 {
        margin: 0 0 10px;
        color: #102033;
        font-size: 24px;
        line-height: 1.25;
        font-weight: 800;
        letter-spacing: -0.6px;
    }

    .sseb-stat-card h4 span {
        color: #0f4c81;
    }

    .sseb-stat-card h2 {
        margin: 0 0 8px;
        color: #102033;
        font-size: 48px;
        line-height: 1;
        font-weight: 800;
        letter-spacing: -1.5px;
    }

    .sseb-stat-card p {
        margin: 0;
        color: #64748b;
        font-size: 15px;
        line-height: 1.7;
        font-weight: 600;
    }

    .sseb-stat-center {
        text-align: center;
    }

    .sseb-stat-stars,
    .sseb-testimonial-stars {
        color: #f59e0b;
        letter-spacing: 1px;
    }

    .sseb-stat-stars {
        margin-bottom: 8px;
        font-size: 16px;
    }

    .sseb-testimonial-card {
        position: relative;
        height: 100%;
        min-height: 360px;
        padding: 34px 30px 28px;
        border-radius: 26px;
        background: #ffffff;
        border: 1px solid rgba(15, 23, 42, 0.07);
        box-shadow: 0 22px 60px rgba(15, 23, 42, 0.08);
        transition: all 0.28s ease;
    }

    .sseb-testimonial-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 32px 80px rgba(15, 23, 42, 0.14);
    }

    .sseb-testimonial-quote {
        width: 48px;
        height: 48px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 22px;
        border-radius: 16px;
        background: rgba(15, 76, 129, 0.08);
        color: #0f4c81;
        font-size: 20px;
    }

    .sseb-testimonial-text {
        min-height: 110px;
        margin-bottom: 24px;
        color: #475569;
        font-size: 16px;
        line-height: 1.8;
    }

    .sseb-testimonial-rating {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 24px;
    }

    .sseb-testimonial-rating span {
        color: #102033;
        font-size: 15px;
        font-weight: 800;
    }

    .sseb-testimonial-user {
        display: flex;
        align-items: center;
        gap: 14px;
        padding-top: 22px;
        border-top: 1px solid rgba(15, 23, 42, 0.08);
    }

    .sseb-testimonial-avatar {
        width: 58px;
        height: 58px;
        border-radius: 50%;
        object-fit: cover;
        background: #f1f5f9;
        border: 3px solid #ffffff;
        box-shadow: 0 10px 26px rgba(15, 23, 42, 0.12);
    }

    .sseb-testimonial-user h5 {
        margin: 0 0 4px;
        color: #102033;
        font-size: 17px;
        font-weight: 800;
    }

    .sseb-testimonial-user span {
        color: #64748b;
        font-size: 14px;
        font-weight: 600;
    }

    .sseb-testimonial-date {
        position: absolute;
        top: 30px;
        right: 30px;
        padding: 7px 12px;
        border-radius: 999px;
        background: #102033;
        color: #ffffff;
        font-size: 11px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 0.4px;
    }

    .sseb-testimonial-empty {
        padding: 48px 24px;
        border-radius: 24px;
        background: #ffffff;
        border: 1px dashed rgba(15, 76, 129, 0.22);
        text-align: center;
        box-shadow: 0 18px 50px rgba(15, 23, 42, 0.06);
    }

    .sseb-testimonial-empty i {
        margin-bottom: 16px;
        color: #0f4c81;
        font-size: 42px;
    }

    .sseb-testimonial-empty h4 {
        margin-bottom: 8px;
        color: #102033;
        font-weight: 800;
    }

    .sseb-testimonial-empty p {
        margin: 0;
        color: #64748b;
    }

    @media (max-width: 991.98px) {
        .sseb-testimonial-section {
            padding: 80px 0 60px;
            border-radius: 0;
        }

        .sseb-testimonial-title {
            font-size: 38px;
            letter-spacing: -1px;
        }

        .sseb-testimonial-description {
            font-size: 16px;
        }

        .sseb-testimonial-card {
            min-height: auto;
        }
    }

    @media (max-width: 575.98px) {
        .sseb-testimonial-section {
            padding: 65px 0 50px;
        }

        .sseb-testimonial-title {
            font-size: 31px;
        }

        .sseb-testimonial-card {
            padding: 30px 22px 26px;
        }

        .sseb-testimonial-date {
            position: static;
            display: inline-flex;
            margin-top: 18px;
        }

        .sseb-testimonial-text {
            min-height: auto;
        }
    }
</style>
