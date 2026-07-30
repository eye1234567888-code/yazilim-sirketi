@extends('layouts.app')

@section('title', 'Mobil Çözümler')

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
            <div class="badge"><i class="fas fa-mobile-alt" style="color:#ffd93d;"></i> Mobil Çözümler</div>
            <h1>Mobil <span>Çözümler</span></h1>
            <p>Mobil dünyada etkin olmanın önemini biliyoruz.</p>
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
            <a href="{{ route('mobil') }}" class="glass tilt" data-aos="flip-up" data-aos-delay="100" style="text-decoration:none;padding:20px 25px;text-align:center;border-color:#ffd93d;background:rgba(255,217,61,0.05);transition:all 0.4s ease;border-width:2px;" onmouseover="this.style.borderColor='#ffd93d';this.style.transform='translateY(-5px)';this.style.boxShadow='0 15px 40px rgba(255,217,61,0.15)'" onmouseout="this.style.borderColor='#ffd93d';this.style.transform='translateY(0)';this.style.boxShadow='none'">
                <div style="font-size:32px;color:#ffd93d;margin-bottom:8px;"><i class="fas fa-mobile-alt"></i></div>
                <h4 style="font-size:15px;font-weight:700;color:#ffd93d;">Mobil Çözümler</h4>
                <span style="display:inline-block;background:#ffd93d;color:#0a0e1a;padding:2px 12px;border-radius:50px;font-size:10px;margin-top:5px;">Aktif</span>
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

        <!-- ===== MOBİL ÇÖZÜMLER ===== -->
        <div style="margin-top:30px;">
            <div class="section-header" data-aos="fade-up" style="margin-bottom:30px;">
                <h2 style="font-size:36px;">Mobil <span>Çözümler</span></h2>
            </div>

            <div class="glass" style="padding:40px;border-color:rgba(255,217,61,0.05);margin-bottom:30px;" data-aos="fade-up">
                <p style="color:#e2e8f0;font-size:16px;line-height:2;">
                    Mobil dünyada etkin olmanın önemini biliyoruz. Sizin için en uygun mobil çözümleri geliştirmek amacıyla,
                    kullanıcılara mükemmel deneyimler sunan mobil uygulamalar yaratıyoruz. İhtiyaçlarınıza özel olarak
                    tasarlanmış uygulamalarla çözümler üretiyoruz.
                </p>
            </div>

            <!-- Mobil Çözümlerimiz -->
            <div style="margin-bottom:40px;" data-aos="fade-up">
                <h2 style="font-size:28px;font-weight:700;margin-bottom:20px;color:#ffd93d;">Mobil Çözümlerimiz</h2>

                <div class="glass" style="padding:35px;border-color:rgba(255,217,61,0.05);">
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        Mobil dünyada etkin olmanın önemini biliyoruz. Sizin için en uygun mobil çözümleri geliştirmek amacıyla,
                        kullanıcılara mükemmel deneyimler sunan mobil uygulamalar yaratıyoruz. İhtiyaçlarınıza özel olarak
                        tasarlanmış uygulamalarla, mobil teknolojilerin sunduğu tüm avantajları işinize entegre ediyoruz.
                    </p>
                </div>
            </div>

            <!-- Mobil Uygulama Nedir? -->
            <div style="margin-bottom:40px;" data-aos="fade-up">
                <h2 style="font-size:28px;font-weight:700;margin-bottom:20px;color:#ffd93d;">Mobil Uygulama Nedir?</h2>

                <div class="glass" style="padding:35px;border-color:rgba(255,107,107,0.05);margin-bottom:20px;">
                    <h3 style="font-size:20px;font-weight:700;margin-bottom:12px;color:#ff6b6b;">Mobil Tasarım (UX/UI Tasarımı)</h3>
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        Mobil tasarım, bir mobil cihazda kullanıcıların etkileşimde bulunduğu her şeyin görsel ve fonksiyonel yönlerini kapsar.
                        İyi bir mobil tasarım, kullanıcıların uygulama veya web sitesini kolayca kullanabilmesini ve keyif almasını sağlar.
                        İki ana bileşeni vardır:
                    </p>
                </div>

                <div class="glass" style="padding:30px;border-color:rgba(255,217,61,0.05);margin-bottom:15px;">
                    <h4 style="font-size:18px;font-weight:700;margin-bottom:8px;color:#ffd93d;">UX (User Experience – Kullanıcı Deneyimi)</h4>
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        Kullanıcı deneyimi, bir mobil uygulama veya web sitesinin kullanıcı tarafından nasıl algılandığı ve nasıl kullanıldığına odaklanır.
                        Amaç, kullanıcıların ihtiyaçlarını anlamak ve bu ihtiyaçlara en iyi şekilde karşılık verecek, sezgisel bir deneyim sunmaktır.
                        UX tasarımında, uygulamanın hızı, erişilebilirliği, etkileşimli elemanların yerleşimi ve kullanıcı akışı gibi unsurlar önemlidir.
                    </p>
                </div>

                <div class="glass" style="padding:30px;border-color:rgba(107,203,119,0.05);">
                    <h4 style="font-size:18px;font-weight:700;margin-bottom:8px;color:#6bcb77;">UI (User Interface – Kullanıcı Arayüzü)</h4>
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        Kullanıcı arayüzü, kullanıcıların uygulama ile etkileşime geçtiği görsel öğeleri kapsar. Bu, düğmeler, renkler, yazı tipleri,
                        simgeler ve uygulamanın genel görünümünü içerir. UI tasarımı, uygulamanın estetik açıdan çekici olmasını ve kullanıcıların
                        kolayca etkileşimde bulunmalarını sağlamayı hedefler.
                    </p>
                </div>
            </div>

            <!-- Mobil Çözümler Listesi -->
            <div style="margin-bottom:40px;" data-aos="fade-up">
                <h2 style="font-size:28px;font-weight:700;margin-bottom:20px;color:#ffd93d;">Mobil Çözümler</h2>

                <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;">
                    <div class="glass" style="padding:25px;border-color:rgba(255,217,61,0.05);">
                        <div style="display:flex;gap:15px;align-items:flex-start;">
                            <div style="width:40px;height:40px;border-radius:50%;background:rgba(255,217,61,0.1);display:flex;align-items:center;justify-content:center;font-size:18px;color:#ffd93d;flex-shrink:0;margin-top:2px;">
                                <span style="font-weight:700;">1</span>
                            </div>
                            <div>
                                <h4 style="font-size:16px;font-weight:700;margin-bottom:5px;color:#ffd93d;">Mobil Uygulama Geliştirme</h4>
                                <p style="color:#94a3b8;font-size:14px;line-height:1.7;">iOS ve Android platformlarında yüksek kaliteli, kullanıcı dostu uygulamalar geliştirme.</p>
                            </div>
                        </div>
                    </div>
                    <div class="glass" style="padding:25px;border-color:rgba(255,107,107,0.05);">
                        <div style="display:flex;gap:15px;align-items:flex-start;">
                            <div style="width:40px;height:40px;border-radius:50%;background:rgba(255,107,107,0.1);display:flex;align-items:center;justify-content:center;font-size:18px;color:#ff6b6b;flex-shrink:0;margin-top:2px;">
                                <span style="font-weight:700;">2</span>
                            </div>
                            <div>
                                <h4 style="font-size:16px;font-weight:700;margin-bottom:5px;color:#ff6b6b;">Web Mobil Uyumluluğu</h4>
                                <p style="color:#94a3b8;font-size:14px;line-height:1.7;">Web sitenizi mobil cihazlara uyumlu hale getirme.</p>
                            </div>
                        </div>
                    </div>
                    <div class="glass" style="padding:25px;border-color:rgba(107,203,119,0.05);">
                        <div style="display:flex;gap:15px;align-items:flex-start;">
                            <div style="width:40px;height:40px;border-radius:50%;background:rgba(107,203,119,0.1);display:flex;align-items:center;justify-content:center;font-size:18px;color:#6bcb77;flex-shrink:0;margin-top:2px;">
                                <span style="font-weight:700;">3</span>
                            </div>
                            <div>
                                <h4 style="font-size:16px;font-weight:700;margin-bottom:5px;color:#6bcb77;">E-ticaret Çözümleri</h4>
                                <p style="color:#94a3b8;font-size:14px;line-height:1.7;">Mobil üzerinden kolayca alışveriş yapabilen kullanıcılar için mobil uyumlu e-ticaret uygulamaları geliştirme.</p>
                            </div>
                        </div>
                    </div>
                    <div class="glass" style="padding:25px;border-color:rgba(77,150,255,0.05);">
                        <div style="display:flex;gap:15px;align-items:flex-start;">
                            <div style="width:40px;height:40px;border-radius:50%;background:rgba(77,150,255,0.1);display:flex;align-items:center;justify-content:center;font-size:18px;color:#4d96ff;flex-shrink:0;margin-top:2px;">
                                <span style="font-weight:700;">4</span>
                            </div>
                            <div>
                                <h4 style="font-size:16px;font-weight:700;margin-bottom:5px;color:#4d96ff;">Performans İyileştirmeleri</h4>
                                <p style="color:#94a3b8;font-size:14px;line-height:1.7;">Mevcut uygulamalarınızın hızını ve kullanıcı deneyimini optimize etme.</p>
                            </div>
                        </div>
                    </div>
                    <div class="glass" style="padding:25px;border-color:rgba(255,217,61,0.05);grid-column:span 2;">
                        <div style="display:flex;gap:15px;align-items:flex-start;">
                            <div style="width:40px;height:40px;border-radius:50%;background:rgba(255,217,61,0.1);display:flex;align-items:center;justify-content:center;font-size:18px;color:#ffd93d;flex-shrink:0;margin-top:2px;">
                                <span style="font-weight:700;">5</span>
                            </div>
                            <div>
                                <h4 style="font-size:16px;font-weight:700;margin-bottom:5px;color:#ffd93d;">UX/UI Tasarımı</h4>
                                <p style="color:#94a3b8;font-size:14px;line-height:1.7;">Uygulamalarınızın estetik ve kullanışlı olmasını sağlayacak tasarımlar.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobil Uygulamaların Avantajları -->
            <div style="margin-bottom:40px;" data-aos="fade-up">
                <div class="glass" style="padding:35px;border-color:rgba(255,217,61,0.05);">
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;margin-bottom:15px;">
                        Mobil uygulamalar, web sitelerinin sunduğu temel işlevleri daha hızlı, kişiselleştirilmiş ve etkileşimli bir şekilde sunar.
                        Kullanıcı deneyimi, güvenlik, çevrimdışı erişim, hızlı bildirimler ve kişisel hizmetler gibi avantajlarla,
                        mobil uygulamalar, bir işletmenin çevrimiçi varlığını güçlendirebilir. Web sitesine ek olarak bir mobil uygulama sunmak,
                        markanızı farklılaştırabilir ve kullanıcı bağlılığını artırabilir. Bu sebeplerle, mobil uygulama geliştirmek,
                        özellikle mobil cihaz kullanımının hızla arttığı günümüzde, işletmeniz için önemli bir adım olabilir.
                    </p>
                </div>
            </div>

            <!-- Mobil Uygulama Neden Tercih Edilmeli? -->
            <div style="margin-bottom:40px;" data-aos="fade-up">
                <h2 style="font-size:28px;font-weight:700;margin-bottom:20px;color:#ffd93d;">Mobil Uygulama?</h2>

                <div class="glass" style="padding:35px;border-color:rgba(255,217,61,0.05);margin-bottom:20px;">
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;margin-bottom:15px;">
                        Bugün, internetin büyük bir kısmı mobil cihazlar üzerinden erişilmektedir. Akıllı telefonlar ve tabletler,
                        internet kullanıcılarının çoğunluğunun tercihi haline gelmiştir. Bu da web sitesi sahiplerini,
                        mobil kullanıcı deneyimini daha iyi sunabilecek çözümler aramaya zorlamaktadır.
                        Birçok işletme, web sitesine ek olarak mobil uygulama geliştirmeyi tercih etmektedir.
                        Peki, bir mobil uygulama neden web sitesine tercih edilmelidir? İşte bu sorunun cevabı:
                    </p>
                </div>

                <div class="glass" style="padding:30px;border-color:rgba(255,107,107,0.05);margin-bottom:15px;">
                    <h4 style="font-size:18px;font-weight:700;margin-bottom:8px;color:#ff6b6b;">1. Kullanıcı Deneyimini İyileştirme</h4>
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        Mobil uygulamalar, kullanıcıların web sitelerine kıyasla daha hızlı, sorunsuz ve etkileşimli bir deneyim yaşamasını sağlar.
                        Mobil uygulamalar, uygulama içindeki tüm içerik ve fonksiyonları optimize ederek kullanıcılara akıcı bir deneyim sunar.
                        Ayrıca, mobil uygulamalar internet bağlantısına bağımlı olmadan, yerel veritabanı veya önbellekler sayesinde
                        içeriklere hızlı erişim imkânı sağlar.
                    </p>
                </div>

                <div class="glass" style="padding:30px;border-color:rgba(255,217,61,0.05);margin-bottom:15px;">
                    <h4 style="font-size:18px;font-weight:700;margin-bottom:8px;color:#ffd93d;">3. Daha Hızlı Erişim</h4>
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        Web siteleri, internet tarayıcıları üzerinden erişildiği için bağlantı hızına ve tarayıcı performansına bağlıdır.
                        Oysa mobil uygulamalar, cihazın yerel kaynaklarını kullanarak çok daha hızlı açılır ve daha hızlı işlem yapar.
                        Bu, özellikle internet bağlantısının zayıf olduğu durumlarda kullanıcıların olumlu bir deneyim yaşamasını sağlar.
                    </p>
                </div>

                <div class="glass" style="padding:30px;border-color:rgba(107,203,119,0.05);margin-bottom:15px;">
                    <h4 style="font-size:18px;font-weight:700;margin-bottom:8px;color:#6bcb77;">4. Kişisel ve Yerel Hizmetler</h4>
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        Mobil uygulamalar, cihazın GPS ve kamera gibi yerel özelliklerine erişim sağlayarak daha kişiselleştirilmiş hizmetler sunabilir.
                        Örneğin, bir kullanıcı mağazanıza yaklaşıyorsa, indirimler hakkında bildirim alabilir veya bir kullanıcı alışveriş yaparken
                        ürünün QR kodunu tarayabilir. Bu tür özellikler, web sitelerinde sınırlı olsa da mobil uygulamalarda daha geniş imkanlar sunar.
                    </p>
                </div>

                <div class="glass" style="padding:30px;border-color:rgba(77,150,255,0.05);margin-bottom:15px;">
                    <h4 style="font-size:18px;font-weight:700;margin-bottom:8px;color:#4d96ff;">6. Çevrimdışı Erişim</h4>
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        Mobil uygulamalar, internet bağlantısı olmadan da çalışabilme özelliğine sahiptir. Kullanıcılar, uygulamayı bir kez açıp
                        içeriğini indirdikten sonra, internet olmadan da uygulamanın bazı özelliklerine erişebilirler.
                        Web siteleri ise genellikle çevrimdışı erişimi mümkün kılmaz.
                    </p>
                </div>

                <div class="glass" style="padding:30px;border-color:rgba(255,107,107,0.05);">
                    <h4 style="font-size:18px;font-weight:700;margin-bottom:8px;color:#ff6b6b;">7. Daha Etkili Veri Toplama ve Analiz</h4>
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        Mobil uygulamalar, kullanıcıların davranışlarını ve tercihlerini daha doğru bir şekilde izleyebilir.
                        Uygulama içi analiz araçları, kullanıcıların ne tür içerikleri tercih ettiğini, hangi özellikleri kullandığını
                        ve uygulamaya nasıl etkileşimde bulunduklarını takip etmenize olanak tanır. Bu veriler, işletmenizin daha etkili
                        stratejiler oluşturmasına yardımcı olur.
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
