
    {include 'header.tpl'}
        <h2 class="text-dark">Productos</h2>
        <ul class='list-group w-50 m-auto'>
            {foreach from=$items item=item}
            <li class='btn btn-dark list-group-item d-flex justify-content-between'>
                <div class='info text-muted'>
                    <strong>{$item->brand}</strong> {$item->name}
                </div>
                
                 <div class='actions'>
                    <a class='btn btn-info btn-sm' href="watch/{$item->id}">MÁS INFORMACIÓN</a>

                </div> 
            </li>
            {/foreach}
        </ul>


    {include file='footer.tpl'}
