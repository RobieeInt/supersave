@extends('frontend.layouts.basesupersave')

@section('title', 'Contact Us')

@section('content')

<section class="sseb-contact-hero"
    style="background-image: url('{{ asset('supersave/bg/solar-panel-bg-1.jpg') }}')">

    <div class="sseb-contact-hero-overlay"></div>

    <div class="container position-relative">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-9 text-center"
                data-anime='{ "el": "childs", "translateY": [40, 0], "opacity": [0,1], "duration": 700, "delay": 0, "staggervalue": 180, "easing": "easeOutQuad" }'>

                <span class="sseb-contact-badge">
                    Contact Super Save
                </span>

                <h1 class="sseb-contact-hero-title">
                    Ada kebutuhan produk atau konsultasi?
                </h1>

                <p class="sseb-contact-hero-text">
                    Chat tim kami atau kunjungi kantor Super Save. Kami bantu arahkan produk
                    yang sesuai untuk kebutuhan rumah, bisnis, sampai proyek.
                </p>

                <div class="sseb-contact-hero-actions">
                    <a href="https://wa.me/6285810003784?text=Halo%20SuperSave%2C%20saya%20ingin%20konsultasi"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="sseb-contact-primary-btn">
                        <i class="fa-brands fa-whatsapp"></i>
                        Chat WhatsApp
                    </a>

                    <a href="#down-section" class="sseb-contact-secondary-btn section-link">
                        Lihat Kontak
                        <i class="fa-solid fa-arrow-down"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="down-section" class="sseb-contact-info-section">
    <div class="container">

        <div class="row align-items-end justify-content-between mb-5 text-center text-lg-start">
            <div class="col-lg-6"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 700, "delay":0, "staggervalue": 180, "easing": "easeOutQuad" }'>

                <span class="sseb-contact-small-badge">
                    Hubungi Kami
                </span>

                <h2 class="sseb-contact-section-title">
                    Kami siap bantu kebutuhan produk Anda.
                </h2>
            </div>

            <div class="col-lg-5"
                data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 700, "delay":100, "easing": "easeOutQuad" }'>

                <p class="sseb-contact-section-text">
                    Butuh informasi produk, penawaran, atau arahan teknis sederhana?
                    Langsung hubungi kontak di bawah. Gak perlu muter-muter kayak template lama itu.
                </p>
            </div>
        </div>

        <div class="row g-4"
            data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 700, "delay":0, "staggervalue": 140, "easing": "easeOutQuad" }'>

            <div class="col-xl-3 col-md-6">
                <div class="sseb-contact-card">
                    <div class="sseb-contact-card-icon">
                        <i class="feather icon-feather-map-pin"></i>
                    </div>

                    <h4>Alamat Kantor</h4>

                    <p>
                        Jl. Raya Mauk (M. Toha) KM 3 No. 8,<br>
                        Kel. Galeong, Kec. Karawaci,<br>
                        Tangerang, Banten 15113
                    </p>

                    <a href="https://www.google.com/maps/search/?api=1&query=-6.172375009810255,106.61226761716651"
                        target="_blank"
                        rel="noopener noreferrer">
                        Buka Maps
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="sseb-contact-card">
                    <div class="sseb-contact-card-icon">
                        <i class="fa-brands fa-whatsapp"></i>
                    </div>

                    <h4>WhatsApp</h4>

                    <p>
                        Mau tanya produk atau konsultasi kebutuhan? Langsung chat admin kami.
                    </p>

                    <a href="https://wa.me/6285810003784?text=Halo%20SuperSave%2C%20saya%20ingin%20konsultasi"
                        target="_blank"
                        rel="noopener noreferrer">
                        +62 858-1000-3784
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="sseb-contact-card">
                    <div class="sseb-contact-card-icon">
                        <i class="feather icon-feather-mail"></i>
                    </div>

                    <h4>Email</h4>

                    <p>
                        Kirim pertanyaan produk, kerja sama, atau kebutuhan lainnya via email.
                    </p>

                    <a href="mailto:esti@supersave.id">
                        esti@supersave.id
                    </a>

                    <a href="mailto:indah@supersave.id">
                        indah@supersave.id
                    </a>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="sseb-contact-card">
                    <div class="sseb-contact-card-icon">
                        <i class="feather icon-feather-users"></i>
                    </div>

                    <h4>Karier</h4>

                    <p>
                        Untuk kebutuhan rekrutmen atau informasi karier, hubungi email HR.
                    </p>

                    <a href="mailto:hire@supersave.id">
                        hire@supersave.id
                    </a>

                    <a href="mailto:hr@supersave.id">
                        hr@supersave.id
                    </a>
                </div>
            </div>

        </div>

        <div class="sseb-contact-cta"
            data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 700, "delay":100, "easing": "easeOutQuad" }'>

            <div class="sseb-contact-cta-icon">
                <i class="fa-brands fa-whatsapp"></i>
            </div>

            <div>
                <h4>Mau langsung tanya produk?</h4>
                <p>Chat admin Super Save, nanti dibantu arahin sesuai kebutuhan.</p>
            </div>

            <a href="https://wa.me/6285810003784?text=Halo%20SuperSave%2C%20saya%20ingin%20bertanya%20tentang%20produk"
                target="_blank"
                rel="noopener noreferrer">
                Tanya Sekarang
            </a>

        </div>

    </div>
</section>

<section class="sseb-contact-map-section">
    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-5">
                <span class="sseb-contact-small-badge">
                    Lokasi Kantor
                </span>

                <h2 class="sseb-contact-section-title">
                    Kunjungi lokasi Super Save.
                </h2>

                <p class="sseb-contact-section-text">
                    Gunakan peta di samping untuk melihat titik lokasi kantor.
                    Pastikan membuat janji atau menghubungi admin terlebih dahulu sebelum datang.
                </p>

                <a href="https://www.google.com/maps/search/?api=1&query=-6.172375009810255,106.61226761716651"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="sseb-map-btn">
                    <i class="fa-solid fa-location-dot"></i>
                    Buka di Google Maps
                </a>
            </div>

            <div class="col-lg-7">
                <div class="sseb-map-wrapper">
                    <iframe
                        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=id&amp;q=-6.172375009810255,%20106.61226761716651+(Super%20Save%20Elektronik%20Ballast)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                        width="100%"
                        height="520"
                        frameborder="0"
                        scrolling="no"
                        marginheight="0"
                        marginwidth="0"
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

        </div>

    </div>
</section>

<style>
    .sseb-contact-hero {
        position: relative;
        min-height: 640px;
        display: flex;
        align-items: center;
        padding: 150px 0 110px;
        overflow: hidden;
        background-size: cover;
        background-position: center;
        border-radius: 0 0 46px 46px;
    }

    .sseb-contact-hero-overlay {
        position: absolute;
        inset: 0;
        background:
            linear-gradient(135deg, rgba(7, 24, 39, 0.92), rgba(15, 47, 79, 0.74)),
            radial-gradient(circle at top left, rgba(255,255,255,0.10), transparent 30%);
    }

    .sseb-contact-badge,
    .sseb-contact-small-badge {
        display: inline-flex;
        align-items: center;
        padding: 10px 18px;
        margin-bottom: 20px;
        border-radius: 999px;
        font-size: 12px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .sseb-contact-badge {
        background: rgba(255,255,255,0.12);
        color: #ffffff;
        border: 1px solid rgba(255,255,255,0.16);
    }

    .sseb-contact-small-badge {
        background: rgba(15, 76, 129, 0.08);
        color: #0f4c81;
    }

    .sseb-contact-hero-title {
        max-width: 850px;
        margin: 0 auto 22px;
        color: #ffffff;
        font-size: 64px;
        line-height: 1.05;
        font-weight: 800;
        letter-spacing: -2.8px;
    }

    .sseb-contact-hero-text {
        max-width: 700px;
        margin: 0 auto 34px;
        color: rgba(255,255,255,0.78);
        font-size: 18px;
        line-height: 1.85;
    }

    .sseb-contact-hero-actions {
        display: flex;
        justify-content: center;
        gap: 14px;
        flex-wrap: wrap;
    }

    .sseb-contact-primary-btn,
    .sseb-contact-secondary-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        min-height: 52px;
        padding: 0 26px;
        border-radius: 999px;
        font-size: 15px;
        font-weight: 800;
        text-decoration: none;
        transition: all 0.25s ease;
    }

    .sseb-contact-primary-btn {
        background: #ffffff;
        color: #0f4c81 !important;
    }

    .sseb-contact-secondary-btn {
        background: rgba(255,255,255,0.10);
        color: #ffffff !important;
        border: 1px solid rgba(255,255,255,0.18);
    }

    .sseb-contact-primary-btn:hover,
    .sseb-contact-secondary-btn:hover {
        transform: translateY(-3px);
    }

    .sseb-contact-info-section {
        padding: 100px 0 80px;
        background:
            radial-gradient(circle at top left, rgba(15, 76, 129, 0.07), transparent 32%),
            linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);
    }

    .sseb-contact-section-title {
        margin: 0 0 18px;
        color: #102033;
        font-size: 46px;
        line-height: 1.12;
        font-weight: 800;
        letter-spacing: -1.7px;
    }

    .sseb-contact-section-text {
        margin: 0;
        color: #64748b;
        font-size: 17px;
        line-height: 1.85;
    }

    .sseb-contact-card {
        height: 100%;
        padding: 30px 26px;
        border-radius: 26px;
        background: #ffffff;
        border: 1px solid rgba(15,23,42,0.07);
        box-shadow: 0 18px 50px rgba(15,23,42,0.06);
        transition: all 0.25s ease;
    }

    .sseb-contact-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 28px 70px rgba(15,23,42,0.11);
    }

    .sseb-contact-card-icon {
        width: 58px;
        height: 58px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 22px;
        border-radius: 19px;
        background: rgba(15, 76, 129, 0.08);
        color: #0f4c81;
        font-size: 24px;
    }

    .sseb-contact-card h4 {
        margin-bottom: 12px;
        color: #102033;
        font-size: 21px;
        font-weight: 800;
        letter-spacing: -0.4px;
    }

    .sseb-contact-card p {
        min-height: 88px;
        margin-bottom: 18px;
        color: #64748b;
        font-size: 14px;
        line-height: 1.75;
    }

    .sseb-contact-card a {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        margin-right: 8px;
        margin-bottom: 8px;
        color: #0f4c81;
        font-size: 14px;
        font-weight: 800;
        text-decoration: none;
    }

    .sseb-contact-card a:hover {
        color: #102033;
    }

    .sseb-contact-cta {
        display: flex;
        align-items: center;
        gap: 22px;
        margin-top: 48px;
        padding: 26px 30px;
        border-radius: 999px;
        background: linear-gradient(135deg, #071827 0%, #0f2f4f 100%);
        color: #ffffff;
        box-shadow: 0 24px 70px rgba(15,23,42,0.15);
    }

    .sseb-contact-cta-icon {
        width: 56px;
        height: 56px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        border-radius: 50%;
        background: rgba(255,255,255,0.12);
        font-size: 25px;
    }

    .sseb-contact-cta h4 {
        margin: 0 0 5px;
        color: #ffffff;
        font-size: 23px;
        font-weight: 800;
    }

    .sseb-contact-cta p {
        margin: 0;
        color: rgba(255,255,255,0.70);
        font-size: 14px;
    }

    .sseb-contact-cta a {
        margin-left: auto;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-height: 46px;
        padding: 0 22px;
        border-radius: 999px;
        background: #ffffff;
        color: #0f4c81 !important;
        font-size: 14px;
        font-weight: 800;
        text-decoration: none;
        white-space: nowrap;
    }

    .sseb-contact-map-section {
        padding: 90px 0 100px;
        background: #ffffff;
    }

    .sseb-map-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        min-height: 50px;
        margin-top: 28px;
        padding: 0 24px;
        border-radius: 999px;
        background: linear-gradient(135deg, #0f4c81 0%, #1565a9 100%);
        color: #ffffff !important;
        font-size: 15px;
        font-weight: 800;
        text-decoration: none;
        box-shadow: 0 16px 40px rgba(15,76,129,0.18);
        transition: all 0.25s ease;
    }

    .sseb-map-btn:hover {
        transform: translateY(-3px);
    }

    .sseb-map-wrapper {
        overflow: hidden;
        border-radius: 32px;
        box-shadow: 0 30px 80px rgba(15,23,42,0.12);
        border: 1px solid rgba(15,23,42,0.08);
        background: #e2e8f0;
    }

    .sseb-map-wrapper iframe {
        display: block;
        width: 100%;
    }

    @media (max-width: 991.98px) {
        .sseb-contact-hero {
            min-height: 540px;
            padding: 130px 0 90px;
            border-radius: 0 0 34px 34px;
        }

        .sseb-contact-hero-title {
            font-size: 44px;
            letter-spacing: -1.4px;
        }

        .sseb-contact-info-section {
            padding: 80px 0 65px;
        }

        .sseb-contact-section-title {
            font-size: 38px;
        }

        .sseb-contact-cta {
            align-items: flex-start;
            flex-direction: column;
            border-radius: 28px;
        }

        .sseb-contact-cta a {
            margin-left: 0;
            width: 100%;
        }

        .sseb-contact-map-section {
            padding: 75px 0 80px;
        }
    }

    @media (max-width: 575.98px) {
        .sseb-contact-hero {
            min-height: 500px;
            padding: 115px 0 75px;
            border-radius: 0 0 28px 28px;
        }

        .sseb-contact-hero-title {
            font-size: 34px;
        }

        .sseb-contact-hero-text,
        .sseb-contact-section-text {
            font-size: 16px;
        }

        .sseb-contact-primary-btn,
        .sseb-contact-secondary-btn {
            width: 100%;
        }

        .sseb-contact-section-title {
            font-size: 31px;
        }

        .sseb-contact-card p {
            min-height: auto;
        }

        .sseb-map-wrapper iframe {
            height: 420px;
        }
    }
</style>

@endsection

@section('js')
@endsection
