<?php

namespace app\models;
use app\core\db\Database;

include_once ('../../vendor/autoload.php');

class Categorie
{
    private $Id;
    private $Nom;
    private $Status;


    public function __construct()
    {

    }

    public function GetId()
    {
        return $this->Id;
    }

    public function GetNom()
    {
        return $this->Nom;
    }
    public function GetStatus()
    {
        return $this->Status;
    }
    public function GetCategorie()
    {
        return $this->Categorie;
    }

    public function SetId($id)
    {
        $this->Id = $id;
    }

    public function SetNom($nom)
    {
        $this->Nom = $nom;
    }
    public function SetStatus($status)
    {
        $this->Status = $status;
    }
    public function findById($id){
        try{
            $query ='SELECT * FROM categorie WHERE id =' . $id .";";
            $stmt = Database::getInstance()->getConnection()->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchobjects(Categorie::class);
        }catch (\PDOException $e){
            echo $e->getMessage();
            $result= new Categorie();
        }
        return $result;
    }


}

