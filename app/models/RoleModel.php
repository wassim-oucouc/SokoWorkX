<?php

class Role extends Model {

    private $Id;
    private $Nom;

    public function __construct()
    {
    }

    function GetId()
    {
        return $this->Id;
    }

    function GetNom()
    {
        return $this->Nom;
    }

    function SetId($id)
    {
        $this->Id = $id;
    }

    function SetNom($Nom)
    {
        $this->Nom = $Nom;
    }

    

}