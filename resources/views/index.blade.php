<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>SuperSave</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ThemeZaa">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description"
        content="Kami menyediakan sistem panel surya berkualitas tinggi yang dirancang untuk memenuhi kebutuhan energi rumah tangga, komersial, dan industri Anda. Dengan teknologi mutakhir dan desain yang disesuaikan, kami membantu Anda beralih ke energi bersih dengan cara yang efisien dan hemat biaya. Temukan bagaimana solusi kami dapat mengurangi tagihan listrik Anda, meningkatkan efisiensi energi, dan memberikan kontribusi positif terhadap lingkungan.">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- slider revolution CSS files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('supersave/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('supersave/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('supersave/revolution/css/navigation.css') }}">
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" href="{{ asset('supersave/css/vendors.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('supersave/css/icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('supersave/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('supersave/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('supersave/demos/corporate/corporate.css') }}" />
</head>

<body data-mobile-nav-trigger-alignment="right" data-mobile-nav-style="modern" data-mobile-nav-bg-color="#242E45">
    <div class="box-layout">
        <!-- start header -->
        @include('components.supersave.header')
        <!-- end header -->
        <!-- start slider -->
        @include('components.supersave.slider')
        <!-- end slider -->
        @include('components.supersave.start-section-1')
        @include('components.supersave.start-section')

        @include('components.supersave.start-product')

        @include('components.supersave.blog')

        @include('components.supersave.testimonials')

        <!-- start footer -->
        @include('components.supersave.footer')
        <!-- end footer -->
        <!-- start scroll progress -->
        <div class="scroll-progress d-none d-xxl-block">
            <a href="#" class="scroll-top" aria-label="scroll">
                <span class="scroll-text">Scroll</span><span class="scroll-line"><span
                        class="scroll-point"></span></span>
            </a>
        </div>
        <!-- end scroll progress -->
    </div>
    <!-- javascript libraries -->
    <script type="text/javascript" src="{{ asset('supersave/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('supersave/js/vendors.min.js') }}"></script>
    <!-- slider revolution core javaScript files -->
    <script type="text/javascript" src="{{ asset('supersave/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('supersave/revolution/js/jquery.themepunch.revolution.min.js') }}">
    </script>
    <!-- slider revolution extension scripts. ONLY NEEDED FOR LOCAL TESTING -->
    <!-- <script type="text/javascript"
        src="{{ asset('supersave/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
        <script type="text/javascript"
            src="{{ asset('supersave/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
        <script type="text/javascript"
            src="{{ asset('supersave/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
        <script type="text/javascript"
            src="{{ asset('supersave/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script type="text/javascript"
            src="{{ asset('supersave/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
        <script type="text/javascript"
            src="{{ asset('supersave/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
        <script type="text/javascript"
            src="{{ asset('supersave/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
        <script type="text/javascript"
            src="{{ asset('supersave/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script type="text/javascript"
            src="{{ asset('supersave/revolution/js/extensions/revolution.extension.video.min.js') }}"></script> -->

    <!-- Slider's main "init" script -->
    <script>
        var tpj = jQuery;
        var revapi7;
        var $ = jQuery.noConflict();
        tpj(document).ready(function() {
            if (tpj("#demo-corporate-slider").revolution == undefined) {
                revslider_showDoubleJqueryError("#demo-corporate-slider");
            } else {
                revapi7 = tpj("#demo-corporate-slider").show().revolution({
                    sliderType: "standard",
                    /* sets the Slider's default timeline */
                    delay: 9000,
                    /* options are 'auto', 'fullwidth' or 'fullscreen' */
                    sliderLayout: 'fullscreen',
                    /* RESPECT ASPECT RATIO */
                    autoHeight: 'off',
                    /* options that disable autoplay */
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
                    /* Lazy Load options are "all", "smart", "single" and "none" */
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
                    fullScreenOffsetContainer: "nav",
                    fullScreenOffset: "",
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
        }); /*ready*/
    </script>
    <script type="text/javascript" src="{{ asset('supersave/js/main.js') }}"></script>
    {{-- <script defer src="https://widget.tochat.be/bundle.js?key=6adcf9df-46db-4728-9cd9-aa82dd3c0b85"></script> --}}
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <div class="elfsight-app-04261c13-54fd-4621-80e0-7051187f182e" data-elfsight-app-lazy></div>
</body>

</html>
