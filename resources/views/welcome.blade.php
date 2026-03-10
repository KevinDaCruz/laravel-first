@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<h2>Bienvenue sur la page d’accueil</h2>
<p>Contenu principal de la page d'accueil.</p>

@for ($i = 0; $i < count($articles); $i++)
    @if ($i === count($articles) - 1)
        @break
    @endif
    <x-article :title="$articles[$i]['title']" :description="$articles[$i]['description']" />
@endfor
@endsection