{include 'header.tpl'}
    <h1 class="text-white w-50 m-auto">Categories</h1>
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
 