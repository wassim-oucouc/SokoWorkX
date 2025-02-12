<?php

namespace app\models;
include_once('../../vendor/autoload.php');
use app\core\db\Database;
use app\models\Categorie;
use app\models\Utilisateur;

class Offer
{
    private $id;
    private $Title;
    private $Description;
    private $Budget;
    private $Photo;
    private $Duree;
    private $Status;
    private Categorie $Categorie;
    private Utilisateur $Client;
    private $clientId;
    private $categorieId;
    public function __construct()
    {
     $this->Client= new Utilisateur();
     $this->Categorie= new Categorie();
    }


    public function setCategorie($Categorie)
    {
        $this->Categorie = $Categorie;
    }
    public function getCategorie(){
        return $this->Categorie;
    }
    public function getCategorieId()
    {
        return $this->categorieId;
    }
    public function setCategorieId($categorieId): void
    {
        $this->categorieId = $categorieId;
    }
    public function getClientId()
    {
        return $this->clientId;
    }
    public function setClientId($clientId): void
    {
        $this->clientId = $clientId;
    }
    public function GetId()
    {
        return $this->id;

    }
    public function GetTitle()
    {
       return  $this->Title;
        
    }
    public function GetDescription()
    {
        return $this->Description;
    }
    public function GetBudget()
    {
        return $this->Budget;
        
    }
    public function GetPhoto()
    {
        return $this->Photo;
        
    }

    public function GetDuree()
    {
        return $this->Duree;

    }
    public function GetStatus()
    {
        return $this->Status;
        
    }

    public function GetClient()
    {
        return $this->Client;
    }
    public function findAllOffers(){
        try{
            $query = 'SELECT * FROM offers ;';
            $stmt = Database::getInstance()->getConnection()->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(\PDO::FETCH_CLASS,'Offer');
        }catch(\PDOException $e){
            echo'error:'.$e;
            $result = new Offer();
        }
        return $result;
    }

}
