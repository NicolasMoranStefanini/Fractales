<!-- formulario de alta de producto -->
<form action="newProduct" method="POST" class="my-4 w-50 m-auto p-4 bg-t" enctype="multipart/form-data">
    <h3 class="text-muted">Nuevo Producto</h3>
    <div>
        <label></label>
        <input name="name" placeholder="Nombre" type="text" class="form-control">
    </div>
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label></label>
                <input name="brand" placeholder="Marca" type="text" class="form-control">
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label></label>
                <select name="category" class="form-control"> 
                    {foreach from=$categories item=category}
                        <option value="{$category->id_category}"> {$category->name}  </option>
                    {/foreach}
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label></label>
        <textarea name="details" placeholder="Descripción del producto" class="form-control" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label></label>
        <input type="file" name="image" placeholder="Imagen" class="form-control" id="imageToUpload">
    </div>
    <button type="submit" class="btn btn-primary">Nuevo Producto</button>
    <button type="reset" class="btn btn-info">Borrar Campos</button>
</form>
