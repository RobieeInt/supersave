<header class="sseb-header">
    <nav class="navbar navbar-expand-lg sseb-navbar">
        <div class="container-fluid sseb-nav-container">

            {{-- BRAND --}}
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

            {{-- MOBILE TOGGLER --}}
            <button class="navbar-toggler sseb-toggler"
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

            {{-- MENU --}}
            <div class="collapse navbar-collapse sseb-menu-wrapper" id="navbarNav">
                <ul class="navbar-nav sseb-menu mx-auto">

                    <li class="nav-item">
                        <a href="{{ route('landing-page') }}" class="nav-link sseb-nav-link">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('aboutus') }}" class="nav-link sseb-nav-link">About Us</a>
                    </li>

                    <li class="nav-item dropdown sseb-dropdown">
                        <a href="{{ route('product') }}"
                            class="nav-link sseb-nav-link dropdown-toggle"
                            id="productDropdown"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Products
                        </a>

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

                    <li class="nav-item">
                        <a href="{{ route('blog') }}" class="nav-link sseb-nav-link">Blog</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('contactus') }}" class="nav-link sseb-nav-link">Contact</a>
                    </li>
                </ul>

                {{-- MOBILE CTA --}}
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

            {{-- DESKTOP CTA --}}
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
        transform: none !important;
        opacity: 1 !important;
        visibility: visible !important;
    }

    .sseb-navbar {
        padding: 0 !important;
        background: rgba(255, 255, 255, 0.98) !important;
        backdrop-filter: blur(14px);
        border-bottom: 1px solid rgba(15, 23, 42, 0.06);
        box-shadow: 0 10px 30px rgba(15, 23, 42, 0.05);
        transition: all 0.25s ease;
    }

    .sseb-header.sseb-header-scrolled .sseb-navbar {
        padding: 0 !important;
        box-shadow: 0 16px 45px rgba(15, 23, 42, 0.12);
    }

    .sseb-nav-container {
        max-width: 1320px;
        min-height: 68px;
        padding-left: 24px;
        padding-right: 24px;
        display: flex;
        align-items: center;
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
        overflow: visible !important;
        background: transparent !important;
        box-shadow: none !important;
        border-radius: 0 !important;
    }

    .sseb-logo {
        width: 100% !important;
        height: 100% !important;
        max-width: unset !important;
        min-width: 72px !important;
        min-height: 72px !important;
        object-fit: contain !important;
        display: block !important;
        border-radius: 0 !important;
        background: transparent !important;
        padding: 0 !important;
        margin: 0 !important;
        box-shadow: none !important;
        transform: none !important;
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

    .sseb-menu-wrapper {
        align-items: center;
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

    .sseb-nav-link:hover,
    .sseb-nav-link:focus {
        color: #0f4c81 !important;
    }

    .sseb-nav-link::after {
        content: "";
        position: absolute;
        left: 16px;
        right: 16px;
        bottom: 4px;
        height: 2px;
        border-radius: 999px;
        background: #0f4c81;
        opacity: 0;
        transform: scaleX(0.3);
        transition: all 0.25s ease;
    }

    .sseb-nav-link:hover::after {
        opacity: 1;
        transform: scaleX(1);
    }

    .sseb-dropdown .dropdown-toggle::after {
        margin-left: 8px;
        vertical-align: middle;
        border-top-color: currentColor;
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
        transition: all 0.2s ease;
    }

    .sseb-dropdown-menu .dropdown-item i {
        width: 18px;
        color: #0f4c81;
    }

    .sseb-dropdown-menu .dropdown-item:hover {
        background: #eff6ff;
        color: #0f4c81;
        transform: translateX(3px);
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
        transition: all 0.25s ease;
        box-shadow: 0 14px 32px rgba(15, 76, 129, 0.24);
        white-space: nowrap;
    }

    .sseb-btn-primary:hover {
        color: #ffffff !important;
        transform: translateY(-2px);
        box-shadow: 0 18px 38px rgba(15, 76, 129, 0.30);
    }

    .sseb-btn-primary i {
        font-size: 16px;
    }

    .sseb-toggler {
        width: 44px;
        height: 44px;
        padding: 0;
        border: 1px solid rgba(15, 23, 42, 0.12);
        border-radius: 14px;
        box-shadow: none !important;
    }

    .sseb-toggler span {
        display: block;
        width: 20px;
        height: 2px;
        margin: 5px auto;
        border-radius: 999px;
        background: #0f172a;
    }

    .sseb-mobile-cta {
        padding-top: 14px;
    }

    @media (max-width: 1199.98px) {
        .sseb-brand {
            min-width: 340px;
            gap: 14px !important;
        }

        .sseb-logo-wrapper {
            width: 88px !important;
            height: 88px !important;
        }

        .sseb-logo {
            min-width: 88px !important;
            min-height: 88px !important;
        }

        .sseb-brand-title {
            font-size: 28px;
        }

        .sseb-brand-subtitle {
            font-size: 12px;
        }

        .sseb-nav-link {
            padding: 10px 12px !important;
        }

        .sseb-btn-primary {
            padding: 0 16px;
            font-size: 13px;
        }
    }

    @media (max-width: 991.98px) {
        .sseb-navbar {
            padding: 6px 0 !important;
        }

        .sseb-nav-container {
            min-height: 76px;
            padding-left: 16px;
            padding-right: 16px;
        }

        .sseb-brand {
            min-width: auto;
            gap: 12px !important;
        }

        .sseb-logo-wrapper {
            width: 72px !important;
            height: 72px !important;
        }

        .sseb-logo {
            min-width: 72px !important;
            min-height: 72px !important;
        }

        .sseb-brand-title {
            font-size: 22px;
        }

        .sseb-brand-subtitle {
            margin-top: 4px;
            font-size: 10px;
        }

        .sseb-menu-wrapper {
            margin-top: 12px;
            padding: 14px;
            border-radius: 20px;
            background: #ffffff;
            border: 1px solid rgba(15, 23, 42, 0.08);
            box-shadow: 0 20px 45px rgba(15, 23, 42, 0.08);
        }

        .sseb-nav-link {
            padding: 13px 12px !important;
            border-radius: 12px;
        }

        .sseb-nav-link::after {
            display: none;
        }

        .sseb-nav-link:hover {
            background: #f8fafc;
        }

        .sseb-dropdown-menu {
            margin-top: 6px;
            padding: 8px;
            border-radius: 14px;
            box-shadow: none;
        }
    }

    @media (max-width: 575.98px) {
        .sseb-nav-container {
            min-height: 68px;
        }

        .sseb-logo-wrapper {
            width: 60px !important;
            height: 60px !important;
        }

        .sseb-logo {
            min-width: 60px !important;
            min-height: 60px !important;
        }

        .sseb-brand-title {
            font-size: 18px;
        }

        .sseb-brand-subtitle {
            max-width: 150px;
            font-size: 9px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const header = document.querySelector('.sseb-header');

        if (!header) return;

        const handleHeaderScroll = () => {
            if (window.scrollY > 20) {
                header.classList.add('sseb-header-scrolled');
            } else {
                header.classList.remove('sseb-header-scrolled');
            }
        };

        handleHeaderScroll();

        window.addEventListener('scroll', handleHeaderScroll, {
            passive: true
        });
    });
</script>
