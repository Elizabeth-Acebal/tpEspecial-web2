{include file="header.tpl"}

<div class="mt-5 w-25 mx-auto">
    <form method="POST" action="verify">{*validate*}
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" required class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" required class="form-control" id="password" name="password">
        </div>

        {if $error}
            <div class="alert alert-danger">
                {$error}
            </div>
        {/if}
       
       
        <button type="submit" class="btn btn-primary mt-3">Entrar</button>
    </form>
</div>
{*VER ESTO
{if !isset($smarty.session.USER_ID)}
    {include file="showPeliculas.tpl"}
{else}
{/if}*}
{include 'templates/footer.tpl'}