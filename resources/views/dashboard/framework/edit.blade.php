@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-error')    
 
<form action="{{ route('framework.update',$framework->id) }}" method="POST">
    @method('PUT')
    @include('dashboard.framework._form')
</form>
<br>

<form action="{{ route("framework.tutorial",$framework) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col">
            <input type="file" name="tutorial" class="form-control">
        </div>
        <div class="col">
            <input type="submit" class="btn btn-primary" value="Subir">
        </div>
    </div>
</form>

@endsection 