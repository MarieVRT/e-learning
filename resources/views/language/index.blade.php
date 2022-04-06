@extends('layouts.template')

@section('title')
    <h1 class="mb-0 text-center">{{ "Question sur : " . $language->name }}</h1>

@endsection


@section('content')
    @foreach($question as $q)

        @if(($q->language_id == $language->id) && $q->level == $level)
            <div class="button_question">
                <form method="get" action="{{route("language-store")}}">
                <p>
                    {{$q->question}}<br />
                    <label><input type="radio" name="question" value="{{$q->choice_1}}" />{{$q->choice_1}}</label><br />
                    <label><input type="radio" name="question" value="{{$q->choice_2}}" />{{$q->choice_2}}</label><br />
                    <label><input type="radio" name="question" value="{{$q->choice_3}}" />{{$q->choice_3}}</label><br />
                    <label><input type="radio" name="question" value="{{$q->choice_4}}" />{{$q->choice_4}}</label>
                    <input type="hidden" name="answer" value="{{$q->id}}">
                    <input type="submit" value="Valider" />
                </p>
                </form>
            </div>
        @endif
    @endforeach
@endsection
