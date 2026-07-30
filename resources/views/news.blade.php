@extends('layouts.app')

@section('title', 'Haberler')

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
            <div class="badge"><i class="fas fa-newspaper"></i> Haberler</div>
            <h1>Haberler</h1>
            <p>Dünyadan ve Türkiye'den en güncel teknoloji haberleri</p>
        </div>
    </div>
</section>

<!-- ===== HABERLER ===== -->
<section class="section-padding" style="background:rgba(10,14,26,0.3);backdrop-filter:blur(5px);border-top:1px solid rgba(255,255,255,0.02);border-bottom:1px solid rgba(255,255,255,0.02);position:relative;overflow:hidden;">
    <div class="container">
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:35px;">
            @php
                $newsItems = [
                    [
                        'slug' => 'kuantum-hesaplama',
                        'date' => '07 Aralık, 2025',
                        'title' => 'Google CEO\'su Sundar Pichai: "Kuantum Hesaplama ile 10 Yıl İçinde Devrim Yaşanacak"',
                        'excerpt' => 'Google CEO\'su Sundar Pichai, kuantum hesaplama teknolojisinin önümüzdeki 10 yıl içinde bilgisayar dünyasında devrim yaratacağını açıkladı.',
                        'category' => 'Kuantum Bilgisayar',
                        'color' => '#ff6b6b',
                        'icon' => 'fa-microchip',
                        'source' => 'TechCrunch',
                        'bg' => 'linear-gradient(135deg, #1a1a2e, #2d2d44)'
                    ],
                    [
                        'slug' => 'ulusal-yapay-zeka',
                        'date' => '01 Aralık, 2025',
                        'title' => 'Trump, "Genesis Mission" ile Ulusal Yapay Zeka Stratejisini Duyurdu',
                        'excerpt' => 'Eski ABD Başkanı Donald Trump, "Genesis Mission" adlı ulusal yapay zeka stratejisini duyurdu.',
                        'category' => 'Yapay Zeka',
                        'color' => '#ffd93d',
                        'icon' => 'fa-brain',
                        'source' => 'Bloomberg',
                        'bg' => 'linear-gradient(135deg, #1a1a2e, #2d2d44)'
                    ],
                    [
                        'slug' => 'fleet-space',
                        'date' => '28 Kasım, 2025',
                        'title' => 'Fleet Space, Yapay Zeka ve Uydu Teknolojisiyle Madencilikte Devrim Yaratıyor',
                        'excerpt' => 'Fleet Space, yapay zeka ve uydu teknolojisini birleştirerek madencilik sektöründe devrim yaratıyor.',
                        'category' => 'Uzay Teknolojisi',
                        'color' => '#4d96ff',
                        'icon' => 'fa-satellite',
                        'source' => 'SpaceNews',
                        'bg' => 'linear-gradient(135deg, #1a1a2e, #2d2d44)'
                    ]
                ];
            @endphp
            @foreach($newsItems as $news)
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
                        this.querySelector('.news-overlay').style.opacity='1';
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
                        this.querySelector('.news-overlay').style.opacity='0';
                        this.querySelector('.news-icon').style.transform='scale(1) rotate(0deg)';
                        this.querySelector('.news-content').style.transform='translateY(0)';
                        this.querySelector('.news-read-btn').style.transform='translateX(0) scale(1)';
                        this.querySelector('.news-read-btn').style.background='transparent';
                        this.querySelector('.news-read-btn').style.color='{{ $news['color'] }}';
                        this.querySelector('.news-read-btn i').style.transform='translateX(0)';
                     "
                >
                    <!-- Görsel Alanı -->
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

                        <div class="news-overlay" style="
                            position:absolute;
                            top:0;
                            left:0;
                            width:100%;
                            height:100%;
                            background:linear-gradient(135deg, {{ $news['color'] }}88, {{ $news['color'] }}bb);
                            opacity:0;
                            transition: all 0.7s ease;
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            z-index:2;
                            backdrop-filter:blur(4px);
                        ">
                            <span style="
                                color:#fff;
                                font-size:14px;
                                font-weight:700;
                                padding:12px 30px;
                                border-radius:60px;
                                border:2px solid rgba(255,255,255,0.5);
                                background:rgba(255,255,255,0.1);
                                backdrop-filter:blur(15px);
                                transition:all 0.5s ease;
                                letter-spacing:1px;
                                box-shadow: 0 10px 40px rgba(0,0,0,0.2);
                            " onmouseover="this.style.transform='scale(1.12)';this.style.background='rgba(255,255,255,0.2)';this.style.borderColor='#fff'" onmouseout="this.style.transform='scale(1)';this.style.background='rgba(255,255,255,0.1)';this.style.borderColor='rgba(255,255,255,0.5)'">
                                <i class="fas fa-eye"></i> Haberi Oku
                            </span>
                        </div>

                        <div style="position:absolute;top:16px;left:16px;background:{{ $news['color'] }};color:#fff;padding:5px 16px;border-radius:50px;font-size:10px;font-weight:700;z-index:3;box-shadow:0 6px 25px {{ $news['color'] }}66;letter-spacing:0.5px;text-transform:uppercase;">
                            {{ $news['category'] }}
                        </div>

                        <div style="position:absolute;bottom:16px;right:16px;display:flex;gap:10px;z-index:3;">
                            <span style="background:rgba(0,0,0,0.7);backdrop-filter:blur(15px);padding:4px 14px;border-radius:50px;font-size:10px;color:#fff;border:1px solid rgba(255,255,255,0.05);">
                                <i class="fas fa-newspaper"></i> {{ $news['source'] }}
                            </span>
                            <span style="background:rgba(0,0,0,0.7);backdrop-filter:blur(15px);padding:4px 14px;border-radius:50px;font-size:10px;color:#fff;border:1px solid rgba(255,255,255,0.05);">
                                <i class="far fa-calendar"></i> {{ $news['date'] }}
                            </span>
                        </div>
                    </div>

                    <!-- İçerik -->
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
@endsection
