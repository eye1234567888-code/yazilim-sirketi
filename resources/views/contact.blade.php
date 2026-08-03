@extends('layouts.app')

@section('title', 'İletişim - Yazılım Şirketi')

@section('content')
<style>
    .contact-hero {
        padding: 140px 0 40px;
        text-align: center;
        position: relative;
        z-index: 1;
    }
    .contact-hero h1 {
        font-size: 48px;
        font-weight: 900;
        margin-bottom: 10px;
    }
    .contact-hero h1 span {
        background: linear-gradient(135deg, #ff6b6b, #ffd93d, #6bcb77, #4d96ff);
        background-size: 300% 300%;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: rainbowText 4s ease infinite;
    }
    .contact-hero p {
        color: #94a3b8;
        font-size: 17px;
        max-width: 550px;
        margin: 0 auto;
        line-height: 1.7;
    }

    /* ===== İLETİŞİM KONTEYNERİ ===== */
    .contact-wrapper {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        padding: 20px 0 80px;
        position: relative;
        z-index: 1;
    }

    /* ===== İLETİŞİM FORMU ===== */
    .contact-form-wrapper {
        background: rgba(255,255,255,0.02);
        border: 1px solid rgba(255,255,255,0.04);
        border-radius: 20px;
        padding: 40px;
        order: 1;
    }

    .contact-form-wrapper h2 {
        font-size: 24px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 10px;
    }

    .contact-form-wrapper .subtitle {
        color: #94a3b8;
        font-size: 15px;
        margin-bottom: 30px;
        line-height: 1.7;
    }

    .contact-form-wrapper .form-group {
        margin-bottom: 20px;
    }

    .contact-form-wrapper .form-group label {
        display: block;
        color: #e2e8f0;
        font-size: 14px;
        font-weight: 500;
        margin-bottom: 6px;
    }

    .contact-form-wrapper .form-group label .required {
        color: #ff6b6b;
    }

    .contact-form-wrapper .form-group input,
    .contact-form-wrapper .form-group textarea,
    .contact-form-wrapper .form-group select {
        width: 100%;
        padding: 12px 16px;
        background: rgba(255,255,255,0.03);
        border: 1px solid rgba(255,255,255,0.06);
        border-radius: 12px;
        color: #fff;
        font-size: 14px;
        font-family: 'Inter', sans-serif;
        transition: all 0.3s ease;
        outline: none;
    }

    .contact-form-wrapper .form-group input:focus,
    .contact-form-wrapper .form-group textarea:focus,
    .contact-form-wrapper .form-group select:focus {
        border-color: #ff6b6b;
        background: rgba(255,255,255,0.05);
        box-shadow: 0 0 0 3px rgba(255,107,107,0.1);
    }

    .contact-form-wrapper .form-group input::placeholder,
    .contact-form-wrapper .form-group textarea::placeholder {
        color: #64748b;
    }

    .contact-form-wrapper .form-group textarea {
        min-height: 130px;
        resize: vertical;
    }

    .contact-form-wrapper .form-group select {
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%2364748b' d='M6 8L1 3h10z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 16px center;
        cursor: pointer;
    }

    .contact-form-wrapper .form-group select option {
        background: #1a1a2e;
        color: #fff;
    }

    .contact-form-wrapper .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .contact-form-wrapper .submit-btn {
        width: 100%;
        padding: 14px 30px;
        background: linear-gradient(135deg, #ff6b6b, #ee5a24);
        border: none;
        border-radius: 12px;
        color: #fff;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .contact-form-wrapper .submit-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 40px rgba(255,107,107,0.3);
    }

    .contact-form-wrapper .submit-btn:active {
        transform: scale(0.97);
    }

    /* ===== İLETİŞİM BİLGİLERİ ===== */
    .contact-info {
        background: rgba(255,255,255,0.02);
        border: 1px solid rgba(255,255,255,0.04);
        border-radius: 20px;
        padding: 40px;
        order: 2;
    }

    .contact-info h2 {
        font-size: 24px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 10px;
    }

    .contact-info .subtitle {
        color: #94a3b8;
        font-size: 15px;
        margin-bottom: 30px;
        line-height: 1.7;
    }

    .contact-info .info-item {
        display: flex;
        align-items: flex-start;
        gap: 18px;
        margin-bottom: 25px;
        padding: 15px 20px;
        background: rgba(255,255,255,0.02);
        border-radius: 12px;
        transition: 0.3s;
        border: 1px solid rgba(255,255,255,0.02);
    }

    .contact-info .info-item:hover {
        background: rgba(255,255,255,0.04);
        border-color: rgba(255,107,107,0.1);
        transform: translateX(5px);
    }

    .contact-info .info-item .icon {
        width: 50px;
        height: 50px;
        min-width: 50px;
        background: linear-gradient(135deg, rgba(255,107,107,0.1), rgba(255,217,61,0.05));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        color: #ff6b6b;
        transition: 0.3s;
    }

    .contact-info .info-item:hover .icon {
        background: linear-gradient(135deg, rgba(255,107,107,0.2), rgba(255,217,61,0.1));
        transform: scale(1.05);
    }

    .contact-info .info-item .text h4 {
        font-size: 15px;
        font-weight: 600;
        color: #fff;
        margin-bottom: 4px;
    }

    .contact-info .info-item .text p {
        color: #94a3b8;
        font-size: 14px;
        margin: 0;
    }

    .contact-info .info-item .text a {
        color: #94a3b8;
        text-decoration: none;
        transition: 0.3s;
    }

    .contact-info .info-item .text a:hover {
        color: #ff6b6b;
    }

    /* ===== SOSYAL MEDYA ===== */
    .contact-info .social-section {
        margin-top: 30px;
        padding-top: 25px;
        border-top: 1px solid rgba(255,255,255,0.04);
    }

    .contact-info .social-section h4 {
        font-size: 15px;
        font-weight: 600;
        color: #fff;
        margin-bottom: 15px;
    }

    .contact-info .social-section .social-links {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
    }

    .contact-info .social-section .social-links a {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(255,255,255,0.03);
        border: 1px solid rgba(255,255,255,0.04);
        color: #94a3b8;
        font-size: 18px;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .contact-info .social-section .social-links a:hover {
        background: linear-gradient(135deg, #ff6b6b, #ee5a24);
        color: #fff;
        transform: translateY(-5px) scale(1.05);
        box-shadow: 0 10px 30px rgba(255,107,107,0.2);
        border-color: transparent;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 992px) {
        .contact-wrapper {
            grid-template-columns: 1fr;
            gap: 30px;
        }
        .contact-hero h1 {
            font-size: 38px;
        }
        .contact-info,
        .contact-form-wrapper {
            padding: 30px;
        }
        .contact-form-wrapper {
            order: 1;
        }
        .contact-info {
            order: 2;
        }
    }

    @media (max-width: 768px) {
        .contact-hero {
            padding: 100px 0 20px;
        }
        .contact-hero h1 {
            font-size: 30px;
        }
        .contact-hero p {
            font-size: 15px;
            padding: 0 15px;
        }
        .contact-wrapper {
            padding: 10px 0 40px;
            gap: 20px;
        }
        .contact-info,
        .contact-form-wrapper {
            padding: 25px 20px;
        }
        .contact-info h2,
        .contact-form-wrapper h2 {
            font-size: 20px;
        }
        .contact-info .subtitle,
        .contact-form-wrapper .subtitle {
            font-size: 14px;
        }
        .contact-info .info-item {
            padding: 12px 15px;
        }
        .contact-info .info-item .icon {
            width: 40px;
            height: 40px;
            min-width: 40px;
            font-size: 16px;
        }
        .contact-info .info-item .text h4 {
            font-size: 14px;
        }
        .contact-info .info-item .text p {
            font-size: 13px;
        }
        .contact-form-wrapper .form-row {
            grid-template-columns: 1fr;
            gap: 0;
        }
        .contact-form-wrapper .form-group input,
        .contact-form-wrapper .form-group textarea,
        .contact-form-wrapper .form-group select {
            padding: 10px 14px;
            font-size: 13px;
        }
        .contact-form-wrapper .submit-btn {
            font-size: 14px;
            padding: 12px 25px;
        }
        .contact-info .social-section .social-links a {
            width: 40px;
            height: 40px;
            font-size: 16px;
        }
    }

    @media (max-width: 480px) {
        .contact-hero h1 {
            font-size: 24px;
        }
        .contact-hero p {
            font-size: 13px;
        }
        .contact-info,
        .contact-form-wrapper {
            padding: 20px 16px;
            border-radius: 16px;
        }
        .contact-info h2,
        .contact-form-wrapper h2 {
            font-size: 18px;
        }
        .contact-info .subtitle,
        .contact-form-wrapper .subtitle {
            font-size: 13px;
        }
        .contact-info .info-item {
            padding: 10px 12px;
            gap: 12px;
        }
        .contact-info .info-item .icon {
            width: 36px;
            height: 36px;
            min-width: 36px;
            font-size: 14px;
        }
        .contact-info .info-item .text h4 {
            font-size: 13px;
        }
        .contact-info .info-item .text p {
            font-size: 12px;
        }
        .contact-form-wrapper .form-group {
            margin-bottom: 15px;
        }
        .contact-form-wrapper .form-group label {
            font-size: 13px;
        }
        .contact-form-wrapper .form-group input,
        .contact-form-wrapper .form-group textarea,
        .contact-form-wrapper .form-group select {
            padding: 8px 12px;
            font-size: 12px;
        }
        .contact-form-wrapper .form-group textarea {
            min-height: 100px;
        }
        .contact-form-wrapper .submit-btn {
            font-size: 13px;
            padding: 10px 20px;
        }
        .contact-info .social-section .social-links a {
            width: 36px;
            height: 36px;
            font-size: 14px;
        }
        section[style*="padding:0 0 60px"] iframe {
            height: 150px !important;
        }
    }

    @keyframes rainbowText {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
</style>

<!-- ===== HERO ===== -->
<section class="contact-hero">
    <div class="container">
        <div class="section-tag" style="display:inline-block;background:linear-gradient(135deg,rgba(255,107,107,0.08),rgba(255,217,61,0.08));padding:5px 20px;border-radius:50px;font-size:11px;color:#ffd93d;margin-bottom:12px;border:1px solid rgba(255,217,61,0.06);letter-spacing:2px;text-transform:uppercase;">
            <i class="fas fa-phone"></i> İletişim
        </div>
        <h1>Bizimle <span>İletişime Geçin</span></h1>
        <p>Sorularınız, önerileriniz veya projeleriniz için bize ulaşın.</p>
    </div>
</section>

<!-- ===== İLETİŞİM KONTEYNERİ ===== -->
<section class="contact-section">
    <div class="container">
        <div class="contact-wrapper">
            <!-- ===== İLETİŞİM FORMU ===== -->
            <div class="contact-form-wrapper" data-aos="fade-right" data-aos-delay="0">
                <h2>Bize Yazın</h2>
                <p class="subtitle">Size en kısa sürede dönüş yapalım.</p>

                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf

                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Adınız Soyadınız <span class="required">*</span></label>
                            <input type="text" id="name" name="name" placeholder="Adınız soyadınız" required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-Posta Adresiniz <span class="required">*</span></label>
                            <input type="email" id="email" name="email" placeholder="ornek@mail.com" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="subject">Konu <span class="required">*</span></label>
                        <select id="subject" name="subject" required>
                            <option value="">Konu seçin</option>
                            <option value="genel">Genel Soru</option>
                            <option value="proje">Proje Teklifi</option>
                            <option value="destek">Teknik Destek</option>
                            <option value="isbirligi">İş Birliği</option>
                            <option value="diger">Diğer</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Mesajınız <span class="required">*</span></label>
                        <textarea id="message" name="message" placeholder="Mesajınızı buraya yazın..." required></textarea>
                    </div>

                    <button type="submit" class="submit-btn">
                        <i class="fas fa-paper-plane"></i> Gönder
                    </button>
                </form>
            </div>

            <!-- ===== İLETİŞİM BİLGİLERİ ===== -->
            <div class="contact-info" data-aos="fade-left" data-aos-delay="100">
                <h2>İletişim Bilgileri</h2>
                <p class="subtitle">Size en hızlı şekilde dönüş yapabilmemiz için aşağıdaki kanallardan bize ulaşabilirsiniz.</p>

                <div class="info-item">
                    <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="text">
                        <h4>Adres</h4>
                        <p>İstanbul, Türkiye</p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="icon"><i class="fas fa-phone"></i></div>
                    <div class="text">
                        <h4>Telefon</h4>
                        <p><a href="tel:+905551234567">+90 (555) 123 45 67</a></p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="icon"><i class="fas fa-envelope"></i></div>
                    <div class="text">
                        <h4>E-Posta</h4>
                        <p><a href="mailto:info@yazilimsirketi.com">info@yazilimsirketi.com</a></p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="icon"><i class="fas fa-clock"></i></div>
                    <div class="text">
                        <h4>Çalışma Saatleri</h4>
                        <p>Pazartesi - Cumartesi: 09:00 - 18:00</p>
                    </div>
                </div>

                <div class="social-section">
                    <h4>Bizi Takip Edin</h4>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== HARİTA ===== -->
<section style="padding:0 0 80px;position:relative;z-index:1;">
    <div class="container">
        <div style="border-radius:20px;overflow:hidden;border:1px solid rgba(255,255,255,0.04);">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3010.782445761974!2d28.9785274!3d41.0351461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab9f7a4b8e6c1%3A0x8b8b8b8b8b8b8b8b!2s%C4%B0stanbul!5e0!3m2!1str!2str!4v1700000000000"
                width="100%"
                height="350"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>

<style>
    @media (max-width: 768px) {
        section[style*="padding:0 0 80px"] iframe {
            height: 200px !important;
        }
    }
    @media (max-width: 480px) {
        section[style*="padding:0 0 80px"] iframe {
            height: 150px !important;
        }
    }
</style>

@push('scripts')
<script>
    // Form validation - basit
    document.querySelector('form').addEventListener('submit', function(e) {
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const subject = document.getElementById('subject').value;
        const message = document.getElementById('message').value.trim();

        if (!name || !email || !subject || !message) {
            e.preventDefault();
            alert('Lütfen tüm alanları doldurun.');
        }
    });
</script>
@endpush

@endsection
