@extends('layouts.app')
@section('title', "Article Details: $id")
@section('content')
<h2>Détails de l'article</h2>
<p>Voici les détails de l'article avec l'ID : {{ $id }}</p>
@endsection