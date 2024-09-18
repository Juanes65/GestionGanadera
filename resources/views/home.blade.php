{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.principal')

@section('title', 'Menu')

@section('contenido')

    <div class="row mt-5">
        <div class="col-sm-4 divisor">
            <div class="image-container">
                <a href="#" data-bs-toggle="modal" data-bs-target="#animals">
                    <img src="img/images.png" class="img">
                </a>
                <label class="TextoPpal">Insert Animals</label>
            </div>
        </div>

        <div class="col-sm-4 divisor">
            <div class="image-container">
                <a href="#" data-bs-toggle="modal" data-bs-target="#inventario">
                    <img src="img/images.png" class="img">
                </a>
                <label class="TextoPpal">Insert Medic</label>
            </div>
        </div>

        <div class="col-sm-4 divisor">
            <div class="image-container">
                <a href="#" data-bs-toggle="modal" data-bs-target="#users">
                    <img src="img/images.png" class="img">
                </a>
                <label class="TextoPpal">Insert User</label>
            </div>
        </div>

        <div class="col-sm-6 divisor mt-5">
            <div class="image-container">
                <a href="#">
                    <img src="img/images.png" class="img">
                </a>
                <label class="TextoPpal">Insert Procedure</label>
            </div>
        </div>

        <div class="col-sm-6 divisor mt-5">
            <div class="image-container">
                <a href="#">
                    <img src="img/images.png" class="img">
                </a>
                <label class="TextoPpal">Show Files</label>
            </div>
        </div>
    </div>

    {{-- SE INCLUYEN LOS MODALS --}}
    @include('includes.ModalPrincipal')
    @include('includes.ModalInsertar')
@endsection
