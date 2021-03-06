@extends('layouts.template')

@section('title')
    <h1 class="mb-0">{{ __('RĂ©initialiser votre mot de passe') }}</h1>
    <p>Saisissez votre adresse e-mail et nous vous enverrons un e-mail contenant les instructions pour rĂ©initialiser votre mot de passe.</p>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Adresse email') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Envoyer un mail') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
