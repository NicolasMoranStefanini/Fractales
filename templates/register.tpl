    {include 'header.tpl'}
        <div class="mt-5 w-25 mx-auto">
            <form method="POST" action="new-user" class="needs-validation" novalidate>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm password</label>
                    <input type="password" class="form-control" name="confirm-password">
                </div>
                <div class="form-group hide" id="form">
                    <label for="pass-admin">Key</label>
                    <input type="number" class="form-control" id="pass-admin" name="pass-admin">
                </div>

                {if $error}
                <div class="alert alert-danger">
                    {$error}
                </div>
                {/if}
                <button type="submit" class="btn btn-success">Create account</button>
                <button type="button" class="btn btn-primary" id="admin">Admin</button>
            </form>
        </div>
        <script src="{BASE_URL}/js/admin.js"></script>
    {include file='footer.tpl'}