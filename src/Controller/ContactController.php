<?php

namespace App\Controller;

use Core\Controller;

/**
 * Class ContactController
 *
 * @author Abdoulaye NDOYE <pa.ndoye@outlook.fr>
 */
class ContactController extends Controller
{
    public function index()
    {
        return $this->render('contact/index.php', [
            'style' => 'home.css', // css file to apply on this view
            'title' => 'Accueil', // the title tag in our view
        ]);
    }

    public function add()
    {
        return $this->render('contact/add.php', [
            'style' => 'contact-add.css',
            'title' => 'Ajout de contact',
        ]);
    }

    public function show($id)
    {
        return $this->render('contact/show.php', [
            'style' => 'contact-details.css',
            'title' => 'Détails du contact',
            'id' => $id,
        ]);
    }
}
