@extends('layouts.template')

@section('title')

    <h1 class="mb-0 text-center"> Les questions {{$language->name}}</h1>

@endsection

@section('content')
    <div class="button_question">
        <p class="questsion_level">Question N° </p>
    </div>
@endsection
