<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Project;
use App\Models\BlogPost;
use App\Models\JobOpening;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Hizmetler (Services)
        $services = [
            [
                'name' => 'Web Geliştirme',
                'slug' => 'web-gelistirme',
                'description' => 'Modern, responsive ve ölçeklenebilir web uygulamaları geliştiriyoruz. Laravel, React, Vue.js gibi teknolojilerle çalışıyoruz.',
                'icon' => 'fas fa-code',
                'is_active' => true
            ],
            [
                'name' => 'Mobil Uygulama',
                'slug' => 'mobil-uygulama',
                'description' => 'iOS ve Android platformları için native ve cross-platform mobil uygulamalar geliştiriyoruz.',
                'icon' => 'fas fa-mobile-alt',
                'is_active' => true
            ],
            [
                'name' => 'Bulut Çözümleri',
                'slug' => 'bulut-cozumleri',
                'description' => 'AWS, Microsoft Azure ve Google Cloud platformlarında ölçeklenebilir bulut çözümleri sunuyoruz.',
                'icon' => 'fas fa-cloud',
                'is_active' => true
            ],
            [
                'name' => 'Yapay Zeka',
                'slug' => 'yapay-zeka',
                'description' => 'Makine öğrenmesi, derin öğrenme ve doğal dil işleme alanlarında yapay zeka çözümleri.',
                'icon' => 'fas fa-robot',
                'is_active' => true
            ],
            [
                'name' => 'Veri Analizi',
                'slug' => 'veri-analizi',
                'description' => 'Büyük veri analizi, veri görselleştirme ve iş zekası çözümleri ile verilerinizi anlamlandırın.',
                'icon' => 'fas fa-chart-line',
                'is_active' => true
            ],
            [
                'name' => 'Siber Güvenlik',
                'slug' => 'siber-guvenlik',
                'description' => 'Güvenlik testleri, sızma testleri ve güvenlik danışmanlığı hizmetleri.',
                'icon' => 'fas fa-shield-alt',
                'is_active' => true
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }

        // Projeler (Projects)
        $projects = [
            [
                'name' => 'E-Ticaret Platformu',
                'slug' => 'e-ticaret-platformu',
                'description' => 'Tam donanımlı, ölçeklenebilir e-ticaret çözümü. 50.000+ ürün kapasiteli.',
                'image' => 'project-1.jpg',
                'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'Redis', 'Docker'],
                'client' => 'ABC Şirketi',
                'category' => 'Web',
                'project_url' => 'https://example.com',
                'is_completed' => true
            ],
            [
                'name' => 'Mobil Bankacılık Uygulaması',
                'slug' => 'mobil-bankacilik',
                'description' => 'Yüksek güvenlikli, kullanıcı dostu mobil bankacılık uygulaması.',
                'image' => 'project-2.jpg',
                'technologies' => ['Flutter', 'Node.js', 'MongoDB', 'Firebase'],
                'client' => 'XYZ Bank',
                'category' => 'Mobil',
                'project_url' => 'https://example.com',
                'is_completed' => true
            ],
            [
                'name' => 'Yapay Zeka Destekli CRM',
                'slug' => 'ai-crm',
                'description' => 'Yapay zeka ile müşteri davranışlarını analiz eden akıllı CRM sistemi.',
                'image' => 'project-3.jpg',
                'technologies' => ['Python', 'React', 'PostgreSQL', 'TensorFlow', 'Django'],
                'client' => 'DEF Şirketi',
                'category' => 'Yapay Zeka',
                'project_url' => 'https://example.com',
                'is_completed' => true
            ],
            [
                'name' => 'Akıllı Lojistik Sistemi',
                'slug' => 'akilli-lojistik',
                'description' => 'IoT ve yapay zeka ile optimize edilmiş lojistik yönetim sistemi.',
                'image' => 'project-4.jpg',
                'technologies' => ['IoT', 'Node.js', 'React', 'MongoDB', 'MQTT'],
                'client' => 'GHI Lojistik',
                'category' => 'IoT',
                'project_url' => 'https://example.com',
                'is_completed' => true
            ],
            [
                'name' => 'Sağlık Yönetim Sistemi',
                'slug' => 'saglik-yonetim',
                'description' => 'Hastane ve klinikler için kapsamlı sağlık yönetim platformu.',
                'image' => 'project-5.jpg',
                'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'WebRTC'],
                'client' => 'JKL Hastanesi',
                'category' => 'Web',
                'project_url' => 'https://example.com',
                'is_completed' => false
            ],
            [
                'name' => 'Eğitim Platformu',
                'slug' => 'egitim-platformu',
                'description' => 'Online kurslar, canlı dersler ve interaktif içerikler sunan eğitim platformu.',
                'image' => 'project-6.jpg',
                'technologies' => ['React', 'Node.js', 'MongoDB', 'AWS', 'WebRTC'],
                'client' => 'MNO Eğitim',
                'category' => 'Web',
                'project_url' => 'https://example.com',
                'is_completed' => true
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }

        // Blog Yazıları (Blog Posts)
        $blogPosts = [
            [
                'title' => 'Laravel 12 ile Modern Web Geliştirme',
                'slug' => 'laravel-12-modern-web-gelistirme',
                'content' => 'Laravel 12, web geliştirme dünyasında devrim yaratan yeni özelliklerle geliyor. Bu yazıda, Laravel 12\'nin sunduğu yenilikleri ve modern web geliştirme tekniklerini detaylıca inceliyoruz. Özellikle performans iyileştirmeleri, yeni kuyruk sistemi ve gelişmiş veritabanı sorgulama özellikleri dikkat çekiyor.',
                'excerpt' => 'Laravel 12 ile web geliştirmenin geleceğine bir bakış. Yeni özellikler, performans iyileştirmeleri ve modern teknikler.',
                'image' => 'blog-1.jpg',
                'author' => 'Ahmet Yılmaz',
                'category' => 'Web Geliştirme',
                'is_published' => true,
                'published_at' => now()
            ],
            [
                'title' => 'Yapay Zeka ve Geleceğin Teknolojileri',
                'slug' => 'yapay-zeka-gelecek-teknolojiler',
                'content' => 'Yapay zeka teknolojileri, iş dünyasında devrim yaratmaya devam ediyor. Bu yazıda, yapay zekanın iş süreçlerine etkilerini, otomasyonun geleceğini ve yapay zeka ile işinizi nasıl dönüştürebileceğinizi anlatıyoruz.',
                'excerpt' => 'Yapay zeka ile iş süreçlerinizi nasıl dönüştürebilirsiniz? Geleceğin teknolojileri ve iş dünyasına etkileri.',
                'image' => 'blog-2.jpg',
                'author' => 'Ayşe Kaya',
                'category' => 'Yapay Zeka',
                'is_published' => true,
                'published_at' => now()
            ],
            [
                'title' => 'Siber Güvenlikte En İyi Uygulamalar',
                'slug' => 'siber-guvenlik-en-iyi-uygulamalar',
                'content' => '2024 yılında siber güvenlik tehditleri her zamankinden daha karmaşık hale geldi. Bu makalede, şirketlerin alması gereken güvenlik önlemlerini, en iyi uygulamaları ve güncel tehditlere karşı korunma yöntemlerini inceliyoruz.',
                'excerpt' => 'Siber güvenlik tehditlerine karşı korunma yöntemleri. En iyi uygulamalar ve güncel güvenlik stratejileri.',
                'image' => 'blog-3.jpg',
                'author' => 'Mehmet Demir',
                'category' => 'Siber Güvenlik',
                'is_published' => true,
                'published_at' => now()
            ],
            [
                'title' => 'Bulut Bilişimin Geleceği',
                'slug' => 'bulut-bilisimin-gelecegi',
                'content' => 'Bulut bilişim, işletmelerin dijital dönüşümünde kritik bir rol oynuyor. Bu yazıda, bulut teknolojilerinin geleceğini, hibrit bulut çözümlerini ve edge computing\'in yükselişini ele alıyoruz.',
                'excerpt' => 'Bulut bilişimde yeni trendler, hibrit çözümler ve geleceğin bulut teknolojileri.',
                'image' => 'blog-4.jpg',
                'author' => 'Zeynep Demir',
                'category' => 'Bulut Bilişim',
                'is_published' => true,
                'published_at' => now()->subDays(5)
            ],
        ];

        foreach ($blogPosts as $post) {
            BlogPost::create($post);
        }

        // İş İlanları (Job Openings)
        $jobs = [
            [
                'title' => 'Senior Laravel Developer',
                'slug' => 'senior-laravel-developer',
                'description' => 'Deneyimli Laravel geliştiricisi aranıyor. Büyük ölçekli projelerde çalışacak, takım liderliği yapacak kıdemli bir geliştiriciye ihtiyacımız var.',
                'requirements' => "• 5+ yıl Laravel/PHP deneyimi\n• Vue.js veya React bilgisi\n• MySQL/PostgreSQL veritabanı deneyimi\n• RESTful API ve GraphQL geliştirme\n• Docker ve DevOps bilgisi\n• Takım yönetimi deneyimi",
                'location' => 'İstanbul (Hybrid)',
                'department' => 'Yazılım Geliştirme',
                'is_active' => true,
                'deadline' => now()->addMonth()
            ],
            [
                'title' => 'UI/UX Tasarımcı',
                'slug' => 'ui-ux-tasarimci',
                'description' => 'Yaratıcı, kullanıcı odaklı ve yenilikçi UI/UX tasarımcısı aranıyor. Web ve mobil uygulamalar için kullanıcı deneyimi tasarımları yapacak.',
                'requirements' => "• 3+ yıl UI/UX tasarım deneyimi\n• Figma, Adobe XD, Sketch bilgisi\n• Kullanıcı araştırması ve test deneyimi\n• Prototipleme ve wireframe yeteneği\n• Portfolio sunumu zorunlu",
                'location' => 'Ankara',
                'department' => 'Tasarım',
                'is_active' => true,
                'deadline' => now()->addDays(20)
            ],
            [
                'title' => 'DevOps Mühendisi',
                'slug' => 'devops-muhendisi',
                'description' => 'Bulut altyapıları, CI/CD pipeline\'ları ve otomasyon konularında uzman DevOps mühendisi aranıyor.',
                'requirements' => "• 4+ yıl DevOps deneyimi\n• AWS, Azure veya GCP deneyimi\n• Kubernetes ve Docker bilgisi\n• CI/CD araçları (Jenkins, GitLab CI)\n• Linux sistem yönetimi\n• Infrastructure as Code (Terraform, Ansible)",
                'location' => 'Uzaktan (Remote)',
                'department' => 'Operasyon',
                'is_active' => true,
                'deadline' => now()->addDays(15)
            ],
            [
                'title' => 'Veri Bilimcisi',
                'slug' => 'veri-bilimcisi',
                'description' => 'Büyük veri analizi, makine öğrenmesi ve yapay zeka projelerinde çalışacak veri bilimcisi aranıyor.',
                'requirements' => "• 3+ yıl veri bilimi deneyimi\n• Python, R, SQL bilgisi\n• Machine Learning algoritmaları deneyimi\n• TensorFlow, PyTorch bilgisi\n• Veri görselleştirme yeteneği\n• İleri düzey istatistik bilgisi",
                'location' => 'İstanbul',
                'department' => 'Yapay Zeka',
                'is_active' => true,
                'deadline' => now()->addDays(25)
            ],
        ];

        foreach ($jobs as $job) {
            JobOpening::create($job);
        }

        $this->command->info('Veritabanı başarıyla dolduruldu! 🎉');
        $this->command->info('Hizmetler: 6 adet');
        $this->command->info('Projeler: 6 adet');
        $this->command->info('Blog Yazıları: 4 adet');
        $this->command->info('İş İlanları: 4 adet');
    }
}
