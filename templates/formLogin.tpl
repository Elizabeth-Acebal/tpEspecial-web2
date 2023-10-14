{include file="header.tpl"}
<div class="mt-5 w-25 mx-auto p-2 mb-1  bg-danger rounded-top ">
    <form method="POST" action="validar">
        <div class="form-group">
            <label class="parrafo p-3 mb-2 bg-danger  text-white" for="email">Email</label>
            <input class="parrafo p-0 mb-1 bg-secondary  text-white" type="email" required class="form-control"
                id="email" name="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label class="parrafo p-3 mb-2 bg-danger text-white" for="password">Password</label>
            <input class="parrafo p-0 mb-1 bg-secondary text-white" type="password" required class="form-control"
                id="password" name="password">
        </div>

        {if $error}
            <div class="alert alert-danger mt-3">
                {$error}
            </div>

        {/if}
        <button type="submit" class='btn btn-secondary parrafo'>Iniciar sesión</button>
    </form>
</div>


{include file ="footer.tpl"}
