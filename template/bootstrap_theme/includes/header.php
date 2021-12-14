<html>

<head>
  <title>SISTEMA ERP - MVC</title>
  <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="vendor/components/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
  <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>

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
