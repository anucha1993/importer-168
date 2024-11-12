<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $articles = Article::with('category')->latest()->get();
        return view('home.index',compact('articles'));
    }

}
