<div class="container">
    <form id="formulario" class="login" action="<?= URL ?>/login/validate" method="POST">
        <h1 class="login__title">Ingresar al sistema</h1>
        <div>
            <input type="text" name="user" id="user" class="login__input" placeholder="Usuario" value="<?= isset($_POST['user']) ? htmlspecialchars ($_POST['user']) : '' ?>" >
            <?php
            if (isset($data['errors'])) {
                if (array_key_exists('user_error', $data['errors'])) { ?>
                <span class="login__error"><?= $data['errors']['user_error'] ?></span>
            <?php
                }
            }
            ?>
        </div>
        <div>
            <input type="password" name="password" id="password"class="login__input" placeholder="Contraseña">
            <?php
            if (isset($data['errors'])) {
                if (array_key_exists('password_error', $data['errors'])) { ?>
                <span class="login__error"><?= $data['errors']['password_error'] ?></span>
            <?php
                }
            }
            ?>
        </div>
        <div class="login__panel">
            <button class="login__btn" id="ingresar">Ingresar</button>
            <a href="<?= URL ?>/login/forgetpassword" class="login__link">¿Olvido su contraseña?</a>
        </div>
        <span class="login__separator"></span>
        <a href="<?= URL ?>/register" class="login__link login__link--center">Registrarme al sistema</a>
    </form>
</div>

<script src="<?= URL ?>/assets/js/login.js"></script>
