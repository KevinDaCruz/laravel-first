<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Routing\Controller;

class ArticleController extends Controller
{
    public function create()
    {
        if (Article::count() === 0) {
            Article::create([
                'title' => 'L’IA soigne mieux',
                'description' => 'L’intelligence artificielle aide les médecins à diagnostiquer plus vite.'
            ]);

            Article::create([
                'title' => 'Villes vertes',
                'description' => 'Les métropoles deviennent plus écologiques et durables.'
            ]);

            Article::create([
                'title' => 'Télétravail',
                'description' => 'Plus de liberté, mais aussi plus de solitude.'
            ]);

            return '3 articles ont été ajoutés.';
        }

        return 'Les articles existent déjà.';
    }

    public function update($id)
    {
        $article = Article::find($id);

        if (!$article) {
            abort(404);
        }

        $article->update([
            'title' => 'Article mis à jour',
            'description' => 'Ce contenu a été modifié de manière statique.'
        ]);

        return 'Article modifié.';
    }

    public function delete($id)
    {
        $article = Article::find($id);

        if (!$article) {
            abort(404);
        }

        $article->delete();

        return 'Article supprimé.';
    }

    public function show($id)
    {
        $article = Article::find($id);

        if (!$article) {
            abort(404);
        }

        return view('pages.article-details', ['article' => $article]);
    }
}
