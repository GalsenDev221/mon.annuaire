<?php

namespace App\Controller;

use Core\Controller;

require __DIR__ . '/../../vendor/autoload.php';

/**
 * Class ContactController
 *
 * @author Abdoulaye NDOYE <pa.ndoye@outlook.fr>
 */
class ContactController extends Controller
{
    public function index()
    {
        return $this->render('contact/index.php',["name"=>"jules jacques coly"]);
    }

    public function show($id)
    {
        echo "Je suis le contact numero $id";
    }
}
