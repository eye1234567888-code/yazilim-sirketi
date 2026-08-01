@extends('layouts.app')

@section('title', 'Ana Sayfa')

@section('content')
<!-- ===== HERO ===== -->
<section class="hero" id="home">
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
        <div class="hero-content">
            <div class="badge"><i class="fas fa-bolt"></i> 2024'ün En İnovatif Yazılım Şirketi</div>
            <h1>Geleceği <span>Birlikte</span> Kodlayalım</h1>
            <p>Yenilikçi teknolojilerle işinizi dijital dünyaya taşıyor, sürdürülebilir ve ölçeklenebilir çözümler üretiyoruz. 8 yıllık deneyimimizle yanınızdayız.</p>
            <div class="hero-buttons">
                <a href="{{ route('contact') }}" style="background:linear-gradient(135deg, #ff6b6b, #ee5a24);color:#fff !important;padding:14px 35px;border-radius:50px;text-decoration:none;font-weight:600;transition:all 0.4s cubic-bezier(0.175,0.885,0.32,1.275);display:inline-flex;align-items:center;gap:10px;font-size:16px;border:none;cursor:pointer;box-shadow:0 10px 40px rgba(255,107,107,0.3);" onmouseover="this.style.transform='translateY(-3px) scale(1.05)';this.style.boxShadow='0 20px 60px rgba(255,107,107,0.5)'" onmouseout="this.style.transform='translateY(0) scale(1)';this.style.boxShadow='0 10px 40px rgba(255,107,107,0.3)'">
                    <i class="fas fa-paper-plane"></i> Hemen İletişim
                </a>
                <a href="{{ route('about') }}" style="background:rgba(255,255,255,0.08);color:#fff !important;padding:14px 35px;border-radius:50px;text-decoration:none;font-weight:600;transition:all 0.4s cubic-bezier(0.175,0.885,0.32,1.275);display:inline-flex;align-items:center;gap:10px;font-size:16px;backdrop-filter:blur(10px);border:1px solid rgba(255,255,255,0.15);" onmouseover="this.style.background='rgba(255,255,255,0.15)';this.style.transform='translateY(-3px) scale(1.05)';this.style.borderColor='rgba(255,255,255,0.3)'" onmouseout="this.style.background='rgba(255,255,255,0.08)';this.style.transform='translateY(0) scale(1)';this.style.borderColor='rgba(255,255,255,0.15)'">
                    <i class="fas fa-play-circle"></i> Keşfet
                </a>
            </div>
            <div class="hero-stats">
                <div class="stat"><h3 class="counter-number" data-target="250">0</h3><p>Tamamlanan Proje</p></div>
                <div class="stat"><h3 class="counter-number" data-target="120">0</h3><p>Mutlu Müşteri</p></div>
                <div class="stat"><h3 class="counter-number" data-target="8">0</h3><p>Yıl Deneyim</p></div>
                <div class="stat"><h3 class="counter-number" data-target="15">0</h3><p>Ödül & Başarı</p></div>
            </div>
        </div>
        <div class="hero-image">
            <div class="hero-rotator">
                <div class="center-icon"><i class="fas fa-cubes"></i></div>
            </div>
        </div>
    </div>
</section>

<!-- ===== HİZMETLER - UZMANLIK ALANLARI ===== -->
<section class="section-padding" id="services">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-tag"><i class="fas fa-bolt"></i> Hizmetlerimiz</span>
            <h2>Uzmanlık <span>Alanlarımız</span></h2>
            <p>İhtiyaçlarınıza özel, yenilikçi ve kaliteli çözümler sunuyoruz</p>
        </div>
        <div class="services-grid">
            @php
                $servicesList = [
                    [
                        'title' => 'CRM Çözümleri',
                        'desc' => 'Müşteri ilişkilerinizi yönetin, satış süreçlerinizi optimize edin ve müşteri memnuniyetini artırın.',
                        'icon' => 'fa-users',
                        'color' => '#ff6b6b',
                        'bg' => 'rgba(255,107,107,0.04)',
                        'border' => 'rgba(255,107,107,0.15)',
                        'route' => 'crm'
                    ],
                    [
                        'title' => 'Sektörel Çözümler',
                        'desc' => 'Her sektöre özel yazılım çözümleri ile iş süreçlerinizi dijitalleştirin ve verimliliğinizi artırın.',
                        'icon' => 'fa-industry',
                        'color' => '#ffd93d',
                        'bg' => 'rgba(255,217,61,0.04)',
                        'border' => 'rgba(255,217,61,0.15)',
                        'route' => 'sektorel'
                    ],
                    [
                        'title' => 'E-Ticaret',
                        'desc' => 'Güçlü altyapılı, kullanıcı dostu ve dönüşüm odaklı e-ticaret platformları ile online satışınızı başlatın.',
                        'icon' => 'fa-shopping-cart',
                        'color' => '#6bcb77',
                        'bg' => 'rgba(107,203,119,0.04)',
                        'border' => 'rgba(107,203,119,0.15)',
                        'route' => 'eticaret'
                    ],
                    [
                        'title' => 'E-Dönüşüm',
                        'desc' => 'Dijital dönüşüm sürecinizde size rehberlik ediyor, iş süreçlerinizi modern teknolojilerle buluşturuyoruz.',
                        'icon' => 'fa-sync-alt',
                        'color' => '#4d96ff',
                        'bg' => 'rgba(77,150,255,0.04)',
                        'border' => 'rgba(77,150,255,0.15)',
                        'route' => 'edonusum'
                    ],
                    [
                        'title' => 'ERP Çözümleri',
                        'desc' => 'Tüm iş süreçlerinizi tek bir platformda yönetin, operasyonel verimliliğinizi maksimuma çıkarın.',
                        'icon' => 'fa-cubes',
                        'color' => '#a66cff',
                        'bg' => 'rgba(166,108,255,0.04)',
                        'border' => 'rgba(166,108,255,0.15)',
                        'route' => 'erp'
                    ],
                    [
                        'title' => 'Mobil Çözümler',
                        'desc' => 'iOS ve Android platformları için yüksek performanslı, kullanıcı deneyimi odaklı mobil uygulamalar geliştiriyoruz.',
                        'icon' => 'fa-mobile-alt',
                        'color' => '#ffd93d',
                        'bg' => 'rgba(255,217,61,0.04)',
                        'border' => 'rgba(255,217,61,0.15)',
                        'route' => 'mobil'
                    ]
                ];
            @endphp
            @foreach($servicesList as $index => $service)
                <div class="glass tilt"
                     data-aos="flip-up"
                     data-aos-delay="{{ $loop->iteration * 60 }}"
                     style="
                        border-color:{{ $service['border'] }};
                        background:{{ $service['bg'] }};
                        padding:35px 30px;
                        text-align:center;
                        position:relative;
                        overflow:hidden;
                        animation: serviceFloat {{ 3 + ($index % 3) }}s ease-in-out infinite;
                        animation-delay: {{ $index * 0.15 }}s;
                        transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                        cursor:pointer;
                        border-width:2px;
                     "
                     onmouseover="
                        this.style.transform='scale(1.08) translateY(-15px)';
                        this.style.borderColor='{{ $service['color'] }}';
                        this.style.boxShadow='0 20px 60px {{ $service['color'] }}22';
                        this.style.background='{{ $service['color'] }}11';
                        this.querySelector('.service-icon').style.transform='scale(1.3) rotate(20deg)';
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
                    <div style="position:absolute;top:-50px;right:-50px;width:120px;height:120px;background:radial-gradient(circle,{{ $service['color'] }}15,transparent 70%);border-radius:50%;pointer-events:none;"></div>
                    <div style="position:absolute;bottom:-40px;left:-40px;width:100px;height:100px;background:radial-gradient(circle,{{ $service['color'] }}10,transparent 70%);border-radius:50%;pointer-events:none;animation: pulseGlow 3s ease-in-out infinite;"></div>

                    <div class="service-icon" style="
                        font-size:55px;
                        color:{{ $service['color'] }};
                        margin-bottom:15px;
                        display:block;
                        transition: all 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                        position:relative;
                        z-index:1;
                    ">
                        <i class="fas {{ $service['icon'] }}"></i>
                    </div>

                    <h3 style="font-size:20px;font-weight:700;margin-bottom:8px;position:relative;z-index:1;transition:0.3s;" onmouseover="this.style.color='{{ $service['color'] }}'" onmouseout="this.style.color='#fff'">
                        {{ $service['title'] }}
                    </h3>

                    <p style="color:#94a3b8;font-size:14px;line-height:1.7;margin-bottom:12px;position:relative;z-index:1;">
                        {{ $service['desc'] }}
                    </p>

                    <div style="margin-top:12px;position:relative;z-index:1;">
                        <a href="{{ route($service['route']) }}" style="
                            color:{{ $service['color'] }};
                            text-decoration:none;
                            font-size:13px;
                            font-weight:600;
                            transition: all 0.4s ease;
                            display:inline-flex;
                            align-items:center;
                            gap:6px;
                            padding:6px 18px;
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
                            Detay <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ===== HAKKIMIZDA ===== -->
<section class="section-padding" style="background:rgba(10,14,26,0.3);backdrop-filter:blur(5px);border-top:1px solid rgba(255,255,255,0.02);border-bottom:1px solid rgba(255,255,255,0.02);position:relative;overflow:hidden;">
    <div style="position:absolute;top:-30%;right:-10%;width:500px;height:500px;background:radial-gradient(circle,rgba(255,107,107,0.03),transparent 70%);border-radius:50%;pointer-events:none;"></div>
    <div style="position:absolute;bottom:-30%;left:-10%;width:400px;height:400px;background:radial-gradient(circle,rgba(77,150,255,0.03),transparent 70%);border-radius:50%;pointer-events:none;"></div>

    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-tag"><i class="fas fa-info-circle"></i> Hakkımızda</span>
            <h2>Dijital Dönüşümde <span>Yanınızdayız</span></h2>
            <p>Yenilikçi yazılım çözümleriyle işletmenizi geleceğe taşıyoruz</p>
        </div>

        <div style="max-width:900px;margin:0 auto;">
            <div class="glass" data-aos="fade-up" style="padding:45px;border-color:rgba(255,255,255,0.05);">
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

<!-- ===== PROJELERİMİZ ===== -->
<section class="section-padding" id="projects" style="background:rgba(10,14,26,0.3);backdrop-filter:blur(5px);border-top:1px solid rgba(255,255,255,0.02);border-bottom:1px solid rgba(255,255,255,0.02);">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-tag"><i class="fas fa-project-diagram"></i> Projelerimiz</span>
            <h2>Projelerimiz</h2>
            <p>Başarıyla tamamladığımız projeler</p>
        </div>

        <div style="display:flex;gap:15px;flex-wrap:wrap;justify-content:center;margin-bottom:40px;" data-aos="fade-up">
            @php
                $categories = ['MRP', 'Hızlı Satış', 'İnsan Kaynakları', 'Kurumsal Web Sitesi'];
                $catColors = ['#ff6b6b', '#ffd93d', '#6bcb77', '#4d96ff'];
            @endphp
            @foreach($categories as $index => $cat)
                <span style="
                    background:{{ $catColors[$index] }}10;
                    color:{{ $catColors[$index] }};
                    padding:8px 24px;
                    border-radius:50px;
                    font-size:14px;
                    font-weight:600;
                    border:1px solid {{ $catColors[$index] }}15;
                    cursor:pointer;
                    transition:all 0.4s cubic-bezier(0.175,0.885,0.32,1.275);
                "
                onmouseover="this.style.background='{{ $catColors[$index] }}';this.style.color='#fff';this.style.transform='translateY(-5px) scale(1.08)';this.style.boxShadow='0 15px 45px {{ $catColors[$index] }}55'"
                onmouseout="this.style.background='{{ $catColors[$index] }}10';this.style.color='{{ $catColors[$index] }}';this.style.transform='translateY(0) scale(1)';this.style.boxShadow='none'">
                    {{ $cat }}
                </span>
            @endforeach
        </div>

        <div class="projects-grid">
            @php
                $projectsData = [
                    [
                        'title' => 'MRP',
                        'desc' => 'MRP Sistemi Nedir? MRP, üretim odaklı işletmelerin hammaddeden yarım mamule, üretim planlamasından stok yönetimine kadar olan tüm kaynak ihtiyaçlarını zamanında ve doğru şekilde planlamasını sağlayan entegre bir planlama sistemidir.',
                        'icon' => 'fa-industry',
                        'color' => '#ff6b6b',
                        'tags' => ['Üretim', 'Fiyat', 'Stok']
                    ],
                    [
                        'title' => 'Hızlı Satış',
                        'desc' => 'İşletmelerin satış süreçlerini hızlandırmak, stok takibini kolaylaştırmak ve operasyon verimliliğini artırmak için tasarlandı. Modern tasarım ve kolay kullanımıyla satışlarınızı saniyeler içinde yönetin, tüm işinizi tek ekrandan kontrol edin.',
                        'icon' => 'fa-rocket',
                        'color' => '#ffd93d',
                        'tags' => ['Satış', 'Stok', 'Operasyon']
                    ],
                    [
                        'title' => 'İnsan Kaynakları',
                        'desc' => 'Günümüz iş dünyasında insan kaynağını doğru yönetmek, bir kurumun sürdürülebilir başarısının temel taşlarından biridir. İnsan Kaynakları Projesi, işletmelerin personel süreçlerini dijitalleştiren, verimliliği artıran ve şeffaflığı güçlendiren yenilikçi bir çözümdür.',
                        'icon' => 'fa-users',
                        'color' => '#6bcb77',
                        'tags' => ['Personel', 'Dijital', 'Verimlilik']
                    ],
                    [
                        'title' => 'Kurumsal Web Sitesi',
                        'desc' => 'Günümüz dijital çağında bir web sitesine sahip olmak, bir işletmenin ya da kurumun dijital dünyadaki yüzüdür. Web siteleri, potansiyel müşterilere ulaşmanın, kurumsal kimliği pekiştirmenin ve rekabet avantajı sağlamanın en etkili yollarından biridir.',
                        'icon' => 'fa-globe',
                        'color' => '#4d96ff',
                        'tags' => ['Dijital', 'Kurumsal', 'Rekabet']
                    ]
                ];
            @endphp
            @foreach($projectsData as $index => $project)
                <div class="glass tilt"
                     data-aos="flip-up"
                     data-aos-delay="{{ $loop->iteration * 80 }}"
                     style="
                        border-color:{{ $project['color'] }}15;
                        background:{{ $project['color'] }}05;
                        padding:35px 30px;
                        position:relative;
                        overflow:hidden;
                        animation: serviceFloat {{ 3 + ($index % 3) }}s ease-in-out infinite;
                        animation-delay: {{ $index * 0.2 }}s;
                        transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                        cursor:pointer;
                        border-width:2px;
                     "
                     onmouseover="
                        this.style.transform='scale(1.03) translateY(-10px)';
                        this.style.borderColor='{{ $project['color'] }}';
                        this.style.boxShadow='0 20px 60px {{ $project['color'] }}22';
                        this.style.background='{{ $project['color'] }}11';
                        this.querySelector('.project-icon').style.transform='scale(1.2) rotate(10deg)';
                        this.style.animation='none';
                     "
                     onmouseout="
                        this.style.transform='scale(1) translateY(0)';
                        this.style.borderColor='{{ $project['color'] }}15';
                        this.style.boxShadow='none';
                        this.style.background='{{ $project['color'] }}05';
                        this.querySelector('.project-icon').style.transform='scale(1) rotate(0deg)';
                        this.style.animation='serviceFloat {{ 3 + ($index % 3) }}s ease-in-out infinite';
                        this.style.animationDelay='{{ $index * 0.2 }}s';
                     "
                >
                    <div style="position:absolute;top:-50px;right:-50px;width:120px;height:120px;background:radial-gradient(circle,{{ $project['color'] }}15,transparent 70%);border-radius:50%;pointer-events:none;"></div>
                    <div style="position:absolute;bottom:-40px;left:-40px;width:100px;height:100px;background:radial-gradient(circle,{{ $project['color'] }}10,transparent 70%);border-radius:50%;pointer-events:none;animation: pulseGlow 3s ease-in-out infinite;"></div>

                    <div style="display:flex;align-items:center;gap:15px;margin-bottom:15px;">
                        <div class="project-icon" style="
                            width:55px;
                            height:55px;
                            border-radius:50%;
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            font-size:24px;
                            color:{{ $project['color'] }};
                            background:{{ $project['color'] }}10;
                            border:2px solid {{ $project['color'] }}15;
                            transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                            flex-shrink:0;
                        ">
                            <i class="fas {{ $project['icon'] }}"></i>
                        </div>
                        <h3 style="font-size:22px;font-weight:700;margin:0;transition:0.3s;" onmouseover="this.style.color='{{ $project['color'] }}'" onmouseout="this.style.color='#fff'">
                            {{ $project['title'] }}
                        </h3>
                    </div>

                    <p style="color:#e2e8f0;font-size:14px;line-height:1.8;margin-bottom:15px;position:relative;z-index:1;">
                        {{ $project['desc'] }}
                    </p>

                    <div style="display:flex;gap:8px;flex-wrap:wrap;margin-top:5px;">
                        @foreach($project['tags'] as $tag)
                            <span style="
                                background:{{ $project['color'] }}10;
                                color:{{ $project['color'] }};
                                padding:4px 14px;
                                border-radius:50px;
                                font-size:12px;
                                border:1px solid {{ $project['color'] }}10;
                            ">
                                {{ $tag }}
                            </span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ===== REFERANSLAR ===== -->
<section class="brand-logos" style="padding:60px 0;background:rgba(10,14,26,0.2);border-top:1px solid rgba(255,255,255,0.02);border-bottom:1px solid rgba(255,255,255,0.02);">
    <div class="container">
        <div style="text-align:center;margin-bottom:35px;" data-aos="fade-up">
            <span class="section-tag"><i class="fas fa-handshake" style="color:#ff6b6b;"></i> Referanslar</span>
            <h2 style="font-size:36px;font-weight:800;margin-top:10px;">Güvenen <span style="background:linear-gradient(135deg,#ff6b6b,#ffd93d,#6bcb77,#4d96ff);background-size:300% 300%;-webkit-background-clip:text;-webkit-text-fill-color:transparent;animation:rainbowText 4s ease infinite;">Markalar</span></h2>
        </div>
        <div style="position:relative;display:flex;justify-content:space-around;align-items:center;flex-wrap:nowrap;gap:20px;padding:20px 0;" data-aos="fade-up">
            @for($i=1; $i<=6; $i++)
                @php
                    $colors = ['#ff6b6b', '#ffd93d', '#6bcb77', '#4d96ff', '#ff6b6b', '#ffd93d'];
                    $delay = $i * 0.5;
                @endphp
                <div style="display:flex;flex-direction:column;align-items:center;gap:10px;padding:20px 30px;border-radius:16px;background:rgba(255,255,255,0.02);border:1px solid rgba(255,255,255,0.03);transition:all 0.5s cubic-bezier(0.175,0.885,0.32,1.275);cursor:pointer;animation: orbitFloat {{ 4 + $i }}s ease-in-out infinite;animation-delay: {{ $delay }}s;min-width:120px;"
                onmouseover="this.style.transform='scale(1.2) translateY(-12px) rotate(5deg)';this.style.background='{{ $colors[$i-1] }}15';this.style.borderColor='{{ $colors[$i-1] }}44';this.style.boxShadow='0 20px 60px {{ $colors[$i-1] }}33'"
                onmouseout="this.style.transform='scale(1) translateY(0) rotate(0deg)';this.style.background='rgba(255,255,255,0.02)';this.style.borderColor='rgba(255,255,255,0.03)';this.style.boxShadow='none'">
                    <i class="fas fa-building" style="font-size:48px;color:{{ $colors[$i-1] }};display:block;transition:0.6s;" onmouseover="this.style.transform='rotate(30deg) scale(1.3)';this.style.color='#fff'" onmouseout="this.style.transform='rotate(0deg) scale(1)';this.style.color='{{ $colors[$i-1] }}'"></i>
                    <p style="font-size:13px;color:#94a3b8;font-weight:600;letter-spacing:1px;transition:0.3s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='#94a3b8'">Marka {{ $i }}</p>
                    <div style="width:40px;height:2px;background:linear-gradient(90deg,{{ $colors[$i-1] }},transparent);border-radius:2px;transition:0.5s;" onmouseover="this.style.width='60px';this.style.background='{{ $colors[$i-1] }}'" onmouseout="this.style.width='40px';this.style.background='linear-gradient(90deg,{{ $colors[$i-1] }},transparent)'"></div>
                </div>
            @endfor
        </div>
    </div>
</section>

<!-- ===== BLOG ===== -->
<section class="section-padding" id="blog" style="background:rgba(10,14,26,0.3);backdrop-filter:blur(5px);border-top:1px solid rgba(255,255,255,0.02);border-bottom:1px solid rgba(255,255,255,0.02);position:relative;overflow:hidden;">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-tag"><i class="fas fa-blog"></i> Blog</span>
            <h2>Öne Çıkan <span>Bloglarımız</span></h2>
            <p>Teknoloji, yazılım ve dijital dünya üzerine güncel yazılar</p>
        </div>

        <div class="blog-grid">
            @php
                $blogPosts = [
                    [
                        'slug' => 'erp-uygulama-sureci',
                        'title' => 'Başarılı Bir ERP Uygulama Süreci Nasıl İlerler?',
                        'excerpt' => 'ERP sistemlerinin başarılı bir şekilde uygulanması için izlenmesi gereken adımlar ve stratejiler.',
                        'color' => '#ff6b6b',
                        'icon' => 'fa-cubes',
                        'tag' => 'ERP',
                        'bg' => 'linear-gradient(135deg, #1a1a2e, #2d2d44)'
                    ],
                    [
                        'slug' => 'efatura-earsiv',
                        'title' => 'İşletmenizi Geleceğe Taşıyın: e-Fatura ve e-Arşiv Sistemleri',
                        'excerpt' => 'e-Fatura ve e-Arşiv sistemleri ile işletmenizi dijital dönüşüme hazırlayın.',
                        'color' => '#ffd93d',
                        'icon' => 'fa-file-invoice',
                        'tag' => 'Dijital Dönüşüm',
                        'bg' => 'linear-gradient(135deg, #1a1a2e, #2d2d44)'
                    ],
                    [
                        'slug' => 'windows-12',
                        'title' => 'Windows 12 ile Gelen Yenilikler ve İşletmelere Etkileri',
                        'excerpt' => 'Windows 12\'nin getirdiği yenilikler ve işletmelere sağlayacağı avantajlar.',
                        'color' => '#4d96ff',
                        'icon' => 'fa-windows',
                        'tag' => 'Teknoloji',
                        'bg' => 'linear-gradient(135deg, #1a1a2e, #2d2d44)'
                    ]
                ];
            @endphp
            @foreach($blogPosts as $index => $post)
                <div class="glass tilt"
                     data-aos="flip-up"
                     data-aos-delay="{{ $loop->iteration * 80 }}"
                     style="
                        border-color:{{ $post['color'] }}25;
                        background:{{ $post['bg'] }};
                        padding:0;
                        position:relative;
                        overflow:hidden;
                        transition: all 0.7s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                        cursor:pointer;
                        border-width:2px;
                        border-radius:24px;
                        perspective:1000px;
                        transform-style:preserve-3d;
                        box-shadow: 0 10px 40px rgba(0,0,0,0.3);
                     "
                     onmouseover="
                        this.style.transform='translateY(-20px) scale(1.04) rotateX(4deg) rotateY(6deg)';
                        this.style.borderColor='{{ $post['color'] }}';
                        this.style.boxShadow='0 40px 100px {{ $post['color'] }}55, 0 20px 60px {{ $post['color'] }}33';
                        this.style.background='linear-gradient(135deg, {{ $post['color'] }}15, #1a1a2e)';
                        this.querySelector('.blog-image').style.transform='scale(1.08)';
                        this.querySelector('.blog-icon').style.transform='scale(1.4) rotate(25deg)';
                        this.querySelector('.blog-content').style.transform='translateY(-5px)';
                        this.querySelector('.blog-read-btn').style.transform='translateX(10px) scale(1.05)';
                        this.querySelector('.blog-read-btn').style.background='{{ $post['color'] }}';
                        this.querySelector('.blog-read-btn').style.color='#fff';
                        this.querySelector('.blog-read-btn i').style.transform='translateX(8px)';
                     "
                     onmouseout="
                        this.style.transform='translateY(0) scale(1) rotateX(0) rotateY(0)';
                        this.style.borderColor='{{ $post['color'] }}25';
                        this.style.boxShadow='0 10px 40px rgba(0,0,0,0.3)';
                        this.style.background='{{ $post['bg'] }}';
                        this.querySelector('.blog-image').style.transform='scale(1)';
                        this.querySelector('.blog-icon').style.transform='scale(1) rotate(0deg)';
                        this.querySelector('.blog-content').style.transform='translateY(0)';
                        this.querySelector('.blog-read-btn').style.transform='translateX(0) scale(1)';
                        this.querySelector('.blog-read-btn').style.background='transparent';
                        this.querySelector('.blog-read-btn').style.color='{{ $post['color'] }}';
                        this.querySelector('.blog-read-btn i').style.transform='translateX(0)';
                     "
                >
                    <div class="blog-image" style="
                        height:220px;
                        background:{{ $post['bg'] }};
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        position:relative;
                        border-bottom:2px solid {{ $post['color'] }}20;
                        overflow:hidden;
                        transition: all 0.7s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                    ">
                        <div style="position:absolute;top:0;left:0;width:100%;height:100%;background-image:radial-gradient(circle at 20% 50%, {{ $post['color'] }}10 0%, transparent 50%), radial-gradient(circle at 80% 50%, {{ $post['color'] }}10 0%, transparent 50%);opacity:0.5;"></div>

                        <div class="blog-icon" style="
                            font-size:70px;
                            color:{{ $post['color'] }};
                            opacity:0.3;
                            transition: all 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                            position:relative;
                            z-index:1;
                            text-shadow: 0 0 40px {{ $post['color'] }}33;
                        ">
                            <i class="fas {{ $post['icon'] }}"></i>
                        </div>

                        <div style="position:absolute;top:18px;left:18px;background:{{ $post['color'] }};color:#fff;padding:6px 18px;border-radius:50px;font-size:11px;font-weight:700;z-index:3;box-shadow:0 6px 25px {{ $post['color'] }}66;letter-spacing:0.5px;text-transform:uppercase;">
                            {{ $post['tag'] }}
                        </div>
                    </div>

                    <div class="blog-content" style="
                        padding:25px 28px 28px;
                        position:relative;
                        z-index:1;
                        transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                    ">
                        <h3 style="
                            font-size:18px;
                            font-weight:700;
                            margin-bottom:12px;
                            line-height:1.4;
                            transition:all 0.4s ease;
                            color:#fff;
                        " onmouseover="this.style.color='{{ $post['color'] }}';this.style.transform='translateX(6px)'" onmouseout="this.style.color='#fff';this.style.transform='translateX(0)'">
                            {{ $post['title'] }}
                        </h3>

                        <p style="color:#94a3b8;font-size:14px;line-height:1.8;margin-bottom:18px;opacity:0.9;">
                            {{ $post['excerpt'] }}
                        </p>

                        <a href="{{ route('blog.show', $post['slug']) }}" class="blog-read-btn" style="
                            color:{{ $post['color'] }};
                            text-decoration:none;
                            font-size:14px;
                            font-weight:600;
                            display:inline-flex;
                            align-items:center;
                            gap:8px;
                            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                            padding:10px 24px;
                            border-radius:60px;
                            border:2px solid {{ $post['color'] }}30;
                            background:transparent;
                            position:relative;
                            overflow:hidden;
                        ">
                            <span style="position:relative;z-index:1;">Devamını Oku</span>
                            <i class="fas fa-arrow-right" style="transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);position:relative;z-index:1;"></i>
                            <div style="
                                position:absolute;
                                top:0;
                                left:0;
                                width:100%;
                                height:100%;
                                background:{{ $post['color'] }};
                                transform:scaleX(0);
                                transform-origin:right;
                                transition:transform 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                            "></div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ===== HABERLER ===== -->
<section class="section-padding" id="haberler" style="background:rgba(10,14,26,0.4);backdrop-filter:blur(5px);border-top:1px solid rgba(255,255,255,0.02);border-bottom:1px solid rgba(255,255,255,0.02);position:relative;overflow:hidden;">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-tag"><i class="fas fa-newspaper"></i> Haberler</span>
            <h2>Haberlerimiz</h2>
            <p>Dünyadan ve Türkiye'den en güncel teknoloji haberleri</p>
        </div>

        <div class="news-grid">
            @php
                $newsItems = [
                    [
                        'slug' => 'kuantum-hesaplama',
                        'title' => 'Google CEO\'su Sundar Pichai: "Kuantum Hesaplama ile 10 Yıl İçinde Devrim Yaşanacak"',
                        'excerpt' => 'Google CEO\'su Sundar Pichai, kuantum hesaplama teknolojisinin önümüzdeki 10 yıl içinde bilgisayar dünyasında devrim yaratacağını açıkladı.',
                        'category' => 'Kuantum Bilgisayar',
                        'color' => '#ff6b6b',
                        'icon' => 'fa-microchip',
                        'bg' => 'linear-gradient(135deg, #1a1a2e, #2d2d44)'
                    ],
                    [
                        'slug' => 'ulusal-yapay-zeka',
                        'title' => 'Trump, "Genesis Mission" ile Ulusal Yapay Zeka Stratejisini Duyurdu',
                        'excerpt' => 'Eski ABD Başkanı Donald Trump, "Genesis Mission" adlı ulusal yapay zeka stratejisini duyurdu.',
                        'category' => 'Yapay Zeka',
                        'color' => '#ffd93d',
                        'icon' => 'fa-brain',
                        'bg' => 'linear-gradient(135deg, #1a1a2e, #2d2d44)'
                    ],
                    [
                        'slug' => 'fleet-space',
                        'title' => 'Fleet Space, Yapay Zeka ve Uydu Teknolojisiyle Madencilikte Devrim Yaratıyor',
                        'excerpt' => 'Fleet Space, yapay zeka ve uydu teknolojisini birleştirerek madencilik sektöründe devrim yaratıyor.',
                        'category' => 'Uzay Teknolojisi',
                        'color' => '#4d96ff',
                        'icon' => 'fa-satellite',
                        'bg' => 'linear-gradient(135deg, #1a1a2e, #2d2d44)'
                    ]
                ];
            @endphp
            @foreach($newsItems as $index => $news)
                <div class="glass tilt"
                     data-aos="flip-up"
                     data-aos-delay="{{ $loop->iteration * 80 }}"
                     style="
                        border-color:{{ $news['color'] }}25;
                        background:{{ $news['bg'] }};
                        padding:0;
                        position:relative;
                        overflow:hidden;
                        transition: all 0.7s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                        cursor:pointer;
                        border-width:2px;
                        border-radius:24px;
                        perspective:1000px;
                        transform-style:preserve-3d;
                        box-shadow: 0 10px 40px rgba(0,0,0,0.3);
                     "
                     onmouseover="
                        this.style.transform='translateY(-20px) scale(1.04) rotateX(4deg) rotateY(-6deg)';
                        this.style.borderColor='{{ $news['color'] }}';
                        this.style.boxShadow='0 40px 100px {{ $news['color'] }}55, 0 20px 60px {{ $news['color'] }}33';
                        this.style.background='linear-gradient(135deg, {{ $news['color'] }}15, #1a1a2e)';
                        this.querySelector('.news-image').style.transform='scale(1.08)';
                        this.querySelector('.news-icon').style.transform='scale(1.4) rotate(-25deg)';
                        this.querySelector('.news-content').style.transform='translateY(-5px)';
                        this.querySelector('.news-read-btn').style.transform='translateX(10px) scale(1.05)';
                        this.querySelector('.news-read-btn').style.background='{{ $news['color'] }}';
                        this.querySelector('.news-read-btn').style.color='#fff';
                        this.querySelector('.news-read-btn i').style.transform='translateX(8px)';
                     "
                     onmouseout="
                        this.style.transform='translateY(0) scale(1) rotateX(0) rotateY(0)';
                        this.style.borderColor='{{ $news['color'] }}25';
                        this.style.boxShadow='0 10px 40px rgba(0,0,0,0.3)';
                        this.style.background='{{ $news['bg'] }}';
                        this.querySelector('.news-image').style.transform='scale(1)';
                        this.querySelector('.news-icon').style.transform='scale(1) rotate(0deg)';
                        this.querySelector('.news-content').style.transform='translateY(0)';
                        this.querySelector('.news-read-btn').style.transform='translateX(0) scale(1)';
                        this.querySelector('.news-read-btn').style.background='transparent';
                        this.querySelector('.news-read-btn').style.color='{{ $news['color'] }}';
                        this.querySelector('.news-read-btn i').style.transform='translateX(0)';
                     "
                >
                    <div class="news-image" style="
                        height:180px;
                        background:{{ $news['bg'] }};
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        position:relative;
                        border-bottom:2px solid {{ $news['color'] }}20;
                        overflow:hidden;
                        transition: all 0.7s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                    ">
                        <div style="position:absolute;top:0;left:0;width:100%;height:100%;background-image:radial-gradient(circle at 30% 40%, {{ $news['color'] }}10 0%, transparent 50%), radial-gradient(circle at 70% 60%, {{ $news['color'] }}10 0%, transparent 50%);opacity:0.5;"></div>

                        <div class="news-icon" style="
                            font-size:60px;
                            color:{{ $news['color'] }};
                            opacity:0.3;
                            transition: all 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                            position:relative;
                            z-index:1;
                            text-shadow: 0 0 40px {{ $news['color'] }}33;
                        ">
                            <i class="fas {{ $news['icon'] }}"></i>
                        </div>

                        <div style="position:absolute;top:16px;left:16px;background:{{ $news['color'] }};color:#fff;padding:5px 16px;border-radius:50px;font-size:10px;font-weight:700;z-index:3;box-shadow:0 6px 25px {{ $news['color'] }}66;letter-spacing:0.5px;text-transform:uppercase;">
                            {{ $news['category'] }}
                        </div>
                    </div>

                    <div class="news-content" style="
                        padding:22px 25px 25px;
                        position:relative;
                        z-index:1;
                        transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                    ">
                        <h3 style="
                            font-size:16px;
                            font-weight:700;
                            margin-bottom:12px;
                            line-height:1.5;
                            transition:all 0.4s ease;
                            color:#fff;
                        " onmouseover="this.style.color='{{ $news['color'] }}';this.style.transform='translateX(6px)'" onmouseout="this.style.color='#fff';this.style.transform='translateX(0)'">
                            {{ $news['title'] }}
                        </h3>

                        <p style="color:#94a3b8;font-size:13px;line-height:1.7;margin-bottom:15px;">
                            {{ $news['excerpt'] }}
                        </p>

                        <a href="{{ route('news.show', $news['slug']) }}" class="news-read-btn" style="
                            color:{{ $news['color'] }};
                            text-decoration:none;
                            font-size:13px;
                            font-weight:600;
                            display:inline-flex;
                            align-items:center;
                            gap:8px;
                            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                            padding:8px 22px;
                            border-radius:60px;
                            border:2px solid {{ $news['color'] }}30;
                            background:transparent;
                            position:relative;
                            overflow:hidden;
                        ">
                            <span style="position:relative;z-index:1;">Haberi Oku</span>
                            <i class="fas fa-arrow-right" style="transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);position:relative;z-index:1;"></i>
                            <div style="
                                position:absolute;
                                top:0;
                                left:0;
                                width:100%;
                                height:100%;
                                background:{{ $news['color'] }};
                                transform:scaleX(0);
                                transform-origin:right;
                                transition:transform 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                            "></div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ===== İLETİŞİME GEÇİN ===== -->
<section class="section-padding" id="cta" style="background:linear-gradient(135deg, #1a1a2e, #2d2d44);border-top:1px solid rgba(255,255,255,0.05);border-bottom:1px solid rgba(255,255,255,0.05);position:relative;overflow:hidden;">
    <div style="position:absolute;top:-50%;right:-20%;width:600px;height:600px;background:radial-gradient(circle,rgba(255,107,107,0.05),transparent 70%);border-radius:50%;pointer-events:none;"></div>
    <div style="position:absolute;bottom:-50%;left:-20%;width:500px;height:500px;background:radial-gradient(circle,rgba(77,150,255,0.05),transparent 70%);border-radius:50%;pointer-events:none;"></div>

    <div class="container">
        <div class="cta-content" data-aos="fade-up" style="position:relative;z-index:1;text-align:center;">
            <h2 style="font-size:42px;font-weight:800;margin-bottom:15px;color:#fff;">Bizimle <span style="background:linear-gradient(135deg,#ff6b6b,#ffd93d,#6bcb77,#4d96ff);background-size:300% 300%;-webkit-background-clip:text;-webkit-text-fill-color:transparent;animation:rainbowText 4s ease infinite;">İletişime Geçin</span></h2>
            <p style="font-size:18px;margin-bottom:30px;color:#94a3b8;max-width:600px;margin-left:auto;margin-right:auto;line-height:1.8;">
                Projenizi konuşmak, teklif almak veya sorularınız için hemen bize ulaşın.
            </p>
            <div style="display:flex;gap:20px;justify-content:center;flex-wrap:wrap;">
                <a href="{{ route('contact') }}" style="
                    background:linear-gradient(135deg, #ff6b6b, #ee5a24);
                    color:#fff !important;
                    padding:16px 45px;
                    border-radius:60px;
                    text-decoration:none;
                    font-weight:600;
                    transition:all 0.4s cubic-bezier(0.175,0.885,0.32,1.275);
                    display:inline-flex;
                    align-items:center;
                    gap:12px;
                    font-size:17px;
                    border:none;
                    cursor:pointer;
                    box-shadow:0 15px 50px rgba(255,107,107,0.35);
                "
                onmouseover="this.style.transform='translateY(-5px) scale(1.05)';this.style.boxShadow='0 25px 70px rgba(255,107,107,0.5)'"
                onmouseout="this.style.transform='translateY(0) scale(1)';this.style.boxShadow='0 15px 50px rgba(255,107,107,0.35)'">
                    <i class="fas fa-paper-plane"></i> Hemen İletişim
                </a>
                <a href="tel:+905551234567" style="
                    background:rgba(255,255,255,0.05);
                    color:#fff !important;
                    padding:16px 45px;
                    border-radius:60px;
                    text-decoration:none;
                    font-weight:600;
                    transition:all 0.4s cubic-bezier(0.175,0.885,0.32,1.275);
                    display:inline-flex;
                    align-items:center;
                    gap:12px;
                    font-size:17px;
                    backdrop-filter:blur(10px);
                    border:1px solid rgba(255,255,255,0.12);
                "
                onmouseover="this.style.background='rgba(255,255,255,0.1)';this.style.transform='translateY(-5px) scale(1.05)';this.style.borderColor='rgba(255,255,255,0.25)'"
                onmouseout="this.style.background='rgba(255,255,255,0.05)';this.style.transform='translateY(0) scale(1)';this.style.borderColor='rgba(255,255,255,0.12)'">
                    <i class="fas fa-phone"></i> +90 (555) 123 45 67
                </a>
            </div>
        </div>
    </div>
</section>

<style>
.services-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}
.projects-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
}
.blog-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 35px;
}
.news-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 35px;
}

@keyframes serviceFloat {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    25% { transform: translateY(-8px) rotate(0.5deg); }
    75% { transform: translateY(8px) rotate(-0.5deg); }
}
@keyframes pulseGlow {
    0%, 100% { opacity: 0.3; transform: scale(1); }
    50% { opacity: 1; transform: scale(1.2); }
}
@keyframes orbitFloat {
    0% { transform: translateY(0px) rotate(0deg); }
    25% { transform: translateY(-15px) rotate(2deg); }
    50% { transform: translateY(0px) rotate(0deg); }
    75% { transform: translateY(15px) rotate(-2deg); }
    100% { transform: translateY(0px) rotate(0deg); }
}
@keyframes rainbowText {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

@media (max-width: 992px) {
    .services-grid { grid-template-columns: repeat(2, 1fr); gap: 20px; }
    .projects-grid { grid-template-columns: 1fr 1fr; gap: 20px; }
    .blog-grid { grid-template-columns: repeat(2, 1fr); gap: 25px; }
    .news-grid { grid-template-columns: repeat(2, 1fr); gap: 25px; }
    #cta .cta-content h2 { font-size: 34px !important; }
}
@media (max-width: 768px) {
    .services-grid { grid-template-columns: 1fr 1fr; gap: 12px; }
    .projects-grid { grid-template-columns: 1fr 1fr; gap: 12px; }
    .blog-grid { grid-template-columns: 1fr 1fr; gap: 15px; }
    .news-grid { grid-template-columns: 1fr 1fr; gap: 15px; }

    .services-grid .glass,
    .projects-grid .glass {
        padding: 18px 14px !important;
    }
    .services-grid .glass .service-icon {
        font-size: 30px !important;
        margin-bottom: 8px !important;
    }
    .services-grid .glass h3,
    .projects-grid .glass h3 {
        font-size: 14px !important;
        margin-bottom: 4px !important;
    }
    .services-grid .glass p,
    .projects-grid .glass p {
        font-size: 12px !important;
        line-height: 1.5 !important;
        margin-bottom: 8px !important;
    }
    .services-grid .glass .service-icon + h3 + p {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .services-grid .glass a,
    .projects-grid .glass a {
        font-size: 11px !important;
        padding: 4px 12px !important;
    }
    .projects-grid .glass .project-icon {
        width: 38px !important;
        height: 38px !important;
        font-size: 16px !important;
    }
    .projects-grid .glass .project-icon + h3 {
        font-size: 14px !important;
    }
    .projects-grid .glass .project-icon + h3 + p {
        font-size: 12px !important;
        line-height: 1.5 !important;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .blog-grid .glass .blog-image {
        height: 140px !important;
    }
    .blog-grid .glass .blog-image .blog-icon {
        font-size: 40px !important;
    }
    .blog-grid .glass .blog-content {
        padding: 14px 16px 18px !important;
    }
    .blog-grid .glass .blog-content h3 {
        font-size: 14px !important;
        margin-bottom: 6px !important;
    }
    .blog-grid .glass .blog-content p {
        font-size: 12px !important;
        margin-bottom: 10px !important;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .blog-grid .glass .blog-content .blog-read-btn {
        font-size: 12px !important;
        padding: 6px 16px !important;
    }

    .news-grid .glass .news-image {
        height: 120px !important;
    }
    .news-grid .glass .news-image .news-icon {
        font-size: 32px !important;
    }
    .news-grid .glass .news-content {
        padding: 14px 16px 18px !important;
    }
    .news-grid .glass .news-content h3 {
        font-size: 13px !important;
        margin-bottom: 6px !important;
    }
    .news-grid .glass .news-content p {
        font-size: 12px !important;
        margin-bottom: 10px !important;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .news-grid .glass .news-content .news-read-btn {
        font-size: 11px !important;
        padding: 5px 14px !important;
    }

    #cta .cta-content h2 { font-size: 28px !important; }
    #cta .cta-content p { font-size: 15px !important; padding: 0 15px; }
    #cta .cta-content div { flex-direction: column !important; align-items: center !important; }
    #cta .cta-content a { width: 100% !important; max-width: 320px !important; justify-content: center !important; padding: 14px 30px !important; font-size: 15px !important; }
}

@media (max-width: 480px) {
    .services-grid { grid-template-columns: 1fr 1fr; gap: 10px; }
    .projects-grid { grid-template-columns: 1fr 1fr; gap: 10px; }
    .blog-grid { grid-template-columns: 1fr 1fr; gap: 12px; }
    .news-grid { grid-template-columns: 1fr 1fr; gap: 12px; }

    .services-grid .glass,
    .projects-grid .glass {
        padding: 14px 10px !important;
    }
    .services-grid .glass .service-icon {
        font-size: 24px !important;
        margin-bottom: 6px !important;
    }
    .services-grid .glass h3,
    .projects-grid .glass h3 {
        font-size: 12px !important;
    }
    .services-grid .glass p,
    .projects-grid .glass p {
        font-size: 10px !important;
        line-height: 1.4 !important;
    }
    .services-grid .glass a,
    .projects-grid .glass a {
        font-size: 10px !important;
        padding: 3px 10px !important;
    }
    .projects-grid .glass .project-icon {
        width: 30px !important;
        height: 30px !important;
        font-size: 13px !important;
    }
    .projects-grid .glass .project-icon + h3 {
        font-size: 12px !important;
    }
    .projects-grid .glass .project-icon + h3 + p {
        font-size: 10px !important;
        -webkit-line-clamp: 2 !important;
    }

    .blog-grid .glass .blog-image {
        height: 100px !important;
    }
    .blog-grid .glass .blog-image .blog-icon {
        font-size: 28px !important;
    }
    .blog-grid .glass .blog-content {
        padding: 10px 12px 14px !important;
    }
    .blog-grid .glass .blog-content h3 {
        font-size: 12px !important;
    }
    .blog-grid .glass .blog-content p {
        font-size: 10px !important;
        -webkit-line-clamp: 2 !important;
    }
    .blog-grid .glass .blog-content .blog-read-btn {
        font-size: 10px !important;
        padding: 4px 12px !important;
    }

    .news-grid .glass .news-image {
        height: 90px !important;
    }
    .news-grid .glass .news-image .news-icon {
        font-size: 24px !important;
    }
    .news-grid .glass .news-content {
        padding: 10px 12px 14px !important;
    }
    .news-grid .glass .news-content h3 {
        font-size: 11px !important;
    }
    .news-grid .glass .news-content p {
        font-size: 10px !important;
        -webkit-line-clamp: 2 !important;
    }
    .news-grid .glass .news-content .news-read-btn {
        font-size: 10px !important;
        padding: 4px 12px !important;
    }

    #cta .cta-content h2 { font-size: 22px !important; }
    #cta .cta-content a { padding: 12px 20px !important; font-size: 13px !important; max-width: 280px !important; }
}
</style>
@endsection
