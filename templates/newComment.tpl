<div>
    <input type="text" id="username" value="{$smarty.session.NAME}" disabled>
    <form id="comment-form" class="form-inline py-3">
        <div class="form-group">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" cols="60"></textarea>
        </div>
        <div class="form-group row mx-5">
            <div class="col">
                <select class="custom-select"  id="inlineFormCustomSelectPref">
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
    </form>
</div>