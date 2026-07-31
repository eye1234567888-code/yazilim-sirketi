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

    /* ===== PROJE KARTLARI ===== */
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
        padding: 0;
        transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(255,255,255,0.04);
        background: rgba(255,255,255,0.02);
    }

    /* ===== KART HEADER ===== */
    .project-card .card-header {
        padding: 30px 25px 20px;
        text-align: center;
        position: relative;
        border-bottom: 1px solid rgba(255,255,255,0.03);
    }

    .project-card .card-header .icon-wrapper {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 15px;
        font-size: 34px;
        transition: 0.5s;
        background: rgba(255,255,255,0.03);
        border: 2px solid rgba(255,255,255,0.05);
    }

    .project-card:nth-child(1) .card-header .icon-wrapper { color: #ff6b6b; border-color: rgba(255,107,107,0.15); }
    .project-card:nth-child(2) .card-header .icon-wrapper { color: #ffd93d; border-color: rgba(255,217,61,0.15); }
    .project-card:nth-child(3) .card-header .icon-wrapper { color: #6bcb77; border-color: rgba(107,203,119,0.15); }
    .project-card:nth-child(4) .card-header .icon-wrapper { color: #4d96ff; border-color: rgba(77,150,255,0.15); }
    .project-card:nth-child(5) .card-header .icon-wrapper { color: #a66cff; border-color: rgba(166,108,255,0.15); }
    .project-card:nth-child(6) .card-header .icon-wrapper { color: #ff6b6b; border-color: rgba(255,107,107,0.15); }

    .project-card:hover .card-header .icon-wrapper {
        transform: scale(1.15) rotate(12deg);
        box-shadow: 0 0 50px rgba(255,107,107,0.15);
    }

    .project-card .card-header .status-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        padding: 4px 14px;
        border-radius: 50px;
        font-size: 10px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        background: rgba(107,203,119,0.12);
        color: #6bcb77;
        border: 1px solid rgba(107,203,119,0.15);
    }

    .project-card:nth-child(2) .card-header .status-badge { background: rgba(255,217,61,0.12); color: #ffd93d; border-color: rgba(255,217,61,0.15); }
    .project-card:nth-child(3) .card-header .status-badge { background: rgba(77,150,255,0.12); color: #4d96ff; border-color: rgba(77,150,255,0.15); }
    .project-card:nth-child(4) .card-header .status-badge { background: rgba(255,107,107,0.12); color: #ff6b6b; border-color: rgba(255,107,107,0.15); }
    .project-card:nth-child(5) .card-header .status-badge { background: rgba(166,108,255,0.12); color: #a66cff; border-color: rgba(166,108,255,0.15); }
    .project-card:nth-child(6) .card-header .status-badge { background: rgba(107,203,119,0.12); color: #6bcb77; border-color: rgba(107,203,119,0.15); }

    /* ===== KART BODY ===== */
    .project-card .card-body {
        padding: 20px 25px 30px;
        text-align: center;
    }

    .project-card .card-body h3 {
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 8px;
        color: #fff;
        transition: 0.3s;
    }

    .project-card:nth-child(1):hover .card-body h3 { color: #ff6b6b; }
    .project-card:nth-child(2):hover .card-body h3 { color: #ffd93d; }
    .project-card:nth-child(3):hover .card-body h3 { color: #6bcb77; }
    .project-card:nth-child(4):hover .card-body h3 { color: #4d96ff; }
    .project-card:nth-child(5):hover .card-body h3 { color: #a66cff; }
    .project-card:nth-child(6):hover .card-body h3 { color: #ff6b6b; }

    .project-card .card-body .category {
        display: inline-block;
        padding: 3px 14px;
        border-radius: 50px;
        font-size: 11px;
        font-weight: 600;
        margin-bottom: 12px;
        letter-spacing: 0.5px;
        transition: 0.3s;
        background: rgba(255,255,255,0.04);
        color: #94a3b8;
    }

    .project-card:nth-child(1):hover .card-body .category { background: rgba(255,107,107,0.12); color: #ff6b6b; }
    .project-card:nth-child(2):hover .card-body .category { background: rgba(255,217,61,0.12); color: #ffd93d; }
    .project-card:nth-child(3):hover .card-body .category { background: rgba(107,203,119,0.12); color: #6bcb77; }
    .project-card:nth-child(4):hover .card-body .category { background: rgba(77,150,255,0.12); color: #4d96ff; }
    .project-card:nth-child(5):hover .card-body .category { background: rgba(166,108,255,0.12); color: #a66cff; }
    .project-card:nth-child(6):hover .card-body .category { background: rgba(255,107,107,0.12); color: #ff6b6b; }

    .project-card .card-body p {
        color: #94a3b8;
        font-size: 14px;
        line-height: 1.8;
        transition: 0.3s;
        margin-bottom: 0;
    }

    .project-card:nth-child(1):hover .card-body p { color: #e8d0d0; }
    .project-card:nth-child(2):hover .card-body p { color: #e8e0d0; }
    .project-card:nth-child(3):hover .card-body p { color: #d0e8d0; }
    .project-card:nth-child(4):hover .card-body p { color: #d0d8e8; }
    .project-card:nth-child(5):hover .card-body p { color: #d8d0e8; }
    .project-card:nth-child(6):hover .card-body p { color: #e8d0d0; }

    /* ===== KART FOOTER ===== */
    .project-card .card-footer {
        padding: 15px 25px;
        border-top: 1px solid rgba(255,255,255,0.03);
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: rgba(255,255,255,0.01);
    }

    .project-card .card-footer .tech-stack {
        display: flex;
        gap: 8px;
        flex-wrap: wrap;
    }

    .project-card .card-footer .tech-stack span {
        padding: 3px 12px;
        border-radius: 50px;
        font-size: 10px;
        font-weight: 500;
        background: rgba(255,255,255,0.03);
        color: #94a3b8;
        border: 1px solid rgba(255,255,255,0.03);
        transition: 0.3s;
    }

    .project-card:nth-child(1):hover .card-footer .tech-stack span { background: rgba(255,107,107,0.08); color: #ff6b6b; border-color: rgba(255,107,107,0.08); }
    .project-card:nth-child(2):hover .card-footer .tech-stack span { background: rgba(255,217,61,0.08); color: #ffd93d; border-color: rgba(255,217,61,0.08); }
    .project-card:nth-child(3):hover .card-footer .tech-stack span { background: rgba(107,203,119,0.08); color: #6bcb77; border-color: rgba(107,203,119,0.08); }
    .project-card:nth-child(4):hover .card-footer .tech-stack span { background: rgba(77,150,255,0.08); color: #4d96ff; border-color: rgba(77,150,255,0.08); }
    .project-card:nth-child(5):hover .card-footer .tech-stack span { background: rgba(166,108,255,0.08); color: #a66cff; border-color: rgba(166,108,255,0.08); }
    .project-card:nth-child(6):hover .card-footer .tech-stack span { background: rgba(255,107,107,0.08); color: #ff6b6b; border-color: rgba(255,107,107,0.08); }

    .project-card .card-footer .year {
        font-size: 12px;
        color: #64748b;
        font-weight: 500;
        transition: 0.3s;
    }

    .project-card:nth-child(1):hover .card-footer .year { color: #ff6b6b; }
    .project-card:nth-child(2):hover .card-footer .year { color: #ffd93d; }
    .project-card:nth-child(3):hover .card-footer .year { color: #6bcb77; }
    .project-card:nth-child(4):hover .card-footer .year { color: #4d96ff; }
    .project-card:nth-child(5):hover .card-footer .year { color: #a66cff; }
    .project-card:nth-child(6):hover .card-footer .year { color: #ff6b6b; }

    /* ===== HOVER GENEL ===== */
    .project-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 30px 80px rgba(0,0,0,0.4);
    }

    .project-card:nth-child(1):hover { border-color: rgba(255,107,107,0.25); }
    .project-card:nth-child(2):hover { border-color: rgba(255,217,61,0.25); }
    .project-card:nth-child(3):hover { border-color: rgba(107,203,119,0.25); }
    .project-card:nth-child(4):hover { border-color: rgba(77,150,255,0.25); }
    .project-card:nth-child(5):hover { border-color: rgba(166,108,255,0.25); }
    .project-card:nth-child(6):hover { border-color: rgba(255,107,107,0.25); }

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
            grid-template-columns: 1fr;
            gap: 20px;
            padding: 20px 0 60px;
        }
        .project-card .card-header {
            padding: 25px 20px 15px;
        }
        .project-card .card-header .icon-wrapper {
            width: 65px;
            height: 65px;
            font-size: 28px;
        }
        .project-card .card-body {
            padding: 15px 20px 20px;
        }
        .project-card .card-body h3 {
            font-size: 18px;
        }
        .project-card .card-body p {
            font-size: 14px;
        }
        .project-card .card-footer {
            padding: 12px 20px;
            flex-direction: column;
            gap: 10px;
        }
        .project-card .card-footer .tech-stack {
            justify-content: center;
        }
        .project-card .card-header .status-badge {
            font-size: 9px;
            padding: 3px 10px;
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
            gap: 15px;
            padding: 15px 0 40px;
        }
        .project-card {
            border-radius: 16px;
        }
        .project-card .card-header {
            padding: 20px 15px 12px;
        }
        .project-card .card-header .icon-wrapper {
            width: 55px;
            height: 55px;
            font-size: 22px;
        }
        .project-card .card-body {
            padding: 12px 15px 15px;
        }
        .project-card .card-body h3 {
            font-size: 16px;
        }
        .project-card .card-body p {
            font-size: 13px;
        }
        .project-card .card-footer {
            padding: 10px 15px;
        }
        .project-card .card-footer .tech-stack span {
            font-size: 9px;
            padding: 2px 10px;
        }
        .project-card .card-footer .year {
            font-size: 11px;
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
                <div class="card-header">
                    <span class="status-badge"><i class="fas fa-check-circle"></i> Tamamlandı</span>
                    <div class="icon-wrapper"><i class="fas fa-code"></i></div>
                </div>
                <div class="card-body">
                    <h3>CRM Projesi</h3>
                    <span class="category">Web</span>
                    <p>Müşteri ilişkileri yönetim sistemi ile iş süreçlerini dijitalleştirdik.</p>
                </div>
                <div class="card-footer">
                    <div class="tech-stack">
                        <span>Laravel</span>
                        <span>Vue.js</span>
                        <span>MySQL</span>
                    </div>
                    <span class="year">2024</span>
                </div>
            </div>

            <!-- Proje 2 -->
            <div class="project-card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-header">
                    <span class="status-badge"><i class="fas fa-check-circle"></i> Tamamlandı</span>
                    <div class="icon-wrapper"><i class="fas fa-shopping-cart"></i></div>
                </div>
                <div class="card-body">
                    <h3>E-Ticaret Platformu</h3>
                    <span class="category">E-Ticaret</span>
                    <p>Kullanıcı dostu ve dönüşüm odaklı e-ticaret platformu geliştirdik.</p>
                </div>
                <div class="card-footer">
                    <div class="tech-stack">
                        <span>React</span>
                        <span>Node.js</span>
                        <span>MongoDB</span>
                    </div>
                    <span class="year">2024</span>
                </div>
            </div>

            <!-- Proje 3 -->
            <div class="project-card" data-aos="fade-up" data-aos-delay="200">
                <div class="card-header">
                    <span class="status-badge"><i class="fas fa-check-circle"></i> Tamamlandı</span>
                    <div class="icon-wrapper"><i class="fas fa-mobile-alt"></i></div>
                </div>
                <div class="card-body">
                    <h3>Mobil Uygulama</h3>
                    <span class="category">Mobil</span>
                    <p>iOS ve Android için yüksek performanslı mobil uygulama geliştirdik.</p>
                </div>
                <div class="card-footer">
                    <div class="tech-stack">
                        <span>Flutter</span>
                        <span>Firebase</span>
                        <span>Dart</span>
                    </div>
                    <span class="year">2024</span>
                </div>
            </div>

            <!-- Proje 4 -->
            <div class="project-card" data-aos="fade-up" data-aos-delay="300">
                <div class="card-header">
                    <span class="status-badge"><i class="fas fa-check-circle"></i> Tamamlandı</span>
                    <div class="icon-wrapper"><i class="fas fa-hospital"></i></div>
                </div>
                <div class="card-body">
                    <h3>Hastane Yönetim Sistemi</h3>
                    <span class="category">Sağlık</span>
                    <p>Hastane süreçlerini dijitalleştiren yönetim sistemi geliştirdik.</p>
                </div>
                <div class="card-footer">
                    <div class="tech-stack">
                        <span>PHP</span>
                        <span>jQuery</span>
                        <span>PostgreSQL</span>
                    </div>
                    <span class="year">2023</span>
                </div>
            </div>

            <!-- Proje 5 -->
            <div class="project-card" data-aos="fade-up" data-aos-delay="400">
                <div class="card-header">
                    <span class="status-badge"><i class="fas fa-check-circle"></i> Tamamlandı</span>
                    <div class="icon-wrapper"><i class="fas fa-truck"></i></div>
                </div>
                <div class="card-body">
                    <h3>Lojistik Yönetim Sistemi</h3>
                    <span class="category">Lojistik</span>
                    <p>Filo yönetimi ve rota optimizasyonu ile operasyonel verimlilik sağladık.</p>
                </div>
                <div class="card-footer">
                    <div class="tech-stack">
                        <span>Laravel</span>
                        <span>Livewire</span>
                        <span>MySQL</span>
                    </div>
                    <span class="year">2024</span>
                </div>
            </div>

            <!-- Proje 6 -->
            <div class="project-card" data-aos="fade-up" data-aos-delay="500">
                <div class="card-header">
                    <span class="status-badge"><i class="fas fa-check-circle"></i> Tamamlandı</span>
                    <div class="icon-wrapper"><i class="fas fa-graduation-cap"></i></div>
                </div>
                <div class="card-body">
                    <h3>Eğitim Platformu</h3>
                    <span class="category">Eğitim</span>
                    <p>Uzaktan eğitim ve öğrenci yönetim sistemi ile dijital dönüşüm sağladık.</p>
                </div>
                <div class="card-footer">
                    <div class="tech-stack">
                        <span>React</span>
                        <span>Django</span>
                        <span>PostgreSQL</span>
                    </div>
                    <span class="year">2023</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== CTA ===== -->
<section id="cta" style="padding:60px 0;position:relative;z-index:1;background:linear-gradient(135deg,#ff6b6b,#ee5a24,#ff6b6b) !important;background-size:200% 200% !important;animation:btnGradient 4s ease infinite !important;border-top:none !important;border-bottom:none !important;">
    <div class="container">
        <div class="cta-content" style="text-align:center;padding:0;position:relative;z-index:1;">
            <h2 style="font-size:34px;font-weight:800;margin-bottom:15px;color:#fff;">Sıradaki Proje <span style="color:#fff;">Sizin Olabilir</span></h2>
            <p style="font-size:16px;margin-bottom:25px;opacity:0.9;max-width:500px;margin-left:auto;margin-right:auto;color:rgba(255,255,255,0.9);">
                Fikrinizi hayata geçirmek için hemen bizimle çalışın.
            </p>
            <a href="{{ route('contact') }}" class="btn-white" style="background:#fff;color:#0a0e1a !important;padding:12px 35px;border-radius:50px;text-decoration:none;font-weight:600;transition:all 0.3s ease;display:inline-block;font-size:15px;">
                <i class="fas fa-rocket"></i> Proje Başlat
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
