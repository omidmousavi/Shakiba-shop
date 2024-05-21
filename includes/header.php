<?php
session_start();
?>
<!doctype html>
<html>
<head>
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Shakiba shop</title>

     <link href="css/style.css" rel="stylesheet" type="text/css" />

     <style type="text/css">

     </style>
</head>

<body>

     <header>   
          <!--
          <a href="index.php" class="site_logo">لوگوي سايت</a>
          -->
          <a href="index.php">صفحه ی اصلی</a>
          <?php
               if (isset($_SESSION["state_login"]) && $_SESSION["state_login"]===true) {
          ?>
               <a href="logout.php" >خروج از سایت <?php echo(" ({$_SESSION["realname"]}) ") ?></a>
          <?php
               } else { 
          ?>
               <a href="login.php">ورود به سايت</a>
               <a href="register.php">عضویت در سایت</a>
          <?php
               } 
          ?>	
          <a href="aboutus.php">درباره ما</a>
          <a href="contact.php">ارتباط با ما</a>
          <?php
               if (isset($_SESSION["state_login"]) && $_SESSION["state_login"]===true && $_SESSION["user_type"]=="admin") {
          ?>
               <a href="admin_products.php" >مدیریت محصولات</a>
               <a href="admin_manage_order.php" >مدیریت سفارشات</a>
          <?php
               }
          ?>
     </header>
	<main>