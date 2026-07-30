@extends('layouts.app')

@section('title', 'Sektörel Çözümler')

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
            <div class="badge"><i class="fas fa-industry" style="color:#ffd93d;"></i> Sektörel Çözümler</div>
            <h1>Sektörel <span>Çözümler</span></h1>
            <p>Farklı sektörlerin dinamik ihtiyaçlarına yönelik yenilikçi yazılım çözümleri</p>
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
            <a href="{{ route('sektorel') }}" class="glass tilt" data-aos="flip-up" data-aos-delay="300" style="text-decoration:none;padding:20px 25px;text-align:center;border-color:#ffd93d;background:rgba(255,217,61,0.05);transition:all 0.4s ease;border-width:2px;" onmouseover="this.style.borderColor='#ffd93d';this.style.transform='translateY(-5px)';this.style.boxShadow='0 15px 40px rgba(255,217,61,0.15)'" onmouseout="this.style.borderColor='#ffd93d';this.style.transform='translateY(0)';this.style.boxShadow='none'">
                <div style="font-size:32px;color:#ffd93d;margin-bottom:8px;"><i class="fas fa-industry"></i></div>
                <h4 style="font-size:15px;font-weight:700;color:#ffd93d;">Sektörel Çözümlerimiz</h4>
                <span style="display:inline-block;background:#ffd93d;color:#0a0e1a;padding:2px 12px;border-radius:50px;font-size:10px;margin-top:5px;">Aktif</span>
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

        <!-- ===== SEKTÖREL ÇÖZÜMLER ===== -->
        <div style="margin-top:30px;">
            <div class="section-header" data-aos="fade-up" style="margin-bottom:30px;">
                <h2 style="font-size:36px;">Sektörel <span>Çözümlerimiz</span></h2>
            </div>

            <!-- Giriş -->
            <div class="glass" style="padding:40px;border-color:rgba(255,217,61,0.05);margin-bottom:30px;" data-aos="fade-up">
                <p style="color:#e2e8f0;font-size:16px;line-height:2;">
                    Farklı sektörlerin dinamik ihtiyaçlarına yönelik yenilikçi yazılım çözümleri sunuyoruz.
                    İşletmelerin dijital dönüşüm süreçlerini destekleyerek, verimliliklerini artırmalarını ve
                    rekabet avantajı kazanmalarını sağlıyoruz. Müşteri odaklı yaklaşımımız ve sektöre özgü
                    tecrübemizle, birçok alanda özelleştirilmiş çözümler üretiyoruz.
                </p>
            </div>

            <!-- Üretim ve Sanayi Çözümleri -->
            <div style="margin-bottom:30px;" data-aos="fade-up">
                <h2 style="font-size:28px;font-weight:700;margin-bottom:20px;color:#ffd93d;">Üretim ve Sanayi Çözümleri</h2>

                <div class="glass" style="padding:35px;border-color:rgba(255,107,107,0.05);">
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        Üretim sektöründe faaliyet gösteren firmalar için geliştirdiğimiz yazılımlar, üretim süreçlerini iyileştirirken
                        maliyetleri düşürmeyi hedefler. Üretim planlamasından tedarik zinciri yönetimine kadar tüm operasyonların
                        verimli bir şekilde yürütülmesini sağlayan çözümlerimiz, sektördeki değişken talebe hızlı yanıt vermenizi mümkün kılar.
                    </p>
                </div>
            </div>

            <!-- Mağaza Yönetimi Çözümleri -->
            <div style="margin-bottom:30px;" data-aos="fade-up">
                <h2 style="font-size:28px;font-weight:700;margin-bottom:20px;color:#ffd93d;">Mağaza Yönetimi Çözümleri</h2>

                <div class="glass" style="padding:35px;border-color:rgba(255,217,61,0.05);">
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        Perakende ve e-ticaret sektörü için sunduğumuz çözümler, satış süreçlerini optimize ederken,
                        stok yönetimini kolaylaştırır. Özellikle e-ticaret platformları ile entegre çalışan ERP ve CRM çözümlerimiz,
                        müşteri memnuniyetini en üst düzeye çıkararak online satış süreçlerini hızlandırır.
                        Sipariş yönetiminden, depo ve sevkiyat takibine kadar tam entegre çözümlerle işinizi her açıdan
                        kontrol altında tutmanıza yardımcı oluruz.
                    </p>
                </div>
            </div>

            <!-- Restoran ve Gıda Sektörü Çözümleri -->
            <div style="margin-bottom:30px;" data-aos="fade-up">
                <h2 style="font-size:28px;font-weight:700;margin-bottom:20px;color:#ffd93d;">Restoran ve Gıda Sektörü Çözümleri</h2>

                <div class="glass" style="padding:35px;border-color:rgba(107,203,119,0.05);">
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        Restoranlar ve gıda işletmeleri için geliştirdiğimiz yönetim çözümleri, sipariş yönetiminden stok takibine
                        kadar tüm operasyonlarını kolaylaştırır. Restoranların mutfak süreçlerini hızlandırarak müşteri memnuniyetini
                        artıran bu sistemler, aynı zamanda gelirlerinizi optimize etmenizi sağlar.
                    </p>
                </div>
            </div>

            <!-- Servis Yönetimi Çözümleri -->
            <div style="margin-bottom:30px;" data-aos="fade-up">
                <h2 style="font-size:28px;font-weight:700;margin-bottom:20px;color:#ffd93d;">Servis Yönetimi Çözümleri</h2>

                <div class="glass" style="padding:35px;border-color:rgba(77,150,255,0.05);">
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        Servis sağlayıcılarının operasyonel süreçlerini kolaylaştırmak ve müşteri memnuniyetini artırmak amacıyla
                        geliştirdiğimiz Servis Yönetimi Çözümleri, hizmet kalitenizi optimize etmenize yardımcı olur.
                        Tüm servis süreçlerinizi tek bir platformda yönetmenize olanak tanıyan yazılımlarımız,
                        iş akışlarınızı hızlandırarak kaynaklarınızı daha verimli kullanmanızı sağlar.
                    </p>
                </div>
            </div>

            <!-- Hizmet Sektörü Çözümleri -->
            <div style="margin-bottom:30px;" data-aos="fade-up">
                <h2 style="font-size:28px;font-weight:700;margin-bottom:20px;color:#ffd93d;">Hizmet Sektörü Çözümleri</h2>

                <div class="glass" style="padding:35px;border-color:rgba(255,107,107,0.05);">
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        Hizmet sektöründe faaliyet gösteren şirketler için iş takibi, müşteri yönetimi, randevu planlaması gibi
                        süreçleri dijitalleştirerek operasyonel verimliliği artırıyoruz. Özellikle müşteri ilişkileri yönetimi (CRM)
                        ve servis yönetim sistemlerimiz, hizmet kalitenizi artırmanızı ve müşteri sadakatini sağlamanızı olanak tanır.
                    </p>
                </div>
            </div>

            <!-- Diğer Sektörler -->
            <div data-aos="fade-up">
                <h2 style="font-size:28px;font-weight:700;margin-bottom:20px;color:#ffd93d;">Diğer Sektörler</h2>

                <div class="glass" style="padding:35px;border-color:rgba(255,217,61,0.05);">
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        Geliştirdiğimiz programlarımız ile sektörünüze uygun, tüm süreçlerinizi başarı ile yönetebilecek;
                        zamandan, maliyetten ve iş yükünden tasarruf edeceksiniz.
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
