<?php
$control = new Core\Controller();
$control->renderPartial('header');
?>

<head>
  <h1>Sistema ERP - MVC</h1>

  <hr />
</head>

<h2>LOGIN</h2>
<form method="POST" action=<?= URI_BASE ?>>
  <label for="login-name">Usuário:</label><br>
  <input type="text" id="login-name" name="name" value=<?= $name ?? null ?>><br /><br />

  <label for="login-pass">Senha:</label><br>
  <input type='password' id="login-pass" name='password' value=<?= $pass ?? null ?>><br /><br />

  <input type='submit' name='Entrar' />
  <a href=<?= URI_BASE . 'register' ?>>Cadastre-se</a>
</form>

<?php
$control->renderPartial('footer');
?>