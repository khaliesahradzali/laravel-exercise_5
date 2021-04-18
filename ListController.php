<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function about(){
        return view('about');
    }

    public function list(){
        $book1=[
            'title' => 'Walls',
            'isbn' => '4468-2331',
            'category' => 'Action',
            'page' => 226
        ];

        $book2=[
            'title' => 'Thumbelina',
            'isbn' => '8349-6492',
            'category' => 'Fantasy',
            'page' => 143
        ];

        $book3=[
            'title' => 'The Asylum',
            'isbn' => '7002-6727',
            'category' => 'Thriller',
            'page' => 122
        ];

        $book4=[
            'title' => 'Pyramid',
            'isbn' => '5408-1256',
            'category' => 'History',
            'page' => 302
        ];

        return view('list')->with('book1',$book1)->with('book2',$book2)->with('book3',$book3)->with('book4',$book4);
    }
}
