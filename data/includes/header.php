<?php
session_start();
$lang = $_GET['lang'] ?? $_SESSION['lang'] ?? 'fr';
$_SESSION['lang'] = $lang;
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
  <meta charset="UTF-8">
  <title>Chemical Color Service</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Chemical Color Service - Distributeur de matières premières chimiques en Tunisie">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="header">
  <div class="container header-inner">
    <div class="logo">Chemical Color Service</div>
    <nav>
      <a href="index.php?lang=<?= $lang ?>">Accueil</a>
      <a href="produits.php?lang=<?= $lang ?>">Produits</a>
      <a href="secteurs.php?lang=<?= $lang ?>">Secteurs</a>
      <a href="contact.php?lang=<?= $lang ?>">Contact</a>
      <span class="lang">
        <a href="?lang=fr">FR</a> | <a href="?lang=en">EN</a>
      </span>
    </nav>
  </div>
</header>
