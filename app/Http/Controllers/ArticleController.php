<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class ArticleController extends Controller
{
    public function show($id)
    {
        return view('pages.article-details', ['id' => $id]);
    }
}
