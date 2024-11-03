<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function index()
    {
        $writers = [
            [
                'name' => 'Raka Putra Wicaksono',
                'specialty' => 'Spesialis Interactive Multimedia',
                'image' => 'raka.png'
            ],
            [
                'name' => 'Bia Mecca Annisa',
                'specialty' => 'Spesialis Data Science',
                'image' => 'bia.png'
            ],
            [
                'name' => 'Abi Firmansyah',
                'specialty' => 'Spesialis Network Security',
                'image' => 'abi.png'
            ]
        ];
        
        return view('writers.index', compact('writers'));
    }
}

