@extends('dashboard.master')
@section('content')
   

<div class="form-group">
    <label for="name">Nombre</label>
    <input class="form-control"type="text" name="name" id="name" value="{{$category->name}}">
</div>

<div class="form-group">
    <label for="description">descripcion</label>
    <textarea class="form-control"name="description" id="description" rows="5" >{{$category->description}}
    </textarea> 
</div>


    <a href="{{ URL::previous()}}" class="btn btn-primary">regresar</a>


@endsection  