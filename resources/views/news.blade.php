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

    /* ===== RENKLER (NORMAL) ===== */
    .news-card:nth-child(1) {
        border-color: rgba(255,107,107,0.2);
        background: linear-gradient(135deg, rgba(255,107,107,0.04), rgba(255,107,107,0.01));
    }
    .news-card:nth-child(2) {
        border-color: rgba(54,197,240,0.2);
        background: linear-gradient(135deg, rgba(54,197,240,0.04), rgba(54,197,240,0.01));
    }
    .news-card:nth-child(3) {
        border-color: rgba(46,213,115,0.2);
        background: linear-gradient(135deg, rgba(46,213,115,0.04), rgba(46,213,115,0.01));
    }

    /* ===== RENKLER (HOVER) ===== */
    .news-card:nth-child(1):hover,
    .news-card:nth-child(1).touch-hover {
        border-color: #ff6b6b;
        background: linear-gradient(135deg, rgba(255,107,107,0.12), rgba(255,107,107,0.04));
        transform: translateY(-12px);
        box-shadow: 0 25px 70px rgba(255,107,107,0.25);
    }
    .news-card:nth-child(2):hover,
    .news-card:nth-child(2).touch-hover {
        border-color: #36c5f0;
        background: linear-gradient(135deg, rgba(54,197,240,0.12), rgba(54,197,240,0.04));
        transform: translateY(-12px);
        box-shadow: 0 25px 70px rgba(54,197,240,0.25);
    }
    .news-card:nth-child(3):hover,
    .news-card:nth-child(3).touch-hover {
        border-color: #2ed573;
        background: linear-gradient(135deg, rgba(46,213,115,0.12), rgba(46,213,115,0.04));
        transform: translateY(-12px);
        box-shadow: 0 25px 70px rgba(46,213,115,0.25);
    }

    /* ===== HABER GÖRSEL ===== */
    .news-card .news-image {
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

    .news-card:hover .news-image,
    .news-card.touch-hover .news-image {
        transform: scale(1.03);
    }

    .news-card .news-image .image-icon {
        transition: 0.6s;
        opacity: 0.5;
    }

    .news-card:hover .news-image .image-icon,
    .news-card.touch-hover .news-image .image-icon {
        transform: scale(1.15) rotate(8deg);
        opacity: 0.9;
    }

    /* ===== İKON RENKLERİ ===== */
    .news-card:nth-child(1) .news-image .image-icon { color: #ff6b6b; }
    .news-card:nth-child(2) .news-image .image-icon { color: #36c5f0; }
    .news-card:nth-child(3) .news-image .image-icon { color: #2ed573; }

    .news-card .news-image .news-source-tag {
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

    .news-card:nth-child(1):hover .news-source-tag,
    .news-card:nth-child(1).touch-hover .news-source-tag {
        background: #ff6b6b;
        color: #fff;
        border-color: #ff6b6b;
        box-shadow: 0 5px 25px rgba(255,107,107,0.3);
    }
    .news-card:nth-child(2):hover .news-source-tag,
    .news-card:nth-child(2).touch-hover .news-source-tag {
        background: #36c5f0;
        color: #fff;
        border-color: #36c5f0;
        box-shadow: 0 5px 25px rgba(54,197,240,0.3);
    }
    .news-card:nth-child(3):hover .news-source-tag,
    .news-card:nth-child(3).touch-hover .news-source-tag {
        background: #2ed573;
        color: #fff;
        border-color: #2ed573;
        box-shadow: 0 5px 25px rgba(46,213,115,0.3);
    }

    /* ===== HABER İÇERİK ===== */
    .news-card .news-content {
        padding: 25px;
        transition: 0.4s;
    }

    .news-card:hover .news-content,
    .news-card.touch-hover .news-content {
        transform: translateY(-2px);
    }

    .news-card .news-content .news-meta {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 12px;
        font-size: 12px;
        color: #64748b;
        flex-wrap: wrap;
        transition: 0.3s;
    }

    .news-card .news-content .news-meta span {
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .news-card .news-content .news-meta span i {
        font-size: 12px;
        transition: 0.3s;
    }

    .news-card:nth-child(1):hover .news-meta span i,
    .news-card:nth-child(1).touch-hover .news-meta span i { color: #ff6b6b; }
    .news-card:nth-child(2):hover .news-meta span i,
    .news-card:nth-child(2).touch-hover .news-meta span i { color: #36c5f0; }
    .news-card:nth-child(3):hover .news-meta span i,
    .news-card:nth-child(3).touch-hover .news-meta span i { color: #2ed573; }

    .news-card .news-content h3 {
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

    .news-card:nth-child(1):hover h3,
    .news-card:nth-child(1).touch-hover h3 { color: #ff6b6b; }
    .news-card:nth-child(2):hover h3,
    .news-card:nth-child(2).touch-hover h3 { color: #36c5f0; }
    .news-card:nth-child(3):hover h3,
    .news-card:nth-child(3).touch-hover h3 { color: #2ed573; }

    .news-card .news-content .excerpt {
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

    .news-card:nth-child(1):hover .excerpt,
    .news-card:nth-child(1).touch-hover .excerpt { color: #c8d0e0; }
    .news-card:nth-child(2):hover .excerpt,
    .news-card:nth-child(2).touch-hover .excerpt { color: #c8d0e0; }
    .news-card:nth-child(3):hover .excerpt,
    .news-card:nth-child(3).touch-hover .excerpt { color: #c8d0e0; }

    .news-card .news-content .read-more {
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

    .news-card:nth-child(1):hover .read-more,
    .news-card:nth-child(1).touch-hover .read-more {
        border-color: #ff6b6b;
        color: #ff6b6b;
        background: rgba(255,107,107,0.05);
        box-shadow: 0 5px 25px rgba(255,107,107,0.1);
    }
    .news-card:nth-child(2):hover .read-more,
    .news-card:nth-child(2).touch-hover .read-more {
        border-color: #36c5f0;
        color: #36c5f0;
        background: rgba(54,197,240,0.05);
        box-shadow: 0 5px 25px rgba(54,197,240,0.1);
    }
    .news-card:nth-child(3):hover .read-more,
    .news-card:nth-child(3).touch-hover .read-more {
        border-color: #2ed573;
        color: #2ed573;
        background: rgba(46,213,115,0.05);
        box-shadow: 0 5px 25px rgba(46,213,115,0.1);
    }

    .news-card .news-content .read-more i {
        transition: 0.3s;
    }
    .news-card .news-content .read-more:hover i {
        transform: translateX(5px);
    }

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
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            padding: 20px 0 60px;
        }
        .news-card .news-image {
            height: 140px;
            font-size: 36px;
        }
        .news-card .news-content {
            padding: 16px;
        }
        .news-card .news-content h3 {
            font-size: 14px;
        }
        .news-card .news-content .excerpt {
            font-size: 12px;
            -webkit-line-clamp: 2;
        }
        .news-card .news-content .read-more {
            font-size: 11px;
            padding: 5px 14px;
        }
        .news-card .news-content .news-meta {
            font-size: 10px;
            gap: 10px;
        }
        .news-card .news-image .news-source-tag {
            font-size: 9px;
            padding: 3px 10px;
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
            gap: 12px;
            padding: 15px 0 40px;
        }
        .news-card {
            border-radius: 16px;
        }
        .news-card .news-image {
            height: 110px;
            font-size: 28px;
        }
        .news-card .news-content {
            padding: 12px;
        }
        .news-card .news-content h3 {
            font-size: 13px;
        }
        .news-card .news-content .excerpt {
            font-size: 11px;
        }
        .news-card .news-content .read-more {
            font-size: 10px;
            padding: 4px 12px;
        }
        .news-card .news-content .news-meta {
            font-size: 9px;
            gap: 8px;
        }
        .news-card .news-image .news-source-tag {
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
                        Haberi Oku <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ===== İLETİŞİME GEÇİN ===== -->
<section class="section-padding" id="cta" style="background:linear-gradient(135deg, #ff6b6b, #ee5a24, #ff6b6b);background-size:200% 200%;animation:btnGradient 4s ease infinite;border-top:none;border-bottom:none;position:relative;overflow:hidden;">
    <div style="position:absolute;top:-50%;right:-20%;width:600px;height:600px;background:radial-gradient(circle,rgba(255,255,255,0.05),transparent 70%);border-radius:50%;pointer-events:none;"></div>
    <div style="position:absolute;bottom:-50%;left:-20%;width:500px;height:500px;background:radial-gradient(circle,rgba(255,255,255,0.05),transparent 70%);border-radius:50%;pointer-events:none;"></div>

    <div class="container">
        <div class="cta-content" data-aos="fade-up" style="position:relative;z-index:1;text-align:center;">
            <h2 style="font-size:42px;font-weight:800;margin-bottom:20px;color:#fff;">Özel Çözümler <span style="color:#fff;">İçin Bize Ulaşın</span></h2>
            <p style="font-size:18px;margin-bottom:30px;opacity:0.9;max-width:600px;margin-left:auto;margin-right:auto;color:rgba(255,255,255,0.9);">
                İhtiyaçlarınıza özel yazılım çözümleri için hemen bizimle iletişime geçin.
            </p>
            <div style="display:flex;gap:20px;justify-content:center;flex-wrap:wrap;">
                <a href="{{ route('contact') }}" style="background:#fff;color:#0a0e1a !important;padding:16px 45px;border-radius:60px;text-decoration:none;font-weight:600;transition:all 0.4s cubic-bezier(0.175,0.885,0.32,1.275);display:inline-flex;align-items:center;gap:12px;font-size:17px;border:none;cursor:pointer;box-shadow:0 15px 50px rgba(255,255,255,0.2);" onmouseover="this.style.transform='translateY(-5px) scale(1.05)';this.style.boxShadow='0 25px 70px rgba(255,255,255,0.3)'" onmouseout="this.style.transform='translateY(0) scale(1)';this.style.boxShadow='0 15px 50px rgba(255,255,255,0.2)'">
                    <i class="fas fa-paper-plane"></i> Hemen İletişim
                </a>
                <a href="tel:+905551234567" style="background:rgba(255,255,255,0.12);color:#fff !important;padding:16px 45px;border-radius:60px;text-decoration:none;font-weight:600;transition:all 0.4s cubic-bezier(0.175,0.885,0.32,1.275);display:inline-flex;align-items:center;gap:12px;font-size:17px;backdrop-filter:blur(10px);border:1px solid rgba(255,255,255,0.15);" onmouseover="this.style.background='rgba(255,255,255,0.2)';this.style.transform='translateY(-5px) scale(1.05)';this.style.borderColor='rgba(255,255,255,0.3)'" onmouseout="this.style.background='rgba(255,255,255,0.12)';this.style.transform='translateY(0) scale(1)';this.style.borderColor='rgba(255,255,255,0.15)'">
                    <i class="fas fa-phone"></i> +90 (555) 123 45 67
                </a>
            </div>
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
            padding: 50px 0 !important;
        }
        #cta .cta-content h2 {
            font-size: 28px !important;
        }
        #cta .cta-content p {
            font-size: 15px !important;
            padding: 0 15px;
        }
        #cta .cta-content div {
            flex-direction: column !important;
            align-items: center !important;
        }
        #cta .cta-content a {
            width: 100% !important;
            max-width: 320px !important;
            justify-content: center !important;
            padding: 14px 30px !important;
            font-size: 15px !important;
        }
    }
    @media (max-width: 480px) {
        #cta .cta-content h2 {
            font-size: 22px !important;
        }
        #cta .cta-content a {
            padding: 12px 20px !important;
            font-size: 13px !important;
            max-width: 280px !important;
        }
    }
</style>

@push('scripts')
<script>
    document.querySelectorAll('.news-card').forEach(card => {
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
                const parent = this.closest('.news-card');
                parent.classList.remove('touch-hover');
            });
        });
    });
</script>
@endpush

@endsection
