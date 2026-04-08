<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $title = 'About Page - Alerta';
        $nav = 'pages';
        return view('backends.pageabout', compact('title', 'nav'));
    }
}
