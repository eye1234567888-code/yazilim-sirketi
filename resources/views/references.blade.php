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

    /* ===== REFERANS GRİD - 2 SÜTUN (SABİT) ===== */
    .references-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        max-width: 800px;
        margin: 0 auto;
        padding: 30px 0 70px;
        position: relative;
        z-index: 1;
    }

    .reference-item {
        background: rgba(255,255,255,0.02);
        border: 1px solid rgba(255,255,255,0.04);
        border-radius: 14px;
        padding: 25px 20px;
        text-align: center;
        transition: all 0.4s ease;
        cursor: default;
    }
    .reference-item:hover {
        transform: translateY(-5px);
        background: rgba(255,255,255,0.05);
        border-color: rgba(255,255,255,0.08);
    }

    .reference-item .icon {
        font-size: 34px;
        display: block;
        margin-bottom: 8px;
    }
    .reference-item h3 {
        font-size: 17px;
        font-weight: 600;
        color: #fff;
        margin-bottom: 2px;
    }
    .reference-item .sector {
        font-size: 13px;
        color: #94a3b8;
        font-weight: 500;
    }

    /* ===== RENKLER ===== */
    .reference-item:nth-child(1) .icon { color: #ff6b6b; }
    .reference-item:nth-child(1):hover { border-color: rgba(255,107,107,0.25); }

    .reference-item:nth-child(2) .icon { color: #ffd93d; }
    .reference-item:nth-child(2):hover { border-color: rgba(255,217,61,0.25); }

    .reference-item:nth-child(3) .icon { color: #6bcb77; }
    .reference-item:nth-child(3):hover { border-color: rgba(107,203,119,0.25); }

    .reference-item:nth-child(4) .icon { color: #4d96ff; }
    .reference-item:nth-child(4):hover { border-color: rgba(77,150,255,0.25); }

    .reference-item:nth-child(5) .icon { color: #a66cff; }
    .reference-item:nth-child(5):hover { border-color: rgba(166,108,255,0.25); }

    .reference-item:nth-child(6) .icon { color: #ff6b6b; }
    .reference-item:nth-child(6):hover { border-color: rgba(255,107,107,0.25); }

    .reference-item:nth-child(7) .icon { color: #ffd93d; }
    .reference-item:nth-child(7):hover { border-color: rgba(255,217,61,0.25); }

    .reference-item:nth-child(8) .icon { color: #6bcb77; }
    .reference-item:nth-child(8):hover { border-color: rgba(107,203,119,0.25); }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 992px) {
        .references-hero h1 {
            font-size: 38px;
        }
        .references-grid {
            gap: 15px;
            padding: 25px 0 50px;
            max-width: 100%;
        }
        .reference-item {
            padding: 20px 16px;
        }
        .reference-item .icon {
            font-size: 30px;
        }
        .reference-item h3 {
            font-size: 15px;
        }
        .reference-item .sector {
            font-size: 12px;
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
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            padding: 20px 0 40px;
            max-width: 100%;
        }
        .reference-item {
            padding: 16px 12px;
            border-radius: 12px;
        }
        .reference-item .icon {
            font-size: 24px;
            margin-bottom: 6px;
        }
        .reference-item h3 {
            font-size: 14px;
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
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            padding: 15px 0 30px;
        }
        .reference-item {
            padding: 14px 10px;
            border-radius: 10px;
        }
        .reference-item .icon {
            font-size: 20px;
            margin-bottom: 4px;
        }
        .reference-item h3 {
            font-size: 12px;
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

            <div class="reference-item" data-aos="fade-up" data-aos-delay="50">
                <span class="icon"><i class="fas fa-shopping-bag"></i></span>
                <h3>Şirket B</h3>
                <span class="sector">E-Ticaret</span>
            </div>

            <div class="reference-item" data-aos="fade-up" data-aos-delay="100">
                <span class="icon"><i class="fas fa-hospital"></i></span>
                <h3>Şirket C</h3>
                <span class="sector">Sağlık</span>
            </div>

            <div class="reference-item" data-aos="fade-up" data-aos-delay="150">
                <span class="icon"><i class="fas fa-truck"></i></span>
                <h3>Şirket D</h3>
                <span class="sector">Lojistik</span>
            </div>

            <div class="reference-item" data-aos="fade-up" data-aos-delay="200">
                <span class="icon"><i class="fas fa-graduation-cap"></i></span>
                <h3>Şirket E</h3>
                <span class="sector">Eğitim</span>
            </div>

            <div class="reference-item" data-aos="fade-up" data-aos-delay="250">
                <span class="icon"><i class="fas fa-utensils"></i></span>
                <h3>Şirket F</h3>
                <span class="sector">Gıda</span>
            </div>

            <div class="reference-item" data-aos="fade-up" data-aos-delay="300">
                <span class="icon"><i class="fas fa-film"></i></span>
                <h3>Şirket G</h3>
                <span class="sector">Medya</span>
            </div>

            <div class="reference-item" data-aos="fade-up" data-aos-delay="350">
                <span class="icon"><i class="fas fa-home"></i></span>
                <h3>Şirket H</h3>
                <span class="sector">Emlak</span>
            </div>
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
@endsection
