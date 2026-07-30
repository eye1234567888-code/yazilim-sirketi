<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::take(6)->get();
        $projects = Project::take(6)->get();
        $blogPosts = BlogPost::take(3)->get();

        // Her projenin technologies alanını kontrol et
        foreach ($projects as $project) {
            if (is_null($project->technologies)) {
                $project->technologies = []; // Boş array yap
            }
        }

        return view('home', compact('services', 'projects', 'blogPosts'));
    }
}
