{if isset($smarty.session.EMAIL_USER) && $smarty.session.ADMIN == '1'}
  {include 'headerAdmin.tpl'}
  {else}
  {include 'header.tpl'}
{/if}
    <ul class='list-group w-50 m-auto mt-3'>
        {foreach from=$categories item=category}
            <li class='btn btn-dark list-group-item d-flex justify-content-between'>
            <div class='info text-muted'>
                <strong>{$category->name}</strong>
            </div>
            <div class='actions'>
                <a class='btn btn-info btn-sm' href="category/{$category->id_category}">SHOW CATEGORY</a>
            </div> 
        </li>
        {/foreach}
    </ul>
{include file='footer.tpl'}
 