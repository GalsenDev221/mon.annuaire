<!-- todo: ajouter des profils -->
<div class="hero">
    <div class="hero__title">
        <h1>Bienvenue sur <br>
            <span>Galsen Annuaire</span>
        </h1>
    </div>
    <div class="hero__desc">
        <p>Cet annuaire téléphonique est un petit projet réalisé par les membres de Galsen Dev.</p>
    </div>
</div>

<form class="form" action="/search" method="POST">
    <input class="input" type="text" name="prenom" placeholder="Rechercher un contact (par prénom)">
    <button class="btn btn--primary">Rechercher</button>
</form>

<section class="cards">
    <?php if (!empty($params['contacts'])): ?>
        <?php foreach ($params['contacts'] as $contact): ?>
            <div class="card">
                <div class="card__header">
                    <img class="card__header__avatar" src="/img/avatar.png" alt="contact's avatar">
                    <div class="card__header__name">
                        <h2><?= $contact['prenom']?></h2>
                        <h2><?= $contact['nom']?></h2>
                    </div>
                </div>
                <div class="card__action">
                    <a href="/contact/<?= $contact['id']?>" class="btn btn--primary">Afficher</a>
                    <a href="/edit/contact/<?= $contact['id']?>" class="btn btn--secondary">Modifier</a>
                </div>
            </div>
        <?php endforeach ?>
    <?php else: ?>
        <h2>Pas de contacts</h2>
    <?php endif ?>
</section>
