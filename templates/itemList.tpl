    {include 'header.tpl'}
        
        <ul class='list-group mt-5'>
            {foreach from=$items item=item}
            <li class='list-group-item d-flex justify-content-between'>
                <div class='info'>
                    <strong>{$item->brand}</strong> {$item->name}
                </div>

                 <div class='actions'>
                    <a class='btn btn-success btn-sm' href="watch/{$item->id}">MORE INFORMATION</a>

                </div> 
            </li>
            {/foreach}
        </ul>
    {include file='footer.tpl'}
