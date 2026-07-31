@extends('layouts.app')

@section('title', 'Haberler - Yazılım Şirketi')

@section('content')
<style>
    .news-hero {
        padding: 140px 0 40px;
        text-align: center;
        position: relative;
        z-index: 1;
    }
    .news-hero h1 {
        font-size: 48px;
        font-weight: 900;
        margin-bottom: 10px;
    }
    .news-hero h1 span {
        background: linear-gradient(135deg, #ff6b6b, #ffd93d, #6bcb77, #4d96ff);
        background-size: 300% 300%;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: rainbowText 4s ease infinite;
    }
    .news-hero p {
        color: #94a3b8;
        font-size: 17px;
        max-width: 550px;
        margin: 0 auto;
        line-height: 1.7;
    }

    /* ===== HABER KARTLARI ===== */
    .news-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        padding: 40px 0 80px;
        position: relative;
        z-index: 1;
    }

    .news-card {
        border-radius: 20px;
        overflow: hidden;
        transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 1px solid rgba(255,255,255,0.04);
        background: rgba(255,255,255,0.02);
    }

    .news-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 30px 80px rgba(0,0,0,0.4);
        border-color: rgba(255,107,107,0.15);
    }

    /* ===== HABER GÖRSEL ===== */
    .news-card .news-image {
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

    .news-card:hover .news-image {
        transform: scale(1.03);
    }

    .news-card .news-image .image-icon {
        transition: 0.5s;
    }

    .news-card:hover .news-image .image-icon {
        transform: scale(1.1) rotate(5deg);
    }

    .news-card .news-image .news-source-tag {
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

    /* ===== HABER İÇERİK ===== */
    .news-card .news-content {
        padding: 25px;
    }

    .news-card .news-content .news-meta {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 12px;
        font-size: 12px;
        color: #64748b;
        flex-wrap: wrap;
    }

    .news-card .news-content .news-meta span {
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .news-card .news-content .news-meta span i {
        font-size: 11px;
        color: #ff6b6b;
    }

    .news-card .news-content h3 {
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

    .news-card:hover .news-content h3 {
        color: #ff6b6b;
    }

    .news-card .news-content .excerpt {
        color: #94a3b8;
        font-size: 14px;
        line-height: 1.7;
        margin-bottom: 18px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .news-card .news-content .read-more {
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

    .news-card .news-content .read-more:hover {
        background: #ff6b6b;
        color: #fff;
        border-color: #ff6b6b;
        transform: translateX(5px);
    }

    /* ===== RENK VARİANTLARI ===== */
    .news-card:nth-child(1) .news-image { background: linear-gradient(135deg, rgba(255,107,107,0.12), rgba(255,107,107,0.03)); }
    .news-card:nth-child(1) .news-image .image-icon { color: #ff6b6b; }
    .news-card:nth-child(1) .news-image .news-source-tag { background: rgba(255,107,107,0.15); color: #ff6b6b; border-color: rgba(255,107,107,0.1); }
    .news-card:nth-child(1):hover .news-content h3 { color: #ff6b6b; }
    .news-card:nth-child(1) .news-content .read-more { color: #ff6b6b; border-color: rgba(255,107,107,0.1); }
    .news-card:nth-child(1) .news-content .read-more:hover { background: #ff6b6b; color: #fff; border-color: #ff6b6b; }

    .news-card:nth-child(2) .news-image { background: linear-gradient(135deg, rgba(255,217,61,0.12), rgba(255,217,61,0.03)); }
    .news-card:nth-child(2) .news-image .image-icon { color: #ffd93d; }
    .news-card:nth-child(2) .news-image .news-source-tag { background: rgba(255,217,61,0.15); color: #ffd93d; border-color: rgba(255,217,61,0.1); }
    .news-card:nth-child(2):hover .news-content h3 { color: #ffd93d; }
    .news-card:nth-child(2) .news-content .read-more { color: #ffd93d; border-color: rgba(255,217,61,0.1); }
    .news-card:nth-child(2) .news-content .read-more:hover { background: #ffd93d; color: #0a0e1a; border-color: #ffd93d; }

    .news-card:nth-child(3) .news-image { background: linear-gradient(135deg, rgba(77,150,255,0.12), rgba(77,150,255,0.03)); }
    .news-card:nth-child(3) .news-image .image-icon { color: #4d96ff; }
    .news-card:nth-child(3) .news-image .news-source-tag { background: rgba(77,150,255,0.15); color: #4d96ff; border-color: rgba(77,150,255,0.1); }
    .news-card:nth-child(3):hover .news-content h3 { color: #4d96ff; }
    .news-card:nth-child(3) .news-content .read-more { color: #4d96ff; border-color: rgba(77,150,255,0.1); }
    .news-card:nth-child(3) .news-content .read-more:hover { background: #4d96ff; color: #fff; border-color: #4d96ff; }

    .news-card:nth-child(4) .news-image { background: linear-gradient(135deg, rgba(107,203,119,0.12), rgba(107,203,119,0.03)); }
    .news-card:nth-child(4) .news-image .image-icon { color: #6bcb77; }
    .news-card:nth-child(4) .news-image .news-source-tag { background: rgba(107,203,119,0.15); color: #6bcb77; border-color: rgba(107,203,119,0.1); }
    .news-card:nth-child(4):hover .news-content h3 { color: #6bcb77; }
    .news-card:nth-child(4) .news-content .read-more { color: #6bcb77; border-color: rgba(107,203,119,0.1); }
    .news-card:nth-child(4) .news-content .read-more:hover { background: #6bcb77; color: #0a0e1a; border-color: #6bcb77; }

    .news-card:nth-child(5) .news-image { background: linear-gradient(135deg, rgba(166,108,255,0.12), rgba(166,108,255,0.03)); }
    .news-card:nth-child(5) .news-image .image-icon { color: #a66cff; }
    .news-card:nth-child(5) .news-image .news-source-tag { background: rgba(166,108,255,0.15); color: #a66cff; border-color: rgba(166,108,255,0.1); }
    .news-card:nth-child(5):hover .news-content h3 { color: #a66cff; }
    .news-card:nth-child(5) .news-content .read-more { color: #a66cff; border-color: rgba(166,108,255,0.1); }
    .news-card:nth-child(5) .news-content .read-more:hover { background: #a66cff; color: #fff; border-color: #a66cff; }

    .news-card:nth-child(6) .news-image { background: linear-gradient(135deg, rgba(255,107,107,0.12), rgba(255,107,107,0.03)); }
    .news-card:nth-child(6) .news-image .image-icon { color: #ff6b6b; }
    .news-card:nth-child(6) .news-image .news-source-tag { background: rgba(255,107,107,0.15); color: #ff6b6b; border-color: rgba(255,107,107,0.1); }
    .news-card:nth-child(6):hover .news-content h3 { color: #ff6b6b; }
    .news-card:nth-child(6) .news-content .read-more { color: #ff6b6b; border-color: rgba(255,107,107,0.1); }
    .news-card:nth-child(6) .news-content .read-more:hover { background: #ff6b6b; color: #fff; border-color: #ff6b6b; }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 992px) {
        .news-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
        .news-hero h1 {
            font-size: 38px;
        }
    }

    @media (max-width: 768px) {
        .news-hero {
            padding: 100px 0 20px;
        }
        .news-hero h1 {
            font-size: 30px;
        }
        .news-hero p {
            font-size: 15px;
            padding: 0 15px;
        }
        .news-grid {
            grid-template-columns: 1fr;
            gap: 20px;
            padding: 20px 0 60px;
        }
        .news-card .news-image {
            height: 160px;
            font-size: 40px;
        }
        .news-card .news-content {
            padding: 20px;
        }
        .news-card .news-content h3 {
            font-size: 17px;
        }
        .news-card .news-content .excerpt {
            font-size: 14px;
        }
    }

    @media (max-width: 480px) {
        .news-hero h1 {
            font-size: 24px;
        }
        .news-hero p {
            font-size: 13px;
        }
        .news-grid {
            gap: 15px;
            padding: 15px 0 40px;
        }
        .news-card {
            border-radius: 16px;
        }
        .news-card .news-image {
            height: 130px;
            font-size: 32px;
        }
        .news-card .news-content {
            padding: 16px;
        }
        .news-card .news-content h3 {
            font-size: 15px;
        }
        .news-card .news-content .excerpt {
            font-size: 13px;
        }
        .news-card .news-content .read-more {
            font-size: 12px;
            padding: 6px 16px;
        }
        .news-card .news-content .news-meta {
            font-size: 11px;
        }
        .news-card .news-image .news-source-tag {
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
<section class="news-hero">
    <div class="container">
        <div class="section-tag" style="display:inline-block;background:linear-gradient(135deg,rgba(255,107,107,0.08),rgba(255,217,61,0.08));padding:5px 20px;border-radius:50px;font-size:11px;color:#ffd93d;margin-bottom:12px;border:1px solid rgba(255,217,61,0.06);letter-spacing:2px;text-transform:uppercase;">
            <i class="fas fa-newspaper"></i> Haberler
        </div>
        <h1>Teknoloji Dünyasından <span>Son Haberler</span></h1>
        <p>Yazılım, teknoloji ve dijital dönüşüm alanındaki en güncel haberler.</p>
    </div>
</section>

<!-- ===== HABER KARTLARI ===== -->
<section class="news-section">
    <div class="container">
        <div class="news-grid">
            @php
                $newsItems = [
                    [
                        'slug' => 'kuantum-hesaplama',
                        'icon' => 'fa-microchip',
                        'source' => 'TechCrunch',
                        'category' => 'Kuantum Bilgisayar',
                        'title' => 'Google CEO\'su Sundar Pichai: "Kuantum Hesaplama ile 10 Yıl İçinde Devrim Yaşanacak"',
                        'excerpt' => 'Google CEO\'su Sundar Pichai, kuantum hesaplama teknolojisinin önümüzdeki 10 yıl içinde bilgisayar dünyasında devrim yaratacağını açıkladı.',
                        'date' => '07 Aralık, 2025'
                    ],
                    [
                        'slug' => 'ulusal-yapay-zeka',
                        'icon' => 'fa-brain',
                        'source' => 'Bloomberg',
                        'category' => 'Yapay Zeka',
                        'title' => 'Trump, "Genesis Mission" ile Ulusal Yapay Zeka Stratejisini Duyurdu',
                        'excerpt' => 'Eski ABD Başkanı Donald Trump, "Genesis Mission" adlı ulusal yapay zeka stratejisini duyurdu. Proje kapsamında 500 milyar dolar yatırım planlanıyor.',
                        'date' => '01 Aralık, 2025'
                    ],
                    [
                        'slug' => 'fleet-space',
                        'icon' => 'fa-satellite',
                        'source' => 'SpaceNews',
                        'category' => 'Uzay Teknolojisi',
                        'title' => 'Fleet Space, Yapay Zeka ve Uydu Teknolojisiyle Madencilikte Devrim Yaratıyor',
                        'excerpt' => 'Fleet Space, yapay zeka ve uydu teknolojisini birleştirerek madencilik sektöründe devrim yaratıyor. %90 daha hızlı kaynak tespiti sağlıyor.',
                        'date' => '28 Kasım, 2025'
                    ],
                    [
                        'slug' => 'openai-gpt5',
                        'icon' => 'fa-robot',
                        'source' => 'Reuters',
                        'category' => 'Yapay Zeka',
                        'title' => 'OpenAI, GPT-5\'i Duyurdu: İnsan Seviyesinde Zeka Kapıda',
                        'excerpt' => 'OpenAI, yeni yapay zeka modeli GPT-5\'in insan seviyesinde zeka kapasitesine ulaştığını duyurdu. Model, karmaşık problemleri çözme yeteneğine sahip.',
                        'date' => '15 Kasım, 2025'
                    ],
                    [
                        'slug' => 'tesla-robot',
                        'icon' => 'fa-robot',
                        'source' => 'The Verge',
                        'category' => 'Robotik',
                        'title' => 'Tesla\'nın İnsansı Robotu Optimus, Fabrikalarda Çalışmaya Başladı',
                        'excerpt' => 'Tesla\'nın geliştirdiği insansı robot Optimus, fabrikalarda üretim süreçlerinde çalışmaya başladı. Robot, insan benzeri hareket yeteneğine sahip.',
                        'date' => '08 Kasım, 2025'
                    ],
                    [
                        'slug' => 'apple-vr',
                        'icon' => 'fa-vr-cardboard',
                        'source' => 'MacRumors',
                        'category' => 'Sanal Gerçeklik',
                        'title' => 'Apple\'ın Yeni VR Gözlüğü Vision Pro 2, 2026\'da Geliyor',
                        'excerpt' => 'Apple, ikinci nesil sanal gerçeklik gözlüğü Vision Pro 2\'nin 2026 yılında piyasaya sürüleceğini duyurdu. Yeni model daha hafif ve güçlü olacak.',
                        'date' => '02 Kasım, 2025'
                    ]
                ];
            @endphp

            @foreach($newsItems as $index => $news)
            <div class="news-card" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <div class="news-image">
                    <i class="fas {{ $news['icon'] }} image-icon"></i>
                    <span class="news-source-tag"><i class="fas fa-newspaper"></i> {{ $news['source'] }}</span>
                </div>
                <div class="news-content">
                    <div class="news-meta">
                        <span><i class="fas fa-calendar-alt"></i> {{ $news['date'] }}</span>
                        <span><i class="fas fa-tag"></i> {{ $news['category'] }}</span>
                    </div>
                    <h3>{{ $news['title'] }}</h3>
                    <p class="excerpt">{{ $news['excerpt'] }}</p>
                    <a href="{{ route('news.show', $news['slug']) }}" class="read-more">
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
            <h2 style="font-size:34px;font-weight:800;margin-bottom:15px;color:#fff;">Teknoloji Haberleri <span style="color:#fff;">Takip Edin</span></h2>
            <p style="font-size:16px;margin-bottom:25px;opacity:0.9;max-width:500px;margin-left:auto;margin-right:auto;color:rgba(255,255,255,0.9);">
                En güncel teknoloji ve yazılım haberleri için bizi takip edin.
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
