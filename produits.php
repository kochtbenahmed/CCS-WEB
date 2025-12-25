<?php include 'includes/header.php'; ?>

<section class="content">
    <div class="container">
        <h1>Nos Produits</h1>
        <div id="produits" class="grid"></div>
    </div>
</section>

<script>
fetch('data/produits.json')
  .then(response => response.json())
  .then(data => {
    const container = document.getElementById('produits');
    data.forEach(item => {
      container.innerHTML += `
        <div class="card">
          <h3>${item.titre}</h3>
          <p>${item.description}</p>
        </div>`;
    });
  });
</script>

<?php include 'includes/footer.php'; ?>
