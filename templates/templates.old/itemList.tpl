{if isset($smarty.session.EMAIL_USER) && $smarty.session.ADMIN == '1'}
    {include 'headerAdmin.tpl'}
    {else}
    {include 'header.tpl'}
{/if}



        <h1 class="text-white w-50 m-auto">Productos</h1>

        <ul class='list-group w-50 m-auto'>
            {foreach from=$items item=item}
            <li class='btn btn-dark list-group-item d-flex justify-content-between'>
                <div class='info text-muted'>
                    <strong>{$item->brand}</strong> {$item->name}
                </div>
                
                 <div class='actions'>
                    <a class='btn btn-info btn-sm' href="watch/{$item->id}">MORE INFORMATION</a>

                </div> 
            </li>
            {/foreach}
        </ul>


    {include file='footer.tpl'}
