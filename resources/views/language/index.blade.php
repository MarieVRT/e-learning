@extends('layouts.template')

@section('title')
    <h1 class="mb-0 text-center">{{ "Question sur : " . $language->name }}</h1>

@endsection


@section('content')
    <div class="button_question">


        @foreach($question as $q)

            @if(($q->language_id == $language->id) && $q->level == $level)


                <p class="questsion_level">{{ $q->question }}</p>
                    <button type="button" class="question_content">
                        <a onclick="{{\App\Http\Controllers\LanguageController::checkAnswer($q->choice_1, $q->answer)}}">{{$q->choice_1}}</a>
                    </button>
                    <button type="button" class="question_content">
                        <a onclick="checkAnswer(`{{$q->choice_2}}`, `{{$q->answer}}`)">{{$q->choice_2}} </a>
                    </button>
                    <button type="button" class="question_content">
                        <a onclick="checkAnswer(`{{$q->choice_3}}`, `{{$q->answer}}`)">{{$q->choice_3}} </a>
                    </button>
                    <button type="button" class="question_content">
                        <a onclick="checkAnswer(`{{$q->choice_4}}`, `{{$q->answer}}`)">{{$q->choice_4}} </a>
                    </button>
                <p>REPONSE : {{$q->answer}}</p>
            @endif

    @endforeach
    </div>
@endsection
