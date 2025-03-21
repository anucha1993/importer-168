<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $articles = Article::with('category')->latest()->limit(4)->get();
        return view('home.index',compact('articles'));
    }

}
