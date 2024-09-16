@extends('layouts.PlantillaSesiones')

@section('title', 'Resgistrase')

@section('header')
    @auth
        <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2" id="texto">
            Dashboard
        </a>
    @else
        <a href="{{ route('login') }}" class="px-3 py-2 text-black ring-1" id="texto">
            Iniciar Sesión
        </a>
    @endauth
@endsection

@section('contenido')
    <h2 style="align-items: center">Register</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        {{-- SECCION DEL NOMBRE --}}
        <div class="form-group">
            <label for="name" class="col-form-label">{{ __('Nombre') }}</label>
            <div>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        {{-- SECCION DEL APELLIDOS --}}
        <div class="form-group">
            <label for="lastname" class="col-form-label">{{ __('Apellido') }}</label>
            <div>
                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror"
                    name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus
                    placeholder="Apellido">

                @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        {{-- SECCION DE LA CORREO --}}
        <div class="form-group">
            <label for="email" class="col-form-label">{{ __('Email Address') }}</label>

            <div>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        {{-- SECCION DE LA CONTRASEÑA --}}
        <div class="form-group">
            <label for="password" class="col-form-label">{{ __('Contraseña') }}</label>

            <div>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password" placeholder="Contraseña">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <label for="password-confirm" class="col-form-label">{{ __('Confrima la Contraseña') }}</label>

            <div>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password" placeholder="Confirmar Contraseña">
            </div>
        </div>

        {{-- SECCION DEL CONTROL --}}
        <div class="mt-3">
            <div style="text-align: center">
                <button type="submit" class="btn btn-primary">
                    {{ __('Registrarme') }}
                </button>
            </div>
        </div>
    </form>
@endsection
