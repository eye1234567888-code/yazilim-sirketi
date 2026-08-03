@extends('layouts.app')

@section('title', 'E-Dönüşüm Çözümleri')

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
            <div class="badge"><i class="fas fa-sync-alt" style="color:#4d96ff;"></i> E-Dönüşüm</div>
            <h1>E-Dönüşüm <span>Çözümleri</span></h1>
            <p>Dijital çağda iş süreçlerini daha verimli, hızlı ve güvenli hale getirin</p>
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
            <a href="{{ route('eticaret') }}" class="glass tilt" data-aos="flip-up" data-aos-delay="400" style="text-decoration:none;padding:20px 25px;text-align:center;border-color:rgba(107,203,119,0.05);transition:all 0.4s ease;" onmouseover="this.style.borderColor='#6bcb77';this.style.transform='translateY(-5px)';this.style.boxShadow='0 15px 40px rgba(107,203,119,0.1)'" onmouseout="this.style.borderColor='rgba(107,203,119,0.05)';this.style.transform='translateY(0)';this.style.boxShadow='none'">
                <div style="font-size:32px;color:#6bcb77;margin-bottom:8px;"><i class="fas fa-shopping-cart"></i></div>
                <h4 style="font-size:15px;font-weight:700;color:#fff;">E-Ticaret</h4>
            </a>
            <a href="{{ route('edonusum') }}" class="glass tilt" data-aos="flip-up" data-aos-delay="500" style="text-decoration:none;padding:20px 25px;text-align:center;border-color:#4d96ff;background:rgba(77,150,255,0.05);transition:all 0.4s ease;border-width:2px;" onmouseover="this.style.borderColor='#4d96ff';this.style.transform='translateY(-5px)';this.style.boxShadow='0 15px 40px rgba(77,150,255,0.15)'" onmouseout="this.style.borderColor='#4d96ff';this.style.transform='translateY(0)';this.style.boxShadow='none'">
                <div style="font-size:32px;color:#4d96ff;margin-bottom:8px;"><i class="fas fa-sync-alt"></i></div>
                <h4 style="font-size:15px;font-weight:700;color:#4d96ff;">E-Dönüşüm</h4>
                <span style="display:inline-block;background:#4d96ff;color:#fff;padding:2px 12px;border-radius:50px;font-size:10px;margin-top:5px;">Aktif</span>
            </a>
        </div>

        <!-- ===== E-DÖNÜŞÜM ===== -->
        <div style="margin-top:30px;">
            <div class="section-header" data-aos="fade-up" style="margin-bottom:30px;">
                <h2 style="font-size:36px;">E-Dönüşüm <span>Çözümleri</span></h2>
            </div>

            <!-- Giriş -->
            <div class="glass" style="padding:40px;border-color:rgba(77,150,255,0.05);margin-bottom:30px;" data-aos="fade-up">
                <p style="color:#e2e8f0;font-size:16px;line-height:2;">
                    Dijital çağda iş süreçlerini daha verimli, hızlı ve güvenli hale getirmek isteyen işletmeler için
                    e-Dönüşüm kaçınılmaz bir adımdır. İşletmelerin dijital dönüşüm süreçlerini kolaylaştıran ve
                    uyumluluk sağlayan çözümler sunuyoruz. Vergi Usul Kanunu'na göre zorunlu hale gelen e-Fatura,
                    e-Arşiv ve e-İrsaliye gibi uygulamalarla, iş süreçlerinizi dijital platformlara taşımanıza
                    yardımcı oluyoruz. Bu sayede, verimliliğinizi artırabilir, maliyetlerinizi düşürebilir ve
                    tüm işlemlerinizi hızlı bir şekilde yönetebilirsiniz.
                </p>
            </div>

            <!-- e-Dönüşüm Nedir? -->
            <div style="margin-bottom:30px;" data-aos="fade-up">
                <h2 style="font-size:28px;font-weight:700;margin-bottom:20px;color:#4d96ff;">e-Dönüşüm Nedir?</h2>

                <div class="glass" style="padding:35px;border-color:rgba(77,150,255,0.05);">
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        e-Dönüşüm, iş süreçlerinin dijital platformlar aracılığıyla yönetilmesini sağlayan bir sistemdir.
                        Geleneksel kâğıt tabanlı süreçlerin yerini alan bu sistem, fatura ve irsaliye gibi ticari belgelerin
                        elektronik ortamda oluşturulması, saklanması ve gönderilmesini içerir. Bu dönüşüm, hem çevresel
                        sürdürülebilirliği destekler hem de operasyonel maliyetleri azaltarak işletmelere zaman kazandırır.
                    </p>
                </div>
            </div>

            <!-- e-Dönüşüm Çözümlerimiz -->
            <div style="margin-bottom:30px;" data-aos="fade-up">
                <h2 style="font-size:28px;font-weight:700;margin-bottom:20px;color:#4d96ff;">e-Dönüşüm Çözümlerimiz</h2>

                <div class="glass" style="padding:30px;border-color:rgba(255,107,107,0.05);margin-bottom:15px;">
                    <h4 style="font-size:18px;font-weight:700;margin-bottom:8px;color:#ff6b6b;">e-Fatura</h4>
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        e-Fatura, kağıt fatura yerine elektronik ortamda oluşturulan ve GİB (Gelir İdaresi Başkanlığı) tarafından
                        düzenlenen bir fatura formatıdır. e-Fatura süreçlerinizi kolayca yönetmenize olanak tanıyan
                        kullanıcı dostu çözümler sunar. Fatura oluşturma, saklama ve gönderme işlemlerini dijital olarak
                        gerçekleştirerek hata riskini en aza indirir.
                    </p>
                </div>

                <div class="glass" style="padding:30px;border-color:rgba(255,217,61,0.05);margin-bottom:15px;">
                    <h4 style="font-size:18px;font-weight:700;margin-bottom:8px;color:#ffd93d;">e-Arşiv Fatura</h4>
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        e-Fatura sistemine kayıtlı olmayan mükelleflere gönderilen faturaların elektronik ortamda düzenlenmesi
                        ve arşivlenmesidir. e-Arşiv işlemlerini entegre şekilde yürütebilir, tüm faturalarınızı dijital ortamda
                        arşivleyerek yasal gerekliliklere uygun şekilde saklayabilirsiniz.
                    </p>
                </div>

                <div class="glass" style="padding:30px;border-color:rgba(107,203,119,0.05);margin-bottom:15px;">
                    <h4 style="font-size:18px;font-weight:700;margin-bottom:8px;color:#6bcb77;">e-İrsaliye</h4>
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        Mal sevkiyatı sırasında kullanılan irsaliyelerin elektronik ortamda düzenlenmesi ve saklanmasıdır.
                        e-İrsaliye süreçlerinizi kolayca dijitalleştirebilir, sevkiyat süreçlerinizi daha verimli yönetebilirsiniz.
                        Bu sistem, sevkiyat anında anlık bildirimlerle işlemlerinizi daha şeffaf hale getirir.
                    </p>
                </div>

                <div class="glass" style="padding:30px;border-color:rgba(77,150,255,0.05);">
                    <h4 style="font-size:18px;font-weight:700;margin-bottom:8px;color:#4d96ff;">e-Defter</h4>
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        Vergi Usul Kanunu ve Türk Ticaret Kanunu'na uygun olarak, işletmelerin yasal defterlerini elektronik ortamda
                        tutmalarını sağlayan bir sistemdir. e-Defter süreçlerinizi otomatikleştirerek yasal zorunluluklara
                        uyum sağlamanıza yardımcı olur. Bu çözüm, mali tablolarınızı ve muhasebe kayıtlarınızı dijital ortamda
                        saklamanızı ve kolayca erişebilmenizi sağlar.
                    </p>
                </div>
            </div>

            <!-- Neden e-Dönüşüm'e Geçmelisiniz -->
            <div style="margin-bottom:30px;" data-aos="fade-up">
                <h2 style="font-size:28px;font-weight:700;margin-bottom:20px;color:#4d96ff;">Neden e-Dönüşüm'e Geçmelisiniz</h2>

                <div class="glass" style="padding:30px;border-color:rgba(255,107,107,0.05);margin-bottom:15px;">
                    <h4 style="font-size:18px;font-weight:700;margin-bottom:8px;color:#ff6b6b;">Maliyet Tasarrufu</h4>
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        e-Dönüşüm, kağıt, baskı, posta ve arşivleme gibi maliyetleri ortadan kaldırarak büyük ölçüde tasarruf sağlar.
                        Aynı zamanda operasyonel süreçlerin hızlanmasıyla iş gücü maliyetleri de azalır.
                    </p>
                </div>

                <div class="glass" style="padding:30px;border-color:rgba(255,217,61,0.05);margin-bottom:15px;">
                    <h4 style="font-size:18px;font-weight:700;margin-bottom:8px;color:#ffd93d;">Zaman Verimliliği</h4>
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        Geleneksel kâğıt tabanlı süreçler genellikle zaman alıcıdır. Ancak e-Dönüşüm ile fatura ve diğer belgeleri
                        anında hazırlayıp gönderebilirsiniz. Bu sayede, hem zaman kazanır hem de müşteri memnuniyetini artırırsınız.
                    </p>
                </div>

                <div class="glass" style="padding:30px;border-color:rgba(107,203,119,0.05);margin-bottom:15px;">
                    <h4 style="font-size:18px;font-weight:700;margin-bottom:8px;color:#6bcb77;">Çevresel Sürdürülebilirlik</h4>
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        Kağıt tüketimini azaltarak çevre dostu bir iş modeline geçiş yapabilirsiniz. Dijital belgeler,
                        kağıt israfını önleyerek işletmenizin karbon ayak izini azaltır.
                    </p>
                </div>

                <div class="glass" style="padding:30px;border-color:rgba(77,150,255,0.05);margin-bottom:15px;">
                    <h4 style="font-size:18px;font-weight:700;margin-bottom:8px;color:#4d96ff;">Yasal Uyum ve Güvenlik</h4>
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        Sunduğumuz çözümler, Gelir İdaresi Başkanlığı tarafından belirlenen tüm yasal düzenlemelere tam uyumludur.
                        e-Dönüşüm sistemleri, belgelerinizi güvenli bir şekilde saklamanıza ve gerektiğinde kolayca erişmenize
                        olanak tanır. Ayrıca, belgeleriniz dijital ortamda korunduğundan, kaybolma veya hasar görme riski ortadan kalkar.
                    </p>
                </div>

                <div class="glass" style="padding:30px;border-color:rgba(255,107,107,0.05);">
                    <h4 style="font-size:18px;font-weight:700;margin-bottom:8px;color:#ff6b6b;">Daha Hızlı ve Hatasız İşlem</h4>
                    <p style="color:#e2e8f0;font-size:15px;line-height:2;">
                        Elektronik ortamda gerçekleştirilen işlemler, manuel sürece göre çok daha hızlıdır ve hata payını minimuma indirir.
                        Hızlı onay süreçleri ve dijital arşivleme ile iş süreçlerinizi daha verimli hale getirebilirsiniz.
                    </p>
                </div>
            </div>

            <!-- Sonuç -->
            <div data-aos="fade-up">
                <div class="glass" style="padding:35px;border-color:rgba(77,150,255,0.05);text-align:center;background:linear-gradient(135deg,rgba(77,150,255,0.05),rgba(37,99,235,0.05));">
                    <h3 style="font-size:22px;font-weight:700;margin-bottom:15px;color:#4d96ff;">e-Dönüşüm ile İşletmenizi Geleceğe Taşıyın</h3>
                    <p style="color:#e2e8f0;font-size:16px;line-height:2;max-width:800px;margin:0 auto;">
                        İşletmenizin e-Dönüşüm sürecinde ihtiyaç duyduğu tüm çözümleri tek bir platformda sunuyoruz.
                        Uzman kadromuz ve yüksek teknolojik altyapımız ile iş süreçlerinizi sorunsuz bir şekilde dijitalleştiriyoruz.
                        İşletmenizin gereksinimlerine özel olarak geliştirdiğimiz yazılım çözümlerimiz sayesinde,
                        tüm e-Dönüşüm süreçlerini hızlı ve güvenli bir şekilde yönetebilirsiniz.
                    </p>
                    <p style="color:#94a3b8;font-size:15px;margin-top:15px;">
                        İster küçük ölçekli bir işletme olun, ister büyük bir kurumsal yapı, esnek ve uyumlu e-Dönüşüm çözümlerimizle
                        işinizi bir üst seviyeye taşıyın. İşletmenizin dijitalleşme sürecinde güvenilir çözüm ortağınız olmaktan gurur duyuyoruz.
                    </p>
                </div>
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
    @keyframes floatY {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }
    @keyframes rotateIn {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
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
@endsection
