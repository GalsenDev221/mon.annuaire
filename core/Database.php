<?php

namespace Core;

use PDO;

/**
 * Class Database
 *
 * @author Abdoulaye NDOYE <pa.ndoye@outlook.fr>
 */
class Database
{
    public PDO $pdo;
    public function __construct(public $dsn, public $dbuser, public $dbpwd)
    {
    }

    public function getPDO()
    {
        if (isset($this->pdo)) {
            return $this->pdo;
        }

        $this->pdo = new PDO($this->dsn, $this->dbuser, $this->dbpwd, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        return $this->pdo;
    }
}
