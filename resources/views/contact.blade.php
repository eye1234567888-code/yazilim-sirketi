@extends('layouts.app')

@section('title', 'İletişim')

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
            <div class="badge"><i class="fas fa-envelope"></i> İletişim</div>
            <h1>Bizimle <span>İletişime Geçin</span></h1>
            <p>Projenizi konuşmak, teklif almak veya sorularınız için hemen bize ulaşın.</p>
        </div>
    </div>
</section>

<!-- ===== İLETİŞİM ===== -->
<section class="section-padding" style="background:rgba(10,14,26,0.3);backdrop-filter:blur(5px);border-top:1px solid rgba(255,255,255,0.02);border-bottom:1px solid rgba(255,255,255,0.02);">
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:60px;">
            <!-- Sol: İletişim Bilgileri -->
            <div data-aos="fade-right">
                <div class="glass" style="padding:45px;border-color:rgba(255,107,107,0.05);">
                    <h2 style="font-size:28px;font-weight:700;margin-bottom:10px;color:#fff;">Bize Ulaşın</h2>
                    <p style="color:#94a3b8;font-size:15px;margin-bottom:30px;">Size en kısa sürede dönüş yapmaktan mutluluk duyarız.</p>

                    <!-- İletişim Kartları -->
                    <div style="display:flex;flex-direction:column;gap:20px;">
                        <!-- Telefon -->
                        <div class="glass" style="padding:20px 25px;border-color:rgba(255,107,107,0.05);display:flex;align-items:center;gap:18px;transition:all 0.4s ease;cursor:pointer;pointer-events:auto;" onmouseover="this.style.borderColor='#ff6b6b';this.style.transform='translateX(8px)';this.style.background='rgba(255,107,107,0.05)'" onmouseout="this.style.borderColor='rgba(255,107,107,0.05)';this.style.transform='translateX(0)';this.style.background='transparent'">
                            <div style="width:50px;height:50px;border-radius:50%;background:rgba(255,107,107,0.1);display:flex;align-items:center;justify-content:center;font-size:20px;color:#ff6b6b;flex-shrink:0;">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <p style="color:#64748b;font-size:12px;margin-bottom:2px;">Telefon</p>
                                <p style="color:#fff;font-size:16px;font-weight:600;">+90 (555) 123 45 67</p>
                            </div>
                        </div>

                        <!-- E-posta -->
                        <div class="glass" style="padding:20px 25px;border-color:rgba(255,217,61,0.05);display:flex;align-items:center;gap:18px;transition:all 0.4s ease;cursor:pointer;pointer-events:auto;" onmouseover="this.style.borderColor='#ffd93d';this.style.transform='translateX(8px)';this.style.background='rgba(255,217,61,0.05)'" onmouseout="this.style.borderColor='rgba(255,217,61,0.05)';this.style.transform='translateX(0)';this.style.background='transparent'">
                            <div style="width:50px;height:50px;border-radius:50%;background:rgba(255,217,61,0.1);display:flex;align-items:center;justify-content:center;font-size:20px;color:#ffd93d;flex-shrink:0;">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <p style="color:#64748b;font-size:12px;margin-bottom:2px;">E-posta</p>
                                <p style="color:#fff;font-size:16px;font-weight:600;">info@sirket.com</p>
                            </div>
                        </div>

                        <!-- Adres -->
                        <div class="glass" style="padding:20px 25px;border-color:rgba(107,203,119,0.05);display:flex;align-items:center;gap:18px;transition:all 0.4s ease;cursor:pointer;pointer-events:auto;" onmouseover="this.style.borderColor='#6bcb77';this.style.transform='translateX(8px)';this.style.background='rgba(107,203,119,0.05)'" onmouseout="this.style.borderColor='rgba(107,203,119,0.05)';this.style.transform='translateX(0)';this.style.background='transparent'">
                            <div style="width:50px;height:50px;border-radius:50%;background:rgba(107,203,119,0.1);display:flex;align-items:center;justify-content:center;font-size:20px;color:#6bcb77;flex-shrink:0;">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <p style="color:#64748b;font-size:12px;margin-bottom:2px;">Adres</p>
                                <p style="color:#fff;font-size:16px;font-weight:600;">İstanbul, Türkiye</p>
                            </div>
                        </div>

                        <!-- Çalışma Saatleri -->
                        <div class="glass" style="padding:20px 25px;border-color:rgba(77,150,255,0.05);display:flex;align-items:center;gap:18px;transition:all 0.4s ease;cursor:pointer;pointer-events:auto;" onmouseover="this.style.borderColor='#4d96ff';this.style.transform='translateX(8px)';this.style.background='rgba(77,150,255,0.05)'" onmouseout="this.style.borderColor='rgba(77,150,255,0.05)';this.style.transform='translateX(0)';this.style.background='transparent'">
                            <div style="width:50px;height:50px;border-radius:50%;background:rgba(77,150,255,0.1);display:flex;align-items:center;justify-content:center;font-size:20px;color:#4d96ff;flex-shrink:0;">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <p style="color:#64748b;font-size:12px;margin-bottom:2px;">Çalışma Saatleri</p>
                                <p style="color:#fff;font-size:16px;font-weight:600;">Paz - Cum: 09:00 - 18:00</p>
                            </div>
                        </div>
                    </div>

                    <!-- Sosyal Medya -->
                    <div style="margin-top:30px;padding-top:25px;border-top:1px solid rgba(255,255,255,0.03);">
                        <p style="color:#94a3b8;font-size:13px;margin-bottom:15px;">Sosyal Medyada Bizi Takip Edin</p>
                        <div style="display:flex;gap:12px;">
                            <a href="#" style="width:45px;height:45px;border-radius:50%;background:rgba(255,255,255,0.02);border:1px solid rgba(255,255,255,0.03);display:flex;align-items:center;justify-content:center;color:#94a3b8;transition:all 0.4s ease;text-decoration:none;font-size:18px;pointer-events:auto;" onmouseover="this.style.background='#ff6b6b';this.style.color='#fff';this.style.transform='translateY(-5px) scale(1.1)';this.style.boxShadow='0 10px 30px rgba(255,107,107,0.2)'" onmouseout="this.style.background='rgba(255,255,255,0.02)';this.style.color='#94a3b8';this.style.transform='translateY(0) scale(1)';this.style.boxShadow='none'">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" style="width:45px;height:45px;border-radius:50%;background:rgba(255,255,255,0.02);border:1px solid rgba(255,255,255,0.03);display:flex;align-items:center;justify-content:center;color:#94a3b8;transition:all 0.4s ease;text-decoration:none;font-size:18px;pointer-events:auto;" onmouseover="this.style.background='#1DA1F2';this.style.color='#fff';this.style.transform='translateY(-5px) scale(1.1)';this.style.boxShadow='0 10px 30px rgba(29,161,242,0.2)'" onmouseout="this.style.background='rgba(255,255,255,0.02)';this.style.color='#94a3b8';this.style.transform='translateY(0) scale(1)';this.style.boxShadow='none'">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" style="width:45px;height:45px;border-radius:50%;background:rgba(255,255,255,0.02);border:1px solid rgba(255,255,255,0.03);display:flex;align-items:center;justify-content:center;color:#94a3b8;transition:all 0.4s ease;text-decoration:none;font-size:18px;pointer-events:auto;" onmouseover="this.style.background='#0A66C2';this.style.color='#fff';this.style.transform='translateY(-5px) scale(1.1)';this.style.boxShadow='0 10px 30px rgba(10,102,194,0.2)'" onmouseout="this.style.background='rgba(255,255,255,0.02)';this.style.color='#94a3b8';this.style.transform='translateY(0) scale(1)';this.style.boxShadow='none'">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" style="width:45px;height:45px;border-radius:50%;background:rgba(255,255,255,0.02);border:1px solid rgba(255,255,255,0.03);display:flex;align-items:center;justify-content:center;color:#94a3b8;transition:all 0.4s ease;text-decoration:none;font-size:18px;pointer-events:auto;" onmouseover="this.style.background='#E4405F';this.style.color='#fff';this.style.transform='translateY(-5px) scale(1.1)';this.style.boxShadow='0 10px 30px rgba(228,64,95,0.2)'" onmouseout="this.style.background='rgba(255,255,255,0.02)';this.style.color='#94a3b8';this.style.transform='translateY(0) scale(1)';this.style.boxShadow='none'">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" style="width:45px;height:45px;border-radius:50%;background:rgba(255,255,255,0.02);border:1px solid rgba(255,255,255,0.03);display:flex;align-items:center;justify-content:center;color:#94a3b8;transition:all 0.4s ease;text-decoration:none;font-size:18px;pointer-events:auto;" onmouseover="this.style.background='#FF0000';this.style.color='#fff';this.style.transform='translateY(-5px) scale(1.1)';this.style.boxShadow='0 10px 30px rgba(255,0,0,0.2)'" onmouseout="this.style.background='rgba(255,255,255,0.02)';this.style.color='#94a3b8';this.style.transform='translateY(0) scale(1)';this.style.boxShadow='none'">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sağ: İletişim Formu -->
            <div data-aos="fade-left">
                <div class="glass" style="padding:45px;border-color:rgba(255,107,107,0.05);position:relative;z-index:2;">
                    <h2 style="font-size:24px;font-weight:700;margin-bottom:8px;color:#fff;">Mesaj Gönderin</h2>
                    <p style="color:#94a3b8;font-size:14px;margin-bottom:25px;">Size en kısa sürede dönüş yapalım.</p>

                    @if(session('success'))
                        <div style="background:rgba(107,203,119,0.15);border:1px solid rgba(107,203,119,0.3);border-radius:12px;padding:18px 22px;margin-bottom:25px;color:#6bcb77;display:flex;align-items:center;gap:12px;animation:slideDown 0.5s ease;">
                            <i class="fas fa-check-circle" style="font-size:22px;"></i>
                            <div>
                                <strong style="display:block;font-size:15px;">Mesajınız Gönderildi!</strong>
                                <span style="font-size:13px;color:#94a3b8;">{{ session('success') }}</span>
                            </div>
                        </div>
                    @endif

                    @if($errors->any())
                        <div style="background:rgba(255,107,107,0.1);border:1px solid rgba(255,107,107,0.2);border-radius:12px;padding:15px 20px;margin-bottom:20px;color:#ff6b6b;">
                            <i class="fas fa-exclamation-circle"></i> Lütfen tüm alanları doldurun.
                        </div>
                    @endif

                    <form action="{{ route('contact.send') }}" method="POST" style="position:relative;z-index:3;">
                        @csrf
                        <div style="display:grid;grid-template-columns:1fr 1fr;gap:15px;">
                            <div>
                                <label style="color:#94a3b8;font-size:13px;display:block;margin-bottom:5px;">Adınız Soyadınız</label>
                                <input type="text" name="name" value="{{ old('name') }}" required style="width:100%;padding:12px 16px;background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.08);border-radius:10px;color:#fff;font-size:14px;transition:all 0.3s ease;outline:none;pointer-events:auto;" onfocus="this.style.borderColor='#ff6b6b';this.style.boxShadow='0 0 20px rgba(255,107,107,0.1)'" onblur="this.style.borderColor='rgba(255,255,255,0.08)';this.style.boxShadow='none'">
                            </div>
                            <div>
                                <label style="color:#94a3b8;font-size:13px;display:block;margin-bottom:5px;">E-posta Adresiniz</label>
                                <input type="email" name="email" value="{{ old('email') }}" required style="width:100%;padding:12px 16px;background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.08);border-radius:10px;color:#fff;font-size:14px;transition:all 0.3s ease;outline:none;pointer-events:auto;" onfocus="this.style.borderColor='#ff6b6b';this.style.boxShadow='0 0 20px rgba(255,107,107,0.1)'" onblur="this.style.borderColor='rgba(255,255,255,0.08)';this.style.boxShadow='none'">
                            </div>
                        </div>
                        <div style="margin-top:15px;">
                            <label style="color:#94a3b8;font-size:13px;display:block;margin-bottom:5px;">Konu</label>
                            <input type="text" name="subject" value="{{ old('subject') }}" required style="width:100%;padding:12px 16px;background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.08);border-radius:10px;color:#fff;font-size:14px;transition:all 0.3s ease;outline:none;pointer-events:auto;" onfocus="this.style.borderColor='#ff6b6b';this.style.boxShadow='0 0 20px rgba(255,107,107,0.1)'" onblur="this.style.borderColor='rgba(255,255,255,0.08)';this.style.boxShadow='none'">
                        </div>
                        <div style="margin-top:15px;">
                            <label style="color:#94a3b8;font-size:13px;display:block;margin-bottom:5px;">Mesajınız</label>
                            <textarea name="message" required rows="5" style="width:100%;padding:12px 16px;background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.08);border-radius:10px;color:#fff;font-size:14px;transition:all 0.3s ease;outline:none;resize:vertical;font-family:inherit;pointer-events:auto;" onfocus="this.style.borderColor='#ff6b6b';this.style.boxShadow='0 0 20px rgba(255,107,107,0.1)'" onblur="this.style.borderColor='rgba(255,255,255,0.08)';this.style.boxShadow='none'">{{ old('message') }}</textarea>
                        </div>
                        <button type="submit" style="margin-top:20px;width:100%;padding:14px;background:linear-gradient(135deg,#ff6b6b,#ee5a24);color:#fff;border:none;border-radius:50px;font-size:16px;font-weight:600;cursor:pointer;transition:all 0.4s ease;display:inline-flex;align-items:center;justify-content:center;gap:10px;pointer-events:auto;position:relative;z-index:3;" onmouseover="this.style.transform='translateY(-3px) scale(1.02)';this.style.boxShadow='0 15px 40px rgba(255,107,107,0.3)'" onmouseout="this.style.transform='translateY(0) scale(1)';this.style.boxShadow='none'">
                            <i class="fas fa-paper-plane"></i> Mesaj Gönder
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== HARİTA ===== -->
<section class="section-padding" style="padding:0;background:rgba(10,14,26,0.2);border-top:1px solid rgba(255,255,255,0.02);border-bottom:1px solid rgba(255,255,255,0.02);">
    <div class="container" style="max-width:100%;padding:0;">
        <div style="height:400px;width:100%;background:linear-gradient(135deg,#1a1a2e,#0a0e1a);display:flex;align-items:center;justify-content:center;position:relative;overflow:hidden;">
            <div style="position:absolute;top:-50%;right:-20%;width:500px;height:500px;background:radial-gradient(circle,rgba(255,107,107,0.03),transparent 70%);border-radius:50%;animation:floatBubble 15s ease-in-out infinite;"></div>
            <div style="position:absolute;bottom:-30%;left:-10%;width:400px;height:400px;background:radial-gradient(circle,rgba(77,150,255,0.03),transparent 70%);border-radius:50%;animation:floatBubble 20s ease-in-out infinite reverse;"></div>

            <div style="text-align:center;position:relative;z-index:1;">
                <div style="font-size:80px;color:#ff6b6b;opacity:0.2;margin-bottom:15px;">
                    <i class="fas fa-map-marked-alt"></i>
                </div>
                <h3 style="font-size:28px;font-weight:700;color:#fff;margin-bottom:10px;">Bizi Ziyaret Edin</h3>
                <p style="color:#94a3b8;font-size:16px;">İstanbul, Türkiye</p>
                <div style="margin-top:20px;display:flex;gap:15px;justify-content:center;flex-wrap:wrap;">
                    <a href="https://maps.google.com" target="_blank" class="btn-primary"><i class="fas fa-directions"></i> Yol Tarifi Al</a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
@keyframes floatBubble {
    0%, 100% { transform: translate(0, 0) scale(1); }
    33% { transform: translate(30px, -30px) scale(1.2); }
    66% { transform: translate(-20px, 20px) scale(0.8); }
}
@keyframes slideDown {
    0% { opacity: 0; transform: translateY(-20px); }
    100% { opacity: 1; transform: translateY(0); }
}
</style>
@endsection
