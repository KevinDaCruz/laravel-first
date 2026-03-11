@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<h2>Bienvenue sur la page d’accueil</h2>
<p>Contenu principal de la page d'accueil.</p>

@foreach ($articles as $article)
    <a href="{{ route('article.details', ['id' => $article->id]) }}">
        <x-article :title="$article->title" :description="$article->description" />
    </a>
@endforeach
@endsection