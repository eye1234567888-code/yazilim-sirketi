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

        // Burada email gönderme işlemleri yapılabilir
        // Mail::to('info@sirket.com')->send(new ContactMail($request->all()));

        // Başarılı mesajı ile geri yönlendir (veritabanına kayıt YOK)
        return redirect()->back()->with('success', 'Mesajınız başarıyla gönderildi! En kısa sürede size dönüş yapacağız.');
    }
}
