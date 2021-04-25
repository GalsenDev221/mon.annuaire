<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Annuaire</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href ="/styles/main.css" />
</head>
<body>
    <nav class="nav">
        <div class="nav__logo">
            <img src="/img/logo.svg" alt="Logo">
        </div>
        <div class="nav__links">
            <div class="nav__links__add">
                <img src="/img/plus.svg" alt="">
                <span>Ajouter un contact</span>
            </div>

            <div class="nav__links__contribute">
                <a href="https://github.com/Galsen-Dev-LAB/mon-annuaire" target="_blank"><img src="/img/github-brand.svg" alt=""></a>
            </div>
        </div>
    </nav>
    <main class="container">
        <?= $content ?>
    </main>
   <!-- <footer>Pied de page</footer> -->
</body>
</html>