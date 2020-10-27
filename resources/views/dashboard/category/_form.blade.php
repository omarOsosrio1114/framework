@csrf
    <div class="form-group">
        <label for="name">Nombre</label>
        <input class="form-control"type="text" name="name" id="name" value="{{ old('name', $category->name) }}">
    </div>

    <div class="form-group">
        <label for="description">Descripcion</label>
        <textarea class="form-control"name="description" id="description1" rows="5">
            {{ old('description', $category->description) }}
        </textarea>
    </div>
<input class="btn btn-primary" type="submit" value="Aceptar">
 