@extends('templates')
@section('contenido')
<div class="row">
  <div class="col-md-12">
        <form action="{{ route('residentes.reservar')}}" method="post" accept-charset="utf-8">
            {{ csrf_field() }}
            <div class="form-group">
                Residente:<input type="text" name="residente" class="form-control" value="" placeholder="">
            </div>
            <div class="form-group">
               Nombre:<input type="text" name="nombre" class="form-control" value="" placeholder="">
           </div>
           <div class="form-group">
               Apellido:<input type="text" name="apellido" class="form-control" value="" placeholder="">
           </div>
           <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
@endsection