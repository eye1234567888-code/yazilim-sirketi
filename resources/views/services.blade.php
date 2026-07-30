@extends('layouts.app')

@section('title', 'Hizmetlerimiz')

@section('content')
<!-- ===== HERO ===== -->
<section class="hero" style="min-height:40vh;background:transparent;">
    <div class="particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>
    <div class="container">
        <div class="hero-content" data-aos="fade-up">
            <div class="badge"><i class="fas fa-bolt"></i> Hizmetlerimiz</div>
            <h1>Hizmetler & <span>Çözümler</span></h1>
            <p>İşinizi büyütmek için ihtiyacınız olan tüm teknolojik çözümler</p>
        </div>
    </div>
</section>

<!-- ===== HİZMETLER ===== -->
<section class="section-padding" id="services" style="background:rgba(10,14,26,0.3);backdrop-filter:blur(5px);border-top:1px solid rgba(255,255,255,0.02);border-bottom:1px solid rgba(255,255,255,0.02);">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-tag"><i class="fas fa-list"></i> Hizmetlerimiz</span>
            <h2>Hizmetler & <span>Çözümler</span></h2>
            <p>İşletmenizin ihtiyaçlarına özel yenilikçi çözümler</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:30px;">
            @php
                $allServices = [
                    [
                        'title' => 'CRM Çözümleri',
                        'desc' => 'Müşteri ilişkileri yönetimini optimize eden, satış ve pazarlama süreçlerini otomatikleştiren, müşteri memnuniyetini artıran kapsamlı CRM çözümleri sunuyoruz.',
                        'icon' => 'fa-users',
                        'color' => '#ff6b6b',
                        'bg' => 'rgba(255,107,107,0.05)',
                        'border' => 'rgba(255,107,107,0.15)',
                        'route' => 'crm'
                    ],
                    [
                        'title' => 'Sektörel Çözümler',
                        'desc' => 'Farklı sektörlerin dinamik ihtiyaçlarına yönelik yenilikçi yazılım çözümleri sunuyoruz. Her sektöre özel stratejiler geliştiriyoruz.',
                        'icon' => 'fa-industry',
                        'color' => '#ffd93d',
                        'bg' => 'rgba(255,217,61,0.05)',
                        'border' => 'rgba(255,217,61,0.15)',
                        'route' => 'sektorel'
                    ],
                    [
                        'title' => 'E-Ticaret',
                        'desc' => 'Dijital dünyada e-ticaret işletmeleri için çeşitli pazaryerlerinde yer almak, müşteri deneyimini iyileştirmek ve satışları artırmak için özel çözümler.',
                        'icon' => 'fa-shopping-cart',
                        'color' => '#6bcb77',
                        'bg' => 'rgba(107,203,119,0.05)',
                        'border' => 'rgba(107,203,119,0.15)',
                        'route' => 'eticaret'
                    ],
                    [
                        'title' => 'E-Dönüşüm',
                        'desc' => 'Dijital çağda iş süreçlerini daha verimli, hızlı ve güvenli hale getirmek isteyen işletmeler için e-Dönüşüm çözümleri sunuyoruz.',
                        'icon' => 'fa-sync-alt',
                        'color' => '#4d96ff',
                        'bg' => 'rgba(77,150,255,0.05)',
                        'border' => 'rgba(77,150,255,0.15)',
                        'route' => 'edonusum'
                    ],
                    [
                        'title' => 'ERP Çözümleri',
                        'desc' => 'Her işletmenin kendine özgü gereksinimlerine göre uyarlanabilen modüler yapıda, tüm iş süreçlerini tek platformda yönetin.',
                        'icon' => 'fa-cubes',
                        'color' => '#ff6b6b',
                        'bg' => 'rgba(255,107,107,0.05)',
                        'border' => 'rgba(255,107,107,0.15)',
                        'route' => 'erp'
                    ],
                    [
                        'title' => 'Mobil Çözümler',
                        'desc' => 'Mobil dünyada etkin olmanın önemini biliyoruz. İşletmenizi mobil cihazlarla buluşturan özel çözümler geliştiriyoruz.',
                        'icon' => 'fa-mobile-alt',
                        'color' => '#ffd93d',
                        'bg' => 'rgba(255,217,61,0.05)',
                        'border' => 'rgba(255,217,61,0.15)',
                        'route' => 'mobil'
                    ]
                ];
            @endphp
            @foreach($allServices as $index => $service)
                <div class="glass tilt"
                     data-aos="fade-up"
                     data-aos-delay="{{ $loop->iteration * 60 }}"
                     style="
                        border-color:{{ $service['border'] }};
                        background:{{ $service['bg'] }};
                        padding:30px 25px;
                        position:relative;
                        overflow:hidden;
                        transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                        cursor:pointer;
                        border-width:2px;
                        animation: serviceFloat {{ 3 + ($index % 3) }}s ease-in-out infinite;
                        animation-delay: {{ $index * 0.15 }}s;
                     "
                     onmouseover="
                        this.style.transform='scale(1.03) translateY(-8px)';
                        this.style.borderColor='{{ $service['color'] }}';
                        this.style.boxShadow='0 20px 60px {{ $service['color'] }}22';
                        this.style.background='{{ $service['color'] }}11';
                        this.querySelector('.service-icon').style.transform='scale(1.2) rotate(10deg)';
                        this.style.animation='none';
                     "
                     onmouseout="
                        this.style.transform='scale(1) translateY(0)';
                        this.style.borderColor='{{ $service['border'] }}';
                        this.style.boxShadow='none';
                        this.style.background='{{ $service['bg'] }}';
                        this.querySelector('.service-icon').style.transform='scale(1) rotate(0deg)';
                        this.style.animation='serviceFloat {{ 3 + ($index % 3) }}s ease-in-out infinite';
                        this.style.animationDelay='{{ $index * 0.15 }}s';
                     "
                >
                    <div style="position:absolute;top:-50px;right:-50px;width:100px;height:100px;background:radial-gradient(circle,{{ $service['color'] }}10,transparent 70%);border-radius:50%;pointer-events:none;"></div>

                    <div style="display:flex;align-items:center;gap:15px;margin-bottom:12px;">
                        <div class="service-icon" style="
                            width:50px;
                            height:50px;
                            border-radius:50%;
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            font-size:22px;
                            color:{{ $service['color'] }};
                            background:{{ $service['color'] }}10;
                            border:2px solid {{ $service['border'] }};
                            transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                            flex-shrink:0;
                        ">
                            <i class="fas {{ $service['icon'] }}"></i>
                        </div>
                        <h3 style="font-size:17px;font-weight:700;margin:0;transition:0.3s;" onmouseover="this.style.color='{{ $service['color'] }}'" onmouseout="this.style.color='#fff'">
                            {{ $service['title'] }}
                        </h3>
                    </div>

                    <p style="color:#94a3b8;font-size:13px;line-height:1.7;margin-bottom:12px;position:relative;z-index:1;">
                        {{ $service['desc'] }}
                    </p>

                    <div style="margin-top:8px;position:relative;z-index:1;">
                        <a href="{{ route($service['route']) }}" style="
                            color:{{ $service['color'] }};
                            text-decoration:none;
                            font-size:12px;
                            font-weight:600;
                            transition: all 0.4s ease;
                            display:inline-flex;
                            align-items:center;
                            gap:6px;
                            padding:4px 14px;
                            border-radius:50px;
                            border:1px solid {{ $service['border'] }};
                            background:transparent;
                        "
                        onmouseover="
                            this.style.background='{{ $service['color'] }}';
                            this.style.color='#fff';
                            this.style.transform='translateX(5px) scale(1.05)';
                            this.style.boxShadow='0 10px 30px {{ $service['color'] }}33';
                        "
                        onmouseout="
                            this.style.background='transparent';
                            this.style.color='{{ $service['color'] }}';
                            this.style.transform='translateX(0) scale(1)';
                            this.style.boxShadow='none';
                        ">
                            Detaylı Bilgi <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ===== BİZE ULAŞIN ===== -->
<section class="section-padding" id="cta" style="background:linear-gradient(135deg, rgba(255,107,107,0.08), rgba(124,58,237,0.08)); backdrop-filter:blur(10px); border-top:1px solid rgba(255,255,255,0.02); border-bottom:1px solid rgba(255,255,255,0.02);">
    <div class="container">
        <div class="cta-content" data-aos="fade-up">
            <h2>Bize <span style="color:#fff;">Ulaşın</span></h2>
            <p style="color:#94a3b8;">Projenizi konuşmak ve teklif almak için hemen iletişime geçin.</p>
            <div style="display:flex;gap:15px;justify-content:center;flex-wrap:wrap;">
                <a href="{{ route('contact') }}" class="btn-primary"><i class="fas fa-paper-plane"></i> Hemen İletişim</a>
                <a href="tel:+905551234567" class="btn-secondary" style="border-color:rgba(255,255,255,0.15);"><i class="fas fa-phone"></i> +90 (555) 123 45 67</a>
            </div>
        </div>
    </div>
</section>

<style>
@keyframes serviceFloat {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    25% { transform: translateY(-6px) rotate(0.5deg); }
    75% { transform: translateY(6px) rotate(-0.5deg); }
}
</style>
@endsection
