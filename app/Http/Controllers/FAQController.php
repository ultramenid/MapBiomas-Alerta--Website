<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index(){
        $title = 'FAQ Page - Alerta';
        $nav = 'faq';
        return view('backends.pagefaq', compact('title', 'nav'));
    }

    public function add(){
        $title = 'Add FAQ - Alerta';
        $nav = 'faq';
        return view('backends.addfaq', compact('title', 'nav'));
    }

    public function edit($id){
        $id = $id;
        $title = 'Edit FAQ - Alerta';
        $nav = 'faq';
        return view('backends.editfaq', compact('title', 'nav', 'id'));
    }
}
