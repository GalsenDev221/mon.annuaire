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

<form class="form" action="#" method="POST">
    <input class="input" type="text" placeholder="Rechercher un contact">
    <button type="button" class="btn btn--primary">Rechercher</button> <!-- using type button for now -->
</form>

<section class="cards">
    <?php for ($i = 0; $i < 7; $i++): ?>
        <div class="card">
            <div class="card__header">
                <img class="card__header__avatar" src="/img/avatar.png" alt="contact's avatar">
                <div class="card__header__name">
                    <h2>Prénom ici</h2>
                    <h2>Nom ici</h2>
                </div>
            </div>
            <div class="card__action">
                <a href="/contact/12" class="btn btn--primary">Afficher</a>
                <a href="#" class="btn btn--secondary">Modifier</a>
            </div>
        </div>
    <?php endfor; ?>
</section>
