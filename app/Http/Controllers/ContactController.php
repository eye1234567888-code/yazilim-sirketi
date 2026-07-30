<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        // Validasyon
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Sadece başarılı mesajı göster (veritabanına kayıt yok)
        return redirect()->back()->with('success', 'Mesajınız başarıyla gönderildi! En kısa sürede size dönüş yapacağız.');
    }
}
