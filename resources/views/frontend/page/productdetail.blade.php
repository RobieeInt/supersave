@extends('frontend.layouts.basesupersave')

@section('title', $product->name)

@section('content')

<section class="sseb-product-detail-section">
    <div class="container">

        <div class="row align-items-start g-5">

            {{-- SIDEBAR --}}
            <div class="col-lg-4 order-2 order-lg-1"
                data-anime='{ "el": "childs", "translateY": [40, 0], "opacity": [0,1], "duration": 900, "delay": 0, "staggervalue": 120, "easing": "easeOutQuad" }'>

                {{-- CONTACT CARD --}}
                <div class="sseb-contact-card">

                    <div class="sseb-contact-icon">
                        <i class="bi bi-headset"></i>
                    </div>

                    <span class="sseb-contact-label">
                        Konsultasi Produk
                    </span>

                    <h4>
                        Butuh bantuan pilih produk?
                    </h4>

                    <p>
                        Tim kami siap membantu rekomendasi produk sesuai kebutuhan proyek,
                        bisnis, maupun penggunaan pribadi.
                    </p>

                    <a href="https://wa.me/6285810003784?text=Halo%20SuperSave%2C%20saya%20ingin%20bertanya%20tentang%20produk%20{{ urlencode($product->name) }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="sseb-contact-btn">

                        <i class="fa-brands fa-whatsapp"></i>
                        Chat WhatsApp
                    </a>

                    <div class="sseb-contact-number">
                        <i class="bi bi-telephone"></i>
                        +62 858 1000 3784
                    </div>

                </div>

                {{-- PRODUCT INFO --}}
                <div class="sseb-product-info-card">

                    <h5>Informasi Produk</h5>

                    <div class="sseb-info-item">
                        <span>Kategori</span>
                        <strong>{{ $product->category->name ?? 'Produk' }}</strong>
                    </div>

                    <div class="sseb-info-item">
                        <span>Produk</span>
                        <strong>{{ $product->name }}</strong>
                    </div>

                    <div class="sseb-info-item">
                        <span>Status</span>
                        <strong class="text-success">Tersedia</strong>
                    </div>

                </div>

            </div>

            {{-- CONTENT --}}
            <div class="col-lg-8 order-1 order-lg-2"
                data-anime='{ "el": "childs", "translateY": [25, 0], "opacity": [0,1], "duration": 700, "delay": 0, "staggervalue": 180, "easing": "easeOutQuad" }'>

                @php
                    $gallery = $product->galleries->first();
                    $productImage = $gallery && $gallery->image
                        ? asset('/storage/' . $gallery->image)
                        : asset('supersave/bg/solar-panel-bg.jpg');
                @endphp

                {{-- BADGE --}}
                <span class="sseb-product-badge">
                    {{ $product->category->name ?? 'Produk Unggulan' }}
                </span>

                {{-- TITLE --}}
                <h1 class="sseb-product-title">
                    {{ $product->name }}
                </h1>

                {{-- SHORT DESC --}}
                <p class="sseb-product-short">
                    {{ $product->short_description }}
                </p>

                {{-- IMAGE --}}
                <div class="sseb-product-image-wrap">

                    <img src="{{ $productImage }}"
                        alt="{{ $product->name }}"
                        class="sseb-product-image">

                    <div class="sseb-product-image-overlay"></div>

                </div>

                {{-- DESCRIPTION --}}
                <div class="sseb-product-description">
                    {!! $product->description !!}
                </div>

                {{-- CTA --}}
                <div class="sseb-product-bottom-cta">

                    <div>
                        <h5>
                            Tertarik dengan produk ini?
                        </h5>

                        <p>
                            Hubungi tim kami untuk konsultasi dan informasi lebih lanjut.
                        </p>
                    </div>

                    <a href="https://wa.me/6285810003784?text=Halo%20SuperSave%2C%20saya%20ingin%20bertanya%20tentang%20produk%20{{ urlencode($product->name) }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="sseb-product-wa-btn">

                        <i class="fa-brands fa-whatsapp"></i>
                        Tanya Sekarang
                    </a>

                </div>

            </div>

        </div>

    </div>
</section>

<style>
    .sseb-product-detail-section {
        padding: 120px 0 90px;
        background:
            radial-gradient(circle at top left, rgba(15, 76, 129, 0.06), transparent 30%),
            linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);
    }

    .sseb-product-badge {
        display: inline-flex;
        align-items: center;
        padding: 10px 18px;
        margin-bottom: 20px;
        border-radius: 999px;
        background: rgba(15, 76, 129, 0.08);
        color: #0f4c81;
        font-size: 12px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .sseb-product-title {
        margin-bottom: 18px;
        color: #102033;
        font-size: 52px;
        line-height: 1.08;
        font-weight: 800;
        letter-spacing: -2px;
    }

    .sseb-product-short {
        max-width: 760px;
        margin-bottom: 36px;
        color: #64748b;
        font-size: 18px;
        line-height: 1.9;
    }

    .sseb-product-image-wrap {
        position: relative;
        overflow: hidden;
        margin-bottom: 40px;
        border-radius: 32px;
        background: #e2e8f0;
        box-shadow: 0 30px 80px rgba(15, 23, 42, 0.10);
    }

    .sseb-product-image {
        width: 100%;
        height: auto;
        display: block;
        object-fit: cover;
        transition: all 0.35s ease;
    }

    .sseb-product-image-wrap:hover .sseb-product-image {
        transform: scale(1.03);
    }

    .sseb-product-image-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(15, 23, 42, 0.02), rgba(15, 23, 42, 0.10));
        pointer-events: none;
    }

    .sseb-product-description {
        color: #475569;
        font-size: 17px;
        line-height: 2;
    }

    .sseb-product-description h1,
    .sseb-product-description h2,
    .sseb-product-description h3,
    .sseb-product-description h4,
    .sseb-product-description h5 {
        margin-top: 35px;
        margin-bottom: 18px;
        color: #102033;
        font-weight: 800;
        line-height: 1.3;
    }

    .sseb-product-description p {
        margin-bottom: 18px;
    }

    .sseb-product-description ul {
        padding-left: 20px;
        margin-bottom: 20px;
    }

    .sseb-product-description img {
        max-width: 100%;
        border-radius: 18px;
        margin: 20px 0;
    }

    .sseb-contact-card {
        position: sticky;
        top: 120px;

        padding: 34px 30px;
        margin-bottom: 24px;

        border-radius: 30px;

        background:
            linear-gradient(135deg, #071827 0%, #0f2f4f 100%);

        color: #ffffff;

        overflow: hidden;

        box-shadow: 0 30px 70px rgba(15, 23, 42, 0.18);
    }

    .sseb-contact-card::before {
        content: "";
        position: absolute;
        right: -80px;
        top: -80px;
        width: 180px;
        height: 180px;
        border-radius: 50%;
        background: rgba(255,255,255,0.05);
    }

    .sseb-contact-icon {
        width: 68px;
        height: 68px;

        display: inline-flex;
        align-items: center;
        justify-content: center;

        margin-bottom: 22px;

        border-radius: 20px;

        background: rgba(255,255,255,0.12);

        font-size: 28px;
    }

    .sseb-contact-label {
        display: inline-block;
        margin-bottom: 12px;

        color: rgba(255,255,255,0.65);

        font-size: 12px;
        font-weight: 800;

        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .sseb-contact-card h4 {
        margin-bottom: 14px;

        color: #ffffff;

        font-size: 30px;
        line-height: 1.2;
        font-weight: 800;

        letter-spacing: -1px;
    }

    .sseb-contact-card p {
        margin-bottom: 24px;

        color: rgba(255,255,255,0.72);

        line-height: 1.8;
    }

    .sseb-contact-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;

        min-height: 50px;
        width: 100%;

        margin-bottom: 20px;

        border-radius: 999px;

        background: #ffffff;

        color: #0f4c81 !important;

        font-size: 15px;
        font-weight: 800;

        text-decoration: none;

        transition: all 0.25s ease;
    }

    .sseb-contact-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 18px 40px rgba(0,0,0,0.22);
    }

    .sseb-contact-number {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;

        color: rgba(255,255,255,0.75);

        font-size: 14px;
        font-weight: 700;
    }

    .sseb-product-info-card {
        padding: 28px;

        border-radius: 28px;

        background: #ffffff;

        border: 1px solid rgba(15,23,42,0.06);

        box-shadow: 0 18px 50px rgba(15,23,42,0.06);
    }

    .sseb-product-info-card h5 {
        margin-bottom: 24px;

        color: #102033;

        font-size: 22px;
        font-weight: 800;
    }

    .sseb-info-item {
        display: flex;
        align-items: center;
        justify-content: space-between;

        padding-bottom: 14px;
        margin-bottom: 14px;

        border-bottom: 1px solid rgba(15,23,42,0.08);
    }

    .sseb-info-item:last-child {
        margin-bottom: 0;
        padding-bottom: 0;
        border-bottom: 0;
    }

    .sseb-info-item span {
        color: #64748b;
        font-size: 14px;
    }

    .sseb-info-item strong {
        color: #102033;
        font-size: 14px;
        font-weight: 800;
    }

    .sseb-product-bottom-cta {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 25px;

        margin-top: 50px;
        padding: 30px;

        border-radius: 28px;

        background:
            linear-gradient(135deg, rgba(15, 76, 129, 0.06), rgba(15, 76, 129, 0.02));

        border: 1px solid rgba(15,76,129,0.08);
    }

    .sseb-product-bottom-cta h5 {
        margin-bottom: 8px;

        color: #102033;

        font-size: 28px;
        font-weight: 800;

        letter-spacing: -1px;
    }

    .sseb-product-bottom-cta p {
        margin: 0;
        color: #64748b;
    }

    .sseb-product-wa-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;

        min-width: 190px;
        min-height: 54px;

        padding: 0 26px;

        border-radius: 999px;

        background:
            linear-gradient(135deg, #0f4c81 0%, #1565a9 100%);

        color: #ffffff !important;

        font-size: 15px;
        font-weight: 800;

        text-decoration: none;

        box-shadow: 0 16px 40px rgba(15,76,129,0.18);

        transition: all 0.25s ease;
    }

    .sseb-product-wa-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 24px 50px rgba(15,76,129,0.24);
    }

    @media (max-width: 991.98px) {

        .sseb-product-detail-section {
            padding: 100px 0 70px;
        }

        .sseb-product-title {
            font-size: 42px;
            letter-spacing: -1px;
        }

        .sseb-contact-card {
            position: relative;
            top: 0;
        }

        .sseb-product-bottom-cta {
            flex-direction: column;
            text-align: center;
        }

        .sseb-product-wa-btn {
            width: 100%;
        }
    }

    @media (max-width: 575.98px) {

        .sseb-product-detail-section {
            padding: 85px 0 55px;
        }

        .sseb-product-title {
            font-size: 34px;
        }

        .sseb-product-short {
            font-size: 16px;
        }

        .sseb-contact-card {
            padding: 28px 22px;
            border-radius: 24px;
        }

        .sseb-product-info-card {
            padding: 24px 22px;
            border-radius: 24px;
        }

        .sseb-product-bottom-cta {
            padding: 24px 22px;
            border-radius: 24px;
        }

        .sseb-product-bottom-cta h5 {
            font-size: 24px;
        }
    }
</style>

@endsection
