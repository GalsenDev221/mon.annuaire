<div class="hero">
    <div class="hero__title">
        <h1>Formulaire de modification <br>
            <span>de contact</span>
        </h1>
    </div>
</div>

<form class="form" action="/edit/contact/<?= $params['contact']['id']?>" method="POST">
    <div class="row">
        <div class="col">
        <input type="text" value="<?= $params['contact']['prenom']?>" name="prenom" class="input" placeholder="Prénom">
        </div>
        <div class="col">
            <input type="text"  value="<?= $params['contact']['nom']?>" name="nom" class="input" placeholder="Nom">
        </div>
    </div>
    <div class="row last">
        <div class="col">
            <input type="text" value="<?= $params['contact']['telephone']?>" name="telephone" class="input" placeholder="Tel">
        </div>
        <div class="col">
            <input type="email" value="<?= $params['contact']['email']?>" name="email" class="input" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <input type="text" name="adresse" value="<?= $params['contact']['adresse']?>" class="input" placeholder="Adresse">
    </div>
    <div class="btn-group">
        <a href="/" class="btn btn--tertiary">Annuler</a>
        <button class="btn btn--primary">Modifier</button>
    </div>
</form>
