@extends('layouts.app')

@section('title', 'Hizmetlerimiz - Yazılım Şirketi')

@section('content')
<style>
    .services-hero {
        padding: 140px 0 60px;
        text-align: center;
        position: relative;
        z-index: 1;
    }
    .services-hero h1 {
        font-size: 52px;
        font-weight: 900;
        margin-bottom: 15px;
    }
    .services-hero h1 span {
        background: linear-gradient(135deg, #ff6b6b, #ffd93d, #6bcb77, #4d96ff);
        background-size: 300% 300%;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: rainbowText 4s ease infinite;
    }
    .services-hero p {
        color: #94a3b8;
        font-size: 18px;
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.8;
    }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        padding: 40px 0 80px;
        position: relative;
        z-index: 1;
    }

    .service-card {
        border-radius: 20px;
        padding: 35px 30px;
        transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
        text-align: center;
        border: 1px solid rgba(255,255,255,0.04);
        background: rgba(255,255,255,0.02);
        cursor: pointer;
        -webkit-tap-highlight-color: transparent;
        touch-action: manipulation;
    }

    /* ===== RENKLER (NORMAL) ===== */
    .service-card:nth-child(1) { background: rgba(255,107,107,0.04); border-color: rgba(255,107,107,0.08); }
    .service-card:nth-child(2) { background: rgba(255,217,61,0.04); border-color: rgba(255,217,61,0.08); }
    .service-card:nth-child(3) { background: rgba(107,203,119,0.04); border-color: rgba(107,203,119,0.08); }
    .service-card:nth-child(4) { background: rgba(77,150,255,0.04); border-color: rgba(77,150,255,0.08); }
    .service-card:nth-child(5) { background: rgba(166,108,255,0.04); border-color: rgba(166,108,255,0.08); }
    .service-card:nth-child(6) { background: rgba(255,107,107,0.04); border-color: rgba(255,107,107,0.08); }

    /* ===== RENKLER (HOVER) ===== */
    .service-card:nth-child(1):hover,
    .service-card:nth-child(1).touch-hover { background: #ff6b6b !important; border-color: #ff6b6b !important; transform: translateY(-10px); box-shadow: 0 20px 60px rgba(255,107,107,0.4); }
    .service-card:nth-child(2):hover,
    .service-card:nth-child(2).touch-hover { background: #ffd93d !important; border-color: #ffd93d !important; transform: translateY(-10px); box-shadow: 0 20px 60px rgba(255,217,61,0.4); }
    .service-card:nth-child(3):hover,
    .service-card:nth-child(3).touch-hover { background: #6bcb77 !important; border-color: #6bcb77 !important; transform: translateY(-10px); box-shadow: 0 20px 60px rgba(107,203,119,0.4); }
    .service-card:nth-child(4):hover,
    .service-card:nth-child(4).touch-hover { background: #4d96ff !important; border-color: #4d96ff !important; transform: translateY(-10px); box-shadow: 0 20px 60px rgba(77,150,255,0.4); }
    .service-card:nth-child(5):hover,
    .service-card:nth-child(5).touch-hover { background: #a66cff !important; border-color: #a66cff !important; transform: translateY(-10px); box-shadow: 0 20px 60px rgba(166,108,255,0.4); }
    .service-card:nth-child(6):hover,
    .service-card:nth-child(6).touch-hover { background: #ff6b6b !important; border-color: #ff6b6b !important; transform: translateY(-10px); box-shadow: 0 20px 60px rgba(255,107,107,0.4); }

    .service-card .icon {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 18px;
        font-size: 30px;
        transition: 0.4s;
        background: rgba(255,255,255,0.03);
    }

    .service-card:nth-child(1) .icon { color: #ff6b6b; }
    .service-card:nth-child(2) .icon { color: #ffd93d; }
    .service-card:nth-child(3) .icon { color: #6bcb77; }
    .service-card:nth-child(4) .icon { color: #4d96ff; }
    .service-card:nth-child(5) .icon { color: #a66cff; }
    .service-card:nth-child(6) .icon { color: #ff6b6b; }

    .service-card:nth-child(1):hover .icon,
    .service-card:nth-child(1).touch-hover .icon { color: #fff !important; background: rgba(255,255,255,0.15); }
    .service-card:nth-child(2):hover .icon,
    .service-card:nth-child(2).touch-hover .icon { color: #0a0e1a !important; background: rgba(0,0,0,0.1); }
    .service-card:nth-child(3):hover .icon,
    .service-card:nth-child(3).touch-hover .icon { color: #0a0e1a !important; background: rgba(0,0,0,0.1); }
    .service-card:nth-child(4):hover .icon,
    .service-card:nth-child(4).touch-hover .icon { color: #fff !important; background: rgba(255,255,255,0.15); }
    .service-card:nth-child(5):hover .icon,
    .service-card:nth-child(5).touch-hover .icon { color: #fff !important; background: rgba(255,255,255,0.15); }
    .service-card:nth-child(6):hover .icon,
    .service-card:nth-child(6).touch-hover .icon { color: #fff !important; background: rgba(255,255,255,0.15); }

    .service-card:hover .icon,
    .service-card.touch-hover .icon {
        transform: scale(1.15) rotate(12deg);
    }

    .service-card h3 {
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 10px;
        color: #fff;
        transition: 0.3s;
    }

    .service-card:nth-child(1):hover h3,
    .service-card:nth-child(1).touch-hover h3 { color: #fff !important; }
    .service-card:nth-child(2):hover h3,
    .service-card:nth-child(2).touch-hover h3 { color: #0a0e1a !important; }
    .service-card:nth-child(3):hover h3,
    .service-card:nth-child(3).touch-hover h3 { color: #0a0e1a !important; }
    .service-card:nth-child(4):hover h3,
    .service-card:nth-child(4).touch-hover h3 { color: #fff !important; }
    .service-card:nth-child(5):hover h3,
    .service-card:nth-child(5).touch-hover h3 { color: #fff !important; }
    .service-card:nth-child(6):hover h3,
    .service-card:nth-child(6).touch-hover h3 { color: #fff !important; }

    .service-card p {
        color: #94a3b8;
        font-size: 14px;
        line-height: 1.7;
        margin-bottom: 18px;
        transition: 0.3s;
    }

    .service-card:nth-child(1):hover p,
    .service-card:nth-child(1).touch-hover p { color: rgba(255,255,255,0.85) !important; }
    .service-card:nth-child(2):hover p,
    .service-card:nth-child(2).touch-hover p { color: rgba(0,0,0,0.7) !important; }
    .service-card:nth-child(3):hover p,
    .service-card:nth-child(3).touch-hover p { color: rgba(0,0,0,0.7) !important; }
    .service-card:nth-child(4):hover p,
    .service-card:nth-child(4).touch-hover p { color: rgba(255,255,255,0.85) !important; }
    .service-card:nth-child(5):hover p,
    .service-card:nth-child(5).touch-hover p { color: rgba(255,255,255,0.85) !important; }
    .service-card:nth-child(6):hover p,
    .service-card:nth-child(6).touch-hover p { color: rgba(255,255,255,0.85) !important; }

    .service-card .btn-service {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 22px;
        border: 2px solid rgba(255,107,107,0.2);
        border-radius: 50px;
        font-size: 13px;
        font-weight: 600;
        transition: all 0.3s ease;
        text-decoration: none;
        background: transparent;
    }
    .service-card:nth-child(1) .btn-service { color: #ff6b6b; border-color: rgba(255,107,107,0.2); }
    .service-card:nth-child(2) .btn-service { color: #ffd93d; border-color: rgba(255,217,61,0.2); }
    .service-card:nth-child(3) .btn-service { color: #6bcb77; border-color: rgba(107,203,119,0.2); }
    .service-card:nth-child(4) .btn-service { color: #4d96ff; border-color: rgba(77,150,255,0.2); }
    .service-card:nth-child(5) .btn-service { color: #a66cff; border-color: rgba(166,108,255,0.2); }
    .service-card:nth-child(6) .btn-service { color: #ff6b6b; border-color: rgba(255,107,107,0.2); }

    .service-card:nth-child(1):hover .btn-service,
    .service-card:nth-child(1).touch-hover .btn-service { background: #fff; color: #ff6b6b !important; border-color: #fff; }
    .service-card:nth-child(2):hover .btn-service,
    .service-card:nth-child(2).touch-hover .btn-service { background: #0a0e1a; color: #ffd93d !important; border-color: #0a0e1a; }
    .service-card:nth-child(3):hover .btn-service,
    .service-card:nth-child(3).touch-hover .btn-service { background: #0a0e1a; color: #6bcb77 !important; border-color: #0a0e1a; }
    .service-card:nth-child(4):hover .btn-service,
    .service-card:nth-child(4).touch-hover .btn-service { background: #fff; color: #4d96ff !important; border-color: #fff; }
    .service-card:nth-child(5):hover .btn-service,
    .service-card:nth-child(5).touch-hover .btn-service { background: #fff; color: #a66cff !important; border-color: #fff; }
    .service-card:nth-child(6):hover .btn-service,
    .service-card:nth-child(6).touch-hover .btn-service { background: #fff; color: #ff6b6b !important; border-color: #fff; }

    .service-card .btn-service i {
        transition: 0.3s;
    }
    .service-card .btn-service:hover i {
        transform: translateX(4px);
    }

    .service-card .badge {
        position: absolute;
        top: 15px;
        right: 15px;
        padding: 4px 14px;
        border-radius: 50px;
        font-size: 10px;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        z-index: 2;
        transition: 0.3s;
    }

    .service-card:nth-child(1) .badge { background: rgba(255,107,107,0.15); color: #ff6b6b; }
    .service-card:nth-child(2) .badge { background: rgba(255,217,61,0.15); color: #ffd93d; }
    .service-card:nth-child(3) .badge { background: rgba(107,203,119,0.15); color: #6bcb77; }
    .service-card:nth-child(4) .badge { background: rgba(77,150,255,0.15); color: #4d96ff; }
    .service-card:nth-child(5) .badge { background: rgba(166,108,255,0.15); color: #a66cff; }
    .service-card:nth-child(6) .badge { background: rgba(255,107,107,0.15); color: #ff6b6b; }

    .service-card:nth-child(1):hover .badge,
    .service-card:nth-child(1).touch-hover .badge { background: rgba(255,255,255,0.15); color: #fff; }
    .service-card:nth-child(2):hover .badge,
    .service-card:nth-child(2).touch-hover .badge { background: rgba(0,0,0,0.1); color: #0a0e1a; }
    .service-card:nth-child(3):hover .badge,
    .service-card:nth-child(3).touch-hover .badge { background: rgba(0,0,0,0.1); color: #0a0e1a; }
    .service-card:nth-child(4):hover .badge,
    .service-card:nth-child(4).touch-hover .badge { background: rgba(255,255,255,0.15); color: #fff; }
    .service-card:nth-child(5):hover .badge,
    .service-card:nth-child(5).touch-hover .badge { background: rgba(255,255,255,0.15); color: #fff; }
    .service-card:nth-child(6):hover .badge,
    .service-card:nth-child(6).touch-hover .badge { background: rgba(255,255,255,0.15); color: #fff; }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 992px) {
        .services-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
        .services-hero h1 {
            font-size: 40px;
        }
    }

    @media (max-width: 768px) {
        .services-hero {
            padding: 100px 0 30px;
        }
        .services-hero h1 {
            font-size: 32px;
        }
        .services-hero p {
            font-size: 15px;
            padding: 0 15px;
        }
        .services-grid {
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            padding: 20px 0 60px;
        }
        .service-card {
            padding: 20px 14px;
            border-radius: 16px;
        }
        .service-card .icon {
            width: 50px;
            height: 50px;
            font-size: 22px;
            margin-bottom: 12px;
        }
        .service-card h3 {
            font-size: 14px;
            margin-bottom: 6px;
        }
        .service-card p {
            font-size: 12px;
            line-height: 1.5;
            margin-bottom: 12px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .service-card .btn-service {
            font-size: 11px;
            padding: 4px 12px;
        }
        .service-card .badge {
            font-size: 8px;
            padding: 2px 10px;
            top: 10px;
            right: 10px;
        }
    }

    @media (max-width: 480px) {
        .services-hero h1 {
            font-size: 26px;
        }
        .services-hero p {
            font-size: 14px;
        }
        .services-grid {
            gap: 12px;
            padding: 15px 0 40px;
        }
        .service-card {
            padding: 16px 10px;
            border-radius: 14px;
        }
        .service-card .icon {
            width: 40px;
            height: 40px;
            font-size: 18px;
            margin-bottom: 8px;
        }
        .service-card h3 {
            font-size: 12px;
            margin-bottom: 4px;
        }
        .service-card p {
            font-size: 10px;
            margin-bottom: 8px;
        }
        .service-card .btn-service {
            font-size: 10px;
            padding: 3px 10px;
        }
        .service-card .badge {
            font-size: 7px;
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
<section class="services-hero">
    <div class="container">
        <div class="section-tag" style="display:inline-block;background:linear-gradient(135deg,rgba(255,107,107,0.08),rgba(255,217,61,0.08));padding:6px 22px;border-radius:50px;font-size:12px;color:#ffd93d;margin-bottom:15px;border:1px solid rgba(255,217,61,0.06);letter-spacing:2px;text-transform:uppercase;">
            <i class="fas fa-cogs"></i> Hizmetlerimiz
        </div>
        <h1>Profesyonel <span>Yazılım</span> Hizmetleri</h1>
        <p>İşletmenizi dijital dönüşümde bir adım öne taşıyacak yenilikçi yazılım çözümlerimizle yanınızdayız.</p>
    </div>
</section>

<!-- ===== HİZMET KARTLARI ===== -->
<section class="services-section">
    <div class="container">
        <div class="services-grid">
            <!-- CRM Çözümleri -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="0">
                <span class="badge">Popüler</span>
                <div class="icon"><i class="fas fa-users"></i></div>
                <h3>CRM Çözümleri</h3>
                <p>Müşteri ilişkilerinizi yönetin, satış süreçlerinizi optimize edin ve müşteri memnuniyetini artırın.</p>
                <a href="{{ route('crm') }}" class="btn-service">Detaylı İncele <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Sektörel Çözümler -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                <span class="badge">Özel</span>
                <div class="icon"><i class="fas fa-industry"></i></div>
                <h3>Sektörel Çözümler</h3>
                <p>Her sektöre özel yazılım çözümleri ile iş süreçlerinizi dijitalleştirin ve verimliliğinizi artırın.</p>
                <a href="{{ route('sektorel') }}" class="btn-service">Detaylı İncele <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- E-Ticaret -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                <span class="badge">Yeni</span>
                <div class="icon"><i class="fas fa-shopping-cart"></i></div>
                <h3>E-Ticaret</h3>
                <p>Güçlü altyapılı, kullanıcı dostu ve dönüşüm odaklı e-ticaret platformları ile online satışınızı başlatın.</p>
                <a href="{{ route('eticaret') }}" class="btn-service">Detaylı İncele <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- E-Dönüşüm -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                <div class="icon"><i class="fas fa-sync-alt"></i></div>
                <h3>E-Dönüşüm</h3>
                <p>Dijital dönüşüm sürecinizde size rehberlik ediyor, iş süreçlerinizi modern teknolojilerle buluşturuyoruz.</p>
                <a href="{{ route('edonusum') }}" class="btn-service">Detaylı İncele <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- ERP Çözümleri -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="400">
                <div class="icon"><i class="fas fa-cubes"></i></div>
                <h3>ERP Çözümleri</h3>
                <p>Tüm iş süreçlerinizi tek bir platformda yönetin, operasyonel verimliliğinizi maksimuma çıkarın.</p>
                <a href="{{ route('erp') }}" class="btn-service">Detaylı İncele <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Mobil Çözümler -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="500">
                <div class="icon"><i class="fas fa-mobile-alt"></i></div>
                <h3>Mobil Çözümler</h3>
                <p>iOS ve Android platformları için yüksek performanslı, kullanıcı deneyimi odaklı mobil uygulamalar geliştiriyoruz.</p>
                <a href="{{ route('mobil') }}" class="btn-service">Detaylı İncele <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- ===== CTA ===== -->
<section id="cta" style="padding:80px 0;position:relative;z-index:1;background:linear-gradient(135deg,#ff6b6b,#ee5a24,#ff6b6b) !important;background-size:200% 200% !important;animation:btnGradient 4s ease infinite !important;border-top:none !important;border-bottom:none !important;">
    <div class="container">
        <div class="cta-content" style="text-align:center;padding:0;position:relative;z-index:1;">
            <h2 style="font-size:42px;font-weight:800;margin-bottom:20px;color:#fff;">Özel Çözümler <span style="color:#fff;">İçin Bize Ulaşın</span></h2>
            <p style="font-size:18px;margin-bottom:30px;opacity:0.9;max-width:600px;margin-left:auto;margin-right:auto;color:rgba(255,255,255,0.9);">
                İhtiyaçlarınıza özel yazılım çözümleri için hemen bizimle iletişime geçin.
            </p>
            <a href="{{ route('contact') }}" class="btn-white" style="background:#fff;color:#0a0e1a !important;padding:14px 40px;border-radius:50px;text-decoration:none;font-weight:600;transition:all 0.3s ease;display:inline-block;font-size:16px;">
                <i class="fas fa-phone"></i> Hemen Ara
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
            padding: 50px 0 !important;
        }
        #cta .cta-content h2 {
            font-size: 28px !important;
        }
        #cta .cta-content p {
            font-size: 15px !important;
            padding: 0 15px;
        }
        #cta .btn-white {
            padding: 12px 30px !important;
            font-size: 14px !important;
        }
    }
    @media (max-width: 480px) {
        #cta .cta-content h2 {
            font-size: 22px !important;
        }
    }
</style>

@push('scripts')
<script>
    document.querySelectorAll('.service-card').forEach(card => {
        // Desktop mouse efekti
        card.addEventListener('mousemove', function(e) {
            const rect = this.getBoundingClientRect();
            const x = ((e.clientX - rect.left) / rect.width * 100);
            const y = ((e.clientY - rect.top) / rect.height * 100);
            this.style.setProperty('--mouse-x', x + '%');
            this.style.setProperty('--mouse-y', y + '%');
        });

        // ===== MOBİL TOUCH HOVER (parmak üstüne gelince) =====
        card.addEventListener('touchstart', function(e) {
            // Sadece dokunma anında aktif et
            this.classList.add('touch-hover');
        });

        card.addEventListener('touchend', function(e) {
            // Dokunma bitince aktifliği kaldır (butona tıklamak için)
            setTimeout(() => {
                this.classList.remove('touch-hover');
            }, 300);
        });

        card.addEventListener('touchcancel', function(e) {
            // Dokunma iptal olursa aktifliği kaldır
            this.classList.remove('touch-hover');
        });

        // Kart içindeki butona tıklanırken hover'ı kaldır
        card.querySelectorAll('.btn-service').forEach(btn => {
            btn.addEventListener('touchstart', function(e) {
                e.stopPropagation();
                const parent = this.closest('.service-card');
                parent.classList.remove('touch-hover');
            });
        });
    });
</script>
@endpush

@endsection
