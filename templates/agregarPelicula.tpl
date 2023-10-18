<p class="parrafo p-3 mb-2 bg-secondary text-white">Agregar Pelicula</p>
<form class="p-3 mb-2 bg-white text-dark" action="agregarPelicula" method="POST" class="my-4">
    <input class="text-light bg-dark rounded-top parrafo" type="text" placeholder="Titulo" name="titulo" value="">
    <input class="text-light bg-dark rounded-top parrafo" type="text" placeholder="descripcion" name="descripcion" value="">
    <input class="text-light bg-dark rounded-top parrafo" type="text" placeholder="director" name="director" value="">
    <input class="text-light bg-dark rounded-top parrafo" type="text" placeholder="Calificacion" name="calificacion" value="">
    <select class="text-light bg-dark rounded-top parrafo" name="id_genero">
      {foreach from=$generos item=genero}
        <option value="{$genero->id_genero}">{$genero->genero}</option>
      {/foreach}
    </select>
 
  <button type='submit' class='btn btn-primary parrafo'>Agregar nueva Pelicula</button>

</form>

