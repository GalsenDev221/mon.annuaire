<?php

namespace App\Model;

use Core\Model;

/**
 * Class Contact
 *
 * @author Abdoulaye NDOYE <pa.ndoye@outlook.fr>
 */
class Contact extends Model
{
    public function allContact()
    {
        $stmt = $this->db->getPDO()->query('SELECT * FROM contacts');
        return $stmt->fetchAll();
    }

    public function findById($id)
    {
        $stmt = $this->db->getPDO()->prepare('SELECT * FROM contacts WHERE id = :id');
        $stmt->bindValue('id', $id);
        $stmt->execute();

        return $stmt->fetch();
    }

    public function saveContact($contact)
    {
        $query = <<<SQL
        INSERT INTO contacts (prenom, nom, telephone, email, adresse)
        VALUES (:prenom, :nom, :telephone, :email, :adresse)
SQL;
        $stmt = $this->db->getPDO()->prepare($query);
        foreach ($contact as $key => $value) {
            $stmt->bindValue($key, $value);
        }

        return $stmt->execute();
    }

    public function updateContact($contact, $id)
    {
        $query = <<<SQL
        UPDATE contacts SET
        prenom = :prenom, nom = :nom, telephone = :telephone, email = :email, adresse = :adresse
        WHERE id = :id
SQL;

        $stmt = $this->db->getPDO()->prepare($query);
        foreach ($contact as $key => $value) {
            $stmt->bindValue($key, $value);
        }
        $stmt->bindValue('id', $id);

        return $stmt->execute();
    }

    public function deleteContact($id)
    {
        $stmt = $this->db->getPDO()->prepare('DELETE FROM contacts WHERE id = :id');
        $stmt->bindValue('id', $id);

        return $stmt->execute();
    }

    public function searchContact($prenom)
    {
        $stmt = $this->db->getPDO()->prepare('SELECT * FROM contacts WHERE prenom LIKE :prenom');
        $stmt->bindValue('prenom', "%$prenom%");
        $stmt->execute();

        return $stmt->fetchAll();
    }
}
