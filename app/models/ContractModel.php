<?php

class Contract{

    private $int;
    private $project;
    private $date;
    private Utilisateur $Client;
    private utilisateur $freelancer;

    public function __construct()
    {
        $this->Client = new Utilisateur();
        $this->freelancer = new Utilisateur();
    }

    public function getFreelancer(): utilisateur
    {
        return $this->freelancer;
    }

    public function setFreelancer(utilisateur $freelancer): void
    {
        $this->freelancer = $freelancer;
    }

    public function getClient(): Utilisateur
    {
        return $this->Client;
    }

    public function setClient(Utilisateur $Client): void
    {
        $this->Client = $Client;
    }


    public function getDate()
    {
        return $this->date;
    }


    public function setDate($date): void
    {
        $this->date = $date;
    }

    public function getProject()
    {
        return $this->project;
    }
    public function setProject($project): void
    {
        $this->project = $project;
    }

    public function getInt()
    {
        return $this->int;
    }
    public function setInt($int): void
    {
        $this->int = $int;
    }


}