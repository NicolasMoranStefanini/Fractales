<form action="doUpdateCategory" method="POST" class='list-group w-50 m-3 m-auto'>
<div class=" list-group-item d-flex justify-content-between">  
    <div class="info text-muted d-flex justify-content-between">
        <input name="name" type="text" class="form-control w-50" value="{$category->name}">
        <input name="id" type="text" class="form-control w-25" value="{$category->id_category}" readonly>
    </div>
    <div class='actions'>
        <button type="submit" class='btn btn-success btn-sm'>EDIT</button>
        <button type="reset" class='btn btn-success btn-sm'>RESET</button>
    </div>
</div>
</form>