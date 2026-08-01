@extends('layouts.app')

@section('title', 'Blog - Yazılım Şirketi')

@section('content')
<style>
    .blog-hero {
        padding: 140px 0 40px;
        text-align: center;
        position: relative;
        z-index: 1;
    }
    .blog-hero h1 {
        font-size: 48px;
        font-weight: 900;
        margin-bottom: 10px;
    }
    .blog-hero h1 span {
        background: linear-gradient(135deg, #ff6b6b, #ffd93d, #6bcb77, #4d96ff);
        background-size: 300% 300%;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: rainbowText 4s ease infinite;
    }
    .blog-hero p {
        color: #94a3b8;
        font-size: 17px;
        max-width: 550px;
        margin: 0 auto;
        line-height: 1.7;
    }

    .blog-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        padding: 40px 0 80px;
        position: relative;
        z-index: 1;
    }

    .blog-card {
        border-radius: 20px;
        padding: 0;
        transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
        border: 2px solid rgba(255,255,255,0.06);
        background: rgba(255,255,255,0.02);
        cursor: pointer;
        -webkit-tap-highlight-color: transparent;
        touch-action: manipulation;
    }

    /* ===== RENKLER (NORMAL) - ZENGİN RENKLER ===== */
    .blog-card:nth-child(1) {
        border-color: rgba(255,107,107,0.2);
        background: linear-gradient(135deg, rgba(255,107,107,0.04), rgba(255,107,107,0.01));
    }
    .blog-card:nth-child(2) {
        border-color: rgba(255,159,67,0.2);
        background: linear-gradient(135deg, rgba(255,159,67,0.04), rgba(255,159,67,0.01));
    }
    .blog-card:nth-child(3) {
        border-color: rgba(46,213,115,0.2);
        background: linear-gradient(135deg, rgba(46,213,115,0.04), rgba(46,213,115,0.01));
    }

    /* ===== RENKLER (HOVER) ===== */
    .blog-card:nth-child(1):hover,
    .blog-card:nth-child(1).touch-hover {
        border-color: #ff6b6b;
        background: linear-gradient(135deg, rgba(255,107,107,0.12), rgba(255,107,107,0.04));
        transform: translateY(-12px);
        box-shadow: 0 25px 70px rgba(255,107,107,0.25);
    }
    .blog-card:nth-child(2):hover,
    .blog-card:nth-child(2).touch-hover {
        border-color: #ff9f43;
        background: linear-gradient(135deg, rgba(255,159,67,0.12), rgba(255,159,67,0.04));
        transform: translateY(-12px);
        box-shadow: 0 25px 70px rgba(255,159,67,0.25);
    }
    .blog-card:nth-child(3):hover,
    .blog-card:nth-child(3).touch-hover {
        border-color: #2ed573;
        background: linear-gradient(135deg, rgba(46,213,115,0.12), rgba(46,213,115,0.04));
        transform: translateY(-12px);
        box-shadow: 0 25px 70px rgba(46,213,115,0.25);
    }

    /* ===== BLOG GÖRSEL ===== */
    .blog-card .blog-image {
        width: 100%;
        height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 55px;
        position: relative;
        overflow: hidden;
        transition: 0.5s;
        background: rgba(255,255,255,0.02);
    }

    .blog-card:hover .blog-image,
    .blog-card.touch-hover .blog-image {
        transform: scale(1.03);
    }

    .blog-card .blog-image .image-icon {
        transition: 0.6s;
        opacity: 0.5;
    }

    .blog-card:hover .blog-image .image-icon,
    .blog-card.touch-hover .blog-image .image-icon {
        transform: scale(1.15) rotate(8deg);
        opacity: 0.9;
    }

    /* ===== İKON RENKLERİ ===== */
    .blog-card:nth-child(1) .blog-image .image-icon { color: #ff6b6b; }
    .blog-card:nth-child(2) .blog-image .image-icon { color: #ff9f43; }
    .blog-card:nth-child(3) .blog-image .image-icon { color: #2ed573; }

    .blog-card:nth-child(1):hover .image-icon,
    .blog-card:nth-child(1).touch-hover .image-icon { color: #ff6b6b; }
    .blog-card:nth-child(2):hover .image-icon,
    .blog-card:nth-child(2).touch-hover .image-icon { color: #ff9f43; }
    .blog-card:nth-child(3):hover .image-icon,
    .blog-card:nth-child(3).touch-hover .image-icon { color: #2ed573; }

    .blog-card .blog-image .blog-category-tag {
        position: absolute;
        bottom: 15px;
        left: 15px;
        padding: 5px 16px;
        border-radius: 50px;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        background: rgba(0,0,0,0.6);
        backdrop-filter: blur(10px);
        color: #fff;
        border: 1px solid rgba(255,255,255,0.05);
        transition: 0.4s;
    }

    .blog-card:nth-child(1):hover .blog-category-tag,
    .blog-card:nth-child(1).touch-hover .blog-category-tag {
        background: #ff6b6b;
        color: #fff;
        border-color: #ff6b6b;
        box-shadow: 0 5px 25px rgba(255,107,107,0.3);
    }
    .blog-card:nth-child(2):hover .blog-category-tag,
    .blog-card:nth-child(2).touch-hover .blog-category-tag {
        background: #ff9f43;
        color: #fff;
        border-color: #ff9f43;
        box-shadow: 0 5px 25px rgba(255,159,67,0.3);
    }
    .blog-card:nth-child(3):hover .blog-category-tag,
    .blog-card:nth-child(3).touch-hover .blog-category-tag {
        background: #2ed573;
        color: #fff;
        border-color: #2ed573;
        box-shadow: 0 5px 25px rgba(46,213,115,0.3);
    }

    /* ===== BLOG İÇERİK ===== */
    .blog-card .blog-content {
        padding: 25px;
        transition: 0.4s;
    }

    .blog-card:hover .blog-content,
    .blog-card.touch-hover .blog-content {
        transform: translateY(-2px);
    }

    .blog-card .blog-content .blog-meta {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 12px;
        font-size: 12px;
        color: #64748b;
        flex-wrap: wrap;
        transition: 0.3s;
    }

    .blog-card .blog-content .blog-meta span {
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .blog-card .blog-content .blog-meta span i {
        font-size: 12px;
        transition: 0.3s;
    }

    .blog-card:nth-child(1):hover .blog-meta span i,
    .blog-card:nth-child(1).touch-hover .blog-meta span i { color: #ff6b6b; }
    .blog-card:nth-child(2):hover .blog-meta span i,
    .blog-card:nth-child(2).touch-hover .blog-meta span i { color: #ff9f43; }
    .blog-card:nth-child(3):hover .blog-meta span i,
    .blog-card:nth-child(3).touch-hover .blog-meta span i { color: #2ed573; }

    .blog-card .blog-content h3 {
        font-size: 19px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 10px;
        transition: 0.3s;
        line-height: 1.4;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .blog-card:nth-child(1):hover h3,
    .blog-card:nth-child(1).touch-hover h3 { color: #ff6b6b; }
    .blog-card:nth-child(2):hover h3,
    .blog-card:nth-child(2).touch-hover h3 { color: #ff9f43; }
    .blog-card:nth-child(3):hover h3,
    .blog-card:nth-child(3).touch-hover h3 { color: #2ed573; }

    .blog-card .blog-content .excerpt {
        color: #94a3b8;
        font-size: 14px;
        line-height: 1.8;
        margin-bottom: 18px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        transition: 0.3s;
    }

    .blog-card:nth-child(1):hover .excerpt,
    .blog-card:nth-child(1).touch-hover .excerpt { color: #c8d0e0; }
    .blog-card:nth-child(2):hover .excerpt,
    .blog-card:nth-child(2).touch-hover .excerpt { color: #c8d0e0; }
    .blog-card:nth-child(3):hover .excerpt,
    .blog-card:nth-child(3).touch-hover .excerpt { color: #c8d0e0; }

    .blog-card .blog-content .read-more {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
        font-weight: 600;
        font-size: 13px;
        transition: all 0.4s ease;
        padding: 8px 22px;
        border-radius: 50px;
        background: transparent;
        border: 2px solid rgba(255,255,255,0.08);
        color: #94a3b8;
    }

    .blog-card:nth-child(1):hover .read-more,
    .blog-card:nth-child(1).touch-hover .read-more {
        border-color: #ff6b6b;
        color: #ff6b6b;
        background: rgba(255,107,107,0.05);
        box-shadow: 0 5px 25px rgba(255,107,107,0.1);
    }
    .blog-card:nth-child(2):hover .read-more,
    .blog-card:nth-child(2).touch-hover .read-more {
        border-color: #ff9f43;
        color: #ff9f43;
        background: rgba(255,159,67,0.05);
        box-shadow: 0 5px 25px rgba(255,159,67,0.1);
    }
    .blog-card:nth-child(3):hover .read-more,
    .blog-card:nth-child(3).touch-hover .read-more {
        border-color: #2ed573;
        color: #2ed573;
        background: rgba(46,213,115,0.05);
        box-shadow: 0 5px 25px rgba(46,213,115,0.1);
    }

    .blog-card .blog-content .read-more i {
        transition: 0.3s;
    }
    .blog-card .blog-content .read-more:hover i {
        transform: translateX(5px);
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 992px) {
        .blog-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
        .blog-hero h1 {
            font-size: 38px;
        }
    }

    @media (max-width: 768px) {
        .blog-hero {
            padding: 100px 0 20px;
        }
        .blog-hero h1 {
            font-size: 30px;
        }
        .blog-hero p {
            font-size: 15px;
            padding: 0 15px;
        }
        .blog-grid {
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            padding: 20px 0 60px;
        }
        .blog-card .blog-image {
            height: 140px;
            font-size: 36px;
        }
        .blog-card .blog-content {
            padding: 16px;
        }
        .blog-card .blog-content h3 {
            font-size: 14px;
        }
        .blog-card .blog-content .excerpt {
            font-size: 12px;
            -webkit-line-clamp: 2;
        }
        .blog-card .blog-content .read-more {
            font-size: 11px;
            padding: 5px 14px;
        }
        .blog-card .blog-content .blog-meta {
            font-size: 10px;
            gap: 10px;
        }
        .blog-card .blog-image .blog-category-tag {
            font-size: 9px;
            padding: 3px 10px;
        }
    }

    @media (max-width: 480px) {
        .blog-hero h1 {
            font-size: 24px;
        }
        .blog-hero p {
            font-size: 13px;
        }
        .blog-grid {
            gap: 12px;
            padding: 15px 0 40px;
        }
        .blog-card {
            border-radius: 16px;
        }
        .blog-card .blog-image {
            height: 110px;
            font-size: 28px;
        }
        .blog-card .blog-content {
            padding: 12px;
        }
        .blog-card .blog-content h3 {
            font-size: 13px;
        }
        .blog-card .blog-content .excerpt {
            font-size: 11px;
        }
        .blog-card .blog-content .read-more {
            font-size: 10px;
            padding: 4px 12px;
        }
        .blog-card .blog-content .blog-meta {
            font-size: 9px;
            gap: 8px;
        }
        .blog-card .blog-image .blog-category-tag {
            font-size: 8px;
            padding: 2px 8px;
        }
    }

    @keyframes rainbowText {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
</style>

<!-- ===== HERO ===== -->
<section class="blog-hero">
    <div class="container">
        <div class="section-tag" style="display:inline-block;background:linear-gradient(135deg,rgba(255,107,107,0.08),rgba(255,217,61,0.08));padding:5px 20px;border-radius:50px;font-size:11px;color:#ffd93d;margin-bottom:12px;border:1px solid rgba(255,217,61,0.06);letter-spacing:2px;text-transform:uppercase;">
            <i class="fas fa-blog"></i> Blog
        </div>
        <h1>Yazılım Dünyasından <span>Haberler</span></h1>
        <p>Yazılım, teknoloji ve dijital dönüşüm üzerine en güncel içerikler.</p>
    </div>
</section>

<!-- ===== BLOG KARTLARI ===== -->
<section class="blog-section">
    <div class="container">
        <div class="blog-grid">
            @php
                $blogPosts = [
                    [
                        'slug' => 'erp-uygulama-sureci',
                        'icon' => 'fa-cubes',
                        'category' => 'ERP',
                        'title' => 'Başarılı Bir ERP Uygulama Süreci Nasıl İlerler?',
                        'excerpt' => 'ERP sistemlerinin başarılı bir şekilde uygulanması için izlenmesi gereken adımlar ve stratejiler.',
                        'date' => '02 Temmuz, 2025',
                        'author' => 'Ahmet Yılmaz',
                        'comments' => '8'
                    ],
                    [
                        'slug' => 'efatura-earsiv',
                        'icon' => 'fa-file-invoice',
                        'category' => 'Dijital Dönüşüm',
                        'title' => 'İşletmenizi Geleceğe Taşıyın: e-Fatura ve e-Arşiv Sistemleri',
                        'excerpt' => 'e-Fatura ve e-Arşiv sistemleri ile işletmenizi dijital dönüşüme hazırlayın.',
                        'date' => '27 Haziran, 2025',
                        'author' => 'Mehmet Demir',
                        'comments' => '12'
                    ],
                    [
                        'slug' => 'windows-12',
                        'icon' => 'fa-windows',
                        'category' => 'Teknoloji',
                        'title' => 'Windows 12 ile Gelen Yenilikler ve İşletmelere Etkileri',
                        'excerpt' => 'Windows 12\'nin getirdiği yenilikler ve işletmelere sağlayacağı avantajlar.',
                        'date' => '21 Ağustos, 2025',
                        'author' => 'Can Öztürk',
                        'comments' => '6'
                    ]
                ];
            @endphp

            @foreach($blogPosts as $index => $post)
            <div class="blog-card" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <div class="blog-image">
                    <i class="fas {{ $post['icon'] }} image-icon"></i>
                    <span class="blog-category-tag"><i class="fas fa-tag"></i> {{ $post['category'] }}</span>
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span><i class="fas fa-calendar-alt"></i> {{ $post['date'] }}</span>
                        <span><i class="fas fa-user"></i> {{ $post['author'] }}</span>
                        <span><i class="fas fa-comment"></i> {{ $post['comments'] }}</span>
                    </div>
                    <h3>{{ $post['title'] }}</h3>
                    <p class="excerpt">{{ $post['excerpt'] }}</p>
                    <a href="{{ route('blog.show', $post['slug']) }}" class="read-more">
                        Devamını Oku <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ===== CTA ===== -->
<section id="cta" style="padding:60px 0;position:relative;z-index:1;background:linear-gradient(135deg,#ff6b6b,#ee5a24,#ff6b6b) !important;background-size:200% 200% !important;animation:btnGradient 4s ease infinite !important;border-top:none !important;border-bottom:none !important;">
    <div class="container">
        <div class="cta-content" style="text-align:center;padding:0;position:relative;z-index:1;">
            <h2 style="font-size:34px;font-weight:800;margin-bottom:15px;color:#fff;">Blog Yazıları <span style="color:#fff;">Hazır mısınız?</span></h2>
            <p style="font-size:16px;margin-bottom:25px;opacity:0.9;max-width:500px;margin-left:auto;margin-right:auto;color:rgba(255,255,255,0.9);">
                En güncel yazılım ve teknoloji içerikleri için bizi takip edin.
            </p>
            <a href="#" class="btn-white" style="background:#fff;color:#0a0e1a !important;padding:12px 35px;border-radius:50px;text-decoration:none;font-weight:600;transition:all 0.3s ease;display:inline-block;font-size:15px;">
                <i class="fas fa-bell"></i> Takip Et
            </a>
        </div>
    </div>
</section>

<style>
    @keyframes btnGradient {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    @media (max-width: 768px) {
        #cta {
            padding: 40px 0 !important;
        }
        #cta .cta-content h2 {
            font-size: 24px !important;
        }
        #cta .cta-content p {
            font-size: 14px !important;
            padding: 0 15px;
        }
        #cta .btn-white {
            padding: 10px 25px !important;
            font-size: 13px !important;
        }
    }
    @media (max-width: 480px) {
        #cta .cta-content h2 {
            font-size: 20px !important;
        }
    }
</style>

@push('scripts')
<script>
    document.querySelectorAll('.blog-card').forEach(card => {
        // Desktop mouse efekti
        card.addEventListener('mousemove', function(e) {
            const rect = this.getBoundingClientRect();
            const x = ((e.clientX - rect.left) / rect.width * 100);
            const y = ((e.clientY - rect.top) / rect.height * 100);
            this.style.setProperty('--mouse-x', x + '%');
            this.style.setProperty('--mouse-y', y + '%');
        });

        // ===== MOBİL TOUCH HOVER =====
        card.addEventListener('touchstart', function(e) {
            this.classList.add('touch-hover');
        });

        card.addEventListener('touchend', function(e) {
            setTimeout(() => {
                this.classList.remove('touch-hover');
            }, 300);
        });

        card.addEventListener('touchcancel', function(e) {
            this.classList.remove('touch-hover');
        });

        // Kart içindeki butona tıklanırken hover'ı kaldır
        card.querySelectorAll('.read-more').forEach(btn => {
            btn.addEventListener('touchstart', function(e) {
                e.stopPropagation();
                const parent = this.closest('.blog-card');
                parent.classList.remove('touch-hover');
            });
        });
    });
</script>
@endpush

@endsection
