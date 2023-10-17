{include file="header.tpl"}


<ul class="list-group">
    <p class="parrafo p-3 mb-2 bg-danger text-white">Detalle</p>
   
    {foreach from=$peliculaDetalle item=$pelicula}
    <li class="list-group-item d-flex justify-content-between align-items-center parrafo p-3 mb-2 bg-dark text-white">
        <div>
            <p><strong>Título:</strong> {$pelicula->titulo}</p>
            <p><strong>Género:</strong> {$pelicula->genero}</p>
            <p><strong>Descripción:</strong> {$pelicula->descripcion}</p>
            <p><strong>Director:</strong> {$pelicula->director}</p>
            <p><strong>Calificación:</strong> {$pelicula->calificacion}</p>
        </div>
    </li>
    {/foreach}
</ul>


{include file ="footer.tpl"}