@extends('layouts.app')

@section('title', 'CRM Çözümleri')

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
            <div class="badge"><i class="fas fa-users" style="color:#ff6b6b;"></i> CRM Çözümleri</div>
            <h1>CRM <span>Çözümleri</span></h1>
            <p>Müşteri ilişkileri yönetimini optimize eden kapsamlı çözümler</p>
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
            <a href="{{ route('crm') }}" class="glass tilt" data-aos="flip-up" data-aos-delay="200" style="text-decoration:none;padding:20px 25px;text-align:center;border-color:#ff6b6b;background:rgba(255,107,107,0.05);transition:all 0.4s ease;border-width:2px;" onmouseover="this.style.borderColor='#ff6b6b';this.style.transform='translateY(-5px)';this.style.boxShadow='0 15px 40px rgba(255,107,107,0.15)'" onmouseout="this.style.borderColor='#ff6b6b';this.style.transform='translateY(0)';this.style.boxShadow='none'">
                <div style="font-size:32px;color:#ff6b6b;margin-bottom:8px;"><i class="fas fa-users"></i></div>
                <h4 style="font-size:15px;font-weight:700;color:#ff6b6b;">CRM Çözümleri</h4>
                <span style="display:inline-block;background:#ff6b6b;color:#fff;padding:2px 12px;border-radius:50px;font-size:10px;margin-top:5px;">Aktif</span>
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

        <!-- ===== CRM ÇÖZÜMLERİ ===== -->
        <div style="margin-top:30px;">
            <div class="section-header" data-aos="fade-up" style="margin-bottom:30px;">
                <h2 style="font-size:36px;">CRM <span>Çözümleri</span></h2>
            </div>

            <!-- Giriş -->
            <div class="glass" style="padding:40px;border-color:rgba(255,107,107,0.05);margin-bottom:30px;" data-aos="fade-up">
                <p style="color:#e2e8f0;font-size:16px;line-height:2;">
                    İşletmelerin maliyetlerinin arttığı, kar oranlarının ciddi anlamda düştüğü ve yeni satış yapmanın zor olduğu günümüzde;
                    En doğru hamle, mevcut müşterilerin ve müşteri adaylarının doğru analiz edilmesi ve onlara en uygun olan çözümlerin
                    sunulması ile aşılabilir bir yapıya geldi.
                </p>
            </div>

            <!-- CRM ÇÖZÜMLERİ – CRM PAKETLERİ -->
            <div style="margin-bottom:40px;" data-aos="fade-up">
                <h2 style="font-size:28px;font-weight:700;margin-bottom:20px;color:#ff6b6b;">CRM ÇÖZÜMLERİ – CRM PAKETLERİ</h2>

                <div class="glass" style="padding:35px;border-color:rgba(255,107,107,0.05);margin-bottom:20px;">
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        Firmaların sundukları hizmet / ürün ve çözümlerin belirlenen satış hedeflerine erişmesi, alıcıyla kurdukları ilişkinin
                        doğru ve başarılı olması ile doğrudan alakalı. Müşterilerini en doğru şekilde ve yakından tanıyan firmalar
                        bu anlamda çok daha başarılı olabiliyorlar.
                    </p>
                </div>

                <div class="glass" style="padding:35px;border-color:rgba(255,217,61,0.05);">
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        Müşteriler ile doğrudan iletişim halinde olan firmaların (Sigortacılık, Perakende, Finans, Otomotiv, İlaç,
                        Medya / Medya Planlama gibi firmalar) başarılı olduğu sektörlerde, Pazarlama, Dijital Pazarlama, Satış,
                        Satış sonrası hizmetler, kalite yönetimi süreçlerinin daha iyi ve aktif bir hale gelebilmesi hiç şüphesiz ki
                        Müşteri ilişkileri yönetimi çözümlerinin etkili bir şekilde kullanılması ile mümkün olabilmektedir.
                    </p>
                </div>
            </div>

            <!-- CRM Uzmanlığı -->
            <div style="margin-bottom:40px;" data-aos="fade-up">
                <div class="glass" style="padding:35px;border-color:rgba(255,107,107,0.05);">
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        Müşteri İlişkileri Yönetimi konusunda uzman olan yazılım ekibimiz, kavramsal analizden sonra ihtiyaç duyulan çözümün
                        uyarlamasına ve implementasyonuna kadar olan her aşamada CRM yapılanmasına önderlik eder. Firmalar, kendi müşterileri
                        ile ilişkilerini doğru ve başarılı yöneterek elde edilen veriler ışığında kendi süreçlerinin iyileşmesine veya
                        hizmetleri veya ürünlerinin daha hızlı, doğru ve ölçülebilir bir şekilde pazarlanmasına imkan sağlayabilir.
                    </p>
                </div>
            </div>

            <!-- CRM Çözümü Kullanmanın Avantajları -->
            <div style="margin-bottom:40px;" data-aos="fade-up">
                <h2 style="font-size:28px;font-weight:700;margin-bottom:20px;color:#ff6b6b;">CRM Çözümü Kullanmanın Avantajları</h2>

                <div style="display:grid;grid-template-columns:1fr 1fr;gap:15px;">
                    <div class="glass" style="padding:20px 25px;border-color:rgba(255,107,107,0.05);display:flex;align-items:center;gap:15px;">
                        <div style="width:30px;height:30px;border-radius:50%;background:rgba(255,107,107,0.1);display:flex;align-items:center;justify-content:center;font-size:14px;color:#ff6b6b;flex-shrink:0;font-weight:700;">1</div>
                        <span style="color:#e2e8f0;font-size:15px;">Müşteri Memnuniyeti</span>
                    </div>
                    <div class="glass" style="padding:20px 25px;border-color:rgba(255,217,61,0.05);display:flex;align-items:center;gap:15px;">
                        <div style="width:30px;height:30px;border-radius:50%;background:rgba(255,217,61,0.1);display:flex;align-items:center;justify-content:center;font-size:14px;color:#ffd93d;flex-shrink:0;font-weight:700;">2</div>
                        <span style="color:#e2e8f0;font-size:15px;">Müşteri Kazanma / Kaybetme Sebeplerinin Analizi</span>
                    </div>
                    <div class="glass" style="padding:20px 25px;border-color:rgba(107,203,119,0.05);display:flex;align-items:center;gap:15px;">
                        <div style="width:30px;height:30px;border-radius:50%;background:rgba(107,203,119,0.1);display:flex;align-items:center;justify-content:center;font-size:14px;color:#6bcb77;flex-shrink:0;font-weight:700;">3</div>
                        <span style="color:#e2e8f0;font-size:15px;">Pazarlama Süreçlerinin Doğru Yapılandırılması</span>
                    </div>
                    <div class="glass" style="padding:20px 25px;border-color:rgba(77,150,255,0.05);display:flex;align-items:center;gap:15px;">
                        <div style="width:30px;height:30px;border-radius:50%;background:rgba(77,150,255,0.1);display:flex;align-items:center;justify-content:center;font-size:14px;color:#4d96ff;flex-shrink:0;font-weight:700;">4</div>
                        <span style="color:#e2e8f0;font-size:15px;">Otomatikleştirilen Süreçler</span>
                    </div>
                    <div class="glass" style="padding:20px 25px;border-color:rgba(255,107,107,0.05);display:flex;align-items:center;gap:15px;">
                        <div style="width:30px;height:30px;border-radius:50%;background:rgba(255,107,107,0.1);display:flex;align-items:center;justify-content:center;font-size:14px;color:#ff6b6b;flex-shrink:0;font-weight:700;">5</div>
                        <span style="color:#e2e8f0;font-size:15px;">Entegrasyon ve implementasyon kolaylığı</span>
                    </div>
                    <div class="glass" style="padding:20px 25px;border-color:rgba(255,217,61,0.05);display:flex;align-items:center;gap:15px;">
                        <div style="width:30px;height:30px;border-radius:50%;background:rgba(255,217,61,0.1);display:flex;align-items:center;justify-content:center;font-size:14px;color:#ffd93d;flex-shrink:0;font-weight:700;">6</div>
                        <span style="color:#e2e8f0;font-size:15px;">Uçtan-uca yönetim metodları</span>
                    </div>
                    <div class="glass" style="padding:20px 25px;border-color:rgba(107,203,119,0.05);display:flex;align-items:center;gap:15px;">
                        <div style="width:30px;height:30px;border-radius:50%;background:rgba(107,203,119,0.1);display:flex;align-items:center;justify-content:center;font-size:14px;color:#6bcb77;flex-shrink:0;font-weight:700;">7</div>
                        <span style="color:#e2e8f0;font-size:15px;">Teklif / Sözleşme yönetimi</span>
                    </div>
                    <div class="glass" style="padding:20px 25px;border-color:rgba(77,150,255,0.05);display:flex;align-items:center;gap:15px;">
                        <div style="width:30px;height:30px;border-radius:50%;background:rgba(77,150,255,0.1);display:flex;align-items:center;justify-content:center;font-size:14px;color:#4d96ff;flex-shrink:0;font-weight:700;">8</div>
                        <span style="color:#e2e8f0;font-size:15px;">Yüksek Kazanç</span>
                    </div>
                    <div class="glass" style="padding:20px 25px;border-color:rgba(255,107,107,0.05);display:flex;align-items:center;gap:15px;">
                        <div style="width:30px;height:30px;border-radius:50%;background:rgba(255,107,107,0.1);display:flex;align-items:center;justify-content:center;font-size:14px;color:#ff6b6b;flex-shrink:0;font-weight:700;">9</div>
                        <span style="color:#e2e8f0;font-size:15px;">Karlılık ve Maliyet Analizi</span>
                    </div>
                    <div class="glass" style="padding:20px 25px;border-color:rgba(255,217,61,0.05);display:flex;align-items:center;gap:15px;">
                        <div style="width:30px;height:30px;border-radius:50%;background:rgba(255,217,61,0.1);display:flex;align-items:center;justify-content:center;font-size:14px;color:#ffd93d;flex-shrink:0;font-weight:700;">10</div>
                        <span style="color:#e2e8f0;font-size:15px;">Satış Ekiplerinin ve Satışçıların Performans Takibi</span>
                    </div>
                </div>
            </div>

            <!-- CRM Çözümleri Detay -->
            <div style="margin-bottom:30px;" data-aos="fade-up">
                <div class="glass" style="padding:35px;border-color:rgba(255,107,107,0.05);margin-bottom:20px;">
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        CRM çözümleri sayesinde, müşteri ve müşteri adaylarınızı kolayca takip edebilir ve raporlayabilirsiniz.
                    </p>
                </div>

                <div class="glass" style="padding:35px;border-color:rgba(255,217,61,0.05);margin-bottom:20px;">
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        CRM Çözümü'nün kullanıcı dostu arayüzü sayesinde, müşteri ve aday müşteri bilgilerini görebileceğiniz,
                        müşteriler ile ilgili görevleri girebildiğiniz, hatırlatma ve ziyaret planları oluşturabileceğiniz ve
                        görevleri diğer kullanıcılara atayabileceğiniz bir sistemdir.
                    </p>
                </div>

                <div class="glass" style="padding:35px;border-color:rgba(107,203,119,0.05);">
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        Araç takip sistemleri ile entegre olarak çalışan yapısı sayesinde satış uzmanlarınızın yapması gereken
                        ziyaretleri yapıp yapmadığı, ne kadar süre durakladığı ve günlük, haftalık ve aylık rotaları tek bir tuşla raporlanabilir.
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
