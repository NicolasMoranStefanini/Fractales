{if isset($smarty.session.EMAIL_USER) && $smarty.session.ADMIN == '1'}
    {include 'headerAdmin.tpl'}
    {else}
    {include 'header.tpl'}
{/if}
    <h2> {$category->name} </h2>  
        <ul class='list-group  w-50 m-auto mt-5'>
        {foreach from=$products item=product}
        <li class='list-group-item d-flex justify-content-between'>
            <div class='info'>
                <strong>{$product->brand}</strong> {$product->name}
            </div>
            <div class='actions'>
                <a class='btn btn-success btn-sm' href="watch/{$product->id}">More information</a>
            </div>
        </li>
        {/foreach}
    </ul>
{include file='footer.tpl'}