<section class="sseb-energy-section">
    <div class="container">

        <div class="row justify-content-center align-items-center mb-5">
            {{-- LEFT IMAGE --}}
            <div class="col-lg-6 col-md-9 position-relative text-center text-lg-start mb-5 mb-lg-0"
                data-anime='{ "el": "childs", "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 15, "easing": "easeOutQuad" }'>

                <div class="sseb-years-box">
                    <span class="sseb-years-number">28<sup>+</sup></span>
                    <span class="sseb-years-text">Tahun pengalaman industri</span>
                </div>

                <img src="{{ asset('supersave/animation/solar-animation-res.png') }}"
                    class="sseb-energy-image"
                    alt="Solusi energi Super Save Elektronik Ballast">
            </div>

            {{-- RIGHT CONTENT --}}
            <div class="col-lg-6 ps-lg-5 text-center text-lg-start"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>

                <span class="sseb-badge">SOLUSI ENERGI PROFESIONAL</span>

                <h3 class="sseb-title">
                    Solusi Energi Terbaik untuk Bisnis Anda.
                </h3>

                <p class="sseb-description">
                    Kami menyediakan solusi energi yang efisien, stabil, dan dapat disesuaikan
                    untuk kebutuhan rumah, bisnis, hingga industri. Dengan pengalaman lebih dari
                    28 tahun, Super Save Elektronik Ballast berkomitmen menghadirkan produk
                    berkualitas dan layanan yang profesional.
                </p>

                <div class="sseb-action-group">
                    <a href="https://api.whatsapp.com/send/?phone=%2B6285810003784&text=Halo%20SuperSave%2C%20saya%20ingin%20konsultasi&type=phone_number&app_absent=0"
                        class="sseb-wa-btn"
                        target="_blank"
                        rel="noopener noreferrer">
                        <i class="fa-brands fa-whatsapp"></i>
                        Konsultasi via WhatsApp
                    </a>

                    <a href="https://api.whatsapp.com/send/?phone=%2B6285810003784&text=Halo%20SuperSave%2C%20saya%20ingin%20bertanya&type=phone_number&app_absent=0"
                        class="sseb-contact-link"
                        target="_blank"
                        rel="noopener noreferrer">
                        +62 858-1000-3784
                    </a>
                </div>
            </div>
        </div>

        {{-- COUNTERS ASLI THEME, JANGAN DIGANGGU LAGI BIAR ANGKA GAK DRAMA --}}
        <div class="row row-cols-1 row-cols-md-4 row-cols-sm-2 justify-content-center counter-style-07 ps-3 pe-3 mt-5"
            data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>

            <div class="col text-center sm-mb-30px">
                <h2 class="vertical-counter d-inline-flex text-dark-gray fw-800 mb-0 ls-minus-3px position-relative z-index-0"
                    data-to="4586">
                    <span class="text-highlight position-absolute bottom-9px w-100">
                        <span class="bg-gradient-flamingo-amethyst-green h-10px opacity-2"></span>
                    </span>
                </h2>

                <span class="d-block fs-14 fw-700 text-uppercase text-dark-gray">
                    Telephonic talk
                </span>
            </div>

            <div class="col text-center sm-mb-30px">
                <h2 class="vertical-counter d-inline-flex text-dark-gray fw-800 mb-0 ls-minus-3px position-relative z-index-0"
                    data-to="583">
                    <span class="text-highlight position-absolute bottom-9px w-100">
                        <span class="bg-gradient-flamingo-amethyst-green h-10px opacity-2"></span>
                    </span>
                </h2>

                <span class="d-block fs-14 fw-700 text-uppercase text-dark-gray">
                    Cases solved
                </span>
            </div>

            <div class="col text-center sm-mb-30px">
                <h2 class="vertical-counter d-inline-flex text-dark-gray fw-800 mb-0 ls-minus-3px position-relative z-index-0"
                    data-to="6548">
                    <span class="text-highlight position-absolute bottom-9px w-100">
                        <span class="bg-gradient-flamingo-amethyst-green h-10px opacity-2"></span>
                    </span>
                </h2>

                <span class="d-block fs-14 fw-700 text-uppercase text-dark-gray">
                    Project
                </span>
            </div>

            <div class="col text-center">
                <h2 class="vertical-counter d-inline-flex text-dark-gray fw-800 mb-0 ls-minus-3px position-relative z-index-0"
                    data-to="836">
                    <span class="text-highlight position-absolute bottom-9px w-100">
                        <span class="bg-gradient-flamingo-amethyst-green h-10px opacity-2"></span>
                    </span>
                </h2>

                <span class="d-block fs-14 fw-700 text-uppercase text-dark-gray">
                    Happy clients
                </span>
            </div>
        </div>

    </div>
</section>

<style>
    .sseb-energy-section {
        padding: 90px 0 70px;
        background: #ffffff;
        overflow: hidden;
    }

    .sseb-energy-image {
        width: 100%;
        max-width: 520px;
        height: auto;
        display: block;
        margin: 0 auto;
        filter: drop-shadow(0 30px 60px rgba(15, 23, 42, 0.12));
    }

    .sseb-years-box {
        position: absolute;
        left: 30px;
        bottom: 20px;
        z-index: 9;
        width: 190px;
        padding: 22px 18px;
        border-radius: 24px;
        background: rgba(255, 255, 255, 0.92);
        box-shadow: 0 20px 50px rgba(15, 23, 42, 0.12);
        text-align: center;
        backdrop-filter: blur(10px);
    }

    .sseb-years-number {
        display: block;
        font-size: 64px;
        line-height: 0.9;
        font-weight: 800;
        color: #17213a;
        letter-spacing: -3px;
    }

    .sseb-years-number sup {
        font-size: 30px;
        top: -0.7em;
    }

    .sseb-years-text {
        display: block;
        margin-top: 10px;
        font-size: 15px;
        line-height: 1.35;
        font-weight: 600;
        color: #334155;
    }

    .sseb-badge {
        display: inline-block;
        margin-bottom: 20px;
        padding: 9px 18px;
        border-radius: 999px;
        background: rgba(15, 76, 129, 0.08);
        color: #0f4c81;
        font-size: 13px;
        line-height: 1;
        font-weight: 800;
        letter-spacing: 0.8px;
    }

    .sseb-title {
        margin-bottom: 24px;
        color: #17213a;
        font-size: 48px;
        line-height: 1.15;
        font-weight: 800;
        letter-spacing: -1.8px;
    }

    .sseb-description {
        width: 90%;
        margin-bottom: 34px;
        color: #70788c;
        font-size: 18px;
        line-height: 1.9;
    }

    .sseb-action-group {
        display: flex;
        align-items: center;
        gap: 22px;
        flex-wrap: wrap;
    }

    .sseb-wa-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        min-height: 50px;
        padding: 0 24px;
        border-radius: 999px;
        background: linear-gradient(135deg, #0f4c81 0%, #1565a9 100%);
        color: #ffffff !important;
        font-size: 15px;
        font-weight: 800;
        text-decoration: none;
        box-shadow: 0 14px 32px rgba(15, 76, 129, 0.22);
        transition: all 0.25s ease;
    }

    .sseb-wa-btn:hover {
        color: #ffffff !important;
        transform: translateY(-2px);
        box-shadow: 0 18px 38px rgba(15, 76, 129, 0.3);
    }

    .sseb-contact-link {
        color: #17213a;
        font-size: 16px;
        font-weight: 800;
        text-decoration: none;
    }

    .sseb-contact-link:hover {
        color: #0f4c81;
    }

    @media (max-width: 991.98px) {
        .sseb-energy-section {
            padding: 70px 0 55px;
        }

        .sseb-years-box {
            position: relative;
            left: auto;
            bottom: auto;
            margin: 0 auto 25px;
        }

        .sseb-title {
            font-size: 38px;
            letter-spacing: -1px;
        }

        .sseb-description {
            width: 100%;
            font-size: 16px;
        }

        .sseb-action-group {
            justify-content: center;
        }
    }

    @media (max-width: 575.98px) {
        .sseb-energy-section {
            padding: 55px 0 45px;
        }

        .sseb-title {
            font-size: 31px;
        }

        .sseb-years-number {
            font-size: 52px;
        }

        .sseb-wa-btn {
            width: 100%;
        }
    }
</style>
