      <!-- Start product section -->
      <section class="product__section section--padding">
          <div class="container">
              <div class="section__heading text-center mb-40">
                  <h2 class="section__heading--maintitle">Kamu juga mungkin Suka</h2>
              </div>
              <div class="product__section--inner product__swiper--column4 swiper">
                  <div class="swiper-wrapper">
                      @foreach ($randomProducts as $product)
                          <div class="swiper-slide">
                              <div class="product__items">
                                  <div class="product__items--thumbnail">
                                      <a class="product__items--link"
                                          href="{{ route('productDetail', $product->slug) }}">
                                          <img class="product__items--img product__primary--img"
                                              src="{{ asset('storage/' . $product->galleries[0]->image) }}"
                                              alt="product-img" />
                                          {{-- <img class="product__items--img product__secondary--img"
                                              src="{{ asset('ggm/assets/img/product/product2.webp') }}"
                                              alt="product-img" /> --}}
                                      </a>
                                      <div class="product__badge">
                                          {{-- <span class="product__badge--items sale">New</span> --}}
                                      </div>
                                  </div>
                                  <div class="product__items--content text-center">
                                      <div class="product__items--color">
                                          <h3 class="product__items--content__title h4">
                                              <a
                                                  href="{{ route('productDetail', $product->slug) }}">{{ $product->name }}</a>
                                          </h3>
                                          {{-- <div class="product__items--price">
                                              <span class="current__price">
                                                  IDR. {{ number_format($product->price) }}
                                              </span>
                                              @if ($product->old_price != null)
                                                  <span class="old__price"> IDR.
                                                      {{ number_format($product->old_price) }}</span>
                                              @else
                                              @endif
                                          </div> --}}
                                          {{-- <a class="product__items--action__cart--btn primary__btn" href="cart.html">
                                              <svg class="product__items--action__cart--btn__icon"
                                                  xmlns="http://www.w3.org/2000/svg" width="13.897" height="14.565"
                                                  viewBox="0 0 18.897 21.565">
                                                  <path
                                                      d="M16.84,8.082V6.091a4.725,4.725,0,1,0-9.449,0v4.725a.675.675,0,0,0,1.35,0V9.432h5.4V8.082h-5.4V6.091a3.375,3.375,0,0,1,6.75,0v4.691a.675.675,0,1,0,1.35,0V9.433h3.374V21.581H4.017V9.432H6.041V8.082H2.667V21.641a1.289,1.289,0,0,0,1.289,1.29h16.32a1.289,1.289,0,0,0,1.289-1.29V8.082Z"
                                                      transform="translate(-2.667 -1.366)" fill="currentColor"></path>
                                              </svg>
                                              <span class="add__to--cart__text"> Add to cart</span>
                                          </a> --}}
                                          <a href="https://api.whatsapp.com/send?phone={{ $contact->whatsapp }}&text=Halo%20saya%20ingin%20pesan%20{{ $product->name }}"
                                              class="primary__btn" target="_blank">Pesan</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      @endforeach
                      <div class="swiper__nav--btn swiper-button-next"></div>
                      <div class="swiper__nav--btn swiper-button-prev"></div>
                  </div>
              </div>
      </section>
      <!-- End product section -->
