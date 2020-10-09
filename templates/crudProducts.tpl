{include 'headerAdmin.tpl'}
{include 'formProduct.tpl'}
<section>    
    <ul class='list-group w-50 m-3 m-auto'>
    {foreach from=$items item=item}
        <li class='btn btn-dark list-group-item d-flex justify-content-between'>
        <div class='info text-muted'>
            <strong>{$item->brand}</strong> {$item->name}
        </div>
        <div class='actions'>
            <a class='btn btn-info btn-sm' href="watch/{$item->id}">MORE INFORMATION</a>
            <a class='btn btn-success btn-sm' href="updateProduct/{$item->id}">UPDATE</a>
            <a class='btn btn-danger btn-sm' href="deleteProduct/{$item->id}">DELETE</a>
        </div> 
    </li>
    {/foreach}
    </ul>
</section>
{include file='footer.tpl'}