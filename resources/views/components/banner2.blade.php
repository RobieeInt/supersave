<section class="banner__section section--padding color-scheme-2 pt-0">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="banner__section--inner d-flex align-items-center">
                    <div class="banner__discount--content">
                        <h3 class="banner__discount--content__subtitle">Dapatkan Penawaran Menarik</h3>
                        <h2 class="banner__discount--content__title">Top Trending
                            Furniture</h2>
                        <p class="banner__discount--content__desc">Lorem ipsum dolor sit amet, consecteturiuyr
                            icing elit,sed do eiusmod ut labore et.
                            Lorem ipsum dolor sit amet, consecteturop.</p>
                        <a class=" primary__btn btn__style2" target="_blank"
                            href="https://api.whatsapp.com/send?phone={{ $contact->whatsapp }}&text=Halo%20DapurGemilang%20saya%20ingin%20Penawaran%20"
                            rel="nofollow">Dapatkan Penawaran</a>
                    </div>
                    <div class="banner2__right--sidebar position__relative d-flex">
                        {{-- <div class="banner2__sidebar--items one position__relative">
                            <a class="banner__items--thumbnail " href="#" rel="nofollow"><img
                                    class="banner__items--thumbnail__img"
                                    src="{{ asset('ggm/assets/img/banner/banner17.webp') }}" alt="banner-img"></a>
                            <div class="product__badge style2">
                                <span class="product__badge--items style2 sale">Chair</span>
                            </div>
                        </div>
                        <div class="banner2__sidebar--items two position__relative">
                            <a class="banner__items--thumbnail " href="#" rel="nofollow"><img
                                    class="banner__items--thumbnail__img"
                                    src="{{ asset('ggm/assets/img/banner/banner16.webp') }}" alt="banner-img"></a>
                        </div>
                        <div class="banner2__sidebar--items three position__relative">
                            <a class="banner__items--thumbnail " href="#" rel="nofollow"><img
                                    class="banner__items--thumbnail__img"
                                    src="{{ asset('ggm/assets/img/banner/banner15.webp') }}" alt="banner-img"></a>
                        </div> --}}
                        @php
                            $maxItems = 3;
                            $positionClasses = ['one', 'two', 'three'];
                        @endphp
                        @foreach ($productsPopular->take($maxItems) as $key => $product)
                            {{-- @foreach ($products->where('popular', 1)->take($maxItems) as $key => $product) --}}
                            @php
                                $positionClass = 'one';
                                if ($key === 1) {
                                    $positionClass = 'two';
                                } elseif ($key === 2) {
                                    $positionClass = 'three';
                                }
                            @endphp

                            {{-- <div class="banner2__sidebar--items {{ $positionClass }} position__relative">
                                <a class="banner__items--thumbnail" href="#" rel="nofollow"><img
                                        class="banner__items--thumbnail__img"
                                        src="{{ asset('ggm/assets/img/banner/banner' . (18 - $key) . '.webp') }}"
                                        alt="banner-img"></a>
                                @if ($product->onSale)
                                    <div class="product__badge style2">
                                        <span class="product__badge--items style2 sale">{{ $product->name }}</span>
                                    </div>
                                @endif
                            </div> --}}

                            {{-- @foreach ($product->galleries as $gallery)
                                <div class="banner2__sidebar--items {{ $positionClass }} position__relative">
                                    <a class="banner__items--thumbnail " href="#" rel="nofollow"><img
                                            class="banner__items--thumbnail__img"
                                            src="{{ asset('storage/' . $gallery->image) }}" alt="banner-img"></a>
                                    <div class="product__badge style2">
                                        <span class="product__badge--items style2 sale">
                                            {{ $product->category->name }}</span>
                                    </div>
                                </div>
                            @endforeach --}}

                            @php
                                $defaultGallery = null;
                                $nonDefaultGallery = null;
                            @endphp

                            @foreach ($product->galleries as $gallery)
                                @if ($gallery->is_default == 1)
                                    @php
                                        $defaultGallery = $gallery;
                                        break;
                                    @endphp
                                @elseif (!$nonDefaultGallery)
                                    @php
                                        $nonDefaultGallery = $gallery;
                                    @endphp
                                @endif
                            @endforeach
                            @if ($defaultGallery)
                                <div class="banner2__sidebar--items {{ $positionClass }} position__relative">
                                    <a class="banner__items--thumbnail " href="#" rel="nofollow"><img
                                            class="banner__items--thumbnail__img"
                                            src="{{ asset('storage/' . $gallery->image) }}" alt="banner-img"></a>
                                    <div class="product__badge style2">
                                        <span class="product__badge--items style2 sale">
                                            {{ $product->category->name }}</span>
                                    </div>
                                </div>
                            @elseif ($nonDefaultGallery)
                                <div class="banner2__sidebar--items {{ $positionClass }} position__relative">
                                    <a class="banner__items--thumbnail " href="#" rel="nofollow"><img
                                            class="banner__items--thumbnail__img"
                                            src="{{ asset('storage/' . $gallery->image) }}" alt="banner-img"></a>
                                    <div class="product__badge style2">
                                        <span class="product__badge--items style2 sale">
                                            {{ $product->category->name }}</span>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
