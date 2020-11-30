<!-- formulario de alta de producto -->
<form action="newProduct" method="POST" class="my-4 w-50 m-auto p-4">
    <div>
        <label>Name</label>
        <input name="name" type="text" class="form-control">
    </div>
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Brand</label>
                <input name="brand" type="text" class="form-control">
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label>Category</label>
                <select name="category" class="form-control"> 
                    {foreach from=$categories item=category}
                        <option value="{$category->id_category}"> {$category->name}  </option>
                    {/foreach}
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea name="details" class="form-control" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">New product</button>
    <button type="reset" class="btn btn-info">Blank</button>
</form>
