{if isset($smarty.session.EMAIL_USER) && $smarty.session.ADMIN == '1'}
  {include 'headerAdmin.tpl'}
  {else}
  {include 'header.tpl'}
{/if}
    <ul class='list-group w-50 m-auto mt-3'>
        {foreach from=$categorys item=category}
        <li  class='btn btn-dark list-group-item d-flex'>
            <a  class='text-muted' href="category/{$category->id_category}"> <strong>{$category->name}</strong> </a>
        </li>
        {/foreach}
    </ul>
{include file='footer.tpl'}
