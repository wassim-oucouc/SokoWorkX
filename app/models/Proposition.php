<?php
namespace app\models;


class Proposition
{
    private $Id;
    private $Montantdevis;
    private $Description;
    private $dureeestimee;
    private $status;
    private $datesoumission;
    private Publication $Publication;


    public function __construct()
    {

    }

    public function GetID()
    {
        return $this->Id;
    }
    public function GetMontantDevis()
    {
        return $this->Montantdevis;
    }
    public function GetDescrption()
    {
        return $this->Description;
    }
    public function GetDureeEstimee()
    {
        return $this->dureeestimee;
    }
    public function GetStatus()
    {
        return $this->status;

    }
    public function Getdatesoumission()
    {
       return  $this->datesoumission;

    }
    public function GetPublication()
    {
        return $this->Publication;
    }
    public function SetID($id)
    {
         $this->Id = $id;
    }
    public function SetMontantDevis($montant)
    {
         $this->Montantdevis = $montant;
    }
    public function SetDescrption($description)
    {
         $this->Description = $description;
    }
    public function SetDureeEstimee($duree)
    {
         $this->dureeestimee = $duree;
    }
    public function SetStatus($status)
    {
         $this->status = $status;

    }
    public function Setdatesoumission($date)
    {
         $this->datesoumission = $date;

    }
    public function SetPublication($publication)
    {
         $this->Publication = $publication;
    }
}

?>