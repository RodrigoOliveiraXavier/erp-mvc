<html>

<head>
  <title>SISTEMA ERP - MVC</title>
  <link rel="stylesheet" href=<?='template/'.APPLICATION['general']['template'].'/css/style.css'?> />

  <?php 
    if (isset($_SESSION['logged']) && $_SESSION['logged']) {
  ?>
    <a href=<?=URI_BASE.'logout'?>>Logout</a>
  <?php
    }
  ?>
</head>

<body>
