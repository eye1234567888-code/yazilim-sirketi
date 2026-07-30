@extends('layouts.app')

@section('title', $blog['title'] ?? 'Blog Detay')

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
            <div class="badge" style="background:{{ $blog['color'] }}20;color:{{ $blog['color'] }};border-color:{{ $blog['color'] }}30;">
                <i class="fas {{ $blog['icon'] }}" style="color:{{ $blog['color'] }};"></i> {{ $blog['category'] }}
            </div>
            <h1 style="font-size:44px;line-height:1.2;">{{ $blog['title'] }}</h1>
            <div style="display:flex;gap:20px;flex-wrap:wrap;margin-top:15px;color:#94a3b8;font-size:14px;">
                <span><i class="far fa-calendar" style="color:{{ $blog['color'] }};"></i> {{ $blog['date'] }}</span>
                <span><i class="fas fa-user" style="color:{{ $blog['color'] }};"></i> {{ $blog['author'] }}</span>
                <span><i class="far fa-clock" style="color:{{ $blog['color'] }};"></i> {{ $blog['read_time'] }}</span>
            </div>
        </div>
    </div>
</section>

<!-- ===== BLOG İÇERİĞİ ===== -->
<section class="section-padding" style="background:rgba(10,14,26,0.3);backdrop-filter:blur(5px);border-top:1px solid rgba(255,255,255,0.02);border-bottom:1px solid rgba(255,255,255,0.02);">
    <div class="container">
        <div style="max-width:900px;margin:0 auto;">
            <div class="glass" style="padding:50px;border-color:rgba(255,255,255,0.05);" data-aos="fade-up">
                <div style="font-size:60px;color:{{ $blog['color'] }};margin-bottom:30px;text-align:center;opacity:0.3;">
                    <i class="fas {{ $blog['icon'] }}"></i>
                </div>
                <div style="color:#e2e8f0;font-size:16px;line-height:2;">
                    {!! $blog['content'] !!}
                </div>

                <div style="margin-top:40px;padding-top:30px;border-top:1px solid rgba(255,255,255,0.05);display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:15px;">
                    <a href="{{ route('blog') }}" style="color:{{ $blog['color'] }};text-decoration:none;font-weight:600;display:inline-flex;align-items:center;gap:8px;transition:0.3s;" onmouseover="this.style.gap='15px'" onmouseout="this.style.gap='8px'">
                        <i class="fas fa-arrow-left"></i> Tüm Bloglar
                    </a>
                    <a href="{{ route('contact') }}" class="btn-primary"><i class="fas fa-paper-plane"></i> İletişime Geç</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
