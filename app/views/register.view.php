<div class="container">
    <form id="formulario" class="login" action="<?= URL ?>/login/validate" method="POST">
        <h1 class="login__title">Registre sus datos</h1>
        <div>
            <input type="text" class="login__input" name="nombre" placeholder="Nombre" value="<?= isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : '' ?>">
            <?php if (isset($errors) && array_key_exists('nombre_error', $errors)): ?>
                <span class="login__error"><?= $errors['nombre_error'] ?></span>
            <?php endif; ?>
        </div>
        <div>
            <input type="text" class="login__input" name="apellidos" placeholder="Apellidos" value="<?= isset($_POST['apellidos']) ? htmlspecialchars($_POST['apellidos']) : '' ?>">
            <?php if (isset($errors) && array_key_exists('apellidos_error', $errors)): ?>
                <span class="login__error"><?= $errors['apellidos_error'] ?></span>
            <?php endif; ?>
        </div>
        <div>
            <input type="text" class="login__input" name="correo" placeholder="Correo electrónico" value="<?= isset($_POST['correo']) ? htmlspecialchars($_POST['correo']) : '' ?>">
            <?php if (isset($errors) && array_key_exists('correo_error', $errors)): ?>
                <span class="login__error"><?= $errors['correo_error'] ?></span>
            <?php endif; ?>
        </div>
        <div>
            <input type="text" class="login__input" name="celular" placeholder="Celular" value="<?= isset($_POST['celular']) ? htmlspecialchars($_POST['celular']) : '' ?>">
            <?php if (isset($errors) && array_key_exists('celular_error', $errors)): ?>
                <span class="login__error"><?= $errors['celular_error'] ?></span>
            <?php endif; ?>
        </div>
        <div>
            <input type="password" class="login__input" name="contrasena" placeholder="Contraseña">
            <?php if (isset($errors) && array_key_exists('contrasena_error', $errors)): ?>
                <span class="login__error"><?= $errors['contrasena_error'] ?></span>
            <?php endif; ?>
        </div>
        <div>
            <input type="password" class="login__input" name="confirmar_contrasena" placeholder="Confirme su contraseña">
            <?php if (isset($errors) && array_key_exists('confirmar_contrasena_error', $errors)): ?>
                <span class="login__error"><?= $errors['confirmar_contrasena_error'] ?></span>
            <?php endif; ?>
        </div>
        <div class="login__panel">
            <button class="login__btn">Validar datos</button>
            <a href="<?= URL ?>/login" class="login__link">Ya tengo usuario</a>
        </div>        
    </form>
</div>
