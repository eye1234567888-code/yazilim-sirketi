@extends('layouts.app')

@section('title', 'E-Ticaret Çözümleri')

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
            <div class="badge"><i class="fas fa-shopping-cart" style="color:#6bcb77;"></i> E-Ticaret</div>
            <h1>E-Ticaret <span>Çözümleri</span></h1>
            <p>Dijital dünyada e-ticaret işletmeleri için özel çözümler</p>
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
            <a href="{{ route('erp') }}" class="glass tilt" data-aos="flip-up" style="text-decoration:none;padding:20px 25px;text-align:center;border-color:rgba(255,107,107,0.05);transition:all 0.4s ease;" onmouseover="this.style.borderColor='#ff6b6b';this.style.transform='translateY(-5px)';this.style.boxShadow='0 15px 40px rgba(255,107,107,0.1)'" onmouseout="this.style.borderColor='rgba(255,107,107,0.05)';this.style.transform='translateY(0)';this.style.boxShadow='none'">
                <div style="font-size:32px;color:#ff6b6b;margin-bottom:8px;"><i class="fas fa-cubes"></i></div>
                <h4 style="font-size:15px;font-weight:700;color:#fff;">ERP Çözümleri</h4>
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
            <a href="{{ route('eticaret') }}" class="glass tilt" data-aos="flip-up" data-aos-delay="400" style="text-decoration:none;padding:20px 25px;text-align:center;border-color:#6bcb77;background:rgba(107,203,119,0.05);transition:all 0.4s ease;border-width:2px;" onmouseover="this.style.borderColor='#6bcb77';this.style.transform='translateY(-5px)';this.style.boxShadow='0 15px 40px rgba(107,203,119,0.15)'" onmouseout="this.style.borderColor='#6bcb77';this.style.transform='translateY(0)';this.style.boxShadow='none'">
                <div style="font-size:32px;color:#6bcb77;margin-bottom:8px;"><i class="fas fa-shopping-cart"></i></div>
                <h4 style="font-size:15px;font-weight:700;color:#6bcb77;">E-Ticaret</h4>
                <span style="display:inline-block;background:#6bcb77;color:#fff;padding:2px 12px;border-radius:50px;font-size:10px;margin-top:5px;">Aktif</span>
            </a>
            <a href="{{ route('edonusum') }}" class="glass tilt" data-aos="flip-up" data-aos-delay="500" style="text-decoration:none;padding:20px 25px;text-align:center;border-color:rgba(77,150,255,0.05);transition:all 0.4s ease;" onmouseover="this.style.borderColor='#4d96ff';this.style.transform='translateY(-5px)';this.style.boxShadow='0 15px 40px rgba(77,150,255,0.1)'" onmouseout="this.style.borderColor='rgba(77,150,255,0.05)';this.style.transform='translateY(0)';this.style.boxShadow='none'">
                <div style="font-size:32px;color:#4d96ff;margin-bottom:8px;"><i class="fas fa-sync-alt"></i></div>
                <h4 style="font-size:15px;font-weight:700;color:#fff;">E-Dönüşüm</h4>
            </a>
        </div>

        <!-- ===== E-TİCARET ===== -->
        <div style="margin-top:30px;">
            <div class="section-header" data-aos="fade-up" style="margin-bottom:30px;">
                <h2 style="font-size:36px;">E-Ticaret <span>Çözümleri</span></h2>
            </div>

            <!-- Giriş -->
            <div class="glass" style="padding:40px;border-color:rgba(107,203,119,0.05);margin-bottom:30px;" data-aos="fade-up">
                <p style="color:#e2e8f0;font-size:16px;line-height:2;">
                    Günümüz dijital dünyasında, e-ticaret işletmeleri için çeşitli pazaryerlerinde yer almak,
                    müşteri kitlesini genişletmenin en etkili yollarından biridir. Ancak, birden fazla pazaryerinde
                    ürün ve sipariş yönetimi, stok takibi gibi işlemleri manuel olarak gerçekleştirmek zaman alıcı
                    ve hataya açık olabilir. Bu süreçleri kolaylaştırmak ve iş yükünüzü hafifletmek için
                    geliştirdiğimiz e-ticaret pazaryeri entegrasyonları ile yanınızdayız.
                </p>
            </div>

            <!-- E-Ticaret Entegrasyonu Nedir? -->
            <div style="margin-bottom:30px;" data-aos="fade-up">
                <h2 style="font-size:28px;font-weight:700;margin-bottom:20px;color:#6bcb77;">E-Ticaret Entegrasyonu Nedir?</h2>

                <div class="glass" style="padding:35px;border-color:rgba(107,203,119,0.05);">
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        E-ticaret pazaryeri entegrasyonu, işletmenizin kullandığı e-ticaret platformu ile bir veya birden fazla
                        pazaryeri (Amazon, Hepsiburada, Trendyol, N11, vb.) arasında veri alışverişini otomatik hale getiren bir sistemdir.
                        Bu entegrasyon sayesinde, ürünlerinizin listelenmesi, stok güncellemeleri, siparişlerin yönetimi,
                        kargo süreçleri gibi işlemler tek bir merkezden kolayca yönetilebilir hale gelir.
                    </p>
                </div>
            </div>

            <!-- Sunduğumuz Kolaylıklar -->
            <div style="margin-bottom:30px;" data-aos="fade-up">
                <h2 style="font-size:28px;font-weight:700;margin-bottom:20px;color:#6bcb77;">Sunduğumuz Kolaylıklar</h2>

                <div class="glass" style="padding:30px;border-color:rgba(255,107,107,0.05);margin-bottom:15px;">
                    <h4 style="font-size:18px;font-weight:700;margin-bottom:8px;color:#ff6b6b;">Zamandan Tasarruf</h4>
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        Farklı pazaryerlerinde aynı ürünleri tek tek listelemek veya stok güncellemeleri yapmak yerine,
                        tüm işlemleri tek bir platformdan hızlıca yönetmenizi sağlıyoruz.
                    </p>
                </div>

                <div class="glass" style="padding:30px;border-color:rgba(255,217,61,0.05);margin-bottom:15px;">
                    <h4 style="font-size:18px;font-weight:700;margin-bottom:8px;color:#ffd93d;">Hata Riskini Azaltma</h4>
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        Manuel veri girişi sırasında oluşabilecek hataları en aza indirerek, siparişlerinizi doğru bir şekilde
                        yönetmenize yardımcı oluyoruz.
                    </p>
                </div>

                <div class="glass" style="padding:30px;border-color:rgba(107,203,119,0.05);margin-bottom:15px;">
                    <h4 style="font-size:18px;font-weight:700;margin-bottom:8px;color:#6bcb77;">Gerçek Zamanlı Stok Takibi</h4>
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        Pazaryerlerindeki stoklarınızı gerçek zamanlı olarak güncelleyerek, aşırı satışı veya stokta olmayan
                        ürünlerin sipariş edilmesini engelliyoruz.
                    </p>
                </div>

                <div class="glass" style="padding:30px;border-color:rgba(77,150,255,0.05);margin-bottom:15px;">
                    <h4 style="font-size:18px;font-weight:700;margin-bottom:8px;color:#4d96ff;">Çoklu Platform Desteği</h4>
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        Birden fazla pazaryerinde aynı anda faaliyet gösteren işletmeler için, tüm sipariş ve ürün yönetimini
                        tek bir sistem üzerinden kontrol edebilme olanağı sunuyoruz.
                    </p>
                </div>

                <div class="glass" style="padding:30px;border-color:rgba(255,107,107,0.05);">
                    <h4 style="font-size:18px;font-weight:700;margin-bottom:8px;color:#ff6b6b;">Kolay Entegrasyon</h4>
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        E-ticaret siteniz hangi altyapıyı kullanıyor olursa olsun, esnek entegrasyon çözümlerimizle,
                        pazaryerlerine sorunsuz bir şekilde bağlanabilirsiniz.
                    </p>
                </div>
            </div>

            <!-- İş Süreçlerinizi Kolaylaştırın -->
            <div data-aos="fade-up">
                <div class="glass" style="padding:35px;border-color:rgba(107,203,119,0.05);text-align:center;background:linear-gradient(135deg,rgba(107,203,119,0.05),rgba(16,185,129,0.05));">
                    <h3 style="font-size:22px;font-weight:700;margin-bottom:15px;color:#6bcb77;">İş Süreçlerinizi Kolaylaştırın, Satışlarınızı Artırın</h3>
                    <p style="color:#e2e8f0;font-size:16px;line-height:2;max-width:800px;margin:0 auto;">
                        E-ticaret pazaryeri entegrasyonu ile iş süreçlerinizi otomatikleştirerek, operasyonel yükünüzü hafifletirken
                        müşterilerinize daha iyi bir hizmet sunabilirsiniz. Size özel çözümler sunuyor, işinizi dijital dünyada
                        daha rekabetçi bir hale getiriyoruz.
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
