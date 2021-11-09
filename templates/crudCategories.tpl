{include 'header.tpl'}

<section>    
<ul class='list-group w-50 m-3 m-auto'>
<h2 class="text-dark">ABM Categorias</h2>
{foreach from=$categories item=category}
    <li class='btn btn-dark list-group-item d-flex justify-content-between'>
        <div class='info text-muted'>
             <strong>{$category->name}</strong>
        </div>
        <div class='actions'>
            <a class='btn btn-info btn-sm' href="category/{$category->id_category}">MOSTRAR CATEGORIA</a>
            <a class='btn btn-success btn-sm' href="updateCategory/{$category->id_category}">MODIFICAR</a>
            <a class='btn btn-danger btn-sm' href="deleteCategory/{$category->id_category}">ELIMINAR</a>
        </div> 
    </li>
{/foreach} 
</ul>
</section>
{include 'formCategory.tpl'}
{if isset($id)&&isset($category)}
    {include 'formEditCategory.tpl'}
{/if}
{include file='footer.tpl'}