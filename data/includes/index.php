<?php
include 'includes/header.php';
$content = json_decode(file_get_contents("data/$lang/home.json"), true);
?>

<section class="hero">
  <div class="container">
    <h1><?= $content['hero_title'] ?></h1>
    <p><?= $content['hero_subtitle'] ?></p>
    <a class="btn" href="contact.php?lang=<?= $lang ?>">
      <?= $content['cta'] ?>
    </a>
  </div>
</section>

<section class="section light">
  <div class="container">
    <p class="about"><?= $content['about'] ?></p>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2><?= ($lang === 'fr') ? 'Nos domaines' : 'Our sectors' ?></h2>
    <div class="grid">
      <?php foreach ($content['domains'] as $d): ?>
        <div class="card"><?= $d ?></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
