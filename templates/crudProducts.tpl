{include 'header.tpl'}
<section>    
<ul class='list-group w-50 m-3 m-auto'>
<h2 class="text-dark">ABM Productos</h2>
{foreach from=$items item=item}
    <li class='btn btn-dark list-group-item d-flex justify-content-between'>
    <div class='info text-muted'>
    <strong>{$item->brand}</strong> {$item->name}
    </div>
    <div class='actions'>
    <a class='btn btn-info btn-sm' href="watch/{$item->id}">MAS INFORMACION</a>
    <a class='btn btn-success btn-sm' href="updateProduct/{$item->id}">MODIFICAR</a>
    <a class='btn btn-danger btn-sm' href="deleteProduct/{$item->id}">ELIMINAR</a>
    </div> 
    </li>
{/foreach}
</ul>
</section>
{include 'formProduct.tpl'}
{include file='footer.tpl'}