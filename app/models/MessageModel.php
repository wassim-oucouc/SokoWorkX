<?php

namespace app\models;
include_once('../../vendor/autoload.php');
use app\models\Utilisateur;
class message{

    private $id;
    private $Contenu;
    private $Receive;
    private Utilisateur $sender;
    private $Status;
    private $Date;

    public function __construct()
    {
        $this -> $sender = new Utilisateur();
    }

    public function getStatus()
    {
        return $this->Status;
    }
    public function setStatus($Status): void
    {
        $this->Status = $Status;
    }


    public function getDate()
    {
        return $this->Date;
    }


    public function setDate($Date): void
    {
        $this->Date = $Date;
    }


    public function getSender()
    {
        return $this->sender;
    }


    public function setSender($sender): void
    {
        $this->sender = $sender;
    }

    public function getReceive()
    {
        return $this->Receive;
    }


    public function setReceive($Receive): void
    {
        $this->Receive = $Receive;
    }


    public function getContenu()
    {
        return $this->Contenu;
    }

    public function setContenu($Contenu): void
    {
        $this->Contenu = $Contenu;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

}