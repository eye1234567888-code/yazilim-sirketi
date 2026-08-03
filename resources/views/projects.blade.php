@extends('layouts.app')

@section('title', 'Projelerimiz - Yazılım Şirketi')

@section('content')
<style>
    .projects-hero {
        padding: 140px 0 40px;
        text-align: center;
        position: relative;
        z-index: 1;
    }
    .projects-hero h1 {
        font-size: 48px;
        font-weight: 900;
        margin-bottom: 10px;
    }
    .projects-hero h1 span {
        background: linear-gradient(135deg, #ff6b6b, #ffd93d, #6bcb77, #4d96ff);
        background-size: 300% 300%;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: rainbowText 4s ease infinite;
    }
    .projects-hero p {
        color: #94a3b8;
        font-size: 17px;
        max-width: 550px;
        margin: 0 auto;
        line-height: 1.7;
    }

    .projects-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        padding: 40px 0 80px;
        position: relative;
        z-index: 1;
    }

    .project-card {
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

    /* ===== GECE TEMASI RENKLERİ (NORMAL) ===== */
    .project-card:nth-child(1) { background: rgba(255,107,107,0.04); border-color: rgba(255,107,107,0.08); }
    .project-card:nth-child(2) { background: rgba(255,215,0,0.04); border-color: rgba(255,215,0,0.08); }
    .project-card:nth-child(3) { background: rgba(0,206,209,0.04); border-color: rgba(0,206,209,0.08); }
    .project-card:nth-child(4) { background: rgba(100,149,237,0.04); border-color: rgba(100,149,237,0.08); }
    .project-card:nth-child(5) { background: rgba(218,112,214,0.04); border-color: rgba(218,112,214,0.08); }
    .project-card:nth-child(6) { background: rgba(255,107,107,0.04); border-color: rgba(255,107,107,0.08); }

    /* ===== GECE TEMASI RENKLERİ (HOVER) - YUMUŞAK GEÇİŞ ===== */
    .project-card:nth-child(1):hover,
    .project-card:nth-child(1).touch-hover {
        background: rgba(255,107,107,0.12) !important;
        border-color: #ff6b6b !important;
        transform: translateY(-10px);
        box-shadow: 0 20px 60px rgba(255,107,107,0.15);
    }
    .project-card:nth-child(2):hover,
    .project-card:nth-child(2).touch-hover {
        background: rgba(255,215,0,0.12) !important;
        border-color: #ffd700 !important;
        transform: translateY(-10px);
        box-shadow: 0 20px 60px rgba(255,215,0,0.15);
    }
    .project-card:nth-child(3):hover,
    .project-card:nth-child(3).touch-hover {
        background: rgba(0,206,209,0.12) !important;
        border-color: #00ced1 !important;
        transform: translateY(-10px);
        box-shadow: 0 20px 60px rgba(0,206,209,0.15);
    }
    .project-card:nth-child(4):hover,
    .project-card:nth-child(4).touch-hover {
        background: rgba(100,149,237,0.12) !important;
        border-color: #6495ed !important;
        transform: translateY(-10px);
        box-shadow: 0 20px 60px rgba(100,149,237,0.15);
    }
    .project-card:nth-child(5):hover,
    .project-card:nth-child(5).touch-hover {
        background: rgba(218,112,214,0.12) !important;
        border-color: #da70d6 !important;
        transform: translateY(-10px);
        box-shadow: 0 20px 60px rgba(218,112,214,0.15);
    }
    .project-card:nth-child(6):hover,
    .project-card:nth-child(6).touch-hover {
        background: rgba(255,107,107,0.12) !important;
        border-color: #ff6b6b !important;
        transform: translateY(-10px);
        box-shadow: 0 20px 60px rgba(255,107,107,0.15);
    }

    .project-card .icon {
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

    /* ===== İKON RENKLERİ (NORMAL) ===== */
    .project-card:nth-child(1) .icon { color: #ff6b6b; }
    .project-card:nth-child(2) .icon { color: #ffd700; }
    .project-card:nth-child(3) .icon { color: #00ced1; }
    .project-card:nth-child(4) .icon { color: #6495ed; }
    .project-card:nth-child(5) .icon { color: #da70d6; }
    .project-card:nth-child(6) .icon { color: #ff6b6b; }

    /* ===== İKON RENKLERİ (HOVER) ===== */
    .project-card:nth-child(1):hover .icon,
    .project-card:nth-child(1).touch-hover .icon { color: #ff6b6b !important; background: rgba(255,107,107,0.08); }
    .project-card:nth-child(2):hover .icon,
    .project-card:nth-child(2).touch-hover .icon { color: #ffd700 !important; background: rgba(255,215,0,0.08); }
    .project-card:nth-child(3):hover .icon,
    .project-card:nth-child(3).touch-hover .icon { color: #00ced1 !important; background: rgba(0,206,209,0.08); }
    .project-card:nth-child(4):hover .icon,
    .project-card:nth-child(4).touch-hover .icon { color: #6495ed !important; background: rgba(100,149,237,0.08); }
    .project-card:nth-child(5):hover .icon,
    .project-card:nth-child(5).touch-hover .icon { color: #da70d6 !important; background: rgba(218,112,214,0.08); }
    .project-card:nth-child(6):hover .icon,
    .project-card:nth-child(6).touch-hover .icon { color: #ff6b6b !important; background: rgba(255,107,107,0.08); }

    .project-card:hover .icon,
    .project-card.touch-hover .icon {
        transform: scale(1.1) rotate(8deg);
    }

    .project-card h3 {
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 10px;
        color: #fff;
        transition: 0.3s;
    }

    /* ===== BAŞLIK RENKLERİ (HOVER) ===== */
    .project-card:nth-child(1):hover h3,
    .project-card:nth-child(1).touch-hover h3 { color: #ff6b6b !important; }
    .project-card:nth-child(2):hover h3,
    .project-card:nth-child(2).touch-hover h3 { color: #ffd700 !important; }
    .project-card:nth-child(3):hover h3,
    .project-card:nth-child(3).touch-hover h3 { color: #00ced1 !important; }
    .project-card:nth-child(4):hover h3,
    .project-card:nth-child(4).touch-hover h3 { color: #6495ed !important; }
    .project-card:nth-child(5):hover h3,
    .project-card:nth-child(5).touch-hover h3 { color: #da70d6 !important; }
    .project-card:nth-child(6):hover h3,
    .project-card:nth-child(6).touch-hover h3 { color: #ff6b6b !important; }

    .project-card p {
        color: #94a3b8;
        font-size: 14px;
        line-height: 1.8;
        margin-bottom: 0;
        transition: 0.3s;
    }

    /* ===== AÇIKLAMA RENKLERİ (HOVER) ===== */
    .project-card:nth-child(1):hover p,
    .project-card:nth-child(1).touch-hover p { color: #e2e8f0 !important; }
    .project-card:nth-child(2):hover p,
    .project-card:nth-child(2).touch-hover p { color: #e2e8f0 !important; }
    .project-card:nth-child(3):hover p,
    .project-card:nth-child(3).touch-hover p { color: #e2e8f0 !important; }
    .project-card:nth-child(4):hover p,
    .project-card:nth-child(4).touch-hover p { color: #e2e8f0 !important; }
    .project-card:nth-child(5):hover p,
    .project-card:nth-child(5).touch-hover p { color: #e2e8f0 !important; }
    .project-card:nth-child(6):hover p,
    .project-card:nth-child(6).touch-hover p { color: #e2e8f0 !important; }

    .project-card .badge {
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
        background: rgba(255,255,255,0.04);
        color: #94a3b8;
        border: 1px solid rgba(255,255,255,0.04);
    }

    .project-card:nth-child(1):hover .badge,
    .project-card:nth-child(1).touch-hover .badge { background: rgba(255,107,107,0.08); color: #ff6b6b; border-color: rgba(255,107,107,0.08); }
    .project-card:nth-child(2):hover .badge,
    .project-card:nth-child(2).touch-hover .badge { background: rgba(255,215,0,0.08); color: #ffd700; border-color: rgba(255,215,0,0.08); }
    .project-card:nth-child(3):hover .badge,
    .project-card:nth-child(3).touch-hover .badge { background: rgba(0,206,209,0.08); color: #00ced1; border-color: rgba(0,206,209,0.08); }
    .project-card:nth-child(4):hover .badge,
    .project-card:nth-child(4).touch-hover .badge { background: rgba(100,149,237,0.08); color: #6495ed; border-color: rgba(100,149,237,0.08); }
    .project-card:nth-child(5):hover .badge,
    .project-card:nth-child(5).touch-hover .badge { background: rgba(218,112,214,0.08); color: #da70d6; border-color: rgba(218,112,214,0.08); }
    .project-card:nth-child(6):hover .badge,
    .project-card:nth-child(6).touch-hover .badge { background: rgba(255,107,107,0.08); color: #ff6b6b; border-color: rgba(255,107,107,0.08); }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 992px) {
        .projects-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
        .projects-hero h1 {
            font-size: 38px;
        }
    }

    @media (max-width: 768px) {
        .projects-hero {
            padding: 100px 0 20px;
        }
        .projects-hero h1 {
            font-size: 30px;
        }
        .projects-hero p {
            font-size: 15px;
            padding: 0 15px;
        }
        .projects-grid {
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            padding: 20px 0 60px;
        }
        .project-card {
            padding: 20px 14px;
            border-radius: 16px;
        }
        .project-card .icon {
            width: 50px;
            height: 50px;
            font-size: 22px;
            margin-bottom: 12px;
        }
        .project-card h3 {
            font-size: 14px;
            margin-bottom: 6px;
        }
        .project-card p {
            font-size: 12px;
            line-height: 1.6;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .project-card .badge {
            font-size: 8px;
            padding: 2px 10px;
            top: 10px;
            right: 10px;
        }
    }

    @media (max-width: 480px) {
        .projects-hero h1 {
            font-size: 24px;
        }
        .projects-hero p {
            font-size: 13px;
        }
        .projects-grid {
            gap: 12px;
            padding: 15px 0 40px;
        }
        .project-card {
            padding: 16px 10px;
            border-radius: 14px;
        }
        .project-card .icon {
            width: 40px;
            height: 40px;
            font-size: 18px;
            margin-bottom: 8px;
        }
        .project-card h3 {
            font-size: 12px;
            margin-bottom: 4px;
        }
        .project-card p {
            font-size: 10px;
            line-height: 1.5;
            -webkit-line-clamp: 2;
        }
        .project-card .badge {
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
<section class="projects-hero">
    <div class="container">
        <div class="section-tag" style="display:inline-block;background:linear-gradient(135deg,rgba(255,107,107,0.08),rgba(255,217,61,0.08));padding:5px 20px;border-radius:50px;font-size:11px;color:#ffd93d;margin-bottom:12px;border:1px solid rgba(255,217,61,0.06);letter-spacing:2px;text-transform:uppercase;">
            <i class="fas fa-project-diagram"></i> Projelerimiz
        </div>
        <h1>Başarılı <span>Projeler</span></h1>
        <p>Gurur duyduğumuz, başarıyla tamamladığımız projelerimiz.</p>
    </div>
</section>

<!-- ===== PROJE KARTLARI ===== -->
<section class="projects-section">
    <div class="container">
        <div class="projects-grid">
            <!-- Proje 1 -->
            <div class="project-card" data-aos="fade-up" data-aos-delay="0">
                <span class="badge">⭐ Tamamlandı</span>
                <div class="icon"><i class="fas fa-code"></i></div>
                <h3>CRM Projesi</h3>
                <p>Müşteri ilişkileri yönetim sistemi ile iş süreçlerini dijitalleştirdik. Müşteri verilerini tek platformda toplayarak satış ve pazarlama ekiplerinin verimliliğini artırdık. Otomatik raporlama ve analiz özellikleri ile karar alma süreçlerini hızlandırdık.</p>
            </div>

            <!-- Proje 2 -->
            <div class="project-card" data-aos="fade-up" data-aos-delay="100">
                <span class="badge">⭐ Tamamlandı</span>
                <div class="icon"><i class="fas fa-shopping-cart"></i></div>
                <h3>E-Ticaret Platformu</h3>
                <p>Kullanıcı dostu ve dönüşüm odaklı e-ticaret platformu geliştirdik. Güçlü altyapısı, gelişmiş filtreleme ve arama özellikleri ile müşteri deneyimini en üst seviyeye taşıdık. Stok yönetimi, ödeme entegrasyonu ve sipariş takibi modülleri ile komple bir çözüm sunduk.</p>
            </div>

            <!-- Proje 3 -->
            <div class="project-card" data-aos="fade-up" data-aos-delay="200">
                <span class="badge">⭐ Tamamlandı</span>
                <div class="icon"><i class="fas fa-mobile-alt"></i></div>
                <h3>Mobil Uygulama</h3>
                <p>iOS ve Android için yüksek performanslı mobil uygulama geliştirdik. Kullanıcı dostu arayüzü, hızlı yanıt süreleri ve offline çalışma özelliği ile mobil deneyimi yeniden tanımladık. Push bildirimler ve canlı destek ile müşteri bağlılığını artırdık.</p>
            </div>

            <!-- Proje 4 -->
            <div class="project-card" data-aos="fade-up" data-aos-delay="300">
                <span class="badge">⭐ Tamamlandı</span>
                <div class="icon"><i class="fas fa-hospital"></i></div>
                <h3>Hastane Yönetim Sistemi</h3>
                <p>Hastane süreçlerini dijitalleştiren yönetim sistemi geliştirdik. Hasta kayıtlarından randevu takibine, doktor çalışma planlarından fatura yönetimine kadar tüm hastane operasyonlarını tek bir platformda topladık. Veri güvenliği ve gizliliği en üst düzeyde sağladık.</p>
            </div>

            <!-- Proje 5 -->
            <div class="project-card" data-aos="fade-up" data-aos-delay="400">
                <span class="badge">⭐ Tamamlandı</span>
                <div class="icon"><i class="fas fa-truck"></i></div>
                <h3>Lojistik Yönetim Sistemi</h3>
                <p>Filo yönetimi ve rota optimizasyonu ile operasyonel verimlilik sağladık. Araç takibi, teslimat planlaması ve sürücü yönetimi modülleri ile lojistik süreçlerini dijitalleştirdik. Gerçek zamanlı konum takibi ve raporlama ile işletme sahiplerine tam kontrol imkanı sunduk.</p>
            </div>

            <!-- Proje 6 -->
            <div class="project-card" data-aos="fade-up" data-aos-delay="500">
                <span class="badge">⭐ Tamamlandı</span>
                <div class="icon"><i class="fas fa-graduation-cap"></i></div>
                <h3>Eğitim Platformu</h3>
                <p>Uzaktan eğitim ve öğrenci yönetim sistemi ile dijital dönüşüm sağladık. Canlı dersler, video içerik yönetimi, sınav modülü ve ilerleme takibi gibi özellikler ile eğitim kurumlarının tüm ihtiyaçlarını karşılayan kapsamlı bir çözüm geliştirdik.</p>
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

@push('scripts')
<script>
    document.querySelectorAll('.project-card').forEach(card => {
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
    });
</script>
@endpush

@endsection
