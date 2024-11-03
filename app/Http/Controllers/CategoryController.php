<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class CategoryController extends Controller
{

    public function show($slug)
    {
        // Sample data - in production, this would come from your database
        $category = 'Data Science';
        
        $articles = [
            [
                'slug' => 'machine-learning',
                'title' => 'Machine Learning',
                'date' => '14 May 2024',
                'author' => 'Ria',
                'excerpt' => 'Di tengah pesatnya perkembangan teknologi kecerdasan buatan atau artificial intelligence (AI)...',
                'image' => 'machine-learning.jpg'
            ],
            [
                'slug' => 'deep-learning',
                'title' => 'Deep Learning',
                'date' => '14 May 2024',
                'author' => 'Lia',
                'excerpt' => 'Deep learning merupakan subdisiplin machine learning yang algoritmanya terinspirasi dari struktur otak...',
                'image' => 'deep-learning.jpg'
            ],
            [
                'slug' => 'nlp',
                'title' => 'Natural Language Processing',
                'date' => '15 May 2024',
                'author' => 'Nadia',
                'excerpt' => 'Natural Language Processing (NLP) merupakan salah satu cabang ilmu AI yang berfokus pada pengolahan...',
                'image' => 'nlp.jpg'
            ]
        ];
        
        return view('category.show', compact('category', 'articles'));
    }

    public function articleDetail($slug)
    {
        // Sample data - in production, this would come from your database
        $article = [
            'title' => 'Apa itu Machine Learning?',
            'subtitle' => 'Beserta Pengertian dan Cara Kerjanya',
            'date' => '14 May 2024',
            'author' => 'Bia',
            'content' => 'Teknologi machine learning (ML) adalah mesin yang dikembangkan untuk bisa belajar dengan sendirinya tanpa arahan dari penggunanya. Pembelajaran mesin dikembangkan berdasarkan disiplin ilmu lainnya seperti statistika, matematika dan data mining sehingga mesin dapat belajar dengan menganalisa data tanpa perlu di program ulang atau diperintah.

Dalam hal ini machine learning memiliki kemampuan untuk memperoleh data yang ada dengan perintah ia sendiri. ML juga dapat mempelajari data yang ada dan data yang ia peroleh sehingga bisa melakukan tugas tertentu. Tugas yang dapat dilakukan oleh ML pun sangat beragam, tergantung dari apa yang ia pelajari.',
            'image' => 'machine-learning-detail.jpg'
        ];
        
        return view('article.detail', compact('article'));
    }
}


