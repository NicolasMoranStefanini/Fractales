    {include 'header.tpl'}
        <div class="mt-5 px-5 py-5 w-50 mx-auto needs-validation bg-t" novalidated>
            <h2>Log In </h2>
            <form method="POST" action="verify">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" aria-describedby="passwordHelpInline" name="password">
                </div>
                {if $error}
                <div class="alert alert-danger">
                    {$error}
                </div>
                {/if}
                <button type="submit" class="btn btn-primary">Enter</button>
            </form>
        </div>
    {include file='footer.tpl'}