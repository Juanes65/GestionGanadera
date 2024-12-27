@extends('layouts.PlantillaSesiones')

@section('title', 'Login')

@section('contenido')
    <div class="flex min-h-screen items-center justify-center p-4">
        <div class="bg-slate-900 rounded-xl shadow-lg overflow-hidden w-full max-w-4xl flex flex-col md:flex-row" id="tarjeta">
            <div class="w-full md:w-1/2 p-8">
                <a href="#" class="mb-8 text-gray-400 hover:text-white transition-colors inline-block"></a>
                <h2 class="text-2xl md:text-3xl font-bold text-white mb-6">Iniciar Sesión</h2>
                <p class="text-gray-400 mb-8 text-sm md:text-base"></p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-6">
                        <label for="email" class="block text-sm font-medium text-gray-400 mb-2">Correo
                            Electronico</label>
                        <input type="text" id="email" name="email" required value="{{ old('email') }}"
                            class="w-full bg-slate-800 border border-gray-700 text-white rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') is-invalid @enderror"
                            placeholder="Correo Electronico">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block text-sm font-medium text-gray-400 mb-2">Password</label>
                        <input type="password" id="password" name="password" required value="{{ old('password') }}"
                            class="w-full bg-slate-800 border border-gray-700 text-white rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('password') is-invalid @enderror"
                            placeholder="Contraseña">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button type="submit"
                        class="w-full bg-purple-600 hover:bg-purple-700 text-white py-2 px-4 rounded-md transition-colors">
                        {{ __('Ingresar') }}
                    </button>
                </form>
            </div>
            <div class="w-full md:w-1/2 relative overflow-hidden min-h-[200px] md:min-h-[400px]">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-600 via-purple-600 to-pink-500 opacity-25"></div>
                <div>
                    <img src="img/login.png" alt="">
                </div>
            </div>
        </div>
    </div>

@endsection
