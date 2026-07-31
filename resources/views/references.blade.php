@extends('layouts.app')

@section('title', 'Referanslarımız - Yazılım Şirketi')

@section('content')
<style>
    .references-hero {
        padding: 140px 0 40px;
        text-align: center;
        position: relative;
        z-index: 1;
    }
    .references-hero h1 {
        font-size: 48px;
        font-weight: 900;
        margin-bottom: 10px;
    }
    .references-hero h1 span {
        background: linear-gradient(135deg, #ff6b6b, #ffd93d, #6bcb77, #4d96ff);
        background-size: 300% 300%;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: rainbowText 4s ease infinite;
    }
    .references-hero p {
        color: #94a3b8;
        font-size: 17px;
        max-width: 550px;
        margin: 0 auto;
        line-height: 1.7;
    }

    /* ===== REFERANS GRİD ===== */
    .references-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 25px;
        padding: 30px 0 70px;
        position: relative;
        z-index: 1;
    }

    .reference-item {
        background: rgba(255,255,255,0.03);
        border: 1px solid rgba(255,255,255,0.05);
        border-radius: 16px;
        padding: 30px 20px;
        text-align: center;
        transition: all 0.4s ease;
        cursor: default;
    }
    .reference-item:hover {
        transform: translateY(-8px);
        background: rgba(255,255,255,0.06);
        border-color: rgba(255,255,255,0.1);
    }

    .reference-item .icon {
        font-size: 40px;
        margin-bottom: 12px;
        display: block;
    }
    .reference-item h3 {
        font-size: 18px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 4px;
    }
    .reference-item .sector {
        font-size: 12px;
        color: #94a3b8;
        font-weight: 500;
    }

    /* ===== RENKLER ===== */
    .reference-item:nth-child(1) .icon { color: #ff6b6b; }
    .reference-item:nth-child(1):hover { border-color: rgba(255,107,107,0.3); }

    .reference-item:nth-child(2) .icon { color: #ffd93d; }
    .reference-item:nth-child(2):hover { border-color: rgba(255,217,61,0.3); }

    .reference-item:nth-child(3) .icon { color: #6bcb77; }
    .reference-item:nth-child(3):hover { border-color: rgba(107,203,119,0.3); }

    .reference-item:nth-child(4) .icon { color: #4d96ff; }
    .reference-item:nth-child(4):hover { border-color: rgba(77,150,255,0.3); }

    .reference-item:nth-child(5) .icon { color: #a66cff; }
    .reference-item:nth-child(5):hover { border-color: rgba(166,108,255,0.3); }

    .reference-item:nth-child(6) .icon { color: #ff6b6b; }
    .reference-item:nth-child(6):hover { border-color: rgba(255,107,107,0.3); }

    .reference-item:nth-child(7) .icon { color: #ffd93d; }
    .reference-item:nth-child(7):hover { border-color: rgba(255,217,61,0.3); }

    .reference-item:nth-child(8) .icon { color: #6bcb77; }
    .reference-item:nth-child(8):hover { border-color: rgba(107,203,119,0.3); }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 992px) {
        .references-grid {
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        .references-hero h1 {
            font-size: 38px;
        }
    }

    @media (max-width: 768px) {
        .references-hero {
            padding: 100px 0 20px;
        }
        .references-hero h1 {
            font-size: 30px;
        }
        .references-hero p {
            font-size: 15px;
            padding: 0 15px;
        }
        .references-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            padding: 20px 0 50px;
        }
        .reference-item {
            padding: 20px 15px;
        }
        .reference-item .icon {
            font-size: 30px;
        }
        .reference-item h3 {
            font-size: 15px;
        }
        .reference-item .sector {
            font-size: 11px;
        }
    }

    @media (max-width: 480px) {
        .references-hero h1 {
            font-size: 24px;
        }
        .references-hero p {
            font-size: 13px;
        }
        .references-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
            padding: 15px 0 40px;
        }
        .reference-item {
            padding: 16px 12px;
            border-radius: 12px;
        }
        .reference-item .icon {
            font-size: 24px;
            margin-bottom: 8px;
        }
        .reference-item h3 {
            font-size: 13px;
        }
        .reference-item .sector {
            font-size: 10px;
        }
    }

    @keyframes rainbowText {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
</style>

<!-- ===== HERO ===== -->
<section class="references-hero">
    <div class="container">
        <div class="section-tag" style="display:inline-block;background:linear-gradient(135deg,rgba(255,107,107,0.08),rgba(255,217,61,0.08));padding:5px 20px;border-radius:50px;font-size:11px;color:#ffd93d;margin-bottom:12px;border:1px solid rgba(255,217,61,0.06);letter-spacing:2px;text-transform:uppercase;">
            <i class="fas fa-star"></i> Referanslar
        </div>
        <h1>Bize <span>Güvenenler</span></h1>
        <p>Başarılı projelere imza attığımız markalar.</p>
    </div>
</section>

<!-- ===== REFERANS KARTLARI ===== -->
<section class="references-section">
    <div class="container">
        <div class="references-grid">
            <div class="reference-item" data-aos="fade-up" data-aos-delay="0">
                <span class="icon"><i class="fas fa-building"></i></span>
                <h3>Şirket A</h3>
                <span class="sector">Teknoloji</span>
            </div>

            <div class="reference-item" data-aos="fade-up" data-aos-delay="100">
                <span class="icon"><i class="fas fa-shopping-bag"></i></span>
                <h3>Şirket B</h3>
                <span class="sector">E-Ticaret</span>
            </div>

            <div class="reference-item" data-aos="fade-up" data-aos-delay="200">
                <span class="icon"><i class="fas fa-hospital"></i></span>
                <h3>Şirket C</h3>
                <span class="sector">Sağlık</span>
            </div>

            <div class="reference-item" data-aos="fade-up" data-aos-delay="300">
                <span class="icon"><i class="fas fa-truck"></i></span>
                <h3>Şirket D</h3>
                <span class="sector">Lojistik</span>
            </div>

            <div class="reference-item" data-aos="fade-up" data-aos-delay="400">
                <span class="icon"><i class="fas fa-graduation-cap"></i></span>
                <h3>Şirket E</h3>
                <span class="sector">Eğitim</span>
            </div>

            <div class="reference-item" data-aos="fade-up" data-aos-delay="500">
                <span class="icon"><i class="fas fa-utensils"></i></span>
                <h3>Şirket F</h3>
                <span class="sector">Gıda</span>
            </div>

            <div class="reference-item" data-aos="fade-up" data-aos-delay="600">
                <span class="icon"><i class="fas fa-film"></i></span>
                <h3>Şirket G</h3>
                <span class="sector">Medya</span>
            </div>

            <div class="reference-item" data-aos="fade-up" data-aos-delay="700">
                <span class="icon"><i class="fas fa-home"></i></span>
                <h3>Şirket H</h3>
                <span class="sector">Emlak</span>
            </div>
        </div>
    </div>
</section>

<!-- ===== CTA ===== -->
<section id="cta" style="padding:60px 0;position:relative;z-index:1;background:linear-gradient(135deg,#ff6b6b,#ee5a24,#ff6b6b) !important;background-size:200% 200% !important;animation:btnGradient 4s ease infinite !important;border-top:none !important;border-bottom:none !important;">
    <div class="container">
        <div class="cta-content" style="text-align:center;padding:0;position:relative;z-index:1;">
            <h2 style="font-size:34px;font-weight:800;margin-bottom:15px;color:#fff;">Siz de <span style="color:#fff;">Aramıza Katılın</span></h2>
            <p style="font-size:16px;margin-bottom:25px;opacity:0.9;max-width:500px;margin-left:auto;margin-right:auto;color:rgba(255,255,255,0.9);">
                İşletmenizi dijital dönüşümde bir adım öne taşıyalım.
            </p>
            <a href="{{ route('contact') }}" class="btn-white" style="background:#fff;color:#0a0e1a !important;padding:12px 35px;border-radius:50px;text-decoration:none;font-weight:600;transition:all 0.3s ease;display:inline-block;font-size:15px;">
                <i class="fas fa-phone"></i> İletişime Geç
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
