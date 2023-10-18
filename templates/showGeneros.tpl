{include file="header.tpl"}

<ul class="list-group">
    <p class="parrafo p-3 mb-2 bg-danger text-white">Generos</p>
   
    {foreach from=$generos item=$genero}
        <li class='list-group-item d-flex justify-content-between align-items-center text-light bg-dark rounded-top parrafo '>
           <a href="peliculasPorGenero/{$genero->id_genero}">{$genero->genero}</a>
              {if !isset($smarty.session.USUARIO_ID)}
             {else}
                <div class="ml-auto">
                    <a href='formEditarGenero/{$genero->id_genero}' type='button' class='btn btn-primary'>Editar</a>
                    <a href='eliminarGenero/{$genero->id_genero}' type='button' class='btn btn-primary'>Eliminar</a>
                </div>
            {/if}    

        </Li>  
    
    {/foreach}
</ul>

{if !isset($smarty.session.USUARIO_ID)}
{else}
{include file="agregarGenero.tpl"}
{/if}



{include file ="footer.tpl"}