<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $name = 'Kévin';
        $articles = Article::all();

        return view('welcome', ['name' => $name, 'articles' => $articles]);
    }
}
