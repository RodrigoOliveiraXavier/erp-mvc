<?php
Core\Application::renderPartial('header');
?>

<head>
  <link rel="stylesheet" href=<?= 'template/' . APPLICATION['general']['template'] . '/css/LoginStyle.css' ?> />
</head>

<div id="login-container">
  <div id="login-container-content">
    <iframe src=<?= URI_BASE . 'content-login' ?> frameborder="0" width="100%" height="100%"></iframe>
  </div>
  <div id='login-container-form'>
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
      <a class='btn btn-light' role='button' href=<?= URI_BASE . 'register' ?>>Cadastre-se</a>
    </form>
  </div>
</div>

<?php
Core\Application::renderPartial('footer');
?>