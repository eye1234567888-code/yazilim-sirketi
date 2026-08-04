@extends('layouts.app')

@section('title', 'Hakkımızda')

@section('content')
<!-- ===== BAŞLIK BÖLÜMÜ ===== -->
<section style="padding:120px 0 60px;background:rgba(10,14,26,0.3);border-bottom:1px solid rgba(255,255,255,0.02);text-align:center;position:relative;overflow:hidden;">
    <div style="position:absolute;top:-30%;right:-10%;width:400px;height:400px;background:radial-gradient(circle,rgba(255,107,107,0.03),transparent 70%);border-radius:50%;pointer-events:none;"></div>
    <div style="position:absolute;bottom:-30%;left:-10%;width:350px;height:350px;background:radial-gradient(circle,rgba(77,150,255,0.03),transparent 70%);border-radius:50%;pointer-events:none;"></div>

    <div class="container">
        <div data-aos="fade-up">
            <span class="section-tag" style="display:inline-block;background:linear-gradient(135deg,rgba(255,107,107,0.08),rgba(255,217,61,0.08));padding:6px 22px;border-radius:50px;font-size:12px;color:#ffd93d;margin-bottom:15px;border:1px solid rgba(255,217,61,0.06);letter-spacing:2px;text-transform:uppercase;">
                <i class="fas fa-info-circle" style="color:#ff6b6b;margin-right:6px;"></i> Hakkımızda
            </span>
            <h1 style="font-size:52px;font-weight:800;margin-bottom:20px;color:#fff;line-height:1.1;">
                Dijital Dönüşümde <span style="background:linear-gradient(135deg,#ff6b6b,#ffd93d,#6bcb77,#4d96ff);background-size:300% 300%;-webkit-background-clip:text;-webkit-text-fill-color:transparent;animation:rainbowText 4s ease infinite;">Yanınızdayız</span>
            </h1>
            <p style="font-size:20px;color:#94a3b8;max-width:700px;margin:0 auto;line-height:1.8;">
                İşletmenizi dijital dönüşümde bir adım öne taşıyacak yenilikçi yazılım çözümlerimizle yanınızdayız.
            </p>
        </div>
    </div>
</section>

<!-- ===== HAKKIMIZDA İÇERİK + İKON ===== -->
<section class="section-padding" style="background:rgba(10,14,26,0.3);backdrop-filter:blur(5px);border-top:1px solid rgba(255,255,255,0.02);border-bottom:1px solid rgba(255,255,255,0.02);position:relative;overflow:hidden;">
    <div style="position:absolute;top:-30%;right:-10%;width:500px;height:500px;background:radial-gradient(circle,rgba(255,107,107,0.03),transparent 70%);border-radius:50%;pointer-events:none;"></div>
    <div style="position:absolute;bottom:-30%;left:-10%;width:400px;height:400px;background:radial-gradient(circle,rgba(77,150,255,0.03),transparent 70%);border-radius:50%;pointer-events:none;"></div>

    <div class="container">
        <!-- === İKON (ÜSTTE - MOBİL İÇİN) === -->
        <div data-aos="fade-up" style="display:flex;justify-content:center;align-items:center;margin-bottom:40px;">
            <div style="
                width:200px;
                height:200px;
                border-radius:50%;
                background:linear-gradient(135deg, rgba(255,107,107,0.05), rgba(77,150,255,0.05));
                border:2px solid rgba(255,255,255,0.02);
                display:flex;
                align-items:center;
                justify-content:center;
                animation: rotateIn 20s linear infinite;
                position:relative;
                max-width:100%;
            ">
                <div style="
                    position:absolute;
                    width:85%;
                    height:85%;
                    border-radius:50%;
                    border:2px dashed rgba(255,107,107,0.08);
                    animation: rotateIn 30s linear infinite reverse;
                "></div>
                <div style="
                    position:absolute;
                    width:70%;
                    height:70%;
                    border-radius:50%;
                    border:2px dashed rgba(77,150,255,0.05);
                    animation: rotateIn 40s linear infinite;
                "></div>
                <div style="
                    font-size:60px;
                    color:#ff6b6b;
                    animation:pulse 2s ease-in-out infinite;
                    z-index:1;
                ">
                    <i class="fas fa-cubes"></i>
                </div>
            </div>
        </div>

        <!-- === YAZI (ALTA - MOBİL İÇİN) === -->
        <div data-aos="fade-up" style="max-width:900px;margin:0 auto;">
            <div class="glass" style="padding:35px;border-color:rgba(255,255,255,0.05);">
                <div style="display:flex;gap:10px;flex-wrap:wrap;justify-content:center;margin-bottom:20px;">
                    <span style="background:rgba(255,107,107,0.08);color:#ff6b6b;padding:6px 16px;border-radius:50px;font-size:12px;border:1px solid rgba(255,107,107,0.06);font-weight:600;">ERP</span>
                    <span style="background:rgba(255,217,61,0.08);color:#ffd93d;padding:6px 16px;border-radius:50px;font-size:12px;border:1px solid rgba(255,217,61,0.06);font-weight:600;">CRM</span>
                    <span style="background:rgba(107,203,119,0.08);color:#6bcb77;padding:6px 16px;border-radius:50px;font-size:12px;border:1px solid rgba(107,203,119,0.06);font-weight:600;">E-Ticaret</span>
                    <span style="background:rgba(77,150,255,0.08);color:#4d96ff;padding:6px 16px;border-radius:50px;font-size:12px;border:1px solid rgba(77,150,255,0.06);font-weight:600;">Web Çözümleri</span>
                </div>

                <p style="color:#e2e8f0;font-size:15px;line-height:1.9;text-align:center;margin-bottom:12px;">
                    İşletmelere dijital dönüşüm yolculuklarında <span style="color:#ff6b6b;font-weight:600;">yenilikçi</span> ve <span style="color:#ffd93d;font-weight:600;">özelleştirilmiş</span> yazılım çözümleri sunan bir teknoloji firmasıdır.
                </p>

                <p style="color:#e2e8f0;font-size:15px;line-height:1.9;text-align:center;margin-bottom:12px;">
                    ERP, CRM, e-ticaret entegrasyonları ve kurumsal web çözümleri konularında uzmanlaşarak, farklı sektörlerdeki işletmelerin iş süreçlerini <span style="color:#6bcb77;font-weight:600;">dijitalleştirip</span> operasyonel verimliliklerini artırmayı hedefliyoruz.
                </p>

                <p style="color:#e2e8f0;font-size:15px;line-height:1.9;text-align:center;margin-bottom:0;">
                    Geniş teknik bilgi birikimimizle, her işletmenin özgün ihtiyaçlarına uygun stratejiler geliştiriyor; esnek, ölçeklenebilir ve sürdürülebilir yazılım altyapıları kuruyoruz.
                </p>
            </div>
        </div>

        <!-- ===== VİZYON & MİSYON ===== -->
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-top:40px;max-width:900px;margin-left:auto;margin-right:auto;">
            <div class="glass" data-aos="fade-up" style="padding:25px 20px;border-color:rgba(255,107,107,0.05);text-align:center;">
                <div style="font-size:32px;color:#ff6b6b;margin-bottom:10px;">
                    <i class="fas fa-eye"></i>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:#fff;margin-bottom:6px;">Vizyonumuz</h3>
                <p style="color:#94a3b8;font-size:13px;line-height:1.7;">Türkiye'de ve dünyada dijital dönüşümün öncüsü olmak.</p>
            </div>

            <div class="glass" data-aos="fade-up" data-aos-delay="100" style="padding:25px 20px;border-color:rgba(255,217,61,0.05);text-align:center;">
                <div style="font-size:32px;color:#ffd93d;margin-bottom:10px;">
                    <i class="fas fa-rocket"></i>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:#fff;margin-bottom:6px;">Misyonumuz</h3>
                <p style="color:#94a3b8;font-size:13px;line-height:1.7;">İşletmelere özel, kaliteli ve sürdürülebilir yazılım çözümleri sunmak.</p>
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
    @keyframes rainbowText {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
    @keyframes rotateIn {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    @keyframes pulse {
        0%, 100% { opacity: 1; transform: scale(1); }
        50% { opacity: 0.5; transform: scale(0.95); }
    }

    /* ===== MOBİL ===== */
    @media (max-width: 992px) {
        div[style*="width:200px;height:200px"] {
            width: 160px !important;
            height: 160px !important;
        }
        div[style*="font-size:60px"] {
            font-size: 45px !important;
        }
        section[style*="padding:120px 0 60px"] h1 {
            font-size: 40px !important;
        }
        section[style*="padding:120px 0 60px"] p {
            font-size: 17px !important;
        }
        div[style*="display:grid;grid-template-columns:1fr 1fr;gap:20px"] {
            grid-template-columns: 1fr 1fr !important;
        }
    }

    @media (max-width: 768px) {
        section[style*="padding:120px 0 60px"] {
            padding: 100px 0 30px !important;
        }
        section[style*="padding:120px 0 60px"] h1 {
            font-size: 30px !important;
        }
        section[style*="padding:120px 0 60px"] p {
            font-size: 15px !important;
            padding: 0 10px;
        }

        div[style*="width:200px;height:200px"] {
            width: 140px !important;
            height: 140px !important;
        }
        div[style*="font-size:60px"] {
            font-size: 38px !important;
        }

        .glass {
            padding: 25px 18px !important;
        }
        .glass p {
            font-size: 14px !important;
        }
        .glass span {
            font-size: 11px !important;
            padding: 4px 12px !important;
        }

        div[style*="display:grid;grid-template-columns:1fr 1fr;gap:20px"] {
            grid-template-columns: 1fr 1fr !important;
            gap: 15px !important;
        }
        div[style*="padding:25px 20px"] {
            padding: 20px 15px !important;
        }
        div[style*="font-size:32px"] {
            font-size: 26px !important;
        }
        div[style*="font-size:17px"] {
            font-size: 15px !important;
        }
        div[style*="font-size:13px"] {
            font-size: 12px !important;
        }

        #cta {
            padding: 40px 0 !important;
        }
        #cta .cta-content h2 {
            font-size: 26px !important;
        }
        #cta .cta-content p {
            font-size: 14px !important;
            padding: 0 15px;
        }
        #cta .cta-content div {
            flex-direction: column !important;
            align-items: center !important;
        }
        #cta .cta-content a {
            width: 100% !important;
            max-width: 300px !important;
            justify-content: center !important;
            padding: 12px 25px !important;
            font-size: 14px !important;
        }
    }

    @media (max-width: 480px) {
        section[style*="padding:120px 0 60px"] {
            padding: 80px 0 20px !important;
        }
        section[style*="padding:120px 0 60px"] h1 {
            font-size: 24px !important;
        }
        section[style*="padding:120px 0 60px"] p {
            font-size: 13px !important;
        }

        div[style*="width:200px;height:200px"] {
            width: 110px !important;
            height: 110px !important;
        }
        div[style*="font-size:60px"] {
            font-size: 30px !important;
        }

        .glass {
            padding: 20px 14px !important;
        }
        .glass p {
            font-size: 13px !important;
            line-height: 1.7 !important;
        }
        .glass span {
            font-size: 10px !important;
            padding: 3px 10px !important;
        }

        div[style*="display:grid;grid-template-columns:1fr 1fr;gap:20px"] {
            grid-template-columns: 1fr 1fr !important;
            gap: 10px !important;
        }
        div[style*="padding:25px 20px"] {
            padding: 16px 12px !important;
        }
        div[style*="font-size:32px"] {
            font-size: 22px !important;
        }
        div[style*="font-size:17px"] {
            font-size: 14px !important;
        }
        div[style*="font-size:13px"] {
            font-size: 11px !important;
        }

        #cta .cta-content h2 {
            font-size: 22px !important;
        }
        #cta .cta-content a {
            padding: 10px 18px !important;
            font-size: 13px !important;
            max-width: 260px !important;
        }
    }
</style>
@endsection
