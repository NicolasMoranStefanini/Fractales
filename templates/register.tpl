    {include 'header.tpl'}
        <div class="mt-5 w-50 mx-auto">
            <form method="POST" action="new-user" class="needs-validation" >
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" class="form-control" id="name" name="Username" requiered>
                </div>
                <div
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm password</label>
                    <input type="password" class="form-control" name="confirm-password" required>
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
                <div>
                <button type="submit" class="btn btn-success w-25 ">Sign me up!</button>
                <button type="button" class="btn btn-primary w-25" id="admin">Admin</button>
                </div>
            </form>
            
            <p class="m-2">Already a member? <a href="login"> Log In </a> </p>
            </div>
            <script src="{BASE_URL}js/main.js"></script>
            {include file='footer.tpl'}