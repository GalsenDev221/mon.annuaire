<?php

namespace Core;

/**
 * Class Model
 *
 * @author Abdoulaye NDOYE <pa.ndoye@outlook.fr>
 */
class Model
{
    public $db;

    public function __construct()
    {
        $this->db = new Database('mysql:dbname=galsen_annuaire;dbhost=localhost', 'P4P1', '');
    }
}
