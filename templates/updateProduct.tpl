<!-- formulario de modificacion de producto -->
{include 'headerAdmin.tpl'}
<form action="doUpdate" method="POST" class="my-4 w-50 m-auto p-4 bg-t">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Name</label>
                <input name="name" type="text" class="form-control" value="{$product->name}">
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label>Id</label>
                <input name="id" type="text" class="form-control" value="{$product->id}" readonly>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Brand</label>
                <input name="brand" type="text" class="form-control" value="{$product->brand}">
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label>Category</label>
                <select name="category" class="form-control"> 
                    {foreach from=$categories item=category}
                        {if $category->id_category == $product->id_category}
                            <option value="{$category->id_category}" selected> {$category->name}  </option>
                            {else}
                            <option value="{$category->id_category}"> {$category->name}  </option>
                        {/if}}
                    {/foreach}
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea name="details" class="form-control" rows="3">{$product->details}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update product</button>
    <button type="reset" class="btn btn-info">Reset</button>
</form>

{include file='footer.tpl'}