@extends('layouts.app')

@section('title', 'Blog')

@section('content')
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
            <div class="badge"><i class="fas fa-blog"></i> Blog</div>
            <h1>Blog & <span>Yazılar</span></h1>
            <p>Teknoloji, yazılım ve dijital dünya üzerine güncel yazılar</p>
        </div>
    </div>
</section>

<section class="section-padding" style="background:rgba(10,14,26,0.3);backdrop-filter:blur(5px);border-top:1px solid rgba(255,255,255,0.02);border-bottom:1px solid rgba(255,255,255,0.02);">
    <div class="container">
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:30px;">
            @php
                $blogPosts = [
                    [
                        'slug' => 'erp-uygulama-sureci',
                        'date' => '02 Temmuz, 2025',
                        'title' => 'Başarılı Bir ERP Uygulama Süreci Nasıl İlerler?',
                        'excerpt' => 'ERP sistemlerinin başarılı bir şekilde uygulanması için izlenmesi gereken adımlar ve stratejiler.',
                        'color' => '#ff6b6b',
                        'icon' => 'fa-cubes',
                        'tag' => 'ERP',
                        'author' => 'Ahmet Yılmaz'
                    ],
                    [
                        'slug' => 'efatura-earsiv',
                        'date' => '27 Haziran, 2025',
                        'title' => 'İşletmenizi Geleceğe Taşıyın: e-Fatura ve e-Arşiv Sistemlerinin',
                        'excerpt' => 'e-Fatura ve e-Arşiv sistemleri ile işletmenizi dijital dönüşüme hazırlayın.',
                        'color' => '#ffd93d',
                        'icon' => 'fa-file-invoice',
                        'tag' => 'Dijital Dönüşüm',
                        'author' => 'Mehmet Demir'
                    ],
                    [
                        'slug' => 'windows-12',
                        'date' => '21 Ağustos, 2025',
                        'title' => 'Windows 12 ile Gelen Yenilikler ve İşletmelere Etkileri',
                        'excerpt' => 'Windows 12\'nin getirdiği yenilikler, performans iyileştirmeleri ve işletmelere sağlayacağı avantajlar.',
                        'color' => '#4d96ff',
                        'icon' => 'fa-windows',
                        'tag' => 'Teknoloji',
                        'author' => 'Can Öztürk'
                    ]
                ];
            @endphp
            @foreach($blogPosts as $post)
                <div class="glass tilt" data-aos="flip-up" style="border-color:{{ $post['color'] }}15;background:{{ $post['color'] }}05;padding:30px;transition:all 0.5s ease;"
                     onmouseover="this.style.transform='translateY(-10px) scale(1.03)';this.style.borderColor='{{ $post['color'] }}';this.style.boxShadow='0 20px 50px {{ $post['color'] }}22'"
                     onmouseout="this.style.transform='translateY(0) scale(1)';this.style.borderColor='{{ $post['color'] }}15';this.style.boxShadow='none'">
                    <div style="font-size:40px;color:{{ $post['color'] }};margin-bottom:15px;"><i class="fas {{ $post['icon'] }}"></i></div>
                    <div style="display:flex;gap:8px;flex-wrap:wrap;margin-bottom:10px;">
                        <span style="background:{{ $post['color'] }}10;color:{{ $post['color'] }};padding:3px 12px;border-radius:50px;font-size:11px;border:1px solid {{ $post['color'] }}10;">{{ $post['tag'] }}</span>
                        <span style="color:#64748b;font-size:12px;"><i class="far fa-calendar"></i> {{ $post['date'] }}</span>
                    </div>
                    <h3 style="font-size:18px;font-weight:700;margin-bottom:8px;transition:0.3s;" onmouseover="this.style.color='{{ $post['color'] }}'" onmouseout="this.style.color='#fff'">{{ $post['title'] }}</h3>
                    <p style="color:#94a3b8;font-size:14px;line-height:1.7;margin-bottom:15px;">{{ $post['excerpt'] }}</p>
                    <div style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:10px;">
                        <span style="color:#64748b;font-size:12px;"><i class="fas fa-user" style="color:{{ $post['color'] }};"></i> {{ $post['author'] }}</span>
                        <a href="{{ route('blog.show', $post['slug']) }}" style="color:{{ $post['color'] }};text-decoration:none;font-weight:600;display:inline-flex;align-items:center;gap:5px;transition:0.3s;" onmouseover="this.style.gap='10px'" onmouseout="this.style.gap='5px'">
                            Devamını Oku <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
