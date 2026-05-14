<section class="sseb-products-section position-relative overflow-hidden">
    <img src="{{ asset('supersave/bg/solar-panel-bg.jpg') }}"
        class="sseb-products-bg"
        data-bottom-top="transform: rotate(0deg) translateY(0)"
        data-top-bottom="transform:rotate(-12deg) translateY(0)"
        alt="Solar panel background">

    <div class="sseb-products-overlay"></div>

    <div class="container position-relative z-index-1">

        {{-- HEADER --}}
        <div class="row align-items-end mb-6 sm-mb-9 text-center text-lg-start">
            <div class="col-lg-5 md-mb-20px">
                <span class="sseb-products-badge">
                    Produk Unggulan
                </span>

                <h3 class="sseb-products-title">
                    Solusi Produk untuk Kebutuhan Energi Anda.
                </h3>
            </div>

            <div class="col-lg-5 last-paragraph-no-margin md-mb-20px">
                <p class="sseb-products-description">
                    Temukan pilihan produk berkualitas untuk mendukung kebutuhan energi,
                    kelistrikan, dan efisiensi operasional bisnis Anda.
                </p>
            </div>

            <div class="col-lg-2 d-flex justify-content-center justify-content-lg-end">
                <div class="sseb-slider-nav">
                    <div class="slider-one-slide-prev-1 sseb-nav-button swiper-button-prev">
                        <i class="feather icon-feather-chevron-left"></i>
                    </div>

                    <div class="slider-one-slide-next-1 sseb-nav-button swiper-button-next">
                        <i class="feather icon-feather-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>

        {{-- SLIDER --}}
        <div class="row align-items-center mb-6">
            <div class="col-12">
                <div class="outside-box-right-25 sm-outside-box-right-0">
                    <div class="swiper magic-cursor slider-one-slide"
                        data-slider-options='{ "slidesPerView": 1, "spaceBetween": 24, "loop": true, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 4200, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>

                        <div class="swiper-wrapper">

                            @forelse ($products as $product)
                                @php
                                    $gallery = $product->galleries->first();
                                    $productImage = $gallery && $gallery->image
                                        ? asset('/storage/' . $gallery->image)
                                        : asset('supersave/bg/solar-panel-bg.jpg');

                                    $categoryName = optional($product->category)->name ?? 'Produk';
                                    $shortDescription = $product->short_description
                                        ?: 'Produk berkualitas untuk mendukung kebutuhan energi dan kelistrikan Anda.';

                                    $cleanDescription = strip_tags($product->description ?? '');
                                    $previewDescription = \Illuminate\Support\Str::limit($cleanDescription, 70);
                                @endphp

                                <div class="swiper-slide">
                                    <div class="sseb-product-card">

                                        <div class="sseb-product-image-wrap">
                                            <img src="{{ $productImage }}"
                                                class="sseb-product-image"
                                                alt="{{ $product->name }}">

                                            <div class="sseb-product-gradient"></div>

                                            <span class="sseb-product-category">
                                                {{ $categoryName }}
                                            </span>
                                        </div>

                                        <div class="sseb-product-content">
                                            <h4>
                                                {{ $product->name }}
                                            </h4>

                                            <p class="sseb-product-short">
                                                {{ $shortDescription }}
                                            </p>

                                            <p class="sseb-product-preview">
                                                {{ $previewDescription }}
                                            </p>

                                            <a href="{{ route('productDetail', $product->slug) }}"
                                                class="sseb-product-link">
                                                <span>Lihat Detail</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>

                                        <a href="{{ route('productDetail', $product->slug) }}"
                                            class="sseb-product-clickable"
                                            aria-label="Lihat detail {{ $product->name }}"></a>
                                    </div>
                                </div>
                            @empty
                                <div class="swiper-slide">
                                    <div class="sseb-product-empty">
                                        <i class="fa-solid fa-box-open"></i>
                                        <h4>Produk belum tersedia</h4>
                                        <p>Produk akan segera ditampilkan setelah data tersedia.</p>
                                    </div>
                                </div>
                            @endforelse

                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- BOTTOM CTA --}}
        <div class="row">
            <div class="col-12 text-center">
                <div class="sseb-products-cta">
                    <i class="fa-brands fa-whatsapp"></i>

                    <span>
                        Butuh rekomendasi produk yang sesuai?
                    </span>

                    <a href="https://api.whatsapp.com/send/?phone=%2B6285810003784&text=Halo%20SuperSave%2C%20saya%20ingin%20bertanya%20tentang%20produk&type=phone_number&app_absent=0"
                        target="_blank"
                        rel="noopener noreferrer">
                        Konsultasi sekarang
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<style>
    .sseb-products-section {
        padding: 110px 0 90px;
        border-radius: 28px;
        background:
            radial-gradient(circle at top left, rgba(21, 101, 169, 0.45), transparent 34%),
            linear-gradient(135deg, #071827 0%, #0f2f4f 48%, #071827 100%);
        z-index: 0;
    }

    .sseb-products-bg {
        position: absolute;
        top: -160px;
        left: -80px;
        width: 620px;
        opacity: 0.13;
        z-index: -2;
        pointer-events: none;
    }

    .sseb-products-overlay {
        position: absolute;
        inset: 0;
        background:
            linear-gradient(90deg, rgba(7, 24, 39, 0.96), rgba(7, 24, 39, 0.72)),
            radial-gradient(circle at right bottom, rgba(255, 255, 255, 0.08), transparent 34%);
        z-index: -1;
    }

    .sseb-products-badge {
        display: inline-flex;
        align-items: center;
        padding: 10px 18px;
        margin-bottom: 18px;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.10);
        border: 1px solid rgba(255, 255, 255, 0.16);
        color: #ffffff;
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .sseb-products-title {
        margin: 0;
        max-width: 520px;
        color: #ffffff;
        font-size: 46px;
        line-height: 1.1;
        font-weight: 800;
        letter-spacing: -1.6px;
    }

    .sseb-products-description {
        width: 90%;
        margin: 0;
        color: rgba(255, 255, 255, 0.72);
        font-size: 17px;
        line-height: 1.8;
    }

    .sseb-slider-nav {
        display: inline-flex;
        align-items: center;
        gap: 10px;
    }

    .sseb-nav-button {
        position: static !important;
        display: inline-flex !important;
        align-items: center;
        justify-content: center;
        width: 48px !important;
        height: 48px !important;
        margin: 0 !important;
        border-radius: 999px;
        border: 1px solid rgba(255, 255, 255, 0.18);
        color: #ffffff;
        background: rgba(255, 255, 255, 0.08);
        transition: all 0.25s ease;
    }

    .sseb-nav-button::after {
        display: none;
    }

    .sseb-nav-button:hover {
        background: #ffffff;
        color: #0f2f4f;
        transform: translateY(-2px);
    }

    .sseb-product-card {
        position: relative;
        overflow: hidden;
        min-height: 470px;
        border-radius: 24px;
        background: #ffffff;
        box-shadow: 0 24px 70px rgba(0, 0, 0, 0.22);
        transition: all 0.28s ease;
    }

    .sseb-product-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 30px 90px rgba(0, 0, 0, 0.32);
    }

    .sseb-product-image-wrap {
        position: relative;
        height: 270px;
        overflow: hidden;
        background: #eef3f8;
    }

    .sseb-product-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: all 0.35s ease;
    }

    .sseb-product-card:hover .sseb-product-image {
        transform: scale(1.06);
    }

    .sseb-product-gradient {
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(7, 24, 39, 0.02), rgba(7, 24, 39, 0.32));
    }

    .sseb-product-category {
        position: absolute;
        left: 18px;
        bottom: 18px;
        z-index: 2;
        display: inline-flex;
        align-items: center;
        padding: 8px 14px;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.92);
        color: #0f4c81;
        font-size: 11px;
        line-height: 1;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 0.6px;
        backdrop-filter: blur(8px);
    }

    .sseb-product-content {
        position: relative;
        z-index: 2;
        padding: 24px 22px 26px;
    }

    .sseb-product-content h4 {
        margin: 0 0 10px;
        color: #102033;
        font-size: 20px;
        line-height: 1.25;
        font-weight: 800;
        letter-spacing: -0.4px;
    }

    .sseb-product-short {
        margin: 0 0 10px;
        color: #42526b;
        font-size: 14px;
        line-height: 1.6;
        font-weight: 700;
    }

    .sseb-product-preview {
        margin: 0 0 18px;
        color: #778195;
        font-size: 13px;
        line-height: 1.6;
    }

    .sseb-product-link {
        position: relative;
        z-index: 3;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #0f4c81;
        font-size: 13px;
        font-weight: 800;
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 0.6px;
    }

    .sseb-product-link i {
        transition: all 0.2s ease;
    }

    .sseb-product-card:hover .sseb-product-link i {
        transform: translateX(4px);
    }

    .sseb-product-clickable {
        position: absolute;
        inset: 0;
        z-index: 1;
    }

    .sseb-product-empty {
        min-height: 360px;
        border-radius: 24px;
        padding: 45px 24px;
        background: rgba(255, 255, 255, 0.08);
        border: 1px dashed rgba(255, 255, 255, 0.22);
        color: #ffffff;
        text-align: center;
    }

    .sseb-product-empty i {
        font-size: 42px;
        margin-bottom: 18px;
        opacity: 0.75;
    }

    .sseb-product-empty h4 {
        color: #ffffff;
        margin-bottom: 8px;
        font-weight: 800;
    }

    .sseb-product-empty p {
        margin: 0;
        color: rgba(255, 255, 255, 0.72);
    }

    .sseb-products-cta {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        flex-wrap: wrap;
        padding: 14px 20px;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.09);
        border: 1px solid rgba(255, 255, 255, 0.16);
        color: rgba(255, 255, 255, 0.82);
        font-size: 16px;
        font-weight: 600;
    }

    .sseb-products-cta i {
        color: #ffffff;
        font-size: 20px;
    }

    .sseb-products-cta a {
        color: #ffffff;
        font-weight: 800;
        text-decoration: underline;
        text-underline-offset: 4px;
    }

    @media (max-width: 991.98px) {
        .sseb-products-section {
            padding: 80px 0 70px;
            border-radius: 0;
        }

        .sseb-products-title {
            margin: 0 auto;
            font-size: 38px;
            letter-spacing: -1px;
        }

        .sseb-products-description {
            width: 100%;
            margin: 0 auto;
            font-size: 16px;
        }

        .sseb-product-card {
            min-height: 440px;
        }

        .sseb-products-bg {
            width: 460px;
            opacity: 0.10;
        }
    }

    @media (max-width: 575.98px) {
        .sseb-products-section {
            padding: 65px 0 55px;
        }

        .sseb-products-title {
            font-size: 31px;
        }

        .sseb-product-image-wrap {
            height: 240px;
        }

        .sseb-product-content {
            padding: 22px 18px 24px;
        }

        .sseb-products-cta {
            border-radius: 22px;
        }
    }
</style>
