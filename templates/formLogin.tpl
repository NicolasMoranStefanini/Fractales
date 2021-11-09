    {include 'header.tpl'}

        <div class="row w-75 m-auto">

                <div class="col">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player src="https://assets6.lottiefiles.com/private_files/lf30_m6j5igxb.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop autoplay></lottie-player>
                </div>  

                <div class="col">
                    <div class=" needs-validation bg-t" novalidated>
                        <h2>Iniciar sesión</h2>
                        <form method="POST" action="verify">
                            <div class="form-group">
                                <label for="email"></label>
                                <input type="email" class="form-control" placeholder="Ingrese su correo electrónico." id="email" name="email" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="password"></label>
                                <input type="password" class="form-control" id="password" placeholder="Ingrese su contraseña." aria-describedby="passwordHelpInline" name="password">
                            </div>
                            {if $error}
                            <div class="alert alert-danger">
                                {$error}
                            </div>
                            {/if}
                            <button type="submit" class="btn btn-success">Ingresar</button>
                        </form>
                    </div>
                </div>
        </div>
                
    {include file='footer.tpl'}