<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Residencia Geriatrico</title>
    </head>
    <body>
       <a href="{{ route('informacion') }}">Informacion</a>
       <a href="{{ route('conocenos') }}">Conocenos</a>
       <a href="{{ route('residentes') }}">Residentes</a>
       <div>
          @yield('contenido')
        </div>
    </body>
</html>
