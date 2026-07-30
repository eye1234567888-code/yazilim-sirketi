@extends('layouts.app')

@section('title', 'Referanslarımız')

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
            <div class="badge"><i class="fas fa-handshake"></i> Referanslarımız</div>
            <h1>Referanslarımız</h1>
            <p>Güvenen markalar ve başarılı iş birlikleri</p>
        </div>
    </div>
</section>

<!-- ===== REFERANS KARTLARI ===== -->
<section class="section-padding" style="background:rgba(10,14,26,0.3);backdrop-filter:blur(5px);border-top:1px solid rgba(255,255,255,0.02);border-bottom:1px solid rgba(255,255,255,0.02);">
    <div class="container">
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:30px;">
            @php
                $references = [
                    [
                        'name' => 'ABC Teknoloji',
                        'industry' => 'Bilişim & Teknoloji',
                        'desc' => 'Kurumsal web sitesi ve CRM sistemi ile müşteri ilişkilerini dijitalleştirdik. 200+ çalışana sahip firmaya özel çözümler sunduk.',
                        'color' => '#ff6b6b',
                        'icon' => 'fa-building',
                        'project' => '12 Proje',
                        'year' => '2023'
                    ],
                    [
                        'name' => 'XYZ Lojistik',
                        'industry' => 'Lojistik & Taşımacılık',
                        'desc' => 'Lojistik yönetim sistemi ve filo takip çözümleri ile operasyonel verimliliği %40 artırdık. 500+ araçlık filoya entegrasyon sağladık.',
                        'color' => '#ffd93d',
                        'icon' => 'fa-truck',
                        'project' => '8 Proje',
                        'year' => '2023'
                    ],
                    [
                        'name' => 'Defne Market',
                        'industry' => 'Perakende & Market',
                        'desc' => 'E-ticaret altyapısı ve mobil uygulama ile online satışları 3 kat artırdık. 50+ şubeye entegre stok yönetimi sağladık.',
                        'color' => '#6bcb77',
                        'icon' => 'fa-store',
                        'project' => '6 Proje',
                        'year' => '2024'
                    ],
                    [
                        'name' => 'Mavi Eğitim',
                        'industry' => 'Eğitim & Danışmanlık',
                        'desc' => 'Uzaktan eğitim platformu ve öğrenci takip sistemi ile eğitim süreçlerini dijitalleştirdik. 10.000+ öğrenciye hizmet veriyor.',
                        'color' => '#4d96ff',
                        'icon' => 'fa-graduation-cap',
                        'project' => '5 Proje',
                        'year' => '2024'
                    ],
                    [
                        'name' => 'Gold Sağlık',
                        'industry' => 'Sağlık & Tıp',
                        'desc' => 'Hasta randevu sistemi, dijital hasta kayıtları ve online sağlık danışmanlığı platformu geliştirdik. 15+ kliniğe entegre çözüm.',
                        'color' => '#ff6b6b',
                        'icon' => 'fa-heartbeat',
                        'project' => '9 Proje',
                        'year' => '2023'
                    ],
                    [
                        'name' => 'Star Enerji',
                        'industry' => 'Enerji & Yenilenebilir',
                        'desc' => 'Enerji yönetim sistemi ve IoT entegrasyonu ile tüketim takibini optimize ettik. 100+ santrale uzaktan izleme çözümü.',
                        'color' => '#ffd93d',
                        'icon' => 'fa-solar-panel',
                        'project' => '7 Proje',
                        'year' => '2024'
                    ],
                    [
                        'name' => 'City Bank',
                        'industry' => 'Finans & Bankacılık',
                        'desc' => 'Dijital bankacılık çözümleri ve mobil uygulama ile müşteri deneyimini iyileştirdik. 500.000+ kullanıcıya hizmet veriyor.',
                        'color' => '#6bcb77',
                        'icon' => 'fa-university',
                        'project' => '11 Proje',
                        'year' => '2023'
                    ],
                    [
                        'name' => 'Yıldız Turizm',
                        'industry' => 'Turizm & Seyahat',
                        'desc' => 'Online rezervasyon sistemi, otel yönetim paneli ve müşteri ilişkileri platformu geliştirdik. 200+ otel ile entegre çalışıyor.',
                        'color' => '#4d96ff',
                        'icon' => 'fa-plane',
                        'project' => '4 Proje',
                        'year' => '2024'
                    ]
                ];
            @endphp
            @foreach($references as $index => $ref)
                <div class="glass tilt"
                     data-aos="flip-up"
                     data-aos-delay="{{ $loop->iteration * 60 }}"
                     style="
                        border-color:{{ $ref['color'] }}15;
                        background:{{ $ref['color'] }}05;
                        padding:30px 25px;
                        text-align:center;
                        position:relative;
                        overflow:hidden;
                        transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                        cursor:pointer;
                        border-width:2px;
                        animation: refFloat {{ 2 + ($index % 3) }}s ease-in-out infinite;
                        animation-delay: {{ $index * 0.1 }}s;
                     "
                     onmouseover="
                        this.style.transform='scale(1.05) translateY(-12px)';
                        this.style.borderColor='{{ $ref['color'] }}';
                        this.style.boxShadow='0 20px 60px {{ $ref['color'] }}22';
                        this.style.background='{{ $ref['color'] }}11';
                        this.style.animation='none';
                        this.querySelector('.ref-icon').style.transform='scale(1.2) rotate(10deg)';
                     "
                     onmouseout="
                        this.style.transform='scale(1) translateY(0)';
                        this.style.borderColor='{{ $ref['color'] }}15';
                        this.style.boxShadow='none';
                        this.style.background='{{ $ref['color'] }}05';
                        this.style.animation='refFloat {{ 2 + ($index % 3) }}s ease-in-out infinite';
                        this.style.animationDelay='{{ $index * 0.1 }}s';
                        this.querySelector('.ref-icon').style.transform='scale(1) rotate(0deg)';
                     "
                >
                    <div style="position:absolute;top:-50px;right:-50px;width:120px;height:120px;background:radial-gradient(circle,{{ $ref['color'] }}10,transparent 70%);border-radius:50%;pointer-events:none;"></div>
                    <div style="position:absolute;bottom:-40px;left:-40px;width:100px;height:100px;background:radial-gradient(circle,{{ $ref['color'] }}08,transparent 70%);border-radius:50%;pointer-events:none;"></div>

                    <!-- İkon -->
                    <div class="ref-icon" style="
                        width:70px;
                        height:70px;
                        border-radius:50%;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        margin:0 auto 15px;
                        font-size:32px;
                        color:{{ $ref['color'] }};
                        background:{{ $ref['color'] }}10;
                        border:2px solid {{ $ref['color'] }}15;
                        transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                    ">
                        <i class="fas {{ $ref['icon'] }}"></i>
                    </div>

                    <!-- İsim -->
                    <h3 style="
                        font-size:20px;
                        font-weight:700;
                        margin-bottom:4px;
                        transition:0.3s;
                    "
                    onmouseover="this.style.color='{{ $ref['color'] }}'"
                    onmouseout="this.style.color='#fff'">
                        {{ $ref['name'] }}
                    </h3>

                    <!-- Sektör -->
                    <p style="color:{{ $ref['color'] }};font-size:13px;font-weight:500;margin-bottom:12px;">
                        {{ $ref['industry'] }}
                    </p>

                    <!-- Açıklama -->
                    <p style="color:#94a3b8;font-size:13px;line-height:1.7;margin-bottom:15px;">
                        {{ $ref['desc'] }}
                    </p>

                    <!-- İstatistikler -->
                    <div style="display:flex;justify-content:center;gap:20px;padding-top:15px;border-top:1px solid rgba(255,255,255,0.03);">
                        <div style="text-align:center;">
                            <span style="font-size:18px;font-weight:700;color:{{ $ref['color'] }};">{{ $ref['project'] }}</span>
                            <p style="color:#64748b;font-size:11px;margin:0;">Tamamlanan Proje</p>
                        </div>
                        <div style="text-align:center;">
                            <span style="font-size:18px;font-weight:700;color:{{ $ref['color'] }};">{{ $ref['year'] }}</span>
                            <p style="color:#64748b;font-size:11px;margin:0;">İş Birliği</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ===== İSTATİSTİKLER ===== -->
<section class="section-padding" style="background:rgba(10,14,26,0.4);backdrop-filter:blur(5px);border-top:1px solid rgba(255,255,255,0.02);border-bottom:1px solid rgba(255,255,255,0.02);">
    <div class="container">
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:25px;text-align:center;">
            <div data-aos="zoom-in" class="glass" style="padding:30px;border-color:rgba(255,107,107,0.05);">
                <div style="font-size:52px;color:#ff6b6b;margin-bottom:10px;display:block;animation:floatY 3s ease-in-out infinite;"><i class="fas fa-building"></i></div>
                <h2 class="counter-number" data-target="250" style="font-size:42px;font-weight:800;background:linear-gradient(135deg,#ff6b6b,#ee5a24);-webkit-background-clip:text;-webkit-text-fill-color:transparent;">0</h2>
                <p style="color:#64748b;font-size:14px;">Mutlu Müşteri</p>
            </div>
            <div data-aos="zoom-in" data-aos-delay="100" class="glass" style="padding:30px;border-color:rgba(255,217,61,0.05);">
                <div style="font-size:52px;color:#ffd93d;margin-bottom:10px;display:block;animation:floatY 3.5s ease-in-out infinite 0.5s;"><i class="fas fa-project-diagram"></i></div>
                <h2 class="counter-number" data-target="150" style="font-size:42px;font-weight:800;background:linear-gradient(135deg,#ffd93d,#f59e0b);-webkit-background-clip:text;-webkit-text-fill-color:transparent;">0</h2>
                <p style="color:#64748b;font-size:14px;">Tamamlanan Proje</p>
            </div>
            <div data-aos="zoom-in" data-aos-delay="200" class="glass" style="padding:30px;border-color:rgba(107,203,119,0.05);">
                <div style="font-size:52px;color:#6bcb77;margin-bottom:10px;display:block;animation:floatY 4s ease-in-out infinite 1s;"><i class="fas fa-handshake"></i></div>
                <h2 class="counter-number" data-target="30" style="font-size:42px;font-weight:800;background:linear-gradient(135deg,#6bcb77,#10b981);-webkit-background-clip:text;-webkit-text-fill-color:transparent;">0</h2>
                <p style="color:#64748b;font-size:14px;">Yıl Süren İş Birliği</p>
            </div>
            <div data-aos="zoom-in" data-aos-delay="300" class="glass" style="padding:30px;border-color:rgba(77,150,255,0.05);">
                <div style="font-size:52px;color:#4d96ff;margin-bottom:10px;display:block;animation:floatY 3.2s ease-in-out infinite 1.5s;"><i class="fas fa-star"></i></div>
                <h2 class="counter-number" data-target="98" style="font-size:42px;font-weight:800;background:linear-gradient(135deg,#4d96ff,#2563eb);-webkit-background-clip:text;-webkit-text-fill-color:transparent;">0</h2>
                <p style="color:#64748b;font-size:14px;">Müşteri Memnuniyeti %</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== İLETİŞİME GEÇİN ===== -->
<section class="section-padding" id="cta" style="background:linear-gradient(135deg, rgba(255,107,107,0.08), rgba(124,58,237,0.08)); backdrop-filter:blur(10px); border-top:1px solid rgba(255,255,255,0.02); border-bottom:1px solid rgba(255,255,255,0.02);">
    <div class="container">
        <div class="cta-content" data-aos="fade-up">
            <h2>Siz de <span style="color:#fff;">Referanslarımız Arasında Yer Alın</span></h2>
            <p style="color:#94a3b8;">Projenizi hayata geçirmek ve başarılı iş birlikleri için hemen bizimle iletişime geçin.</p>
            <div style="display:flex;gap:15px;justify-content:center;flex-wrap:wrap;">
                <a href="{{ route('contact') }}" class="btn-primary"><i class="fas fa-paper-plane"></i> Hemen İletişim</a>
                <a href="tel:+905551234567" class="btn-secondary" style="border-color:rgba(255,255,255,0.15);"><i class="fas fa-phone"></i> +90 (555) 123 45 67</a>
            </div>
        </div>
    </div>
</section>

<style>
@keyframes refFloat {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    25% { transform: translateY(-4px) rotate(0.3deg); }
    75% { transform: translateY(4px) rotate(-0.3deg); }
}
@keyframes floatY {
    0%,100% { transform: translateY(0); }
    50% { transform: translateY(-8px); }
}
</style>
@endsection
