@extends('layouts.template')

@section('title')
    <h1 class="mb-0 text-center"> Vos résultats </h1>
@endsection


@section('content')
    <div class="content">
        <p> Votre note est de : </p>
    <br/>
    <h2> {{ $advancement }} / 5 </h2>
    <br/>
    <button type="button" class="btn btn-primary" onclick="window.location='{{ url("/") }}'">Retourner vers l'accueil </button>

    </div>
@endsection
