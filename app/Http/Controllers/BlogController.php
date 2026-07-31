<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Blog Listesi
    public function index()
    {
        return view('blog');
    }

    // Blog Detay
    public function show($slug)
    {
        $blogs = [
            'erp-uygulama-sureci' => [
                'title' => 'Başarılı Bir ERP Uygulama Süreci Nasıl İlerler?',
                'date' => '02 Temmuz, 2025',
                'author' => 'Ahmet Yılmaz',
                'category' => 'ERP',
                'read_time' => '5 dk',
                'color' => '#ff6b6b',
                'icon' => 'fa-cubes',
                'content' => '
                    <h2>ERP Uygulama Sürecinde Başarı İçin 6 Adım</h2>

                    <p>ERP sistemlerinin başarılı bir şekilde uygulanması için izlenmesi gereken adımlar ve stratejiler.</p>

                    <p>Kurumsal kaynak planlama (ERP) sistemleri, işletmelerin tüm operasyonlarını tek bir platformda yönetmelerini sağlayan güçlü araçlardır. Ancak, bir ERP sisteminin başarılı olması için doğru planlama ve uygulama süreci kritik öneme sahiptir.</p>

                    <h3>1. İhtiyaç Analizi</h3>
                    <p>ERP projesinin ilk adımı, işletmenin mevcut süreçlerini ve ihtiyaçlarını detaylı bir şekilde analiz etmektir. Hangi modüllerin gerekli olduğu, hangi süreçlerin iyileştirilmesi gerektiği bu aşamada belirlenir.</p>

                    <h3>2. Doğru ERP Seçimi</h3>
                    <p>Piyasada birçok ERP çözümü bulunmaktadır. İşletmenizin büyüklüğüne, sektörüne ve özel ihtiyaçlarına uygun olanı seçmek başarının anahtarıdır.</p>

                    <h3>3. Proje Ekibi Oluşturma</h3>
                    <p>ERP uygulama sürecinde, IT ekibi, iş birimi temsilcileri ve proje yöneticilerinden oluşan güçlü bir ekip kurulmalıdır.</p>

                    <h3>4. Veri Göçü ve Temizliği</h3>
                    <p>Eski sistemlerden yeni ERP sistemine veri aktarımı yapılırken veri temizliği ve doğruluğu sağlanmalıdır.</p>

                    <h3>5. Eğitim ve Değişim Yönetimi</h3>
                    <p>Çalışanların yeni sisteme adaptasyonu için kapsamlı eğitim programları düzenlenmeli ve değişim yönetimi stratejileri uygulanmalıdır.</p>

                    <h3>6. Test ve Devreye Alma</h3>
                    <p>Sistem test edilmeli, sorunlar giderilmeli ve kontrollü bir şekilde devreye alınmalıdır.</p>
                '
            ],
            'efatura-earsiv' => [
                'title' => 'İşletmenizi Geleceğe Taşıyın: e-Fatura ve e-Arşiv Sistemlerinin',
                'date' => '27 Haziran, 2025',
                'author' => 'Mehmet Demir',
                'category' => 'Dijital Dönüşüm',
                'read_time' => '7 dk',
                'color' => '#ffd93d',
                'icon' => 'fa-file-invoice',
                'content' => '
                    <h2>e-Fatura ve e-Arşiv ile Dijital Dönüşüme Adım Atın</h2>

                    <p>e-Fatura ve e-Arşiv sistemleri ile işletmenizi dijital dönüşüme hazırlayın.</p>

                    <p>Dijital dönüşümün en önemli adımlarından biri olan e-Fatura ve e-Arşiv sistemleri, işletmelerin kağıt tabanlı süreçlerden kurtulmasını sağlar.</p>

                    <h3>e-Fatura Nedir?</h3>
                    <p>e-Fatura, kağıt fatura yerine elektronik ortamda oluşturulan ve GİB (Gelir İdaresi Başkanlığı) tarafından düzenlenen bir fatura formatıdır.</p>

                    <h3>e-Arşiv Nedir?</h3>
                    <p>e-Arşiv, e-Fatura sistemine kayıtlı olmayan mükelleflere gönderilen faturaların elektronik ortamda düzenlenmesi ve arşivlenmesidir.</p>

                    <h3>Avantajları</h3>
                    <ul>
                        <li>Kağıt maliyetlerinden tasarruf</li>
                        <li>Zaman kazanımı</li>
                        <li>Hata oranının azalması</li>
                        <li>Yasal uyumluluk</li>
                        <li>Çevre dostu iş modeli</li>
                    </ul>
                '
            ],
            'windows-12' => [
                'title' => 'Windows 12 ile Gelen Yenilikler ve İşletmelere Etkileri',
                'date' => '21 Ağustos, 2025',
                'author' => 'Can Öztürk',
                'category' => 'Teknoloji',
                'read_time' => '4 dk',
                'color' => '#4d96ff',
                'icon' => 'fa-windows',
                'content' => '
                    <h2>Windows 12: İşletmeler İçin Yeni Dönem</h2>

                    <p>Windows 12\'nin getirdiği yenilikler ve işletmelere sağlayacağı avantajlar.</p>

                    <p>Microsoft\'un yeni işletim sistemi Windows 12, birçok yenilik ve iyileştirme ile geliyor.</p>

                    <h3>Yapay Zeka Entegrasyonu</h3>
                    <p>Windows 12, Copilot ile yapay zeka destekli asistan özelliği sunuyor.</p>

                    <h3>Gelişmiş Güvenlik</h3>
                    <p>Yeni güvenlik önlemleri ve iyileştirilmiş koruma sistemleri ile daha güvenli bir deneyim.</p>

                    <h3>Performans İyileştirmeleri</h3>
                    <p>Daha hızlı başlatma, daha iyi pil yönetimi ve optimize edilmiş sistem kaynakları.</p>
                '
            ]
        ];

        $blog = $blogs[$slug] ?? null;

        if (!$blog) {
            abort(404);
        }

        return view('blog-show', compact('blog'));
    }

    // Haber Listesi
    public function news()
    {
        return view('news');
    }

    // Haber Detay
    public function newsShow($slug)
    {
        $newsItems = [
            'kuantum-hesaplama' => [
                'title' => 'Google CEO\'su Sundar Pichai: "Kuantum Hesaplama ile 10 Yıl İçinde Devrim Yaşanacak"',
                'date' => '07 Aralık, 2025',
                'category' => 'Kuantum Bilgisayar',
                'source' => 'TechCrunch',
                'color' => '#ff6b6b',
                'icon' => 'fa-microchip',
                'content' => '
                    <h2>Kuantum Hesaplama Devrimi Geliyor</h2>

                    <p>Google CEO\'su Sundar Pichai, kuantum hesaplama teknolojisinin önümüzdeki 10 yıl içinde bilgisayar dünyasında devrim yaratacağını açıkladı.</p>

                    <p>Pichai, kuantum bilgisayarların mevcut süper bilgisayarlardan milyonlarca kat daha hızlı olacağını belirtti.</p>

                    <p>Google\'ın bu alandaki çalışmaları, özellikle ilaç keşfi, malzeme bilimi ve yapay zeka gibi alanlarda büyük ilerlemeler sağlayabilir.</p>

                    <h3>Kuantum Bilgisayarların Potansiyeli</h3>
                    <ul>
                        <li>Karmaşık problemleri saniyeler içinde çözme</li>
                        <li>İlaç keşfi ve moleküler simülasyon</li>
                        <li>Yapay zeka modellerinin eğitimi</li>
                        <li>Kriptografi ve güvenlik alanında devrim</li>
                    </ul>
                '
            ],
            'ulusal-yapay-zeka' => [
                'title' => 'Trump, "Genesis Mission" ile Ulusal Yapay Zeka Stratejisini Duyurdu',
                'date' => '01 Aralık, 2025',
                'category' => 'Yapay Zeka',
                'source' => 'Bloomberg',
                'color' => '#ffd93d',
                'icon' => 'fa-brain',
                'content' => '
                    <h2>ABD\'nin Yapay Zeka Hamlesi: "Genesis Mission"</h2>

                    <p>Eski ABD Başkanı Donald Trump, "Genesis Mission" adlı ulusal yapay zeka stratejisini duyurdu.</p>

                    <p>Bu strateji, ABD\'nin yapay zeka alanındaki liderliğini pekiştirmeyi ve Çin ile rekabeti artırmayı hedefliyor.</p>

                    <p>Proje kapsamında, yapay zeka araştırmalarına 500 milyar dolar yatırım yapılması planlanıyor.</p>

                    <h3>Stratejinin Hedefleri</h3>
                    <ul>
                        <li>Yapay zeka alanında küresel liderlik</li>
                        <li>Yeni nesil AI teknolojileri geliştirme</li>
                        <li>AI okuryazarlığını artırma</li>
                        <li>Etik AI kullanımı için düzenlemeler</li>
                    </ul>
                '
            ],
            'fleet-space' => [
                'title' => 'Fleet Space, Yapay Zeka ve Uydu Teknolojisiyle Madencilikte Devrim Yaratıyor',
                'date' => '28 Kasım, 2025',
                'category' => 'Uzay Teknolojisi',
                'source' => 'SpaceNews',
                'color' => '#4d96ff',
                'icon' => 'fa-satellite',
                'content' => '
                    <h2>Uzay Teknolojisi Madenciliği Değiştiriyor</h2>

                    <p>Fleet Space, yapay zeka ve uydu teknolojisini birleştirerek madencilik sektöründe devrim yaratıyor.</p>

                    <p>Şirketin geliştirdiği teknoloji, yer altı kaynaklarının tespitini çok daha hızlı ve doğru bir şekilde yapabiliyor.</p>

                    <p>Bu sistem, madencilik şirketlerinin operasyonel verimliliğini artırırken çevresel etkileri de minimize ediyor.</p>

                    <h3>Teknolojinin Faydaları</h3>
                    <ul>
                        <li>%90 daha hızlı kaynak tespiti</li>
                        <li>Çevresel etkinin azaltılması</li>
                        <li>Maliyetlerin düşürülmesi</li>
                        <li>Uzaktan keşif imkanı</li>
                    </ul>
                '
            ]
        ];

        $news = $newsItems[$slug] ?? null;

        if (!$news) {
            abort(404);
        }

        return view('news-show', compact('news'));
    }
}
