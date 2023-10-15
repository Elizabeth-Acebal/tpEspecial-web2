<p class="parrafo p-3 mb-2 bg-secondary text-white">Agregar Genero</p>
<form class="p-3 mb-2 bg-white text-dark" action="agregarGenero" method="POST" class="my-4">
  <input class="text-light bg-dark rounded-top parrafo" type="text" placeholder="Genero" name="genero" value="">
   <select class="text-light bg-dark rounded-top parrafo" name="id_genero">
    {foreach from=$generos item=genero}
      <option value="{$genero->id_genero}">{$genero->genero}</option>
    {/foreach}
  </select>
 
  <button type='submit' class='btn btn-primary parrafo'>Agregar nuevo Genero</button>

</form>