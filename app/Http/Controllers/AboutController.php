<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        // Şirket bilgileri ve istatistikler
        $stats = [
            'projects' => 250,
            'clients' => 120,
            'experience' => 8,
            'awards' => 15
        ];

        $team = [
            ['name' => 'Ahmet Yılmaz', 'position' => 'CEO & Kurucu', 'image' => 'team-1.jpg'],
            ['name' => 'Mehmet Demir', 'position' => 'Teknik Direktör', 'image' => 'team-2.jpg'],
            ['name' => 'Ayşe Kaya', 'position' => 'UI/UX Tasarımcı', 'image' => 'team-3.jpg'],
            ['name' => 'Can Öztürk', 'position' => 'Full Stack Developer', 'image' => 'team-4.jpg'],
        ];

        return view('about', compact('stats', 'team'));
    }
}
