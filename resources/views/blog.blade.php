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

    /* ===== BLOG KARTLARI ===== */
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
        overflow: hidden;
        transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 1px solid rgba(255,255,255,0.04);
        background: rgba(255,255,255,0.02);
    }

    .blog-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 30px 80px rgba(0,0,0,0.4);
    }

    /* ===== BLOG GÖRSEL ===== */
    .blog-card .blog-image {
        width: 100%;
        height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 50px;
        position: relative;
        overflow: hidden;
        transition: 0.5s;
    }

    .blog-card:hover .blog-image {
        transform: scale(1.03);
    }

    .blog-card .blog-image .image-icon {
        transition: 0.5s;
    }

    .blog-card:hover .blog-image .image-icon {
        transform: scale(1.1) rotate(5deg);
    }

    .blog-card .blog-image .blog-category-tag {
        position: absolute;
        bottom: 15px;
        left: 15px;
        padding: 4px 14px;
        border-radius: 50px;
        font-size: 10px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        background: rgba(255,107,107,0.15);
        color: #ff6b6b;
        border: 1px solid rgba(255,107,107,0.1);
    }

    /* ===== BLOG İÇERİK ===== */
    .blog-card .blog-content {
        padding: 25px;
    }

    .blog-card .blog-content .blog-meta {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 12px;
        font-size: 12px;
        color: #64748b;
        flex-wrap: wrap;
    }

    .blog-card .blog-content .blog-meta span {
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .blog-card .blog-content .blog-meta span i {
        font-size: 11px;
        color: #ff6b6b;
    }

    .blog-card .blog-content h3 {
        font-size: 18px;
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

    .blog-card:hover .blog-content h3 {
        color: #ff6b6b;
    }

    .blog-card .blog-content .excerpt {
        color: #94a3b8;
        font-size: 14px;
        line-height: 1.7;
        margin-bottom: 18px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .blog-card .blog-content .read-more {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #ff6b6b;
        text-decoration: none;
        font-weight: 600;
        font-size: 13px;
        transition: 0.3s;
        padding: 8px 20px;
        border: 2px solid rgba(255,107,107,0.1);
        border-radius: 50px;
    }

    .blog-card .blog-content .read-more:hover {
        background: #ff6b6b;
        color: #fff;
        border-color: #ff6b6b;
        transform: translateX(5px);
    }

    /* ===== RENK VARİANTLARI ===== */
    .blog-card:nth-child(1) .blog-image { background: linear-gradient(135deg, rgba(255,107,107,0.12), rgba(255,107,107,0.03)); }
    .blog-card:nth-child(1) .blog-image .image-icon { color: #ff6b6b; }
    .blog-card:nth-child(1) .blog-image .blog-category-tag { background: rgba(255,107,107,0.15); color: #ff6b6b; border-color: rgba(255,107,107,0.1); }
    .blog-card:nth-child(1):hover .blog-content h3 { color: #ff6b6b; }
    .blog-card:nth-child(1) .blog-content .read-more { color: #ff6b6b; border-color: rgba(255,107,107,0.1); }
    .blog-card:nth-child(1) .blog-content .read-more:hover { background: #ff6b6b; color: #fff; border-color: #ff6b6b; }

    .blog-card:nth-child(2) .blog-image { background: linear-gradient(135deg, rgba(255,217,61,0.12), rgba(255,217,61,0.03)); }
    .blog-card:nth-child(2) .blog-image .image-icon { color: #ffd93d; }
    .blog-card:nth-child(2) .blog-image .blog-category-tag { background: rgba(255,217,61,0.15); color: #ffd93d; border-color: rgba(255,217,61,0.1); }
    .blog-card:nth-child(2):hover .blog-content h3 { color: #ffd93d; }
    .blog-card:nth-child(2) .blog-content .read-more { color: #ffd93d; border-color: rgba(255,217,61,0.1); }
    .blog-card:nth-child(2) .blog-content .read-more:hover { background: #ffd93d; color: #0a0e1a; border-color: #ffd93d; }

    .blog-card:nth-child(3) .blog-image { background: linear-gradient(135deg, rgba(77,150,255,0.12), rgba(77,150,255,0.03)); }
    .blog-card:nth-child(3) .blog-image .image-icon { color: #4d96ff; }
    .blog-card:nth-child(3) .blog-image .blog-category-tag { background: rgba(77,150,255,0.15); color: #4d96ff; border-color: rgba(77,150,255,0.1); }
    .blog-card:nth-child(3):hover .blog-content h3 { color: #4d96ff; }
    .blog-card:nth-child(3) .blog-content .read-more { color: #4d96ff; border-color: rgba(77,150,255,0.1); }
    .blog-card:nth-child(3) .blog-content .read-more:hover { background: #4d96ff; color: #fff; border-color: #4d96ff; }

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
            grid-template-columns: 1fr;
            gap: 20px;
            padding: 20px 0 60px;
        }
        .blog-card .blog-image {
            height: 160px;
            font-size: 40px;
        }
        .blog-card .blog-content {
            padding: 20px;
        }
        .blog-card .blog-content h3 {
            font-size: 17px;
        }
        .blog-card .blog-content .excerpt {
            font-size: 14px;
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
            gap: 15px;
            padding: 15px 0 40px;
        }
        .blog-card {
            border-radius: 16px;
        }
        .blog-card .blog-image {
            height: 130px;
            font-size: 32px;
        }
        .blog-card .blog-content {
            padding: 16px;
        }
        .blog-card .blog-content h3 {
            font-size: 15px;
        }
        .blog-card .blog-content .excerpt {
            font-size: 13px;
        }
        .blog-card .blog-content .read-more {
            font-size: 12px;
            padding: 6px 16px;
        }
        .blog-card .blog-content .blog-meta {
            font-size: 11px;
        }
        .blog-card .blog-image .blog-category-tag {
            font-size: 9px;
            padding: 3px 10px;
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
                    ],
                    [
                        'slug' => 'yapay-zeka-trendleri',
                        'icon' => 'fa-brain',
                        'category' => 'Yapay Zeka',
                        'title' => '2025\'te Yapay Zeka Trendleri ve İş Dünyasına Etkileri',
                        'excerpt' => 'Yapay zeka teknolojilerinin iş dünyasına etkileri, fırsatlar ve gelecekteki potansiyeli.',
                        'date' => '15 Mayıs, 2025',
                        'author' => 'Zeynep Kara',
                        'comments' => '15'
                    ],
                    [
                        'slug' => 'mobil-uygulama-gelistirme',
                        'icon' => 'fa-mobile-alt',
                        'category' => 'Mobil',
                        'title' => 'Mobil Uygulama Geliştirmede Dikkat Edilmesi Gerekenler',
                        'excerpt' => 'Başarılı bir mobil uygulama geliştirme sürecinde dikkat edilmesi gereken noktalar.',
                        'date' => '03 Nisan, 2025',
                        'author' => 'Ali Yıldız',
                        'comments' => '10'
                    ],
                    [
                        'slug' => 'bulut-bilisim-stratejileri',
                        'icon' => 'fa-cloud',
                        'category' => 'Bulut',
                        'title' => 'Bulut Bilişim Stratejileri ile İşletmenizi Güçlendirin',
                        'excerpt' => 'Bulut bilişim stratejileri ile işletmenizin verimliliğini ve güvenliğini artırın.',
                        'date' => '12 Mart, 2025',
                        'author' => 'Ece Demir',
                        'comments' => '7'
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

@endsection
