@extends('layouts.app')

@section('title', $blog['title'] ?? 'Blog Detay - Yazılım Şirketi')

@section('content')
<style>
    .blog-detail-hero {
        padding: 140px 0 40px;
        position: relative;
        z-index: 1;
    }
    .blog-detail-hero .back-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #ff6b6b;
        text-decoration: none;
        font-weight: 600;
        margin-bottom: 20px;
        transition: 0.3s;
    }
    .blog-detail-hero .back-link:hover {
        transform: translateX(-5px);
    }
    .blog-detail-hero .category-tag {
        display: inline-block;
        padding: 4px 16px;
        border-radius: 50px;
        font-size: 11px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        background: rgba(255,107,107,0.12);
        color: #ff6b6b;
        border: 1px solid rgba(255,107,107,0.1);
        margin-bottom: 15px;
    }
    .blog-detail-hero h1 {
        font-size: 42px;
        font-weight: 900;
        color: #fff;
        margin-bottom: 15px;
        line-height: 1.2;
    }
    .blog-detail-hero .meta {
        display: flex;
        align-items: center;
        gap: 20px;
        color: #94a3b8;
        font-size: 14px;
        flex-wrap: wrap;
    }
    .blog-detail-hero .meta span {
        display: flex;
        align-items: center;
        gap: 6px;
    }
    .blog-detail-hero .meta span i {
        color: #ff6b6b;
    }

    .blog-detail-content {
        padding: 40px 0 80px;
        position: relative;
        z-index: 1;
    }
    .blog-detail-content .content-body {
        max-width: 800px;
        margin: 0 auto;
        color: #e2e8f0;
        font-size: 17px;
        line-height: 1.9;
    }
    .blog-detail-content .content-body h2 {
        font-size: 28px;
        font-weight: 700;
        color: #fff;
        margin: 35px 0 15px;
    }
    .blog-detail-content .content-body h3 {
        font-size: 22px;
        font-weight: 600;
        color: #fff;
        margin: 25px 0 12px;
    }
    .blog-detail-content .content-body p {
        margin-bottom: 20px;
        color: #c8d0e0;
    }
    .blog-detail-content .content-body ul {
        margin: 15px 0 20px 25px;
    }
    .blog-detail-content .content-body ul li {
        margin-bottom: 8px;
        color: #c8d0e0;
    }
    .blog-detail-content .content-body .highlight-box {
        background: rgba(255,107,107,0.05);
        border-left: 4px solid #ff6b6b;
        padding: 20px 25px;
        border-radius: 8px;
        margin: 25px 0;
    }
    .blog-detail-content .content-body .highlight-box p {
        margin-bottom: 0;
        color: #e2e8f0;
    }

    @media (max-width: 768px) {
        .blog-detail-hero {
            padding: 100px 0 20px;
        }
        .blog-detail-hero h1 {
            font-size: 28px;
        }
        .blog-detail-hero .meta {
            font-size: 12px;
            gap: 12px;
        }
        .blog-detail-content {
            padding: 20px 0 50px;
        }
        .blog-detail-content .content-body {
            font-size: 15px;
        }
        .blog-detail-content .content-body h2 {
            font-size: 22px;
        }
        .blog-detail-content .content-body h3 {
            font-size: 18px;
        }
    }
    @media (max-width: 480px) {
        .blog-detail-hero h1 {
            font-size: 22px;
        }
        .blog-detail-content .content-body {
            font-size: 14px;
        }
        .blog-detail-content .content-body h2 {
            font-size: 18px;
        }
        .blog-detail-content .content-body h3 {
            font-size: 16px;
        }
    }
</style>

<section class="blog-detail-hero">
    <div class="container">
        <a href="{{ route('blog') }}" class="back-link">
            <i class="fas fa-arrow-left"></i> Tüm Blog Yazıları
        </a>
        <div class="category-tag"><i class="fas fa-tag"></i> {{ $blog['category'] ?? 'Yazılım' }}</div>
        <h1>{{ $blog['title'] ?? 'Blog Başlığı' }}</h1>
        <div class="meta">
            <span><i class="fas fa-calendar-alt"></i> {{ $blog['date'] ?? '15 Ocak 2024' }}</span>
            <span><i class="fas fa-user"></i> {{ $blog['author'] ?? 'Admin' }}</span>
            <span><i class="fas fa-clock"></i> {{ $blog['read_time'] ?? '5 dk' }} okuma süresi</span>
        </div>
    </div>
</section>

<section class="blog-detail-content">
    <div class="container">
        <div class="content-body">
            {!! $blog['content'] ?? '<p>Blog içeriği burada yer alacak.</p>' !!}
        </div>
    </div>
</section>
@endsection
