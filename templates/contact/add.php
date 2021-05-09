<div class="hero">
    <div class="hero__title">
        <h1>Formulaire d'ajout <br>
            <span>de contact</span>
        </h1>
    </div>
</div>

<form class="form" action="/store" method="POST">
    <div class="row">
        <div class="col">
            <input type="text" name="prenom" class="input" placeholder="Prénom">
        </div>
        <div class="col">
            <input type="text" name="nom" class="input" placeholder="Nom">
        </div>
    </div>
    <div class="row last">
        <div class="col">
            <input type="text" name="telephone" class="input" placeholder="Tel">
        </div>
        <div class="col">
            <input type="email" name="email" class="input" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <input type="text" name="adresse" class="input" placeholder="Adresse">
    </div>
    <div class="btn-group">
        <a href="/" class="btn btn--tertiary">Annuler</a>
        <button class="btn btn--primary">Ajouter</button>
    </div>
</form>
