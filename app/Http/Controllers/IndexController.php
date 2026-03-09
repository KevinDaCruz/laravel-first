<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $name = 'Kévin';
        return view('welcome', ['name' => $name]);
    }
}
