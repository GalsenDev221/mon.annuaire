<?php

namespace App\Controller;

/**
 * Class ContactController
 *
 * @author Abdoulaye NDOYE <pa.ndoye@outlook.fr>
 */
class ContactController
{
    public function index()
    {
        echo "Bienvenue sur la page d'accueil";
    }

    public function show($id)
    {
        echo "Je suis le contact numero $id";
    }
}
