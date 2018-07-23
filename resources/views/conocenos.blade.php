@extends('templates')
@section('contenido')
    <form action="{{ route('conocenos.crear')}}" method="post" accept-charset="utf-8">
        {{ csrf_field() }}

        MENU<li><a href="menu"></li>
        Galeria<li><a href="galeria"></li>
        Servicios<li><a href="servicios"></li>
    </form>
    <p><a href="{{ route('informacion')}}">Volver al Inicio </a></p>

@endsection



