<table class="table">
    <thead>
        <tr>
            <td>Id</td>
            <td>Nombre</td>
            <td>Categoria</td>
            <td>Version</td>
            <td>Lenguaje de programacion</td>
            <td>multiplataforma</td>
            <td>desarrollo web movil</td>
            <td>Descripcion</td>
            <td>Fecha creacion</td>
            
        </tr>
    </thead>
    <tbody>+
        @foreach ($frameworks as $framework)
            <tr>
                <td>{{ $framework->id }}</td>
                <td>{{ $framework->name }}</td>
                <td>{{ $framework->category->name }}</td>
                <td>{{ $framework->version }}</td>
                <td>{{ $framework->programming_language }}</td>
                <td>{{ $framework->multi_platform }}</td>
                <td>{{ $framework->mobile_web_development }}</td>
                <td>{{ $framework->description }}</td>
                <td>{{ $framework->created_at->format('d-m-Y') }}</td>
                
            </tr>
        @endforeach
</table>