<?php
$control = new Core\Controller();
$control->renderPartial('header');
?>

<head>
  
</head>

<h2>LOGIN</h2>
<hr />
<form id="login-form" method="POST" action=<?= URI_BASE ?>>
  <div class="form-group">
    <label for="login-name">Usuário:</label><br>
    <input type="text" id="login-name" name="name" placeholder="Nome do usuário" value=<?= $name ?? null ?>><br /><br />
  
    <label for="login-pass">Senha:</label><br>
    <input type='password' id="login-pass" name='password' placeholder="Senha do usuário" value=<?= $pass ?? null ?>><br />
  </div>

  <button type='submit' class='btn btn-primary'>Entrar</button>
  <a href=<?= URI_BASE . 'register' ?>>Cadastre-se</a>
</form>

<?php
$control->renderPartial('footer');
?>