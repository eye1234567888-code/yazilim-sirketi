@extends('layouts.app')

@section('title', 'Hakkımızda')

@section('content')
<!-- ===== HERO ===== -->
<section class="hero" style="min-height:50vh;background:transparent;">
    <div class="particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>
    <div class="container">
        <div class="hero-content" data-aos="fade-up">
            <div class="badge"><i class="fas fa-info-circle"></i> Hakkımızda</div>
            <h1>Biz <span>Kimiz?</span></h1>
            <p>Yazılım dünyasında yenilikçi çözümler üreten lider firma</p>
        </div>
    </div>
</section>

<!-- ===== HAKKIMIZDA İÇERİK ===== -->
<section class="section-padding" style="background:rgba(10,14,26,0.3);backdrop-filter:blur(5px);border-top:1px solid rgba(255,255,255,0.02);border-bottom:1px solid rgba(255,255,255,0.02);position:relative;overflow:hidden;">
    <div style="position:absolute;top:-30%;right:-10%;width:500px;height:500px;background:radial-gradient(circle,rgba(255,107,107,0.03),transparent 70%);border-radius:50%;pointer-events:none;"></div>
    <div style="position:absolute;bottom:-30%;left:-10%;width:400px;height:400px;background:radial-gradient(circle,rgba(77,150,255,0.03),transparent 70%);border-radius:50%;pointer-events:none;"></div>

    <div class="container">
        <div style="max-width:900px;margin:0 auto;">
            <div class="glass" data-aos="fade-up" style="padding:45px;border-color:rgba(255,255,255,0.05);">
                <!-- Etiketler -->
                <div style="display:flex;gap:10px;flex-wrap:wrap;justify-content:center;margin-bottom:25px;">
                    <span style="background:rgba(255,107,107,0.08);color:#ff6b6b;padding:6px 20px;border-radius:50px;font-size:13px;border:1px solid rgba(255,107,107,0.06);font-weight:600;">ERP</span>
                    <span style="background:rgba(255,217,61,0.08);color:#ffd93d;padding:6px 20px;border-radius:50px;font-size:13px;border:1px solid rgba(255,217,61,0.06);font-weight:600;">CRM</span>
                    <span style="background:rgba(107,203,119,0.08);color:#6bcb77;padding:6px 20px;border-radius:50px;font-size:13px;border:1px solid rgba(107,203,119,0.06);font-weight:600;">E-Ticaret</span>
                    <span style="background:rgba(77,150,255,0.08);color:#4d96ff;padding:6px 20px;border-radius:50px;font-size:13px;border:1px solid rgba(77,150,255,0.06);font-weight:600;">Web Çözümleri</span>
                </div>

                <p style="color:#e2e8f0;font-size:15px;line-height:1.9;text-align:center;margin-bottom:15px;">
                    İşletmelere dijital dönüşüm yolculuklarında <span style="color:#ff6b6b;font-weight:600;">yenilikçi</span> ve <span style="color:#ffd93d;font-weight:600;">özelleştirilmiş</span> yazılım çözümleri sunan bir teknoloji firmasıdır.
                </p>

                <p style="color:#e2e8f0;font-size:15px;line-height:1.9;text-align:center;margin-bottom:15px;">
                    ERP, CRM, e-ticaret entegrasyonları ve kurumsal web çözümleri konularında uzmanlaşarak, farklı sektörlerdeki işletmelerin iş süreçlerini <span style="color:#6bcb77;font-weight:600;">dijitalleştirip</span> operasyonel verimliliklerini artırmayı hedefliyoruz.
                </p>

                <p style="color:#e2e8f0;font-size:15px;line-height:1.9;text-align:center;margin-bottom:0;">
                    Geniş teknik bilgi birikimimizle, her işletmenin özgün ihtiyaçlarına uygun stratejiler geliştiriyor; esnek, ölçeklenebilir ve sürdürülebilir yazılım altyapıları kuruyoruz.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ===== İLETİŞİME GEÇİN ===== -->
<section class="section-padding" id="cta">
    <div class="container">
        <div class="cta-content" data-aos="fade-up">
            <h2>Bizimle <span>İletişime Geçin</span></h2>
            <p>Projenizi konuşmak, teklif almak veya sorularınız için hemen bize ulaşın.</p>
            <div style="display:flex;gap:15px;justify-content:center;flex-wrap:wrap;">
                <a href="{{ route('contact') }}" class="btn-white">
                    <i class="fas fa-paper-plane"></i> Hemen İletişim
                </a>
                <a href="tel:+905551234567" class="btn-secondary">
                    <i class="fas fa-phone"></i> +90 (555) 123 45 67
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
