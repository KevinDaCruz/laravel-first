@extends('layouts.app')
@section('title', $article->title)
@section('content')
<h2>Détails de l'article</h2>
<x-article :title="$article->title" :description="$article->description" />
@endsection