<header>
    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg header-light bg-white disable-fixed">
        <div class="container-fluid">
            <div class="col-auto col-xl-3 col-lg-2 me-lg-0 me-auto">
                <a class="navbar-brand" href="{{ route('landing-page') }}">
                    <img src="{{ asset('supersave/bg/logo_sseb_1.png') }}"
                        data-at2x="{{ asset('supersave/bg/logo_sseb_1.png') }}" alt="" class="default-logo"
                        style="width: 30px; height: 100px;">
                    <img src="{{ asset('supersave/bg/logo_sseb_1.png') }}"
                        data-at2x="{{ asset('supersave/bg/logo_sseb_1.png') }}" alt="" class="alt-logo">
                    <img src="{{ asset('supersave/bg/logo_sseb_1.png') }}"
                        data-at2x="{{ asset('supersave/bg/logo_sseb_1.png') }}" alt="" class="mobile-logo">
                </a>
            </div>
            {{-- <div class="col-auto col-xl-3 col-lg-2 me-lg-0 me-auto">
                <a class="navbar-brand" href="{{ route('landing-page') }}">
                    <h5 class="mt-4" style="color: rgb(40, 72, 91); font-weight: bold;">PT Super Save Elektronik
                        Ballast</h5>
                </a>
            </div> --}}
            <div class="col-auto col-xl-6 col-lg-8 menu-order position-static">
                <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{ route('landing-page') }}" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="{{ route('aboutus') }}" class="nav-link">About</a></li>
                        <li class="nav-item dropdown dropdown-with-icon-style02">
                            <a href="{{ route('product') }}" class="nav-link">Product</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                {{-- foreacg productCategory as $item --}}
                                @foreach ($productCategories as $item)
                                    <li><a href="{{ route('productCategories', $item->slug) }}"><i
                                                class="line-icon-Medal-2"></i>{{ $item->name }}</a></li>
                                @endforeach
                                {{-- <li><a href="demo-corporate-services-details.html"><i
                                            class="line-icon-Medal-2"></i>Business planning</a></li>
                                <li><a href="demo-corporate-services-details.html"><i
                                            class="line-icon-Archery-2"></i>Market research</a></li>
                                <li><a href="demo-corporate-services-details.html"><i
                                            class="line-icon-Financial"></i>Business consulting</a></li>
                                <li><a href="demo-corporate-services-details.html"><i
                                            class="line-icon-Money-Bag"></i>Audience analysis</a></li> --}}
                            </ul>
                        </li>
                        {{-- <li class="nav-item"><a href="demo-corporate-customer-stories.html"
                                class="nav-link">Testimonials</a></li>
                        <li class="nav-item"><a href="demo-corporate-pricing.html" class="nav-link">Pricing</a></li>
                        <li class="nav-item"><a href="demo-corporate-blog.html" class="nav-link">Blog</a>
                        </li> --}}
                        <li class="nav-item"><a href="{{ route('contactus') }}" class="nav-link">Contact</a></li>
                        <li class="nav-item"><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-auto col-xl-3 col-lg-2 text-end md-pe-0">
                <div class="header-icon">
                    {{-- <div class="header-search-icon icon">
                        <a href="#" class="search-form-icon header-search-form"><i
                                class="feather icon-feather-search"></i></a>
                        <!-- start search input -->
                        <div class="search-form-wrapper">
                            <button title="Close" type="button" class="search-close">×</button>
                            <form id="search-form" role="search" method="get" class="search-form text-left"
                                action="search-result.html">
                                <div class="search-form-box">
                                    <h2 class="text-dark-gray text-center fw-600 mb-4 ls-minus-1px">What are
                                        you looking for?</h2>
                                    <input class="search-input" id="search-form-input5e219ef164995"
                                        placeholder="Enter your keywords..." name="s" value=""
                                        type="text" autocomplete="off">
                                    <button type="submit" class="search-button">
                                        <i class="feather icon-feather-search" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- end search input -->
                    </div> --}}
                    <div class="header-button ms-20px d-none d-xl-inline-block">
                        <a href="https://wa.me/6285810003784?text=Hi%20admin%2C%20saya%20mau%20konsultasi"
                            class="btn btn-rounded btn-transparent-light-gray border-1 btn-medium btn-switch-text text-transform-none"
                            target="_blank" rel="noopener noreferrer">
                            <span>
                                <span class="btn-double-text fw-600" data-text="Free consultation">Free
                                    consultation</span>
                                <span><i class="fa-regular fa-envelope"></i></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->
</header>
