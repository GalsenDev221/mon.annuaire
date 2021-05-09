<div class="contact">
    <div class="contact__name">
        <img src="/img/avatar.png" alt="Avatar">
        <h1><?= $params['contact']['prenom']?></h1>
        <h1><?= $params['contact']['nom']?></h1>
    </div>
    <div class="contact__details">
        <div class="contact__details__sections">
            <div class="tel">
                <span>Téléphone</span>
                <h2><?= $params['contact']['telephone']?></h2>
            </div>
            <div class="email">
                <span>Email</span>
                <h2><?= $params['contact']['email']?></h2>
            </div>
            <div class="addr">
                <span>Adresse</span>
                <h2><?= $params['contact']['adresse']?></h2>
            </div>
        </div>

        <div class="contact__details__action">
            <form method="POST" action="/contact/<?= $params['contact']['id']?>">
                <button class="btn btn--tertiary">Supprimer le contact</button>
            </form>
        </div>
    </div>
</div>
