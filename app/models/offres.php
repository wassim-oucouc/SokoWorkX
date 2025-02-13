<?php
require_once('../SokoWorkX/vendor/autoload.php');
use app\core\models\categorie;
use app\core\db\Database;

class offres
{
    private $id;
    private $Title;
    private $Description;
    private $Budget;
    private $Photo;
    private $Duree;
    private $Status;
    private categorie $Categorie;
    private client $client;


    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();

    }
    public function create() {
        try {
            $query = "INSERT INTO offers (title, description, budget, photo, duree, status, id_categorie, id_client) 
                      VALUES (:title, :description, :budget, :photo, :duree, :status, :id_categorie, :id_client)";
            $stmt = $this->db->prepare($query);

            $stmt->bindValue(':title', $this->GetTitle());
            $stmt->bindValue(':description', $this->GetDescription());
            $stmt->bindValue(':budget', $this->GetBudget());
            $stmt->bindValue(':photo', $this->GetPhoto());
            $stmt->bindValue(':duree', $this->GetDuree());
            $stmt->bindValue(':status', $this->GetStatus());
            $stmt->bindValue(':id_categorie', $this->GetCategorie());
            $stmt->bindValue(':id_client', $this->GetClient());

            $stmt->execute();
            return $this->db->lastInsertId();
        } catch (PDOException $error) {
            return $error->getMessage();
        }
    }

  
    public function getAll() {
        $stmt = $this->db->prepare("SELECT * FROM offers");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM offers WHERE id = :id");
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

   
    public function update($id) {
        try {
            $query = "UPDATE offers SET title = :title, description = :description, budget = :budget, 
                      photo = :photo, duree = :duree, status = :status WHERE id = :id";
            $stmt = $this->db->prepare($query);

            $stmt->bindValue(':title', $this->GetTitle());
            $stmt->bindValue(':description', $this->GetDescription());
            $stmt->bindValue(':budget', $this->GetBudget());
            $stmt->bindValue(':photo', $this->GetPhoto());
            $stmt->bindValue(':duree', $this->GetDuree());
            $stmt->bindValue(':status', $this->GetStatus());
            $stmt->bindValue(':id', $id);

            return $stmt->execute();
        } catch (PDOException $error) {
            return $error->getMessage();
        }
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM offers WHERE id = :id");
        $stmt->bindValue(':id', $id);
        return $stmt->execute();
    }




    public function GetId()
    {
        return $this->id;

    }
    public function GetTitle()
    {
       return  $this->GetTitle();
        
    }
    public function GetDescription()
    {
        return GetDescription();
    }
    public function GetBudget()
    {
        return GetBudget();
        
    }
    public function GetPhoto()
    {
        return GetPhoto();
        
    }

    public function GetDuree()
    {
        return GetDuree();

    }
    public function GetStatus()
    {
        return GetStatus();
        
    }

    public function GetCategorie()
    {
        return GetCategorie();
    }
    public function GetClient()
    {
        return $this->Client;
    }

    


}


?>