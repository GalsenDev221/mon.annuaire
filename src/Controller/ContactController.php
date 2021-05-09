<?php

namespace App\Controller;

use Core\Controller;
use App\Model\Contact;

/**
 * Class ContactController
 *
 * @author Abdoulaye NDOYE <pa.ndoye@outlook.fr>
 */
class ContactController extends Controller
{
    public function index()
    {
        $contacts = (new Contact())->allContact();

        return $this->render('contact/index.php', [
            'style' => 'home.css', // css file to apply on this view
            'title' => 'Accueil', // the title tag in our view,
            'contacts' => $contacts
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
        $contact = (new Contact())->findById($id);

        return $this->render('contact/show.php', [
            'style' => 'contact-details.css',
            'title' => 'Détails du contact',
            'contact' => $contact,
        ]);
    }

    public function store()
    {
        $contactToSave = $_POST;
        $result = (new Contact())->saveContact($contactToSave);

        if ($result) {
            header('Location: /');
        }
    }

    public function edit($id)
    {
        $contact = (new Contact())->findById($id);

        return $this->render('contact/edit.php', [
            'style' => 'contact-add.css',
            'title' => 'Modification de contact',
            'contact' => $contact
        ]);
    }

    public function update($id)
    {
        $contact = $_POST;
        $result = (new Contact())->updateContact($contact, $id);

        if ($result) {
            header('Location: /');
            die();
        }
    }

    public function destroy($id)
    {
        $result = (new Contact())->deleteContact($id);

        if ($result) {
            header('Location: /');
            die();
        }
    }

    public function search()
    {
        $searchTerm = $_POST['prenom'];
        $contacts = (new Contact())->searchContact($searchTerm);

        return $this->render('contact/index.php', [
            'style' => 'home.css', // css file to apply on this view
            'title' => 'Résultats de la recherche', // the title tag in our view,
            'contacts' => $contacts
        ]);
    }
}
