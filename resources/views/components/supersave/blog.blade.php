<section class="sseb-blog-section">
    <div class="container">

        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>

                <span class="sseb-blog-badge">
                    Artikel & Informasi
                </span>

                <h3 class="sseb-blog-title">
                    Insight Terbaru Seputar Energi dan Solusi Kelistrikan.
                </h3>

                <p class="sseb-blog-description">
                    Temukan informasi, tips, dan pembaruan terbaru dari Super Save untuk membantu Anda memahami solusi energi yang lebih efisien.
                </p>
            </div>
        </div>

        <div class="row mb-5 sm-mb-7">
            <div class="col-12">

                <ul class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>

                    <li class="grid-sizer"></li>

                    @forelse ($blogs as $item)
                        @php
                            $blogImage = $item->image
                                ? asset('/storage/' . $item->image)
                                : asset('supersave/bg/solar-panel-bg.jpg');

                            $cleanDescription = strip_tags($item->description ?? '');
                            $previewDescription = \Illuminate\Support\Str::limit($cleanDescription, 110);

                            $authorName = $item->author ?: 'Super Save';
                        @endphp

                        <li class="grid-item">
                            <article class="sseb-blog-card">

                                <a href="{{ route('blogdetail', $item->slug) }}" class="sseb-blog-image-wrap">
                                    <img src="{{ $blogImage }}"
                                        alt="{{ $item->title }}"
                                        class="sseb-blog-image">

                                    <span class="sseb-blog-category">
                                        Super Save
                                    </span>
                                </a>

                                <div class="sseb-blog-content">

                                    <div class="sseb-blog-meta">
                                        <span>
                                            <i class="fa-regular fa-calendar"></i>
                                            {{ $item->created_at->diffForHumans() }}
                                        </span>

                                        <span>
                                            <i class="fa-regular fa-user"></i>
                                            {{ $authorName }}
                                        </span>
                                    </div>

                                    <a href="{{ route('blogdetail', $item->slug) }}" class="sseb-blog-card-title">
                                        {{ $item->title }}
                                    </a>

                                    <p class="sseb-blog-preview">
                                        {{ $previewDescription }}
                                    </p>

                                    <a href="{{ route('blogdetail', $item->slug) }}" class="sseb-blog-readmore">
                                        <span>Baca Selengkapnya</span>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>

                            </article>
                        </li>
                    @empty
                        <li class="grid-item">
                            <div class="sseb-blog-empty">
                                <i class="fa-regular fa-newspaper"></i>
                                <h4>Belum ada artikel</h4>
                                <p>Artikel terbaru akan segera ditampilkan di halaman ini.</p>
                            </div>
                        </li>
                    @endforelse

                </ul>
            </div>
        </div>

    </div>
</section>

<style>
    .sseb-blog-section {
        padding: 100px 0 80px;
        background:
            radial-gradient(circle at top left, rgba(15, 76, 129, 0.08), transparent 34%),
            linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);
        border-radius: 28px;
        overflow: hidden;
    }

    .sseb-blog-badge {
        display: inline-flex;
        align-items: center;
        padding: 10px 18px;
        margin-bottom: 18px;
        border-radius: 999px;
        background: rgba(15, 76, 129, 0.08);
        color: #0f4c81;
        font-size: 12px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .sseb-blog-title {
        margin: 0 auto 18px;
        max-width: 760px;
        color: #102033;
        font-size: 46px;
        line-height: 1.12;
        font-weight: 800;
        letter-spacing: -1.7px;
    }

    .sseb-blog-description {
        max-width: 650px;
        margin: 0 auto;
        color: #64748b;
        font-size: 17px;
        line-height: 1.8;
    }

    .sseb-blog-card {
        height: 100%;
        overflow: hidden;
        border-radius: 24px;
        background: #ffffff;
        box-shadow: 0 18px 50px rgba(15, 23, 42, 0.08);
        transition: all 0.28s ease;
    }

    .sseb-blog-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 28px 70px rgba(15, 23, 42, 0.14);
    }

    .sseb-blog-image-wrap {
        position: relative;
        display: block;
        height: 245px;
        overflow: hidden;
        background: #e2e8f0;
    }

    .sseb-blog-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: all 0.35s ease;
    }

    .sseb-blog-card:hover .sseb-blog-image {
        transform: scale(1.06);
    }

    .sseb-blog-category {
        position: absolute;
        left: 18px;
        bottom: 18px;
        display: inline-flex;
        align-items: center;
        padding: 8px 14px;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.94);
        color: #0f4c81;
        font-size: 11px;
        line-height: 1;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 0.7px;
        backdrop-filter: blur(8px);
    }

    .sseb-blog-content {
        padding: 26px 24px 28px;
    }

    .sseb-blog-meta {
        display: flex;
        align-items: center;
        gap: 14px;
        flex-wrap: wrap;
        margin-bottom: 14px;
        color: #64748b;
        font-size: 13px;
        font-weight: 700;
    }

    .sseb-blog-meta span {
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .sseb-blog-card-title {
        display: block;
        margin-bottom: 14px;
        color: #102033;
        font-size: 21px;
        line-height: 1.35;
        font-weight: 800;
        letter-spacing: -0.4px;
        text-decoration: none;
    }

    .sseb-blog-card-title:hover {
        color: #0f4c81;
    }

    .sseb-blog-preview {
        min-height: 68px;
        margin-bottom: 22px;
        color: #667085;
        font-size: 14px;
        line-height: 1.7;
    }

    .sseb-blog-readmore {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #0f4c81;
        font-size: 13px;
        font-weight: 800;
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 0.7px;
    }

    .sseb-blog-readmore i {
        transition: all 0.2s ease;
    }

    .sseb-blog-card:hover .sseb-blog-readmore i {
        transform: translateX(4px);
    }

    .sseb-blog-empty {
        padding: 48px 24px;
        border-radius: 24px;
        background: #ffffff;
        border: 1px dashed rgba(15, 76, 129, 0.22);
        text-align: center;
        box-shadow: 0 18px 50px rgba(15, 23, 42, 0.06);
    }

    .sseb-blog-empty i {
        margin-bottom: 16px;
        color: #0f4c81;
        font-size: 42px;
    }

    .sseb-blog-empty h4 {
        margin-bottom: 8px;
        color: #102033;
        font-weight: 800;
    }

    .sseb-blog-empty p {
        margin: 0;
        color: #64748b;
    }

    @media (max-width: 991.98px) {
        .sseb-blog-section {
            padding: 80px 0 60px;
            border-radius: 0;
        }

        .sseb-blog-title {
            font-size: 38px;
            letter-spacing: -1px;
        }

        .sseb-blog-description {
            font-size: 16px;
        }
    }

    @media (max-width: 575.98px) {
        .sseb-blog-section {
            padding: 65px 0 50px;
        }

        .sseb-blog-title {
            font-size: 31px;
        }

        .sseb-blog-image-wrap {
            height: 220px;
        }

        .sseb-blog-content {
            padding: 22px 18px 24px;
        }

        .sseb-blog-preview {
            min-height: auto;
        }
    }
</style>
