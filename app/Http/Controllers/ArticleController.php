<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class ArticleController extends Controller
{
    public function show($id)
    {
        return "Article portant l’identifiant $id";
    }
}
