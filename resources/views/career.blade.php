@extends('layouts.app')

@section('title', 'Kariyer')

@section('content')
<section class="hero" style="min-height:50vh;background:linear-gradient(135deg,#0a0e1a,#1a1a2e);">
    <div class="particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>
    <div class="floating-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <div class="container">
        <div class="hero-content">
            <div class="badge"><i class="fas fa-briefcase"></i> Kariyer</div>
            <h1>Hayalinizdeki <span>İş</span></h1>
            <p>Ekibimize katılın, geleceği birlikte inşa edelim</p>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-tag"><i class="fas fa-list"></i> Açık Pozisyonlar</span>
            <h2>Birlikte <span>Çalışalım</span></h2>
            <p>Yeteneklerinizi konuşturun, kariyerinize yön verin</p>
        </div>

        <!-- Filtreler -->
        <div style="display:flex;gap:10px;flex-wrap:wrap;justify-content:center;margin-bottom:40px;" data-aos="fade-up">
            <button class="btn-primary" style="padding:8px 22px;font-size:13px;">Tümü</button>
            <button class="btn-secondary" style="padding:8px 22px;font-size:13px;border-color:rgba(255,255,255,0.05);" onmouseover="this.style.borderColor='#ff6b6b';this.style.color='#ff6b6b'" onmouseout="this.style.borderColor='rgba(255,255,255,0.05)';this.style.color='#fff'">Yazılım</button>
            <button class="btn-secondary" style="padding:8px 22px;font-size:13px;border-color:rgba(255,255,255,0.05);" onmouseover="this.style.borderColor='#ffd93d';this.style.color='#ffd93d'" onmouseout="this.style.borderColor='rgba(255,255,255,0.05)';this.style.color='#fff'">Tasarım</button>
            <button class="btn-secondary" style="padding:8px 22px;font-size:13px;border-color:rgba(255,255,255,0.05);" onmouseover="this.style.borderColor='#6bcb77';this.style.color='#6bcb77'" onmouseout="this.style.borderColor='rgba(255,255,255,0.05)';this.style.color='#fff'">Operasyon</button>
            <button class="btn-secondary" style="padding:8px 22px;font-size:13px;border-color:rgba(255,255,255,0.05);" onmouseover="this.style.borderColor='#4d96ff';this.style.color='#4d96ff'" onmouseout="this.style.borderColor='rgba(255,255,255,0.05)';this.style.color='#fff'">Yapay Zeka</button>
            <button class="btn-secondary" style="padding:8px 22px;font-size:13px;border-color:rgba(255,255,255,0.05);" onmouseover="this.style.borderColor='#ff6b6b';this.style.color='#ff6b6b'" onmouseout="this.style.borderColor='rgba(255,255,255,0.05)';this.style.color='#fff'">İstanbul</button>
            <button class="btn-secondary" style="padding:8px 22px;font-size:13px;border-color:rgba(255,255,255,0.05);" onmouseover="this.style.borderColor='#ffd93d';this.style.color='#ffd93d'" onmouseout="this.style.borderColor='rgba(255,255,255,0.05)';this.style.color='#fff'">Remote</button>
        </div>

        <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:25px;">
            @if(isset($jobs) && count($jobs) > 0)
                @foreach($jobs as $job)
                    <div class="glass tilt" data-aos="flip-up" data-aos-delay="{{ $loop->iteration * 50 }}" style="padding:30px;border-color:rgba(255,107,107,0.03);">
                        <div style="display:flex;justify-content:space-between;align-items:start;margin-bottom:12px;">
                            <h3 style="font-size:20px;">{{ $job->title }}</h3>
                            <span style="background:#6bcb77;padding:4px 14px;border-radius:50px;font-size:11px;color:#fff;white-space:nowrap;margin-left:10px;box-shadow:0 0 20px rgba(107,203,119,0.2);">✓ Aktif</span>
                        </div>
                        <div style="display:flex;gap:15px;flex-wrap:wrap;margin-bottom:12px;">
                            <span style="color:#64748b;font-size:13px;"><i class="fas fa-map-marker-alt" style="color:#ff6b6b;"></i> {{ $job->location }}</span>
                            <span style="color:#64748b;font-size:13px;"><i class="fas fa-building" style="color:#ffd93d;"></i> {{ $job->department }}</span>
                            <span style="color:#64748b;font-size:13px;"><i class="fas fa-calendar" style="color:#6bcb77;"></i> Son Başvuru: {{ $job->deadline ? $job->deadline->format('d.m.Y') : 'Belirtilmemiş' }}</span>
                        </div>
                        <p style="color:#94a3b8;font-size:14px;line-height:1.7;margin-bottom:15px;">
                            {{ Str::limit($job->description, 120) }}
                        </p>
                        <div style="display:flex;gap:6px;flex-wrap:wrap;margin-bottom:15px;">
                            @php
                                $reqs = explode("\n", $job->requirements ?? '');
                            @endphp
                            @foreach(array_slice($reqs, 0, 3) as $req)
                                @if(trim($req))
                                    <span class="tech-tag" style="border-color:rgba(107,203,119,0.1);"><i class="fas fa-check" style="color:#6bcb77;"></i> {{ Str::limit(trim($req), 30) }}</span>
                                @endif
                            @endforeach
                            @if(count($reqs) > 3)
                                <span class="tech-tag" style="border-color:rgba(255,217,61,0.1);color:#ffd93d;">+{{ count($reqs) - 3 }} daha</span>
                            @endif
                        </div>
                        <div style="display:flex;gap:10px;flex-wrap:wrap;">
                            <a href="#" class="btn-primary" style="font-size:13px;padding:8px 25px;"><i class="fas fa-paper-plane"></i> Başvur</a>
                            <a href="#" class="btn-secondary" style="font-size:13px;padding:8px 25px;border-color:rgba(255,255,255,0.05);" onmouseover="this.style.borderColor='#ff6b6b'" onmouseout="this.style.borderColor='rgba(255,255,255,0.05)'">Detay</a>
                        </div>
                    </div>
                @endforeach
            @else
                <p style="color:#94a3b8;text-align:center;grid-column:1/-1;">Aktif iş ilanı bulunmuyor.</p>
            @endif
        </div>
    </div>
</section>

<section class="section-padding bg-gradient" style="border-top:1px solid rgba(255,255,255,0.03);border-bottom:1px solid rgba(255,255,255,0.03);">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-tag"><i class="fas fa-star"></i> Neden Biz?</span>
            <h2>Çalışma <span>Kültürümüz</span></h2>
        </div>
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:25px;">
            <div class="glass tilt" data-aos="flip-left" style="text-align:center;padding:30px;border-color:rgba(255,107,107,0.05);">
                <div style="font-size:45px;color:#ff6b6b;margin-bottom:15px;animation:floatY 3s ease-in-out infinite;"><i class="fas fa-laptop-house"></i></div>
                <h3>Uzaktan Çalışma</h3>
                <p style="color:#94a3b8;font-size:14px;">Esnek çalışma saatleri ve full remote imkanı</p>
            </div>
            <div class="glass tilt" data-aos="flip-left" data-aos-delay="100" style="text-align:center;padding:30px;border-color:rgba(255,217,61,0.05);">
                <div style="font-size:45px;color:#ffd93d;margin-bottom:15px;animation:floatY 3.5s ease-in-out infinite 0.5s;"><i class="fas fa-graduation-cap"></i></div>
                <h3>Sürekli Öğrenme</h3>
                <p style="color:#94a3b8;font-size:14px;">Kurs, eğitim ve konferans desteği</p>
            </div>
            <div class="glass tilt" data-aos="flip-left" data-aos-delay="200" style="text-align:center;padding:30px;border-color:rgba(107,203,119,0.05);">
                <div style="font-size:45px;color:#6bcb77;margin-bottom:15px;animation:floatY 4s ease-in-out infinite 1s;"><i class="fas fa-users"></i></div>
                <h3>Takım Ruhu</h3>
                <p style="color:#94a3b8;font-size:14px;">Güçlü ekip kültürü ve sosyal etkinlikler</p>
            </div>
            <div class="glass tilt" data-aos="flip-left" data-aos-delay="300" style="text-align:center;padding:30px;border-color:rgba(77,150,255,0.05);">
                <div style="font-size:45px;color:#4d96ff;margin-bottom:15px;animation:floatY 3.2s ease-in-out infinite 1.5s;"><i class="fas fa-chart-line"></i></div>
                <h3>Kariyer Gelişimi</h3>
                <p style="color:#94a3b8;font-size:14px;">Net kariyer yolu ve terfi fırsatları</p>
            </div>
        </div>
    </div>
</section>

<section class="section-padding" style="background:linear-gradient(135deg,#0a0e1a,#1a1a2e);">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-tag"><i class="fas fa-question-circle"></i> SSS</span>
            <h2>Sık Sorulan <span>Sorular</span></h2>
        </div>
        <div style="max-width:800px;margin:0 auto;">
            @php
                $faqs = [
                    ['q' => 'Başvuru süreci nasıl işliyor?', 'a' => 'Başvurunuzu aldıktan sonra önce CV\'nizi inceliyor, ardından teknik mülakat ve kültür uyumu görüşmesi yapıyoruz. Tüm süreç ortalama 1-2 hafta sürüyor.'],
                    ['q' => 'Uzaktan çalışma imkanı var mı?', 'a' => 'Evet, pozisyona bağlı olarak tam uzaktan veya hibrit çalışma imkanımız var.'],
                    ['q' => 'Staj imkanı sunuyor musunuz?', 'a' => 'Evet, yazılım ve tasarım alanlarında staj programlarımız var. Başvuruları her yıl Mart ve Eylül aylarında alıyoruz.'],
                    ['q' => 'Hangi teknolojileri kullanıyorsunuz?', 'a' => 'Laravel, React, Vue.js, Flutter, Python, Node.js, AWS, Docker, Kubernetes ve daha birçok modern teknoloji kullanıyoruz.'],
                ];
            @endphp
            @foreach($faqs as $index => $faq)
                <div class="glass" data-aos="fade-up" data-aos-delay="{{ $index*50 }}" style="margin-bottom:12px;cursor:pointer;padding:20px 25px;border-color:rgba(255,107,107,0.03);" onclick="const answer=this.querySelector('.faq-answer'); answer.style.display = answer.style.display === 'block' ? 'none' : 'block';">
                    <div style="display:flex;justify-content:space-between;align-items:center;">
                        <h4 style="font-size:15px;font-weight:600;"><i class="fas fa-question-circle" style="color:#ff6b6b;margin-right:10px;"></i>{{ $faq['q'] }}</h4>
                        <i class="fas fa-chevron-down" style="color:#ff6b6b;transition:0.4s;font-size:13px;"></i>
                    </div>
                    <div class="faq-answer" style="display:none;margin-top:12px;padding-top:12px;border-top:1px solid rgba(255,255,255,0.03);">
                        <p style="color:#94a3b8;font-size:14px;line-height:1.8;"><i class="fas fa-arrow-right" style="color:#ff6b6b;margin-right:8px;"></i>{{ $faq['a'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="section-padding bg-primary">
    <div class="container">
        <div class="cta-content" data-aos="fade-up">
            <h2>Hemen <span style="color:#fff;">Başvur!</span></h2>
            <p>Hayalinizdeki iş fırsatını kaçırmayın, bugün başvurun.</p>
            <div style="display:flex;gap:15px;justify-content:center;flex-wrap:wrap;">
                <a href="mailto:info@sirket.com" class="btn-white"><i class="fas fa-envelope"></i> Başvuru Gönder</a>
                <a href="#" class="btn-secondary" style="border-color:rgba(255,255,255,0.15);"><i class="fas fa-file-alt"></i> CV Gönder</a>
            </div>
        </div>
    </div>
</section>
@endsection
