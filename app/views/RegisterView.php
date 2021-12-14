<?php
$control = new Core\Controller();
$control->renderPartial('header');
?>

<h2>REGISTRAR</h2>
<form method="POST" action=<?= URI_BASE . 'register' ?>>
    <label for="register-name">Usuário:</label><br />
    <input type="text" id="register-name" name="name" value=<?= $name ?? null ?> ><br /><br />

    <label for="register-email">E-mail:</label><br />
    <input type="email" id="register-email" name="email" value=<?= $email ?? null ?> ><br /><br />

    <label for="register-pass">Senha:</label><br />
    <input type='password' id="register-pass" name='password' value=<?= $pass ?? null ?> ><br /><br />

    <input type='submit' value='Cadastrar' />
    <a href=<?= URI_BASE ?>>Voltar</a>
</form>

<?php
$control->renderPartial('footer');
?>