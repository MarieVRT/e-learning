@extends('layouts.template')

@section('title')
    <h1 class="mb-0 text-center">{{ __('Apprenez un langage') }}</h1>
@endsection

@section('content')
    <div class="button_question">
        <p class="questsion_level">Niveau 1 : </p>
    @foreach($language as $l)
            @if($l->level == "1")
                <button type="button" class="question_content">
                    <a href="/language/{{$l->id}}"> {{$l->name}} </a>
                </button>
            @endif
        @endforeach
    </div>
    <div class="button_question">
            <p class="questsion_level">Niveau 2 : </p>
        @foreach($language as $l)
                @if($l->level == "2")

                    <button type="button" class="question_content">
                        <a href="/language/{{$l->id}}"> {{$l->name}} </a>
                    </button>
                @endif
        @endforeach
    </div>
    <div class="button_question">
        <p class="questsion_level">Niveau 3 : </p>

    @foreach($language as $l)

                @if($l->level == "3")
                    <button type="button" class="question_content">
                        <a href="/language/{{$l->id}}"> {{$l->name}} </a>
                    </button>
                @endif
            @endforeach

    </div>
@endsection
