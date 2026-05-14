<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>SuperSave</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="PT Super Save Elektronik Ballast">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description"
        content="PT Super Save Elektronik Ballast menyediakan solusi elektronik ballast dan kebutuhan kelistrikan yang berkualitas untuk rumah, bisnis, dan industri.">

    <link rel="shortcut icon" href="{{ asset('supersave/bg/logo_sseb_1.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('supersave/bg/logo_sseb_1.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" type="text/css" href="{{ asset('supersave/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('supersave/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('supersave/revolution/css/navigation.css') }}">

    <link rel="stylesheet" href="{{ asset('supersave/css/vendors.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('supersave/css/icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('supersave/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('supersave/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('supersave/demos/corporate/corporate.css') }}" />

    <style>
        html,
        body {
            overflow-x: hidden;
        }

        body.sseb-fixed-header-body {
            padding-top: 88px !important;
        }

        body.sseb-fixed-header-body header,
        body.sseb-fixed-header-body .sseb-header {
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            width: 100% !important;
            z-index: 999999 !important;
            display: block !important;
            opacity: 1 !important;
            visibility: visible !important;
            transform: none !important;
            background: #ffffff !important;
        }

        body.sseb-fixed-header-body .sseb-navbar {
            position: relative !important;
            z-index: 999999 !important;
        }

        body.sseb-fixed-header-body .box-layout {
            overflow: visible !important;
            transform: none !important;
        }

        body.sseb-fixed-header-body .navbar {
            transform: none !important;
        }

        @media (max-width: 991.98px) {
            body.sseb-fixed-header-body {
                padding-top: 74px !important;
            }
        }

        @media (max-width: 575.98px) {
            body.sseb-fixed-header-body {
                padding-top: 70px !important;
            }
        }
    </style>
</head>

<body class="sseb-fixed-header-body" data-mobile-nav-trigger-alignment="right" data-mobile-nav-style="modern"
    data-mobile-nav-bg-color="#242E45">

    <div class="box-layout">
        @include('components.supersave.header')

        @include('components.supersave.slider')

        @include('components.supersave.start-section-1')

        @include('components.supersave.start-section')

        @include('components.supersave.start-product')

        @include('components.supersave.blog')

        @include('components.supersave.testimonials')

        @include('components.supersave.footer')

        <div class="scroll-progress d-none d-xxl-block">
            <a href="#" class="scroll-top" aria-label="scroll">
                <span class="scroll-text">Scroll</span>
                <span class="scroll-line">
                    <span class="scroll-point"></span>
                </span>
            </a>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('supersave/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('supersave/js/vendors.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('supersave/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('supersave/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

    <script>
        var tpj = jQuery;
        var revapi7;
        var $ = jQuery.noConflict();

        tpj(document).ready(function() {
            if (tpj("#demo-corporate-slider").length && tpj("#demo-corporate-slider").revolution != undefined) {
                revapi7 = tpj("#demo-corporate-slider").show().revolution({
                    sliderType: "standard",
                    delay: 9000,
                    sliderLayout: 'fullscreen',
                    autoHeight: 'off',
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    navigation: {
                        keyboardNavigation: 'on',
                        keyboard_direction: 'horizontal',
                        mouseScrollNavigation: 'off',
                        mouseScrollReverse: 'reverse',
                        onHoverStop: 'off',
                        arrows: {
                            enable: true,
                            style: 'hesperiden',
                            rtl: false,
                            hide_onleave: false,
                            hide_onmobile: true,
                            hide_under: 500,
                            hide_over: 9999,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            left: {
                                container: 'slider',
                                h_align: 'left',
                                v_align: 'center',
                                h_offset: 50,
                                v_offset: 0
                            },
                            right: {
                                container: 'slider',
                                h_align: 'right',
                                v_align: 'center',
                                h_offset: 50,
                                v_offset: 0
                            }
                        },
                        bullets: {
                            enable: true,
                            style: 'hermes',
                            tmp: '',
                            direction: 'horizontal',
                            rtl: false,
                            container: 'layergrid',
                            h_align: 'center',
                            v_align: 'bottom',
                            h_offset: 0,
                            v_offset: 30,
                            space: 12,
                            hide_onleave: false,
                            hide_onmobile: true,
                            hide_under: 0,
                            hide_over: 500,
                            hide_delay: true,
                            hide_delay_mobile: 500
                        },
                        touch: {
                            touchenabled: 'on',
                            touchOnDesktop: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: 'horizontal',
                            drag_block_vertical: true
                        }
                    },
                    responsiveLevels: [1240, 1024, 768, 480],
                    visibilityLevels: [1240, 1024, 768, 480],
                    gridwidth: [1240, 1024, 768, 480],
                    gridheight: [930, 850, 900, 850],
                    lazyType: "smart",
                    spinner: "spinner0",
                    parallax: {
                        type: "scroll",
                        origo: "slidercenter",
                        speed: 400,
                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 5],
                    },
                    shadow: 0,
                    shuffle: "off",
                    fullScreenAutoWidth: "on",
                    fullScreenAlignForce: "on",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "88px",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const header = document.querySelector('.sseb-header');

            if (!header) return;

            const handleHeader = () => {
                if (window.scrollY > 20) {
                    header.classList.add('sseb-header-scrolled');
                } else {
                    header.classList.remove('sseb-header-scrolled');
                }
            };

            handleHeader();

            window.addEventListener('scroll', handleHeader, {
                passive: true
            });
        });
    </script>

    <script type="text/javascript" src="{{ asset('supersave/js/main.js') }}"></script>

    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <div class="elfsight-app-04261c13-54fd-4621-80e0-7051187f182e" data-elfsight-app-lazy></div>
</body>

</html>
