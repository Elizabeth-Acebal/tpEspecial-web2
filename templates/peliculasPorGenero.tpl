{include file="header.tpl"}

<ul class="list-group">
    <p class="parrafo p-3 mb-2 bg-danger text-white"> Peliculas</p>
    {foreach from=$generoPeliculas item=$generoPelicula}
        <li class='list-group-item d-flex justify-content-between align-items-center parrafo p-3 mb-2 bg-dark text-white'>
            <span>    {$generoPelicula->titulo}  - {$generoPelicula->descripcion} -  {$generoPelicula->director}-{$generoPelicula->calificacion}
           </span>
        </li>
    {/foreach}
</ul>

{include file ="footer.tpl"}