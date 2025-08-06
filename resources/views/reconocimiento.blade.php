<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reconocimientos</title>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite(['resources/js/modules/reconocimiento.js', 'resources/scss/reconocimiento.scss'])

</head>
<body id="fondo">
    <div class="encabezado">
        @include('partials.botones._btn-regresar')
        <h1>Reconocimientos</h1>
    </div>
    <span class="linea" style="background: #1CB698"></span>
    <section class="galeria">
        @for ($i = 1; $i <= 6; $i++)
        <a href="#image{{ $i }}">
            <img src="{{asset('images/reconocimientos/' . $i . '.jpg')}}" alt="Reconocimiento {{ $i }}">
        </a>
        @endfor
    </section>

    @for ($i = 1; $i <= 44; $i++)
    <!--Target para el elemento {{ $i }}-->
    <article class="light-box" id="image{{ $i }}">
        <a href="#image{{ $i == 1 ? 6 : $i - 1 }}" class="next"><i class="fa-solid fa-arrow-left"></i></a>
        <img src="{{asset('images/reconocimientos/' . $i . '.jpg')}}" alt="Reconocimiento {{ $i }}">
        <a href="#image{{ $i == 6 ? 1 : $i + 1 }}" class="next"><i class="fa-solid fa-arrow-right"></i></a>
        <a href="#" class="close"><i class="fa-solid fa-xmark"></i></a>
    </article>
    @endfor

    <script src="https://kit.fontawesome.com/1fa282908d.js" crossorigin="anonymous"></script>
</body>
</html>