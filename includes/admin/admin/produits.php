<?php
include '../includes/auth.php';

$file = '../data/produits.json';
$produits = json_decode(file_get_contents($file), true);

if ($_POST) {
    $produits[] = [
        "titre" => $_POST['titre'],
        "description" => $_POST['description']
    ];
    file_put_contents($file, json_encode($produits, JSON_PRETTY_PRINT));
    header("Refresh:0");
}
?>

<h2>Produits</h2>

<form method="post">
    <input name="titre" placeholder="Titre produit" required>
    <textarea name="description" placeholder="Description" required></textarea>
    <button>Ajouter</button>
</form>

<hr>

<?php foreach ($produits as $p): ?>
<div>
    <strong><?= $p['titre'] ?></strong>
    <p><?= $p['description'] ?></p>
</div>
<?php endforeach; ?>
