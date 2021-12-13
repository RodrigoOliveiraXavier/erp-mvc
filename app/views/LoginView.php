<?php
$control = new Core\Controller();
$control->renderPartial('header');
?>

<h2>LOGIN</h2>
<form method="POST">
  E-mail:<br />
  <input type="email" name="email" value=<?= $email ?? null ?>><br /><br />

  Senha:<br />
  <input type='password' name='password' value=<?= $senha ?? null ?>><br /><br />

  <input type='submit' name='Entrar' />
  <a href=<?= URI_BASE . 'register' ?>>Cadastre-se</a>
</form>