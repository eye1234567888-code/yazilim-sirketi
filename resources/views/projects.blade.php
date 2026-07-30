@extends('layouts.app')

@section('title', 'Projelerimiz')

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
            <div class="badge"><i class="fas fa-project-diagram"></i> Projelerimiz</div>
            <h1>Projelerimiz</h1>
            <p>Başarıyla tamamladığımız projeler</p>
        </div>
    </div>
</section>

<!-- ===== PROJELER ===== -->
<section class="section-padding" id="projects" style="background:rgba(10,14,26,0.3);backdrop-filter:blur(5px);border-top:1px solid rgba(255,255,255,0.02);border-bottom:1px solid rgba(255,255,255,0.02);">
    <div class="container">
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:30px;">
            @php
                $projectsData = [
                    [
                        'title' => 'MRP',
                        'desc' => 'MRP, üretim odaklı işletmelerin hammaddeden yarım mamule, üretim planlamasından stok yönetimine kadar olan tüm kaynak ihtiyaçlarını planlamasını sağlayan entegre bir sistemdir.',
                        'icon' => 'fa-industry',
                        'color' => '#ff6b6b',
                        'tags' => ['Üretim', 'Fiyat', 'Stok']
                    ],
                    [
                        'title' => 'Hızlı Satış',
                        'desc' => 'İşletmelerin satış süreçlerini hızlandırmak, stok takibini kolaylaştırmak ve operasyon verimliliğini artırmak için tasarlandı.',
                        'icon' => 'fa-rocket',
                        'color' => '#ffd93d',
                        'tags' => ['Satış', 'Stok', 'Operasyon']
                    ],
                    [
                        'title' => 'İnsan Kaynakları',
                        'desc' => 'İşletmelerin personel süreçlerini dijitalleştiren, verimliliği artıran ve şeffaflığı güçlendiren yenilikçi bir çözümdür.',
                        'icon' => 'fa-users',
                        'color' => '#6bcb77',
                        'tags' => ['Personel', 'Dijital', 'Verimlilik']
                    ],
                    [
                        'title' => 'Kurumsal Web Sitesi',
                        'desc' => 'Web siteleri, potansiyel müşterilere ulaşmanın, kurumsal kimliği pekiştirmenin ve rekabet avantajı sağlamanın en etkili yollarından biridir.',
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
                        padding:30px 25px;
                        text-align:center;
                        position:relative;
                        overflow:hidden;
                        transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                        cursor:default;
                        border-width:2px;
                        border-radius:16px;
                        {{ $index == 3 ? 'grid-column: 2 / 3;' : '' }}
                        animation: projectFloat {{ 3 + ($index % 3) }}s ease-in-out infinite;
                        animation-delay: {{ $index * 0.2 }}s;
                     "
                     onmouseover="
                        this.style.transform='scale(1.05) translateY(-12px)';
                        this.style.borderColor='{{ $project['color'] }}';
                        this.style.boxShadow='0 20px 60px {{ $project['color'] }}22';
                        this.style.background='{{ $project['color'] }}11';
                        this.style.animation='none';
                        this.querySelector('.project-icon').style.transform='scale(1.2) rotate(10deg)';
                     "
                     onmouseout="
                        this.style.transform='scale(1) translateY(0)';
                        this.style.borderColor='{{ $project['color'] }}15';
                        this.style.boxShadow='none';
                        this.style.background='{{ $project['color'] }}05';
                        this.style.animation='projectFloat {{ 3 + ($index % 3) }}s ease-in-out infinite';
                        this.style.animationDelay='{{ $index * 0.2 }}s';
                        this.querySelector('.project-icon').style.transform='scale(1) rotate(0deg)';
                     "
                >
                    <div style="position:absolute;top:-50px;right:-50px;width:120px;height:120px;background:radial-gradient(circle,{{ $project['color'] }}10,transparent 70%);border-radius:50%;pointer-events:none;"></div>
                    <div style="position:absolute;bottom:-40px;left:-40px;width:100px;height:100px;background:radial-gradient(circle,{{ $project['color'] }}08,transparent 70%);border-radius:50%;pointer-events:none;"></div>

                    <div class="project-icon" style="
                        width:70px;
                        height:70px;
                        border-radius:50%;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        margin:0 auto 15px;
                        font-size:32px;
                        color:{{ $project['color'] }};
                        background:{{ $project['color'] }}10;
                        border:2px solid {{ $project['color'] }}15;
                        transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                    ">
                        <i class="fas {{ $project['icon'] }}"></i>
                    </div>

                    <h3 style="font-size:20px;font-weight:700;margin-bottom:8px;transition:0.3s;" onmouseover="this.style.color='{{ $project['color'] }}'" onmouseout="this.style.color='#fff'">
                        {{ $project['title'] }}
                    </h3>

                    <p style="color:#94a3b8;font-size:13px;line-height:1.7;margin-bottom:12px;">
                        {{ Str::limit($project['desc'], 100) }}
                    </p>

                    <div style="display:flex;gap:6px;flex-wrap:wrap;justify-content:center;">
                        @foreach($project['tags'] as $tag)
                            <span style="
                                background:{{ $project['color'] }}10;
                                color:{{ $project['color'] }};
                                padding:4px 14px;
                                border-radius:50px;
                                font-size:11px;
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

<!-- ===== BİZE ULAŞIN ===== -->
<section class="section-padding" id="cta" style="background:linear-gradient(135deg, rgba(255,107,107,0.08), rgba(124,58,237,0.08)); backdrop-filter:blur(10px); border-top:1px solid rgba(255,255,255,0.02); border-bottom:1px solid rgba(255,255,255,0.02);">
    <div class="container">
        <div class="cta-content" data-aos="fade-up">
            <h2>Projeniz İçin <span style="color:#fff;">Harekete Geçin</span></h2>
            <p style="color:#94a3b8;">Siz de başarılı projelerimiz arasında yer almak ister misiniz?</p>
            <div style="display:flex;gap:15px;justify-content:center;flex-wrap:wrap;">
                <a href="{{ route('contact') }}" class="btn-primary"><i class="fas fa-paper-plane"></i> Hemen İletişim</a>
                <a href="tel:+905551234567" class="btn-secondary" style="border-color:rgba(255,255,255,0.15);"><i class="fas fa-phone"></i> +90 (555) 123 45 67</a>
            </div>
        </div>
    </div>
</section>

<style>
@keyframes projectFloat {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    25% { transform: translateY(-6px) rotate(0.5deg); }
    75% { transform: translateY(6px) rotate(-0.5deg); }
}
</style>
@endsection
