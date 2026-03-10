@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<h2>Bienvenue sur la page d’accueil</h2>
<p>Contenu principal de la page d'accueil.</p>

<ul>
    @foreach ($articles as $article)
        <li>
            <x-article :title="$article['title']" :description="$article['description']" />
        </li>
    @endforeach
</ul>
@endsection