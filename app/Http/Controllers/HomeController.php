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
        $language = file_get_contents(public_path('json/tools.json'));
        return view('main.projects.main', ['language' => $language]);

    }
    public function TechStack(){
        // Read JSON data from the file
        $language = file_get_contents(public_path('tools/languages.json'));

        // Pass the decoded data to the view
        return view('main.projects.my_stacks', ['language' => $language]);

    }
}
