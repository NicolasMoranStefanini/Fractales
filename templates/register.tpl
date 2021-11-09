
        <div class="px-5 py-5 mt-5 w-50 mx-auto bg-t">
            <h2>Nuevo usuario</h2>
            <form method="POST" action="new-user" class="needs-validation" >
                <div class="form-group">
                    <label for="username"></label>
                    <input type="text" placeholder="Nombre de usuario" class="form-control" name="username" requiered>
                </div>
                <div
                <div class="form-group">
                    <label for="email"></label>
                    <input type="email" class="form-control" placeholder="Correo electrónico" name="email" aria-describedby="emailHelp" required>
                </div>
                <div class="form-group">
                    <label for="password"></label>
                    <input type="password" class="form-control" placeholder="Contraseña" name="password" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password"></label>
                    <input type="password" class="form-control" placeholder="Repita la contraseña" name="confirm-password" required>
                </div>
               <!-- {if $error}
                    <div class="alert alert-danger" id="error">
                    {$error}
                    </div>
                {/if}
                --!>
                <div>
                <button type="submit" class="btn btn-success w-25 " id="button">Registrar</button>
                </div>
            </form>
            </div>
