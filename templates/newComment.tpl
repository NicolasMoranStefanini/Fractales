<form id="comment-form" class="py-4 px-4">
    <div class="row my-2">
        <div class="col">
            <input type="text" name="username" value="{$smarty.session.NAME}" disabled>
        </div>
        <div class="col">
            <input type="hidden" name="id-user" value="{$smarty.session.ID_USER}" disabled>
        </div>
    </div>
    <div class="form-inline"> 
        <div class="form-group">
            <textarea class="form-control" id="exampleFormControlTextarea1" name="commentText" rows="2" cols="60"></textarea>
        </div>
        <div class="form-group row mx-5">
            <div class="col">
                <select class="custom-select"  id="inlineFormCustomSelectPref rating" name="rating">
                    <option value="1">★☆☆☆☆</option>
                    <option value="2">★★☆☆☆</option>
                    <option value="3">★★★☆☆</option>
                    <option value="4">★★★★☆</option>
                    <option value="5" selected>★★★★★</option>
                </select>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-success">Send</button>
            </div>
        </div>
    </div>
</form>
