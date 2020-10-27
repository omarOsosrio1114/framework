@extends('dashboard.master')
@section('content')

<a class="btn btn-success my-3 " href="{{ route('category.create') }}">
nueva categoria
</a>

<table class="table">
    <thead>
        <tr>
            <td>Id</td>
            <td>Nombre</td>
            <td>Descripcion</td>
            <td>Fecha creacion</td>
            <td>opciones</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>{{ $category->created_at->format('d-m-Y') }}</td>
                <td>
                    <a href="{{ route('category.show',$category->id) }}" class="btn btn-outline-primary">ver</a>
                    <a href="{{ route('category.edit',$category->id) }}" class="btn btn-outline-primary">editar</a>
                    <button data-toggle="modal" data-target="#deleteModal" data-id="{{ $category->id }}" class="btn btn-outline-danger">
                    borrar
                    </button>



                </td>
            </tr>
        @endforeach
    </tbody>

</table>
{{ $categories ->links() }}
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <p>¿seguro desea eliminar esta categoria?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
          <form action="{{ route('category.destroy', 0) }}" id="formDelete", data-action="{{ route('category.destroy', 0) }}" method="POST" >
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">eliminar</button>
        </form>
        </div>
      </div>
    </div>
  </div>
  <script>
      window.onload = function(){
        $('#deleteModal').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget)
        let id = button.data('id')
        let action = $('#formDelete').attr('data-action').slice(0)
        action += id
        $('#formDelete').attr('action', action)
        let modal = $(this)
        modal.find('.modal-title').text('Vas a eliminar el juego número ' + id)
        })
      }
    
</script>

@endsection