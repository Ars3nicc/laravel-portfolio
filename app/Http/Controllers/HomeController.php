<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function AboutMe()
    {
        return view('welcome');
    }
    public function Projects()
    {
        $json = Storage::disk('public')->get('json/languages.json');
        $data = json_decode($json, true);
        return view('main.projects.main')->with('data', $data);
    }
    public function TechStack(){


        return view('main.projects.my_stacks');
    }
}
