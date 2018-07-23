@extends('templates')
@section('contenido')
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('residentes.registrar') }}" class="btn btn-success">Nuevo<i class="fa fa-plus"></i></a>
        <table class="table table-bordered table-hover">
            <caption>Residentes</caption>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                </tr>
            </thead>
            <tbody>
                 @foreach ($residentes as $residente)
                    <tr>
                        <td>{{ $residente->id }}</td>
                        <td>{{ $residente->nombre }}</td>
                        <td>{{ $especialidad->apellido }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection@extends('templates')
@section('contenido')

<h1>{{ $titulo }}</h1>
<he>{{ $sub_titulo }}</h3>
<p><a href="{{ route('residentes.registrar') }}">Nuevo</a></p>


@endsection