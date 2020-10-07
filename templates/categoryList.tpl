{include 'header.tpl'}
    <ul class='list-group w-50 m-auto mt-3'>
        {foreach from=$categorys item=category}
        <li  class='btn btn-dark list-group-item d-flex'>
            <a  class='text-muted' href="category/{$category->id}"> <strong>{$category->name}</strong> </a>
        </li>
        {/foreach}
    </ul>
{include file='footer.tpl'}
