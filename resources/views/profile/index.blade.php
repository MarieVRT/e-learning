@extends('layouts.template')

@section('title')

    <h1 class="mb-0 text-center"> Votre profil </h1>

@endsection

@section('content')
    @foreach($user as $u)
        @if($u->firstname === (Auth::user()->firstname))
        <div id="content-page">
            <div class="col-lg-12 profile-center">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="profile-profile" role="tabpanel">
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                                <ul class="nav nav-pills d-flex align-items-end float-right profile-feed-items p-0 m-0">
                                    <li>
                                        <a class="nav-link active text-white" data-toggle="pill" href="#profile">Profil</a>
                                    </li>
                                    <li>
                                        <button class="nav-link text-white" data-toggle="pill" onclick="window.location='{{ url("profile/stats/$u->id") }}'">Mes statistiques</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="iq-card-body">
                                <div class="user-detail text-center">
                                    <div class="user-profile">
                                        @if($u->gender === "female")
                                            <img src="img/woman.png" alt="profile-img" class="avatar-130 img-fluid">
                                        @elseif($u->gender === "male")
                                            <img src="img/men.png" alt="profile-img" class="avatar-130 img-fluid">
                                        @else
                                            <img src="img/other.png" alt="profile-img" class="avatar-130 img-fluid">
                                        @endif
                                    </div>
                                    <div class="profile-detail mt-3">
                                        <h3 class="d-inline-block">{{ $u->firstname }} {{ $u->lastname }}</h3>
                                        <p class="d-inline-block pl-3"> - Apprenti </p>
                                        <p class="mb-1 font-size-16 font-weight-bold text-center"> Apprentissage(s) :</p>
                                        @foreach($advancement as $a)
                                            @foreach($language as $l)
                                                @if($a->user_id === $u->id)
                                                    @if($a->language_id === $l->id)
                                                        <p> {{ $l->name }} </p>
                                                    @endif
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    @endforeach
@endsection
