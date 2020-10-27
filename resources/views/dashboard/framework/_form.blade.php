@csrf
    <div class="form-group">
        <label for="name">Nombre</label>
        <input class="form-control"type="text" name="name" id="name" value="{{ old('name', $framework->name) }}">
    </div>

    <div class="form-group">
        <label for="version">Version</label>
        <input class="form-control"type="text" name="version" id="version" value="{{ old('version', $framework->version) }}">
    </div>

    <div class="form-group">
        <label for="programming_language">Lenguaje programacion</label>
        <input class="form-control"type="text" name="programming_language" id="programming_language" value="{{ old('programming_language', $framework->programming_language) }}">
    </div>


    <div class="form-group">
        <label for="multi_platform">es multiplataforma</label>
        <select type="text" name="multi_platform" id="multi_platform" value="{{ old('multi_platform', $framework->multi_platform) }}">
            <option value="yes">si</option>
            <option value="not">no</option>
        </select>
    </div>

    <div class="form-group">
        <label for="mobile_web_development"> desarrollo </label>
        <select type="text" name="mobile_web_development" id="mobile_web_development" value="{{ old('mobile_web_development', $framework->mobile_web_development) }}">
            <option value="mobile">movil</option>
            <option value="web">web</option>
        </select>
    </div>

    <div class="form-group">
        <label for="category_id">Categorias </label>
        <select type="text" name="category_id" id="category_id"> 
           @foreach($categories as $name => $id)
               <option {{ $framework->category_id == $id ? 'selected="selected"': ''}}
                value="{{ $id }}">{{ $name }}</option>
           @endforeach
        </select>
    </div>


    <div class="form-group">
        <label for="description">Descripcion</label>
        <textarea class="form-control"name="description" id="description" rows="5">
            {{ old('description', $framework->description) }}
        </textarea>
    </div>
<input class="btn btn-primary" type="submit" value="Aceptar">
 