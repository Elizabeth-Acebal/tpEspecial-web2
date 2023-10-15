{include file="header.tpl"}

<ul class="list-group">
    <p class="parrafo p-3 mb-2 bg-danger text-white"> Peliculas</p>
    {foreach from=$generoPeliculas item=$generoPelicula}
    <div>
        <li class='list-group-item d-flex justify-content-between align-items-center parrafo p-3 mb-2 bg-dark text-white'>
           <p> TITULO: {$generoPelicula->titulo} </p>  
        </li>
        <li>
           <p> DESCRIPCIÓN: {$generoPelicula->descripcion} </p> 
        </li>
        <li>    
           <p> DIRECTOR: {$generoPelicula->director} </p>
        </li>
        <li>    
            <p> CALIFICACIÓN: {$generoPelicula->calificacion} </P>
        </li>  
    </div>      
    {/foreach}
</ul>

{include file ="footer.tpl"}