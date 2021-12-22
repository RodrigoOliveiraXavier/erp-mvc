<html>

<head>
  <title>SISTEMA ERP - MVC</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="lib/font-awesome/css/all.min.css">
  <link rel="stylesheet" href=<?= 'template/' . APPLICATION['general']['template'] . '/css/Style.css' ?> />

  <?php
  if (isset($_SESSION['logged']) && $_SESSION['logged']) {
  ?>
    <a href=<?= URI_BASE . 'logout' ?>>Logout</a>
  <?php
  }
  ?>
</head>

<body>