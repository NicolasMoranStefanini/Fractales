{include 'header.tpl'}
<section>    
<ul class='list-group w-50 m-3 m-auto'>
<h2 class="text-dark">Usuarios</h2>
    {foreach from=$users item=user}
        <li class='list-group-item d-flex justify-content-between'>
        <div class='info text-muted'>
            <strong>{$user->nombre}</strong>
        </div>
        <div class='actions'>
            {if $user->admin == 1}
                <a class='btn btn-success btn-sm' href="toggleAdmin/{$user->id}">ADMIN</a>
            {/if}
            {if $user->admin == 0 }
                <a class='btn btn-info btn-sm' href="toggleAdmin/{$user->id}">USER</a>
            {/if}
            <a class='btn btn-danger btn-sm' href="deleteUser/{$user->id}">DELETE</a>
        </div> 
    </li>
    {/foreach}
    </ul>
</section>
{include file='register.tpl'}
{include file='footer.tpl'}