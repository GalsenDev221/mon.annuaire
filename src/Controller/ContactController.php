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
        $this->render('contact/index');
    }

    public function show($id)
    {
        /* echo 'JE suis le contact numero ' . $id; */
        $this->render('contact/show', compact('id'));
    }
}
