@extends('dashboard.master')
@section('content')
   

<div class="form-group">
    <label for="name">Nombre</label>
    <input class="form-control"type="text" name="name" id="name" value="{{$framework->name}}">
</div>

<div class="form-group">
    <label for="version">Version</label>
    <input class="form-control"type="text" name="version" id="version" value="{{$framework->version}}">
</div>

<div class="form-group">
    <label for="programming_language">Lenguaje de programacion</label>
    <input class="form-control"type="text" name="programming_language" id="programming_language" value="{{$framework->programming_language}}">
</div>
<div class="form-group">
    <label for="multi_platform">es multiplataforma</label>
    <input class="form-control"type="text" name="multi_platform" id="multi_platform" value="{{$framework->multi_platform}}">
</div>
<div class="form-group">
    <label for="mobile_web_development">Permite el desarrollo web mobil</label>
    <input class="form-control"type="text" name="mobile_web_development" id="mobile_web_development" value="{{$framework->mobile_web_development}}">
</div>

<div class="form-group">
    <label for="description">descripcion</label>
    <textarea class="form-control"name="description" id="description" rows="5" >{{$framework->description}}
    </textarea> 
</div>


    <a href="{{ URL::previous()}}" class="btn btn-primary">regresar</a>


@endsection  