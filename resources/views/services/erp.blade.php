@extends('layouts.app')

@section('title', 'ERP Çözümleri')

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
    <div class="floating-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <div class="container">
        <div class="hero-content" data-aos="fade-up">
            <div class="badge"><i class="fas fa-cubes" style="color:#ff6b6b;"></i> ERP Çözümleri</div>
            <h1>ERP <span>Çözümleri</span></h1>
            <p>Tüm iş süreçlerinizi tek platformda yönetin</p>
        </div>
    </div>
</section>

<!-- ===== TÜM HİZMETLER ===== -->
<section class="section-padding" style="background:rgba(10,14,26,0.3);backdrop-filter:blur(5px);border-top:1px solid rgba(255,255,255,0.02);border-bottom:1px solid rgba(255,255,255,0.02);">
    <div class="container">
        <div class="section-header" data-aos="fade-up" style="margin-bottom:40px;">
            <span class="section-tag"><i class="fas fa-th-list"></i> Tüm Hizmetler</span>
            <h2>Tüm <span>Hizmetler</span></h2>
        </div>

        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin-bottom:50px;">
            <a href="{{ route('erp') }}" class="glass tilt" data-aos="flip-up" style="text-decoration:none;padding:20px 25px;text-align:center;border-color:#ff6b6b;background:rgba(255,107,107,0.05);transition:all 0.4s ease;border-width:2px;" onmouseover="this.style.borderColor='#ff6b6b';this.style.transform='translateY(-5px)';this.style.boxShadow='0 15px 40px rgba(255,107,107,0.15)'" onmouseout="this.style.borderColor='#ff6b6b';this.style.transform='translateY(0)';this.style.boxShadow='none'">
                <div style="font-size:32px;color:#ff6b6b;margin-bottom:8px;"><i class="fas fa-cubes"></i></div>
                <h4 style="font-size:15px;font-weight:700;color:#ff6b6b;">ERP Çözümleri</h4>
                <span style="display:inline-block;background:#ff6b6b;color:#fff;padding:2px 12px;border-radius:50px;font-size:10px;margin-top:5px;">Aktif</span>
            </a>
            <a href="{{ route('mobil') }}" class="glass tilt" data-aos="flip-up" data-aos-delay="100" style="text-decoration:none;padding:20px 25px;text-align:center;border-color:rgba(255,217,61,0.05);transition:all 0.4s ease;" onmouseover="this.style.borderColor='#ffd93d';this.style.transform='translateY(-5px)';this.style.boxShadow='0 15px 40px rgba(255,217,61,0.1)'" onmouseout="this.style.borderColor='rgba(255,217,61,0.05)';this.style.transform='translateY(0)';this.style.boxShadow='none'">
                <div style="font-size:32px;color:#ffd93d;margin-bottom:8px;"><i class="fas fa-mobile-alt"></i></div>
                <h4 style="font-size:15px;font-weight:700;color:#fff;">Mobil Çözümler</h4>
            </a>
            <a href="{{ route('crm') }}" class="glass tilt" data-aos="flip-up" data-aos-delay="200" style="text-decoration:none;padding:20px 25px;text-align:center;border-color:rgba(255,107,107,0.05);transition:all 0.4s ease;" onmouseover="this.style.borderColor='#ff6b6b';this.style.transform='translateY(-5px)';this.style.boxShadow='0 15px 40px rgba(255,107,107,0.1)'" onmouseout="this.style.borderColor='rgba(255,107,107,0.05)';this.style.transform='translateY(0)';this.style.boxShadow='none'">
                <div style="font-size:32px;color:#ff6b6b;margin-bottom:8px;"><i class="fas fa-users"></i></div>
                <h4 style="font-size:15px;font-weight:700;color:#fff;">CRM Çözümleri</h4>
            </a>
            <a href="{{ route('sektorel') }}" class="glass tilt" data-aos="flip-up" data-aos-delay="300" style="text-decoration:none;padding:20px 25px;text-align:center;border-color:rgba(255,217,61,0.05);transition:all 0.4s ease;" onmouseover="this.style.borderColor='#ffd93d';this.style.transform='translateY(-5px)';this.style.boxShadow='0 15px 40px rgba(255,217,61,0.1)'" onmouseout="this.style.borderColor='rgba(255,217,61,0.05)';this.style.transform='translateY(0)';this.style.boxShadow='none'">
                <div style="font-size:32px;color:#ffd93d;margin-bottom:8px;"><i class="fas fa-industry"></i></div>
                <h4 style="font-size:15px;font-weight:700;color:#fff;">Sektörel Çözümlerimiz</h4>
            </a>
            <a href="{{ route('eticaret') }}" class="glass tilt" data-aos="flip-up" data-aos-delay="400" style="text-decoration:none;padding:20px 25px;text-align:center;border-color:rgba(107,203,119,0.05);transition:all 0.4s ease;" onmouseover="this.style.borderColor='#6bcb77';this.style.transform='translateY(-5px)';this.style.boxShadow='0 15px 40px rgba(107,203,119,0.1)'" onmouseout="this.style.borderColor='rgba(107,203,119,0.05)';this.style.transform='translateY(0)';this.style.boxShadow='none'">
                <div style="font-size:32px;color:#6bcb77;margin-bottom:8px;"><i class="fas fa-shopping-cart"></i></div>
                <h4 style="font-size:15px;font-weight:700;color:#fff;">E-Ticaret</h4>
            </a>
            <a href="{{ route('edonusum') }}" class="glass tilt" data-aos="flip-up" data-aos-delay="500" style="text-decoration:none;padding:20px 25px;text-align:center;border-color:rgba(77,150,255,0.05);transition:all 0.4s ease;" onmouseover="this.style.borderColor='#4d96ff';this.style.transform='translateY(-5px)';this.style.boxShadow='0 15px 40px rgba(77,150,255,0.1)'" onmouseout="this.style.borderColor='rgba(77,150,255,0.05)';this.style.transform='translateY(0)';this.style.boxShadow='none'">
                <div style="font-size:32px;color:#4d96ff;margin-bottom:8px;"><i class="fas fa-sync-alt"></i></div>
                <h4 style="font-size:15px;font-weight:700;color:#fff;">E-Dönüşüm</h4>
            </a>
        </div>

        <!-- ===== ERP ÇÖZÜMLERİ ===== -->
        <div style="margin-top:30px;">
            <div class="section-header" data-aos="fade-up" style="margin-bottom:30px;">
                <h2 style="font-size:36px;">ERP <span>Çözümleri</span></h2>
            </div>

            <div class="glass" style="padding:40px;border-color:rgba(255,107,107,0.05);margin-bottom:30px;" data-aos="fade-up">
                <p style="color:#e2e8f0;font-size:16px;line-height:2;">
                    ERP, her işletmenin kendine özgü gereksinimlerine göre uyarlanabilen modüler bir yapıya sahiptir.
                    İster perakende, ister üretim veya hizmet sektöründe olun, ERP sistemimizi iş akışınıza göre
                    yapılandırabilirsiniz.
                </p>
            </div>

            <!-- ERP: Tüm İş Süreçleriniz İçin Entegre Çözüm -->
            <div style="margin-bottom:40px;" data-aos="fade-up">
                <h2 style="font-size:28px;font-weight:700;margin-bottom:20px;color:#ff6b6b;">ERP: Tüm İş Süreçleriniz İçin Entegre Çözüm</h2>

                <div class="glass" style="padding:35px;border-color:rgba(255,107,107,0.05);margin-bottom:20px;">
                    <h3 style="font-size:20px;font-weight:700;margin-bottom:12px;color:#ff6b6b;">Modüler Yapı ile Sektörünüze Uygun Çözümler</h3>
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        ERP, her işletmenin kendine özgü gereksinimlerine göre uyarlanabilen modüler bir yapıya sahiptir.
                        İster perakende, ister üretim veya hizmet sektöründe olun, ERP sistemimizi iş akışınıza göre
                        yapılandırabilirsiniz. Bu esnek yapı, ihtiyaç duyduğunuz modülleri ekleyip çıkarmanıza olanak tanır.
                    </p>
                </div>

                <div class="glass" style="padding:35px;border-color:rgba(255,217,61,0.05);">
                    <h3 style="font-size:20px;font-weight:700;margin-bottom:12px;color:#ffd93d;">İşletmenizin Tüm Süreçlerini Dijitalleştirin</h3>
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        ERP, işletmenizin tüm operasyonlarını tek bir platformda birleştirerek iş gücünüzü optimize eder.
                        Üretimden finansa, satıştan insan kaynaklarına kadar tüm süreçlerinizin yönetimini kolaylaştırır.
                        Entegre çözümler sunan yapısıyla manuel işlemlere olan ihtiyacı ortadan kaldırır,
                        iş süreçlerinizi dijitalleştirir.
                    </p>
                </div>
            </div>

            <!-- Öne Çıkan Özellikler -->
            <div style="margin-bottom:30px;" data-aos="fade-up">
                <h2 style="font-size:24px;font-weight:700;margin-bottom:25px;color:#ff6b6b;">Öne Çıkan Özellikler</h2>

                <div class="glass" style="padding:30px;border-color:rgba(255,107,107,0.05);margin-bottom:20px;">
                    <h3 style="font-size:18px;font-weight:700;margin-bottom:10px;color:#ff6b6b;">Gerçek Zamanlı Veriler ile Hızlı Karar Alma</h3>
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        ERP'nin gerçek zamanlı veri işleme yeteneği sayesinde, tüm iş süreçlerinizi anlık olarak takip edebilirsiniz.
                        Satışlar, stok durumu, üretim verileri ve finansal işlemler gibi kritik bilgiler her zaman güncel olur.
                        Bu sayede hızlı ve doğru kararlar alabilir, işletmenizin verimliliğini artırabilirsiniz.
                    </p>
                </div>

                <div class="glass" style="padding:30px;border-color:rgba(255,217,61,0.05);margin-bottom:20px;">
                    <h3 style="font-size:18px;font-weight:700;margin-bottom:10px;color:#ffd93d;">Otomasyon ile Verimlilik Sağlayın</h3>
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        Otomasyon özellikleri, tekrar eden görevleri minimize ederek zamandan tasarruf etmenizi sağlar.
                        Stok yönetiminden faturalamaya kadar birçok iş süreci otomatik hale getirilir, böylece manuel hata riskleri azalır.
                        Bu sayede çalışanlarınız daha stratejik görevler üzerinde yoğunlaşabilir.
                    </p>
                </div>

                <div class="glass" style="padding:30px;border-color:rgba(107,203,119,0.05);margin-bottom:20px;">
                    <h3 style="font-size:18px;font-weight:700;margin-bottom:10px;color:#6bcb77;">Bulut Tabanlı ve Her Yerden Erişim</h3>
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        ERP bulut tabanlı yapısıyla, internet erişiminiz olduğu her yerden ve her cihazdan kullanılabilir.
                        Ofiste, evde veya hareket halindeyken iş süreçlerinizi anında kontrol edebilir,
                        yönetimsel kararlarınızı hızla uygulayabilirsiniz. Ayrıca, bulut güvenliği sayesinde verileriniz her zaman güvende.
                    </p>
                </div>

                <div class="glass" style="padding:30px;border-color:rgba(77,150,255,0.05);">
                    <h3 style="font-size:18px;font-weight:700;margin-bottom:10px;color:#4d96ff;">Raporlama ve Analiz Yeteneği</h3>
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        Gelişmiş raporlama ve analiz araçlarıyla, işletmenizin performansını detaylı bir şekilde izleyebilirsiniz.
                        Detaylı finansal raporlar, satış analizleri, stok durumu gibi pek çok veri sunarak
                        geleceğe dair stratejik kararlarınızı destekler.
                    </p>
                </div>
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

<style>
@keyframes floatY {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}
@keyframes rotateIn {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>
@endsection
