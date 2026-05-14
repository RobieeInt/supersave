@extends('frontend.layouts.basesupersave')

@section('title', 'About Us')

@section('content')

<section id="down-section" class="sseb-about-hero">
    <div class="container">

        <div class="row align-items-center g-5">

            {{-- LEFT CONTENT --}}
            <div class="col-lg-6"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 700, "delay": 0, "staggervalue": 180, "easing": "easeOutQuad" }'>

                <span class="sseb-about-badge">
                    About Super Save
                </span>

                <h1 class="sseb-about-title">
                    Solusi produk energi dan kelistrikan yang lebih praktis untuk kebutuhan Anda.
                </h1>

                <p class="sseb-about-description">
                    Super Save Elektronik Ballast hadir untuk membantu kebutuhan produk elektronik ballast,
                    kelistrikan, dan solusi energi dengan pilihan produk yang reliable untuk rumah, bisnis,
                    hingga kebutuhan proyek.
                </p>

                <div class="sseb-about-actions">
                    <a href="https://wa.me/6285810003784?text=Halo%20SuperSave%2C%20saya%20ingin%20konsultasi"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="sseb-about-btn">
                        <i class="fa-brands fa-whatsapp"></i>
                        Konsultasi Produk
                    </a>

                    <a href="{{ route('product') }}" class="sseb-about-link">
                        Lihat Produk
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

            </div>

            {{-- RIGHT VISUAL --}}
            <div class="col-lg-6"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 100, "staggervalue": 160, "easing": "easeOutQuad" }'>

                <div class="sseb-about-visual">
                    <img src="{{ asset('supersave/animation/solar-animation-res.png') }}"
                        alt="Super Save Elektronik Ballast"
                        class="sseb-about-main-img">

                    <div class="sseb-about-floating-card">
                        <strong>28+</strong>
                        <span>Tahun pengalaman industri</span>
                    </div>
                </div>

            </div>

        </div>

        {{-- FEATURES --}}
        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 row-cols-sm-2 g-4 sseb-feature-row"
            data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 700, "delay": 100, "staggervalue": 120, "easing": "easeOutQuad" }'>

            <div class="col">
                <div class="sseb-feature-card">
                    <div class="sseb-feature-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>

                    <h4>Produk Terpercaya</h4>

                    <p>
                        Pilihan produk yang disiapkan untuk kebutuhan kelistrikan dan energi yang lebih stabil.
                    </p>
                </div>
            </div>

            <div class="col">
                <div class="sseb-feature-card">
                    <div class="sseb-feature-icon">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                    </div>

                    <h4>Dukungan Profesional</h4>

                    <p>
                        Tim kami siap membantu Anda memilih produk sesuai kebutuhan penggunaan atau proyek.
                    </p>
                </div>
            </div>

            <div class="col">
                <div class="sseb-feature-card">
                    <div class="sseb-feature-icon">
                        <i class="fa-solid fa-bolt"></i>
                    </div>

                    <h4>Solusi Praktis</h4>

                    <p>
                        Kami bantu arahkan kebutuhan produk agar lebih mudah, efisien, dan tepat sasaran.
                    </p>
                </div>
            </div>

            <div class="col">
                <div class="sseb-feature-card">
                    <div class="sseb-feature-icon">
                        <i class="fa-solid fa-headset"></i>
                    </div>

                    <h4>Mudah Dihubungi</h4>

                    <p>
                        Butuh informasi cepat? Konsultasi langsung lewat WhatsApp tanpa ribet.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="sseb-about-cta-section">
    <div class="container">
        <div class="sseb-about-cta"
            data-anime='{ "translateY": [20, 0], "opacity": [0,1], "duration": 700, "delay": 0, "easing": "easeOutQuad" }'>

            <div class="sseb-about-cta-icon">
                <i class="fa-brands fa-whatsapp"></i>
            </div>

            <div>
                <h4>Butuh rekomendasi produk yang cocok?</h4>
                <p>Chat tim kami, nanti dibantu arahin sesuai kebutuhan Anda.</p>
            </div>

            <a href="https://wa.me/6285810003784?text=Halo%20SuperSave%2C%20saya%20ingin%20bertanya%20tentang%20produk"
                target="_blank"
                rel="noopener noreferrer">
                Tanya Sekarang
            </a>

        </div>
    </div>
</section>

<section class="sseb-about-story-section">
    <div class="container">

        <div class="row align-items-center g-5">

            {{-- LEFT IMAGE --}}
            <div class="col-lg-6"
                data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 100, "easing": "easeOutQuad" }'>

                <div class="sseb-story-image-wrap">
                    <img src="{{ asset('supersave/bg/solar-panel-bg.jpg') }}"
                        alt="Solusi energi Super Save"
                        class="sseb-story-image">

                    <div class="sseb-story-mini-card">
                        <i class="fa-solid fa-check"></i>
                        <span>Reliable untuk rumah, bisnis, dan proyek</span>
                    </div>
                </div>

            </div>

            {{-- RIGHT CONTENT --}}
            <div class="col-lg-6"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 700, "delay": 100, "staggervalue": 160, "easing": "easeOutQuad" }'>

                <span class="sseb-about-badge">
                    Cara Kami Bekerja
                </span>

                <h2 class="sseb-story-title">
                    Fokus kami sederhana: produk yang tepat, komunikasi jelas, dan pelayanan yang mudah.
                </h2>

                <p class="sseb-story-text">
                    Kami percaya pelanggan tidak perlu dibuat bingung dengan pilihan produk yang terlalu teknis.
                    Karena itu, Super Save membantu proses pemilihan produk agar lebih praktis, dari kebutuhan dasar
                    sampai kebutuhan proyek yang lebih spesifik.
                </p>

                <div class="sseb-value-list">

                    <div class="sseb-value-item">
                        <span>01</span>
                        <div>
                            <h5>Konsultasi kebutuhan</h5>
                            <p>Kami bantu pahami kebutuhan produk sebelum Anda membeli.</p>
                        </div>
                    </div>

                    <div class="sseb-value-item">
                        <span>02</span>
                        <div>
                            <h5>Rekomendasi produk</h5>
                            <p>Produk diarahkan sesuai penggunaan, kapasitas, dan kebutuhan proyek.</p>
                        </div>
                    </div>

                    <div class="sseb-value-item">
                        <span>03</span>
                        <div>
                            <h5>Support setelah pembelian</h5>
                            <p>Tim kami tetap bisa dihubungi jika Anda butuh bantuan lanjutan.</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

<style>
    .sseb-about-hero {
        padding: 120px 0 80px;
        background:
            radial-gradient(circle at top left, rgba(15, 76, 129, 0.08), transparent 32%),
            linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);
        overflow: hidden;
    }

    .sseb-about-badge {
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

    .sseb-about-title {
        max-width: 720px;
        margin-bottom: 24px;
        color: #102033;
        font-size: 58px;
        line-height: 1.05;
        font-weight: 800;
        letter-spacing: -2.4px;
    }

    .sseb-about-description {
        max-width: 650px;
        margin-bottom: 34px;
        color: #64748b;
        font-size: 18px;
        line-height: 1.9;
    }

    .sseb-about-actions {
        display: flex;
        align-items: center;
        gap: 22px;
        flex-wrap: wrap;
    }

    .sseb-about-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        min-height: 52px;
        padding: 0 26px;
        border-radius: 999px;
        background: linear-gradient(135deg, #0f4c81 0%, #1565a9 100%);
        color: #ffffff !important;
        font-size: 15px;
        font-weight: 800;
        text-decoration: none;
        box-shadow: 0 16px 40px rgba(15, 76, 129, 0.20);
        transition: all 0.25s ease;
    }

    .sseb-about-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 22px 48px rgba(15, 76, 129, 0.28);
    }

    .sseb-about-link {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        color: #102033;
        font-size: 15px;
        font-weight: 800;
        text-decoration: none;
    }

    .sseb-about-link:hover {
        color: #0f4c81;
    }

    .sseb-about-visual {
        position: relative;
        min-height: 520px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .sseb-about-main-img {
        width: 100%;
        max-width: 540px;
        filter: drop-shadow(0 34px 70px rgba(15, 23, 42, 0.13));
    }

    .sseb-about-floating-card {
        position: absolute;
        left: 24px;
        bottom: 40px;
        width: 210px;
        padding: 24px 20px;
        border-radius: 26px;
        background: rgba(255, 255, 255, 0.92);
        backdrop-filter: blur(12px);
        box-shadow: 0 22px 60px rgba(15, 23, 42, 0.12);
        text-align: center;
    }

    .sseb-about-floating-card strong {
        display: block;
        color: #102033;
        font-size: 62px;
        line-height: 0.95;
        font-weight: 800;
        letter-spacing: -3px;
    }

    .sseb-about-floating-card span {
        display: block;
        margin-top: 10px;
        color: #475569;
        font-size: 15px;
        line-height: 1.4;
        font-weight: 700;
    }

    .sseb-feature-row {
        margin-top: 72px;
    }

    .sseb-feature-card {
        height: 100%;
        padding: 30px 26px;
        border-radius: 26px;
        background: #ffffff;
        border: 1px solid rgba(15, 23, 42, 0.06);
        box-shadow: 0 18px 50px rgba(15, 23, 42, 0.06);
        transition: all 0.25s ease;
    }

    .sseb-feature-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 26px 70px rgba(15, 23, 42, 0.10);
    }

    .sseb-feature-icon {
        width: 56px;
        height: 56px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        border-radius: 18px;
        background: rgba(15, 76, 129, 0.08);
        color: #0f4c81;
        font-size: 22px;
    }

    .sseb-feature-card h4 {
        margin-bottom: 10px;
        color: #102033;
        font-size: 19px;
        font-weight: 800;
        letter-spacing: -0.3px;
    }

    .sseb-feature-card p {
        margin: 0;
        color: #64748b;
        font-size: 14px;
        line-height: 1.8;
    }

    .sseb-about-cta-section {
        padding: 0;
        background: #ffffff;
    }

    .sseb-about-cta {
        position: relative;
        z-index: 2;
        display: flex;
        align-items: center;
        gap: 22px;
        margin-top: -20px;
        padding: 24px 28px;
        border-radius: 999px;
        background: #ffffff;
        border: 1px solid rgba(15, 23, 42, 0.08);
        box-shadow: 0 18px 50px rgba(15, 23, 42, 0.08);
    }

    .sseb-about-cta-icon {
        width: 54px;
        height: 54px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        border-radius: 50%;
        background: rgba(15, 76, 129, 0.08);
        color: #0f4c81;
        font-size: 24px;
    }

    .sseb-about-cta h4 {
        margin: 0 0 4px;
        color: #102033;
        font-size: 21px;
        font-weight: 800;
    }

    .sseb-about-cta p {
        margin: 0;
        color: #64748b;
        font-size: 14px;
    }

    .sseb-about-cta a {
        margin-left: auto;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-height: 46px;
        padding: 0 22px;
        border-radius: 999px;
        background: #102033;
        color: #ffffff !important;
        font-size: 14px;
        font-weight: 800;
        text-decoration: none;
        white-space: nowrap;
        transition: all 0.25s ease;
    }

    .sseb-about-cta a:hover {
        transform: translateY(-2px);
        background: #0f4c81;
    }

    .sseb-about-story-section {
        padding: 95px 0;
        background: #ffffff;
        overflow: hidden;
    }

    .sseb-story-image-wrap {
        position: relative;
        overflow: hidden;
        border-radius: 34px;
        box-shadow: 0 30px 80px rgba(15, 23, 42, 0.12);
    }

    .sseb-story-image {
        width: 100%;
        height: 560px;
        display: block;
        object-fit: cover;
    }

    .sseb-story-mini-card {
        position: absolute;
        left: 26px;
        right: 26px;
        bottom: 26px;
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 18px 20px;
        border-radius: 22px;
        background: rgba(255, 255, 255, 0.92);
        backdrop-filter: blur(12px);
        box-shadow: 0 18px 44px rgba(15, 23, 42, 0.12);
    }

    .sseb-story-mini-card i {
        width: 38px;
        height: 38px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        border-radius: 50%;
        background: #0f4c81;
        color: #ffffff;
    }

    .sseb-story-mini-card span {
        color: #102033;
        font-weight: 800;
        line-height: 1.4;
    }

    .sseb-story-title {
        margin-bottom: 22px;
        color: #102033;
        font-size: 44px;
        line-height: 1.12;
        font-weight: 800;
        letter-spacing: -1.6px;
    }

    .sseb-story-text {
        margin-bottom: 30px;
        color: #64748b;
        font-size: 17px;
        line-height: 1.9;
    }

    .sseb-value-list {
        display: grid;
        gap: 18px;
    }

    .sseb-value-item {
        display: flex;
        gap: 18px;
        padding: 20px;
        border-radius: 22px;
        background: #f8fafc;
        border: 1px solid rgba(15, 23, 42, 0.05);
    }

    .sseb-value-item > span {
        width: 42px;
        height: 42px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        border-radius: 50%;
        background: #102033;
        color: #ffffff;
        font-size: 13px;
        font-weight: 800;
    }

    .sseb-value-item h5 {
        margin: 0 0 6px;
        color: #102033;
        font-size: 18px;
        font-weight: 800;
    }

    .sseb-value-item p {
        margin: 0;
        color: #64748b;
        line-height: 1.7;
    }

    @media (max-width: 991.98px) {
        .sseb-about-hero {
            padding: 100px 0 65px;
        }

        .sseb-about-title {
            font-size: 42px;
            letter-spacing: -1.4px;
        }

        .sseb-about-visual {
            min-height: auto;
        }

        .sseb-about-floating-card {
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);
        }

        .sseb-about-cta {
            align-items: flex-start;
            border-radius: 28px;
            flex-direction: column;
        }

        .sseb-about-cta a {
            margin-left: 0;
            width: 100%;
        }

        .sseb-about-story-section {
            padding: 75px 0;
        }

        .sseb-story-title {
            font-size: 36px;
            letter-spacing: -1px;
        }

        .sseb-story-image {
            height: 420px;
        }
    }

    @media (max-width: 575.98px) {
        .sseb-about-hero {
            padding: 85px 0 55px;
        }

        .sseb-about-title {
            font-size: 34px;
        }

        .sseb-about-description {
            font-size: 16px;
        }

        .sseb-about-btn,
        .sseb-about-link {
            width: 100%;
            justify-content: center;
        }

        .sseb-about-floating-card {
            width: 190px;
            padding: 20px 18px;
        }

        .sseb-about-floating-card strong {
            font-size: 52px;
        }

        .sseb-feature-row {
            margin-top: 55px;
        }

        .sseb-story-image {
            height: 320px;
        }

        .sseb-story-title {
            font-size: 31px;
        }

        .sseb-value-item {
            padding: 18px;
        }
    }
</style>

@endsection
