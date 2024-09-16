@extends('layouts.PlantillaSesiones')

@section('title', 'Login')

@section('contenido')

    <h2 style="align-items: center">Login</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        {{-- SECCION DEL CORREO --}}
        <div class="form-group">
            <label for="email" class="col-form-label text-md-end">{{ __('Correo') }}</label>
            <div>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo Electronico">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        {{-- SECCION DE LA CONTRASEÑA --}}
        <div class="form-group">
            <label for="password" class="col-form-label text-md-end">{{ __('Contraseña') }}</label>
            <div>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password" placeholder="Contraseña">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        {{-- SECCION DEL CONTROL --}}
        <div class="mt-3">
            <div>
                <button type="submit" class="btn btn-primary">
                    {{ __('Ingresar') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Olvidé mi contraseña') }}
                    </a>
                @endif
            </div>
        </div>
    </form>
@endsection
