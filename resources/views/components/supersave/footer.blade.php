<footer class="sseb-footer">
    <div class="container">

        {{-- TOP --}}
        <div class="row justify-content-between g-4 sseb-footer-main">

            {{-- BRAND --}}
            <div class="col-xl-4 col-lg-12">
                <a href="{{ route('landing-page') }}" class="sseb-footer-brand">
                    <img src="{{ asset('supersave/bg/logo_sseb.png') }}"
                        data-at2x="{{ asset('supersave/bg/logo_sseb.png') }}"
                        alt="PT Super Save Elektronik Ballast">

                    <div>
                        <h4>Super Save</h4>
                        <span>Elektronik Ballast</span>
                    </div>
                </a>

                <p class="sseb-footer-text">
                    Super Save membantu kebutuhan produk elektronik ballast, kelistrikan,
                    dan solusi energi dengan pilihan produk yang reliable untuk rumah,
                    bisnis, sampai kebutuhan proyek.
                </p>

                <div class="sseb-footer-contact">

                    <a href="https://www.google.com/maps/search/?api=1&query=Jl.%20Raya%20Mauk%20M.Toha%20Km.3%20No.%208%20Margasari%20Karawaci%20Tangerang"
                        target="_blank"
                        rel="noopener noreferrer">
                        <i class="fa-solid fa-location-dot"></i>

                        <span>
                            Jl. Raya Mauk (M.Toha) Km.3 No. 8,
                            Margasari, Karawaci, Tangerang
                        </span>
                    </a>

                    <a href="https://wa.me/6285810003784?text=Hi%20admin%2C%20saya%20mau%20konsultasi"
                        target="_blank"
                        rel="noopener noreferrer">
                        <i class="fa-brands fa-whatsapp"></i>
                        <span>+62 858-1000-3784</span>
                    </a>

                </div>

                <div class="sseb-social">

                    <a href="https://www.facebook.com/"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a href="https://www.instagram.com/"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="https://wa.me/6285810003784?text=Hi%20admin%2C%20saya%20mau%20konsultasi"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="WhatsApp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>

                </div>
            </div>

            {{-- MENU --}}
            <div class="col-xl-2 col-lg-3 col-sm-6">
                <h5 class="sseb-footer-title">Tentang Kami</h5>

                <ul class="sseb-footer-links">
                    <li>
                        <a href="{{ route('landing-page') }}">Home</a>
                    </li>

                    <li>
                        <a href="{{ route('aboutus') }}">About Us</a>
                    </li>

                    <li>
                        <a href="{{ route('product') }}">Products</a>
                    </li>

                    <li>
                        <a href="{{ route('contactus') }}">Contact</a>
                    </li>
                </ul>
            </div>

            {{-- BLOG --}}
            <div class="col-xl-2 col-lg-3 col-sm-6">
                <h5 class="sseb-footer-title">Artikel</h5>

                <ul class="sseb-footer-links">
                    <li>
                        <a href="{{ route('blog') }}">Blog & News</a>
                    </li>
                </ul>
            </div>

            {{-- SUPPORT --}}
            <div class="col-xl-2 col-lg-3 col-sm-6">
                <h5 class="sseb-footer-title">Bantuan</h5>

                <ul class="sseb-footer-links">

                    <li>
                        <a href="https://wa.me/6285810003784?text=Hi%20admin%2C%20saya%20mau%20konsultasi"
                            target="_blank"
                            rel="noopener noreferrer">
                            Konsultasi Produk
                        </a>
                    </li>

                    <li>
                        <a href="https://wa.me/6285810003784?text=Hi%20admin%2C%20saya%20ingin%20bertanya"
                            target="_blank"
                            rel="noopener noreferrer">
                            Customer Support
                        </a>
                    </li>

                </ul>
            </div>

            {{-- CTA --}}
            <div class="col-xl-2 col-lg-3 col-sm-6">

                <h5 class="sseb-footer-title">Butuh Bantuan?</h5>

                <p class="sseb-footer-small">
                    Bingung pilih produk yang cocok?
                    Chat tim kami, nanti dibantu arahin sesuai kebutuhan.
                </p>

                <a href="https://wa.me/6285810003784?text=Hi%20admin%2C%20saya%20mau%20konsultasi"
                    class="sseb-footer-btn"
                    target="_blank"
                    rel="noopener noreferrer">

                    <i class="fa-brands fa-whatsapp"></i>
                    Tanya Produk
                </a>

            </div>

        </div>

        {{-- BOTTOM --}}
        <div class="sseb-footer-bottom">

            <p>
                &copy; {{ date('Y') }} Super Save Elektronik Ballast.
                Dibuat untuk kebutuhan energi yang lebih praktis.
            </p>

            <ul>
                <li>
                    <a href="{{ route('landing-page') }}">Home</a>
                </li>

                <li>
                    <a href="{{ route('aboutus') }}">About</a>
                </li>

                <li>
                    <a href="{{ route('contactus') }}">Contact</a>
                </li>
            </ul>

        </div>

    </div>
</footer>

<style>
    .sseb-footer {
    position: relative;
    overflow: hidden;

    padding: 90px 0 0;
    margin-top: 80px;

    border-top-left-radius: 50px;
    border-top-right-radius: 50px;

    box-shadow: 0 -20px 60px rgba(15, 23, 42, 0.08);

    background:
        radial-gradient(circle at top left, rgba(21, 101, 169, 0.18), transparent 32%),
        linear-gradient(135deg, #071827 0%, #102033 52%, #071827 100%);

    color: rgba(255, 255, 255, 0.76);
}

.sseb-footer::before {
    content: "";
    position: absolute;
    right: -100px;
    top: -100px;
    width: 280px;
    height: 280px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.05);
    pointer-events: none;
}

.sseb-footer-main {
    position: relative;
    z-index: 2;
    padding-bottom: 50px;
}

.sseb-footer-brand {
    display: inline-flex;
    align-items: center;
    gap: 16px;
    margin-bottom: 22px;
    text-decoration: none;
}

.sseb-footer-brand img {
    width: 72px;
    height: 72px;
    object-fit: contain;
    background: #ffffff;
    border-radius: 18px;
    padding: 8px;
    box-shadow: 0 16px 38px rgba(0, 0, 0, 0.22);
}

.sseb-footer-brand h4 {
    margin: 0;
    color: #ffffff;
    font-size: 24px;
    line-height: 1;
    font-weight: 800;
    letter-spacing: -0.5px;
}

.sseb-footer-brand span {
    display: block;
    margin-top: 6px;
    color: rgba(255, 255, 255, 0.58);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
}

.sseb-footer-text {
    max-width: 400px;
    margin-bottom: 24px;
    color: rgba(255, 255, 255, 0.70);
    line-height: 1.85;
    font-size: 15px;
}

.sseb-footer-contact {
    display: grid;
    gap: 12px;
    margin-bottom: 24px;
}

.sseb-footer-contact a {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    color: rgba(255, 255, 255, 0.74);
    text-decoration: none;
    line-height: 1.7;
    transition: all 0.2s ease;
}

.sseb-footer-contact a:hover {
    color: #ffffff;
}

.sseb-footer-contact i {
    width: 18px;
    margin-top: 5px;
    color: #ffffff;
}

.sseb-social {
    display: flex;
    align-items: center;
    gap: 10px;
}

.sseb-social a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 42px;
    height: 42px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.10);
    border: 1px solid rgba(255, 255, 255, 0.12);
    color: #ffffff;
    text-decoration: none;
    transition: all 0.25s ease;
}

.sseb-social a:hover {
    background: #ffffff;
    color: #0f4c81;
    transform: translateY(-3px);
}

.sseb-footer-title {
    margin-bottom: 18px;
    color: #ffffff;
    font-size: 17px;
    font-weight: 800;
}

.sseb-footer-links {
    padding: 0;
    margin: 0;
    list-style: none;
}

.sseb-footer-links li {
    margin-bottom: 12px;
}

.sseb-footer-links a {
    color: rgba(255, 255, 255, 0.68);
    text-decoration: none;
    transition: all 0.2s ease;
}

.sseb-footer-links a:hover {
    color: #ffffff;
    padding-left: 4px;
}

.sseb-footer-small {
    margin-bottom: 18px;
    color: rgba(255, 255, 255, 0.68);
    line-height: 1.8;
    font-size: 14px;
}

.sseb-footer-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 9px;
    min-height: 44px;
    padding: 0 18px;
    border-radius: 999px;
    background: #ffffff;
    color: #0f4c81 !important;
    font-size: 14px;
    font-weight: 800;
    text-decoration: none;
    transition: all 0.25s ease;
}

.sseb-footer-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 16px 36px rgba(0, 0, 0, 0.20);
}

.sseb-footer-bottom {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;

    padding: 24px 0;

    border-top: 1px solid rgba(255, 255, 255, 0.10);
}

.sseb-footer-bottom p {
    margin: 0;
    color: rgba(255, 255, 255, 0.60);
    font-size: 14px;
}

.sseb-footer-bottom ul {
    display: flex;
    align-items: center;
    gap: 18px;

    margin: 0;
    padding: 0;

    list-style: none;
}

.sseb-footer-bottom a {
    color: rgba(255, 255, 255, 0.60);
    text-decoration: none;
    font-size: 14px;
    font-weight: 700;
}

.sseb-footer-bottom a:hover {
    color: #ffffff;
}

@media (max-width: 991.98px) {

    .sseb-footer {
        padding-top: 60px;

        border-top-left-radius: 35px;
        border-top-right-radius: 35px;
    }

    .sseb-footer-bottom {
        flex-direction: column;
        text-align: center;
    }

    .sseb-footer-bottom ul {
        justify-content: center;
        flex-wrap: wrap;
    }
}

@media (max-width: 575.98px) {

    .sseb-footer {
        padding-top: 50px;
        margin-top: 50px;

        border-top-left-radius: 28px;
        border-top-right-radius: 28px;
    }

    .sseb-footer-brand img {
        width: 64px;
        height: 64px;
    }

    .sseb-footer-brand h4 {
        font-size: 21px;
    }

    .sseb-footer-bottom ul {
        gap: 14px;
    }
}
</style>
