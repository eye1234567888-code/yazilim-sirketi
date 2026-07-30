<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog');
    }

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
                'content' => '<p>ERP sistemlerinin başarılı bir şekilde uygulanması için izlenmesi gereken adımlar ve stratejiler.</p>'
            ],
            // ... diğer bloglar
        ];

        $blog = $blogs[$slug] ?? abort(404);
        return view('blog-show', compact('blog'));
    }

    public function news()
    {
        return view('news');
    }

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
                'content' => '<p>Google CEO\'su Sundar Pichai, kuantum hesaplama teknolojisinin önümüzdeki 10 yıl içinde bilgisayar dünyasında devrim yaratacağını açıkladı.</p>'
            ],
            // ... diğer haberler
        ];

        $news = $newsItems[$slug] ?? abort(404);
        return view('news-show', compact('news'));
    }
}
