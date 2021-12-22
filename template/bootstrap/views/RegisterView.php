<?php
$control = new Core\Controller();
$control->renderPartial('header');
?>

<head>
    <link rel="stylesheet" href=<?= 'template/' . APPLICATION['general']['template'] . '/css/LoginStyle.css' ?> />
</head>

<div id="login-container">
    <div id='login-container-form'>
        <h2>REGISTRAR</h2>
        <hr />
        <form method="POST" action=<?= URI_BASE . 'register' ?>>
            <div class="form-group">
                <label for="register-name">Usuário:</label><br />
                <input type="text" id="register-name" name="name" placeholder="Nome do usuário" value=<?= $name ?? null ?>><br /><br />

                <label for="register-email">E-mail:</label><br />
                <input type="email" id="register-email" name="email" placeholder="Email do usuário" value=<?= $email ?? null ?>><br /><br />

                <label for="register-pass">Senha:</label><br />
                <input type='password' id="register-pass" name='password' placeholder="Senha do usuário" value=<?= $pass ?? null ?>><br />
            </div>

            <button type='submit' class='btn btn-primary'>Cadastrar</button>
            <a class='btn btn-light' role='button' href=<?= URI_BASE ?>>Voltar</a>
        </form>
    </div>
</div>

<?php
$control->renderPartial('footer');
?>