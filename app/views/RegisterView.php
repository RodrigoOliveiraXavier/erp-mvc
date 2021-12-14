<?php
$control = new Core\Controller();
$control->renderPartial('header');
?>

<h2>REGISTRO</h2>
<form method="POST" action=<?= URI_BASE . 'register'?>>
    Nome:<br />
    <input type="text" name="name" /><br /><br />

    E-mail:<br />
    <input type="email" name="email" /><br /><br />

    Senha:<br />
    <input type='password' name='password' /><br /><br />

    <input type='submit' value='Cadastrar' />
    <a href=<?= URI_BASE ?>>Voltar</a>
</form>

<?php
$control->renderPartial('footer');
?>