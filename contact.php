<?php include 'includes/header.php'; ?>

<section class="content">
    <div class="container">
        <h1>Contact</h1>

        <form id="contactForm">
            <input type="text" name="nom" placeholder="Nom" required>
            <input type="email" name="email" placeholder="Email" required>
            <textarea name="message" placeholder="Votre message" required></textarea>
            <button type="submit">Envoyer</button>
        </form>

        <div id="response"></div>
    </div>
</section>

<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();

    fetch('php/send-mail.php', {
        method: 'POST',
        body: new FormData(this)
    })
    .then(res => res.text())
    .then(data => {
        document.getElementById('response').innerHTML = data;
        this.reset();
    });
});
</script>

<?php include 'includes/footer.php'; ?>
