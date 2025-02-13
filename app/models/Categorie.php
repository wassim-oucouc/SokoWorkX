<?php

namespace app\models;

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

    public function findIdbyname($name)
    {
        $query = "SELECT * From cateégorie were nom = :nom";
        $smt
    }


}




?>