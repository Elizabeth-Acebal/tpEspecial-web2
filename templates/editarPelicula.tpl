{include file="header.tpl"}

<p class="parrafo p-3 mb-2 bg-danger text-white">Editar Pelicula</p>
<form class="p-3 mb-2 bg-white text-dark" action="" method="POST" class="my-4">
  <input class="text-light bg-dark rounded-top parrafo" type="text" placeholder="Titulo" name="titulo" value="">
  <input class="text-light bg-dark rounded-top parrafo" type="text" placeholder="Descripción" name="descripcion" value="">
  <input class="text-light bg-dark rounded-top parrafo" type="text" placeholder="Director" name="director" value="">
   <input class="text-light bg-dark rounded-top parrafo" type="text" placeholder="Calificación" name="calificacion" value="">
   <select class="text-light bg-dark rounded-top parrafo" name="id_genero">
    {foreach from=$generos item=genero}
      <option value="{$genero->id_genero}">{$genero->genero}</option>
    {/foreach}
  </select>
  <button type='submit' class='btn btn-secondary parrafo'>Editar Pelicula</button>
</form>

{include file ="footer.tpl"}