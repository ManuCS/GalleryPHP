<div class="container">
    <div class="row">
        <div class="col-lg-12 text-left">
            <h2 class="mt-5">Nuevo autor</h2>
        </div>
    </div>

    <!-- Aquí pongo el formulario -->
    <div class="row form_new">
        <div class="col-lg-12 text-left">
            <div class="col-lg-2 text-left"></div>
            <div class="col-lg-10 text-left">
                <form action="actions/new.act.php" method="post">
                    <div class="form-group row">
                        <label for="display_name" class="col-lg-2 col-form-label">Nombre</label>
                        <div class="col-lg-4 text-left">
                            <input type="text" name="display_name" class="form-control" id="display_name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-lg-2 col-form-label">Email</label>
                        <div class="col-lg-6 text-left">
                            <input type="text" name="email" class="form-control" id="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-lg-2 col-form-label">Contraseña</label>
                        <div class="col-lg-4 text-left">
                            <input type="password" name="password" class="form-control" id="password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="enabled" class="col-lg-2 col-form-label">Activado</label>
                        <div class="col-lg-3 text-left">
                            <input type="checkbox" name="enabled" id="enabled">
                        </div>
                    </div>
                    
                    <br>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                    
                </form>
            </div>
            <div class="col-lg-2 text-left"></div>
        </div>
    </div>
</div>