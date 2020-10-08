{if isset($smarty.session.EMAIL_USER) && $smarty.session.ADMIN == '1'}
    {include 'headerAdmin.tpl'}
    {else}
    {include 'header.tpl'}
{/if}
        <ul class='list-group w-50 m-auto'>
            {foreach from=$items item=item}
            <li class='list-group-item d-flex justify-content-between'>
                <div class='info'>
                    <strong>{$item->brand}</strong> {$item->name}
                </div>

                 <div class='actions'>
                    <a class='btn btn-info btn-sm' href="watch/{$item->id}">MORE INFORMATION</a>

                </div> 
            </li>
            {/foreach}
        </ul>
    {include file='footer.tpl'}
