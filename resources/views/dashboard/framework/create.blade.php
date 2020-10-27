@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-error')    
 
<form action="{{ route('framework.store') }}" method="POST">
    @include('dashboard.framework._form')
</form>

@endsection 