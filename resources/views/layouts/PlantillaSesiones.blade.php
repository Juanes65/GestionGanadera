<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/LoginAndRegister.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body id="body">
    <header id="header">
        @if (Route::has('login'))
            <nav class="container">
                <div class="row">
                    <div class="col-6 d-flex align-items-center">
                        <a href="#" id="foco"><span class="material-symbols-outlined">highlight</span></a>
                    </div>
                    <div class="col-6 d-flex align-items-center justify-content-end">
                        @yield('header')
                    </div>
                </div>
            </nav>
        @endif
    </header>


    <div id="content">
        <div class="login-container">
            @yield('contenido')
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                let swtch = 0;
                $('#foco').on("click", function() {
                    // Cambia el valor de swtch entre 0 y 1
                    swtch = swtch === 0 ? 1 : 0;
                    // Actualiza el ícono dentro del enlace #foco
                    if (swtch == 0) {
                        $('#foco').html('<span class="material-symbols-outlined">highlight</span>');
                        $('.login-container').css('box-shadow', '0 0 10px rgba(0, 0, 0, 0.1)');
                        $('#content').css('background-color', '#f4f4f4');
                        $('#header').css('background-color','#f4f4f4');
                        $('body').css('background-color', '#f4f4f4');
                        $('#texto').css('color','black');
                    } else {
                        $('#texto').css('color','white');
                        $('#foco').html('<span class="material-symbols-outlined" style="color: white">flashlight_on</span>');
                        $('.login-container').css('box-shadow', '0 0 10px rgba(255, 255, 255, 0.788)');
                        $('#content').css('background-color', '#1c2833');
                        $('#header').css('background-color','#1c2833');
                        $('body').css('background-color', '#1c2833');
                    }
                });
            });
        </script>

    </div>
</body>

</html>
