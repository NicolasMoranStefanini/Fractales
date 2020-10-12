    {include 'header.tpl'}
        <div class="mt-5 w-50 mx-auto">
            <form method="POST" action="new-user" class="needs-validation" >
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" requiered>
                </div>
                <div
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control"name="email" aria-describedby="emailHelp" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control"  name="password" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm password</label>
                    <input type="password" class="form-control" name="confirm-password" required>
                </div>
                <div class="form-group hide" id="form">
                    <label for="pass-admin">Key</label>
                    <input type="password" class="form-control" id="pass-admin" name="key">
                </div>

                {if $error}
                    <div class="alert alert-danger" id="error">
                    {$error}
                    </div>
                {/if}
                <div>
                <button type="submit" class="btn btn-success w-25 " id="button">Sign me up!</button>
                <button type="button" class="btn btn-primary w-25" id="admin">Admin</button>
                </div>
            </form>
            
            <p class="m-2">Already a member? <a href="login"> Log In </a> </p>
            </div>
            <script src="{BASE_URL}js/main.js"></script>
{include file='footer.tpl'}