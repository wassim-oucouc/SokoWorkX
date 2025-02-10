<?php

class Publication
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

    public function GetCategorie()
    {
        return $this->Categorie;
    }
    public function GetClient()
    {
        return $this->Client;
    }


}


?>