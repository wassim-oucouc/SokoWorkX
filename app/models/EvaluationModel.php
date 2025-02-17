<?php


class Evaluation{


    private $id;
    private $note;
    private $date;
    private $user;
    private $userId;


    public function getUserId()
    {
        return $this->userId;
    }
    public function setUserId($userId): void
    {
        $this->userId = $userId;
    }


    public function getId()
    {
        return $this->id;
    }
    public function setId($id): void
    {
        $this->id = $id;
    }
    public function getNote()
    {
        return $this->note;
    }
    public function setNote($note): void
    {
        $this->note = $note;
    }
    public function getDate()
    {
        return $this->date;
    }
    public function setDate($date): void
    {
        $this->date = $date;
    }
    public function getUser()
    {
        return $this->user;
    }


    public function setUser($user): void
    {
        $this->user = $user;
    }




}