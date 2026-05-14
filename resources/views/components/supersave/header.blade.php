<header class="sseb-header">
    <nav class="navbar navbar-expand-lg sseb-navbar">
        <div class="container-fluid sseb-nav-container">

            <a class="navbar-brand sseb-brand" href="{{ route('landing-page') }}">
                <div class="sseb-logo-wrapper">
                    <img src="{{ asset('supersave/bg/logo_sseb_1.png') }}"
                        data-at2x="{{ asset('supersave/bg/logo_sseb_1.png') }}"
                        alt="PT Super Save Elektronik Ballast"
                        class="sseb-logo">
                </div>

                <div class="sseb-brand-text">
                    <span class="sseb-brand-title">Super Save</span>
                    <span class="sseb-brand-subtitle">Elektronik Ballast</span>
                </div>
            </a>

            <button class="sseb-mobile-toggle"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <div class="collapse navbar-collapse sseb-menu-wrapper" id="navbarNav">
                <ul class="navbar-nav sseb-menu mx-auto">

                    <li class="nav-item">
                        <a href="{{ route('landing-page') }}" class="nav-link sseb-nav-link">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('aboutus') }}" class="nav-link sseb-nav-link">About Us</a>
                    </li>

                    {{-- DESKTOP PRODUCTS DROPDOWN --}}
                    <li class="nav-item dropdown sseb-dropdown d-none d-lg-block">
                        {{-- <a href="{{ route('product') }}"
                            class="nav-link sseb-nav-link sseb-product-toggle"
                            id="productDropdown"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">

                            <span>Products</span>
                            <i class="fa-solid fa-chevron-down sseb-dropdown-icon"></i>
                        </a> --}}

                        <ul class="dropdown-menu sseb-dropdown-menu" aria-labelledby="productDropdown">
                            @forelse ($productCategories as $item)
                                <li>
                                    <a href="{{ route('productCategories', $item->slug) }}" class="dropdown-item">
                                        <i class="fa-solid fa-bolt"></i>
                                        <span>{{ $item->name }}</span>
                                    </a>
                                </li>
                            @empty
                                <li>
                                    <span class="dropdown-item text-muted">No product category available</span>
                                </li>
                            @endforelse
                        </ul>
                    </li>

                    {{-- MOBILE PRODUCTS NORMAL MENU --}}
                    <li class="nav-item d-lg-none">
                        <a href="{{ route('product') }}" class="nav-link sseb-nav-link">
                            Products
                        </a>
                    </li>

                    @foreach ($productCategories as $item)
                        <li class="nav-item d-lg-none">
                            <a href="{{ route('productCategories', $item->slug) }}" class="nav-link sseb-mobile-category-link">
                                <i class="fa-solid fa-bolt"></i>
                                {{ $item->name }}
                            </a>
                        </li>
                    @endforeach

                    <li class="nav-item">
                        <a href="{{ route('blog') }}" class="nav-link sseb-nav-link">Blog</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('contactus') }}" class="nav-link sseb-nav-link">Contact</a>
                    </li>
                </ul>

                <div class="sseb-mobile-cta d-lg-none">
                    <a href="https://wa.me/6285810003784?text=Hi%20admin%2C%20saya%20mau%20konsultasi"
                        class="sseb-btn-primary w-100"
                        target="_blank"
                        rel="noopener noreferrer">
                        <i class="fa-brands fa-whatsapp"></i>
                        <span>Consult via WhatsApp</span>
                    </a>
                </div>
            </div>

            <div class="sseb-desktop-cta d-none d-lg-flex">
                <a href="https://wa.me/6285810003784?text=Hi%20admin%2C%20saya%20mau%20konsultasi"
                    class="sseb-btn-primary"
                    target="_blank"
                    rel="noopener noreferrer">
                    <i class="fa-brands fa-whatsapp"></i>
                    <span>Free Consultation</span>
                </a>
            </div>

        </div>
    </nav>
</header>

<style>
    .sseb-header {
        position: fixed !important;
        top: 0 !important;
        left: 0 !important;
        right: 0 !important;
        width: 100% !important;
        z-index: 999999 !important;
        background: transparent !important;
    }

    .sseb-navbar {
        padding: 0 !important;
        background: rgba(255, 255, 255, 0.98) !important;
        backdrop-filter: blur(14px);
        border-bottom: 1px solid rgba(15, 23, 42, 0.06);
        box-shadow: 0 10px 30px rgba(15, 23, 42, 0.05);
    }

    .sseb-nav-container {
        max-width: 1320px;
        min-height: 68px;
        padding-left: 24px;
        padding-right: 24px;
        display: flex;
        align-items: center;
        position: relative;
    }

    .sseb-brand {
        display: flex !important;
        align-items: center !important;
        gap: 20px !important;
        min-width: 420px;
        margin-right: 20px;
        text-decoration: none !important;
        flex-shrink: 0;
    }

    .sseb-logo-wrapper {
        width: 72px !important;
        height: 72px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        flex-shrink: 0 !important;
    }

    .sseb-logo {
        width: 100% !important;
        height: 100% !important;
        max-width: unset !important;
        min-width: 72px !important;
        min-height: 72px !important;
        object-fit: contain !important;
        display: block !important;
    }

    .sseb-brand-text {
        display: flex !important;
        flex-direction: column !important;
        justify-content: center !important;
        line-height: 1.05 !important;
    }

    .sseb-brand-title {
        font-size: 34px;
        font-weight: 800;
        color: #0f172a;
        letter-spacing: -1px;
        white-space: nowrap;
    }

    .sseb-brand-subtitle {
        margin-top: 6px;
        font-size: 11px;
        font-weight: 800;
        color: #64748b;
        text-transform: uppercase;
        letter-spacing: 1px;
        white-space: nowrap;
    }

    .sseb-menu {
        gap: 6px;
    }

    .sseb-nav-link {
        position: relative;
        padding: 10px 16px !important;
        font-size: 15px;
        font-weight: 700;
        color: #334155 !important;
        transition: all 0.25s ease;
    }

    .sseb-nav-link:hover {
        color: #0f4c81 !important;
    }

    .sseb-product-toggle {
        display: flex !important;
        align-items: center !important;
        gap: 8px;
    }

    .sseb-dropdown-icon {
        font-size: 11px;
        transition: transform .25s ease;
    }

    .sseb-product-toggle.show .sseb-dropdown-icon,
    .sseb-dropdown.show .sseb-dropdown-icon {
        transform: rotate(180deg);
    }

    .dropdown-toggle::after {
        display: none !important;
    }

    .sseb-dropdown-menu {
        min-width: 240px;
        padding: 10px;
        margin-top: 14px;
        border: 1px solid rgba(15, 23, 42, 0.08);
        border-radius: 18px;
        box-shadow: 0 24px 60px rgba(15, 23, 42, 0.14);
    }

    .sseb-dropdown-menu .dropdown-item {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 12px 14px;
        border-radius: 12px;
        font-size: 14px;
        font-weight: 650;
        color: #334155;
    }

    .sseb-dropdown-menu .dropdown-item i {
        width: 18px;
        color: #0f4c81;
    }

    .sseb-dropdown-menu .dropdown-item:hover {
        background: #eff6ff;
        color: #0f4c81;
    }

    .sseb-btn-primary {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        min-height: 40px;
        padding: 0 20px;
        border-radius: 999px;
        background: linear-gradient(135deg, #0f4c81 0%, #1565a9 100%);
        color: #ffffff !important;
        font-size: 14px;
        font-weight: 800;
        text-decoration: none !important;
        box-shadow: 0 14px 32px rgba(15, 76, 129, 0.24);
        white-space: nowrap;
    }

    .sseb-mobile-toggle {
        display: none;
        width: 44px;
        height: 44px;
        padding: 0;
        border: 1px solid rgba(15, 76, 129, 0.16);
        border-radius: 999px;
        background: #ffffff;
        box-shadow: 0 10px 24px rgba(15, 23, 42, 0.08);
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 5px;
        flex-shrink: 0;
    }

    .sseb-mobile-toggle span {
        width: 19px;
        height: 2px;
        border-radius: 999px;
        background: #0f172a;
        transition: all 0.25s ease;
    }

    .sseb-mobile-toggle span:nth-child(2) {
        width: 14px;
    }

    .sseb-mobile-toggle[aria-expanded="true"] span:nth-child(1) {
        transform: translateY(7px) rotate(45deg);
        width: 20px;
    }

    .sseb-mobile-toggle[aria-expanded="true"] span:nth-child(2) {
        opacity: 0;
        width: 0;
    }

    .sseb-mobile-toggle[aria-expanded="true"] span:nth-child(3) {
        transform: translateY(-7px) rotate(-45deg);
        width: 20px;
    }

    .sseb-mobile-cta {
        padding-top: 12px;
    }

    @media (max-width: 1199.98px) {
        .sseb-brand {
            min-width: 340px;
            gap: 14px !important;
        }

        .sseb-logo-wrapper {
            width: 68px !important;
            height: 68px !important;
        }

        .sseb-logo {
            min-width: 68px !important;
            min-height: 68px !important;
        }

        .sseb-brand-title {
            font-size: 28px;
        }
    }

    @media (max-width: 991.98px) {
        .sseb-nav-container {
            min-height: 66px;
            padding-left: 14px;
            padding-right: 14px;
        }

        .sseb-brand {
            min-width: 0;
            max-width: calc(100% - 56px);
            gap: 10px !important;
            margin-right: 8px;
        }

        .sseb-logo-wrapper {
            width: 52px !important;
            height: 52px !important;
        }

        .sseb-logo {
            min-width: 52px !important;
            min-height: 52px !important;
        }

        .sseb-brand-title {
            font-size: 18px;
            letter-spacing: -0.4px;
        }

        .sseb-brand-subtitle {
            margin-top: 3px;
            max-width: 145px;
            font-size: 8px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .sseb-mobile-toggle {
            display: inline-flex;
        }

        .sseb-menu-wrapper {
            position: absolute !important;
            top: calc(100% + 10px);
            left: 12px;
            right: 12px;
            width: auto !important;
            padding: 18px;
            border-radius: 24px;
            background: #ffffff !important;
            border: 1px solid rgba(15, 23, 42, 0.08);
            box-shadow: 0 24px 70px rgba(15, 23, 42, 0.16);
            max-height: calc(100vh - 96px);
            overflow-y: auto;
        }

        .sseb-menu-wrapper .navbar-nav {
            width: 100% !important;
            display: flex !important;
            flex-direction: column !important;
            align-items: stretch !important;
            margin: 0 !important;
        }

        .sseb-menu-wrapper .nav-item {
            width: 100% !important;
            display: block !important;
            text-align: left !important;
        }

        .sseb-menu {
            gap: 4px;
        }

        .sseb-nav-link {
            display: flex !important;
            align-items: center !important;
            justify-content: flex-start !important;
            width: 100% !important;
            padding: 13px 14px !important;
            border-radius: 16px;
            color: #102033 !important;
        }

        .sseb-nav-link:hover {
            background: #f1f5f9;
            color: #0f4c81 !important;
        }

        .sseb-mobile-category-link {
            display: flex !important;
            align-items: center !important;
            gap: 9px;
            width: 100% !important;
            margin-left: 12px;
            padding: 9px 14px !important;
            border-radius: 14px;
            color: #64748b !important;
            font-size: 13px;
            font-weight: 700;
            text-decoration: none !important;
        }

        .sseb-mobile-category-link i {
            color: #0f4c81;
            font-size: 12px;
        }

        .sseb-mobile-category-link:hover {
            background: #f8fafc;
            color: #0f4c81 !important;
        }

        .sseb-mobile-cta .sseb-btn-primary {
            min-height: 46px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const header = document.querySelector('.sseb-header');

        if (!header) return;

        const handleHeaderScroll = () => {
            header.classList.toggle('sseb-header-scrolled', window.scrollY > 20);
        };

        handleHeaderScroll();

        window.addEventListener('scroll', handleHeaderScroll, { passive: true });
    });
</script>
