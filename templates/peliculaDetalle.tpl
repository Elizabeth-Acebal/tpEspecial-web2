{include file="header.tpl"}


<ul class="list-group">
    <p class="parrafo p-3 mb-2 bg-danger text-white">Detalle</p>
   
    {foreach from=$peliculaDetalle item=$pelicula}
        <li class='list-group-item d-flex justify-content-between align-items-center parrafo p-3 mb-2 bg-dark text-white '>
             <p> {$pelicula->titulo} </p> 
        </li>
        <li>
            <p> Género: {$pelicula->genero} </p>
        </li>
         <li>
            <p> Descripción: {$pelicula->descripcion} </p> 
        </li>
         <li>
            <p> Director: {$pelicula->director} </p> 
        </li>
         <li>
            <p>  Calificación: {$pelicula->calificacion} </p> 
        </li>
         
        
    {/foreach}
   
</ul>


{include file ="footer.tpl"}