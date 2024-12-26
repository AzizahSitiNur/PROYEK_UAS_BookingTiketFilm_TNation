<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\News;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $movies = Movie::all();
        $news = News::all();

        return view('home.index', [
            'movies' => $movies,
            'news' => $news,
        ]);
    }
}
