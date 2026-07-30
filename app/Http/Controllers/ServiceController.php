<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('services');
    }

    public function crm()
    {
        return view('services.crm');
    }

    public function sektorel()
    {
        return view('services.sektorel');
    }

    public function eticaret()
    {
        return view('services.eticaret');
    }

    public function edonusum()
    {
        return view('services.edonusum');
    }

    public function erp()
    {
        return view('services.erp');
    }

    public function mobil()
    {
        return view('services.mobil');
    }
}
