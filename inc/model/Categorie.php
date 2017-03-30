<?php
namespace Inc\Model;
class Categorie {
	private $id;
	private $nom;

	public function __construct($id, $nom) {
		$this->id = $id;
		$this->nom = $nom;
	}

	public function getId() {
		return $this->id;
	}

	public function getNom() {
		return $this->nom;
	}

        public static function get($categorieId) {
            global $pdo;        
            $sql = '
                    SELECT cat_id, cat_nom
                    FROM categorie
                    WHERE cat_id = :catId                 
                    ';
                    
            $pdoStatement = $pdo->prepare($sql);
            $pdoStatement->bindValue(':catId', $categorieId);
            

            if ($pdoStatement->execute() === false) {
                print_pre($pdoStatement->errorInfo());
            } else {
                $row = $pdoStatement->fetch(\PDO::FETCH_ASSOC);
                if (!empty($row)) {
//$id, $nom
                    $currentObject = new Categorie(
                            $row['cat_id'],                            
                            $row['cat_nom']
                    );
                    return $currentObject;
                }
            }
            return false;
            
         }
            
        public static function getAll() {
            global $pdo;
            $sql = '
                    SELECT categorie.cat_id, cat_nom, count(*) as nb
                    FROM categorie
                    INNER JOIN film ON film.cat_id = categorie.cat_id
                    GROUP BY categorie.cat_id, cat_nom
                    ORDER BY nb DESC
                    LIMIT 0,4
            ';
            $pdoStatement = $pdo->query($sql);
            if ($pdoStatement && $pdoStatement->rowCount() > 0) {
                    return($pdoStatement->fetchAll());
            }            
        }
        
}