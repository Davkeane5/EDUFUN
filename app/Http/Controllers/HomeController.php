<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class HomeController extends Controller
{
    public function index()
    {
        $categories = [
            'Data Science',
            'Software Engineering'
        ];
        
        $articles = Article::latest()->take(3)->get();
        return view('home', compact('articles'));
        
        
    }
    
}
