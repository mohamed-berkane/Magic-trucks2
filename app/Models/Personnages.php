<?php
namespace App\Models;
use App\Utils\Database;
use App\Models\CoreModel;
use \PDO;

class Personnages extends CoreModel {
    
    // 2) On déclare des propriétés qui correspondent aux colonnes de la tables
    protected $picture;
    protected $description;
    protected $type_id;

    /**
     * Méthode retournant la liste de toutes les marques
     *
     * @return personnages[]
     */
    public function findAll() {
        // 1) On déclare la requete SQL
        $sql = 'SELECT *
         FROM `character` 
         order by name
        ';

        // 2) On récupère l'objet PDO
        $pdo = Database::getPDO();

        // 3) On execute la requete
        $pdoStatement = $pdo->query($sql);

        // 4) On récupère les résultats
        // Un tableau d'objets de la classe personnages
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\Models\Personnages');

        // 5) On retourne le résultat
        return $results;
    }
    public function find($id) {
        // 1) On déclare la requete SQL
        $sql = "SELECT *
         FROM `character` 
         where id = $id
        ";

        // 2) On récupère l'objet PDO
        $pdo = Database::getPDO();

        // 3) On execute la requete
        $pdoStatement = $pdo->query($sql);

        // 4) On récupère les résultats
        // Un tableau d'objets de la classe personnages
        $results = $pdoStatement->fetchObject('App\Models\Personnages');

        // 5) On retourne le résultat
        return $results;
    }


    

    /**
     * Get the value of picture
     */ 
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */ 
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of type_id
     */ 
    public function getType_id()
    {
        return $this->type_id;
    }

    /**
     * Set the value of type_id
     *
     * @return  self
     */ 
    public function setType_id($type_id)
    {
        $this->type_id = $type_id;

        return $this;
    }
}
