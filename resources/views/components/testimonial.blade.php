<section class="testimonial__section position__relative testimonial__bg--two section--padding color-scheme-2">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="testimonial__section--inner">
                    <div class="section__heading text-center mb-40">
                        <h2 class="section__heading--maintitle">Apa Kata Klien Kami</h2>
                    </div>
                    <div class=" testimonial__swiper--column3 testimonial__padding swiper">
                        <div class="swiper-wrapper">
                            @foreach ($testimonials as $testi)
                                <div class="swiper-slide">
                                    <div
                                        class="testimonial__items--style2 position__relative border-radius-5 d-flex align-items-center">
                                        <div class="testimonial__thumbnail--style2">
                                            <img class="testimonial__items--thumbnail__img display-block"
                                                src="{{ asset('storage/' . $testi->image) }}" alt="testimonial-img">
                                        </div>
                                        <div class="testimonial__content--style2">
                                            <h3 class="testimonial__items--author__title h4">{{ $testi->name }}</h3>
                                            <h4 class="testimonial__items--author__subtitle h5">{{ $testi->profession }}
                                            </h4>
                                            <p class="testimonial__items--desc style2"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="8.101" height="6.481"
                                                    viewBox="0 0 8.101 6.481">
                                                    <path data-name="Icon metro-quote"
                                                        d="M5.57,9.667v3.24H8.81V9.667H7.19a1.587,1.587,0,0,1,1.62-1.62V6.427A3.174,3.174,0,0,0,5.57,9.667Zm8.1-1.62V6.427a3.174,3.174,0,0,0-3.24,3.24v3.24h3.24V9.667h-1.62A1.587,1.587,0,0,1,13.671,8.047Z"
                                                        transform="translate(-5.57 -6.427)" fill="currentColor" />
                                                </svg>
                                                {!! $testi->testimoni !!} <svg xmlns="http://www.w3.org/2000/svg"
                                                    width="7.774" height="6.803" viewBox="0 0 7.774 6.803">
                                                    <path data-name="Icon awesome-quote-right"
                                                        d="M7.046,1.5H5.1a.729.729,0,0,0-.729.729V4.172A.729.729,0,0,0,5.1,4.9H6.317v.972a.973.973,0,0,1-.972.972H5.223a.364.364,0,0,0-.364.364v.729a.364.364,0,0,0,.364.364h.121a2.429,2.429,0,0,0,2.43-2.43V2.229A.729.729,0,0,0,7.046,1.5Zm-4.373,0H.729A.729.729,0,0,0,0,2.229V4.172A.729.729,0,0,0,.729,4.9H1.944v.972a.973.973,0,0,1-.972.972H.85a.364.364,0,0,0-.364.364v.729A.364.364,0,0,0,.85,8.3H.972A2.429,2.429,0,0,0,3.4,5.873V2.229A.729.729,0,0,0,2.672,1.5Z"
                                                        transform="translate(0 -1.5)" fill="currentColor" />
                                                </svg>
                                            </p>
                                            <ul class="rating testimonial__rating d-flex">
                                                @for ($i = 0; $i < $testi->star; $i++)
                                                    <li class="rating__list">
                                                        <span class="rating__list--icon">
                                                            <svg class="rating__list--icon__svg"
                                                                xmlns="http://www.w3.org/2000/svg" width="11.105"
                                                                height="11.732" viewBox="0 0 10.105 9.732">
                                                                <path data-name="star - Copy"
                                                                    d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                    transform="translate(0 -0.018)" fill="currentColor">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                @endfor
                                            </ul>
                                        </div>
                                        <div class="testimonial__quote--icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25.599" height="22.572"
                                                viewBox="0 0 25.599 22.572">
                                                <g data-name="Group 382" transform="translate(-164 -5399)">
                                                    <path data-name="Path 131"
                                                        d="M10.284,11.81a1.231,1.231,0,0,0,.62-1.652L9.892,8.031a1.235,1.235,0,0,0-1.611-.6A14.227,14.227,0,0,0,3.82,10.324,10.79,10.79,0,0,0,.826,15.052,25.936,25.936,0,0,0,0,22.321v6.34A1.243,1.243,0,0,0,1.239,29.9H9.355a1.243,1.243,0,0,0,1.239-1.239V20.545a1.243,1.243,0,0,0-1.239-1.239H5.472a8.707,8.707,0,0,1,1.446-5.018A7.849,7.849,0,0,1,10.284,11.81Z"
                                                        transform="translate(164 5391.672)" fill="#f1f1f1" />
                                                    <path data-name="Path 132"
                                                        d="M80.963,11.89a1.231,1.231,0,0,0,.62-1.652L80.571,8.132a1.235,1.235,0,0,0-1.611-.6,14.959,14.959,0,0,0-4.44,2.87,11.021,11.021,0,0,0-3.015,4.75A25.587,25.587,0,0,0,70.7,22.4v6.34a1.243,1.243,0,0,0,1.239,1.239h8.116a1.243,1.243,0,0,0,1.239-1.239V20.625a1.243,1.243,0,0,0-1.239-1.239h-3.9A8.709,8.709,0,0,1,77.6,14.368,7.848,7.848,0,0,1,80.963,11.89Z"
                                                        transform="translate(107.9 5391.592)" fill="#f1f1f1" />
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="testimonial__pagination swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img class="testimonial__bg--shape1" src="{{ asset('ggm/assets/img/other/testimonial-shape.webp') }}"
        alt="">
    <img class="testimonial__bg--shape2" src="{{ asset('ggm/assets/img/other/testimonial-shape2.webp') }}"
        alt="">

</section>
