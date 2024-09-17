@extends('layouts.principal')

@section('title', 'Usuarios')

@section('contenido')
    <div class="row">
        <div class="col-sm-12 divisor mt-5">
            <div class="image-menu">
                <a href="{{ route('index.Usuario') }}">
                    <img src="img/images.png" class="imgMenu">
                </a>
                <label class="TextoPpal">Show</label>
            </div>
        </div>
        <br>
        <div class="col-sm-12 divisor mt-5">
            <div class="image-menu">
                <a href="{{ route('create.Usuario') }}">
                    <img src="img/images.png" class="imgMenu">
                </a>
                <label class="TextoPpal">Insert</label>
            </div>
        </div>
    </div>
@endsection

@section('js')
    @if (session('success'))
        <script>
            Swal.fire({
                position: "top-center",
                icon: "success",
                title: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif
@endsection
