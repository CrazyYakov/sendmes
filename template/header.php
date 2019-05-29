<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo  htmlspecialchars($pageTitle) ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="http://sendmes/template/css/register.css">
</head>
<body>
<div class="container">
<ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="index.php">Сообщения</a>
  </li>
  <?php if (isset($_SESSION['username'])) {          
    ?>
    <li class="nav-item">
    <a class="nav-link" href="index.php?action=logout">выход</a>
  </li>
  <?php }else{ ?>
  <li class="nav-item">
    <a class="nav-link" href="index.php?action=autohorization">Авторизация</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?action=registrion">Регистрация</a>
  </li>
  <?php }
if (isset($_SESSION['role'])){
  if ( $_SESSION['role'] == 'admin'){ ?>
<li class="nav-item">    
  <a class="nav-link" href="index.php?action=logout" >Админка</a>
</li> 
  <?php }} ?>
</ul>
<?php if (isset($status['status'])) echo  $status['status']; ?>