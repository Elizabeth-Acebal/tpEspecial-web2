<head>
<link rel="stylesheet" href="{$BASE_URL}/css/style.css"> 
</head>

{include file="header.tpl"}


<ul class="list-group">
    <p class="parrafo p-3 mb-2 bg-danger text-white">Peliculas</p>
    {foreach from=$peliculas item=$pelicula}
        <li class='list-group-item d-flex justify-content-between align-items-center text-light bg-dark rounded-top parrafo'>
            {$pelicula->titulo} - <a href="peliculasPorGenero/{$pelicula->id_genero}" class="text-center centered-link">{$pelicula->genero}</a> <a href="peliculaDetalles/{$pelicula->pelicula_id}" class="centered-link">Detalles</a>
            {if !isset($smarty.session.USUARIO_ID)}
            {else}
                <div class="ml-auto">
                    <a href='formEditarPelicula/{$pelicula->pelicula_id}' type='button' class='btn btn-primary'>Editar</a>
                    <a href='eliminarPelicula/{$pelicula->pelicula_id}' type='button' class='btn btn-primary'>Eliminar</a>
                </div>
            {/if}
        </li>
    {/foreach}
</ul>

{if !isset($smarty.session.USUARIO_ID)}
{else}
  {include file="agregarPelicula.tpl"}
{/if}

{include file ="footer.tpl"}