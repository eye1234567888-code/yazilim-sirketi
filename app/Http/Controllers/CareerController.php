<?php

namespace App\Http\Controllers;

use App\Models\JobOpening;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        $jobs = JobOpening::where('is_active', true)->get();
        return view('career', compact('jobs'));
    }
}
