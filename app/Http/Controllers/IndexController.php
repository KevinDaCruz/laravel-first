<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return "Bienvenue sur la page d’accueil";
    }
}
