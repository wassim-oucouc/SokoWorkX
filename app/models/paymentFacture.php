<?php

class paymentFacture{
    private $id;
    private $Budget;
    private $Proposition;
    private $users;

    public function __construct(){}

    /**
     * @return mixed
     */
    public function getProposition()
    {
        return $this->Proposition;
    }

    /**
     * @param mixed $Proposition
     */
    public function setProposition($Proposition): void
    {
        $this->Proposition = $Proposition;
    }

    /**
     * @return mixed
     */
    public function getBudget()
    {
        return $this->Budget;
    }

    /**
     * @param mixed $Budget
     */
    public function setBudget($Budget): void
    {
        $this->Budget = $Budget;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param mixed $users
     */
    public function setUsers($users): void
    {
        $this->users = $users;
    }





}